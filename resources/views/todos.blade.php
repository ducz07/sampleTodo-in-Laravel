@extends('layout')

@section('content')
       <div class="row">
         <h133><center>My Task of the Day</center></h1>
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field () }}
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create new Todo">
            </form>
        </div>
     </div>

     <hr>  
        
      <div class="container">  
     <table class="table table-bordered">
   
   
        <thead>
            <tr>
                <td>Todo</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
            <tr>
                <td>{{$todo->todo}}</td>
                <td><a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger"> Delete </a>
                <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-primary"> Update </a>
                 @if(!$todo->completed)
                 <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-xs btn-success">Mark as completed</a>
                @else
                <span class="glyphicon glyphicon-ok icon-success"></span></td>
                @endif
            </tr>
             @endforeach 
        </tbody>
    </table>
</div>
        <hr>
  
      

@stop