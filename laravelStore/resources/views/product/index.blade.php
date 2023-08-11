@extends('layouts.app');
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row">
@foreach ($viewData['prodotti'] as $prodotto )
<div class="col-md4 col-lg-3 mb-2">
    <div class="card">
        <img src="{{ asset('img/'.$prodotto['image']) }}" class="card-img-top img-card">
        <div class="card-body text-center">
            <a href="{{ route('prodotto.show', ["id"=>$prodotto["id"]]) }}" class="btn bg-primary text-white">{{ $prodotto["name"]}}</a>
        </div>
    </div>
</div>

@endforeach
</div>

@endsection
