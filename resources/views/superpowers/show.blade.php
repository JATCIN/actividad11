<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>{{$superpower->name}}</title>
</head>
<body>
    <h1>{{$superpower->name}}</h1>
    <p>{{$superpower->description}}</p>
    <a href="{{route('superpowers.edit',$superpower->id)}}">Editar</a><br><br>
    <f<orm action="{{route('superpowers.destroy',$superpower->id)}}"method="post">
        @method('delete')
        @csrf
        <button type="submit" onclick="return confirm('Are you sure you eant to delete this record?')">Delete</button>
</body>
</html>