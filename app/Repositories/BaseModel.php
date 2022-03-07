<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class BaseModel
{
    public $table;

    public function index(){
        $data= DB::table($this->table)->get();
        return $data;
    }
    public function show($id){
        $data = DB::table($this->table)->where('id',$id)->first();
        return $data;
    }

}