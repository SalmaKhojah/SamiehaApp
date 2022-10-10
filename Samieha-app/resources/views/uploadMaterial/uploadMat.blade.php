@extends('layout.master')

@section('title')
  رفع مواد الجلسة
  @endsection

  @section('css')
    <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

  @endsection

  @section('bar1')
  رفع مواد الجلسة
  @endsection

  @section('link1')
   {{route('Material.create')}}
   @endsection
  
  @section('bar2')
  الرئيسية
  @endsection

  @section('link2')
  {{url('/')}}
  @endsection


  @section('content')

  @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

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
              <!-- /.card-header -->

              <!-- form start -->
            <form action="{{route('Material.store')}}" method="POST" enctype="multipart/form-data" id="quickForm">
              @csrf
                <div class="card-body">
                  <div>
                    <label for="exampleInputName1">التصنيف الرئيسي</label>
                  <select id="mainCategory" name="category" class="form-control select2" style="width: 100%;">
                    <option value="الأسماء" selected="selected">الأسماء</option>
                    <option value="الأفعال" >الأفعال</option>
                    <option value="الصفات">الصفات</option>
                  </select>
                  </div> 

                  <div>
                    <label for="exampleInputName1">التصنيف الفرعي</label>
                  <select id="SubCategory" name="subcategory" class="form-control select2" style="width: 100%;">
                    <option value="أثاث" selected="selected">أثاث</option>
                    <option value="فواكه" >فواكه</option>
                    <option value="ملابس">ملابس</option>
                    <option value="أخرى">أخرى</option>
                  </select>
                  </div>
                   <!-- to set the name value of SubCategory of id=subcategoryother -->
                  <script>
                  $(document).on("change","#SubCategory", function(){
                    var SubCategory = $(this).val();
                    if(SubCategory === "أخرى"){
                      $("#subcategoryother").attr("name", "subcategory");
                    }
                  });
                </script>


                  <div id="subcategoryother" class="form-group" style="display:none;">
                    <label for="exampleInput">التصنيف الفرعي</label>
                    <input name="" type="text"  class="form-control" id="exampleInputt" placeholder="ادخل التصنيف الفرعي">
                  </div>
            
                     
                  <div class="form-group">
                     <label for="exampleInputName1">الصورة</label>
                       <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                     </div>
                  <div class="form-group">
                    <label for="exampleInputt">الكلمة</label>
                    <input name="word" type="text"   class="form-control" id="exampleInputt" placeholder="ادخل الكلمة">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputt">الإشارة الدلالية للكلمة</label>
                    <input name="cue1" type="text"   class="form-control" id="exampleInputt" placeholder="ادخل الإشارة الدلالية للكلمة">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputt">إتمام الجملة</label>
                    <input name="cue2" type="text"   class="form-control" id="exampleInputt" placeholder="ادخل إتمام الجملة">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputName1">صوت الحرف الأول</label>
                       <input name="cue3" type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputName1">صوت المقطع الأول</label>
                       <input name="cue4" type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputt">الحرف الأول كتابة</label>
                    <input name="cue5" type="text"   class="form-control" id="exampleInputt" placeholder="ادخل الحرف الأول كتابة">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputt">الكلمة كتابة</label>
                    <input name="cue6" type="text"   class="form-control" id="exampleInputt" placeholder="ادخل الكلمة كتابة">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputName1">الكلمة نطقا</label>
                       <input name="cue7" type="file" class="form-control-file" id="exampleFormControlFile1">
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

<!-- <script>

  $.validator.addMethod( "acceptArabicCharSpaces" , function( value,element ) {
  	   return this.optional( element ) || /^[\u0621-\u064A ]+$/.test( value );
        } ,
        "يجب أن يتكون الاسم الأول من أحرف عربية"
        ); 
  
  $(function () {
    $('#quickForm').validate({
      rules: {
        category: {
          required: true,
          acceptArabicCharSpaces:true,
          minlength: 2
        },
        subcategory: {
          required: true,
        },
        image: {
          required: true,
        },
        word: {
          required: true,
          acceptArabicCharSpaces:true,
          minlength: 2
        },
        cue1: {
          required: true,
          acceptArabicCharSpaces:true,
          minlength: 2
        },
        cue2: {
          required: true,
          acceptArabicCharSpaces:true,
          minlength: 2
        },
        cue3: {
          required: true,
        },
        cue4: {
          required: true,
        },
        cue5: {
          required: true,
          acceptArabicCharSpaces:true,
          minlength: 1
        },
        cue6: {
          required: true,
          acceptArabicCharSpaces:true,
          minlength: 2
        },
        cure7: {
          required: true,
        },
      },
      messages: {
        category: {
          required: "الرجاء إدخال التصنيف الرئيسي",
          acceptArabicCharSpaces:"يجب أن يتكون التصنيف الرئيسي من أحرف عربية",
          minlength: "يجب أن يتكون التصنيف الرئيسي من حرفين على الأقل"
        },
        subcategory: {
          required: "الرجاء إدخال التصنيف الفرعي",
          acceptArabicCharSpaces:"يجب أن يتكون التصنيف الفرعي من أحرف عربية",
          minlength: "يجب أن يتكون التصنيف الفرعي من حرفين على الأقل"
        },
        image: {
          required: "الرجاء اختيار الصورة",
        },
        word: {
          required: "الرجاء إدخال الكلمة",
          acceptArabicCharSpaces:"يجب أن تتكون الكلمة من أحرف عربية",
          minlength: "يجب أن تتكون الكلمة من حرفين على الأقل"
        },
        cue1: {
          required: "الرجاء إدخال الإشارة الدلالية للكلمة",
          acceptArabicCharSpaces:"يجب أن تتكون الإشارة الدلالية من أحرف عربية",
          minlength: "يجب أن تتكون الإشارة الدلالية للكلمة من حرفين على الأقل"
        },
        cue2: {
          required: "الرجاء إدخال إتمام الجملة ",
          acceptArabicCharSpaces:"يجب أن تتكون إتمام الجملة من أحرف عربية",
          minlength: "يجب أن تتكون إتمام الجملة الدلالية من حرفين على الأقل"
        },
        cue3: {
          required: "الرجاء إدخال صوت الحرف الأول",
        },
        cue4: {
          required: "الرجاء إدخال صوت المقطع الأول",
        },
        cue5: {
          required: "الرجاء إدخال الحرف الأول كتابة",
          acceptArabicCharSpaces:"يجب أن تتكون الحرف الأول كتابة من أحرف عربية",
          minlength: "يجب أن تتكون الحرف الأول كتابة من حرف على الأقل"
        },
        cue6: {
          required: "الرجاء إدخال الحرف الكلمة كتابة",
          acceptArabicCharSpaces:"يجب أن تتكون الكلمة كتابة من أحرف عربية",
          minlength: "يجب أن تتكون الكلمة كتابة من حرفين على الأقل"
        },
        cue7: {
          required: "الرجاء إدخال الكلمة نطقا",
        },
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
</script> -->

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
$(document).on("change","#SubCategory", function(){
  var SubCategory = $(this).val();
  if(SubCategory === "أخرى"){
    $("#subcategoryother").attr("name", "subcategory");
    $("#subcategoryother").show();
  }else{
    $("#subcategoryother").hide();
  }
});
</script>

<script>$("#creatSuccessMessage").show().delay(2000).fadeOut();</script>

 @endsection



