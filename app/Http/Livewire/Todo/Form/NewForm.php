<?php

namespace App\Http\Livewire\Todo\Form;
use App\Models\Todo;
use App\Domain\Facades\TodoFacades; 

use Livewire\Component;

class NewForm extends Component
{
    public $task;
    public $successMessage = '';


    public function mount(){

        $this->task=new Todo();
    }


    public function render()
    {
       return view('pages.TodoLivewire.components.form');
    }

    protected function rules(){
        return 
        [
            'task.title' => 'required|min:3|max:100|string',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function submit_task(){
     try{

        $this->validate();

        TodoFacades::store($this->task->toArray());
        $this->successMessage= "Task successfully added!";
        $this->task=new Todo();
        $this->emit("TodoTableRefresh");

        //$this->updatedSuccessMessage();


     }catch(Exception $e){

     }
        
    }
    public function updatedSuccessMessage()
    {
    $this->dispatchBrowserEvent('hide-success');
    }


    
}
