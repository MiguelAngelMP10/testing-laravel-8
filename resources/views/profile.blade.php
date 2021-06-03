<form action="profile" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <input type="file" name="photo" require>
    <input type="submit" value="Enviar">
</form>
