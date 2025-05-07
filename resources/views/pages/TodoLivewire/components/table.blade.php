
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