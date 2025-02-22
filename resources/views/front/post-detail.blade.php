
@extends('front.layouts.main')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{asset('assets/front/assets/img/home-bg.jpg')}}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                        <h2 class="subheading">{{$post->excerpt}}</h2>
                        <span class="meta">
                                Posted by
                                <a href="#!">{{ $post->user->name }}</a>
                                on {{ $post->created_at }}
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <article class="mb-4">
                    {{$post->content}}
                    Posted by
                    <a href="http://spaceipsum.com/"> {{$post->user->name}}</a>
                </article>
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>

@endsection
