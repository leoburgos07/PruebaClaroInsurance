@extends('layouts.app')
@section('title', 'Editar usuario')

@section('content')

<div class="container">
    <form method="POST" id="form" action="{{url('admin/createUser')}}">
        {!! csrf_field() !!}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Nombre</label>
                <span class="text-danger">*</span>
                <input type="text" class="form-control" id="inputName" name="inputName">
                <p id="msgNombre"></p>
            </div>

            <div class="form-group col-md-4">
                <label for="dateBirth">Fecha de nacimiento</label>
                <span class="text-danger">*</span>
                <input type="date" class="form-control" id="dateBirth" name="dateBirth" max="{{$anio}}-{{$fecha}}">
                <p id="msgDate"></p>
            </div>
            <div class="form-group col-md-4">
                <label for="inputCel">Celular</label>
                <input type="number" class="form-control" id="inputCel" max="99999999999" name="inputCel">
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
                <p id="msgPais"></p>
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Ciudad</label>
                <span class="text-danger">*</span>
                <select name="inputCity" id="ciudades" class="form-control">
                    <optgroup label="Selecciona una ciudad">

                    </optgroup>
                </select>
                <p id="msgCiudad"></p>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>
</div>

@endsection