@extends('tasks.layout')
    
@section('content')
  
<div class="card mt-5">
  <h2 class="card-header">Add New Task</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="/"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <form action="/addtask" method="POST">
        @csrf
  
        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Title:</strong></label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="" id="inputName" placeholder="Title">
            @error('title')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
  
        <div class="mb-3">
            <label for="inputDetail" class="form-label"><strong>Descripton:</strong></label>
            <textarea 
                class="form-control @error('description') is-invalid @enderror" 
                style="height:150px" 
                name="description" 
                id="inputDetail" 
                placeholder="Descripton"></textarea>
            @error('description')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
          <div class="mb-3">
            <label for="inputDate" class="form-label"><strong>Due Date:</strong></label>
            <input type="date" name="due_date" class="form-control @error('duedate') is-invalid @enderror" id="inputDate" placeholder="Due Date">
            @error('duedate')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>
  
  </div>
</div>
@endsection
