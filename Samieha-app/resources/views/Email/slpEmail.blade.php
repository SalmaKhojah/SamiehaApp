<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <!-- /.card -->
         
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{$details['title']}}</h3>
                
              </div>
              
              <!-- /.card-header search -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>رقم التكرار </th>
                    <th>الكلمة </th>
                    <th>الصورة </th>
                    <th>الاجابات </th>
                    <th>التلميح المستخدم</th>
                    <th> استجابة المريض</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($resultp as $item)  
                  <tr>
                  <td>{{$item->trial_id}}</td>
                  <td>{{$item->word}}</td>
                  <td>{{$item->word_id}}</td>
                    <td>{{$item->check_answer}}</td>
                    <td>{{$item->used_cues}}</td>
                    <td>
                    

                      {{$item->patient_record}}
                      
                    </td>
   
                  </tr>
                @endforeach
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
</body>
</html>

