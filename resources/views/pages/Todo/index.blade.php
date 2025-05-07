@extends('layouts.index')


@section("content")

<div class="container">

    <h1>list</h1>

<form action={{ route('todo.store') }} method="POST">
    @csrf
    <div class=col-12>
    <div class=row>
<div class=col-8>
<input class="form-control" type="text" placeholder="Enter Task" name="title">
</div>
<div class=col-4>
    <button type="submit" class="btn btn-primary">Primary</button>
</div> 
</form>

<div class="col-lg-12 mt-3">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Title</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
         
            @foreach ($tasks as $key=>$task)
            <tr>
                <th scope="row">{{ ++$key }}</th></th>
                <td>{{ $task->title }}</td>
                <td>
                    @if ($task->done==0)
                        <span>Not Completed</span>
                    @else
                        <span>Completed</span>
                    @endif
                </td>
                <td>
                    <a href={{ route('todo.delete',$task->id) }} class="btn btn-outline-secondary">detele</a>
                    <a href={{ route('todo.done',$task->id) }}  class="btn btn-outline-success">done</a>
                </td>
            
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
</div>

@endsection