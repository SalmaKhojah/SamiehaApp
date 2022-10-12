@extends('layout-slp.master')

@section('title')
ربط المريض بالاختصاصي
  @endsection

  @section('css')
    <!-- Select2 info-->
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  @endsection

  @section('bar2')
   ربط المريض بالاختصاصي
  @endsection

  @section('link2')
   {{route('slpLinkP.create')}}
   @endsection
  
  @section('bar1')
   الرئيسية
  @endsection

  @section('link1')
  {{route('slpPaitentTable.index')}}
  @endsection

  @section('linklink') active   @endsection


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
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">ربط المريض بالاختصاصي</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form action="{{route('slpLinkP.store')}}" method="POST" id="quickForm">
              @csrf
                <div class="card-body">
                <input type="hidden" name="slp_id" value="{{$slp}}">
                  <div>
                    <label for="exampleInputName1">اسم المريض</label>
                @if(count($paitentExcepCuur)==0)
                  <select disabled class="form-control select2" style="width: 100%;">
                  <option selected="selected">لا يوجد مرضى مسجلين  </option>
                @else
                <select name="patient_id"  class="form-control select2" style="width: 100%;">
                  @foreach($paitentExcepCuur as $item)  
                    <option value="{{$item->id}}" >{{$item->first_name}} {{$item->last_name}}</option>
                    @endforeach
                  @endif
                  </select>
                  </div>    

                </div>
                <!-- /.card-body -->
                @if(count($paitentExcepCuur)==0  )
                <div class="card-footer">
                  <button type="submit" disabled class="btn btn-info">ربط</button>
                </div>
                @else
                <div class="card-footer">
                  <button type="submit"  class="btn btn-info">ربط</button>
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
     
<br>
 
@if(isset($LinkedSLP))
  
<div class="row">
   <!-- START ALERTS AND CALLOUTS -->
  <div class="col-md-12">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-bullhorn"></i>
          تنبيه
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="callout callout-danger">
        
        @foreach($LinkedSLP as $item) 
        <h5>هذا المريض مسجل مسبقًا لدى الاختصاصي <b>{{$item->F_slp_name}} {{$item->L_slp_name}}</b></h5>
        <br>
          @endforeach
          <div class="container">
  <div class="row">
    <div class="col">البريد الإلكتروني للاختصاصي :
    <a href="{{$item->slp_email}}" target="_blank">{{$item->slp_email}}</a>
    </div>
    
    <div class="col">مقر العمل :
    {{$item->work_place}}
    </div>

</div>
<br>
          <h7>الرجاء التواصل مع الاختصاصي المسؤول عن المريض عن طريق <a href="{{$item->slp_email}}" target="_blank">البريد الإلكتروني</a> </h7>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

@endif

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


          
