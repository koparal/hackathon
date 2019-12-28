<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route("dashboard.index") !!}">
                    <span data-feather="file"></span>
                    Kullanıcılar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route("dashboard.jobs.index") !!}">
                    <span data-feather="shopping-cart"></span>
                    İş İlanları
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route("dashboard.news.index") !!}">
                    <span data-feather="shopping-cart"></span>
                    Haberler
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route("dashboard.events.index") !!}">
                    <span data-feather="shopping-cart"></span>
                    Roller
                </a>
            </li>
        </ul>
    </div>
</nav>