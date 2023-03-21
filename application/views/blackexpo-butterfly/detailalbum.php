<div class="outer-wrapper my-5" id="outer-wrapper">

    <div class="container fbt-elastic-container">
        <div class="row justify-content-center">

            <!-- Main Wrapper -->
            <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

                <div id="main-wrapper">
                    <div class="main-section" id="main_content">
                        
                        
                        
                        <div class="blog-posts fbt-item-post-wrap">

                            <div class="blog-post fbt-item-post">
                                
                                <div class="featuredImageContainer">
                                    <div class="fbt-item-thumbnail">

                                        <?php
                                        
                                        if ($rows['gbr_album'] !=''):
                                            echo "<img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/img_album/$rows[gbr_album]' alt='$rows[jdl_album]'>";
                                        else:
                                            echo "<img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/img_album/no-image.jpg' alt='$rows[jdl_album]'>";
                                        endif;
                                        
                                        ?>
                                    </div>
                                    <div class="fbt-item-caption mt-3">
                                        <h1 class="post-title"><?php echo "$rows[jdl_album]"; ?></h1>
                                        <div id="share"></div>
                                        <div class="item-post-meta mt-3">
                                            <div class="post-meta mb-3">
                                                <?php $r = $this->model_utama->view_where('users',array('username' => $rows[username]))->row_array();
                                                echo "<span class='post-author'>$r[nama_lengkap]</span>";
                                                echo "<span class='post-date published'>$rows[hits_album] view</span>"; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="post-body post-content">
                                    <p><?php echo "$rows[keterangan]"; ?></p>

                                    <?php

                                    $no=$this->uri->segment(4)+1;
                                    foreach($detailalbum->result_array() as $h):
                                        
                                        if (trim($h['gbr_gallery'])==''):
                                            $gbr_gallery = 'no-image.jpg';
                                        else:
                                            $gbr_gallery = $h['gbr_gallery'];
                                        endif;

                                            echo "<h3 class='mb-4'>$no. $h[jdl_gallery]</h3>";
                                            echo "<div class='fbt-item-thumbnail'>
                                                <img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/img_galeri/$gbr_gallery' alt='$h[jdl_gallery]' />
                                                <p class='mt-3'>$h[keterangan]</p>
                                            </div>";
                                        $no++;
                                    
                                    endforeach;
                                    
                                    ?>

                                    <p><?php echo $this->pagination->create_links(); ?></p>
                                </div>

                            </div>

                        </div><!-- .fbt-item-post-wrap -->
                    </div>
                </div><!-- #main-wrapper -->

            </div><!-- .fbt-main-wrapper -->

            <div class="fbt-main-sidebar col-lg-4">
                <div class="fbt-main-sidebar__content h-100 pl-lg-3">

                    <?php $this->load->view(template().'/widget/berita-kategori'); ?>

                    <?php $this->load->view(template().'/widget/berita-popular'); ?>

                </div>    
            </div>
            <!-- .fbt-main-sidebar -->
        </div>
    </div>
</div>