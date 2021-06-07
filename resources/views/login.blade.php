<h2>User Login</h2>

<form method="POST" action="{{ url('user') }}">
   @csrf
  <input type="text" name="username" placeholder="enter username"><br><br>
  <input type="password" name="password" placeholder="enetrr password"><br><br>
  <button type="submit">Submit</button>
</form>