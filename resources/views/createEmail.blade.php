@extends('layouts.app')

@section('title', "Crear E-mail")

@section('content')
<div class="container">
    <div class="compose-content">
        <form method="POST" action="{{ url('/createEmail') }}" id="formEmail">
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="hidden" id="from" name="from" value="{{Auth::user()->id}}">
                <input type="hidden" id="nameFrom" name="nameFrom" value="{{Auth::user()->name}}">
                <input type="hidden" id="mailFrom" name="mailFrom" value="{{Auth::user()->id}}">
            </div>
            <div class="form-group">
                <input type="email"  name="dest" class="form-control bg-transparent" id="dest" placeholder=" Destino:">
                <p id="msgDest" class="warnings"></p>
            </div>
            <div class="form-group">
                <input type="text" name="subject" class="form-control bg-transparent" id="subject" placeholder=" Asunto:">
            </div>
            <div class="form-group">
                <textarea id="body" name="body" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Cuerpo del correo"></textarea>
                <p id="msgBody" class="warnings"></p>
            </div>
            <div class="text-center mt-4 mb-5">
                <button class="btn btn-primary btn-sl-sm mr-2" type="submit"><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Enviar</button>
                <a class="btn btn-danger light btn-sl-sm" type="button" href="/home"><span class="mr-2"><i class="fa fa-times" aria-hidden="true"></i></span>Cancelar</a>
                <p id="success"></p>
            </div>
        </form>

    </div>

</div>

@endsection