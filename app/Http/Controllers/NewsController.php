<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeNewsRequest;
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

        return view('panel.news.all', compact('news'));
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
    public function store(MakeNewsRequest $request)
    {
        #Validate Data Here
        $validated_data = $request->validated();

        #find User
        $user = Auth::user();

        #Make new NEws
        $news = News::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'desc' => $request->desc,
            'user_id' => $user->id
        ]);


        # Upload Image
        $image = $request->file('image');
        $this->imageUploader($image, $news);

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
        #Find New
        $new  = News::findOrFail($id);

        return view('panel.news.edit', compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        #find New
        $new = News::findOrFail($id);

        #validate New
        $request->validate([
            'title' => 'required|string',
            'summary' => 'required|string',
            'desc' => 'required',
            'image' => 'file|mimes:png,jpg,jpeg|nullable'
        ]);


        if ($request->has('image')) {
            #delete older Image From Storage
            if ($new->image_url && file_exists(public_path($new->image_url)))
                unlink(public_path($new->image_url));

            $image = $request->file('image');

            $this->imageUploader($image, $new);
        }
        #update request data
        $result = $new->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'desc' => $request->desc,

        ]);
        if ($result)
            return back()->with('success', 'خبر با موفقیت ویرایش شد');
        return back()->with('failed', 'خطا در ویرایش خبر');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        #find A News
        $new = News::findOrFail($id);

        #Delete news
        $result = $new->delete();

        if ($result)
            return back()->with('success', 'خبر با موفقیت حذف شد');
        return back()->with('failed', 'خظا در حذف خبر');
    }

    #image Uploader func
    private function imageUploader($image, News $new)
    {

        $fileName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('uploads'), $fileName);


        $new->update([
            'image_url' => 'uploads/' . $fileName
        ]);
        $new->save();
    }
}
