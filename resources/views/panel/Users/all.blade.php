@extends('layouts.panel.master')
@section('title', 'مدیریت کاربران')
@section('content')
    <div class="bg-light rounded p-3">
        <h4 class="border-start border-primary border-4  text-dark p-2 ps-1 h-6 ms-1  mb-4 fw-bold">لیست کاربران</h4>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>نقش</th>
                    <th>تایید شده</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @switch($user->type)
                            @case(0)
                                <td>کاربر</td>
                            @break

                            @case(1)
                                <td>نویسنده</td>
                            @break

                            @case(2)
                                <td>مدیر</td>
                            @break

                            @default
                        @endswitch
                        <td>{{ $user->is_verified ? 'بله' : 'خیر' }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="" class="btn btn-sm btn-primary me-1"><i class="fa fa-pen me-1"></i></a>
                            <form action="{{ route('panel.users.destroy', $user->id) }}" method="post">
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
                {{ $users->links() }}
            </tbody>
        </table>
    </div>
@endsection
