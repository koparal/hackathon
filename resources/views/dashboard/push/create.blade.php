@extends("dashboard.inc.app")

@section("content")
    @include("dashboard.inc.header")

    <div class="container-fluid">
        <div class="row">
            @include("dashboard.inc.menu")
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <h2>Hedef Oluştur</h2>
                <div class="table-responsive">
                    <form class="form" role="form" autocomplete="off" id="loginForm" novalidate="" method="POST">
                        <div class="form-group">
                            <label>Hedef Seçiniz</label>
                            <select name="" class="form-control" id="">
                                <option value="">Teknisyen, 22-26 Yaş Grubu ...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg float-right">Oluştur</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
