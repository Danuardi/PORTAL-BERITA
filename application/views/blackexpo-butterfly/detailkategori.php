<div class="outer-wrapper my-5" id="outer-wrapper">

    <div class="container fbt-elastic-container mb-5">
        <?php $this->load->view(template().'/iklan/atas'); ?>
    </div>

    <div class="container fbt-elastic-container">
        <div class="row justify-content-center">

            <!-- Main Wrapper -->
            <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

                <div id="main-wrapper">
                    <div class="main-section" id="main_content">
                        
                        <div class="fbt-sep-title">
                            <h4 class="title title-heading-left">Berita Kategori "<?php echo "$rows[nama_kategori]"; ?>"</h4>
                            <div class="title-sep-container">
                                <div class="title-sep sep-double"></div>
                            </div>
                        </div>
                        
                        <div class="blog-posts fbt-index-post-wrap">

                            <?php

                            
                            foreach ($beritakategori->result_array() as $r):

                                $baca = $r['dibaca']+1;
                                $isi_berita =(strip_tags($r['isi_berita']));
                                $isi = substr($isi_berita,0,220);
                                $isi = substr($isi_berita,0,strrpos($isi," "));
                                $judul = substr($r['judul'],0,33);
                                $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows();

                                if ($r['gambar'] ==''):
                                    $foto_slide = 'no-image.jpg';
                                else:
                                    $foto_slide = $r['gambar'];
                                endif;

                                echo "<div class='fbt_magazine-blog-post hentry fbt-index-post row align-items-center justify-content-between'>
                                    <div class='col-xl-6 col-md-5'>
                                        <div class='fbt-post-thumbnail'>
                                            <a href='".base_url()."$row[judul_seo]'>
                                                <img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/$foto_slide'>
                                            </a>
                                        </div>
                                    </div>
                                    <div class='col-xl-6 col-md-7'>
                                        <div class='fbt-post-caption mt-3 mt-md-0'>
                                            <span class='post-tag index-post-tag'>$r[nama_kategori]</span>
                                            <h3 class='post-title'>
                                                <a href='".base_url()."$r[judul_seo]'>
                                                    $r[judul]
                                                </a>
                                            </h3>
                                            <div class='post-meta mb-2'>
                                                <span class='post-author'>$r[nama_lengkap]</span>
                                                <span class='post-date published'>".tgl_indo($r['tanggal'])."</span>
                                            </div>
                                            <p class='post-excerpt'>
                                                $isi
                                            </p>
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