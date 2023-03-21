<div class="sidebar-block fbt-social-counter mb-5">
    <div class="fbt-sep-title">
        <h4 class="title title-heading-left">Temukan Kami di</h4>
        <div class="title-sep-container">
            <div class="title-sep sep-double"></div>
        </div>
    </div>
    <div class="widget">
        <?php
            $sosmed = $this->model_utama->view('identitas')->row_array();
            $pecahd = explode(",", $sosmed['facebook']);
        ?>
        <ul class="social-list">
            <li class="social-item facebook fb">
                <a href="<?php echo $pecahd[0]; ?>">
                    <span class="soc-ic"><i class="item-icon fa fa-facebook"></i></span>
                    <span class="item-counter">2340</span>
                    <span class="item-text soc-btn">Fans</span>
                </a>
            </li>
            <li class="social-item twitter tw">
                <a href="<?php echo $pecahd[1]; ?>">
                    <span class="soc-ic"><i class="item-icon fa fa-twitter"></i></span>
                    <span class="item-counter">3290</span>
                    <span class="item-text soc-btn">Followers</span>
                </a>
            </li>
            <li class="social-item instagram instg">
                <a href="<?php echo $pecahd[2]; ?>">
                    <span class="soc-ic"><i class="item-icon fa fa-google"></i></span>
                    <span class="item-counter">5212</span>
                    <span class="item-text soc-btn">Followers</span>
                </a>
            </li>
            <li class="social-item delicious dl">
                <a href="<?php echo $pecahd[3]; ?>">
                    <span class="soc-ic"><i class="item-icon fa fa-linkedin"></i></span>
                    <span class="item-counter">214</span>
                    <span class="item-text soc-btn">Followers</span>
                </a>
            </li>
        </ul><!-- .social-list -->
    </div>
</div>