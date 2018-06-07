


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
                                            foreach ($results as $rows ) {
                                              ?>
                                              <tr>
                                                  <td>
                                                      <?php
                                                      echo $rows->name_gallery;
                                                      ?>
                                                  </td>
                                                  <td>
                                                      <?php
                                                      if ($rows->image_gallery !='') {
                                                          ?>
                                                          <img class = 'img-responsive' src="<?php echo base_url($rows->image_gallery)?>"></td>
                                                          <?php
                                                      }
                                                      ?>
                                                      <td><a href="<?php echo base_url('administrator/gallery/edit-gallery/'.$rows->id_gallery)?>">
                                                <i class="ti-pencil"></i></a>
                                                <a href="<?php echo base_url('administrator/gallery/delete-gallery/'.$rows->id_gallery)?>">
                                                <i class="ti-trash"></i></a>
                                                 </td> 

                                                  </td>
                                              </tr>
                                              <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

       
