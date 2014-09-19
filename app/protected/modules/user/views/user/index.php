<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="main" > 
    <div class="gradient">
        <div class="container"> 
            <div class="slogan">
                <h1>Career Acceleration for Certified Professionals </h1>
                <h2>Showcase your Skills. Find a job. Brand your Career. Get Promoted. Exceed your Expectations.</h2> 
            </div>
            <div class="video"> 
                <iframe width="500" height="380" src="//www.youtube.com/embed/HzH39b8QPH8?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div id="form-type">
                <?php $this->renderPartial('/user/register', array('model'=>$model)); ?>   
            </div>
        </div> 
    </div>
</div>
<div class="howitwork" >
    <div class="container"> 
        <div class="title"><h3>How it Works</h3></div>
        <div class="row">

            <!--###   Feature 1 ###-->
            <div class="col-sm-4 featu">
                <div class="icon"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/features1.png" class="ft1" alt="" />  </div>
                <h6> 1. Describe Yourself</h6>
                <p>  Your mini biography, certifications &amp; achievements. Beautifully presented.</p>
                <div class="step"><p>Step 1</p></div>
            </div> 
            <div class="col-sm-4 featu">
                <div class="icon"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/features2.png" class="ft1" alt="" />  </div>
                <h6> 2. Brand Your Career</h6>
                <p>  Send your Career eCard to peers, colleagues, recruiters and clients</p>
                <div class="step"><p>Step 2</p></div>
            </div> 
            <div class="col-sm-4 featu">
                <div class="icon"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icons/features3.png" class="ft1" alt="" />  </div>
                <h6> 3. Boost Your Career</h6>
                <p>  Ask a Career Coach or a Head Hunter. Discretely promote yourself.</p>
                <div class="step"><p>Step 3</p></div>
            </div> 
        </div>
    </div>
</div>
<div class="features" > 
    <div class="container">
        <div class="feature1">
            <h3>&quot;What does certific8.in do for me?&quot;</h3>
            <h6>We put you in control of your brand</h6>
            <ul>
                <li>Career Marketing - become the buyer not the seller</li>
                <li>Career Coaching - advice, planning and execution</li>
                <li>Head Hunting - search and select personalised opportunties</li>
                <li>Discounts and Offers - from us and our partners</li>
                <li>Video and Articles - professional, actionable advice</li>
            </ul>
        </div>
        <div class="feature2"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/mockup/vcard01.png" alt="" /> </div>

    </div>
</div>