@extends('layout.master')

@section('title')
  الرئيسية
  @endsection

  @section('css')

  @endsection

  @section('bar1')
  الرئيسية 
  @endsection

  @section('bar2')
  لوحة التحكم
  @endsection



  @section('content')
  @if(session()->has('success'))
       <div id="creatSuccessMessage" class="container alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <h5><i class="icon fas fa-check"></i>{{ session()->get('success') }}</h5>
       </div>
      @endif
  @endsection


  

@section('scripts')

@endsection