
<nav class="mt-2">
    <!--begin::Sidebar Menu-->
    <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="navigation"
        aria-label="Main navigation"
        data-accordion="false"
        id="navigation"
    >
        <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>
                    Posts
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link active">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>All Posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.posts.create') }}" class="nav-link active">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Add New Post</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end::Sidebar Menu-->
</nav>
