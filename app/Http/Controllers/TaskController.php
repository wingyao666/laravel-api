<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return 'task index';
    }

    public function read($id){
        return $id;
    }
}
