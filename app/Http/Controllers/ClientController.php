<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('client.index', compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function edit()
    {
        return view('client.create');
    }

    /**
     * Store a new client.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'firstname' => 'required|max:255|min:3',
            'lastname' => 'required|max:255|min:3',
        ]);

        if ($validator->fails()) {
            return redirect('clients/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $client = new Client();
        $client->firstname = request('firstname');
        $client->lastname = request('lastname');
        $client->age = request('age');
        $client->save();

        return redirect('/clients');
    }

    public function delete()
    {
        //nothing for now
    }
}
