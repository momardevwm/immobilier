@extends('layouts.default',['title'=>'Accueille'])
@section('content')
<h1 class="text-center ba">Reussite total ! Pourquoi pas Vous</h1>
<main role="main ba">
  <div class="album py-5 bg-light ba">
    <div class=" pa ba ">
      <div class="row ba">

        @foreach($immobilier as $immo)
        <div class="col-md-3 ba">
          <div class="card mb-4 shadow-sm ba">
            <img src="{{asset('storage/'.$immo->image)}}" alt="" height="225">
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



  <div class="album py-5 bg-light ba">
    <div class=" pa ba ">
      <div class="row ba">

       @foreach($voiture as $voi)
       <div class="col-md-3 ba">
         <div class="card mb-4 shadow-sm ba">
           <img src="{{asset('images/'.$voi->image)}}" alt="" height="225">
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
