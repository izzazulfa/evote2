<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Partai;
use Illuminate\Http\Request;

class PartaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $partai = Partai::where('name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $partai = Partai::paginate($perPage);
        }

        return view('partai.index', compact('partai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('partai.create');
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
        
        $requestData = $request->all();
        
        Partai::create($requestData);

        return redirect('partai')->with('flash_message', 'JenisSurat added!');
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
        $partai = Partai::findOrFail($id);

        return view('partai.show', compact('partai'));
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
        $partai = Partai::findOrFail($id);

        return view('partai.edit', compact('partai'));
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
        
        $requestData = $request->all();
        
        $partai = Partai::findOrFail($id);
        $partai->update($requestData);

        return redirect('partai')->with('flash_message', 'partai updated!');
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
        JenisSurat::destroy($id);

        return redirect('partai')->with('flash_message', 'partai deleted!');
    }
}
