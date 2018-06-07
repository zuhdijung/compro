


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
                                 <?php echo form_open('');
                                 echo validation_errors();
                                 ?>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Title Page</label>
                                                <input type="text" class="form-control border-input" placeholder="Title Page" name="title_page" value="<?php echo $result['title_page']?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Page</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" name="page"><?php echo $result['page']?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <?php
                                                 $options = array(
                                                 0 => 'Category Name'
                                                    );
                                                 if($category!=FALSE){
                                                foreach ($category as $rows) {
                                                 $options[$rows->id_category] = $rows->category;
                                                    }
                                                        }
                                                echo form_dropdown('id_category',$options,$result['id_category'],'class="form-control"');
                                                    ?>
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

       
