<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function respondWithSuccess( $data ) {
    	$data = [
            'code'      =>  200,
            'status'    => 'success',
            'data'      => $data['data']
    	];
    	return response()->json($data);
    }
}
