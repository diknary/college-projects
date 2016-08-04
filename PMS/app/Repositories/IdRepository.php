<?php

namespace App\Repositories;

use DB;
use Session;
use App\Folder;
use App\Breadcrumb;

class IdRepository {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $id;
    protected $data;
    protected $counter=0;

    public function __construct(int $id){
        $this->id = $id;
    }

    public function makebread()
    {
        $id = $this->id;
        $get = Folder::where('id', $id)->first();
        $getbreadcrumb = Breadcrumb::where('user_session', Session::get('supervisorName'))->delete();
        $data[] = array ('name' => $get->nama_folder, 'level' => 1, 'id_folder' => 0);
                $table = new Breadcrumb();
                $table->level = 1;
                $table->user_session = Session::get('supervisorName');
                $table->breadcrumb = json_encode($data);
                $table->save(); 
        return $data;
        
    }
    public function addbread()
    {
        $id = $this->id;
        $get = Folder::where('id', $id)->first();
        $getbreadcrumb = Breadcrumb::where('user_session', Session::get('supervisorName'))->first();
        $decode = json_decode($getbreadcrumb->breadcrumb, true);
        $index = $getbreadcrumb->level;
        $decode[$index]= array('name' => $get->nama_folder, 'level' => $index, 'id_folder' => $id);
        
        for($i=0;$i<$index;$i++){
            if($decode[$index]['id_folder'] == $decode[$i]['id_folder']){
                while($this->counter<=$i){
                    $pull[] = $decode[$this->counter];
                    $this->counter += 1;
                    
                }
                Breadcrumb::where('user_session', Session::get('supervisorName'))
                    ->where( 'level', $index)
                    ->delete();
                $table = new Breadcrumb();
                $table->level = $this->counter;
                $table->user_session = Session::get('supervisorName');
                $table->breadcrumb = json_encode($pull);
                $table->save(); 
                return $pull;
            }
            

        }
        Breadcrumb::where('user_session', Session::get('supervisorName'))
                    ->where( 'level', $index)
                    ->delete();
                $table = new Breadcrumb();
                $table->level = $index + 1;
                $table->user_session = Session::get('supervisorName');
                $table->breadcrumb = json_encode($decode);
                $table->save(); 
                return $decode; 
                     
        
    }
     

}
