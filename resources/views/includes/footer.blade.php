<div id="comics-main">
            <div class="container">
                <div class="row-main">
                    <div class="col-left-main">
                        <div class="s-column-main">
                            <h3>DC COMICS</h3>
                            <ul>
                            @foreach ($comicsLinks as $comicsLink )
                                <li>{{$comicsLink}}</li>
                            @endforeach
                            </ul>
                            <h3>SHOP</h3>
                            <ul>
                                  @foreach ($shopLinks as $shopLink )
                                <li>{{$shopLink}}</li>
                            @endforeach

                            </ul>
                        </div>
                        <div class="m-column-main">
                            <h3>DC </h3>
                            <ul>
                           @foreach ($dcLinks as $dcLink )
                                <li>{{$dcLink}}</li>
                            @endforeach
                            </ul>
                        </div>
                        <div class="e-column-main">
                            <h3>SITES</h3>
                            <ul>
                             @foreach ($sitesLinks as $sitesLink )
                                <li>{{$sitesLink}}</li>
                            @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-right-main">
                        <div class="card-main">
                            <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <footer>
        <div class="container">

            <div class="row-footer">
                <div class="s-footer">
                    <button>
                        <a href="">SIGN-UP NOW!</a>
                    </button>
                </div>
                <div class="e-footer">
                    <h3>FOLLOW US</h3>
                    <div class="socials">
                        <a href=""><img src="{{asset('img/footer-facebook.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('img/footer-twitter.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('img/footer-youtube.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('img/footer-pinterest.png')}}" alt=""></a>
                        <a href=""><img src="{{asset('img/footer-periscope.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
