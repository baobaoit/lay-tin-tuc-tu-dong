<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = Genre::all();

        return view('news_management.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news_management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'rss_url'=>'required',
            'news_pages_id'=>'required'
        ]);

        $news = new Genre([
            'name' => $request->get('name'),
            'rss_url' => $request->get('rss_url'),
            'news_pages_id' => $request->get('news_pages_id')
        ]);
        $news->save();
        return redirect('/management')->with('success', 'Information saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = Genre::find($id);
        return view('news_management.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'rss_url'=>'required',
            'news_pages_id'=>'required'

        ]);

        $news = Genre::find($id);
        $news->name =  $request->get('name');
        $news->rss_url = $request->get('rss_url');
        $news->news_pages_id = $request->get('news_pages_id');
        $news->save();

        return redirect('/management')->with('success', 'Information updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = Genre::find($id);
        $news->delete();

        return redirect('/management')->with('success', 'Information deleted!');
    }
}
