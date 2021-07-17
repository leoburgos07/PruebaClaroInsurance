@extends('layouts.app')

@section('title', "Crear Usuario")

@section('content')


<div class="container">
    <form method="POST" id="form" action="{{url('admin/createUser')}}">
        {!! csrf_field() !!}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Nombre</label>
                <span class="text-danger">*</span>
                <input type="text" class="form-control" id="inputName" name="inputName">
                <p id="msgNombre" class="warnings"></p>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <span class="text-danger">*</span>
                <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                <p id="msgEmail" class="warnings"></p>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword">Contraseña</label>
                <span class="text-danger">*</span>
                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="1 Caracter especial, mayusculas y números">
                <p id="msg" class="warnings"></p>
            </div>
            <div class="form-group col-md-6">
                <label for="confirmPass">Confirmar contraseña</label>
                <span class="text-danger">*</span>
                <input type="password" class="form-control" id="confirmPass" name="confirmPass">
                <p id="msgConfirm" class="warnings"></p>
            </div>
            <div class="form-group col-md-4">
                <label for="dateBirth">Fecha de nacimiento</label>
                <span class="text-danger">*</span>
                <input type="date" class="form-control" id="dateBirth" name="dateBirth" max="{{$anio}}-{{$fecha}}">
                <p id="msgDate" class="warnings"></p>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCel">Celular</label>
                <input type="number" class="form-control" id="inputCel"  name="inputCel">
                <p id="msgCel" class="warnings"></p>
            </div>

            <div class="form-group col-md-4">
                <label for="inputCc">Cedula</label>
                <span class="text-danger">*</span>
                <input type="text" class="form-control" id="inputCc" name="inputCc">
                <p id="msgCc" class="warnings"></p>
            </div>
            

            <div class="form-group col-md-6">
                <label for="inputCountry">Pais</label>
                <span class="text-danger">*</span>

                <select name="inputCountry" id="paises" class="form-control">
                    <optgroup label="Selecciona un país">
                        <option value="" selected>-</option>
                        @foreach ($paises as $pais)
                        <option value="{{ $pais->id }}">{{ $pais->name }}</option>
                        @endforeach
                    </optgroup>
                </select>
                <p id="msgPais" class="warnings"></p>
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Ciudad</label>
                <span class="text-danger">*</span>
                <select name="inputCity" id="ciudades" class="form-control">
                    <optgroup label="Selecciona una ciudad">
                        
                    </optgroup>
                </select>
                <p id="msgCiudad" class="warnings"></p>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>

@endsection