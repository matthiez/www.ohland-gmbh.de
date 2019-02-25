@extends('master')
@section('title', 'Kabinenwächter - OHLAND-Warensicherungs-Technologie')
@section('css')
    <style>
    </style>
@endsection
@section('main')
    <h1>Der Kabinenwächter</h1>

    <p>
        <strong>DAS PROBLEM ...</strong><br>
        ist die Umkleidekabine. Sie ist der bevorzugte „Ort” für den potenziellen Ladendieb.<br>
        Hier wird geklaut, getrickst und getäuscht „was das Zeug hält“.
    </p>
    <ul>
        <li>abgeschnittene oder herausgerissene Sicherungsetiketten</li>
        <li>Umetikettierung der Ware</li>
        <li>Manipulation aller Art</li>
    </uL>
    <p>
        <strong><a href='#' title='' class='toggler' data-toggle='#hidden'>DIE LÖSUNG... »</a></strong>
    </p>
    <div id='hidden' style='display: none;'>
        <p>
            ... ist unser neuer High-Tech-Kabinenwächter!
        </p>
        <p>
            Wer ihn nicht hat, verliert jeden Tag Geld
            in jeder Umkleidekabine!
        </p>
        <div class='row'>
            <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/waechter1.jpg')}}'
                                                                     alt='Wächter 1'/></a></div>
            <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/waechter2.jpg')}}'
                                                                     alt='Wächter 2'/></a></div>
            <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/waechter3.jpg')}}'
                                                                     alt='Wächter 3'/></a></div>
            <div class='col-md-3'><a href='#' class='thumbnail'><img src='{{asset('img/waechter4.jpg')}}'
                                                                     alt='Wächter 4'/></a></div>
        </div>
    </div>
    <p>
        <strong>OHLAND – intelligente Sicherheitslösungen!</strong>
    </p>
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

            $('.toggler').on('click', function () {
                $($(this).data('toggle')).toggle();
            });
        });
    </script>
@endsection

