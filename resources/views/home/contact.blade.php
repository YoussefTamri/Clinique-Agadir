<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="Home/images/favicon.png" type="">
      <title>Clinique - Agadir Contact Us</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="Home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="Home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="Home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="Home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->

         @include('home.header')






    <div class="container">

       <div class="row">
          <div class="col-lg-8 offset-lg-2">
             <div class="full">
                <form action="{{ route('contactUs') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   <fieldset>
                      <input type="text" placeholder="Enter your full name" name="name" required />
                      <input type="email" placeholder="Enter your email address" name="email" required />
                      <input type="phone" placeholder="Enter subject" name="phone" required />
                      <textarea name="msg" placeholder="Enter your message" required></textarea>
                      <input type="submit" value="Submit" />
                   </fieldset>
                </form>
             </div>
          </div>
        </div>
    </div>
</section>

<section class="why_section layout_padding">
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif


      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href="http:yousseftamri.ml">yousseftamri</a><br>

            Distributed By <a href="http://yousseftamri.ml/" target="_blank">yousseftamri</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="Home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="Home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="Home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="Home/js/custom.js"></script>
   </body>
</html>










