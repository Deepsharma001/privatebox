@extends('layouts.admin')
@section('content')
          <h3 class="page-heading mb-4">Widgets</h3>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-users float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-success">45465</h4>
                  <h6 class="card-subtitle mb-4">Totel Event</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-success-gadient" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-shopping-cart float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-info">7895</h4>
                  <h6 class="card-subtitle mb-4">Media</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-info-gadient" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-bookmark float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-warning">1569</h4>
                  <h6 class="card-subtitle mb-4">Orders</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-warning-gadient" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="clearfix">
                    <i class="fa fa-pie-chart float-right icon-grey-big"></i>
                  </div>
                  <h4 class="card-title font-weight-normal text-danger">$ 63259</h4>
                  <h6 class="card-subtitle mb-4">Revenue</h6>
                  <div class="progress progress-slim">
                    <div class="progress-bar bg-danger-gadient" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
                
@endsection
@section('scripts')
@parent

@endsection