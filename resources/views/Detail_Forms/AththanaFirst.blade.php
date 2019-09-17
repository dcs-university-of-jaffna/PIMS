<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
 
    <link href="css/index1.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-home" aria-hidden="true"></i>Back</button></a>

<div class="form">
	<h2 style="text-align: center">  New Patient [Poison-Aththana]</h2>
        
            <form action="/submitAththana1" method="post">	
            @csrf
                <label><b>PHN Number :</b></label>
                 <input type="text" name="PHN" required="true" required pattern="[0-9]{11}" >       
                    <button >next</button>
            </form>
 
                          
            
</body>
</html>