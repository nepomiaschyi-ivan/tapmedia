<?php

/* @var $this yii\web\View */
use yii\bootstrap\Modal;
use yii\helpers\Html;

/* @var $model \app\models\ClientData */

$this->title = 'Tapmedia';
?>

<section class="section-wrapper section-wrapper--first">
    <div id="background-video-wrapper">
        <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid"  playsinline autoplay muted loop>
            <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
            <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
        </video>
    </div>

    <div class="text-wrapper">
        <h1 id="page-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</h1>
        <p class="main-sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid beatae culpa fuga, id reiciendis sequi suscipit.</p>
        <button class="btn btn-main">Find out more</button>
    </div>
</section>

<section class="section-wrapper section-wrapper--second">
    <div class="container">
        <div class="row">
            <article class="col-md-4 col-sm-6 exp-wrapper wow fadeIn" data-wow-duration=".4s" data-wow-delay="0">
                <span class="icon-wrapper">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </span>
                <h2 class="exp-title">Lorem ipsum.</h2>
                <p class="exp-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, laudantium!</p>
            </article>
            <article class="col-md-4 col-sm-6 exp-wrapper wow fadeIn" data-wow-duration=".4s" data-wow-delay=".2s">
                <span class="icon-wrapper">
                    <i class="fa fa-television" aria-hidden="true"></i>
                </span>
                <h2 class="exp-title">Lorem ipsum.</h2>
                <p class="exp-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, unde.</p>
            </article>
            <article class="col-md-4 col-sm-6 exp-wrapper wow fadeIn" data-wow-duration=".4s" data-wow-delay=".4s">
                <span class="icon-wrapper">
                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                </span>
                <h2 class="exp-title">Lorem ipsum.</h2>
                <p class="exp-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, quibusdam.</p>
            </article>
            <article class="col-md-4 col-sm-6 exp-wrapper wow fadeIn" data-wow-duration=".4s" data-wow-delay=".6s">
                <span class="icon-wrapper">
                    <i class="fa fa-empire" aria-hidden="true"></i>
                </span>
                <h2 class="exp-title">Lorem ipsum.</h2>
                <p class="exp-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, mollitia?</p>
            </article>
            <article class="col-md-4 col-sm-6 exp-wrapper wow fadeIn" data-wow-duration=".4s" data-wow-delay=".8s">
                <span class="icon-wrapper">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                </span>
                <h2 class="exp-title">Lorem ipsum.</h2>
                <p class="exp-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, possimus.</p>
            </article>
            <article class="col-md-4 col-sm-6 exp-wrapper wow fadeIn" data-wow-duration=".4s" data-wow-delay="1s">
                <span class="icon-wrapper">
                    <i class="fa fa-cloud" aria-hidden="true"></i>
                </span>
                <h2 class="exp-title">Lorem ipsum.</h2>
                <p class="exp-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, optio.</p>
            </article>
        </div>
    </div>
</section>

<section class="section-wrapper section-wrapper--third">
    <div class="row">
        <div class="col-md-3 col-sm-6 without-padding project-wrapper">
            <img src="http://i.dailymail.co.uk/i/pix/2016/09/06/11/37F60FD200000578-0-image-a-5_1473156426673.jpg" alt="">
            <div class="project-description-wrapper">
                <div class="text-wrapper">
                    <p class="project-label">Project name</p>
                    <h2 class="project-name">Lorem ipsum.</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 without-padding project-wrapper">
            <img src="http://miriadna.com/desctopwalls/images/max/Rock-beach.jpg" alt="">
            <div class="project-description-wrapper">
                <div class="text-wrapper">
                    <p class="project-label">Project name</p>
                    <h2 class="project-name">Lorem ipsum.</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 without-padding project-wrapper">
            <img src="https://i.pinimg.com/736x/3c/0c/79/3c0c79f21debd9d2f9c27e4b6d965797--web-design-company-web-images.jpg" alt="">
            <div class="project-description-wrapper">
                <div class="text-wrapper">
                    <p class="project-label">Project name</p>
                    <h2 class="project-name">Lorem ipsum.</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 without-padding project-wrapper">
            <img src="https://cdn.thinglink.me/api/image/584452709734678531/1240/10/scaletowidth" alt="">
            <div class="project-description-wrapper">
                <div class="text-wrapper">
                    <p class="project-label">Project name</p>
                    <h2 class="project-name">Lorem ipsum.</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 without-padding project-wrapper">
            <img src="https://rstorage.filemobile.com/storage/25552517/1085" alt="">
            <div class="project-description-wrapper">
                <div class="text-wrapper">
                    <p class="project-label">Project name</p>
                    <h2 class="project-name">Lorem ipsum.</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 without-padding project-wrapper">
            <img src="https://www.w3schools.com/css/img_fjords.jpg" alt="">
            <div class="project-description-wrapper">
                <div class="text-wrapper">
                    <p class="project-label">Project name</p>
                    <h2 class="project-name">Lorem ipsum.</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 without-padding project-wrapper">
            <img src="http://twistedsifter.files.wordpress.com/2013/09/house-building-on-island-mountains-in-background-torres-del-paine-national-park-chile.jpg?w=800&h=571" alt="">
            <div class="project-description-wrapper">
                <div class="text-wrapper">
                    <p class="project-label">Project name</p>
                    <h2 class="project-name">Lorem ipsum.</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 without-padding project-wrapper">
            <img src="http://extrawall.net/images/wallpapers/507_1920x1080_huge_fog.jpg" alt="">
            <div class="project-description-wrapper">
                <div class="text-wrapper">
                    <p class="project-label">Project name</p>
                    <h2 class="project-name">Lorem ipsum.</h2>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-sm-6 without-padding project-wrapper last wow fadeInLeft" data-wow-duration=".6s" data-wow-delay=".4s">
            <img src="https://media.mnn.com/assets/images/2017/06/DPOTY%20Dogs%20at%20Play%201st%20-%C2%AC%20Kaylee%20Greer%20The%20Kennel%20Club.jpg.990x0_q80_crop-smart.jpg" alt="">
            <div class="project-description-wrapper">
                <div class="project-description-wrapper">
                    <div class="text-wrapper">
                        <p class="project-label">Project name</p>
                        <h2 class="project-name">Lorem ipsum.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 without-padding project-wrapper last wow fadeInRight" data-wow-duration=".6s" data-wow-delay=".4s">
            <img src="http://blogs.worldwatch.org/sustainabilitypossible/wp-content/uploads/2013/04/118038.jpg" alt="">
            <div class="project-description-wrapper">
                <div class="project-description-wrapper">
                    <div class="text-wrapper">
                        <p class="project-label">Project name</p>
                        <h2 class="project-name">Lorem ipsum.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-wrapper section-wrapper--fourth">
    <div class="block-wrapper">
        <h3 class="footer-title">Are You Ready to Start? Download Now For Free!</h3>
        <p class="footer-sub-title">Lorem ipsum dolor sit amet, consectetur dipisicing elit. Culpa doloremque in necessitatibus perspiciatis porro, sint?</p>
        <?php echo Html::button('Download for free',  [
            'data-toggle' => 'modal',
            'data-target' => '#download-file',
            'class'       => 'btn btn-main dark',
        ]) ?>
    </div>
</div>

<?php Modal::begin([
    'size' => Modal::SIZE_DEFAULT,
    'header' => '<h4>Download for free</h4>',
    'options' => [
        'id' => 'download-file',
    ],
]);

echo $this->render('_form', [
    'model' => $model,
]);

Modal::end(); ?>

<?php if (Yii::$app->session->hasFlash('message')){
    Modal::begin([
        'size' => Modal::SIZE_DEFAULT,
        'header' => '<h4>Download for free</h4>',
        'clientOptions' => ['show' => true],
        'options' => [
            'id' => 'message',
        ],
    ]);

    echo Yii::$app->session->getFlash('message');

    Modal::end();
} ?>
