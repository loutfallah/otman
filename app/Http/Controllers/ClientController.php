<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::with('user')->get();
        return $client ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->name =  $request->name;
        $client->firstname =  $request->firstname;
        $client->lastname =  $request->lastname;
        $client->email =  $request->email;
        $client->montant =  $request->montant;
        $client->date =  $request->date;
        $client->description =  $request->description;
        $client->debtor =  $request->debtor;
        $client->creditor =  $request->creditor;
        $client->statut =  $request->statut;
        //  momkin tdir men hna user id li dir login bla matjibo man Front END
        // $userId = Auth::id();
        $client->user_id =  $request->user_id;
        $client->save();

        return $client;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->name =  $request->name;
        $client->firstname =  $request->firstname;
        $client->lastname =  $request->lastname;
        $client->email =  $request->email;
        $client->montant =  $request->montant;
        $client->date =  $request->date;
        $client->description =  $request->description;
        $client->debtor =  $request->debtor;
        $client->creditor =  $request->creditor;
        $client->statut =  $request->statut;
        //  momkin tdir men hna user id li dir login bla matjibo man Front END
        // $userId = Auth::id();
        $client->user_id =  $request->user_id;
        $client->save();

        return $client;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        return 'deleted';
    }
}
