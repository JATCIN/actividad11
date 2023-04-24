<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Superpower</title>
</head>
<body>
    <h1 style="text-align:center;">EDIT SUPERPOWER</h1>

    <from action="{{route('superpowers.update',$superpower->id)}}"method="post">
        @method('put')
        @csrf

        <label for="name">Name *</label><br>
        <input type="text" name="name" value="{{$superpower->name}}">

        <br><br>

        <label for ="description">Description</label><br> 
        <textarea name ="description" cols="50" rows="5"> {{$superpower->description}}</textarea>
        
        <br><br>

        <button type="submit">EDIT SUPERPOWER</button>
</body>
</html>