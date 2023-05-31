<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Excuses;

class ExcusesController extends Controller
{
    //


public function store(request $request)
{
    $request ->validate([
        'id'=>'required',
        'state'=>'required',
        'start_date'=>'required|date',
        'end_date'=>'required|date',
        'description'=>'required',
        'evidence'=>'required',
        'type'=>'required',
        'apprentice_id'=>'required',
    ]);

    $excuses = Excuses::create($request ->all());
    return response() ->json(['success' => true, 'data' => $excuses], 201);
}

public function show(string $id)
{

}
public function update(Request $request, string $id)
{

}
public function destroy( string $id)
{
    
}
}