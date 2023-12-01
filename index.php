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



<main>

    <h3 class="popular_items">Популярные категории семян</h3>

    <!--BEGIN Slider popular gallery_category -->
    <div class="gallery">
        <div class="swiper gallery_products">
            <div class="swiper-wrapper">
                <?php
                for ($i=0;$i<=10;$i++){
                    require "temp/gallery/gallery_product_item.html";
                }
                ?>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!--END Slider popular gallery_category-->

    <h3 class="popular_items">Популярные семена</h3>
    <ul class="choice_items">
        <li>ягоды</li>
        <li>овощи</li>
        <li>цветы</li>
        <li>зелень, пряности</li>
    </ul>
    <hr class="choice_items_delimiter">
    <ul class="choice_items">
        <li>капуста</li>
        <li>томаты</li>
        <li>чеснок</li>
        <li>баклажан</li>
        <li>перец сладкий</li>
        <li>перец острый</li>
        <li>картофель</li>
        <li>горох</li>
        <li>огурец</li>
        <li>кабачок</li>
    </ul>

    <!--BEGIN Slider gallery_product-->
    <div class="gallery">
        <div class="swiper gallery_products">
            <div class="swiper-wrapper">
                <div class="swiper-slide gallery_product_width">
                    <div class="gallery_product_item gallery_cards_appearance">
                        <picture class="gallery_product_img">
                            <source
                                    media="(max-width: 1024px)"
                                    srcset="img/gallery_bottom/items_320/cabbage.png">
                            <img src="img/gallery_bottom/items_768/cabbage.png">
                        </picture>
                        <div class="gallery_product_inner">
                            <p class="gallery-product-item-title">Капуста белокачанная</p>
                            <p class="gallery-product-item-desc">“Бронко F1”</p>
                            <p class="gallery-product-item-desc">ООО “Семена партнер”</p>
                            <p class="gallery-product-item-desc">Код товара № 03-1010</p>
                            <div class="rating_group">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_half.svg">
                                <img src="img/star_rating/star_stroke.svg">
                                <span>3.5</span>
                            </div>
                            <span class="cost_product">235</span>
                            <span class="cost_product cost_old">335</span>
                            <!--<a class="basket-add">В избранное</a>-->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide gallery_product_width">
                    <div class="gallery_product_item gallery_cards_appearance">
                        <picture class="gallery_product_img">
                            <source
                                    media="(max-width: 1024px)"
                                    srcset="img/gallery_bottom/items_320/cabbage.png">
                            <img src="img/gallery_bottom/items_768/cabbage.png">
                        </picture>
                        <div class="gallery_product_inner">
                            <p class="gallery-product-item-title">Капуста белокачанная</p>
                            <p class="gallery-product-item-desc">“Бронко F1”</p>
                            <p class="gallery-product-item-desc">ООО “Семена партнер”</p>
                            <p class="gallery-product-item-desc">Код товара № 03-1010</p>
                            <div class="rating_group">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_half.svg">
                                <img src="img/star_rating/star_stroke.svg">
                                <span>3.5</span>
                            </div>
                            <span class="cost_product">235</span>
                            <span class="cost_product cost_old">335</span>
                            <!--<a class="basket-add">В избранное</a>-->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide gallery_product_width">
                    <div class="gallery_product_item gallery_cards_appearance">
                        <picture class="gallery_product_img">
                            <source
                                    media="(max-width: 1024px)"
                                    srcset="img/gallery_bottom/items_320/cabbage.png">
                            <img src="img/gallery_bottom/items_768/cabbage.png">
                        </picture>
                        <div class="gallery_product_inner">
                            <p class="gallery-product-item-title">Капуста белокачанная</p>
                            <p class="gallery-product-item-desc">“Бронко F1”</p>
                            <p class="gallery-product-item-desc">ООО “Семена партнер”</p>
                            <p class="gallery-product-item-desc">Код товара № 03-1010</p>
                            <div class="rating_group">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_half.svg">
                                <img src="img/star_rating/star_stroke.svg">
                                <span>3.5</span>
                            </div>
                            <span class="cost_product">235</span>
                            <span class="cost_product cost_old">335</span>
                            <!--<a class="basket-add">В избранное</a>-->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide gallery_product_width">
                    <div class="gallery_product_item gallery_cards_appearance">
                        <picture class="gallery_product_img">
                            <source
                                    media="(max-width: 1024px)"
                                    srcset="img/gallery_bottom/items_320/cabbage.png">
                            <img src="img/gallery_bottom/items_768/cabbage.png">
                        </picture>
                        <div class="gallery_product_inner">
                            <p class="gallery-product-item-title">Капуста белокачанная</p>
                            <p class="gallery-product-item-desc">“Бронко F1”</p>
                            <p class="gallery-product-item-desc">ООО “Семена партнер”</p>
                            <p class="gallery-product-item-desc">Код товара № 03-1010</p>
                            <div class="rating_group">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_half.svg">
                                <img src="img/star_rating/star_stroke.svg">
                                <span>3.5</span>
                            </div>
                            <span class="cost_product">235</span>
                            <span class="cost_product cost_old">335</span>
                            <!--<a class="basket-add">В избранное</a>-->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide gallery_product_width">
                    <div class="gallery_product_item gallery_cards_appearance">
                        <picture class="gallery_product_img">
                            <source
                                    media="(max-width: 1024px)"
                                    srcset="img/gallery_bottom/items_320/cabbage.png">
                            <img src="img/gallery_bottom/items_768/cabbage.png">
                        </picture>
                        <div class="gallery_product_inner">
                            <p class="gallery-product-item-title">Капуста белокачанная</p>
                            <p class="gallery-product-item-desc">“Бронко F1”</p>
                            <p class="gallery-product-item-desc">ООО “Семена партнер”</p>
                            <p class="gallery-product-item-desc">Код товара № 03-1010</p>
                            <div class="rating_group">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_half.svg">
                                <img src="img/star_rating/star_stroke.svg">
                                <span>3.5</span>
                            </div>
                            <span class="cost_product">235</span>
                            <span class="cost_product cost_old">335</span>
                            <!--<a class="basket-add">В избранное</a>-->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide gallery_product_width">
                    <div class="gallery_product_item gallery_cards_appearance">
                        <picture class="gallery_product_img">
                            <source
                                    media="(max-width: 1024px)"
                                    srcset="img/gallery_bottom/items_320/cabbage.png">
                            <img src="img/gallery_bottom/items_768/cabbage.png">
                        </picture>
                        <div class="gallery_product_inner">
                            <p class="gallery-product-item-title">Капуста белокачанная</p>
                            <p class="gallery-product-item-desc">“Бронко F1”</p>
                            <p class="gallery-product-item-desc">ООО “Семена партнер”</p>
                            <p class="gallery-product-item-desc">Код товара № 03-1010</p>
                            <div class="rating_group">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_fill.svg">
                                <img src="img/star_rating/star_half.svg">
                                <img src="img/star_rating/star_stroke.svg">
                                <span>3.5</span>
                            </div>
                            <span class="cost_product">235</span>
                            <span class="cost_product cost_old">335</span>
                            <!--<a class="basket-add">В избранное</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!--END Slider gallery_product-->

</main>

<footer>
    footer footer<br>
    footer footer
</footer>

<nav class="nav-bottom">
    <a class="nav_bottom_item" href="#">
        <span class="material-icons-outlined">home</span>
        главная
    </a>
    <a class="nav_bottom_item" href="#">
        <span class="material-icons-outlined">manage_search</span>
        каталог
    </a>
    <a class="nav_bottom_item" href="#">
        <span class="num-products-wrap">
            <span class="num-products">99+</span>
        </span>
        <img src="icons/ic_menu/favorite_border_green.svg">
        избранное
    </a>
    <a class="nav_bottom_item" href="#">
        <span class="material-icons">account_circle</span>
        войти
    </a>
    <a class="nav_bottom_item" href="#">
        <span class="material-symbols-outlined">more_horiz</span>
        еще
    </a>
</nav>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="js/libs/swiper_settings.js"></script>
<script src="js/btn_catalog_actions.js"></script>
<script src="js/btn_search_mobile.js"></script>

</body>
</html>