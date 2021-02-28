@extends('base')

@section('content')
<div class="parallax-container hero-banner valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="hide-on-med-and-down">
                <h1 class="header center white-text light">Un cadeau commun à organiser?</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !</h5>
                </div>
            </div>
            <div class="hide-on-large-only">
                <div class="row center">
                    <h5 class="header col s12 light">Un cadeau commun à organiser ?</h5>
                </div>
            </div>
            <div class="row">
                <div class="card col s12 m12 l8 offset-l2">
                    <div class="card-content">
                        <div class="input-field col s12 l8">
                            <input id="cag_name" type="text" class="validate">
                            <label for="cag_name">Nommez votre nouvelle campagne</label>
                        </div>
                        <a href="{{ URL::to('campaign/new') }}" class="btn-large waves-effect waves-light pink lighten-1 col s12 l4">Valider</a>
                    </div>
                </div>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="{{asset('images/11.jpg')}}" alt="Anniversaire, pot de départ, crémaillère... N'avancez plus les frais !"></div>
</div>

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 center">
                <h4>Comment ça marche ?</h4>
            </div>
        </div>
        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block center">
                    <div class="btn-large btn-floating white"><i class="material-icons teal-text">create</i></div>
                    <h5 class="center">Créez</h5>
                    <p class="light">et personnalisez votre campagne commune en 30 secondes !</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block center">
                    <div class="btn-large btn-floating white"><i class="material-icons teal-text">wc</i></div>
                    <h5 class="center">Invitez</h5>
                    <p class="light">vos amis en utilisant les réseaux sociaux, mail, etc.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block center">
                    <div class="btn-large btn-floating white"><i class="material-icons teal-text">shopping_cart</i></div>
                    <h5 class="center">Collectez</h5>
                    <p class="light">et utilisez l'argent comme bon vous semble avec vos amis.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h4 class="header col s12 light">Une campagne pensée pour vous<br>et pour toutes les occasions</h4>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="{{asset('images/10.jpg')}}" alt="Une campagne pensée pour vous"></div>
</div>

<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h4>les campagnes du moment</h4>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="carousel">
                    @foreach ($allCampaign as $campaign)
                    
                        <a class="carousel-item" href="#">
                            <div class="card center">
                                <div class="card-content">
                                    <span class="card-title teal-text">{{$campaign->campaign_name}}</span>
                                    <p class="black-text">{{$campaign->content}}</p>
                                </div>
                                <div class="card-action">
                                    <div class="row black-text">
                                        <div class="col s6">
                                            <i class="material-icons teal-text">account_circle</i> <b>12</b>
                                        </div>
                                        <div class="col s6">
                                            <i class="material-icons teal-text">euro_symbol</i> <b>{{$campaign->goal}}</b>
                                        </div>
                                    </div>

                                </div>
                                <div class="progress">
                                    <div class="determinate" style="width: 70%"></div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection