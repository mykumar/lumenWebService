<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Http\Controllers;

use Log;
use DB;
use App\Models\ArticleCategory;
use App\Models\Articles;
use App\Models\Categories;

use Illuminate\Http\Request;
use App\Transformers\SupportTransformer;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class SupportController extends Controller {

    public function index(Manager $fractal, SupportTransformer $transformer, $customerID)
    {
        
        $ac = ArticleCategory::where('id', '>=', 64)->take(10)->get();
        
        $resource = new Collection($ac, $transformer);
        
        $data = $fractal->createData($resource)->toArray();
        
        return $this->respondWithSuccess($data);
    }
    
}