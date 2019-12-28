@extends("dashboard.inc.app")

@section("content")
@include("dashboard.inc.header")

<div class="container-fluid">
    <div class="row">
        @include("dashboard.inc.menu")
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>
            <h2>Kullanıcılar</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Ad Soyad</th>
                        <th>E-Posta</th>
                        <th>Rol</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{!! $d->id !!}</td>
                        <td>{!! $d->name !!}</td>
                        <td>{!! $d->email !!}</td>
                        <td>{!! ($d->role) ? $d->role->name : '-' !!}</td>
                        <td>
                            <a href="">Güncelle </a>
                            <a href="">Sil </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
