<?php
/**
 * 投稿ページのSNSボタン
 */
	$url_encode=urlencode(get_permalink());
	$title_encode=urlencode(get_the_title());

	if(function_exists('scc_get_share_twitter')){
		$plug = "smanone";
	}else{
		$plug = "";
	}

?>
	 
