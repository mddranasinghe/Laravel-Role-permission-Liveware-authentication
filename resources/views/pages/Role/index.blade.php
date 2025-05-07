@extends('layouts.index')

@section('content')
<div class="container">

    <h1>Role Manager</h1>

    <a href={{ route('role.create') }} class="btn btn-info">Role create </a>



<div class="col-lg-12 mt-3">
    <table class="table table-striped">
        <thead>
          <tr>
    
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
         
            @foreach ($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a href={{ route('role.delete',$role->id) }} class="btn btn-outline-danger">detele</a>
                    <a href={{ route('role.edit',$role->id) }}  class="btn btn-outline-success">edit</a>
                </td>
            
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
</div>
@endsection

@push('css')
<style>

    
</style>
@endpush