<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \App\Models\Election;

class ElectionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('formulaire_election');
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
        $query = DB::table('election')->insert([
            'label' => $validated->input('label'),
            'description' => $validated->input('description'),
            'status' => $validated->input('status'),
            'description' => $validated->input('description'),
        ]);
        return view("formulaire_election")->with("Election enregistrée avec succès !");
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllElections()
    {
        $list = election::all();
        return view('liste_election',compact('list'));
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
            $reg = Election::find($id);
            DB::commit();
            return view("update_election", compact("reg"));
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
        Election::find($id) -> delete();
        DB::commit();
        return redirect("/election_liste");
       }catch(\Throwable $th) {
        dd($th);
        return back();
       }
    }
}
