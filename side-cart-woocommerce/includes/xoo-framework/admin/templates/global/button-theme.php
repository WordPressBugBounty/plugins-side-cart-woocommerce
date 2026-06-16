<script type="text/html" id="tmpl-xoo-as-btntheme">

	<?php $id = $field_id.'[%$]' ?>

	<?php

	$units = array(
		'px' => 'px',
		'%'  => '%',
		'em' => 'em',
		'rem'=> 'rem'
	);


	$fontWeight = array(
		'300' => 300,
		'400' => 400,
		'500' => 500,
		'600' => 600,
		'700' => 700,
	);

	$fontStyle = array(
		'normal' => 'Normal',
		'italic' => 'Italic',
	);

	?>

	<div class="xoo-btntheme xoo-btntheme-accordion">

		<div class="xoo-acc-head xoo-theme-head"><span class="dashicons dashicons-plus-alt2"></span><span class="dashicons dashicons-minus"></span><div class="xoo-btntheme-title">{{data.title}}</div><span class="dashicons dashicons-trash xoo-btntheme-delete"></span></div>

		<div class="xoo-acc-cont">

			<input type="text" value="{{data.title}}" name="<?php echo $id ?>[barTitle]" class="xoo-btntheme-title-input">

			<div class="xoo-btn-setting xoo-tabs-cont" data-field_id="<?php echo $field_id ?>">

					<span class="xoo-btnset-desc">Customize the appearance of your button</span>

					<div class="xoo-btn-preview-wrap">

						<div class="xoo-btn-preview">
							<button type="button">Button</button>
						</div>

					</div>

					<div class="xoo-setting-tabs">

						<span class="xoo-set-tab xoo-tabactive" data-xootab="normal"><span class="xoo-icon-light xoo-icon"></span>Normal</span>

						<span class="xoo-set-tab" data-xootab="hover"><span class="xoo-icon-cursor xoo-icon"></span>Hover</span>

					</div>

					<!-- NORMAL -->
					<div class="xoo-btn-group xoo-tabgroup xoo-tabactive" data-xootab="normal">

						<!-- Colors -->
						<div class="xoo-btn-row">

							<span class="xoo-btnrow-head"><span class="xoo-icon-paint xoo-icon"></span>Colors</span>

							<div class="xoo-row-settings">

								<div>
									<i>Background</i>
									<input type="text" class="xoo-as-color-input" name="<?php echo $id; ?>[bgColor]" value="{{data.bgColor}}" >
								</div>

								<div>
									<i>Text Color</i>
									<input type="text" class="xoo-as-color-input" name="<?php echo $id; ?>[txtColor]" value="{{data.txtColor}}" >
								</div>

							</div>

						</div>

						<!-- Size -->
						<div class="xoo-btn-row">

							<span class="xoo-btnrow-head"><span class="xoo-icon-ruler xoo-icon"></span>Size</span>

							<div class="xoo-row-settings">

								<div>

									<i>Width</i>
									<input type="number" name="<?php echo $id; ?>[width]" value="{{data.width}}" >

								</div>

								<div>

									<i>Unit</i>

									<select name="<?php echo $id ?>[width_unit]">
										<?php $adminObj->templatejs_select_options( 'width_unit', $units ) ?>
									</select>

								</div>

								<div>

									<i>Height</i>
									<input type="number" name="<?php echo $id; ?>[height]" value="{{data.height}}" >	

								</div>



								<div>

									<i>Unit</i>
									<select name="<?php echo $id ?>[height_unit]">
										<?php $adminObj->templatejs_select_options( 'height_unit', $units ) ?>
									</select>

								</div>

							</div>

						</div>

						<!-- Text -->
						<div class="xoo-btn-row">

							<span class="xoo-btnrow-head"><span class="xoo-icon-font xoo-icon"></span>Text</span>

							<div class="xoo-row-settings">

								<div>

									<i>Weight</i>

									<select name="<?php echo $id ?>[text][fontWeight]">
										<?php $adminObj->templatejs_select_options( 'text.fontWeight', $fontWeight ) ?>
									</select>

								</div>

								<div>

									<i>Style</i>

									<select name="<?php echo $id ?>[text][fontStyle]">
										<?php $adminObj->templatejs_select_options( 'text.fontStyle', $fontStyle ) ?>
									</select>

								</div>

								<div>

									<# console.log( data ); #>

									<i>Font Size</i>

									<input type="number" name="<?php echo $id; ?>[text][fontSize]" value="{{data.text.fontSize}}">

								</div>

								<div>

									<i>Unit</i>

									<select name="<?php echo $id ?>[text][fontSizeUnit]">
										<?php $adminObj->templatejs_select_options( 'text.fontSizeUnit', $units ) ?>
									</select>

								</div>

								<div>

									<i>Transform</i>

									<select name="<?php echo $id ?>[text][textTransform]">
										<?php $adminObj->templatejs_select_options( 'text.textTransform', array(
											'none' => 'None',
											'lowercase' => 'Lowercase',
											'uppercase' => 'Uppercase',
											'capitalize' => 'capitalize'
										) ) ?>
									</select>

								</div>

							</div>

						</div>

						<!-- Border -->
						<div class="xoo-btn-row">
							
						</div>

					</div>

					<!-- HOVER -->
					<div class="xoo-btn-group xoo-tabgroup" data-xootab="hover">

						<div class="xoo-btn-row">

							<span class="xoo-btnrow-head"><span class="xoo-icon-paint xoo-icon"></span>Colors</span>

							<div class="xoo-row-settings">

								<div>
									<i>Background</i>
									<input type="text" class="xoo-as-color-input" name="<?php echo $id; ?>[hover][bgColor]" value="{{data.hover.bgColor}}">									
								</div>

								<div>
									<i>Text Color</i>
									<input type="text" class="xoo-as-color-input" name="<?php echo $id; ?>[hover][txtColor]" value="{{data.hover.bgColor}}" >
								</div>

							</div>

						</div>

						<div class="xoo-btn-row">
							<!-- Border -->
						</div>

					</div>

				</div>

		</div>

	</div>

</script>