<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kiiki</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@1,100;1,500&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Prompt', sans-serif;
    }
</style>
</head>

<body>
    <?php
$salary = "25000";
echo "เงินเดือน = $salary บาท <br>";
if($salary <= 10000)
{
$bonus = $salary *(300/100) ;
echo "ได้โบนัส = ".$bonus."  บาท<br>";
}elseif( $salary <=50000)
{
$bonus = $salary *(200/100) ;
echo "ได้โบนัส = ".$bonus."  บาท<br>";
}else{
$bonus = $salary *(100/100) ;
echo "ได้โบนัส = ".$bonus."  บาท<br>";
}
$a=$salary+$bonus;
echo "<br>รายรับสุทธิ = ".$a." บาท<br>";
?>
</body>

</html>