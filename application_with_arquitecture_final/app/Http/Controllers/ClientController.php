<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Client;
use Input;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $clients = Client::get();
        return view('index', [ 'clients' => $clients ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make( $request->all(), 
            [
                'nombre' => 'required|min:3',
                'correo' => 'required|email',
            ] 
            );

        if( $validator->fails() )
        {
            return redirect('client/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = [
                    'name' => Input::get('nombre'),
                    'email' => Input::get('correo')
        ];

        Client::create( $data );

        return redirect('/');
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
        $client = Client::find($id);
        $data = [
                    'nombre' => $client->name,
                    'correo' => $client->email,
        ];
        return view('show', $data);
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
        $validator = Validator::make( $request->all(), 
            [
                'nombre' => 'required|min:3',
                'correo' => 'required|email',
            ] 
            );

        if( $validator->fails() )
        {
            return redirect("client/{$id}")
                        ->withErrors($validator)
                        ->withInput();
        }

        Client::where('id' , $id)
                    ->update([
                                'name' => Input::get('nombre'),
                                'email' => Input::get('correo'),
                        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Client::destroy( $id );
        return redirect('/');
    }
}
