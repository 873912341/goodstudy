<?php
$attr=[1,3,2,5,4,7,8,6,13,12,11];
$tmp=[];
for($i=0;$i<count($attr);$i++){
	for($a=0;$a<count($attr)-1;$a++){
		if($attr[$a]>$attr[$a+1]){
			$tmp=$attr[$a];
			$attr[$a]=$attr[$a+1];
			$attr[$a+1]=$tmp;
		}
	}
}
print_r($attr);