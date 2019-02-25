@extends('master')
@section('title', 'Kontakt - OHLAND-Warensicherungs-Technologie')
@section('css')
    <style>
    </style>
@endsection
@section('main')
    <h1>Shop</h1>
    <div class='row'>
        @foreach($products as $product)
            <a href='{{$product['url']}}' target='_blank' title='{{$product['name']}} kaufen bei Amazon'>
                <div class='col-md-4 text-center thumbnail'>
                    <p>
                        <strong>{{$product['name']}}</strong><br>
                        <strong>{{$product['brutto']}}</strong><br>
                        {{$product['desc']}}
                    </p>
                    <img src='{{$product['img']}}' alt='{{$product['alt']}}'>
                </div>
            </a>
        @endforeach
    </div>
@endsection