<header id="header" class="glue">
    <div class="row clearfix">
        <div class="little-head lefter">
            <div id="Login_PopUp_Link" class="sign-btn tbutton small"><span>Ingresa</span></div>

            @include('partials.widgets.socialnetwork')

            <div class="search">
                <form action="search.html" id="search" method="get">
                    <input id="inputhead" name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
                    <button type="submit"><i class="icon-search"></i></button>
                </form><!-- end form -->
            </div><!-- search -->
        </div><!-- little head -->
    </div><!-- row -->

    <div class="headdown">
        <div class="row clearfix">
            <div class="logo bottomtip" title="Relax Radio">
                <a href="{{ route('home_path') }}"><img src="/images/logo.png" alt="Relax Radio"></a>
            </div><!-- end logo -->

            @include('partials.navs.main')
        </div><!-- row -->
    </div><!-- headdown -->
</header><!-- end header -->