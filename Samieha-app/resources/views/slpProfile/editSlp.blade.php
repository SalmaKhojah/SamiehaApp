@extends('layout.master')

@section('title')
  
  @endsection

  @section('css')

  @endsection

  @section('bar2')
   تعديل بيانات الاختصاصي
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
                <h3 class="card-title">إضافة معلومات الاختصاصي</h3>
              </div>
              <br>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="{{route('slpTable.update',  $editSlp->id )}}" method="POST" id="quickForm">
                @csrf
                @method('PUT')
                <div class="container">
                  <div class="row">
                    <div class="col">
                    <div class="form-group">
                    <label for="exampleInputName1">الاسم الأول</label>
                    <input type="text" name="F_slp_name" class="form-control" id="exampleInputName1" value="{{ $editSlp->F_slp_name }}">
                  </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                    <label for="exampleInputName2">الاسم الأخير</label>
                    <input type="text" name="L_slp_name" class="form-control" id="exampleInputName2" value="{{ $editSlp->L_slp_name }}">
                  </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                    <div class="form-group">
                    <label for="exampleInputWorkPlace">مقر العمل</label>
                    <input type="text" name="work_place" class="form-control" id="exampleInputWorkPlace" value="{{ $editSlp->work_place }}">
                  </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                    <label for="exampleInputslp_email">البريد الإلكتروني</label>
                    <input type="email" name="slp_email" class="form-control" id="exampleInputslp_email" value="{{ $editSlp->slp_email }}">
                  </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                    <div class="form-group">
                        <label for="exampleInputslp_password">كلمة المرور</label>
                        <input type="password" name="slp_password" class="form-control" id="exampleInputslp_password" value="{{ $editSlp->slp_password }}">
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

<!-- Page specific script -->
<script>
$(function () {
  $('#quickForm').validate({
    rules: {
      slp_email: {
        required: true,
        email: true,
      },
      slp_password: {
        required: true,
        minlength: 8
      },
      F_slp_name: {
        required: true,
        minlength: 2
      },
      L_slp_name: {
        required: true,
        minlength: 2
      },
      work_place: {
        required: true,
        minlength: 2
      },

    },
    messages: {
      slp_email: {
        required: "الرجاء إدخال عنوان البريد الإلكتروني",
        email: "يرجى إدخال عنوان بريد إلكتروني صالح"
      },
      slp_password: {
        required: "الرجاء إدخال كلمة مرور",
        minlength: "يجب أن تتكون كلمة المرور الخاصة بك من 8 أحرف على الأقل"
      },
      F_slp_name: {
        required: "الرجاء إدخال الاسم الأول",
        minlength: "يجب أن يتكون الاسم الأول من حرفين على الأقل"
      },
      L_slp_name: {
        required: "الرجاء إدخال الاسم الأخير",
        minlength: "يجب أن يتكون الاسم الأخير من حرفين على الأقل"
      },
      work_place: {
        required: "الرجاء إدخال مقر العمل ",
        minlength: "يجب أن يتكون مقر العمل من حرفين على الأقل"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

 @endsection