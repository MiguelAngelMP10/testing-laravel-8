<form action="profile" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo" require>
    <input type="submit" value="Enviar">
</form>
