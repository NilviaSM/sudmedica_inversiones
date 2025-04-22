<style>
    /* Contenedor principal del formulario */
    form {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9; /* Fondo claro */
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
        font-family: Arial, sans-serif;
    }

    /* Estilo para los labels */
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    /* Estilo para los inputs y textarea */
    input[type="text"],
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        box-sizing: border-box;
    }

    /* Botón de envío */
    button {
        width: 100%;
        padding: 12px;
        background-color: #007bff; /* Color principal */
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3; /* Color más oscuro al pasar el cursor */
    }

    /* Responsividad */
    @media (max-width: 768px) {
        form {
            padding: 15px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            font-size: 14px;
        }

        button {
            font-size: 14px;
        }
    }
</style>

<form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" placeholder="Ingrese el título de la noticia" required>
    </div>
    <div>
        <label for="contenido">Contenido:</label>
        <textarea name="contenido" id="contenido" rows="5" placeholder="Ingrese el contenido de la noticia" required></textarea>
    </div>
    <div>
        <label for="image_path">Imagen:</label>
        <input type="file" name="image_path" id="image_path" required>
    </div>
    <button type="submit">Agregar Noticia</button>
</form>

