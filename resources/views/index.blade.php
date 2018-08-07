@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rehber Kişileri</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Telefon Numarası</th>
        <th>E-Posta</th>
        <th colspan="2">İşlemler</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($rehber as $rehber)
      <tr>
        <td>{{$rehber['id']}}</td>
        <td>{{$rehber['ad']}}</td>
        <td>{{$rehber['soyad']}}</td>
        <td>{{$rehber['numara']}}</td>
        <td>{{$rehber['eposta']}}</td>
        
        <td><a href="{{action('RehberController@edit', $rehber['id'])}}" class="btn btn-primary">Düzenle</a></td>
        <td>
          <form action="{{action('RehberController@destroy', $rehber['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Sil</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

   <a href="{{action('RehberController@create')}}" class="btn btn-success">Yeni Kişi</a>
  </div>
  </body>
</html>
@endsection
