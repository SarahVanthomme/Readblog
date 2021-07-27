<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Readblog</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="shortcut icon" href="../../public/img/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    {{--    <link href="../lity-2.4.1/dist/lity.css" rel="stylesheet">--}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="aos.css">
    {{--    <link rel="stylesheet" type="text/css" href="loading-bar.css"/>--}}
    <link rel="stylesheet" href="../../public/css/styles.css">
    <link rel="stylesheet" href="../../public/css/app.css">
    <!-- Imported Styles From previous projects -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap');

    </style>
</head>

<body class="mt-5">
<div class="text-center">
    <p class="readblog display-3 mb-0">READ<span class="mintgreen">BLOG.</span></p>
    <p class="letter-spacing-1 lightgrey">We Love Creativity Minimal Blog</p>
</div>
<div class="col-12 border-bottom mt-5"></div>
<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse col-8 offset-2 position-static" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto position-static">
            <li class="nav-item active mx-3">
                <a class="nav-link" href="http://localhost/readblog/public/">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    FEATURES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">CREATIVE</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">LIFESTYLE</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">MUSIC</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">LIFE</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">DESIGN</a>
                </div>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link disabled" href="#">SINGLE POST</a>
            </li>
            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    CATEGORIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">ADVERTISING</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">CREATIVE</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">INSPIRATION</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">LIFESTYLE</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">MUSIC</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">PHOTOGRAPHY</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">FASHION</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">TRAVEL</a>
                </div>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link disabled" href="#">ABOUT</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link disabled" href="#">CONTACT</a>
            </li>
        </ul>

    </div>
    <form class="form-inline">
        {{--        <input class="form-control border-none border-bottom mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
        <button class="btn btn-white my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
</nav>
<section>
    <div class="header py-5">
        <div class="col-8 offset-2 px-0">
            <h1 class="white stix"><b>Blog</b></h1>
            <div class="d-flex">
                <p class="white">Home</p>
                <p class="white px-3">/</p>
                <p class="white">Blog</p>
                <p class="white px-3">/</p>
                <p class="mintgreen" id="singlePost"></p>
            </div>
        </div>
    </div>

</section>
<section class="bg-light-grey pt-4">
    <div class="col-sm-12 col-lg-10 col-xl-8 offset-md-1 offset-xl-2 d-flex p-sm-0">
        <div>
            <div class="bg-white border-light-grey mr-4">
                <img class="responsive" src="https://picsum.photos/680/430?random=1" alt="">
                <h5 id="postTitle" class="stix font-semibold mt-4 ml-3"></h5>
                <div class="ml-3 mb-3 d-flex lightgrey">
                    <p>Posted by <span class="mintgreen">Ninja</span></p>
                    <p class="mx-3">-</p>
                    <p>21 November, 2016</p>
                    <p class="mx-3">-</p>
                    <p>03 comments</p>
                    <p class="mx-3">-</p>
                    <p>49 views</p>
                </div>
                <div class="border-bottom mx-3"></div>
                <div class="m-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vehicula at elit sit amet
                        posuere. Vivamus imperdiet, sem non efficitur sodales, ante ipsum vehicula sapien, a
                        sollicitudin dolor neque vel nisi. Pellentesque habitant morbi tristique senectus et netus et
                        malesuada fames ac turpis egestas. Aliquam elit quam, tincidunt nec ante nec, sollicitudin
                        faucibus lacus. Ut mattis tortor ac enim vehicula, in pulvinar purus pulvinar. Integer bibendum,
                        enim non posuere lacinia, nulla metus mattis lacus, at feugiat elit turpis eu turpis. Ut
                        ullamcorper nisl nisl, quis gravida nunc iaculis a.</p>
                    <p>Morbi lacinia diam et commodo feugiat. Curabitur id sapien tellus. Sed enim libero, vehicula nec
                        bibendum sollicitudin, egestas ut turpis. Ut at bibendum lacus, a gravida eros. Donec tristique
                        ut nunc in varius. Fusce libero nulla, accumsan eget congue id, tincidunt non nibh. Fusce
                        venenatis metus lorem, ut pellentesque turpis euismod id. Nullam luctus sem a turpis auctor, id
                        fringilla ligula pharetra. Pellentesque nunc orci, sollicitudin sed euismod nec, semper id
                        ligula.</p>
                    <p>Sed at metus egestas, eleifend dolor sit amet, mollis eros. Mauris viverra faucibus elit, sit
                        amet faucibus mi bibendum nec. Aliquam erat volutpat. Donec est elit, dictum eu ornare eu,
                        vulputate vel eros. Vivamus venenatis vel lorem ac tincidunt. Quisque ornare ultricies lobortis.
                        Sed vel massa nec sem hendrerit pharetra euismod quis augue. Nunc cursus vitae lorem ac
                        hendrerit. Nullam rhoncus luctus bibendum.</p>
                    <p>Ut consequat risus quis purus pellentesque, et malesuada enim feugiat. Etiam fringilla finibus
                        mollis. Phasellus elementum blandit fringilla. Etiam bibendum dapibus interdum. Praesent elit
                        metus, aliquam id ex et, volutpat tempor arcu. Maecenas semper tempor velit sit amet bibendum.
                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Interdum
                        et malesuada fames ac ante ipsum primis in faucibus. Quisque venenatis, leo quis condimentum
                        maximus, magna dolor condimentum nunc, sit amet eleifend orci lorem sed libero. Etiam erat nunc,
                        bibendum ac odio quis, placerat consectetur dolor. In hac habitasse platea dictumst. Phasellus
                        sit amet lectus magna.</p>
                    <p>Mauris leo est, tempor ut nulla et, maximus ornare metus. Nulla in volutpat ligula, ac viverra
                        neque. Cras sed posuere odio, a feugiat nunc. Proin bibendum erat lacus, eu aliquam nisl
                        pellentesque at. Aenean porttitor neque sit amet ligula commodo, a porta magna vehicula. Cras
                        tempor egestas justo nec hendrerit. Sed diam velit, aliquet eget ligula vel, eleifend egestas
                        nisl. Nulla pulvinar nisi sit amet ex congue, ut mollis mi volutpat. Donec ullamcorper varius
                        tempus. Sed lectus eros, tempus vel imperdiet pellentesque, dignissim sed sem. Aliquam porttitor
                        est arcu, ac sodales metus euismod ut. Ut commodo nulla sed mauris tristique, suscipit
                        condimentum tellus sodales. Etiam et neque leo.</p>
                </div>
                <div class="border-left-mint mx-5 my-5 pb-4">
                    <p class="quote-text ml-3 position-relative">
                        Donec est elit, dictum eu ornare eu, vulputate vel eros. Vivamus venenatis vel lorem ac
                        tincidunt. Quisque ornare ultricies lobortis.</p>
                    <p class="mintgreen float-right">- Thomas Muler -</p>
                </div>
                <div class="m-3 pb-4">
                    <p> Ut at bibendum lacus, a gravida eros. Donec tristique ut nunc in varius. Fusce libero nulla,
                        accumsan eget congue id, tincidunt non nibh. Fusce venenatis metus lorem, ut pellentesque turpis
                        euismod id. Nullam luctus sem a turpis auctor, id fringilla ligula pharetra. Pellentesque nunc
                        orci, sollicitudin sed euismod nec, semper id ligula.</p>
                    <p>Sed at metus egestas, eleifend dolor sit amet, mollis eros. Mauris viverra faucibus elit, sit
                        amet faucibus mi bibendum nec. Aliquam erat volutpat. Donec est elit, dictum eu ornare eu,
                        vulputate vel eros. Vivamus venenatis vel lorem ac tincidunt. Quisque ornare ultricies lobortis.
                        Sed vel massa nec sem hendrerit pharetra euismod quis augue. Nunc cursus vitae lorem ac
                        hendrerit. Nullam rhoncus luctus bibendum.</p>
                </div>
                <div class="border-bottom mx-3"></div>
                <div class="d-flex align-items-center m-3">
                    <i class="fas fa-tag mintgreen mr-2"></i>
                    <p class="mb-0"><b>Tags: </b><span class="lightgrey">LifeStyle, Travel, Trip, Tour</span></p>
                    <div class="d-flex align-items-center ml-auto">
                        <i class="fas fa-share-alt mintgreen mr-2"></i>
                        <p class="mb-0"><b>Share: </b><span class="lightgrey">Facebook, Twitter, Google+</span></p>
                    </div>
                    <p></p>
                </div>
            </div>
            <div class="bg-white border-light-grey mr-4 mt-5 d-flex">
                <img src="https://picsum.photos/100/100?random=1" class="mx-3 my-4 responsive" alt="">
                <div>
                    <p class="pt-4 mb-2"><b class="stix">ABOUT AUTHOR</b></p>
                    <div class="bt-border-black mb-4"></div>
                    <p>Quisque ornare ultricies lobortis. Sed vel massa nec sem hendrerit pharetra euismod quis augue.
                        Nunc cursus vitae. Nullam rhoncus luctus bibendum.</p>
                </div>

            </div>
            <div class="bg-white border-light-grey mr-4 mt-5">
                <p class="pt-4 mb-2 mx-3"><b class="stix">YOU MAY ALSO LIKE</b></p>
                <div class="bt-border-black mb-4 mx-3"></div>
                <div class="card-holder">
                    <div class="card-holder" id="card-post"></div>
                </div>
            </div>
            <div class="bg-white border-light-grey mr-4 mt-5">
                <p class="pt-4 mb-2 mx-3"><b class="stix">07 COMMENTS</b></p>
                <div class="bt-border-black mb-4 mx-3"></div>
                <div class="m-3" id="singleComment">
                    {{--                    <div class="d-flex"><div class="image"><img src="https://picsum.photos/100/100?random=1" class="img" alt=""></div><div class="ml-2"><p class="mintgreen"><b>Thomas Muler </b><span class="mx-2">-</span><span class="lightgrey">about 7 minutes ago</span></p><p>body</p><a href="#"><div class="d-flex align-items-center reply"><i class="fas fa-reply mr-3"></i><p class="mb-0">Reply</p></div></a></div></div>--}}
                </div>
                <div class="text-center align-items-center"><p>View All Comments<i class="fas fa-chevron-down mx-3"></i>
                    </p></div>
            </div>
            <span style="color: indianred" id="errorname" class="text-center"></span><br>
            <span style="color: green" id="errorname2" class="text-center"></span><br>
            <div class="bg-white border-light-grey mr-4 my-5 pb-5">
                <p class="pt-4 mb-2 mx-3"><b class="stix">LEAVE A COMMENT</b></p>
                <div class="bt-border-black mb-4 mx-3"></div>
                <div id="formtest" class="flex row justify-content-around">
                    <div class="col-sm-10 col-lg-5 ml-3">
                        <input class="border-grey w-100 py-2 form" id="firstname" type="text"
                               placeholder="Full Name"><br>
                        <input required="required" type="email" class="border-grey w-100 my-4 py-2 form"
                               placeholder="Email Address"><br>
                        <input required="required" type="text" class="border-grey w-100 py-2" placeholder="Website">
                    </div>
                    <div class="col-sm-10 col-lg-5 mr-3 ml-sm-4 ml-lg-0 mt-sm-3 mt-lg-0">
                        <textarea id="comment" type="text" cols="30" rows="4" class="border-grey w-100 mb-4 form"
                                  placeholder="Write Your Comment ..."></textarea>
                        <button onclick="myFunction()" class="btn btn-black w-100 radius-0 py-2" type="submit"
                                role="button" aria-pressed="true">POST COMMENT
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 px-0 bg-light-grey">
            <div class="input-group border-white">
                <input type="search" class="form-control border-none bg-light-grey blog-search"
                       placeholder="Search for blog ... " aria-label="Search"
                       aria-describedby="search-addon"/>
                <span class="input-group-text border-0 bg-light-grey radius-0" id="search-addon">
                    <i class="fas fa-search"></i>
                  </span>
            </div>
            <div class="bg-white px-4 mt-5">
                <ul class="pt-4 mt-4 no-bullets"><b class="stix">CATEGORIES</b>
                    <div class="bt-border-black mb-4"></div>
                    <li class="border-bottom py-3">Advertising <span class="float-right lightgrey">39</span></li>
                    <li class="border-bottom py-3">Creative <span class="float-right lightgrey">48</span></li>
                    <li class="border-bottom py-3">Inspiration <span class="float-right lightgrey">26</span></li>
                    <li class="border-bottom py-3">LifeStyle <span class="float-right lightgrey">24</span></li>
                    <li class="border-bottom py-3">Music <span class="float-right lightgrey">32</span></li>
                    <li class="border-bottom py-3">Photography <span class="float-right lightgrey">69</span></li>
                    <li class="border-bottom py-3">Fashion <span class="float-right lightgrey">78</span></li>
                    <li class="pt-3 pb-4">Travel <span class="float-right lightgrey">49</span></li>
                </ul>
            </div>
            <div class="bg-white px-4 borderimg mt-5">
                <p class="pt-4"><b class="stix">NEWSLETTER</b></p>
                <div class="bt-border-black mb-4"></div>
                <form class="py-3">
                    <div class="form-group">
                        <input type="text" class="form-control radius-0 p-3" id="exampleInputName1"
                               placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control radius-0 p-3" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="Email address">
                    </div>
                    <button type="submit" class="btn btn-mint radius-0 py-2 px-4">SUBMIT</button>
                </form>
            </div>
            <div class="bg-white px-4 mt-5">
                <p class="pt-4"><b class="stix">LATEST POSTS</b></p>
                <div class="bt-border-black mb-4"></div>
                <div id="latestPosts"></div>
            </div>
            <div class="bg-white px-4 mt-5">
                <p class="pt-4"><b class="stix">RECENT COMMENTS</b></p>
                <div class="bt-border-black mb-4"></div>
                <div id="recentComments">

                    {{--
                                            <a href="#" class="recent-comments"><div id="postTitle"><p>name<span class="lightgrey">on </span>titel van blogpost</p></div><div class="border-bottom"></div></a>
                    --}}
                </div>
            </div>
            <div class="bg-white px-4 mt-5">
                <ul class="pt-4 mt-4 no-bullets"><b class="stix">CATEGORIES</b>
                    <div class="bt-border-black mb-4"></div>
                    <li class="border-bottom py-3">December,2016 <span class="float-right lightgrey">26</span></li>
                    <li class="border-bottom py-3">November,2016 <span class="float-right lightgrey">24</span></li>
                    <li class="border-bottom py-3">October,2016 <span class="float-right lightgrey">32</span></li>
                    <li class="border-bottom py-3">September,2016 <span class="float-right lightgrey">69</span></li>
                    <li class="pt-3 pb-4">August,2016 <span class="float-right lightgrey">78</span></li>
                </ul>
            </div>
            <div class="bg-white px-4 mt-5 pb-4">
                <p class="pt-4"><b class="stix">TAGS CLOUD</b></p>
                <div class="bt-border-black mb-4"></div>
                <button type="button" class="badge-item btn border-grey radius-0 px-3 py-2 m-1 text-secondary">
                    CREATIVE
                </button>
                <button type="button" class="badge-item btn border-grey radius-0 px-3 py-2 m-1 text-secondary">
                    LIFESTYLE
                </button>
                <button type="button" class="badge-item btn border-grey radius-0 px-3 py-2 m-1 text-secondary">MUSIC
                </button>
                <button type="button" class="badge-item btn border-grey radius-0 px-3 py-2 m-1 text-secondary">FASHION
                </button>
                <button type="button" class="badge-item btn border-grey radius-0 px-3 py-2 m-1 text-secondary">LIFE
                </button>
                <button type="button" class="badge-item btn border-grey radius-0 px-3 py-2 m-1 text-secondary">
                    TYPOGRAPHY
                </button>
                <button type="button" class="badge-item btn border-grey radius-0 px-3 py-2 m-1 text-secondary">DESIGN
                </button>
                <button type="button" class="badge-item btn border-grey radius-0 px-3 py-2 m-1 text-secondary">TRAVEL
                </button>
                <button type="button" class="badge-item btn border-grey radius-0 px-3 py-2 m-1 text-secondary">IMAGE
                </button>
            </div>

            <div class="bg-white px-4 mt-5 border-mint position-relative text-center" style="height: 250px">
                <p class="center-middle"><b>BANNER ADS<br>
                        300X250</b></p>
            </div>
        </div>
    </div>
</section>
<footer class="container-fluid py-4">
    <div class="col-8 offset-2 text-sm-center d-xl-flex justify-content-between">
        <p class="lightgrey">Copyright &copy; <span class="mintgreen">Readblog.</span> All Rights Reserved. <span
                class="mintgreen">Designed by Anthony.</span></p>
        <div class="align-items-center">
            <a href="#" class="text-decoration-none mx-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-decoration-none mx-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-decoration-none mx-2"><i class="fab fa-google"></i></a>
            <a href="#" class="text-decoration-none mx-2"><i class="fab fa-youtube"></i></a>
            <a href="#" class="text-decoration-none mx-2"><i class="fas fa-basketball-ball"></i></a></div>
    </div>
</footer>
</body>

<script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
<script src="../../public/pagination.js"></script>
<script src="../../public/js/app.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

{{--//COMMENTS--}}
<script>
    $.getJSON("https://jsonplaceholder.typicode.com/comments?postId=1", function (data) {
        let string = '';
        data.forEach(function (comment) {
            string += `<div class="d-flex my-3"><div class="image"><img src="https://picsum.photos/100/100?random=1" class="img" alt=""></div><div class="ml-2"><p class="mintgreen"><b>${comment.email} </b><span class="mx-2">-</span><span class="lightgrey">about 7 minutes ago</span></p><p>${comment.body}</p><a href="#"><div class="d-flex align-items-center reply"><i class="fas fa-reply mr-3"></i><p class="mb-0">Reply</p></div></a><div class="border-bottom mx-3 my-4"></div></div></div>`
        });
        $("#singleComment").append(string);
    });
</script>

{{--// YOU MAY ALSO LIKE - 2 MOST RECENT POST--}}
<script>
    $.getJSON("https://jsonplaceholder.typicode.com/posts", function (data) {
        let string = '';
        data.slice(-2).forEach(function (post) {
            string += `<div class="card border-none radius-0 mx-3 my-2"><img class="card-img-top radius-0" src="https://picsum.photos/700/450?random=1"><div class="card-body"><h5 class="card-title stix black"><b>${post.title}</b></h5><p class="card-text lightgrey">${post.body}</p></div></div>`
        });
        $("#card-post").append(string);
    });
</script>

{{--//ID FROM CURRENT POST--}}
<script>

    var url = window.location.pathname;
    var id = url.substring(url.lastIndexOf('/') + 1);
    console.log(id);

    function req1() {
        fetch('https://jsonplaceholder.typicode.com/posts/' + id)
            .then(response => response.json())
            .then(json => {
                const title = json.title;
                const body = json.body;
                $('#singlePost').append(
                    '<div>' + json.title + '</div>')
                &&
                $('#postTitle').append(
                    '<div>' + json.title + '</div>');
            });

    }

    req1();

    // LATEST POST
    $.getJSON("https://jsonplaceholder.typicode.com/posts", function (data) {
        let string = '';
        data.slice(-5).forEach(function (item) {
            string += `<div class="d-flex py-2"><img src="https://picsum.photos/75/75?random=1" class="img-fluid responsive" alt=""><div class="stix ml-2"><p class="mb-0"><b>${item.title}</b></p> <p class="lightgrey smaller"><i>O5 December, 2016</i></p></div></div>`
        });
        $("#latestPosts").append(string);
    });

</script>

{{--    // RECENT COMMENTS--}}
<script>
    $.getJSON("https://jsonplaceholder.typicode.com/users", function (data) {
        let string = '';
        data.slice(-1).forEach(function (item) {

            $.getJSON("https://jsonplaceholder.typicode.com/posts", function (data) {
                let string = '';
                data.slice(-1).forEach(function (item) {
                    string += `${item.title}`
                });
                $("#postTitle").append(string);
            });
            string += `<a href="#" class="recent-comments"><div id="postTitle" class="my-3"><p class="mb-0">${item.name}<span class="lightgrey"> on </span></p></div><div class="border-bottom"></div></a>`
        });
        $("#recentComments").append(string);
    });
</script>

{{--FORM TEST--}}
<script>
    function myFunction() {
        errorMessage = document.getElementById('errorname');
        errorMessage2 = document.getElementById('errorname2');
        errorMessageb = document.getElementById('errornameb');
        errorMessagec = document.getElementById('errornamec');

        var a = document.getElementById("formtest");
        var element = document.getElementById("firstname");
        var elementb = document.getElementById("email");
        var elementc = document.getElementById("comment");
        var loader = document.getElementById("loader");

        if (elementc.value == '') {
            errorMessage.innerText = 'Some fields still need to be filled in';

        } else {
            errorMessage2.innerText = 'Your comment is successfully submitted';
        }


    }
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script type="text/javascript" src="path_to/jquery.js"></script>
<script type="text/javascript" src="path_to/jquery.simplePagination.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

