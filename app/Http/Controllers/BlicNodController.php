<?php

namespace App\Http\Controllers;

use App\Models\BlicNod;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlicNodController extends Controller
{
    public function home()
    {
        $blicNod = BlicNod::all();
        return view('/home', ['blicNod' => $blicNod]);
    }

    public function display(Request $request)
    {
        $selectedId = $request->input('ime');
        $selectedNod = BlicNod::find($selectedId);
        $blicNod = BlicNod::all();
        $count = BlicNod::count();
        return view('/home', compact('selectedNod', 'blicNod'));
    }


    public function search(Request $request)
    {
        $searchTerm = $request->query('term');

        $nodes = BlicNod::where('ime', 'like', '%' . $searchTerm . '%')->orWhere('adresa', 'like', '%' . $searchTerm . '%')->get();
        return response()->json($nodes);
    }
}
