<?php
    $tgl_posting   = tgl_indo($rows['tgl_posting']);
    $tgl_mulai   = tgl_indo($rows['tgl_mulai']);
    $tgl_selesai = tgl_indo($rows['tgl_selesai']);
    $isi_agenda=nl2br($rows['isi_agenda']);
    $baca = $rows['dibaca']+1;
?>  
<div class="outer-wrapper my-5" id="outer-wrapper">

    <div class="container fbt-elastic-container">
        <div class="row justify-content-center">

            <!-- Main Wrapper -->
            <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

                <div id="main-wrapper">
                    <div class="main-section" id="main_content">
                        
                        <div class="fbt-sep-title">
                            <h4 class="title title-heading-left"><?php echo "$rows[tema]"; ?></h4>
                            <div class="title-sep-container">
                                <div class="title-sep sep-double"><a href="<?php echo base_url(); ?>" class="view_more">Back to homepage</a></div>
                            </div>
                        </div>
                        
                        <div class="blog-posts fbt-index-post-wrap">

                            <?php

                            if ($rows['gambar'] ==''):
                                $foto_agenda = 'no-image.jpg';
                            else:
                                $foto_agenda = $r['gambar'];
                            endif;

                            echo "<img width='100%' src='".base_url()."asset/foto_agenda/$foto_agenda'><hr>
                                  <table>
                                  <tr><td valign='top' width=65px><b>Tema</b><br><br></td> <td valign='top' width=15px> : </td>   <td>$rows[isi_agenda]<br><br></td></tr>
                                  <tr><td><b>Tanggal</b></td>   <td> : </td> <td>$tgl_mulai s/d $tgl_selesai</td></tr>
                                  <tr><td><b>Tempat</b></td>    <td> : </td> <td>$rows[tempat]</td></tr>
                                  <tr><td><b>Jam</b></td>   <td> : </td> <td>$rows[jam]</td></tr>
                                  </table><br><br>";
                            

                            ?>

                        </div><!-- .fbt-index-post-wrap -->


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