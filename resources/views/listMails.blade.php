@extends('layouts.app')

@section('title','Listado de Correos')

@section('content')

<div class="container">
    <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">

        <div class="email-list mt-3">
            @forelse($mails as $mail)
            <div class="message">
                <div>
                    <a href="/showEmail/{{$mail->id}}" >
                        <div class="from col-md-12 border m-1"> <p class="font-weight-bold text-secondary"> To: {{$mail->destination}} </p>

                            @if($mail->subject == null)
                            <p class="font-italic text-secondary">
                                Sin asunto
                            </p>
                            @else
                            <p class="font-italic text-secondary">
                                Asunto: {{$mail->subject}}
                            </p>
                            @endif

                        </div>



                    </a>
                </div>
            </div>
            @empty
                <h3 class="text-primary text-center">No has enviado correos</h3>
            @endforelse

        </div>
    </div>

    @endsection