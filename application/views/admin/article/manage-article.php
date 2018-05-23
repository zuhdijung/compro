


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Article</h4>
                                <div style="margin-top:25px">
                                        <a href="<?php echo base_url('administrator/article/add-article')?>"><button type="submit" class="btn btn-info btn-fill btn-wd">add article</button></a>
                                    </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>title</th>
                                        <th>Article</th>
                                        <th width="20%">Image Article</th>
                                        <th>Date Article</th>
                                        <th>Username</th>
                                        <th>Action</th>


                                       
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($results != FALSE) {
                                            foreach ($results as $row ) {
                                                ?>
                                                 <tr>
                                            <td> <?php
                                            echo $row->title;
                                            ?></td>
                                            <td><?php
                                            echo $row->article;
                                            ?></td>
                                            <td>
                                                <?php
                                         if($rows->image_article!=''){
                                              ?>
                                                <img class = 'img-responsive' src="<?php echo base_url($row->image_article)?>"></td>
                                            <?php
                                        }?>
                                            <td><?php
                                            echo $row->date_article;
                                            ?></td>
                                            <td><?php
                                            echo $row->id_user;
                                            ?></td>
                                            <td><a href="<?php echo base_url('administrator/article/edit-article/'.$row->id_article)?>">
                                                <i class="ti-pencil"></i></a>
                                                <a href="<?php echo base_url('administrator/article/delete-article/'.$row->id_article)?>">
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

       
