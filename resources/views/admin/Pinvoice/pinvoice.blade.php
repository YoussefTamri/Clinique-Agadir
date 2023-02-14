<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Invoice</title>

	<!-- Bootstrap cdn 3.3.7 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom font montseraat -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

	<!-- Custom style invoice1.css -->
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('invoice/invoice.css')}}"> --}}
    <style>
        .back{}
.invoice-wrapper{
	margin: 20px auto;
	max-width: 700px;
	box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
.invoice-top{
	background-color: #fafafa;
	padding: 40px 60px;
}
/*
Invoice-top-left refers to the client name & address, service provided
*/
.invoice-top-left{
	margin-top: 60px;
}
.invoice-top-left h2 , .invoice-top-left h6{
	line-height: 1.5;
	font-family: 'Montserrat', sans-serif;
}
.invoice-top-left h4{
	margin-top: 30px;
	font-family: 'Montserrat', sans-serif;
}
.invoice-top-left h5{
	line-height: 1.4;
	font-family: 'Montserrat', sans-serif;
	font-weight: 400;
}
.client-company-name{
	font-size: 20px;
	font-weight: 600;
	margin-bottom: 0;
}
.client-address{
	font-size: 14px;
	margin-top: 5px;
	color: rgba(0,0,0,0.75);
}

/*
Invoice-top-right refers to the our name & address, logo and date
*/
.invoice-top-right h2 , .invoice-top-right h6{
	text-align: right;
	line-height: 1.5;
	font-family: 'Montserrat', sans-serif;
}
.invoice-top-right h5{
	line-height: 1.4;
    font-family: 'Montserrat', sans-serif;
    font-weight: 400;
    text-align: right;
    margin-top: 0;
}
.our-company-name{
	font-size: 16px;
    font-weight: 600;
    margin-bottom: 0;
}
.our-address{
	font-size: 13px;
	margin-top: 0;
	color: rgba(0,0,0,0.75);
}
.logo-wrapper{ overflow: auto; }

/*
Invoice-bottom refers to the bottom part of invoice template
*/
.invoice-bottom{
	background-color: #ffffff;
	padding: 40px 60px;
	position: relative;
}
.title{
	font-size: 30px;
	font-family: 'Montserrat', sans-serif;
	font-weight: 600;
	margin-bottom: 30px;
}
/*
Invoice-bottom-left
*/
.invoice-bottom-left h5, .invoice-bottom-left h4{
	font-family: 'Montserrat', sans-serif;
}
.invoice-bottom-left h4{
	font-weight: 400;
}
.terms{
	font-family: 'Montserrat', sans-serif;
	font-size: 14px;
	margin-top: 40px;
}
.divider{
	margin-top: 50px;
    margin-bottom: 5px;
}
/*
bottom-bar is colored bar located at bottom of invoice-card
*/
.bottom-bar{
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	height: 26px;
	background-color: #323149;
}
        </style>


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<section class="back">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="invoice-wrapper">
						<div class="invoice-top">
							<div class="row">
								<div class="col-sm-6">
									<div class="invoice-top-left">
                                        <h2 class="our-company-name">Clinique Agadir</h2>
										<h6 class="our-address">N 122 Hay Jadid, <br> Agadir <br>Morocco</h6>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="invoice-top-right">

										{{-- <div class="logo-wrapper">
											<img src="./storage/invoice/Clinique_Agadir.png" class="img-responsive pull-right logo" />
										</div> --}}
										<h5>{{$Invoice->date}}</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="invoice-bottom">
							<div class="row">
								<div class="col-xs-12">
									<h2 class="title">Invoice</h2>
								</div>
								<div class="clearfix"></div>

								<div class="col-sm-3 col-md-3">
									<div class="invoice-bottom-left">
										<h5>Invoice No.</h5>
										<h4>{{$Invoice->id}}</h4>
									</div>
								</div>
								<div class="col-md-offset-1 col-md-8 col-sm-9">
									<div class="invoice-bottom-right">
										<table class="table">
											<thead>
												<tr>

                                                    <th>Doctor</th>
                                                    <th>Operation</th>

													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
                                                    <td>{{$Invoice->Doctors->getTranslation('Name', 'en') }}</td>
                                                    <td>{{$Invoice->operations->getTranslation('name', 'en') }}</td>


													<td>{{$Invoice->price}} DH</td>
												</tr>

												<tr style="height: 40px;"></tr>
											</tbody>
											<thead>
												<tr>
													<th>Total</th>
													<th></th>
													<th>{{$Invoice->price}}DH</th>
												</tr>
											</thead>
										</table>
										<h4 class="terms">Status & Patient</h4>
										<ul>
											<li>{{$Invoice->payment->getTranslation('Name', 'en') }}.</li>
											<li>Mr .{{$Invoice->patients->getTranslation('name', 'en') }}.</li>
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-xs-12">
									<hr class="divider">
								</div>
								<div class="col-sm-4">
									<h6 class="text-left">CliniqueAgadir.com</h6>
								</div>
								<div class="col-sm-4">
									<h6 class="text-center">contact@CAgadir.com</h6>
								</div>
								<div class="col-sm-4">
									<h6 class="text-right">+212 636614216</h6>
								</div>
							</div>
							<div class="bottom-bar"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- jquery slim version 3.2.1 minified -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
