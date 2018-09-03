


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Page</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/article/add-page')?>"><button type="submit" class="btn btn-info btn-fill btn-wd">add page</button></a>
                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Title Page</th>
                                        <th>Page</th>
                                        <th>Date Page</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if ($results != FALSE) {
                                            foreach ($results as $row ) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php
                                                        echo $row->title_page;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo substr(strip_tags($row->page),0,100);
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        echo date('d M Y H:i',strtotime($row->date_page));
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url('administrator/article/edit-page/'.$row->id_page)?>">
                                                        <i class="ti-pencil"></i></a>
                                                        <a href="<?php echo base_url('administrator/article/delete-page/'.$row->id_page)?>" onclick="return confirm('Are You Sure Want to Delete this Data?')">
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

       
