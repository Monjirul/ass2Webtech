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
  
  <tr>
   <?php 
 foreach (count_chars($str, 1) as $i => $val) :?>
  <tr>
        <td><?php echo chr($i); ?></td>
        <td> <?php echo "$val"; ?></td>
     
  </tr>
  <?php endforeach;?>
</tr>
  </table>
  
  
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

</body>
</html>