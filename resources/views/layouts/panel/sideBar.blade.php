<div class="right-menu border-end border-light">

    {{-- #top data --}
        {{-- Top logout Btn --}}
    <div class="d-flex justify-content-around m-2">
        <h1 class="fs-4 text-center">پنل <span class="text-danger">ادمین</span></h1>
        <a href="{{ route('auth.logout') }}" class="btn btn-sm btn-danger">خروج</a>
    </div>
    <h3 class="fs-5 mt-2  p-2 fw-normal">کاربر <span class="fw-bold">{{ auth()->user()->name }}</span> خوش آمدید</h2>
        <p class="text-center">نقش: <span>{{ auth()->user()->isAdmin() ? 'مدیر' : 'نویسنده' }}</span></p>

        {{-- menu here --}}

        <div class="menu">
            <div class="accordion" id="accordionExample">
                {{-- User Manager Here --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-user pe-2"></i>
                            مدیریت کاربران
                        </button>
                    </h2>
                    <div id="collapseOne"
                        class="accordion-collapse collapse {{ request()->is('panel/users*') ? 'show' : '' }}"
                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                        <div class="accordion-body">
                            <a href="{{ route('panel.users.add') }}">
                                <i class="fa-solid fa-user-plus pe-1"></i>
                                افزودن کاربر</a>
                        </div>
                        <div class="accordion-body">
                            <a href="{{ route('panel.users.index') }}">
                                <i class="fa-solid fa-user-group  pe-1"></i>
                                لیست کاربران</a>
                        </div>

                    </div>
                </div>

                {{-- Tag Manager Here --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            مدیریت تگ ها
                        </button>
                    </h2>
                    <div id="collapseTwo"
                        class="accordion-collapse collapse {{ request()->is('panel/tag*') ? 'show' : '' }}"
                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <a href="{{ route('panel.tags.index') }}">
                                <i class="fa-solid fa-hashtag pe-1"></i>
                                مدیریت تگ </a>
                        </div>

                    </div>
                </div>

                {{-- RSS Manager Here --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                            <i class="fa-solid fa-newspaper pe-2"></i>
                            مدیریت اخبار
                        </button>
                    </h2>
                    <div id="collapseTwo1"
                        class="accordion-collapse collapse {{ request()->is('panel/news*') ? 'show' : '' }}"
                        aria-labelledby="headingTwo1" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <a href="{{ route('panel.news.create') }}">
                                <i class="fa-solid fa-plus pe-1"></i>
                                افزودن خبر</a>
                        </div>
                        <div class="accordion-body">
                            <a href="{{ route('panel.news.index') }}">
                                <i class="fa-solid fa-list pe-1"></i>
                                لیست اخبار</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
