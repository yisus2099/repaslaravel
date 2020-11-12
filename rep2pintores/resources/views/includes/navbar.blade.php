
<div class="diana">
    <div class="navar">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><h4>@yield('title')</h4></a>
                </div>
                <ul class="nav navbar-nav">

        <li><a href="{{action('PruebaController@hola')}}"><h4>Inicio</h4>  </a></li>

        <li><a href="{{action('PruebaController@goya')}}"><h4>Goya </h4> </a></li>

        <li><a href="{{action('PruebaController@ress')}}"><h4>Ressendi</h4>  </a></li>

        <li><a href="{{action('PruebaController@velaz')}}"><h4>Velazquez</h4>  </a></li>

        <li><a href="{{action('PruebaController@ver')}}"><h4>Vermeer</h4> </a></li>

                </ul>
            </div>
        </nav>
    </div>
