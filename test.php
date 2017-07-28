
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
//$colors = array( "Red", "Green", "Black", "White"); 
//print_r($colors);
//
//$lower_colors = array_map('strtolower', $colors);
//print_r($lower_colors);
//$upper_colors = array_map('strtoupper', $colors);
//print_r($upper_colors);
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

<?php
//$my_array = array("Seetha","Mahalakshmi","Priyadharashini","Jayashree","Sylaja","Gayatri");
//$new_array = array_map('strlen', $my_array);
//// Show maximum and minimum string length using max() function and min() function 
//echo "The shortest array length is " . min($new_array) .
//". The longest array length is " . max($new_array).'.';
?>

<?php
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x) 
{echo "$x ";}
echo "\n"
?>


<?php
//echo implode(",", range(200,250,4));
?>
