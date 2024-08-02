<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página de Videojuegos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Mi Página de Videojuegos</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#juegos">Juegos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio">
            <h2>Bienvenidos a mi página de videojuegos</h2>
            <p>Encuentra los mejores juegos y novedades aquí.</p>
        </section>
        <section id="juegos">
            <h2>Lista de Juegos</h2>
            <?php
                // Array de juegos
                $juegos = [
                    ["nombre" => "Saga Call Of Duty", "descripcion" => "La saga de Call of Duty (CoD) es una serie de videojuegos d>
                    ["nombre" => "Saga Fallout", "descripcion" => "Fallout es una serie de videojuegos de rol y acción postapocalíp>
                    // Agrega más juegos aquí
                ];

                // Mostrar juegos
                foreach ($juegos as $juego) {
                    echo '<div class="juego">';
                    echo '<h3>' . $juego["nombre"] . '</h3>';
                    echo '<img src="' . $juego["imagen"] . '" alt="Imagen de ' . $juego["nombre"] . '">';
                    echo '<p>' . $juego["descripcion"] . '</p>';
                    echo '</div>';
                }
            ?>
        </section>
    </main>

    <footer>
        <p>© 2024 Mi Página de Videojuegos. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
