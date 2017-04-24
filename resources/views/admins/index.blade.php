@extends('layouts.app')

@section('content')

<!-- This sets the background image -->
<!DOCTYPE html>
<html>
<body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
</body>
</html>

<h1 align="center"> <a href="http://localhost/omc2/public/home" style="font-size:30"> Omaha Mentoring for Kids</a></h1>

 <h2 align="center"><a style="color:red" href="{{url('/mentors/create')}}" style="font-size:30"> Create Mentor  </a>|
 <a style="color:red" href="{{url('/mentors')}}" style="font-size:30;"> View Mentor </a>|
 <a style="color:red" href="{{url('/students/create')}}" style="font-size:30;"> Create Student </a>|
 <a style="color:red" href="{{url('/students')}}" style="font-size:30;"> View Student </a>|
 <a style="color:red" href="{{url('/staffs')}}" style="font-size:30;">  Staff </a>
</h2> 
      
@endsection
