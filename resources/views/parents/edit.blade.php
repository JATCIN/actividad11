<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Parents</title>
</head>
<body>
    <h1>Create Parents</h1>
    <form action="{{ route('parents.update',$parent->id)}}" method="post">
       @method('put')
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$parent->name}}">
        
        <br><br>

        <label for="gender">Gender</label>
        <input type="text" name="gender" value="{{$parent->gender}}">
        <br><br>
    <button type="submit">Edit Parents</button>

    </form>
</body>
</html>