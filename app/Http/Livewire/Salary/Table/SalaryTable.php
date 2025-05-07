<?php

namespace App\Http\Livewire\Salary\Table;
use App\Domain\Facades\SalaryFacades; 
use Livewire\Component;

class SalaryTable extends Component
{
    public $salaries;
   
    public function mount(){

        $this->salaries = SalaryFacades::index();
    }

    
    public function render()
    {
        return view('pages.TodoLivewire.components.salarytable');
    }
    

   // protected $listeners = ['TodoTableRefresh'=> 'mount'];
}
