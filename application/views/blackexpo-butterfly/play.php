<?php
$lihat = $rows['dilihat']+1;
$total_komentar = $this->model_utama->view_where('komentarvid',array('id_video' => $rows['id_video']))->num_rows();
?>  

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
                                        
                                        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $rows['youtube'], $match)):
                                            echo "<iframe class='post-thumbnail lazyloaded'  style='height:400px' src='https://www.youtube.com/embed/".$match[1]."' frameborder='0' allowfullscreen></iframe>";
                                        endif;
                                        
                                        ?>
                                    </div>
                                    <div class="fbt-item-caption mt-3">
                                        <h1 class="post-title"><?php echo $rows[jdl_video]; ?></h1>
                                        <div class="item-post-meta mt-3">
                                            <div class="post-meta mb-3">
                                                <span class="post-author"><?php echo "$rows[nama_lengkap]"; ?></span>
                                                <span class="post-date published"><?php echo tgl_indo($rows['tanggal']).", $rows[jam] WIB"; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-body post-content">
                                    <p><?php echo $rows['keterangan']; ?></p>
                                </div>
                                <div class="post-footer">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="row align-items-center my-4">
                                                <div class="col-xl-6 text-center text-xl-left mb-3 mb-xl-0">
                                                    <div class="post-labels">
                                                        <span class="mr-2">TAG:</span>
                                                        <span class="label-head Label">
                                                            <a href="<?php echo base_url()."playlist/detail/$rows[playlist_seo]"; ?>"><?php echo "$rows[jdl_playlist]"; ?></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 text-center text-xl-right">
                                                    <div id="share"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="fbt-rel-post-wrapper mb-5">
                                        <div class="title-wrap fbt-sep-title">
                                            <h4 class="title title-heading-left">Random Video</h4>
                                            <div class="title-sep-container">
                                                <div class="title-sep sep-double"></div>
                                            </div>
                                        </div>
                                        <div id="related-posts">
                                            <div class="row px-2">

                                                <?php

                                                $rvideo = $this->model_utama->view_ordering_limit('video','id_video','RANDOM',0,3);
                                                foreach ($rvideo->result_array() as $r2):

                                                    echo "<div class='col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4 rp-item px-2'>
                                                        <div class='fbt-post-thumbnail'>
                                                            <a href='".base_url()."$r2[judul_seo]'>";
                                                                if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $r2['youtube'], $match)):
                                                                    echo "<img alt='' class='post-thumbnail lazyloaded' src='https://img.youtube.com/vi/".$match[1]."/0.jpg'>";
                                                                endif;
                                                            echo "<span class='video-icon'><i class='fa fa-play'></i></span>
                                                            </a>
                                                        </div>
                                                        <div class='fbt-post-caption text-center mt-2 px-2'>
                                                            <h5>
                                                                <a href='".base_url()."playlist/watch/$r2[video_seo]'>$r2[jdl_video]</a>
                                                            </h5>
                                                        </div>
                                                    </div>";

                                                endforeach;      
                                                
                                                ?>
                                                

                                            </div>
                                        </div>
                                    </div><!-- .fbt-rel-post-wrapper -->

                                    <div class="row justify-content-center mt-n4">
                                        <div class="col-lg-12">
                                            <div class="blog-post-comments">
                                                <section class="comments embed" id="comments">
                                                    <div class="fbt-sep-title">
                                                        <h4 class="title title-heading-left">Komentar</h4>
                                                        <div class="title-sep-container">
                                                            <div class="title-sep sep-double"></div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-list--form" id="listcomment">
                                                        <div class="comment-list">


                                                            <?php

                                                            $komentar = $this->model_utama->view_where_ordering_limit('komentarvid',array('id_video' => $rows['id_video'],'aktif' => 'Y'),'id_video','ASC',0,100);

                                                            if($total_komentar < 1):
                                                                echo "<div class='alert alert-info text-info alert-dismissible fade show' role='alert'>
                                                                    BELUM ADA KOMENTAR UNTUK BERITA INI!
                                                                </div>";
                                                            endif;

                                                            foreach ($komentar->result_array() as $kka):
                                                                $isian=nl2br($kka['isi_komentar']);
                                                                $komentarku = sensor($isian);

                                                                $test = md5(strtolower(trim($kka['email']))); 
                                                                echo "<div class='media comment mb-4'>
                                                                    <a href='#' class='mr-4'>";
                                                                        if ($kka['email'] == ''):
                                                                            echo "<img style='width:64px;' src='".base_url()."asset/foto_user/blank.png'/>";
                                                                        else:
                                                                            echo "<img class='setborder' src='http://www.gravatar.com/avatar/$test.jpg?s=100'/>";
                                                                        endif;
                                                                    echo "</a>
                                                                    <div class='media-body'>
                                                                        <h5 class='mb-2'>$kka[nama_komentar]</h5>
                                                                        <p>$komentarku</p>
                                                                        
                                                                    </div>
                                                                </div>";
                                                            
                                                            endforeach;
                                                            
                                                            ?><!-- .comment -->

                                                            <div class="fbt-sep-title mt-5">
                                                                <h4 class="title title-heading-left">Tuliskan Komentar Anda!</h4>
                                                                <div class="title-sep-container">
                                                                    <div class="title-sep sep-double"></div>
                                                                </div>
                                                            </div>

                                                        </div><!-- .comment-list -->

                                                        <?php echo $this->session->flashdata('message'); ?>

                                                        <form action="<?php echo base_url(); ?>playlist/kirim_komentar" method="POST" id="form_komentar">
                                                            <input type="hidden" name='a' value='<?php echo "$rows[id_video]"; ?>'>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="name">Nickname *</label>
                                                                        <input type="text" placeholder="Nickname" value='<?php echo $us['nama_lengkap']; ?>' name='b' class="form-control shadow-none radius-0" required />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="mail">E-mail*</label>
                                                                        <input type="text" name='c' placeholder="E-mail" value='<?php echo $us['email']; ?>' class="form-control shadow-none radius-0" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="comment">Comment*</label>
                                                                        <textarea name='d' placeholder="Your message.." class="form-control shadow-none radius-0" rows="5" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <?php echo $image; ?>
                                                                </div>
                                                                <div class="col-md-6 ml-4">
                                                                    <input name='secutity_code' maxlength=6 type="text" class="form-control shadow-none radius-0" placeholder="Masukkkan kode di sebelah kiri.." style="width: 94%;">
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary radius-0 mt-3" type="submit" name="submit" id="submit-contact"  onclick="return confirm('Haloo, Pesan anda akan tampil setelah kami setujui?')"><i class="fa fa-comment"></i> Kirim Komentar</button>
                                                        </form>
                                                    </div>
                                                </section>
                                            </div><!-- .blog-post-comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- .fbt-item-post-wrap -->
                    </div>
                </div><!-- #main-wrapper -->

            </div><!-- .fbt-main-wrapper -->

            <div class="fbt-main-sidebar col-lg-4">
                <div class="fbt-main-sidebar__content h-100 pl-lg-3">
                    
                    <?php $this->load->view(template().'/widget/social-counter'); ?>

                    <?php $this->load->view(template().'/widget/berita-kategori'); ?>

                    <?php $this->load->view(template().'/widget/berita-popular'); ?>

                    <?php $this->load->view(template().'/iklan/sidebar-2'); ?>

                </div>    
            </div>
            <!-- .fbt-main-sidebar -->
        </div>
    </div>
</div>