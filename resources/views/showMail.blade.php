@extends('layouts.app')

@section('title','Detalles')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            To: {{$mail->destination}}

        </div>
        <p class="text-muted ml-4 mt-2 mb-0"> Asunto:
            @if($mail->subject == null)
            Sin asunto
            @else
            {{$mail->subject}}
            @endif
        </p>

        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>{{$mail->message}}</p>
                <footer class="text-success">Estado: {{$mail->state}}</footer>
            </blockquote>
        </div>
    </div>
</div>

@endsection