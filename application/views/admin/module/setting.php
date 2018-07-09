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