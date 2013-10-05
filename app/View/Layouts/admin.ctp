<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeDescription = __d('cake_dev', 'Orange BNB - Single Platform for Hotel(s), Tour Operaor(s) & Agent(s)');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('admin');
        echo $this->Html->css('/usermgmt/css/umstyle');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('jquery-2.0.3.min');
		echo $this->Html->script('/js/ckeditor/ckeditor');
	?>
</head>
<body>
	<div id="container">
		
                <?php if($this->UserAuth->isLogged()){?>
                
                <div id="header">
                    
			<h1>ADMIN Logo</h1>
                        <ul id="nav">
                            <?php echo $this->element('topnavigation'); ?>
			</ul>
                        
                        <p class="you_are">
                        Hello,
                        
                        <?php $getLogedInUser=$this->UserAuth->getUser();?>
                        
                        <a href="#"><?php echo $getLogedInUser['User']['first_name'].' '.$getLogedInUser['User']['last_name'];?></a>
                        |
                        <!--<a href="index.html">Logout</a>-->
                        <?php echo $this->Html->link('Logout', '/logout', array('class' => 'logout')); ?>
                        </p>
                        
		</div>
            
            
                <?php }?>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
            
		<div id="footer">Powered by Softbranch
			<?php /* ?><?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?><?php */ ?>
		</div>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>