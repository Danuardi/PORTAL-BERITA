<div class="widget fbt-ad-block">
    <div class="fbt_ad text-center">
        <span class="fbt-ad-title">
            Advertisement <span class="ad_block"></span>
        </span>
        <div class="widget-content">

            <?php

            $iklanatas = $this->model_utama->view('iklanatas');

            foreach ($iklanatas->result_array() as $b):

                $string = $b['gambar'];
                if ($b['gambar'] != ''):
                    if(preg_match("/swf\z/i", $string)):
                        echo "<embed class=\"lazyloaded img-fluid\" src='".base_url()."asset/foto_iklanatas/$b[gambar]' type='application/x-shockwave-flash'>";
                    else:

                        echo "<a href='$b[url]' target='_blank'>
                            <img alt='$b[judul]' class='lazyloaded img-fluid' data-src='".base_url()."asset/foto_iklanatas/$b[gambar]'>
                        </a>";
                    endif;
                endif;
            endforeach;

            ?>
            
        </div>
    </div>
</div>
