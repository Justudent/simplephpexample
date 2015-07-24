<?php 

$arr = array(
				3, 1, -5, 3, 3, -5, 0, 10, 1, 1
			);
	prd($arr);		
$r = result_array($arr);
prd($r);



function result_array($arr = array(), $len = 10){
	if( !empty($arr)){
		$result = array();
		$i=0; 
		$j=$len-1;
		$min=$arr[0];
		$max = $arr[0];
		
		$duplicate = array();
		$missing = array();
		
		for($k=0; $k<($len/2); $k++){
			
			if( $arr[$k] < $min ){
				$min = $arr[$k];
			}
			
			if( $arr[$j] < $min ){
				$min = $arr[$j];
			}
			
			if( $arr[$k] > $max ){
				$max = $arr[$k];
			}
			
			if( $arr[$j] > $max ){
				$max = $arr[$j];
			}
			
			if( isset( $duplicate[$arr[$k]] ) ){
				$duplicate[$arr[$k]]++;
			}
			else{
				$duplicate[$arr[$k]] = 1;
			}
			
			if( isset( $duplicate[$arr[$j]] ) ){
				$duplicate[$arr[$j]]++;
			}
			else{
				$duplicate[$arr[$j]] = 1;
			}
			
			$j--;
		}
		
		
		for($p=$min; $p<=$max; $p++){
			if(!in_array($p,$arr)){
				$missing[$p] = $p;
			}
		}
		
		$result['min'] = $min;
		$result['max'] = $max;
		$result['duplicate'] = $duplicate;
		$result['missing'] = $missing;
		
		return $result;
	}
	
}

function prd($v){
	echo "<pre>";
	print_r($v);
	echo "</pre>";
}
function pr($v){
	echo "<pre>";
	print_r($v);
	echo "</pre>";
}
?>