@extends('layouts.panel.master')
@section('title', 'همه خبر ها')
@section('content')
    <div class="bg-light rounded p-3">
        <h4 class="border-start border-primary border-4  text-dark p-2 ps-1 h-6 ms-1  mb-4 fw-bold">لیست اخبار</h4>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>عنوان</th>
                    <th>توضیح کوتاه</th>
                    <th>عکس</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $new)
                    <tr>
                        <td>{{ $new->id }}</td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->summary }}</td>
                        <td><img src="/{{ $new->image_url }}" alt="" width="80"></td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('panel.users.edit', $new->id) }}" class="btn btn-sm btn-primary me-1"><i
                                    class="fa fa-pen me-1"></i></a>
                            <form action="{{ route('panel.users.destroy', $new->id) }}" method="post">
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
                {{ $news->links() }}
            </tbody>
        </table>
    </div>
@endsection
