<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Add Data</h1>
		<form method="POST" action="/store">
			@csrf
			<div class="mb-3">
				<label><b>Post title:</b></label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="mb-3">
				<label><b>Post author:</b></label>
				<input type="text" name="author" class="form-control">
			</div>
			<input type="submit" name="insert" value="Insert" class="btn btn-primary">

		</form>

</body>
</html>