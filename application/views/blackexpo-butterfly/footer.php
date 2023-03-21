<div class="fbt-newsletter-area">
    <div class="fbt-bottom-section clearfix" id="fbt_bottom_section">

        <div class="widget FollowByEmail">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="follow-by-email-inner subscriber-form col-lg-12">
                        <div class="card-- py-5">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-6">
                                    <h2 class="title mb-4 mb-lg-0 text-center text-lg-left">
                                        Subscribe to our Newsletter!!!
                                    </h2>
                                </div>
                                <div class="ml-lg-auto col-lg-6">
                                    <form action="#" class="fbt-email-form" method="post">
                                        <input autocomplete="off" class="follow-by-email-address" name="email" placeholder="Enter your Email" type="email">
                                        <input class="follow-by-email-submit" type="submit" value="Subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="footer-dark footer-black pt-5" id="footer-content">
    <div class="container pb-4">
        <div class="row clearfix">
            <div class="col-lg-4">
                <div class="footer-1 section">
                    <div class="fbt_list_posts">

                        <?php

                        $r1y = $this->model_utama->view_where('kategori',array('sidebar' => 2))->row_array();

                        echo "<h4 class='title title-heading'>
                            $r1y[nama_kategori]
                        </h4>";

                        echo "<div class='widget-content'>";

                            $kategori2 = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.id_kategori' => $r1y['id_kategori'],'berita.status' => 'Y'),'id_berita','DESC',4,2);
                            foreach ($kategori2->result_array() as $r4m):

                                echo "<article class='post mb-3'>
                                    <div class='post-content media align-items-center'>
                                        <div class='fbt-item-thumbnail clearfix'>
                                            <a href='".base_url()."$r3m[judul_seo]'>";
                                                if ($r4m['gambar'] ==''):
                                                    echo "<img alt='$r4m[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                                else:
                                                    echo "<img alt='$r4m[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r4m[gambar]'>";
                                                endif;
                                            echo "</a>
                                        </div>
                                        <div class='ml-3 fbt-title-caption media-body'>
                                            <span class='pp-post-tag'>$r4m[nama_kategori]</span>
                                            <h3 class='post-title'>
                                                <a href='".base_url()."$r4m[judul_seo]'>
                                                    $r4m[judul]
                                                </a>
                                            </h3>
                                            <div class='post-meta'>
                                                <span class='post-date published'>".tgl_indo($r4m['tanggal'])."</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>";

                            endforeach;
                        
                        ?>

                        </div>
                    </div><!-- .fbt_list_posts -->
                </div>
            </div>
            <div class="col-lg-6 ml-lg-auto">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="footer-2 section">
                            <div class="logoImage">
                                <div class="widget-content">
                                    <img alt="" src="<?php echo base_url(); ?>template/<?php echo template(); ?>/images/logo-light.png">
                                </div>
                            </div>
                            <div class="widget Text">
                                <div class="widget-content">
                                    <p><?php
                                    $iden = $this->model_utama->view('identitas')->row_array();
                                    echo $iden['meta_deskripsi']; ?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="footer-5 section">
                            <div class="widget">
                                <h4 class="title title-heading">
                                    TAG
                                </h4>
                                <div class="widget-content list-label-widget-content">
                                    <?php
                                    
                                    $tag = $this->model_utama->view_ordering_limit('tag','id_tag','RANDOM',0,50);
                                    foreach ($tag->result_array() as $row):
                                        echo "<a class='badge badge-primary ml-2 mb-1' href='".base_url()."tag/detail/$row[tag_seo]' >$row[nama_tag]</a>";
                                    endforeach;

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="credits">
        <div class="container">
            <div class="row divider py-4">
                <div class="col-lg-6">
                    <div class="copyright-section text-center text-lg-left">
                        © <script>document.write(new Date().getFullYear());</script> Copyright <a href="http://mycoding.net" target="_blank">Mycoding.net</a> | All Rights Reserved
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-menu section" id="footer-menu">
                        <div class="widget socialList">
                            <div class="widget-content">
                                <?php
                                    $sosmed = $this->model_utama->view('identitas')->row_array();
                                    $pecahd = explode(",", $sosmed['facebook']);
                                ?>
                                <ul class="nav">
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
            </div>
        </div>
    </div>
</div><!-- #footer-content -->