


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All User</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/user/add-user')?>"><button type="submit" class="btn btn-info btn-fill btn-wd">add user</button>
                                    </div></a>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Permission</th>
                                        <th>Action</th>
                                       
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($results != FALSE) {
                                            foreach ($results as $row ) {
                                                ?>
                                                 <tr>
                                            <td>abemazing</td>
                                            <td>rpmhslg@gmail.com</td>
                                            <td>Admin</td>
                                            <td> <a href="<?php echo base_url('administrator/user/edit-user')?>">
                                                <i class="ti-pencil"></i></a>
                                                <i class="ti-trash"></i>
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

       
