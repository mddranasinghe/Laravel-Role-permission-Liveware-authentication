<?php

namespace App\Http\Livewire\Salary\Form;
use App\Models\Salary;
use App\Domain\Facades\SalaryFacades; 

use Livewire\Component;

class SalaryForm extends Component
{
    public $salary;
   // public $successMessage = '';


    public function mount(){

        $this->salary=new Salary();
    }


    public function render()
    {
       return view('pages.TodoLivewire.components.salaryform');
    }
    protected function rules(){
    return 
        [
            'salary.salary' => 'required|min:3|max:100',
        ];
    }

    public function updated($propertyName)

    {
        $this->validateOnly($propertyName);
    }


    public function submit_salary(){
        try{
   
            $this->validate();
    
            SalaryFacades::store($this->salary->toArray());
            $this->successMessage= "Task successfully added!";
            $this->task=new Salary();
            //$this->emit("TodoTableRefresh");
            $this->task=new Salary();
            //$this->updatedSuccessMessage();
            return redirect()->back()->with('success', 'Salary added successfully.');
    
         }catch(Exception $e){
    
         }
    }

      
  


}