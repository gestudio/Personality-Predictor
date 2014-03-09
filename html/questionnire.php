<?php
	require_once("../includes/config.php");
	if(empty($_POST["sn"]))
	{
		//beginning of test
		$q=query("select * from questions where sn=1");
		$sn=$q[0]["sn"];
		$question=$q[0]["question"];
		$feature=$q[0]["feature"];
		$priority=$q[0]["priority"];
		$result=["1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0];
		//print_r($result);
		render("question.php",["title"=>"Question ".$sn,"sn"=>$sn,"question"=>$question,"feature"=>$feature,"priority"=>$priority,"result"=>$result]);
	}
	else
	{
		//update attribute values
		$sn=$_POST["sn"];
		$result=["1"=>$_POST["1"],"2"=>$_POST["2"],"3"=>$_POST["3"],"4"=>$_POST["4"],"5"=>$_POST["5"]];
		$result[$_POST["feature"]]+=$_POST["answer"];
		//print_r($result);
		if($sn==44)
		{	
			$result["1"]=$result["1"]/8;
			$result["2"]=$result["2"]/9;
			$result["3"]=$result["3"]/9;
			$result["4"]=$result["4"]/8;
			$result["5"]=$result["5"]/10;
			render("show-result.php",["title"=>"Result","result"=>$result]);
		}
		else
		{
		$q=query("select * from questions where sn=?",$sn+1);
		$sn=$q[0]["sn"];
		$question=$q[0]["question"];
		$feature=$q[0]["feature"];
		$priority=$q[0]["priority"];
		render("question.php",["title"=>"Question ".$sn,"sn"=>$sn,"question"=>$question,"feature"=>$feature,"priority"=>$priority,"result"=>$result]);
		}
	}
?>
