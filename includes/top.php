<!DOCTYPE html>
<html>
<head>
<title><?php echo (isset($title) ? $title:$_ginfo['title']); ?></title>


<link href="css/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>


<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap-theme.css">


<link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="css/lib.css">
<link rel="stylesheet" type="text/css" href="css/main.css">


<script>
	var redurl="<?php if(isset($_GET["url"]))  echo $_GET["url"]; ?>";
	var cururl=window.location.href;
	var profile_page_url="<?php echo HOST; ?>profile.php";
</script>
</head>
<body style="overflow-y:scroll;padding:0px;margin:0px;<?php if(isset($bgimg)) echo $bgimg; else echo ""; ?>background-size:100% auto;min-width:960px;background-attachment:fixed;" align=center >
	<script>
		var HOST="<?php echo HOST; ?>";
	</script>
