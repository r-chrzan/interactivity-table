import { store } from '@wordpress/interactivity';

store( {
	selectors: {
		interactivity: {
			isShown: ( { state, context } ) =>
				context.interactivity.availableStates.some(
					( item ) => state.interactivity.currentRegionCode === item
				),
		},
	},
	actions: {
		interactivity: {
			onChange: ( { state, event } ) => {
				state.interactivity.currentRegionCode = event.target.value;
			},
		},
	},
} );
