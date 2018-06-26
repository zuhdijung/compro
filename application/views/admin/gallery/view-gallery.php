        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $result['name_gallery'] ?></h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/gallery/upload-image/'.$this->uri->segment(4))?>">
                                            <button type="submit" class="btn btn-info btn-fill btn-wd">Upload Image</button></a>
                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th width="50%">Caption</th>
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
                                                      echo $rows->caption;
                                                      ?>
                                                  </td>
                                                  <td>
                                                      <?php
                                                      if ($rows->image_url !='') {
                                                          ?>
                                                          <img class = 'img-responsive' src="<?php echo base_url($rows->image_url)?>">
                                                          <?php
                                                      }
                                                      ?>
                                                  </td>
                                                  <td>
                                                <a href="<?php echo base_url('administrator/gallery/delete-image/'.$rows->id_image_gallery)?>">
                                                <i class="ti-trash"></i></a>
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

       
