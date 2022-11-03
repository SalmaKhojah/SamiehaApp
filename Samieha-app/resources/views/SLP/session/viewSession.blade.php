@extends('layout-slp.master')

@section('title')
  عرض الجلسة العلاجية
@endsection

@section('css')
<style>
        #photo{
          height: 50px;
          width: 50px;
        }
</style>
@endsection

@section('bar1')
  قائمة الجلسات العلاجية
@endsection

@section('bar2')
عرض الجلسة العلاجية
@endsection



@section('content')
                <?php 
                  // use of explode 
                  
                  $string = $session_materials->first()->included_cues; 
                  
                  $str_arr = explode (",", $string); 


                ?>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> عرض محتوى الجلسة العلاجية </h3>
              </div>
                  <!-- ./card-header -->
                  <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>الكلمة</th>
                      <th>الصورة</th>
                      @for($i = 0 ; $i < count($str_arr) ; $i++)
                      @if($str_arr[$i]==1)
                      <th>الإشارة الدلالية للكلمة</th>
                      @endif
                      @if($str_arr[$i]==2)
                      <th>إتمام الجملة</th>
                      @endif
                      @if($str_arr[$i]==3)
                      <th>صوت الحرف الأول</th>
                      @endif
                      @if($str_arr[$i]==4)
                      <th>صوت المقطع الأول</th>
                      @endif
                      @if($str_arr[$i]==5)
                      <th> الحرف الأول كتابة</th>
                      @endif
                      @if($str_arr[$i]==6)
                      <th>الكلمة كتابة</th>
                      @endif
                      @if($str_arr[$i]==7)
                      <th>الكلمة نطقا</th>
                      @endif
                      @endfor
                    </tr>
                  </thead>
                  <tbody>
               @foreach($session_materials as $material)
                    <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{$material->word_id}}</td>
                    @foreach($material->words as $word)
                      <td>{{$word->word}}</td>
                      <td><img id="photo" src="{{asset($word->image)}}"></td>
                      @for($i = 0 ; $i < count($str_arr) ; $i++)
                      @if($str_arr[$i]==1)
                      <td>{{$word->cue1}}</td>
                      @endif
                      @if($str_arr[$i]==2)
                      <td>{{$word->cue2}}</td>
                      @endif
                      @if($str_arr[$i]==3)
                      <td>
                      <audio src ="{{asset($word->cue3)}}" type="audio/mpeg" controls>
                        

                       </audio>
                      </td>
                      @endif
                      @if($str_arr[$i]==4)
                      <td>
                      <audio src ="{{asset($word->cue4)}}" type="audio/mpeg" controls>
                       </audio>
                      </td>
                      @endif
                      @if($str_arr[$i]==5)
                      <td>{{$word->cue5}}</td>
                      @endif
                      @if($str_arr[$i]==6)
                      <td>{{$word->cue6}}</td>
                      @endif
                      @if($str_arr[$i]==7)
                      <td> 
                        <audio controls>
                        <source src ="{{asset($word->cue7)}}" type="audio/mpeg">
                       </audio>
                        </td>
                      @endif
                      @endfor
                     </tr>
                  @endforeach 

                @endforeach           
             
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
  
    @endsection

@section('scripts')

@endsection