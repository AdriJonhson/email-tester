<?php

namespace App\Http\Middleware;

use App\Http\HttpResult;
use App\Models\User;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class ApiAuthenticate
{
    protected $auth;
    
    /**
     * Creates a new instance of the middleware.
     *
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    
    /**
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\JsonResponse|mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        /** @var User $user */
        
        $apiToken = $this->getApiToken($request);
        
        try
        {
            if (empty($apiToken))
                throw new \Exception('MISSING ACCESS TOKEN', 422);
        
            $user = User::query()->where('api_token', $apiToken)->first();
            if (!$user)
                throw new \Exception('INVALID TOKEN', 422);
            
            $this->auth->setUser($user);
        }
        catch (\Exception $e)
        {
            return HttpResult::exception($e);
        }
        
        return $next($request);
    }
    
    /**
     * @param Request $request
     * @return array|null|string
     * @throws \Exception
     */
    private function getApiToken(Request $request)
    {
        //
        // Check if api token is in header
        //
        $authorization = $request->header('Authorization');
        if (!empty($authorization))
        {
            $explode = explode('Bearer ', $authorization);
            if (count($explode) <= 1)
                throw new \Exception('BAD REQUEST', 400);
            
            return $explode[1];
        }
    
        //
        // Check if api token is in parameters
        //
        $apiToken = $request->query('api_token');
        if (!empty($apiToken))
            return $apiToken;
        
        return null;
    }
}
