<script type="text/javascript">
jQuery(document).ready(function($){
	var s = $(".mt_menu_duan");
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= pos.top & windowpos >=500) {
			s.addClass("fixed");
		} else {
			s.removeClass("fixed");	
		}
	});
});
</script>
//HTML
<div class="wrapper">
    <div class="sticker">fixed pos until 1000</div>
</div>
<div class="marker">&lt; 1000</div>

//

body {
  font-family: 'Helvetica', sans;
}
div.wrapper {
	margin: 260px auto;
	width:600px;
	background:#efe;
  height: 3900px;
}
div.sticker {
	padding: 20px;
	margin: 20px 0;
	background: #ece;
	width: 190px;
}
.stick {
	position:fixed;
	top:0px;
}
.marker {
  position: absolute;
  top: 1000px;
  right: 100px;
  font-size: 2em;
}
