@extends('layouts.default',['title'=>'Administration'])

@section('content')
<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-12 col-md-offset-2 col-sm-10 col-sm-offset-1">
     <div class="card">
      <div class="card-header">Mettre Une maison ou appartement à louer</div>
      <form class="" action="{{route('location')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
          <label for="titre" class="control-label">titre</label>
          <input type="text" name="titre" id="titre" class="form-control @error('titre') is-invalid @enderror" value="{{ old('titre')}}">
          @error('titre')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="form-group {{ $errors->has('description') ? 'error' : ''}}">
          <label for="description" class="control-label">Description</label>
          <textarea name="description" rows="8" cols="90" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description')}}</textarea>
          @error('description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>


        <div class="form-group {{ $errors->has('adresse') ? 'has-error' : ''}}">
          <label for="adresse" class="control-label">adresse</label>
          <input type="text" name="adresse" id="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{ old('adresse')}}">
          @error('adresse')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>


        <div class="form-group {{ $errors->has('prix') ? 'has-error' : ''}}">
          <label for="prix" class="control-label">prix</label>
          <input type="text" name="prix" id="prix" class="form-control @error('prix') is-invalid @enderror" value="{{ old('prix')}}">
          @error('prix')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>


        <div class="form-group {{ $errors->has('nombreAppartementx') ? 'has-error' : ''}}">
          <label for="nombreAppartement" class="control-label">nombreAppartement</label>
          <input type="text" name="nombreAppartement" id="nombreAppartement" class="form-control @error('nombreAppartement') is-invalid @enderror" value="{{ old('nombreAppartement')}}">
          @error('nombreAppartement')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>


      <div class="form-group">
        <div class="custom-file">
          <input type="file" name="image" value="" class="custom-file-inpute @error('image') is-invalid @enderror" id="validatedCustomFile" required>
          <label for="validatedCustomFile" class="custom-file-label" multiple="multiple">Choisir une photo de la maison</label>
          @error('image')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

      <div class="form-group">
        <div class="custom-file">
          <input type="file" name="image1" value="" class="custom-file-inpute @error('image1') is-invalid @enderror" id="validatedCustomFile1" required>
          <label for="validatedCustomFile1" class="custom-file-label" multiple="multiple">Choisir une deuxieme photo de la maison</label>
          @error('image1')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>

      <div class="form-group">
        <div class="custom-file">
          <input type="file" name="image2" value="" class="custom-file-inpute @error('image2') is-invalid @enderror" id="validatedCustomFile2" required>
          <label for="validatedCustomFile2" class="custom-file-label" multiple="multiple">Choisir une troisieme photo de la maison</label>
          @error('image2')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>





        <div class="form-group">
          <button class="btn btn-primary btn-block" type="submit" name="button">publier une maison&raquo;</button>
        </div>
      </form>
   </div>
   </div>
 </div>
</div>










<div class="container">
 <div class="row justify-content-center">
   <div class="col-md-12 col-md-offset-2 col-sm-10 col-sm-offset-1">
     <div class="card">
      <div class="card-header">Mettre Une une voiture à louer</div>
      <form class="" action="{{route('location_voitures')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('titre_v') ? 'error' : ''}}">
          <label for="titre_v" class="control-label">titre</label>
          <input type="text" name="titre_v" id="titre_v" class="form-control @error('titre_v') is-invalid @enderror" value="{{ old('titre_v')}}">
          @error('titre_v')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>


        <div class="form-group {{ $errors->has('description_v') ? 'error' : ''}}">
          <label for="description_v" class="control-label">Description</label>
          <textarea name="description_v" rows="8" cols="90" class="form-control @error('description_v') is-invalid @enderror" id="description_v">{{ old('description_v')}}</textarea>
          @error('description_v')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="form-group {{ $errors->has('adresse_v') ? 'has-error' : ''}}">
          <label for="adresse_v" class="control-label">adresse_v</label>
          <input type="text" name="adresse_v" id="adresse_v" class="form-control @error('adresse_v') is-invalid @enderror" value="{{ old('adresse_v')}}">
          @error('adresse_v')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>


        <div class="form-group {{ $errors->has('prix_v') ? 'has-error' : ''}}">
          <label for="prix_v" class="control-label">prix</label>
          <input type="text" name="prix_v" id="prix_v" class="form-control @error('prix_v') is-invalid @enderror" value="{{ old('prix_v')}}">
          @error('prix_v')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>




        <div class="form-group">
          <table class="table">
           <tr>
            <td width="40%" align="right"><label>Choisir une photo de la voiture</label></td>
            <td width="30"><input type="file" name="image_v" /></td>
            <td width="30%" align="left"></td>
           </tr>
           <tr>
            <td width="40%" align="right"></td>
            <td width="30"><span class="text-muted">jpg, png, gif</span></td>
            <td width="30%" align="left"></td>
           </tr>
          </table>
         </div>



        <div class="form-group">
          <button class="btn btn-success btn-block" type="submit" name="button">Publier une voiture &raquo;</button>
        </div>
      </form>
   </div>
   </div>
 </div>
</div>
@endsection
