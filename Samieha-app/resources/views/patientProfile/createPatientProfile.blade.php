@extends('layout.master')

@section('title')
  إضافة مريض
  @endsection

  @section('css')
 
  <Style>

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 1.6em;
  width: 1.6em;
  margin: 0 4em;
  background-color: #bbbbbb;
  border: none; 
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
.line{
  height: 1.6em;
  width: 1.6em;
  display: inline-block;
  color:red;
}
/* Mark the active step: */
.step.active {
  background-color: #02b070;
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
  opacity: 1;

}
</Style>
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
              <form action="{{route('patientTable.store')}}" method="POST" id="quickForm" >
                @csrf
                <!--progress bar-->
                <div  style="text-align:center;margin-top:1em;">
                      <span class="step">1</span>
                      <ul class="line"></ul>
                      <span class="step">2</span>
                    </div>

                    <div class="card-body">
                    <div class="tab">
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
                    </div>
                    <div class="tab">
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
                    <!--- <div class="card-footer">
                       <button type="submit" class="btn btn-primary">إضافة</button>
                     </div> --->
                    </div>

                    <div style="overflow:auto;">
                      <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                      </div>
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
<!-- jquery-validation -->
<script src="{{URL::asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>

<!-- date-range-picker -->
<script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>


<!-- InputMask -->
<script src="{{URL::asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!--validate the add paitent form-->
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
      birth_date: {
        required: true,
      },
      phone: {
        required: true,
      },
      nationality: {
        required: true,
      },
      region: {
        required: true,
      },
      city: {
        required: true,
      },
      diagnosis: {
        required: true,
      },
      characteristics: {
        required: true,
      },
      neurological_damage: {
        required: true,
      },
      severity: {
        required: true,
      },
      assesment_method: {
        required: true,
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
        required: "الرجاء إدخال الاسم الأخير",
        },
        national_id: {
        required: "الرجاء إدخال رقم الهوية ",
        minlength: "يجب أن تتكون رقم الهوية الخاصة بك لا تقل عن 10 أرقام",
        maxlength: "يجب أن تتكون رقم الهوية الخاصة بك لا تزيد عن 10 أرقام",
        },
        birth_date: {
        required: "الرجاء إدخال تاريخ الميلاد",
          },
          phone: {
            required: "الرجاء إدخال رقم الهاتف",
          },
          nationality: {
            required: "الرجاء إدخال الجنسية",
          },
          region: {
            required: "الرجاء إدخال المنطقة",
          },
          city: {
            required: "الرجاء إدخال المدينة",
          },
          diagnosis: {
            required: "الرجاء إدخال التشخيص",
          },
          characteristics: {
            required: "الرجاء إدخال الأعراض",
          },
          neurological_damage: {
            required: "الرجاء إدخال منطقة الإصابة العصبية",
          },
          severity: {
            required: "الرجاء إدخال شدة الإصابة العصبية",
          },
          assesment_method: {
            required: "الرجاء إدخال طريقة التقييم",
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
<!--date picker-->
<script>
  $(function () {
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
  })
</script>

<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("quickForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>

  
 @endsection