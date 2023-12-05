<div class="sidebar" data-color="white" data-active-color="danger">
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
                <a href="">
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="">
                <a href="">
                    <p>{{ __('Clerk List') }}</p>
                </a>
            </li>
            <li class="">
                <a href="{{route('admin.students.index')}}">
                    <p>{{ __('Student List') }}</p>
                </a>
            </li>
            <li class="">
                <a href="">
                    <p>{{ __('Profile') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
