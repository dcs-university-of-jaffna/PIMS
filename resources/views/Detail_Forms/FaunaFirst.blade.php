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
         @if($ray==13)
         <label><b> Poison : Bee, Wasp, Hornet Stings</b></label><br><br>
         @elseif($ray==14)
         <label><b> Poison : Black Widow Spider  </b></label><br><br>
         @elseif($ray==21)
         <label><b> Poison : Blister Beetle ingestion </b></label><br><br>
         @elseif($ray==15)
         <label><b> Poison : Centipede Bite </b></label><br><br>
         @elseif($ray==16)
         <label><b> Poison : Jelly Fish  </b></label><br><br>
         @elseif($ray==17)
         <label><b> Poison : Scorpion Bite</b></label><br><br>
         @elseif($ray==18)
         <label><b> Poison : Snake Bite </b></label><br><br>
         @elseif($ray==19)
         <label><b> Poison : Turtle Flesh Poisoning  </b></label><br><br>
         @elseif($ray==20)
         <label><b> Poison : Unknown Bite</b></label><br><br>
         @endif 
        
        </td>

        <td>
            <h3 style="text-align: center"><b> Category : Natural Toxins - Fauna  </b></h3><br>
        </td>
    </tr>
</table>
<div class="form">


    <table class="table pb-4">
        <tr>
            <td><h3>Patient Personal Detail</h3></td>
            <td>
                <div class="form-group">
                    <label for="search" >Enter Name, NIC, Contact or PHN</label>
                    <input type="search" name="search" id="search_box" class="form-control" aria-label="search" placeholder="Search Patient" />
                </div>
            </td>
        </tr>
    </table>

    <form action="/submit_fauna_first_page" method="post" id="patient_form">
        @csrf
          @if($ray==13)
                 <input type="hidden" name="id" value="13" >
            @elseif($ray==14)     
                  <input type="hidden" name="id" value="14" >
            @elseif($ray==21)     
                  <input type="hidden" name="id" value="21" >
            @elseif($ray==15)     
                  <input type="hidden" name="id" value="15" >
            @elseif($ray==16)     
                  <input type="hidden" name="id" value="16" >
            @elseif($ray==17)     
                  <input type="hidden" name="id" value="17" >
            @elseif($ray==18)     
                  <input type="hidden" name="id" value="18" >
            @elseif($ray==19)     
                  <input type="hidden" name="id" value="19" >
            @elseif($ray==20)     
                  <input type="hidden" name="id" value="20" >
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
            '                    <label> 01) PHN Number :</label>' +
            '                    <input type="text" name="phn" required pattern="[0-9]{11}">' +
            '                    <br>' +
            '                    <label> 02) First Name :</label>' +
            '                    <input type="text" name="fname" required pattern="[A-Za-z]+">' +
            '                    <br>' +
            '                    <label> 03) Second Name :</label>' +
            '                    <input type="text" name="lname"  pattern="[A-Za-z]+">' +
            '                    <br>' +
            '' +
            '                    <label> 04) Address :</label>' +
            '                    <input type="text" name="address">' +
            '                    <br>' +
            '                </td>' +
            '' +
            '                <td>' +
            
            '                    <label> 05) NIC Number :</label>' +
            '                    <input type="text" name="nic">' +
            '                    <br>' +
            '                    <label> 06) Birth Date :</label>' +
            '                    <input type="date" name="bdate" max=<?php echo date('Y-m-d');?>>' +
            '                    <br>' +
                       '                    <label> 07) Contact Number :</label>' +
            '                    <input type="text" name="contact" pattern="[0-9]{10}">' +
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
