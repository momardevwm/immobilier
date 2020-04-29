@extends('layouts.default',['title'=>'Mieux nous connatre'])
@section('content')
<h1 class="text-center bg-success tc ">Pour mieux nous connaitre</h1>
<div class="container">
  <h2 class="bg-danger tc" align="center">Supprimer les locations</h2>
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titre</th>
      <th scope="col">Adresse</th>
      <th scope="col">Prix</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>

   @foreach($immobilier as $immo)
    <tr>
      <th scope="row">{{$immo->id}}</th>
      <th scope="row">{{$immo->titre}}</th>
      <td>{{$immo->adresse}}</td>
      <td>{{$immo->prix}}</td>
      <td> <a href="{{route('supprimeri',['id'=>$immo->id])}}">supprimer</a> </td>

    </tr>

    @endforeach

  </tbody>
</table>



<h2 class="bg-danger tc" align="center">Supprimer les Voitures</h2>
<table class="table table-sm">
<thead>
  <tr>
    <th scope="col">Id</th>
    <th scope="col">Titre</th>
    <th scope="col">Adresse</th>
    <th scope="col">Prix</th>
    <th scope="col">Supprimer</th>
  </tr>
</thead>
<tbody>

 @foreach($voiture as $voi)
  <tr>
    <th scope="row">{{$voi->id}}</th>
    <th scope="row">{{$voi->titre}}</th>
    <td>{{$voi->adresse}}</td>
    <td>{{$voi->prix}}</td>
    <td> <a href="{{route('supprimerv',['id'=>$voi->id])}}">supprimer</a> </td>

  </tr>

  @endforeach

</tbody>
</table>

</div>
@stop
