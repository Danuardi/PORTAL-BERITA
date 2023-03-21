<div class="widget fbt_list_posts mb-5">
    <div class="fbt-sep-title">
        <h4 class="title title-heading-left">Berita Popular</h4>
        <div class="title-sep-container">
            <div class="title-sep sep-double"></div>
        </div>
    </div>
    <div class="widget-content">
        <?php

        $populer = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.status' => 'Y'),'dibaca','DESC',0,7);

        foreach ($populer->result_array() as $r2x):


            echo "<article class='post mb-3'>
                <div class='post-content media align-items-center'>
                    <div class='fbt-item-thumbnail clearfix'>
                        <a href='".base_url()."$r2x[judul_seo]'>";
                            if ($r2x['gambar'] ==''):
                                echo "<img alt='$r2x[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                            else:
                                echo "<img alt='$r2x[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r2x[gambar]'>";
                            endif;
                        echo "</a>
                    </div>
                    <div class='ml-3 fbt-title-caption media-body'>
                        <span class='pp-post-tag'>$r2x[nama_kategori]</span>
                        <h3 class='post-title'>
                            <a href='".base_url()."$r2x[judul_seo]'>$r2x[judul]</a>
                        </h3>
                        <div class='post-meta'>
                            <span class='post-date published'>".tgl_indo($r2x['tanggal'])."</span>
                        </div>
                    </div>
                </div>
            </article>";
        endforeach;

        ?>



        

    </div>
</div><!-- .fbt_list_posts -->