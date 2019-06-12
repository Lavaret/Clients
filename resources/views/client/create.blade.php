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

    <div class="row justify-content-center">

        <form method="post" action="/clients">

            {{ csrf_field() }}
            
            </br> Firstname: </br>
            
            <input type="text" name="firstname" required>

            </br> Lastname: </br>

            <input type="text" name="lastname" required>

            </br> Age: </br>

            <input type="number" name="age" required>

            </br></br>

            <input type="submit" value="save" >

        </form>

    </div>

</div>

@endsection