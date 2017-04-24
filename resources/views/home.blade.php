@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
</body>
</html>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
 @if (Auth::user())
<body background="http://neighbourhooddaycare.com/wp-content/uploads/2013/07/Landscape.jpg">
@if (Auth::user()->role==='mentor')
<h2 align="center"> <a href={{action('MentorController@index')}} style="font-size:75"> Mentor  </a> 
@elseif (Auth::user()->role==='student')
<h2 align="center"><a href={{action('StudentController@index')}} style="font-size:75;">Student </a> 
@elseif (Auth::user()->role==='staff')
<h2 align="center"><a href={{action('StaffController@index')}} style="font-size:75;">  Staff </a> 
         
@else (Auth::user()->role==='Admin')

<h2 align="center"><a href={{action('AdminController@index')}} style="font-size:75;"> Admin </a> </h2>
@endif
               <div class="panel-body"><h2 align="center">
                    Click to  continue!
                </div>
@endif
            </div>
        </div>
    </div>
</div>
@endsection