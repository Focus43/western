<!DOCTYPE HTML>
<html lang="<?php echo LANGUAGE; ?>">
<head>
<?php Loader::packageElement('theme/head_tag', 'cmr'); ?>
<?php Loader::element('header_required'); // REQUIRED BY C5 // ?>
</head>

<body class="<?php echo $bodyClass; ?>">

    <?php Loader::packageElement('theme/nav', 'cmr'); ?>

    <section id="masthead">

        <div id="gliderInstance" class="glider">
            <a class="glider-control prev">
                <i class="flaticon-arrow414"></i>
            </a>
            <a class="glider-control next">
                <i class="flaticon-bottom4"></i>
            </a>
            <div class="glider-nav">
                <ul class="dots list-unstyled"></ul>
            </div>
            <div class="glider-nodes">
                <div class="node active" data-bg="<?php echo CMR_IMAGE_PATH; ?>photos/evening.jpg">
                    <div class="tabular">
                        <div class="cellular">
                            <article>
                                <?php $a = new Area('Editable 1'); $a->display($c); ?>
                                <a>Learn More <i class="fa fa-plus-square-o"></i></a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="node" data-bg="<?php echo CMR_IMAGE_PATH; ?>photos/lasso.jpg" data-bg-vert="top">
                    <div class="tabular">
                        <div class="cellular">
                            <article>
                                <?php $a = new Area('Editable 2'); $a->display($c); ?>
                                <a>Learn More <i class="fa fa-plus-square-o"></i></a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="node" data-bg="<?php echo CMR_IMAGE_PATH; ?>photos/mtns.jpg">
                    <div class="tabular">
                        <div class="cellular">
                            <article>
                                <?php $a = new Area('Editable 3'); $a->display($c); ?>
                                <a>Learn More <i class="fa fa-plus-square-o"></i></a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="node" data-bg="<?php echo CMR_IMAGE_PATH; ?>photos/guitar.jpg">
                    <div class="tabular">
                        <div class="cellular">
                            <article>
                                <?php $a = new Area('Editable 4'); $a->display($c); ?>
                                <a>Learn More <i class="fa fa-plus-square-o"></i></a>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="node" data-bg="<?php echo CMR_IMAGE_PATH; ?>photos/horses.jpg">
                    <div class="tabular">
                        <div class="cellular">
                            <article>
                                <?php $a = new Area('Editable 5'); $a->display($c); ?>
                                <a>Learn More <i class="fa fa-plus-square-o"></i></a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="intro">
        <div class="inner">
            <?php $a = new Area('Editable 6'); $a->display($c); ?>
        </div>
        <span class="diamonds top"></span>
        <span class="diamonds bottom"></span>
    </section>

    <section id="activities">
        <div class="bg-full"></div>
        <div class="tabular">
            <div class="cellular">
                <h1>Activities For Everyone</h1>
                <ul class="list-inline">
                    <li><a>Horseback</a></li>
                    <li><a>Fishing</a></li>
                    <li><a>Hiking</a></li>
                    <li><a>Pack Trips</a></li>
                    <li><a>Rodeos</a></li>
                    <li><a>Cookouts</a></li>
                    <li><a>All Activities</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="lodging">
        <span class="diamonds top"></span>
        <div class="inner">
            <h1>Find Your Cabin</h1>
            <div class="row lodging">
                <div class="col-sm-4">
                    <div class="lodge" style="background-image:url('<?php echo CMR_IMAGE_PATH; ?>lodges/dining1.jpg');">
                        <span>Dining Cabin 1</span>
                        <div class="learn-more">
                            <div class="tabular">
                                <div class="cellular">
                                    <h4>Dining Cabin 1</h4>
                                    <p>Perfect for couples on a budget.</p>
                                    <a>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="lodge" style="background-image:url('<?php echo CMR_IMAGE_PATH; ?>lodges/garden.jpg');">
                        <span>Garden Lodge</span>
                        <div class="learn-more">
                            <div class="tabular">
                                <div class="cellular">
                                    <h4>Dining Cabin 1</h4>
                                    <p>Perfect for couples on a budget.</p>
                                    <a>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="lodge" style="background-image:url('<?php echo CMR_IMAGE_PATH; ?>lodges/hill1.jpg');">
                        <span>Hill Lodge</span>
                        <div class="learn-more">
                            <div class="tabular">
                                <div class="cellular">
                                    <h4>Dining Cabin 1</h4>
                                    <p>Perfect for couples on a budget.</p>
                                    <a>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row lodging">
                <div class="col-sm-4">
                    <div class="lodge" style="background-image:url('<?php echo CMR_IMAGE_PATH; ?>lodges/dining2beds.jpg');">
                        <span>Dining Cabin 2 Bed</span>
                        <div class="learn-more">
                            <div class="tabular">
                                <div class="cellular">
                                    <h4>Dining Cabin 1</h4>
                                    <p>Perfect for couples on a budget.</p>
                                    <a>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="lodge" style="background-image:url('<?php echo CMR_IMAGE_PATH; ?>lodges/dining5.jpg');">
                        <span>Dining Cabin 5</span>
                        <div class="learn-more">
                            <div class="tabular">
                                <div class="cellular">
                                    <h4>Dining Cabin 1</h4>
                                    <p>Perfect for couples on a budget.</p>
                                    <a>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="lodge" style="background-image:url('<?php echo CMR_IMAGE_PATH; ?>lodges/studio.jpg');">
                        <span>Studio Cabin</span>
                        <div class="learn-more">
                            <div class="tabular">
                                <div class="cellular">
                                    <h4>Dining Cabin 1</h4>
                                    <p>Perfect for couples on a budget.</p>
                                    <a>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row lodging">
                <div class="col-sm-4">
                    <div class="lodge" style="background-image:url('<?php echo CMR_IMAGE_PATH; ?>lodges/dining2beds.jpg');">
                        <span>Dining Cabin 2 Bed</span>
                        <div class="learn-more">
                            <div class="tabular">
                                <div class="cellular">
                                    <h4>Dining Cabin 1</h4>
                                    <p>Perfect for couples on a budget.</p>
                                    <a>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="lodge" style="background-image:url('<?php echo CMR_IMAGE_PATH; ?>lodges/dining5.jpg');">
                        <span>Dining Cabin 5</span>
                        <div class="learn-more">
                            <div class="tabular">
                                <div class="cellular">
                                    <h4>Dining Cabin 1</h4>
                                    <p>Perfect for couples on a budget.</p>
                                    <a>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="lodge" style="background-image:url('<?php echo CMR_IMAGE_PATH; ?>lodges/studio.jpg');">
                        <span>Studio Cabin</span>
                        <div class="learn-more">
                            <div class="tabular">
                                <div class="cellular">
                                    <h4>Dining Cabin 1</h4>
                                    <p>Perfect for couples on a budget.</p>
                                    <a>Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer-wrap">
        <?php Loader::packageElement('theme/footer', 'cmr'); ?>
    </section>

<?php Loader::element('footer_required'); // REQUIRED BY C5 // ?>
</body>
</html>