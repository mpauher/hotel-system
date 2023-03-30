<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Contracts\View\View;

class TypeWebController extends Controller
{
    public function index(): View
    {
        $type ['types'] = Type::all();
        return view('type.index', $type);
    }

    public function new(): View
    {
        return view('type.new');
    }
    
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
        ]);

        $type = Type::create([
            'name' => $request->name
        ]);

        $type->save();
        return redirect()->route('type.index');
    }

    public function put(Request $request, $id): View
    {
        $type = Type::find($id);
        return view('type.edit',['type'=>$type]);
    }

    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $type->update($request->all());
        $type->save();
        return redirect()->route('type.index');
    }

    public function delete(Request $request, $id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect()->route('type.index');
    }
}
