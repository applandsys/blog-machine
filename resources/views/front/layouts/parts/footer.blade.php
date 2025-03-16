<footer class="border-top">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    @foreach(socialLinks() as $social)
                    <li class="list-inline-item">
                        <a href="{{$social->link}}">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                       {!!  $social->icon !!}
                                    </span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="small text-center text-muted fst-italic">Copyright &copy; Your {{siteSetting()->site_name}}</div>
            </div>
        </div>
    </div>
</footer>
