@extends('master')
@section('title', 'Kontakt - OHLAND-Warensicherungs-Technologie')
@section('css')
    <style>
        #mapContainer {
            margin-top: 32px;
            width: 100%;
            height: 345px;
        }
    </style>
@endsection
@section('main')
    <h1>Kontakt</h1>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class='row'>
        <div class="col-md-6">
            <form action="{{route('postContactMessage')}}" method="post">
                <fieldset>
                    <legend>Kontaktieren Sie uns!</legend>
                    <div class="form-group">
                        <label class="col-md-3">Name</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="name" placeholder="Ihr Name..." class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="Ihre Email..." class="form-control" type="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3">Telefon</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="tele" placeholder="Ihre Telefonnummer..." class="form-control" type="tel">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3">Nachricht</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea class="form-control" name="message" placeholder="Ihre Nachricht..."
                                          rows='9'></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3"></label>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Absenden <span
                                        class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-md-6">
            <div id='mapContainer'>
                {!! Mapper::render() !!}
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection