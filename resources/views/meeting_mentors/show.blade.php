@extends('app')
@section('content')
    <h1>Show Meetings</h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Student ID</td>
                <td><?php echo ($meeting_mentors['id']); ?></td>
            </tr>
            <tr>
                <td>Student Name</td>
                <td><?php echo ($meeting_mentors['name']); ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><?php echo ($meeting_mentors['date']); ?></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><?php echo ($meeting_mentors['time']); ?></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><?php echo ($meeting_mentors['location']); ?></td>
            </tr>                          
            </tbody>
      </table>
    </div>
  
@stop
