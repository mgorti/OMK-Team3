@extends('layouts.app')

@section('content')
    <h1 align="center"> <a href="{{action ('StudentController@index')}}" style="font-size:30"> Omaha Mentoring for Kids</a></h1>
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
      		<th>Mentor ID</th>
            <th>Mentor Name</th>
			<th>Date</th>
            <th>Time</th>
			<th>Location</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($meeting_students as $meeting_student)
            <tr>
				<td>{{ $meeting_student->student->id}}</td>
                <td>{{ $meeting_student->student->name }}</td>
                <td>{{ $meeting_student->date}}</td>
                <td>{{ $meeting_student->time}}</td>
                <td>{{ $meeting_student->location}}</td>
				<td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['addcomments.destroy', $meeting_student->id]])!!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
   
            </tr>
        @endforeach

        </tbody>

    </table>
      
@endsection

