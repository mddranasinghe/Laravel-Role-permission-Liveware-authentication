<?php

namespace App\Http\Livewire\User\Tables;
use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public  $users;

    protected $listeners = ['UserRefresh'=>'render'];


    public function render()
    {
        $this->users = User::all();
        
        return view('pages.TodoLivewire.components.User.usertable');
        dd($this-users);
    }

    public function edit($id)
    {
        $this->emit('edit', $id); // Emit user ID to form component
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        //session()->flash('message', 'User deleted successfully.');
    }
}