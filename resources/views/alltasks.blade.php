<!DOCTYPE html>
<html>
<head>
	<title>All Tasks</title>
</head>
<body>
	<ul>
		@foreach ($task as $task)
			 <a href="/tasks/{{$task->id}}">
			 	<li>{{$task->body}}</li>
			 </a>
		@endforeach 
	</ul>	
</body>
</html>