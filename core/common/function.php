<?php

function P($var){
	if (is_bool($var)) {
		var_dump($var);
	} else if (is_null($var)) {
		var_dump(NULL);
	} else {
		echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" . print_r($var, true) . "</pre>";
	}
}

function post($name, $default = false, $fitt = false)
{
	if(isset($_POST[$name]))
	{
		if($fitt) {
			switch ($fitt) {
				case "int":
					if(is_numeric($_POST[$name])) {
						return $_POST[$name];
					} else {
						return $default;
					}
				break;
				default: ;
			}
		} else {
			return $_POST[$name];
		}
	} else {
		return $default;
	}
}

function jump($url)
{
	$host = \core\lib\route::$hosts;
	if($url!='/') {
		echo 1;die;
		header('location:'.$host.$url);
	} else {
		header('location:'.$host);
	}
	exit();
}

function get($name, $default = false, $fitt = false)
{
	if(isset($_GET[$name])) {
		if($fitt) {
			switch ($fitt) {
				case "int":
					if(is_numeric($_GET[$name])) {
						return $_GET[$name];
					} else {
						return $default;
					}
					break;
				default: ;
			}
		} else {
			return $_GET[$name];
		}
	} else {
		return $default;
	}
}

function luhmCheck($bankno)
{
	if (strlen($bankno) < 16 || strlen($bankno) > 19) {
		return false;
	};
	if (!is_numeric($bankno)) {
		return false;
	}
	//开头6位
	$strBin = array('10', '18', '30', '35', '37', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '58', '60', '62', '65', '68', '69', '84', '87', '88', '94', '95', '98', '99');
	if (!in_array(substr($bankno, 0, 2), $strBin)) {
		return false;
	}
	$lastNum=substr($bankno,strlen($bankno)-1,1);//取出最后一位（与luhm进行比较）

	$first15Num=substr($bankno,0,strlen($bankno)-1);//前15或18位
	$newArr=Array();
	for($i=strlen($first15Num)-1;$i>-1;$i--){    //前15或18位倒序存进数组
		array_push($newArr,substr($first15Num,$i,1));
	}
	$arrJiShu=Array();  //奇数位*2的积 <9
	$arrJiShu2=Array(); //奇数位*2的积 >9

	$arrOuShu=Array();  //偶数位数组
	for($j=0;$j<count($newArr);$j++){
		if(($j+1)%2==1){//奇数位
			if(intval($newArr[$j])*2<9)
				array_push($arrJiShu,intval($newArr[$j])*2);
			else
				array_push($arrJiShu2,intval($newArr[$j])*2);
		} else //偶数位
			array_push($arrOuShu,$newArr[$j]);
	}

	$jishu_child1=Array();//奇数位*2 >9 的分割之后的数组个位数
	$jishu_child2=Array();//奇数位*2 >9 的分割之后的数组十位数
	for($h=0;$h<count($arrJiShu2);$h++){
		array_push($jishu_child1,intval($arrJiShu2[$h])%10);
		array_push($jishu_child2,intval($arrJiShu2[$h])/10);
	}

	$sumJiShu=0; //奇数位*2 < 9 的数组之和
	$sumOuShu=0; //偶数位数组之和
	$sumJiShuChild1=0; //奇数位*2 >9 的分割之后的数组个位数之和
	$sumJiShuChild2=0; //奇数位*2 >9 的分割之后的数组十位数之和
	$sumTotal=0;
	for($m=0;$m<count($arrJiShu);$m++){
		$sumJiShu=$sumJiShu+intval($arrJiShu[$m]);
	}

	for($n=0;$n<count($arrOuShu);$n++){
		$sumOuShu=$sumOuShu+intval($arrOuShu[$n]);
	}

	for($p=0;$p<count($jishu_child1);$p++){
		$sumJiShuChild1=$sumJiShuChild1+intval($jishu_child1[$p]);
		$sumJiShuChild2=$sumJiShuChild2+intval($jishu_child2[$p]);
	}
	//计算总和
	$sumTotal=intval($sumJiShu)+intval($sumOuShu)+intval($sumJiShuChild1)+intval($sumJiShuChild2);

	//计算Luhm值
	$k= intval($sumTotal)%10==0?10:intval($sumTotal)%10;
	$luhm= 10-$k;

	if($lastNum==$luhm){
		return true;
	} else {
		return false;
	}
}
