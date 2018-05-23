


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Gallery</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/gallery/add-gallery')?>">
                                            <button type="submit" class="btn btn-info btn-fill btn-wd">add gallery</button></a>
                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th width="50%">Name Gallery</th>
                                        <th width="40%">Image Gallery</th>
                                        <th width="10%">Action</th>
                                        
                                       
                                    </thead>
                                    <tbody>
                                        <?php
                                          if ($results != FALSE) {
                                            foreach ($results as $row ) {
                                                ?>
                                                 <tr>
                                            <td> <?php
                                            echo $row->name_gallery;

                                            ?></td>
                                            <td> <?php 
                                                if ($results != FALSE) {
                                                    foreach ($results as $krow ) {
                                                        ?>
                                                        
                                                            <td>
                                                                <?php
                                                                echo $row->image_gallery;
                                                           ?> </td>
                                                    }
                                                }

                                            <img class = 'img-responsive' src="<?php echo base_url('asset/asset-admin/img/bg-header.jpg')?>">?></td>
                                            <td><a href="<?php echo base_url('administrator/gallery/edit-gallery')?>">
                                                <i class="ti-pencil"></i></a>
                                                <i class="ti-trash"></i>
                                                 </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>minerva</td>
                                          <td><img class = 'img-responsive' src="<?php echo base_url('asset/asset-admin/img/bg-header.jpg')?>"></td>
                                            <td><a href="<?php echo base_url('administrator/gallery/edit-gallery')?>">
                                                <i class="ti-pencil"></i></a>
                                                <i class="ti-trash"></i>
                                                 </td>
                                            
                                        </tr>


                                        ?>
                                       
                                       
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                


                </div>
            </div>
        </div>

       
