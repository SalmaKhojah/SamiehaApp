@extends('layout.master')

@section('title')
  
  @endsection

  @section('css')

  @endsection

  @section('bar1')
   إضافة مريض
  @endsection
  
  @section('bar2')
  قائمة المرضى  
  @endsection

  @section('link2')
   {{route('patientTable.index')}}
   @endsection



  @section('content')
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">إضافة مريض</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('patientTable.store')}}" method="POST" id="quickForm">
                @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputName1">الاسم الأول</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputName1" placeholder="ادخل الاسم الأول">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">الاسم الأخير</label>
                        <input type="text" name="last_name" class="form-control" id="exampleInputName2" placeholder="ادخل الاسم الأخير">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputnational_id">رقم الهوية</label>
                        <input type="text" name="national_id" class="form-control" id="exampleInputnational_id" placeholder="ادخل رقم الهوية">
                      </div>
                         <div class="form-group">
                         <label for="exampleInputbirth_date">تاريخ الميلاد</label>
                             <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                 <input type="text" name="birth_date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                 <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                     <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                        <label for="exampleInputphone1">رقم الهاتف</label>
                        <input type="tel" name="phone" class="form-control" id="exampleInputphone1" placeholder="ادخل رقم الهاتف">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputnationality1">الجنسية</label>
                        <input type="text" name="nationality" class="form-control" id="exampleInputnationality1" placeholder="ادخل الجنسية">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputregion1">المنطقة</label>
                        <input type="text" name="region" class="form-control" id="exampleInputregion1" placeholder="ادخل المنطقة">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputcity1">المدينة</label>
                        <input type="text" name="city" class="form-control" id="exampleInputcity1" placeholder="ادخل المدينة">
                      </div>
                         <div class="form-group">
                        <label for="exampleInputEmail1">البريد الإلكتروني</label>
                        <input type="email" name="p_email" class="form-control" id="exampleInputEmail1" placeholder="xxxx@example.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">كلمة المرور</label>
                        <input type="password" name="p_password" class="form-control" id="exampleInputPassword1" placeholder="ادخل كلمة المرور">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputdiagnosis1">التشخيص</label>
                        <input type="text" name="diagnosis" class="form-control" id="exampleInputdiagnosis1" placeholder="ادخل التشخيص">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputcharacteristics1">الأعراض</label>
                        <input type="text" name="characteristics" class="form-control" id="exampleInputcharacteristics1" placeholder="ادخل الأعراض">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputneurological_damage1">منطقة الإصابة العصبية</label>
                        <input type="text" name="neurological_damage" class="form-control" id="exampleInputneurological_damage1" placeholder="ادخل منطقة الإصابة">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputseverity1">شدة الإصابة العصبية</label>
                        <input type="text" name="severity" class="form-control" id="exampleInputseverity1" placeholder="ادخل شدة الإصابة">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputassesment_method1">طريقة التقييم</label>
                        <input type="text" name="assesment_method" class="form-control" id="exampleInputassesment_method1" placeholder="ادخل طريقة التقييم">
                      </div>
                      <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                          <label class="custom-control-label" for="exampleCheck1">أوافق على <a href="#">شروط الخدمة</a>.</label>
                        </div>
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
  





  @endsection

  @section('scripts')
<!-- jQuery -->
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<!-- jquery-validation -->
<script src="{{URL::asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>

<!-- date-range-picker -->
<script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- Page specific script -->
<script>
$(function () {
  $('#quickForm').validate({
    rules: {
        first_name: {
        required: true,
      },
      last_name: {
        required: true,
      },
      national_id: {
        required: true,
        minlength: 10,
        maxlength: 10,
      },
      p_email: {
        required: true,
        email: true,
      },
      p_password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
        first_name: {
        required: "الرجاء إدخال الاسم الأول",
        },
        last_name: {
        required: "الرجاء إدخال الاسم الأول",
        },
        national_id: {
        required: "الرجاء إدخال رقم الهوية ",
        minlength: "يجب أن تتكون رقم الهوية الخاصة بك لا تقل عن 10 أرقام",
        maxlength: "يجب أن تتكون رقم الهوية الخاصة بك لا تزيد عن 10 أرقام",
        },
        p_email: {
        required: "الرجاء إدخال عنوان البريد الإلكتروني",
        email: "يرجى إدخال عنوان بريد إلكتروني صالح"
      },
      p_password: {
        required: "الرجاء إدخال كلمة مرور",
        minlength: "يجب أن تتكون كلمة المرور الخاصة بك من 5 أحرف على الأقل"
      },
      terms: "الرجاء قبول شروطنا"
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