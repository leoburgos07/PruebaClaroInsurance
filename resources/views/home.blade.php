@extends('layouts.app')

@section('title','Home')

@section('content')

<div class="container">
    <div class="col-xl-12">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title text-center">Datos del usuario</h5>
        </div>
        <div class="card-body text-left">
            <ul style="list-style-type:none">
                <li> Nombre: {{$user->name}} </li>
                <li> Correo: {{$user->email}} </li>
                @if($user->phone)
                <li> Telefono: {{$user->phone}} </li>
                @endif
                <li>Identificacion: {{$user->dni}} </li>
                <li>{{$location->ciudad}}, {{$location->pais}}</li>         
            </ul>      
        </div>    
    </div>
</div>
</div>


@endsection
