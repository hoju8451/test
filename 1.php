<?php
// 演算子についての説明です。
// 参考 https://www.sejuku.net/blog/26182

/********************************
 * 代数演算子
 *******************************/

 //加算
$a = 10 + 5;   // $a = 15
 
$b = 10;
$c = $a + $b;  // $c = 25
 
 
//減算
$a = 10 - 5;   // $a = 5
 
$b = 10;
$c = $a - $b;  // $c = -5
 
 
//乗算
$a = 10 * 5;   // $a = 50
 
$b = 10;
$c = $a * $b;  // $c = 500
 
//除算
$a = 100 / 5;   // $a = 20
 
$b = 5;
$c = $a / $b;  // $c = 4
 
//剰余
$a = 10 % 3;   // $a = 1
 
//累乗
$a = 10 ** 3;   //$a = 1000


/********************************
 * 代入演算子
 *******************************/

//数値を代入
$b = 10;
 
//値を代入
$a = $b; // $a = 10
 
//式を代入
$a = ($b + 5) / 3; // $a = 5
 
//関数の返り値を代入
$a = calc(10); // $a = 20
 
function calc($num){
  return $num + 10;
}
 
//文字列を代入
$str = "abcde"; // $str = abcde

/********************************
 * ビット演算子
 *******************************/

// $aと$bの両方のビットがセットされていると1、されていないと0
$c = $a & $b;

// $a または $b のどちらかにセットされていると1、されていないと0 
$c = $a | $b;

// $a または $b のどちらか一方にセットされていると1、両方がセットまたはセットされていないと0
$c = $a ^ $b;

// $a の各ビットがセットされている場合は0、セットされていないと1
$c = ~$a;

// $a のビットを左に $b ビットシフトする。各シフトは2をかけることを意味します。
$c = $a << 2;

// $a のビットを右に $b ビットシフトする。各シフトは2を割ることを意味します。
$c = $a >> 2;

/********************************
* 比較演算子
*******************************/

if ($a == $b) { // 等しい
}

if ($a === $b) { //（値が等しく、型が同じであるか） // 等しい
}

if ($a != $b) { // 等しくない
}

if ($a <> $b) { // 等しくない
}

if ($a !== $b) { //（値が等しくない、型が同じでない） // 等しくない
}

if ($a < $b) { // より少ない
}

if ($a > $b) { // より多い
}

if ($a <= $b) { // より少ないか等しい
}

if ($a >= $b) { // より多いか等しい
}

if ($a <=> $b) { ///（PHP7以降で使用可能） // 宇宙船
}

/********************************
 * 実行演算子
 *******************************/

$result = `ls -ltr`;
echo $result;

/********************************
 * 加算子/減算子
 *******************************/

//前置き演算子
$a = 10;
echo ++$a; //結果：11
 
//後置加算子
$a = 10;
echo $a++; //結果：10
echo $a;   //結果：11
 
//前置減算子
$a = 10;
echo --$a; //結果：9
 
//後置減算子
$a = 10;
echo $a--; //結果：10
echo $a;    //結果：9

/********************************
 * 論理演算子
 *******************************/

$a = 10;
 
//論理積(and)
if($a > 5 and $a < 15) echo '左辺の条件式と右辺の条件式がTRUE';
 
//論理和(or)
if($a > 5 or $a < 5) echo '左辺の条件式と右辺のどちらかがTRUE';
 
//排他的論理和(xor)
if($a > 5 xor $a < 5) echo '左辺の条件式と右辺のどちらかがTRUEもしくはTRUEでない';
 
//否定(!)
if(!($a > 15)) echo '条件式がTRUEでない';
 
//論理積(&&)
if($a > 5 && $a < 15) echo '左辺の条件式と右辺の条件式がTRUE';
 
//論理和(||)
if($a > 5 || $a < 5) echo '左辺の条件式と右辺のどちらかがTRUE';

/********************************
 * 文字列演算子
 *******************************/

$a = 'Samurai';
 
//結合演算子
$b = $a . 'Engineer';
echo $b; //結果：SamuraiEngineer
 
echo '<br>';
 
//結合代入演算子
$a .= 'Engineer';
echo $a; //結果：SamuraiEngineer

/********************************
 * 三項演算子
 *******************************/

$str1 = 'apple';
$str2 = 'orange';
 
$ans = $str1 == $str2 ? '等しい' : '等しくない';
 
echo $ans;
