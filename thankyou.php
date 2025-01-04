<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<style>
    .button-ty {
        background-color: #4b0082; /* Default background color */
        color: #ffffff; /* Default text color */
        padding: 10px 20px; /* Adjust padding as needed */
        border: none; /* Remove default button border */
        cursor: pointer; /* Add a pointer cursor on hover */
		margin-top: 20px;
		border-radius: 20px;
    }

	a:hover, a:active {
    color: #4b0082 !important;
	cursor: pointer;
}

.main-content__checkmark{
	color: #4b0082;
}

a:link, a:visited {
    color: white;
}

   
</style>

<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">Your application for membership has been submitted</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		
		<p class="main-content__body" data-lead-id="main-content-body">A confirmation email is on its way to your inbox, and before long we’ll have assessed your application and you’ll officially be a member of our global creative community.<br>In the meantime, feel free to browse these member resources:</p>
		<a href="https://wideawakecommunity.co.uk/our-membership/"><i>Community Values and Member Terms</i></a><br> <a href="https://wideawakecommunity.co.uk/our-membership/"><i>Summary of Membership Benefits</i></a><br>
		<button class="button-ty" onclick="goBack()">Return to main page</button>

	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2024 | All Rights Reserved</p>
	</footer>
</body>

<script>
    function goBack() {
        // Redirect to the desired website
        window.location.href = 'https://wideawakecommunity.co.uk/our-membership/';
    }
</script>

</html>