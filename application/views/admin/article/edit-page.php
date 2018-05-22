


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Article</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/article/manage-page')?>"><button type="submit" class="btn btn-info btn-fill btn-wd"><i class="ti-arrow-left"></i>  Manage Page</button>
                                    </div></a>
                                
                            </div>
                             <div class="content container-fluid">
                                 <?php echo form_open('')?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title Page</label>
                                                <input type="text" class="form-control border-input" placeholder="Home Address" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Page</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Edit Page</button>
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

       
