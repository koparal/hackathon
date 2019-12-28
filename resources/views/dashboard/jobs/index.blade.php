@extends("dashboard.inc.app")

@section("content")
    @include("dashboard.inc.header")

    <div class="container-fluid">
        <div class="row">
            @include("dashboard.inc.menu")
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <h2>Roller</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Şirket</th>
                            <th>İlan Başlığı</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                            <tr>
                                <td>{!! $d->id !!}</td>
                                <td>{!! $d->company->name !!}</td>
                                <td>{!! $d->details()->first()->title !!}</td>
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
