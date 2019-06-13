@extends('layouts.app')

@section('content')
<div class="container">

<h3 class="clients-header">Clients</h3>

    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <table class="clients-table">
                <tr>
                    <th>Lp.</th>
                    <th>Firstname</th>
                    <th>Lastname</th> 
                    <th>Age</th>
                    <th></th>
                </tr>

                @php
                $index = 0
                @endphp

                @foreach ($clients as $client)

                <tr>
                    <td>{{++$index}}</td>
                    <td>{{$client->firstname}}</td>
                    <td>{{$client->lastname}}</td> 
                    <td>{{$client->age}}</td>
                    <td>
                        <a href="{{ route('client_edit', ['id' => $client->id]) }}">Edit</a>
                    </td>
                </tr>

                @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
@endsection