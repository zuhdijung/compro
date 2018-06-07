


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Gallery</h4>
                                <div style="margin-top:25px">
                                     <a href="<?php echo base_url('administrator/gallery/manage')?>"><button type="submit" class="btn btn-info btn-fill btn-wd"><i class="ti-arrow-left"></i>  Manage Gallery</button>
                                    </div></a>
                                       
                                
                            </div>
                            <div class="content container-fluid">
                                 <?php echo form_open_multipart('');?>
                                   <?php echo validation_errors();
                                 ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name Gallery</label>
                                                <input type="text" class="form-control border-input" placeholder="Here You can edit name of gallery" value="<?php echo $result['name_gallery']?>" name="name_gallery">
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Image Article</label>
                                                 <?php
                                                if($result['image_gallery']!=''){
                                                ?>
                                                <img src="<?php echo base_url($result['image_gallery']) ?>" style="height:150px;">
                                                <?php
                                                }
                                                ?>
                                                <input type="file" name="userfile" class="form-control" placeholder="Here can you edit image"> 
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Edit Gallery</button>
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
                        </div>
                    </div>


                


                </div>
            </div>
        </div>

       
