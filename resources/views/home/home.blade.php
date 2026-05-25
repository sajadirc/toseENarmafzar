{{-- #import And Extend Master Layout --}}
@extends('layouts.master')

{{-- #Title Section For title --}}
@section('title','وب سایت خبری حسینی نیوز')

{{-- #Can Be Add style With styles Section --}}
@section('styles')
@endsection

{{-- #Can Be Add Script With Scripts section --}}
@section('scripts')
@endsection

{{-- #Content Section Is Here--}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">وب سایت خبری حسینی</h1>
            </div>
        </div>
    </div>
@endsection
