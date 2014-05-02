<?php

/* Nukes the css from drupal core */
function keel_css_alter(&$css) {
	
	// Set this to FALSE to only excluse non-essential core drupal css.
	if (FALSE) {
		foreach ($css as $file => $value) {
			if (strpos($file, 'sites/all/themes/keel/_/assets/css') === FALSE) {
				unset($css[$file]);
			}
		}
	}
	else {
	
		/* Remove some default Drupal css */
		$exclude = array(
			'modules/aggregator/aggregator.css' => FALSE,
			'modules/block/block.css' => FALSE,
			'modules/book/book.css' => FALSE,
			'modules/comment/comment.css' => FALSE,
			'modules/contextual/contextual.css' => FALSE, // Dc
			'modules/dblog/dblog.css' => FALSE,
			'modules/field/theme/field.css' => FALSE,
			'modules/file/file.css' => FALSE,
			'modules/filter/filter.css' => FALSE,
			'modules/forum/forum.css' => FALSE,
			'modules/help/help.css' => FALSE,
			'modules/menu/menu.css' => FALSE,
			'modules/node/node.css' => FALSE,
			'modules/openid/openid.css' => FALSE,
			'modules/poll/poll.css' => FALSE,
			'modules/profile/profile.css' => FALSE,
			'modules/search/search.css' => FALSE,
			'modules/shortcut/shortcut.css' => FALSE,
			'modules/statistics/statistics.css' => FALSE,
			'modules/syslog/syslog.css' => FALSE,
			'modules/system/admin.css' => FALSE,
			'modules/system/maintenance.css' => FALSE,
			'modules/system/system.base.css' => FALSE, // dc
			'modules/system/system.css' => FALSE,
			'modules/system/system.admin.css' => FALSE,
			'modules/system/system.maintenance.css' => FALSE,
			'modules/system/system.messages.css' => FALSE,
			'modules/system/system.theme.css' => FALSE,
			'modules/system/system.menus.css' => FALSE,
			'modules/taxonomy/taxonomy.css' => FALSE,
			'modules/toolbar/toolbar.css' => FALSE, // dc
			'modules/tracker/tracker.css' => FALSE,
			'modules/update/update.css' => FALSE,
			'modules/user/user.css' => FALSE,
			// Flexslider below
			//'sites/all/libraries/flexslider/flexslider.css' => FALSE,
			drupal_get_path('module', 'views') . '/css/views.css' => FALSE,
		);
	
		$css = array_diff_key($css, $exclude);
	
		/* Get rid of some default panel css */
		foreach ($css as $path => $meta) {
			if (strpos($path, 'threecol_33_34_33_stacked') !== FALSE || strpos($path, 'threecol_25_50_25_stacked') !== FALSE) {
				unset($css[$path]);
			}
		}
	}
}

