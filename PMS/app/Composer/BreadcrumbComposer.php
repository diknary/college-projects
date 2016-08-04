<?php

namespace App\Composer;


use Illuminate\Support\Facades\View as View;

class BreadcrumbComposer {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $breadcrumb;


    public function __construct(array $breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }
    public function compose()
    {
        $breadcrumb = $this->breadcrumb;
        View::composer('layouts.partials.contentheader', function ($view) use ($breadcrumb)
        {
            $view->with('breads', $breadcrumb);
        });
    }
}
