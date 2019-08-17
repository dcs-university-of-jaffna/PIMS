<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
 
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
     <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</button></a>

<div class="form">
	<h2 style="text-align: center">  New Patient [Poison-Aththana]</h2>
        
            <form action="/submitAththana1" method="post">	
            @csrf
                <label><b>PHN Number :</b></label>
                <input type="text" name="PHN" required="true" required pattern="[0-9]{11}" >       
                    <a href="{{ url('/home') }}"><button >next</button></a>
            </form>
 
                          
            
</body>
</html>