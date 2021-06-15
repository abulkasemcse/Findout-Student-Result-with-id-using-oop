<?php 

class Student
{
	public $id;
	public $name;
	public $batch;

	public function __construct($id,$name,$batch)
	{
		$this->id=$id;
		$this->name=$name;
		$this->batch=$batch;

		$this->result($this->id);
	}

	public function result($id)
	{
		$file=fopen("result.txt","r");
		while(!feof($file))
		{
			$data=fgets($file);
			$mark=explode("=",$data);
			if($id==$mark[0])
			{
				echo $this->name."(ID:".$this->id.",Batch:".$this->batch.") has scored ".$mark[1]." marks!";
			}

		}
	}
}

$obj=new Student(780,"MD Abul Kasem","03");



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css"> 
	body{
		background-color: dimgray;
		font-weight: bolder;
		font-style: italic;
		color: greenyellow;
		text-align: center;

	}
	</style>
</head>
<body>
	
</body>
</html>