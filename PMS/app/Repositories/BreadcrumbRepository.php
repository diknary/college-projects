<?php

namespace App\Repositories;

use Session;
use App\Document;
use App\Breadcrumb;

class BreadcrumbRepository {
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
        $get = Document::where('id', $id)->first();
        if(Session::has('NIM')){
            Breadcrumb::where('user_session', Session::get('studentName'))->delete();
            $data[] = array ('name' => $get->nama_document, 'level' => 1, 'id_folder' => 0);
                    $table = new Breadcrumb();
                    $table->level = 1;
                    $table->user_session = Session::get('studentName');
                    $table->breadcrumb = json_encode($data);
                    $table->save(); 
            return $data;
        }
        else{
            Breadcrumb::where('user_session', Session::get('staffName'))->delete();
            $data[] = array ('name' => $get->nama_document, 'level' => 1, 'id_folder' => 0);
                    $table = new Breadcrumb();
                    $table->level = 1;
                    $table->user_session = Session::get('staffName');
                    $table->breadcrumb = json_encode($data);
                    $table->save(); 
            return $data;
        }
        
    }
    
    public function addbread()
    {
        $id = $this->id;
        $get = Document::where('id', $id)->first();
        if(Session::has('NIM')){
                $getbreadcrumb = Breadcrumb::where('user_session', Session::get('studentName'))->first();
                $decode = json_decode($getbreadcrumb->breadcrumb, true);
                $index = $getbreadcrumb->level;
                $decode[$index]= array('name' => $get->nama_document, 'level' => $index, 'id_folder' => $id);
                
                for($i=0;$i<$index;$i++){
                    if($decode[$index]['id_folder'] == $decode[$i]['id_folder']){
                        while($this->counter<=$i){
                            $pull[] = $decode[$this->counter];
                            $this->counter += 1;
                            
                        }
                        Breadcrumb::where('user_session', Session::get('studentName'))
                            ->where( 'level', $index)
                            ->delete();
                        $table = new Breadcrumb();
                        $table->level = $this->counter;
                        $table->user_session = Session::get('studentName');
                        $table->breadcrumb = json_encode($pull);
                        $table->save(); 
                        return $pull;
                    }
                    

                }
                Breadcrumb::where('user_session', Session::get('studentName'))
                            ->where( 'level', $index)
                            ->delete();
                        $table = new Breadcrumb();
                        $table->level = $index + 1;
                        $table->user_session = Session::get('studentName');
                        $table->breadcrumb = json_encode($decode);
                        $table->save(); 
                        return $decode;
        }

        else{
                $getbreadcrumb = Breadcrumb::where('user_session', Session::get('staffName'))->first();
                $decode = json_decode($getbreadcrumb->breadcrumb, true);
                $index = $getbreadcrumb->level;
                $decode[$index]= array('name' => $get->nama_document, 'level' => $index, 'id_folder' => $id);
                
                for($i=0;$i<$index;$i++){
                    if($decode[$index]['id_folder'] == $decode[$i]['id_folder']){
                        while($this->counter<=$i){
                            $pull[] = $decode[$this->counter];
                            $this->counter += 1;
                            
                        }
                        Breadcrumb::where('user_session', Session::get('staffName'))
                            ->where( 'level', $index)
                            ->delete();
                        $table = new Breadcrumb();
                        $table->level = $this->counter;
                        $table->user_session = Session::get('staffName');
                        $table->breadcrumb = json_encode($pull);
                        $table->save(); 
                        return $pull;
                    }
                    

                }
                Breadcrumb::where('user_session', Session::get('staffName'))
                            ->where( 'level', $index)
                            ->delete();
                        $table = new Breadcrumb();
                        $table->level = $index + 1;
                        $table->user_session = Session::get('staffName');
                        $table->breadcrumb = json_encode($decode);
                        $table->save(); 
                        return $decode;

            } 
                     
        
    }
     

}
