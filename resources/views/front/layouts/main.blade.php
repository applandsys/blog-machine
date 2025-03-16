<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ isset($meta) ? $meta['title'] : config('app.name')  }}  </title>
    <meta charset="utf-8" />
    <meta name='language' content='EN'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <meta name='keywords' content='your, tags'>
    <meta name='subject' content='your website s subject'>

    <meta name='robots' content='index,follow'>
    <meta name='revised' content='Sunday, July 18th, 2010, 5:15 pm'>

    <meta name='topic' content=''>
    <meta name='summary' content=''>
    <meta name='Classification' content='Business'>
    <meta name='author' content='name, email@hotmail.com'>

    <meta name='reply-to' content='support@healthspikes.com'>
    <meta name='url' content='http://www.websiteaddrress.com'>
    <meta name='identifier-URL' content='http://www.websiteaddress.com'>
    <meta name='directory' content='submission'>
    <meta name='pagename' content='jQuery Tools, Tutorials and Resources - O'Reilly Media'>
    <meta name='category' content=''>
    <meta name='coverage' content='Worldwide'>
    <meta name='distribution' content='Global'>
    <meta name='rating' content='General'>
    <meta name='subtitle' content='This is my subtitle'>
    <meta name='target' content='all'>
    <meta name='HandheldFriendly' content='True'>
    <meta name='MobileOptimized' content='320'>
    <meta name='date' content='Sep. 27, 2010'>

    <meta name='medium' content='blog'>

    <meta name='og:title' content='The Rock'>
    <meta name='og:type' content='movie'>
    <meta name='og:url' content='http://www.imdb.com/title/tt0117500/'>
    <meta name='og:image' content='http://ia.media-imdb.com/rock.jpg'>
    <meta name='og:site_name' content='IMDb'>
    <meta name='og:description' content='A group of U.S. Marines, under command of...'>

    <meta name='fb:page_id' content='43929265776'>
    <meta name='application-name' content='foursquare'>
    <meta name='og:email' content='me@example.com'>



    <meta property='og:video' content='http://example.com/awesome.swf'>
    <meta property='og:video:height' content='640'>
    <meta property='og:video:width' content='385'>
    <meta property='og:video:type' content='application/x-shockwave-flash'>
    <meta property='og:video' content='http://example.com/html5.mp4'>
    <meta property='og:video:type' content='video/mp4'>
    <meta property='og:video' content='http://example.com/fallback.vid'>
    <meta property='og:video:type' content='text/html'>

    <meta property='og:audio' content='http://example.com/amazing.mp3'>
    <meta property='og:audio:title' content='Amazing Song'>
    <meta property='og:audio:artist' content='Amazing Band'>
    <meta property='og:audio:album' content='Amazing Album'>
    <meta property='og:audio:type' content='application/mp3'>


    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/front/css/styles.css')}}" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
@include('front.layouts.parts.navigation')
<!-- Page Header-->

<!-- Main Content-->
@yield('content')
<!-- Footer-->
@include('front.layouts.parts.footer')
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('assets/front/js/scripts.js')}}"></script>
</body>
</html>
