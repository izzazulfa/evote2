<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\HasilJok;
use App\Partai;
use Illuminate\Http\Request;

class HasilJokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 8;

        if (!empty($keyword)) {
            $hasiljok = HasilJok::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('partai_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $hasiljok = HasilJok::paginate($perPage);
        }

        return view('hasiljok.index', compact('hasiljok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $partai = Partai::pluck('name','id');
        return view('hasiljok.create', compact('partai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validation = [
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'partai_id' => 'required',
        ];

        $request->validate($validation);
        
        $requestData = $request->all();
        HasilJok::create($requestData);

        return redirect('/')->with('flash_message', 'Hasil added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $hasiljok = HasilJok::findOrFail($id);

        return view('hasiljok.show', compact('hasiljok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $hasiljok = HasilJok::findOrFail($id);
        $partai = Partai::pluck('name','id');

        return view('hasiljok.edit', compact('hasiljok','partai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $validation = [
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'partai_id' => 'required',
        ];

        $request->validate($validation);
        
        $requestData = $request->all();
        
        $hasiljok = HasilJok::findOrFail($id);
        $hasiljok->update($requestData);

        return redirect('hasiljok')->with('flash_message', 'Hasil updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        HasilJok::destroy($id);

        return redirect('hasiljok')->with('flash_message', 'Hasil deleted!');
    }
}
