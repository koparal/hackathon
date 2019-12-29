@extends("dashboard.inc.app")

@section("content")
    @include("dashboard.inc.header")

    <div class="container-fluid">
        <div class="row">
            @include("dashboard.inc.menu")
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <h2>Push Notifications</h2>
                <div class="float-right p-2">
                    <a href="{!! route("dashboard.push_notifications.create") !!}" class="btn btn-warning">Notification Oluştur</a>
                    <a href="{!! route("dashboard.push_notifications.targets") !!}" class="btn btn-success">Hedef Oluştur</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Notification</th>
                            <th>Hedef</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Teknisyen, 22-26 Yaş Grubu</td>
                                <td>Teknisyen</td>
                                <td>
                                    <a href="">Push</a>
                                    <a href="">Kaldır </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
