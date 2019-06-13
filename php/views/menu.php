<ul class="navbar-nav">
<?php foreach($config['menu'] as $key_m => $menu){?>
	<?php if($key_m != 'language'){ ?>
		<li class="nav-item"><a class="nav-link smooth-scroll" href="#<?php echo $key_m; ?>"><?php echo $menu; ?></a></li>
	<?php }else{ ?>
		<li class="nav-item dropdown hidden-xs hidden-sm" id="li_language">
			<a class="nav-link smooth-scroll dropdown-toggle count-info page-scroll" data-toggle="dropdown" href="#" title="Idioma">
				<!--<img src="images/language.png">-->
				<span class="label label-warning" id="span_num_respuestas"><?php echo $menu; ?></span>
			</a>
			<ul class="dropdown-menu" style="background-color: #377ba8 !important;">
				<?php foreach($config['language'] as $key_l => $language){?>
				<li>
					<a class="nav-link smooth-scroll" href="index.php?lang=<?php echo $key_l; ?>">
						<div>
							<b><?php echo $language; ?></b>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<?php } ?>
			</ul>
		</li>
	<?php } ?>
<?php } ?>
</ul>
