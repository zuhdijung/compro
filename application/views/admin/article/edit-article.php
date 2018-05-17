


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Article</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/article/manage')?>"><button type="submit" class="btn btn-info btn-fill btn-wd"><i class="ti-arrow-left"></i>  Manage Article</button>
                                    </div></a>
                                
                            </div>
                             <div class="content container-fluid">
                                 <?php echo form_open('')?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control border-input" placeholder="Home Address" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Article</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Image Article</label>
                                                <input type="file" name="userfile" class="form-control" placeholder="Here  you can  edit image"> 
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Edit Article</button>
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

       
