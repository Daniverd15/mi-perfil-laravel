<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metas</title>
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
            <h2>Metas</h2>
            <p class="muted">
                En esta sección presento mis metas a corto, mediano y largo plazo (en el área de desarrollo Back End).
            </p>

            <hr class="divider">

            <article class="card-inner">
                <h3>📌 Corto plazo (1 a 2 meses)</h3>
                <ul class="list">
                    <li>Completar el taller de Laravel con rutas, vistas y estilos bien organizados.</li>
                    <li>Fortalecer fundamentos de PHP (arreglos, funciones, validaciones y formularios).</li>
                    <li>Practicar Git con commits frecuentes y descriptivos.</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>📈 Mediano plazo (3 a 6 meses)</h3>
                <ul class="list">
                    <li>Construir un proyecto pequeño completo en Laravel (CRUD básico + base de datos).</li>
                    <li>Aprender a conectar Laravel con MySQL usando migraciones y modelos.</li>
                    <li>Entender autenticación y roles básicos (login/register).</li>
                    <li>Consumir y crear APIs REST (JSON).</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>🚀 Largo plazo (6 a 12 meses)</h3>
                <ul class="list">
                    <li>Crear un portafolio con 2 a 3 proyectos (bien documentados).</li>
                    <li>Mejorar arquitectura del código: organización, patrones y buenas prácticas.</li>
                    <li>Prepararme para un rol junior en desarrollo Back End.</li>
                    <li>Aprender despliegue básico (hosting, dominio, servidores) y seguridad esencial.</li>
                </ul>
            </article>

            <article class="card-inner">
                <h3>✅ Plan de acción semanal</h3>
                <p class="muted">
                    Para avanzar, me propongo una rutina de estudio constante:
                </p>
                <ul class="list">
                    <li>3 días: práctica en Laravel (rutas, vistas, controladores).</li>
                    <li>2 días: ejercicios de PHP (lógica y formularios).</li>
                    <li>1 día: repaso y documentación (resúmenes + GitHub).</li>
                    <li>1 día: descanso o práctica ligera.</li>
                </ul>
            </article>
        </section>

        <footer class="footer muted">
            Taller Laravel UNAB
        </footer>

    </main>

</body>
</html>