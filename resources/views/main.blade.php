<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content {
            margin-top: 100px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
    @yield('content')
    </div>


    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
<script>
    $(document).ready(function ()
     {
      $(document).on("click",".delete",function(e)
      {
         e.preventDefault();
        var itemId = $(this).val();
        url ="{{route('delete',':itemId')}}"
        url = url.replace(':itemId',itemId);
        alert('Are You Sure You To Delete This Row');
        $.ajax({
            type:'post',
            url : url,
            data:{
                '_token':"{{csrf_token()}}",
                'itemId':itemId
            },
            success: function(){
              $('.item'+itemId).remove();
            }
        });



        // $.post("{{ URL::to('delete') }}",{
        //     '_token':"{{csrf_token()}}",
        //         'itemId':itemId},
        //          function(){
        //             $('.item'+itemId).remove();
                    
        //         });
       
      });
    });
</script>

</body>

</html>
