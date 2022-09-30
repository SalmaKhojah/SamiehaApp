@extends('layout.master')

@section('title')
  إضافة اختصاصي
  @endsection

  @section('css')
  @endsection

  @section('bar1')
   إضافة اختصاصي
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
                <h3 class="card-title">إضافة معلومات الاختصاصي</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="{{route('slpTable.store')}}" method="POST" id="quickForm">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName1">الاسم الأول</label>
                    <input type="text" name="F_slp_name" class="form-control" id="exampleInputName1" placeholder="ادخل الاسم الأول">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName2">الاسم الأخير</label>
                    <input type="text" name="L_slp_name" class="form-control" id="exampleInputName2" placeholder="ادخل الاسم الأخير">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputWorkPlace">مقر العمل</label>
                    <input type="text" name="work_place" class="form-control" id="exampleInputWorkPlace" placeholder="ادخل مقر العمل">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputslp_email">البريد الإلكتروني</label>
                    <input type="email" name="slp_email" class="form-control" id="exampleInputslp_email" placeholder="example@example.com">
                  </div>
                  <div class="form-group">
                        <label for="exampleInputslp_password">كلمة المرور</label>
                        <input type="password" name="slp_password" class="form-control" id="exampleInputslp_password" placeholder="ادخل كلمة المرور">
                      </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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

$.validator.addMethod( "acceptArabicCharSpaces" , function( value,element ) {
	   return this.optional( element ) || /^[\u0621-\u064A ]+$/.test( value );
      } ,
      "يجب أن يتكون الاسم الأول من أحرف عربية"
      ); 

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
        acceptArabicCharSpaces:"يجب أن يتكون الاسم الأول من أحرف عربية",
        minlength: 2
      },
      L_slp_name: {
        required: true,
        acceptArabicCharSpaces:"يجب أن يتكون الاسم الأول من أحرف عربية",
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