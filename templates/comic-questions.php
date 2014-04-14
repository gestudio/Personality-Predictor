<form method = 'POST' action = 'comic-test.php'>
<table class='table table-bordered table-striped' style="margin-left:auto;margin-right:auto;width:720px">
<input type='hidden' value="<?=$values["turn"]?>" name='turn'/>
	<?php
		foreach($values["traits"] as $key=>$value)
		{
			echo "<input type='hidden' value=".$value." name='p".$key."' >";
		}
		foreach($values["questions"] as $question)
		{
			echo "<tr>";
				echo "<td>";
					echo $question["description"];
						echo "<table style='width:100%; text-align:center'>";
							echo "<tr>";
								echo "<td style = 'width:200px'>";
									echo "<img src = './pictures/".$question["pic1"]."' style='width:200px;height:200px'/>";
								echo "</td>";
								echo "<td style = 'width:400px'>";
									echo "<input type='range' min='1' max='5' value='3' name='".$question["sn"]."' step='0.01'>";
								echo "</td>";
								echo "<td style = 'width:200px'>";
									echo "<img src = 'pictures/".$question["pic2"]."' style='width:200px;height:200px'/>";
								echo "</td>";
							echo "</tr>";
						echo "</table>";
				echo "</td>";
			echo "</tr>";
		}
	?>
</table>
<div style='text-align:center'>
<input type = 'submit' class='btn btn-primary' value='submit'>
</div>
</form>
