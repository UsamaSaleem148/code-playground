</div>
<!-- Footer Start -->
<div class="col-md-12 footer-div">
<footer class="text-center" id="footer">&copy; Copyright 2018-2020 Tejaarat.pk</footer>
</div>
<!-- Footer End -->
<!-- Javascript -->
<script type="text/javascript">
	jQuery(window).scroll(function(){
		var jqscroll = jQuery(this).scrollTop();
		jQuery('#logotext').css({
			"transform" : "translate(0px, "+jqscroll/2+"px)"
		});
		jQuery('#back-cart').css({
			"transform" : "translate("+jqscroll/12+"px, -"+jqscroll/12+"px)"
		});
		jQuery('#fore-money').css({
			"transform" : "translate(-"+jqscroll/8+"px, -"+jqscroll/4+"px)"
		});
	});
</script>
</body>
</html>