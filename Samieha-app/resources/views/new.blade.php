@extends('layout.master')

@section('title')
  
  @endsection

  @section('css')

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
   
  @endsection

  @section('scripts')

 @endsection




 <!DOCTYPE html>
<html>
<head>
    <title>Dependent dropdown example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="m-5 w-50">
        <h1 class="lead">Dependent dropdown example</h1>
        <div class="mb-3">
            <select class="form-select form-select-lg mb-3" id="category">
                <option selected disabled>اختر التصنيف الرئيسي</option>
                @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select form-select-lg mb-3" id="subcategory"></select>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#category').on('change', function () {
                var category_id = this.value;
                $('#subcategory').html('');
                $.ajax({
                    url: '{{ route('getSubcategory') }}?category_id='+category_id,
                    type: 'get',
                    success: function (res) {
                        $('#subcategory').html('<option value="">اختر التصنيف الفرعي</option>');
                        $.each(res, function (key, value) {
                            $('#subcategory').append('<option value="' + value
                                .subcategory + '">' + value.subcategory + '</option>');
                        });

                      }
                });
            });
        });
    </script>
</body>
</html>