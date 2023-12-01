<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>Title</title>
    <!--<link rel="icon" type="image/png" href="favicons/favicon_v.2.png">-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="favicons/apple_template.png" rel="icon" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="js-backdrop"></div>
    <?php require "temp/menu.html"; ?>
    <section class="search-wrap">
        <form class="form-search-mobile">
            <input class="search-input-mobile" type="search">
            <button class="js-search-close" type="submit">Отмена</button>
        </form>
    </section>
    <?php require "temp/header/header-desktop.html"; ?>
    <?php require "temp/header/header-mobile.html"; ?>
</body>

