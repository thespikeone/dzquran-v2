<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/head.php') ?>
</head>

<body>

    <div class="preloader">
        <div id="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


    <header class="header">
        <?php require('partials/header.php') ?>
    </header>


    <div class="sidebar">

        <?php require('partials/sidebar.php') ?>

    </div>


    <section class="main">
        <div class="container-fluid">

            <section class="row">
                <div class="col-lg-9">
                    <div class="hero owl-carousel" id="hero">
                        <div class="hero__slide" data-bg="assets/img/slider/slider1.jpg">
                            <h1 class="hero__title">Music template for audio platform</h1>
                            <p class="hero__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="hero__btns">
                                <a href="#" class="hero__btn hero__btn--green">Buy Now <i class="fal fa-long-arrow-alt-right ml-2 fa-lg"></i></a>
                                <a href="#" class="hero__btn">Know more</a>
                            </div>
                        </div>
                        <div class="hero__slide" data-bg="assets/img/slider/slider2.jpg">
                            <h2 class="hero__title">Enjoy your favourite music with us</h2>
                            <p class="hero__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="hero__btns">
                                <a href="#" class="hero__btn hero__btn--green">Know more <i class="fal fa-long-arrow-alt-right ml-2 fa-lg"></i></a>
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="hero__btn hero__btn--video open-video"><i class="far fa-play fa-lg"></i> WATCH NOW</a>
                            </div>
                        </div>
                        <div class="hero__slide" data-bg="assets/img/slider/slider3.jpg">
                            <h2 class="hero__title">Music streaming & Record Template</h2>
                            <p class="hero__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="hero__btns">
                                <a href="#" class="hero__btn">Know more <i class="fal fa-long-arrow-alt-right ml-2 fa-lg"></i></a>
                            </div>
                        </div>
                    </div>

                    <button class="main__nav main__nav--hero main__nav--prev" data-nav="#hero" type="button"><i class="fal fa-long-arrow-alt-left fa-2x mr-4"></i></button>
                    <button class="main__nav main__nav--hero main__nav--next" data-nav="#hero" type="button"><i class="fal fa-long-arrow-alt-right fa-2x"></i></button>
                </div>

                <div class="col-lg-3">
                    <div class="banner-area">
                        <img src="assets/img/banner/banner1.jpg" class="mb-4" alt="">
                        <img src="assets/img/banner/banner2.jpg" alt="">
                    </div>
                </div>
            </section>


            <section class="row row--grid">

                <div class="col-12">
                    <div class="main__title">
                        <h2>Recently Played</h2>
                        <a href="releases.html" class="main__link">View More <i class="fal fa-long-arrow-alt-right ml-2"></i></a>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover1.jpg" alt="">
                            <a href="release.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release.html">Enjoy Yourself</a></h3>
                            <span><a href="artist.html">Prince</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover2.jpg" alt="">
                            <a href="release.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release.html">The Climb Back</a></h3>
                            <span><a href="artist.html">Elton Jhon</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover3.jpg" alt="">
                            <a href="release.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release.html">More Than My</a></h3>
                            <span><a href="artist.html">Morgan</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover4.jpg" alt="">
                            <a href="release.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release.html">Girls Like You</a></h3>
                            <span><a href="artist.html">Dababy</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover5.jpg" alt="">
                            <a href="release.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release.html">I Like It</a></h3>
                            <span><a href="artist.html">Malone</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover6.jpg" alt="">
                            <a href="release.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release.html">In My Feelings</a></h3>
                            <span><a href="artist.html">Drake</a></span>
                        </div>
                    </div>
                </div>
            </section>


            <section class="row row--grid">

                <div class="col-12">
                    <div class="main__title">
                        <h2>Latest Release</h2>
                        <a href="releases.html" class="main__link">View More <i class="fal fa-long-arrow-alt-right ml-2"></i></a>
                    </div>
                </div>

                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover1.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Until I Met You</a></h3>
                            <span><a href="artist.html">Ava Cornish</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover2.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Mood Swings</a></h3>
                            <span><a href="artist.html">Yeaji</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover3.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Something More</a></h3>
                            <span><a href="artist.html">Morgan</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover4.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Tell Me Yu</a></h3>
                            <span><a href="artist.html">Mutha</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover5.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Up Up Away</a></h3>
                            <span><a href="artist.html">Britney</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover6.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Does To Me</a></h3>
                            <span><a href="artist.html">Elves Presily</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover7.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Girls Of My</a></h3>
                            <span><a href="artist.html">Frank Li</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover8.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Meant To Be</a></h3>
                            <span><a href="artist.html">Loky Comb</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover9.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Pretty Hearts</a></h3>
                            <span><a href="artist.html">Niki</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover10.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Enjoy Yourselft</a></h3>
                            <span><a href="artist.html">Cup Kakke</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover11.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">One Of Them</a></h3>
                            <span><a href="artist.html">Tierra</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <div class="album">
                        <div class="album__cover">
                            <img src="assets/img/covers/cover12.jpg" alt="">
                            <a href="release-single.html"><i class="far fa-play"></i></a>
                            <span class="album__stat">
                                <span><i class="far fa-heart"></i> 10</span>
                                <span><i class="far fa-music"></i> 20k</span>
                            </span>
                        </div>
                        <div class="album__title">
                            <h3><a href="release-single.html">Love Me Like</a></h3>
                            <span><a href="artist.html">Eille Gold</a></span>
                        </div>
                    </div>
                </div>
            </section>


            <section class="row row--grid">

                <div class="col-12">
                    <div class="main__title">
                        <h2>Upcoming Events</h2>
                        <a href="events.html" class="main__link">View More <i class="fal fa-long-arrow-alt-right ml-2"></i></a>
                    </div>
                </div>

                <div class="col-12">
                    <div class="main__carousel-wrap">
                        <div class="main__carousel main__carousel--events owl-carousel" id="events">
                            <div class="event" data-bg="assets/img/events/event1.jpg">
                                <span class="event__time">10:00 am</span>
                                <span class="event__date">Apr 1, 2021</span>
                                <h3 class="event__title"><a href="event.html">Contrary to popular</a></h3>
                                <p class="event__address">1122 Pritchard Court,NY,USA</p>
                                <a href="#" class="event__ticket"> Buy ticket <i class="fal fa-long-arrow-alt-right ml-2"></i> </a>
                            </div>
                            <div class="event" data-bg="assets/img/events/event2.jpg">
                                <span class="event__time">10:00 am</span>
                                <span class="event__date">Apr 1, 2021</span>
                                <h3 class="event__title"><a href="event.html">Sed ut perspiciatis </a></h3>
                                <p class="event__address">1122 Pritchard Court,NY,USA</p>
                                <a href="#" class="event__ticket"> Buy ticket <i class="fal fa-long-arrow-alt-right ml-2"></i> </a>
                            </div>
                            <div class="event" data-bg="assets/img/events/event3.jpg">
                                <span class="event__time">10:00 am</span>
                                <span class="event__date">Apr 1, 2021</span>
                                <h3 class="event__title"><a href="event.html">At vero eos et accusamus</a></h3>
                                <p class="event__address">1122 Pritchard Court,NY,USA</p>
                                <span class="event__out">Sold out</span>
                            </div>
                            <div class="event" data-bg="assets/img/events/event4.jpg">
                                <span class="event__time">10:00 am</span>
                                <span class="event__date">Apr 1, 2021</span>
                                <h3 class="event__title"><a href="event.html">Righteous indignation</a></h3>
                                <p class="event__address">1122 Pritchard Court,NY,USA</p>
                                <a href="#" class="event__ticket"> Buy ticket <i class="fal fa-long-arrow-alt-right ml-2"></i> </a>
                            </div>
                            <div class="event" data-bg="assets/img/events/event5.jpg">
                                <span class="event__time">10:00 am</span>
                                <span class="event__date">Apr 1, 2021</span>
                                <h3 class="event__title"><a href="event.html">The wise man therefore</a></h3>
                                <p class="event__address">1122 Pritchard Court,NY,USA</p>
                                <span class="event__out">Sold out</span>
                            </div>
                            <div class="event" data-bg="assets/img/events/event6.jpg">
                                <span class="event__time">10:00 am</span>
                                <span class="event__date">Apr 1, 2021</span>
                                <h3 class="event__title"><a href="event.html">Rejects pleasures to secure</a></h3>
                                <p class="event__address">1122 Pritchard Court,NY,USA</p>
                                <a href="#" class="event__ticket"> Buy ticket <i class="fal fa-long-arrow-alt-right ml-2"></i> </a>
                            </div>
                        </div>
                        <button class="main__nav main__nav--prev" data-nav="#events" type="button"> <i class="fal fa-long-arrow-alt-left fa-lg mr-2"></i> </button>
                        <button class="main__nav main__nav--next" data-nav="#events" type="button"> <i class="fal fa-long-arrow-alt-right fa-lg"></i> </button>
                    </div>
                </div>
            </section>


            <section class="row row--grid">

                <div class="col-12">
                    <div class="main__title">
                        <h2>Artists</h2>
                        <a href="artists.html" class="main__link">View More <i class="fal fa-long-arrow-alt-right ml-2"></i></a>
                    </div>
                </div>

                <div class="col-12">
                    <div class="main__carousel-wrap">
                        <div class="main__carousel main__carousel--artists owl-carousel" id="artists">
                            <a href="artist-single.html" class="artist">
                                <div class="artist__cover">
                                    <img src="assets/img/artists/artist1.jpg" alt="">
                                </div>
                                <h3 class="artist__title">Douglass Jones</h3>
                            </a>
                            <a href="artist-single.html" class="artist">
                                <div class="artist__cover">
                                    <img src="assets/img/artists/artist2.jpg" alt="">
                                </div>
                                <h3 class="artist__title">Flores</h3>
                            </a>
                            <a href="artist-single.html" class="artist">
                                <div class="artist__cover">
                                    <img src="assets/img/artists/artist3.jpg" alt="">
                                </div>
                                <h3 class="artist__title">R Savage</h3>
                            </a>
                            <a href="artist-single.html" class="artist">
                                <div class="artist__cover">
                                    <img src="assets/img/artists/artist4.jpg" alt="">
                                </div>
                                <h3 class="artist__title">James Swann</h3>
                            </a>
                            <a href="artist-single.html" class="artist">
                                <div class="artist__cover">
                                    <img src="assets/img/artists/artist5.jpg" alt="">
                                </div>
                                <h3 class="artist__title">Sandy White</h3>
                            </a>
                            <a href="artist-single.html" class="artist">
                                <div class="artist__cover">
                                    <img src="assets/img/artists/artist6.jpg" alt="">
                                </div>
                                <h3 class="artist__title">Edith Sellers</h3>
                            </a>
                            <a href="artist-single.html" class="artist">
                                <div class="artist__cover">
                                    <img src="assets/img/artists/artist7.jpg" alt="">
                                </div>
                                <h3 class="artist__title">Joy Orta</h3>
                            </a>
                            <a href="artist-single.html" class="artist">
                                <div class="artist__cover">
                                    <img src="assets/img/artists/artist8.jpg" alt="">
                                </div>
                                <h3 class="artist__title">K Allison</h3>
                            </a>
                        </div>
                        <button class="main__nav main__nav--prev" data-nav="#artists" type="button"> <i class="fal fa-long-arrow-alt-left fa-lg mr-2"></i> </button>
                        <button class="main__nav main__nav--next" data-nav="#artists" type="button"> <i class="fal fa-long-arrow-alt-right fa-lg"></i> </button>
                    </div>
                </div>
            </section>

            <section class="row row--grid">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="row row--grid">

                        <div class="col-12">
                            <div class="main__title">
                                <h2><i class="far fa-music"></i><a href="#">Popular</a></h2>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="main__list">
                                <li class="single-item">
                                    <a data-link data-title="Until I Met You" data-artist="Ava Cornish" data-img="assets/img/covers/cover1.jpg" href="assets/audio/preview1.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover1.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Until I Met You</a></h4>
                                        <span><a href="artist.html">Ava Cornish</a></span>
                                    </div>
                                    <span class="single-item__time">3:05</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="Mood Swings" data-artist="Yeaji" data-img="assets/img/covers/cover2.jpg" href="assets/audio/preview2.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover2.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Mood Swings</a></h4>
                                        <span><a href="artist.html">Yeaji</a></span>
                                    </div>
                                    <span class="single-item__time">2:05</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="Something More" data-artist="Morgan" data-img="assets/img/covers/cover3.jpg" href="assets/audio/preview3.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover3.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Something More</a></h4>
                                        <span><a href="artist.html">Morgan</a></span>
                                    </div>
                                    <span class="single-item__time">4:30</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="Tell Me Yu" data-artist="Mutha" data-img="assets/img/covers/cover4.jpg" href="assets/audio/preview1.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover4.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Tell Me Yu</a></h4>
                                        <span><a href="artist.html">Mutha</a></span>
                                    </div>
                                    <span class="single-item__time">2:32</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="Up Up Away" data-artist="Britney" data-img="assets/img/covers/cover5.jpg" href="assets/audio/preview2.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover5.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i></a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Up Up Away</a></h4>
                                        <span><a href="artist.html">Britney</a></span>
                                    </div>
                                    <span class="single-item__time">1:05</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="row row--grid">

                        <div class="col-12">
                            <div class="main__title">
                                <h2><i class="far fa-headphones-alt"></i><a href="#"></a>Feature</a></h2>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="main__list">
                                <li class="single-item">
                                    <a data-link data-title="Girls Of My" data-artist="Frank Li" data-img="assets/img/covers/cover13.jpg" href="assets/audio/preview3.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover13.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Girls Of My</a></h4>
                                        <span><a href="artist.html">Frank Li</a></span>
                                    </div>
                                    <span class="single-item__time">2:30</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="Meant To Be" data-artist="Loky Comb" data-img="assets/img/covers/cover7.jpg" href="assets/audio/preview1.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover7.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Meant To Be</a></h4>
                                        <span><a href="artist.html">Loky Comb</a></span>
                                    </div>
                                    <span class="single-item__time">2:18</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="Pretty Hearts" data-artist="Niki" data-img="assets/img/covers/cover8.jpg" href="assets/audio/preview2.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover8.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Pretty Hearts</a></h4>
                                        <span><a href="artist.html">Niki</a></span>
                                    </div>
                                    <span class="single-item__time">2:20</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="Enjoy Yourselft" data-artist="Cup Kakke" data-img="assets/img/covers/cover9.jpg" href="assets/audio/preview3.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover9.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Enjoy Yourselft</a></h4>
                                        <span><a href="artist.html">Cup Kakke</a></span>
                                    </div>
                                    <span class="single-item__time">3:12</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="One Of The" data-artist="Tierra" data-img="assets/img/covers/cover10.jpg" href="assets/audio/preview1.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover10.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">One Of Them</a></h4>
                                        <span><a href="artist.html">Tierra</a></span>
                                    </div>
                                    <span class="single-item__time">4:05</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="row row--grid">

                        <div class="col-12">
                            <div class="main__title">
                                <h2><i class="far fa-microphone"></i><a href="#">Trending</a></h2>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="main__list">
                                <li class="single-item">
                                    <a data-link data-title="Love Me Like" data-artist="Eille Gold" data-img="assets/img/covers/cover6.jpg" href="assets/audio/preview2.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover6.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Love Me Like</a></h4>
                                        <span><a href="artist.html">Eille Gold</a></span>
                                    </div>
                                    <span class="single-item__time single-item__time--live">LIVE</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="Enjoy Yourself" data-artist="Prince" data-img="assets/img/covers/cover9.jpg" href="assets/audio/preview3.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover9.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Enjoy Yourself</a></h4>
                                        <span><a href="artist.html">Prince</a></span>
                                    </div>
                                    <span class="single-item__time">5:05</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="The Climb Back" data-artist="Elton Jhon" data-img="assets/img/covers/cover14.jpg" href="assets/audio/preview1.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover14.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">The Climb Back</a></h4>
                                        <span><a href="artist.html">Elton Jhon</a></span>
                                    </div>
                                    <span class="single-item__time">4:05</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="More Than My" data-artist="Morgan" data-img="assets/img/covers/cover11.jpg" href="assets/audio/preview2.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover11.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">More Than My</a></h4>
                                        <span><a href="artist.html">Morgan</a></span>
                                    </div>
                                    <span class="single-item__time">2:20</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <a data-link data-title="Girls Like You" data-artist="Dababy" data-img="assets/img/covers/cover12.jpg" href="assets/audio/preview3.mp3" class="single-item__cover">
                                        <img src="assets/img/covers/cover12.jpg" alt="">
                                        <i class="far fa-play"></i>
                                        <i class="far fa-pause"></i>
                                    </a>
                                    <div class="single-item__title">
                                        <h4><a href="#">Girls Like You</a></h4>
                                        <span><a href="artist.html">Dababy</a></span>
                                    </div>
                                    <span class="single-item__time">2:03</span>
                                    <div class="dropdown moremenu dropleft">
                                        <button class="btn" type="button" data-toggle="dropdown">
                                            <i class="far fa-ellipsis-v-alt"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="moremenu">
                                            <a class="dropdown-item" href="#"><i class="far fa-layer-plus"></i> Add To Playlist</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-heart"></i> Favourite</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-share-alt"></i> Share</a>
                                            <a class="dropdown-item" href="#"><i class="far fa-info-circle"></i> Music Info</a>
                                            <a class="dropdown-item" href="#"><i class="fal fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="row row--grid">

                <div class="col-12">
                    <div class="main__title">
                        <h2>Listen Live</h2>
                        <a href="live.html" class="main__link">View More <i class="fal fa-long-arrow-alt-right ml-1"></i></a>
                    </div>
                </div>

                <div class="col-12">
                    <div class="main__carousel-wrap">
                        <div class="main__carousel main__carousel--live owl-carousel" id="live">
                            <div class="live">
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="live__cover open-video">
                                    <img src="assets/img/live/1.jpg" alt="">
                                    <span class="live__status">live</span>
                                    <span class="live__value">4.4K Watching</span>
                                    <i class="far fa-play"></i>
                                </a>
                                <h3 class="live__title"><a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="open-video">Let Me Love You</a></h3>
                            </div>
                            <div class="live">
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="live__cover open-video">
                                    <img src="assets/img/live/2.jpg" alt="">
                                    <span class="live__status">live</span>
                                    <span class="live__value">1.4K Watching</span>
                                    <i class="far fa-play"></i>
                                </a>
                                <h3 class="live__title"><a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="open-video">Until I Met You</a></h3>
                            </div>
                            <div class="live">
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="live__cover open-video">
                                    <img src="assets/img/live/3.jpg" alt="">
                                    <span class="live__status">live</span>
                                    <span class="live__value">100 Watching</span>
                                    <i class="far fa-play"></i>
                                </a>
                                <h3 class="live__title"><a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="open-video">Yellow Wood</a></h3>
                            </div>
                            <div class="live">
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="live__cover open-video">
                                    <img src="assets/img/live/4.jpg" alt="">
                                    <span class="live__status">live</span>
                                    <span class="live__value">2.7K Watching</span>
                                    <i class="far fa-play"></i>
                                </a>
                                <h3 class="live__title"><a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="open-video">Gimme Sourage</a></h3>
                            </div>
                            <div class="live">
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="live__cover open-video">
                                    <img src="assets/img/live/5.jpg" alt="">
                                    <span class="live__status">live</span>
                                    <span class="live__value">4.0K Watching</span>
                                    <i class="far fa-play"></i>
                                </a>
                                <h3 class="live__title"><a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="open-video">Walking Promises</a></h3>
                            </div>
                            <div class="live">
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="live__cover open-video">
                                    <img src="assets/img/live/6.jpg" alt="">
                                    <span class="live__status">live</span>
                                    <span class="live__value">1.1K Watching</span>
                                    <i class="far fa-play"></i>
                                </a>
                                <h3 class="live__title"><a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="open-video">Dark Alley Acotic</a></h3>
                            </div>
                            <div class="live">
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="live__cover open-video">
                                    <img src="assets/img/live/7.jpg" alt="">
                                    <span class="live__status">live</span>
                                    <span class="live__value">8.4K Watching</span>
                                    <i class="far fa-play"></i>
                                </a>
                                <h3 class="live__title"><a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="open-video">Mind Broken</a></h3>
                            </div>
                            <div class="live">
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="live__cover open-video">
                                    <img src="assets/img/live/8.jpg" alt="">
                                    <span class="live__value">9.4K Watching</span>
                                    <i class="far fa-play"></i>
                                </a>
                                <h3 class="live__title"><a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="open-video">Dilla Ther Ja</a></h3>
                            </div>
                            <div class="live">
                                <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="live__cover open-video">
                                    <img src="assets/img/live/9.jpg" alt="">
                                    <span class="live__value">500 Watching</span>
                                    <i class="far fa-play"></i>
                                </a>
                                <h3 class="live__title"><a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="open-video">Faking Freedom</a></h3>
                            </div>
                        </div>
                        <button class="main__nav main__nav--prev" data-nav="#live" type="button"> <i class="fal fa-long-arrow-alt-left fa-lg mr-2"></i> </button>
                        <button class="main__nav main__nav--next" data-nav="#live" type="button"> <i class="fal fa-long-arrow-alt-right fa-lg"></i> </button>
                    </div>
                </div>
            </section>


            <section class="row row--grid">

                <div class="col-12">
                    <div class="main__title">
                        <h2>Products</h2>
                        <a href="store.html" class="main__link">View More <i class="fal fa-long-arrow-alt-right ml-2"></i></a>
                    </div>
                </div>

                <div class="col-12">
                    <div class="main__carousel-wrap">
                        <div class="main__carousel main__carousel--store owl-carousel" id="store">
                            <div class="product">
                                <span class="product__new">New</span>
                                <a href="#" class="product__img">
                                    <img src="assets/img/store/item1.jpg" alt="">
                                </a>
                                <h3 class="product__title"><a href="product.html">Microphone</a></h3>
                                <span class="product__price">$200</span>
                                <a href="cart.html"><span class="product__cart"><i class="far fa-shopping-cart"></i></span></a>
                            </div>
                            <div class="product">
                                <a href="#" class="product__img">
                                    <img src="assets/img/store/item2.jpg" alt="">
                                </a>
                                <h3 class="product__title"><a href="product.html">Music Board</a></h3>
                                <span class="product__price">$600</span>
                                <a href="cart.html"><span class="product__cart"><i class="far fa-shopping-cart"></i></span></a>
                            </div>
                            <div class="product">
                                <span class="product__new">New</span>
                                <a href="#" class="product__img">
                                    <img src="assets/img/store/item3.jpg" alt="">
                                </a>
                                <h3 class="product__title"><a href="product.html">Headphone</a></h3>
                                <span class="product__price">$100</span>
                                <a href="cart.html"><span class="product__cart"><i class="far fa-shopping-cart"></i></span></a>
                            </div>
                            <div class="product">
                                <a href="#" class="product__img">
                                    <img src="assets/img/store/item4.jpg" alt="">
                                </a>
                                <h3 class="product__title"><a href="product.html">Canon Camera</a></h3>
                                <span class="product__price">$150</span>
                                <a href="cart.html"><span class="product__cart"><i class="far fa-shopping-cart"></i></span></a>
                            </div>
                            <div class="product">
                                <a href="#" class="product__img">
                                    <img src="assets/img/store/item5.jpg" alt="">
                                </a>
                                <h3 class="product__title"><a href="product.html">Air Pod</a></h3>
                                <span class="product__price">$50</span>
                                <a href="cart.html"><span class="product__cart"><i class="far fa-shopping-cart"></i></span></a>
                            </div>
                            <div class="product">
                                <span class="product__new">New</span>
                                <a href="#" class="product__img">
                                    <img src="assets/img/store/item6.jpg" alt="">
                                </a>
                                <h3 class="product__title"><a href="product.html">Guitar</a></h3>
                                <span class="product__price">$180</span>
                                <a href="cart.html"><span class="product__cart"><i class="far fa-shopping-cart"></i></span></a>
                            </div>
                            <div class="product">
                                <a href="#" class="product__img">
                                    <img src="assets/img/store/item7.jpg" alt="">
                                </a>
                                <h3 class="product__title"><a href="product.html">Microphone</a></h3>
                                <span class="product__price">$40</span>
                                <a href="cart.html"><span class="product__cart"><i class="far fa-shopping-cart"></i></span></a>
                            </div>
                            <div class="product">
                                <a href="#" class="product__img">
                                    <img src="assets/img/store/item8.jpg" alt="">
                                </a>
                                <h3 class="product__title"><a href="product.html">Music Player</a></h3>
                                <span class="product__price">$300</span>
                                <a href="cart.html"><span class="product__cart"><i class="far fa-shopping-cart"></i></span></a>
                            </div>
                        </div>
                        <button class="main__nav main__nav--prev" data-nav="#store" type="button"> <i class="fal fa-long-arrow-alt-left fa-lg mr-2"></i> </button>
                        <button class="main__nav main__nav--next" data-nav="#store" type="button"> <i class="fal fa-long-arrow-alt-right fa-lg"></i> </button>
                    </div>
                </div>
            </section>


            <section class="row row--grid">

                <div class="col-12">
                    <div class="main__title">
                        <h2>News</h2>
                        <a href="news.html" class="main__link">View More <i class="fal fa-long-arrow-alt-right ml-2"></i></a>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="post">
                        <a href="https://www.youtube.com/watch?v=qxjHfS0Jau8" class="post__video open-video">
                            <i class="far fa-play"></i> Watch Now
                        </a>
                        <a href="news-single.html" class="post__img">
                            <img src="assets/img/posts/1.jpg" alt="">
                        </a>
                        <div class="post__meta">
                            <span><i class="far fa-clock"></i> 2 min ago</span>
                            <span><i class="far fa-comment-alt-lines"></i> 10</span>
                        </div>
                        <div class="post__content">
                            <a href="#" class="post__category">Digital</a>
                            <h3 class="post__title"><a href="news-single.html">At vero eos et accusamus iusto dignissimos ducimus</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="post">
                        <a href="news-single.html" class="post__img">
                            <img src="assets/img/posts/2.jpg" alt="">
                        </a>
                        <div class="post__meta">
                            <span><i class="far fa-clock"></i> 1 hour ago</span>
                            <span><i class="far fa-comment-alt-lines"></i> 20</span>
                        </div>
                        <div class="post__content">
                            <a href="#" class="post__category">Music</a>
                            <h3 class="post__title"><a href="news-single.html">Sed ut perspiciatis unde natus error sit voluptatem</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="post">
                        <a href="news-single.html" class="post__img">
                            <img src="assets/img/posts/3.jpg" alt="">
                        </a>
                        <div class="post__meta">
                            <span><i class="far fa-clock"></i> 50 min ago</span>
                            <span><i class="far fa-comment-alt-lines"></i> 30</span>
                        </div>
                        <div class="post__content">
                            <a href="#" class="post__category">Features</a>
                            <h3 class="post__title"><a href="news-single.html">There are many variations of passages available</a></h3>
                        </div>
                    </div>
                </div>

            </section>


            <div class="row">
                <div class="col-12">
                    <div class="partners owl-carousel">
                        <a href="#" class="partners__img">
                            <img src="assets/img/partners/01.svg" alt="">
                        </a>
                        <a href="#" class="partners__img">
                            <img src="assets/img/partners/01.svg" alt="">
                        </a>
                        <a href="#" class="partners__img">
                            <img src="assets/img/partners/01.svg" alt="">
                        </a>
                        <a href="#" class="partners__img">
                            <img src="assets/img/partners/01.svg" alt="">
                        </a>
                        <a href="#" class="partners__img">
                            <img src="assets/img/partners/01.svg" alt="">
                        </a>
                        <a href="#" class="partners__img">
                            <img src="assets/img/partners/01.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <footer class="footer">
        <?php require('partials/footer.php') ?>
    </footer>


    <div class="bottom__to-top" id="bottom__to-top">
        <a href="#"><i class="fal fa-long-arrow-alt-up"></i></a>
    </div>

    <div>
        <div class="audio_player">
            <div class="player__cover">
                <img src="assets/img/covers/cover.svg">
                <div class="my-auto audio-title-box">
                    <div class="audio-title player__title">Until I Met You</div>
                    <div class="audio-subtitle player__artist"> - Ava Cornish</div>
                </div>
            </div>
            <div>
                <audio src="assets/audio/preview1.mp3" id="audio" controls></audio>
            </div>
        </div>
        <button class="player__btn" type="button"><i class="far fa-music"></i></button>
    </div>

    <?php require('partials/script.php') ?>
</body>

</html>