<?php


function valid_countRow($table,$max,$count){
	if($table->rows_count<=$max){
		if($count<=$max){
			return true;
		}
	}else{
		return false;
	}
}