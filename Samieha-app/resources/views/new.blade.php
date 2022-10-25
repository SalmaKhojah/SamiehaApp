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





