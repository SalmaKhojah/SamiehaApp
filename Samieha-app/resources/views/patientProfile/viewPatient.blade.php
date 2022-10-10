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
                        <label for="exampleInputName1">الاسم:</label>
                        <label> 
                        {{$viewPatient->first_name}}
                        {{$viewPatient->last_name}}
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputnational_id">رقم الهوية:</label>
                        <label>
                        {{$viewPatient->national_id}}
                        </label>
                      </div>
                         <div class="form-group">
                         <label for="exampleInputbirth_date">تاريخ الميلاد:</label>
                         <label>
                            {{$viewPatient->birth_date}}
                         </label>
                         </div>
                         <div class="form-group">
                        <label for="exampleInputphone1">رقم الهاتف:</label>
                        <label>
                            {{$viewPatient->phone}}
                         </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputnationality1">الجنسية:</label>
                        <label>
                            {{$viewPatient->nationality}}
                         </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputregion1">المنطقة:</label>
                        <label>
                            {{$viewPatient->region}}
                         </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputcity1">المدينة:</label>
                        <label>
                            {{$viewPatient->city}}
                        </label>
                      </div>
                         <div class="form-group">
                        <label for="exampleInputEmail1">البريد الإلكتروني:</label>
                        <label>
                            {{$viewPatient->p_email}}
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputdiagnosis1">التشخيص:</label>
                        <label>
                            {{$viewPatient->diagnosis}}
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputcharacteristics1">الأعراض:</label>
                        <label>
                            {{$viewPatient->characteristics}}
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputneurological_damage1">منطقة الإصابة العصبية:</label>
                        <label>
                            {{$viewPatient->neurological_damage}}
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputseverity1">شدة الإصابة العصبية:</label>
                        <label>
                            {{$viewPatient->severity}}
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputassesment_method1">طريقة التقييم:</label>
                        <label>
                            {{$viewPatient->assesment_method}}
                        </label>
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