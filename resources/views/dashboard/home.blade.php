@extends("dashboard.inc.app")

@section("content")
@include("dashboard.inc.header")

<div class="container-fluid">
    <div class="row">
        @include("dashboard.inc.menu")
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <h2>Uygulama Trafiği</h2>
            <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
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
@push("scripts")
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
    </script>
@endpush