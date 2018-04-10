<?php

namespace app\components\widgets;

use dmstr\widgets\Menu;
use yii\base\Widget;

class ApplicationMenu extends Widget
{
	public $domain_url;

	public function init()
	{
		parent::init();
		$this->domain_url = $this->domain_url ?: getenv('DOMAIN_URL');
	}

	public function run()
	{
		// Vars
		$user = \Yii::$app->user;

		// Generate Widget
		echo Menu::widget([
			'options'=>['class'=>'sidebar-menu'],
			'items'=>[
				['label'=>'MAIN NAVIGATION', 'options'=>['class'=>'header']],
				['label'=>'Intranet Home', 'icon'=>'home', 'url'=>'http://intranet.'.$this->domain_url],
				['label'=>'Dashboard', 'icon'=>'dashboard', 'url'=>['/']],
				[
					'label'=>'Table',
					'icon'=>'book',
					'url'=>'#',
					'items'=>[
						['label'=>'List Table', 'icon'=>'plus-square', 'url'=>'/table/index'],
					],
					'visible'=>$user->can('Menu.Table'),
				],
			],
		]);
	}
}