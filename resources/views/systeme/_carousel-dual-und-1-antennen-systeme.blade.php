@extends('master')
@section('title', 'Dual- und 1-Antennen-Systeme - OHLAND-Warensicherungs-Technologie')
@section('css')
    <style>
        .carousel {
            margin-bottom: 0;
            padding: 0 40px 30px 40px;
        }

        .carousel-control {
            left: -12px;
            height: 40px;
            width: 40px;
            background: none repeat scroll 0 0 #222222;
            border: 4px solid #FFFFFF;
            border-radius: 23px 23px 23px 23px;
            margin-top: 33px;
        }

        .carousel-control.right {
            right: -12px;
        }

        .carousel-indicators {
            right: 50%;
            top: auto;
            bottom: -10px;
            margin-right: -19px;
        }

        .carousel-indicators li {
            background: #cecece;
        }

        .carousel-indicators .active {
            background: #428bca;
        }
    </style>
@endsection
@section('main')
    <small><i>Systeme</i></small>
    <h1>Dual- und 1-Antennen-Systeme</h1>
    <h2>High Tech und modernes Design</h2>
    Eine Auswahl unserer Systeme:
    <div id='carousel' class='carousel slide'>
        <ol class='carousel-indicators'>
            <li data-target='#carousel' data-slide-to='0' class='active'></li>
            <li data-target='#carousel' data-slide-to='1'></li>
            <li data-target='#carousel' data-slide-to='2'></li>
        </ol>
        <div class='carousel-inner'>
            <div class='item active'>
                <div class='row'>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img
                                    src='{{asset('img/dual-system-tanke.png')}}' alt='Dual-System Tanke'
                                    style='max-width:100%;'></a></div>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-6.png')}}'
                                                                             alt='System 2011 6'
                                                                             style='max-width:100%;'></a></div>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-3.png')}}'
                                                                             alt='System 2011 3'
                                                                             style='max-width:100%;'></a></div>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-2.png')}}'
                                                                             alt='System 2011 2'
                                                                             style='max-width:100%;'></a></div>
                </div>
            </div>
            <div class='item'>
                <div class='row'>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-4.png')}}'
                                                                             alt='System 2011 4'
                                                                             style='max-width:100%;'></a></div>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-5.png')}}'
                                                                             alt='System 2011 5'
                                                                             style='max-width:100%;'></a></div>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-7.png')}}'
                                                                             alt='System 2011 7'
                                                                             style='max-width:100%;'></a></div>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-1.png')}}'
                                                                             alt='System 2011 1'
                                                                             style='max-width:100%;'></a></div>
                </div>
            </div>

            <div class='item'>
                <div class='row'>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img
                                    src='{{asset('img/1-antennen-system2.png')}}' alt='1-Antennen-System'
                                    style='max-width:100%;'></a></div>
                    <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-8.png')}}'
                                                                             alt='System 2011' style='max-width:100%;'></a>
                    </div>
                </div>
            </div>
        </div>
        <a data-slide='prev' href='#carousel' class='left carousel-control'>‹</a>
        <a data-slide='next' href='#carousel' class='right carousel-control'>›</a>
    </div>
    Partner im Handel <a href='{{route('partner-im-handel')}}' title='Partner im Handel'>»</a>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#carousel').carousel({
                interval: 5000
            })
        });
    </script>
@endsection
