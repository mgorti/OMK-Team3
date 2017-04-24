@extends('app')
@section('content')
    <h2>Mentor Details </h2>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($mentor['name']); ?></td>
            </tr>
             </tbody>
      </table>
            
            <h3>Students</h3>
        <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Class</th>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->class }}</td>
            </tr>
        @endforeach
            
            
                  
            </tbody>
      </table>
    </div>
  
@stop
