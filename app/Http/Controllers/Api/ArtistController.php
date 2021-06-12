<?php

namespace App\Http\Controllers\Api;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistResource;

class ArtistController extends Controller
{
    public function list(Request $request)
    {
        $artist = Artist::all();
        return ArtistResource::collection($artist)->additional(\diagnosticSuccess());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'gender' => 'string|required',
            'type' => 'string|required',
            'about' => 'string|required'
        ]);

        Artist::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'type' => $request->type,
            'about' => $request->about
        ]);

        return response()->jsonSuccess();
    }

    public function show($id)
    {
        $artist = Artist::findOrFail($id);
        return (new ArtistResource($artist))->additional(\diagnosticSuccess());
    }

    public function update($id, Request $request)
    {
        $artist = Artist::findOrFail($id);

        $request->validate([
            'name' => 'string|required',
            'gender' => 'string|required',
            'type' => 'string|required',
            'about' => 'string|required'
        ]);

        $artist->update([
            'name' => $request->name,
            'gender' => $request->get,
            'type' => $request->type,
            'about' => $request->about
        ]);

        return response()->jsonSuccess();
    }

    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();

        return response()->jsonSuccess();
    }
}
