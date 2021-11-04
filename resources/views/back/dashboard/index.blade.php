@extends('layouts.main', ['web' => $web])
@section('title', 'Dashboard - ')
@section('container')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-dark">
          <i class="fas fa-trophy"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Achievement</h4>
          </div>
          <div class="card-body">
            {{ $achievement }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fas fa-box"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Product</h4>
          </div>
          <div class="card-body">
            {{ $product }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fas fa-tools"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Project</h4>
          </div>
          <div class="card-body">
            {{ $project }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fas fa-users"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Team</h4>
          </div>
          <div class="card-body">
            {{ $team }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-calendar-week"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Event</h4>
          </div>
          <div class="card-body">
            {{ $event }}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection