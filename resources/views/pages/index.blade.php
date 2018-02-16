@extends('layouts.app')

@section('content')

<div class="container">
    <div class="background">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <h1 class="iphone-text">iPhone SE</h1>
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="iphone">
                    {{-- <img src="https://i.imgur.com/3f8wsvk.png" alt="iphone"> --}}
                    <img src="https://www.apple.com/euro/iphone-se/a/generic/overview/images/og.jpg?201711220924" alt="iphone">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="features">
                    <ul>
                        <li>
                            <strong>Ekranas: </strong> 4 colių “Retina”
                        </li>

                        <li>
                            <strong>Procesorius: </strong> A9
                        </li>

                        <li>
                            <strong>Kamera: </strong> Galinė: 12MP 4K iSight, Priekinė: 1.2 MP 720p FaceTime
                        </li>

                        <li>
                            <strong>Jungtys: </strong> Lightning, 3.5 mm ausinių lizdas
                        </li>

                        <li>
                            <strong>Belaidis ryšys: </strong> LTE, 802.11ac Wi‑Fi, Bluetooth 4.2, GPS, NFC
                        </li>

                        <li>
                            <strong>Akumuliatorius: </strong> Kalbėjimo laikas: iki 14 val. naudojant 3G, budėjimo laikas: Iki 10 dienų
                        </li>

                        <li>
                            <strong>Svoris: </strong> 113 g
                        </li>

                        <li>
                            <strong>Pakuotėje: </strong> iPhone, EarPods ausinės, laidas iš Lightning į USB, USB maitinimo adapteris
                        </li>
                    </ul>
                    
                    <div class="call-to-action">
                        <p>
                            <em>
                                <strike>419,00 €</strike>
                            </em>
                            <br> 359,00 €
                        </p>
                        
                        <a href="#uzsisakyti">
                            <button class="btn btn-primary text-center">Užsisakyti</button>
                        </a>
                    </div>
                </div>  
            </div>

            <div class="cont2">
                <h3>Aprašymas</h3>
                <hr>
                <p>
                    „iPhone SE“ yra 4 colių „Retina“ ekranas, A9 lustas su 64 bitų stalinio kompiuterio klasės architektūra, „Touch ID“ pirštų atspaudų jutiklis, 12 MP „iSight“ kamera, „FaceTime“ HD kamera su „Retina“ blykste, „Live Photos“ funkcija, ypač spartus belaidis ryšys ir spartus „Wi-Fi“, „iOS 10“ ir „iCloud“.
                </p>
            </div>

            <div class="cont2">
                <h3 id="uzsisakyti">Užsisakyti</h3>
                <hr>
                @include('partials.form')
            </div>
        </div>
    </div>
</div>
@endsection
