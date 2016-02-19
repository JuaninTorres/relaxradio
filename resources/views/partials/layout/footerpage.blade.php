<!-- Scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/theme20.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.js"></script>
<script type="text/javascript" src="js/ttw-music-player-min.js"></script>
<script type="text/javascript" src="music/myplaylist.js"></script>
<script type="text/javascript" src="js/countdown.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    jQuery(document).ready(function() {
        jQuery('.tp-banner').revolution({
            delay:9000,
            startwidth:1060,
            startheight:610,
            hideThumbs:10,
            navigationType:"off",
            fullWidth:"on",
            forceFullWidth:"on"
        });
        jQuery("#event1").countdown({
                    date: "31 December 2013 23:59:59",
                    format: "on"
                },
                function() {
                    // callback function
                });
    });
    /* ]]> */
</script>