


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add User</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/user/manage-user')?>"><button type="submit" class="btn btn-info btn-fill btn-wd"><i class="ti-arrow-left"></i>  Manage User</button>
                                    </div></a>
                                
                            </div>
                            <div class="content container-fluid">
                                 <?php echo form_open('')?>
                                <?php echo validation_errors();?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control border-input" placeholder="Username" name="Username">
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
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="Password" class="form-control border-input" placeholder="Confirm Your Password" value="" name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control border-input" placeholder="Email" name="Email" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Permission</label>
                                                <?php 
                                                    $options = $permission = array(
                                                        0 => 'writer', 
                                                        1 => 'admin'
                                                    );
                                                    echo form_dropdown('permission',$options,'','class="form-control border-input"');
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Add User</button>
                                    </div>
                                    <div class="clearfix"></div>
                                <?php echo form_close('')?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>