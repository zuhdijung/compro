<!doctype html>
<html lang="en">
<head>
     <title>Paper Dashboard by Creative Tim</title>
    <?php $this->load->view('admin/common/header'); ?>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
        <?php $this->load->view('admin/common/sidebar'); ?>

    </div>

    <div class="main-panel">
        <?php $this->load->view('admin/common/topbar'); ?>


        <?php $this->load->view($path_content); ?>


        <?php $this->load->view('admin/common/footer'); ?>

    </div>
</div>

<?php $this->load->view('admin/common/script'); ?>

</body>

    

</html>
