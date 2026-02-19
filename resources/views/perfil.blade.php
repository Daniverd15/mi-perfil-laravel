<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
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
            <div class="profile-header">
                <div class="profile-main">
                    <h2>Daniel Enrique Villamizar Ramírez</h2>
                    <p class="muted">
                        Estudiante de Desarrollo Back End, enfocado en PHP y Laravel.
                        Me gusta construir soluciones claras, ordenadas y fáciles de mantener.
                    </p>

                    <ul class="list">
                        <li><b>Ciudad:</b> Bucaramanga, Colombia</li>
                        <li><b>Rol:</b> Desarrollador Back End en formación</li>
                        <li><b>Enfoque:</b> Backend con PHP / Laravel</li>
                    </ul>
                </div>
            </div>

            <hr class="divider">

            <div class="grid">
                <article class="card-inner">
                    <h3>Sobre mí</h3>
                    <p class="muted">
                        Soy una persona disciplinada y curiosa. Estoy construyendo un portafolio con proyectos
                        pequeños pero bien hechos, aplicando buenas prácticas y mejorando paso a paso.
                    </p>
                </article>

                <article class="card-inner">
                    <h3>Contacto</h3>
                    <ul class="list">
                        <li><b>Email:</b> dvillamizar435@unab.edu.co</li>
                        <li><b>Teléfono:</b> +57 300 123 4567</li>
                        <li><b>GitHub:</b> https://github.com/Daniverd15</li>
                    </ul>
                </article>

                <article class="card-inner">
                    <h3>Formación</h3>
                    <ul class="list">
                        <li><b>Curso:</b> Desarrollo Back End (UNAB)</li>
                        <li><b>Temas:</b> Laravel, rutas, vistas Blade, estilos</li>
                        <li><b>Base:</b> HTML, CSS, PHP</li>
                    </ul>
                </article>

                <article class="card-inner">
                    <h3>Fortalezas</h3>
                    <ul class="list">
                        <li>✅ Responsabilidad y constancia</li>
                        <li>✅ Organización y orden en el código</li>
                        <li>✅ Aprendizaje continuo</li>
                        <li>✅ Comunicación y trabajo en equipo</li>
                    </ul>
                </article>
            </div>
        </section>

        

    </main>

    <footer class="footer muted">
            Taller Laravel UNAB
        </footer>

</body>
</html>