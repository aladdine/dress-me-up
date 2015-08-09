<div id="image-1">
<img src="img/macy-07.png">
</div>
<div id="image-2">
<img src="img/macy-07.png">
</div>
<div id="image-3">
<img src="img/macy-07.png">
</div>

<style type="text/css">
	#image-2 {
		display: none;
	}
	#image-3 {
		display: none;
	}
</style>

<script>
  $("image-1").click(function(){
  	 $("image-1").hide();
  	 $("image-2").show();
  	 $("image-3").hide();
  });
   $("image-2").click(function(){
  	 $("image-1").hide();
  	 $("image-2").hide();
  	 $("image-3").show();
  });
    $("image-3").click(function(){
  	 $("image-1").show();
  	 $("image-2").hide();
  	 $("image-3").hide();
  });

</scrip>