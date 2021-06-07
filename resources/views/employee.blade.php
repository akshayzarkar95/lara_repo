<h1>Employye add</h1>

<form method="POST" action="{{url('save')}}" enctype="multipart/form-data">
@csrf
Name : <input type="text" name="name"> <br><br>
Email : <input type="email" name="email"> <br><br>
<input type="submit" name="submit" value="submit"> <br>
</form>

