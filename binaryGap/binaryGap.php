<?php
	
	class Solution {
		
		protected $n;
		
		function binaryGap($n) {
			
			if (is_integer($n) && $n >0 && $n<12147483647) {
			
				$binary  = trim(decbin($n), 0); // number to binary & trim last 0 element
				$array   = explode(1, $binary); // explode
				$gap     = array_map('strlen', $array);
				return max($gap);
			}
			return 0;
		}
	
	}
	
	$obj = new Solution();
	echo $obj->binaryGap(529);