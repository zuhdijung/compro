


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Menu</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/menu/add-menu')?>"><button type="submit" class="btn btn-info btn-fill btn-wd">add menu</button></a>
                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Menu</th>
                                        <th>Link</th>
                                        <th title="External / Internal">Ex/In</th>
                                        <th>Sort Order</th>
                                        <th>Action</th>  
                                    </thead>
                                    <tbody>
                                       <?php
                                       if ($results != FALSE) {
                                           foreach ($results as $rows) {
                                               ?>
                                               <tr>
                                                   <td>
                                                       <?php echo $rows->menu; ?>
                                                   </td>
                                                   <td><?php echo $rows->link_menu?></td>
                                                   <td>
                                                     <?php
                                                      if($rows->internal_link == 0)
                                                        echo "In";
                                                      else if($rows->internal_link == 1)
                                                        echo "Ex";
                                                     ?>
                                                   </td>
                                                   <!-- <td>
                                                       <?php 
                                                          $result = $this->mod->fetchDataWhere('menu','id_menu',$rows->id_parent);
                                                          if($result!=false)
                                                            echo $result['menu'];
                                                          else
                                                            echo "Ini Parent Menu";
                                                       ?>
                                                   </td> -->
                                                   <td><?php echo $rows->sort_order; ?></td>
                                                   <td>
                                                       <a href="<?php echo base_url('administrator/menu/edit-menu/'.$rows->id_menu)?>">
                                                    <i class="ti-pencil"></i></a>
                                                    <a href="<?php echo base_url('administrator/menu/delete-menu/'.$rows->id_menu)?>" onclick="return confirm('Are You Sure Want to Delete this Data?')">
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

       
