<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Place Details</h2>
<table class="table table-hover">
<thead>
<tr>
<th>Title</th>
<th >description</th>
<th>CreatedAt</th>
<th>Edit</th>
<th>delete</th>


</tr>
</thead>
<tbody>
@foreach ($Places as $Place)
<tr>
<td>{{$Place->Title}}</td>
<td>{{$Place->description }}</td>
<td>{{$Place->created_at }}</td>
<td><a href="edit-Places/{{$Place->id}}">Edit</a></td>
<td><a href="delete-Places/{{$Place->id}}">deletePlaces</a></td>



</tr>
@endforeach
</tbody>
</table>
</div>
</body>
</html>

        '