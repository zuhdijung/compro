


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Upload Gallery</h4>
                                <div style="margin-top:25px">
                                     <a href="<?php echo base_url('administrator/gallery/view-gallery/'.$this->uri->segment(4))?>"><button type="submit" class="btn btn-info btn-fill btn-wd"><i class="ti-arrow-left"></i> Manage Gallery</button>
                                    </div></a>
                                       
                                
                            </div>
                            <div class="content container-fluid">
                                 <?php echo form_open_multipart('');?>
                                 <?php echo validation_errors();
                                 ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Caption</label>
                                                <input type="text" class="form-control border-input" placeholder="Here You can add name of gallery" name="caption" >
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Image Gallery</label>
                                                <input type="file" name="userfile" class="form-control" placeholder="Here can you add image"> 
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Upload Gallery</button>
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

       
