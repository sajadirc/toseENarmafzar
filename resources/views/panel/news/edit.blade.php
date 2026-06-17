@extends('layouts.panel.master')
@section('title','ویرایش خبر')

@section('content')
    <div class="bg-light rounded p-3">
        <h4 class="border-start border-primary border-4  text-dark p-2 ps-1 h-6 ms-1  mb-4 fw-bold">افزودن خبر</h4>
        <form class="form-control form p-2 " action="{{ route('panel.news.update',$new->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            {{-- name here --}}
            <label class="mt-2 mb-1" for="title">عنوان:</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ $new->title }}">

            {{-- summary input --}}
            <label class="mt-2 mb-1" for="summary"> خلاصه: <span class="text-danger">(الزامی)</span></label>
            <input class="form-control" type="text" name="summary" id="summary" value="{{ $new->summary }}">

            {{-- desc text --}}
            <label class="mt-2 mb-1" for="desc">شرح خبر: <span class="text-danger">(الزامی)</span></label>
            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10">{{ $new->desc }}</textarea>

            {{-- Image Upload Here --}}
            <label class="mt-3 mb-1 formFileSm" for="image">بارگذاری عکس:</label>
            <img src="/{{ $new->image_url }}" alt="" width="100">
            <input class="form-control" type="file" name="image" id="image">

            <button class="btn btn-success my-2 w-100" type="submit">ویرایش خبر</button>
        </form>
    </div>
@endsection
