


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Category</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/article/manage-category')?>"><button type="submit" class="btn btn-info btn-fill btn-wd"><i class="ti-arrow-left"></i>  Manage Category</button>
                                    </div></a>
                                
                            </div>
                            <div class="content container-fluid">
                                 <?php echo form_open('')?>
                                 <?php echo validation_errors();?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Category Name" name='category'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Choose Category</label>
                                                <?php 
                                                    $options = $choose = array(
                                                        0 => 'writer', 
                                                        1 => 'admin'
                                                    );
                                                    echo form_dropdown('choose',$options,'','class="form-control border-input"');
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Edit Category</button>
                                    </div>
                                    <div class="clearfix"></div>
                                <?php echo form_close('')?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>