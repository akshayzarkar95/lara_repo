<h1>
    Image Upload
</h1>

<form action="{{url('imgsave')}}" method="POST" enctype="multipart/form-data">
@csrf
   <input type="file" name="file" alt=""><br><br>
   <input type="submit" name="submit" value="Submit">
</form>


