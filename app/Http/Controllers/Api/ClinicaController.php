<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Clinica;
use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clinicas = Clinica::get();
        return response()->json([
            'dados' => $clinicas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Clinica $clinica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clinica $clinica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clinica $clinica)
    {
        //
    }
}
