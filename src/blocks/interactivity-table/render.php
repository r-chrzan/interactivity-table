<?php
	// This data is generated by REST API for each <tr>
	$available_states_1     = array(
		'availableStates' => array(
			array(
				'name'         => 'Alabama',
				'abbreviation' => 'AL',
			),
			array(
				'name'         => 'Alaska',
				'abbreviation' => 'AK',
			),
		),
		'isRestricted'    => false,
	);
	$available_states_2     = array(
		'availableStates' => array(
			array(
				'name'         => 'Arizona',
				'abbreviation' => 'AZ',
			),
			array(
				'name'         => 'Arkansas',
				'abbreviation' => 'AR',
			),
		),
		'isRestricted'    => false,
	);
		$available_states_3 = array(
			'availableStates' => array(
				array(
					'name'         => 'California',
					'abbreviation' => 'CA',
				),
				array(
					'name'         => 'Colorado',
					'abbreviation' => 'CO',
				),
			),
			'isRestricted'    => false,
		);


			wp_store(
				array(
					'state'     => array(
						'interactivity' => array(
							//if you change this to for example 'CO' <span>Show text</span> will hide.
							'currentRegionCode' => 'AK',
							'isHidden'          => false,
							'isNotHidden'       => true,
							'show'              => false,
						),
					),
					'selectors' => array(
						'interactivity' => array(
							'isRestricted' => false,
							'isShow'       => false,
							'show'         => false,
							'initHidden'   => true,
						),
					),
				)
			);
			?>

<div
	<?php echo get_block_wrapper_attributes(); ?> 
	data-wp-interactive
	>

	<!-- 
			My goal is to make functionality based onChange (value must equals to currentRegionCode) to show and hide elements on specyfic <tr>
	-->
	<select data-wp-on--change="actions.interactivity.onChange" class="select">
		<option value="">Select state</option>
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="MI">Michigan</option>
		<option value="other">Other state</option>
	</select>
	<table style="width:100%">
		<tr
			data-wp-init="actions.interactivity.onLoad"
			data-wp-context='{"interactivity": <?php echo htmlentities( wp_json_encode( $available_states_1 ) ); ?>}'
			data-is-restricted="interactivity.isRestricted"
			data-value="true"
		>
			<td>Alfreds Futterkiste</td>
			<td>Maria Anders</td>
			<td>
				Germany
				<span
					data-wp-bind--hidden="selectors.interactivity.initHidden"
					data-wp-show="!selectors.interactivity.isHidden"
					style="display: block"
					>Show text</span>
			</td>
		</tr>
		<tr
			data-wp-init="actions.interactivity.onLoad"
			data-wp-context='{"interactivity": <?php echo htmlentities( wp_json_encode( $available_states_2 ) ); ?>}'
			data-is-restricted="interactivity.isRestricted"
			data-value="false"
		>
			<td>Centro comercial Moctezuma</td>
			<td>Francisco Chang</td>
			<td>Mexico</td>
		</tr>
		<tr
			data-wp-init="actions.interactivity.onLoad"
			data-wp-context='{"interactivity": <?php echo htmlentities( wp_json_encode( $available_states_3 ) ); ?>}'
			data-is-restricted="interactivity.isRestricted"
			data-value="false"
		>
			<td>Ernst Handel</td>
			<td>Roland Mendel</td>
			<td>Austria</td>
		</tr>
	</table>
</div>