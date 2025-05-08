<div>
<h2 class="text-xl font-bold mb-4">User Management</h2>

<form wire:submit.prevent="{{ $isEditMode ? 'update' : 'store' }}" method="POST">
   
    @csrf
    <input type="text" wire:model="name" placeholder="Name" class="form-control" /><br>

    <input type="email" wire:model="email" placeholder="Email" class="form-control" /><br>


       
    @unless($isEditMode)
    <input type="password" wire:model="password" placeholder="Password" class="form-control"  />
    @endunless
 
   
    <div class="mt-2">
        <label>Role :</label>
        <select  class="form-select" wire:model="set_roles"  multiple >

            @if($isEditMode == false)

            <option value="">-- Select Role --</option>
            @foreach ($roles as $role )
            <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach

            @endif

            @if($isEditMode == true)


            @foreach($roles as $role)
                <option value="{{ $role->name }}" 

                    @if(is_array($set_roles))
                        {{ in_array($role->name, $set_roles) ? 'selected' : '' }}
                    @else
                        {{ ($set_roles == $role->name) ? 'selected' : '' }}
                    @endif
                >
                    {{ $role->name }}
                </option>

                
            @endforeach
                

            @endif


        </select>
     
    </div>


    <br>
    
    <button type="submit" class="btn btn-success">
        {{ $isEditMode ? 'Update' : 'Create' }}
    </button>
 
</form>
</div>