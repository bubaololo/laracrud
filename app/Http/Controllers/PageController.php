<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages', [
            'pages' => Page::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->all()['_id'];
        $page = Page::find($id);
        
        if(array_key_exists('description', $request->all())) {
            $desc = $request->all()['description'];
            
                $page->description = $desc;
                $page->save();
            return redirect()->route('pages.index')->with('success', "Description ". $page['url']. " обновлён");
        } else {
            $title = $request->all()['title'];
            
               $page->title = $title;
               $page->save();
            return redirect()->route('pages.index')->with('success', "Title ". $page['url']. " обновлён");
        }

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
        //
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
        
        // return 'yo';
        // return redirect()->route('tasks')->with('success', "Задача была удалёна");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
