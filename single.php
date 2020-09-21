<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>サンプルサイト</title>
    <link href="./assets/css/styles.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <div class="header_logo">
                <h1><a href="/"><img src="./assets/img/common/logo@2x.png" alt="BISTRO CALME"></a></h1>
            </div>

            <div class="header_desc"><p>サイトのキャッチフレーズ</p></div>

            <form class="header_search">
                <input type="text" placeholder="キーワードを入力">
                <i class="fas fa-search"></i>
            </form>
        </div>

        <div class="header_links">
            <nav class="gnav">
                <ul class="">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">わたしたちについて</a></li>
                    <li><a href="#">アクセス</a></li>
                    <li><a href="#">最新情報</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                </ul>
            </nav>

            <ul class="header_sns">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>

        <svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
            <defs><clipPath id="clip-path"><rect width="30" height="30" fill="none"/></clipPath></defs>
            <g clip-path="url(#clip-path)">
                <rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)"/>
                <rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)"/>
                <rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)"/>
            </g>
        </svg>
    </header>

    <?php get_header(); ?>

    <h2 class="pageTitle">最新情報<span>NEWS</span></h2>

    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                        <header class="article_header">
                            <h2 class="article_title"><?php the_title(); ?></h2>
                            <div class="article_meta">
                                <?php the_category(); ?>
                                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                            </div>
                        </header>

                        <div class="article_body">
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                        </div>

                        <div class="postLinks">
                            <div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron--left"></i>%link'); ?></div>
                            <div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron--right"></i>'); ?></div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>

                </div>

                <div class="col-12 col-md-3">
                    <?php get_sidebar('categories'); ?>
                    <?php get_sidebar('archives'); ?>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>

    <div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

    <footer class="footer">
        <div class="container">
            <div class="footer_inner">
                <nav>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">わたしたちについて</a></li>
                        <li><a href="#">アクセス</a></li>
                        <li><a href="#">最新情報</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </nav>
                <div class="footer_copyright">
                    <small>&copy; BISTRO CALME All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
