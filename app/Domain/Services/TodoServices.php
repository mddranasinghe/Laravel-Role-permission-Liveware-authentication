<?php

namespace App\Domain\Services;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class TodoServices
{
    protected $select_task;


    public function __construct()
    {
        $this->task = new Todo();
    }

    public function index(){
        return $this->task->all();
    }

    public function store($data)
    {




        Auth::user()->todos()->create([
            'user_id' => Auth::id(),
            'title' => $data['title'],

        ]);
       // echo "sssssssssssssssssssssssss";
       // $this->task->create($data);
    }

    public function delete($task_id){

      $select_task = $this->task->find($task_id);
        $select_task->delete();
    }

    public function status($task_id){
         $select_task = $this->task->find($task_id);
         $select_task->done=1;
         $select_task->update();
    }

 
}