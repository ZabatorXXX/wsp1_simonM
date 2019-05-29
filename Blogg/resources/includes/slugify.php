<?php

function slugify($str, $options = array()) {
	$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());

  $defaults = array(
		'delimiter' => '-',
		'limit' => null,
		'lowercase' => true,
		'replacements' => array(),
		'transliterate' => true,
	);

	$options = array_merge($defaults, $options);

	$char_map = array(
    //Svenska Alfabetet
    'Å'=> 'A', 'Ä'=> 'A', 'Ö'=> 'O', 'å'=> 'a', 'ä'=> 'a', 'ö'=> 'o'
  );

  $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);

  if ($options['transliterate']) {
    $str = str_replace(array_keys($char_map), $char_map, $str);
  }

  $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);

  $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);

  $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');

  $str = trim($str, $options['delimiter']);

  $str =  $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;

  if (empty($str)) {
    return "n-a";
  }

  return $str;

}
