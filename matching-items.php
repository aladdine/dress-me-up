<div id="image-1">
<img width="100%" src="img/img1.png">
</div>
<div id="image-2">
<img width="100%" src="img/img2.png">
</div>
<div id="image-3">
<img width="100%" src="img/img3.png">
</div>
<div id="image-4">
<img width="100%" src="img/im4.png">
</div>
<div id="checkout-btn">
	<img width="100%" src="img/macy-46.png">
</div>

<style type="text/css">
	#image-2 {
		display: none;
	}
	#image-3 {
		display: none;
	}

	}
	#image-4 {
		display: none;
	}
</style>

<script>
  $("#image-1").click(function(){
  	 $("#image-1").hide();
  	 $("#image-2").show();
  	 $("#image-3").hide();
  	 $("#image-4").hide();
  });
   $("#image-1").click(function(){
  	 $("#image-1").hide();
  	 $("#image-2").hide();
  	 $("#image-3").show();
  	 $("#image-4").hide();
  });
    $("#image-1").click(function(){
  	 $("#image-1").hide();
  	 $("#image-2").hide();
  	 $("#image-3").hide();
  	 $("#image-4").show();
  });
     $("#image-1").click(function(){
  	 $("#image-1").show();
  	 $("#image-2").hide();
  	 $("#image-3").hide();
  	 $("#image-4").hide();
  });
   

</script>