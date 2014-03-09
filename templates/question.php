<script>

</script>
<div class='start-back' style="height:80%">
<form method="POST" action="questionnire.php">
<input type="hidden" name="sn" value="<?=$values['sn']?>"/>
<input type="hidden" name="feature" value="<?=$values['feature']?>"/>
<input type="hidden" name="1" value="<?=$values['result']['1']?>"/>
<input type="hidden" name="2" value="<?=$values['result']['2']?>"/>
<input type="hidden" name="3" value="<?=$values['result']['3']?>"/>
<input type="hidden" name="4" value="<?=$values['result']['4']?>"/>
<input type="hidden" name="5" value="<?=$values['result']['5']?>"/>
<table style="margin-left:auto;margin-right:auto">
	<tr>
		<td>
			<div style="font-size:20px;color:black">
			<?=$values["sn"]?>. I see My Self as some one who <?=$values["question"]?>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="font-size:20px">
			<?php
				if($values["priority"]==0)
				{
					echo "<input type='radio' name='answer' value=1 onClick='document.forms[0].submit.disabled = false'>Disagree Strongly</input><br/>";
					echo "<input type='radio' name='answer' value=2 onClick='document.forms[0].submit.disabled = false'>Disagree a little</input><br/>";
					echo "<input type='radio' name='answer' value=3 onClick='document.forms[0].submit.disabled = false'>Neither Agree nor disagree</input><br/>";
					echo "<input type='radio' name='answer' value=4 onClick='document.forms[0].submit.disabled = false'>Agree a little</input><br/>";
					echo "<input type='radio' name='answer' value=5 onClick='document.forms[0].submit.disabled = false'>Agree Strongly</input><br/>";
				}
				else
				{
					echo "<input type='radio' name='answer' value=5 onClick='document.forms[0].submit.disabled = false'>Disagree Strongly</input><br/>";
					echo "<input type='radio' name='answer' value=4 onClick='document.forms[0].submit.disabled = false'>Disagree a little</input><br/>";
					echo "<input type='radio' name='answer' value=3 onClick='document.forms[0].submit.disabled = false'>Neither Agree nor Disagree</input><br/>";
					echo "<input type='radio' name='answer' value=2 onClick='document.forms[0].submit.disabled = false'>Agree a little</input><br/>";
					echo "<input type='radio' name='answer' value=1 onClick='document.forms[0].submit.disabled = false'>Agree Strongly</input><br/>";				
				}				
			?>
			</div>
		</td>
	</tr>
	<tr>
		<td style="text-align:center">
			<input type="submit" value="Submit" name='submit' disabled=''>
		</td>
	</tr>
</table>
</form>
</div>
