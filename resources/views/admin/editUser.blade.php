@extends('layouts.app')
@section('title', 'Editar usuario')

@section('content')


<div class="container">
    <form method="POST" id="formEdit" action="{{ url("admin/editUser/{$user->id}") }}">

        {!! csrf_field() !!}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Nombre</label>
                <span class="text-danger">*</span>
                <input type="text" class="form-control" id="inputName" name="inputName" value="{{$user->name}}">
                <p id="msgNombre" class="warnings"></p>
            </div>

            <div class="form-group col-md-3">
                <label for="dateBirth">Fecha de nacimiento</label>
                <span class="text-danger">*</span>
                <input type="date" class="form-control" id="dateBirth" name="dateBirth" max="{{$anio}}-{{$fecha}}" value="{{$user->dateOfBirth}}"> >
                <p id="msgDate" class="warnings"></p>
            </div>
            <div class="form-group col-md-3">
                <label for="inputCel">Celular</label>
                <input type="number" class="form-control" id="inputCel" name="inputCel" value="{{$user->phone}}">
                <p id="msgCel" class="warnings"></p>
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
                        <option value="" selected>-</option>
                    </optgroup>
                </select>
                <p id="msgCiudad" class="warnings"></p>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>
</div>

@endsection