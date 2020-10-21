<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Azures BootStrap</title>
    <link rel="stylesheet" type="text/css" href="styles\bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="fonts\css\fontawesome-all.min.css" />
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js" />
    <link rel="apple-touch-icon" sizes="180x180" href="app\icons\icon-192x192.png" />
    <style type="text/css">
    	.form-control {
			    display: block;
			    width: 100%;
			    height: calc(-0.5em + 1.75rem + 2px);
			    padding: .875rem .75rem;
			    font-size: 1rem;
			    font-weight: 400;
			    line-height: 1.5;
			    color: #495057;
			    background-color: #fff;
			    background-clip: padding-box;
			    border: 1px solid #ced4da;
			    border-radius: .25rem;
			    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
			}
			.form-control:focus {
			    color: #495057;
			    background-color: #fff; 
			    border-color: transparent; 
			    outline: 0;
			    box-shadow: none; 
			}
    </style>

  </head>
  <body class="theme-light" data-highlight="blue2">
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    <div id="page">
      <div class="header header-fixed header-auto-show header-logo-app">
        <a href="#" data-back-button="" class="header-title header-subtitle">Back to Pages</a>
        <a href="#" data-back-button="" class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme="" class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme="" class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-highlights" class="header-icon header-icon-3"><i class="fas fa-brush"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
      </div>
      <div id="footer-bar" class="footer-bar-5">
        <a href="index-components.html"><i data-feather="heart" data-feather-line="1" data-feather-size="21" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i><span>Features</span></a>
        <a href="index-media.html"><i data-feather="image" data-feather-line="1" data-feather-size="21" data-feather-color="green1-dark" data-feather-bg="green1-fade-light"></i><span>Media</span></a>
        <a href="index.html"><i data-feather="home" data-feather-line="1" data-feather-size="21" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light"></i><span>Home</span></a>
        <a href="index-pages.html" class="active-nav"><i data-feather="file" data-feather-line="1" data-feather-size="21" data-feather-color="brown1-dark" data-feather-bg="brown1-fade-light"></i><span>Pages</span></a>
        <a href="index-settings.html"><i data-feather="settings" data-feather-line="1" data-feather-size="21" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-light"></i><span>Settings</span></a>
      </div>
      <div class="page-content">
        <div class="page-title page-title-small">
          <h2>
            <a href="#" data-back-button=""><i class="fa fa-arrow-left"></i></a>Add Customer
          </h2>
          <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
          <div class="card-overlay bg-highlight opacity-95"></div>
          <div class="card-overlay dark-mode-tint"></div>
          <div class="card-bg bg-20"></div>
        </div>
        <form action="" method="post" id="form_add_cust">
        <div class="card card-style">
          <div class="content mb-0 mt-1">
            <div class="input-style has-icon input-style-1 input-required">
              <i class="input-icon fa fa-user color-theme"></i>
              <span>Customer Name</span>
              <em>(required)</em>
              <input type="name" name="c_name" placeholder="Customer Name"  required />
            </div>
            <div class="input-style has-icon input-style-1 input-required">
              <i class="input-icon fa fa-mobile color-theme"></i>
              <span>Mobile no.</span>
              <em>(required)</em>
              <input type="number"  name="c_mobile" placeholder="Mobile Number" required  />
            </div>

            <div class="input-style has-icon input-style-1 input-required">
              <i class="input-icon fa fa-flask color-theme"></i>
              <span>Amount In Litre</span>
              <em>(required)</em>
              <input type="number" name="c_ltr" placeholder="Amount in Litres"  required/>
            </div>



            <div class="row" style="margin: auto;">
              <div style="display: inline-block; padding-top: 3%; padding-bottom: 3%;" class="col-6 fac fac-radio fac-green">
                <span></span>
                <input checked id="box2-fac-radio" type="radio" name="c_ptype" value="cash" required />
                <label for="box2-fac-radio">Cash</label>
              </div>
              <div style="display: inline-block; padding-top: 3%; padding-bottom: 3%;" class="col-6 fac fac-radio fac-red">
                <span></span>
                <input id="box6-fac-radio" type="radio" name="c_ptype" value="credit" required />
                <label for="box6-fac-radio">Credit</label>
              </div>
            </div>
            <div class="row">

			  <div class="col-6">
			    <div class="form-group row">
			      <div class="col-md-12" style="padding-top: 1%; font-weight: bold;">
			        <img src="assets/cow.png" style="width: 100px; height: 100px; min-width: 100px;" /><input type="radio" style="border: 2px solid black;" checked="" class="milk_type form-control" name="milk_type" value="cow" required />
			      </div>
			    </div>
			  </div>
			  <div class="col-6">
			    <div class="form-group row">
			      <div class="col-md-12" style="padding-top: 1%; font-weight: bold;">
			        <img src="assets/buffalo.png" style="width: 100px; height: 100px; min-width: 100px;" /><input type="radio" style="border: 1px solid black;" class="milk_type form-control" name="milk_type" value="buffalo" required />
			      </div>
			    </div>
			  </div>
			</div>

              
            
            </div>
           

	       	<div class="row" style="margin: inherit;">

	       		 <div class="col-6">
	            	<a href="index.php" class="btn btn-m btn-full rounded-sm shadow-l bg-red1-dark text-uppercase font-900">Cancel</a>	
	            </div>
	           	
	            <div class="col-6">
	            	<input style="border: none;" type="submit" class="btn btn-m btn-full rounded-sm shadow-l bg-green1-dark text-uppercase font-900" value="Submit" >
	            	
	            </div>

	        </div>
    	</form>
            

        <div class="footer" data-menu-load="menu-footer.html"></div>
      </div>

      <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-share.html" data-menu-height="420" data-menu-effect="menu-over"></div>
      <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over"></div>
      <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260" data-menu-load="menu-main.html" data-menu-active="nav-pages" data-menu-effect="menu-over"></div>
    </div>
    <script type="text/javascript" src="scripts\jquery.js"></script>
    <script type="text/javascript" src="scripts\bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts\custom.js"></script>
    <script type="text/javascript">
    	$("#form_add_cust").submit(function () {

    		var formData = new FormData($("#form_add_cust")[0]);
    		    $.ajax({
    		                   type:"POST",
    		                   url:"submit/add_cust_submit.php",
    		                   data:formData,
    		                   processData: false,
    		                   cache: false,
    		                   contentType: false,
    		                   success: function(data){
    		                   	
    		                   }
    		               });
    		return false;
    	})
    </script>
  </body>
</html>



