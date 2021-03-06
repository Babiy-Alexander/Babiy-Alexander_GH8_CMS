<?php
$data = require('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Agency</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <?php
                $siteLogo = $data['siteLogo'];
                print_r('<img src='.$data['siteLogo']['src'].' alt='.$data['siteLogo']['alt'].'>')
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <?php
                        foreach($data['mainMenu'] as $menu) {
                            print_r('<li class="nav-item"><a class="nav-link" href='.$menu["url"] . '>' .
                                $menu["title"] . '</a></li>');
                        }
                    ?>
                </ul>
            </div>
        </nav>
        <div class="header-box">
            <div class="row justify-content-center">
                <div class="col- header-content">
                    <h1>
                        <?php
                        echo $data['header-box']['h1']; ?>
                    </h1>
                    <span class="header-text">
                        <?php
                        echo $data['header-box']['span']; ?>
                    </span>
                    <a href="#" class="btn">
                        <?php
                       echo $data['header-box']['button']; ?>
                    </a>
                    <a href="#"><img class="scrool" src="assets/img/mouse.png" alt="mouse"></a>
                    <span class="scrool-text">scrool down</span>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="best-design-code">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 best-design">
                <h2>
                    <?= $data['best-design']['h2']; ?>
                </h2>
                <p class="best-text">
                    <?= $data['best-design']['best-text']; ?>
                </p>
                <a href="#" class="btn">
                    <?= $data['header-box']['button']; ?>
                </a>
            </div>
            <div class="col-12 col-md-6 best-code">
                <h2>
                    <?= $data['best-code']['h2']; ?>
                </h2>
                <p class="best-text">
                    <?= $data['best-code']['best-text']; ?>
                </p>
                <a href="#" class="btn">
                    <?= $data['header-box']['button']; ?>
                </a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="what-we-do">
            <h2>
                <?= $data['whatWeDo']['title']; ?>
            </h2>
            <div class="row">
                <?php foreach ($data['whatWeDo']['whatWeDoList'] as $list) { ?>
                        <div class="col-12 col-lg-6 ">
                            <div class="media">
                                <img class="align-self-start mr-4" src="<?php echo $list ['img'];?>"
                                     alt="icon-web">
                                <div class="media-body">
                                    <h3 class="mt-0 subtitle-media-body">
                                        <?php echo $list ['title'];?>
                                    </h3>
                                    <p class="text-media-body">
                                        <?php echo $list ['text'];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                <?php } ?>
            </div>

            <a href="#" class="btn">
                <?= $data['header-box']['button']; ?>
            </a>
        </div>
    </div>
</section>
<section class="slider">
    <div class="row">
        <div class="col-12 col-lg-4 drone-zone list">
            <div class="text-hover">
                <h3>
                    <?= $data['text-hover']['h3'];?>
                </h3>
                <p class="slider-text">
                    <?= $data['text-hover']['text'];?>
                </p>
                <a href="#" class="btn">
                    <?= $data['text-hover']['btn'];?>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 profile list">
            <div class="text-hover">
                <h3>
                    <?= $data['text-hover']['h3'];?>
                </h3>
                <p class="slider-text">
                    <?= $data['text-hover']['text'];?>
                </p>
                <a href="#" class="btn">
                    <?= $data['text-hover']['btn'];?>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 fit-app list">
            <div class="text-hover">
                <h3>
                    <?= $data['text-hover']['h3'];?>
                </h3>
                <p class="slider-text">
                    <?= $data['text-hover']['text'];?>
                </p>
                <a href="#" class="btn">
                    <?= $data['text-hover']['btn'];?>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 m-auto">
                <h2>
                    <?= $data['about-us']['h2'];?>
                </h2>
                <p class="text-about-us">
                    <?= $data['about-us']['text'];?>
                </p>
            </div>
        </div>
        <div class="row main-items">
            <?php foreach ($data ['participant'] as $aboutAs): ?>
                <div class="col-12 col-md-6 col-lg-3 items">
                    <img src="<?php echo $aboutAs['img'];?>" alt="participant">
                    <h4>
                        <?php echo $aboutAs['title'];?>
                    </h4>
                    <p class="text-about-us">
                        <?php echo $aboutAs['text'];?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="#" class="btn"><?= $data['about-us']['btn'];?></a>
    </div>
</section>
<section class="maps">
    <div style="overflow:hidden;width: 100%;height: 440px;"><iframe width="100%" height="610"
         src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Ukraine%2Ccherkasy+
         (%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"
         frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div><small>
        <a href="https://embedgooglemaps.com/en/">embedgooglemaps EN</a></small></div><div><small>
        <a href="https://iamsterdamcard.it">www.iamsterdamcard.it</a></small></div><style>#gmap_canvas
        img{max-width:none!important;background:none!important}</style></div><br />
</section>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
