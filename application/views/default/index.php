<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('default/common/header');?>
</head>
<body>
    <?php $this->load->view('default/common/nav');?>
    <?php $this->load->view('default/module/'.$file_view);?>
    <?php $this->load->view('default/common/footer');?>
    <?php $this->load->view('default/common/script');?>    
</body>
</html>
