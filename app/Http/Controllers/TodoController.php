<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;
use App\Domain\Facades\TodoFacades; 



class TodoController extends ParentController
{
    // protected $task;
    // public function __construct()
    // {
    //     $this->task= new Todo();
    // }



    public function index()
    {
        $response['tasks']=TodoFacades::index();
        return view('pages.Todo.index')->with($response);
    }

    public function store(Request $request)
    {
        TodoFacades::store($request->all());
        return redirect()->back();  
       
       //$this->task->create($request->all());
       //return redirect()->back(); 
    }

    public function delete($task_id){
        TodoFacades::delete($task_id);
        return redirect()->back();

      }
      
      public function status($task_id){
        TodoFacades::status($task_id);
        return redirect()->back();

      }









}
