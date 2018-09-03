


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
                                            foreach ($results as $rows ) {
                                                ?>
                                                 <tr>
                                            <td> <?php
                                            echo $rows->title;
                                            ?></td>
                                            <td><?php
                                            echo $rows->article;
                                            ?></td>
                                            <td>
                                                <?php
                                         if($rows->image_article!=''){
                                              ?>
                                                <img class = 'img-responsive' src="<?php echo base_url($rows->image_article)?>"></td>
                                            <?php
                                        }?>
                                            <td><?php
                                            echo $rows->date_article;
                                            ?></td>
                                            <td><?php
                                            echo $rows->username;
                                            ?></td>
                                            <td><a href="<?php echo base_url('administrator/article/edit-article/'.$rows->id_article)?>">
                                                <i class="ti-pencil"></i></a>
                                                <a href="<?php echo base_url('administrator/article/delete-article/'.$rows->id_article)?>" onclick="return confirm('Are You Sure Want to Delete this Data?')">
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

       
