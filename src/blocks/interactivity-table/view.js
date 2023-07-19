import { store } from '@wordpress/interactivity';

store( {
	selectors: {
		interactivity: {
			isHidden: ({ state, context }) =>
				state.interactivity.show === context.interactivity.isRestricted,
			changeText: (store) => {
				const { selectors, state, context } = store;
				state.interactivity.currentRegionCode = cfRegionCode;

				return selectors.interactivity.isHidden(store)
					? state.interactivity.resText
					: state.interactivity.nonResText = cfRegionCode;
			},
			initHidden: (store) => {
				const { selectors, state, context } = store;
				// console.log(selectors.interactivity.isHidden(store))
				return selectors.interactivity.isHidden(store)
					? state.interactivity.isNotHidden
					: state.interactivity.isHidden;
			}
		}
	},
	actions: {
		interactivity: {
			onLoad: (store, event) => {
				const { state, selectors, context, ref } = store;
				const name = ref.getAttribute('data-is-restricted');
				const value = ref.getAttribute('data-value');
				if (selectors.interactivity.isHidden(store)) {
					const statesArray = context.interactivity.availableStates;
					console.log(statesArray)
					for (let i = 0; i < statesArray.length; i++) {
						if (statesArray[i].abbreviation === state.interactivity.currentRegionCode) {
							const [key, ...path] = name.split('.').reverse();
							const obj = path.reduceRight((o, k) => o[k], context);
							obj[key] = value;
							
						}
					}
				}
			},
		},
	},
} );
