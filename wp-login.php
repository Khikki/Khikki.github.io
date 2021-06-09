<!DOCTYPE html>
	<html lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Log In – Armadon Classic</title>
	<meta name='robots' content='max-image-preview:large, noindex, noarchive' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link rel='stylesheet' id='dashicons-css'  href='https://classic.armadon-theme.com/wp-includes/css/dashicons.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='https://classic.armadon-theme.com/wp-includes/css/buttons.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css'  href='https://classic.armadon-theme.com/wp-admin/css/forms.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css'  href='https://classic.armadon-theme.com/wp-admin/css/l10n.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='https://classic.armadon-theme.com/wp-admin/css/login.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='grimlock-login-login-css'  href='https://classic.armadon-theme.com/wp-content/plugins/grimlock-login/assets/css/login.css?ver=1.1.4' type='text/css' media='all' />
<style id='grimlock-login-login-inline-css' type='text/css'>

		#login {
			padding: 20px;
			border-radius: 0.5rem;
			border-width: 1px;
			border-color: #292D3D;
			border-style: solid;
			background-color: #252836;
		}
		#login:after {
			background-color: #252836;
			box-shadow: 0 0 0 10000px #252836;
		}
		.login #nav {
			border-top-color: #292D3D;
		}
		.login .message {
			color: #252836;
		}
		#login #login_error,
		#login .message,
		#login .success,
		#login h1.admin-email__heading {
			border-radius: 0.5rem;
		}
		.login #login > h1 {
			border-top-left-radius: 0.5rem;
			border-top-right-radius: 0.5rem;
		}
		.login #nav {
			border-top-width: 1px;
			border-bottom-left-radius: 0.5rem;
			border-bottom-right-radius: 0.5rem;
		}
		#login a {
			color: #CFD3DA !important;
		}
		#loginform [id*='nsl-custom-login-form'] {
			border-bottom: 1px solid #292D3D;
		}
		#login a:hover,
	    #login a:active,
        #login a:focus {
			color: #8679dc !important;
		}
		#login,
		.login,
		.login label {
			color: #CFD3DA;
		}

		.login .button,
		.wp-core-ui .button-group.button-large .button,
		.wp-core-ui .button.button-large,
		#jetpack-sso-wrap__action .jetpack-sso.button {
			padding-top: 1rem;
			padding-bottom: 1rem;
			padding-left: 2rem;
			padding-right: 2rem;
			font-family: Barlow, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			font-size: 15px;
			font-weight: 700;
		    letter-spacing: 0;
		    line-height: 1.25rem;
		    text-transform: uppercase;
		    border-radius: 0.5rem;
		    border-width: 0px;
		}

		#login input[type=checkbox]:checked:before {
			color: #6757D6;
		}

		.login .button-primary,
		#jetpack-sso-wrap__action .jetpack-sso.button {
			background-color: #6757D6;
			border-color: #6757D6;
			color: #FFFFFF;
		}

		.login .button-primary:hover,
		.login .button-primary:focus,
		.login .button-primary:active,
		#jetpack-sso-wrap__action .jetpack-sso.button {
			background-color: #5644ca;
			border-color: #5644ca;
			color: #FFFFFF;
		}

		input#rememberme:focus,
		#login button:focus {
            box-shadow: 0 0 0 2px #5644ca inset !important;
		}

		.login:before {
			background-color: #6757D6;
		}
		.grimlock-login--fullscreen-left.login #nav a,
		.grimlock-login--fullscreen-right.login #nav a {
			border-radius: 0.5rem;
		}

		.login form .input,
		.login input[type="text"],
		.login form input[type="checkbox"] {
			border-radius: 0.5rem;
		    border-width: 1px;
		    border-color: rgba(255,255,255,.07);
			background-color: #2b2f40;
			color: #BFC0C4;
		}

		.login form .input:focus,
		.login input[type="text"]:focus,
		.login form input[type="checkbox"]:focus {
			border-color: #6757D6;
			background-color: #2b2f50;
			color: #BFC0C4;
		}

		.login,
		#login,
		.grimlock-login--fullscreen-right:after,
		.grimlock-login--fullscreen-left:after {
			background-color: rgba(33, 31, 42, .1) !important;
		}

		::selection { background-color: rgba(103, 87, 214, .28); }
		::-moz-selection { background-color: rgba(103, 87, 214, .28); }
		.login,
		.login form .input,
		.login input[type="text"],
		.login #backtoblog a {
			font-family: Barlow, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			font-size: 1rem;
			font-weight: 400;
		    letter-spacing: 0px;
		    line-height: 1.6;
		    text-transform: none;
		    color: #BFC0C4;
		}

		.login .message {
			background-color: #BFC0C4;
		}

		.login label,
		.login form .forgetmenot label {
			font-size: 1rem;
		}

		a {
			color: #6757D6;
		}
		a:active,
		a:hover,
		a:focus,
		.login #backtoblog a:hover,
		.login #backtoblog a:focus {
			color: #8679dc;
		}


		.login #nav a:hover,
		.login #nav a:active,
		.login #nav a:focus {
			background-color: rgba(242, 244, 255, .04);
		}

		

		:root {
			--grimlock-login-custom-logo: url('http://classic.armadon-theme.com/wp-content/uploads/sites/11/2021/04/armadon-icon.png');
			--grimlock-login-custom-logo-background-color: #1B1A23;
			--grimlock-login-custom-logo-size: 125px;
		}
			body.login {
				background-image: url('http://classic.armadon-theme.com/wp-content/uploads/sites/11/2021/04/page-login.jpg');
			}
			body.login:after {
				opacity: 1;
			}
			body.login #login #backtoblog {
				color: #fff !important;
			}
			body.login #login {
				border: 0 !important;
			}
			body.login:before {
				border: 0 !important;
			}
			body.login #login .privacy-policy-page-link a,
			body.login #login .privacy-policy-page-link a:hover {
				color: #fff !important;
			    background: rgba(0, 0, 0, 0.3) !important;
			}
</style>
<link rel='stylesheet' id='grimlock-login-google-fonts-css'  href='https://fonts.googleapis.com/css?family=Barlow%3A400%2C700&#038;subset=latin%2Clatin-ext&#038;ver=5.7.2' type='text/css' media='all' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-en-us grimlock-login--fullscreen-left">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://classic.armadon-theme.com/">Armadon Classic – Community BuddyPress Theme for Gamers</a></h1>
	<div class="message">Username : <strong>demosaurus</strong><br/>Password : <strong>demo_ARMADON%themeforest</strong></div>

		<form name="loginform" id="loginform" action="https://classic.armadon-theme.com/wp-login.php" method="post">
			<p>
				<label for="user_login">Username or Email Address</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Password</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> <label for="rememberme">Remember Me</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
									<input type="hidden" name="redirect_to" value="https://classic.armadon-theme.com" />
									<input type="hidden" name="testcookie" value="1" />
			</p>
		</form>

					<p id="nav">
				<a href="https://classic.armadon-theme.com/register/">Register</a> | 				<a href="https://armadon-theme.com/wp-login.php?action=lostpassword">Lost your password?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog">
			<a href="https://classic.armadon-theme.com/">&larr; Go to Armadon Classic</a>		</p>
		<div class="privacy-policy-page-link"><a class="privacy-policy-link" href="https://classic.armadon-theme.com/privacy-policy/">Privacy Policy</a></div>	</div>
	<script type='text/javascript' src='https://classic.armadon-theme.com/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='https://classic.armadon-theme.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' id='zxcvbn-async-js-extra'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/classic.armadon-theme.com\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='https://classic.armadon-theme.com/wp-includes/js/zxcvbn-async.min.js?ver=1.0' id='zxcvbn-async-js'></script>
<script type='text/javascript' src='https://classic.armadon-theme.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="https://classic.armadon-theme.com/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="https://classic.armadon-theme.com/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="https://classic.armadon-theme.com/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="https://classic.armadon-theme.com/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="https://classic.armadon-theme.com/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="https://classic.armadon-theme.com/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="https://classic.armadon-theme.com/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>' );
</script>
<script type='text/javascript' src='https://classic.armadon-theme.com/wp-includes/js/dist/hooks.min.js?ver=50e23bed88bcb9e6e14023e9961698c1' id='wp-hooks-js'></script>
<script type='text/javascript' src='https://classic.armadon-theme.com/wp-includes/js/dist/i18n.min.js?ver=db9a9a37da262883343e941c3731bc67' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type='text/javascript' id='password-strength-meter-js-extra'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' src='https://classic.armadon-theme.com/wp-admin/js/password-strength-meter.min.js?ver=5.7.2' id='password-strength-meter-js'></script>
<script src='https://classic.armadon-theme.com/wp-content/plugins/the-events-calendar/common/src/resources/js/underscore-before.js'></script>
<script type='text/javascript' src='https://classic.armadon-theme.com/wp-includes/js/underscore.min.js?ver=1.8.3' id='underscore-js'></script>
<script src='https://classic.armadon-theme.com/wp-content/plugins/the-events-calendar/common/src/resources/js/underscore-after.js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://classic.armadon-theme.com/wp-includes/js/wp-util.min.js?ver=5.7.2' id='wp-util-js'></script>
<script type='text/javascript' id='user-profile-js-extra'>
/* <![CDATA[ */
var userProfileL10n = {"user_id":"0","nonce":"efad56513b"};
/* ]]> */
</script>
<script type='text/javascript' id='user-profile-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' src='https://classic.armadon-theme.com/wp-admin/js/user-profile.min.js?ver=5.7.2' id='user-profile-js'></script>
	<div class="clear"></div>
	</body>
	</html>
	