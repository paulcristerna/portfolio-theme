<div class="sidebar">
	<ul>
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
		<li><h2>Categorías</h2></li>
		<?php wp_list_cats('sort_column=name&optioncount=1'); ?>
		<?php endif; ?>
	</ul>
</div>