<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.onertheme.com/tronix/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 00:36:33 GMT -->

<?php
    $this->load->view('user/head');
?>

<body>
    <div class="preloader"><button class="ot-btn preloaderCls style3">Cancel Preloader</button>
        <div class="preloader-inner"><span class="loader"></span></div>
    </div>


    <?php
        $this->load->view('user/menu');
    ?>


    <div class="blog-img" style=" display: flex; align-items: center; justify-content: center; height: 30vh; background-position: center; background-repeat: no-repeat; background-size: cover; ">
        <div style=" padding: 20px; border-radius: 10px; height: 100%;width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>

    <div class="space pt-0 pb-0" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mb-35 pt-4 mb-lg-0">
                    <p class="sec-text" style="font-size: 17px;"><b>Yogi Divine Society (UK)</b> is a trusted hindu spiritual and humanitarian charity organisation. With its vast network of centres and volunteers world-wide, the organisation has enabled hundreds of thousands of children, youth and families to lead a happy, peaceful and harmonious life.<br/><br/>Motivated by our faith in Lord Swaminarayan, Yogi Divine Society (UK) serves the global community alongside all people, regardless of religion, race, ethnicity, or gender.<br/><br/>Founded in 1974 by its spiritual head His Divine Holiness Guru Hariprasad Swamiji and actively operating in over 500 centres world-wide in countries like India, USA, Canada, Australia, New-Zealand, United Kingdom, Germany, France, South Africa, Kenya.</p>
                </div>
                <?php
                    foreach ($record as $key => $value) {
                ?>
                <div class="col-lg-4 mb-35 mb-lg-0">
                    <div style="padding: 60px 40px;">
                        <div class="title-area mb-37">
                            <h2 class="sec-title" style="text-align: center;"><?php echo $key; ?></h2>
                            <p class="sec-text" style="font-size: 17px;"><?php echo $value; ?></p>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>

    <?php
        $this->load->view('user/footer');
    ?>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <?php
        $this->load->view('user/script');
    ?>
</body>
<!-- Mirrored from html.onertheme.com/tronix/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 00:36:34 GMT -->

</html>