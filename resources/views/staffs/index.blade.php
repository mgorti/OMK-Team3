@extends('layouts.app')

@section('content')
    @if (Auth::user()->role==='staff')
	<h1 align="center"> <a href="{{action ('StaffController@index')}}" style="font-size:30"> Omaha Mentoring for Kids</a></h1>
    @endif
	@if (Auth::user()->role==='admin')
	<h1 align="center"> <a href="{{action ('AdminController@index')}}" style="font-size:30"> Omaha Mentoring for Kids</a></h1>
    @endif
	<!DOCTYPE html>
<html>
<body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
</body>
</html>
    <h2  align="center"><a style="color:red" href="{{ action('MentorController@index') }}" style="font-size:30"> Mentors  </a>|
    <a style="color:red" href="{{ action('StudentController@index') }}" style="font-size:30"> Students  </a>|
    <a style="color:red" href="{{ action('MeetingScheduleController@index') }}" style="font-size:30;">Meeting Schedule </a>
    </h2>
@endsection
