
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
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="nav-icon bi bi-file-earmark-post"></i>
                <p>
                    Posts
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.posts.index') }}" class="nav-link ">
                        <p>All Posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.posts.create') }}" class="nav-link">
                        <p>Add New Post</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="nav-icon bi bi-file-earmark-break-fill"></i>
                <p>
                    Pages
                    <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.pages.index') }}" class="nav-link ">
                        <p>All Posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.pages.create') }}" class="nav-link">
                        <p>Add New Page</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end::Sidebar Menu-->
</nav>
