@if ($errors->any())
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
@endif

<form action="profile" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo" require>
    <input type="submit" value="Enviar">
</form>
