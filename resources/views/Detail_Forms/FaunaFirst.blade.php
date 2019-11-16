<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
 
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-home" aria-hidden="true"></i>Back</button></a>

<div class="form">
    <h2 style="text-align: center">  New Patient Detail </h2>
         <label><b> Category : Natural Toxins -Fauna  </b></label><br>
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
        
         <form action="/submit_fauna_first_page" method="post">	
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
                  
           <h4>Personal Detail</h4>
           <label_A>   
            <label> 01) First Name : </label>
                        <input type="text" name="Fname" required="true" >       
                 <br><br><br>
                 <label> 03) NIC Number : </label>
                        <input type="text" name="nic"  >  
                 <br><br><br>
                 <label> 05) Birth Date : </label>
                         <input type = "date" name = "Bdate" id="datePickerId"  >
                 <br><br><br>
                 
               
                          <label> 07) Address: </label><br>
                <textarea rows = "3" cols = "50" placeholder="Enter address here" name = "address"></textarea>
      <br>
      <button >next</button>
               </label_A>
            
                 <label_B>
                    <label> 02) Second Name : </label>
                        <input type="text" name="Sname"  >          
                <br><br><br>
                <label> 04) PHN Number : </label>
                        <input type="text" name="PHN">  
                <br><br><br>
                 <label> 06) Contact Number : </label>
                         <input type = "text" name = "Cno"   >
                 <br> <br><br>
                
                <label> 08) Gender : </label>
                         <span class = "select">
                        <select name = "gender">
                            <option value = " "> ..Please choose one option.. </option>
                            <option value = "Male"> Male </option>
                            <option value = "Female"> Female  </option>
                            </select>
               <br><br> <br>
                  </label_B> 
                 
       
                    
                    <br>
         </form>
 </div>
 
                          
            
</body>
</html>