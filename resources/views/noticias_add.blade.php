<form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
    </div>
    <div>
        <label for="contenido">Contenido:</label>
        <textarea name="contenido" id="contenido" required></textarea>
    </div>
    <div>
        <label for="image_path">Imagen:</label>
        <input type="file" name="image_path" id="image_path" required>
    </div>
    <button type="submit">Agregar Noticia</button>
</form>