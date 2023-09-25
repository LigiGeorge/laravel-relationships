<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relationships</title>
</head>
<body>
    <h1>User Address</h1>
    @foreach($address as $ad)
    
    <Address> {{$ad->address_line_1}}</Address>
    <Address> {{$ad->city}}</Address>
    <Address> {{$ad->post_code}}</Address>
    <Address> {{$ad->state}}</Address>
    <h3>{{$ad->user->name   }}</h3>
    <h3>{{$ad->user->status}}</h3>
    @endforeach
</body>
</html>