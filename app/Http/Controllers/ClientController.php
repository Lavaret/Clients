<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Index view
     * 
     * @return view
     */
    public function index()
    {
        $clients = Client::all();

        return view('client.index', compact('clients'));
    }

    /**
     * Create client view
     * 
     * @return view
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Edit client view
     * 
     * @param int $id
     * @return view
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('client.edit', compact('client'));
    }

    /**
     * Store a new client.
     *
     * @param  Request  $request
     * @return view
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:255|min:3',
            'lastname' => 'required|max:255|min:3',
            'age' => 'required|integer'
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

    /**
     * Update client.
     *
     * @param int $id
     * @param  Request  $request
     * @return view
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:255|min:3',
            'lastname' => 'required|max:255|min:3',
            'age' => 'required|integer'
        ]);


        if ($validator->fails()) {
            return redirect('clients/'.$id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }

        $client = Client::find($id);
        $client->firstname = request('firstname');
        $client->lastname = request('lastname');
        $client->age = request('age');
        $client->save();

        return redirect('/clients');
    }

    public function delete($id)
    {
        $client = Client::find($id)->delete();

        return redirect('/clients');
    }
}
