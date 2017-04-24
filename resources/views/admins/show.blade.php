@extends('app')
@section('content')
    <h1>Show Admin </h1>

<!-- This will show admin details -->
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>ID</td>
                <td><?php echo ($admin['id']); ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo ($admin['name']); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo ($admin['email']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($admin['address']); ?></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><?php echo ($admin['zip']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($admin['phone']); ?></td>
            </tr>
            </tbody>
      </table>
    </div>

@stop
