<?php

namespace App\Http\Controllers;

use App\Mail\EmailTester;
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
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
    
    public function menu2()
    {
        return view('home');
    }

    public function sendMail(Request $request)
    {
        try{

            $uploadFiles = Zipper::make($request->file('upload-file'));
//        $uploadImagesFiles = Zipper::make($request->file('upload-file'))->folder('images')->listFiles();

            $storageFolder  = Carbon::now()->format('Y-m-d');
            $fileOriginalName = $request->file('upload-file')->getClientOriginalName();
            $fileOriginalName = explode(".", $fileOriginalName, 2)[0];

            $uploadFiles->extractTo("emails/$storageFolder");

            $emailFile = File::get(public_path("emails/$storageFolder/$fileOriginalName/index.html"));
            $images = File::glob(public_path("emails/$storageFolder/$fileOriginalName/images/*.*"));

            foreach($images as $image)
            {
                $image = basename($image);
                $urlImage = url("emails/$storageFolder/$fileOriginalName/images/$image");
                $emailFile = str_replace("./images/$image", url($urlImage), $emailFile);
            }

            Mail::to('adrisilva0002@gmail.com')->send(new EmailTester($emailFile));

            return redirect()->back()->withSuccess('E-mail enviado com sucesso.');
        }catch(\Exception $e){
            return redirect()->back()->withError('Algo deu errado! Tente Novamente.');
        }
    }
}
