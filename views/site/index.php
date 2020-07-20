<?php

/* @var $this yii\web\View */

$this->title = 'Sisma Helpdesk';

use yii\helpers\Html;
use yii\data\SqlDataProvider;


$count = Yii::$app->db->createCommand('
    SELECT COUNT(*) FROM thread')->queryScalar();

$provider = new SqlDataProvider([
    'sql' => 'SELECT * FROM thread',
    'totalCount' => $count,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'attributes' => [
            'title',
            'view_count',
            'created_at',
        ],
    ],
]);

// returns an array of data rows
$models = $provider->getModels();
?>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section -->
<header class="header-section">
    <a href="index.php" class="site-logo">
        <?= Html::img('@web/mondy/img/logo.png',['width'=>'150','height'=>'43']) ?>
    </a>
    <nav class="header-nav">
        <ul class="main-menu">
            <li><?= Html::a('Home', ['/site'], ['class'=>'active']); ?></li>
            <li><?= Html::a('About', ['/site/about']); ?></li>
            <li><a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li><a href="single-property.html">Property</a></li>
                </ul>
            </li>
            <li><?= Html::a('Contact', ['/site/contact']); ?></li>
        </ul>
        <div class="header-right">
            <div class="user-panel">
                <?= Html::a('Login', ['/site/login']); ?>
            </div>
        </div>
    </nav>
    
</header>
<!-- Header Section end -->

<!-- Hero Section end -->
<section class="hero-section set-bg back-img" data-setbg="">
    <div class="container">
        <div class="hero-warp">
            <form class="main-search-form">
                <div class="search-type">
                    <div class="st-item">
                        <input type="radio" name="st" id="search" checked>
                        <label for="search">Find Help</label>
                    </div>
                </div>
                <div class="search-input">
                    <input type="text" placeholder="How can we help You?">
                    <button class="site-btn">Search</button>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
            </form>
        </div>
    </div>
</section>
<!-- Hero Section end -->

<!-- Intro Section end -->
<section class="intro-section spad">
    <div class="container">
        <div class="section-title">
            <h2>Sell Faster. Save Thousands.</h2>
        </div>
        <div class="row intro-first">
            <div class="col-lg-6 order-lg-2">
                <?= Html::img('@web/mondy/img/about/1.jpg') ?>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="about-text">
                    <h3>We charge 2% total. No hidden fees or upfront costs.</h3>
                    <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus.</p>
                    <a href="#" class="readmore-btn">Find out more</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?= Html::img('@web/mondy/img/about/2.jpg') ?>
            </div>
            <div class="col-lg-6 ">
                <div class="about-text">
                    <h3>How Much Can You Save? We work for you, not commission.</h3>
                    <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus.</p>
                    <a href="#" class="readmore-btn">Find out more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Intro Section end -->

<section class="accordion-section clearfix mt-3" style="margin-bottom: 140px;" aria-label="Question Accordions">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <?php
            $count = 1;

            foreach ($models as $data) {
            ?>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading<?= $count ?>">
                        <h4>
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $count ?>" aria-expanded="true" aria-controls="collapse<?= $count ?>">
                                <?= $data['title'] ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse<?= $count ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $count ?>">
                        <div class="panel-body px-3 mb-4 ml-2">
                            <p>With Solodev CMS, you and your visitors will benefit from a finely-tuned technology stack that drives the highest levels of site performance, speed and engagement - and contributes more to your bottom line. Our users fell in love with:</p>
                            <ul>
                                <li>Light speed deployment on the most secure and stable cloud infrastructure available on the market.</li>
                                <li>Scalability – pay for what you need today and add-on options as you grow.</li>
                                <li>All of the bells and whistles of other enterprise CMS options but without the design limitations - this CMS simply lets you realize your creative visions.</li>
                                <li>Amazing support backed by a team of Solodev pros – here when you need them.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            <?php $count++;
            } ?>
        </div>
</section>


<!-- Property Section -->
<section class="property-section">
    <div class="container">
        <div class="section-title">
            <h2>Recently Add Homes</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="property-item">
                    <div class="pi-image">
                        <?= Html::img('@web/mondy/img/property/1.jpg') ?>
                        <div class="pi-badge new">New</div>
                    </div>
                    <h3>$469,000</h3>
                    <h5>3 Bedrooms Townhouse</h5>
                    <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
                    <a href="#" class="readmore-btn">Find out more</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="property-item">
                    <div class="pi-image">
                        <?= Html::img('@web/mondy/img/property/2.jpg') ?>
                        <div class="pi-badge offer">Offer</div>
                    </div>
                    <h3>$369,000</h3>
                    <h5>3 Bedrooms Townhouse</h5>
                    <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
                    <a href="#" class="readmore-btn">Find out more</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="property-item">
                    <div class="pi-image">
                        <?= Html::img('@web/mondy/img/property/3.jpg') ?>
                        <div class="pi-badge new">New</div>
                    </div>
                    <h3>$560,000</h3>
                    <h5>3 Bedrooms Townhouse</h5>
                    <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
                    <a href="#" class="readmore-btn">Find out more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Property Section end -->


<!-- Stories Section end -->
<section class="stories-section spad">
    <div class="container">
        <div class="row ">
            <div class="col-lg-5 order-lg-2">
                <?= Html::img('@web/mondy/img/about/3.jpg') ?>
            </div>
            <div class="col-lg-7 order-lg-1">
                <div class="about-text">
                    <h2>Seller Success Stories</h2>
                    <p>Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus. </p>
                    <a href="#" class="readmore-btn">Find out more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Stories Section end -->