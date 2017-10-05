<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Provider;
use illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProviderFormRequest;
use DB;





class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _construct()
    {

    }
    public function index(Request $request)
    {
        //
           if ($request)
           {
               //$query=trim($request->get('searchText'));
               $providers = DB::table('providers')->get();

               return view ('provider.index',["providers" =>$providers ]);
           }
    }
    public function indexDataTable()
    {
        $providerList = Provider::all();
        return response()->json($providerList);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ("provider.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $provider = new Provider;
        $provider -> name = $request -> get ('name ');
        $provider -> telefono = $request -> get ('telefono ');
        $provider -> direccion = $request -> get ('direccion ');
        $provider -> descripcion = $request -> get ('descripcion ');
        $provider -> save();
        return Redirect:: to ('provider');

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
        return view ("provider.show", ["provider"=> Provider::findOrFail($id)]);
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
        return view ("provider.show", ["provider"=> Provider::findOrFail($id)]);
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
        //
        $provider = Provider::findOrFail($id);
        $provider -> name = $request ->get('name');
        $provider -> telefono = $request -> get ('telefono ');
        $provider -> direccion = $request -> get ('direccion ');
        $provider -> descripcion = $request -> get ('descripcion ');
        $provider -> update();
        return Redirect::to('provider');

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
        $provider =Provider::findOrFail($id);
        $provider -> condition='0';
        $provider -> update();
        return Redirect::to('provider');
    }
}
