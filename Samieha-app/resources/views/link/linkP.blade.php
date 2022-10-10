@extends('layout.master')

@section('title')
ربط المريض بالاختصاصي
  @endsection

  @section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  @endsection

  @section('bar1')
   ربط المريض بالاختصاصي
  @endsection

  @section('link1')
   {{route('link.create')}}
   @endsection
  
  @section('bar2')
   الرئيسية
  @endsection

  @section('link2')
   {{url('/')}}
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ربط المريض بالاختصاصي</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="{{route('link.store')}}" method="POST" id="quickForm">
              @csrf
                <div class="card-body">
                  <div>
                    <label for="exampleInputName1">اسم الاختصاصي</label>
                @if(count($slps)==0)
                    <select  disabled class="form-control select2" style="width: 100%;">
                   <option selected="selected" disabled>لا يوجد أخصائيين</option>
                @else
                <select name="slp_id" class="form-control select2" style="width: 100%;">
                  @foreach($slps as $item)  
                  <option value="{{$item->id}}" selected="selected">{{$item->F_slp_name}} {{$item->L_slp_name}}</option>
                    @endforeach
                  @endif
                  </select>
                  </div>   

                 <div><br></div>

                  <div>
                    <label for="exampleInputName1">اسم المريض</label>
                @if(count($NotLinkedP)==0)
                  <select disabled class="form-control select2" style="width: 100%;">
                  <option selected="selected">لا يوجد مرضى غير مرتبيطن بأخصائيين</option>
                @else
                <select name="patient_id"  class="form-control select2" style="width: 100%;">
                  @foreach($NotLinkedP as $item)  
                    <option value="{{$item->id}}" selected="selected">{{$item->first_name}} {{$item->last_name}}</option>
                    @endforeach
                  @endif
                  </select>
                  </div>    

                </div>
                <!-- /.card-body -->
                @if(count($NotLinkedP)==0 || count($slps)==0 )
                <div class="card-footer">
                  <button type="submit" disabled class="btn btn-primary">ربط</button>
                </div>
                @else
                <div class="card-footer">
                  <button type="submit"  class="btn btn-primary">ربط</button>
                </div>
                @endif
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

  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })}
  )
</script>
<script>$("#creatSuccessMessage").show().delay(2000).fadeOut();</script>

 @endsection