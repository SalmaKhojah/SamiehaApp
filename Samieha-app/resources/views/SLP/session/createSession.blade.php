@extends('layout-slp.master')

@section('title')
  إنشاء جلسة علاجية
  @endsection

 

  @section('css')
  <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS -->
    <link href="https://unpkg.com/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

      <!-- Select2 -->
      <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> -->

  @endsection



@section('link1')
   {{route('slpPaitentTable.index')}}
   @endsection

   @section('sessionlink') active @endsection

   @section('bar2')
إنشاء جلسة علاجية
   @endsection
  
  @section('bar1')
الرئيسية
  @endsection

  @section('content')


  @if(session()->has('success'))
       <div id="creatSuccessMessage" class="container alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5><i class="icon fas fa-check"></i>{{ session()->get('success') }}</h5>
       </div>
      @endif

      
<!-- SmartWizard html -->
<div id="smartwizard" class="mt-1">
<ul class="nav nav-progress">
                        <li class="nav-item">
                          <a class="nav-link default done" href="#step-1">
                            <div class="num">1</div>
                            الكلمات
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link default done" href="#step-2">
                            <span class="num">2</span>
                            التلميحات
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link default done" href="#step-3">
                            <span class="num">3</span>
                            المريض
                          </a>
                        </li>
                    </ul>
 
    <div class="tab-content">
        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
    <section class="content">
      <div class="container-fluid">
  

        <div class="row">
          <!-- left column -->
          <div class="col-md-12 ">
            <!-- jquery validation primary-->
            <div class="card card-info" >
              <div class="card-header"  >
                <h3 class="card-title">اختر الكلمات</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('session.store')}}" method="POST" id="quickForm" >
                @csrf
                    <div class="card-body">
                    
                      <div class="form-group">
                        <label for="exampleInputName2"></label><br/>

        
                        <div class="container">
                         <div class="row ">
                       
                           <!-- nouns  -->    
                           <div class="col bg-light mx-1 ">
                           <div class="card-header text-center">
                          أسماء
                         </div>
                         
                         <nav class="mt-2 mb-3 ">
                               <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
                                 <!-- Add icons to the links using the .nav-icon class
                                      with font-awesome or any other icon font library -->
                       
                       
                                 @foreach ($nounSub as $sub)
                                 <li class="nav-item nav-link bg-white">
                                 <a href="#" class="R">
                                    {{$sub->subcategory}}
                                    <i  onclick="myFunction(this)" style="float: left" class="my-1 fas fa-angle-left right"></i>
                       
                       
                                   </a>
                                   <ul class="nav nav-treeview">
                                   @foreach ($sub->words as $word)
                       
                                     <li class=" my-1 nav-item">
                                     <input class="mx-2 form-check-input" type="checkbox" name="words[]" value="{{$word->id}}" >
                                     <label class="mx-5 form-check-label" >
                                     {{$word->word}}
                                    </label>
                                     </li>
                                     @endforeach
                       
                                   </ul>
                                 </li>
                                 @endforeach
                                
                              
                       </ul>
                       </nav>
                       
                       
                      </div>

                    <!-- verb  -->    
                        <div class="col bg-light mx-1">
                          <div class="card-header text-center">
                          أفعال
                        </div>
                         <nav class="mt-2 mb-3 ">
                               <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
                                 <!-- Add icons to the links using the .nav-icon class
                                      with font-awesome or any other icon font library -->
                       
                       
                                 @foreach ($verbSub as $sub)
                                 <li class="nav-item nav-link bg-white">
                                 <a href="#" class="R">
                                    {{$sub->subcategory}}
                                    <i onclick="myFunction(this)" style="float: left"class="my-1 fas fa-angle-left right"></i>
                       
                                   </a>
                                   <ul class="nav nav-treeview">
                                   @foreach ($sub->words as $word)
                       
                                     <li class=" my-1 nav-item">
                                     <input class="mx-2 form-check-input" type="checkbox" name="words[]"  value="{{$word->id}}" >
                                     <label class="mx-5 form-check-label" >
                                     {{$word->word}}
                                    </label>
                                     </li>
                                     @endforeach
                       
                                   </ul>
                                 </li>
                                 @endforeach
                                
                              
                       </ul>
                       </nav>
                    
                    
                        </div>


                     <!-- Adjective  -->    
                     
                         <div class="col bg-light mx-1">
                         <div class="card-header text-center">
                         صفات
                       </div>
                       <nav class="mt-2 mb-3 ">
                             <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
                               <!-- Add icons to the links using the .nav-icon class
                                    with font-awesome or any other icon font library -->
                     
                     
                               @foreach ($adjSub as $sub)
                               <li class="nav-item nav-link bg-white">
                               <a href="#" class="R">
                                  {{$sub->subcategory}}
                                  <i onclick="myFunction(this)" style="float: left"class="my-1 fas fa-angle-left right"></i>
                     
                                 </a>
                                 <ul class="nav nav-treeview">
                                 @foreach ($sub->words as $word)
                     
                                   <li class=" my-1 nav-item">
                                   <input class="mx-2 form-check-input" type="checkbox" name="words[]" value="{{$word->id}}" >
                                   <label class="mx-5 form-check-label" >
                                   {{$word->word}}
                                  </label>
                                   </li>
                                   @endforeach
                     
                                 </ul>
                               </li>
                               @endforeach
                              
                            
                     </ul>
                     </nav>
                     </div>

  </div>
</div>

                      



                      </div>
                     
                    
                    
                    
                    
                    
                    </div>
            
            </div>
            <!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  


        </div>
        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
    <section class="content" id="quickForm2">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">اختر أنواع التلميحات المسموح بها</h3>
              </div>

                    <div class="card-body">

                    <div class="container text-center">
  <div class="row" hieght="200px">
    <div class="col bg-light pt-2 m-2">
    <input class="form-control form-control-md form-check-input " type="checkbox" checked name="cues[]" value="1" >
<br >
<p class="mt-5"> 
  الإشارة الدلالية للكلمة
</p>
    </div>
    <div class="col bg-light pt-2 m-2">
    <input class="form-control form-control-md form-check-input " type="checkbox" checked name="cues[]" value="2" >
<br >
<p class="mt-5">إتمام الجملة 
</p>
    </div>

    <div class="col bg-light pt-2 m-2">
    <input class="form-control form-control-md form-check-input " type="checkbox" checked name="cues[]" value="3" >
<br >
<p class="mt-5">  
صوت الحرف الأول

</p>
    </div>
    <div class="col bg-light pt-2 m-2">
    <input class="form-control form-control-md form-check-input " type="checkbox" checked name="cues[]" value="4" >
<br >
<p class="mt-5">  
صوت المقطع الأول

</p>
    </div>

    <div class="col bg-light pt-2 m-2">
    <input class="form-control form-control-md form-check-input " type="checkbox" checked name="cues[]" value="5" >
<br >
<p class="mt-5">  
    الحرف الأول كتابة

</p>
    </div>
   
    <div class="col bg-light pt-2 m-2">
    <input class="form-control form-control-md form-check-input " type="checkbox" checked name="cues[]" value="6" >
<br >
<p class="mt-5">  
    الكلمة كتابة

</p>
    </div>

    <div class="col bg-light pt-2 m-2">
    <input class="form-control form-check-input " type="checkbox" checked name="cues[]" value="7" >
<br >
<p class="mt-5">  
    الكلمة نطقا

</p>
    </div>


  </div>
</div>





                      
                     </div>
             
            </div>
            <!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->


      
      </div>
        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
    <section class="content" id="quickForm2">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> اختر المريض</h3>
              </div>


                    <div class="card-body">
                      <div>
                        <label for="exampleInputName1">اختر اسم المريض</label>
                        <!-- <select class="selectpicker" multiple data-live-search="true" placeholder="اختر المريض"  style="z-index:1;">
                        <option selected disabled>اختر المريض</option>
                        @foreach($data as $item)  
                         <option name="patient_id[]" value="{{$item->users_id}}">{{$item->first_name}} {{$item->last_name}}</option>
                         @endforeach
                          </select> -->


                        <select  class="form-control select2" style="width: 100%;" placeholder="اختر المريض" name="patient_id[]" multiple="multiple">

                         <option selected disabled>المريض..</option>

                         @foreach($data as $item)  
                         <option  value="{{$item->users_id}}">{{$item->first_name}} {{$item->last_name}} - {{$item->national_id}}</option>
                         @endforeach
                       </select> 
                      </div>
                      
              

                     </div>
                     <!-- /.card-body -->
                      <div class="card-footer">
                       <button type="submit" class="btn btn-info">إضافة</button>
                     </div> 
              </form>
            </div>
            <!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  


        </div>


    </div>
 

</div> 


  @endsection

  @section('scripts')
  <script>
$('select').selectpicker();
  </script>

  <script>
    function myFunction(x) {
  x.classList.toggle("fa-angle-up");
}
  </script>

  <script>
var coll = document.getElementsByClassName("R");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

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

<!-- jQuery -->
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{URL::asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- Select2 -->
<script src="{URL::asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- InputMask -->
<script src="{{URL::asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{URL::asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!---Wizerd--->
<script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript -->
<script src="https://unpkg.com/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>






<script>

     $('#smartwizard').smartWizard({
                     theme: 'dots',
                     transitionEffect: 'fade',
                     transitionSpeed: '400',
                     lang: { next: 'التالي', previous: 'السابق'},
                     toolbarSettings: {
                         toolbarButtonPosition: 'left',
                         showNextButton: true,
                         showPreviousButton: true
                     }
     
      })

      
</script>

<script>$("#creatSuccessMessage").show().delay(2000).fadeOut();</script>

 @endsection