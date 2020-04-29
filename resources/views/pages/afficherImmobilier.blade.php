@extends('layouts.default',['title'=>'Home'])
@section('content')
<div class="container immo align="center"">

  <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel">
   <div class="carousel-inner">
     <div class="carousel-item active">
       @if($immo->image)
       <img class="d-block w-100 " src="{{asset('storage/'.$immo->image)}}" alt="First slide" >
       @endif
     </div>
     <div class="carousel-item">
       @if($immo->image)
       <img class="d-block w-100" src="{{asset('storage/'.$immo->image1)}}" alt="Second slide">
        @endif
     </div>
     <div class="carousel-item">
       @if($immo->image)
       <img class="d-block w-100" src="{{asset('storage/'.$immo->image2)}}" alt="Third slide">
       @endif
     </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>

  <h2>Description</h2>
  <p class="">{{$immo->description}}</p>
  <h2 class="bg-primary tc">Montant nette par mois : {{$immo->prix}} FCFA</h2>
  <h2 class="bg-success tc">adresse : {{$immo->adresse}}</h2>
  <h2 class="bg-info tc">Nombre d'appartements : {{$immo->nombreAppartement}}</h2>
  <h2 class="bg-warning tc">Contacté nous aux 774542457 ou au 338542138</h2>
</div>

<main role="main ba">
  <div class="album py-5 bg-light ba">
    <div class=" pa ba ">
      <div class="row ba">

        @foreach($immobilier as $immo)
        <div class="col-md-3 ba">
          <div class="card mb-4 shadow-sm ba">
            <img src="{{asset('es.jpg')}}" alt="" height="225">
            <div class="card-body ba">
              <p class="card-text">{{$immo->titre}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" ><a href="{{route('afficherImmobilier',['id'=>$immo->id])}}">View</a></button>

                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div class="ba">
              </div>
            </div>
          </div>
        </div>
       @endforeach




      </div>
    </div>
  </div>

</main>
@stop
