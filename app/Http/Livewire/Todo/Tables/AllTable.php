<?php

namespace App\Http\Livewire\Todo\Tables;
use App\Domain\Facades\TodoFacades; 
use Livewire\Component;

class AllTable extends Component
{
    public $tasks;
   
    public function mount(){

        $this->tasks = TodoFacades::index();
    }

    
    public function render()
    {
        return view('pages.TodoLivewire.components.table');
    }
    

    protected $listeners = ['TodoTableRefresh'=> 'mount'];
}
