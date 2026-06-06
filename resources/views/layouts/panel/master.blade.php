@include('layouts.panel.header')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.panel.sideBar')
        </div>
        <div class="col-md-9">
            @yield('content')

        </div>
    </div>
</div>

