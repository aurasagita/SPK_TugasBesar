@extends ('layouts.template')

@section('content')
    
    <div class="row">
        <div class="col-md-12 grid-margin">
            @if (session('message'))
                <h6 class="alert alert-success">{{ session('message')}},</h6>
            @endif
            <div class="card">
                <div class="card-header border-0">
            <div class="me-md-3 me-xl-5">
                <b><h5><p class="mb-md-6">Selamat Datang Admin Sistem Pendukung Keputusan</p></h5></b>
            </div>
            </div>
        </div>
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <b><h1>Dashboard SPK</h1></b>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div>
              </div>

                <div class="card-header border-0">
                    <!-- Main content -->
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"><i class="nav-icon fas fa-home"></i> Dashboard</h3>
                        </div>
                        <div class="card-body">
                <section class="content">

                <!-- Default box -->
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                      <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                          <div class="inner">
                            <h3>{{ $Alternatif }}</h3>
                            <p>Alternatif</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-truck fa-2x"></i>
                          </div>
                          <a href="{{ url('/alternatifs') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                          <div class="inner">
                            <h3>{{ $Criteria }}</h3>
                            <p>Criteria</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <a href="{{ url('/criterias') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                          <div class="inner">
                            <h3>{{ $User }}</h3>
            
                            <p>Admin</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-users"></i>
                          </div>
                          <a href="{{ url('/login') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>

                      <!-- ./col -->
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <b>HASIL PERANGKINGAN</b>    
                        </div>

                        <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
                          <form class="form" method="GET" action="{{ url('calculate') }}" class="col-md-4" style="padding: 0">
                            <div class="form-group w-100 mb-3">
                            </div>
                          </form>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="table-1">
                                    <thead>
                                        <tr class="text-center">
                                            <th></th>
                                            <th>SUM</th>
                                            <th>RANKING</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sum as $alternative => $criteriaValues)
                                            <tr class="text-center">
                                                @foreach ($criteriaValues as $value)
                                                    <td>{{ $value }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </section>
        @endsection