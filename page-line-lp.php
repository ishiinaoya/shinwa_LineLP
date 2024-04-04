<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MVFGKB5');
    </script>
    <!-- End Google Tag Manager -->
    <!-- <?php wp_head(); ?> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ピアノ,管楽器,販売,買取,修繕,再活用,">
    <meta name="description" content="伸和ピアノが公式LINEアカウントを開設。ピアノ・管楽器の売却や購入、その他お問い合わせなど、担当者とスピーディーにやり取りができます、是非お友だち登録ください。">
    <title>伸和ピアノLINEなんでも相談室</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Zen+Kaku+Gothic+Antique:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/line-lp/style.css">
    <?php if (is_user_logged_in()) : ?>
        <style type="text/css">
            header {
                margin-top: 32px !important;
            }
            
        </style>
        <style media="screen and (max-width: 480px)" type="text/css">
            header {
                margin-top: 42px !important;
            }

        </style>
    <?php endif; ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVFGKB5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="l-header">
        <div class="l-header__column l-out-container">
            <div class="l-header__logo">
                <h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/headerLogo.svg" alt="" width="518" height="65">
                </h1>
            </div>
            <div class="l-header__btn">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/btn01.png" alt=""></a>
            </div>
        </div>
    </header>
    <main>
        <section class="p-mainVisual">
            <div class="p-mainVisual__img-pc u-tab-none">
                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/mainVisual.png" usemap="#ImageMap" alt="" />
                <map name="ImageMap">
                    <area shape="rect" coords="1012,861,1272,942" href="#" alt="" />
                </map>
            </div>
            <div class="p-mainVisual__img-sp u-tab-appea">
                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/mainVisual.png" usemap="#ImageMap" alt="" />
                <map name="ImageMap">
                    <area shape="rect" coords="244,623,507,703" href="#" alt="" />
                </map>
            </div>
        </section>
        <section class="p-scene">
            <div class="p-scene__column">
                <div class="p-scene__main">
                    <div class="p-scene__heading c-section-heading">
                        <h2>ご利用シーン</h2>
                        <p>さまざまなシーンでご利用いただけます。</p>
                    </div>
                    <ul class="p-scene__list">
                        <li class="p-scene__item">
                            <h3>買いたい</h3>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/list01.png" media="(min-width: 769px)">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/list01.png" media="(max-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/list01.png" alt="">
                            </picture>
                            <h4>購入前の楽器情報の<br>
                                問い合わせ</h4>
                            <p>サイトに掲載しているピアノや管楽器に対するお問い合わせや、今現在、整備中のピアノや管楽器の情報やお客様におすすめしたい機種の情報などをご提供します。</p>
                        </li>
                        <li class="p-scene__item">
                            <h3>売りたい</h3>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/list02.png" media="(min-width: 769px)">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/list02.png" media="(max-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/list02.png" alt="">
                            </picture>
                            <h4>ピアノ・管楽器の<br>
                                買取査定を<span>LINE</span>で行います。</h4>
                            <p>下取りしたいピアノや管楽器の状態やお写真を確認させていただき、簡易ですが買取価格をご報告いたします。そのまま、買取のお申し込みも受付可能です。</p>
                        </li>
                        <li class="p-scene__item">
                            <h3>お手入れしたい</h3>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/list03.png" media="(min-width: 769px)">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/list03.png" media="(max-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/list03.png" alt="">
                            </picture>
                            <h4>購入後のメンテナンスに<br>
                                ついてのお問い合わせ</h4>
                            <p>伸和ピアノでご購入いただいたピアノや管楽器のメンテナンス方法に関するお問い合わせを承ります。</p>
                        </li>
                        <li class="p-scene__item">
                            <h3>試したい</h3>
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/list04.png" media="(min-width: 769px)">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/list04.png" media="(max-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/list04.png" alt="">
                            </picture>
                            <h4>ピアノの試弾<br>
                                管楽器の試奏の申し込み</h4>
                            <p>販売中のピアノやサックス・トランペット他の管楽器の試弾・試奏のご予約申し込みも承ります。</p>
                        </li>
                    </ul>
                </div>
                <div class="p-scene-obj c-section-obj">
                    USE SCENE
                </div>
            </div>
        </section>
        <section class="p-method">
            <div class="p-method__column">
                <div class="p-method-obj c-section-obj">
                    REGISTRATION<br class="u-tab-none">METHOD
                </div>
                <div class="p-method__main">
                    <div class="p-method__heading c-section-heading">
                        <h2>お友だち登録方法</h2>
                        <p>さまざまなシーンでご利用いただけます。</p>
                    </div>
                    <ul class="p-method__friend-list">
                        <li class="p-method__frienditem u-ml-minus-10-tab">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/method01.png" media="(min-width: 769px)">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/method01.png" media="(max-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/method01.png" alt="">
                            </picture>
                        </li>
                        <li class="p-method__friend-item">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/or.png" media="(min-width: 769px)">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/or.png" media="(max-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/or.png" alt="">
                            </picture>
                        </li>
                        <li class="p-method__friend-item u-ml-minus-10-tab">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/method02.png" media="(min-width: 769px)">
                                <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/method02.png" media="(max-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/method02.png" alt="">
                            </picture>
                        </li>
                    </ul>
                    <div class="p-method__txt">
                        <p>
                            ※お友達登録をしていただいたお客様には、 お得な情報をお送りすることがございます。<br class="u-tab-none">
                            ご不要の際は、お手数をおかけいたしますが、 ブロックをしていただくようお願いいたします。
                        </p>
                    </div>
                </div>
            </div>
            <ul class="p-method__link-list">
                <li class="p-method__link-item">
                    <a href="/lp/" target="_blank">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/link01.png" media="(min-width: 769px)">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/link01.png" media="(max-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/link01.png" alt="">
                        </picture>
                    </a>
                </li>
                <li class="p-method__link-item">
                    <a href="/sell/" target="_blank">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/link02.png" media="(min-width: 769px)">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/link02.png" media="(max-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/link02.png" alt="">
                        </picture>
                    </a>
                </li>
                <li class="p-method__link-item">
                    <a href="/lp2/" target="_blank">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/link03.png" media="(min-width: 769px)">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/link03.png" media="(max-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/link03.png" alt="">
                        </picture>
                    </a>
                </li>
                <li class="p-method__link-item">
                    <a href="/shop/" target="_blank">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/link04.png" media="(min-width: 769px)">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/line-lp/sp/link04.png" media="(max-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/pc/link04.png" alt="">
                        </picture>
                    </a>
                </li>
            </ul>
        </section>
    </main>
    <footer class="l-footer">
        <div class="l-footer__column">
            <div class="l-footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/footerLogo.png" alt="">
            </div>
            <div class="l-footer__txts">
                <p class="l-footer__tels">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/line-lp/tel.png" alt="" width="45">
                    0120-050-151
                    <span class="l-footer__tels--small">受付時間：午前8時～午後7時(土日祝も営業)</span>
                </p>
                <p class="l-footer__zip">
                    〒262-0012 千葉市花見川区種町33-1
                </p>
                <p class="l-footer__num">
                    古物商許可(千葉県公安員会　第441340000721号)
                </p>
            </div>
        </div>
        <div class="l-footer__copy">
            <small>© 2021 SHINWA PIANO INC.</small>
        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <script src="https://unpkg.com/image-map-resizer@1.0.10/js/imageMapResizer.min.js"></script>
    <script>
        imageMapResize();
    </script>
    <?php wp_footer(); ?>
</body>

</html>