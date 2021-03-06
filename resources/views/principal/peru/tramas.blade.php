@extends('layouts.principalWeb')
@section('banner')
 <section class="breadcrumb-area  jarallax" id="bane" style="background-image: url({{ url('Carnaval1/img/bg-img/trama.jpg') }});">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content wow tada">
                        <h1 class="heading-section" style="color:white">Puesta en Escena <br><b>Tramas</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')
<div id="fh5co-contact" style="background-image: url({{ url('Carnaval/img/bg-img/st-2.png') }});">
		<div class="container text-justify">
			  <div class="row" >
				<div class="col-md-6  animate-box wow bounceInLeft" data-wow-delay="0.4s">
					<div class="mb-4"></div>
					<img src="{{url('Carnaval1/img/text-img/trama.png')}}" class="img-responsive shake-slow" width="200px" height="205px">
					<div class="mb-4"></div>
					<p>La escuela de samba Unidos de Vila María homenajeará al Perú con el tema <b><i>"En las alas del gran pájaro, el vuelo de Vila María al imperio del Sol"</i></b>.

					</p>
					<p>
						El tema revive la historia ancestral del Perú, mediante un viaje en el tiempo, que contempla momentos y lugares representativos de la costa, sierra y selva, como los nevados de los Andes, el lago Titicaca, el nacimiento majestuoso de la vida como cuando emergieron de sus aguas Manco Capac y Mama Ocllo, bajo el resplandeciente dios sol (Inti).
					</p>
					<p>

						Los artistas representarán al inca guerrero y las riquezas que se esconden bajo las montañas peruanas, iluminados por el sol y protegido por el fiel cóndor, así como la fe en divinidades, y los altares sagrados alabados en danzas y procesiones.
					</p>
					<p>

						El gran pájaro representa el abrazo entre Perú y Brasil, calentadas por el astro rey y el calor humano en una misma celebración, que permite ser súbditos del inmenso imperio del sol.
					</p>

				</div>

				<div class="col-md-6 animate-box wow bounceInRight" data-wow-delay="0.4s">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<img class="img-responsive img-thumbnail- bounce-in hvr-ripple-out" src="{{ url('Carnaval1/img/pag/puesta/trama.png') }}">
				</div>
				<div class="mb-2"></div>
				<br>
			</div>



		</div>

	</div>

@endsection