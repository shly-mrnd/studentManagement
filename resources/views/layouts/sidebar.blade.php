<!-- Sidebar Navigation -->
{{-- administrator --}}
{{-- <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/src/cict-logo.png" alt="">
            </div>
        </a>
        <a href="" class="simple-text logo-normal">
            {{ __('Admin Name') }}
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
                <a href="{{route('admin.profile.show', 2)}}">
                    <p>{{ __('Profile') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div> --}}

{{-- student --}}
<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/src/cict-logo.png" alt="">
            </div>
        </a>
        <a href="" class="simple-text logo-normal">
            {{ __('Student Name') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a href="{{route('student.overview')}}">
                    <p>{{ __('Overview') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{route('student.profile.show', 1)}}">
                    <p>{{ __('Profile') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>


{{-- clerk --}}
{{-- <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/src/cict-logo.png" alt="">
            </div>
        </a>
        <a href="" class="simple-text logo-normal">
            {{ __('Clerk Name') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">
                <a href="{{route('clerk.home')}}">
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
</div> --}}

