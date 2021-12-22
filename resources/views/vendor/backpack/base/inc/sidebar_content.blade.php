<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
{{--<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>--}}
{{--<li class="nav-item"><a class="nav-link" href="{{ backpack_url('users') }}"><i class="la la-user-alt nav-icon"></i>Users</a></li>--}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('posts') }}"><i class="la la-file-alt nav-icon"></i>Posts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('categories') }}"><i class="la la-clipboard-list nav-icon"></i>Categories</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('admins') }}"><i class="la la-user-ninja nav-icon"></i>Admins</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
