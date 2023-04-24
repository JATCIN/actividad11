<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Superpower</title>
</head>
<body>
<h1 style="text-align:center;"> CREATE SUPERPOWER</h1>
<form action="{{ route('superpowers.store') }}" method="post">
    @csrf
    <label for="name">Name *</label><br>
    <input type="text" name="name">

    <br><br>
    
    <label for="description">Description</label><br>
    <textarea name="description" cols="50" rows="5"></textarea>
    <br><br>
    <button type="submit">Create superpower</button>
</body>
</html>