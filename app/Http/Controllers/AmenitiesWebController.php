<?php

namespace App\Http\Controllers;

use App\Models\Amenitie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AmenitiesWebController extends Controller
{
    public function index(): View
    {
        $amenitie ['amenities'] = Amenitie::all();
        return view('amenitie.index', $amenitie);
    }

    public function new(): View
    {
        return view('amenitie.new');
    }
    
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
        ]);

        $amenitie = Amenitie::create([
            'name' => $request->name
        ]);

        $amenitie->save();
        return redirect()->route('amenitie.index');
    }

    public function put(Request $request, $id): View
    {
        $amenitie = Amenitie::find($id);
        return view('amenitie.edit',['amenitie'=>$amenitie]);
    }

    public function update(Request $request, $id)
    {
        $amenitie = Amenitie::find($id);
        $amenitie->update($request->all());
        $amenitie->save();
        return redirect()->route('amenitie.index');
    }

    public function delete(Request $request, $id)
    {
        $amenitie = Amenitie::find($id);
        $amenitie->delete();
        return redirect()->route('amenitie.index');
    }
}
