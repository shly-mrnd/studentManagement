<!-- Sidebar Navigation -->
{{-- administrator --}}
@role('administrator')
<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/src/cict-logo.png" alt="">
            </div>
        </a>
        <a href="" class="simple-text logo-normal">
            {{ __(auth()->user()->username) }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a class="{{Route::currentRouteName() == 'admin.dashboard' ? 'text-primary' : ' '}}" href="{{route('admin.dashboard')}}">
                    <p><strong>{{ __('Dashboard') }}</strong></p>
                </a>
            </li>
            <li class="">
                <a class="{{Route::currentRouteName() == 'admin.clerk.index' ? 'text-primary' : ' '}}" href="{{route('admin.clerk.index')}}">
                    <p><strong>{{ __('Clerk List') }}</strong></p>
                </a>
            </li>
            <li class="">
                <a class="{{Route::currentRouteName() == 'admin.students.index' ? 'text-primary' : ' '}}" href="{{route('admin.students.index')}}">
                    <p><strong>{{ __('Student List') }}</strong></p>
                </a>
            </li>
            <li class="">
                <a class="{{Route::currentRouteName() == 'admin.profile.index' ? 'text-primary' : ' '}}" href="{{route('admin.profile.index')}}">
                    <p><strong>{{ __('Profile') }}</strong></p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endrole

{{-- student --}}
@role('student')
    @if (Auth::user()->status === 'pending')
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="/src/cict-logo.png" alt="">
                </div>
            </a>
            <a href="" class="simple-text logo-normal">
                {{ __(auth()->user()->username) }}
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="">
                    <a class="{{Route::currentRouteName() == 'main-dashboard' ? 'text-primary' : ' '}}" href="{{route('main-dashboard')}}">
                        <p><strong>{{ __('Overview') }}</strong></p>
                    </a>
                </li>
                <li class="">
                    <a class="{{Route::currentRouteName() == 'student.profile.index' ? 'text-primary' : ' '}}" href="{{route('student.profile.index')}}">
                        <p><strong>{{ __('Profile') }}</strong></p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @elseif (Auth::user()->status === 'approved')
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="/src/cict-logo.png" alt="">
                </div>
            </a>
            <a href="" class="simple-text logo-normal">
                {{ __(auth()->user()->username) }}
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="">
                    <a class="{{Route::currentRouteName() == 'main-dashboard' ? 'text-primary' : ' '}}" href="{{route('main-dashboard')}}">
                        <p><strong>{{ __('Overview') }}</strong></p>
                    </a>
                </li>
                <li class="">
                    <a class="{{Route::currentRouteName() == 'student.profile.index' ? 'text-primary' : ' '}}" href="{{route('student.profile.index')}}">
                        <p><strong>{{ __('Profile') }}</strong></p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @elseif (Auth::user()->status === 'declined')
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a href="" class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="/src/cict-logo.png" alt="">
                </div>
            </a>
            <a href="" class="simple-text logo-normal">
                {{ __(auth()->user()->username) }}
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="">
                    <a class="{{Route::currentRouteName() == 'main-dashboard' ? 'text-primary' : ' '}}" href="{{route('main-dashboard')}}">
                        <p><strong>{{ __('Overview') }}</strong></p>
                    </a>
                </li>
                <li class="">
                    <a class="{{Route::currentRouteName() == 'student.profile.index' ? 'text-primary' : ' '}}" href="{{route('student.profile.index')}}">
                        <p><strong>{{ __('Profile') }}</strong></p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @endif
@endrole


{{-- clerk --}}
@role('clerk')
<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/src/cict-logo.png" alt="">
            </div>
        </a>
        <a href="" class="simple-text logo-normal">
            {{ __(auth()->user()->username) }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a class="{{Route::currentRouteName() == 'main-dashboard' ? 'text-primary' : ' '}}"  href="{{route('main-dashboard')}}">
                    <p><strong>{{ __('Home') }}</strong></p>
                </a>
            </li>
            <li class="">
                <a class="{{Route::currentRouteName() == 'clerk.students.index' ? 'text-primary' : ' '}}"  href="{{route('clerk.students.index')}}">
                    <p><strong>{{ __('Student Record') }}</strong></p>
                </a>
            </li>
            <li class="">
                <a class="{{Route::currentRouteName() == 'clerk.profile' ? 'text-primary' : ' '}}"  href="{{route('clerk.profile')}}">
                    <p><strong>{{ __('Profile') }}</strong></p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endrole

