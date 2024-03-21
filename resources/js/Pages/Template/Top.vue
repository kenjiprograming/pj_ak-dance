<script setup>
import { computed, ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import Header from './Header.vue';
import Footer from './Footer.vue';

let news = ref('')

</script>

<template>
    <Head title="AK-DANCE" />

    <Header />

    <div class="
        main-wrapper
        bg-black
        text-white
        ">

        <div class="mainvisual-wrapper">
            <video autoplay muted playsinline class="">
                <source src="/media/main-pc.mp4" type="video/mp4" />
            </video>
        </div>

        <div class="contents-wrapper">

            <div id="news-wrapper" class="
                news-wrapper
                px-2 py-4
                ">
                <div class="
                    inner
                    ">

                    <div class="
                        heading-outer
                        flex
                        justify-center
                        ">
                        <div class="
                            heading
                            bg-white
                            border-4
                            border-slate-500
                            w-56
                            text-center
                            text-slate-500
                            font-bold
                            ">
                            <h1 class="
                                text-3xl
                                ">News</h1>
                            <p class="
                                text
                                ">お知らせ</p>
                        </div>
                    </div>

                    <div class="
                        list
                        py-2
                        ">
                        <div class="
                            item
                            ms-1
                            border-s-2
                            ps-2
                            mb-3
                            ">
                            <p class="
                                date
                                mb-1
                                ">2024.01.10</p>
                            <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                        <div class="
                            item
                            ms-1
                            border-s-2
                            ps-2
                            mb-3
                            ">
                            <p class="
                                date
                                mb-1
                                ">2024.01.10</p>
                            <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                        <div class="
                            item
                            ms-1
                            border-s-2
                            ps-2
                            mb-3
                            ">
                            <p class="
                                date
                                mb-1
                                ">2024.01.10</p>
                            <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                        <div class="
                            item
                            ms-1
                            border-s-2
                            ps-2
                            mb-3
                            ">
                            <p class="
                                date
                                mb-1
                                ">2024.01.10</p>
                            <p class="text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>

                    <div class="
                        button-outer
                        flex
                        justify-center
                        ">
                        <Link :href="route('news.index')" class="
                            button-medium
                            text-slate-500
                            border-2
                            border-slate-500
                            py-3 px-8
                            w-30
                            hover:bg-white
                            ">
                            <p>一覧はこちら</p>
                        </Link>
                    </div>
                </div>
            </div>

            <div id="career-wrapper" class="
                career-wrapper
                my-20
                ">
                <div class="
                    career-box
                    flex
                    ">

                    <div class="
                        shindenzu
                        hidden
                        ">
                        <img src="/images/shindenzu-red.png" alt="">
                    </div>
                    <div class="
                        shindenzu-sp
                        md:hidden
                        ">
                        <img src="/images/shindenzu-red-sp.png" alt="" class="
                            w-16
                            ">
                    </div>

                    <div class="
                        inner
                        ">
                        <div class="
                            heading-outer
                            flex
                            justify-center
                            ">
                            <div class="
                                heading
                                bg-white
                                border-4
                                border-slate-500
                                w-56
                                text-center
                                text-slate-500
                                font-bold
                                ">
                                <h1 class="
                                    text-3xl
                                    ">Instructor</h1>
                                <p class="
                                    text
                                    ">講師</p>
                            </div>
                        </div>

                        <h2 class="
                            pc-h2
                            my-6
                            text-center
                            text-3xl
                            text-red-600
                            ">AIKA</h2>
                        <p class="
                            text
                            leading-7
                            ">
                            5歳からダンスを始め、今年でダンス歴17年目。（年齢から自動計算）<br class="">
                            ヒップホップ、ガールズ、ブレイク、ロック、ジャズ、ハウス、ポップなど、あらゆるダンスジャンルを習得。<br class="">
                            EXPG元特待生。EXILEや3代目JSBをはじめ、数々のBIGアーティスト達のバックダンサーを務める。<br class="">
                            TV出演やPV出演歴あり。コンテスト等で数々の賞を受賞。<br class="">
                            常に学びと共にダンスで生きる為、韓国やアメリカなど各国へダンス留学などもしながら、<br class="">
                            日々自分の限界を越える為のスキル向上を努めている。
                        </p>
                    </div>

                    <div class="
                        shindenzu
                        hidden
                        ">
                        <img src="/images/shindenzu-red.png" alt="">
                    </div>
                    <div class="
                        shindenzu-sp
                        md:hidden
                        flex
                        flex-col
                        justify-end
                        ">
                        <img src="/images/shindenzu-red-sp.png" alt="" class="
                            w-16
                            ">
                    </div>

                </div>
            </div>

            <div id="concept-wrapper" class="
                concept-wrapper
                my-20
                ">

                <div class="
                    concept-box
                    flex
                    ">

                    <div class="
                        shindenzu
                        hidden
                        ">
                        <img src="/images/shindenzu-silver.png" alt="">
                    </div>
                    <div class="
                        shindenzu-sp
                        md:hidden
                        ">
                        <img src="/images/shindenzu-silver-sp.png" alt="" class="
                            w-16
                            ">
                    </div>

                    <div class="inner">

                        <div class="
                            heading-outer
                            flex
                            justify-center
                            ">
                            <div class="
                                heading
                                bg-white
                                border-4
                                border-slate-500
                                w-56
                                text-center
                                text-slate-500
                                font-bold
                                ">
                                <h1 class="
                                    text-3xl
                                    ">Concept</h1>
                                <p class="
                                    text
                                    ">コンセプト</p>
                            </div>
                        </div>

                        <p class="
                            text
                            my-6
                            leading-7
                            ">
                            ダンサー<span class="aika text-2xl text-red-600">&nbsp;AIKA&nbsp;</span>による<br class="sp-br"><span class="font-bold text-xl text-slate-500">&nbsp;”完全レベル分け制”&nbsp;</span>スクール。<br class="sp-br">
                            一人一人がダンスをしっかり基礎から楽しく学べるスクールです。<br class="pc-br">
                            そして、ダンスのスキルだけでなくダンサー向けの<br class="sp-br"><span class="font-bold text-xl text-slate-500">&nbsp;”ファッションセンス”&nbsp;</span>や<br class="sp-br">
                            <span class="font-bold text-xl text-slate-500">&nbsp;”ヘアメイク”&nbsp;</span>も学びながら、<br class="sp-br">
                            ダンスを生かして一人一人が輝けるようになることがこのスタジオのコンセプトです。
                        </p>

                    </div>

                    <div class="
                        shindenzu
                        hidden
                        ">
                        <img src="/images/shindenzu-silver.png" alt="">
                    </div>
                    <div class="
                        shindenzu-sp
                        md:hidden
                        flex
                        flex-col
                        justify-end
                        ">
                        <img src="/images/shindenzu-silver-sp.png" alt="" class="
                            w-16
                            ">
                    </div>

                </div>
            </div>

            <div class="movie-wrapper" id="movie-wrapper">
                <div class="list">
                    <div class="item">
                        <!-- <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@_aika_0121/video/7238874983752043777" data-video-id="7238874983752043777" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@_aika_0121" href="https://www.tiktok.com/@_aika_0121?refer=embed">@_aika_0121</a> Just Relax😮‍💨 @Dexter Carr choreography⭐️ <a title="la" target="_blank" href="https://www.tiktok.com/tag/la?refer=embed">#la</a> <a title="laダンス留学" target="_blank" href="https://www.tiktok.com/tag/la%E3%83%80%E3%83%B3%E3%82%B9%E7%95%99%E5%AD%A6?refer=embed">#laダンス留学</a> <a title="justrelax" target="_blank" href="https://www.tiktok.com/tag/justrelax?refer=embed">#justrelax</a> <a title="lolabrooke" target="_blank" href="https://www.tiktok.com/tag/lolabrooke?refer=embed">#lolabrooke</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a title="02" target="_blank" href="https://www.tiktok.com/tag/02?refer=embed">#02</a> <a title="dancer" target="_blank" href="https://www.tiktok.com/tag/dancer?refer=embed">#dancer</a> <a title="playgroundla" target="_blank" href="https://www.tiktok.com/tag/playgroundla?refer=embed">#playgroundla</a> <a target="_blank" title="♬ original sound - Dexter Carr" href="https://www.tiktok.com/music/original-sound-7237944492421040938?refer=embed">♬ original sound - Dexter Carr</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script> -->
                    </div>
                    <div class="item">
                        <!-- <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@_aika_0121/video/7235002863796129026" data-video-id="7235002863796129026" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@_aika_0121" href="https://www.tiktok.com/@_aika_0121?refer=embed">@_aika_0121</a> Everyone&#39;s favorite snatched from the front❤️‍🔥<a title="aika" target="_blank" href="https://www.tiktok.com/tag/aika?refer=embed">#aika</a><a title="la" target="_blank" href="https://www.tiktok.com/tag/la?refer=embed">#la</a><a title="laダンス留学" target="_blank" href="https://www.tiktok.com/tag/la%E3%83%80%E3%83%B3%E3%82%B9%E7%95%99%E5%AD%A6?refer=embed">#laダンス留学</a> <a title="playgroundla" target="_blank" href="https://www.tiktok.com/tag/playgroundla?refer=embed">#playgroundla</a> <a title="snatched" target="_blank" href="https://www.tiktok.com/tag/snatched?refer=embed">#snatched</a><a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a target="_blank" title="♬ オリジナル楽曲  - AIKA" href="https://www.tiktok.com/music/オリジナル楽曲-AIKA-7235002923002989314?refer=embed">♬ オリジナル楽曲  - AIKA</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script> -->
                    </div>
                </div>
            </div>

            <div class="
                sns-wrapper
                my-20
                ">
                <div class="
                    list
                    flex
                    justify-evenly
                    ">
                    <div class="
                        item
                        ">
                        <a href="https://www.instagram.com/_aika_0121/" target="_blank">
                            <img src="/images/instagram-icon.svg" alt="">
                        </a>
                    </div>
                    <div class="
                        item
                        ">
                        <a href="https://www.tiktok.com/@_aika_0121" target="_blank">
                            <img src="/images/tiktok-icon.svg" alt="">
                        </a>
                    </div>
                    <div class="
                        item
                        ">
                        <a href="https://www.youtube.com/@user-ih6jd4cf6q" target="_blank">
                            <img src="/images/youtube-icon.svg" alt="">
                        </a>
                    </div>

                </div>

            </div>

            <div id="schedule-wrapper" class="
                schedule-wrapper
                my-20
                ">
                <div class="
                    inner
                    flex
                    flex-col
                    items-center
                    ">

                    <div class="
                        heading-outer
                        flex
                        justify-center
                        ">
                        <div class="
                            heading
                            bg-white
                            border-4
                            border-slate-500
                            w-56
                            text-center
                            text-slate-500
                            font-bold
                            ">
                            <h1 class="
                                text-3xl
                                ">Schedule</h1>
                            <p class="
                                text
                                ">レッスン日程</p>
                        </div>
                    </div>

                    <div class="
                        my-6
                        w-11/12
                        overflow-scroll
                        block
                        ">
                        <img src="/images/schedule-table.svg" alt="" class="
                            max-w-none
                        ">
                    </div>

                </div>
            </div>

            <div id="access-wrapper" class="
                access-wrapper
                my-20
                ">

                <div class="inner">

                    <div class="
                        heading-outer
                        flex
                        justify-center
                        ">
                        <div class="
                            heading
                            bg-white
                            border-4
                            border-slate-500
                            w-56
                            text-center
                            text-slate-500
                            font-bold
                            ">
                            <h1 class="
                                text-3xl
                                ">Access</h1>
                            <p class="
                                text
                                ">アクセス</p>
                        </div>
                    </div>

                    <iframe class="
                        map
                        my-6
                        w-full
                        "
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.810517090736!2d137.762090174159!3d34.73517028136524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae09e16812de9%3A0xbc6b88d77fda8033!2z6Z-z5qW95aSp5Zu944O75rWc5p2-5biC6YeO5bqXIOmfs-alveOBruiyuOOBl-ODrOODs-OCv-ODq-OCueOCv-OCuOOCqg!5e0!3m2!1sja!2sjp!4v1706926293431!5m2!1sja!2sjp"
                        width="1000" height="562.5" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                    <p class="
                        text
                        px-6
                        ">
                        会場：<a class="link text-slate-500 underline" href="#" target="_blank">音楽天国 浜松市野店</a><br>
                        住所：〒435-0052 <br><span style="margin-left: 50px;">静岡県浜松市中央区天王町１９８２−３</span>
                    </p>

                </div>
            </div>

            <div class="
                price-wrapper
                my-20
                ">
                <div class="
                    button-outer
                    flex
                    justify-evenly
                    ">
                    <a href="./price.html" class="
                        button-large
                        border
                        border-slate600
                        px-20
                        py-5
                        ">
                        <p class="
                            text-slate-600
                            text-md
                            font-extrabold
                            ">レッスン料金はこちら</p>
                    </a>
                </div>
            </div>

            <div id="contact-wrapper" class="
                contact-wrapper
                mt-20
                px-4
                py-20
                ">

                <div class="
                    inner
                    py-16
                    border-t
                    border-b
                    border-slate-600
                    ">

                    <div class="
                        heading-outer
                        flex
                        justify-center
                        ">
                        <div class="
                            heading
                            bg-white
                            border-4
                            border-slate-500
                            w-56
                            text-center
                            text-slate-500
                            font-bold
                            ">
                            <h1 class="
                                text-3xl
                                ">Contact</h1>
                            <p class="
                                text
                                ">お問い合わせ</p>
                        </div>
                    </div>

                    <p class="
                        text
                        my-6
                        text-center
                        px-6
                        ">
                        お問い合わせやお依頼は、お気軽に以下の公式ラインよりご連絡ください。<br>
                        1週間以内に返信いたします。
                    </p>

                    <a href="#" target="_blank" class="
                        line-icon
                        flex
                        justify-center
                        ">
                        <img src="/images/line-icon.svg" alt="">
                    </a>

                </div>
            </div>

        </div>
    </div>

    <Footer />

</template>
