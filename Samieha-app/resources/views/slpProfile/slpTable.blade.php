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
  الرئيسية
  @endsection

  @section('link1')
   /
   @endsection
   
  @section('bar2')
  قائمة الاختصاصيين
  @endsection

  @section('link2')
   
   @endsection




  @section('content')

  @if(session()->has('success'))
       <div id="creatSuccessMessage" class="container alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5><i class="icon fas fa-check"></i>{{ session()->get('success') }}</h5>
       </div>
      @endif

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">قائمة الاختصاصيين</h3>
                <a href="{{route('slpTable.create')}}">
                      <div class="container text-left">
                       <button class="btn btn-primary" type="button">إضافة اختصاصي</button>
                     </div>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>اسم الاختصاصي</th>
                    <th>البريد الإلكتروني</th>
                    <th>مقر العمل</th>
                    <th>قائمة المرضى</th>
                    <th>العمليات</th>
                  </tr>
                  </thead>
                  <tbody>
               @foreach($data as $item)  
                  <tr>
                    <td>{{$item->F_slp_name}} {{$item->L_slp_name}}</td>
                    <td>{{$item->slp_email}}</td>
                    <td>{{$item->work_place}}</td>
                    <td>
                    <a href="{{route('paitentsList.show' , $item->id)}}" class="btn btn-app"><i class="fa fa-search"></i>عرض</a>
                    </td>
                    <td>
                    <a href="{{route('slpTable.show' , $item->id)}}" class="btn btn-app"><i class="fa fa-search"></i>عرض</a>
                    <a href="{{route('slpTable.edit' , $item->id)}}" class="btn btn-app"><i class="fas fa-edit"></i>تعديل</a>
                    <a data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}" class="btn btn-app"><i class="fa fa-trash"></i>حذف</a>

                    <form action="{{ route('slpTable.destroy', $item->id) }}" method="POST">
                      <!-- Modal -->
                      
                    <div class="modal fade" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">حذف بيانات الاختصاصي {{$item->F_slp_name}} {{$item->L_slp_name}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          هل أنت متأكد أنك تريد حذف الاختصاصي ؟ سيتم إزالة جميع بيانات الاختصاصي بشكل دائم. لا يمكنك التراجع عن هذا الإجراء.
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                            @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}">حذف</button>                          </div>
                        </div>
                      </div>
                    </div>

                    </form>
                  </td>
                  </tr>
                @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>اسم الاختصاصي</th>
                    <th>البريد الإلكتروني</th>
                    <th>مقر العمل</th>
                    <th>قائمة المرضى</th>
                    <th>العمليات</th>
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
      "buttons": ["copy", "excel", "pdf", "print", "colvis"]
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

<script>$("#creatSuccessMessage").show().delay(2000).fadeOut();</script>

@endsection