@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
@foreach ($ads as $ad)<br>
<div class="card" style="width: 100%;">
  <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{ $ad->title}}</h5>
    <small>{{ Carbon\Carbon::parse($ad->created_at)->diffForHumans()}}</small>
    <p class="card-text text-info">{{$ad->localisation}}</p>
    <p class="card-text">{{$ad->description}}</p>
    <a href="#" class="btn btn-primary">Voir l'annonce</a>
  </div>
</div>
@endforeach
{{ $ads->links()}}
</div>
</div>
    </div>
@endsection