@extends('app')
@section('content')
    <h1>Show Meetings</h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mentormeeting_students ID</td>
                <td><?php echo ($meeting_students['id']); ?></td>
            </tr>
            <tr>
                <td>Mentormeeting_students Name</td>
                <td><?php echo ($meeting_students['name']); ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><?php echo ($meeting_students['date']); ?></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><?php echo ($meeting_students['time']); ?></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><?php echo ($meeting_students['location']); ?></td>
            </tr>                          
            </tbody>
      </table>
    </div>
  
@stop
