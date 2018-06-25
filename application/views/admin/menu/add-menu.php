


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add Menu</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/menu/manage-menu')?>"><button type="submit" class="btn btn-info btn-fill btn-wd"><i class="ti-arrow-left"></i>  Manage menu</button>
                                    </div></a>
                                
                            </div>
                            <div class="content container-fluid">
                                 <?php echo form_open('')?>
                                  <?php echo validation_errors();?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Menu</label>
                                                <input type="text" class="form-control border-input" placeholder="Category Name" name="menu" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Parent</label>
                                              <?php 
                                                    $options = array(
                                                        0 => '', 
                                                        1 => '',
                                                        2 => ''
                                                    );
                                                    echo form_dropdown('permission',$options,'','class="form-control border-input"');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Short Order</label>
                                                <input type="number" name="sort_order" class="form-control border-input" placeholder="Short Order">
                                            </div>
                                        </div>
                                    </div>
                                   <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Hierarchy</label>
                                                <?php 
                                                    $options = array(
                                                        0 => 'parent', 
                                                        1 => 'submenu',
                                                        2 => 'subsubmenu'
                                                    );
                                                    echo form_dropdown('permission',$options,'','class="form-control border-input"');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                   

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add Menu</button>
                                    </div>
                                    <div class="clearfix"></div>
                                <?php echo form_close('')?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>