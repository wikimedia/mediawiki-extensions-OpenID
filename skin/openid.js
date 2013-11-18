var openid = window.openid = {

	current: 'OpenID',

	show: function ( provider ) {

		$( '#provider_form_' + openid.current )
			.attr( 'style', 'display:none' );
		$( '#provider_form_' + provider )
			.attr( 'style', 'block' );
		$( '#openid_provider_' + openid.current + '_icon, #openid_provider_' + openid.current + '_link' )
			.removeClass( 'openid_selected' );
		$( '#openid_provider_' + provider + '_icon, #openid_provider_' + provider + '_link' )
			.addClass( 'openid_selected' );

		openid.current = provider;

	},

	update: function () {

		$.cookie( wgCookiePrefix + '_openid_provider', openid.current, { 'path': wgScript, 'expires': 365 } );
		var url = $( '#openid_provider_url_' + openid.current ).val(),
			param_id = 'openid_provider_param_' + openid.current,
			param = $('#' + param_id).val();
		//found a value for param (could even be '')?

		if ( param !== null ) {
			$.cookie( wgCookiePrefix + '_' + param_id, param, { 'path': wgScript, 'expires': 365 } );
			url = url.replace( /{.*}/, param );
		}
		$( '#openid_url' ).val( url );

	},

	init: function () {

		var provider = $.cookie( wgCookiePrefix + '_openid_provider' ) ||
			$( '.openid_default_provider' ).data( 'provider-name' );
		if ( provider ) {
			openid.show( provider );
		}
	}

};

$( document ).ready( openid.init );
