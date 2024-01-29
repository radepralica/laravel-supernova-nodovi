<?php

namespace App\Http\Controllers;

use App\Models\BlicNod;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function adminhome()
    {
        $blicNod = BlicNod::first()->paginate(10);
        return view('layouts.admin.admin', ['blicNod' => $blicNod]);
    }


    public function create()
    {
        return view('layouts.admin.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'ime' => ['required', Rule::unique('blic_nodovi', 'ime')],
            'adresa' => ['required', 'min:3'],
            'naselje' => 'required',
            'ulice' => 'required'


        ]);
        BlicNod::create($data);

        return redirect(route('admin.home'));
    }
//& Edit
    public function edit(BlicNod $nod)
    {
        return view('layouts.admin.edit', ['nod' =>$nod]);
    }

//& Update

    public function update(Request $request, BlicNod $nod)
    {
        $data = $request->validate([
            'ime' => ['required', Rule::unique('blic_nodovi', 'ime')],
            'adresa' => ['required', 'min:3'],
            'naselje' => 'required',
            'ulice' => 'required'
        ]);
        $nod->update($data);
        return redirect('/admin');
    }

      public function destroy  (BlicNod $nod)
        {
$nod->delete();
            return redirect('/admin')->with('delete-success','Nod je uspješno izbrisan');
        }

}
