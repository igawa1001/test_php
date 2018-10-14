<?php
require 'number.php';
$first = $_POST['q1'];
$second = $_POST['q2'];
$third = $_POST['q3'];

$number = new Number();

$first = $number->chkFirst($_POST['q1']);
var_dump($first);
$second = $number->chkSecond($_POST['q2']);

$third = $number->chkThird($_POST['q3']);
// if($third==1)
// {
//     $third=6;
// }
$total = $first + $second + $third;



if($total==0)
{
    $type = 'どのタイプでもありません。';
}else
{
    
    $total = $total + $number->getFirst() + $number->getSecond();
    $type = $total % 10;
    $type = 'あなたは「'. $type.'」です。';
}


?>
<?php echo $type; ?><br><br>
<form method="post">
・問１<br>
<input type="radio" name="q1" value="0" >NO
<input type="radio" name="q1" value="1" >YES<br><br>
・問２<br>
<input type="radio" name="q2" value="0" >NO
<input type="radio" name="q2" value="1" >YES<br><br>
・問３<br>
<input type="radio" name="q3" value="0" >NO
<input type="radio" name="q3" value="1" >YES<br><br>

<input type="submit" value="送信">
</form>


<!-- 問1がYESの場合は 9点
問2がYESの場合は 4点
問3がYESの場合は 6点

問1のみがYESの場合
$total = 6 + 0 + 0 + 6 + 3;
問2のみがYESの場合
$total = 0 + 3 + 0 + 6 + 3;
問3のみがYESの場合
$total = 0 + 0 + 7 + 6 + 3;
問1・問2のみがYESの場合
$total = 6 + 3 + 0 + 6 + 3;
問2・問3のみがYESの場合
$total = 0 + 3 + 7 + 6 + 3;
問1・問3のみがYESの場合
$total = 6 + 0 + 7 + 6 + 3;
全てYESの場合
$total = 6 + 3 + 7 + 6 + 3; -->