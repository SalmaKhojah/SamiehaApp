@extends('layout-slp.master')

@section('title')
  عرض الجلسة العلاجية
@endsection

@section('css')

@endsection

@section('bar1')
  قائمة الجلسات العلاجية
@endsection

@section('bar2')
عرض الجلسة العلاجية
@endsection



@section('content')

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
                      <th>الحرف الأول</th>
                      <th>الإشارة الدلالية للكلمة</th>
                      <th>إتمام الجملة</th>
                      <th>صوت الحرف الأول</th>
                      <th>صوت المقطع الأول</th>
                      <th>الكلمة نطقا</th>
                    </tr>
                  </thead>
                  <tbody>
               @foreach($session_materials as $material)
                 

                    <tr data-widget="expandable-table" aria-expanded="false">
                    <td>{{$material->word_id}}</td>
                    <td>{{$material->included_cues}}</td>
                    @foreach($material->words as $word)
                      <td>{{$word->word}}</td>
                      <td>{{$word->image}}</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td> 
                      <td></td>
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