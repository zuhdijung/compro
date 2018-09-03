<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://zqaqiqahqurban.com.com">
                                <?php
                                    $result = $this->mod->getDataWhere('setting','id_setting',1);
                                    echo $result['title_website'];
                                ?>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, Developed By <i class="fa fa-heart heart"></i> by <a href="http://belajarkuy.com">Belajar Kuy</a>
                </div>
            </div>
        </footer>