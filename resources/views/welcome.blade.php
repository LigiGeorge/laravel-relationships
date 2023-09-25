<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relationships</title>
</head>
<body>
    <h1>Users</h1>
    @foreach($users as $user)
    <h2>{{$user->name}}</h2>
    <p>Address</p>
    
    <Address> {{$user->address->address_line_1}}</Address>
    <Address> {{$user->address->city}}</Address>
    <Address> {{$user->address->post_code}}</Address>
    <Address> {{$user->address->state}}</Address>
    
    @endforeach
</body>
</html>