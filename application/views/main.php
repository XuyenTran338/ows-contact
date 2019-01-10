<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>

	<style type="text/css">
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	h1 {
		color: #444;
		font-weight: bold;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 20px;
	}

	table {
		width: 100%;
		border-color: white;
		font-weight: bold;
	}

	.center{
		text-align: center;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 50px 300px 50px 300px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	.odd{
		background-color: #F0F8FF
	}

	.even{
		background-color: #FFFFFF
	}

	button{
		background: orange
	}

	input{
		height: 25px;
		float: right;
		width: 65%
	}

	.input{
		padding: 15px 0px 15px 0px;
		width: 60%;
	}

	label{
		color: black;
		font-weight: bold;
	}

	</style>
</head>
<body>
	<div id="container">
	    <h1><?php echo $title ?></h1>

	    <div id="body">
	    	<?php $this->load->view($subview); ?>
	    </div>

	    <p class="footer">Website được thiết kế bởi OWS Việt Nam</p>
	</div>
</body>
</html>