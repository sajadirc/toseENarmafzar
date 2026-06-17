<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        #get news and Sort It
        $news = News::orderByDesc('created_at')->paginate(10);

        return view('panel.news.all',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.news.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        #Validate Data Here
        $request->validate([
            'title' => 'required|string',
            'summary' => 'required|string',
            'desc' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg'
        ]);


        #find User
        $user = Auth::user();

        #Make new NEws
        $news = News::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'desc' => $request->desc,
            'user_id' => $user->id
        ]);

        #Attach Image
        // $path = $request->file('image')->store('news', 'public');
        // dd($path);
        # Upload Image
        $image = $request->file('image');

        $fileName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('uploads'), $fileName);


        $news->update([
            'image_url' => 'uploads/' . $fileName
        ]);
        $news->save();
        // Storage::disk('local')->put($request->image,$request->image);
        if ($news)
            return back()->with('success', 'خبر جدید با موفقیت افزوده شد');
        return back()->with('failed', 'خطا در افزودن خبر');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
