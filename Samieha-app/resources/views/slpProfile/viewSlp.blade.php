@extends('layout.master')

@section('title')
  عرض بيانات الاختصاصي
  @endsection

  @section('css')

  @endsection

  @section('bar1')
  عرض بيانات الاختصاصي
  @endsection

  @section('link1')
   
   @endsection
  
  @section('bar2')
   قائمة الاختصاصيين
  @endsection

  @section('link2')
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
                  <div class="form-group">
                    <label for="exampleInputName1">الاسم:</label>
                    <label>{{ $viewslp->F_slp_name }} {{ $viewslp->L_slp_name }}</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputWorkPlace">مقر العمل:</label>
                    <label>{{ $viewslp->work_place }}</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputslp_email">البريد الإلكتروني:</label>
                    <label>{{ $viewslp->slp_email }}</label>
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