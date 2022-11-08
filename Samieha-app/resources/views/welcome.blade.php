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
  @endsection



  @section('content')
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row"> 
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$NoOfslps}}</h3>
                <p>عدد الاختصاصيين</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">للمزيد من المعلومات <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
           <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$NoOfPatients}}</h3>

                <p>عدد المرضى</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">للمزيد من المعلومات <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$NoOfsessions}}</h3>

                <p>عدد الجلسات</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
   
      </div><!-- /.container-fluid -->
      
    </section>
       <!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Pie Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                <center><canvas id="myChart" style="width:100%;max-width:1000px"></canvas></center>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- /.content -->
  <!-- End Main content -->
  
 <center><canvas id="myChart" style="width:100%;max-width:1000px"></canvas></center>

<script>
var xValues = ["عدد الاختصاصيين", "عدد المرضى", "عدد الجلسات"];
var yValues = [{{$NoOfslps}}, {{$NoOfPatients}}, {{$NoOfsessions}}];
var barColors = [
  "#379237",
  "#EEB76B",
  "#E2703A"
  
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: ""
    }
  }
});
</script>

  @endsection


  

@section('scripts')

@endsection