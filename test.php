
<?php
//$a=array("a"=>"red","b"=>"green","c"=>"red","d"=>"green","e"=>"blue");
//print_r(array_unique($a));
?>

<?php
//$list1 = "1,2,2,6,7,9";
//  $list2 = "1,8,9,6,5";
//  $result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));
//  echo $result."\n";
?>



<?php
//$arr = array('Hello','World!','Beautiful','Day!');
//echo implode(",",$arr);
?>


<?php
//$str = "Hello world. It's a beautiful day.";
//print_r (explode(",",$str));
?> 


<?php
$colors = array( "Red", "Green", "Black", "White"); 
print_r($colors);

$lower_colors = array_map('strtolower', $colors);
print_r($lower_colors);
$upper_colors = array_map('strtoupper', $colors);
print_r($upper_colors);
?>


    <?php
//$count_array = array("Seetha","Maha","Pavithra","Lakshmi","Seetha","Varsha","Seetha","Seetha");
//$counts = array_count_values($count_array);
//echo $counts['Seetha'];
?>


<?php
//$a=array("a"=>"Pen","b"=>"Paper","c"=>"Pencil");
//print_r(array_reverse($a));
?>

