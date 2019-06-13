@extends('layouts.app')

@section('content')

<div class="container">

<h3 class="clients-header">Clients</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="row justify-content-left">

        <form method="post" action="/clients/{{$client->id}}">

            {{ method_field('PATCH') }}

            {{ csrf_field() }}
            
            </br> Firstname: </br>
            
            <input type="text" name="firstname" value="{{$client->firstname}}" required>

            </br> Lastname: </br>

            <input type="text" name="lastname" value="{{$client->lastname}}" required>

            </br> Age: </br>

            <input type="number" name="age" value="{{$client->age}}" required>

            </br></br>

            <input type="submit" value="save" >

        </form>

    </div>

    <div class="row justify-content-left">
        <form method="post" action="/clients/{{$client->id}}">

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <input type="submit" value="delete" >

    </form>
    </div>



</div>

@endsection