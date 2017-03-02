<?php
/**
 * Created by Ana Zalozna
 * Date: 21/01/17
 * Time: 10:13 PM
 */

/**
 * Class Config keeps project's config data
 */
class Config
{
	/**
	 * @var array $__data
	 */
	private static $__data = [
		'global' => [
			'debug' => true,
			'site_template' => 'frontend',
			'admin_template' => 'backend',
			'css_dir' => '/static/css/',
			'js_dir' => '/static/js/',
			'news_limit' => 4,
			'SendGridAPI_key' => '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',
		],

		'routes' => [
			'admin' => 'user/BackendController/actionIndex',
			'admin/login' => 'user/BackendController/actionLogin',
			'admin/logout' => 'user/BackendController/actionLogout',
			'admin/users' => 'user/BackendController/actionUserList',
			'admin/user/delete/(\d+)' => 'user/BackendController/actionDelete/id:$1',
			'admin/user/add' => 'user/BackendController/actionAdd',
			'admin/user/change' => 'user/BackendController/actionChange',
			'404' => 'system/ErrorController/action404',
			'' => 'pages/FrontendController/actionPage',
			'page/([a-z-]+)' => 'pages/FrontendController/actionPage/alias:$1',
			'gallery' => 'pages/FrontendController/actionGallery',
			'gallery/(\d+)' => 'pages/FrontendController/actionImage/id:$1',
			'news' => 'news/FrontendController/actionNews',
			'news/(\d+)' => 'news/FrontendController/actionNews/page:$1',
		],

		'db' => [
			'host' => 'localhost',
			'user' => 'root',
			'pass' => '1234',
			'database' => 'chantry_db',
		]

	];

	/**
	 * Return config block
	 *
	 * @param string $name
	 * @return array
	 */
	public static function get(string $name): array {
		return self::$__data[$name];
	}

	/**
	 * @param string $time
	 * @return DateTime
	 */
	public static function getDateTime($time = 'now'){
		return new DateTime($time, new DateTimeZone('America/Toronto'));
	}

}