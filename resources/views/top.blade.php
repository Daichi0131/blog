@extends('layouts.app')

@section('title', 'おもちブログ')

@section('sidebar')
    @parent

    <!--
    <p>ここはメインのサイドバーに追加される</p>
    -->
@endsection

@section('content')
    <div class="container-top">
        <div id="page" class="hfeed site">
            <div id="hero-header" class="site-hero-section">
                <header id="masthead" class="site-header" role="banner">
                    <div class="inner">
                        <div class="site-branding">
                            <h1 class="site-title">おもちブログ</h1>
                        </div><!-- .site-branding -->

                        <nav class="jetpack-social-navigation jetpack-social-navigation-svg" role="navigation"
                             aria-label="﻿ソーシャルリンクメニュー">
                            <div class="menu--container">
                                <ul id="menu-%e3%82%bd%e3%83%bc%e3%82%b7%e3%83%a3%e3%83%ab%e3%83%aa%e3%83%b3%e3%82%af"
                                    class="menu-social">
                                    <li id="menu-item-18"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-18">
                                        <a target="_blank" href="https://www.instagram.com/omochi_no_iru_seikatsu/?hl=ja"><img src="/images/glyph-logo_May2016.png" width="5%">
                                        </a></li>
                                    <li id="menu-item-11"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a
                                            target="_blank" rel="noopener noreferrer"
                                            href="http://m.facebook.com/pages/The-World-End-Irish-Pub-/394539213891593">
                                        </a></li>
                                    <li id="menu-item-12"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a
                                            target="_blank" rel="noopener noreferrer"
                                            href="http://twitter.com/worldend_ueno"><img src="/images/Twitter_Social_Icon_Circle_Color.png" width="5%">
                                        </a></li>
                                </ul>
                            </div>
                        </nav><!-- .jetpack-social-navigation -->

                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"
                                id="primary-menu-button">
                            メニュー
                        </button><!-- .menu-toggle -->

                    </div><!-- .inner -->

                    <div class="menu-primary-container">
                        <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                            <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a
                                    href="/">Home</a></li>
                            <li id="menu-item-9" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9"><a
                                    href="https://irishpub398141333.wordpress.com/%e3%81%93%e3%81%ae%e3%82%b5%e3%82%a4%e3%83%88%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/">このサイトについて</a>
                            </li>
                            <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10">
                                <a href="https://irishpub398141333.wordpress.com/%e3%81%8a%e5%95%8f%e3%81%84%e5%90%88%e3%82%8f%e3%81%9b/">お問い合わせ</a>
                            </li>
                        </ul>
                    </div>


                </header><!-- #masthead -->
            </div>
        </div><!-- #page -->

        <!--  -->

    </div>
@endsection
