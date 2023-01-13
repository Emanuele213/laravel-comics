@extends('guest.layouts.base')

@section('content')
    <img src="{{ url('/images/jumbotron.jpg')}}" alt="teen titans" class="img-teen-titans">
    <div class="h1-main-container">
        <h1>CURRENT SERIES</h1>
    </div>
    <div class="bg-black-comics">
        <div class="comics-container">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <div class="in-card">
                        <h2>
                            {{ $comic['title'] }}
                        </h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="bg-blue">
        <div class="blue-main-container">
          <ul class="dc-menu">
            <li class="icon-title">
              <div>
                <img
                  src="{{ url('/images/buy-comics-digital-comics.png') }}"
                  alt="digital comics"
                  class="img-size"
                />
              </div>
              DIGITAL COMICS
            </li>
            <li class="icon-title">
              <div>
                <img
                  src="{{ url('/images/buy-comics-merchandise.png') }}"
                  alt="merchandise"
                  class="img-size"
                />
              </div>
              DC MERCHANDISE
            </li>
            <li class="icon-title">
              <div>
                <img
                  src="{{ url('/images/buy-comics-subscriptions.png') }}"
                  alt="iscriviti"
                  class="img-size"
                />
              </div>
              SUBSCRIPTION
            </li>
            <li class="icon-title">
              <div>
                <img
                  src="{{ url('/images/buy-comics-shop-locator.png') }}"
                  alt="localizzatore shop"
                  class="img-size"
                />
              </div>
              COMIC SHOP LOCATOR
            </li>
            <li class="icon-title">
              <div>
                <img
                  src="{{ url('/images/buy-dc-power-visa.svg') }}"
                  alt="carta visa"
                  class="img-size"
                />
              </div>
              DC POWER VISA
            </li>
          </ul>
        </div>
      </div>
@endsection
