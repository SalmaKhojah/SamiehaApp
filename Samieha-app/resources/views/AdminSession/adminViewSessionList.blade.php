@extends('layout.master')

@section('title')
قائمة الجلسات العلاجية
  @endsection

  @section('css')
    <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!---Dropdowon --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  @endsection

  @section('bar2')
  قائمة الجلسات العلاجية
  @endsection

  @section('link2')
   {{route('Adminsession.index')}}
   @endsection
  
  @section('bar1')
  الرئيسية
  @endsection

  @section('link1')
  {{url('/')}}
  @endsection

  @section('content')


              <?php 
                  $seNo = 1;
                ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->
         
            <div class="card">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">  قائمة الجلسات العلاجية
</h3>
              </div>
              </div>
              
              <!-- /.card-header search -->
              <div class="card-body">
              <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">رقم الجلسة</th>
      <th scope="col">الجلسات العلاجية</th>
    </tr>
  </thead>
  <tbody>
  @foreach($sessions as $session) 
    <tr>
      <th scope="row">الجلسة {{$seNo++}}</th>
      <td>
      <a href="{{route('Adminsession.show' , $session->id)}}" class="btn btn-app"><i class="fa fa-search"></i>عرض</a>
      </td>
    </tr>
    @endforeach
  </tbody>
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