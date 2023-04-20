<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \App\Models\Region;

class RegionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('formulaire_region');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function save(Request $validated)
    {
        //$validated = $request->validated();
        $query = DB::table('region')->insert([
            'nom' => $validated->input('nom'),
            'description' => $validated->input('description')
        ]);
        return view("formulaire_region")->with("Region enregistrée avec succès !");
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllRegions()
    {
        $list = region::all();
        return view('liste_region',compact('list'));
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
        try {
            DB::beginTransaction();
            $reg = Region::find($id);
            DB::commit();
            return view("update_region", compact("reg"));
        }catch(\Throwable $th){
            return back();
        }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try {
        DB::beginTransaction();
        Region::find($id) -> delete();
        DB::commit();
        return redirect("/region_liste");
       }catch(\Throwable $th) {
        dd($th);
        return back();
       }
    }
}
