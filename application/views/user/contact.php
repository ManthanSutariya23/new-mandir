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
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <!-- <div class="col-lg-1 mb-35 mb-lg-0 pt-5"></div> -->
            
            <?php
                // foreach ($record as $key => $value) {
            ?>
            <div class="col-lg-4 mb-35 mb-lg-0 pt-5" style="">
                <div class="blog-img" style="height: 400px; background-image: url('<?php echo base_url(); ?>user-assets/img/contact/aarti.jpeg'); display: flex; align-items: center; justify-content: center; border-radius: 20px; background-position: center; background-repeat: no-repeat; background-size: cover; ">
                    <div style="background-color: rgb(42 42 42 / 0.8); border-radius: 20px; padding: 20px; height: 100%;width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                        <div style="padding: 30px 0px;">
                            <h3 class="under-line mb-4 pb-1">Arti Timing</h3>
                            <h5 class="text-white">Shangar Aarti 7:15 AM</h5>
                            <h5 class="text-white">Sandhya Aarti 6:30 PM</h5>
                            <h5 class="text-white">Shayan Aarti 8:20 PM</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-1 mb-35 mb-lg-0 pt-5"></div> -->

            <div class="col-lg-4 mb-35 mb-lg-0 pt-5" style="">
                <div class="blog-img" style="height: 400px; background-image: url('<?php echo base_url(); ?>user-assets/img/contact/darshan.jpeg'); display: flex; align-items: center; justify-content: center; border-radius: 20px; background-position: center; background-repeat: no-repeat; background-size: cover; ">
                    <div style="background-color: rgb(42 42 42 / 0.8); border-radius: 20px; padding: 20px; height: 100%;width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                        <div style="padding: 30px 0px;">
                            <h3 class="under-line mb-4 pb-1">Darshan Timing</h3>
                            <h5 class="text-white">Morning 7:15 AM to 10:30 AM</h5>
                            <h5 class="text-white">Afternoon 11:30 AM to 1:00 PM</h5>
                            <h5 class="text-white">Evening 4:00 PM to 7:00 PM</h5>
                            <h5 class="text-white">Night 7:30 PM to 8:30 PM</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-1 mb-35 mb-lg-0 pt-5"></div> -->

            <div class="col-lg-4 mb-35 mb-lg-0 pt-5" style="">
                <div class="blog-img" style="height: 400px; background-image: url('<?php echo base_url(); ?>user-assets/img/contact/thal.jpeg'); display: flex; align-items: center; justify-content: center; border-radius: 20px; background-position: center; background-repeat: no-repeat; background-size: cover; ">
                    <div style="background-color: rgb(42 42 42 / 0.8); border-radius: 20px; padding: 20px; height: 100%;width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
                        <div style="padding: 30px 0px;">
                            <h3 class="under-line mb-4 pb-1">Thal Timing</h3>
                            <h5 class="text-white">(Darshan closed during Thaal)</h5>
                            <h5 class="text-white">Afternoon Thaal – 10:30 AM to 11:30 AM</h5>
                            <h5 class="text-white">Evening Thaal – 7:00 PM to 7:30 PM</h5>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                // }
            ?>
        </div>
    </div>

    <div class="space-bottom pt-5" id="contact-sec">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 mt-40 mt-xl-0">
                    <div class="contact-form1" data-bg-src="assets/img/bg/contact_bg_2.png">
                        <h3 class="box-title">Fill The Contact Form</h3>
                        <p class="box-text">Feel free to contact with us, we don’t spam your email</p>
                        <form action="https://html.onertheme.com/tronix/mail.php" method="POST"
                            class="input-label ajax-contact">
                            <div class="row">
                                <div class="form-group line-input col-sm-6"><input type="text" class="form-control"
                                        name="name" id="name" required=""> <label for="name">Your Name*</label></div>
                                <div class="form-group line-input col-sm-6"><input type="email" class="form-control"
                                        name="email" id="email" required=""> <label for="email">Your Email*</label>
                                </div>
                                <div class="form-group line-input col-sm-6"><input type="tel" class="form-control"
                                        name="number" id="number" required=""> <label for="number">Phone Number*</label>
                                </div>
                                <div class="form-group line-input col-sm-6"><input type="text" class="form-control"
                                        name="subject" id="subject" required=""> <label for="subject">Subject...</label>
                                </div>
                                <div class="form-group line-input col-12"><textarea name="message" id="message"
                                        cols="30" rows="3" class="form-control" required=""></textarea> <label
                                        for="message">Your Message*</label></div>
                                <div class="form-btn col-12 mt-10"><button class="ot-btn style3">Send</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
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