@extends('layout-slp.master')

@section('title')
   تعديل معلومات المريض
  @endsection

  @section('css')
 
  <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS -->
    <link href="https://unpkg.com/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    
  @endsection

  @section('bar2')
  تعديل معلومات المريض  
  @endsection
  
  @section('bar1')
  قائمة المرضى  
  @endsection

  @section('link1')
  {{route('slpPaitentTable.index')}}
   @endsection
   @section('patientlink') active   @endsection



  @section('content')

<!-- SmartWizard html -->
<div id="smartwizard">
            <ul class="nav nav-progress">
                                    <li class="nav-item">
                                      <a class="nav-link default done" href="#step-1">
                                        <div class="num">1</div>
                                        معلومات شخصية
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link default done" href="#step-2">
                                        <span class="num">2</span>
                                        معلومات طبية
                                      </a>
                                    </li>
              </ul>
 
    <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">تعديل معلومات المريض الشخصية</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

             <form action="{{route('slpPaitentTable.update' , $editPatient->id)}}" method="POST" id="quickForm" >
                @csrf
                @method('PUT')

                <div class="container">
                 <div class="row">
                   <div class="col">
                   <div class="form-group">
                        <label for="exampleInputName1">الاسم الأول</label>
                        <input type="text"  value="{{ $editPatient->first_name }}" name="first_name" class="form-control" id="exampleInputName1" placeholder="ادخل الاسم الأول">
                      </div>
                   </div>
                   <div class="col">
                   <div class="form-group">
                        <label for="exampleInputName2">الاسم الأخير</label>
                        <input type="text" value="{{ $editPatient->last_name }}" name="last_name" class="form-control" id="exampleInputName2" placeholder="ادخل الاسم الأخير">
                      </div>
                   </div>
                   <div class="w-100"></div>
                   <div class="col">
                   <div class="form-group">
                        <label for="exampleInputnational_id">رقم الهوية</label>
                        <input type="text" value="{{ $editPatient->national_id }}"  name="national_id" class="form-control" id="exampleInputnational_id" placeholder="ادخل رقم الهوية">
                      </div>
                   </div>
                   <div class="col">
                   <div class="form-group">
                         <label for="exampleInputbirth_date">تاريخ الميلاد</label>
                             <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                 <input type="text" value="{{ $editPatient->birth_date }}"   name="birth_date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                 <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                     <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                             </div>
                         </div>
                        
                   </div>
                 </div>
                 <div class="row">
                   <div class="col">
                   <div class="form-group">
                          <label for="exampleInputphone1">رقم الهاتف</label>
                          <input type="tel" value="{{ $editPatient->phone }}"  name="phone" class="form-control" id="exampleInputphone1" placeholder="ادخل رقم الهاتف">
                        </div>
                   </div>
                   <div class="col">
                   <div class="form-group">
                        <label for="exampleInputnationality1">الجنسية</label>
                        <input type="text" value="{{ $editPatient->nationality }}"  name="nationality" class="form-control" id="exampleInputnationality1" placeholder="ادخل الجنسية">
                      </div>
                   </div>
                   <div class="w-100"></div>
                   <div class="col">
                   <div class="form-group">
                        <label for="exampleInputregion1">المنطقة</label>
                        <input type="text" value="{{ $editPatient->region }}"  name="region" class="form-control" id="exampleInputregion1" placeholder="ادخل المنطقة">
                      </div>
                   </div>
                   <div class="col">
                   <div class="form-group">
                        <label for="exampleInputcity1">المدينة</label>
                        <input type="text" value="{{ $editPatient->city }}"  name="city" class="form-control" id="exampleInputcity1" placeholder="ادخل المدينة">
                      </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col">

                   <div class="form-group">
                        <label for="exampleInputEmail1">البريد الإلكتروني</label>
                        <input type="email" value="{{ $editPatient->p_email }}"  name="p_email" class="form-control" id="exampleInputEmail1" placeholder="xxxx@example.com">
                      </div>
                   </div>
                   <div class="col">
                     
                   <div class="form-group">
                        <label for="exampleInputPassword1">كلمة المرور</label>
                        <input type="password" value="{{ $editPatient->p_password }}"  name="p_password" class="form-control" id="exampleInputPassword1" placeholder="ادخل كلمة المرور">
                      </div>
                   </div>
                 </div>
               </div>
               <br>
              
  

                    
               
                </div>
                <!-- /.card -->
                </div>
    
                 </div>
                 <!-- /.row -->
               </div><!-- /.container-fluid -->
      
        
        
                </div>
                <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                    <div class="container-fluid">
                      <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                          <!-- jquery validation -->
                          <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">إضافة معلومات المريض الطبية</h3>
                            </div>
              
                                 <br>
                                 <div class="container">
                                  <div class="row">
                                    <div class="col">
                                    <div class="form-group">
                                       <label for="exampleInputdiagnosis1">التشخيص</label>
                                       <input type="text" value="{{ $editPatient->diagnosis }}"  name="diagnosis" class="form-control" id="exampleInputdiagnosis1" placeholder="ادخل التشخيص">
                                     </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputcharacteristics1">الأعراض</label>
                                        <input type="text" value="{{ $editPatient->characteristics }}"  name="characteristics" class="form-control" id="exampleInputcharacteristics1" placeholder="ادخل الأعراض">
                                      </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col">
                                    <div class="form-group">
                                        <label for="exampleInputneurological_damage1">منطقة الإصابة العصبية</label>
                                        <input type="text" value="{{ $editPatient->neurological_damage }}"  name="neurological_damage" class="form-control" id="exampleInputneurological_damage1" placeholder="ادخل منطقة الإصابة">
                                      </div>    
                                    </div>
                                    <div class="col">
                                    <div class="form-group">
                                      <label for="exampleInputseverity1">شدة الإصابة العصبية</label>
                                      <input type="text" value="{{ $editPatient->severity }}"  name="severity" class="form-control" id="exampleInputseverity1" placeholder="ادخل شدة الإصابة">
                                    </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col">
                                            
                              <div class="form-group">
                                <label for="exampleInputassesment_method1">طريقة التقييم</label>
                                <input type="text" value="{{ $editPatient->assesment_method }}"  name="assesment_method" class="form-control" id="exampleInputassesment_method1" placeholder="ادخل طريقة التقييم">
                              </div>
                                    </div>
                                    <div class="col"></div>   
                                </div>
                                </div>
                              
                                 <br>
        
                              <div class="card-footer">
                               <button type="submit" class="btn btn-primary">تحديث</button>
                             </div> 
            </form>
            </div>
            <!-- /.card -->
            </div>

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
  


        </div>

    </div>
 

</div> 


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
<!---Wizerd--->
<script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript -->
<script src="https://unpkg.com/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

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
    var $ = require( "jquery" );
require( "smartwizard/dist/css/smart_wizard_all.css");
const smartWizard = require("smartwizard");

$(function() {
    $('#smartwizard').smartWizard();
});
</script>

<script>
import $ from "jquery";
import "smartwizard/dist/css/smart_wizard_all.css";
import smartWizard from 'smartwizard';

$(function() {
    $('#smartwizard').smartWizard();
    
});

</script>

<script>

     $('#smartwizard').smartWizard({
                     theme: 'dots',
                     transitionEffect: 'fade',
                     transitionSpeed: '400',
                     lang: { next: 'التالي', previous: 'السابق'},
                     toolbarSettings: {
                         toolbarButtonPosition: 'left',
                         showNextButton: true,
                         showPreviousButton: true
                     }
                     
      })

      
</script>

 @endsection