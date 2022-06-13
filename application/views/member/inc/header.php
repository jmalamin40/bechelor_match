<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo  $title; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/member/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/member/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/member/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/member/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/member/css/matrix-media.css" />
<link href="<?php echo base_url(); ?>assets/member/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/member/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style>
    @media screen and (max-width:480px)
    {
        .m_lg {
            min-width: 44% !important;
            float: left !important;
        }
        ul.quick-actions {
            margin: 0 auto;
        }
    }
</style>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo base_url(); ?>"><?php echo  $title; ?></a></h1>
</div>
<!--close-Header-part--> 


<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav" style="width: auto; margin: 0px;">
    <li class="dropdown" id="profile-messages"><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo base_url(); ?>myProfile.txt"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo base_url(); ?>Logout.txt"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    
  </ul>
</div>
<!--start-top-serch-->
<div id="search">
 
</div>
<!--close-top-serch-->
<!--close-top-serch-->