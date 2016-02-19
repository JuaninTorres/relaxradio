<footer id="footer">
    <div class="footer-first">
        <div class="row clearfix">
            <div class="grid_4">
                @include('partials.widgets.topvideo')
            </div><!-- widget -->

            <div class="grid_4">
                @include('partials.widgets.latesttweets')
            </div><!-- widget -->

            <div class="grid_4">
                @include('partials.widgets.photostream')
            </div><!-- widget -->
        </div><!-- row -->
    </div><!-- end first -->

    <div class="footer-last">
        <div class="row clearfix">
            <span class="copyright">&copy; 2016 by <a target="_blank" href="http://www.phillipmg.com/">Phillip MG</a>. All Rights Reserved. Powered by <a target="_blank" href="http://creativepmg.com">Creative PMG</a>.</span>
            <div id="toTop"><i class="icon-angle-up"></i></div><!-- Back to top -->
            @include('partials.navs.secundary')
        </div><!-- row -->
    </div><!-- end last -->

</footer><!-- end footer -->