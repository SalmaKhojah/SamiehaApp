@extends('layout.master')

@section('title')
  
  @endsection

  @section('css')
  <style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
  @endsection

  @section('bar1')
   
  @endsection

  @section('link1')
   
   @endsection
  
  @section('bar2')
   
  @endsection

  @section('link2')
   
  @endsection


  @section('content')
   




<p>الأسماء</p>
<button type="button" class="r">Open Section 1</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
  @endsection

  @section('scripts')
  <script>
var coll = document.getElementsByClassName("r");
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
 @endsection





   <!-- <a href="{{route('slpPaitentTable.show' , $item->users_id)}}" class="btn btn-app"><i class="fa fa-search"></i>عرض</a>
                    <a href="{{route('slpPaitentTable.edit' , $item->users_id)}}" class="btn btn-app"><i class="fas fa-edit"></i>تعديل</a>
                    <a data-toggle="modal" data-target="#exampleModalCenter{{$item->users_id}}" class="btn btn-app"><i class="fa fa-trash"></i>حذف</a>

                    <form action="{{ route('slpPaitentTable.destroy', $item->users_id) }}" method="POST">
                      
                      
                    <div class="modal fade" id="exampleModalCenter{{$item->users_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">حذف بيانات المريض {{$item->first_name}} {{$item->last_name}}</h5>
                          </div>
                          <div class="modal-body">
                          هل أنت متأكد أنك تريد حذف المريض؟
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                            @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{$item->users_id}}">حذف</button>                          </div>
                        </div>
                      </div>
                    </div>

                    </form> -->