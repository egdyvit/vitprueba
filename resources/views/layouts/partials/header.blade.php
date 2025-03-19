<header>
    <h1>Prueba Vit</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ""}}">Home</a></li>
                <li><a href="{{route('curso.index')}}" class="{{request()->routeIs('curso.*') ? 'active' : ""}}">Lista de Cursos</a></li>
                <li><a href="{{route('curso.create')}}" class="{{request()->routeIs('curso.create') ? 'active' : ""}}">Crear Curso</a></li>
                <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ""}}">Nosotros</a></li>
            </ul>
        </nav>
    </h1>
</header>