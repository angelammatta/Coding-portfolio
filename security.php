<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Security News</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!--canvas js libraries-->
    <script src="js/mybarchart.js"></script>
    <script src="js/canvasjs.min.js"></script>


    <style>
     .table1 table {
       font-family: arial, sans-serif;
       border-collapse: collapse;
       width: 100%;
       }

     .table1 td, .table1 th {
       border: 1px solid #dddddd;
       text-align: left;
       padding: 8px;
      }

       .table1 th {
          background-color: #0143ad;
         color: white;
         }
       .table1 tr:nth-child(even) {
           background-color: #c3d7f7;
           }


</style>

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
    <?php include('header.php');?>

	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">

		<h1>Security News</h1>

		</div>

	</div>
	
    <div id="overviews" class="section lb">
        <div class="container">
      

     <p> <img src = "images/security.jpg" alt = "image of lock representing Cybersecurity"> </p>


      <h2>Major Security Breaches</h2>

      <br>

      <table class ="table1">

      
      <tr>
     <th>Breach</th>
     <th>Date</th>
     <th>Impacted Users</th>
      </tr>
    

      <tr>
     <td>Microsoft</td>
     <td>January 2020</td>
     <td>250,000,000</td>

      </tr>

      
      <tr>
     <td>Facebook</td>
     <td>April 2021</td>
     <td>533,000,000</td>

      </tr>

      
      <tr>
     <td>Marriot Hotels</td>
     <td>November 2018</td>
     <td>383,000,000</td>

      </tr>

      
      <tr>
     <td>Twitter</td>
     <td>May 2018</td>
     <td>330,000,000</td>

      </tr>

      
      <tr>
     <td>Yahoo</td>
     <td>Decmber 2016</td>
     <td>1,000,000,000</td>

      </tr>

      </table>

      <br>

      <div id="chartContainer" style="height: 450px; width: 95%; "></div>

     <p>Source: <a href = "https://informationisbeautiful.net/visualizations/worlds-biggest-data-breaches-hacks/"> https://informationisbeautiful.net/visualizations/worlds-biggest-data-breaches-hacks/</a> </p> 

          <h2>Phishing</h2>      

          <p>Phishing is the attempt to obtain sensitive information such as usernames, passwords, and credit
           card details (and sometimes, indirectly, money), often for malicious reasons, by masquerading as a
            trustworthy entity in an electronic communication. (Source:  <a href = "https://en.wikipedia.org/wiki/Phishing">Wikipedia</a> )</p> 

            <h2>How to identify phishing:</h2>  
            
            <ul>
            <li>Email or web site indicates that urgent action required</li>
            <li>Email has generic greeting</li>
            <li>A hyperlink that is just text such as Click Here where you cannot see the actual destination web address</li>
            <li>Contains spelling mistakes</li>
            <li>Seeks personal information</li>
           </ul>  



           <h2>Five common uses of encryption:</h2>  
            
            <ol>
            <li>Web browsing</li>
            <li>Passwords</li>
            <li>Hard drives</li>
            <li>Wifi traffic</li>
            <li>USB drive</li>
           </ol>  

           <h2> Security tips:</h2>  
            
            <ol>
            <li>Use multi-factor authentication</li>
            <li>Use 10 or more characters for passwords</li>
            <li>Use different password for each web site</li>
           </ol>  
                   
           


        </div><!-- end container -->
    </div><!-- end section -->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Pricing</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">QuickCloud</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>

                <div class="footer-right">
                    <ul class="footer-links-soi">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-github"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul><!-- end links -->
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>