<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    #Show List OF Tags
    public function index()
    {

        $tags = Tag::orderByDesc('created_at')->paginate(10);

        return view('panel.tags', compact('tags'));
    }

    #Add New Tag
    public function store(Request $request)
    {

        #Validate Form Data
        $request->validate([
            'name' => 'required|string|unique:tags,name',
            'persian_name' => 'required|string|unique:tags,persian_name'
        ]);

        #Store New Tag
        $result = Tag::create([
            'name' => $request->name,
            'persian_name' => $request->persian_name
        ]);

        #return response
        if ($result)
            return redirect()->route('panel.tags.index')->with('success', 'تگ مورد نظر افزوده شد');

        return back()->with('failed', 'خطا در افزودن تگ');
    }

    #Destroy Tag
    public function destroy($tag_id)
    {

        #Find Tag
        $tag = Tag::findOrFail($tag_id);

        $result = $tag->delete();

        #return response
        if ($result)
            return back()->with('success', 'تگ با موفقیت حذف شد');
        return back()->with('failed', 'خطا در حذف تگ مورد نظر');
    }


    #Edit Tag front
    public function edit(int $tag_id){

        #Find Tag
        $tag = Tag::findOrFail($tag_id);

        return view('panel.editTag',compact('tag'));
    }

    #update Tag Store
    public function update(int $tag_id,Request $request){

        #Find Tag
        $tag = Tag::FindOrFail($tag_id);

        #validate Request
        $request->validate([
            'name' => 'required|string|unique:tags,name,'. $tag->id,
            'persian_name' => 'required|string|unique:tags,persian_name,'. $tag->id
        ]);

        #Update data
        $response = $tag->update([
            'name' => $request->name,
            'persian_name' => $request->persian_name
        ]);

        if($response)
            return redirect()->route('panel.tags.index')->with('success','ویرایش با موفقیت انجام شد');
        return back()->with('failed','خطایی در ویرایش رخ داده است');
    }
}
