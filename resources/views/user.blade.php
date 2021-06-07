<!DOCTYPE html>
<html>
<head>
	<title></title>
<x-header componentName="Users" />
</head>
<body>


<h1>hello {{session('username')}}</h1>

<a href="{{url('logout')}}">Logout</a>
<!--@include('inner')

@csrf
<?php $names = array('akshay'); ?>
//@foreach($names as $user)
<h2>//{{ $user }}</h2>
//@endforeach

<script type="text/javascript">
	//var data = @json($names);
	//console.log(data);
</script-->
</body>
</html>