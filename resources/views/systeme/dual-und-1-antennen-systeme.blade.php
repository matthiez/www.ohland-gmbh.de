@extends('master')
@section('title', 'Dual- und 1-Antennen-Systeme - OHLAND-Warensicherungs-Technologie')
@section('css')
    <style>
    </style>
@endsection
@section('main')
    <small><i>Systeme</i></small>
    <h1>Dual- und 1-Antennen-Systeme</h1>
    <h2>High Tech und modernes Design</h2>
    Eine Auswahl unserer Systeme:
    <div class='row'>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/dual-system-tanke.jpg')}}'
                                                                 alt='Dual-System Tanke'></a></div>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-6.jpg')}}'
                                                                 alt='System 2011 6'></a></div>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-3.jpg')}}'
                                                                 alt='System 2011 3'></a></div>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-2.jpg')}}'
                                                                 alt='System 2011 2'></a></div>
    </div>
    <div class='row'>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-4.jpg')}}'
                                                                 alt='System 2011 4'></a></div>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-5.jpg')}}'
                                                                 alt='System 2011 5'></a></div>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-7.jpg')}}'
                                                                 alt='System 2011 7'></a></div>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-1.jpg')}}'
                                                                 alt='System 2011 1'></a></div>
    </div>
    <div class='row'>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/1-antennen-system2.jpg')}}'
                                                                 alt='1-Antennen-System'></a></div>
        <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/system-2011-8.jpg')}}'
                                                                 alt='System 2011'></a></div>
    </div>
    Partner im Handel <a href='{{route('systeme/partner-im-handel')}}' title='Partner im Handel'>»</a>
    <div class='modal fade' id="imageModal" tabindex='-1' role='dialog' aria-labelledby='myModalLabel'
         aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-body'>
                    <button type='button' class='close' data-dismiss='modal'><span
                                aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                    <img src='' class="imagePreview" style='width: 100%;'/>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('.thumbnail').on('click', function () {
                $('.imagePreview').attr('src', $(this).find('img').attr('src'));
                $('#imageModal').modal('show');
            });
        });
    </script>
@endsection
