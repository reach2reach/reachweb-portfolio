    <?php get_header(); ?>
    
            <main>
                <div class="p-mv">
                    <section class="l-slider p-slider">
                            <div class="image1"></div>
                            <div class="image2"></div>
                            <div class="image3"></div>
                            <div class="image4"></div>
                            <div class="image5"></div>
                    </section>
                    
                    <section class="p-mv__cp">
                        <h3 class="p-mv__cp__think">Think</h3>
                        <h3 class="p-mv__cp__imagine">Imagine</h3>
                        <h3 class="p-mv__cp__design">Design</h3>
                        <h3 class="p-mv__cp__connect">Connect</h3>
                    </section>
                    <p class="p-mv__credit">Photo by Reach</p>
                </div>

                <div id="about" class="l-about p-about">
                    <div class="p-about__title--wrapper">
                        <h2 class="p-about__title" id="about-me">About Me</h2>
                    </div>
                    <div class="p-about__profile">
                        <figure class="p-about__profile--photo">
                            <img src="<?php echo esc_url (get_template_directory_uri().'/Images/profile/reach-profile.jpg');?>" alt="Reach profile photo">
                        </figure>
                        
                        <section class="p-about__profile--hello">
                            <svg class="mask" viewBox="0 0 950.87 422.49" id="move">
                            <defs>
                                <!-- アニメーション画像 -->
                                <mask id="clipMask">
                                    <!--マスクのpath-->
                                    <path class="cls-2" d="M100.32,13.17S21.69,166.88,21.69,165.88c0,0,13.5-24.5-1.5-49.5s-17-25-14-31,16-14,61-15,137,1,139,2S200.89,5,200.89,5s-113.7,207.38-89.7,197.38l55.2-59.55s34.14-9.06,25.47-20.75c0,0-17.27-9.4-25.47,11.45s13.8,25.85,21.8,24.85,62.61-22.94,65.3-34.47c0,0,46.7-67.53,41.7-75.53s-48,72-47,79c0,0-10.39,29.05,5.3,30.53,0,0,17.7.47,26.7-5.53,0,0,33-20,34-24,0,0,53-68,47-80s-51,78-49,89c0,0-4.68,19.46,9.16,20.23s54.74-19.87,57.79-25.05,16.32-13.12,23.19-12.65c0,0-33.81,10.41-25,30.44,0,0,3.83,10,15.83,7S409.75,143.7,411,143c0,0,14.3-19.27,1.76-21,0,0-14.54-1.7-4.54,21.3s66-7,67-12,13.11,21.83,13.11,21.83,11.89,5.17-3.11,12.17"/>
                                    <path class="cls-2" d="M62.78,284.45s-3.59-8.07,11.41-9.07,20.13,1,26.56,0,12.92-2.58,14.18-5.29c0,0-8.74,9.29-16.74,29.29,0,0-43,100-51,102,0,0-11,14-16,14s-21-2.24-26-35.12"/>
                                    <path class="cls-2" d="M149.61,267.71s11.58,12.67-3.42,18.67,24,94,24,94-19,34-17,34c0,0-1,5,6-3s25-32,25-32v6.22c0,2.78-1,20.78,4,19.78,0,0,5,1,9-4s18-23,18-23,3-2,1,4c0,0-6,26-1,28,0,0,3.1,5.09,7.55,5.54,0,0,9.45-.54,12.45-2.54s39-21,40-24"/>
                                    <path class="cls-2" d="M397.59,281.44s-61.93,136.15-64.67,136.05c0,0,14.27-15.11,2.27-59.11s-13-58,3-73c0,0,18.8-20.29,59.4-17.14s68.6,17.14,71.6,32.14-19,31-32,36-88.49,25.93-88.74,23.47.74-10.47,34.74,12.53,68,50,75,41,28.18-13.87,28.18-13.87,25.82-6.13,25.82-18.13-27,1-27,11c0,0-6,18,11,21s24,0,31-3,33-17,37-20S581,373.1,597.07,379.24c0,0-22.88-2.86-34.88,15.14s3,21,3,21,12-3,15-7c0,0,27-28,27-32,0,0,3-2-1,5s-12,19-9,27,11,8,13,7c0,0,23-9,24-12l16-11s21-28,31-9c0,0-10-18-33,14,0,0-3,15,5,16,0,0,9,4,14,2,0,0,18-3,22-5s40-17,40-19c0,0,14-15,16-19s36-55,32-66S740.8,362.74,737,375.06s-15.8,39.32-13.8,40.32,11.15-13.38,17.07-18.19,19.93-20.81,23.93-18.81c0,0,3-2,4,9,0,0-4,19-1,21,0,0,3.1,7.2,7.55,7.1,0,0,15.45-1.1,25.45-8.1s29-18,30-19,115.68-92.11,115.68-92.11-59.43,98.46-50.06,97.79a3.14,3.14,0,0,1,2.4.6c.48.47-1.74,3.91-11,14.72,2.95-1.61,5.73-2.23,6.54-1.28s-.38,4.26-3.62,7.59"/>
                                </mask>
                            </defs>
                            <!-- ベース画像 -->
                            <image xlink: href="<?php echo esc_url (get_template_directory_uri().'/Images/profile/hellobase.svg');?>" width="100%" height="100%" mask="url(#clipMask)"></image>
                            </svg>
                        </section>
                    </div>

                    <div class="p-about--content">
                        <section class="p-about__text">
                            <p class="p-about__text--intro">はじめまして、reachです。<br>Web制作の世界に惹かれ、2021年よりRaiseTechにて学習開始。<br>
                            自分の書いたコードが画面上で実装されることが何より楽しく、日々スキルアップに励んでいます。<br>
                            デザインとコーディング、両方ができるWebデザイナーを目指し、Think(考える)、Imagine(想像する)、Design(デザイン)、Connect(繋ぐ)を大切にし、ヒアリングを丁寧に行いながらお客様のご要望や目的・ビジョンへ向かって、ご満足いただけるお仕事をしていきます。また制作を通じて、お客さまはもちろん関わる全ての人にとって、様々な方向・可能性へ繋がっていけるようなお仕事をしていくことを心がけています。
                            <br>プライベートでは、翻訳のお仕事に携わらせて頂いたり、舞台演劇でのサウンド/ビジュアルデザインチームの一員として参加させて頂いたりと、多方面での活動も適時行なっています。
                            ご興味のある方はお気軽にお問い合わせください。どうぞよろしくお願い致します。</p>
                            
                            <p class="p-about__text--skill">Skill:&nbsp;HTML/CSS/SASS/FLOCSS/jQuery/WordPress/Wix/Git/XD/Photoshop/Illustrator/Figma</p>
                            
                            <section class="p-about__text--course">
                                <p>2021年5月&nbsp;&nbsp;&nbsp;&nbsp;WordPressコース受講開始</p>
                                <p>2021年8月&nbsp;&nbsp;&nbsp;&nbsp;WordPressコース修了</p>
                                <p>2021年10月&nbsp;&nbsp;デザインコース受講開始</p>
                                <p>2022年2月&nbsp;&nbsp;&nbsp;&nbsp;デザインコース修了</p>
                                <p>2022年3月&nbsp;&nbsp;&nbsp;&nbsp;Lステップコース受講開始</p>
                                <p>2022年4月&nbsp;&nbsp;&nbsp;&nbsp;Lステップコース受講終了</p>
                            </section>
                        </section>
    
                        <section class="p-about__accordion">
                            <h3 class="p-about__accordion--title">Profile</h3>
                            <p class="p-about__accordion--content">
                                大分県別府市出身。<br>
                                高校時代の留学を機に、海外と日本を行き来した生活を送る。ブリスベン、ニューヨーク、ロサンゼルス、ブダペストを転々とする。<br>
                                2020年に帰国後、不定期に翻訳や舞台のお仕事に携わりながら、現在は沖縄と大分の2拠点を中心に生活。
                                <br><br>
                                すきなもの：旅、自然、お酒、ヨガ、音楽、写真、トランペット、ゲーム、自転車
                            </p>
                        </section>
                    </div>
                </div>

                <div id="service" class="l-service p-service">
                    <h2 class="p-service__title">Service</h2>

                    <div class="l-service__container">
                        <Section class="p-service__design">
                            <div class="p-service__design--circle">
                                <p>Design</p>
                            </div>
                            <h3 class="p-service__design--title">デザイン</h3>
                            <p class="p-service__design--text">Webサイト/LPをはじめ、ロゴやバナー、Lステップ構築・リッチメニューなどをデザインします。</p>
                            <div class="p-service__design__accordion">
                                <p class="p-service__design__accordion--title">Read more</p>
                                <p class="p-service__design__accordion--content">
                                    Webサイト/LPデザインでは、お客様とのヒアリングをもとに、ワイヤーフレームを作成・デザインしていきます。<br>
                                    ロゴやバナーなどのデザインでは、PhotoshopやIllustratorを使用して作成していきます。<br>
                                    Lステップ構築・デザイン、リッチメニュー作成も行います。<br>
                                    具体的なご要望をお聞きしながら、お客様のニーズに適したデザインを考え、ご提案致します。
                                </p>
                            </div>
                        </Section>

                        <Section class="p-service__coding">
                            <div class="p-service__coding--circle">
                                <p>Coding</p>
                            </div>
                            <h3 class="p-service__coding--title">コーディング</h3>
                            <p class="p-service__coding--text">デザインデータをもとにコーディングを行います。</p>
                            <div class="p-service__coding__accordion">
                                <p class="p-service__coding__accordion--title">Read more</p>
                                <p class="p-service__coding__accordion--content">
                                    SEOを意識したHTMLマークアップを心がけています。<br>
                                    FLOCSSを使用したCSS設計で、CSSをより効率的に記述し、保守性を向上しています。jQueryでインタラクティブなウェブサイトも作成可能です。<br>
                                    また、スマートフォンをはじめ、タブレット、PCなど、マルチデバイスに対応したサイトを制作致します。ユーザビリティを考え、お客様のご要望に最適なレスポンシブデザインをご提案致します。
                                </p>
                            </div>
                        </Section>

                        <Section class="p-service__WordPress">
                            <div class="p-service__WordPress--circle">
                                <p>WordPress</p>
                            </div>
                            <h3 class="p-service__WordPress--title">ワードプレス</h3>
                            <p class="p-service__WordPress--text">WordPressでホームページを制作致します。</p>
                            <div class="p-service__WordPress__accordion">
                                <p class="p-service__WordPress__accordion--title">Read more</p>
                                <p class="p-service__WordPress__accordion--content">
                                    既存サイトのWordPress化も行います。<br>
                                    オリジナルテーマの作成・カスタマイズなども可能です。<br>
                                    運用後、WordPressのサイトの管理・運営のサポートも致します。<br>
                                </p>
                            </div>
                        </Section>
                    </div>
                </div>

                <div id="work" class="l-works p-works">
                    <h2 class="p-works__title">Work</h2>
                    <section class="p-works__coding">
                        <h3 class="p-works__coding--title">WEBサイトコーディング・WordPress</h3>
                        <div class="p-works__coding--content">
                            <figure class="p-works__coding--content--Raisetech">
                                <a class="p-works__coding--content--Raisetech-img image__hover" href="<?php echo get_permalink(49);?>">
                                    <img src="<?php echo esc_url (get_template_directory_uri().'/Images/works/wp/RaiseTech.jpg');?>" alt="RaiseTech-copy photo">
                                </a>
                                <figcaption>
                                    <a class="p-works__coding--content--Raisetech-title" href="<?php echo get_permalink(49);?>">RaiseTech公式サイト模写</a>
                                </figcaption>
                            </figure>
                            <figure class="p-works__coding--content--hamburger">
                                <a class="p-works__coding--content--hamburger-img image__hover" href="<?php echo get_permalink(79);?>">
                                    <img src="<?php echo esc_url (get_template_directory_uri().'/Images/works/wp/raisetech-hamburger.jpg');?>"alt="RaiseTech-hamburger photo">
                                </a>
                                <figcaption>
                                    <a class="p-works__coding--content--hamburger-title" href="<?php echo get_permalink(79);?>">RaiseTech 架空ハンバーガーサイト</a>
                                </figcaption>
                            </figure>
                        </div>
                    </section>
                    <hr class="p-works__line">
                    <section class="p-works__banner">
                        <h3 class="p-works__banner--title">バナーデザイン</h3>
                        <div class="p-works__banner--content">
                            <figure class="p-works__banner--content--RaiseTech1">
                                <div class="p-works__banner--content--RaiseTech1-box">
                                    <a class="p-works__banner--content--RaiseTech1-box-img image__hover" href="<?php echo get_permalink(89);?>">
                                        <img src="<?php echo esc_url (get_template_directory_uri().'/Images/works/banner/RaiseTech-banner1.png');?>"alt="RaiseTech-banner1">
                                    </a>  
                                </div>
                                <figcaption>
                                    <a class="p-works__banner--content--RaiseTech1-title" href="<?php echo get_permalink(89);?>">スクール課題</a>
                                </figcaption>
                            </figure>
                            <figure class="p-works__banner--content--RaiseTech2">
                                <div class="p-works__banner--content--RaiseTech2-box">
                                    <a class="p-works__banner--content--RaiseTech2-box-img image__hover" href="<?php echo get_permalink(106);?>">
                                        <img src="<?php echo esc_url (get_template_directory_uri().'/Images/works/banner/RaiseTech-banner2.png');?>" alt="RaiseTech-banner2">
                                    </a>
                                </div>
                                <figcaption>
                                    <a class="p-works__banner--content--RaiseTech2-title" href="<?php echo get_permalink(106);?>">スクール課題</a>
                                </figcaption>
                            </figure>
                            <figure class="p-works__banner--content--Raisejuku">
                                <div class="p-works__banner--content--Raisejuku-box">
                                    <a class="p-works__banner--content--Raisejuku-box-img image__hover" href="<?php echo get_permalink(120);?>">
                                        <img src="<?php echo esc_url (get_template_directory_uri().'/Images/works/banner/Raisejuku-banner.png');?>" alt="Raisejuku-banner">
                                    </a>
                                </div>
                                <figcaption>
                                    <a class="p-works__banner--content--Raisejuku-title" href="<?php echo get_permalink(120);?>">スクール課題</a>
                                </figcaption>
                            </figure>
                        </div>
                    </section> 
                    <hr class="p-works__line">
                    <section class="p-works__logo">
                        <h3 class="p-works__logo--title">ロゴデザイン</h3>
                        <div class="p-works__logo--content">
                            <figure class="p-works__logo--content--miraini">
                                <div class="p-works__logo--content--miraini-box">
                                    <a class="p-works__logo--content--miraini-box-img image__hover" href="<?php echo get_permalink(126);?>">
                                        <img src="<?php echo esc_url (get_template_directory_uri().'/Images/works/logo/miraini-logo.svg');?>" alt="miraini-logo">
                                    </a>  
                                </div>
                                <figcaption>
                                    <a class="p-works__logo--content--miraini-title" href="<?php echo get_permalink(126);?>">スクール課題・<br class="p-works__logo--content--miraini-title-newline">ミライニ薬局ロゴデザイン</a>
                                </figcaption>
                            </figure>
                        </div>
                    </section> 
                    <hr class="p-works__line">
                    <section class="p-works__web">
                        <h3 class="p-works__web--title">Webサイトデザイン</h3>
                        <div class="p-works__web--content">
                            <figure class="p-works__web--content--asahiya">
                                <a class="p-works__web--content--asahiya-img image__hover" href="<?php echo get_permalink(181);?>">
                                    <img src="<?php echo esc_url (get_template_directory_uri().'/Images/works/web/asahiya/asahiya.jpg');?>"alt="asahiya-web">
                                </a>     
                                <figcaption>
                                    <a class="p-works__web--content--asahiya-title" href="<?php echo get_permalink(181);?>">二彩乃湯宿&nbsp;アサヒヤ</a>
                                </figcaption>
                            </figure>
                            <figure class="p-works__web--content--miraini">
                                <a class="p-works__web--content--miraini-img image__hover" href="<?php echo get_permalink(139);?>">
                                    <img src="<?php echo esc_url (get_template_directory_uri().'/Images/works/web/miraini/miraini-top.png');?>" alt="miraini-web">
                                </a>     
                                <figcaption>
                                    <a class="p-works__web--content--miraini-title" href="<?php echo get_permalink(139);?>">スクール課題・<br class="p-works__web--content--miraini-title-newline">ミライニ薬局Webデザイン</a>
                                </figcaption>
                            </figure>
                        </div>
                    </section> 
                    <hr class="p-works__line">
                </div>

                <div id="contact" class="l-contact p-contact">
                    <h2 class="p-contact__title">Contact</h2>

                    <div class="l-contact__wrapper">
                        <section class="p-contact--content">
                            <?php echo do_shortcode( '[contact-form-7 id="214" title="Contact"]' ); ?>
                        </section>
                    </div>
                </div>
            </main>
            <?php get_footer(); ?>
