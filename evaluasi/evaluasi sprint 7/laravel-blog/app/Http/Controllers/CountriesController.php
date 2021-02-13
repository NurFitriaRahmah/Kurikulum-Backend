<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::all();
        return view('country/index', compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('country/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'independence'=>'required',
            'capital'=>'required',
            'currency'=>'required',
            'motto'=>'required',
            'anthem'=>'required'
        ]);

        Country::create($request->all());

        return redirect('/country')->with('status', 'Data Negara Berhasil Ditambahkan!' ); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::all()->where('id', $id);
        return view('country/show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::all()->where('id', $id);
        return view('country/edit', compact('country'));
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
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'independence'=>'required',
            'capital'=>'required',
            'currency'=>'required',
            'motto'=>'required',
            'anthem'=>'required'
        ]);

        Country::where('id', $id)
                ->update([
                    'name' => $request->name,
                    'location' => $request->location,
                    'independence' => $request->independence,
                    'capital' => $request->capital,
                    'currency' => $request->currency,
                    'motto' => $request->motto,
                    'anthem' => $request->anthem
                ]);
        return redirect('/country')->with('status', 'Data Negara Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Country::destroy('id', $id);
        return redirect('/country');
    }
}
