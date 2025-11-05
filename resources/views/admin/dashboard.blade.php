@extends('admin.layouts.master')
@section('title', 'Dashboard')
@section('css')
    
@endsection

@section('content')
  <div class="page-heading">
    <h3>Selamat Datang, {{ Auth::user()->fullname }}!</h3>
  </div>
  <div class="page-content">
    <section class="row">
      <div class="col-12 col-lg-12">
        <div class="row">
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row d-flex align-items-center">
                  <div
                    class="col-auto d-flex align-items-center"
                  >
                    <div class="stats-icon purple mb-2">
                      <i class="iconly-boldWallet"></i>
                    </div>
                  </div>
                  <div class="col">
                    <h6 class="text-muted font-semibold">
                      Pesanan Hari Ini
                    </h6>
                    <h6 class="font-extrabold mb-0">{{ $todayOrders }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row d-flex align-items-center">
                  <div class="col-auto d-flex align-items-center">
                    <div class="stats-icon blue">
                      <i class="iconly-boldBuy"></i>
                    </div>
                  </div>
                  <div class="col">
                    <h6 class="text-muted font-semibold">Pendapatan Hari Ini</h6>
                    <h6 class="font-extrabold mb-0">{{ 'Rp'. number_format($todayRevenue, 0, ',','.') }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row d-flex align-items-center">
                  <div
                    class="col-auto d-flex align-items-center"
                  >
                    <div class="stats-icon green mb-2">
                      <i class="iconly-boldFolder"></i>
                    </div>
                  </div>
                  <div class="col">
                    <h6 class="text-muted font-semibold">Total Pesanan</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalOrders }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row d-flex align-items-cente">
                  <div
                    class="col-auto d-flex align-items-center"
                  >
                    <div class="stats-icon blue mb-2">
                      <i class="iconly-boldProfile"></i>
                    </div>
                  </div>
                  <div class="col">
                    <h6 class="text-muted font-semibold">
                      Total Pedapatan
                    </h6>
                    <h6 class="font-extrabold mb-0">{{ 'Rp'. number_format($totalRevenue, 0, ',','.') }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Grafik Penjualan</h4>
              </div>
              <div class="card-body">
                <div id="chart-profile-visit"></div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </section>
  </div>
@endsection

@section('script')
    
@endsection