<div class="footer">

    <div class="footer-inner">

        2018 &copy; Metronic by HOUDUN from <a href="http://www.houdunwang.com/" title="houdunwang" target="_blank">后盾网</a> - More Templates <a href="http://www.houdunren.com/" target="_blank" title="后盾人">后盾人</a>

    </div>

    <div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

    </div>

</div>

<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN CORE PLUGINS -->

<script src="public/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

<script src="public/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

<script src="public/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

<script src="public/media/js/bootstrap.min.js" type="text/javascript"></script>

<!--[if lt IE 9]>

<script src="public/media/js/excanvas.min.js"></script>

<script src="public/media/js/respond.min.js"></script>

<![endif]-->

<script src="public/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

<script src="public/media/js/jquery.blockui.min.js" type="text/javascript"></script>

<script src="public/media/js/jquery.cookie.min.js" type="text/javascript"></script>

<script src="public/media/js/jquery.uniform.min.js" type="text/javascript" ></script>

<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="public/media/js/jquery.vmap.js" type="text/javascript"></script>

<script src="public/media/js/jquery.vmap.russia.js" type="text/javascript"></script>

<script src="public/media/js/jquery.vmap.world.js" type="text/javascript"></script>

<script src="public/media/js/jquery.vmap.europe.js" type="text/javascript"></script>

<script src="public/media/js/jquery.vmap.germany.js" type="text/javascript"></script>

<script src="public/media/js/jquery.vmap.usa.js" type="text/javascript"></script>

<script src="public/media/js/jquery.vmap.sampledata.js" type="text/javascript"></script>

<script src="public/media/js/jquery.flot.js" type="text/javascript"></script>

<script src="public/media/js/jquery.flot.resize.js" type="text/javascript"></script>

<script src="public/media/js/jquery.pulsate.min.js" type="text/javascript"></script>

<script src="public/media/js/date.js" type="text/javascript"></script>

<script src="public/media/js/daterangepicker.js" type="text/javascript"></script>

<script src="public/media/js/jquery.gritter.js" type="text/javascript"></script>

<script src="public/media/js/fullcalendar.min.js" type="text/javascript"></script>

<script src="public/media/js/jquery.easy-pie-chart.js" type="text/javascript"></script>

<script src="public/media/js/jquery.sparkline.min.js" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="public/media/js/app.js" type="text/javascript"></script>

<script src="public/media/js/index.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->

<script>

    jQuery(document).ready(function() {

        App.init(); // initlayout and core plugins

        Index.init();

        Index.initJQVMAP(); // init index page's custom scripts

        Index.initCalendar(); // init index page's custom scripts

        Index.initCharts(); // init index page's custom scripts

        Index.initChat();

        Index.initMiniCharts();

        Index.initDashboardDaterange();

        Index.initIntro();

    });

</script>
