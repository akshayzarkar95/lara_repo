<!DOCTYPE html>
<html>

<table>
<tr>
  <td>id</td>
  <td>name</td>
  <td>email</td>
</tr>
@foreach($employees as $emp)
<tr>
  <td>{{$emp['id']}}</td>
  <td>{{$emp['name']}}</td>
  <td>{{$emp['email']}}</td>
</tr>
@endforeach
</table>
<div>
  {{$employees->links()}}
</div>
<style>
   .w-5{
       display: none;
   }
</style>
</html>