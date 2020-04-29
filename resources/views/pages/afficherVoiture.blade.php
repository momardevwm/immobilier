@extends('layouts.default',['title'=>'Home'])
@section('content')
<div class="immo align="center"">

  <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel">
   <div class="carousel-inner">
     @if($voit->image)
     <div class="carousel-item active">
       <img class="d-block w-100 " src="{{asset('images/'.$voit->image)}}" alt="First slide">
     </div>
     @endif
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
  <p class="">{{$voit->description}}</p>
  <h2 class="bg-primary tc">Prix : {{$voit->prix}} FCFA</h2>
  <h2 class="bg-success tc">adresse : {{$voit->adresse}}</h2>
  <h2 class="bg-warning tc">Contacté nous aux 774542457 ou au 338542138</h2>
</div>

<main role="main ba">
  <div class="album py-5 bg-light ba">
    <div class=" pa ba ">
      <div class="row ba">

        @foreach($voiture as $voi)
        <div class="col-md-3 ba">
          <div class="card mb-4 shadow-sm ba">
            <img src="{{asset('1v.jpg')}}" alt="" height="225">
            <div class="card-body ba">
              <p class="card-text">{{$voi->titre}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" ><a href="{{route('afficherVoiture',['id'=>$voi->id])}}">View</a></button>

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
