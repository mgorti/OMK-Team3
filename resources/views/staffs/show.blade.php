@extends('app')
@section('content')
    <h1>Show Staff </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($staff['name']); ?></td>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo ($staff['id']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($staff['address']); ?></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><?php echo ($staff['zip']); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo ($staff['email']); ?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?php echo ($staff['phone']); ?></td>
            </tr>
            
                  
            </tbody>
      </table>
    </div>
  
@stop
