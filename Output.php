
 <?php
     $str = $_GET['Tbox'];
    // echo $query;
   $arr = str_split($str);
   sort($arr);
  // print_r($arr);
   //$arr =implode('', $arr);
  // echo "chars" ;
  $chars = array_unique($arr);
  $chars =array_values($chars );
  //echo "cha khamu"; 
  //print_r($chars);
  $arLen=count($arr);
  $caLen=count($chars);
  //$chars=array();
  $charCount=array();
  $words=array();
  $w;
  // $i=0;
 // echo count($arr);
   for($i=0;$i<$caLen;$i++)
   {
	   $cnt=0;
	 for($j=0;$j<$arLen;$j++)
	 {
		 if($chars[$i]==$arr[$j])
		 {
			 $cnt++;
		 }
		 
	 }
	// echo $chars[$i]. " = ". $charCount[$i];
	 $charCount[$i]=$cnt;
   }
 
 ?>
 
 
 <!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
}

th {
    height: 50px;
}

th, td {
    border-bottom: 1px solid #ddd;
}
</style>
</head>
<body>
<?php
     $str = $_GET['Tbox'];
	 ?>
<h2>Character Frequency Count</h2>

<table>
  <tr>
    <th>Character</th>
    <th>Count</th>
  </tr>
  
 <?php
  for($i=0;$i<$caLen;$i++){
     
     echo "<TR><TD>$chars[$i]</TD>";
     
     echo "<TD>$charCount[$i]</TD></TR>  " ,"\n";
  }
  ?>
  </table>
  
  
  <a href="FreqCounter.php" title="FreqCounter">Input Another String</a>
  
  <h2>Word Count</h2>
  
  
  <table>
  <tr>
    <th>Words</th>
    <th>Count</th>
  </tr>
   
  <tr>
     <?php 
    foreach (array_count_values(str_word_count($str,true)) as $i => $val) :?>
  <tr>
        <td><?php print($i); ?></td>
        <td> <?php echo "$val"; ?></td>
     
  </tr>
  <?php endforeach;?>
  </tr>
</table>

<a href="FreqCounter.php" title="FreqCounter">Input Another String</a>

</body>
</html>