<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PIMS</title>

    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</head>
<body><br>
<table class="table">
    <tr>
        <td>
            <a href="{{ url('/home') }}" title="Go back to main menu">
                <button class="btn btn-warning "><i class="fa fa-home" aria-hidden="true"></i>Back</button>
            </a>

            <a href="{{ url('/home') }}" title="Go back to main menu">
                <button class="btn" onclick="return confirm(&quot;Close the form..? unsaved data will be lost&quot;)"><i
                        class="fa fa-close"></i>Close
                </button>
            </a>
        </td>
        <td>
            @if($ray==1)
                <h3><b> Poison : Aththana (Datura stramonium) </b></h3><br>
            @elseif($ray==2)
                <h2 style="text-align: center"><b> Poison : Divikaduru (Tabernaemantana dichotoma) </b></h2><br>
            @elseif($ray==3)
                <h2 style="text-align: center"><b> Poison : DiyaKaduru (Cerebra manghas) </b></h2><br>
            @elseif($ray==4)
                <h2 style="text-align: center"><b> Poison : Endaru (Ricinus communis) </b></h2><br>
            @elseif($ray==5)
                <h2 style="text-align: center"><b> Poison : GodaKaduru (Stvychnos nuxvomica ) </b></h2><br>
            @elseif($ray==6)
                <h2 style="text-align: center"><b> Poison : Habarala (Alocasia macromhiza) </b></h2><br>
            @elseif($ray==7)
                <h2 style="text-align: center"><b> Poison : Hondala(Adenia Hondola) </b></h2><br>
            @elseif($ray==8)
                <h2 style="text-align: center"><b> Poison : Kaneru (Nerium oleandor/Thevetia peruviana) </b></h2><br>
            @elseif($ray==9)
                <h2 style="text-align: center"><b> Poison : Kepunkiriya (Euphorbia hirita) </b></h2><br>
            @elseif($ray==10)
                <h2 style="text-align: center"><b> Poison : Niyagala (Gloriosa superba) </b></h2><br>
            @elseif($ray==11)
                <h2 style="text-align: center"><b> Poison : Olinda (Abrus precatorius) </b></h2><br>
            @elseif($ray==12)
                <h2 style="text-align: center"><b> Poison : Unknown plant poisoning </b></h2><br>
            @endif
        </td>

        <td>
            <h3 style="text-align: center"><b> Category : Natural Toxins - Flora </b></h3><br>
        </td>
    </tr>
</table>
<div class="form">

    <h3 style="text-align: center"> Personal Detail</h3>

    <table class="table pb-4">
        <tr>
            <td><h3>New Patient Personal Detail</h3></td>
            <td>
                <div class="form-group">
                    <label for="search" >Enter Name, NIC, Contact or PHN</label>
                    <input type="search" name="search" id="search_box" class="form-control" aria-label="search" placeholder="Search Patient" />
                </div>
            </td>
        </tr>
    </table>

    <form action="/submit_flora_first_page" method="post" id="patient_form">
        @csrf
        @if($ray==1)
            <input type="hidden" name="id" value="1">
        @elseif($ray==2)
            <input type="hidden" name="id" value="2">
        @elseif($ray==3)
            <input type="hidden" name="id" value="3">
        @elseif($ray==4)
            <input type="hidden" name="id" value="4">
        @elseif($ray==5)
            <input type="hidden" name="id" value="5">
        @elseif($ray==6)
            <input type="hidden" name="id" value="6">
        @elseif($ray==7)
            <input type="hidden" name="id" value="7">
        @elseif($ray==8)
            <input type="hidden" name="id" value="8">
        @elseif($ray==9)
            <input type="hidden" name="id" value="9">
        @elseif($ray==10)
            <input type="hidden" name="id" value="10">
        @elseif($ray==11)
            <input type="hidden" name="id" value="11">
        @elseif($ray==12)
            <input type="hidden" name="id" value="12">
        @endif

        <input type="hidden" name="pid" value="" id="pid">

        <div id="detail_form"></div>

        <button>next</button>

    </form>
</div>


<script>

    displayTable();

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
                    $('#detail_form').html(data.table_data);
                }
            })
        }

        $(document).on('keyup', '#search_box', function(){
            let query = $(this).val();
            if(query == ''){
                displayTable();
            }
            else {
                fetch_customer_data(query);
            }
        });
    });

    function displayTable() {
        let form_table = '<table class="table">' +
            '            <tr>' +
            '                <td>' +
            '                    <label> 01) First Name :</label>' +
            '                    <input type="text" name="fname" required="true">' +
            '                    <br>' +
            '                    <label> 03) NIC Number :</label>' +
            '                    <input type="text" name="nic">' +
            '                    <br>' +
            '                    <label> 05) Birth Date :</label>' +
            '                    <input type="date" name="bdate" id="datePickerId">' +
            '                    <br>' +
            '' +
            '                    <label> 04) Address :</label>' +
            '                    <input type="text" name="address">' +
            '                    <br>' +
            '                </td>' +
            '' +
            '                <td>' +
            '                    <label> 02) Second Name :</label>' +
            '                    <input type="text" name="lname">' +
            '                    <br>' +
            '                    <label> 04) PHN Number :</label>' +
            '                    <input type="text" name="phn">' +
            '                    <br>' +
            '                    <label> 06) Contact Number :</label>' +
            '                    <input type="text" name="contact">' +
            '                    <br>' +
            '' +
            '                    <label>08) Gender :<br>' +
            '                        <span class="select">' +
            '                           <select name="gender" class="form-control">' +
            '                               <option value=" "> ..Please choose one option.. </option>' +
            '                               <option value="Male">     Male    </option>' +
            '                               <option value="Female">   Female </option>' +
            '                           </select>' +
            '                        </span>' +
            '                    </label>' +
            '                    <br>' +
            '' +
            '                </td>' +
            '            </tr>' +
            '        </table> ';

        document.getElementById("detail_form").innerHTML = form_table;
    }

    function patient_selected($patient_id)
    {
        document.getElementById("pid").value = $patient_id;
        document.getElementById("patient_form").submit();
    }

</script>

<!-- partial -->


</body>
</html>
