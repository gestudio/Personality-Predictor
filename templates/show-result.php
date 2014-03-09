<div class='start-back' style="height:80%">
<?php 
	$result=$values["result"];
	function plot($color='black',$length=5)
	{
		//print 'in plot';
		echo "<div style='border:4px solid white;background:".$color.";height:20px;width:".($length*40)."'>";
		echo round($length,2);
		echo "</div>";
		//echo $length;
	}

  // create an array of values for the chart. These values 
  // could come from anywhere, POST, GET, database etc. 
  //$result = ["1"=>2.3,"2"=>3.3,"3"=>1.2,"4"=>3.6,"5"=>4.2]; 
?>

  <table style="margin-left:auto;margin-right:auto;border:1px solid black;background:white">
  	<tr>
  		<td>
  			Extraversion
  		</td>
  		<td>
  			<?php plot('yellow',$result["1"]);?>
  		</td>
  	</tr>
  	<tr>
  		<td>
  			Agreeableness
  		</td>
  		<td>
  			<?php plot('green',$result["2"]);?>
  		</td>
  	</tr>
  	<tr>
  		<td>
  			Conscientiousness
  		</td>
  		<td>
  			<?php plot('orange',$result["3"]);?>
  		</td>
  	</tr>
  	<tr>
  		<td>
  			Neuroticism
  		</td>
  		<td>
  			<?php plot('gold',$result["4"]);?>
  		</td>
  	</tr>
  	<tr>
  		<td>
  			Openness
  		</td>
  		<td>
  			<?php plot('silver',$result["5"]);?>
  		</td>
  	</tr>
  </table>
  <div style="text-align:center;font-size:20px;">
  You may find significance of these features <a href="http://en.wikipedia.org/wiki/Big_Five_personality_traits" target="_blank"> here</a>
  </div>
</div>
