<div id="display-matches_image"></div>
<div style="height: 20px; width: 100%;"></div>
<br><br>
<div id="display-matches_color">
	<img src="img/google-loading-icon.gif">
</div>
<div style="height: 20px; width: 100%;"></div>
<br><br>
<p>Select Size:</p>
<div id="display-matches_size">
	<img src="img/google-loading-icon.gif">
</div>
<div style="height: 10px; width: 100%;"></div>
<br><br>
<div id="display-matches_info">
	<img src="img/google-loading-icon.gif">
</div>

<br><br>
<div id="display-themes">
	<img width="200px" src="img/macy_30.png">
</div>
<div id="themes" style="display: none;">

<select id="selected-theme">
    <option value='select' selected>Select a Theme</option>
	<option value='casual'>Casual</option>
	<option value='business_casual'>Business Casual</option>
	<option value='party_wear'>Party Wear</option>
	<option value='wear_to_work'>Wear to Work</option>
	<option value='summer'>Summer</option>
	<option value='winter'>Winter</option>
	<option value='spring'>Spring</option>
</select>
</div>
<script>
  $('#display-themes').click(function(){
  	$('#themes').show();
  	});
   $('#selected-theme').change(function(){
   	    $('#display-matches').hide();
   	    $('#matching-items').show();
   })
</script>