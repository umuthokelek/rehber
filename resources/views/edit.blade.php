@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kişi Düzenle</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Kişiyi Düzenle</h2><br  />
        <form method="post" action="{{action('RehberController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="ad">Ad:</label>
            <input type="text" class="form-control" name="ad" value="{{$rehber->ad}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="soyad">Soyad:</label>
            <input type="text" class="form-control" name="soyad" value="{{$rehber->soyad}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="numara">Telefon Numarası:</label>
              <input type="text" class="form-control" name="numara" value="{{$rehber->numara}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="eposta">E-posta:</label>
              <input type="text" class="form-control" name="eposta" value="{{$rehber->eposta}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Güncelle</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
@endsection
