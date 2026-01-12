<?php

class UltimaQodefFieldOnOff extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		global $ultima_qodef_options;
		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "on" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'On', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "off" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Off', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_onoff" value="on"<?php if ( ultima_qodef_option_get_value( $name ) == "on" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_onoff" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldPortfolioFollow extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		global $ultima_qodef_options;
		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "portfolio_single_follow" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "portfolio_single_no_follow" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_portfoliofollow" value="portfolio_single_follow"<?php if ( ultima_qodef_option_get_value( $name ) == "portfolio_single_follow" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_portfoliofollow" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldZeroOne extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "1" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "0" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_zeroone" value="1"<?php if ( ultima_qodef_option_get_value( $name ) == "1" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_zeroone" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldImageVideo extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		global $ultima_qodef_options;
		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch switch-type">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "image" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Image', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "video" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Video', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_imagevideo" value="image"<?php if ( ultima_qodef_option_get_value( $name ) == "image" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_imagevideo" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldYesEmpty extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		global $ultima_qodef_options;
		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "yes" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_yesempty" value="yes"<?php if ( ultima_qodef_option_get_value( $name ) == "yes" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_yesempty" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldFlagPage extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		global $ultima_qodef_options;
		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "page" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_flagpage" value="page"<?php if ( ultima_qodef_option_get_value( $name ) == "page" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_flagpage" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldFlagPost extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {

		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "post" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_flagpost" value="post"<?php if ( ultima_qodef_option_get_value( $name ) == "post" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_flagpost" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldFlagMedia extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		global $ultima_qodef_options;
		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "attachment" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_flagmedia" value="attachment"<?php if ( ultima_qodef_option_get_value( $name ) == "attachment" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_flagmedia" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldFlagPortfolio extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		global $ultima_qodef_options;
		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "portfolio_page" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_flagportfolio" value="portfolio_page"<?php if ( ultima_qodef_option_get_value( $name ) == "portfolio_page" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_flagportfolio" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldFlagProduct extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		global $ultima_qodef_options;
		$dependence = false;
		if ( isset( $args["dependence"] ) ) {
			$dependence = true;
		}
		$dependence_hide_on_yes = "";
		if ( isset( $args["dependence_hide_on_yes"] ) ) {
			$dependence_hide_on_yes = $args["dependence_hide_on_yes"];
		}
		$dependence_show_on_yes = "";
		if ( isset( $args["dependence_show_on_yes"] ) ) {
			$dependence_show_on_yes = $args["dependence_show_on_yes"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->


            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="field switch">
                                <label data-hide="<?php echo esc_attr( $dependence_hide_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_show_on_yes ); ?>"
                                        class="cb-enable<?php if ( ultima_qodef_option_get_value( $name ) == "product" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'Yes', 'ultima' ) ?></span></label>
                                <label data-hide="<?php echo esc_attr( $dependence_show_on_yes ); ?>" data-show="<?php echo esc_attr( $dependence_hide_on_yes ); ?>"
                                        class="cb-disable<?php if ( ultima_qodef_option_get_value( $name ) == "" ) {
											echo " selected";
										} ?><?php if ( $dependence ) {
											echo " dependence";
										} ?>"><span><?php esc_html_e( 'No', 'ultima' ) ?></span></label>
                                <input type="checkbox" id="checkbox" class="checkbox"
                                        name="<?php echo esc_attr( $name ); ?>_flagproduct" value="product"<?php if ( ultima_qodef_option_get_value( $name ) == "product" ) {
									echo " selected";
								} ?>/>
                                <input type="hidden" class="checkboxhidden_flagproduct" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldRange extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		$range_min      = 0;
		$range_max      = 1;
		$range_step     = 0.01;
		$range_decimals = 2;
		if ( isset( $args["range_min"] ) ) {
			$range_min = $args["range_min"];
		}
		if ( isset( $args["range_max"] ) ) {
			$range_max = $args["range_max"];
		}
		if ( isset( $args["range_step"] ) ) {
			$range_step = $args["range_step"];
		}
		if ( isset( $args["range_decimals"] ) ) {
			$range_decimals = $args["range_decimals"];
		}
		?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="qodef-slider-range-wrapper">
                                <div class="form-inline">
                                    <input type="text"
                                            class="form-control qodef-form-element qodef-form-element-xsmall pull-left qodef-slider-range-value"
                                            name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>

                                    <div class="qodef-slider-range small"
                                            data-step="<?php echo esc_attr( $range_step ); ?>" data-min="<?php echo esc_attr( $range_min ); ?>" data-max="<?php echo esc_attr( $range_max ); ?>" data-decimals="<?php echo esc_attr( $range_decimals ); ?>" data-start="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}

}

class UltimaQodefFieldRangeSimple extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		?>

        <div class="col-lg-3" id="qodef_<?php echo esc_attr( $name ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>
            <div class="qodef-slider-range-wrapper">
                <div class="form-inline">
                    <em class="qodef-field-description"><?php echo esc_html( $label ); ?></em>
                    <input type="text"
                            class="form-control qodef-form-element qodef-form-element-xxsmall pull-left qodef-slider-range-value"
                            name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"/>

                    <div class="qodef-slider-range xsmall"
                            data-step="0.01" data-max="1" data-start="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"></div>
                </div>

            </div>
        </div>
		<?php

	}

}

class UltimaQodefFieldRadio extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {

		$checked = "";
		if ( $default_value == $value ) {
			$checked = "checked";
		}
		$html = '<input type="radio" name="' . $name . '" value="' . $default_value . '" ' . $checked . ' /> ' . $label . '<br />';
		echo wp_kses( $html, array(
			'input' => array(
				'type'    => true,
				'name'    => true,
				'value'   => true,
				'checked' => true
			),
			'br'    => true
		) );

	}

}

class UltimaQodefFieldRadioGroup extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		$dependence = isset( $args["dependence"] ) && $args["dependence"] ? true : false;
		$show       = ! empty( $args["show"] ) ? $args["show"] : array();
		$hide       = ! empty( $args["hide"] ) ? $args["hide"] : array();

		$use_images    = isset( $args["use_images"] ) && $args["use_images"] ? true : false;
		$hide_labels   = isset( $args["hide_labels"] ) && $args["hide_labels"] ? true : false;
		$hide_radios   = $use_images ? 'display: none' : '';
		$checked_value = ultima_qodef_option_get_value( $name );
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>" <?php if ( $hidden ) { ?> style="display: none"<?php } ?>>

            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
							<?php if ( is_array( $options ) && count( $options ) ) { ?>
                                <div class="qodef-radio-group-holder <?php if ( $use_images ) {
									echo "with-images";
								} ?>">
									<?php foreach ( $options as $key => $atts ) {
										$selected = false;
										if ( $checked_value == $key ) {
											$selected = true;
										}

										$show_val = "";
										$hide_val = "";
										if ( $dependence ) {
											if ( array_key_exists( $key, $show ) ) {
												$show_val = $show[ $key ];
											}

											if ( array_key_exists( $key, $hide ) ) {
												$hide_val = $hide[ $key ];
											}
										}
										?>
                                        <label class="radio-inline">
                                            <input
												<?php echo ultima_qodef_get_inline_attr( $show_val, 'data-show' ); ?>
												<?php echo ultima_qodef_get_inline_attr( $hide_val, 'data-hide' ); ?>
												<?php if ( $selected ) {
													echo "checked";
												} ?> <?php ultima_qodef_inline_style( $hide_radios ); ?>
                                                    type="radio"
                                                    name="<?php echo esc_attr( $name ); ?>"
                                                    value="<?php echo esc_attr( $key ); ?>"
												<?php if ( $dependence ) {
													ultima_qodef_class_attribute( "dependence" );
												} ?>> <?php if ( ! empty( $atts["label"] ) && ! $hide_labels ) {
												echo esc_attr( $atts["label"] );
											} ?>

											<?php if ( $use_images ) { ?>
                                                <img title="<?php if ( ! empty( $atts["label"] ) ) {
													echo esc_attr( $atts["label"] );
												} ?>" src="<?php echo esc_url( $atts['image'] ); ?>" alt="<?php echo esc_attr( "$key image" ) ?>"/>
											<?php } ?>
                                        </label>
									<?php } ?>
                                </div>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php
	}

}

class UltimaQodefFieldCheckBox extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {

		$checked = "";
		if ( $default_value == $value ) {
			$checked = "checked";
		}
		$html = '<input type="checkbox" name="' . $name . '" value="' . $default_value . '" ' . $checked . ' /> ' . $label . '<br />';
		echo wp_kses( $html, array(
			'input' => array(
				'type'    => true,
				'name'    => true,
				'value'   => true,
				'checked' => true
			),
			'br'    => true
		) );
	}
}

class UltimaQodefFieldCheckBoxGroup extends UltimaQodefFieldType {

	public function render( $name, $label = '', $description = '', $options = array(), $args = array(), $hidden = false ) {
		if ( ! ( is_array( $options ) && count( $options ) ) ) {
			return;
		}

		$saved_value = ultima_qodef_option_get_value( $name );

		$enable_empty_checkbox = isset( $args["enable_empty_checkbox"] ) && $args["enable_empty_checkbox"] ? true : false;
		$inline_checkbox_class = isset( $args["inline_checkbox_class"] ) && $args["inline_checkbox_class"] ? 'checkbox-inline' : 'checkbox';
		?>
        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="qodef-checkbox-group-holder">
								<?php if ( $enable_empty_checkbox ) { ?>
                                    <div class="<?php echo esc_attr( $inline_checkbox_class ); ?>" style="display: none">
                                        <label>
                                            <input checked type="checkbox" value="" name="<?php echo esc_attr( $name . '[]' ); ?>">
                                        </label>
                                    </div>
								<?php } ?>
								<?php foreach ( $options as $option_key => $option_label ) : ?>
									<?php
									$i            = 1;
									$checked      = is_array( $saved_value ) && in_array( $option_key, $saved_value );
									$checked_attr = $checked ? 'checked' : '';
									?>

                                    <div class="<?php echo esc_attr( $inline_checkbox_class ); ?>">
                                        <label>
                                            <input <?php echo esc_attr( $checked_attr ); ?> type="checkbox" id="<?php echo esc_attr( $option_key ) . '-' . $i; ?>" value="<?php echo esc_attr( $option_key ); ?>" name="<?php echo esc_attr( $name . '[]' ); ?>">
                                            <label for="<?php echo esc_attr( $option_key ) . '-' . $i; ?>"><?php echo esc_html( $option_label ); ?></label>
                                        </label>
                                    </div>
									<?php $i ++; endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->
        </div>
		<?php
	}
}

class UltimaQodefFieldDate extends UltimaQodefFieldType {

	public function render( $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false ) {
		$col_width = 2;
		if ( isset( $args["col_width"] ) ) {
			$col_width = $args["col_width"];
		}
		?>

        <div class="qodef-page-form-section" id="qodef_<?php echo esc_attr( $name ); ?>"<?php if ( $hidden ) { ?> style="display: none"<?php } ?>>


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $label ); ?></h4>

                <p><?php echo esc_html( $description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-<?php echo esc_attr( $col_width ); ?>">
                            <input type="text"
                                    id="portfolio_date"
                                    class="datepicker form-control qodef-input qodef-form-element"
                                    name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( ultima_qodef_option_get_value( $name ) ); ?>"
                            /></div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php
	}
}

class UltimaQodefFieldFactory {

	public function render( $field_type, $name, $label = "", $description = "", $options = array(), $args = array(), $hidden = false, $repeat = array() ) {

		switch ( strtolower( $field_type ) ) {

			case 'text':
				$field = new UltimaQodefFieldText();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'textsimple':
				$field = new UltimaQodefFieldTextSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'textarea':
				$field = new UltimaQodefFieldTextArea();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'textareasimple':
				$field = new UltimaQodefFieldTextAreaSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'textareahtml':
				$field = new UltimaQodefFieldTextAreaHtml();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'color':
				$field = new UltimaQodefFieldColor();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'colorsimple':
				$field = new UltimaQodefFieldColorSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'image':
				$field = new UltimaQodefFieldImage();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'imagesimple':
				$field = new UltimaQodefFieldImageSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'font':
				$field = new UltimaQodefFieldFont();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'fontsimple':
				$field = new UltimaQodefFieldFontSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'select':
				$field = new UltimaQodefFieldSelect();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'selectblank':
				$field = new UltimaQodefFieldSelectBlank();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'selectsimple':
				$field = new UltimaQodefFieldSelectSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'selectblanksimple':
				$field = new UltimaQodefFieldSelectBlankSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'yesno':
				$field = new UltimaQodefFieldYesNo();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'yesnosimple':
				$field = new UltimaQodefFieldYesNoSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'onoff':
				$field = new UltimaQodefFieldOnOff();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'portfoliofollow':
				$field = new UltimaQodefFieldPortfolioFollow();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'zeroone':
				$field = new UltimaQodefFieldZeroOne();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'imagevideo':
				$field = new UltimaQodefFieldImageVideo();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'yesempty':
				$field = new UltimaQodefFieldYesEmpty();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'flagpost':
				$field = new UltimaQodefFieldFlagPost();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'flagpage':
				$field = new UltimaQodefFieldFlagPage();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'flagmedia':
				$field = new UltimaQodefFieldFlagMedia();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'flagportfolio':
				$field = new UltimaQodefFieldFlagPortfolio();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'flagproduct':
				$field = new UltimaQodefFieldFlagProduct();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'range':
				$field = new UltimaQodefFieldRange();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'rangesimple':
				$field = new UltimaQodefFieldRangeSimple();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'radio':
				$field = new UltimaQodefFieldRadio();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'checkbox':
				$field = new UltimaQodefFieldCheckBox();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'date':
				$field = new UltimaQodefFieldDate();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'radiogroup':
				$field = new UltimaQodefFieldRadioGroup();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			case 'checkboxgroup':
				$field = new UltimaQodefFieldCheckBoxGroup();
				$field->render( $name, $label, $description, $options, $args, $hidden, $repeat );
				break;
			default:
				break;
		}
	}
}

/*
   Class: UltimaQodefMultipleImages
   A class that initializes Qode Multiple Images
*/

class UltimaQodefMultipleImages implements iUltimaQodefRender {
	private $name;
	private $label;
	private $description;


	function __construct( $name, $label = "", $description = "" ) {
		global $ultima_qodef_Framework;
		$this->name        = $name;
		$this->label       = $label;
		$this->description = $description;
		$ultima_qodef_Framework->qodeMetaBoxes->addOption( $this->name, "" );
	}

	public function render( $factory ) {
		global $post;
		?>

        <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
                <h4><?php echo esc_html( $this->label ); ?></h4>

                <p><?php echo esc_html( $this->description ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="qode-gallery-images-holder clearfix">
								<?php
								$image_gallery_val = get_post_meta( $post->ID, $this->name, true );
								if ( $image_gallery_val != '' ) {
									$image_gallery_array = explode( ',', $image_gallery_val );
								}

								if ( isset( $image_gallery_array ) && is_array($image_gallery_array) && count( $image_gallery_array ) != 0 ):

									foreach ( $image_gallery_array as $gimg_id ):

										$gimage_wp = wp_get_attachment_image_src( $gimg_id, 'thumbnail', true );
										echo '<li class="qode-gallery-image-holder"><img src="' . esc_url( $gimage_wp[0] ) . '"/></li>';

									endforeach;

								endif;
								?>
                            </ul>
                            <input type="hidden" value="<?php echo esc_attr( $image_gallery_val ); ?>" id="<?php echo esc_attr( $this->name ) ?>" name="<?php echo esc_attr( $this->name ) ?>">
                            <div class="qodef-gallery-uploader">
                                <a class="qodef-gallery-upload-btn btn btn-sm btn-primary"
                                        href="javascript:void(0)"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                <a class="qodef-gallery-clear-btn btn btn-sm btn-default pull-right"
                                        href="javascript:void(0)"><?php esc_html_e( 'Remove All', 'ultima' ); ?></a>
                            </div>
                            <?php wp_nonce_field( 'ultima-qode-update-images_' . esc_attr($this->name), 'ultima-qode-update-images_' . esc_attr($this->name) ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
		<?php

	}
}

/*
   Class: UltimaQodefImagesVideos
   A class that initializes Qode Images Videos
*/

class UltimaQodefImagesVideos implements iUltimaQodefRender {
	private $label;
	private $description;


	function __construct( $label = "", $description = "" ) {
		$this->label       = $label;
		$this->description = $description;
	}

	public function render( $factory ) {
		global $post;
		?>
        <div class="qodef_hidden_portfolio_images" style="display: none">
            <div class="qodef-page-form-section">


                <div class="qodef-field-desc">
                    <h4><?php echo esc_html( $this->label ); ?></h4>

                    <p><?php echo esc_html( $this->description ); ?></p>
                </div>
                <!-- close div.qodef-field-desc -->

                <div class="qodef-section-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2">
                                <em class="qodef-field-description"><?php esc_html_e( 'Order Number', 'ultima' ); ?></em>
                                <input type="text"
                                        class="form-control qodef-input qodef-form-element"
                                        id="portfolioimgordernumber_x"
                                        name="portfolioimgordernumber_x"/></div>
                            <div class="col-lg-10">
                                <em class="qodef-field-description"><?php esc_html_e( 'Image/Video title (only for gallery layout - Portfolio Style 6)', 'ultima' ); ?></em>
                                <input type="text"
                                        class="form-control qodef-input qodef-form-element"
                                        id="portfoliotitle_x"
                                        name="portfoliotitle_x"/></div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-12">
                                <em class="qodef-field-description"><?php esc_html_e( 'Image', 'ultima' ); ?></em>
                                <div class="qodef-media-uploader">
                                    <div style="display: none"
                                            class="qodef-media-image-holder">
                                        <img src="" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>"
                                                class="qodef-media-image img-thumbnail"/>
                                    </div>
                                    <div style="display: none"
                                            class="qodef-media-meta-fields">
                                        <input type="hidden" class="qodef-media-upload-url"
                                                name="portfolioimg_x"
                                                id="portfolioimg_x"/>
                                        <input type="hidden"
                                                class="qodef-media-upload-height"
                                                name="qode_options_theme[media-upload][height]"
                                                value=""/>
                                        <input type="hidden"
                                                class="qodef-media-upload-width"
                                                name="qode_options_theme[media-upload][width]"
                                                value=""/>
                                    </div>
                                    <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                            href="javascript:void(0)"
                                            data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"
                                            data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                    <a style="display: none;" href="javascript: void(0)"
                                            class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-3">
                                <em class="qodef-field-description"><?php esc_html_e( 'Video type', 'ultima' ); ?></em>
                                <select class="form-control qodef-form-element qodef-portfoliovideotype"
                                        name="portfoliovideotype_x" id="portfoliovideotype_x">
                                    <option value=""></option>
                                    <option value="youtube"><?php esc_html_e( 'Youtube', 'ultima' ); ?></option>
                                    <option value="vimeo"><?php esc_html_e( 'Vimeo', 'ultima' ); ?></option>
                                    <option value="self"><?php esc_html_e( 'Self hosted', 'ultima' ); ?></option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <em class="qodef-field-description"><?php esc_html_e( 'Video ID', 'ultima' ); ?></em>
                                <input type="text"
                                        class="form-control qodef-input qodef-form-element"
                                        id="portfoliovideoid_x"
                                        name="portfoliovideoid_x"/></div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-12">
                                <em class="qodef-field-description"><?php esc_html_e( 'Video image', 'ultima' ); ?></em>
                                <div class="qodef-media-uploader">
                                    <div style="display: none"
                                            class="qodef-media-image-holder">
                                        <img src="" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>"
                                                class="qodef-media-image img-thumbnail"/>
                                    </div>
                                    <div style="display: none"
                                            class="qodef-media-meta-fields">
                                        <input type="hidden" class="qodef-media-upload-url"
                                                name="portfoliovideoimage_x"
                                                id="portfoliovideoimage_x"/>
                                        <input type="hidden"
                                                class="qodef-media-upload-height"
                                                name="qode_options_theme[media-upload][height]"
                                                value=""/>
                                        <input type="hidden"
                                                class="qodef-media-upload-width"
                                                name="qode_options_theme[media-upload][width]"
                                                value=""/>
                                    </div>
                                    <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                            href="javascript:void(0)"
                                            data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"
                                            data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                    <a style="display: none;" href="javascript: void(0)"
                                            class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-4">
                                <em class="qodef-field-description"><?php esc_html_e( 'Video webm', 'ultima' ); ?></em>
                                <input type="text"
                                        class="form-control qodef-input qodef-form-element"
                                        id="portfoliovideowebm_x"
                                        name="portfoliovideowebm_x"/></div>
                            <div class="col-lg-4">
                                <em class="qodef-field-description"><?php esc_html_e( 'Video mp4', 'ultima' ); ?></em>
                                <input type="text"
                                        class="form-control qodef-input qodef-form-element"
                                        id="portfoliovideomp4_x"
                                        name="portfoliovideomp4_x"/></div>
                            <div class="col-lg-4">
                                <em class="qodef-field-description"><?php esc_html_e( 'Video ogv', 'ultima' ); ?></em>
                                <input type="text"
                                        class="form-control qodef-input qodef-form-element"
                                        id="portfoliovideoogv_x"
                                        name="portfoliovideoogv_x"/></div>
                        </div>
                        <div class="row next-row">
                            <div class="col-lg-12">
                                <a class="qodef_remove_image btn btn-sm btn-primary" href="/" onclick="javascript: return false;"><?php esc_html_e( 'Remove portfolio image/video', 'ultima' ); ?></a>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- close div.qodef-section-content -->

            </div>
        </div>

		<?php
		$no               = 1;
		$portfolio_images = get_post_meta( $post->ID, 'qode_portfolio_images', true );
		if ( is_array($portfolio_images) && count( $portfolio_images ) > 1 ) {
			usort( $portfolio_images, "ultima_qodef_compare_portfolio_videos" );
		}
		while ( isset( $portfolio_images[ $no - 1 ] ) ) {
			$portfolio_image = $portfolio_images[ $no - 1 ];
			?>
            <div class="qodef_portfolio_image" rel="<?php echo esc_attr( $no ); ?>" style="display: block;">

                <div class="qodef-page-form-section">


                    <div class="qodef-field-desc">
                        <h4><?php echo esc_html( $this->label ); ?></h4>

                        <p><?php echo esc_html( $this->description ); ?></p>
                    </div>
                    <!-- close div.qodef-field-desc -->

                    <div class="qodef-section-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Order Number', 'ultima' ); ?></em>
                                    <input type="text"
                                            class="form-control qodef-input qodef-form-element"
                                            id="portfolioimgordernumber_<?php echo esc_attr( $no ); ?>"
                                            name="portfolioimgordernumber[]" value="<?php echo isset( $portfolio_image['portfolioimgordernumber'] ) ? esc_attr( stripslashes( $portfolio_image['portfolioimgordernumber'] ) ) : ""; ?>"/>
                                </div>
                                <div class="col-lg-10">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Image/Video title (only for gallery layout - Portfolio Style 6)', 'ultima' ); ?></em>
                                    <input type="text"
                                            class="form-control qodef-input qodef-form-element"
                                            id="portfoliotitle_<?php echo esc_attr( $no ); ?>"
                                            name="portfoliotitle[]" value="<?php echo isset( $portfolio_image['portfoliotitle'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliotitle'] ) ) : ""; ?>"/>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Image', 'ultima' ); ?></em>
                                    <div class="qodef-media-uploader">
                                        <div<?php if ( stripslashes( $portfolio_image['portfolioimg'] ) == false ) { ?> style="display: none"<?php } ?>
                                                class="qodef-media-image-holder">
                                            <img src="<?php if ( stripslashes( $portfolio_image['portfolioimg'] ) == true ) {
												echo esc_url( ultima_qodef_generate_filename( stripslashes( $portfolio_image['portfolioimg'] ), get_option( 'thumbnail' . '_size_w' ), get_option( 'thumbnail' . '_size_h' ) ) );
											} ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>"
                                                    class="qodef-media-image img-thumbnail"/>
                                        </div>
                                        <div style="display: none"
                                                class="qodef-media-meta-fields">
                                            <input type="hidden" class="qodef-media-upload-url"
                                                    name="portfolioimg[]"
                                                    id="portfolioimg_<?php echo esc_attr( $no ); ?>"
                                                    value="<?php echo stripslashes( $portfolio_image['portfolioimg'] ); ?>"/>
                                            <input type="hidden"
                                                    class="qodef-media-upload-height"
                                                    name="qode_options_theme[media-upload][height]"
                                                    value=""/>
                                            <input type="hidden"
                                                    class="qodef-media-upload-width"
                                                    name="qode_options_theme[media-upload][width]"
                                                    value=""/>
                                        </div>
                                        <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                                href="javascript:void(0)"
                                                data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"
                                                data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                        <a style="display: none;" href="javascript: void(0)"
                                                class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-3">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Video type', 'ultima' ); ?></em>
                                    <select class="form-control qodef-form-element qodef-portfoliovideotype"
                                            name="portfoliovideotype[]" id="portfoliovideotype_<?php echo esc_attr( $no ); ?>">
                                        <option value=""></option>
                                        <option <?php if ( $portfolio_image['portfoliovideotype'] == "youtube" ) {
											echo "selected='selected'";
										} ?> value="youtube"><?php esc_html_e( 'Youtube', 'ultima' ); ?></option>
                                        <option <?php if ( $portfolio_image['portfoliovideotype'] == "vimeo" ) {
											echo "selected='selected'";
										} ?> value="vimeo"><?php esc_html_e( 'Vimeo', 'ultima' ); ?></option>
                                        <option <?php if ( $portfolio_image['portfoliovideotype'] == "self" ) {
											echo "selected='selected'";
										} ?> value="self"><?php esc_html_e( 'Self hosted', 'ultima' ); ?></option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Video ID', 'ultima' ); ?></em>
                                    <input type="text"
                                            class="form-control qodef-input qodef-form-element"
                                            id="portfoliovideoid_<?php echo esc_attr( $no ); ?>"
                                            name="portfoliovideoid[]" value="<?php echo isset( $portfolio_image['portfoliovideoid'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliovideoid'] ) ) : ""; ?>"/>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Video image', 'ultima' ); ?></em>
                                    <div class="qodef-media-uploader">
                                        <div<?php if ( stripslashes( $portfolio_image['portfoliovideoimage'] ) == false ) { ?> style="display: none"<?php } ?>
                                                class="qodef-media-image-holder">
                                            <img src="<?php if ( stripslashes( $portfolio_image['portfoliovideoimage'] ) == true ) {
												echo esc_url( ultima_qodef_generate_filename( stripslashes( $portfolio_image['portfoliovideoimage'] ), get_option( 'thumbnail' . '_size_w' ), get_option( 'thumbnail' . '_size_h' ) ) );
											} ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>"
                                                    class="qodef-media-image img-thumbnail"/>
                                        </div>
                                        <div style="display: none"
                                                class="qodef-media-meta-fields">
                                            <input type="hidden" class="qodef-media-upload-url"
                                                    name="portfoliovideoimage[]"
                                                    id="portfoliovideoimage_<?php echo esc_attr( $no ); ?>"
                                                    value="<?php echo stripslashes( $portfolio_image['portfoliovideoimage'] ); ?>"/>
                                            <input type="hidden"
                                                    class="qodef-media-upload-height"
                                                    name="qode_options_theme[media-upload][height]"
                                                    value=""/>
                                            <input type="hidden"
                                                    class="qodef-media-upload-width"
                                                    name="qode_options_theme[media-upload][width]"
                                                    value=""/>
                                        </div>
                                        <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                                href="javascript:void(0)"
                                                data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"
                                                data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                        <a style="display: none;" href="javascript: void(0)"
                                                class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-4">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Video webm', 'ultima' ); ?></em>
                                    <input type="text"
                                            class="form-control qodef-input qodef-form-element"
                                            id="portfoliovideowebm_<?php echo esc_attr( $no ); ?>"
                                            name="portfoliovideowebm[]" value="<?php echo isset( $portfolio_image['portfoliovideowebm'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliovideowebm'] ) ) : ""; ?>"/>
                                </div>
                                <div class="col-lg-4">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Video mp4', 'ultima' ); ?></em>
                                    <input type="text"
                                            class="form-control qodef-input qodef-form-element"
                                            id="portfoliovideomp4_<?php echo esc_attr( $no ); ?>"
                                            name="portfoliovideomp4[]" value="<?php echo isset( $portfolio_image['portfoliovideomp4'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliovideomp4'] ) ) : ""; ?>"/>
                                </div>
                                <div class="col-lg-4">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Video ogv', 'ultima' ); ?></em>
                                    <input type="text"
                                            class="form-control qodef-input qodef-form-element"
                                            id="portfoliovideoogv_<?php echo esc_attr( $no ); ?>"
                                            name="portfoliovideoogv[]" value="<?php echo isset( $portfolio_image['portfoliovideoogv'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliovideoogv'] ) ) : ""; ?>"/>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <a class="qodef_remove_image btn btn-sm btn-primary" href="/" onclick="javascript: return false;"><?php esc_html_e( 'Remove portfolio image/video', 'ultima' ); ?></a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- close div.qodef-section-content -->

                </div>
            </div>
			<?php
			$no ++;
		}
		?>
        <br/>
        <a class="qodef_add_image btn btn-sm btn-primary" onclick="javascript: return false;" href="/"><?php esc_html_e( 'Add portfolio image/video', 'ultima' ); ?></a>
		<?php

	}
}


/*
   Class: UltimaQodefImagesVideos
   A class that initializes Qode Images Videos
*/

class UltimaQodefImagesVideosFramework implements iUltimaQodefRender {
	private $label;
	private $description;


	function __construct( $label = "", $description = "" ) {
		$this->label       = $label;
		$this->description = $description;
	}

	public function render( $factory ) {
		global $post;
		?>

        <!--Image hidden start-->
        <div class="qodef-hidden-portfolio-images" style="display: none">
            <div class="qodef-portfolio-toggle-holder">
                <div class="qodef-portfolio-toggle qodef-toggle-desc">
                    <span class="number">1</span><span class="qodef-toggle-inner"><?php esc_html_e( 'Image -', 'ultima' ); ?> <em><?php esc_html_e( '(Order Number, Image Title)', 'ultima' ); ?></em></span>
                </div>
                <div class="qodef-portfolio-toggle qodef-portfolio-control">
                    <span class="toggle-portfolio-media"><i class="fa fa-caret-up"></i></span>
                    <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="qodef-portfolio-toggle-content">
                <div class="qodef-page-form-section">
                    <div class="qodef-section-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="qodef-media-uploader">
                                        <em class="qodef-field-description"><?php esc_html_e( 'Image', 'ultima' ); ?> </em>
                                        <div style="display: none" class="qodef-media-image-holder">
                                            <img src="" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>" class="qodef-media-image img-thumbnail">
                                        </div>
                                        <div class="qodef-media-meta-fields">
                                            <input type="hidden" class="qodef-media-upload-url" name="portfolioimg_x" id="portfolioimg_x">
                                            <input type="hidden" class="qodef-media-upload-height" name="qode_options_theme[media-upload][height]" value="">
                                            <input type="hidden" class="qodef-media-upload-width" name="qode_options_theme[media-upload][width]" value="">
                                        </div>
                                        <a class="qodef-media-upload-btn btn btn-sm btn-primary" href="javascript:void(0)" data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>" data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                        <a style="display: none;" href="javascript: void(0)" class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Order Number', 'ultima' ); ?></em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="portfolioimgordernumber_x" name="portfolioimgordernumber_x">
                                </div>
                                <div class="col-lg-8">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Image Title (works only for Gallery portfolio type selected)', 'ultima' ); ?> </em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliotitle_x" name="portfoliotitle_x">
                                </div>
                            </div>
                            <input type="hidden" name="portfoliovideoimage_x" id="portfoliovideoimage_x">
                            <input type="hidden" name="portfoliovideotype_x" id="portfoliovideotype_x">
                            <input type="hidden" name="portfoliovideoid_x" id="portfoliovideoid_x">
                            <input type="hidden" name="portfoliovideowebm_x" id="portfoliovideowebm_x">
                            <input type="hidden" name="portfoliovideomp4_x" id="portfoliovideomp4_x">
                            <input type="hidden" name="portfoliovideoogv_x" id="portfoliovideoogv_x">
                            <input type="hidden" name="portfolioimgtype_x" id="portfolioimgtype_x" value="image">

                        </div><!-- close div.container-fluid -->
                    </div><!-- close div.qodef-section-content -->
                </div>
            </div>
        </div>
        <!--Image hidden End-->

        <!--Video Hidden Start-->
        <div class="qodef-hidden-portfolio-videos" style="display: none">
            <div class="qodef-portfolio-toggle-holder">
                <div class="qodef-portfolio-toggle qodef-toggle-desc">
                    <span class="number"><?php esc_html_e( '2', 'ultima' ); ?></span><span class="qodef-toggle-inner"><?php esc_html_e( 'Video -', 'ultima' ); ?> <em><?php esc_html_e( '(Order Number, Video Title)', 'ultima' ); ?></em></span>
                </div>
                <div class="qodef-portfolio-toggle qodef-portfolio-control">
                    <span class="toggle-portfolio-media"><i class="fa fa-caret-up"></i></span>
                    <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="qodef-portfolio-toggle-content">
                <div class="qodef-page-form-section">
                    <div class="qodef-section-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="qodef-media-uploader">
                                        <em class="qodef-field-description"><?php esc_html_e( 'Cover Video Image', 'ultima' ); ?> </em>
                                        <div style="display: none" class="qodef-media-image-holder">
                                            <img src="" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>" class="qodef-media-image img-thumbnail">
                                        </div>
                                        <div style="display: none" class="qodef-media-meta-fields">
                                            <input type="hidden" class="qodef-media-upload-url" name="portfoliovideoimage_x" id="portfoliovideoimage_x">
                                            <input type="hidden" class="qodef-media-upload-height" name="qode_options_theme[media-upload][height]" value="">
                                            <input type="hidden" class="qodef-media-upload-width" name="qode_options_theme[media-upload][width]" value="">
                                        </div>
                                        <a class="qodef-media-upload-btn btn btn-sm btn-primary" href="javascript:void(0)" data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>" data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                        <a style="display: none;" href="javascript: void(0)" class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <em class="qodef-field-description"><?php esc_html_e( 'Order Number', 'ultima' ); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfolioimgordernumber_x" name="portfolioimgordernumber_x">
                                        </div>
                                        <div class="col-lg-10">
                                            <em class="qodef-field-description"><?php esc_html_e( 'Video Title (works only for Gallery portfolio type selected)', 'ultima' ); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliotitle_x" name="portfoliotitle_x">
                                        </div>
                                    </div>
                                    <div class="row next-row">
                                        <div class="col-lg-2">
                                            <em class="qodef-field-description"><?php esc_html_e( 'Video type', 'ultima' ); ?></em>
                                            <select class="form-control qodef-form-element qodef-portfoliovideotype" name="portfoliovideotype_x" id="portfoliovideotype_x">
                                                <option value=""></option>
                                                <option value="youtube"><?php esc_html_e( 'Youtube', 'ultima' ); ?></option>
                                                <option value="vimeo"><?php esc_html_e( 'Vimeo', 'ultima' ); ?></option>
                                                <option value="self"><?php esc_html_e( 'Self hosted', 'ultima' ); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 qodef-video-id-holder">
                                            <em class="qodef-field-description" id="videoId"><?php esc_html_e( 'Video ID', 'ultima' ); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliovideoid_x" name="portfoliovideoid_x">
                                        </div>
                                    </div>

                                    <div class="row next-row qodef-video-self-hosted-path-holder">
                                        <div class="col-lg-4">
                                            <em class="qodef-field-description"><?php esc_html_e( 'Video webm', 'ultima' ); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliovideowebm_x" name="portfoliovideowebm_x">
                                        </div>
                                        <div class="col-lg-4">
                                            <em class="qodef-field-description"><?php esc_html_e( 'Video mp4', 'ultima' ); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliovideomp4_x" name="portfoliovideomp4_x">
                                        </div>
                                        <div class="col-lg-4">
                                            <em class="qodef-field-description"><?php esc_html_e( 'Video ogv', 'ultima' ); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliovideoogv_x" name="portfoliovideoogv_x">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="hidden" name="portfolioimg_x" id="portfolioimg_x">
                            <input type="hidden" name="portfolioimgtype_x" id="portfolioimgtype_x" value="video">
                        </div><!-- close div.container-fluid -->
                    </div><!-- close div.qodef-section-content -->
                </div>
            </div>
        </div>
        <!--Video Hidden End-->


		<?php
		$no               = 1;
		$portfolio_images = get_post_meta( $post->ID, 'qode_portfolio_images', true );
		if ( is_array($portfolio_images) && count( $portfolio_images ) > 1 ) {
			usort( $portfolio_images, "ultima_qodef_compare_portfolio_videos" );
		}
		while ( isset( $portfolio_images[ $no - 1 ] ) ) {
			$portfolio_image = $portfolio_images[ $no - 1 ];
			if ( isset( $portfolio_image['portfolioimgtype'] ) ) {
				$portfolio_img_type = $portfolio_image['portfolioimgtype'];
			} else {
				if ( stripslashes( $portfolio_image['portfolioimg'] ) == true ) {
					$portfolio_img_type = "image";
				} else {
					$portfolio_img_type = "video";
				}
			}
			if ( $portfolio_img_type == "image" ) {
				?>

                <div class="qodef-portfolio-images qodef-portfolio-media" rel="<?php echo esc_attr( $no ); ?>">
                    <div class="qodef-portfolio-toggle-holder">
                        <div class="qodef-portfolio-toggle qodef-toggle-desc">
                            <span class="number"><?php echo esc_html( $no ); ?></span><span class="qodef-toggle-inner"><?php esc_html_e( 'Image -', 'ultima' ); ?> <em>(<?php echo stripslashes( $portfolio_image['portfolioimgordernumber'] ); ?>, <?php echo stripslashes( $portfolio_image['portfoliotitle'] ); ?>)</em></span>
                        </div>
                        <div class="qodef-portfolio-toggle qodef-portfolio-control">
                            <a href="#" class="toggle-portfolio-media"><i class="fa fa-caret-down"></i></a>
                            <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="qodef-portfolio-toggle-content" style="display: none">
                        <div class="qodef-page-form-section">
                            <div class="qodef-section-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="qodef-media-uploader">
                                                <em class="qodef-field-description"><?php esc_html_e( 'Image', 'ultima' ); ?> </em>
                                                <div<?php if ( stripslashes( $portfolio_image['portfolioimg'] ) == false ) { ?> style="display: none"<?php } ?>
                                                        class="qodef-media-image-holder">
                                                    <img src="<?php if ( stripslashes( $portfolio_image['portfolioimg'] ) == true ) {
														echo esc_url( ultima_qodef_generate_filename( stripslashes( $portfolio_image['portfolioimg'] ), get_option( 'thumbnail' . '_size_w' ), get_option( 'thumbnail' . '_size_h' ) ) );
													} ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>"
                                                            class="qodef-media-image img-thumbnail"/>
                                                </div>
                                                <div style="display: none"
                                                        class="qodef-media-meta-fields">
                                                    <input type="hidden" class="qodef-media-upload-url"
                                                            name="portfolioimg[]"
                                                            id="portfolioimg_<?php echo esc_attr( $no ); ?>"
                                                            value="<?php echo stripslashes( $portfolio_image['portfolioimg'] ); ?>"/>
                                                    <input type="hidden"
                                                            class="qodef-media-upload-height"
                                                            name="qode_options_theme[media-upload][height]"
                                                            value=""/>
                                                    <input type="hidden"
                                                            class="qodef-media-upload-width"
                                                            name="qode_options_theme[media-upload][width]"
                                                            value=""/>
                                                </div>
                                                <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                                        href="javascript:void(0)"
                                                        data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"
                                                        data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                                <a style="display: none;" href="javascript: void(0)"
                                                        class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <em class="qodef-field-description"><?php esc_html_e( 'Order Number', 'ultima' ); ?></em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfolioimgordernumber_<?php echo esc_attr( $no ); ?>" name="portfolioimgordernumber[]" value="<?php echo isset( $portfolio_image['portfolioimgordernumber'] ) ? esc_attr( stripslashes( $portfolio_image['portfolioimgordernumber'] ) ) : ""; ?>">
                                        </div>
                                        <div class="col-lg-8">
                                            <em class="qodef-field-description"><?php esc_html_e( 'Image Title (works only for Gallery portfolio type selected)', 'ultima' ); ?> </em>
                                            <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliotitle_<?php echo esc_attr( $no ); ?>" name="portfoliotitle[]" value="<?php echo isset( $portfolio_image['portfoliotitle'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliotitle'] ) ) : ""; ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" id="portfoliovideoimage_<?php echo esc_attr( $no ); ?>" name="portfoliovideoimage[]">
                                    <input type="hidden" id="portfoliovideotype_<?php echo esc_attr( $no ); ?>" name="portfoliovideotype[]">
                                    <input type="hidden" id="portfoliovideoid_<?php echo esc_attr( $no ); ?>" name="portfoliovideoid[]">
                                    <input type="hidden" id="portfoliovideowebm_<?php echo esc_attr( $no ); ?>" name="portfoliovideowebm[]">
                                    <input type="hidden" id="portfoliovideomp4_<?php echo esc_attr( $no ); ?>" name="portfoliovideomp4[]">
                                    <input type="hidden" id="portfoliovideoogv_<?php echo esc_attr( $no ); ?>" name="portfoliovideoogv[]">
                                    <input type="hidden" id="portfolioimgtype_<?php echo esc_attr( $no ); ?>" name="portfolioimgtype[]" value="image">
                                </div><!-- close div.container-fluid -->
                            </div><!-- close div.qodef-section-content -->
                        </div>
                    </div>
                </div>

				<?php
			} else {
				?>
                <div class="qodef-portfolio-videos qodef-portfolio-media" rel="<?php echo esc_attr( $no ); ?>">
                    <div class="qodef-portfolio-toggle-holder">
                        <div class="qodef-portfolio-toggle qodef-toggle-desc">
                            <span class="number"><?php echo esc_html( $no ); ?></span><span class="qodef-toggle-inner"><?php esc_html_e( 'Video -', 'ultima' ); ?> <em>(<?php echo stripslashes( $portfolio_image['portfolioimgordernumber'] ); ?>, <?php echo stripslashes( $portfolio_image['portfoliotitle'] ); ?></em>) </span>
                        </div>
                        <div class="qodef-portfolio-toggle qodef-portfolio-control">
                            <a href="#" class="toggle-portfolio-media"><i class="fa fa-caret-down"></i></a>
                            <a href="#" class="remove-portfolio-media"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="qodef-portfolio-toggle-content" style="display: none">
                        <div class="qodef-page-form-section">
                            <div class="qodef-section-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="qodef-media-uploader">
                                                <em class="qodef-field-description"><?php esc_html_e( 'Cover Video Image', 'ultima' ); ?> </em>
                                                <div<?php if ( stripslashes( $portfolio_image['portfoliovideoimage'] ) == false ) { ?> style="display: none"<?php } ?>
                                                        class="qodef-media-image-holder">
                                                    <img src="<?php if ( stripslashes( $portfolio_image['portfoliovideoimage'] ) == true ) {
														echo esc_url( ultima_qodef_generate_filename( stripslashes( $portfolio_image['portfoliovideoimage'] ), get_option( 'thumbnail' . '_size_w' ), get_option( 'thumbnail' . '_size_h' ) ) );
													} ?>" alt="<?php esc_attr_e( 'Image thumbnail', 'ultima' ); ?>"
                                                            class="qodef-media-image img-thumbnail"/>
                                                </div>
                                                <div style="display: none"
                                                        class="qodef-media-meta-fields">
                                                    <input type="hidden" class="qodef-media-upload-url"
                                                            name="portfoliovideoimage[]"
                                                            id="portfoliovideoimage_<?php echo esc_attr( $no ); ?>"
                                                            value="<?php echo stripslashes( $portfolio_image['portfoliovideoimage'] ); ?>"/>
                                                    <input type="hidden"
                                                            class="qodef-media-upload-height"
                                                            name="qode_options_theme[media-upload][height]"
                                                            value=""/>
                                                    <input type="hidden"
                                                            class="qodef-media-upload-width"
                                                            name="qode_options_theme[media-upload][width]"
                                                            value=""/>
                                                </div>
                                                <a class="qodef-media-upload-btn btn btn-sm btn-primary"
                                                        href="javascript:void(0)"
                                                        data-frame-title="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"
                                                        data-frame-button-text="<?php esc_attr_e( 'Select Image', 'ultima' ); ?>"><?php esc_html_e( 'Upload', 'ultima' ); ?></a>
                                                <a style="display: none;" href="javascript: void(0)"
                                                        class="qodef-media-remove-btn btn btn-default btn-sm"><?php esc_html_e( 'Remove', 'ultima' ); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <em class="qodef-field-description"><?php esc_html_e( 'Order Number', 'ultima' ); ?></em>
                                                    <input type="text" class="form-control qodef-input qodef-form-element" id="portfolioimgordernumber_<?php echo esc_attr( $no ); ?>" name="portfolioimgordernumber[]" value="<?php echo isset( $portfolio_image['portfolioimgordernumber'] ) ? esc_attr( stripslashes( $portfolio_image['portfolioimgordernumber'] ) ) : ""; ?>">
                                                </div>
                                                <div class="col-lg-10">
                                                    <em class="qodef-field-description"><?php esc_html_e( 'Video Title (works only for Gallery portfolio type selected)', 'ultima' ); ?> </em>
                                                    <input type="text" class="form-control qodef-input qodef-form-element" id="portfoliotitle_<?php echo esc_attr( $no ); ?>" name="portfoliotitle[]" value="<?php echo isset( $portfolio_image['portfoliotitle'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliotitle'] ) ) : ""; ?>">
                                                </div>
                                            </div>
                                            <div class="row next-row">
                                                <div class="col-lg-2">
                                                    <em class="qodef-field-description"><?php esc_html_e( 'Video Type', 'ultima' ); ?></em>
                                                    <select class="form-control qodef-form-element qodef-portfoliovideotype"
                                                            name="portfoliovideotype[]" id="portfoliovideotype_<?php echo esc_attr( $no ); ?>">
                                                        <option value=""></option>
                                                        <option <?php if ( $portfolio_image['portfoliovideotype'] == "youtube" ) {
															echo "selected='selected'";
														} ?> value="youtube"><?php esc_html_e( 'Youtube', 'ultima' ); ?></option>
                                                        <option <?php if ( $portfolio_image['portfoliovideotype'] == "vimeo" ) {
															echo "selected='selected'";
														} ?> value="vimeo"><?php esc_html_e( 'Vimeo', 'ultima' ); ?></option>
                                                        <option <?php if ( $portfolio_image['portfoliovideotype'] == "self" ) {
															echo "selected='selected'";
														} ?> value="self"><?php esc_html_e( 'Self hosted', 'ultima' ); ?></option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-2 qodef-video-id-holder">
                                                    <em class="qodef-field-description"><?php esc_html_e( 'Video ID', 'ultima' ); ?></em>
                                                    <input type="text"
                                                            class="form-control qodef-input qodef-form-element"
                                                            id="portfoliovideoid_<?php echo esc_attr( $no ); ?>"
                                                            name="portfoliovideoid[]" value="<?php echo isset( $portfolio_image['portfoliovideoid'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliovideoid'] ) ) : ""; ?>"/>
                                                </div>
                                            </div>

                                            <div class="row next-row qodef-video-self-hosted-path-holder">
                                                <div class="col-lg-4">
                                                    <em class="qodef-field-description"><?php esc_html_e( 'Video webm', 'ultima' ); ?></em>
                                                    <input type="text"
                                                            class="form-control qodef-input qodef-form-element"
                                                            id="portfoliovideowebm_<?php echo esc_attr( $no ); ?>"
                                                            name="portfoliovideowebm[]" value="<?php echo isset( $portfolio_image['portfoliovideowebm'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliovideowebm'] ) ) : ""; ?>"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <em class="qodef-field-description"><?php esc_html_e( 'Video mp4', 'ultima' ); ?></em>
                                                    <input type="text"
                                                            class="form-control qodef-input qodef-form-element"
                                                            id="portfoliovideomp4_<?php echo esc_attr( $no ); ?>"
                                                            name="portfoliovideomp4[]" value="<?php echo isset( $portfolio_image['portfoliovideomp4'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliovideomp4'] ) ) : ""; ?>"/>
                                                </div>
                                                <div class="col-lg-4">
                                                    <em class="qodef-field-description"><?php esc_html_e( 'Video ogv', 'ultima' ); ?></em>
                                                    <input type="text"
                                                            class="form-control qodef-input qodef-form-element"
                                                            id="portfoliovideoogv_<?php echo esc_attr( $no ); ?>"
                                                            name="portfoliovideoogv[]" value="<?php echo isset( $portfolio_image['portfoliovideoogv'] ) ? esc_attr( stripslashes( $portfolio_image['portfoliovideoogv'] ) ) : ""; ?>"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="hidden" id="portfolioimg_<?php echo esc_attr( $no ); ?>" name="portfolioimg[]">
                                    <input type="hidden" id="portfolioimgtype_<?php echo esc_attr( $no ); ?>" name="portfolioimgtype[]" value="video">
                                </div><!-- close div.container-fluid -->
                            </div><!-- close div.qodef-section-content -->
                        </div>
                    </div>
                </div>
				<?php
			}
			$no ++;
		}
		?>

        <div class="qodef-portfolio-add">
            <a class="qodef-add-image btn btn-sm btn-primary" href="#"><i class="fa fa-camera"></i> <?php esc_html_e( 'Add Image', 'ultima' ); ?>
            </a>
            <a class="qodef-add-video btn btn-sm btn-primary" href="#"><i class="fa fa-video-camera"></i> <?php esc_html_e( 'Add Video', 'ultima' ); ?>
            </a>

            <a class="qodef-toggle-all-media btn btn-sm btn-default pull-right" href="#"> <?php esc_html_e( 'Expand All', 'ultima' ); ?></a>
        </div>
		<?php

	}
}

class UltimaQodefTwitterFramework implements iUltimaQodefRender {
	public function render( $factory ) {
		$twitterApi = QodefTwitterApi::getInstance();
		$message    = '';

		if ( ! empty( $_GET['oauth_token'] ) && ! empty( $_GET['oauth_verifier'] ) ) {
			if ( ! empty( $_GET['oauth_token'] ) ) {
				update_option( $twitterApi::AUTHORIZE_TOKEN_FIELD, $_GET['oauth_token'] );
			}

			if ( ! empty( $_GET['oauth_verifier'] ) ) {
				update_option( $twitterApi::AUTHORIZE_VERIFIER_FIELD, $_GET['oauth_verifier'] );
			}

			$responseObj = $twitterApi->obtainAccessToken();
			if ( $responseObj->status ) {
				$message = esc_html__( 'You have successfully connected with your Twitter account. If you have any issues fetching data from Twitter try reconnecting.', 'ultima' );
			} else {
				$message = $responseObj->message;
			}
		}

		$buttonText = $twitterApi->hasUserConnected() ? esc_html__( 'Re-connect with Twitter', 'ultima' ) : esc_html__( 'Connect with Twitter', 'ultima' );
		?>
		<?php if ( $message !== '' ) { ?>
            <div class="alert alert-success" style="margin-top: 20px;">
                <span><?php echo esc_html( $message ); ?></span>
            </div>
		<?php } ?>
        <div class="qodef-page-form-section" id="qodef_enable_social_share_twitter">

            <div class="qodef-field-desc">
                <h4><?php esc_html_e( 'Connect with Twitter', 'ultima' ); ?></h4>

                <p><?php esc_html_e( 'Connecting with Twitter will enable you to show your latest tweets on your site', 'ultima' ); ?></p>
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <a id="qodef-tw-request-token-btn" class="btn btn-primary" href="#"><?php echo esc_html( $buttonText ); ?></a>
                            <input type="hidden" data-name="current-page-url" value="<?php echo esc_url( $twitterApi->buildCurrentPageURI() ); ?>"/>
                            <?php wp_nonce_field( 'qodef_twitter_connect_nonce', 'qodef_twitter_connect_nonce' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

        </div>
	<?php }
}

class UltimaQodefInstagramFramework implements iUltimaQodefRender {
    public function render( $factory ) {
        $instagram_api = QodefInstagramApi::getInstance();
        $message       = '';

        //check if code parameter and instagram parameter is set in URL
        if ( ! empty( $_GET['code'] ) && ! empty( $_GET['instagram'] ) ) {
            //update code option so we can use it later
            $instagram_api->setConnectionType( 'instagram' );
            $instagram_api->instagramStoreCode();
            $instagram_api->instagramExchangeCodeForToken();
            $message = esc_html__( 'You have successfully connected with your Instagram Personal account.', 'ultima' );
        }

        //check if code parameter and instagram parameter is set in URL
        if ( ! empty( $_GET['access_token'] ) && ! empty( $_GET['facebook'] ) ) {
            //update code option so we can use it later
            $instagram_api->setConnectionType( 'facebook' );
            $instagram_api->facebookStoreToken();
            $message = esc_html__( 'You have successfully connected with your Instagram Business account.', 'ultima' );
        }

        //check if code parameter and instagram parameter is set in URL
        if ( ! empty( $_GET['disconnect'] ) ) {
            //update code option so we can use it later
            $instagram_api->disconnect();
            $message = esc_html__( 'You have have been disconnected from all Instagram accounts.', 'ultima' );

        }
        ?>

        <?php if ( $message !== '' ) { ?>
            <div class="alert alert-success">
                <span><?php echo esc_html( $message ); ?></span>
            </div>
        <?php } ?>
        <div class="qodef-page-form-section" id="qodef_enable_social_share">
            <div class="qodef-field-desc">
                <h4><?php esc_html_e( 'Connect with Instagram', 'ultima' ); ?></h4>
                <p><?php esc_html_e( 'Connecting with Instagram will enable you to show your latest photos on your site', 'ultima' ); ?></p>
            </div>
            <div class="qodef-section-content">
                <div class="container-fluid">
                    <?php
                    $instagram_user_id = get_option( $instagram_api::INSTAGRAM_USER_ID );
                    $connection_type   = get_option( $instagram_api::CONNECTION_TYPE );
                    if ( $instagram_user_id ) { ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <p><?php echo esc_html__( 'You are currently connected to Instagram ID: ', 'ultima' );
                                    echo esc_attr( $instagram_user_id ) ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <?php if ( ! empty( $_GET['disconnect'] ) ) { ?>
                            <div class="col-lg-4">
                                <a class="btn btn-primary" href="<?php echo esc_url( $instagram_api->reloadURL() ); ?>"><?php echo esc_html__( 'Reload Page', 'ultima' ); ?></a>
                            </div>
                        <?php } else if ( empty( $connection_type ) ) { ?>
                            <div class="col-lg-4">
                                <a class="btn btn-primary" href="<?php echo esc_url( $instagram_api->instagramRequestCode() ); ?>"><?php echo esc_html__( 'Connect with Instagram Personal account', 'ultima' ); ?></a>
                            </div>
                            <div class="col-lg-4">
                                <a class="btn btn-primary" href="<?php echo esc_url( $instagram_api->facebookRequestCode() ); ?>"><?php echo esc_html__( 'Connect with Instagram Business account', 'ultima' ); ?></a>
                            </div>
                        <?php } else { ?>
                            <div class="col-lg-4">
                                <a class="btn btn-primary" href="<?php echo esc_url( $instagram_api->disconnectURL() ); ?>"><?php echo esc_html__( 'Disconnect Instagram account', 'ultima' ) ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}

/*
   Class: UltimaQodefImagesVideos
   A class that initializes Qode Images Videos
*/

class UltimaQodefOptionsFramework implements iUltimaQodefRender {
	private $label;
	private $description;


	function __construct( $label = "", $description = "" ) {
		$this->label       = $label;
		$this->description = $description;
	}

	public function render( $factory ) {
		global $post;
		?>

        <div class="qodef-portfolio-additional-item-holder" style="display: none">
            <div class="qodef-portfolio-toggle-holder">
                <div class="qodef-portfolio-toggle qodef-toggle-desc">
                    <span class="number"><?php esc_html_e( '1', 'ultima' ); ?></span><span class="qodef-toggle-inner"><?php esc_html_e( 'Additional Sidebar Item', 'ultima' ); ?> <em><?php esc_html_e( '(Order Number, Item Title)', 'ultima' ); ?></em></span>
                </div>
                <div class="qodef-portfolio-toggle qodef-portfolio-control">
                    <span class="toggle-portfolio-item"><i class="fa fa-caret-up"></i></span>
                    <a href="#" class="remove-portfolio-item"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="qodef-portfolio-toggle-content">
                <div class="qodef-page-form-section">
                    <div class="qodef-section-content">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-lg-2">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Order Number', 'ultima' ); ?></em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="optionlabelordernumber_x" name="optionlabelordernumber_x">
                                </div>
                                <div class="col-lg-10">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Item Title', 'ultima' ); ?> </em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="optionLabel_x" name="optionLabel_x">
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Item Text', 'ultima' ); ?></em>
                                    <textarea class="form-control qodef-input qodef-form-element" id="optionValue_x" name="optionValue_x"></textarea>
                                </div>
                            </div>
                            <div class="row next-row">
                                <div class="col-lg-12">
                                    <em class="qodef-field-description"><?php esc_html_e( 'Enter Full URL for Item Text Link', 'ultima' ); ?></em>
                                    <input type="text" class="form-control qodef-input qodef-form-element" id="optionUrl_x" name="optionUrl_x">
                                </div>
                            </div>
                        </div><!-- close div.qodef-section-content -->
                    </div><!-- close div.container-fluid -->
                </div>
            </div>
        </div>
		<?php
		$no         = 1;
		$portfolios = get_post_meta( $post->ID, 'qode_portfolios', true );
		if ( is_array($portfolios) && count( $portfolios ) > 1 ) {
			usort( $portfolios, "ultima_qodef_compare_portfolio_options" );
		}
		while ( isset( $portfolios[ $no - 1 ] ) ) {
			$portfolio = $portfolios[ $no - 1 ];
			?>
            <div class="qodef-portfolio-additional-item" rel="<?php echo esc_attr( $no ); ?>">
                <div class="qodef-portfolio-toggle-holder">
                    <div class="qodef-portfolio-toggle qodef-toggle-desc">
                        <span class="number"><?php echo esc_html( $no ); ?></span><span class="qodef-toggle-inner"><?php esc_html_e( 'Additional Sidebar Item - ', 'ultima' ); ?><em>(<?php echo stripslashes( $portfolio['optionlabelordernumber'] ); ?>, <?php echo stripslashes( $portfolio['optionLabel'] ); ?>)</em></span>
                    </div>
                    <div class="qodef-portfolio-toggle qodef-portfolio-control">
                        <span class="toggle-portfolio-item"><i class="fa fa-caret-down"></i></span>
                        <a href="#" class="remove-portfolio-item"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="qodef-portfolio-toggle-content" style="display: none">
                    <div class="qodef-page-form-section">
                        <div class="qodef-section-content">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-lg-2">
                                        <em class="qodef-field-description"><?php esc_html_e( 'Order Number', 'ultima' ); ?></em>
                                        <input type="text" class="form-control qodef-input qodef-form-element" id="optionlabelordernumber_<?php echo esc_attr( $no ); ?>" name="optionlabelordernumber[]" value="<?php echo isset( $portfolio['optionlabelordernumber'] ) ? esc_attr( stripslashes( $portfolio['optionlabelordernumber'] ) ) : ""; ?>">
                                    </div>
                                    <div class="col-lg-10">
                                        <em class="qodef-field-description"><?php esc_html_e( 'Item Title', 'ultima' ); ?> </em>
                                        <input type="text" class="form-control qodef-input qodef-form-element" id="optionLabel_<?php echo esc_attr( $no ); ?>" name="optionLabel[]" value="<?php echo esc_attr( stripslashes( $portfolio['optionLabel'] ) ); ?>">
                                    </div>
                                </div>
                                <div class="row next-row">
                                    <div class="col-lg-12">
                                        <em class="qodef-field-description"><?php esc_html_e( 'Item Text', 'ultima' ); ?></em>
                                        <textarea class="form-control qodef-input qodef-form-element" id="optionValue_<?php echo esc_attr( $no ); ?>" name="optionValue[]"><?php echo esc_attr( stripslashes( $portfolio['optionValue'] ) ); ?></textarea>
                                    </div>
                                </div>
                                <div class="row next-row">
                                    <div class="col-lg-12">
                                        <em class="qodef-field-description"><?php esc_html_e( 'Enter Full URL for Item Text Link', 'ultima' ); ?></em>
                                        <input type="text" class="form-control qodef-input qodef-form-element" id="optionUrl_<?php echo esc_attr( $no ); ?>" name="optionUrl[]" value="<?php echo stripslashes( $portfolio['optionUrl'] ); ?>">
                                    </div>
                                </div>
                            </div><!-- close div.qodef-section-content -->
                        </div><!-- close div.container-fluid -->
                    </div>
                </div>
            </div>
			<?php
			$no ++;
		}
		?>

        <div class="qodef-portfolio-add">
            <a class="qodef-add-item btn btn-sm btn-primary" href="#"> <?php esc_html_e( 'Add New Item', 'ultima' ); ?></a>


            <a class="qodef-toggle-all-item btn btn-sm btn-default pull-right" href="#"> <?php esc_html_e( 'Expand All', 'ultima' ); ?></a>
        </div>


		<?php

	}
}