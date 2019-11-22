
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Patient &mdash; record</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="/record_details/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/record_details/css/bootstrap.min.css">
    <link rel="stylesheet" href="/record_details/css/magnific-popup.css">
    <link rel="stylesheet" href="/record_details/css/jquery-ui.css">
    <link rel="stylesheet" href="/record_details/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/record_details/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/record_details/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/record_details/css/animate.css">


    <link rel="stylesheet" href="/record_details/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/record_details/css/fl-bigmug-line.css">

    <link rel="stylesheet" href="/record_details/css/aos.css">

    <link rel="stylesheet" href="/record_details/css/style.css">

  <script src="/record_details/js/jquery-3.3.1.min.js"></script>
  <script src="/record_details/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/record_details/js/jquery-ui.js"></script>
  <script src="/record_details/js/popper.min.js"></script>
  <script src="/record_details/js/bootstrap.min.js"></script>
  <script src="/record_details/js/owl.carousel.min.js"></script>
  <script src="/record_details/js/jquery.stellar.min.js"></script>
  <script src="/record_details/js/jquery.countdown.min.js"></script>
  <script src="/record_details/js/jquery.magnific-popup.min.js"></script>
  <script src="/record_details/js/bootstrap-datepicker.min.js"></script>
  <script src="/record_details/js/aos.js"></script>


  <script src="/record_details/js/main.js"></script>

  </head>
  <body>


    <div class="site-section bg-light">
      <div class="container">
          <br>
                @foreach($items as $item)

        <div class="row" data-aos="fade">
         <div class="col-md-12">

           <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">{{$item -> fname}} {{$item->lname}}</h2>
                 <div class="badge-wrap">
                 <span class="bg-success text-white badge py-2 px-4">NIC :{{$item->nic}} </span>
                  <span class="bg-info text-white badge py-2 px-4">PHN :{{$item->phn}}</span>
                  <span class="bg-success text-white badge py-2 px-4"> TP :{{$item->contact}}</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><p>address.</p></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>{{$item -> address}}</span></div>
               </div>
              </div>

              <div class="ml-auto">

                   <form action="/submit_flora_first_page" method="post">
                        @csrf
                        <input type="hidden" name="Fname" value="{{$item->fname}}">
                        <input type="hidden" name="Sname" value="{{$item->lname}}">
                        <input type="hidden" name="nic" value="{{$item->nic}}">
                        <input type="hidden" name="Bdate" value="{{$item->bdate}}">
                        <input type="hidden" name="address" value="{{$item->address}}">
                        <input type="hidden" name="PHN" value="{{$item->phn}}">
                        <input type="hidden" name="Cno" value="{{$item->contact}}">
                        <input type="hidden" name="gender" value="{{$item->gender}}">
                        <input type="hidden" name="id" value="{{$ray}}">
 <button type="submit" class="btn btn-warning py-2"> select </button>
 </form>
         </div>
        </div>

            @endforeach
</div></div>





  </body>


