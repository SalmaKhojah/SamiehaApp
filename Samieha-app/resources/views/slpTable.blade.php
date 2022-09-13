@extends('layout.master')

@section('title')
  قائمة الاختصاصيين
  @endsection

  @section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  @endsection

  @section('bar1')
  قائمة الاختصاصيين
  @endsection

  @section('bar2')
  الرئيسية
  @endsection



  @section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">قائمة الاختصاصيين</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>اسم الاختصاصي</th>
                    <th>البريد الاإلكتروني</th>
                    <th>مقر العمل</th>
                    <th>قائمة المرضى</th>
                    <th>العمليات</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>
                    <a class="btn btn-app"><i class="fa fa-search"></i>View</a>
                    <a class="btn btn-app"><i class="fas fa-edit"></i>Edit</a>
                    <a class="btn btn-app"><i class="fa fa-trash"></i>Delete</a>
                  </td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    <td>
                    <a class="btn btn-app"><i class="fa fa-search"></i>View</a>
                    <a class="btn btn-app"><i class="fas fa-edit"></i>Edit</a>
                    <a class="btn btn-app"><i class="fa fa-trash"></i>Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Werbkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    <td>
                    <a class="btn btn-app"><i class="fa fa-search"></i>View</a>
                    <a class="btn btn-app"><i class="fas fa-edit"></i>Edit</a>
                    <a class="btn btn-app"><i class="fa fa-trash"></i>Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td>413</td>
                    <td>
                    <a class="btn btn-app"><i class="fa fa-search"></i>View</a>
                    <a class="btn btn-app"><i class="fas fa-edit"></i>Edit</a>
                    <a class="btn btn-app"><i class="fa fa-trash"></i>Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>-</td>
                    <td>
                    <a class="btn btn-app"><i class="fa fa-search"></i>View</a>
                    <a class="btn btn-app"><i class="fas fa-edit"></i>Edit</a>
                    <a class="btn btn-app"><i class="fa fa-trash"></i>Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>
                    <a class="btn btn-app"><i class="fa fa-search"></i>View</a>
                    <a class="btn btn-app"><i class="fas fa-edit"></i>Edit</a>
                    <a class="btn btn-app"><i class="fa fa-trash"></i>Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>
                    <a class="btn btn-app"><i class="fa fa-search"></i>View</a>
                    <a class="btn btn-app"><i class="fas fa-edit"></i>Edit</a>
                    <a class="btn btn-app"><i class="fa fa-trash"></i>Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>
                    <a class="btn btn-app"><i class="fa fa-search"></i>View</a>
                    <a class="btn btn-app"><i class="fas fa-edit"></i>Edit</a>
                    <a class="btn btn-app"><i class="fa fa-trash"></i>Delete</a>
                    </td>
                  </tr>
             
             
              
          
       
               
        
             
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
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
@endsection