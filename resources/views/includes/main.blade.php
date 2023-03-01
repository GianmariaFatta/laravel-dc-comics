 <main>
        <div id="contents">
            <div class="container">
                <div class="comic-row p-2">
                @foreach ($comics as $comic )
                <div class="comic-card mb-4">
                    <div class="card">
                        <img src={{$comic->thumb}}>
                    </div>
                    <h6>{{$comic->title}}</h6>
                 </div>
                @endforeach
                </div>
            </div>
            <div class="row-button-main">
                <button><a href=""> LOAD MORE</a></button>
            </div>
        </div>
        <section>
            <ul>
                <li><a href="">DIGITAL COMICS</a> </li>
                <li><a href="">DC MERCHANDISE</a> </li>
                <li><a href="">SUBSCRIPTION</a> </li>
                <li><a href="">COMIC SHOP LOCATOR</a> </li>
                <li><a href="">DC POWER VISA</a> </li>
            </ul>
        </section>
        {{-- <div id="comics-main">
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
        </div> --}}
    </main>