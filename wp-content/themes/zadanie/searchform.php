<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" class="d-none">
	<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e('Szukaj', 'zadanie'); ?>" />
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e('Szukaj', 'zadanie'); ?>" />
</form>