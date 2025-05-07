<?php

namespace App\Domain\Services;
use App\Models\Salary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SalaryServices
{
    public function __construct()
    {
        $this->salary = new Salary();
    }

    public function index(){

       // $user = Auth::user();

      //  $salaries = $user->salaries()->select('name', 'salary_amount')->get();
       // $todos=$user->todos()->select('title')->get();

        //return view('pages.TodoLivewire.components.salarytable', compact('salaries', 'todos'));
//
      //  return view('pages.TodoLivewire.Salary.index', compact('salaries', 'todos'));

      //return $salaries;


      $salaries = DB::table('users')
      ->join('salaries', 'users.id', '=', 'salaries.user_id')
      ->join('todos', 'users.id', '=', 'todos.user_id')
      ->select('users.name', 'salaries.salary_amount', 'todos.title')
      ->get();

        return $salaries;
  
//dd($data);
     //return $data;
    }


    public function store($data)
    {
        //dd($data);
       
        Auth::user()->salaries()->create([
            'user_id' => Auth::id(),
            'name' => Auth::user()->name, // optional
            'salary_amount' => $data['salary'],

        ]);
    } 


}