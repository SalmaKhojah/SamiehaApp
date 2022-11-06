@extends('layout-slp.master')

@section('title')
  عرض معلومات المريض
  @endsection

  @section('css')
 
  <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS -->
    <link href="https://unpkg.com/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

  @endsection

  @section('patientlink') active   @endsection


  @section('bar2')
   عرض معلومات المريض
  @endsection
  
  @section('bar1')
  قائمة المرضى  
  @endsection

  @section('link1')
   {{route('slpPaitentTable.index')}}
   @endsection



  @section('content')
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
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
                            {{$viewPatient[0]->first_name}}
                            {{$viewPatient[0]->last_name}}
                            </b>
                          </div>
                          <div class="col">
                           <label for="exampleInputnational_id">رقم الهوية:</label>
                           <b>
                           {{$viewPatient[0]->national_id}}
                           </b>
                          </div>
                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputbirth_date">تاريخ الميلاد:</label>
                          <b>
                             {{$viewPatient[0]->birth_date}}
                             </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputphone1">رقم الهاتف:</label>
                           <b>
                              {{$viewPatient[0]->phone}}
                           </b>
                          </div>

                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputnationality1">الجنسية:</label>
                          <b>
                              {{$viewPatient[0]->nationality}}
                          </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputregion1">المنطقة:</label>
                          <b>
                              {{$viewPatient[0]->region}}
                            </b>
                          </div>


                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputcity1">المدينة:</label>
                          <b>
                              {{$viewPatient[0]->city}}
                          </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputEmail1">البريد الإلكتروني:</label>
                          <b>
                              {{$viewPatient[0]->email}}
                          </b>
                          </div>


                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputdiagnosis1">التشخيص:</label>
                          <b>
                              {{$viewPatient[0]->diagnosis}}
                              </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputcharacteristics1">الأعراض:</label>
                          <b>
                              {{$viewPatient[0]->characteristics}}
                          </b>
                          </div>


                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputneurological_damage1">منطقة الإصابة العصبية:</label>
                          <b>
                              {{$viewPatient[0]->neurological_damage}}
                              </b>
                          </div>
                          <div class="col">
                          <label for="exampleInputseverity1">شدة الإصابة العصبية:</label>
                           <b>
                               {{$viewPatient[0]->severity}}
                           </b>
                          </div>

                          <div class="w-100"></div>
                          <div class="col">
                          <label for="exampleInputassesment_method1">طريقة التقييم:</label>
                          <b>
                              {{$viewPatient[0]->assesment_method}}
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

      <br>
   <h2>الجلسات</h2>
   <table  class="table">

<thead>
</thead>
<tbody>
@foreach($incompleted as $item)
<tr>

 <ul class="list-group">
 <td>
   <li class="list-group"><h5>{{$item->id}} الجلسة</h5></li>
   </td>
   <td>
   <a href="{{route('result.show' , $item->id)}}" class="btn btn-app"><i class="fa fa-search"></i>عرض النتائج</a>
   <a  class="btn btn-app" onclick="return confirm('هل أنت متأكد أنك تريد حذف الجلسة؟')" href="{{ route('soft.delete',$item->id)}}"> <i class="fa fa-trash" ></i>حذف  </a>



   

</td>
</ul>

</tr>
@endforeach

</tbody>
</table>

</section>
  

  @endsection

  @section('scripts')

 @endsection

 @section('scripts')
<!-- Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('assets/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      // "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>$("#creatSuccessMessage").show().delay(2000).fadeOut();</script>
@endsection


 