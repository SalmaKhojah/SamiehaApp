@extends('layout.master')

@section('title')
  رفع مواد الجلسة
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
  رفع مواد الجلسة
  @endsection

  @section('link2')
   {{route('Material.create')}}
   @endsection
  
  @section('bar1')
  الرئيسية
  @endsection

  @section('link1')
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
                <h3 class="card-title">رفع مواد الجلسة</h3>
              </div>
              <br>
              <!-- /.card-header -->

              <!-- form start -->
            <form action="{{route('Material.store')}}" method="POST" enctype="multipart/form-data" id="quickForm">
              @csrf

              <div class="container">
               <div class="row">
                 <div class="col">
                 <div>
                    <label for="exampleInputName1">التصنيف الرئيسي</label>
                  <select class="form-control select2"  name="category" id="category" style="width: 100%;">
                  <option selected disabled>اختر التصنيف الرئيسي</option>
                  @foreach($categories as $cat )
                  <option value="{{$cat->id}}" >{{$cat->category}}</option>
                  @endforeach
                  </select>
                  @if ($errors->has('category'))
                       <span class="text-danger">{{ $errors->first('category') }}</span>
                     @endif
                  </div> 
                 </div>

                 <div class="col">
                 <div>
                    <label for="exampleInputName1">التصنيف الفرعي</label>
                  <select id="subcategory" name="subcategory"  class="form-control select2" style="width: 100%;">
                 </select>
                 @if ($errors->has('subcategory'))
                       <span class="text-danger">{{ $errors->first('subcategory') }}</span>
                     @endif
                  </div>

                  <script type="text/javascript">
                     $(document).ready(function () {
                         $('#category').on('change', function () {
                             var category_id = this.value;
                             $('#subcategory').html('');
                             $.ajax({
                                 url: '{{ route('getSubcategory') }}?category_id='+category_id,
                                 type: 'get',
                                 success: function (res) {
                                     $('#subcategory').html('<option selected disabled value="">اختر التصنيف الفرعي</option> <option value="أخرى">أخرى</option>');
                                     $.each(res, function (key, value) {
                                         $('#subcategory').append('<option value="' + value
                                             .subcategory + '">' + value.subcategory + '</option>');
                                     });
             
                                   }
                             });
                         });
                     });
                 </script>

<!-- 
                 <div id="subcategoryother" class="form-group" style="display:none;">
                    <label for="exampleInput">التصنيف الفرعي</label>
                    <input name="subcategory" type="text"  class="form-control" id="exampleInputt" placeholder="ادخل التصنيف الفرعي">
                  </div> -->

                   <!-- to set the name value of SubCategory of id=subcategoryother -->
                   <script>
                  $(document).on("change","#subcategory", function(){
                    var SubCategory = $(this).val();
                    if(SubCategory === "أخرى"){
                      $("#subcategoryother").attr("name", "subcategory");
                    }
                  });
                </script>


              

                 </div>
                 <div class="w-100"><br></div>
                 <div class="col">
                 <div class="form-group">
                    <label for="exampleInputt">الكلمة كتابة</label>
                    <input name="cue6"  type="text"  value="{{ old('cue6') }}"  class="form-control" id="exampleInputt" placeholder="ادخل الكلمة">
                    <input name="word"  type="hidden" value="d"  class="form-control" id="exampleInputt">
                    @if ($errors->has('cue6'))
                       <span class="text-danger">{{ $errors->first('cue6') }}</span>
                     @endif
                  </div>
                 </div>
                 <div class="col">
                 <div class="form-group">
                    <label for="exampleInputt">الحرف الأول كتابة</label>
                    <input name="cue5" type="text" value="{{ old('cue5') }}"  class="form-control" id="exampleInputt" placeholder="ادخل الحرف الأول كتابة">
                    @if ($errors->has('cue5'))
                       <span class="text-danger">{{ $errors->first('cue5') }}</span>
                     @endif
                  </div> 
                 </div>
               </div>
               <div class="row">
                 <div class="col">
                 <div class="form-group">
                    <label for="exampleInputt">الإشارة الدلالية للكلمة</label>
                    <input name="cue1" type="text" value="{{ old('cue1') }}"  class="form-control" id="exampleInputt" placeholder="ادخل الإشارة الدلالية للكلمة">
                    @if ($errors->has('cue1'))
                       <span class="text-danger">{{ $errors->first('cue1') }}</span>
                     @endif
                  </div>
                 </div>
                 <div class="col">
                 <div class="form-group">
                    <label for="exampleInputt">إتمام الجملة</label>
                    <input name="cue2" type="text"  value="{{ old('cue2') }}" class="form-control" id="exampleInputt" placeholder="ادخل إتمام الجملة">
                    @if ($errors->has('cue2'))
                       <span class="text-danger">{{ $errors->first('cue2') }}</span>
                     @endif
                  </div>
                 </div>

                 <div class="w-100"><br></div>
                 <div class="col">
                  <div class="form-group">
                     <label for="exampleInputName1">صوت الحرف الأول</label>
                       <input name="cue3" type="file"  class="form-control-file" id="exampleFormControlFile1">
                       @if ($errors->has('cue3'))
                       <span class="text-danger">{{ $errors->first('cue3') }}</span>
                     @endif
                   </div>
                 </div>

                 <div class="col">

                  <div class="form-group">
                     <label for="exampleInputName1">صوت المقطع الأول</label>
                       <input name="cue4" type="file" class="form-control-file" id="exampleFormControlFile1">
                       @if ($errors->has('cue4'))
                       <span class="text-danger">{{ $errors->first('cue4') }}</span>
                     @endif
                  </div>

                 </div>
               </div>
               <div class="row">
                 <div class="col">
                 <div class="form-group">
                     <label for="exampleInputName1">الكلمة نطقا</label>
                       <input name="cue7" type="file" class="form-control-file" id="exampleFormControlFile1">
                       @if ($errors->has('cue7'))
                       <span class="text-danger">{{ $errors->first('cue7') }}</span>
                     @endif
                  </div>
                
                 </div>
                 <div class="col">
                 <div class="form-group">
                     <label for="exampleInputName1">الصورة</label>
                       <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                       @if ($errors->has('image'))
                       <span class="text-danger">{{ $errors->first('image') }}</span>
                     @endif
                     </div>
                 </div>
         
               </div>
             </div>
             
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">إضافة</button>
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
    <!-- /.content --> 
  
  @endsection

  @section('scripts')
<!-- jQuery -->
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{URL::asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- Select2 -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- Page specific script -->


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

<script>
$(document).on("change","#subcategory", function(){
  var SubCategory = $(this).val();
  if(SubCategory === "أخرى"){
    $("#subcategoryother").show();
  }else{
    $("#subcategoryother").hide();
  }
});
</script>

<script>$("#creatSuccessMessage").show().delay(2000).fadeOut();</script>
 

 @endsection



