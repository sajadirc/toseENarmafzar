@extends('layouts.panel.master')
@section('title', 'مدیریت تگ ها')
@section('content')
    <div class="bg-light rounded p-3">
        <h4 class="border-start border-primary border-4  text-dark p-2 ps-1 h-6 ms-1  mb-4 fw-bold">مدیریت تگ ها</h4>

        {{-- #Add Tag --}}
        <h4 class="border-start border-success border-4  text-dark p-2 ps-1 h-6 ms-1  mb-4 fw-bold fs-6">افزودن تگ</h4>
        <form class="text-dark" action="{{ route('panel.tags.store') }}" method="POST">
            @csrf
            <div class="d-flex justify-content-between">

                <div class="input-group pe-2">
                    <label class="mb-2 mt-2 pe-2" for="name">نام: </label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>

                <div class="input-group pe-2">
                    <label class="mb-2 mt-2 pe-2" for="persian_name">نام فارسی:</label>
                    <input class="form-control" type="text" name="persian_name" id="persian_name">
                </div>

                <button class="btn btn-success" type="submit">ارسال</button>

            </div>
        </form>

        {{-- #tags Table Here --}}
        <h4 class="border-start border-success border-4  text-dark p-2 ps-1 h-6 ms-1  mb-4 fw-bold fs-6 mt-4">لیست تگ ها</h4>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>نام</th>
                    <th>نام فارسی</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->persian_name }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('panel.tags.edit', $tag->id) }}" class="btn btn-sm btn-primary me-1"><i
                                    class="fa fa-pen me-1"></i></a>
                            <form action="{{ route('panel.tags.destroy', $tag->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash me-1"></i></button>

                            </form>
                            {{-- <a href="{{ route('panel.users.destroy', $user->id) }}" class="btn btn-sm btn-danger"><i
                                    class="fa fa-trash me-1"></i></a> --}}
                        </td>
                    </tr>
                @endforeach
                {{ $tags->links() }}
            </tbody>
        </table>
    </div>
@endsection
