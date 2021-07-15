@extends('layouts.app')

@section('content')
<div class="container">
<table id="usersTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Identificación</th>
                <th>Edad</th>
                <th>Ubicación</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $count=0;
            ?>
            @forelse($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                @if($user->phone)
                <td>{{$user->phone}}</td>
                @else
                <td>-</td>
                @endif
                <td>{{$user->dni}}</td>
                <td>{{$ages[$count]}}</td>
                <td>{{$locations[$count]->ciudad}}, {{$locations[$count]->pais}} </td>
            </tr>
            <?php 
            $count++;
            ?>
            @empty
                <tr>NO hay nada</tr>
            @endforelse 
            
           
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Identificación</th>
                <th>Edad</th>
                <th>Ubicación</th>
            </tr>
        </tfoot>
        <div class="container">
        <div class="row justify-content-md-center">
          {{ $users->appends(request()->query())->links("pagination::bootstrap-4") }}
        </div>
      </div>
</table>
</div>



@endsection
