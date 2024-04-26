@extends('layouts.app')

@section('content')
  <div class="page-heading">
    <h3>Statistic Warga</h3>
  </div>
  <div class="page-content">
    <section class="row">
      <div class="col-12 col-lg-9">
        <div class="row">
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                    <div class="stats-icon green mb-2">
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Data Warga</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalPenduduk }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endsection
