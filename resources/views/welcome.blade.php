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
    <link rel="shortcut icon" href="../public/img/favicon-32x32.png">
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

    <!-- Styles -->
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
                <p class="mintgreen">Blog Two Column With Right Sidebar</p>
            </div>
        </div>
    </div>
</section>
<section class="bg-light-grey pt-4">
    <div class="col-sm-12 col-lg-10 col-xl-8 offset-md-1 offset-xl-2 d-flex">
        <div class="card-holder">
            <div class="card-holder" id="card-post"></div>
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

{{--    SCRIPTS TO IMPLEMENT REACT--}}
<script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
<script src="../../public/pagination.js"></script>
<script src="../../public/js/app.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    var root = 'https://jsonplaceholder.typicode.com/posts/?_page=0&_limit=14';
    $.ajax({
        url: root + "/posts",
        method: 'GET',
        contentType: 'application/json',
        success: function (posts) {
            console.log("Data=>", posts);
            $.each(posts, function (index, post) {
                y = post.id;

                function req1() {
                    fetch('https://jsonplaceholder.typicode.com/posts/' + y)
                        .then(response => response.json())
                        .then(json => {
                            const title = json.title;
                            const body = json.body;
                            var x = location.href;
                            $('#card-post').append(
                                '<div class="card radius-0 mr-4 my-2"><img class="card-img-top radius-0 img-fluid" src="https://picsum.photos/700/450?random=1"><div class="card-body"><a href="' + x + 'post' + '/' + post.id + '" class="post-title"><h5 class="card-title stix black"><b>' + post.title + '</b></h5></a><p class="card-text lightgrey">' + post.body + '</p></div></div>');
                        });
                }

                req1();
            });
        }
    });

    // LATEST POST
    $.getJSON("https://jsonplaceholder.typicode.com/posts", function (data) {
        let string = '';
        data.slice(-5).forEach(function (item) {
            string += `<div class="d-flex py-2"><img src="https://picsum.photos/75/75?random=1" class="img-fluid" alt=""><div class="stix ml-2"><p class="mb-0"><b>${item.title}</b></p> <p class="lightgrey smaller"><i>O5 December, 2016</i></p></div></div>`
        });
        $("#latestPosts").append(string);
    });

</script>
{{--//RECENT COMMENTS--}}
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="path_to/jquery.js"></script>
<script type="text/javascript" src="path_to/jquery.simplePagination.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

