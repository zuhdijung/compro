<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('asset/asset-admin/img/apple-icon.png');?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('asset/asset-admin/img/favicon.png');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

   

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('asset/asset-admin/css/bootstrap.min.css');?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('asset/asset-admin/css/animate.min.css');?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('asset/asset-admin/css/paper-dashboard.css');?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('asset/asset-admin/css/demo.css');?>" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('asset/asset-admin/css/themify-icons.css');?>" rel="stylesheet">
    <style type="text/css">
        .login-form{
            margin-top: 100px;
        }
    </style>
	<title>Login</title>
</head>
<body>
    <div class="login-form">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <h2 class="text-center">ADMINISTRATOR PAGE</h2>
                </div>
                <div class="row">
                    <div class=" col-md-6 col-md-offset-3">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Login to Administrator</h4>
                            </div>
                            <div class="content">
                                <?php echo form_open('')?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control border-input" placeholder="Username" value="" name="username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="Password" class="form-control border-input" placeholder="Password" value="" name="password">
                                            </div>
                                        </div>
                                    </div>

                                    		<?php 
                                    		echo validation_errors();

											?>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Login</button>
                                    </div>
                                    <div class="clearfix"></div>
                               <?php echo form_close('')?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
<!--   Core JS Files   -->
    <script src="<?php echo base_url('asset/asset-admin/js/jquery-1.10.2.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('asset/asset-admin/js/bootstrap.min.js');?>" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url('asset/asset-admin/js/bootstrap-checkbox-radio.js');?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url('asset/asset-admin/js/chartist.min.js');?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('asset/asset-admin/js/bootstrap-notify.js');?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('asset/asset-admin/js/paper-dashboard.js');?>"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('asset/asset-admin/js/demo.js');?>"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            
        });
    </script>
</body>
</html>