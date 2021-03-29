( function( api ) {

	// Extends our custom "vw-gardening-landscaping" section.
	api.sectionConstructor['vw-gardening-landscaping'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );