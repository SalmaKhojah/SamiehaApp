@extends('layout-slp.master')

@section('title')
قائمة المرضى
  @endsection

  @section('css')
  <!-- DataTables prim-->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  @endsection

  @section('bar1')
  الرئيسية  
 @endsection
 @section('link1')
  /SLP/home
   @endsection

  @section('bar2')
  الملف الشخصي 
  @endsection
  @section('link2')
   @endsection

   @section('slpprofile') active   @endsection

   @section('content')
      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">عرض معلومات الاختصاصي</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                <div class="container">
                 <div class="row">
                   <div class="col">
                   <label for="exampleInputName1">الاسم:</label>
                    <b>{{ $viewslp[0]->F_slp_name }} {{ $viewslp[0]->L_slp_name }}</b>
                   </div>
                   <div class="col">
                   <label for="exampleInputWorkPlace">مقر العمل:</label>
                    <b>{{ $viewslp[0]->work_place }}</b>
                   </div>
                   <div class="w-100"></div>
                   <div class="col">
                   <label for="exampleInputslp_email">البريد الإلكتروني:</label>
                    <b>{{ $viewslp[0]->email }}</b>
                   </div>
                    <div>
                   <a href="{{route('profileslp.edit' , Auth::user()->id)}}" class="btn btn-info"><i class="fas fa-edit"> </i> تعديل </a>
                   </div>
                 </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  @endsection

  @section('scripts')

 @endsection