<?php
/**
 * @package  MenuPlugin
 */

class MlmPluginDeactivate
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}