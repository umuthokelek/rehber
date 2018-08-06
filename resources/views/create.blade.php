@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rehber</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
  </head>
  <body>
    <div class="container">
      <h2>Yeni Kişi</h2><br/>
      <form method="post" action="{{url('home')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Ad">Ad:</label>
            <input type="text" class="form-control" name="ad">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Soyad">Soyad:</label>
            <input type="text" class="form-control" name="soyad">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Numara">Telefon numarası:</label>
              <input type="text" class="form-control" name="numara">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Eposta">E-Posta:</label>
              <input type="text" class="form-control" name="eposta">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Kaydet</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
@endsection
