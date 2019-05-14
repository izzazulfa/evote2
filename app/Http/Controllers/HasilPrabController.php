<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Partai;
use App\HasilPrab;
use Illuminate\Http\Request;

class HasilPrabController extends Controller
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
            $hasilprab = HasilPrab::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('partai_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $hasilprab = HasilPrab::paginate($perPage);
        }

        return view('hasilprab.index', compact('hasilprab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $partai = Partai::pluck('name','id');
        return view('hasilprab.create', compact('partai'));
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
        HasilPrab::create($requestData);

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
        $hasilprab = HasilPrab::findOrFail($id);

        return view('hasilprab.show', compact('hasilprab'));
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
        $hasilprab = HasilPrab::findOrFail($id);
        $partai = Partai::pluck('name','id');

        return view('hasilprab.edit', compact('hasilprab','partai'));
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
        
        $hasilprab = HasilPrab::findOrFail($id);
        $hasilprab->update($requestData);

        return redirect('hasilprab')->with('flash_message', 'Hasil updated!');
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
        HasilPrab::destroy($id);

        return redirect('hasilprab')->with('flash_message', 'Hasil deleted!');
    }

}
