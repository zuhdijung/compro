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
        tinymce.init({
  selector: '.textarea',
  height: 200,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code help wordcount'
  ],
  toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css']
});
    </script>