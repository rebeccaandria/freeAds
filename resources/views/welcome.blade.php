@extends('layouts.app')

@section('content')
<div class="container">
@if (session()->has('success'))
<div class="alert alert-success">
{{ session()->get('success') }}
</div>
@endif
<h1>BECCAFREEADS</h1>
</div>
@endsection