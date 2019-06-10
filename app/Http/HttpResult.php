<?php

namespace App\Http;

class HttpResult
{
	/**
	 * @param null $data
	 * @param string|null $message
	 * @param int $code Default code is 200
	 * @return \Illuminate\Http\JsonResponse
	 */
    public static function success($data = null, string $message = null, $code = 200)
    {
        return self::response($data, $message, $code);
    }
	
	/**
	 * @param null $e  Exception or error data
	 * @param string|null $message
	 * @param int $code
	 * @return \Illuminate\Http\JsonResponse
	 */
    public static function exception($e = null, string $message = null, $code = 500)
    {
	    $message = $message ? $message : "Internal Service Error";
		$data = null;
		
        if ($e && is_a($e, \Exception::class ))
        {
            if ($e->getCode() >= 200 && $e->getCode() <= 599)
	            $code = $e->getCode();
            
	        $message = $e->getMessage();
        }
        else if($e)
        {
	        $data = $e;
        }
		
        return self::response($data, $message, $code);
    }
    
    /**
     * Used default code: 500
     *
     * @param string|null $message
     * @param null $data
     * @return \Illuminate\Http\JsonResponse
     */
	public static function internalServiceError(string $message = null, $data = null)
    {
	    $message = $message ? $message : 'Internal Service Error';
	    return self::response($data, $message, 500);
    }
    
	/**
	 * Used default code: 401
	 *
	 * @param string|null $message
	 * @param null $data
	 * @return \Illuminate\Http\JsonResponse
	 */
    public static function unauthorized(string $message = null, $data = null)
    {
	    $message = $message ? $message : 'UNAUTHORIZED';
	    return self::response($data, $message, 401);
    }
	
	/**
	 * Used default code: 403
	 *
	 * @param string|null $message
	 * @param null $data
	 * @return \Illuminate\Http\JsonResponse
	 */
    public static function permissionDenied(string $message = null, $data = null)
    {
	    $message = $message ? $message : 'PERMISSION DENIED';
	    return self::response($data, $message, 403);
    }
	
	/**
	 * Used default code: 400
	 *
	 * @param string|null $message
	 * @param null $data
	 * @return \Illuminate\Http\JsonResponse
	 */
	public static function missingParameters(string $message = null, $data = null)
	{
	    $message = $message ? $message : 'MISSING PARAMETERS';
	    return self::response($data, $message, 400);
    }
	
	/**
	 * Used default code: 404
	 *
	 * @param string|null $message
	 * @param null $data
	 * @return \Illuminate\Http\JsonResponse
	 */
	public static function resourceNotFound(string $message = null, $data = null)
	{
	    $message = $message ? $message : 'RESOURCE NOT FOUND';
	    return self::response($data, $message, 404);
    }
	
	/**
	 * Used default code: 400
	 *
	 * @param string|null $message
	 * @param null $data
	 * @return \Illuminate\Http\JsonResponse
	 */
	public static function badRequest(string $message = null, $data = null)
	{
	    $message = $message ? $message : 'BAD REQUEST';
	    return self::response($data, $message, 400);
    }

    private static function response($data = null, string $message = null, $code = null)
    {
        $data = ['data' => $data];
        if($message) $data['message'] = $message;
	    return response()->json($data, $code);
    }
}
