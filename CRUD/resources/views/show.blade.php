<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<body>
	<div class="container">
		<table class="table table-bordered shadow text-center table-striped">
			<tr>
				<th>post id</th>
				<th>post title</th>
				<th>post author</th>
				<th>post delete</th>
				<th>post edit</th>
			</tr>
			@foreach($posts as $post)
			<tr>
				<td>{{$post->id}}</td>
				<td>{{$post->post_title}}</td>
				<td>{{$post->post_author}}</td>
				<td><a href="/delete/{{$post->id}}" class="btn btn-danger">delete</a></td>
				<td><a href="/edit/{{$post->id}}" class="btn btn-success">update</a></td>
			</tr>
			@endforeach
		</table>

	</div>

</body>
</html>