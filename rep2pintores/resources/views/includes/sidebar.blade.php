<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    @yield('titulo.side')
                </a>
            </li>
            <li>
                <a href="{{action('PruebaController@hola')}}">Inicio</a>
            </li>
            <li>
                <a href="{{action('PruebaController@goya')}}">Goya </a>
            </li>
            <li>
                <a href="{{action('PruebaController@ress')}}">Ressendi</a>
            </li>
            <li>
                <a href="{{action('PruebaController@velaz')}}">Velazquez</a>
            </li>
            <li>
                <a href="{{action('PruebaController@ver')}}">Vermeer</a>
            </li>

        </ul>
    </div>


</div>

