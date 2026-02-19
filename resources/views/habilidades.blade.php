<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades</title>
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
            <h2>Habilidades Técnicas</h2>
            <p class="muted">
                En esta sección presento mis habilidades técnicas relacionadas con el desarrollo Back End.
            </p>

            <hr class="divider">

            <article class="card-inner">
                <h3>💻 Lenguajes y fundamentos</h3>
                <ul class="list">
                    <li><b>PHP:</b> variables, condicionales, ciclos, funciones, manejo de formularios.</li>
                    <li><b>HTML y CSS:</b> estructura de páginas, buenas prácticas básicas, maquetación simple.</li>
                    <li><b>JavaScript (básico):</b> interacción simple (cuando se requiere en front).</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>🧩 Laravel (nivel inicial)</h3>
                <ul class="list">
                    <li>Creación de proyectos y estructura general de Laravel.</li>
                    <li>Definición de rutas con <code>routes/web.php</code>.</li>
                    <li>Creación de vistas con Blade (<code>.blade.php</code>).</li>
                    <li>Organización por secciones (perfil, intereses, habilidades, metas).</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>🗄️ Bases de datos</h3>
                <ul class="list">
                    <li><b>MySQL (básico):</b> conceptos de tablas, claves, relaciones simples.</li>
                    <li><b>Consultas:</b> SELECT, WHERE, ORDER BY (nivel inicial).</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>🔧 Herramientas de trabajo</h3>
                <ul class="list">
                    <li><b>Git/GitHub:</b> init, add, commit, push (historial ordenado por cambios).</li>
                    <li><b>Composer:</b> instalación de dependencias en proyectos PHP/Laravel.</li>
                    <li><b>VS Code:</b> extensiones y organización del proyecto.</li>
                    <li><b>Servidor local:</b> uso de <code>php artisan serve</code> para pruebas.</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>✅ Buenas prácticas (en progreso)</h3>
                <ul class="list">
                    <li>Nombres claros de variables y estructura ordenada.</li>
                    <li>Commits descriptivos y frecuentes (por cada vista/cambio importante).</li>
                    <li>Separación de secciones: cada página con su objetivo específico.</li>
                </ul>
            </article>
        </section>

        <footer class="footer muted">
            Taller Laravel UNAB
        </footer>

    </main>

</body>
</html>