<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PIMS</title>

    <link href="{{ asset('css/index1.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-home" aria-hidden="true"></i>Back</button></a>

    <div class="form">
        <h2 style="text-align: center">  New Patient Detail </h2>
             <label><b> Category : Natural Toxins -Flora  </b></label><br>
             @if($ray==1)
             <label><b> Poison : Aththana (Datura stramonium) </b></label><br><br>
             @elseif($ray==2)
             <label><b> Poison : Divikaduru (Tabernaemantana dichotoma) </b></label><br><br>
             @elseif($ray==3)
             <label><b> Poison : DiyaKaduru (Cerebra manghas) </b></label><br><br>
             @elseif($ray==4)
             <label><b> Poison : Endaru (Ricinus communis) </b></label><br><br>
             @elseif($ray==5)
             <label><b> Poison : GodaKaduru (Stvychnos nuxvomica ) </b></label><br><br>
             @elseif($ray==6)
             <label><b> Poison : Habarala (Alocasia macromhiza) </b></label><br><br>
             @elseif($ray==7)
             <label><b> Poison : Hondala(Adenia Hondola) </b></label><br><br>
             @elseif($ray==8)
             <label><b> Poison : Kaneru (Nerium oleandor/Thevetia peruviana) </b></label><br><br>
             @elseif($ray==9)
             <label><b> Poison : Kepunkiriya (Euphorbia hirita) </b></label><br><br>
             @elseif($ray==10)
             <label><b> Poison : Niyagala (Gloriosa superba) </b></label><br><br>
             @elseif($ray==11)
             <label><b> Poison : Olinda (Abrus precatorius) </b></label><br><br>
             @elseif($ray==12)
             <label><b> Poison : Unknown plant poisoning </b></label><br><br>
             @endif

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

                    <label><b>PHN Number :</b></label>
                    <input type="text" name="PHN" required="true" required pattern="[0-9]{11}" >
                    <button >next</button>
             </form>

</body>
</html>
