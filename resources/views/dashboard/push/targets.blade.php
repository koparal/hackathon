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
                            <label for="uname1">Hedef Adı</label>
                            <input type="text" class="form-control" name="uname1" id="uname1" required="">
                        </div>
                        <div class="form-group">
                            <label>Cinsiyet</label>
                            <select name="" class="form-control" id="">
                                <option value="">Kadın</option>
                                <option value="">Erkek</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="uname1">Yaş Grubu</label>
                            <select name="old" class="form-control" id="">
                                <option value="">18-24</option>
                                <option value="">24-28</option>
                                <option value="">28-32</option>
                                <option value="">32-36</option>
                                <option value="">36-40</option>
                                <option value="">40 - +</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Meslek</label>
                            <select name="" class="form-control" id="">
                                <option value="">Teknisyen</option>
                                <option value="">Mühendis</option>
                                <option value="">Alan Şefi</option>
                                <option value="">İşçi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dil</label>
                            <select name="" class="form-control" id="">
                                <option value="">Türkçe</option>
                                <option value="">İngilizce</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Deneyim</label>
                            <select name="" class="form-control" id="">
                                <option value="">5+</option>
                                <option value="">3-5</option>
                                <option value="">1-3</option>
                                <option value="">0-1</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg float-right">Oluştur</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
