<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use Log;
use App\Models\ArticleCategory;

class SupportTransformer extends TransformerAbstract {


    public function transform( ArticleCategory $articleCategory )
    {
        
        Log::info(' SupportTransformer::transform ');
        return [
            'id'                   => (int) $articleCategory->id,
            'article_id'           => (string) $articleCategory->article_id,
            'category_id'          => (string) $articleCategory->category_id,
        ];
    }
}