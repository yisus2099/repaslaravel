@extends('layouts.master')
@section('title', $title)
@section('titulo')
    <h1>{{$title}}</h1>
@stop
@section('titulo.side', $title)

@section('main')
    <main>
        <article>

            <h3>Considerado el enfant terrible de la pintura sevillana del siglo XX, la obra de Baldomero Romero Ressendi (Sevilla, 1922-Madrid, 1977) no ha sido aun suficientemente valorada. Su fama de bohemio ensombreció la personalidad artística de Ressendi, que vino a convertirse en el símbolo del artista bohemio por excelencia.
                El autor de esta obra, Juan Manuel Covelo, doctor en Historia del Arte, pone en su justo valor la obra de Ressendi, el pintor figurativo más importante de los nacidos en la Sevilla del siglo XX, en esta monografía profusamente ilustrada. Con prólogo de Enrique Valdivieso, catedrático de Arte de la Hispalense, el libro profundiza en la biografía y en la amplia producción (bodegones, retratos, toros, temas religiosos, gitanos y circenses) de este artista, cuya obra puede enmarcarse en el expresionismo.

            </h3>

        </article>

        <div class="imagenes">

            <div>
                <h2>Encapuchado </h2>
                <img float="left" src="https://goyovigil50.files.wordpress.com/2009/11/romero1.jpg" alt="aque.jpg" width="600" height="850">
            </div>
            <br> <br> <br>
            <div>
                <h2>El papa negro</h2>
                <img float="left" src="https://i.pinimg.com/736x/e4/52/dc/e452dc3887af5b57946fec07e335c4fb.jpg" alt="aque.jpg" width="600" height="850">

            </div>
            <br> <br> <br>
            <div>
                <h2>La danza de los Pavos</h2>
                <img float="left" src="https://1.bp.blogspot.com/-vM4PmaWyrTM/T7bJZR9P7hI/AAAAAAAAJuA/stszzwlqWSg/s1600/La+danza+de+los+pavos+3.jpg" alt="aque.jpg" width="600" height="850">

            </div>

        </div>
    </main>

@stop

@section('name', 'Jesús Alejandro Torres Ramírez 5E')
