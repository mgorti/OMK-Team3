@extends('layouts.app')

@section('content')
    <h1 align="center"> <a href="{{action ('MentorController@index')}}" style="font-size:30"> Omaha Mentoring for Kids</a></h1>
    <!DOCTYPE html>
<html>
<body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
</body>
</html>
    <hr>
    <table class="table table-striped table-bordered table-hover">
    <!-- <a href="{{url('/addcomments/create')}}" class="btn btn-success"> Insert Comment</a></br></br> -->
        <thead>
        <tr class="bg-info">
      		<th>Student ID</th>
            <th>Student Name</th>
			<th>Date</th>
            <th>Time</th>
			<th>Location</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($meeting_mentors as $meeting_mentor)
            <tr>
				<td>{{ $meeting_mentor->student->id}}</td>
                <td>{{ $meeting_mentor->student->name }}</td>
                <td>{{ $meeting_mentor->date}}</td>
                <td>{{ $meeting_mentor->time}}</td>
                <td>{{ $meeting_mentor->location}}</td>
				<td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['addcomments.destroy', $meeting_mentor->id]])!!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
   
            </tr>
        @endforeach

        </tbody>

    </table>
      
@endsection

