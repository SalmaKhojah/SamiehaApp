@extends('layout.master')

@section('title')
  إضافة اختصاصي
  @endsection

  @section('css')
  @endsection

  @section('bar2')
   إضافة اختصاصي
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
              <form action="{{route('slpTable.store')}}" method="POST" id="quickForm">
              @csrf
              <div class="container">
                <div class="row">
                  <div class="col">
                  <div class="form-group">
                    <label for="exampleInputName1">الاسم الأول</label>
                    <input type="text" name="F_slp_name" class="form-control" id="exampleInputName1" placeholder="ادخل الاسم الأول">
                  </div>
                  </div>
                  <div class="col">
                  <div class="form-group">
                    <label for="exampleInputName2">الاسم الأخير</label>
                    <input type="text" name="L_slp_name" class="form-control" id="exampleInputName2" placeholder="ادخل الاسم الأخير">
                  </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col">
                  <div class="form-group">
                    <label for="exampleInputWorkPlace">مقر العمل</label>
                    <input type="text" name="work_place" class="form-control" id="exampleInputWorkPlace" placeholder="ادخل مقر العمل">
                  </div>
                  </div>
                  <div class="col">
                  <div class="form-group">
                    <label for="exampleInputslp_email">البريد الإلكتروني</label>
                    <input type="email" name="email" class="form-control" id="exampleInputslp_email" placeholder="example@example.com">
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                  <div class="form-group">
                        <label for="exampleInputslp_password">كلمة المرور</label>
                        <input type="password" name="password" class="form-control" id="exampleInputslp_password" placeholder="ادخل كلمة المرور">
                      </div>
                  </div>
                  <div class="col"></div>
                </div>
              </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">إضافة</button>
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

      //ما تشتغل صح
  $.validator.addMethod( "uniqueEmail" , function( value,element, $email ) {
    for (let i = 0; i < $email.length; i++) {
       if(value.val() === $email[i].val())
        return false;
     }
	     return true;
      } ,
       "البريد الإلكتروني مستخدم مسبقا"
      ); 

      

$(function () {
  $('#quickForm').validate({
    rules: {
      slp_email: {
        required: true,
        email: true,
        uniqueEmail: true,
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
        acceptArabicCharSpaces:"يجب أن يتكون الاسم الأخير من أحرف عربية",
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
        email: "يرجى إدخال عنوان بريد إلكتروني صالح",
        uniqueEmail:"البريد الإلكتروني مستخدم مسبقا"
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