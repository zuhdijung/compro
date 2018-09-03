<div class="content">
            <div class="container-fluid">
                
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">General Setting Website
                            </div>
                            <div class="content container-fluid">
                                <?php echo form_open_multipart('');?>
                                 <?php echo validation_errors();
                                 ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title Website</label>
                                                <input type="text" class="form-control border-input" placeholder="Title Website" name="title_website" value="<?php echo $result['title_website']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tagline Website</label>
                                                <input type="text" class="form-control border-input" placeholder="Tagline Website" name="tagline_website" value="<?php echo $result['tagline_website']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Logo Website</label>
                                                <?php 
                                                    if($result['logo_website'] != ''){
                                                        ?>
                                                        <br /><img src="<?php echo base_url($result['logo_website']);?>" style="width:200px;">
                                                        <?php
                                                    }
                                                ?>
                                                <input type="file" class="form-control border-input" placeholder="Tagline Website" name="userfile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Default Template</label>
                                                <select class="form-control border-input" name="default_template">
                                                    <option value="default">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Admin Template</label>
                                                <select class="form-control border-input" name="default_admin">
                                                    <option value="admin">Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Meta Description</label>
                                                <textarea class="form-control border-input" name="meta_description"><?php echo $result['meta_description']?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Meta Keywords (Separate with Comma)</label>
                                                <textarea class="form-control border-input" name="meta_keywords"><?php echo $result['meta_keywords']?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Footer</label>
                                                <textarea class="form-control border-input" name="footer"><?php echo $result['footer']?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save Setting</button>
                                    </div>
                                    <div class="clearfix"></div>
                                <?php echo form_close('')?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>