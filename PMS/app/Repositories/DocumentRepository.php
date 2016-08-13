<?php

namespace App\Repositories;

use App\Document;

class DocumentRepository {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function movedoc()
    {
        $get = Document::where('id', '!=', 0)->get();
        return $get;       
    }
    

}
