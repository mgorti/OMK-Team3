@extends('app')
@section('content')
    <h1>Insert Comment</h1>
    
     {!! Form::open(['url' => 'addcomments']) !!}
	 <h3> Mentor ID </h3> 
	  <div class="form-group">
		{!! Form::select('mentor_id', $mentors ) !!}
    </div>
     <!--div class="form-group">
        {!! Form::label('id', 'ID:') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div-->
	
    <div class="form-group">
        {!! Form::label('student_id', 'student_id') !!}
        {!! Form::text('student_id',null,['class'=>'form-control']) !!}
    </div>
   
    <div class="form-group">
        {!! Form::label('comment', 'comment') !!}
        {!! Form::text('comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

   <!-- <form class="form-horizontal" action="mentors">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="id">ID:</label>
    <input type="text" class="form-control" name="">
  </div>
<div class="form-group">
    <label for="qualification">Qualification:</label>
    <input type="text" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="zip">Zip:</label>
    <input type="text" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="">
  </div>
  <div class="form-group">
    <label for="phone">phone:</label>
    <input type="text" class="form-control" name="">
  </div>
 
  <a href="{{url('/mentors/store')}}" class="btn btn-success">Save</a>
  </div> -->
   
@stop
