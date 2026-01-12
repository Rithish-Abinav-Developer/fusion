<div class="qodef-team-slide">
    <div class="qodef-team-slide-inner">
        <div class="qodef-team">
            <div class="qodef-team-inner">
				<?php if ( $team_image !== '' ) { ?>
                    <div class="qodef-team-image">
						<?php echo wp_get_attachment_image( $team_image, 'full' ); ?>
						<?php if ( $team_text_hover_link !== '' ) { ?>
                        <a itemprop="url" href="<?php echo esc_url( $team_text_hover_link ); ?>" target="<?php echo esc_attr( $team_link_target ); ?>">
							<?php } ?>
                            <div class="qodef-team-overlay-holder" <?php ultima_qodef_inline_style( $overlay_color ); ?>>
                                <div class="qodef-team-overlay">
                                    <div class="qodef-team-overlay-inner">
										<?php if ( $team_text_hover !== '' ) { ?>
                                            <h4><?php echo esc_attr( $team_text_hover ) ?></h4>
										<?php } ?>
                                    </div>
                                </div>
                            </div>
							<?php if ( $team_text_hover_link !== '' ) { ?>
                        </a>
					<?php } ?>
                    </div>
				<?php } ?>
				<?php if ( $team_name !== '' || $team_position !== '' || $team_description != "" ) { ?>
                    <div class="qodef-team-info">
					<?php if ( $team_name !== '' || $team_position !== '' ) { ?>
                    <div class="qodef-team-title-holder <?php echo esc_attr( $team_social_icon_type ) ?>">
						<?php if ( $team_name !== '' ) { ?>
                            <<?php echo esc_attr( $team_name_tag ); ?> class="qodef-team-name">
							<?php echo esc_attr( $team_name ); ?>
                            </<?php echo esc_attr( $team_name_tag ); ?>>
						<?php } ?>
						<?php if ( $team_position !== "" ) { ?>
                            <h6 class="qodef_team_position"><?php echo esc_attr( $team_position ) ?></h6>
						<?php } ?>
                        </div>
					<?php } ?>
					<?php if ( $team_description != "" ) { ?>
                        <div class='qodef-team-text'>
                            <div class='qodef-team-text-inner'>
                                <div class='qodef-team-description'>
                                    <p><?php echo esc_attr( $team_description ) ?></p>
                                </div>
                            </div>
                        </div>
					<?php }
				} ?>
                <div class="qodef-team-social-holder-between">
                    <div class="qodef-team-social <?php echo esc_attr( $team_social_icon_type ) ?>">
                        <div class="qodef-team-social-inner">
                            <div class="qodef-team-social-wrapp">

								<?php foreach ( $team_social_icons as $team_social_icon ) {
									print wp_kses_post( $team_social_icon );
								} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>