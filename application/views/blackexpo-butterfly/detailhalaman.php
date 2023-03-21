<div class="container fbt-elastic-container mt-5 mb-5">
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

                                    if (trim($rows['gambar'])!=''):
                                        echo "<img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_statis/$rows[gambar]'>";
                                    else:

                                        echo "<img alt='$rows[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                    endif;
                                    
                                    ?>
                                </div>
                                <div class="fbt-item-caption mt-3">
                                    <h1 class="post-title"><?php echo $rows[judul]; ?></h1>
                                    <div class="item-post-meta mt-3">
                                        <div class="post-meta mb-3">
                                            <span class="post-author"><?php echo "$rows[nama_lengkap]"; ?></span>
                                            <span class="post-date published"><?php echo tgl_indo($rows['tanggal']).", $rows[jam] WIB"; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-body post-content">
                                <p><?php echo "$rows[isi_halaman]"; ?></p>
                            </div>
                            
                        </div>

                    </div><!-- .fbt-item-post-wrap -->
                </div>
            </div><!-- #main-wrapper -->

        </div><!-- .fbt-main-wrapper -->

        <div class="fbt-main-sidebar col-lg-4">
            <div class="fbt-main-sidebar__content h-100 pl-lg-3">

                <?php $this->load->view(template().'/widget/berita-popular'); ?>
                <?php $this->load->view(template().'/iklan/sidebar-2'); ?>

            </div>    
        </div><!-- .fbt-main-sidebar -->

    </div>
</div>