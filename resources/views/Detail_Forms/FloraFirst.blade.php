<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIMS</title>
 
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><br>   <table class="table">
        <tr>
            <td>
     <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-home" aria-hidden="true"></i>Back</button></a>

      <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn" onclick="return confirm(&quot;Close the form..? unsaved data will be lost&quot;)"><i class="fa fa-close"></i>Close</button></a>
     </td>
     <td>
      @if($ray==1)
        <h3><b>  Poison : Aththana (Datura stramonium)  </b></h3><br>
         @elseif($ray==2)
         <h2 style="text-align: center"><b> Poison : Divikaduru (Tabernaemantana dichotoma)  </b></h2><br>
         @elseif($ray==3)
         <h2 style="text-align: center"><b> Poison : DiyaKaduru (Cerebra manghas) </b></h2><br>
         @elseif($ray==4)
        <h2 style="text-align: center"><b>  Poison : Endaru (Ricinus communis)  </b></h2><br>
         @elseif($ray==5)
        <h2 style="text-align: center"><b>   Poison : GodaKaduru (Stvychnos nuxvomica )  </b></h2><br>
         @elseif($ray==6)
        <h2 style="text-align: center"><b>   Poison : Habarala (Alocasia macromhiza)  </b></h2><br>
         @elseif($ray==7)
         <h2 style="text-align: center"><b>  Poison : Hondala(Adenia Hondola)  </b></h2><br>
         @elseif($ray==8)
         <h2 style="text-align: center"><b> Poison : Kaneru (Nerium oleandor/Thevetia peruviana)  </b></h2><br>
         @elseif($ray==9)
        <h2 style="text-align: center"><b> Poison : Kepunkiriya (Euphorbia hirita) </b></h2><br>
         @elseif($ray==10)
         <h2 style="text-align: center"><b>  Poison : Niyagala (Gloriosa superba) </b></h2><br> 
         @elseif($ray==11)
          <h2 style="text-align: center"><b> Poison : Olinda (Abrus precatorius)  </b></h2><br>
         @elseif($ray==12)
         <h2 style="text-align: center"><b>  Poison : Unknown plant poisoning  </b></h2><br>
         @endif 
         </td>
        
    <td>
     <h3 style="text-align: center"><b> Category : Natural Toxins - Flora   </b></h3><br>
     </td>
     </tr></table>
<div class="form">
  
 
         <form action="/submit_flora_first_page" method="post">	
            @csrf
            @if($ray==1)
                 <input type="hidden" name="id" value="1" >
            @elseif($ray==2)     
                  <input type="hidden" name="id" value="2" >
            @elseif($ray==3)     
                  <input type="hidden" name="id" value="3" >
            @elseif($ray==4)     
                  <input type="hidden" name="id" value="4" >
            @elseif($ray==5)     
                  <input type="hidden" name="id" value="5" >
            @elseif($ray==6)     
                  <input type="hidden" name="id" value="6" >
            @elseif($ray==7)     
                  <input type="hidden" name="id" value="7" >
            @elseif($ray==8)     
                  <input type="hidden" name="id" value="8" >
            @elseif($ray==9)     
                  <input type="hidden" name="id" value="9" >
            @elseif($ray==10)     
                  <input type="hidden" name="id" value="10" > 
            @elseif($ray==11)     
                  <input type="hidden" name="id" value="11" >
            @elseif($ray==12)     
                  <input type="hidden" name="id" value="12" >
            @endif      
                  
            <h4>Personal Detail</h4>  
 <table class="table">
        <tr>
            <td>
             <label> 01) First Name :</label>
                        <input type="text" name="Fname" required="true"  >       
                 <br>
                 <label> 03) NIC Number :</label>
                        <input type="text" name="nic" >  
                 <br>
                 <label> 05) Birth Date :</label>
                         <input type = "date" name = "Bdate" id="datePickerId"  >
                 <br>
                
              <label> 04) Address :</label>
                        <input type="text" name="address" >  
                 <br> 
                 
                
            </td>
            
            <td>
            <label> 02) Second Name :</label>
                        <input type="text" name="Sname" >          
                <br>
                <label> 04) PHN Number :</label>
                        <input type="text" name="PHN" >  
                <br>
                 <label> 06)  Contact Number :</label>
                         <input type = "text" name = "Cno"  >
                 <br> 
                
                 <label>08) Gender  :<br>
                    <span class = "select">
               <select name = "gender" class="form-control">
           <option value = " "> ..Please choose one option.. </option>
            <option value = "Male">     Male    </option>
            <option value = "Female">   Female </option>
         </select>
                <br>        
                
            </td>
        </tr>
     </table>

             <button >next</button>
      
         </form>
 </div>
          <!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>             
            
</body>
</html>