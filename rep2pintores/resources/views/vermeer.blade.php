@extends('layouts.master')
@section('title', $title)
@section('titulo')
    <h1>{{$title}}</h1>
@stop
@section('titulo.side', $title)

@section('main')
    <main>
        <article>

            <h3>(Delft, Países Bajos, 1632-id., 1675) Pintor holandés. La documentación con la que se cuenta en la actualidad parece demostrar que Vermeer no fue un pintor famoso en su tiempo, pese a lo cual en nuestros días se le considera la gran figura del siglo XVII holandés, después de Rembrandt. Probablemente, lo que más gusta de su arte es lo inusual de la temática, la fuerza de la composición y el empleo de pocos colores, claros y brillantes.
                Salvo una visita a La Haya en 1672 para actuar como testigo en un pleito, pasó toda su vida en Delft, donde perteneció al gremio de pintores, que dirigió en dos ocasiones. Se cree, sin embargo, que nunca se dedicó profesionalmente a la pintura, sino que regentó el hostal heredado de su padre y el negocio de marchante de arte legado igualmente por su progenitor.
                En 1653 casó con Caterina Bolnes, perteneciente a una acomodada familia católica, que le dio once hijos. La necesidad de mantener a una familia tan numerosa le impidió gozar de suficiente desahogo económico, tal como demuestra el hecho de que, un año después de su fallecimiento, la viuda solicitara ser declarada insolvente.
                Sus obras, realizadas probablemente por el puro placer de pintar, representan escenas de la vida cotidiana, por lo general interiores con una o dos figuras y algunos objetos, plasmados con pinceladas densas y pastosas y con una iluminación que realza el efecto de intimidad y otorga a la escena cierto halo de misterio. Muy pocas de sus creaciones se apartan de esta línea general (algunas escenas religiosas y mitológicas), que es con diferencia la más valorada del artista.
                Por el rigor de la perspectiva y los reflejos se ha llegado a sugerir que pudo servirse de una cámara oscura para producir sus obras. Creaciones muy destacadas son también los dos únicos paisajes de su mano que se conocen, en particular la Vista de Delft, obra que supera las realizaciones de los mejores paisajistas de la época.

            </h3>

        </article>

        <div class="imagenes">

            <div>
                <h2>La joven de la perla</h2>
                <img float="left" src="https://upload.wikimedia.org/wikipedia/commons/6/66/Johannes_Vermeer_%281632-1675%29_-_The_Girl_With_The_Pearl_Earring_%281665%29.jpg" alt="aque.jpg" width="600" height="850">

            </div>
            <br> <br> <br>
            <div>
                <h2>La callejuela</h2>
                <img float="left" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Johannes_Vermeer_-_Gezicht_op_huizen_in_Delft%2C_bekend_als_%27Het_straatje%27_-_Google_Art_Project.jpg/1200px-Johannes_Vermeer_-_Gezicht_op_huizen_in_Delft%2C_bekend_als_%27Het_straatje%27_-_Google_Art_Project.jpg" alt="aque.jpg" width="600" height="850">

            </div>
            <br> <br> <br>
            <div>
                <h2>La lechera </h2>
                <img float="left" src="https://charlarte.com/wp-content/uploads/2019/06/vestimenta-473x1024.png" alt="aque.jpg" width="600" height="850">

            </div>


        </div>
    </main>
@stop

@section('name', 'Jesús Alejandro Torres Ramírez 5E')
