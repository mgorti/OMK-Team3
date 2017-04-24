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
    
	<a href="{{url('/student_details/create')}}" class="btn btn-success">Student Details</a></br></br>



        <thead>
        <tr class="bg-info">
            <th>ID</th>
            <th>Student Name</th>
            <th>Attendance (Yes/No)</th>
			<th>Add Comments</th>
           <!-- <th>Attendance Absent</th> -->
           <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($student_details as $student_detail)
            <tr>
                <td>{{ $student_detail->id}}</td>
                <td>{{ $student_detail->student_name }}</td>
                <td>{{ $student_detail->attendance}}</td>
				<td>{{ $student_detail->comment}}</td>
                <!-- <td>{{ $student_detail->attendance_absent}}</td> -->
                <td>
        {!! Form::open(['method' => 'DELETE', 'route'=>['student_details.destroy', $student_detail->id]])!!}
         {!! Form::submit('Delete', ['class' => 'btn btn-danger','name'=>'remove_levels']) !!}
                    {!! Form::close() !!}
                </td>
   
            </tr>
        @endforeach

        </tbody>

    </table>
      
@endsection

