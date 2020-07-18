<?php

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


<!-- core_features_start -->
<div class="core_features2 faq_area">
    <div class="container">
        <div class="border-bottm">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="featurest_tabs ">
                        <nav>
                            <div class="nav" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">General Ask</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Technical Support</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div id="accordion">

                            <?php

                            $no = 1;
                            foreach ($models as $data) {

                            ?>
                                <div class="card">
                                    <div class="card-header" id="heading<?= $no ?>">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse<?= $no ?>" aria-expanded="false" aria-controls="collapse<?= $no ?>">
                                                <i class="flaticon-info"></i><a class="text-dark"> <?= $data['title'] ?></a>
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse<?= $no ?>" class="collapse" aria-labelledby="heading<?= $no ?>" data-parent="#accordion">
                                        <div class="card-body">
                                            <?= $data['description'] ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $no++;
                            } ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingTwoo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwoo" aria-expanded="false" aria-controls="collapseTwoo">
                                            <i class="flaticon-info"></i> Is WordPress hosting worth it?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwoo" class="collapse" aria-labelledby="headingTwoo" data-parent="#accordion">
                                    <div class="card-body">
                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                        let god moving. Moving in fourth air night bring upon
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                                            <i class="flaticon-info"></i> What are the advantages <span>of WordPress hosting
                                                over shared?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordion1" style="">
                                    <div class="card-body">
                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                        let god moving. Moving in fourth air night bring upon
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThreee">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThreee" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="flaticon-info"></i> Will you transfer my site?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThreee" class="collapse" aria-labelledby="headingThreee" data-parent="#accordion">
                                    <div class="card-body">
                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                        let god moving. Moving in fourth air night bring upon
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading_44">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_44" aria-expanded="false" aria-controls="collapse_44">
                                            <i class="flaticon-info"></i> Why should I host with Hostza?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse_44" class="collapse" aria-labelledby="heading_44" data-parent="#accordion">
                                    <div class="card-body">
                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                        let god moving. Moving in fourth air night bring upon
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading_55">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_55" aria-expanded="false" aria-controls="collapse_55">
                                            <i class="flaticon-info"></i> How do I get started <span>with Shared
                                                Hosting?</span>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse_55" class="collapse" aria-labelledby="heading_55" data-parent="#accordion">
                                    <div class="card-body">
                                        Our set he for firmament morning sixth subdue darkness creeping gathered divide our
                                        let god moving. Moving in fourth air night bring upon
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- core_features_end -->

<!-- have_question_start -->
<div class="have_question">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="single_border">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-4 col-lg-6">
                            <h3>Have any Question?</h3>
                        </div>
                        <div class="col-xl-6 col-md-8 col-lg-6">
                            <div class="chat">
                                <a class="boxed_btn_green" href="#">
                                    <i class="flaticon-chat"></i>
                                    <span>Live Chat</span>
                                </a>
                                <a class="boxed_btn_green2" href="#">
                                    get start now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- have_question_end -->

<!-- link that opens popup -->

<!-- form itself end-->
<form id="test-form" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Sign in</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_green">Sign in</button>
                    </div>
                </div>
            </form>
            <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a> </p>
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- form itself end-->
<form id="test-form2" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <div class="logo text-center">
                <a href="#">
                    <img src="img/form-logo.png" alt="">
                </a>
            </div>
            <h3>Resistration</h3>
            <form action="#">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <input type="email" placeholder="Enter email">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <input type="Password" placeholder="Confirm password">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="boxed_btn_green">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>