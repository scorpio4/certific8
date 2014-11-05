<section class="banner-main">
    <div class="container">
        <div class="headding-banner">
            <div class="text01">Career Acceleration for </div>
            <div class="text02">Certified Professionals</div>
            <div class="text03">Showcase your Skills. Find a job. Brand your Career. Get Promoted. Exceed your Expectations.</div>
        </div>
        <div class="banner">
            <div class="col-sm-11 non-col">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="video">
                            <div class="video-slider">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <iframe width="421" height="275" src="//www.youtube.com/embed/HzH39b8QPH8?rel=0" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/slide-2.jpg">
                                        </div>
                                        <div class="item">
                                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/slide-3.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <ul class="nav nav-tabs log-tab">
                            <li class="active"><a href="#register-tab" data-toggle="tab" onclick ='changeForm("register")'><strong>Register</strong></a></li>
                            <li><a href="#login-tab" data-toggle="tab" onclick ='changeForm("login")'><strong>Login</strong></a></li>
                        </ul>
                        <div class="tab-content mb30" id="form-type">
                            <?php $this->renderPartial('/user/register', array('model'=>$model)); ?> 
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>