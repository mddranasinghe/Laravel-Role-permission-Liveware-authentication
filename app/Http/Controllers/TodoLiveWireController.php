<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoLiveWireController extends ParentController
{
    public function index(){
        return view('pages.TodoLivewire.Todo.index');

        
    }
}
