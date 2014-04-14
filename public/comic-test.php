<?php
	 require("../includes/config.php");
	
	
	if(!isset($_POST["turn"]))
	{
		$turn = 0;
		$traits = [0, 0, 0, 0, 0, 0];
		$questions = query("select * from comic_test where tn = ?", $turn+1);
		render("comic-questions.php", ["title"=>"Comic Test", "questions"=>$questions, "turn"=>$turn, "traits"=>$traits]);
	}
	else
	{
		$turn = $_POST["turn"];
		$turn = $turn+1;
		$traits = [0, $_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"] ];
		$priority = query("select sn, priority from comic_test where tn = ?", $turn);
		foreach($priority as $p)
		{
			if($p["priority"] == '0')
				$traits[$turn]+=$_POST[$p["sn"]];
			else
				$traits[$turn]+=(5- $_POST[$p["sn"]]);
		}
		$traits[$turn]/=count($priority);
		if($turn==5)
		{
			$result = $traits;
			query("insert into features(extraversion, agreeableness, conscientiousness, neuroticism, openness, tstamp) values(?,?,?,?,?,(select sysdate()))",$result["1"],$result["2"],$result["3"],$result["4"],$result["5"]);

			render("show-result.php",array("title"=>"Result","result"=>$result,"name"=>"Test User","id"=>12345));
		}
		else
		{
			$questions = query("select * from comic_test where tn = ?", $turn+1);
			render("comic-questions.php", ["title"=>"Comic Test", "questions"=>$questions, "turn"=>$turn, "traits"=>$traits]);
		}
	}
?>
		
