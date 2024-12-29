@extends('tasks.layout')
   
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">Task Management</h2>
  <div class="card-body">
          
        @session('success')
            <div class="alert alert-success" role="alert"> {{ $value }} </div>
        @endsession
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="/create"> <i class="fa fa-plus"></i> Create New Task</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            @php $i=0; @endphp
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                     <td>{{ $task->due_date }}</td>
                    <td>
                       <form action="/delete/{{ $task->id }}" method="post">
             
                            {{-- <a class="btn btn-info btn-sm" href=""><i class="fa-solid fa-list"></i> Show</a> --}}
              
                            <a class="btn btn-primary btn-sm" href="/edit/{{ $task->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
             
                          
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i> Delete</button>
                             @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
            </tbody>
  
        </table>
        
        {{-- {!! $tasks->links() !!} --}}
  
  </div>
</div>  
@endsection