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
                <a href="{{route('admin.dashboard')}}">
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.clerk.index')}}">
                    <p>{{ __('Clerk List') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.students.index')}}">
                    <p>{{ __('Student List') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.profile.index')}}">
                    <p>{{ __('Profile') }}</p>
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
                    <a href="{{route('main-dashboard')}}">
                        <p>{{ __('Overview') }}</p>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('student.profile.index')}}">
                        <p>{{ __('Profile') }}</p>
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
                    <a href="{{route('main-dashboard')}}">
                        <p>{{ __('Overview') }}</p>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('student.profile.index')}}">
                        <p>{{ __('Profile') }}</p>
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
                <a href="{{route('main-dashboard')}}">
                    <p>{{ __('Home') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{route('clerk.students.index')}}">
                    <p>{{ __('Student Record') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{route('clerk.profile')}}">
                    <p>{{ __('Profile') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
@endrole

