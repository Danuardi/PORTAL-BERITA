<div class="outer-wrapper my-5" id="outer-wrapper">

    <div class="container fbt-elastic-container">
        <div class="row justify-content-center">

            <!-- Main Wrapper -->
            <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

                <div id="main-wrapper">
                    <div class="main-section" id="main_content">
                        
                        <div class="fbt-sep-title">
                            <h4 class="title title-heading-left">Agenda</h4>
                            <div class="title-sep-container">
                                <div class="title-sep sep-double"><a href="<?php echo base_url(); ?>" class="view_more">Back to homepage</a></div>
                            </div>
                        </div>
                        
                        <div class="blog-posts fbt-index-post-wrap">

                            <?php

                            
                            foreach ($agenda->result_array() as $r):

                                $tgl_posting = tgl_indo($r['tgl_posting']);
                                $tgl_mulai   = tgl_indo($r['tgl_mulai']);
                                $tgl_selesai = tgl_indo($r['tgl_selesai']);
                                $baca = $r['dibaca']+1;
                                $judull = substr($r['tema'],0,33); 
                                $isi_agenda =(strip_tags($r['isi_agenda']));
                                $isi = substr($isi_agenda,0,210);
                                $isi = substr($isi_agenda,0,strrpos($isi," "));

                                if ($r['gambar'] ==''):
                                    $foto_agenda = 'no-image.jpg';
                                else:
                                    $foto_agenda = $r['gambar'];
                                endif;

                                echo "<div class='fbt_magazine-blog-post hentry fbt-index-post row align-items-center justify-content-between'>
                                    <div class='col-xl-6 col-md-5'>
                                        <div class='fbt-post-thumbnail'>
                                            <a href='".base_url()."agenda/detail/$r[tema_seo]'>
                                                <img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_agenda/$foto_agenda'>
                                            </a>
                                        </div>
                                    </div>
                                    <div class='col-xl-6 col-md-7'>
                                        <div class='fbt-post-caption mt-3 mt-md-0'>
                                            <h3 class='post-title'>
                                                <a href='".base_url()."agenda/detail/$r[tema_seo]'>
                                                    $judull
                                                </a>
                                            </h3>
                                            <div class='post-meta mb-2'>
                                                <span class='post-author'>$r[nama_lengkap]</span>
                                                <span class='post-date published'>$tgl_posting</span>
                                                <span class='post-date published'>$baca view</span>
                                            </div>
                                            <p class='post-excerpt'>
                                                $isi
                                            </p>
                                            <a href='".base_url()."agenda/detail/$r[tema_seo]' class='post-tag index-post-tag mt-3'>See More</a>
                                        </div>
                                    </div>
                                </div>";

                                
                            endforeach;

                            ?>

                        </div><!-- .fbt-index-post-wrap -->

                        <?php echo $this->pagination->create_links(); ?>


                    </div>
                </div><!-- #main-wrapper -->

            </div><!-- .fbt-main-wrapper -->

            <div class="fbt-main-sidebar col-lg-4">
                <div class="fbt-main-sidebar__content h-100 pl-lg-3">

                    <?php $this->load->view(template().'/widget/berita-popular'); ?>

                    <?php $this->load->view(template().'/iklan/sidebar-2'); ?>

                </div>    
            </div>
            <!-- .fbt-main-sidebar -->
        </div>
    </div>
</div>