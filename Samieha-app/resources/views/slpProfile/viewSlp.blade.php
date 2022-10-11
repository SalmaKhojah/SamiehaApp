@extends('layout.master')

@section('title')
  عرض بيانات الاختصاصي
  @endsection

  @section('css')

  @endsection

  @section('bar2')
  عرض بيانات الاختصاصي
  @endsection

  @section('link2')
   
   @endsection
  
  @section('bar1')
   قائمة الاختصاصيين
  @endsection

  @section('link1')
  {{route('slpTable.index')}}
  @endsection

  @section('content')
      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">عرض معلومات الاختصاصي</h3>
              </div>
              <!-- /.card-header -->
                <div class="card-body">
                <div class="container">
                 <div class="row">
                   <div class="col">
                   <label for="exampleInputName1">الاسم:</label>
                    <b>{{ $viewslp->F_slp_name }} {{ $viewslp->L_slp_name }}</b>
                   </div>
                   <div class="col">
                   <label for="exampleInputWorkPlace">مقر العمل:</label>
                    <b>{{ $viewslp->work_place }}</b>
                   </div>
                   <div class="w-100"></div>
                   <div class="col">
                   <label for="exampleInputslp_email">البريد الإلكتروني:</label>
                    <b>{{ $viewslp->slp_email }}</b>
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