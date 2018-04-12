<?php

namespace app\components\widgets\menu;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class MessageMenu extends Widget
{
    public $asset;
    public $count = 0;

    public function run()
    {
        ?>
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="fa fa-envelope-o"></i>
			<?php if ($this->count > 0): ?>
			<span class="label label-success"><?=$this->count?></span>
			<?php endif ?>
		</a>
		<ul class="dropdown-menu">
			<li class="header">You have <?=$this->count?> messages</li>
			<li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu">
					<li><!-- start message -->
						<a href="#">
							<div class="pull-left">
								<img src="<?= $this->asset ?>/img/user2-160x160.jpg" class="img-circle"
									 alt="User Image"/>
							</div>
							<h4>
								Support Team
								<small><i class="fa fa-clock-o"></i> 5 mins</small>
							</h4>
							<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
					<!-- end message -->
					<li>
						<a href="#">
							<div class="pull-left">
								<img src="<?= $this->asset ?>/img/user3-128x128.jpg" class="img-circle"
									 alt="user image"/>
							</div>
							<h4>
								AdminLTE Design Team
								<small><i class="fa fa-clock-o"></i> 2 hours</small>
							</h4>
							<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="pull-left">
								<img src="<?= $this->asset ?>/img/user4-128x128.jpg" class="img-circle"
									 alt="user image"/>
							</div>
							<h4>
								Developers
								<small><i class="fa fa-clock-o"></i> Today</small>
							</h4>
							<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="pull-left">
								<img src="<?= $this->asset ?>/img/user3-128x128.jpg" class="img-circle"
									 alt="user image"/>
							</div>
							<h4>
								Sales Department
								<small><i class="fa fa-clock-o"></i> Yesterday</small>
							</h4>
							<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="pull-left">
								<img src="<?= $this->asset ?>/img/user4-128x128.jpg" class="img-circle"
									 alt="user image"/>
							</div>
							<h4>
								Reviewers
								<small><i class="fa fa-clock-o"></i> 2 days</small>
							</h4>
							<p>Why not buy a new awesome theme?</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="footer"><a href="#">See All Messages</a></li>
		</ul>
		<?php
    }
}
