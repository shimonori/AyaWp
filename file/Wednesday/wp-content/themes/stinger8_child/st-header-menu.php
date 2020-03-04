<?php
/**
 * グローバルメニュー
 */

if( !st_is_mobile() ){ //スマートフォン・タブレット及び投稿ページでは表示しない ?>
	<?php
	$design_set_menu = array(
		'container' => 'nav',
		'container_class' => 'smanone clearfix',
		'theme_location' => 'primary-menu',
	);
	$design_none_menu = array(
		'container' => 'nav',
		'container_class' => 'smanone clearfix',
	);
	$normal_set_menu = array(
		'container' => 'nav',
		'container_class' => 'clearfix st5',
		'theme_location' => 'primary-menu',
		'depth' => 1,
	);
	$normal_none_menu = array(
		'container' => 'nav',
		'container_class' => 'clearfix st5',
		'depth' => 1,
	);


	if ( has_nav_menu( 'primary-menu' ) ) : //メニューセットあり ?>
		<div id="st-menubox">
			<div id="st-menuwide">
				<?php wp_nav_menu( $design_set_menu ); ?>
			</div>
		</div>
	<?php else : //メニューセットなし ?>
		<div id="st-menubox">
			<div id="st-menuwide">
				<?php wp_nav_menu( $design_none_menu ); ?>
			</div>
		</div>
	<?php endif; ?>
<?php } //スマートフォン・タブレットでは表示しないここまで