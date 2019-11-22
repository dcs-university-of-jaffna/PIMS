<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Search Patient</title>

</head>

<body>
    <br />
    <div class="container box">
        <h3 style="text-align:center;"> Search Patient </h3><br />
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    <label for="search" >Enter Name, NIC, Contact or PHN</label>
                    <input type="text" name="search" id="search" class="form-control"  />
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>PHN</th>
                            <th>Fist name</th>
                            <th>Last name</th>
                            <th>NIC</th>
                            <th>Gender</th>
                            <th>DoB</th>
                            <th>Contact</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){

            function fetch_customer_data(query = '')
            {
                $.ajax({
                    url:"{{ route('patient_search.action') }}",
                    method:'GET',
                    data:{query:query},
                    dataType:'json',
                    success:function(data)
                    {
                        $('tbody').html(data.table_data);
                    }
                })
            }

            $(document).on('keyup', '#search', function(){
                var query = $(this).val();
                if(query == ''){
                    $('tbody').html('');
                }
                else {
                    fetch_customer_data(query);
                }
            });
        });

        function patient_selected()
        {
            location.href = "/home";
        }
    </script>

</body>

</html>
