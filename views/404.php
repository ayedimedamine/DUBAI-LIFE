<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />		
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<link rel="profile" href="http://gmpg.org/xfn/11" />






<title>Page non trouvée &#8211; The Dubai Life</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='//stackpath.bootstrapcdn.com' />
<link rel='dns-prefetch' href='//code.jquery.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="The Dubai Life &raquo; Flux" href="https://the-dubai-life.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="The Dubai Life &raquo; Flux des commentaires" href="https://the-dubai-life.com/comments/feed/" />
<link rel="alternate" type="text/calendar" title="The Dubai Life &raquo; Flux iCal" href="https://the-dubai-life.com/events/?ical=1" />
		<!-- This site uses the Google Analytics by MonsterInsights plugin v8.5.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
							<script src="//www.googletagmanager.com/gtag/js?id=UA-222155570-1"  data-cfasync="false" data-wpfc-render="false" type="text/javascript" async></script>
			<script data-cfasync="false" data-wpfc-render="false" type="text/javascript">
				var mi_version = '8.5.0';
				var mi_track_user = true;
				var mi_no_track_reason = '';
				
								var disableStrs = [
															'ga-disable-UA-222155570-1',
									];

				/* Function to detect opted out users */
				function __gtagTrackerIsOptedOut() {
					for ( var index = 0; index < disableStrs.length; index++ ) {
						if ( document.cookie.indexOf( disableStrs[ index ] + '=true' ) > -1 ) {
							return true;
						}
					}

					return false;
				}

				/* Disable tracking if the opt-out cookie exists. */
				if ( __gtagTrackerIsOptedOut() ) {
					for ( var index = 0; index < disableStrs.length; index++ ) {
						window[ disableStrs[ index ] ] = true;
					}
				}

				/* Opt-out function */
				function __gtagTrackerOptout() {
					for ( var index = 0; index < disableStrs.length; index++ ) {
						document.cookie = disableStrs[ index ] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
						window[ disableStrs[ index ] ] = true;
					}
				}

				if ( 'undefined' === typeof gaOptout ) {
					function gaOptout() {
						__gtagTrackerOptout();
					}
				}
								window.dataLayer = window.dataLayer || [];

				window.MonsterInsightsDualTracker = {
					helpers: {},
					trackers: {},
				};
				if ( mi_track_user ) {
					function __gtagDataLayer() {
						dataLayer.push( arguments );
					}

					function __gtagTracker( type, name, parameters ) {
						if (!parameters) {
							parameters = {};
						}

						if (parameters.send_to) {
							__gtagDataLayer.apply( null, arguments );
							return;
						}

						if ( type === 'event' ) {
							
															parameters.send_to = monsterinsights_frontend.ua;
								__gtagDataLayer( type, name, parameters );
													} else {
							__gtagDataLayer.apply( null, arguments );
						}
					}
					__gtagTracker( 'js', new Date() );
					__gtagTracker( 'set', {
						'developer_id.dZGIzZG' : true,
											} );
															__gtagTracker( 'config', 'UA-222155570-1', {"forceSSL":"true","link_attribution":"true","page_path":'\/404.html?page=' + document.location.pathname + document.location.search + '&from=' + document.referrer} );
										window.gtag = __gtagTracker;											(function () {
							/* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
							/* ga and __gaTracker compatibility shim. */
							var noopfn = function () {
								return null;
							};
							var newtracker = function () {
								return new Tracker();
							};
							var Tracker = function () {
								return null;
							};
							var p = Tracker.prototype;
							p.get = noopfn;
							p.set = noopfn;
							p.send = function (){
								var args = Array.prototype.slice.call(arguments);
								args.unshift( 'send' );
								__gaTracker.apply(null, args);
							};
							var __gaTracker = function () {
								var len = arguments.length;
								if ( len === 0 ) {
									return;
								}
								var f = arguments[len - 1];
								if ( typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function' ) {
									if ( 'send' === arguments[0] ) {
										var hitConverted, hitObject = false, action;
										if ( 'event' === arguments[1] ) {
											if ( 'undefined' !== typeof arguments[3] ) {
												hitObject = {
													'eventAction': arguments[3],
													'eventCategory': arguments[2],
													'eventLabel': arguments[4],
													'value': arguments[5] ? arguments[5] : 1,
												}
											}
										}
										if ( 'pageview' === arguments[1] ) {
											if ( 'undefined' !== typeof arguments[2] ) {
												hitObject = {
													'eventAction': 'page_view',
													'page_path' : arguments[2],
												}
											}
										}
										if ( typeof arguments[2] === 'object' ) {
											hitObject = arguments[2];
										}
										if ( typeof arguments[5] === 'object' ) {
											Object.assign( hitObject, arguments[5] );
										}
										if ( 'undefined' !== typeof arguments[1].hitType ) {
											hitObject = arguments[1];
											if ( 'pageview' === hitObject.hitType ) {
												hitObject.eventAction = 'page_view';
											}
										}
										if ( hitObject ) {
											action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
											hitConverted = mapArgs( hitObject );
											__gtagTracker( 'event', action, hitConverted );
										}
									}
									return;
								}

								function mapArgs( args ) {
									var arg, hit = {};
									var gaMap = {
										'eventCategory': 'event_category',
										'eventAction': 'event_action',
										'eventLabel': 'event_label',
										'eventValue': 'event_value',
										'nonInteraction': 'non_interaction',
										'timingCategory': 'event_category',
										'timingVar': 'name',
										'timingValue': 'value',
										'timingLabel': 'event_label',
										'page' : 'page_path',
										'location' : 'page_location',
										'title' : 'page_title',
									};
									for ( arg in args ) {
																				if ( ! ( ! args.hasOwnProperty(arg) || ! gaMap.hasOwnProperty(arg) ) ) {
											hit[gaMap[arg]] = args[arg];
										} else {
											hit[arg] = args[arg];
										}
									}
									return hit;
								}

								try {
									f.hitCallback();
								} catch ( ex ) {
								}
							};
							__gaTracker.create = newtracker;
							__gaTracker.getByName = newtracker;
							__gaTracker.getAll = function () {
								return [];
							};
							__gaTracker.remove = noopfn;
							__gaTracker.loaded = true;
							window['__gaTracker'] = __gaTracker;
						})();
									} else {
										console.log( "" );
					( function () {
							function __gtagTracker() {
								return null;
							}
							window['__gtagTracker'] = __gtagTracker;
							window['gtag'] = __gtagTracker;
					} )();
									}
			</script>
				<!-- / Google Analytics by MonsterInsights -->
		<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/the-dubai-life.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.3"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://the-dubai-life.com/wp-includes/css/dist/block-library/style.min.css?ver=5.9.3' type='text/css' media='all' />
<style id='wp-block-library-inline-css' type='text/css'>
.has-text-align-justify{text-align:justify;}
</style>
<style id='wp-block-library-theme-inline-css' type='text/css'>
.wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-code>code{font-family:Menlo,Consolas,monaco,monospace;color:#1e1e1e;padding:.8em 1em;border:1px solid #ddd;border-radius:4px}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-group:where(.has-background){padding:1.25em 2.375em}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto;opacity:.4}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{padding:.5em;border:1px solid;word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}
</style>
<link rel='stylesheet' id='activecampaign-form-block-css'  href='https://the-dubai-life.com/wp-content/plugins/activecampaign-subscription-forms/activecampaign-form-block/build/style-index.css?ver=1646234064' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css'  href='https://the-dubai-life.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.16' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='https://the-dubai-life.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=5.9.3' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='https://the-dubai-life.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.6' type='text/css' media='all' />
<link rel='stylesheet' id='es-select2-style-css'  href='https://the-dubai-life.com/wp-content/plugins/estatik/admin/assets/css/vendor/select2.min.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='es-magnific-style-css'  href='https://the-dubai-life.com/wp-content/plugins/estatik/assets/css/vendor/magnific-popup.min.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='es-front-style-css'  href='https://the-dubai-life.com/wp-content/plugins/estatik/assets/css/custom/front.min.css?ver=5.9.3' type='text/css' media='all' />
<style id='es-front-style-inline-css' type='text/css'>

            .es-cluster { background: #d1a046 }
            .es-cluster:before { background: #d1a046 }
        
.es-btn-orange-bordered, .es-button-orange-corner, .js-es-request-form-show { border: 1px solid #d1a046!important; color:#d1a046; }.es-btn-orange-bordered:hover, .es-button-orange-corner:hover, .js-es-request-form-show:hover { background: #d1a046!important; }.es-search__wrapper .es-search__field .es-field__wrap .select2 .select2-selection__choice { background: #d1a046!important }.es-manage-property__tab .es-field .select2-selection__choice, .es-manage-property__tab .es-field__wrapper .select2-selection__choice { background: #d1a046!important }.es-button-orange { background: #d1a046!important }.es-button-gray { background: #9e9e9e!important }.es-widget > div:not(.es-map-property-layout-horizontal) { background: #f0f0f0!important }.es-login__wrap, .es-table thead { background: #f0f0f0!important }.es-slide .es-slide__content, .es-slide .es-slide__content .es-price { background: #f0f0f0!important }.es-btn-orange, .es-button-orange { background: #d1a046!important }.es-btn-orange:hover { border: 1px solid #d1a046!important; color:#d1a046 !important; }.es-button-gray { background: #9e9e9e!important; border: 1px solid #9e9e9e !important; }.es-widget > div:not(.es-map-property-layout-horizontal, .es-map-property-layout-vertical) { background: #f0f0f0!important }.es-listing .es-property-inner:hover { border:1px solid #1d1d1d!important }.es-layout-3_col .es-property-inner:hover .es-details-wrap, .es-layout-2_col .es-property-inner:hover .es-details-wrap {border:1px solid #1d1d1d!important; border-top: 0!important;}.es-single .es-share-wrapper a:hover { border:1px solid #1d1d1d!important }.es-layout-3_col .properties .es-bottom-info, .es-layout-2_col .properties .es-bottom-info { background: #f0f0f0!important }.es-layout-3_col .es-details-wrap, .es-layout-2_col .es-details-wrap { background: #f0f0f0!important }.es-layout-list .es-price { background: #f0f0f0!important }.es-single .es-price { background: #f0f0f0!important }.es-single-tabs-wrap ul.es-single-tabs li a:not(.active) { background: #f0f0f0!important }.es-list-dropdown li:hover { background: #f0f0f0!important }.page-numbers.current, .page-numbers a:hover { color: #d1a046!important }.page-numbers li { display: inline-block; }.js-es-wishlist-button .fa { color: #d1a046 }.es-share-wrapper .js-es-wishlist-button .fa { color: #000 }.es-share-wrapper .js-es-wishlist-button.active .fa { color: #d1a046!important }.es-profile__wrapper--horizontal li.active { border-top: 3px solid #d1a046!important }.es-profile__wrapper--horizontal li.active a { color: #d1a046!important }.es-inline-buttons li.es-i-button-green { background: #d1a046!important }.es-profile__wrapper--vertical .es-profile__tabs-wrapper li.active { border-right: 3px solid #d1a046!important }.es-profile__wrapper--vertical .es-profile__tabs-wrapper li.active a { color: #d1a046!important }
</style>
<link rel='stylesheet' id='es-front-archive-style-css'  href='https://the-dubai-life.com/wp-content/plugins/estatik/assets/css/custom/front-archive.min.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='es-font-awesome-css'  href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-css'  href='//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='wsl-widget-css'  href='https://the-dubai-life.com/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpml-legacy-horizontal-list-0-css'  href='//the-dubai-life.com/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/style.min.css?ver=1' type='text/css' media='all' />
<style id='wpml-legacy-horizontal-list-0-inline-css' type='text/css'>
.wpml-ls-statics-footer a {color:#444444;background-color:#ffffff;}.wpml-ls-statics-footer a:hover,.wpml-ls-statics-footer a:focus {color:#000000;background-color:#eeeeee;}.wpml-ls-statics-footer .wpml-ls-current-language>a {color:#444444;background-color:#ffffff;}.wpml-ls-statics-footer .wpml-ls-current-language:hover>a, .wpml-ls-statics-footer .wpml-ls-current-language>a:focus {color:#000000;background-color:#eeeeee;}
</style>
<link rel='stylesheet' id='hfe-style-css'  href='https://the-dubai-life.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.10' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='https://the-dubai-life.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.15.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='https://the-dubai-life.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.6.5' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-11-css'  href='https://the-dubai-life.com/wp-content/uploads/elementor/css/post-11.css?ver=1651075361' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-pro-css'  href='https://the-dubai-life.com/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.6.5' type='text/css' media='all' />
<link rel='stylesheet' id='uael-frontend-css'  href='https://the-dubai-life.com/wp-content/plugins/ultimate-elementor/assets/min-css/uael-frontend.min.css?ver=1.36.5' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css'  href='https://the-dubai-life.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=4.9.11' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css'  href='https://the-dubai-life.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=5.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='https://the-dubai-life.com/wp-content/uploads/elementor/css/global.css?ver=1651075363' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-175-css'  href='https://the-dubai-life.com/wp-content/uploads/elementor/css/post-175.css?ver=1651075365' type='text/css' media='all' />
<link rel='stylesheet' id='fluentform-elementor-widget-css'  href='https://the-dubai-life.com/wp-content/plugins/fluentform/public/css/fluent-forms-elementor-widget.css?ver=4.3.5' type='text/css' media='all' />
<link rel='stylesheet' id='hfe-widgets-style-css'  href='https://the-dubai-life.com/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.10' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-422-css'  href='https://the-dubai-life.com/wp-content/uploads/elementor/css/post-422.css?ver=1651075365' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://the-dubai-life.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome_animation-css'  href='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/fonts-awesome/css/font-awesome-animation.min.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='icomoon-css'  href='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/icomoon/css/icomoon.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/bootstrap/css/bootstrap.min.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='owl.carousel-css'  href='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/owl-carousel/assets/owl.carousel.min.css?ver=2.3.4' type='text/css' media='all' />
<link rel='stylesheet' id='light-gallery-css'  href='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/light-gallery/css/lightgallery.min.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='perffect-scrollbar-css'  href='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css?ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='g5plus_framework_style-css'  href='https://the-dubai-life.com/wp-content/themes/g5-beyot/style.css?ver=1651789030' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C300%2C400%2C600%2C700%2C900%2C100italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic%7CPoppins%3A100%2C300%2C400%2C600%2C700%2C900%2C100italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic%7CPoppins%3A100%2C300%2C400%2C600%2C700%2C900%2C100italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic%7CPoppins%3A100%2C300%2C400%2C600%2C700%2C900%2C100italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic%7CPoppins%3A100%2C300%2C400%2C600%2C700%2C900%2C100italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic%7CPoppins%3A100%2C300%2C400%2C600%2C700%2C900%2C100italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic%7CPoppins%3A100%2C300%2C400%2C600%2C700%2C900%2C100italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic%7CPoppins%3A100%2C300%2C400%2C600%2C700%2C900%2C100italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic&#038;ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='ecs-styles-css'  href='https://the-dubai-life.com/wp-content/plugins/ele-custom-skin/assets/css/ecs-style.css?ver=3.1.5' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='https://the-dubai-life.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='https://the-dubai-life.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css'  href='https://the-dubai-life.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css'  href='https://the-dubai-life.com/wp-content/plugins/jetpack/css/jetpack.css?ver=10.9' type='text/css' media='all' />
<script type='text/javascript' src='https://the-dubai-life.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' id='wpml-cookie-js-extra'>
/* <![CDATA[ */
var wpml_cookies = {"wp-wpml_current_language":{"value":"fr","expires":1,"path":"\/"}};
var wpml_cookies = {"wp-wpml_current_language":{"value":"fr","expires":1,"path":"\/"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/sitepress-multilingual-cms/res/js/cookies/language-cookie.js?ver=4.5.5' id='wpml-cookie-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=8.5.0' id='monsterinsights-frontend-script-js'></script>
<script data-cfasync="false" data-wpfc-render="false" type="text/javascript" id='monsterinsights-frontend-script-js-extra'>/* <![CDATA[ */
var monsterinsights_frontend = {"js_events_tracking":"true","download_extensions":"doc,pdf,ppt,zip,xls,docx,pptx,xlsx","inbound_paths":"[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]","home_url":"https:\/\/the-dubai-life.com","hash_tracking":"false","ua":"UA-222155570-1","v4_id":""};/* ]]> */
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/estatik/admin/assets/js/vendor/select2.min.js?ver=5.9.3' id='es-select2-script-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/estatik/assets/js/vendor/slick.min.js?ver=5.9.3' id='es-slick-script-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/estatik/admin/assets/js/vendor/jquery.star-rating-svg.js?ver=5.9.3' id='es-rating-admin-script-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.1' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Fermer","currentText":"Aujourd\u2019hui","monthNames":["janvier","f\u00e9vrier","mars","avril","mai","juin","juillet","ao\u00fbt","septembre","octobre","novembre","d\u00e9cembre"],"monthNamesShort":["Jan","F\u00e9v","Mar","Avr","Mai","Juin","Juil","Ao\u00fbt","Sep","Oct","Nov","D\u00e9c"],"nextText":"Suivant","prevText":"Pr\u00e9c\u00e9dent","dayNames":["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"],"dayNamesShort":["dim","lun","mar","mer","jeu","ven","sam"],"dayNamesMin":["D","L","M","M","J","V","S"],"dateFormat":"d MM yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/estatik/assets/js/vendor/jquery.magnific-popup.min.js?ver=5.9.3' id='es-magnific-script-js'></script>
<script type='text/javascript' id='es-front-script-js-extra'>
/* <![CDATA[ */
var Estatik = {"tr":{"system_error":"Quelque chose n'allait pas. S'il vous pla\u00eet, contactez le support.","remove_image":"Supprimer l'image","remove":"Retirer","yes":"Oui","btn_generating":"G\u00e9n\u00e9rateur","no":"Non","saved":"Enregistr\u00e9","loading_shortcode_params":"Chargement d'attributs de shortcode ...","saving":"\u00c9conomie","error":"Erreur","ok":"Ok\n","select_location":"S\u00e9lectionnez l'emplacement","sorting":"Trier par","multipleInput":"Activez-le si vous devez utiliser la fonction de s\u00e9lection multiple pour ce champ d\u00e9roulant.","confirmDeleting":"\u00cates-vous s\u00fbr de bien vouloir supprimer cet \u00e9l\u00e9ment?","retsAvailable":"La fonctionnalit\u00e9 d'int\u00e9gration RETS est disponible dans la version <a target=\"_blank\" href=\"https:\/\/estatik.net\/product\/estatik-premium-rets\/\">Premium<\/a>.\n","color":"Couleur","zoomDescription":"Si le champ de zoom est vide, Google Map calcule automatiquement le zoom.","icons":"Les ic\u00f4nes","replace_photo":"Remplacer la photo\n","loading":"Chargement","ctrl_msg":"Maintenez la touche Ctrl enfonc\u00e9e pour faire glisser plusieurs champs \u00e0 la fois.","copied":"Kopiert\n"},"settings":{"main_color":"#d1a046","cluster_enabled":1,"preload_img":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/estatik\/assets\/images\/bx_loader.gif","wishlist_nonce":"f6640d3bec","save_search_nonce":"897c17ebc5","save_search_change_method_nonce":"259f6b567b","admin_nonce":"d9a57552d6","front_nonce":"e2aa003849","isRTL":false,"pluginUrl":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/estatik\/","layout":"3_col","dateFormat":"m\/d\/y","map_zoom":"","demoFinished":"admin.php?page=es_demo&step=finished","dateTimeFormat":"m\/d\/y H:i","recaptcha_version":"v2","disable_sticky_property_top_bar":"1","responsive":{"es-layout-list":{"min":655,"max":999999},"es-layout-2_col":{"max":640,"min":0},"es-layout-3_col":{"min":620,"max":999999}},"markers":{"marker1":"PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSIyNyIgaGVpZ2h0PSIyNCI+PGcgdHJhbnNmb3JtPSJzY2FsZSgwLjAyNzM0Mzc1IDAuMDI3MzQzNzUpIj48cGF0aCBkPSJNMTgyLjg1NyAxNDYuMjg2YzAgMjYuMjg2LTE0LjI4NiA0OS43MTQtMzYuNTcxIDYyLjg1N3Y3MjMuNDI5YzAgOS43MTQtOC41NzEgMTguMjg2LTE4LjI4NiAxOC4yODZoLTM2LjU3MWMtOS43MTQgMC0xOC4yODYtOC41NzEtMTguMjg2LTE4LjI4NnYtNzIzLjQyOWMtMjIuMjg2LTEzLjE0My0zNi41NzEtMzYuNTcxLTM2LjU3MS02Mi44NTcgMC00MC41NzEgMzIuNTcxLTczLjE0MyA3My4xNDMtNzMuMTQzczczLjE0MyAzMi41NzEgNzMuMTQzIDczLjE0M3pNMTAyNCAxODIuODU3djQzNmMwIDIxLjE0My0xMy4xNDMgMjkuMTQzLTI5LjcxNCAzNy43MTQtNjQuNTcxIDM0Ljg1Ny0xMzYgNjYuMjg2LTIxMC44NTcgNjYuMjg2LTEwNS4xNDMgMC0xNTUuNDI5LTgwLTI4MC04MC05MC44NTcgMC0xODYuMjg2IDQxLjE0My0yNjUuMTQzIDgzLjQyOS02LjI4NiAzLjQyOS0xMiA1LjE0My0xOC44NTcgNS4xNDMtMjAgMC0zNi41NzEtMTYuNTcxLTM2LjU3MS0zNi41NzF2LTQyNGMwLTEzLjcxNCA2Ljg1Ny0yMy40MjkgMTcuNzE0LTMxLjQyOSAxMy43MTQtOS4xNDMgMzAuMjg2LTE3LjE0MyA0NS4xNDMtMjQuNTcxIDcyLTM2LjU3MSAxNTkuNDI5LTY4LjU3MSAyNDAuNTcxLTY4LjU3MSA4OS43MTQgMCAxNjAgMjkuNzE0IDIzOS40MjkgNjYuODU3IDE2IDggMzIuNTcxIDEwLjg1NyA1MC4yODYgMTAuODU3IDg5LjcxNCAwIDE4Ni4yODYtNzcuNzE0IDIxMS40MjktNzcuNzE0IDIwIDAgMzYuNTcxIDE2LjU3MSAzNi41NzEgMzYuNTcxeiI+PC9wYXRoPjwvZz48L3N2Zz4=","marker2":"PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSIxNiIgaGVpZ2h0PSIyNiI+PGcgdHJhbnNmb3JtPSJzY2FsZSgwLjAyNzM0Mzc1IDAuMDI3MzQzNzUpIj48cGF0aCBkPSJNNDM4Ljg1NyAzNjUuNzE0YzAtODAuNTcxLTY1LjcxNC0xNDYuMjg2LTE0Ni4yODYtMTQ2LjI4NnMtMTQ2LjI4NiA2NS43MTQtMTQ2LjI4NiAxNDYuMjg2IDY1LjcxNCAxNDYuMjg2IDE0Ni4yODYgMTQ2LjI4NiAxNDYuMjg2LTY1LjcxNCAxNDYuMjg2LTE0Ni4yODZ6TTU4NS4xNDMgMzY1LjcxNGMwIDM0Ljg1Ny00IDcwLjg1Ny0xOC44NTcgMTAyLjI4NmwtMjA4IDQ0Mi4yODZjLTEyIDI1LjE0My0zOC4yODYgNDAuNTcxLTY1LjcxNCA0MC41NzFzLTUzLjcxNC0xNS40MjktNjUuMTQzLTQwLjU3MWwtMjA4LjU3MS00NDIuMjg2Yy0xNC44NTctMzEuNDI5LTE4Ljg1Ny02Ny40MjktMTguODU3LTEwMi4yODYgMC0xNjEuNzE0IDEzMC44NTctMjkyLjU3MSAyOTIuNTcxLTI5Mi41NzFzMjkyLjU3MSAxMzAuODU3IDI5Mi41NzEgMjkyLjU3MXoiPjwvcGF0aD48L2c+PC9zdmc+","marker3":"PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNiI+PGcgdHJhbnNmb3JtPSJzY2FsZSgwLjAyNzM0Mzc1IDAuMDI3MzQzNzUpIj48cGF0aCBkPSJNNTg1LjE0MyA1MTJjMCA4MC41NzEtNjUuNzE0IDE0Ni4yODYtMTQ2LjI4NiAxNDYuMjg2cy0xNDYuMjg2LTY1LjcxNC0xNDYuMjg2LTE0Ni4yODYgNjUuNzE0LTE0Ni4yODYgMTQ2LjI4Ni0xNDYuMjg2IDE0Ni4yODYgNjUuNzE0IDE0Ni4yODYgMTQ2LjI4NnpNNDM4Ljg1NyAyMDEuMTQzYy0xNzEuNDI5IDAtMzEwLjg1NyAxMzkuNDI5LTMxMC44NTcgMzEwLjg1N3MxMzkuNDI5IDMxMC44NTcgMzEwLjg1NyAzMTAuODU3IDMxMC44NTctMTM5LjQyOSAzMTAuODU3LTMxMC44NTctMTM5LjQyOS0zMTAuODU3LTMxMC44NTctMzEwLjg1N3pNODc3LjcxNCA1MTJjMCAyNDIuMjg2LTE5Ni41NzEgNDM4Ljg1Ny00MzguODU3IDQzOC44NTdzLTQzOC44NTctMTk2LjU3MS00MzguODU3LTQzOC44NTcgMTk2LjU3MS00MzguODU3IDQzOC44NTctNDM4Ljg1N3YwYzI0Mi4yODYgMCA0MzguODU3IDE5Ni41NzEgNDM4Ljg1NyA0MzguODU3eiI+PC9wYXRoPjwvZz48L3N2Zz4="},"decoded_markers":{"marker1":"<svg version=\"1.1\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" width=\"27\" height=\"24\"><g transform=\"scale(0.02734375 0.02734375)\"><path d=\"M182.857 146.286c0 26.286-14.286 49.714-36.571 62.857v723.429c0 9.714-8.571 18.286-18.286 18.286h-36.571c-9.714 0-18.286-8.571-18.286-18.286v-723.429c-22.286-13.143-36.571-36.571-36.571-62.857 0-40.571 32.571-73.143 73.143-73.143s73.143 32.571 73.143 73.143zM1024 182.857v436c0 21.143-13.143 29.143-29.714 37.714-64.571 34.857-136 66.286-210.857 66.286-105.143 0-155.429-80-280-80-90.857 0-186.286 41.143-265.143 83.429-6.286 3.429-12 5.143-18.857 5.143-20 0-36.571-16.571-36.571-36.571v-424c0-13.714 6.857-23.429 17.714-31.429 13.714-9.143 30.286-17.143 45.143-24.571 72-36.571 159.429-68.571 240.571-68.571 89.714 0 160 29.714 239.429 66.857 16 8 32.571 10.857 50.286 10.857 89.714 0 186.286-77.714 211.429-77.714 20 0 36.571 16.571 36.571 36.571z\"><\/path><\/g><\/svg>","marker2":"<svg version=\"1.1\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" width=\"16\" height=\"26\"><g transform=\"scale(0.02734375 0.02734375)\"><path d=\"M438.857 365.714c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM585.143 365.714c0 34.857-4 70.857-18.857 102.286l-208 442.286c-12 25.143-38.286 40.571-65.714 40.571s-53.714-15.429-65.143-40.571l-208.571-442.286c-14.857-31.429-18.857-67.429-18.857-102.286 0-161.714 130.857-292.571 292.571-292.571s292.571 130.857 292.571 292.571z\"><\/path><\/g><\/svg>","marker3":"<svg version=\"1.1\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"  width=\"24\" height=\"26\"><g transform=\"scale(0.02734375 0.02734375)\"><path d=\"M585.143 512c0 80.571-65.714 146.286-146.286 146.286s-146.286-65.714-146.286-146.286 65.714-146.286 146.286-146.286 146.286 65.714 146.286 146.286zM438.857 201.143c-171.429 0-310.857 139.429-310.857 310.857s139.429 310.857 310.857 310.857 310.857-139.429 310.857-310.857-139.429-310.857-310.857-310.857zM877.714 512c0 242.286-196.571 438.857-438.857 438.857s-438.857-196.571-438.857-438.857 196.571-438.857 438.857-438.857v0c242.286 0 438.857 196.571 438.857 438.857z\"><\/path><\/g><\/svg>"},"default_marker":{"color":"#F13592","marker":"<svg version=\"1.1\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" width=\"27\" height=\"24\"><g transform=\"scale(0.02734375 0.02734375)\"><path d=\"M182.857 146.286c0 26.286-14.286 49.714-36.571 62.857v723.429c0 9.714-8.571 18.286-18.286 18.286h-36.571c-9.714 0-18.286-8.571-18.286-18.286v-723.429c-22.286-13.143-36.571-36.571-36.571-62.857 0-40.571 32.571-73.143 73.143-73.143s73.143 32.571 73.143 73.143zM1024 182.857v436c0 21.143-13.143 29.143-29.714 37.714-64.571 34.857-136 66.286-210.857 66.286-105.143 0-155.429-80-280-80-90.857 0-186.286 41.143-265.143 83.429-6.286 3.429-12 5.143-18.857 5.143-20 0-36.571-16.571-36.571-36.571v-424c0-13.714 6.857-23.429 17.714-31.429 13.714-9.143 30.286-17.143 45.143-24.571 72-36.571 159.429-68.571 240.571-68.571 89.714 0 160 29.714 239.429 66.857 16 8 32.571 10.857 50.286 10.857 89.714 0 186.286-77.714 211.429-77.714 20 0 36.571 16.571 36.571 36.571z\"><\/path><\/g><\/svg>","anchor":{"x":0,"y":24}},"infoWindowWidth":380,"is_lightbox_disabled":"1","listingsLink":"https:\/\/the-dubai-life.com\/wp-admin\/edit.php?post_type=properties"},"widgets":{"search":{"initPriority":{"country":["state","province","city"],"state":["city","province"],"province":["city","street"],"city":["street","neighborhood"],"street":["neighborhood"],"neighborhood":[]}}},"ajaxurl":"https:\/\/the-dubai-life.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/estatik/assets/js/custom/front.min.js?ver=5.9.3' id='es-front-script-js'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAkOEQgMfHFGGP0BgChzlz4Gl3igHW0d_Y&#038;libraries=places&#038;language=fr&#038;ver=5.9.3' id='es-admin-googlemap-api-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/estatik/assets/js/custom/map.min.js?ver=5.9.3' id='es-admin-map-script-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/estatik/assets/js/custom/front-archive.min.js?ver=5.9.3' id='es-front-archive-script-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=5.1.1' id='font-awesome-4-shim-js'></script>
<script type='text/javascript' id='ecs_ajax_load-js-extra'>
/* <![CDATA[ */
var ecs_ajax_params = {"ajaxurl":"https:\/\/the-dubai-life.com\/wp-admin\/admin-ajax.php","posts":"{\"page\":0,\"name\":\"ss\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"pagename\":\"\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"post_type\":[\"post\",\"page\",\"e-landing-page\"],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"};
/* ]]> */
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/ele-custom-skin/assets/js/ecs_ajax_pagination.js?ver=3.1.5' id='ecs_ajax_load-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/ele-custom-skin/assets/js/ecs.js?ver=3.1.5' id='ecs-script-js'></script>
<link rel="https://api.w.org/" href="https://the-dubai-life.com/wp-json/" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://the-dubai-life.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://the-dubai-life.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.9.3" />
<meta name="generator" content="WPML ver:4.5.5 stt:5,1,4;" />
<script type="text/javascript">window.ccb_nonces = {"ccb_paypal":"5b30d37d73","ccb_stripe":"12d10e6696","ccb_contact_form":"fd3256a191","ccb_woo_checkout":"4c2d6c2c7b","ccb_add_order":"1fd4a5067c","ccb_orders":"8acc4d2072","ccb_update_order":"5a8ac0fba1"};</script><script type="text/javascript" src="https://www.videoask.com/embed/embed.js"></script><script type="text/javascript" src="https://the-dubai-life.com/wp-content/plugins/videoask/dist/videoask-elements.js"></script><meta name="et-api-version" content="v1"><meta name="et-api-origin" content="https://the-dubai-life.com"><link rel="https://theeventscalendar.com/" href="https://the-dubai-life.com/wp-json/tribe/tickets/v1/" /><meta name="tec-api-version" content="v1"><meta name="tec-api-origin" content="https://the-dubai-life.com"><link rel="alternate" href="https://the-dubai-life.com/wp-json/tribe/events/v1/" /><style type='text/css'>img#wpstats{display:none}</style>
	<meta name="generator" content="Powered by Slider Revolution 6.5.20 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="https://the-dubai-life.com/wp-content/uploads/2022/02/cropped-Logo1-100x100.png" sizes="32x32" />
<link rel="icon" href="https://the-dubai-life.com/wp-content/uploads/2022/02/cropped-Logo1-300x300.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://the-dubai-life.com/wp-content/uploads/2022/02/cropped-Logo1-300x300.png" />
<meta name="msapplication-TileImage" content="https://the-dubai-life.com/wp-content/uploads/2022/02/cropped-Logo1-300x300.png" />
<script>function setREVStartSize(e){
			//window.requestAnimationFrame(function() {
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
				try {
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
					if(e.layout==="fullscreen" || e.l==="fullscreen")
						newh = Math.max(e.mh,window.RSIH);
					else{
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,
							sl;
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					var el = document.getElementById(e.c);
					if (el!==null && el) el.style.height = newh+"px";
					el = document.getElementById(e.c+"_wrapper");
					if (el!==null && el) {
						el.style.height = newh+"px";
						el.style.display = "block";
					}
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}
			//});
		  };</script>
</head>
<body class="error404 wp-custom-logo wp-embed-responsive es-theme-light tribe-no-js ehf-template-g5-beyot ehf-stylesheet-g5-beyot beyot-class safari has-sidebar elementor-default elementor-kit-11 tribe-theme-g5-beyot">

		<div data-elementor-type="header" data-elementor-id="175" class="elementor elementor-175 elementor-location-header">
								<section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-64ab26d elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="64ab26d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-21be9d2" data-id="21be9d2" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-80b2705 elementor-widget elementor-widget-image" data-id="80b2705" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.6.5 - 27-04-2022 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>													<a href="https://the-dubai-life.com/">
							<img width="400" height="488" src="https://the-dubai-life.com/wp-content/uploads/2022/02/Logo1.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://the-dubai-life.com/wp-content/uploads/2022/02/Logo1.png 400w, https://the-dubai-life.com/wp-content/uploads/2022/02/Logo1-246x300.png 246w" sizes="(max-width: 400px) 100vw, 400px" />								</a>
															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-712b028" data-id="712b028" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-3f908c2 elementor-nav-menu__align-right elementor-nav-menu--dropdown-mobile elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="3f908c2" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="https://the-dubai-life.com/wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css">			<nav migration_allowed="1" migrated="0" role="navigation" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-text e--animation-sink">
				<ul id="menu-1-3f908c2" class="elementor-nav-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2732"><a href="#" class="elementor-item elementor-item-anchor">Immobilier</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2731"><a href="https://the-dubai-life.com/immobilier/" class="elementor-sub-item">Immobilier à Dubai</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2730"><a href="https://the-dubai-life.com/nos-biens-immobiliers/" class="elementor-sub-item">Nos Biens Immobiliers</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4719"><a href="https://the-dubai-life.com/damac-lagoons/" class="elementor-sub-item">Damac Lagoons</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3160"><a href="https://the-dubai-life.com/formulaire/" class="elementor-sub-item">Formulaire d&rsquo;interêt pour un bien immobilier</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1811"><a href="https://the-dubai-life.com/expatriation/" class="elementor-item">S&rsquo;installer à Dubai</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-659"><a href="https://the-dubai-life.com/creer-une-entreprise/" class="elementor-item">Business</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3180"><a href="https://the-dubai-life.com/investir/" class="elementor-item">Investir</a></li>
</ul>			</nav>
					<div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Permuter le menu" aria-expanded="false">
			<i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i>			<span class="elementor-screen-only">Menu</span>
		</div>
			<nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation" aria-hidden="true">
				<ul id="menu-2-3f908c2" class="elementor-nav-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2732"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Immobilier</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2731"><a href="https://the-dubai-life.com/immobilier/" class="elementor-sub-item" tabindex="-1">Immobilier à Dubai</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2730"><a href="https://the-dubai-life.com/nos-biens-immobiliers/" class="elementor-sub-item" tabindex="-1">Nos Biens Immobiliers</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4719"><a href="https://the-dubai-life.com/damac-lagoons/" class="elementor-sub-item" tabindex="-1">Damac Lagoons</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3160"><a href="https://the-dubai-life.com/formulaire/" class="elementor-sub-item" tabindex="-1">Formulaire d&rsquo;interêt pour un bien immobilier</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1811"><a href="https://the-dubai-life.com/expatriation/" class="elementor-item" tabindex="-1">S&rsquo;installer à Dubai</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-659"><a href="https://the-dubai-life.com/creer-une-entreprise/" class="elementor-item" tabindex="-1">Business</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3180"><a href="https://the-dubai-life.com/investir/" class="elementor-item" tabindex="-1">Investir</a></li>
</ul>			</nav>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c63d6c7" data-id="c63d6c7" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7a6f314 elementor-view-default elementor-widget elementor-widget-icon" data-id="7a6f314" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<a class="elementor-icon" href="tel:+971585823822">
			<i aria-hidden="true" class="fas fa-phone-alt"></i>			</a>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-9116c54" data-id="9116c54" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-dc87d01 elementor-view-default elementor-widget elementor-widget-icon" data-id="dc87d01" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<a class="elementor-icon" href="https://wa.me/+971585823822">
			<i aria-hidden="true" class="fab fa-whatsapp"></i>			</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
						</div>
		    <div class="page404" >
        <div class="page404-content container">
            <h3 class="subtitle"></h3>
            <h2 class="title">4<span>0</span>4</h2>
            <div class="description">                                    <span class="return-text">Or back to </span>
                    <a href="https://the-dubai-life.com/">
                                            </a>
                            </div>
            <div class="search-form-wrapper">
                <div class="search-form">
                    <form role="search" class="search-form" method="get" id="searchform" action="https://the-dubai-life.com/">
                <input type="text" value="" name="s" id="s"  placeholder="ENTER YOUR  KEYWORD">
                <button type="submit"><i class="fa fa-search"></i></button>
       </form>                </div>
            </div>
        </div>
    </div>
		<div data-elementor-type="footer" data-elementor-id="422" class="elementor elementor-422 elementor-location-footer">
								<footer data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-top-section elementor-element elementor-element-6f1cc6bf elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6f1cc6bf" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2c923d1" data-id="2c923d1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-12569611 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="12569611" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-5bedebb5" data-id="5bedebb5" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-116a7df6 elementor-widget elementor-widget-heading" data-id="116a7df6" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.6.5 - 27-04-2022 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h4 class="elementor-heading-title elementor-size-default">Services</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-73c36fd6 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="73c36fd6" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="https://the-dubai-life.com/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">		<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="https://the-dubai-life.com/immobilier/">

											<span class="elementor-icon-list-text">Immobilier</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://the-dubai-life.com/expatriation/">

											<span class="elementor-icon-list-text">S'installer à Dubai</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://the-dubai-life.com/investir/">

											<span class="elementor-icon-list-text">Business</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-79702ccb" data-id="79702ccb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-6cb4969b elementor-widget elementor-widget-heading" data-id="6cb4969b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">À Propos</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-76588c84 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="76588c84" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="https://the-dubai-life.com/a-propos/">

											<span class="elementor-icon-list-text">À Propos</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://the-dubai-life.com/blog">

											<span class="elementor-icon-list-text">Blog</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://the-dubai-life.com/contact/">

											<span class="elementor-icon-list-text">Contact</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-3a7cd5a1" data-id="3a7cd5a1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-11a57c86 elementor-widget elementor-widget-heading" data-id="11a57c86" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Immobilier</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-71bd6656 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="71bd6656" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="https://the-dubai-life.com/nos-biens-immobiliers/">

											<span class="elementor-icon-list-text">Biens Immobiliers</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://the-dubai-life.com/damac-lagoons/">

											<span class="elementor-icon-list-text">Damac Lagoons</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://the-dubai-life.com/faq/">

											<span class="elementor-icon-list-text">FAQ</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-479ae1eb" data-id="479ae1eb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-651eeac9 elementor-widget elementor-widget-heading" data-id="651eeac9" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Suivez-nous</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-3040faec elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3040faec" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="https://www.instagram.com/the.dubai.life/">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fab fa-instagram"></i>						</span>
										<span class="elementor-icon-list-text">Instagram</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://www.snapchat.com/add/the-dubailife">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fab fa-snapchat-ghost"></i>						</span>
										<span class="elementor-icon-list-text">Snapchat</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-c243d82" data-id="c243d82" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-23b01ba2 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="23b01ba2" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
				<div class="elementor-widget-container">
			<style>/*! elementor-pro - v3.6.5 - 12-04-2022 */
.elementor-button.elementor-hidden,.elementor-hidden{display:none}.e-form__step{width:100%}.e-form__step:not(.elementor-hidden){display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.e-form__buttons{-ms-flex-wrap:wrap;flex-wrap:wrap}.e-form__buttons,.e-form__buttons__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex}.e-form__indicators{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-ms-flex-wrap:nowrap;flex-wrap:nowrap;font-size:13px;margin-bottom:var(--e-form-steps-indicators-spacing)}.e-form__indicators,.e-form__indicators__indicator{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.e-form__indicators__indicator{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-ms-flex-preferred-size:0;flex-basis:0;padding:0 var(--e-form-steps-divider-gap)}.e-form__indicators__indicator__progress{width:100%;position:relative;background-color:var(--e-form-steps-indicator-progress-background-color);border-radius:var(--e-form-steps-indicator-progress-border-radius);overflow:hidden}.e-form__indicators__indicator__progress__meter{width:var(--e-form-steps-indicator-progress-meter-width,0);height:var(--e-form-steps-indicator-progress-height);line-height:var(--e-form-steps-indicator-progress-height);padding-right:15px;border-radius:var(--e-form-steps-indicator-progress-border-radius);background-color:var(--e-form-steps-indicator-progress-color);color:var(--e-form-steps-indicator-progress-meter-color);text-align:right;-webkit-transition:width .1s linear;-o-transition:width .1s linear;transition:width .1s linear}.e-form__indicators__indicator:first-child{padding-left:0}.e-form__indicators__indicator:last-child{padding-right:0}.e-form__indicators__indicator--state-inactive{color:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-inactive [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-inactive-secondary-color,#fff)}.e-form__indicators__indicator--state-inactive object,.e-form__indicators__indicator--state-inactive svg{fill:var(--e-form-steps-indicator-inactive-primary-color,#c2cbd2)}.e-form__indicators__indicator--state-active{color:var(--e-form-steps-indicator-active-primary-color,#39b54a);border-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-active-secondary-color,#fff)}.e-form__indicators__indicator--state-active object,.e-form__indicators__indicator--state-active svg{fill:var(--e-form-steps-indicator-active-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed{color:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator--state-completed [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none){background-color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a)}.e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none{color:var(--e-form-steps-indicator-completed-primary-color,#39b54a);background-color:initial}.e-form__indicators__indicator--state-completed object,.e-form__indicators__indicator--state-completed svg{fill:var(--e-form-steps-indicator-completed-secondary-color,#fff)}.e-form__indicators__indicator__icon{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);font-size:var(--e-form-steps-indicator-icon-size);border-width:1px;border-style:solid;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;overflow:hidden;margin-bottom:10px}.e-form__indicators__indicator__icon img,.e-form__indicators__indicator__icon object,.e-form__indicators__indicator__icon svg{width:var(--e-form-steps-indicator-icon-size);height:auto}.e-form__indicators__indicator__icon .e-font-icon-svg{height:1em}.e-form__indicators__indicator__number{width:var(--e-form-steps-indicator-padding,30px);height:var(--e-form-steps-indicator-padding,30px);border-width:1px;border-style:solid;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;margin-bottom:10px}.e-form__indicators__indicator--shape-circle{border-radius:50%}.e-form__indicators__indicator--shape-square{border-radius:0}.e-form__indicators__indicator--shape-rounded{border-radius:5px}.e-form__indicators__indicator--shape-none{border:0}.e-form__indicators__indicator__label{text-align:center}.e-form__indicators__indicator__separator{width:100%;height:var(--e-form-steps-divider-width);background-color:#c2cbd2}.e-form__indicators--type-icon,.e-form__indicators--type-icon_text,.e-form__indicators--type-number,.e-form__indicators--type-number_text{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.e-form__indicators--type-icon .e-form__indicators__indicator__separator,.e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,.e-form__indicators--type-number .e-form__indicators__indicator__separator,.e-form__indicators--type-number_text .e-form__indicators__indicator__separator{margin-top:calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)}.elementor-field-type-hidden{display:none}.elementor-field-type-html{display:inline-block}.elementor-login .elementor-lost-password,.elementor-login .elementor-remember-me{font-size:.85em}.elementor-field-type-recaptcha_v3 .elementor-field-label{display:none}.elementor-field-type-recaptcha_v3 .grecaptcha-badge{z-index:1}.elementor-button .elementor-form-spinner{-webkit-box-ordinal-group:4;-ms-flex-order:3;order:3}.elementor-form .elementor-button>span{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.elementor-form .elementor-button .elementor-button-text{white-space:normal;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0}.elementor-form .elementor-button svg{height:auto}.elementor-form .elementor-button .e-font-icon-svg{height:1em}</style>		<form class="elementor-form" method="post" name="New Form">
			<input type="hidden" name="post_id" value="422"/>
			<input type="hidden" name="form_id" value="23b01ba2"/>
			<input type="hidden" name="referer_title" value="Page non trouvée" />

			
			<div class="elementor-form-fields-wrapper elementor-labels-">
								<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
												<label for="form-field-email" class="elementor-field-label elementor-screen-only">
								Prénom							</label>
														<input size="1" type="text" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Prénom" required="required" aria-required="true">
											</div>
								<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-field_1a68171 elementor-col-100 elementor-field-required">
												<label for="form-field-field_1a68171" class="elementor-field-label elementor-screen-only">
								Email							</label>
														<input size="1" type="email" name="form_fields[field_1a68171]" id="form-field-field_1a68171" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Email" required="required" aria-required="true">
											</div>
								<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
					<button type="submit" class="elementor-button elementor-size-md">
						<span >
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">entrer dans la zone vip</span>
													</span>
					</button>
				</div>
			</div>
		</form>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section data-particle_enable="false" data-particle-mobile-disabled="false" class="elementor-section elementor-inner-section elementor-element elementor-element-78fcf39a elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78fcf39a" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-292f4656" data-id="292f4656" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e232e56 elementor-widget elementor-widget-image" data-id="e232e56" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
																<a href="https://the-dubai-life.com/">
							<img width="400" height="488" src="https://the-dubai-life.com/wp-content/uploads/2022/02/Logo1.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://the-dubai-life.com/wp-content/uploads/2022/02/Logo1.png 400w, https://the-dubai-life.com/wp-content/uploads/2022/02/Logo1-246x300.png 246w" sizes="(max-width: 400px) 100vw, 400px" />								</a>
															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3dec18cf" data-id="3dec18cf" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-7fc87425 elementor-widget elementor-widget-heading" data-id="7fc87425" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default"><a href="https://adseendigital.com">Copyright 2022 © T R D L REAL ESTATE All rights Reserved.</a></p>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</footer>
						</div>
		

		<script>
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = true;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
		<style>.mfp-hide{display: none;}</style><div id="es-map-popup" class="mfp-hide">
            <div id="es-map-inner" class="mfp-with-anim"></div></div><div id="SHZContainer" data-source="" style="z-index: 1000; position: relative;"></div>		<script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
		</script>
		<!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v3.9.2 -->  
            <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-4  " id="ht-ctc-chat"  
                style="display: none;  position: fixed; bottom: 15px; right: 15px;"   >
                                <div class="ht_ctc_style ht_ctc_chat_style">
                
<div class="chip ctc-analytics" style="display:flex;justify-content: center;align-items: center;background-color:#e4e4e4;color:#7f7d7d;padding:0 12px;border-radius:25px;font-size:13px;line-height:32px; ">
            <span style="margin:0 8px 0 -12px;;order:0;"><svg style="pointer-events:none; display: block; height:32px; width:32px;" width="32px" height="32px" viewBox="0 0 1219.547 1225.016">
        <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"/>
        <linearGradient id="htwaicona-chat-s4" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
            <stop offset="0" stop-color="#20b038"/>
            <stop offset="1" stop-color="#60d66a"/>
        </linearGradient>
        <path fill="url(#htwaicona-chat-s4)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"/>
        <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"/>
        <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"/>
    </svg></span>
            <span class="ctc_cta">WhatsApp</span>
</div>                </div>
            </div>
                        <span class="ht_ctc_chat_data" 
                data-no_number=""
                data-settings="{&quot;number&quot;:&quot;971585823822&quot;,&quot;pre_filled&quot;:&quot;Bonjour !\r\nJ&amp;#039;aimerais avoir un peu plus d&amp;#039;informations svp...&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;}" 
            ></span>
            <script> /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activer pour trier la colonne ascendante","sort_descending":": activer pour trier la colonne descendante"},"length_menu":"Afficher les saisies _MENU_","empty_table":"Aucune donn\u00e9e disponible sur le tableau","info":"Affichant_START_ \u00e0 _END_ du _TOTAL_ des saisies","info_empty":"Affichant 0 \u00e0 0 de 0 saisies","info_filtered":"(filtr\u00e9 \u00e0 partir du total des saisies _MAX_ )","zero_records":"Aucun enregistrement correspondant trouv\u00e9","search":"Rechercher :","all_selected_text":"Tous les \u00e9l\u00e9ments de cette page ont \u00e9t\u00e9 s\u00e9lectionn\u00e9s. ","select_all_link":"S\u00e9lectionner toutes les pages","clear_selection":"Effacer la s\u00e9lection.","pagination":{"all":"Tout","next":"Suivant","previous":"Pr\u00e9c\u00e9dent"},"select":{"rows":{"0":"","_":": a s\u00e9lectionn\u00e9 %d rang\u00e9es","1":": a s\u00e9lectionn\u00e9 une rang\u00e9e"}},"datepicker":{"dayNames":["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"],"dayNamesShort":["dim","lun","mar","mer","jeu","ven","sam"],"dayNamesMin":["D","L","M","M","J","V","S"],"monthNames":["janvier","f\u00e9vrier","mars","avril","mai","juin","juillet","ao\u00fbt","septembre","octobre","novembre","d\u00e9cembre"],"monthNamesShort":["janvier","f\u00e9vrier","mars","avril","mai","juin","juillet","ao\u00fbt","septembre","octobre","novembre","d\u00e9cembre"],"monthNamesMin":["Jan","F\u00e9v","Mar","Avr","Mai","Juin","Juil","Ao\u00fbt","Sep","Oct","Nov","D\u00e9c"],"nextText":"Suivant","prevText":"Pr\u00e9c\u00e9dent","currentText":"Aujourd\u2019hui ","closeText":"Termin\u00e9","today":"Aujourd\u2019hui ","clear":"Effac\u00e9"},"registration_prompt":"Information non-sauv\u00e9e pour un participant. Voulez-vous continuer\u00a0?"};/* ]]> */ </script><div id="search_popup_wrapper" class="dialog">
	<div class="dialog__overlay"></div>
	<div class="dialog__content">
		<div class="morph-shape">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 520 280"
			     preserveAspectRatio="none">
				<rect x="3" y="3" fill="none" width="516" height="276"/>
			</svg>
		</div>
		<div class="dialog-inner">
			<h2>Enter your keyword</h2>
			<form  method="get" action="https://the-dubai-life.com/" class="search-popup-inner">
				<input type="text" name="s" placeholder="Type and hit enter...">
				<button class="bt bt-sm bt-background bt-primary" type="submit">Search</button>
			</form>
			<div><a class="action prevent-default" data-dialog-close="close" href="#"><i
						class="fa fa-close transition03"></i></a></div>
		</div>
	</div>
</div>
<div class="wpml-ls-statics-footer wpml-ls wpml-ls-legacy-list-horizontal">
	<ul><li class="wpml-ls-slot-footer wpml-ls-item wpml-ls-item-ar wpml-ls-first-item wpml-ls-item-legacy-list-horizontal">
				<a href="https://the-dubai-life.com/ar/" class="wpml-ls-link">
                                                        <img
            class="wpml-ls-flag"
            src="https://the-dubai-life.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/ar.png"
            alt=""
            width=18
            height=12
    /><span class="wpml-ls-native" lang="ar">العربية</span><span class="wpml-ls-display"><span class="wpml-ls-bracket"> (</span>Arabe<span class="wpml-ls-bracket">)</span></span></a>
			</li><li class="wpml-ls-slot-footer wpml-ls-item wpml-ls-item-en wpml-ls-item-legacy-list-horizontal">
				<a href="https://the-dubai-life.com/en/" class="wpml-ls-link">
                                                        <img
            class="wpml-ls-flag"
            src="https://the-dubai-life.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png"
            alt=""
            width=18
            height=12
    /><span class="wpml-ls-native" lang="en">English</span><span class="wpml-ls-display"><span class="wpml-ls-bracket"> (</span>Anglais<span class="wpml-ls-bracket">)</span></span></a>
			</li><li class="wpml-ls-slot-footer wpml-ls-item wpml-ls-item-fr wpml-ls-current-language wpml-ls-last-item wpml-ls-item-legacy-list-horizontal">
				<a href="https://the-dubai-life.com" class="wpml-ls-link">
                                                        <img
            class="wpml-ls-flag"
            src="https://the-dubai-life.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.png"
            alt=""
            width=18
            height=12
    /><span class="wpml-ls-native">Français</span></a>
			</li></ul>
</div>
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://the-dubai-life.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.20' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<script type='text/javascript' id='ht_ctc_app_js-js-extra'>
/* <![CDATA[ */
var ht_ctc_chat_var = {"number":"971585823822","pre_filled":"Bonjour !\r\nJ'aimerais avoir un peu plus d'informations svp...","dis_m":"show","dis_d":"show","css":"display: none; cursor: pointer; z-index: 99999999;","pos_d":"position: fixed; bottom: 15px; right: 15px;","pos_m":"position: fixed; bottom: 15px; right: 15px;","schedule":"no","se":"150","ani":"no-animations","ga":"yes","fb":"yes"};
/* ]]> */
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/js/app.js?ver=3.9.2' id='ht_ctc_app_js-js'></script>
<script type='text/javascript' id='site_tracking-js-extra'>
/* <![CDATA[ */
var php_data = {"ac_settings":{"tracking_actid":27422480,"site_tracking_default":1,"site_tracking":1},"user_email":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/activecampaign-subscription-forms/site_tracking.js?ver=5.9.3' id='site_tracking-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/the-dubai-life.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.6' id='contact-form-7-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.18' defer async id='tp-tools-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.20' defer async id='revmin-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins//owl-carousel/owl.carousel.min.js?ver=2.3.4' id='owl.carousel-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/light-gallery/js/lightgallery-all.min.js?ver=1.2.18' id='light-gallery-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/isotope/isotope.pkgd.min.js?ver=3.0.5' id='isotope-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js?ver=0.6.11' id='perfect-scrollbar-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/waypoints/jquery.waypoints.min.js?ver=4.0.1' id='jquery.waypoints-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/modernizr/modernizr.min.js?ver=3.5.0' id='modernizr-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/dialogfx/dialogfx.min.js?ver=1.0.0' id='dialogfx-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/infinite-scroll/infinite-scroll.pkgd.min.js?ver=2.0.1' id='infinite-scroll-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/jquery.nav/jquery.nav.min.js?ver=3.0.0' id='One-Page-Nav-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/stellar/jquery.stellar.js?ver=0.6.2' id='stellar-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/countdown/countdown.min.js?ver=0.6.2' id='countdown-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/waypoints/jquery.waypoints.min.js?ver=4.0.1' id='waypoints-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/matchmedia/matchmedia.min.js?ver=4.0.1' id='matchmedia-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/plugins/hc-sticky/jquery.hc-sticky.min.js?ver=1.2.43' id='hc-sticky-js'></script>
<script type='text/javascript' id='g5plus_framework_app-js-extra'>
/* <![CDATA[ */
var g5plus_framework_constant = {"carousel_next":"Next","carousel_prev":"Back"};
var g5plus_app_variable = {"ajax_url":"https:\/\/the-dubai-life.com\/wp-admin\/admin-ajax.php","theme_url":"https:\/\/the-dubai-life.com\/wp-content\/themes\/g5-beyot\/","site_url":"https:\/\/the-dubai-life.com"};
/* ]]> */
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/themes/g5-beyot/assets/js/main.js?ver=5.9.3' id='g5plus_framework_app-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1' id='smartmenus-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.6.5' id='elementor-pro-webpack-runtime-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.5' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.5' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-includes/js/dist/hooks.min.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-includes/js/dist/i18n.min.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type='text/javascript' id='elementor-pro-frontend-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "elementor-pro", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/the-dubai-life.com\/wp-admin\/admin-ajax.php","nonce":"44dd3c25d5","urls":{"assets":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/the-dubai-life.com\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"facebook_sdk":{"lang":"fr_FR","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.6.5' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' id='elementor-frontend-js-extra'>
/* <![CDATA[ */
var uael_particles_script = {"uael_particles_url":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/min-js\/uael-particles.min.js","particles_url":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/lib\/particles\/particles.min.js","snowflakes_image":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/snowflake.svg","gift":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/gift.png","tree":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/tree.png","skull":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/skull.png","ghost":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/ghost.png","moon":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/moon.png","bat":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/bat.png","pumpkin":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/pumpkin.png"};
/* ]]> */
</script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Partager sur Facebook","shareOnTwitter":"Partager sur Twitter","pinIt":"L\u2019\u00e9pingler","download":"T\u00e9l\u00e9charger","downloadImage":"T\u00e9l\u00e9charger une image","fullscreen":"Plein \u00e9cran","zoom":"Zoom","share":"Partager","playVideo":"Lire la vid\u00e9o","previous":"Pr\u00e9c\u00e9dent","next":"Suivant","close":"Fermer"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Grand mobile","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablette","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Grande tablette","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Portable","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"\u00c9cran large","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.6.5","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"page-transitions":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/the-dubai-life.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"editorPreferences":[]},"kit":{"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":0,"title":"Page non trouv\u00e9e &#8211; The Dubai Life","excerpt":""}};
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.6.5' id='elementor-frontend-js'></script>
<script type='text/javascript' id='elementor-frontend-js-after'>
window.scope_array = [];
								window.backend = 0;
								jQuery.cachedScript = function( url, options ) {
									// Allow user to set any option except for dataType, cache, and url.
									options = jQuery.extend( options || {}, {
										dataType: "script",
										cache: true,
										url: url
									});
									// Return the jqXHR object so we can chain callbacks.
									return jQuery.ajax( options );
								};
							    jQuery( window ).on( "elementor/frontend/init", function() {
									elementorFrontend.hooks.addAction( "frontend/element_ready/global", function( $scope, $ ){
										if ( "undefined" == typeof $scope ) {
												return;
										}
										if ( $scope.hasClass( "uael-particle-yes" ) ) {
											window.scope_array.push( $scope );
											$scope.find(".uael-particle-wrapper").addClass("js-is-enabled");
										}else{
											return;
										}
										if(elementorFrontend.isEditMode() && $scope.find(".uael-particle-wrapper").hasClass("js-is-enabled") && window.backend == 0 ){		
											var uael_url = uael_particles_script.uael_particles_url;
											
											jQuery.cachedScript( uael_url );
											window.backend = 1;
										}else if(elementorFrontend.isEditMode()){
											var uael_url = uael_particles_script.uael_particles_url;
											jQuery.cachedScript( uael_url ).done(function(){
												var flag = true;
											});
										}
									});
								});
								 jQuery( document ).on( "ready elementor/popup/show", () => {
									if ( jQuery.find( ".uael-particle-yes" ).length < 1 ) {
										return;
									}
									var uael_url = uael_particles_script.uael_particles_url;
									jQuery.cachedScript = function( url, options ) {
										// Allow user to set any option except for dataType, cache, and url.
										options = jQuery.extend( options || {}, {
											dataType: "script",
											cache: true,
											url: url
										});
										// Return the jqXHR object so we can chain callbacks.
										return jQuery.ajax( options );
									};
									jQuery.cachedScript( uael_url );
								});	
</script>
<script type='text/javascript' src='https://the-dubai-life.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.6.5' id='pro-elements-handlers-js'></script>
<script src='https://stats.wp.com/e-202218.js' defer></script>
<script>
	_stq = window._stq || [];
	_stq.push([ 'view', {v:'ext',j:'1:10.9',blog:'201715172',post:'0',tz:'2',srv:'the-dubai-life.com'} ]);
	_stq.push([ 'clickTrackerInit', '201715172', '0' ]);
</script>

</body>
</html>
