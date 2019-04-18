<?php 
$this->load->helper('url'); 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();
$user = $this->session->userdata('user');
?>

<!DOCTYPE>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet" type="text/css" />
<link href="<?php echo $cssbase . "/assets/css/default.css"?>" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div id="wrapper">
	<div id="header">
	</div>
	<div id="login" >
	<a href="<?php echo "$base/User/dologon"; ?>">Login</a>|
	<a href="<?php echo "$base/User/logout/"?>">Log out</a>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="<?php echo "$base/User"; ?>">Home</a></li>
			<li class="current_page_item"><a href="<?php echo "$base/User"; ?>">Report Synopsis</a></li>
			<li class="current_page_item"><a href="<?php echo "$base/User"; ?>">The Menu</a></li>
			<?php if ($user['UserID'] > 0) {?>
				<li><a href="<?php echo "$base/User/userHomePage/". $user['UserID']; ?>">My Home Page</a></li>
				<li><a href="<?php echo "$base/User/DoQuiz/"; ?>">Your Impact</a></li>
				<li><a href="<?php echo "$base/User/DoResults/". $user['UserID']; ?>">My Quiz Results</a></li>
				
			<?php } else { ?>
				<li></li>
				<li><a href="<?php echo "$base/User/doRegister"; ?>">Register</a></li>
			<?php } ?>
		</ul>
	</div> 
	<p>&nbsp;</p>