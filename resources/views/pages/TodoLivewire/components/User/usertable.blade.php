<div class="col-lg-12 mt-3">
   

    @if (session()->has('message'))
        <div class="bg-green-200 text-green-700 p-2 rounded mb-3">
            {{ session('message') }}
        </div>
    @endif


    <table class="table table-striped">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Name</th>
                <th class="p-2">Email</th>
                <th class="p-2">Role</th>
                <th class="p-2">Actions</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="border-t">
                    <td class="p-2">{{ $user->name }}</td>
                    <td class="p-2">{{ $user->email }}</td>
                    <td class="p-2">
                     @foreach ($user->getRolenames() as $role )
                     <button class="btn btn-success">{{ $role }}</button>
                         
                     @endforeach

                    </td>

           
                    <td class="p-2">
                        @can('role-edit')
                        <button wire:click="edit({{ $user->id }})" class="btn btn-primary">Edit</button>
                        @endcan
                        @can('role-delete')
                        <button wire:click="delete({{ $user->id }})" class="btn btn-danger"
                            onclick="return confirm('Are you sure?')">Delete</button>
                        @endcan
                        <button class="btn btn-info">Show</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

   
    
</div>
