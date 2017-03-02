<div class=" nav">
		<nav>
			<div class="container">
				<div class="center logo">
					<a href="index.php" class="brand-logo center"><img src="img/logo.svg" alt="12932583_1095604160481465_1565102721042011380_n" title="12932583_1095604160481465_1565102721042011380_n"></a>
				</div>	
			</div>
					    			 
			<div class="container menu-fix">
			    <div class="nav-wrapper"> 
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="az-menu6"></i></a>
					<div class="center">
						<ul class="hide-on-med-and-down">
	                        <?php $items = wp_get_nav_menu_items('primary-menu'); ?>  
		                    <?php $cont = 0; ?>
		                    <?php foreach ($items as $key => $menu_item): ?>
		                        <?php $cssClass = $menu_item->classes[0] ?>
		                        <li><a href="<?php echo $menu_item->url ?>" class="<?php echo $cssClass ?>" title="<?php echo $menu_item->title ?>"  data-activates="dropdown1"><?php echo $menu_item->title ?></a></li>
		                    <?php endforeach; ?>
	                  	</ul> 
					</div>
					<ul class="side-nav" id="mobile-demo">
					    <?php $items = wp_get_nav_menu_items('primary-menu'); ?>  
		                    <?php $cont = 0; ?>
		                    <?php foreach ($items as $key => $menu_item): ?>
		                        <?php $cssClass = $menu_item->classes[0] ?>
		                        <li><a href="<?php echo $menu_item->url ?>" class="<?php echo $cssClass ?>" title="<?php echo $menu_item->title ?>"  data-activates="dropdown1"><?php echo $menu_item->title ?></a></li>
		                    <?php endforeach; ?>
					</ul>
			    </div>
		    </div>
		    <div class="tramado">
		    	<img src="img/tramado.jpg">
		    </div>
		</nav>
</div>