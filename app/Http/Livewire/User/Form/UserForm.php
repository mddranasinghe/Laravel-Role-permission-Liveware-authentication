<?php

namespace App\Http\Livewire\User\Form;
use App\Domain\Facades\TodoFacades; 
use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserForm extends Component
{
    public $name, $email, $password, $user_id, $set_roles,$roles ,$s;
    public $isEditMode = false;
    protected $listeners = ['edit'];


  

    public function mount(){

       $this->user=new User();
    }

    
    public function render()
    {
        $this->roles = Role::all();
        return view('pages.TodoLivewire.components.User.userform');
    }


   public function resetFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->set_roles='';
        $this->user_id = null;
        $this->isEditMode = false;
    }

    public function store()
    {
 
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'set_roles'=>'required'
        ]);

       $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        $user->syncRoles($this->set_roles);

        session()->flash('message', 'User created successfully.');
        $this->resetFields();

        $this->emit('UserRefresh');
    }


    public function edit($id)
    {

        $user = User::findOrFail($id);
        $roles=Role::all();
        
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->isEditMode = true;

        $this->set_roles=$user->getRoleNames();


       
        
    }                                         

    public function update()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'set_roles'=>'required'
        ]);

        $user = User::findOrFail($this->user_id);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $user->syncRoles($this->set_roles);

        session()->flash('message', 'User updated successfully.');
        $this->resetFields();

        $this->emit('UserRefresh');
    }

   
}

