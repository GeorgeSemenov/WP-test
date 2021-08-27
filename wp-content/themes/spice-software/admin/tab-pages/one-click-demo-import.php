<div id="one_click_demo" class="spice-software-tab-pane panel-close">
    <?php 
	$spice_software_actions = $this->recommended_actions;
	$spice_software_actions_todo = get_option( 'recommended_actions', false );
	$spice_software_spicebox = $spice_software_actions[0];
	?>
	<div class="action-list">
		<?php if($spice_software_spicebox):?>
		<div class="action" id="">
			<div class="action-watch">
			<?php if(!$spice_software_spicebox['is_done']): ?>
				<?php if(!isset($spice_software_actions_todo[$spice_software_spicebox['id']]) || !$spice_software_actions_todo[$spice_software_spicebox['id']]): ?>
					<span class="dashicons dashicons-visibility"></span>
				<?php else: ?>
					<span class="dashicons dashicons-hidden"></span>
				<?php endif; ?>
			<?php else: ?>
				<span class="dashicons dashicons-yes"></span>
			<?php endif; ?>
			</div>
			<div class="action-inner">
				<h3 class="action-title"><?php echo esc_html($spice_software_spicebox['title']); ?></h3>
				<div class="action-desc"><?php echo esc_html($spice_software_spicebox['desc']); ?></div>
				<?php echo wp_kses_post($spice_software_spicebox['link']); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>