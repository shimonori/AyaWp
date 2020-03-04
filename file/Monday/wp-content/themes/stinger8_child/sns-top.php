<?php
/**
 * トップページ用のSNSボタン
 */

		$url_encode=urlencode(get_home_url());
		$title_encode=urlencode(get_bloginfo('name'));

		if(function_exists('scc_get_share_twitter')){
			$plug = "smanone";
		}else{
			$plug = "";
		}
?>
