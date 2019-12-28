<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route("dashboard.index") !!}">
                    Kullanıcılar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route("dashboard.roles.index") !!}">
                    Roller
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route("dashboard.jobs.index") !!}">
                    İş İlanları
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route("dashboard.news.index") !!}">
                    Haberler
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route("dashboard.events.index") !!}">
                    Etkinlikler
                </a>
            </li>
        </ul>
    </div>
</nav>