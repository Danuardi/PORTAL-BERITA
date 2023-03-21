<div class="outer-wrapper my-5" id="outer-wrapper">

    <div class="container fbt-elastic-container">
        <div class="row justify-content-center">

            <div class="fbt-rel-post-wrapper mb-5">
                <div class="title-wrap fbt-sep-title">
                    <h4 class="title title-heading-left">Albums</h4>
                    <div class="title-sep-container">
                        <div class="title-sep sep-double"><a href="<?php echo base_url(); ?>" class="view_more">Back to homepage</a></div>
                    </div>
                </div>
                <div id="related-posts">
                    <div class="row px-2">

                        <?php 
                            $no = $this->uri->segment(3)+1;
                            foreach ($album->result_array() as $h) { 

                                if ($h['gbr_album'] ==''):
                                    $gbr_album = 'no-image.jpg';
                                else:
                                    $gbr_album = $h['gbr_album'];
                                endif;

                                $total_foto = $this->model_utama->view_where('gallery',array('id_album' => $h['id_album']))->num_rows();

                                $author = $this->model_utama->view_where('users',array('username' => $h['username']))->row_array();

                                echo "<div class='col-xl-3 col-lg-6 col-md-4 col-sm-6 rp-item mt-4 px-2'>
                                    <div class='fbt-post-thumbnail'>
                                        <a href='".base_url()."albums/detail/$h[album_seo]'>
                                            <img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/img_album/$gbr_album' alt='$h[jdl_album]' />
                                        </a>
                                    </div>
                                    <div class='fbt-post-caption text-center mt-2 px-2'>
                                        <span class='post-tag index-post-tag'>Ada $total_foto Foto</span>
                                        <div class='title-caption'>
                                            <div class='post-meta mb-2'>
                                                <span class='post-author'>$author[nama_lengkap]</span>
                                                <span class='post-time'>".tgl_indo($h['tgl_posting'])."</span>
                                                / $h[hits_album] view
                                            </div>
                                            <h6 class='post-title'>
                                                <a href='".base_url()."albums/detail/$h[album_seo]'>
                                                    $h[jdl_album]
                                                </a>
                                            </h6>
                                            
                                        </div>
                                    </div>
                                </div>";
                                
                            }
                        ?>

                        <?php echo $this->pagination->create_links(); ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>