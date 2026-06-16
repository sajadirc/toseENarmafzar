@extends('layouts.panel.master')
@section('title', 'مدیریت تگ ها')
@section('content')
    <div class="bg-light rounded p-3">
        <h4 class="border-start border-primary border-4  text-dark p-2 ps-1 h-6 ms-1  mb-4 fw-bold">مدیریت تگ ها</h4>

        {{-- #Edit Tag --}}
        <h4 class="border-start border-success border-4  text-dark p-2 ps-1 h-6 ms-1  mb-4 fw-bold fs-6">ویرایش تگ</h4>
        <form class="text-dark" action="{{ route('panel.tags.update',$tag->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="d-flex justify-content-between">

                <div class="input-group pe-2">
                    <label class="mb-2 mt-2 pe-2" for="name">نام: </label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $tag->name }}">
                </div>

                <div class="input-group pe-2">
                    <label class="mb-2 mt-2 pe-2" for="persian_name">نام فارسی:</label>
                    <input class="form-control" type="text" name="persian_name" id="persian_name" value="{{ $tag->persian_name }}">
                </div>

                <button class="btn btn-success" type="submit">ویرایش</button>

            </div>
        </form>


    </div>
@endsection
