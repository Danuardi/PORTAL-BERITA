<div class="slider-container m-0 pt-5 pb-0">
    <div class="slider-container-row fbt-mag-slider" id="slider-posts">
        <div class="container-fluid px-xl-5">
            <div class="row">

                <?php
                $slide1 = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('headline' => 'Y','status' => 'Y'),'id_berita','DESC',0,4);
                $no=1;

                foreach ($slide1->result_array() as $row):
                    if ($row['gambar'] ==''):
                        $foto_slide = 'no-image.jpg';
                    else:
                        $foto_slide = $row['gambar'];
                    endif;

                    if($no == 1):
                        echo "<div class='col-lg-6 pr-lg-1 mb-2 mb-lg-0'>
                            <div class='post-item large'>
                                <div class='fbt-post-thumbnail'>
                                    <a href='".base_url()."$row[judul_seo]'>
                                        <img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/$foto_slide'>
                                    </a>
                                </div>
                                <div class='fbt-post-caption'>
                                    <span class='post-tag index-post-tag'>$row[nama_kategori]</span>
                                    <div class='title-caption p-4'>
                                        <div class='post-meta mb-2'>
                                            <span class='post-author'>$row[nama_lengkap]</span>
                                            <span class='post-time'>".tgl_indo($row['tanggal'])."</span>
                                        </div>
                                        <h1 class='post-title w-75'>
                                            <a href='".base_url()."$row[judul_seo]'>
                                                $row[judul]
                                            </a>
                                        </h1>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>";
                    endif; 
                    $no++;
                endforeach;
                
                ?>

                <div class="col-lg-6">
                    <div class="row">

                        <?php
                        $no=1;
                        foreach ($slide1->result_array() as $row):
                            if ($row['gambar'] ==''):
                                $foto_slide = 'no-image.jpg';
                            else:
                                $foto_slide = $row['gambar'];
                            endif;

                            if($no==2):

                                echo "<div class='col-md-6 pl-lg-1 pr-md-1 mb-2 mb-md-0'>
                                    <div class='post-item medium'>
                                        <div class='fbt-post-thumbnail'>
                                            <a href='".base_url()."$row[judul_seo]'>
                                                <img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/$foto_slide'>
                                            </a>
                                        </div>
                                        <div class='fbt-post-caption'>
                                            <span class='post-tag index-post-tag'>$row[nama_kategori]</span>
                                            <div class='title-caption p-4'>
                                                <div class='post-meta mb-2'>
                                                    <span class='post-author'>$row[nama_lengkap]</span>
                                                    <span class='post-time'>".tgl_indo($row['tanggal'])."</span>
                                                </div>
                                                <h3 class='post-title'>
                                                    <a href='".base_url()."$row[judul_seo]'>
                                                        $row[judul]
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                            endif; 
                            $no++;
                        endforeach;

                        ?>

                        

                        <div class="col-md-6">
                            <div class="row">

                                <?php
                                
                                $no=1;
                                foreach ($slide1->result_array() as $row):
                                    if ($row['gambar'] ==''):
                                        $foto_slide = 'no-image.jpg';
                                    else:
                                        $foto_slide = $row['gambar'];
                                    endif;

                                    if($no==3):

                                        echo "<div class='col-6 col-md-12 pl-md-1 grid-padding-right'>
                                            <div class='post-item small_thumb'>
                                                <div class='fbt-post-thumbnail'>
                                                    <a href='".base_url()."$row[judul_seo]'>
                                                        <img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/$foto_slide'>
                                                    </a>
                                                </div>
                                                <div class='fbt-post-caption'>
                                                    <span class='post-tag index-post-tag'>$row[nama_kategori]</span>
                                                    <div class='title-caption p-4'>
                                                        <div class='post-meta mb-2'>
                                                            <span class='post-author'>$row[nama_lengkap]</span>
                                                            <span class='post-time'>".tgl_indo($row['tanggal'])."</span>
                                                        </div>
                                                        <h3 class='post-title h5'>
                                                            <a href='".base_url()."$row[judul_seo]'>
                                                                $row[judul]
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>";
                                    elseif($no >=4):
                                        echo "<div class='col-6 col-md-12 pl-md-1 grid-padding-left'>
                                            <div class='post-item small_thumb last'>
                                                <div class='fbt-post-thumbnail'>
                                                    <a href='".base_url()."$row[judul_seo]'>
                                                        <img class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/$foto_slide'>
                                                    </a>
                                                </div>
                                                <div class='fbt-post-caption'>
                                                    <span class='post-tag index-post-tag'>$row[nama_kategori]</span>
                                                    <div class='title-caption p-4'>
                                                        <div class='post-meta mb-2'>
                                                            <span class='post-author'>$row[nama_lengkap]</span>
                                                            <span class='post-time'>".tgl_indo($row['tanggal'])."</span>
                                                        </div>
                                                        <h3 class='post-title h5'>
                                                            <a href='".base_url()."$row[judul_seo]'>
                                                                $row[judul]
                                                            </a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>";
                                    endif; 
                                    $no++;
                                endforeach;

                                ?>
                                
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div><!-- .slider-container -->

<div class="outer-wrapper my-5" id="outer-wrapper">

    <div class="container fbt-elastic-container">
        <div class="row justify-content-center">
            
            <div class="fbt-magazine-section col-lg-8 mb-5 mb-lg-0">

                <div class="widget fbt-block-1">
                    <div class="fbt-sep-title">
                        <h4 class="title title-heading-left">Berita Utama</h4>
                        <div class="title-sep-container">
                            <div class="title-sep sep-double">
                                <a href="<?php echo base_url(); ?>berita/indeks_berita" class="view_more">+ Indexs Berita</a>
                            </div>
                        </div>
                    </div>
                    <div class="fbt_mag_block fbt_list_posts">
                        <?php
                        
                        $no = 1;
                        $hot = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('utama' => 'Y','status' => 'Y'),'id_berita','DESC',0,4);
                        foreach ($hot->result_array() as $row):
                            $isi_berita = strip_tags($row['isi_berita']); 
                            $isi = substr($isi_berita,0,150); 
                            $isi = substr($isi_berita,0,strrpos($isi," "));
                            if ($no==1):
                                echo "<div class='fbt-large'>
                                    <div class='row align-items-center justify-content-between'>
                                        <div class='col-xl-6 col-md-5'>
                                            <div class='fbt-post-thumbnail'>
                                                <a href='".base_url()."$row[judul_seo]'>";
                                                    if ($row['gambar'] ==''):
                                                        echo "<img alt='$row[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                                    else:
                                                        echo "<img alt='$row[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$row[gambar]'>";
                                                    endif;
                                                echo "</a>
                                            </div>
                                        </div>
                                        <div class='col-xl-6 col-md-7'>
                                            <div class='fbt-post-caption text-center p-4 p-md-0 pr-md-4'>
                                                <span class='post-tag index-post-tag'>$row[nama_kategori]</span>
                                                <h3 class='post-title'>
                                                    <a href='".base_url()."$row[judul_seo]'>
                                                        $row[judul]
                                                    </a>
                                                </h3>
                                                <div class='post-meta mb-2'>
                                                    <span class='post-author'>$row[nama_lengkap]</span>
                                                    <span class='post-date published'>".tgl_indo($row['tanggal'])."</span>
                                                </div>
                                                <p class='post-excerpt'>
                                                    $isi                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                            endif;
                            $no++;
                        endforeach;

                        ?><!-- .fbt-large-->

                        <div class="fbt-small">
                            <div class="row px-2">

                                <?php
                                $no=1;
                                foreach ($hot->result_array() as $row):
                                    if (strlen($row['judul']) > 50):
                                        $judul = substr($row['judul'],0,50);
                                        $judul = substr($row['judul'],0,strrpos($judul," ")).' ...';
                                    else:
                                        $judul = $row['judul'];
                                    endif;

                                    if ($no>=2):

                                        echo "<div class='post col-md-4 mb-4 px-2'>
                                            <div class='fbt-post-thumbnail'>
                                                <a href='".base_url()."$row[judul_seo]'>";
                                                    if ($row['gambar'] ==''):
                                                        echo "<img alt='$row[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                                    else:
                                                        echo "<img alt='$row[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$row[gambar]'>";
                                                    endif;
                                                echo "</a>
                                            </div>
                                            <div class='fbt-title-caption text-center pt-3 px-2'>
                                                <div class='post-meta mb-2'>
                                                    <span class='post-author'>$row[nama_lengkap]</span>
                                                    <span class='post-date published'>".tgl_indo($row['tanggal'])."</span>
                                                </div>
                                                <h3 class='post-title'>
                                                    <a href='".base_url()."$row[judul_seo]'>
                                                        $judul
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>";
                                    endif;
                                    $no++;
                                endforeach;
                                ?>
                                
                            </div>
                        </div><!-- .fbt-small -->

                    </div>
                </div><!-- .fbt-block-1 -->

                <div class="widget fbt-block-2">
                    <?php
                    $r = $this->model_utama->view_where('kategori',array('sidebar' => 1))->row_array();
                    echo "<div class='fbt-sep-title'>
                        <h4 class='title title-heading-left'>$r[nama_kategori]</h4>
                        <div class='title-sep-container'>
                            <div class='title-sep sep-double'>
                                <a href='".base_url()."kategori/detail/$r[kategori_seo]' class='view_more'>Lihat Semua</a>
                            </div>
                        </div>
                    </div>";
                    ?>
                    
                    <div class="fbt_mag_block">
                        <div class="row">
                            
                            <div class="col-lg-6 fbt_list_posts">

                                <?php

                                $kategori1 = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.id_kategori' => $r['id_kategori'],'berita.status' => 'Y'),'id_berita','DESC',0,9);

                                $no=1;
                                foreach ($kategori1->result_array() as $r1):
                                    if(($no >= 1) AND ($no <= 4)  ):
                                        echo "<article class='post mb-3'>
                                            <div class='post-content media align-items-center'>
                                                <div class='fbt-item-thumbnail clearfix'>
                                                    <a href='".base_url()."$r1[judul_seo]'>";
                                                        if ($r1['gambar'] ==''):
                                                            echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                                        else:
                                                            echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r1[gambar]'>";
                                                        endif;
                                                    echo "</a>
                                                </div>
                                                <div class='ml-3 fbt-title-caption media-body'>
                                                    <span class='pp-post-tag'>$r1[nama_kategori]</span>
                                                    <h3 class='post-title'>
                                                        <a href='".base_url()."$r1[judul_seo]'>$r1[judul]</a>
                                                    </h3>
                                                    <div class='post-meta'>
                                                        <span class='post-date published'>".tgl_indo($r1['tanggal'])."</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>";
                                    endif;
                                    
                                    $no++;
                                endforeach;

                                ?>
                            </div><!-- .fbt_list_posts -->
                            <div class="col-lg-6">

                                <?php
                                
                                $no=1;
                                foreach ($kategori1->result_array() as $r1):
                                    if($no==5 ):

                                        echo "<div class='post-item large'>
                                
                                            <div class='fbt-post-thumbnail'>
                                                <a href='".base_url()."$r1[judul_seo]'>";
                                                    if ($r1['gambar'] ==''):
                                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                                    else:
                                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r1[gambar]'>";
                                                    endif;
                                                echo "</a>
                                            </div>
                                            <div class='fbt-post-caption'>
                                                <span class='post-tag index-post-tag'>$r1[nama_kategori]</span>
                                                <div class='title-caption p-4'>
                                                    <div class='post-meta mb-2'>
                                                        <span class='post-author'>$r1[nama_lengkap]</span>
                                                        <span class='post-date published'>".tgl_indo($r1['tanggal'])."</span>
                                                    </div>
                                                    <h3 class='post-title'>
                                                        <a href='".base_url()."$r1[judul_seo]'>
                                                            $r1[judul]
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                            
                                        </div>";
                                    endif;
                                    
                                    $no++;
                                endforeach;

                                ?>

                                
                            </div>
                        </div>
                    </div>
                </div><!-- .fbt-block-2 -->

            </div><!-- .fbt-magazine-section -->

            <div class="fbt-main-sidebar col-lg-4">
                <div class="fbt-main-sidebar__content h-100 pl-lg-3">
                    
                    <?php $this->load->view(template().'/widget/social-counter'); ?>

                    <?php $this->load->view(template().'/iklan/sidebar-1'); ?>

                    

                </div>    
            </div>
            <!-- .fbt-magazine-sidebar -->

        </div>
    </div>

    <div class="fbt-gallery mb-5">
        <div class="container fbt-elastic-container fbt-gallery-1">
            <div class="row px-2">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 px-2">

                    <?php
                    
                    $no=1;
                    foreach ($kategori1->result_array() as $r1):
                        
                        if($no==6 ):

                            echo "<div class='post-item'>
                            <div class='fbt-post-thumbnail'>
                                <a href='".base_url()."$r1[judul_seo]'>";
                                    if ($r1['gambar'] ==''):
                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                    else:
                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r1[gambar]'>";
                                    endif;
                                echo "</a>
                                
                            </div>
                            <div class='fbt-post-caption'>
                                <div class='title-caption text-center pt-3 px-2'>
                                    <div class='post-meta mb-2'>
                                        <span class='post-author'>$r1[nama_lengkap]</span>
                                        <span class='post-date published'>".tgl_indo($r1['tanggal'])."</span>
                                    </div>
                                    <h3 class='post-title'>
                                        <a href='".base_url()."$r1[judul_seo]'>
                                            $r1[judul]
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>";

                        endif;
                        
                        $no++;
                    endforeach;

                    ?>

                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 px-2">
                    
                    <?php
                    
                    $no=1;
                    foreach ($kategori1->result_array() as $r1):
                        
                        if($no==7 ):

                            echo "<div class='post-item'>
                            <div class='fbt-post-thumbnail'>
                                <a href='".base_url()."$r1[judul_seo]'>";
                                    if ($r1['gambar'] ==''):
                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                    else:
                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r1[gambar]'>";
                                    endif;
                                echo "</a>
                                
                            </div>
                            <div class='fbt-post-caption'>
                                <div class='title-caption text-center pt-3 px-2'>
                                    <div class='post-meta mb-2'>
                                        <span class='post-author'>$r1[nama_lengkap]</span>
                                        <span class='post-date published'>".tgl_indo($r1['tanggal'])."</span>
                                    </div>
                                    <h3 class='post-title'>
                                        <a href='".base_url()."$r1[judul_seo]'>
                                            $r1[judul]
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>";

                        endif;
                        
                        $no++;
                    endforeach;

                    ?>

                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 px-2">
                    
                    <?php
                    
                    $no=1;
                    foreach ($kategori1->result_array() as $r1):
                        
                        if($no==8 ):

                            echo "<div class='post-item'>
                            <div class='fbt-post-thumbnail'>
                                <a href='".base_url()."$r1[judul_seo]'>";
                                    if ($r1['gambar'] ==''):
                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                    else:
                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r1[gambar]'>";
                                    endif;
                                echo "</a>
                                
                            </div>
                            <div class='fbt-post-caption'>
                                <div class='title-caption text-center pt-3 px-2'>
                                    <div class='post-meta mb-2'>
                                        <span class='post-author'>$r1[nama_lengkap]</span>
                                        <span class='post-date published'>".tgl_indo($r1['tanggal'])."</span>
                                    </div>
                                    <h3 class='post-title'>
                                        <a href='".base_url()."$r1[judul_seo]'>
                                            $r1[judul]
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>";

                        endif;
                        
                        $no++;
                    endforeach;

                    ?>

                </div>
                <div class="col-lg-3 col-md-6 px-2">
                    
                    <?php
                    
                    $no=1;
                    foreach ($kategori1->result_array() as $r1):
                        
                        if($no==9 ):

                            echo "<div class='post-item'>
                            <div class='fbt-post-thumbnail'>
                                <a href='".base_url()."$r1[judul_seo]'>";
                                    if ($r1['gambar'] ==''):
                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                    else:
                                        echo "<img alt='$r1[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r1[gambar]'>";
                                    endif;
                                echo "</a>
                                
                            </div>
                            <div class='fbt-post-caption'>
                                <div class='title-caption text-center pt-3 px-2'>
                                    <div class='post-meta mb-2'>
                                        <span class='post-author'>$r1[nama_lengkap]</span>
                                        <span class='post-date published'>".tgl_indo($r1['tanggal'])."</span>
                                    </div>
                                    <h3 class='post-title'>
                                        <a href='".base_url()."$r1[judul_seo]'>
                                            $r1[judul]
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>";

                        endif;
                        
                        $no++;
                    endforeach;

                    ?>
                        
                </div>
            </div>
        </div>
    </div><!-- .fbt-gallery -->

    <div class="fbt-video-gallery mb-5">
        <div class="container fbt-elastic-container fbt-gallery-2">
            <h4 class="title title-heading h2">
                Video
            </h4>
            <div class="row">
                <div class="fbt-main-gallery col-lg-8 mb-4 mb-lg-0">
                    <?php

                    $no=1;
                    $video = $this->model_utama->view_ordering_limit('video','id_video','DESC',0,5);
                    foreach ($video->result_array() as $vrow):
                        
                        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $vrow['youtube'], $match)):
                            $id_video = $match[1];
                         endif;

                        if($no==1):
                            echo "<div class='post-item large'>
                                
                                <div class='fbt-post-thumbnail'>
                                    <a href='".base_url()."playlist/watch/$vrow[video_seo]'>
                                        <img alt='' class='post-thumbnail lazyloaded' src='https://img.youtube.com/vi/$id_video/0.jpg' style=''>
                                    <span class='video-icon'><i class='fa fa-play'></i></span>
                                    </a>
                                </div>
                                <div class='fbt-post-caption'>
                                    <div class='title-caption p-4'>
                                        <div class='post-meta mb-2'>
                                            <span class='post-author'>";
                                                $nama = $this->model_utama->view_where('users',array('username' => $vrow['username']))->row_array();
                                                echo $nama['nama_lengkap'];
                                            echo "</span>
                                            <span class='post-date published'>".tgl_indo($vrow['tanggal'])."</span>
                                        </div>
                                        <h3 class='post-title h1 w-75'>
                                            <a href='".base_url()."playlist/watch/$vrow[video_seo]'>
                                                $vrow[jdl_video]
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                
                            </div>";
                        endif;
                        $no++;
                    endforeach;

                    ?>
                </div>
                <div class="col-lg-4 fbt_list_posts">
                    <div class="post-content pl-lg-3">
                        <?php

                        $no=1;
                        foreach ($video->result_array() as $vrow):
                            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $vrow['youtube'], $match)):
                                $id_video = $match[1];
                            endif;


                            if($no > 1):
                                echo "<article class='post mb-3'>
                                    <div class='post-content media align-items-center'>
                                        <div class='fbt-item-thumbnail clearfix'>
                                            <a href='".base_url()."playlist/watch/$vrow[video_seo]'>
                                                <img alt='' class='post-thumbnail lazyloaded' src='https://img.youtube.com/vi/$id_video/0.jpg' style=''>
                                                <span class='video-icon'><i class='fa fa-play'></i></span>
                                            </a>
                                        </div>

                                        <div class='ml-3 fbt-title-caption media-body'>
                                            <div class='post-meta mb-2'>
                                                <span class='post-author' style='color:#fff;'>";
                                                    $nama = $this->model_utama->view_where('users',array('username' => $vrow['username']))->row_array();
                                                    echo $nama['nama_lengkap'];
                                                echo "</span>
                                                <span class='post-date published' style='color:#fff;'>".tgl_indo($vrow['tanggal'])."</span>
                                            </div>
                                            <h3 class='post-title'>
                                                <a href='".base_url()."playlist/watch/$vrow[video_seo]'>
                                                    $vrow[jdl_video]
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                </article>";
                            endif;

                            $no++;
                        endforeach;

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- .fbt-video-gallery -->

    <div class="fbt-gallery mb-5">
        <div class="container fbt-elastic-container fbt-gallery-1">
            <div class="row px-2">

                <?php

                $ra = $this->model_utama->view_where('kategori',array('sidebar' => 2))->row_array();
                $kategori2 = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.id_kategori' => $ra['id_kategori'],'berita.status' => 'Y'),'id_berita','DESC',0,4);
                foreach ($kategori2->result_array() as $r1m):
                    

                    echo "<div class='col-lg-3 col-md-6 mb-4 mb-lg-0 px-2'>

                        <div class='post-item'>
                            <div class='fbt-post-thumbnail'>
                                <a href='".base_url()."$r1m[judul_seo]'>";
                                    if ($r1m['gambar'] ==''):
                                        echo "<img alt='$r1m[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                    else:
                                        echo "<img alt='$r1m[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r1m[gambar]'>";
                                    endif;
                                echo "</a>
                            </div>
                            <div class='fbt-post-caption'>
                                <div class='title-caption text-center pt-3 px-2'>
                                    <div class='post-meta mb-2'>
                                        <span class='post-author'>
                                            $r1m[nama_lengkap]
                                        </span>
                                        <span class='post-date published'>".tgl_indo($r1m['tanggal'])."</span>
                                    </div>
                                    <h3 class='post-title'>
                                        <a href='".base_url()."$r1m[judul_seo]'>
                                            $r1m[judul]
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>";
                endforeach;
                
                ?>
            </div>
        </div>
    </div><!-- .fbt-gallery -->

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
                            <h4 class="title title-heading-left">Berita Terbaru</h4>
                            <div class="title-sep-container">
                                <div class="title-sep sep-double"></div>
                            </div>
                        </div>
                        
                        <div class="blog-posts fbt-index-post-wrap">

                            <?php
                            
                            $terbaru = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.status' => 'Y'),'id_berita','DESC',0,7);
                            foreach ($terbaru->result_array() as $r2x):
                                $isi_berita = strip_tags($r2x['isi_berita']); 
                                $isi = substr($isi_berita,0,150); 
                                $isi = substr($isi_berita,0,strrpos($isi," "));
                                
                                echo "<div class='fbt_magazine-blog-post fbt-index-post row align-items-center justify-content-between'>
                                    <div class='col-xl-6 col-md-5'>
                                        <div class='fbt-post-thumbnail'>
                                            <a href='".base_url()."$r2x[judul_seo]'>";
                                                if ($r2x['gambar'] ==''):
                                                    echo "<img alt='$r2x[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                                                else:
                                                    echo "<img alt='$r2x[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r2x[gambar]'>";
                                                endif;
                                            echo "</a>
                                        </div>
                                    </div>
                                    <div class='col-xl-6 col-md-7'>
                                        <div class='fbt-post-caption mt-3 mt-md-0'>
                                            <span class='post-tag index-post-tag'>$r2x[nama_kategori]</span>
                                            <h3 class='post-title'>
                                                <a href='".base_url()."$r2x[judul_seo]'>
                                                    $r2x[judul]
                                                </a>
                                            </h3>
                                            <div class='post-meta mb-2'>
                                                <span class='post-author'>$r2x[nama_lengkap]</span>
                                                <span class='post-date published'>".tgl_indo($r2x['tanggal'])."</span>
                                            </div>
                                            <p class='post-excerpt'>
                                                $isi …
                                            </p>
                                        </div>
                                    </div>
                                </div>";

                            endforeach;

                            ?>

                        </div><!-- .fbt-index-post-wrap -->

                    </div>
                </div><!-- #main-wrapper -->

            </div><!-- .fbt-main-wrapper -->

            <div class="fbt-main-sidebar col-lg-4">
                <div class="fbt-main-sidebar__content h-100 pl-lg-3">
                    
                    <?php $this->load->view(template().'/widget/berita-kategori'); ?>

                    <?php $this->load->view(template().'/widget/berita-popular'); ?>

                    <?php $this->load->view(template().'/iklan/sidebar-2'); ?>

                </div>    
            </div>
            <!-- .fbt-main-sidebar -->

        </div>
    </div>
</div><!-- .outer-wrapper -->

