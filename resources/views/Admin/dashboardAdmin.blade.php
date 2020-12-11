@extends('Admin/masterAdmin')

@section('judul_tab', 'Dashboard-AdminBLK')
    
@section('active_menu_dashboard', 'active')

@section('content')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-sm-12 mb-4">
                <div class="card-group">
                    
                    <div class="card col-md-6 no-padding ">
                        
                    </div>
                    <div class="card col-md-6 no-padding ">
                        
                    </div>
                    <div class="card col-md-6 no-padding ">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->
        <!-- cal -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                  <!-- Calender Chart Weather  -->
                  <div class="row">
                      <div class="col-md-12 col-lg-12">
                          <div class="card">
                              <div class="card-body">
                                  <!-- <h4 class="box-title">Chandler</h4> -->
                                  <div class="calender-cont widget-calender">
                                      <div id="calendar"></div>
                                  </div>
                              </div>
                          </div><!-- /.card -->
                      </div>
                  </div>
                  <!-- /Calender Chart Weather -->
                </div>  <!-- /.col-lg-8 -->

            </div>
        </div>
        <!-- /.cal -->
    </div>
    <!-- .animated -->
</div>
@endsection

