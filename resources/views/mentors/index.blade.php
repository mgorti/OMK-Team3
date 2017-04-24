@extends('layouts.app')

@section('content')
    @if (Auth::user()->role==='mentor')
    <h1 align="center"> <a href="{{action ('MentorController@index')}}" style="font-size:30"> Omaha Mentoring for Kids</a></h1>
    @endif
@if (Auth::user()->role==='staff')
<h1 align="center"> <a href="{{action ('StaffController@index')}}" style="font-size:30"> Omaha Mentoring for Kids</a></h1>
    <h2 style="color:red;">Mentors</h2>
    @endif
    @if (Auth::user()->role==='admin')
<h1 align="center"> <a href="{{action ('AdminController@index')}}" style="font-size:30"> Omaha Mentoring for Kids</a></h1>    
<h2 style="color:red;">Mentors</h2>
@endif
    <!DOCTYPE html>
<body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
<html>
</body>
</html>
@if (Auth::user()->role==='mentor')
<h2 align="center"><a style="color:red"  href="{{ action('StudentDetailsController@index') }}" style="font-size:30"> Student Details  </a>|
    <a  style="color:red" href="{{url('/meeting_schedules')}}" style="font-size:30;">Meeting Schedule </a>
    <!--<a href="{{ action('AddcommentController@index') }}"> Add Comment </a>|-->
    <!--<a href="http://omk.com/Mentor/notifications" style="font-size:30;"> Notifications </a>|-->
    <!-- <a href="http://omk.com/Mentor/settings" style="font-size:30;"> Settings </a></br></br> -->
    <br></br>
    </h2>
<h3 align="left">
    <a align="left"href="{{url('/mentors/create')}}" class="btn btn-success"> Create Mentor</a>
      
 </h3> 
@endif
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Name</th>
            <th>ID</th>
            <th>Qualification</th>
            <th>Address</th>
            <th>Zip</th>
            <th>Email</th>
            <th>Phone</th>
            <th colspan="3" style="text-align: center;">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mentors as $mentor)
            <tr>
                <td>{{ $mentor->name }}</td>
                <td>{{ $mentor->id}}</td>
                <td>{{ $mentor->qualification }}</td>
                <td>{{ $mentor->address }}</td>
                <td>{{ $mentor->zip }}</td>
                <td>{{ $mentor->email}}</td>
                <td>{{ $mentor->phone }}</td>
                <td><a href="{{route('mentors.show',$mentor->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('mentors.edit',$mentor->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['mentors.destroy', $mentor->id]])!!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
   @if (Auth::user()->role==='staff')  
      @include('mntrprnt')
@endif
@if (Auth::user()->role==='admin')
@include('mntrprnt')
@endif
@endsection
