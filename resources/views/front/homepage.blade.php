
@extends('front.layouts.main')

@section('content')
    <header class="masthead" style="background-image: url({{ asset('assets/front/assets/img/home-bg.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>{{siteSetting()->site_name}}</h1>
                        <span class="subheading">{{siteSetting()->site_description}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach( getPostsLimit(0,20) as $post)
                    <div class="post-preview">
                        <a href="{{ route('front.post', [$post->id, $post->slug]) }}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->excerpt }}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{ $post->user->name }}</a>
                            on {{ $post->created_at }}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                @endforeach

                <div class="d-flex justify-content-between">
                    <!-- Pager-->
                    <div class="mb-4"><a class="btn btn-primary text-uppercase" href="#!">← Older Posts </a></div>

                    <!-- Pager-->
                    <div class="mb-4"><a class="btn btn-primary text-uppercase" href="#!">Next Posts →</a></div>
                </div>
            </div>
        </div>
    </div>

@endsection
