@extends('master')
@section('title', 'Partner im Handel - OHLAND-Warensicherungs-Technologie')
@section('css')
    <style>
    </style>
@endsection
@section('main')
    <h1>Partner im Handel</h1>
    <p>Wir sind der Partner für den Handel ...</p>
    <div class='row'>
        <div class='col-md-6 col-lg-4'><a href='#' class='thumbnail'><img src='{{asset('img/system1-partner.jpg')}}'
                                                                          alt='Systempartner 1'></a></div>
        <div class='col-md-6 col-lg-4'><a href='#' class='thumbnail'><img src='{{asset('img/system2-partner.jpg')}}'
                                                                          alt='Systempartner 2'></a></div>
        <div class='col-md-6 col-lg-4'><a href='#' class='thumbnail'><img src='{{asset('img/systeme-partner6.jpg')}}'
                                                                          alt='Systempartner 6'></a></div>
        <div class='col-md-6 col-lg-4'><a href='#' class='thumbnail'><img src='{{asset('img/systeme-partner3.jpg')}}'
                                                                          alt='Systempartner 3'></a></div>
        <div class='col-md-6 col-lg-4'><a href='#' class='thumbnail'><img src='{{asset('img/systeme-partner4.jpg')}}'
                                                                          alt='Systempartner 4'></a></div>
        <div class='col-md-6 col-lg-4'><a href='#' class='thumbnail'><img src='{{asset('img/systeme-partner5.jpg')}}'
                                                                          alt='Systempartner 5'></a></div>
    </div>
    <p>... mit 30 Jahren Erfahrung!</p>
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