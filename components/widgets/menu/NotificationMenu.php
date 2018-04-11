<?php

namespace app\components\widgets\menu;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class NotificationMenu extends Widget
{
	public $count = 0;

	public function run()
	{
		?>
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="fa fa-bell-o"></i>
			<?php if ($this->count > 0): ?>
			<span class="label label-warning"><?=$this->count?></span>
			<?php endif ?>
		</a>
		<ul class="dropdown-menu">
			<li class="header">You have <?=$this->count?> notifications</li>
			<li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu">
					<li>
						<a href="#">
							<i class="fa fa-users text-aqua"></i> 5 new members joined today
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-warning text-yellow"></i> Very long description here that may
							not fit into the page and may cause design problems
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-users text-red"></i> 5 new members joined
						</a>
					</li>

					<li>
						<a href="#">
							<i class="fa fa-shopping-cart text-green"></i> 25 sales made
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-user text-red"></i> You changed your username
						</a>
					</li>
				</ul>
			</li>
			<li class="footer"><a href="#">View all</a></li>
		</ul>
		<?php
	}
}