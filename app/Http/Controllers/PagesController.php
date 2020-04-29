<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\LocationRequest;
use App\Models\LocationImmobilier;
use App\Models\LocationVoiture;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\LocationVoitureRequest;


class PagesController extends Controller
{
  public function home()
  {
   $immobilier=DB::select('SELECT * FROM location_immobiliers  ORDER BY id DESC LIMIT 4 ');
   $voiture=DB::select('SELECT * FROM location_voitures ORDER BY id DESC LIMIT 4 ');
   //dd($immobilier);
   return view('pages.acceuille',compact('immobilier'),compact('voiture'));
  }
  public function about()
  {
   return view('pages.about');
  }
  public function enregistrerLocation(LocationRequest $request)
  {
  //  dd(request('image'));
    $row=LocationImmobilier::create([
      'description'=>request('description'),
      'adresse'=>request('adresse'),
      'prix'=>request('prix'),
      'titre'=>request('titre'),
      'nombreAppartement'=>request('nombreAppartement'),
      'image'=>request('image'),
      'image1'=>request('image1'),
      'image2'=>request('image2'),
  ]);

        $this->storageImage($row);

        session()->flash('notification.message','Location publier avec succes !');
        session()->flash('notification.type','success');
        Flashy::success('Location publier avec succes !', 'http://your-awesome-link.com');
        return redirect(route('home'));
 }

  public function  enregistrerVoiture(LocationVoitureRequest $request){

      $image = $request->file('image_v');
      $new_name = rand() . '.' . $image->getClientOriginalExtension();

    $row=LocationVoiture::create([
      'titre'=>request('titre_v'),
      'description'=>request('description_v'),
      'adresse'=>request('adresse_v'),
      'prix'=>request('prix_v'),
       'image'=>$new_name,
  ]);



  $image->move(public_path('images'), $new_name);

  session()->flash('notification.message','Location Voiture publier avec succes !');
  session()->flash('notification.type','success');
  Flashy::success('Location Voiture publier avec succes !', 'http://your-awesome-link.com');
  return redirect(route('home'));
  }



  public function afficherImmobilier($id){
    $immo=LocationImmobilier::findOrFail($id);
    $immobilier=DB::select('SELECT * FROM location_immobiliers  ORDER BY id DESC LIMIT 4 ');
   return view('pages.afficherImmobilier',compact('immo'),compact('immobilier'));

  }

  public function afficherVoiture($id){
    $voit=LocationVoiture::findOrFail($id);
    //$voiture=DB::select('SELECT * FROM location_voitures LIMIT 4');
    $voiture=DB::select('SELECT * FROM location_voitures ORDER BY id DESC LIMIT 4 ');
   return view('pages.afficherVoiture',compact('voiture'),compact('voit'));
  }

  public function Immobilier(){
     $immobilier=DB::table('location_immobiliers')->orderBy('id','desc')->paginate(8);
     //$immobilier=DB::select('SELECT * FROM location_immobiliers LIMIT 4');
     return view('pages.immobilier',compact('immobilier'));
  }





  public function voiture(){
   //  $voiture=DB::select('SELECT * FROM location_voitures LIMIT 4');
    $voiture=DB::table('location_voitures')->orderBy('id','desc')->paginate(8);
   return view('pages.Voiture',compact('voiture'));

  }


  private function storageImage(LocationImmobilier $LocationImmobilier){
     if (request('image')) {
      $LocationImmobilier->update([
          'image'=>request('image')->store('avatars','public'),
          'image1'=>request('image1')->store('avatars','public'),
          'image2'=>request('image2')->store('avatars','public'),
      ]);
     }
  }


 public function afficherTout(){
     $immobilier=DB::table('location_immobiliers')->orderBy('id','desc')->paginate(500);
     $voiture=DB::table('location_voitures')->orderBy('id','desc')->paginate(500);
     return   view('pages.afficherTout',compact('immobilier'),compact('voiture'));
 }


 public function supprimeri($id){
   $supprimer=DB::select('DELETE  FROM location_immobiliers  where id='.$id);
  // session()->flash('notification.message','Location publier avec succes !');
  // session()->flash('notification.type','success');
   Flashy::success('Location publier avec succes !', 'http://your-awesome-link.com');
   return redirect(route('afficherTout'));
 }


 public function supprimerv($id){
   $supprimer=DB::select('DELETE  FROM location_voitures  where id='.$id);
  // session()->flash('notification.message','Location publier avec succes !');
  // session()->flash('notification.type','success');
   Flashy::success('Location publier avec succes !', 'http://your-awesome-link.com');
   return redirect(route('afficherTout'));
 }


}
