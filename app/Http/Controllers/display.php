<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as facadeDB;

class display extends Controller
{
    function tbl(){
        $data=facadeDB::select("select * from emp");
        return view("dashboard",["data"=>$data]);
        // return admin::all();
    }
}
