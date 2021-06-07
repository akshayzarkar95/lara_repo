<h2>Store User</h2>
@if(session('username'))
<h3> data saved for {{session('username')}} </h3>
@endif
<form method="POST" action="{{ url('save') }}">
   @csrf
  <input type="text" name="username" placeholder="enter username"><br><br>
  <input type="password" name="password" placeholder="enetrr password"><br><br>
  <input type="email" name="email" placeholder="enetrr email"><br><br>
  <button type="submit">Submit</button>
</form>