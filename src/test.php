use stringEncode\Encode;

$str    = "you rocks!";
$encode = new Encode;
$encode->detect($str);
$newstr = $encode->convert($str);
echo $newstr; 
