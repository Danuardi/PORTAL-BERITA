<div class="outer-wrapper my-5" id="outer-wrapper">

    <div class="container fbt-elastic-container">
        <div class="row justify-content-center">

            <!-- Main Wrapper -->
            <div class="fbt-main-wrapper col-lg-12 mb-5 mb-lg-0">

                <div id="main-wrapper">
                    <div class="main-section" id="main_content">
                        
                        <div class="blog-posts fbt-index-post-wrap">

                            <form class="form-inline" action="<?php echo base_url().'berita/indeks_berita' ?>" method="POST">
                                <div class="form-group m-r-10">
                                    <label for="exampleInputName2" class="mr-sm-2"><h5>Lihat Indeks Tanggal</h5></label>
                                    <select name="tanggal" class="form-control shadow-none radius-0 ml-3">
                                        <?php

                                        for($n=1; $n<=31; $n++){
                                            if (isset($_POST['filter'])){ $tgls = $_POST['tanggal']; }else{ $tgls = date("d"); }
                                            if ($tgls==$n){
                                                echo "<option value='$n' selected>$n</option>";
                                            }else{
                                                echo "<option value='$n'>$n</option>";
                                            }
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group m-r-10">
                                    <label for="exampleInputEmail2" class="mr-sm-2"></label>
                                    <select name="bulan" class="form-control shadow-none radius-0">
                                        <?php

                                        $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                        for($n=1; $n<=12; $n++){
                                            if (isset($_POST['filter'])){ $blns = $_POST['bulan']; }else{ $blns = date("n"); }
                                            if ($blns == $n){
                                                echo "<option value='$n' selected>$bln[$n]</option>";
                                            }else{
                                                echo "<option value='$n'>$bln[$n]</option>";
                                            }
                                        }
                                        
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group m-r-10">
                                    <label for="exampleInputEmail2" class="mr-sm-2"></label>
                                    <select name="tahun" class="form-control shadow-none radius-0">
                                        <?php

                                        for($n=2008; $n<=date('Y'); $n++){ 
                                            if (isset($_POST['filter'])){ $year = $_POST['tahun']; }else{ $year = date("Y"); }
                                            if ($year == $n){
                                                echo "<option value='$n' selected>$n</option>";
                                            }else{
                                                echo "<option value='$n'>$n</option>";
                                            }
                                        }
                                        
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" name="filter" class="btn btn-primary radius-0 ml-3">
                                    Lihat Indeks
                                </button>
                            </form>

                            <hr>

                            <div class="row">
                            <?php
                            
                                if (isset($_POST['filter'])){
                                    $bulan = strlen($_POST['bulan']);
                                    $tanggal = strlen($_POST['tanggal']);       
                                    if ($bulan <= 1){ $bulann = '0'.$_POST['bulan']; }else{ $bulann = $_POST['bulan']; }
                                    if ($tanggal <= 1){ $tanggall = '0'.$_POST['tanggal']; }else{ $tanggall = $_POST['tanggal']; }
                                    $fil = $_POST['tahun'].'-'.$bulann.'-'.$tanggall;
                                }else{
                                    $fil = date("Y-m-d");
                                }

                                $col = 5; 
                                $warna = array("red","blue","red","purple","orange","black","yellow","red","blue","green");
                                if ($record->num_rows() > 0) {
                                    
                                    $cnt = 0;
                                    foreach ($record->result_array() as $t) {
                                        $total = $this->model_utama->view_where('berita',array('id_kategori' => $t['id_kategori'],'tanggal' => $fil,'status' => 'Y'))->num_rows();
                                        if ($total >= 1){   
                                            if ($cnt >= $col){ echo "</tr><tr>"; $cnt = 0; } $cnt++;

                                                // echo "string";


                                                echo "<div class='col-md-6' style='margin-bottom:40px;'>

                                                    <div class='fbt-sep-title'>
                                                        <h4 class='title title-heading-left'>$t[nama_kategori]</h4>
                                                    </div>

                                                    <ul class='list-round'>";
                                                    $sql = $this->model_utama->view_where_ordering_limit('berita',array('id_kategori' => $t['id_kategori'],'tanggal' => $fil,'status' => 'Y'),'id_berita','DESC',0,5);
                                                    foreach($sql->result_array() as $r) {
                                                        $judul = substr($r['judul'],0,40); 
                                                        $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows();
                                                        echo "<li>
                                                        
                                                        <a style='color:#000;' title='$r[judul]' href='".base_url()."$r[judul_seo]'>$judul,..</a>

                                                        <a href='".base_url()."$r[judul_seo]'><i class='fa fa-comments-o'></i> $total_komentar</a>

                                                        <span class='post-date' style='color:#ff005b;'>".tgl_indo($r['tanggal'])."</span></li>";
                                                    }
                                                    echo "</ul>
                                                    <a href='".base_url()."kategori/detail/$t[kategori_seo]' class='btn btn-info btn-sm pt-0 pb-0'>Selengkapnya ...</a>
                                                </div>";
                                        }
                                    }
                                }
                            if ($hitung->num_rows()<1){
                                echo "<center style='padding:15%'>Maaf, Belum ada artikel yang diterbitkan pada hari ini (".tgl_indo($hari_ini).").</center>";
                            }
                            ?>
                            </div>

                        </div><!-- .fbt-index-post-wrap -->

                    </div>
                </div><!-- #main-wrapper -->

            </div><!-- .fbt-main-wrapper -->

        </div>
    </div>
</div>