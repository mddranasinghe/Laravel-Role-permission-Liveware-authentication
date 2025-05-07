@extends('layouts.index')
@section('content')
<div class="container">
    <h1>Role Manage</h1>
    <a href={{ route('manage.role') }} class="btn btn-info">Back </a>
    
 <form action={{ route('role.update',$role->id ) }} method="POST">
@csrf
  <div class="form-group">
    <label for="rolename">Role Name</label>
    <input type="text" class="form-control" id="rolename" name="name" value="{{ $role->name }}">
  </div>



<div class="mt-2">
    <h3>Permission :</h3>
    @foreach ( $permissions as $permission )
    <label><input type="checkbox" name="permissions[{{ $permission->name }}]" value="{{ $permission->name }}"
        {{ $role->hasPermissionTo($permission->name) ? 'checked': '' }}>
        {{ $permission->name }}</label> <br>       
    @endforeach


</div>
<br>
<button type="submit" class="btn btn-success">
    submit
</button>

</div>
</form>
@endsection

@push('css')
<style>

    
</style>
@endpush