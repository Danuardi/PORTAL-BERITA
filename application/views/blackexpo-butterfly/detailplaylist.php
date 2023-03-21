<div class="container fbt-elastic-container mt-5 mb-5">
    <div class="row justify-content-center">

        <!-- Main Wrapper -->
        <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

            <div id="main-wrapper">
                <div class="main-section" id="main_content">
                    
                    <div class="fbt-sep-title">
                        <h4 class="title title-heading-left">Semua Video "<?php echo "$rows[jdl_playlist]"; ?>"</h4>
                        <div class="title-sep-container">
                            <div class="title-sep sep-double"><a href="<?php echo base_url(); ?>" class="view_more">Back to homepage</a></div>
                        </div>
                    </div>
                    
                    <div class="blog-posts fbt-index-post-wrap">

                        <?php

                        foreach ($detailplaylist->result_array() as $r):
                            $lihat = $r['dilihat']+1;
                            $judull = substr($r['jdl_video'],0,33);
                            $isi_berita =(strip_tags($r['keterangan']));
                            $isi = substr($isi_berita,0,130);
                            $isi = substr($isi_berita,0,strrpos($isi," "));
                            $total_komentar = $this->model_utama->view_where('komentarvid',array('id_video' => $r['id_video']))->num_rows();

                            echo "<div class='fbt_magazine-blog-post hentry fbt-index-post row align-items-center justify-content-between'>
                                <div class='col-xl-6 col-md-5'>
                                    <div class='fbt-post-thumbnail'>
                                        <a href='".base_url()."playlist/watch/$r[video_seo]'>";
                                            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $r['youtube'], $match)):
                                                echo "<img alt='' class='post-thumbnail lazyloaded' src='https://img.youtube.com/vi/".$match[1]."/0.jpg'>";
                                            endif;
                                        echo "<span class='video-icon'><i class='fa fa-play'></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class='col-xl-6 col-md-7'>
                                    <div class='fbt-post-caption mt-3 mt-md-0'>
                                        <h3 class='post-title'>
                                            <a href='".base_url()."playlist/watch/$r[video_seo]'>
                                                $r[jdl_video]
                                            </a>
                                        </h3>
                                        <div class='post-meta mb-2'>
                                            <span class='post-author'>$r[nama_lengkap]</span>
                                            <span class='post-date published'>".tgl_indo($r['tanggal'])."</span>
                                        </div>
                                        <p class='post-excerpt mb-3'>
                                            $isi ...
                                        </p>
                                        <a href='".base_url()."playlist/watch/$r[video_seo]'>
                                            <span class='post-tag index-post-tag'>Watch This Video <i class='fa fa-caret-right'></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>";

                          endforeach;
                    ?>

                        

                    </div><!-- .fbt-index-post-wrap -->

                    <?php echo $this->pagination->create_links(); ?>
                    <!-- .pagenav -->

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