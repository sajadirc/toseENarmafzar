<div class="right-menu border-end border-light">
    {{-- Top logout Btn --}}
    <div class="d-flex justify-content-around m-2">
        <h1 class="fs-4 text-center">پنل <span class="text-danger">ادمین</span></h1>
    <a href="{{route('auth.logout')  }}" class="btn btn-sm btn-danger">خروج</a>
    </div>
    <h3 class="fs-5 mt-2  p-2 fw-normal">کاربر <span class="fw-bold">{{ auth()->user()->name }}</span> خوش آمدید</h2>
    <p class="text-center">نقش: <span>{{ auth()->user()->isAdmin() ? 'مدیر' : 'نویسنده' }}</span></p>

</div>
