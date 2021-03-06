@extends('layouts.principalWeb')
@section('banner')

 <section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg-img/vestuario.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Puesta en Escena <br> <b>Carros Alegóricos</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection


@section('content')
<div id="fh5co-contact" style="background-image:  url({{ url('Carnaval/img/bg-img/st-2.png') }});">
		<div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div>
		<div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div>
		<div class="container text-justify">
			<div class="row">
				<div class="col-md-6 wow bounceInLeft" data-wow-delay="0.4s">
					<br><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div>

					<h3><img src="{{url('Carnaval1/img/text-img/carros-alegóricos.png')}}" class="img-responsive shake-slow" width="300px" height="305px"></h3>
                    <div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div><div class="mb-4"></div>
					<p>
					Seis gigantescos carros alegóricos, exhibirán con espectacularidad la historia ancestral del país, atractivos indiscutibles que deslumbrará a locales y extranjeros.</p><p>
					Las dimensiones del carro alegórico principal serán de 40M de largo, 11M de ancho y 15M de altura, producción que estuvo a cargo de 50 personas entre artistas, escultores, pintores y electricistas.
					Los carros acompañantes medirán de 10 a 30 M de largo, 11M de ancho y 15M de altura.</p>

				</div>
				<div class="col-md-6 wow bounceInRight" data-wow-delay="0.4s">
                    <br><br><div class="mb-4"></div><div class="mb-4"></div>
					<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('Carnaval1/img/pag/puesta/carrosalegóricos.png') }}"></div>

			</div>

		</div>
<br><br>
	</div>

@endsection

