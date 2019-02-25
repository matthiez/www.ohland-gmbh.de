@extends('master')
@section('title', 'Systeme - OHLAND-Warensicherungs-Technologie')
@section('css')
    <style>
    </style>
@endsection
@section('main')
    <h1>Systeme</h1>
    <h2>High Tech und modernes Design</h2>
    <p>
        Mit dem Warensicherungssystem bietet Ohland modernste Technik der neuesten Generation und pefekten Service rund
        um Ihre Produkte. Unsere Technik basiert auf dem Erkennen aller RF-Frequenzen und lässt sich ohne großen
        technischen Aufwand im Zugangsbereich integrieren.
    </p>
    <p>
        Das moderne, klare Design ist geprägt von einer eleganten, dezenten Linie und harmoniert so mit der Einrichtung
        Ihres Ladengeschäftes.
    </p>
    <h3>Eine Auswahl unserer Systeme:</h3>
    <p>
        <a href='{{route('systeme/dual-und-1-antennen-systeme')}}' title='Dual- und 1-Antennen-Systeme'>Dual- und
            1-Antennen-Systeme »</a><br>
        <a href='{{route('systeme/partner-im-handel')}}' title='Partner im Handel'>Partner im Handel »</a>
    </p>
@endsection