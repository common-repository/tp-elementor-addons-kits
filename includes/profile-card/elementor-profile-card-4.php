<!-- Start User Card 4 -->
<div class="elementor-card card-style-4">
	<div class="elementor-card-inner">
		<div class="front-wrapper">
			<div class="profile-bg elementor-content-background-color-wrapper"></div>
			<div class="front__bkg-photo">
				<?php
				$name = $settings['name'];
				$position = $settings['position'];
				$profileImage = ( !empty( $settings['user_image']['url'] ) ) ? $settings['user_image']['url'] : ELEMENTOR_ADDONS_KITS_URL.'/public/images/user-profile.jpg';
				?>
				<img src="<?php echo esc_url( $profileImage ); ?>" alt="<?php echo esc_html($name); ?>" />
				<div class="profile-info-address">
					<?php if(!empty($settings['email'])) { ?>
						<p class="front__text-para info-para"><a href="mailto:<?php echo esc_attr($settings['email']); ?>"><i class="fas fa-envelope front-icons"></i><?php echo esc_html($settings['email']); ?></a></p>
					<?php } ?>
					<?php if(!empty($settings['phone'])) { ?>    
						<p class="front__text-para info-para"><a href="tel:<?php echo esc_attr($settings['phone']); ?>"><i class="fas fa-mobile front-icons"></i><?php echo esc_html($settings['phone']); ?></a></p>
					<?php } ?>
					<?php if(!empty($settings['location'])) { ?>    
						<p class="front__text-para info-para"><i class="fas fa-map-marker-alt front-icons"></i><?php echo esc_html($settings['location']); ?></p>
					<?php } ?>    
				</div>
			</div>
			<div class="bottom-bkg-info">
				<div class="front__text">
					<h3 class="front__text-header"><?php echo esc_html($name); ?></h3>
					<span class="sub-title-show"><?php echo esc_html($position); ?></span>
					<p class="front__text-para para-below-info"><?php echo esc_attr($settings['description']); ?></p>
					<div class="profile-icons">
						<div class="elementor-social-icons-wrapper">
							<?php
							foreach ($settings['social_icons'] as $index => $item) {
								$social = str_replace('fa fa-', '', $item['social']);
								$socialIcon = str_replace('fa fa-', 'fab fa-', $item['social']);
								$link = esc_url($item['link']['url']);
								$target = ( $item['link']['is_external'] ) ? '_blank' : '';
								$rel = ( $item['link']['nofollow'] ) ? 'nofollow' : '';
								
								// $link_key = 'link_' . $index;

								// $this->add_render_attribute($link_key, 'href', esc_url($item['link']['url']));

								// if ($item['link']['is_external']) {
								// 	$this->add_render_attribute($link_key, 'target', '_blank');
								// }

								// if ($item['link']['nofollow']) {
								// 	$this->add_render_attribute($link_key, 'rel', 'nofollow');
								// }
								//echo $this->get_render_attribute_string($link_key);
								?>
								<a class="<?php echo esc_attr('elementor-icon elementor-social-icon elementor-social-icon-'.$social . ' elementor-animation-pop'); ?>" href="<?php echo esc_attr($link); ?>" target="<?php echo esc_attr($target); ?>" rel="<?php echo esc_attr($rel); ?>">
									<span class="elementor-screen-only"><?php echo esc_html($social); ?></span>
									<i class="<?php echo esc_attr($socialIcon); ?>"></i>
								</a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End User Card 4 -->