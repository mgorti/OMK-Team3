@extends('app')
@section('content')
    <h1>Meetings</h1>
    
     {!! Form::open(['url' => 'meeting_schedules']) !!}
	 <h3> Mentor ID </h3> 
	  <div class="form-group">
		{!! Form::select('id', $mentors ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('mentor_name', 'mentor_name') !!}
        {!! Form::text('mentor_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('student_name', 'student_name') !!}
        {!! Form::text('student_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('date', 'date') !!}
        {!! Form::text('date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('time', 'time') !!}
        {!! Form::text('time',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('location', 'location') !!}
        {!! Form::text('location',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
   
@stop
