<div class="fbt-gallery mb-5 mt-5">
    <div class="container fbt-elastic-container fbt-gallery-1">

        <div class="fbt-sep-title">
            <h4 class="title title-heading-left">Playlist</h4>
            <div class="title-sep-container">
                <div class="title-sep sep-double"><a href="<?php echo base_url(); ?>" class="view_more">Back to homepage</a></div>
            </div>
        </div>

        <div class="row px-2">

            <?php

            $no = $this->uri->segment(3)+1;
            foreach ($playlist->result_array() as $h):

                $total_video = $this->model_utama->view_where('video',array('id_playlist' => $h['id_playlist']))->num_rows();

                echo "<div class='col-lg-3 col-md-6 mb-4 mb-lg-0 px-2'>

                    <div class='post-item'>
                        <div class='fbt-post-thumbnail'>
                            <a href='".base_url()."playlist/detail/$h[playlist_seo]'>";
                                if ($h['gbr_playlist'] ==''){
                                    echo "<a href='".base_url()."playlist/detail/$h[playlist_seo]'><img class='post-thumbnail lazyloaded' src='".base_url()."asset/img_playlist/no-image.jpg' alt='no-image.jpg' /></a>";
                                }else{
                                    echo "<a href='".base_url()."playlist/detail/$h[playlist_seo]'><img class='post-thumbnail lazyloaded' src='".base_url()."asset/img_playlist/$h[gbr_playlist]' alt='$h[gbr_playlist]' /></a>";
                                }
                            echo "</a>
                            <span class='video-icon'><i class='fa fa-play'></i></span>
                        </div>
                        <div class='fbt-post-caption'>
                            <div class='title-caption text-center pt-3 px-2'>
                                <div class='post-meta mb-2'>
                                    <span class='post-date published'>Ada $total_video Video</span>
                                </div>
                                <h3 class='post-title'>
                                    <a href='".base_url()."playlist/detail/$h[playlist_seo]'>$h[jdl_playlist]</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>";

            endforeach;

            ?>



            
        </div>
    </div>
</div>