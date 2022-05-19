<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
    <title>Loker</title>
  </head>
  <body>
    
        <div class="row justify-content-center">
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone Number</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                     
                </tbody>
            </table>
            </div>
        </div>
    

    <script src="{{ asset('template/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $(document).ready( function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            tampil_data_employee();   
          
            function tampil_data_employee(){
                $.ajax({
                    type  : 'GET',
                    url: "{{ route('employee.index') }}",
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].name+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td>'+data[i].address+'</td>'+
                                '<td>'+data[i].phone_number+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
        });
    </script>
  </body>
</html>