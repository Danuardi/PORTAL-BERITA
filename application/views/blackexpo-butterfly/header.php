<div class="fbt-headline clearfix" id="headline">
    <div class="container">
        <div class="row align-items-center justify-content-between py-1 py-md-0">
            <div class="col-md-7 left-headline-content">
                <div class="fbt-left-headline" id="left-headline">
                    
                    <ul class="nav justify-content-center justify-content-md-start">

                        <?php

                        $topmenu = $this->model_utama->view_where_ordering_limit('menu',array('position' => 'Top','aktif' => 'Ya'),'urutan','ASC',0,5);
                        foreach ($topmenu->result_array() as $row):
                            if(preg_match("/^http/", $row['link'])):
                                echo "<li class='nav-item'><a class='nav-link' href='$row[link]'>$row[nama_menu]</a></li>";
                            else:
                                echo "<li class='nav-item'><a class='nav-link' href='".base_url()."$row[link]'>$row[nama_menu]</a></li>";
                            endif;
                        endforeach;

                        ?>
                    </ul>

                </div>
            </div>
            <div class="col-md-5 right-headline-content">
                <div class="fbt-right-headline" id="right-headline">
                    <?php
                        $sosmed = $this->model_utama->view('identitas')->row_array();
                        $pecahd = explode(",", $sosmed['facebook']);
                    ?>
                    <ul class="nav justify-content-center justify-content-md-end social-icons">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $pecahd[0]; ?>"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $pecahd[1]; ?>"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $pecahd[2]; ?>"><i class="fa fa-google"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $pecahd[3]; ?>"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                        
                </div>
            </div>
        </div>
    </div>
</div><!-- .fbt-headline -->

<nav class="navbar navbar-expand-xl navbar-fbt fbt-nav-skin fbt_sticky_nav m-0">
    <div class="container nav-mobile-px clearfix">
        <div class="navbar-brand order-2 order-xl-1 m-auto">
            <a href="<?php echo base_url(); ?>">
                <?php
                      $logo = $this->model_utama->view_ordering_limit('logo','id_logo','DESC',0,1);
                      foreach ($logo->result_array() as $row) {
                        echo "<img src='".base_url()."asset/logo/$row[gambar]'/>";
                      }

                ?>
        </div>
        <div class="collapse navbar-collapse order-4 order-xl-3 clearfix" id="navbar-menu">
            <ul class="navbar-nav m-auto clearfix">
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
                </li>

                <?php

                $botm = $this->db->query("SELECT * FROM menu where id_parent='0' AND position = 'Bottom' AND aktif='Ya' ORDER BY urutan ASC");

                foreach ($botm->result_array() as $row):
                    $dropdown = $this->db->query("SELECT * FROM menu WHERE id_parent='$row[id_menu]' AND aktif='Ya' ORDER BY urutan ASC")->num_rows();
                    if ($dropdown == 0):
                        echo "<li class='nav-item'>
                                    <a  class='nav-link' href='".base_url()."$row[link]'>$row[nama_menu]</a>
                                </li>";
                    else:
                        echo "<li class='nav-item dropdown'>
                                    <a href='#' class='nav-link dropdown-toggle' aria-haspopup='true' aria-expanded='false' data-toggle='dropdown'>$row[nama_menu]</a>
                                    <div class='dropdown-menu'>";
                                        $dropmenu = $this->db->query("SELECT * FROM menu WHERE id_parent='$row[id_menu]' AND aktif='Ya' ORDER BY urutan ASC");
                                        foreach ($dropmenu->result_array() as $row){
                                            echo "<a class='dropdown-item' href='".base_url()."$row[link]'>$row[nama_menu]</a>";
                                        };
                                    echo "</div>
                                </li>";
                    endif;
                endforeach;
                ?>
               
            </ul>
        </div>
    </div>
</nav><!-- .navbar end-->