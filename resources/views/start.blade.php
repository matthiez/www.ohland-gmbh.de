@extends('master')
@section('title', 'Startseite - OHLAND-Warensicherungs-Technologie')
@section('css')
    <style>
        .container-narrow > hr {
            margin: 30px 0;
        }

        .jumbotron {
            text-align: center;
            border-bottom: 1px solid #e5e5e5;
        }
    </style>
@endsection
@section('main')
    <div class="jumbotron">
        <h1>OHLAND<span style='display: block;'>Warensicherungs-Technologie</span></h1>
        <p class="lead">
            <a href='{{route('ueber-uns')}}' title='Über Uns'>Über Uns</a><br>
            <a href='{{route('systeme')}}' title='Systeme'>Systeme</a><br>
            <a href='{{route('kabinenwaechter')}}' title='Kabinenwächter'>Kabinenwächter</a>
        </p>
    </div>
    <div class='row'>
        <div class='col-md-6'>
            <img class="img-responsive" src='{{asset('img/ladendiebstahl1.jpg')}}' alt='Ladendiebstahl'/>
        </div>
        <div class='col-md-6'>
            <img class="img-responsive" src='{{asset('img/ladendiebstahl2.jpg')}}' alt='Ladendiebstahl'/>
        </div>
    </div>
@endsection