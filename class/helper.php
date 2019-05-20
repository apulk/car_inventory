<?php
	//filename:class/helper.php
	require_once('connect.php');
	


	class helper extends connect{



		/*************************************************************************************************************/

		public function insert($table,$field,$record)
		{
			$sql = "insert into $table($field) values ($record)";
            //echo $sql;
            //mysql_query("SET character_set_client=utf8", $this->conn)or die(mysql_error());
            $this->conn->query("SET character_set_client=utf8") or die($this->conn->error);
            $this->conn->query("SET character_set_connection=utf8") or die($this->conn->error);
           // mysql_query("SET character_set_connection=utf8", $this->conn)or die(mysql_error());
			return $this->conn->query($sql) or die($this->conn->error);
       	}
		public function call_procedure($sp,$param)
		{
			echo $param;
			if ($param == '') {

				return $this->conn->query("CALL $sp()");
			}
			else
			{
				return $this->conn->query("CALL $sp($param)");
			}
		}
	
      
		
		public function delete($table,$condition)
		{
			$sql = "delete from $table where $condition";
			
			//echo $sql;
		
			$this->conn->query($sql) or die($this->conn->error);
		}
	/*****************************************************************************************************************/
		
	
		function select_data($field,$table,$condition)
		{

            // mysql_query("SET character_set_results=utf8", $this->conn);

            $sql= "select $field from $table where $condition";


			$result =$this->conn->query($sql) or die($this->conn->error);

			//return $result->fetch_assoc();


			if($result->num_rows==0)
			{
				return null;
			}
			else
			{
				while($row=$result->fetch_assoc())
				{


					$data[]=$row;
				}


				return $data;
			}
		}
      
		function Genrate_string($qtd){
//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
			$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
			$QuantidadeCaracteres = strlen($Caracteres);
			$QuantidadeCaracteres--;

			$Hash=NULL;
			for($x=1;$x<=$qtd;$x++){
				$Posicao = rand(0,$QuantidadeCaracteres);
				$Hash .= substr($Caracteres,$Posicao,1);
			}

			return $Hash;
		}
		
/*****************************************************************************************************************/	
	
/*****************************************************************************************************************/	
		function dropdown($field,$table,$condition,$name)
		{
			$ans = $this->select($field,$table,$condition);
			
			/*echo "<pre>";
			print_r($ans);
			echo "</pre>";*/

			$str = "<select name='$name' class='$name'>";

			$str = $str . "<option value=''>  </option>";

			if($ans == "no")
			{
				$str = $str . "<option value = ''> No Records </option>";
				
			}
			else
			{
				foreach($ans as $value)
				{
					$str = $str . "<option value='$value[0]'>$value[0]</option>";
				}
			}

			$str = $str . "</select>";

			echo $str;
		}
		
		
		function dropdown1($field,$table,$condition,$name,$cnt)
		{
			$ans = $this->select($field,$table,$condition);
			
			/*echo "<pre>";
			print_r($ans);
			echo "</pre>";*/

			$str = "<select name='$name$cnt' class='$name'>";

			$str = $str . "<option value=''> please select </option>";

			if($ans == "no")
			{
				$str = $str . "<option value = ''> No Records </option>";
				
			}
			else
			{
				foreach($ans as $value)
				{
					$str = $str . "<option value='$value[0]#$cnt'>$value[0]</option>";
				}
			}

			$str = $str . "</select>";

			echo $str;
		}
		
		/*function dropdown2($field,$table,$condition,$name,$cnt,$disvalue)
		{
			$ans = $this->select($field,$table,$condition);
			
			

			$str = "<select name='$name$cnt' class='$name'>";

			$str = $str . "<option value='$disvalue#$cnt'> $disvalue </option>";

			if($ans == "no")
			{
				$str = $str . "<option value = ''> No Records </option>";
				
			}
			else
			{
				foreach($ans as $value)
				{
					if($disvalue == $value[0])
					{
					}
					else
					{
					$str = $str . "<option value='$value[0]#$cnt'>$value[0]</option>";
					}
				}
			}

			$str = $str . "</select>";

			echo $str;
		}*/
		
		function dropdown2($field,$table,$condition,$name,$disvalue)
		{
			$ans = $this->select($field,$table,$condition);
			
			/*echo "<pre>";
			print_r($ans);
			echo "</pre>";*/

			$str = "<select name='$name' class='$name'>";

			$str = $str . "<option value='$disvalue'> $disvalue </option>";

			if($ans == "no")
			{
				$str = $str . "<option value = ''> No Records </option>";
				
			}
			else
			{
				foreach($ans as $value)
				{
					if($disvalue == $value[0])
					{
					}
					else
					{
						$str = $str . "<option value='$value[0]'>$value[0]</option>";
					}
				}
			}

			$str = $str . "</select>";

			echo $str;
		}
/*****************************************************************************************************************/	
		
/*****************************************************************************************************************/	

		public function update($table,$column,$condition)
		{
				$sql="update $table set $column where $condition";
				//echo $sql;
				
				$ans= $this->conn->query($sql) or die ($this->conn->error);
				return $ans;
		
		}
		
		
		
}
?>
