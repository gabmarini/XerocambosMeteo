<?php 
	$result = array();
	exec("grep -r langtrans ../data/", $result);
	$risultato = array();
	foreach ($result as $elem) {
		$pos = strpos($elem, "langtrans");
		if($pos != '') {
			$new_result = substr($elem, $pos);
			$pos = strpos($new_result, "'");
			if($pos > 0 && $pos <= 13) {
				$new_result = substr($new_result, $pos+1);
				$pos = strpos($new_result, "'");
				array_push($risultato, substr($new_result, 0, $pos));
				$new_result = substr($new_result, $pos);
			}
			else {
				$new_result = substr($new_result, 14);
			}
		}
		$pos = strpos($new_result, "langtrans");
		if($pos != '') {
			$new_result = substr($new_result, $pos);
			$pos = strpos($new_result, "'");
			if($pos > 0 && $pos <= 13) {
				$new_result = substr($new_result, $pos+1);
				$pos = strpos($new_result, "'");
				array_push($risultato, substr($new_result, 0, $pos));
				$new_result = substr($new_result, $pos);
			}
			else {
				$new_result = substr($new_result, 14);
			}
		}
	}

	$file_de = fopen("../data/language-de.txt", r) or die("Unable to open file file_de!");
	$file_result = fopen("results.txt", w) or die("Unable to open file result!");
	$temp = array();
	$in_array = array();
	$temp = split("\n", fread($file_de, filesize("language-de.txt")));
	foreach ($temp as $element) {
		$temp2 = split("\|", $element);
		array_push($in_array, $temp2[1]);
	}
	foreach ($risultato as $element) {
		if(in_array($element, $in_array) == 0) {
			fwrite($file_result, $element . " de\n");
		}
	}
	fclose($file_de);

	$file_it = fopen("../data/language-it.txt", r) or die("Unable to open file file_de!");
	$temp = array();
	$in_array = array();
	$temp = split("\n", fread($file_it, filesize("language-it.txt")));
	foreach ($temp as $element) {
		$temp2 = split("\|", $element);
		array_push($in_array, $temp2[1]);
	}
	foreach ($risultato as $element) {
		if(in_array($element, $in_array) == 0) {
			fwrite($file_result, $element . " it\n");
		}
	}
	fclose($file_it);

	$file_el = fopen("../data/language-el.txt", r) or die("Unable to open file file_de!");
	$temp = array();
	$in_array = array();
	$temp = split("\n", fread($file_el, filesize("language-el.txt")));
	foreach ($temp as $element) {
		$temp2 = split("\|", $element);
		array_push($in_array, $temp2[1]);
	}
	foreach ($risultato as $element) {
		if(in_array($element, $in_array) == 0) {
			fwrite($file_result, $element . " el\n");
		}
	}
	fclose($file_el);

	$file_fr = fopen("../data/language-fr.txt", r) or die("Unable to open file file_de!");
	$temp = array();
	$in_array = array();
	$temp = split("\n", fread($file_fr, filesize("language-fr.txt")));
	foreach ($temp as $element) {
		$temp2 = split("\|", $element);
		array_push($in_array, $temp2[1]);
	}
	foreach ($risultato as $element) {
		if(in_array($element, $in_array) == 0) {
			fwrite($file_result, $element . " fr\n");
		}
	}
	fclose($file_fr);

	fclose($file_result);





