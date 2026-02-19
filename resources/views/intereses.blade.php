<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intereses</title>
</head>
<body>

    <header class="topbar">
        <div class="brand">
            <h1>Mi Perfil</h1>
            <p class="muted">Taller básico Laravel • UNAB</p>
        </div>

        <nav class="nav">
            <a class="{{ request()->is('perfil') ? 'active' : '' }}" href="/perfil">Perfil</a>
            <a class="{{ request()->is('perfil/intereses') ? 'active' : '' }}" href="/perfil/intereses">Intereses</a>
            <a class="{{ request()->is('perfil/habilidades') ? 'active' : '' }}" href="/perfil/habilidades">Habilidades</a>
            <a class="{{ request()->is('perfil/metas') ? 'active' : '' }}" href="/perfil/metas">Metas</a>
        </nav>
    </header>

    <main class="container">

        <section class="card">
            <h2>Intereses</h2>
            <p class="muted">
                En esta sección presento mis pasatiempos y gustos (enfocados en mi crecimiento personal y profesional).
            </p>

            <hr class="divider">

            <article class="card-inner">
                <h3>🧠 Tecnología y aprendizaje</h3>
                <ul class="list">
                    <li>Explorar nuevas herramientas de desarrollo (Laravel, APIs REST, bases de datos).</li>
                    <li>Ver contenido educativo (cursos cortos, documentación, videos técnicos).</li>
                    <li>Buenas prácticas: orden del código, estructura de proyectos y Git.</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>🎮 Entretenimiento</h3>
                <ul class="list">
                    <li>Videojuegos casuales (estrategia/aventura) para desconectarme y despejar la mente.</li>
                    <li>Series o películas (especialmente ciencia ficción y tecnología).</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>🏃‍♂️ Bienestar</h3>
                <ul class="list">
                    <li>Actividad física ligera (caminar, rutinas cortas en casa).</li>
                    <li>Mejorar hábitos: descanso, organización del tiempo y constancia.</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>🎯 Intereses profesionales</h3>
                <p class="muted">
                    Me interesa especializarme en desarrollo Back End: creación de rutas, controladores,
                    conexión a bases de datos, autenticación y construcción de APIs.
                </p>
                <ul class="list">
                    <li>Aplicaciones web con Laravel.</li>
                    <li>Consumo y creación de APIs (JSON).</li>
                    <li>MySQL / PostgreSQL y modelado de datos.</li>
                    <li>Despliegue y buenas prácticas de seguridad básica.</li>
                </ul>
            </article>
        </section>

        <footer class="footer muted">
            Taller Laravel UNAB
        </footer>

    </main>
</body>
</html>