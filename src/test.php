use stringEncode\Encode;

$str    = "You Rocks!";
$encode = new Encode;
$encode->detect($str);
$newstr = $encode->convert($str);
echo $newstr; 
