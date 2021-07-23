<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/main.css">
    <title>Main</title>
</head>
<body>

<?php foreach($reviews as $review) : ?>

<section class="review">

    <?= $review ?>

</section>

<?php endforeach; ?>

<!-- <section class="review">
    <h1 class="album_name"><a href="/reviews/soulfly1998">Soulfly (1998)</a> </h1>

    <p>Self-titled Soulfly I is one of my favourite albums</p>

    <p>Soulfly is the debut album by American metal band Soulfly, released on April 21, 1998 through Roadrunner Records. <br />
        The record was released in memory of frontman Max Cavalera's deceased stepson and was the first album featuring Cavalera since leaving Sepultura two years prior. <br />
        Both CDs have the message In Loving Memory Dana printed across them. The album has been certified gold by the RIAA.</p>

</section>



<section class="review">

    <h1 class="album_name"><a href="/reviews/soulfly2000">Primitive (2000)</a> </h1>

    <p>This second one is also a very good album, maybe a little less exciting than the predecessor</p>

    <p>Primitive is the second studio album by American metal band Soulfly, released in 2000 through Roadrunner Records. <br />
        As of 2002, Primitive has sold over 226,569 copies as reported by SoundScan.</p>

</section>

-->

</body>
</html>
