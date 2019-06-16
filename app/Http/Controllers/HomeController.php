<?php

namespace App\Http\Controllers;

use App\Mail\EmailTester;
use App\Models\SugestedEmails;
use Carbon\Carbon;
use Chumper\Zipper\Facades\Zipper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $emailContent;

    public function __construct()
    {
        $this->middleware('auth',  ['except' => array('removeOldEmails')]);
    }

    public function index()
    {
        $sugestedEmails = SugestedEmails::all()->pluck('email');
        return view('admin.dashboard.index', compact('sugestedEmails'));
    }

    public function prepareShipping(Request $request)
    {
        try{
            $uploadFiles = Zipper::make($request->file('upload-file'));

            $fileOriginalName = $request->file('upload-file')->getClientOriginalName();
            $fileOriginalName = explode(".", $fileOriginalName, 2)[0];

            $uploadFiles->extractTo("emails/$fileOriginalName");

            $emailFile = File::get(public_path("emails/$fileOriginalName/index.html"));
            $images = File::glob(public_path("emails/$fileOriginalName/images/*.*"));

            foreach($images as $image)
            {
                $image = basename($image);
                $urlImage = url("emails/$fileOriginalName/images/$image");
                $emailFile = str_replace("images/$image", url($urlImage), $emailFile);
            }

            $this->emailContent = $emailFile;

            self::verifyEmails($request->emails);

            return redirect()->back()->withSuccess('E-mail enviado com sucesso.');
        }catch(\Exception $e){
            return redirect()->back()->withError('Algo deu errado! Tente Novamente.');
        }
    }

    private function verifyEmails($emails)
    {
        foreach($emails as $email)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $verifyEmail = SugestedEmails::where('email', $email)->count();

                if($verifyEmail == 0)
                    SugestedEmails::create(['email' => $email]);

                self::sendEmail($email);
            }
        }
    }

    private function sendEmail($email)
    {
        Mail::to($email)->send(new EmailTester($this->emailContent));
    }

    public function removeOldEmails()
    {
        File::deleteDirectory(public_path('emails'));

        return "Limpeza realizada com sucesso.";
    }
}
