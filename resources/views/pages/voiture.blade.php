@extends('layouts.default',['title'=>'Location voiture'])
@section('content')
<h1 class="text-center ba">Reussite total ! Pourquoi pas Vous</h1>
<main role="main ba">
  <div class="album py-5 bg-light ba">
    <div class=" pa ba ">
      <div class="row ba">

        @foreach($voiture as $voi)
        <div class="col-md-3 ba">
          <div class="card mb-4 shadow-sm ba">
            <img src="{{asset('2v.jpg')}}" alt="" height="225">
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

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      {{$voiture->links()}}
    </div>
  </div>

</main>
@stop
