@extends('app')
@section('content')
    <h1>Student Details</h1>
    
     {!! Form::open(['url' => 'student_details']) !!}
    <div class="form-group">
        {!! Form::label('id', 'id') !!}
        {!! Form::text('id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Student Name', 'Student Name') !!}
        {!! Form::text('student_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Attendance', 'Attendance') !!}
        {!! Form::text('attendance',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Add Comments', 'Add Comments') !!}
        {!! Form::text('comment',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'form-group btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
   
@stop
