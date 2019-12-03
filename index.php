<?php require_once "slideshow.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="slideshow.css">
    <script src ="slideshow.js"></script>
    <title>SlideShow</title>
</head>
<body>
<section>
<?php
$images = array(
    array(
        'title' => '画像１',
        'caption' => 'キャプション１',
        'src' =>'https://www.audi.jp/a1_debut/img/text-mainv.png',
        'link' =>'https://www.audi.jp/a1_debut/index.html?utm_source=Yahoo_Panorama&utm_medium=Broad&utm_content=y_jpg_Tier6_43&utm_campaign=2019_A1',
        'target' => '_blank',
    ),
    array(
        'title' => '画像２',
        'caption' => 'キャプション２',
        'src' =>'https://www.audi.jp/a1_debut/img/text-mainv.png',
        'link' =>'https://www.audi.jp/a1_debut/index.html?utm_source=Yahoo_Panorama&utm_medium=Broad&utm_content=y_jpg_Tier6_43&utm_campaign=2019_A1',
        'target' => '_blank',
    ),
    array(
        'title' => '画像３',
        'caption' => 'キャプション３',
        'src' =>'https://www.audi.jp/a1_debut/img/text-mainv.png',
        'link' =>'https://www.audi.jp/a1_debut/index.html?utm_source=Yahoo_Panorama&utm_medium=Broad&utm_content=y_jpg_Tier6_43&utm_campaign=2019_A1',
        'target' => '_blank',
    ),
    array(
        'title' => '画像４',
        'caption' => 'キャプション４',
        'src' =>'https://www.audi.jp/a1_debut/img/text-mainv.png',
        'link' =>'https://www.audi.jp/a1_debut/index.html?utm_source=Yahoo_Panorama&utm_medium=Broad&utm_content=y_jpg_Tier6_43&utm_campaign=2019_A1',
        'target' => '_blank',
    ),
    array(
        'title' => '画像５',
        'caption' => 'キャプション５',
        'src' =>'https://www.audi.jp/a1_debut/img/text-mainv.png',
        'link' =>'https://www.audi.jp/a1_debut/index.html?utm_source=Yahoo_Panorama&utm_medium=Broad&utm_content=y_jpg_Tier6_43&utm_campaign=2019_A1',
        'target' => '_blank',
    ),
);
slideshow('slideshow1', 3, $images, true, 5);
?>
</section>
</body>
</html>
