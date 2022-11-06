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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">إضافة معلومات الاختصاصي</h3>
              </div>
              <br>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="{{route('profileslp.update',  $editSlp[0]->id )}}" method="POST" id="quickForm">
                @csrf
                @method('PUT')
                <div class="container">
                  <div class="row">
                    <div class="col">
                    <div class="form-group">
                    <label for="exampleInputName1">الاسم الأول</label>
                    <input type="text" name="F_slp_name" class="form-control" id="exampleInputName1" value="{{ $editSlp[0]->F_slp_name }}">
                    @if ($errors->has('F_slp_name'))
                       <span class="text-danger">{{ $errors->first('F_slp_name') }}</span>
                     @endif
                  </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                    <label for="exampleInputName2">الاسم الأخير</label>
                    <input type="text" name="L_slp_name" class="form-control" id="exampleInputName2" value="{{ $editSlp[0]->L_slp_name }}">
                    @if ($errors->has('L_slp_name'))
                       <span class="text-danger">{{ $errors->first('L_slp_name') }}</span>
                     @endif
                  </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                    <div class="form-group">
                    <label for="exampleInputWorkPlace">مقر العمل</label>
                    <input type="text" name="work_place" class="form-control" id="exampleInputWorkPlace" value="{{ $editSlp[0]->work_place }}">
                    @if ($errors->has('work_place'))
                       <span class="text-danger">{{ $errors->first('work_place') }}</span>
                     @endif
                  </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                    <label for="exampleInputslp_email">البريد الإلكتروني</label>
                    <input type="email" name="email"  class="form-control" id="exampleInputslp_email" value="{{ $editSlp[0]->email }}">
                    @if ($errors->has('email'))
                       <span class="text-danger">{{ $errors->first('email') }}</span>
                     @endif
                  </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label for="exampleInputslp_password">كلمة المرور</label>
                        <input type="password" name="password" class="form-control" id="exampleInputslp_password" value="{{ $editSlp[0]->password }}">
                        @if ($errors->has('password'))
                          <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col"></div>
                  </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">تحديث</button>
                </div>
              </form>

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
<!-- jQuery -->
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{URL::asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>