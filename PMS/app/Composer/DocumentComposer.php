<?php

namespace App\Composer;


use Illuminate\Support\Facades\View as View;
use App\Repositories\DocumentRepository;

class DocumentComposer {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $document;


    public function __construct(DocumentRepository $document)
    {
        $this->document = $document;
    }
    public function compose()
    {
        $document = $this->document->movedoc();
        View::composer('layouts.partials.controlsidebar', function ($view) use ($document)
        {
            $view->with('docs', $document);
        });
    }
}
