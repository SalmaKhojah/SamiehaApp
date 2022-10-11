@extends('layout.master')

@section('title')
  عرض معلومات المريض
  @endsection

  @section('css')
 
  <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS -->
    <link href="https://unpkg.com/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

  @endsection

  @section('bar1')
   عرض معلومات المريض
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
                <h3 class="card-title">عرض معلومات المريض</h3>
              </div>
              <!-- /.card-header -->
                    <div class="card-body">
                      <div class="form-group">
                      <div class="container">
                        <div class="row">
                          <div class="col">
                          <label for="exampleInputName1">الاسم: </label>
                          <b> 
                            {{$viewPatient->first_name}}
                            {{$viewPatient->last_name}}
                            </b>
                          </div>
                          <div class="col">
                           <label for="exampleInputnational_id">رقم الهوية:</label>
                           <b>
                           {{$viewPatient->national_id}}
                           </b>
                          </div>
                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputbirth_date">تاريخ الميلاد:</label>
                          <b>
                             {{$viewPatient->birth_date}}
                             </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputphone1">رقم الهاتف:</label>
                           <b>
                              {{$viewPatient->phone}}
                           </b>
                          </div>

                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputnationality1">الجنسية:</label>
                          <b>
                              {{$viewPatient->nationality}}
                          </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputregion1">المنطقة:</label>
                          <b>
                              {{$viewPatient->region}}
                            </b>
                          </div>


                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputcity1">المدينة:</label>
                          <b>
                              {{$viewPatient->city}}
                          </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputEmail1">البريد الإلكتروني:</label>
                          <b>
                              {{$viewPatient->p_email}}
                          </b>
                          </div>


                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputdiagnosis1">التشخيص:</label>
                          <b>
                              {{$viewPatient->diagnosis}}
                              </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputcharacteristics1">الأعراض:</label>
                          <b>
                              {{$viewPatient->characteristics}}
                          </b>
                          </div>


                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputneurological_damage1">منطقة الإصابة العصبية:</label>
                          <b>
                              {{$viewPatient->neurological_damage}}
                              </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputseverity1">شدة الإصابة العصبية:</label>
                           <b>
                               {{$viewPatient->severity}}
                           </b>
                          </div>

                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputassesment_method1">طريقة التقييم:</label>
                          <b>
                              {{$viewPatient->assesment_method}}
                          </b>
                          </div>
 


                       
                        </div>

                 
                     </div>
                     <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
      </div>
</section>
  

  @endsection

  @section('scripts')

 @endsection



 