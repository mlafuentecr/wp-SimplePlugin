<?php
/**
 * @package  MenuPlugin
 */

class MlmPluginActivate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}