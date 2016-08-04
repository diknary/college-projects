<?php

namespace App\Repositories;

use App\Folder;

class BreadcrumbRepository {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $breadcrumb;
    protected $id;
    protected $view;

    public function directory($idfolder)
    {
        $this->breadcrumb = Folder::where('id', $idfolder)->first();
        $this->id = $idfolder;
        return $this->breadcrumb;
    }

    /*public function index(){

        if($this->id){
            $this->view = array($this->id, $this->breadcrumb->nama_folder);
            return $this->view;
        }else{
            $this->view = array_add($this->view, $this->id, $this->breadcrumb->nama_folder); 
            return $this->view;  
        }
    }*/
    
}
