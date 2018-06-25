


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
                                        <th>Parent</th>
                                        <th>Short Order</th>
                                        <th>Action</th>


                                       
                                    </thead>
                                    <tbody>
                                       <?php
                                       if ($results != FALSE) {
                                           foreach ($results as $row) {
                                               ?>
                                               <tr>
                                                   <td>
                                                       <?php
                                                       echo $row->category;
                                                       ?>
                                                   </td>
                                                   
                                                   <td>
                                                       <a href="<?php echo base_url('administrator/menu/edit-menu/'.$row->id_menu)?>">
                                                    <i class="ti-pencil"></i></a>
                                                    <a href="<?php echo base_url('administrator/menu/delete-menu/'.$row->id_menu)?>">
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

       
