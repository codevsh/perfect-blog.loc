<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

    <li class="nav-item">
        <a href="{{ route('admin.role.index') }}" class="nav-link">

            <i class="nav-icon fas fa-dharmachakra"></i>
            <p>
                {{ __('Roles') }}

            </p>
        </a>
    </li>
   <li class="nav-item">
        <a href="{{ route('admin.user.index') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                {{ __('Users') }}

            </p>
        </a>
    </li>

      <li class="nav-item">
        <a href="{{ route('admin.category.index') }}" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>
                {{ __('Categories') }}
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{  route('admin.tag.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tag"></i>
            <p>
                {{ __('Tags') }}
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ route('admin.article.index') }}" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
                {{ __('Articles') }}
            </p>
        </a>
    </li>

    <li><hr class="dropdown-divider"></li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
                {{ __('About') }}
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
                {{ __('Site settings') }}
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-vector-square"></i>
            <p>
                {{ __('Social links') }}
            </p>
        </a>
    </li>

</ul>
