@extends('layout.master')

@section('title')
عرض الجلسة العلاجية
  @endsection

@section('css')
<style>
        #photo{
          height: 50px;
          width: 50px;
        }
        audio {
  width: 100px;
  height: 25px;

}

audio::-webkit-media-controls-panel {
  -webkit-justify-content: center;
  height: 25px;
  background:#fff;
}

/* Removes the timeline */
audio::-webkit-media-controls-timeline {
  display: none !important;
}
        audio::-webkit-media-controls-timeline, -webkit-media-controls-timeline {
    display: none;
}
         audio::-webkit-media-controls-mute-button {
    display: none !important;
}

audio::-webkit-media-controls-volume-slider {
    display: none !important;
}

audio::-webkit-media-controls-volume-slider {
    display: none !important;
} */

/* Removes mute-button */
audio::-webkit-media-controls-mute-button {
  display: none;
}
/* Removes the time stamp */
audio::-webkit-media-controls-current-time-display {
  display: none;
}
audio::-webkit-media-controls-time-remaining-display {
  display: none;
}

/* audio {
  display: flex;
  flex-direction: row;
  align-items: center;
  width: 100%;
  margin-top: 10px;
} */

</style>
@endsection

@section('bar1')
  قائمة الجلسات العلاجية
@endsection

@section('bar2')
عرض الجلسة العلاجية
@endsection

@section('link2')
   @endsection
  


  @section('link1')
  {{route('Adminsession.index')}}

  @endsection

@section('content')
                <?php 
                  // use of explode 
                  
                  $string = $session_materials->first()->included_cues; 
                  
                  $str_arr = explode (",", $string); 

                  $sNo = 1;
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
          
                 <h3 class="card-title m-2"></h3>
      
            

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
                    <td>{{$sNo++}}</td>
                    @foreach($material->words as $word)
                      <td>{{$word->word}}</td>

                      <td>
                        <img id="photo" @if(Str::substr($word->image,0 , 6) === "public")  src="{{ Storage::url($word->image) }}"  @else src="{{asset($word->image)}}" @endif >
                      </td>
                      @for($i = 0 ; $i < count($str_arr) ; $i++)
                      @if($str_arr[$i]==1)
                      <td>{{$word->cue1}}</td>
                      @endif
                      @if($str_arr[$i]==2)
                      <td>{{$word->cue2}}</td>
                      @endif
                      @if($str_arr[$i]==3)
                      <td>
                      <audio src ="{{asset($word->cue3)}}" type="audio/mpeg" controls  controlsList="nodownload noplaybackrate  ">
                        

                       </audio>
                      </td>
                      @endif
                      @if($str_arr[$i]==4)
                      <td>
                      <audio src ="{{asset($word->cue4)}}" type="audio/mpeg" controls  controlsList="nodownload noplaybackrate ">
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
                        <source src ="{{asset($word->cue7)}}" type="audio/mpeg" controls  controlsList="nodownload noplaybackrate ">
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