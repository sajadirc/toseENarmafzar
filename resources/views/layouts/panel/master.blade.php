@include('layouts.panel.header')
<div class="container">
    <div class="row bg-dark text-light">
        <div class="col-md-3 p-2">
            @include('layouts.panel.sideBar')
        </div>
        <div class="col-md-9 p-2 mt-2">
            @yield('content')

        </div>
    </div>
</div>

@include('layouts.panel.footer')
