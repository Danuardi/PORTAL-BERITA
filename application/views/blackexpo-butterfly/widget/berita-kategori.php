<div class="widget FeaturedPost mb-5">
    <?php
    
    $ra = $this->model_utama->view_where('kategori',array('sidebar' => 4))->row_array();

    echo "<div class='fbt-sep-title'>
        <h4 class='title title-heading-left'>$ra[nama_kategori]</h4>
        <div class='title-sep-container'>
            <div class='title-sep sep-double'></div>
        </div>
    </div>";

    
    $kategori2 = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.id_kategori' => $ra['id_kategori'],'berita.status' => 'Y'),'id_berita','DESC',0,1);
    foreach ($kategori2->result_array() as $r3m):
        $isi_berita = strip_tags($r3m['isi_berita']); 
        $isi = substr($isi_berita,0,150); 
        $isi = substr($isi_berita,0,strrpos($isi," "));

        echo "<div class='widget-content'>
            <div class='FeaturedPostContainer'>
                <div class='fbt-item-thumbnail'>
                    <a href='".base_url()."$r3m[judul_seo]'>";
                        if ($r3m['gambar'] ==''):
                            echo "<img alt='$r3m[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."asset/foto_berita/no-image.jpg'>";
                        else:
                            echo "<img alt='$r3m[judul]' class='post-thumbnail lazyloaded' data-src='".base_url()."/asset/foto_berita/$r3m[gambar]'>";
                        endif;
                    echo "</a>
                </div>
                <div class='fbt-title-section mt-3'>
                    <div class='post-meta mb-2'>
                        <span class='post-author'>$r3m[nama_lengkap]</span>
                        <span class='post-date published'>".tgl_indo($r3m['tanggal'])."</span>
                    </div>
                    <h3 class='post-title'>
                        <a href='".base_url()."$r3m[judul_seo]'>
                            $r3m[judul]
                        </a>
                    </h3>
                    <p class='post-excerpt'>
                        $isi
                    </p>
                </div>
            </div>
        </div>";

    endforeach;
    
    ?>
</div>