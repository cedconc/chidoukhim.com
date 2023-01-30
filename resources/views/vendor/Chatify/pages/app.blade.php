

    @include('Chatify::layouts.headLinks')
    <style>
        #header .social-icons, #back-to-top{
            display: none;
        }
    </style>





    <div class="messenger" style="height: calc(100vh - 150px);">
        {{-- ----------------------Users/Groups lists side---------------------- --}}
        <div class="messenger-listView">
            {{-- Header and search bar --}}
            <div class="m-header">
                <nav>
                    <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">{{ __('MESSAGES') }}</span> </a>
                    {{-- header buttons --}}
                    <nav class="m-header-right">
                        <a href="#"><i class="fas fa-cog settings-btn"></i></a>
                        <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                    </nav>
                </nav>

                @if (Auth::user()->chatrane == 1)

                    {{-- Search input --}}
                    <input type="text" class="messenger-search" placeholder="{{ __('Rechercher') }}" />

                @endif

                {{-- Tabs --}}
                <div class="messenger-listView-tabs">
                    <a href="#" @if($route == 'user') class="active-tab" @endif data-view="users">
                        <span class="far fa-user"></span> {{ __('Conversations') }}</a>
                    {{-- <a href="#" @if($route == 'group') class="active-tab" @endif data-view="groups">
                        <span class="fas fa-users"></span> Groups</a> --}}
                </div>
            </div>
            {{-- tabs and lists --}}
            <div class="m-body">
            {{-- Lists [Users/Group] --}}
            {{-- ---------------- [ User Tab ] ---------------- --}}
            <div class="@if($route == 'user') show @endif messenger-tab app-scroll" data-view="users">

                {{-- Favorites --}}
                <p class="messenger-title" style="font-size: 1rem; margin-top: 1.5rem;">{{ __('Mes chidoukhs') }} <i class="fa fa-heart"></i> </p>
                    <div class="messenger-favorites app-scroll-thin"></div>

                {{-- Saved Messages --}}
                {!! view('Chatify::layouts.listItem', ['get' => 'saved','id' => $id])->render() !!}

                {{-- Contact --}}
                <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);"></div>

            </div>

            {{-- ---------------- [ Group Tab ] ---------------- --}}
            <div class="@if($route == 'group') show @endif messenger-tab app-scroll" data-view="groups">
                    {{-- items --}}
                    <p style="text-align: center;color:grey;">Soon will be available</p>
                </div>

                {{-- ---------------- [ Search Tab ] ---------------- --}}

                @if (Auth::user()->chatrane == 1)

                    <div class="messenger-tab app-scroll" data-view="search">
                        {{-- items --}}
                        <p class="messenger-title">{{ __('Rechercher') }}</p>
                        <div class="search-records">
                            <p class="message-hint"><span>{{ __('Saisir pour rechercher') }}.</span></p>
                        </div>
                    </div>

                @endif

            </div>
        </div>

        {{-- ----------------------Messaging side---------------------- --}}
        <div class="messenger-messagingView">
            {{-- header title [conversation name] amd buttons --}}
            <div class="m-header m-header-messaging">
                <nav>
                    {{-- header back button, avatar and user name --}}
                    <div style="display: inline-flex;">
                        <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                        <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px; background-image: url('{{ assets_base() }}/assets/images/logo.png')">
                        </div>
                        <a href="#" class="user-name">{{ config('chatify.name') }}  </a>
                    </div>
                    {{-- header buttons --}}
                    <nav class="m-header-right">
                        {{-- <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                        <a href="/"><i class="fas fa-home"></i></a> --}}
                        <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                    </nav>
                </nav>
            </div>
            {{-- Internet connection --}}
            <div class="internet-connection">
                <span class="ic-connected">{{ _('Connecté') }}</span>
                <span class="ic-connecting">{{ _('Connexion') }}...</span>
                <span class="ic-noInternet">{{ _('Internet indisponible') }}</span>
            </div>
            {{-- Messaging area --}}
            <div class="m-body app-scroll">
                <div class="messages">
                    <p class="message-hint" style="margin-top: calc(30% - 126.2px);"><span>{{ _('Choisissez un chat pour commencer par écrire') }}</span></p>
                </div>
                {{-- Typing indicator --}}
                <div class="typing-indicator">
                    <div class="message-card typing">
                        <p>
                            <span class="typing-dots">
                                <span class="dot dot-1"></span>
                                <span class="dot dot-2"></span>
                                <span class="dot dot-3"></span>
                            </span>
                        </p>
                    </div>
                </div>
                {{-- Send Message Form --}}
                @include('Chatify::layouts.sendForm')
            </div>
        </div>
        {{-- ---------------------- Info side ---------------------- --}}
        <div class="messenger-infoView app-scroll">
            {{-- nav actions --}}
            <nav>
                <a href="#"><i class="fas fa-times"></i></a>
            </nav>
            {!! view('Chatify::layouts.info')->render() !!}
        </div>
    </div>




    @include('Chatify::layouts.modals')
    @include('Chatify::layouts.footerLinks')



