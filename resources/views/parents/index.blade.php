<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents</title>
</head>
<body>
<h1>Parents</h1>
<a href="{{ route('parents.create')}}">Create Parents</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
</tr>
</thead>
<tbody>
    @forelse($parents as $parent)
    <tr>
        <td>{{$parent->id}}</td>
        <td>
            <a href="{{ route('parents.show',$parent->id)}}">{{$parent->name}}</a>
        </td>
        <td>{{$parent->gender}}</td>
    </tr>  
    @empty
    <p>There're no superpowers.</p> 
    @endforelse
</body>
</html>