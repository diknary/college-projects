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
        if(Session::has('id')){
            Breadcrumb::where('user_session', Session::get('id'))->delete();
            $data[] = array ('name' => $get->nama_document, 'level' => 1, 'id_folder' => 1);
                    $table = new Breadcrumb();
                    $table->level = 1;
                    $table->user_session = Session::get('id');
                    $table->breadcrumb = json_encode($data);
                    $table->save(); 
            return $data;
        }
        else{
            Breadcrumb::where('user_session', Session::get('NIM'))->delete();
            $data[] = array ('name' => $get->nama_document, 'level' => 1, 'id_folder' => 1);
                    $table = new Breadcrumb();
                    $table->level = 1;
                    $table->user_session = Session::get('NIM');
                    $table->breadcrumb = json_encode($data);
                    $table->save(); 
            return $data;
        } 
        
    }
    
    public function addbread()
    {
        $id = $this->id;
        $get = Document::where('id', $id)->first();
        
        if(Session::has('id')){
                $getbreadcrumb = Breadcrumb::where('user_session', Session::get('id'))->first();
                $decode = json_decode($getbreadcrumb->breadcrumb, true);
                $index = $getbreadcrumb->level;
                $decode[$index]= array('name' => $get->nama_document, 'level' => $index, 'id_folder' => $id);
                
                for($i=0;$i<$index;$i++){
                    if($decode[$index]['id_folder'] == $decode[$i]['id_folder']){
                        while($this->counter<=$i){
                            $pull[] = $decode[$this->counter];
                            $this->counter += 1;
                            
                        }
                        Breadcrumb::where('user_session', Session::get('id'))
                            ->update(['level' => $this->counter, 'breadcrumb' => json_encode($pull)]);
                        return $pull;
                    }
                    

                }
                Breadcrumb::where('user_session', Session::get('id'))
                            ->update(['level' => $index + 1, 'breadcrumb' => json_encode($decode)]);
                        return $decode;
            }
         else {
                $getbreadcrumb = Breadcrumb::where('user_session', Session::get('NIM'))->first();
                $decode = json_decode($getbreadcrumb->breadcrumb, true);
                $index = $getbreadcrumb->level;
                $decode[$index]= array('name' => $get->nama_document, 'level' => $index, 'id_folder' => $id);
                
                for($i=0;$i<$index;$i++){
                    if($decode[$index]['id_folder'] == $decode[$i]['id_folder']){
                        while($this->counter<=$i){
                            $pull[] = $decode[$this->counter];
                            $this->counter += 1;
                            
                        }
                        Breadcrumb::where('user_session', Session::get('NIM'))
                            ->update(['level' => $this->counter, 'breadcrumb' => json_encode($pull)]);
                        return $pull;
                    }
                    

                }
                Breadcrumb::where('user_session', Session::get('NIM'))
                            ->update(['level' => $index + 1, 'breadcrumb' => json_encode($decode)]);
                        return $decode;
               
        
         }
         }
     

}
