
@if(session('failed'))
            <div class="alert small text-center alert-danger">
                <h6>{{session('failed')}}</h6>
            </div>
 @endif


            @if(session('success'))
            <div class="alert alert-success overflow-auto">
            <h6>{{session('success')}}</h6>
            </div>
            @endif


            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



