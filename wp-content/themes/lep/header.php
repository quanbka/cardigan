<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html amp class="no-js" lang="vi">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
	<!--[if lt IE 9]><script src="//hsta tic.net/0/0/global/design/theme-default/html5shiv.js"></script><![endif]-->
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!--+++++++++++++++++++++++++  CSS ++++++++++++++++++++++++-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=vietnamese" rel="stylesheet">
	<style>
		/** Bootstrap v3.3.6 (http://getbootstrap.com)* Copyright 2011-2015 Twitter, Inc.*/
		html {
			font-family: sans-serif;
			-webkit-text-size-adjust: 100%;
			-ms-text-size-adjust: 100%
		}

		body {
			margin: 0
		}

		article,
		aside,
		details,
		figcaption,
		figure,
		footer,
		header,
		hgroup,
		main,
		menu,
		nav,
		section,
		summary {
			display: block
		}

		audio,
		canvas,
		progress,
		video {
			display: inline-block;
			vertical-align: baseline
		}

		audio:not([controls]) {
			display: none;
			height: 0
		}

		[hidden],
		template {
			display: none
		}

		a {
			background-color: transparent
		}

		a:active,
		a:hover {
			outline: 0
		}

		abbr[title] {
			border-bottom: 1px dotted
		}

		b,
		strong {
			font-weight: 700
		}

		dfn {
			font-style: italic
		}

		h1 {
			margin: .67em 0;
			font-size: 2em
		}

		mark {
			color: #000;
			background: #ff0
		}

		small {
			font-size: 80%
		}

		sub,
		sup {
			position: relative;
			font-size: 75%;
			line-height: 0;
			vertical-align: baseline
		}

		sup {
			top: -.5em
		}

		sub {
			bottom: -.25em
		}

		img {
			border: 0
		}

		svg:not(:root) {
			overflow: hidden
		}

		figure {
			margin: 1em 40px
		}

		hr {
			height: 0;
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box
		}

		pre {
			overflow: auto
		}

		code,
		kbd,
		pre,
		samp {
			font-family: monospace, monospace;
			font-size: 1em
		}

		button,
		input,
		optgroup,
		select,
		textarea {
			margin: 0;
			font: inherit;
			color: inherit
		}

		button {
			overflow: visible
		}

		button,
		select {
			text-transform: none
		}

		button,
		html input[type=button],
		input[type=reset],
		input[type=submit] {
			-webkit-appearance: button;
			cursor: pointer
		}

		button[disabled],
		html input[disabled] {
			cursor: default
		}

		button::-moz-focus-inner,
		input::-moz-focus-inner {
			padding: 0;
			border: 0
		}

		input {
			line-height: normal
		}

		input[type=checkbox],
		input[type=radio] {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			padding: 0
		}

		input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {
			height: auto
		}

		input[type=search] {
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			-webkit-appearance: textfield
		}

		input[type=search]::-webkit-search-cancel-button,
		input[type=search]::-webkit-search-decoration {
			-webkit-appearance: none
		}

		fieldset {
			padding: .35em .625em .75em;
			margin: 0 2px;
			border: 1px solid silver
		}

		legend {
			padding: 0;
			border: 0
		}

		textarea {
			overflow: auto
		}

		optgroup {
			font-weight: 700
		}

		table {
			border-spacing: 0;
			border-collapse: collapse
		}

		td,
		th {
			padding: 0
		}

		/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
		@media print {

			*,
			:after,
			:before {
				color: #000 !important;
				text-shadow: none !important;
				background: 0 0 !important;
				-webkit-box-shadow: none !important;
				box-shadow: none !important
			}

			a,
			a:visited {
				text-decoration: underline
			}

			a[href]:after {
				content: " ("attr(href) ")"
			}

			abbr[title]:after {
				content: " ("attr(title) ")"
			}

			a[href^="javascript:"]:after,
			a[href^="#"]:after {
				content: ""
			}

			blockquote,
			pre {
				border: 1px solid #999;
				page-break-inside: avoid
			}

			thead {
				display: table-header-group
			}

			img,
			tr {
				page-break-inside: avoid
			}

			img {
				max-width: 100% !important
			}

			h2,
			h3,
			p {
				orphans: 3;
				widows: 3
			}

			h2,
			h3 {
				page-break-after: avoid
			}

			.navbar {
				display: none
			}

			.btn>.caret,
			.dropup>.btn>.caret {
				border-top-color: #000 !important
			}

			.label {
				border: 1px solid #000
			}

			.table {
				border-collapse: collapse !important
			}

			.table td,
			.table th {
				background-color: #fff !important
			}

			.table-bordered td,
			.table-bordered th {
				border: 1px solid #ddd !important
			}
		}

		@font-face {
			font-family: 'Glyphicons Halflings';
			src: url(../fonts/glyphicons-halflings-regular.eot);
			src: url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'), url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'), url(../fonts/glyphicons-halflings-regular.woff) format('woff'), url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'), url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')
		}

		.glyphicon {
			position: relative;
			top: 1px;
			display: inline-block;
			font-family: 'Glyphicons Halflings';
			font-style: normal;
			font-weight: 400;
			line-height: 1;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale
		}

		.glyphicon-asterisk:before {
			content: "\002a"
		}

		.glyphicon-plus:before {
			content: "\002b"
		}

		.glyphicon-eur:before,
		.glyphicon-euro:before {
			content: "\20ac"
		}

		.glyphicon-minus:before {
			content: "\2212"
		}

		.glyphicon-cloud:before {
			content: "\2601"
		}

		.glyphicon-envelope:before {
			content: "\2709"
		}

		.glyphicon-pencil:before {
			content: "\270f"
		}

		.glyphicon-glass:before {
			content: "\e001"
		}

		.glyphicon-music:before {
			content: "\e002"
		}

		.glyphicon-search:before {
			content: "\e003"
		}

		.glyphicon-heart:before {
			content: "\e005"
		}

		.glyphicon-star:before {
			content: "\e006"
		}

		.glyphicon-star-empty:before {
			content: "\e007"
		}

		.glyphicon-user:before {
			content: "\e008"
		}

		.glyphicon-film:before {
			content: "\e009"
		}

		.glyphicon-th-large:before {
			content: "\e010"
		}

		.glyphicon-th:before {
			content: "\e011"
		}

		.glyphicon-th-list:before {
			content: "\e012"
		}

		.glyphicon-ok:before {
			content: "\e013"
		}

		.glyphicon-remove:before {
			content: "\e014"
		}

		.glyphicon-zoom-in:before {
			content: "\e015"
		}

		.glyphicon-zoom-out:before {
			content: "\e016"
		}

		.glyphicon-off:before {
			content: "\e017"
		}

		.glyphicon-signal:before {
			content: "\e018"
		}

		.glyphicon-cog:before {
			content: "\e019"
		}

		.glyphicon-trash:before {
			content: "\e020"
		}

		.glyphicon-home:before {
			content: "\e021"
		}

		.glyphicon-file:before {
			content: "\e022"
		}

		.glyphicon-time:before {
			content: "\e023"
		}

		.glyphicon-road:before {
			content: "\e024"
		}

		.glyphicon-download-alt:before {
			content: "\e025"
		}

		.glyphicon-download:before {
			content: "\e026"
		}

		.glyphicon-upload:before {
			content: "\e027"
		}

		.glyphicon-inbox:before {
			content: "\e028"
		}

		.glyphicon-play-circle:before {
			content: "\e029"
		}

		.glyphicon-repeat:before {
			content: "\e030"
		}

		.glyphicon-refresh:before {
			content: "\e031"
		}

		.glyphicon-list-alt:before {
			content: "\e032"
		}

		.glyphicon-lock:before {
			content: "\e033"
		}

		.glyphicon-flag:before {
			content: "\e034"
		}

		.glyphicon-headphones:before {
			content: "\e035"
		}

		.glyphicon-volume-off:before {
			content: "\e036"
		}

		.glyphicon-volume-down:before {
			content: "\e037"
		}

		.glyphicon-volume-up:before {
			content: "\e038"
		}

		.glyphicon-qrcode:before {
			content: "\e039"
		}

		.glyphicon-barcode:before {
			content: "\e040"
		}

		.glyphicon-tag:before {
			content: "\e041"
		}

		.glyphicon-tags:before {
			content: "\e042"
		}

		.glyphicon-book:before {
			content: "\e043"
		}

		.glyphicon-bookmark:before {
			content: "\e044"
		}

		.glyphicon-print:before {
			content: "\e045"
		}

		.glyphicon-camera:before {
			content: "\e046"
		}

		.glyphicon-font:before {
			content: "\e047"
		}

		.glyphicon-bold:before {
			content: "\e048"
		}

		.glyphicon-italic:before {
			content: "\e049"
		}

		.glyphicon-text-height:before {
			content: "\e050"
		}

		.glyphicon-text-width:before {
			content: "\e051"
		}

		.glyphicon-align-left:before {
			content: "\e052"
		}

		.glyphicon-align-center:before {
			content: "\e053"
		}

		.glyphicon-align-right:before {
			content: "\e054"
		}

		.glyphicon-align-justify:before {
			content: "\e055"
		}

		.glyphicon-list:before {
			content: "\e056"
		}

		.glyphicon-indent-left:before {
			content: "\e057"
		}

		.glyphicon-indent-right:before {
			content: "\e058"
		}

		.glyphicon-facetime-video:before {
			content: "\e059"
		}

		.glyphicon-picture:before {
			content: "\e060"
		}

		.glyphicon-map-marker:before {
			content: "\e062"
		}

		.glyphicon-adjust:before {
			content: "\e063"
		}

		.glyphicon-tint:before {
			content: "\e064"
		}

		.glyphicon-edit:before {
			content: "\e065"
		}

		.glyphicon-share:before {
			content: "\e066"
		}

		.glyphicon-check:before {
			content: "\e067"
		}

		.glyphicon-move:before {
			content: "\e068"
		}

		.glyphicon-step-backward:before {
			content: "\e069"
		}

		.glyphicon-fast-backward:before {
			content: "\e070"
		}

		.glyphicon-backward:before {
			content: "\e071"
		}

		.glyphicon-play:before {
			content: "\e072"
		}

		.glyphicon-pause:before {
			content: "\e073"
		}

		.glyphicon-stop:before {
			content: "\e074"
		}

		.glyphicon-forward:before {
			content: "\e075"
		}

		.glyphicon-fast-forward:before {
			content: "\e076"
		}

		.glyphicon-step-forward:before {
			content: "\e077"
		}

		.glyphicon-eject:before {
			content: "\e078"
		}

		.glyphicon-chevron-left:before {
			content: "\e079"
		}

		.glyphicon-chevron-right:before {
			content: "\e080"
		}

		.glyphicon-plus-sign:before {
			content: "\e081"
		}

		.glyphicon-minus-sign:before {
			content: "\e082"
		}

		.glyphicon-remove-sign:before {
			content: "\e083"
		}

		.glyphicon-ok-sign:before {
			content: "\e084"
		}

		.glyphicon-question-sign:before {
			content: "\e085"
		}

		.glyphicon-info-sign:before {
			content: "\e086"
		}

		.glyphicon-screenshot:before {
			content: "\e087"
		}

		.glyphicon-remove-circle:before {
			content: "\e088"
		}

		.glyphicon-ok-circle:before {
			content: "\e089"
		}

		.glyphicon-ban-circle:before {
			content: "\e090"
		}

		.glyphicon-arrow-left:before {
			content: "\e091"
		}

		.glyphicon-arrow-right:before {
			content: "\e092"
		}

		.glyphicon-arrow-up:before {
			content: "\e093"
		}

		.glyphicon-arrow-down:before {
			content: "\e094"
		}

		.glyphicon-share-alt:before {
			content: "\e095"
		}

		.glyphicon-resize-full:before {
			content: "\e096"
		}

		.glyphicon-resize-small:before {
			content: "\e097"
		}

		.glyphicon-exclamation-sign:before {
			content: "\e101"
		}

		.glyphicon-gift:before {
			content: "\e102"
		}

		.glyphicon-leaf:before {
			content: "\e103"
		}

		.glyphicon-fire:before {
			content: "\e104"
		}

		.glyphicon-eye-open:before {
			content: "\e105"
		}

		.glyphicon-eye-close:before {
			content: "\e106"
		}

		.glyphicon-warning-sign:before {
			content: "\e107"
		}

		.glyphicon-plane:before {
			content: "\e108"
		}

		.glyphicon-calendar:before {
			content: "\e109"
		}

		.glyphicon-random:before {
			content: "\e110"
		}

		.glyphicon-comment:before {
			content: "\e111"
		}

		.glyphicon-magnet:before {
			content: "\e112"
		}

		.glyphicon-chevron-up:before {
			content: "\e113"
		}

		.glyphicon-chevron-down:before {
			content: "\e114"
		}

		.glyphicon-retweet:before {
			content: "\e115"
		}

		.glyphicon-shopping-cart:before {
			content: "\e116"
		}

		.glyphicon-folder-close:before {
			content: "\e117"
		}

		.glyphicon-folder-open:before {
			content: "\e118"
		}

		.glyphicon-resize-vertical:before {
			content: "\e119"
		}

		.glyphicon-resize-horizontal:before {
			content: "\e120"
		}

		.glyphicon-hdd:before {
			content: "\e121"
		}

		.glyphicon-bullhorn:before {
			content: "\e122"
		}

		.glyphicon-bell:before {
			content: "\e123"
		}

		.glyphicon-certificate:before {
			content: "\e124"
		}

		.glyphicon-thumbs-up:before {
			content: "\e125"
		}

		.glyphicon-thumbs-down:before {
			content: "\e126"
		}

		.glyphicon-hand-right:before {
			content: "\e127"
		}

		.glyphicon-hand-left:before {
			content: "\e128"
		}

		.glyphicon-hand-up:before {
			content: "\e129"
		}

		.glyphicon-hand-down:before {
			content: "\e130"
		}

		.glyphicon-circle-arrow-right:before {
			content: "\e131"
		}

		.glyphicon-circle-arrow-left:before {
			content: "\e132"
		}

		.glyphicon-circle-arrow-up:before {
			content: "\e133"
		}

		.glyphicon-circle-arrow-down:before {
			content: "\e134"
		}

		.glyphicon-globe:before {
			content: "\e135"
		}

		.glyphicon-wrench:before {
			content: "\e136"
		}

		.glyphicon-tasks:before {
			content: "\e137"
		}

		.glyphicon-filter:before {
			content: "\e138"
		}

		.glyphicon-briefcase:before {
			content: "\e139"
		}

		.glyphicon-fullscreen:before {
			content: "\e140"
		}

		.glyphicon-dashboard:before {
			content: "\e141"
		}

		.glyphicon-paperclip:before {
			content: "\e142"
		}

		.glyphicon-heart-empty:before {
			content: "\e143"
		}

		.glyphicon-link:before {
			content: "\e144"
		}

		.glyphicon-phone:before {
			content: "\e145"
		}

		.glyphicon-pushpin:before {
			content: "\e146"
		}

		.glyphicon-usd:before {
			content: "\e148"
		}

		.glyphicon-gbp:before {
			content: "\e149"
		}

		.glyphicon-sort:before {
			content: "\e150"
		}

		.glyphicon-sort-by-alphabet:before {
			content: "\e151"
		}

		.glyphicon-sort-by-alphabet-alt:before {
			content: "\e152"
		}

		.glyphicon-sort-by-order:before {
			content: "\e153"
		}

		.glyphicon-sort-by-order-alt:before {
			content: "\e154"
		}

		.glyphicon-sort-by-attributes:before {
			content: "\e155"
		}

		.glyphicon-sort-by-attributes-alt:before {
			content: "\e156"
		}

		.glyphicon-unchecked:before {
			content: "\e157"
		}

		.glyphicon-expand:before {
			content: "\e158"
		}

		.glyphicon-collapse-down:before {
			content: "\e159"
		}

		.glyphicon-collapse-up:before {
			content: "\e160"
		}

		.glyphicon-log-in:before {
			content: "\e161"
		}

		.glyphicon-flash:before {
			content: "\e162"
		}

		.glyphicon-log-out:before {
			content: "\e163"
		}

		.glyphicon-new-window:before {
			content: "\e164"
		}

		.glyphicon-record:before {
			content: "\e165"
		}

		.glyphicon-save:before {
			content: "\e166"
		}

		.glyphicon-open:before {
			content: "\e167"
		}

		.glyphicon-saved:before {
			content: "\e168"
		}

		.glyphicon-import:before {
			content: "\e169"
		}

		.glyphicon-export:before {
			content: "\e170"
		}

		.glyphicon-send:before {
			content: "\e171"
		}

		.glyphicon-floppy-disk:before {
			content: "\e172"
		}

		.glyphicon-floppy-saved:before {
			content: "\e173"
		}

		.glyphicon-floppy-remove:before {
			content: "\e174"
		}

		.glyphicon-floppy-save:before {
			content: "\e175"
		}

		.glyphicon-floppy-open:before {
			content: "\e176"
		}

		.glyphicon-credit-card:before {
			content: "\e177"
		}

		.glyphicon-transfer:before {
			content: "\e178"
		}

		.glyphicon-cutlery:before {
			content: "\e179"
		}

		.glyphicon-header:before {
			content: "\e180"
		}

		.glyphicon-compressed:before {
			content: "\e181"
		}

		.glyphicon-earphone:before {
			content: "\e182"
		}

		.glyphicon-phone-alt:before {
			content: "\e183"
		}

		.glyphicon-tower:before {
			content: "\e184"
		}

		.glyphicon-stats:before {
			content: "\e185"
		}

		.glyphicon-sd-video:before {
			content: "\e186"
		}

		.glyphicon-hd-video:before {
			content: "\e187"
		}

		.glyphicon-subtitles:before {
			content: "\e188"
		}

		.glyphicon-sound-stereo:before {
			content: "\e189"
		}

		.glyphicon-sound-dolby:before {
			content: "\e190"
		}

		.glyphicon-sound-5-1:before {
			content: "\e191"
		}

		.glyphicon-sound-6-1:before {
			content: "\e192"
		}

		.glyphicon-sound-7-1:before {
			content: "\e193"
		}

		.glyphicon-copyright-mark:before {
			content: "\e194"
		}

		.glyphicon-registration-mark:before {
			content: "\e195"
		}

		.glyphicon-cloud-download:before {
			content: "\e197"
		}

		.glyphicon-cloud-upload:before {
			content: "\e198"
		}

		.glyphicon-tree-conifer:before {
			content: "\e199"
		}

		.glyphicon-tree-deciduous:before {
			content: "\e200"
		}

		.glyphicon-cd:before {
			content: "\e201"
		}

		.glyphicon-save-file:before {
			content: "\e202"
		}

		.glyphicon-open-file:before {
			content: "\e203"
		}

		.glyphicon-level-up:before {
			content: "\e204"
		}

		.glyphicon-copy:before {
			content: "\e205"
		}

		.glyphicon-paste:before {
			content: "\e206"
		}

		.glyphicon-alert:before {
			content: "\e209"
		}

		.glyphicon-equalizer:before {
			content: "\e210"
		}

		.glyphicon-king:before {
			content: "\e211"
		}

		.glyphicon-queen:before {
			content: "\e212"
		}

		.glyphicon-pawn:before {
			content: "\e213"
		}

		.glyphicon-bishop:before {
			content: "\e214"
		}

		.glyphicon-knight:before {
			content: "\e215"
		}

		.glyphicon-baby-formula:before {
			content: "\e216"
		}

		.glyphicon-tent:before {
			content: "\26fa"
		}

		.glyphicon-blackboard:before {
			content: "\e218"
		}

		.glyphicon-bed:before {
			content: "\e219"
		}

		.glyphicon-apple:before {
			content: "\f8ff"
		}

		.glyphicon-erase:before {
			content: "\e221"
		}

		.glyphicon-hourglass:before {
			content: "\231b"
		}

		.glyphicon-lamp:before {
			content: "\e223"
		}

		.glyphicon-duplicate:before {
			content: "\e224"
		}

		.glyphicon-piggy-bank:before {
			content: "\e225"
		}

		.glyphicon-scissors:before {
			content: "\e226"
		}

		.glyphicon-bitcoin:before {
			content: "\e227"
		}

		.glyphicon-btc:before {
			content: "\e227"
		}

		.glyphicon-xbt:before {
			content: "\e227"
		}

		.glyphicon-yen:before {
			content: "\00a5"
		}

		.glyphicon-jpy:before {
			content: "\00a5"
		}

		.glyphicon-ruble:before {
			content: "\20bd"
		}

		.glyphicon-rub:before {
			content: "\20bd"
		}

		.glyphicon-scale:before {
			content: "\e230"
		}

		.glyphicon-ice-lolly:before {
			content: "\e231"
		}

		.glyphicon-ice-lolly-tasted:before {
			content: "\e232"
		}

		.glyphicon-education:before {
			content: "\e233"
		}

		.glyphicon-option-horizontal:before {
			content: "\e234"
		}

		.glyphicon-option-vertical:before {
			content: "\e235"
		}

		.glyphicon-menu-hamburger:before {
			content: "\e236"
		}

		.glyphicon-modal-window:before {
			content: "\e237"
		}

		.glyphicon-oil:before {
			content: "\e238"
		}

		.glyphicon-grain:before {
			content: "\e239"
		}

		.glyphicon-sunglasses:before {
			content: "\e240"
		}

		.glyphicon-text-size:before {
			content: "\e241"
		}

		.glyphicon-text-color:before {
			content: "\e242"
		}

		.glyphicon-text-background:before {
			content: "\e243"
		}

		.glyphicon-object-align-top:before {
			content: "\e244"
		}

		.glyphicon-object-align-bottom:before {
			content: "\e245"
		}

		.glyphicon-object-align-horizontal:before {
			content: "\e246"
		}

		.glyphicon-object-align-left:before {
			content: "\e247"
		}

		.glyphicon-object-align-vertical:before {
			content: "\e248"
		}

		.glyphicon-object-align-right:before {
			content: "\e249"
		}

		.glyphicon-triangle-right:before {
			content: "\e250"
		}

		.glyphicon-triangle-left:before {
			content: "\e251"
		}

		.glyphicon-triangle-bottom:before {
			content: "\e252"
		}

		.glyphicon-triangle-top:before {
			content: "\e253"
		}

		.glyphicon-console:before {
			content: "\e254"
		}

		.glyphicon-superscript:before {
			content: "\e255"
		}

		.glyphicon-subscript:before {
			content: "\e256"
		}

		.glyphicon-menu-left:before {
			content: "\e257"
		}

		.glyphicon-menu-right:before {
			content: "\e258"
		}

		.glyphicon-menu-down:before {
			content: "\e259"
		}

		.glyphicon-menu-up:before {
			content: "\e260"
		}

		* {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		:after,
		:before {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		html {
			font-size: 10px;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0)
		}

		body {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			line-height: 1.42857143;
			color: #333;
			background-color: #fff
		}

		button,
		input,
		select,
		textarea {
			font-family: inherit;
			font-size: inherit;
			line-height: inherit
		}

		a {
			color: #337ab7;
			text-decoration: none
		}

		a:focus,
		a:hover {
			color: #23527c;
			text-decoration: underline
		}

		a:focus {
			outline: thin dotted;
			outline: 5px auto -webkit-focus-ring-color;
			outline-offset: -2px
		}

		figure {
			margin: 0
		}

		img {
			vertical-align: middle
		}

		.carousel-inner>.item>a>img,
		.carousel-inner>.item>img,
		.img-responsive,
		.thumbnail a>img,
		.thumbnail>img {
			display: block;
			max-width: 100%;
			height: auto
		}

		.img-rounded {
			border-radius: 6px
		}

		.img-thumbnail {
			display: inline-block;
			max-width: 100%;
			height: auto;
			padding: 4px;
			line-height: 1.42857143;
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 4px;
			-webkit-transition: all .2s ease-in-out;
			-o-transition: all .2s ease-in-out;
			transition: all .2s ease-in-out
		}

		.img-circle {
			border-radius: 50%
		}

		hr {
			margin-top: 20px;
			margin-bottom: 20px;
			border: 0;
			border-top: 1px solid #eee
		}

		.sr-only {
			position: absolute;
			width: 1px;
			height: 1px;
			padding: 0;
			margin: -1px;
			overflow: hidden;
			clip: rect(0, 0, 0, 0);
			border: 0
		}

		.sr-only-focusable:active,
		.sr-only-focusable:focus {
			position: static;
			width: auto;
			height: auto;
			margin: 0;
			overflow: visible;
			clip: auto
		}

		[role=button] {
			cursor: pointer
		}

		.h1,
		.h2,
		.h3,
		.h4,
		.h5,
		.h6,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: inherit;
			font-weight: 500;
			line-height: 1.1;
			color: inherit
		}

		.h1 .small,
		.h1 small,
		.h2 .small,
		.h2 small,
		.h3 .small,
		.h3 small,
		.h4 .small,
		.h4 small,
		.h5 .small,
		.h5 small,
		.h6 .small,
		.h6 small,
		h1 .small,
		h1 small,
		h2 .small,
		h2 small,
		h3 .small,
		h3 small,
		h4 .small,
		h4 small,
		h5 .small,
		h5 small,
		h6 .small,
		h6 small {
			font-weight: 400;
			line-height: 1;
			color: #777
		}

		.h1,
		.h2,
		.h3,
		h1,
		h2,
		h3 {
			margin-top: 20px;
			margin-bottom: 10px
		}

		.h1 .small,
		.h1 small,
		.h2 .small,
		.h2 small,
		.h3 .small,
		.h3 small,
		h1 .small,
		h1 small,
		h2 .small,
		h2 small,
		h3 .small,
		h3 small {
			font-size: 65%
		}

		.h4,
		.h5,
		.h6,
		h4,
		h5,
		h6 {
			margin-top: 10px;
			margin-bottom: 10px
		}

		.h4 .small,
		.h4 small,
		.h5 .small,
		.h5 small,
		.h6 .small,
		.h6 small,
		h4 .small,
		h4 small,
		h5 .small,
		h5 small,
		h6 .small,
		h6 small {
			font-size: 75%
		}

		.h1,
		h1 {
			font-size: 36px
		}

		.h2,
		h2 {
			font-size: 30px
		}

		.h3,
		h3 {
			font-size: 24px
		}

		.h4,
		h4 {
			font-size: 18px
		}

		.h5,
		h5 {
			font-size: 14px
		}

		.h6,
		h6 {
			font-size: 12px
		}

		p {
			margin: 0 0 10px
		}

		.lead {
			margin-bottom: 20px;
			font-size: 16px;
			font-weight: 300;
			line-height: 1.4
		}

		@media (min-width:768px) {
			.lead {
				font-size: 21px
			}
		}

		.small,
		small {
			font-size: 85%
		}

		.mark,
		mark {
			padding: .2em;
			background-color: #fcf8e3
		}

		.text-left {
			text-align: left
		}

		.text-right {
			text-align: right
		}

		.text-center {
			text-align: center
		}

		.text-justify {
			text-align: justify
		}

		.text-nowrap {
			white-space: nowrap
		}

		.text-lowercase {
			text-transform: lowercase
		}

		.text-uppercase {
			text-transform: uppercase
		}

		.text-capitalize {
			text-transform: capitalize
		}

		.text-muted {
			color: #777
		}

		.text-primary {
			color: #337ab7
		}

		a.text-primary:focus,
		a.text-primary:hover {
			color: #286090
		}

		.text-success {
			color: #3c763d
		}

		a.text-success:focus,
		a.text-success:hover {
			color: #2b542c
		}

		.text-info {
			color: #31708f
		}

		a.text-info:focus,
		a.text-info:hover {
			color: #245269
		}

		.text-warning {
			color: #8a6d3b
		}

		a.text-warning:focus,
		a.text-warning:hover {
			color: #66512c
		}

		.text-danger {
			color: #a94442
		}

		a.text-danger:focus,
		a.text-danger:hover {
			color: #843534
		}

		.bg-primary {
			color: #fff;
			background-color: #337ab7
		}

		a.bg-primary:focus,
		a.bg-primary:hover {
			background-color: #286090
		}

		.bg-success {
			background-color: #dff0d8
		}

		a.bg-success:focus,
		a.bg-success:hover {
			background-color: #c1e2b3
		}

		.bg-info {
			background-color: #d9edf7
		}

		a.bg-info:focus,
		a.bg-info:hover {
			background-color: #afd9ee
		}

		.bg-warning {
			background-color: #fcf8e3
		}

		a.bg-warning:focus,
		a.bg-warning:hover {
			background-color: #f7ecb5
		}

		.bg-danger {
			background-color: #f2dede
		}

		a.bg-danger:focus,
		a.bg-danger:hover {
			background-color: #e4b9b9
		}

		.page-header {
			padding-bottom: 9px;
			margin: 40px 0 20px;
			border-bottom: 1px solid #eee
		}

		ol,
		ul {
			margin-top: 0;
			margin-bottom: 10px
		}

		ol ol,
		ol ul,
		ul ol,
		ul ul {
			margin-bottom: 0
		}

		.list-unstyled {
			padding-left: 0;
			list-style: none
		}

		.list-inline {
			padding-left: 0;
			margin-left: -5px;
			list-style: none
		}

		.list-inline>li {
			display: inline-block;
			padding-right: 5px;
			padding-left: 5px
		}

		dl {
			margin-top: 0;
			margin-bottom: 20px
		}

		dd,
		dt {
			line-height: 1.42857143
		}

		dt {
			font-weight: 700
		}

		dd {
			margin-left: 0
		}

		@media (min-width:768px) {
			.dl-horizontal dt {
				float: left;
				width: 160px;
				overflow: hidden;
				clear: left;
				text-align: right;
				text-overflow: ellipsis;
				white-space: nowrap
			}

			.dl-horizontal dd {
				margin-left: 180px
			}
		}

		abbr[data-original-title],
		abbr[title] {
			cursor: help;
			border-bottom: 1px dotted #777
		}

		.initialism {
			font-size: 90%;
			text-transform: uppercase
		}

		blockquote {
			padding: 10px 20px;
			margin: 0 0 20px;
			font-size: 17.5px;
			border-left: 5px solid #eee
		}

		blockquote ol:last-child,
		blockquote p:last-child,
		blockquote ul:last-child {
			margin-bottom: 0
		}

		blockquote .small,
		blockquote footer,
		blockquote small {
			display: block;
			font-size: 80%;
			line-height: 1.42857143;
			color: #777
		}

		blockquote .small:before,
		blockquote footer:before,
		blockquote small:before {
			content: '\2014 \00A0'
		}

		.blockquote-reverse,
		blockquote.pull-right {
			padding-right: 15px;
			padding-left: 0;
			text-align: right;
			border-right: 5px solid #eee;
			border-left: 0
		}

		.blockquote-reverse .small:before,
		.blockquote-reverse footer:before,
		.blockquote-reverse small:before,
		blockquote.pull-right .small:before,
		blockquote.pull-right footer:before,
		blockquote.pull-right small:before {
			content: ''
		}

		.blockquote-reverse .small:after,
		.blockquote-reverse footer:after,
		.blockquote-reverse small:after,
		blockquote.pull-right .small:after,
		blockquote.pull-right footer:after,
		blockquote.pull-right small:after {
			content: '\00A0 \2014'
		}

		address {
			margin-bottom: 20px;
			font-style: normal;
			line-height: 1.42857143
		}

		code,
		kbd,
		pre,
		samp {
			font-family: Menlo, Monaco, Consolas, "Courier New", monospace
		}

		code {
			padding: 2px 4px;
			font-size: 90%;
			color: #c7254e;
			background-color: #f9f2f4;
			border-radius: 4px
		}

		kbd {
			padding: 2px 4px;
			font-size: 90%;
			color: #fff;
			background-color: #333;
			border-radius: 3px;
			-webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
			box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
		}

		kbd kbd {
			padding: 0;
			font-size: 100%;
			font-weight: 700;
			-webkit-box-shadow: none;
			box-shadow: none
		}

		pre {
			display: block;
			padding: 9.5px;
			margin: 0 0 10px;
			font-size: 13px;
			line-height: 1.42857143;
			color: #333;
			word-break: break-all;
			word-wrap: break-word;
			background-color: #f5f5f5;
			border: 1px solid #ccc;
			border-radius: 4px
		}

		pre code {
			padding: 0;
			font-size: inherit;
			color: inherit;
			white-space: pre-wrap;
			background-color: transparent;
			border-radius: 0
		}

		.pre-scrollable {
			max-height: 340px;
			overflow-y: scroll
		}

		.container {
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto
		}

		@media (min-width:768px) {
			.container {
				width: 750px
			}
		}

		@media (min-width:992px) {
			.container {
				width: 970px
			}
		}

		@media (min-width:1200px) {
			.container {
				width: 1170px
			}
		}

		.container-fluid {
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto
		}

		.row {
			margin-right: -15px;
			margin-left: -15px
		}

		.col-lg-1,
		.col-lg-10,
		.col-lg-11,
		.col-lg-12,
		.col-lg-2,
		.col-lg-3,
		.col-lg-4,
		.col-lg-5,
		.col-lg-6,
		.col-lg-7,
		.col-lg-8,
		.col-lg-9,
		.col-md-1,
		.col-md-10,
		.col-md-11,
		.col-md-12,
		.col-md-2,
		.col-md-3,
		.col-md-4,
		.col-md-5,
		.col-md-6,
		.col-md-7,
		.col-md-8,
		.col-md-9,
		.col-sm-1,
		.col-sm-10,
		.col-sm-11,
		.col-sm-12,
		.col-sm-2,
		.col-sm-3,
		.col-sm-4,
		.col-sm-5,
		.col-sm-6,
		.col-sm-7,
		.col-sm-8,
		.col-sm-9,
		.col-xs-1,
		.col-xs-10,
		.col-xs-11,
		.col-xs-12,
		.col-xs-2,
		.col-xs-3,
		.col-xs-4,
		.col-xs-5,
		.col-xs-6,
		.col-xs-7,
		.col-xs-8,
		.col-xs-9 {
			position: relative;
			min-height: 1px;
			padding-right: 15px;
			padding-left: 15px
		}

		.col-xs-1,
		.col-xs-10,
		.col-xs-11,
		.col-xs-12,
		.col-xs-2,
		.col-xs-3,
		.col-xs-4,
		.col-xs-5,
		.col-xs-6,
		.col-xs-7,
		.col-xs-8,
		.col-xs-9 {
			float: left
		}

		.col-xs-12 {
			width: 100%
		}

		.col-xs-11 {
			width: 91.66666667%
		}

		.col-xs-10 {
			width: 83.33333333%
		}

		.col-xs-9 {
			width: 75%
		}

		.col-xs-8 {
			width: 66.66666667%
		}

		.col-xs-7 {
			width: 58.33333333%
		}

		.col-xs-6 {
			width: 50%
		}

		.col-xs-5 {
			width: 41.66666667%
		}

		.col-xs-4 {
			width: 33.33333333%
		}

		.col-xs-3 {
			width: 25%
		}

		.col-xs-2 {
			width: 16.66666667%
		}

		.col-xs-1 {
			width: 8.33333333%
		}

		.col-xs-pull-12 {
			right: 100%
		}

		.col-xs-pull-11 {
			right: 91.66666667%
		}

		.col-xs-pull-10 {
			right: 83.33333333%
		}

		.col-xs-pull-9 {
			right: 75%
		}

		.col-xs-pull-8 {
			right: 66.66666667%
		}

		.col-xs-pull-7 {
			right: 58.33333333%
		}

		.col-xs-pull-6 {
			right: 50%
		}

		.col-xs-pull-5 {
			right: 41.66666667%
		}

		.col-xs-pull-4 {
			right: 33.33333333%
		}

		.col-xs-pull-3 {
			right: 25%
		}

		.col-xs-pull-2 {
			right: 16.66666667%
		}

		.col-xs-pull-1 {
			right: 8.33333333%
		}

		.col-xs-pull-0 {
			right: auto
		}

		.col-xs-push-12 {
			left: 100%
		}

		.col-xs-push-11 {
			left: 91.66666667%
		}

		.col-xs-push-10 {
			left: 83.33333333%
		}

		.col-xs-push-9 {
			left: 75%
		}

		.col-xs-push-8 {
			left: 66.66666667%
		}

		.col-xs-push-7 {
			left: 58.33333333%
		}

		.col-xs-push-6 {
			left: 50%
		}

		.col-xs-push-5 {
			left: 41.66666667%
		}

		.col-xs-push-4 {
			left: 33.33333333%
		}

		.col-xs-push-3 {
			left: 25%
		}

		.col-xs-push-2 {
			left: 16.66666667%
		}

		.col-xs-push-1 {
			left: 8.33333333%
		}

		.col-xs-push-0 {
			left: auto
		}

		.col-xs-offset-12 {
			margin-left: 100%
		}

		.col-xs-offset-11 {
			margin-left: 91.66666667%
		}

		.col-xs-offset-10 {
			margin-left: 83.33333333%
		}

		.col-xs-offset-9 {
			margin-left: 75%
		}

		.col-xs-offset-8 {
			margin-left: 66.66666667%
		}

		.col-xs-offset-7 {
			margin-left: 58.33333333%
		}

		.col-xs-offset-6 {
			margin-left: 50%
		}

		.col-xs-offset-5 {
			margin-left: 41.66666667%
		}

		.col-xs-offset-4 {
			margin-left: 33.33333333%
		}

		.col-xs-offset-3 {
			margin-left: 25%
		}

		.col-xs-offset-2 {
			margin-left: 16.66666667%
		}

		.col-xs-offset-1 {
			margin-left: 8.33333333%
		}

		.col-xs-offset-0 {
			margin-left: 0
		}

		@media (min-width:768px) {

			.col-sm-1,
			.col-sm-10,
			.col-sm-11,
			.col-sm-12,
			.col-sm-2,
			.col-sm-3,
			.col-sm-4,
			.col-sm-5,
			.col-sm-6,
			.col-sm-7,
			.col-sm-8,
			.col-sm-9 {
				float: left
			}

			.col-sm-12 {
				width: 100%
			}

			.col-sm-11 {
				width: 91.66666667%
			}

			.col-sm-10 {
				width: 83.33333333%
			}

			.col-sm-9 {
				width: 75%
			}

			.col-sm-8 {
				width: 66.66666667%
			}

			.col-sm-7 {
				width: 58.33333333%
			}

			.col-sm-6 {
				width: 50%
			}

			.col-sm-5 {
				width: 41.66666667%
			}

			.col-sm-4 {
				width: 33.33333333%
			}

			.col-sm-3 {
				width: 25%
			}

			.col-sm-2 {
				width: 16.66666667%
			}

			.col-sm-1 {
				width: 8.33333333%
			}

			.col-sm-pull-12 {
				right: 100%
			}

			.col-sm-pull-11 {
				right: 91.66666667%
			}

			.col-sm-pull-10 {
				right: 83.33333333%
			}

			.col-sm-pull-9 {
				right: 75%
			}

			.col-sm-pull-8 {
				right: 66.66666667%
			}

			.col-sm-pull-7 {
				right: 58.33333333%
			}

			.col-sm-pull-6 {
				right: 50%
			}

			.col-sm-pull-5 {
				right: 41.66666667%
			}

			.col-sm-pull-4 {
				right: 33.33333333%
			}

			.col-sm-pull-3 {
				right: 25%
			}

			.col-sm-pull-2 {
				right: 16.66666667%
			}

			.col-sm-pull-1 {
				right: 8.33333333%
			}

			.col-sm-pull-0 {
				right: auto
			}

			.col-sm-push-12 {
				left: 100%
			}

			.col-sm-push-11 {
				left: 91.66666667%
			}

			.col-sm-push-10 {
				left: 83.33333333%
			}

			.col-sm-push-9 {
				left: 75%
			}

			.col-sm-push-8 {
				left: 66.66666667%
			}

			.col-sm-push-7 {
				left: 58.33333333%
			}

			.col-sm-push-6 {
				left: 50%
			}

			.col-sm-push-5 {
				left: 41.66666667%
			}

			.col-sm-push-4 {
				left: 33.33333333%
			}

			.col-sm-push-3 {
				left: 25%
			}

			.col-sm-push-2 {
				left: 16.66666667%
			}

			.col-sm-push-1 {
				left: 8.33333333%
			}

			.col-sm-push-0 {
				left: auto
			}

			.col-sm-offset-12 {
				margin-left: 100%
			}

			.col-sm-offset-11 {
				margin-left: 91.66666667%
			}

			.col-sm-offset-10 {
				margin-left: 83.33333333%
			}

			.col-sm-offset-9 {
				margin-left: 75%
			}

			.col-sm-offset-8 {
				margin-left: 66.66666667%
			}

			.col-sm-offset-7 {
				margin-left: 58.33333333%
			}

			.col-sm-offset-6 {
				margin-left: 50%
			}

			.col-sm-offset-5 {
				margin-left: 41.66666667%
			}

			.col-sm-offset-4 {
				margin-left: 33.33333333%
			}

			.col-sm-offset-3 {
				margin-left: 25%
			}

			.col-sm-offset-2 {
				margin-left: 16.66666667%
			}

			.col-sm-offset-1 {
				margin-left: 8.33333333%
			}

			.col-sm-offset-0 {
				margin-left: 0
			}
		}

		@media (min-width:992px) {

			.col-md-1,
			.col-md-10,
			.col-md-11,
			.col-md-12,
			.col-md-2,
			.col-md-3,
			.col-md-4,
			.col-md-5,
			.col-md-6,
			.col-md-7,
			.col-md-8,
			.col-md-9 {
				float: left
			}

			.col-md-12 {
				width: 100%
			}

			.col-md-11 {
				width: 91.66666667%
			}

			.col-md-10 {
				width: 83.33333333%
			}

			.col-md-9 {
				width: 75%
			}

			.col-md-8 {
				width: 66.66666667%
			}

			.col-md-7 {
				width: 58.33333333%
			}

			.col-md-6 {
				width: 50%
			}

			.col-md-5 {
				width: 41.66666667%
			}

			.col-md-4 {
				width: 33.33333333%
			}

			.col-md-3 {
				width: 25%
			}

			.col-md-2 {
				width: 16.66666667%
			}

			.col-md-1 {
				width: 8.33333333%
			}

			.col-md-pull-12 {
				right: 100%
			}

			.col-md-pull-11 {
				right: 91.66666667%
			}

			.col-md-pull-10 {
				right: 83.33333333%
			}

			.col-md-pull-9 {
				right: 75%
			}

			.col-md-pull-8 {
				right: 66.66666667%
			}

			.col-md-pull-7 {
				right: 58.33333333%
			}

			.col-md-pull-6 {
				right: 50%
			}

			.col-md-pull-5 {
				right: 41.66666667%
			}

			.col-md-pull-4 {
				right: 33.33333333%
			}

			.col-md-pull-3 {
				right: 25%
			}

			.col-md-pull-2 {
				right: 16.66666667%
			}

			.col-md-pull-1 {
				right: 8.33333333%
			}

			.col-md-pull-0 {
				right: auto
			}

			.col-md-push-12 {
				left: 100%
			}

			.col-md-push-11 {
				left: 91.66666667%
			}

			.col-md-push-10 {
				left: 83.33333333%
			}

			.col-md-push-9 {
				left: 75%
			}

			.col-md-push-8 {
				left: 66.66666667%
			}

			.col-md-push-7 {
				left: 58.33333333%
			}

			.col-md-push-6 {
				left: 50%
			}

			.col-md-push-5 {
				left: 41.66666667%
			}

			.col-md-push-4 {
				left: 33.33333333%
			}

			.col-md-push-3 {
				left: 25%
			}

			.col-md-push-2 {
				left: 16.66666667%
			}

			.col-md-push-1 {
				left: 8.33333333%
			}

			.col-md-push-0 {
				left: auto
			}

			.col-md-offset-12 {
				margin-left: 100%
			}

			.col-md-offset-11 {
				margin-left: 91.66666667%
			}

			.col-md-offset-10 {
				margin-left: 83.33333333%
			}

			.col-md-offset-9 {
				margin-left: 75%
			}

			.col-md-offset-8 {
				margin-left: 66.66666667%
			}

			.col-md-offset-7 {
				margin-left: 58.33333333%
			}

			.col-md-offset-6 {
				margin-left: 50%
			}

			.col-md-offset-5 {
				margin-left: 41.66666667%
			}

			.col-md-offset-4 {
				margin-left: 33.33333333%
			}

			.col-md-offset-3 {
				margin-left: 25%
			}

			.col-md-offset-2 {
				margin-left: 16.66666667%
			}

			.col-md-offset-1 {
				margin-left: 8.33333333%
			}

			.col-md-offset-0 {
				margin-left: 0
			}
		}

		@media (min-width:1200px) {

			.col-lg-1,
			.col-lg-10,
			.col-lg-11,
			.col-lg-12,
			.col-lg-2,
			.col-lg-3,
			.col-lg-4,
			.col-lg-5,
			.col-lg-6,
			.col-lg-7,
			.col-lg-8,
			.col-lg-9 {
				float: left
			}

			.col-lg-12 {
				width: 100%
			}

			.col-lg-11 {
				width: 91.66666667%
			}

			.col-lg-10 {
				width: 83.33333333%
			}

			.col-lg-9 {
				width: 75%
			}

			.col-lg-8 {
				width: 66.66666667%
			}

			.col-lg-7 {
				width: 58.33333333%
			}

			.col-lg-6 {
				width: 50%
			}

			.col-lg-5 {
				width: 41.66666667%
			}

			.col-lg-4 {
				width: 33.33333333%
			}

			.col-lg-3 {
				width: 25%
			}

			.col-lg-2 {
				width: 16.66666667%
			}

			.col-lg-1 {
				width: 8.33333333%
			}

			.col-lg-pull-12 {
				right: 100%
			}

			.col-lg-pull-11 {
				right: 91.66666667%
			}

			.col-lg-pull-10 {
				right: 83.33333333%
			}

			.col-lg-pull-9 {
				right: 75%
			}

			.col-lg-pull-8 {
				right: 66.66666667%
			}

			.col-lg-pull-7 {
				right: 58.33333333%
			}

			.col-lg-pull-6 {
				right: 50%
			}

			.col-lg-pull-5 {
				right: 41.66666667%
			}

			.col-lg-pull-4 {
				right: 33.33333333%
			}

			.col-lg-pull-3 {
				right: 25%
			}

			.col-lg-pull-2 {
				right: 16.66666667%
			}

			.col-lg-pull-1 {
				right: 8.33333333%
			}

			.col-lg-pull-0 {
				right: auto
			}

			.col-lg-push-12 {
				left: 100%
			}

			.col-lg-push-11 {
				left: 91.66666667%
			}

			.col-lg-push-10 {
				left: 83.33333333%
			}

			.col-lg-push-9 {
				left: 75%
			}

			.col-lg-push-8 {
				left: 66.66666667%
			}

			.col-lg-push-7 {
				left: 58.33333333%
			}

			.col-lg-push-6 {
				left: 50%
			}

			.col-lg-push-5 {
				left: 41.66666667%
			}

			.col-lg-push-4 {
				left: 33.33333333%
			}

			.col-lg-push-3 {
				left: 25%
			}

			.col-lg-push-2 {
				left: 16.66666667%
			}

			.col-lg-push-1 {
				left: 8.33333333%
			}

			.col-lg-push-0 {
				left: auto
			}

			.col-lg-offset-12 {
				margin-left: 100%
			}

			.col-lg-offset-11 {
				margin-left: 91.66666667%
			}

			.col-lg-offset-10 {
				margin-left: 83.33333333%
			}

			.col-lg-offset-9 {
				margin-left: 75%
			}

			.col-lg-offset-8 {
				margin-left: 66.66666667%
			}

			.col-lg-offset-7 {
				margin-left: 58.33333333%
			}

			.col-lg-offset-6 {
				margin-left: 50%
			}

			.col-lg-offset-5 {
				margin-left: 41.66666667%
			}

			.col-lg-offset-4 {
				margin-left: 33.33333333%
			}

			.col-lg-offset-3 {
				margin-left: 25%
			}

			.col-lg-offset-2 {
				margin-left: 16.66666667%
			}

			.col-lg-offset-1 {
				margin-left: 8.33333333%
			}

			.col-lg-offset-0 {
				margin-left: 0
			}
		}

		table {
			background-color: transparent
		}

		caption {
			padding-top: 8px;
			padding-bottom: 8px;
			color: #777;
			text-align: left
		}

		th {
			text-align: left
		}

		.table {
			width: 100%;
			max-width: 100%;
			margin-bottom: 20px
		}

		.table>tbody>tr>td,
		.table>tbody>tr>th,
		.table>tfoot>tr>td,
		.table>tfoot>tr>th,
		.table>thead>tr>td,
		.table>thead>tr>th {
			padding: 8px;
			line-height: 1.42857143;
			vertical-align: top;
			border-top: 1px solid #ddd
		}

		.table>thead>tr>th {
			vertical-align: bottom;
			border-bottom: 2px solid #ddd
		}

		.table>caption+thead>tr:first-child>td,
		.table>caption+thead>tr:first-child>th,
		.table>colgroup+thead>tr:first-child>td,
		.table>colgroup+thead>tr:first-child>th,
		.table>thead:first-child>tr:first-child>td,
		.table>thead:first-child>tr:first-child>th {
			border-top: 0
		}

		.table>tbody+tbody {
			border-top: 2px solid #ddd
		}

		.table .table {
			background-color: #fff
		}

		.table-condensed>tbody>tr>td,
		.table-condensed>tbody>tr>th,
		.table-condensed>tfoot>tr>td,
		.table-condensed>tfoot>tr>th,
		.table-condensed>thead>tr>td,
		.table-condensed>thead>tr>th {
			padding: 5px
		}

		.table-bordered {
			border: 1px solid #ddd
		}

		.table-bordered>tbody>tr>td,
		.table-bordered>tbody>tr>th,
		.table-bordered>tfoot>tr>td,
		.table-bordered>tfoot>tr>th,
		.table-bordered>thead>tr>td,
		.table-bordered>thead>tr>th {
			border: 1px solid #ddd
		}

		.table-bordered>thead>tr>td,
		.table-bordered>thead>tr>th {
			border-bottom-width: 2px
		}

		.table-striped>tbody>tr:nth-of-type(odd) {
			background-color: #f9f9f9
		}

		.table-hover>tbody>tr:hover {
			background-color: #f5f5f5
		}

		table col[class*=col-] {
			position: static;
			display: table-column;
			float: none
		}

		table td[class*=col-],
		table th[class*=col-] {
			position: static;
			display: table-cell;
			float: none
		}

		.table>tbody>tr.active>td,
		.table>tbody>tr.active>th,
		.table>tbody>tr>td.active,
		.table>tbody>tr>th.active,
		.table>tfoot>tr.active>td,
		.table>tfoot>tr.active>th,
		.table>tfoot>tr>td.active,
		.table>tfoot>tr>th.active,
		.table>thead>tr.active>td,
		.table>thead>tr.active>th,
		.table>thead>tr>td.active,
		.table>thead>tr>th.active {
			background-color: #f5f5f5
		}

		.table-hover>tbody>tr.active:hover>td,
		.table-hover>tbody>tr.active:hover>th,
		.table-hover>tbody>tr:hover>.active,
		.table-hover>tbody>tr>td.active:hover,
		.table-hover>tbody>tr>th.active:hover {
			background-color: #e8e8e8
		}

		.table>tbody>tr.success>td,
		.table>tbody>tr.success>th,
		.table>tbody>tr>td.success,
		.table>tbody>tr>th.success,
		.table>tfoot>tr.success>td,
		.table>tfoot>tr.success>th,
		.table>tfoot>tr>td.success,
		.table>tfoot>tr>th.success,
		.table>thead>tr.success>td,
		.table>thead>tr.success>th,
		.table>thead>tr>td.success,
		.table>thead>tr>th.success {
			background-color: #dff0d8
		}

		.table-hover>tbody>tr.success:hover>td,
		.table-hover>tbody>tr.success:hover>th,
		.table-hover>tbody>tr:hover>.success,
		.table-hover>tbody>tr>td.success:hover,
		.table-hover>tbody>tr>th.success:hover {
			background-color: #d0e9c6
		}

		.table>tbody>tr.info>td,
		.table>tbody>tr.info>th,
		.table>tbody>tr>td.info,
		.table>tbody>tr>th.info,
		.table>tfoot>tr.info>td,
		.table>tfoot>tr.info>th,
		.table>tfoot>tr>td.info,
		.table>tfoot>tr>th.info,
		.table>thead>tr.info>td,
		.table>thead>tr.info>th,
		.table>thead>tr>td.info,
		.table>thead>tr>th.info {
			background-color: #d9edf7
		}

		.table-hover>tbody>tr.info:hover>td,
		.table-hover>tbody>tr.info:hover>th,
		.table-hover>tbody>tr:hover>.info,
		.table-hover>tbody>tr>td.info:hover,
		.table-hover>tbody>tr>th.info:hover {
			background-color: #c4e3f3
		}

		.table>tbody>tr.warning>td,
		.table>tbody>tr.warning>th,
		.table>tbody>tr>td.warning,
		.table>tbody>tr>th.warning,
		.table>tfoot>tr.warning>td,
		.table>tfoot>tr.warning>th,
		.table>tfoot>tr>td.warning,
		.table>tfoot>tr>th.warning,
		.table>thead>tr.warning>td,
		.table>thead>tr.warning>th,
		.table>thead>tr>td.warning,
		.table>thead>tr>th.warning {
			background-color: #fcf8e3
		}

		.table-hover>tbody>tr.warning:hover>td,
		.table-hover>tbody>tr.warning:hover>th,
		.table-hover>tbody>tr:hover>.warning,
		.table-hover>tbody>tr>td.warning:hover,
		.table-hover>tbody>tr>th.warning:hover {
			background-color: #faf2cc
		}

		.table>tbody>tr.danger>td,
		.table>tbody>tr.danger>th,
		.table>tbody>tr>td.danger,
		.table>tbody>tr>th.danger,
		.table>tfoot>tr.danger>td,
		.table>tfoot>tr.danger>th,
		.table>tfoot>tr>td.danger,
		.table>tfoot>tr>th.danger,
		.table>thead>tr.danger>td,
		.table>thead>tr.danger>th,
		.table>thead>tr>td.danger,
		.table>thead>tr>th.danger {
			background-color: #f2dede
		}

		.table-hover>tbody>tr.danger:hover>td,
		.table-hover>tbody>tr.danger:hover>th,
		.table-hover>tbody>tr:hover>.danger,
		.table-hover>tbody>tr>td.danger:hover,
		.table-hover>tbody>tr>th.danger:hover {
			background-color: #ebcccc
		}

		.table-responsive {
			min-height: .01%;
			overflow-x: auto
		}

		@media screen and (max-width:767px) {
			.table-responsive {
				width: 100%;
				margin-bottom: 15px;
				overflow-y: hidden;
				-ms-overflow-style: -ms-autohiding-scrollbar;
				border: 1px solid #ddd
			}

			.table-responsive>.table {
				margin-bottom: 0
			}

			.table-responsive>.table>tbody>tr>td,
			.table-responsive>.table>tbody>tr>th,
			.table-responsive>.table>tfoot>tr>td,
			.table-responsive>.table>tfoot>tr>th,
			.table-responsive>.table>thead>tr>td,
			.table-responsive>.table>thead>tr>th {
				white-space: nowrap
			}

			.table-responsive>.table-bordered {
				border: 0
			}

			.table-responsive>.table-bordered>tbody>tr>td:first-child,
			.table-responsive>.table-bordered>tbody>tr>th:first-child,
			.table-responsive>.table-bordered>tfoot>tr>td:first-child,
			.table-responsive>.table-bordered>tfoot>tr>th:first-child,
			.table-responsive>.table-bordered>thead>tr>td:first-child,
			.table-responsive>.table-bordered>thead>tr>th:first-child {
				border-left: 0
			}

			.table-responsive>.table-bordered>tbody>tr>td:last-child,
			.table-responsive>.table-bordered>tbody>tr>th:last-child,
			.table-responsive>.table-bordered>tfoot>tr>td:last-child,
			.table-responsive>.table-bordered>tfoot>tr>th:last-child,
			.table-responsive>.table-bordered>thead>tr>td:last-child,
			.table-responsive>.table-bordered>thead>tr>th:last-child {
				border-right: 0
			}

			.table-responsive>.table-bordered>tbody>tr:last-child>td,
			.table-responsive>.table-bordered>tbody>tr:last-child>th,
			.table-responsive>.table-bordered>tfoot>tr:last-child>td,
			.table-responsive>.table-bordered>tfoot>tr:last-child>th {
				border-bottom: 0
			}
		}

		fieldset {
			min-width: 0;
			padding: 0;
			margin: 0;
			border: 0
		}

		legend {
			display: block;
			width: 100%;
			padding: 0;
			margin-bottom: 20px;
			font-size: 21px;
			line-height: inherit;
			color: #333;
			border: 0;
			border-bottom: 1px solid #e5e5e5
		}

		label {
			display: inline-block;
			max-width: 100%;
			margin-bottom: 5px;
			font-weight: 700
		}

		input[type=search] {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		input[type=checkbox],
		input[type=radio] {
			margin: 4px 0 0;
			margin-top: 1px\9;
			line-height: normal
		}

		input[type=file] {
			display: block
		}

		input[type=range] {
			display: block;
			width: 100%
		}

		select[multiple],
		select[size] {
			height: auto
		}

		input[type=file]:focus,
		input[type=checkbox]:focus,
		input[type=radio]:focus {
			outline: thin dotted;
			outline: 5px auto -webkit-focus-ring-color;
			outline-offset: -2px
		}

		output {
			display: block;
			padding-top: 7px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555
		}

		.form-control {
			display: block;
			width: 100%;
			height: 34px;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
			color: #555;
			background-color: #fff;
			background-image: none;
			border: 1px solid #ccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
		}

		.form-control:focus {
			border-color: #66afe9;
			outline: 0;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
		}

		.form-control::-moz-placeholder {
			color: #999;
			opacity: 1
		}

		.form-control:-ms-input-placeholder {
			color: #999
		}

		.form-control::-webkit-input-placeholder {
			color: #999
		}

		.form-control::-ms-expand {
			background-color: transparent;
			border: 0
		}

		.form-control[disabled],
		.form-control[readonly],
		fieldset[disabled] .form-control {
			background-color: #eee;
			opacity: 1
		}

		.form-control[disabled],
		fieldset[disabled] .form-control {
			cursor: not-allowed
		}

		textarea.form-control {
			height: auto
		}

		input[type=search] {
			-webkit-appearance: none
		}

		@media screen and (-webkit-min-device-pixel-ratio:0) {

			input[type=date].form-control,
			input[type=time].form-control,
			input[type=datetime-local].form-control,
			input[type=month].form-control {
				line-height: 34px
			}

			.input-group-sm input[type=date],
			.input-group-sm input[type=time],
			.input-group-sm input[type=datetime-local],
			.input-group-sm input[type=month],
			input[type=date].input-sm,
			input[type=time].input-sm,
			input[type=datetime-local].input-sm,
			input[type=month].input-sm {
				line-height: 30px
			}

			.input-group-lg input[type=date],
			.input-group-lg input[type=time],
			.input-group-lg input[type=datetime-local],
			.input-group-lg input[type=month],
			input[type=date].input-lg,
			input[type=time].input-lg,
			input[type=datetime-local].input-lg,
			input[type=month].input-lg {
				line-height: 46px
			}
		}

		.form-group {
			margin-bottom: 15px
		}

		.checkbox,
		.radio {
			position: relative;
			display: block;
			margin-top: 10px;
			margin-bottom: 10px
		}

		.checkbox label,
		.radio label {
			min-height: 20px;
			padding-left: 20px;
			margin-bottom: 0;
			font-weight: 400;
			cursor: pointer
		}

		.checkbox input[type=checkbox],
		.checkbox-inline input[type=checkbox],
		.radio input[type=radio],
		.radio-inline input[type=radio] {
			position: absolute;
			margin-top: 4px\9;
			margin-left: -20px
		}

		.checkbox+.checkbox,
		.radio+.radio {
			margin-top: -5px
		}

		.checkbox-inline,
		.radio-inline {
			position: relative;
			display: inline-block;
			padding-left: 20px;
			margin-bottom: 0;
			font-weight: 400;
			vertical-align: middle;
			cursor: pointer
		}

		.checkbox-inline+.checkbox-inline,
		.radio-inline+.radio-inline {
			margin-top: 0;
			margin-left: 10px
		}

		fieldset[disabled] input[type=checkbox],
		fieldset[disabled] input[type=radio],
		input[type=checkbox].disabled,
		input[type=checkbox][disabled],
		input[type=radio].disabled,
		input[type=radio][disabled] {
			cursor: not-allowed
		}

		.checkbox-inline.disabled,
		.radio-inline.disabled,
		fieldset[disabled] .checkbox-inline,
		fieldset[disabled] .radio-inline {
			cursor: not-allowed
		}

		.checkbox.disabled label,
		.radio.disabled label,
		fieldset[disabled] .checkbox label,
		fieldset[disabled] .radio label {
			cursor: not-allowed
		}

		.form-control-static {
			min-height: 34px;
			padding-top: 7px;
			padding-bottom: 7px;
			margin-bottom: 0
		}

		.form-control-static.input-lg,
		.form-control-static.input-sm {
			padding-right: 0;
			padding-left: 0
		}

		.input-sm {
			height: 30px;
			padding: 5px 10px;
			font-size: 12px;
			line-height: 1.5;
			border-radius: 3px
		}

		select.input-sm {
			height: 30px;
			line-height: 30px
		}

		select[multiple].input-sm,
		textarea.input-sm {
			height: auto
		}

		.form-group-sm .form-control {
			height: 30px;
			padding: 5px 10px;
			font-size: 12px;
			line-height: 1.5;
			border-radius: 3px
		}

		.form-group-sm select.form-control {
			height: 30px;
			line-height: 30px
		}

		.form-group-sm select[multiple].form-control,
		.form-group-sm textarea.form-control {
			height: auto
		}

		.form-group-sm .form-control-static {
			height: 30px;
			min-height: 32px;
			padding: 6px 10px;
			font-size: 12px;
			line-height: 1.5
		}

		.input-lg {
			height: 46px;
			padding: 10px 16px;
			font-size: 18px;
			line-height: 1.3333333;
			border-radius: 6px
		}

		select.input-lg {
			height: 46px;
			line-height: 46px
		}

		select[multiple].input-lg,
		textarea.input-lg {
			height: auto
		}

		.form-group-lg .form-control {
			height: 46px;
			padding: 10px 16px;
			font-size: 18px;
			line-height: 1.3333333;
			border-radius: 6px
		}

		.form-group-lg select.form-control {
			height: 46px;
			line-height: 46px
		}

		.form-group-lg select[multiple].form-control,
		.form-group-lg textarea.form-control {
			height: auto
		}

		.form-group-lg .form-control-static {
			height: 46px;
			min-height: 38px;
			padding: 11px 16px;
			font-size: 18px;
			line-height: 1.3333333
		}

		.has-feedback {
			position: relative
		}

		.has-feedback .form-control {
			padding-right: 42.5px
		}

		.form-control-feedback {
			position: absolute;
			top: 0;
			right: 0;
			z-index: 2;
			display: block;
			width: 34px;
			height: 34px;
			line-height: 34px;
			text-align: center;
			pointer-events: none
		}

		.form-group-lg .form-control+.form-control-feedback,
		.input-group-lg+.form-control-feedback,
		.input-lg+.form-control-feedback {
			width: 46px;
			height: 46px;
			line-height: 46px
		}

		.form-group-sm .form-control+.form-control-feedback,
		.input-group-sm+.form-control-feedback,
		.input-sm+.form-control-feedback {
			width: 30px;
			height: 30px;
			line-height: 30px
		}

		.has-success .checkbox,
		.has-success .checkbox-inline,
		.has-success .control-label,
		.has-success .help-block,
		.has-success .radio,
		.has-success .radio-inline,
		.has-success.checkbox label,
		.has-success.checkbox-inline label,
		.has-success.radio label,
		.has-success.radio-inline label {
			color: #3c763d
		}

		.has-success .form-control {
			border-color: #3c763d;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
		}

		.has-success .form-control:focus {
			border-color: #2b542c;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
		}

		.has-success .input-group-addon {
			color: #3c763d;
			background-color: #dff0d8;
			border-color: #3c763d
		}

		.has-success .form-control-feedback {
			color: #3c763d
		}

		.has-warning .checkbox,
		.has-warning .checkbox-inline,
		.has-warning .control-label,
		.has-warning .help-block,
		.has-warning .radio,
		.has-warning .radio-inline,
		.has-warning.checkbox label,
		.has-warning.checkbox-inline label,
		.has-warning.radio label,
		.has-warning.radio-inline label {
			color: #8a6d3b
		}

		.has-warning .form-control {
			border-color: #8a6d3b;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
		}

		.has-warning .form-control:focus {
			border-color: #66512c;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
		}

		.has-warning .input-group-addon {
			color: #8a6d3b;
			background-color: #fcf8e3;
			border-color: #8a6d3b
		}

		.has-warning .form-control-feedback {
			color: #8a6d3b
		}

		.has-error .checkbox,
		.has-error .checkbox-inline,
		.has-error .control-label,
		.has-error .help-block,
		.has-error .radio,
		.has-error .radio-inline,
		.has-error.checkbox label,
		.has-error.checkbox-inline label,
		.has-error.radio label,
		.has-error.radio-inline label {
			color: #a94442
		}

		.has-error .form-control {
			border-color: #a94442;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
		}

		.has-error .form-control:focus {
			border-color: #843534;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
		}

		.has-error .input-group-addon {
			color: #a94442;
			background-color: #f2dede;
			border-color: #a94442
		}

		.has-error .form-control-feedback {
			color: #a94442
		}

		.has-feedback label~.form-control-feedback {
			top: 25px
		}

		.has-feedback label.sr-only~.form-control-feedback {
			top: 0
		}

		.help-block {
			display: block;
			margin-top: 5px;
			margin-bottom: 10px;
			color: #737373
		}

		@media (min-width:768px) {
			.form-inline .form-group {
				display: inline-block;
				margin-bottom: 0;
				vertical-align: middle
			}

			.form-inline .form-control {
				display: inline-block;
				width: auto;
				vertical-align: middle
			}

			.form-inline .form-control-static {
				display: inline-block
			}

			.form-inline .input-group {
				display: inline-table;
				vertical-align: middle
			}

			.form-inline .input-group .form-control,
			.form-inline .input-group .input-group-addon,
			.form-inline .input-group .input-group-btn {
				width: auto
			}

			.form-inline .input-group>.form-control {
				width: 100%
			}

			.form-inline .control-label {
				margin-bottom: 0;
				vertical-align: middle
			}

			.form-inline .checkbox,
			.form-inline .radio {
				display: inline-block;
				margin-top: 0;
				margin-bottom: 0;
				vertical-align: middle
			}

			.form-inline .checkbox label,
			.form-inline .radio label {
				padding-left: 0
			}

			.form-inline .checkbox input[type=checkbox],
			.form-inline .radio input[type=radio] {
				position: relative;
				margin-left: 0
			}

			.form-inline .has-feedback .form-control-feedback {
				top: 0
			}
		}

		.form-horizontal .checkbox,
		.form-horizontal .checkbox-inline,
		.form-horizontal .radio,
		.form-horizontal .radio-inline {
			padding-top: 7px;
			margin-top: 0;
			margin-bottom: 0
		}

		.form-horizontal .checkbox,
		.form-horizontal .radio {
			min-height: 27px
		}

		.form-horizontal .form-group {
			margin-right: -15px;
			margin-left: -15px
		}

		@media (min-width:768px) {
			.form-horizontal .control-label {
				padding-top: 7px;
				margin-bottom: 0;
				text-align: right
			}
		}

		.form-horizontal .has-feedback .form-control-feedback {
			right: 15px
		}

		@media (min-width:768px) {
			.form-horizontal .form-group-lg .control-label {
				padding-top: 11px;
				font-size: 18px
			}
		}

		@media (min-width:768px) {
			.form-horizontal .form-group-sm .control-label {
				padding-top: 6px;
				font-size: 12px
			}
		}

		.btn {
			display: inline-block;
			padding: 6px 12px;
			margin-bottom: 0;
			font-size: 14px;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			-ms-touch-action: manipulation;
			touch-action: manipulation;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px
		}

		.btn.active.focus,
		.btn.active:focus,
		.btn.focus,
		.btn:active.focus,
		.btn:active:focus,
		.btn:focus {
			outline: thin dotted;
			outline: 5px auto -webkit-focus-ring-color;
			outline-offset: -2px
		}

		.btn.focus,
		.btn:focus,
		.btn:hover {
			color: #333;
			text-decoration: none
		}

		.btn.active,
		.btn:active {
			background-image: none;
			outline: 0;
			-webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
			box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
		}

		.btn.disabled,
		.btn[disabled],
		fieldset[disabled] .btn {
			cursor: not-allowed;
			filter: alpha(opacity=65);
			-webkit-box-shadow: none;
			box-shadow: none;
			opacity: .65
		}

		a.btn.disabled,
		fieldset[disabled] a.btn {
			pointer-events: none
		}

		.btn-default {
			color: #333;
			background-color: #fff;
			border-color: #ccc
		}

		.btn-default.focus,
		.btn-default:focus {
			color: #333;
			background-color: #e6e6e6;
			border-color: #8c8c8c
		}

		.btn-default:hover {
			color: #333;
			background-color: #e6e6e6;
			border-color: #adadad
		}

		.btn-default.active,
		.btn-default:active,
		.open>.dropdown-toggle.btn-default {
			color: #333;
			background-color: #e6e6e6;
			border-color: #adadad
		}

		.btn-default.active.focus,
		.btn-default.active:focus,
		.btn-default.active:hover,
		.btn-default:active.focus,
		.btn-default:active:focus,
		.btn-default:active:hover,
		.open>.dropdown-toggle.btn-default.focus,
		.open>.dropdown-toggle.btn-default:focus,
		.open>.dropdown-toggle.btn-default:hover {
			color: #333;
			background-color: #d4d4d4;
			border-color: #8c8c8c
		}

		.btn-default.active,
		.btn-default:active,
		.open>.dropdown-toggle.btn-default {
			background-image: none
		}

		.btn-default.disabled.focus,
		.btn-default.disabled:focus,
		.btn-default.disabled:hover,
		.btn-default[disabled].focus,
		.btn-default[disabled]:focus,
		.btn-default[disabled]:hover,
		fieldset[disabled] .btn-default.focus,
		fieldset[disabled] .btn-default:focus,
		fieldset[disabled] .btn-default:hover {
			background-color: #fff;
			border-color: #ccc
		}

		.btn-default .badge {
			color: #fff;
			background-color: #333
		}

		.btn-primary {
			color: #fff;
			background-color: #337ab7;
			border-color: #2e6da4
		}

		.btn-primary.focus,
		.btn-primary:focus {
			color: #fff;
			background-color: #286090;
			border-color: #122b40
		}

		.btn-primary:hover {
			color: #fff;
			background-color: #286090;
			border-color: #204d74
		}

		.btn-primary.active,
		.btn-primary:active,
		.open>.dropdown-toggle.btn-primary {
			color: #fff;
			background-color: #286090;
			border-color: #204d74
		}

		.btn-primary.active.focus,
		.btn-primary.active:focus,
		.btn-primary.active:hover,
		.btn-primary:active.focus,
		.btn-primary:active:focus,
		.btn-primary:active:hover,
		.open>.dropdown-toggle.btn-primary.focus,
		.open>.dropdown-toggle.btn-primary:focus,
		.open>.dropdown-toggle.btn-primary:hover {
			color: #fff;
			background-color: #204d74;
			border-color: #122b40
		}

		.btn-primary.active,
		.btn-primary:active,
		.open>.dropdown-toggle.btn-primary {
			background-image: none
		}

		.btn-primary.disabled.focus,
		.btn-primary.disabled:focus,
		.btn-primary.disabled:hover,
		.btn-primary[disabled].focus,
		.btn-primary[disabled]:focus,
		.btn-primary[disabled]:hover,
		fieldset[disabled] .btn-primary.focus,
		fieldset[disabled] .btn-primary:focus,
		fieldset[disabled] .btn-primary:hover {
			background-color: #337ab7;
			border-color: #2e6da4
		}

		.btn-primary .badge {
			color: #337ab7;
			background-color: #fff
		}

		.btn-success {
			color: #fff;
			background-color: #5cb85c;
			border-color: #4cae4c
		}

		.btn-success.focus,
		.btn-success:focus {
			color: #fff;
			background-color: #449d44;
			border-color: #255625
		}

		.btn-success:hover {
			color: #fff;
			background-color: #449d44;
			border-color: #398439
		}

		.btn-success.active,
		.btn-success:active,
		.open>.dropdown-toggle.btn-success {
			color: #fff;
			background-color: #449d44;
			border-color: #398439
		}

		.btn-success.active.focus,
		.btn-success.active:focus,
		.btn-success.active:hover,
		.btn-success:active.focus,
		.btn-success:active:focus,
		.btn-success:active:hover,
		.open>.dropdown-toggle.btn-success.focus,
		.open>.dropdown-toggle.btn-success:focus,
		.open>.dropdown-toggle.btn-success:hover {
			color: #fff;
			background-color: #398439;
			border-color: #255625
		}

		.btn-success.active,
		.btn-success:active,
		.open>.dropdown-toggle.btn-success {
			background-image: none
		}

		.btn-success.disabled.focus,
		.btn-success.disabled:focus,
		.btn-success.disabled:hover,
		.btn-success[disabled].focus,
		.btn-success[disabled]:focus,
		.btn-success[disabled]:hover,
		fieldset[disabled] .btn-success.focus,
		fieldset[disabled] .btn-success:focus,
		fieldset[disabled] .btn-success:hover {
			background-color: #5cb85c;
			border-color: #4cae4c
		}

		.btn-success .badge {
			color: #5cb85c;
			background-color: #fff
		}

		.btn-info {
			color: #fff;
			background-color: #5bc0de;
			border-color: #46b8da
		}

		.btn-info.focus,
		.btn-info:focus {
			color: #fff;
			background-color: #31b0d5;
			border-color: #1b6d85
		}

		.btn-info:hover {
			color: #fff;
			background-color: #31b0d5;
			border-color: #269abc
		}

		.btn-info.active,
		.btn-info:active,
		.open>.dropdown-toggle.btn-info {
			color: #fff;
			background-color: #31b0d5;
			border-color: #269abc
		}

		.btn-info.active.focus,
		.btn-info.active:focus,
		.btn-info.active:hover,
		.btn-info:active.focus,
		.btn-info:active:focus,
		.btn-info:active:hover,
		.open>.dropdown-toggle.btn-info.focus,
		.open>.dropdown-toggle.btn-info:focus,
		.open>.dropdown-toggle.btn-info:hover {
			color: #fff;
			background-color: #269abc;
			border-color: #1b6d85
		}

		.btn-info.active,
		.btn-info:active,
		.open>.dropdown-toggle.btn-info {
			background-image: none
		}

		.btn-info.disabled.focus,
		.btn-info.disabled:focus,
		.btn-info.disabled:hover,
		.btn-info[disabled].focus,
		.btn-info[disabled]:focus,
		.btn-info[disabled]:hover,
		fieldset[disabled] .btn-info.focus,
		fieldset[disabled] .btn-info:focus,
		fieldset[disabled] .btn-info:hover {
			background-color: #5bc0de;
			border-color: #46b8da
		}

		.btn-info .badge {
			color: #5bc0de;
			background-color: #fff
		}

		.btn-warning {
			color: #fff;
			background-color: #f0ad4e;
			border-color: #eea236
		}

		.btn-warning.focus,
		.btn-warning:focus {
			color: #fff;
			background-color: #ec971f;
			border-color: #985f0d
		}

		.btn-warning:hover {
			color: #fff;
			background-color: #ec971f;
			border-color: #d58512
		}

		.btn-warning.active,
		.btn-warning:active,
		.open>.dropdown-toggle.btn-warning {
			color: #fff;
			background-color: #ec971f;
			border-color: #d58512
		}

		.btn-warning.active.focus,
		.btn-warning.active:focus,
		.btn-warning.active:hover,
		.btn-warning:active.focus,
		.btn-warning:active:focus,
		.btn-warning:active:hover,
		.open>.dropdown-toggle.btn-warning.focus,
		.open>.dropdown-toggle.btn-warning:focus,
		.open>.dropdown-toggle.btn-warning:hover {
			color: #fff;
			background-color: #d58512;
			border-color: #985f0d
		}

		.btn-warning.active,
		.btn-warning:active,
		.open>.dropdown-toggle.btn-warning {
			background-image: none
		}

		.btn-warning.disabled.focus,
		.btn-warning.disabled:focus,
		.btn-warning.disabled:hover,
		.btn-warning[disabled].focus,
		.btn-warning[disabled]:focus,
		.btn-warning[disabled]:hover,
		fieldset[disabled] .btn-warning.focus,
		fieldset[disabled] .btn-warning:focus,
		fieldset[disabled] .btn-warning:hover {
			background-color: #f0ad4e;
			border-color: #eea236
		}

		.btn-warning .badge {
			color: #f0ad4e;
			background-color: #fff
		}

		.btn-danger {
			color: #fff;
			background-color: #d9534f;
			border-color: #d43f3a
		}

		.btn-danger.focus,
		.btn-danger:focus {
			color: #fff;
			background-color: #c9302c;
			border-color: #761c19
		}

		.btn-danger:hover {
			color: #fff;
			background-color: #c9302c;
			border-color: #ac2925
		}

		.btn-danger.active,
		.btn-danger:active,
		.open>.dropdown-toggle.btn-danger {
			color: #fff;
			background-color: #c9302c;
			border-color: #ac2925
		}

		.btn-danger.active.focus,
		.btn-danger.active:focus,
		.btn-danger.active:hover,
		.btn-danger:active.focus,
		.btn-danger:active:focus,
		.btn-danger:active:hover,
		.open>.dropdown-toggle.btn-danger.focus,
		.open>.dropdown-toggle.btn-danger:focus,
		.open>.dropdown-toggle.btn-danger:hover {
			color: #fff;
			background-color: #ac2925;
			border-color: #761c19
		}

		.btn-danger.active,
		.btn-danger:active,
		.open>.dropdown-toggle.btn-danger {
			background-image: none
		}

		.btn-danger.disabled.focus,
		.btn-danger.disabled:focus,
		.btn-danger.disabled:hover,
		.btn-danger[disabled].focus,
		.btn-danger[disabled]:focus,
		.btn-danger[disabled]:hover,
		fieldset[disabled] .btn-danger.focus,
		fieldset[disabled] .btn-danger:focus,
		fieldset[disabled] .btn-danger:hover {
			background-color: #d9534f;
			border-color: #d43f3a
		}

		.btn-danger .badge {
			color: #d9534f;
			background-color: #fff
		}

		.btn-link {
			font-weight: 400;
			color: #337ab7;
			border-radius: 0
		}

		.btn-link,
		.btn-link.active,
		.btn-link:active,
		.btn-link[disabled],
		fieldset[disabled] .btn-link {
			background-color: transparent;
			-webkit-box-shadow: none;
			box-shadow: none
		}

		.btn-link,
		.btn-link:active,
		.btn-link:focus,
		.btn-link:hover {
			border-color: transparent
		}

		.btn-link:focus,
		.btn-link:hover {
			color: #23527c;
			text-decoration: underline;
			background-color: transparent
		}

		.btn-link[disabled]:focus,
		.btn-link[disabled]:hover,
		fieldset[disabled] .btn-link:focus,
		fieldset[disabled] .btn-link:hover {
			color: #777;
			text-decoration: none
		}

		.btn-group-lg>.btn,
		.btn-lg {
			padding: 10px 16px;
			font-size: 18px;
			line-height: 1.3333333;
			border-radius: 6px
		}

		.btn-group-sm>.btn,
		.btn-sm {
			padding: 5px 10px;
			font-size: 12px;
			line-height: 1.5;
			border-radius: 3px
		}

		.btn-group-xs>.btn,
		.btn-xs {
			padding: 1px 5px;
			font-size: 12px;
			line-height: 1.5;
			border-radius: 3px
		}

		.btn-block {
			display: block;
			width: 100%
		}

		.btn-block+.btn-block {
			margin-top: 5px
		}

		input[type=button].btn-block,
		input[type=reset].btn-block,
		input[type=submit].btn-block {
			width: 100%
		}

		.fade {
			opacity: 0;
			-webkit-transition: opacity .15s linear;
			-o-transition: opacity .15s linear;
			transition: opacity .15s linear
		}

		.fade.in {
			opacity: 1
		}

		.collapse {
			display: none
		}

		.collapse.in {
			display: block
		}

		tr.collapse.in {
			display: table-row
		}

		tbody.collapse.in {
			display: table-row-group
		}

		.collapsing {
			position: relative;
			height: 0;
			overflow: hidden;
			-webkit-transition-timing-function: ease;
			-o-transition-timing-function: ease;
			transition-timing-function: ease;
			-webkit-transition-duration: .35s;
			-o-transition-duration: .35s;
			transition-duration: .35s;
			-webkit-transition-property: height, visibility;
			-o-transition-property: height, visibility;
			transition-property: height, visibility
		}

		.caret {
			display: inline-block;
			width: 0;
			height: 0;
			margin-left: 2px;
			vertical-align: middle;
			border-top: 4px dashed;
			border-top: 4px solid\9;
			border-right: 4px solid transparent;
			border-left: 4px solid transparent
		}

		.dropdown,
		.dropup {
			position: relative
		}

		.dropdown-toggle:focus {
			outline: 0
		}

		.dropdown-menu {
			position: absolute;
			top: 100%;
			left: 0;
			z-index: 1000;
			display: none;
			float: left;
			min-width: 160px;
			padding: 5px 0;
			margin: 2px 0 0;
			font-size: 14px;
			text-align: left;
			list-style: none;
			background-color: #fff;
			-webkit-background-clip: padding-box;
			background-clip: padding-box;
			border: 1px solid #ccc;
			border: 1px solid rgba(0, 0, 0, .15);
			border-radius: 4px;
			-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
			box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
		}

		.dropdown-menu.pull-right {
			right: 0;
			left: auto
		}

		.dropdown-menu .divider {
			height: 1px;
			margin: 9px 0;
			overflow: hidden;
			background-color: #e5e5e5
		}

		.dropdown-menu>li>a {
			display: block;
			padding: 3px 20px;
			clear: both;
			font-weight: 400;
			line-height: 1.42857143;
			color: #333;
			white-space: nowrap
		}

		.dropdown-menu>li>a:focus,
		.dropdown-menu>li>a:hover {
			color: #262626;
			text-decoration: none;
			background-color: #f5f5f5
		}

		.dropdown-menu>.active>a,
		.dropdown-menu>.active>a:focus,
		.dropdown-menu>.active>a:hover {
			color: #fff;
			text-decoration: none;
			background-color: #337ab7;
			outline: 0
		}

		.dropdown-menu>.disabled>a,
		.dropdown-menu>.disabled>a:focus,
		.dropdown-menu>.disabled>a:hover {
			color: #777
		}

		.dropdown-menu>.disabled>a:focus,
		.dropdown-menu>.disabled>a:hover {
			text-decoration: none;
			cursor: not-allowed;
			background-color: transparent;
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.gradient(enabled=false)
		}

		.open>.dropdown-menu {
			display: block
		}

		.open>a {
			outline: 0
		}

		.dropdown-menu-right {
			right: 0;
			left: auto
		}

		.dropdown-menu-left {
			right: auto;
			left: 0
		}

		.dropdown-header {
			display: block;
			padding: 3px 20px;
			font-size: 12px;
			line-height: 1.42857143;
			color: #777;
			white-space: nowrap
		}

		.dropdown-backdrop {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 990
		}

		.pull-right>.dropdown-menu {
			right: 0;
			left: auto
		}

		.dropup .caret,
		.navbar-fixed-bottom .dropdown .caret {
			content: "";
			border-top: 0;
			border-bottom: 4px dashed;
			border-bottom: 4px solid\9
		}

		.dropup .dropdown-menu,
		.navbar-fixed-bottom .dropdown .dropdown-menu {
			top: auto;
			bottom: 100%;
			margin-bottom: 2px
		}

		@media (min-width:768px) {
			.navbar-right .dropdown-menu {
				right: 0;
				left: auto
			}

			.navbar-right .dropdown-menu-left {
				right: auto;
				left: 0
			}
		}

		.btn-group,
		.btn-group-vertical {
			position: relative;
			display: inline-block;
			vertical-align: middle
		}

		.btn-group-vertical>.btn,
		.btn-group>.btn {
			position: relative;
			float: left
		}

		.btn-group-vertical>.btn.active,
		.btn-group-vertical>.btn:active,
		.btn-group-vertical>.btn:focus,
		.btn-group-vertical>.btn:hover,
		.btn-group>.btn.active,
		.btn-group>.btn:active,
		.btn-group>.btn:focus,
		.btn-group>.btn:hover {
			z-index: 2
		}

		.btn-group .btn+.btn,
		.btn-group .btn+.btn-group,
		.btn-group .btn-group+.btn,
		.btn-group .btn-group+.btn-group {
			margin-left: -1px
		}

		.btn-toolbar {
			margin-left: -5px
		}

		.btn-toolbar .btn,
		.btn-toolbar .btn-group,
		.btn-toolbar .input-group {
			float: left
		}

		.btn-toolbar>.btn,
		.btn-toolbar>.btn-group,
		.btn-toolbar>.input-group {
			margin-left: 5px
		}

		.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
			border-radius: 0
		}

		.btn-group>.btn:first-child {
			margin-left: 0
		}

		.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
			border-top-right-radius: 0;
			border-bottom-right-radius: 0
		}

		.btn-group>.btn:last-child:not(:first-child),
		.btn-group>.dropdown-toggle:not(:first-child) {
			border-top-left-radius: 0;
			border-bottom-left-radius: 0
		}

		.btn-group>.btn-group {
			float: left
		}

		.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
			border-radius: 0
		}

		.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
		.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
			border-top-right-radius: 0;
			border-bottom-right-radius: 0
		}

		.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
			border-top-left-radius: 0;
			border-bottom-left-radius: 0
		}

		.btn-group .dropdown-toggle:active,
		.btn-group.open .dropdown-toggle {
			outline: 0
		}

		.btn-group>.btn+.dropdown-toggle {
			padding-right: 8px;
			padding-left: 8px
		}

		.btn-group>.btn-lg+.dropdown-toggle {
			padding-right: 12px;
			padding-left: 12px
		}

		.btn-group.open .dropdown-toggle {
			-webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
			box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
		}

		.btn-group.open .dropdown-toggle.btn-link {
			-webkit-box-shadow: none;
			box-shadow: none
		}

		.btn .caret {
			margin-left: 0
		}

		.btn-lg .caret {
			border-width: 5px 5px 0;
			border-bottom-width: 0
		}

		.dropup .btn-lg .caret {
			border-width: 0 5px 5px
		}

		.btn-group-vertical>.btn,
		.btn-group-vertical>.btn-group,
		.btn-group-vertical>.btn-group>.btn {
			display: block;
			float: none;
			width: 100%;
			max-width: 100%
		}

		.btn-group-vertical>.btn-group>.btn {
			float: none
		}

		.btn-group-vertical>.btn+.btn,
		.btn-group-vertical>.btn+.btn-group,
		.btn-group-vertical>.btn-group+.btn,
		.btn-group-vertical>.btn-group+.btn-group {
			margin-top: -1px;
			margin-left: 0
		}

		.btn-group-vertical>.btn:not(:first-child):not(:last-child) {
			border-radius: 0
		}

		.btn-group-vertical>.btn:first-child:not(:last-child) {
			border-top-left-radius: 4px;
			border-top-right-radius: 4px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0
		}

		.btn-group-vertical>.btn:last-child:not(:first-child) {
			border-top-left-radius: 0;
			border-top-right-radius: 0;
			border-bottom-right-radius: 4px;
			border-bottom-left-radius: 4px
		}

		.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
			border-radius: 0
		}

		.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
		.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0
		}

		.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
			border-top-left-radius: 0;
			border-top-right-radius: 0
		}

		.btn-group-justified {
			display: table;
			width: 100%;
			table-layout: fixed;
			border-collapse: separate
		}

		.btn-group-justified>.btn,
		.btn-group-justified>.btn-group {
			display: table-cell;
			float: none;
			width: 1%
		}

		.btn-group-justified>.btn-group .btn {
			width: 100%
		}

		.btn-group-justified>.btn-group .dropdown-menu {
			left: auto
		}

		[data-toggle=buttons]>.btn input[type=checkbox],
		[data-toggle=buttons]>.btn input[type=radio],
		[data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
		[data-toggle=buttons]>.btn-group>.btn input[type=radio] {
			position: absolute;
			clip: rect(0, 0, 0, 0);
			pointer-events: none
		}

		.input-group {
			position: relative;
			display: table;
			border-collapse: separate
		}

		.input-group[class*=col-] {
			float: none;
			padding-right: 0;
			padding-left: 0
		}

		.input-group .form-control {
			position: relative;
			z-index: 2;
			float: left;
			width: 100%;
			margin-bottom: 0
		}

		.input-group .form-control:focus {
			z-index: 3
		}

		.input-group-lg>.form-control,
		.input-group-lg>.input-group-addon,
		.input-group-lg>.input-group-btn>.btn {
			height: 46px;
			padding: 10px 16px;
			font-size: 18px;
			line-height: 1.3333333;
			border-radius: 6px
		}

		select.input-group-lg>.form-control,
		select.input-group-lg>.input-group-addon,
		select.input-group-lg>.input-group-btn>.btn {
			height: 46px;
			line-height: 46px
		}

		select[multiple].input-group-lg>.form-control,
		select[multiple].input-group-lg>.input-group-addon,
		select[multiple].input-group-lg>.input-group-btn>.btn,
		textarea.input-group-lg>.form-control,
		textarea.input-group-lg>.input-group-addon,
		textarea.input-group-lg>.input-group-btn>.btn {
			height: auto
		}

		.input-group-sm>.form-control,
		.input-group-sm>.input-group-addon,
		.input-group-sm>.input-group-btn>.btn {
			height: 30px;
			padding: 5px 10px;
			font-size: 12px;
			line-height: 1.5;
			border-radius: 3px
		}

		select.input-group-sm>.form-control,
		select.input-group-sm>.input-group-addon,
		select.input-group-sm>.input-group-btn>.btn {
			height: 30px;
			line-height: 30px
		}

		select[multiple].input-group-sm>.form-control,
		select[multiple].input-group-sm>.input-group-addon,
		select[multiple].input-group-sm>.input-group-btn>.btn,
		textarea.input-group-sm>.form-control,
		textarea.input-group-sm>.input-group-addon,
		textarea.input-group-sm>.input-group-btn>.btn {
			height: auto
		}

		.input-group .form-control,
		.input-group-addon,
		.input-group-btn {
			display: table-cell
		}

		.input-group .form-control:not(:first-child):not(:last-child),
		.input-group-addon:not(:first-child):not(:last-child),
		.input-group-btn:not(:first-child):not(:last-child) {
			border-radius: 0
		}

		.input-group-addon,
		.input-group-btn {
			width: 1%;
			white-space: nowrap;
			vertical-align: middle
		}

		.input-group-addon {
			padding: 6px 12px;
			font-size: 14px;
			font-weight: 400;
			line-height: 1;
			color: #555;
			text-align: center;
			background-color: #eee;
			border: 1px solid #ccc;
			border-radius: 4px
		}

		.input-group-addon.input-sm {
			padding: 5px 10px;
			font-size: 12px;
			border-radius: 3px
		}

		.input-group-addon.input-lg {
			padding: 10px 16px;
			font-size: 18px;
			border-radius: 6px
		}

		.input-group-addon input[type=checkbox],
		.input-group-addon input[type=radio] {
			margin-top: 0
		}

		.input-group .form-control:first-child,
		.input-group-addon:first-child,
		.input-group-btn:first-child>.btn,
		.input-group-btn:first-child>.btn-group>.btn,
		.input-group-btn:first-child>.dropdown-toggle,
		.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
		.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
			border-top-right-radius: 0;
			border-bottom-right-radius: 0
		}

		.input-group-addon:first-child {
			border-right: 0
		}

		.input-group .form-control:last-child,
		.input-group-addon:last-child,
		.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
		.input-group-btn:first-child>.btn:not(:first-child),
		.input-group-btn:last-child>.btn,
		.input-group-btn:last-child>.btn-group>.btn,
		.input-group-btn:last-child>.dropdown-toggle {
			border-top-left-radius: 0;
			border-bottom-left-radius: 0
		}

		.input-group-addon:last-child {
			border-left: 0
		}

		.input-group-btn {
			position: relative;
			font-size: 0;
			white-space: nowrap
		}

		.input-group-btn>.btn {
			position: relative
		}

		.input-group-btn>.btn+.btn {
			margin-left: -1px
		}

		.input-group-btn>.btn:active,
		.input-group-btn>.btn:focus,
		.input-group-btn>.btn:hover {
			z-index: 2
		}

		.input-group-btn:first-child>.btn,
		.input-group-btn:first-child>.btn-group {
			margin-right: -1px
		}

		.input-group-btn:last-child>.btn,
		.input-group-btn:last-child>.btn-group {
			z-index: 2;
			margin-left: -1px
		}

		.nav {
			padding-left: 0;
			margin-bottom: 0;
			list-style: none
		}

		.nav>li {
			position: relative;
			display: block
		}

		.nav>li>a {
			position: relative;
			display: block;
			padding: 10px 15px
		}

		.nav>li>a:focus,
		.nav>li>a:hover {
			text-decoration: none;
			background-color: #eee
		}

		.nav>li.disabled>a {
			color: #777
		}

		.nav>li.disabled>a:focus,
		.nav>li.disabled>a:hover {
			color: #777;
			text-decoration: none;
			cursor: not-allowed;
			background-color: transparent
		}

		.nav .open>a,
		.nav .open>a:focus,
		.nav .open>a:hover {
			background-color: #eee;
			border-color: #337ab7
		}

		.nav .nav-divider {
			height: 1px;
			margin: 9px 0;
			overflow: hidden;
			background-color: #e5e5e5
		}

		.nav>li>a>img {
			max-width: none
		}

		.nav-tabs {
			border-bottom: 1px solid #ddd
		}

		.nav-tabs>li {
			float: left;
			margin-bottom: -1px
		}

		.nav-tabs>li>a {
			margin-right: 2px;
			line-height: 1.42857143;
			border: 1px solid transparent;
			border-radius: 4px 4px 0 0
		}

		.nav-tabs>li>a:hover {
			border-color: #eee #eee #ddd
		}

		.nav-tabs>li.active>a,
		.nav-tabs>li.active>a:focus,
		.nav-tabs>li.active>a:hover {
			color: #555;
			cursor: default;
			background-color: #fff;
			border: 1px solid #ddd;
			border-bottom-color: transparent
		}

		.nav-tabs.nav-justified {
			width: 100%;
			border-bottom: 0
		}

		.nav-tabs.nav-justified>li {
			float: none
		}

		.nav-tabs.nav-justified>li>a {
			margin-bottom: 5px;
			text-align: center
		}

		.nav-tabs.nav-justified>.dropdown .dropdown-menu {
			top: auto;
			left: auto
		}

		@media (min-width:768px) {
			.nav-tabs.nav-justified>li {
				display: table-cell;
				width: 1%
			}

			.nav-tabs.nav-justified>li>a {
				margin-bottom: 0
			}
		}

		.nav-tabs.nav-justified>li>a {
			margin-right: 0;
			border-radius: 4px
		}

		.nav-tabs.nav-justified>.active>a,
		.nav-tabs.nav-justified>.active>a:focus,
		.nav-tabs.nav-justified>.active>a:hover {
			border: 1px solid #ddd
		}

		@media (min-width:768px) {
			.nav-tabs.nav-justified>li>a {
				border-bottom: 1px solid #ddd;
				border-radius: 4px 4px 0 0
			}

			.nav-tabs.nav-justified>.active>a,
			.nav-tabs.nav-justified>.active>a:focus,
			.nav-tabs.nav-justified>.active>a:hover {
				border-bottom-color: #fff
			}
		}

		.nav-pills>li {
			float: left
		}

		.nav-pills>li>a {
			border-radius: 4px
		}

		.nav-pills>li+li {
			margin-left: 2px
		}

		.nav-pills>li.active>a,
		.nav-pills>li.active>a:focus,
		.nav-pills>li.active>a:hover {
			color: #fff;
			background-color: #337ab7
		}

		.nav-stacked>li {
			float: none
		}

		.nav-stacked>li+li {
			margin-top: 2px;
			margin-left: 0
		}

		.nav-justified {
			width: 100%
		}

		.nav-justified>li {
			float: none
		}

		.nav-justified>li>a {
			margin-bottom: 5px;
			text-align: center
		}

		.nav-justified>.dropdown .dropdown-menu {
			top: auto;
			left: auto
		}

		@media (min-width:768px) {
			.nav-justified>li {
				display: table-cell;
				width: 1%
			}

			.nav-justified>li>a {
				margin-bottom: 0
			}
		}

		.nav-tabs-justified {
			border-bottom: 0
		}

		.nav-tabs-justified>li>a {
			margin-right: 0;
			border-radius: 4px
		}

		.nav-tabs-justified>.active>a,
		.nav-tabs-justified>.active>a:focus,
		.nav-tabs-justified>.active>a:hover {
			border: 1px solid #ddd
		}

		@media (min-width:768px) {
			.nav-tabs-justified>li>a {
				border-bottom: 1px solid #ddd;
				border-radius: 4px 4px 0 0
			}

			.nav-tabs-justified>.active>a,
			.nav-tabs-justified>.active>a:focus,
			.nav-tabs-justified>.active>a:hover {
				border-bottom-color: #fff
			}
		}

		.tab-content>.tab-pane {
			display: none
		}

		.tab-content>.active {
			display: block
		}

		.nav-tabs .dropdown-menu {
			margin-top: -1px;
			border-top-left-radius: 0;
			border-top-right-radius: 0
		}

		.navbar {
			position: relative;
			min-height: 50px;
			margin-bottom: 20px;
			border: 1px solid transparent
		}

		@media (min-width:768px) {
			.navbar {
				border-radius: 4px
			}
		}

		@media (min-width:768px) {
			.navbar-header {
				float: left
			}
		}

		.navbar-collapse {
			padding-right: 15px;
			padding-left: 15px;
			overflow-x: visible;
			-webkit-overflow-scrolling: touch;
			border-top: 1px solid transparent;
			-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
			box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1)
		}

		.navbar-collapse.in {
			overflow-y: auto
		}

		@media (min-width:768px) {
			.navbar-collapse {
				width: auto;
				border-top: 0;
				-webkit-box-shadow: none;
				box-shadow: none
			}

			.navbar-collapse.collapse {
				display: block !important;
				height: auto !important;
				padding-bottom: 0;
				overflow: visible !important
			}

			.navbar-collapse.in {
				overflow-y: visible
			}

			.navbar-fixed-bottom .navbar-collapse,
			.navbar-fixed-top .navbar-collapse,
			.navbar-static-top .navbar-collapse {
				padding-right: 0;
				padding-left: 0
			}
		}

		.navbar-fixed-bottom .navbar-collapse,
		.navbar-fixed-top .navbar-collapse {
			max-height: 340px
		}

		@media (max-device-width:480px) and (orientation:landscape) {

			.navbar-fixed-bottom .navbar-collapse,
			.navbar-fixed-top .navbar-collapse {
				max-height: 200px
			}
		}

		.container-fluid>.navbar-collapse,
		.container-fluid>.navbar-header,
		.container>.navbar-collapse,
		.container>.navbar-header {
			margin-right: -15px;
			margin-left: -15px
		}

		@media (min-width:768px) {

			.container-fluid>.navbar-collapse,
			.container-fluid>.navbar-header,
			.container>.navbar-collapse,
			.container>.navbar-header {
				margin-right: 0;
				margin-left: 0
			}
		}

		.navbar-static-top {
			z-index: 1000;
			border-width: 0 0 1px
		}

		@media (min-width:768px) {
			.navbar-static-top {
				border-radius: 0
			}
		}

		.navbar-fixed-bottom,
		.navbar-fixed-top {
			position: fixed;
			right: 0;
			left: 0;
			z-index: 1030
		}

		@media (min-width:768px) {

			.navbar-fixed-bottom,
			.navbar-fixed-top {
				border-radius: 0
			}
		}

		.navbar-fixed-top {
			top: 0;
			border-width: 0 0 1px
		}

		.navbar-fixed-bottom {
			bottom: 0;
			margin-bottom: 0;
			border-width: 1px 0 0
		}

		.navbar-brand {
			float: left;
			height: 50px;
			padding: 15px 15px;
			font-size: 18px;
			line-height: 20px
		}

		.navbar-brand:focus,
		.navbar-brand:hover {
			text-decoration: none
		}

		.navbar-brand>img {
			display: block
		}

		@media (min-width:768px) {

			.navbar>.container .navbar-brand,
			.navbar>.container-fluid .navbar-brand {
				margin-left: -15px
			}
		}

		.navbar-toggle {
			position: relative;
			float: right;
			padding: 9px 10px;
			margin-top: 8px;
			margin-right: 15px;
			margin-bottom: 8px;
			background-color: transparent;
			background-image: none;
			border: 1px solid transparent;
			border-radius: 4px
		}

		.navbar-toggle:focus {
			outline: 0
		}

		.navbar-toggle .icon-bar {
			display: block;
			width: 22px;
			height: 2px;
			border-radius: 1px
		}

		.navbar-toggle .icon-bar+.icon-bar {
			margin-top: 4px
		}

		@media (min-width:768px) {
			.navbar-toggle {
				display: none
			}
		}

		.navbar-nav {
			margin: 7.5px -15px
		}

		.navbar-nav>li>a {
			padding-top: 10px;
			padding-bottom: 10px;
			line-height: 20px
		}

		@media (max-width:767px) {
			.navbar-nav .open .dropdown-menu {
				position: static;
				float: none;
				width: auto;
				margin-top: 0;
				background-color: transparent;
				border: 0;
				-webkit-box-shadow: none;
				box-shadow: none
			}

			.navbar-nav .open .dropdown-menu .dropdown-header,
			.navbar-nav .open .dropdown-menu>li>a {
				padding: 5px 15px 5px 25px
			}

			.navbar-nav .open .dropdown-menu>li>a {
				line-height: 20px
			}

			.navbar-nav .open .dropdown-menu>li>a:focus,
			.navbar-nav .open .dropdown-menu>li>a:hover {
				background-image: none
			}
		}

		@media (min-width:768px) {
			.navbar-nav {
				float: left;
				margin: 0
			}

			.navbar-nav>li {
				float: left
			}

			.navbar-nav>li>a {
				padding-top: 15px;
				padding-bottom: 15px
			}
		}

		.navbar-form {
			padding: 10px 15px;
			margin-top: 8px;
			margin-right: -15px;
			margin-bottom: 8px;
			margin-left: -15px;
			border-top: 1px solid transparent;
			border-bottom: 1px solid transparent;
			-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
			box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1)
		}

		@media (min-width:768px) {
			.navbar-form .form-group {
				display: inline-block;
				margin-bottom: 0;
				vertical-align: middle
			}

			.navbar-form .form-control {
				display: inline-block;
				width: auto;
				vertical-align: middle
			}

			.navbar-form .form-control-static {
				display: inline-block
			}

			.navbar-form .input-group {
				display: inline-table;
				vertical-align: middle
			}

			.navbar-form .input-group .form-control,
			.navbar-form .input-group .input-group-addon,
			.navbar-form .input-group .input-group-btn {
				width: auto
			}

			.navbar-form .input-group>.form-control {
				width: 100%
			}

			.navbar-form .control-label {
				margin-bottom: 0;
				vertical-align: middle
			}

			.navbar-form .checkbox,
			.navbar-form .radio {
				display: inline-block;
				margin-top: 0;
				margin-bottom: 0;
				vertical-align: middle
			}

			.navbar-form .checkbox label,
			.navbar-form .radio label {
				padding-left: 0
			}

			.navbar-form .checkbox input[type=checkbox],
			.navbar-form .radio input[type=radio] {
				position: relative;
				margin-left: 0
			}

			.navbar-form .has-feedback .form-control-feedback {
				top: 0
			}
		}

		@media (max-width:767px) {
			.navbar-form .form-group {
				margin-bottom: 5px
			}

			.navbar-form .form-group:last-child {
				margin-bottom: 0
			}
		}

		@media (min-width:768px) {
			.navbar-form {
				width: auto;
				padding-top: 0;
				padding-bottom: 0;
				margin-right: 0;
				margin-left: 0;
				border: 0;
				-webkit-box-shadow: none;
				box-shadow: none
			}
		}

		.navbar-nav>li>.dropdown-menu {
			margin-top: 0;
			border-top-left-radius: 0;
			border-top-right-radius: 0
		}

		.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
			margin-bottom: 0;
			border-top-left-radius: 4px;
			border-top-right-radius: 4px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0
		}

		.navbar-btn {
			margin-top: 8px;
			margin-bottom: 8px
		}

		.navbar-btn.btn-sm {
			margin-top: 10px;
			margin-bottom: 10px
		}

		.navbar-btn.btn-xs {
			margin-top: 14px;
			margin-bottom: 14px
		}

		.navbar-text {
			margin-top: 15px;
			margin-bottom: 15px
		}

		@media (min-width:768px) {
			.navbar-text {
				float: left;
				margin-right: 15px;
				margin-left: 15px
			}
		}

		@media (min-width:768px) {
			.navbar-left {
				float: left !important
			}

			.navbar-right {
				float: right !important;
				margin-right: -15px
			}

			.navbar-right~.navbar-right {
				margin-right: 0
			}
		}

		.navbar-default {
			background-color: #f8f8f8;
			border-color: #e7e7e7
		}

		.navbar-default .navbar-brand {
			color: #777
		}

		.navbar-default .navbar-brand:focus,
		.navbar-default .navbar-brand:hover {
			color: #5e5e5e;
			background-color: transparent
		}

		.navbar-default .navbar-text {
			color: #777
		}

		.navbar-default .navbar-nav>li>a {
			color: #777
		}

		.navbar-default .navbar-nav>li>a:focus,
		.navbar-default .navbar-nav>li>a:hover {
			color: #333;
			background-color: transparent
		}

		.navbar-default .navbar-nav>.active>a,
		.navbar-default .navbar-nav>.active>a:focus,
		.navbar-default .navbar-nav>.active>a:hover {
			color: #555;
			background-color: #e7e7e7
		}

		.navbar-default .navbar-nav>.disabled>a,
		.navbar-default .navbar-nav>.disabled>a:focus,
		.navbar-default .navbar-nav>.disabled>a:hover {
			color: #ccc;
			background-color: transparent
		}

		.navbar-default .navbar-toggle {
			border-color: #ddd
		}

		.navbar-default .navbar-toggle:focus,
		.navbar-default .navbar-toggle:hover {
			background-color: #ddd
		}

		.navbar-default .navbar-toggle .icon-bar {
			background-color: #888
		}

		.navbar-default .navbar-collapse,
		.navbar-default .navbar-form {
			border-color: #e7e7e7
		}

		.navbar-default .navbar-nav>.open>a,
		.navbar-default .navbar-nav>.open>a:focus,
		.navbar-default .navbar-nav>.open>a:hover {
			color: #555;
			background-color: #e7e7e7
		}

		@media (max-width:767px) {
			.navbar-default .navbar-nav .open .dropdown-menu>li>a {
				color: #777
			}

			.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
			.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
				color: #333;
				background-color: transparent
			}

			.navbar-default .navbar-nav .open .dropdown-menu>.active>a,
			.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
			.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
				color: #555;
				background-color: #e7e7e7
			}

			.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
			.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
			.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
				color: #ccc;
				background-color: transparent
			}
		}

		.navbar-default .navbar-link {
			color: #777
		}

		.navbar-default .navbar-link:hover {
			color: #333
		}

		.navbar-default .btn-link {
			color: #777
		}

		.navbar-default .btn-link:focus,
		.navbar-default .btn-link:hover {
			color: #333
		}

		.navbar-default .btn-link[disabled]:focus,
		.navbar-default .btn-link[disabled]:hover,
		fieldset[disabled] .navbar-default .btn-link:focus,
		fieldset[disabled] .navbar-default .btn-link:hover {
			color: #ccc
		}

		.navbar-inverse {
			background-color: #222;
			border-color: #080808
		}

		.navbar-inverse .navbar-brand {
			color: #9d9d9d
		}

		.navbar-inverse .navbar-brand:focus,
		.navbar-inverse .navbar-brand:hover {
			color: #fff;
			background-color: transparent
		}

		.navbar-inverse .navbar-text {
			color: #9d9d9d
		}

		.navbar-inverse .navbar-nav>li>a {
			color: #9d9d9d
		}

		.navbar-inverse .navbar-nav>li>a:focus,
		.navbar-inverse .navbar-nav>li>a:hover {
			color: #fff;
			background-color: transparent
		}

		.navbar-inverse .navbar-nav>.active>a,
		.navbar-inverse .navbar-nav>.active>a:focus,
		.navbar-inverse .navbar-nav>.active>a:hover {
			color: #fff;
			background-color: #080808
		}

		.navbar-inverse .navbar-nav>.disabled>a,
		.navbar-inverse .navbar-nav>.disabled>a:focus,
		.navbar-inverse .navbar-nav>.disabled>a:hover {
			color: #444;
			background-color: transparent
		}

		.navbar-inverse .navbar-toggle {
			border-color: #333
		}

		.navbar-inverse .navbar-toggle:focus,
		.navbar-inverse .navbar-toggle:hover {
			background-color: #333
		}

		.navbar-inverse .navbar-toggle .icon-bar {
			background-color: #fff
		}

		.navbar-inverse .navbar-collapse,
		.navbar-inverse .navbar-form {
			border-color: #101010
		}

		.navbar-inverse .navbar-nav>.open>a,
		.navbar-inverse .navbar-nav>.open>a:focus,
		.navbar-inverse .navbar-nav>.open>a:hover {
			color: #fff;
			background-color: #080808
		}

		@media (max-width:767px) {
			.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
				border-color: #080808
			}

			.navbar-inverse .navbar-nav .open .dropdown-menu .divider {
				background-color: #080808
			}

			.navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
				color: #9d9d9d
			}

			.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,
			.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
				color: #fff;
				background-color: transparent
			}

			.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
			.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,
			.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
				color: #fff;
				background-color: #080808
			}

			.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
			.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,
			.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
				color: #444;
				background-color: transparent
			}
		}

		.navbar-inverse .navbar-link {
			color: #9d9d9d
		}

		.navbar-inverse .navbar-link:hover {
			color: #fff
		}

		.navbar-inverse .btn-link {
			color: #9d9d9d
		}

		.navbar-inverse .btn-link:focus,
		.navbar-inverse .btn-link:hover {
			color: #fff
		}

		.navbar-inverse .btn-link[disabled]:focus,
		.navbar-inverse .btn-link[disabled]:hover,
		fieldset[disabled] .navbar-inverse .btn-link:focus,
		fieldset[disabled] .navbar-inverse .btn-link:hover {
			color: #444
		}

		.breadcrumb {
			padding: 8px 15px;
			margin-bottom: 20px;
			list-style: none;
			background-color: #f5f5f5;
			border-radius: 4px
		}

		.breadcrumb>li {
			display: inline-block
		}

		.breadcrumb>li+li:before {
			padding: 0 5px;
			color: #ccc;
			content: "/\00a0"
		}

		.breadcrumb>.active {
			color: #777
		}

		.pagination {
			display: inline-block;
			padding-left: 0;
			margin: 20px 0;
			border-radius: 4px
		}

		.pagination>li {
			display: inline
		}

		.pagination>li>a,
		.pagination>li>span {
			position: relative;
			float: left;
			padding: 6px 12px;
			margin-left: -1px;
			line-height: 1.42857143;
			color: #337ab7;
			text-decoration: none;
			background-color: #fff;
			border: 1px solid #ddd
		}

		.pagination>li:first-child>a,
		.pagination>li:first-child>span {
			margin-left: 0;
			border-top-left-radius: 4px;
			border-bottom-left-radius: 4px
		}

		.pagination>li:last-child>a,
		.pagination>li:last-child>span {
			border-top-right-radius: 4px;
			border-bottom-right-radius: 4px
		}

		.pagination>li>a:focus,
		.pagination>li>a:hover,
		.pagination>li>span:focus,
		.pagination>li>span:hover {
			z-index: 2;
			color: #23527c;
			background-color: #eee;
			border-color: #ddd
		}

		.pagination>.active>a,
		.pagination>.active>a:focus,
		.pagination>.active>a:hover,
		.pagination>.active>span,
		.pagination>.active>span:focus,
		.pagination>.active>span:hover {
			z-index: 3;
			color: #fff;
			cursor: default;
			background-color: #337ab7;
			border-color: #337ab7
		}

		.pagination>.disabled>a,
		.pagination>.disabled>a:focus,
		.pagination>.disabled>a:hover,
		.pagination>.disabled>span,
		.pagination>.disabled>span:focus,
		.pagination>.disabled>span:hover {
			color: #777;
			cursor: not-allowed;
			background-color: #fff;
			border-color: #ddd
		}

		.pagination-lg>li>a,
		.pagination-lg>li>span {
			padding: 10px 16px;
			font-size: 18px;
			line-height: 1.3333333
		}

		.pagination-lg>li:first-child>a,
		.pagination-lg>li:first-child>span {
			border-top-left-radius: 6px;
			border-bottom-left-radius: 6px
		}

		.pagination-lg>li:last-child>a,
		.pagination-lg>li:last-child>span {
			border-top-right-radius: 6px;
			border-bottom-right-radius: 6px
		}

		.pagination-sm>li>a,
		.pagination-sm>li>span {
			padding: 5px 10px;
			font-size: 12px;
			line-height: 1.5
		}

		.pagination-sm>li:first-child>a,
		.pagination-sm>li:first-child>span {
			border-top-left-radius: 3px;
			border-bottom-left-radius: 3px
		}

		.pagination-sm>li:last-child>a,
		.pagination-sm>li:last-child>span {
			border-top-right-radius: 3px;
			border-bottom-right-radius: 3px
		}

		.pager {
			padding-left: 0;
			margin: 20px 0;
			text-align: center;
			list-style: none
		}

		.pager li {
			display: inline
		}

		.pager li>a,
		.pager li>span {
			display: inline-block;
			padding: 5px 14px;
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 15px
		}

		.pager li>a:focus,
		.pager li>a:hover {
			text-decoration: none;
			background-color: #eee
		}

		.pager .next>a,
		.pager .next>span {
			float: right
		}

		.pager .previous>a,
		.pager .previous>span {
			float: left
		}

		.pager .disabled>a,
		.pager .disabled>a:focus,
		.pager .disabled>a:hover,
		.pager .disabled>span {
			color: #777;
			cursor: not-allowed;
			background-color: #fff
		}

		.label {
			display: inline;
			padding: .2em .6em .3em;
			font-size: 75%;
			font-weight: 700;
			line-height: 1;
			color: #fff;
			text-align: center;
			white-space: nowrap;
			vertical-align: baseline;
			border-radius: .25em
		}

		a.label:focus,
		a.label:hover {
			color: #fff;
			text-decoration: none;
			cursor: pointer
		}

		.label:empty {
			display: none
		}

		.btn .label {
			position: relative;
			top: -1px
		}

		.label-default {
			background-color: #777
		}

		.label-default[href]:focus,
		.label-default[href]:hover {
			background-color: #5e5e5e
		}

		.label-primary {
			background-color: #337ab7
		}

		.label-primary[href]:focus,
		.label-primary[href]:hover {
			background-color: #286090
		}

		.label-success {
			background-color: #5cb85c
		}

		.label-success[href]:focus,
		.label-success[href]:hover {
			background-color: #449d44
		}

		.label-info {
			background-color: #5bc0de
		}

		.label-info[href]:focus,
		.label-info[href]:hover {
			background-color: #31b0d5
		}

		.label-warning {
			background-color: #f0ad4e
		}

		.label-warning[href]:focus,
		.label-warning[href]:hover {
			background-color: #ec971f
		}

		.label-danger {
			background-color: #d9534f
		}

		.label-danger[href]:focus,
		.label-danger[href]:hover {
			background-color: #c9302c
		}

		.badge {
			display: inline-block;
			min-width: 10px;
			padding: 3px 7px;
			font-size: 12px;
			font-weight: 700;
			line-height: 1;
			color: #fff;
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			background-color: #777;
			border-radius: 10px
		}

		.badge:empty {
			display: none
		}

		.btn .badge {
			position: relative;
			top: -1px
		}

		.btn-group-xs>.btn .badge,
		.btn-xs .badge {
			top: 0;
			padding: 1px 5px
		}

		a.badge:focus,
		a.badge:hover {
			color: #fff;
			text-decoration: none;
			cursor: pointer
		}

		.list-group-item.active>.badge,
		.nav-pills>.active>a>.badge {
			color: #337ab7;
			background-color: #fff
		}

		.list-group-item>.badge {
			float: right
		}

		.list-group-item>.badge+.badge {
			margin-right: 5px
		}

		.nav-pills>li>a>.badge {
			margin-left: 3px
		}

		.jumbotron {
			padding-top: 30px;
			padding-bottom: 30px;
			margin-bottom: 30px;
			color: inherit;
			background-color: #eee
		}

		.jumbotron .h1,
		.jumbotron h1 {
			color: inherit
		}

		.jumbotron p {
			margin-bottom: 15px;
			font-size: 21px;
			font-weight: 200
		}

		.jumbotron>hr {
			border-top-color: #d5d5d5
		}

		.container .jumbotron,
		.container-fluid .jumbotron {
			padding-right: 15px;
			padding-left: 15px;
			border-radius: 6px
		}

		.jumbotron .container {
			max-width: 100%
		}

		@media screen and (min-width:768px) {
			.jumbotron {
				padding-top: 48px;
				padding-bottom: 48px
			}

			.container .jumbotron,
			.container-fluid .jumbotron {
				padding-right: 60px;
				padding-left: 60px
			}

			.jumbotron .h1,
			.jumbotron h1 {
				font-size: 63px
			}
		}

		.thumbnail {
			display: block;
			padding: 4px;
			margin-bottom: 20px;
			line-height: 1.42857143;
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 4px;
			-webkit-transition: border .2s ease-in-out;
			-o-transition: border .2s ease-in-out;
			transition: border .2s ease-in-out
		}

		.thumbnail a>img,
		.thumbnail>img {
			margin-right: auto;
			margin-left: auto
		}

		a.thumbnail.active,
		a.thumbnail:focus,
		a.thumbnail:hover {
			border-color: #337ab7
		}

		.thumbnail .caption {
			padding: 9px;
			color: #333
		}

		.alert {
			padding: 15px;
			margin-bottom: 20px;
			border: 1px solid transparent;
			border-radius: 4px
		}

		.alert h4 {
			margin-top: 0;
			color: inherit
		}

		.alert .alert-link {
			font-weight: 700
		}

		.alert>p,
		.alert>ul {
			margin-bottom: 0
		}

		.alert>p+p {
			margin-top: 5px
		}

		.alert-dismissable,
		.alert-dismissible {
			padding-right: 35px
		}

		.alert-dismissable .close,
		.alert-dismissible .close {
			position: relative;
			top: -2px;
			right: -21px;
			color: inherit
		}

		.alert-success {
			color: #3c763d;
			background-color: #dff0d8;
			border-color: #d6e9c6
		}

		.alert-success hr {
			border-top-color: #c9e2b3
		}

		.alert-success .alert-link {
			color: #2b542c
		}

		.alert-info {
			color: #31708f;
			background-color: #d9edf7;
			border-color: #bce8f1
		}

		.alert-info hr {
			border-top-color: #a6e1ec
		}

		.alert-info .alert-link {
			color: #245269
		}

		.alert-warning {
			color: #8a6d3b;
			background-color: #fcf8e3;
			border-color: #faebcc
		}

		.alert-warning hr {
			border-top-color: #f7e1b5
		}

		.alert-warning .alert-link {
			color: #66512c
		}

		.alert-danger {
			color: #a94442;
			background-color: #f2dede;
			border-color: #ebccd1
		}

		.alert-danger hr {
			border-top-color: #e4b9c0
		}

		.alert-danger .alert-link {
			color: #843534
		}

		@-webkit-keyframes progress-bar-stripes {
			from {
				background-position: 40px 0
			}

			to {
				background-position: 0 0
			}
		}

		@-o-keyframes progress-bar-stripes {
			from {
				background-position: 40px 0
			}

			to {
				background-position: 0 0
			}
		}

		@keyframes progress-bar-stripes {
			from {
				background-position: 40px 0
			}

			to {
				background-position: 0 0
			}
		}

		.progress {
			height: 20px;
			margin-bottom: 20px;
			overflow: hidden;
			background-color: #f5f5f5;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
			box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
		}

		.progress-bar {
			float: left;
			width: 0;
			height: 100%;
			font-size: 12px;
			line-height: 20px;
			color: #fff;
			text-align: center;
			background-color: #337ab7;
			-webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
			box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
			-webkit-transition: width .6s ease;
			-o-transition: width .6s ease;
			transition: width .6s ease
		}

		.progress-bar-striped,
		.progress-striped .progress-bar {
			background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			-webkit-background-size: 40px 40px;
			background-size: 40px 40px
		}

		.progress-bar.active,
		.progress.active .progress-bar {
			-webkit-animation: progress-bar-stripes 2s linear infinite;
			-o-animation: progress-bar-stripes 2s linear infinite;
			animation: progress-bar-stripes 2s linear infinite
		}

		.progress-bar-success {
			background-color: #5cb85c
		}

		.progress-striped .progress-bar-success {
			background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
		}

		.progress-bar-info {
			background-color: #5bc0de
		}

		.progress-striped .progress-bar-info {
			background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
		}

		.progress-bar-warning {
			background-color: #f0ad4e
		}

		.progress-striped .progress-bar-warning {
			background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
		}

		.progress-bar-danger {
			background-color: #d9534f
		}

		.progress-striped .progress-bar-danger {
			background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
			background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
		}

		.media {
			margin-top: 15px
		}

		.media:first-child {
			margin-top: 0
		}

		.media,
		.media-body {
			overflow: hidden;
			zoom: 1
		}

		.media-body {
			width: 10000px
		}

		.media-object {
			display: block
		}

		.media-object.img-thumbnail {
			max-width: none
		}

		.media-right,
		.media>.pull-right {
			padding-left: 10px
		}

		.media-left,
		.media>.pull-left {
			padding-right: 10px
		}

		.media-body,
		.media-left,
		.media-right {
			display: table-cell;
			vertical-align: top
		}

		.media-middle {
			vertical-align: middle
		}

		.media-bottom {
			vertical-align: bottom
		}

		.media-heading {
			margin-top: 0;
			margin-bottom: 5px
		}

		.media-list {
			padding-left: 0;
			list-style: none
		}

		.list-group {
			padding-left: 0;
			margin-bottom: 20px
		}

		.list-group-item {
			position: relative;
			display: block;
			padding: 10px 15px;
			margin-bottom: -1px;
			background-color: #fff;
			border: 1px solid #ddd
		}

		.list-group-item:first-child {
			border-top-left-radius: 4px;
			border-top-right-radius: 4px
		}

		.list-group-item:last-child {
			margin-bottom: 0;
			border-bottom-right-radius: 4px;
			border-bottom-left-radius: 4px
		}

		a.list-group-item,
		button.list-group-item {
			color: #555
		}

		a.list-group-item .list-group-item-heading,
		button.list-group-item .list-group-item-heading {
			color: #333
		}

		a.list-group-item:focus,
		a.list-group-item:hover,
		button.list-group-item:focus,
		button.list-group-item:hover {
			color: #555;
			text-decoration: none;
			background-color: #f5f5f5
		}

		button.list-group-item {
			width: 100%;
			text-align: left
		}

		.list-group-item.disabled,
		.list-group-item.disabled:focus,
		.list-group-item.disabled:hover {
			color: #777;
			cursor: not-allowed;
			background-color: #eee
		}

		.list-group-item.disabled .list-group-item-heading,
		.list-group-item.disabled:focus .list-group-item-heading,
		.list-group-item.disabled:hover .list-group-item-heading {
			color: inherit
		}

		.list-group-item.disabled .list-group-item-text,
		.list-group-item.disabled:focus .list-group-item-text,
		.list-group-item.disabled:hover .list-group-item-text {
			color: #777
		}

		.list-group-item.active,
		.list-group-item.active:focus,
		.list-group-item.active:hover {
			z-index: 2;
			color: #fff;
			background-color: #337ab7;
			border-color: #337ab7
		}

		.list-group-item.active .list-group-item-heading,
		.list-group-item.active .list-group-item-heading>.small,
		.list-group-item.active .list-group-item-heading>small,
		.list-group-item.active:focus .list-group-item-heading,
		.list-group-item.active:focus .list-group-item-heading>.small,
		.list-group-item.active:focus .list-group-item-heading>small,
		.list-group-item.active:hover .list-group-item-heading,
		.list-group-item.active:hover .list-group-item-heading>.small,
		.list-group-item.active:hover .list-group-item-heading>small {
			color: inherit
		}

		.list-group-item.active .list-group-item-text,
		.list-group-item.active:focus .list-group-item-text,
		.list-group-item.active:hover .list-group-item-text {
			color: #c7ddef
		}

		.list-group-item-success {
			color: #3c763d;
			background-color: #dff0d8
		}

		a.list-group-item-success,
		button.list-group-item-success {
			color: #3c763d
		}

		a.list-group-item-success .list-group-item-heading,
		button.list-group-item-success .list-group-item-heading {
			color: inherit
		}

		a.list-group-item-success:focus,
		a.list-group-item-success:hover,
		button.list-group-item-success:focus,
		button.list-group-item-success:hover {
			color: #3c763d;
			background-color: #d0e9c6
		}

		a.list-group-item-success.active,
		a.list-group-item-success.active:focus,
		a.list-group-item-success.active:hover,
		button.list-group-item-success.active,
		button.list-group-item-success.active:focus,
		button.list-group-item-success.active:hover {
			color: #fff;
			background-color: #3c763d;
			border-color: #3c763d
		}

		.list-group-item-info {
			color: #31708f;
			background-color: #d9edf7
		}

		a.list-group-item-info,
		button.list-group-item-info {
			color: #31708f
		}

		a.list-group-item-info .list-group-item-heading,
		button.list-group-item-info .list-group-item-heading {
			color: inherit
		}

		a.list-group-item-info:focus,
		a.list-group-item-info:hover,
		button.list-group-item-info:focus,
		button.list-group-item-info:hover {
			color: #31708f;
			background-color: #c4e3f3
		}

		a.list-group-item-info.active,
		a.list-group-item-info.active:focus,
		a.list-group-item-info.active:hover,
		button.list-group-item-info.active,
		button.list-group-item-info.active:focus,
		button.list-group-item-info.active:hover {
			color: #fff;
			background-color: #31708f;
			border-color: #31708f
		}

		.list-group-item-warning {
			color: #8a6d3b;
			background-color: #fcf8e3
		}

		a.list-group-item-warning,
		button.list-group-item-warning {
			color: #8a6d3b
		}

		a.list-group-item-warning .list-group-item-heading,
		button.list-group-item-warning .list-group-item-heading {
			color: inherit
		}

		a.list-group-item-warning:focus,
		a.list-group-item-warning:hover,
		button.list-group-item-warning:focus,
		button.list-group-item-warning:hover {
			color: #8a6d3b;
			background-color: #faf2cc
		}

		a.list-group-item-warning.active,
		a.list-group-item-warning.active:focus,
		a.list-group-item-warning.active:hover,
		button.list-group-item-warning.active,
		button.list-group-item-warning.active:focus,
		button.list-group-item-warning.active:hover {
			color: #fff;
			background-color: #8a6d3b;
			border-color: #8a6d3b
		}

		.list-group-item-danger {
			color: #a94442;
			background-color: #f2dede
		}

		a.list-group-item-danger,
		button.list-group-item-danger {
			color: #a94442
		}

		a.list-group-item-danger .list-group-item-heading,
		button.list-group-item-danger .list-group-item-heading {
			color: inherit
		}

		a.list-group-item-danger:focus,
		a.list-group-item-danger:hover,
		button.list-group-item-danger:focus,
		button.list-group-item-danger:hover {
			color: #a94442;
			background-color: #ebcccc
		}

		a.list-group-item-danger.active,
		a.list-group-item-danger.active:focus,
		a.list-group-item-danger.active:hover,
		button.list-group-item-danger.active,
		button.list-group-item-danger.active:focus,
		button.list-group-item-danger.active:hover {
			color: #fff;
			background-color: #a94442;
			border-color: #a94442
		}

		.list-group-item-heading {
			margin-top: 0;
			margin-bottom: 5px
		}

		.list-group-item-text {
			margin-bottom: 0;
			line-height: 1.3
		}

		.panel {
			margin-bottom: 20px;
			background-color: #fff;
			border: 1px solid transparent;
			border-radius: 4px;
			-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
			box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
		}

		.panel-body {
			padding: 15px
		}

		.panel-heading {
			padding: 10px 15px;
			border-bottom: 1px solid transparent;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px
		}

		.panel-heading>.dropdown .dropdown-toggle {
			color: inherit
		}

		.panel-title {
			margin-top: 0;
			margin-bottom: 0;
			font-size: 16px;
			color: inherit
		}

		.panel-title>.small,
		.panel-title>.small>a,
		.panel-title>a,
		.panel-title>small,
		.panel-title>small>a {
			color: inherit
		}

		.panel-footer {
			padding: 10px 15px;
			background-color: #f5f5f5;
			border-top: 1px solid #ddd;
			border-bottom-right-radius: 3px;
			border-bottom-left-radius: 3px
		}

		.panel>.list-group,
		.panel>.panel-collapse>.list-group {
			margin-bottom: 0
		}

		.panel>.list-group .list-group-item,
		.panel>.panel-collapse>.list-group .list-group-item {
			border-width: 1px 0;
			border-radius: 0
		}

		.panel>.list-group:first-child .list-group-item:first-child,
		.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
			border-top: 0;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px
		}

		.panel>.list-group:last-child .list-group-item:last-child,
		.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
			border-bottom: 0;
			border-bottom-right-radius: 3px;
			border-bottom-left-radius: 3px
		}

		.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
			border-top-left-radius: 0;
			border-top-right-radius: 0
		}

		.panel-heading+.list-group .list-group-item:first-child {
			border-top-width: 0
		}

		.list-group+.panel-footer {
			border-top-width: 0
		}

		.panel>.panel-collapse>.table,
		.panel>.table,
		.panel>.table-responsive>.table {
			margin-bottom: 0
		}

		.panel>.panel-collapse>.table caption,
		.panel>.table caption,
		.panel>.table-responsive>.table caption {
			padding-right: 15px;
			padding-left: 15px
		}

		.panel>.table-responsive:first-child>.table:first-child,
		.panel>.table:first-child {
			border-top-left-radius: 3px;
			border-top-right-radius: 3px
		}

		.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,
		.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
		.panel>.table:first-child>tbody:first-child>tr:first-child,
		.panel>.table:first-child>thead:first-child>tr:first-child {
			border-top-left-radius: 3px;
			border-top-right-radius: 3px
		}

		.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
		.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,
		.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
		.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
		.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
		.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
		.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
		.panel>.table:first-child>thead:first-child>tr:first-child th:first-child {
			border-top-left-radius: 3px
		}

		.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
		.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,
		.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
		.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
		.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
		.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
		.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
		.panel>.table:first-child>thead:first-child>tr:first-child th:last-child {
			border-top-right-radius: 3px
		}

		.panel>.table-responsive:last-child>.table:last-child,
		.panel>.table:last-child {
			border-bottom-right-radius: 3px;
			border-bottom-left-radius: 3px
		}

		.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
		.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,
		.panel>.table:last-child>tbody:last-child>tr:last-child,
		.panel>.table:last-child>tfoot:last-child>tr:last-child {
			border-bottom-right-radius: 3px;
			border-bottom-left-radius: 3px
		}

		.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
		.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
		.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
		.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
		.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
		.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
		.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
		.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
			border-bottom-left-radius: 3px
		}

		.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
		.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
		.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
		.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
		.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
		.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
		.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
		.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
			border-bottom-right-radius: 3px
		}

		.panel>.panel-body+.table,
		.panel>.panel-body+.table-responsive,
		.panel>.table+.panel-body,
		.panel>.table-responsive+.panel-body {
			border-top: 1px solid #ddd
		}

		.panel>.table>tbody:first-child>tr:first-child td,
		.panel>.table>tbody:first-child>tr:first-child th {
			border-top: 0
		}

		.panel>.table-bordered,
		.panel>.table-responsive>.table-bordered {
			border: 0
		}

		.panel>.table-bordered>tbody>tr>td:first-child,
		.panel>.table-bordered>tbody>tr>th:first-child,
		.panel>.table-bordered>tfoot>tr>td:first-child,
		.panel>.table-bordered>tfoot>tr>th:first-child,
		.panel>.table-bordered>thead>tr>td:first-child,
		.panel>.table-bordered>thead>tr>th:first-child,
		.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
		.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
		.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,
		.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
		.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
		.panel>.table-responsive>.table-bordered>thead>tr>th:first-child {
			border-left: 0
		}

		.panel>.table-bordered>tbody>tr>td:last-child,
		.panel>.table-bordered>tbody>tr>th:last-child,
		.panel>.table-bordered>tfoot>tr>td:last-child,
		.panel>.table-bordered>tfoot>tr>th:last-child,
		.panel>.table-bordered>thead>tr>td:last-child,
		.panel>.table-bordered>thead>tr>th:last-child,
		.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
		.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
		.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,
		.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
		.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
		.panel>.table-responsive>.table-bordered>thead>tr>th:last-child {
			border-right: 0
		}

		.panel>.table-bordered>tbody>tr:first-child>td,
		.panel>.table-bordered>tbody>tr:first-child>th,
		.panel>.table-bordered>thead>tr:first-child>td,
		.panel>.table-bordered>thead>tr:first-child>th,
		.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
		.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,
		.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
		.panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
			border-bottom: 0
		}

		.panel>.table-bordered>tbody>tr:last-child>td,
		.panel>.table-bordered>tbody>tr:last-child>th,
		.panel>.table-bordered>tfoot>tr:last-child>td,
		.panel>.table-bordered>tfoot>tr:last-child>th,
		.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
		.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
		.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
		.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
			border-bottom: 0
		}

		.panel>.table-responsive {
			margin-bottom: 0;
			border: 0
		}

		.panel-group {
			margin-bottom: 20px
		}

		.panel-group .panel {
			margin-bottom: 0;
			border-radius: 4px
		}

		.panel-group .panel+.panel {
			margin-top: 5px
		}

		.panel-group .panel-heading {
			border-bottom: 0
		}

		.panel-group .panel-heading+.panel-collapse>.list-group,
		.panel-group .panel-heading+.panel-collapse>.panel-body {
			border-top: 1px solid #ddd
		}

		.panel-group .panel-footer {
			border-top: 0
		}

		.panel-group .panel-footer+.panel-collapse .panel-body {
			border-bottom: 1px solid #ddd
		}

		.panel-default {
			border-color: #ddd
		}

		.panel-default>.panel-heading {
			color: #333;
			background-color: #f5f5f5;
			border-color: #ddd
		}

		.panel-default>.panel-heading+.panel-collapse>.panel-body {
			border-top-color: #ddd
		}

		.panel-default>.panel-heading .badge {
			color: #f5f5f5;
			background-color: #333
		}

		.panel-default>.panel-footer+.panel-collapse>.panel-body {
			border-bottom-color: #ddd
		}

		.panel-primary {
			border-color: #337ab7
		}

		.panel-primary>.panel-heading {
			color: #fff;
			background-color: #337ab7;
			border-color: #337ab7
		}

		.panel-primary>.panel-heading+.panel-collapse>.panel-body {
			border-top-color: #337ab7
		}

		.panel-primary>.panel-heading .badge {
			color: #337ab7;
			background-color: #fff
		}

		.panel-primary>.panel-footer+.panel-collapse>.panel-body {
			border-bottom-color: #337ab7
		}

		.panel-success {
			border-color: #d6e9c6
		}

		.panel-success>.panel-heading {
			color: #3c763d;
			background-color: #dff0d8;
			border-color: #d6e9c6
		}

		.panel-success>.panel-heading+.panel-collapse>.panel-body {
			border-top-color: #d6e9c6
		}

		.panel-success>.panel-heading .badge {
			color: #dff0d8;
			background-color: #3c763d
		}

		.panel-success>.panel-footer+.panel-collapse>.panel-body {
			border-bottom-color: #d6e9c6
		}

		.panel-info {
			border-color: #bce8f1
		}

		.panel-info>.panel-heading {
			color: #31708f;
			background-color: #d9edf7;
			border-color: #bce8f1
		}

		.panel-info>.panel-heading+.panel-collapse>.panel-body {
			border-top-color: #bce8f1
		}

		.panel-info>.panel-heading .badge {
			color: #d9edf7;
			background-color: #31708f
		}

		.panel-info>.panel-footer+.panel-collapse>.panel-body {
			border-bottom-color: #bce8f1
		}

		.panel-warning {
			border-color: #faebcc
		}

		.panel-warning>.panel-heading {
			color: #8a6d3b;
			background-color: #fcf8e3;
			border-color: #faebcc
		}

		.panel-warning>.panel-heading+.panel-collapse>.panel-body {
			border-top-color: #faebcc
		}

		.panel-warning>.panel-heading .badge {
			color: #fcf8e3;
			background-color: #8a6d3b
		}

		.panel-warning>.panel-footer+.panel-collapse>.panel-body {
			border-bottom-color: #faebcc
		}

		.panel-danger {
			border-color: #ebccd1
		}

		.panel-danger>.panel-heading {
			color: #a94442;
			background-color: #f2dede;
			border-color: #ebccd1
		}

		.panel-danger>.panel-heading+.panel-collapse>.panel-body {
			border-top-color: #ebccd1
		}

		.panel-danger>.panel-heading .badge {
			color: #f2dede;
			background-color: #a94442
		}

		.panel-danger>.panel-footer+.panel-collapse>.panel-body {
			border-bottom-color: #ebccd1
		}

		.embed-responsive {
			position: relative;
			display: block;
			height: 0;
			padding: 0;
			overflow: hidden
		}

		.embed-responsive .embed-responsive-item,
		.embed-responsive embed,
		.embed-responsive iframe,
		.embed-responsive object,
		.embed-responsive video {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: 0
		}

		.embed-responsive-16by9 {
			padding-bottom: 56.25%
		}

		.embed-responsive-4by3 {
			padding-bottom: 75%
		}

		.well {
			min-height: 20px;
			padding: 19px;
			margin-bottom: 20px;
			background-color: #f5f5f5;
			border: 1px solid #e3e3e3;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
		}

		.well blockquote {
			border-color: #ddd;
			border-color: rgba(0, 0, 0, .15)
		}

		.well-lg {
			padding: 24px;
			border-radius: 6px
		}

		.well-sm {
			padding: 9px;
			border-radius: 3px
		}

		.close {
			float: right;
			font-size: 21px;
			font-weight: 700;
			line-height: 1;
			color: #000;
			text-shadow: 0 1px 0 #fff;
			filter: alpha(opacity=20);
			opacity: .2
		}

		.close:focus,
		.close:hover {
			color: #000;
			text-decoration: none;
			cursor: pointer;
			filter: alpha(opacity=50);
			opacity: .5
		}

		button.close {
			-webkit-appearance: none;
			padding: 0;
			cursor: pointer;
			background: 0 0;
			border: 0
		}

		.modal-open {
			overflow: hidden
		}

		.modal {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 1050;
			display: none;
			overflow: hidden;
			-webkit-overflow-scrolling: touch;
			outline: 0
		}

		.modal.fade .modal-dialog {
			-webkit-transition: -webkit-transform .3s ease-out;
			-o-transition: -o-transform .3s ease-out;
			transition: transform .3s ease-out;
			-webkit-transform: translate(0, -25%);
			-ms-transform: translate(0, -25%);
			-o-transform: translate(0, -25%);
			transform: translate(0, -25%)
		}

		.modal.in .modal-dialog {
			-webkit-transform: translate(0, 0);
			-ms-transform: translate(0, 0);
			-o-transform: translate(0, 0);
			transform: translate(0, 0)
		}

		.modal-open .modal {
			overflow-x: hidden;
			overflow-y: auto
		}

		.modal-dialog {
			position: relative;
			width: auto;
			margin: 10px
		}

		.modal-content {
			position: relative;
			background-color: #fff;
			-webkit-background-clip: padding-box;
			background-clip: padding-box;
			border: 1px solid #999;
			border: 1px solid rgba(0, 0, 0, .2);
			border-radius: 6px;
			outline: 0;
			-webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
			box-shadow: 0 3px 9px rgba(0, 0, 0, .5)
		}

		.modal-backdrop {
			position: fixed;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			z-index: 1040;
			background-color: #000
		}

		.modal-backdrop.fade {
			filter: alpha(opacity=0);
			opacity: 0
		}

		.modal-backdrop.in {
			filter: alpha(opacity=50);
			opacity: .5
		}

		.modal-header {
			padding: 15px;
			border-bottom: 1px solid #e5e5e5
		}

		.modal-header .close {
			margin-top: -2px
		}

		.modal-title {
			margin: 0;
			line-height: 1.42857143
		}

		.modal-body {
			position: relative;
			padding: 15px
		}

		.modal-footer {
			padding: 15px;
			text-align: right;
			border-top: 1px solid #e5e5e5
		}

		.modal-footer .btn+.btn {
			margin-bottom: 0;
			margin-left: 5px
		}

		.modal-footer .btn-group .btn+.btn {
			margin-left: -1px
		}

		.modal-footer .btn-block+.btn-block {
			margin-left: 0
		}

		.modal-scrollbar-measure {
			position: absolute;
			top: -9999px;
			width: 50px;
			height: 50px;
			overflow: scroll
		}

		@media (min-width:768px) {
			.modal-dialog {
				width: 600px;
				margin: 30px auto
			}

			.modal-content {
				-webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
				box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
			}

			.modal-sm {
				width: 300px
			}
		}

		@media (min-width:992px) {
			.modal-lg {
				width: 900px
			}
		}

		.tooltip {
			position: absolute;
			z-index: 1070;
			display: block;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 12px;
			font-style: normal;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: left;
			text-align: start;
			text-decoration: none;
			text-shadow: none;
			text-transform: none;
			letter-spacing: normal;
			word-break: normal;
			word-spacing: normal;
			word-wrap: normal;
			white-space: normal;
			filter: alpha(opacity=0);
			opacity: 0;
			line-break: auto
		}

		.tooltip.in {
			filter: alpha(opacity=90);
			opacity: .9
		}

		.tooltip.top {
			padding: 5px 0;
			margin-top: -3px
		}

		.tooltip.right {
			padding: 0 5px;
			margin-left: 3px
		}

		.tooltip.bottom {
			padding: 5px 0;
			margin-top: 3px
		}

		.tooltip.left {
			padding: 0 5px;
			margin-left: -3px
		}

		.tooltip-inner {
			max-width: 200px;
			padding: 3px 8px;
			color: #fff;
			text-align: center;
			background-color: #000;
			border-radius: 4px
		}

		.tooltip-arrow {
			position: absolute;
			width: 0;
			height: 0;
			border-color: transparent;
			border-style: solid
		}

		.tooltip.top .tooltip-arrow {
			bottom: 0;
			left: 50%;
			margin-left: -5px;
			border-width: 5px 5px 0;
			border-top-color: #000
		}

		.tooltip.top-left .tooltip-arrow {
			right: 5px;
			bottom: 0;
			margin-bottom: -5px;
			border-width: 5px 5px 0;
			border-top-color: #000
		}

		.tooltip.top-right .tooltip-arrow {
			bottom: 0;
			left: 5px;
			margin-bottom: -5px;
			border-width: 5px 5px 0;
			border-top-color: #000
		}

		.tooltip.right .tooltip-arrow {
			top: 50%;
			left: 0;
			margin-top: -5px;
			border-width: 5px 5px 5px 0;
			border-right-color: #000
		}

		.tooltip.left .tooltip-arrow {
			top: 50%;
			right: 0;
			margin-top: -5px;
			border-width: 5px 0 5px 5px;
			border-left-color: #000
		}

		.tooltip.bottom .tooltip-arrow {
			top: 0;
			left: 50%;
			margin-left: -5px;
			border-width: 0 5px 5px;
			border-bottom-color: #000
		}

		.tooltip.bottom-left .tooltip-arrow {
			top: 0;
			right: 5px;
			margin-top: -5px;
			border-width: 0 5px 5px;
			border-bottom-color: #000
		}

		.tooltip.bottom-right .tooltip-arrow {
			top: 0;
			left: 5px;
			margin-top: -5px;
			border-width: 0 5px 5px;
			border-bottom-color: #000
		}

		.popover {
			position: absolute;
			top: 0;
			left: 0;
			z-index: 1060;
			display: none;
			max-width: 276px;
			padding: 1px;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-style: normal;
			font-weight: 400;
			line-height: 1.42857143;
			text-align: left;
			text-align: start;
			text-decoration: none;
			text-shadow: none;
			text-transform: none;
			letter-spacing: normal;
			word-break: normal;
			word-spacing: normal;
			word-wrap: normal;
			white-space: normal;
			background-color: #fff;
			-webkit-background-clip: padding-box;
			background-clip: padding-box;
			border: 1px solid #ccc;
			border: 1px solid rgba(0, 0, 0, .2);
			border-radius: 6px;
			-webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
			box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
			line-break: auto
		}

		.popover.top {
			margin-top: -10px
		}

		.popover.right {
			margin-left: 10px
		}

		.popover.bottom {
			margin-top: 10px
		}

		.popover.left {
			margin-left: -10px
		}

		.popover-title {
			padding: 8px 14px;
			margin: 0;
			font-size: 14px;
			background-color: #f7f7f7;
			border-bottom: 1px solid #ebebeb;
			border-radius: 5px 5px 0 0
		}

		.popover-content {
			padding: 9px 14px
		}

		.popover>.arrow,
		.popover>.arrow:after {
			position: absolute;
			display: block;
			width: 0;
			height: 0;
			border-color: transparent;
			border-style: solid
		}

		.popover>.arrow {
			border-width: 11px
		}

		.popover>.arrow:after {
			content: "";
			border-width: 10px
		}

		.popover.top>.arrow {
			bottom: -11px;
			left: 50%;
			margin-left: -11px;
			border-top-color: #999;
			border-top-color: rgba(0, 0, 0, .25);
			border-bottom-width: 0
		}

		.popover.top>.arrow:after {
			bottom: 1px;
			margin-left: -10px;
			content: " ";
			border-top-color: #fff;
			border-bottom-width: 0
		}

		.popover.right>.arrow {
			top: 50%;
			left: -11px;
			margin-top: -11px;
			border-right-color: #999;
			border-right-color: rgba(0, 0, 0, .25);
			border-left-width: 0
		}

		.popover.right>.arrow:after {
			bottom: -10px;
			left: 1px;
			content: " ";
			border-right-color: #fff;
			border-left-width: 0
		}

		.popover.bottom>.arrow {
			top: -11px;
			left: 50%;
			margin-left: -11px;
			border-top-width: 0;
			border-bottom-color: #999;
			border-bottom-color: rgba(0, 0, 0, .25)
		}

		.popover.bottom>.arrow:after {
			top: 1px;
			margin-left: -10px;
			content: " ";
			border-top-width: 0;
			border-bottom-color: #fff
		}

		.popover.left>.arrow {
			top: 50%;
			right: -11px;
			margin-top: -11px;
			border-right-width: 0;
			border-left-color: #999;
			border-left-color: rgba(0, 0, 0, .25)
		}

		.popover.left>.arrow:after {
			right: 1px;
			bottom: -10px;
			content: " ";
			border-right-width: 0;
			border-left-color: #fff
		}

		.carousel {
			position: relative
		}

		.carousel-inner {
			position: relative;
			width: 100%;
			overflow: hidden
		}

		.carousel-inner>.item {
			position: relative;
			display: none;
			-webkit-transition: .6s ease-in-out left;
			-o-transition: .6s ease-in-out left;
			transition: .6s ease-in-out left
		}

		.carousel-inner>.item>a>img,
		.carousel-inner>.item>img {
			line-height: 1
		}

		@media all and (transform-3d),
		(-webkit-transform-3d) {
			.carousel-inner>.item {
				-webkit-transition: -webkit-transform .6s ease-in-out;
				-o-transition: -o-transform .6s ease-in-out;
				transition: transform .6s ease-in-out;
				-webkit-backface-visibility: hidden;
				backface-visibility: hidden;
				-webkit-perspective: 1000px;
				perspective: 1000px
			}

			.carousel-inner>.item.active.right,
			.carousel-inner>.item.next {
				left: 0;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}

			.carousel-inner>.item.active.left,
			.carousel-inner>.item.prev {
				left: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}

			.carousel-inner>.item.active,
			.carousel-inner>.item.next.left,
			.carousel-inner>.item.prev.right {
				left: 0;
				-webkit-transform: translate3d(0, 0, 0);
				transform: translate3d(0, 0, 0)
			}
		}

		.carousel-inner>.active,
		.carousel-inner>.next,
		.carousel-inner>.prev {
			display: block
		}

		.carousel-inner>.active {
			left: 0
		}

		.carousel-inner>.next,
		.carousel-inner>.prev {
			position: absolute;
			top: 0;
			width: 100%
		}

		.carousel-inner>.next {
			left: 100%
		}

		.carousel-inner>.prev {
			left: -100%
		}

		.carousel-inner>.next.left,
		.carousel-inner>.prev.right {
			left: 0
		}

		.carousel-inner>.active.left {
			left: -100%
		}

		.carousel-inner>.active.right {
			left: 100%
		}

		.carousel-control {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			width: 15%;
			font-size: 20px;
			color: #fff;
			text-align: center;
			text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
			background-color: rgba(0, 0, 0, 0);
			filter: alpha(opacity=50);
			opacity: .5
		}

		.carousel-control.left {
			background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
			background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
			background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
			background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
			background-repeat: repeat-x
		}

		.carousel-control.right {
			right: 0;
			left: auto;
			background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
			background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
			background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
			background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
			background-repeat: repeat-x
		}

		.carousel-control:focus,
		.carousel-control:hover {
			color: #fff;
			text-decoration: none;
			filter: alpha(opacity=90);
			outline: 0;
			opacity: .9
		}

		.carousel-control .glyphicon-chevron-left,
		.carousel-control .glyphicon-chevron-right,
		.carousel-control .icon-next,
		.carousel-control .icon-prev {
			position: absolute;
			top: 50%;
			z-index: 5;
			display: inline-block;
			margin-top: -10px
		}

		.carousel-control .glyphicon-chevron-left,
		.carousel-control .icon-prev {
			left: 50%;
			margin-left: -10px
		}

		.carousel-control .glyphicon-chevron-right,
		.carousel-control .icon-next {
			right: 50%;
			margin-right: -10px
		}

		.carousel-control .icon-next,
		.carousel-control .icon-prev {
			width: 20px;
			height: 20px;
			font-family: serif;
			line-height: 1
		}

		.carousel-control .icon-prev:before {
			content: '\2039'
		}

		.carousel-control .icon-next:before {
			content: '\203a'
		}

		.carousel-indicators {
			position: absolute;
			bottom: 10px;
			left: 50%;
			z-index: 15;
			width: 60%;
			padding-left: 0;
			margin-left: -30%;
			text-align: center;
			list-style: none
		}

		.carousel-indicators li {
			display: inline-block;
			width: 10px;
			height: 10px;
			margin: 1px;
			text-indent: -999px;
			cursor: pointer;
			background-color: #000\9;
			background-color: rgba(0, 0, 0, 0);
			border: 1px solid #fff;
			border-radius: 10px
		}

		.carousel-indicators .active {
			width: 12px;
			height: 12px;
			margin: 0;
			background-color: #fff
		}

		.carousel-caption {
			position: absolute;
			right: 15%;
			bottom: 20px;
			left: 15%;
			z-index: 10;
			padding-top: 20px;
			padding-bottom: 20px;
			color: #fff;
			text-align: center;
			text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
		}

		.carousel-caption .btn {
			text-shadow: none
		}

		@media screen and (min-width:768px) {

			.carousel-control .glyphicon-chevron-left,
			.carousel-control .glyphicon-chevron-right,
			.carousel-control .icon-next,
			.carousel-control .icon-prev {
				width: 30px;
				height: 30px;
				margin-top: -10px;
				font-size: 30px
			}

			.carousel-control .glyphicon-chevron-left,
			.carousel-control .icon-prev {
				margin-left: -10px
			}

			.carousel-control .glyphicon-chevron-right,
			.carousel-control .icon-next {
				margin-right: -10px
			}

			.carousel-caption {
				right: 20%;
				left: 20%;
				padding-bottom: 30px
			}

			.carousel-indicators {
				bottom: 20px
			}
		}

		.btn-group-vertical>.btn-group:after,
		.btn-group-vertical>.btn-group:before,
		.btn-toolbar:after,
		.btn-toolbar:before,
		.clearfix:after,
		.clearfix:before,
		.container-fluid:after,
		.container-fluid:before,
		.container:after,
		.container:before,
		.dl-horizontal dd:after,
		.dl-horizontal dd:before,
		.form-horizontal .form-group:after,
		.form-horizontal .form-group:before,
		.modal-footer:after,
		.modal-footer:before,
		.modal-header:after,
		.modal-header:before,
		.nav:after,
		.nav:before,
		.navbar-collapse:after,
		.navbar-collapse:before,
		.navbar-header:after,
		.navbar-header:before,
		.navbar:after,
		.navbar:before,
		.pager:after,
		.pager:before,
		.panel-body:after,
		.panel-body:before,
		.row:after,
		.row:before {
			display: table;
			content: " "
		}

		.btn-group-vertical>.btn-group:after,
		.btn-toolbar:after,
		.clearfix:after,
		.container-fluid:after,
		.container:after,
		.dl-horizontal dd:after,
		.form-horizontal .form-group:after,
		.modal-footer:after,
		.modal-header:after,
		.nav:after,
		.navbar-collapse:after,
		.navbar-header:after,
		.navbar:after,
		.pager:after,
		.panel-body:after,
		.row:after {
			clear: both
		}

		.center-block {
			display: block;
			margin-right: auto;
			margin-left: auto
		}

		.pull-right {
			float: right !important
		}

		.pull-left {
			float: left !important
		}

		.hide {
			display: none !important
		}

		.show {
			display: block !important
		}

		.invisible {
			visibility: hidden
		}

		.text-hide {
			font: 0/0 a;
			color: transparent;
			text-shadow: none;
			background-color: transparent;
			border: 0
		}

		.hidden {
			display: none !important
		}

		.affix {
			position: fixed
		}

		@-ms-viewport {
			width: device-width
		}

		.visible-lg,
		.visible-md,
		.visible-sm,
		.visible-xs {
			display: none !important
		}

		.visible-lg-block,
		.visible-lg-inline,
		.visible-lg-inline-block,
		.visible-md-block,
		.visible-md-inline,
		.visible-md-inline-block,
		.visible-sm-block,
		.visible-sm-inline,
		.visible-sm-inline-block,
		.visible-xs-block,
		.visible-xs-inline,
		.visible-xs-inline-block {
			display: none !important
		}

		@media (max-width:767px) {
			.visible-xs {
				display: block !important
			}

			table.visible-xs {
				display: table !important
			}

			tr.visible-xs {
				display: table-row !important
			}

			td.visible-xs,
			th.visible-xs {
				display: table-cell !important
			}
		}

		@media (max-width:767px) {
			.visible-xs-block {
				display: block !important
			}
		}

		@media (max-width:767px) {
			.visible-xs-inline {
				display: inline !important
			}
		}

		@media (max-width:767px) {
			.visible-xs-inline-block {
				display: inline-block !important
			}
		}

		@media (min-width:768px) and (max-width:991px) {
			.visible-sm {
				display: block !important
			}

			table.visible-sm {
				display: table !important
			}

			tr.visible-sm {
				display: table-row !important
			}

			td.visible-sm,
			th.visible-sm {
				display: table-cell !important
			}
		}

		@media (min-width:768px) and (max-width:991px) {
			.visible-sm-block {
				display: block !important
			}
		}

		@media (min-width:768px) and (max-width:991px) {
			.visible-sm-inline {
				display: inline !important
			}
		}

		@media (min-width:768px) and (max-width:991px) {
			.visible-sm-inline-block {
				display: inline-block !important
			}
		}

		@media (min-width:992px) and (max-width:1199px) {
			.visible-md {
				display: block !important
			}

			table.visible-md {
				display: table !important
			}

			tr.visible-md {
				display: table-row !important
			}

			td.visible-md,
			th.visible-md {
				display: table-cell !important
			}
		}

		@media (min-width:992px) and (max-width:1199px) {
			.visible-md-block {
				display: block !important
			}
		}

		@media (min-width:992px) and (max-width:1199px) {
			.visible-md-inline {
				display: inline !important
			}
		}

		@media (min-width:992px) and (max-width:1199px) {
			.visible-md-inline-block {
				display: inline-block !important
			}
		}

		@media (min-width:1200px) {
			.visible-lg {
				display: block !important
			}

			table.visible-lg {
				display: table !important
			}

			tr.visible-lg {
				display: table-row !important
			}

			td.visible-lg,
			th.visible-lg {
				display: table-cell !important
			}
		}

		@media (min-width:1200px) {
			.visible-lg-block {
				display: block !important
			}
		}

		@media (min-width:1200px) {
			.visible-lg-inline {
				display: inline !important
			}
		}

		@media (min-width:1200px) {
			.visible-lg-inline-block {
				display: inline-block !important
			}
		}

		@media (max-width:767px) {
			.hidden-xs {
				display: none !important
			}
		}

		@media (min-width:768px) and (max-width:991px) {
			.hidden-sm {
				display: none !important
			}
		}

		@media (min-width:992px) and (max-width:1199px) {
			.hidden-md {
				display: none !important
			}
		}

		@media (min-width:1200px) {
			.hidden-lg {
				display: none !important
			}
		}

		.visible-print {
			display: none !important
		}

		@media print {
			.visible-print {
				display: block !important
			}

			table.visible-print {
				display: table !important
			}

			tr.visible-print {
				display: table-row !important
			}

			td.visible-print,
			th.visible-print {
				display: table-cell !important
			}
		}

		.visible-print-block {
			display: none !important
		}

		@media print {
			.visible-print-block {
				display: block !important
			}
		}

		.visible-print-inline {
			display: none !important
		}

		@media print {
			.visible-print-inline {
				display: inline !important
			}
		}

		.visible-print-inline-block {
			display: none !important
		}

		@media print {
			.visible-print-inline-block {
				display: inline-block !important
			}
		}

		@media print {
			.hidden-print {
				display: none !important
			}
		}

		/* FontAwesome */
		.fa.fa-pull-left,
		.fa.pull-left {
			margin-right: .3em
		}

		.fa,
		.fa-stack {
			display: inline-block
		}

		.fa-fw,
		.fa-li {
			text-align: center
		}

		.fa {
			font: normal normal normal 14px/1 FontAwesome;
			font-size: inherit;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale
		}

		.fa-lg {
			font-size: 1.33333333em;
			line-height: .75em;
			vertical-align: -15%
		}

		.fa-2x {
			font-size: 2em
		}

		.fa-3x {
			font-size: 3em
		}

		.fa-4x {
			font-size: 4em
		}

		.fa-5x {
			font-size: 5em
		}

		.fa-fw {
			width: 1.28571429em
		}

		.fa-ul {
			padding-left: 0;
			margin-left: 2.14285714em;
			list-style-type: none
		}

		.fa.fa-pull-right,
		.fa.pull-right {
			margin-left: .3em
		}

		.fa-ul>li {
			position: relative
		}

		.fa-li {
			position: absolute;
			left: -2.14285714em;
			width: 2.14285714em;
			top: .14285714em
		}

		.fa-li.fa-lg {
			left: -1.85714286em
		}

		.fa-border {
			padding: .2em .25em .15em;
			border: .08em solid #eee;
			border-radius: .1em
		}

		.fa-pull-left {
			float: left
		}

		.fa-pull-right,
		.pull-right {
			float: right
		}

		.pull-left {
			float: left
		}

		.fa-spin {
			-webkit-animation: fa-spin 2s infinite linear;
			animation: fa-spin 2s infinite linear
		}

		.fa-pulse {
			-webkit-animation: fa-spin 1s infinite steps(8);
			animation: fa-spin 1s infinite steps(8)
		}

		@-webkit-keyframes fa-spin {
			0% {
				-webkit-transform: rotate(0);
				transform: rotate(0)
			}

			100% {
				-webkit-transform: rotate(359deg);
				transform: rotate(359deg)
			}
		}

		@keyframes fa-spin {
			0% {
				-webkit-transform: rotate(0);
				transform: rotate(0)
			}

			100% {
				-webkit-transform: rotate(359deg);
				transform: rotate(359deg)
			}
		}

		.fa-rotate-90 {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
			-webkit-transform: rotate(90deg);
			-ms-transform: rotate(90deg);
			transform: rotate(90deg)
		}

		.fa-rotate-180 {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
			-webkit-transform: rotate(180deg);
			-ms-transform: rotate(180deg);
			transform: rotate(180deg)
		}

		.fa-rotate-270 {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
			-webkit-transform: rotate(270deg);
			-ms-transform: rotate(270deg);
			transform: rotate(270deg)
		}

		.fa-flip-horizontal {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
			-webkit-transform: scale(-1, 1);
			-ms-transform: scale(-1, 1);
			transform: scale(-1, 1)
		}

		.fa-flip-vertical {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
			-webkit-transform: scale(1, -1);
			-ms-transform: scale(1, -1);
			transform: scale(1, -1)
		}

		:root .fa-flip-horizontal,
		:root .fa-flip-vertical,
		:root .fa-rotate-180,
		:root .fa-rotate-270,
		:root .fa-rotate-90 {
			filter: none
		}

		.fa-stack {
			position: relative;
			width: 2em;
			height: 2em;
			line-height: 2em;
			vertical-align: middle
		}

		.fa-stack-1x,
		.fa-stack-2x {
			position: absolute;
			left: 0;
			width: 100%;
			text-align: center
		}

		.fa-stack-1x {
			line-height: inherit
		}

		.fa-stack-2x {
			font-size: 2em
		}

		.fa-inverse {
			color: #fff
		}

		.fa-glass:before {
			content: "\f000"
		}

		.fa-music:before {
			content: "\f001"
		}

		.fa-search:before {
			content: "\f002"
		}

		.fa-envelope-o:before {
			content: "\f003"
		}

		.fa-heart:before {
			content: "\f004"
		}

		.fa-star:before {
			content: "\f005"
		}

		.fa-star-o:before {
			content: "\f006"
		}

		.fa-user:before {
			content: "\f007"
		}

		.fa-film:before {
			content: "\f008"
		}

		.fa-th-large:before {
			content: "\f009"
		}

		.fa-th:before {
			content: "\f00a"
		}

		.fa-th-list:before {
			content: "\f00b"
		}

		.fa-check:before {
			content: "\f00c"
		}

		.fa-close:before,
		.fa-remove:before,
		.fa-times:before {
			content: "\f00d"
		}

		.fa-search-plus:before {
			content: "\f00e"
		}

		.fa-search-minus:before {
			content: "\f010"
		}

		.fa-power-off:before {
			content: "\f011"
		}

		.fa-signal:before {
			content: "\f012"
		}

		.fa-cog:before,
		.fa-gear:before {
			content: "\f013"
		}

		.fa-trash-o:before {
			content: "\f014"
		}

		.fa-home:before {
			content: "\f015"
		}

		.fa-file-o:before {
			content: "\f016"
		}

		.fa-clock-o:before {
			content: "\f017"
		}

		.fa-road:before {
			content: "\f018"
		}

		.fa-download:before {
			content: "\f019"
		}

		.fa-arrow-circle-o-down:before {
			content: "\f01a"
		}

		.fa-arrow-circle-o-up:before {
			content: "\f01b"
		}

		.fa-inbox:before {
			content: "\f01c"
		}

		.fa-play-circle-o:before {
			content: "\f01d"
		}

		.fa-repeat:before,
		.fa-rotate-right:before {
			content: "\f01e"
		}

		.fa-refresh:before {
			content: "\f021"
		}

		.fa-list-alt:before {
			content: "\f022"
		}

		.fa-lock:before {
			content: "\f023"
		}

		.fa-flag:before {
			content: "\f024"
		}

		.fa-headphones:before {
			content: "\f025"
		}

		.fa-volume-off:before {
			content: "\f026"
		}

		.fa-volume-down:before {
			content: "\f027"
		}

		.fa-volume-up:before {
			content: "\f028"
		}

		.fa-qrcode:before {
			content: "\f029"
		}

		.fa-barcode:before {
			content: "\f02a"
		}

		.fa-tag:before {
			content: "\f02b"
		}

		.fa-tags:before {
			content: "\f02c"
		}

		.fa-book:before {
			content: "\f02d"
		}

		.fa-bookmark:before {
			content: "\f02e"
		}

		.fa-print:before {
			content: "\f02f"
		}

		.fa-camera:before {
			content: "\f030"
		}

		.fa-font:before {
			content: "\f031"
		}

		.fa-bold:before {
			content: "\f032"
		}

		.fa-italic:before {
			content: "\f033"
		}

		.fa-text-height:before {
			content: "\f034"
		}

		.fa-text-width:before {
			content: "\f035"
		}

		.fa-align-left:before {
			content: "\f036"
		}

		.fa-align-center:before {
			content: "\f037"
		}

		.fa-align-right:before {
			content: "\f038"
		}

		.fa-align-justify:before {
			content: "\f039"
		}

		.fa-list:before {
			content: "\f03a"
		}

		.fa-dedent:before,
		.fa-outdent:before {
			content: "\f03b"
		}

		.fa-indent:before {
			content: "\f03c"
		}

		.fa-video-camera:before {
			content: "\f03d"
		}

		.fa-image:before,
		.fa-photo:before,
		.fa-picture-o:before {
			content: "\f03e"
		}

		.fa-pencil:before {
			content: "\f040"
		}

		.fa-map-marker:before {
			content: "\f041"
		}

		.fa-adjust:before {
			content: "\f042"
		}

		.fa-tint:before {
			content: "\f043"
		}

		.fa-edit:before,
		.fa-pencil-square-o:before {
			content: "\f044"
		}

		.fa-share-square-o:before {
			content: "\f045"
		}

		.fa-check-square-o:before {
			content: "\f046"
		}

		.fa-arrows:before {
			content: "\f047"
		}

		.fa-step-backward:before {
			content: "\f048"
		}

		.fa-fast-backward:before {
			content: "\f049"
		}

		.fa-backward:before {
			content: "\f04a"
		}

		.fa-play:before {
			content: "\f04b"
		}

		.fa-pause:before {
			content: "\f04c"
		}

		.fa-stop:before {
			content: "\f04d"
		}

		.fa-forward:before {
			content: "\f04e"
		}

		.fa-fast-forward:before {
			content: "\f050"
		}

		.fa-step-forward:before {
			content: "\f051"
		}

		.fa-eject:before {
			content: "\f052"
		}

		.fa-chevron-left:before {
			content: "\f053"
		}

		.fa-chevron-right:before {
			content: "\f054"
		}

		.fa-plus-circle:before {
			content: "\f055"
		}

		.fa-minus-circle:before {
			content: "\f056"
		}

		.fa-times-circle:before {
			content: "\f057"
		}

		.fa-check-circle:before {
			content: "\f058"
		}

		.fa-question-circle:before {
			content: "\f059"
		}

		.fa-info-circle:before {
			content: "\f05a"
		}

		.fa-crosshairs:before {
			content: "\f05b"
		}

		.fa-times-circle-o:before {
			content: "\f05c"
		}

		.fa-check-circle-o:before {
			content: "\f05d"
		}

		.fa-ban:before {
			content: "\f05e"
		}

		.fa-arrow-left:before {
			content: "\f060"
		}

		.fa-arrow-right:before {
			content: "\f061"
		}

		.fa-arrow-up:before {
			content: "\f062"
		}

		.fa-arrow-down:before {
			content: "\f063"
		}

		.fa-mail-forward:before,
		.fa-share:before {
			content: "\f064"
		}

		.fa-expand:before {
			content: "\f065"
		}

		.fa-compress:before {
			content: "\f066"
		}

		.fa-plus:before {
			content: "\f067"
		}

		.fa-minus:before {
			content: "\f068"
		}

		.fa-asterisk:before {
			content: "\f069"
		}

		.fa-exclamation-circle:before {
			content: "\f06a"
		}

		.fa-gift:before {
			content: "\f06b"
		}

		.fa-leaf:before {
			content: "\f06c"
		}

		.fa-fire:before {
			content: "\f06d"
		}

		.fa-eye:before {
			content: "\f06e"
		}

		.fa-eye-slash:before {
			content: "\f070"
		}

		.fa-exclamation-triangle:before,
		.fa-warning:before {
			content: "\f071"
		}

		.fa-plane:before {
			content: "\f072"
		}

		.fa-calendar:before {
			content: "\f073"
		}

		.fa-random:before {
			content: "\f074"
		}

		.fa-comment:before {
			content: "\f075"
		}

		.fa-magnet:before {
			content: "\f076"
		}

		.fa-chevron-up:before {
			content: "\f077"
		}

		.fa-chevron-down:before {
			content: "\f078"
		}

		.fa-retweet:before {
			content: "\f079"
		}

		.fa-shopping-cart:before {
			content: "\f07a"
		}

		.fa-folder:before {
			content: "\f07b"
		}

		.fa-folder-open:before {
			content: "\f07c"
		}

		.fa-arrows-v:before {
			content: "\f07d"
		}

		.fa-arrows-h:before {
			content: "\f07e"
		}

		.fa-bar-chart-o:before,
		.fa-bar-chart:before {
			content: "\f080"
		}

		.fa-twitter-square:before {
			content: "\f081"
		}

		.fa-facebook-square:before {
			content: "\f082"
		}

		.fa-camera-retro:before {
			content: "\f083"
		}

		.fa-key:before {
			content: "\f084"
		}

		.fa-cogs:before,
		.fa-gears:before {
			content: "\f085"
		}

		.fa-comments:before {
			content: "\f086"
		}

		.fa-thumbs-o-up:before {
			content: "\f087"
		}

		.fa-thumbs-o-down:before {
			content: "\f088"
		}

		.fa-star-half:before {
			content: "\f089"
		}

		.fa-heart-o:before {
			content: "\f08a"
		}

		.fa-sign-out:before {
			content: "\f08b"
		}

		.fa-linkedin-square:before {
			content: "\f08c"
		}

		.fa-thumb-tack:before {
			content: "\f08d"
		}

		.fa-external-link:before {
			content: "\f08e"
		}

		.fa-sign-in:before {
			content: "\f090"
		}

		.fa-trophy:before {
			content: "\f091"
		}

		.fa-github-square:before {
			content: "\f092"
		}

		.fa-upload:before {
			content: "\f093"
		}

		.fa-lemon-o:before {
			content: "\f094"
		}

		.fa-phone:before {
			content: "\f095"
		}

		.fa-square-o:before {
			content: "\f096"
		}

		.fa-bookmark-o:before {
			content: "\f097"
		}

		.fa-phone-square:before {
			content: "\f098"
		}

		.fa-twitter:before {
			content: "\f099"
		}

		.fa-facebook-f:before,
		.fa-facebook:before {
			content: "\f09a"
		}

		.fa-github:before {
			content: "\f09b"
		}

		.fa-unlock:before {
			content: "\f09c"
		}

		.fa-credit-card:before {
			content: "\f09d"
		}

		.fa-feed:before,
		.fa-rss:before {
			content: "\f09e"
		}

		.fa-hdd-o:before {
			content: "\f0a0"
		}

		.fa-bullhorn:before {
			content: "\f0a1"
		}

		.fa-bell:before {
			content: "\f0f3"
		}

		.fa-certificate:before {
			content: "\f0a3"
		}

		.fa-hand-o-right:before {
			content: "\f0a4"
		}

		.fa-hand-o-left:before {
			content: "\f0a5"
		}

		.fa-hand-o-up:before {
			content: "\f0a6"
		}

		.fa-hand-o-down:before {
			content: "\f0a7"
		}

		.fa-arrow-circle-left:before {
			content: "\f0a8"
		}

		.fa-arrow-circle-right:before {
			content: "\f0a9"
		}

		.fa-arrow-circle-up:before {
			content: "\f0aa"
		}

		.fa-arrow-circle-down:before {
			content: "\f0ab"
		}

		.fa-globe:before {
			content: "\f0ac"
		}

		.fa-wrench:before {
			content: "\f0ad"
		}

		.fa-tasks:before {
			content: "\f0ae"
		}

		.fa-filter:before {
			content: "\f0b0"
		}

		.fa-briefcase:before {
			content: "\f0b1"
		}

		.fa-arrows-alt:before {
			content: "\f0b2"
		}

		.fa-group:before,
		.fa-users:before {
			content: "\f0c0"
		}

		.fa-chain:before,
		.fa-link:before {
			content: "\f0c1"
		}

		.fa-cloud:before {
			content: "\f0c2"
		}

		.fa-flask:before {
			content: "\f0c3"
		}

		.fa-cut:before,
		.fa-scissors:before {
			content: "\f0c4"
		}

		.fa-copy:before,
		.fa-files-o:before {
			content: "\f0c5"
		}

		.fa-paperclip:before {
			content: "\f0c6"
		}

		.fa-floppy-o:before,
		.fa-save:before {
			content: "\f0c7"
		}

		.fa-square:before {
			content: "\f0c8"
		}

		.fa-bars:before,
		.fa-navicon:before,
		.fa-reorder:before {
			content: "\f0c9"
		}

		.fa-list-ul:before {
			content: "\f0ca"
		}

		.fa-list-ol:before {
			content: "\f0cb"
		}

		.fa-strikethrough:before {
			content: "\f0cc"
		}

		.fa-underline:before {
			content: "\f0cd"
		}

		.fa-table:before {
			content: "\f0ce"
		}

		.fa-magic:before {
			content: "\f0d0"
		}

		.fa-truck:before {
			content: "\f0d1"
		}

		.fa-pinterest:before {
			content: "\f0d2"
		}

		.fa-pinterest-square:before {
			content: "\f0d3"
		}

		.fa-google-plus-square:before {
			content: "\f0d4"
		}

		.fa-google-plus:before {
			content: "\f0d5"
		}

		.fa-money:before {
			content: "\f0d6"
		}

		.fa-caret-down:before {
			content: "\f0d7"
		}

		.fa-caret-up:before {
			content: "\f0d8"
		}

		.fa-caret-left:before {
			content: "\f0d9"
		}

		.fa-caret-right:before {
			content: "\f0da"
		}

		.fa-columns:before {
			content: "\f0db"
		}

		.fa-sort:before,
		.fa-unsorted:before {
			content: "\f0dc"
		}

		.fa-sort-desc:before,
		.fa-sort-down:before {
			content: "\f0dd"
		}

		.fa-sort-asc:before,
		.fa-sort-up:before {
			content: "\f0de"
		}

		.fa-envelope:before {
			content: "\f0e0"
		}

		.fa-linkedin:before {
			content: "\f0e1"
		}

		.fa-rotate-left:before,
		.fa-undo:before {
			content: "\f0e2"
		}

		.fa-gavel:before,
		.fa-legal:before {
			content: "\f0e3"
		}

		.fa-dashboard:before,
		.fa-tachometer:before {
			content: "\f0e4"
		}

		.fa-comment-o:before {
			content: "\f0e5"
		}

		.fa-comments-o:before {
			content: "\f0e6"
		}

		.fa-bolt:before,
		.fa-flash:before {
			content: "\f0e7"
		}

		.fa-sitemap:before {
			content: "\f0e8"
		}

		.fa-umbrella:before {
			content: "\f0e9"
		}

		.fa-clipboard:before,
		.fa-paste:before {
			content: "\f0ea"
		}

		.fa-lightbulb-o:before {
			content: "\f0eb"
		}

		.fa-exchange:before {
			content: "\f0ec"
		}

		.fa-cloud-download:before {
			content: "\f0ed"
		}

		.fa-cloud-upload:before {
			content: "\f0ee"
		}

		.fa-user-md:before {
			content: "\f0f0"
		}

		.fa-stethoscope:before {
			content: "\f0f1"
		}

		.fa-suitcase:before {
			content: "\f0f2"
		}

		.fa-bell-o:before {
			content: "\f0a2"
		}

		.fa-coffee:before {
			content: "\f0f4"
		}

		.fa-cutlery:before {
			content: "\f0f5"
		}

		.fa-file-text-o:before {
			content: "\f0f6"
		}

		.fa-building-o:before {
			content: "\f0f7"
		}

		.fa-hospital-o:before {
			content: "\f0f8"
		}

		.fa-ambulance:before {
			content: "\f0f9"
		}

		.fa-medkit:before {
			content: "\f0fa"
		}

		.fa-fighter-jet:before {
			content: "\f0fb"
		}

		.fa-beer:before {
			content: "\f0fc"
		}

		.fa-h-square:before {
			content: "\f0fd"
		}

		.fa-plus-square:before {
			content: "\f0fe"
		}

		.fa-angle-double-left:before {
			content: "\f100"
		}

		.fa-angle-double-right:before {
			content: "\f101"
		}

		.fa-angle-double-up:before {
			content: "\f102"
		}

		.fa-angle-double-down:before {
			content: "\f103"
		}

		.fa-angle-left:before {
			content: "\f104"
		}

		.fa-angle-right:before {
			content: "\f105"
		}

		.fa-angle-up:before {
			content: "\f106"
		}

		.fa-angle-down:before {
			content: "\f107"
		}

		.fa-desktop:before {
			content: "\f108"
		}

		.fa-laptop:before {
			content: "\f109"
		}

		.fa-tablet:before {
			content: "\f10a"
		}

		.fa-mobile-phone:before,
		.fa-mobile:before {
			content: "\f10b"
		}

		.fa-circle-o:before {
			content: "\f10c"
		}

		.fa-quote-left:before {
			content: "\f10d"
		}

		.fa-quote-right:before {
			content: "\f10e"
		}

		.fa-spinner:before {
			content: "\f110"
		}

		.fa-circle:before {
			content: "\f111"
		}

		.fa-mail-reply:before,
		.fa-reply:before {
			content: "\f112"
		}

		.fa-github-alt:before {
			content: "\f113"
		}

		.fa-folder-o:before {
			content: "\f114"
		}

		.fa-folder-open-o:before {
			content: "\f115"
		}

		.fa-smile-o:before {
			content: "\f118"
		}

		.fa-frown-o:before {
			content: "\f119"
		}

		.fa-meh-o:before {
			content: "\f11a"
		}

		.fa-gamepad:before {
			content: "\f11b"
		}

		.fa-keyboard-o:before {
			content: "\f11c"
		}

		.fa-flag-o:before {
			content: "\f11d"
		}

		.fa-flag-checkered:before {
			content: "\f11e"
		}

		.fa-terminal:before {
			content: "\f120"
		}

		.fa-code:before {
			content: "\f121"
		}

		.fa-mail-reply-all:before,
		.fa-reply-all:before {
			content: "\f122"
		}

		.fa-star-half-empty:before,
		.fa-star-half-full:before,
		.fa-star-half-o:before {
			content: "\f123"
		}

		.fa-location-arrow:before {
			content: "\f124"
		}

		.fa-crop:before {
			content: "\f125"
		}

		.fa-code-fork:before {
			content: "\f126"
		}

		.fa-chain-broken:before,
		.fa-unlink:before {
			content: "\f127"
		}

		.fa-question:before {
			content: "\f128"
		}

		.fa-info:before {
			content: "\f129"
		}

		.fa-exclamation:before {
			content: "\f12a"
		}

		.fa-superscript:before {
			content: "\f12b"
		}

		.fa-subscript:before {
			content: "\f12c"
		}

		.fa-eraser:before {
			content: "\f12d"
		}

		.fa-puzzle-piece:before {
			content: "\f12e"
		}

		.fa-microphone:before {
			content: "\f130"
		}

		.fa-microphone-slash:before {
			content: "\f131"
		}

		.fa-shield:before {
			content: "\f132"
		}

		.fa-calendar-o:before {
			content: "\f133"
		}

		.fa-fire-extinguisher:before {
			content: "\f134"
		}

		.fa-rocket:before {
			content: "\f135"
		}

		.fa-maxcdn:before {
			content: "\f136"
		}

		.fa-chevron-circle-left:before {
			content: "\f137"
		}

		.fa-chevron-circle-right:before {
			content: "\f138"
		}

		.fa-chevron-circle-up:before {
			content: "\f139"
		}

		.fa-chevron-circle-down:before {
			content: "\f13a"
		}

		.fa-html5:before {
			content: "\f13b"
		}

		.fa-css3:before {
			content: "\f13c"
		}

		.fa-anchor:before {
			content: "\f13d"
		}

		.fa-unlock-alt:before {
			content: "\f13e"
		}

		.fa-bullseye:before {
			content: "\f140"
		}

		.fa-ellipsis-h:before {
			content: "\f141"
		}

		.fa-ellipsis-v:before {
			content: "\f142"
		}

		.fa-rss-square:before {
			content: "\f143"
		}

		.fa-play-circle:before {
			content: "\f144"
		}

		.fa-ticket:before {
			content: "\f145"
		}

		.fa-minus-square:before {
			content: "\f146"
		}

		.fa-minus-square-o:before {
			content: "\f147"
		}

		.fa-level-up:before {
			content: "\f148"
		}

		.fa-level-down:before {
			content: "\f149"
		}

		.fa-check-square:before {
			content: "\f14a"
		}

		.fa-pencil-square:before {
			content: "\f14b"
		}

		.fa-external-link-square:before {
			content: "\f14c"
		}

		.fa-share-square:before {
			content: "\f14d"
		}

		.fa-compass:before {
			content: "\f14e"
		}

		.fa-caret-square-o-down:before,
		.fa-toggle-down:before {
			content: "\f150"
		}

		.fa-caret-square-o-up:before,
		.fa-toggle-up:before {
			content: "\f151"
		}

		.fa-caret-square-o-right:before,
		.fa-toggle-right:before {
			content: "\f152"
		}

		.fa-eur:before,
		.fa-euro:before {
			content: "\f153"
		}

		.fa-gbp:before {
			content: "\f154"
		}

		.fa-dollar:before,
		.fa-usd:before {
			content: "\f155"
		}

		.fa-inr:before,
		.fa-rupee:before {
			content: "\f156"
		}

		.fa-cny:before,
		.fa-jpy:before,
		.fa-rmb:before,
		.fa-yen:before {
			content: "\f157"
		}

		.fa-rouble:before,
		.fa-rub:before,
		.fa-ruble:before {
			content: "\f158"
		}

		.fa-krw:before,
		.fa-won:before {
			content: "\f159"
		}

		.fa-bitcoin:before,
		.fa-btc:before {
			content: "\f15a"
		}

		.fa-file:before {
			content: "\f15b"
		}

		.fa-file-text:before {
			content: "\f15c"
		}

		.fa-sort-alpha-asc:before {
			content: "\f15d"
		}

		.fa-sort-alpha-desc:before {
			content: "\f15e"
		}

		.fa-sort-amount-asc:before {
			content: "\f160"
		}

		.fa-sort-amount-desc:before {
			content: "\f161"
		}

		.fa-sort-numeric-asc:before {
			content: "\f162"
		}

		.fa-sort-numeric-desc:before {
			content: "\f163"
		}

		.fa-thumbs-up:before {
			content: "\f164"
		}

		.fa-thumbs-down:before {
			content: "\f165"
		}

		.fa-youtube-square:before {
			content: "\f166"
		}

		.fa-youtube:before {
			content: "\f167"
		}

		.fa-xing:before {
			content: "\f168"
		}

		.fa-xing-square:before {
			content: "\f169"
		}

		.fa-youtube-play:before {
			content: "\f16a"
		}

		.fa-dropbox:before {
			content: "\f16b"
		}

		.fa-stack-overflow:before {
			content: "\f16c"
		}

		.fa-instagram:before {
			content: "\f16d"
		}

		.fa-flickr:before {
			content: "\f16e"
		}

		.fa-adn:before {
			content: "\f170"
		}

		.fa-bitbucket:before {
			content: "\f171"
		}

		.fa-bitbucket-square:before {
			content: "\f172"
		}

		.fa-tumblr:before {
			content: "\f173"
		}

		.fa-tumblr-square:before {
			content: "\f174"
		}

		.fa-long-arrow-down:before {
			content: "\f175"
		}

		.fa-long-arrow-up:before {
			content: "\f176"
		}

		.fa-long-arrow-left:before {
			content: "\f177"
		}

		.fa-long-arrow-right:before {
			content: "\f178"
		}

		.fa-apple:before {
			content: "\f179"
		}

		.fa-windows:before {
			content: "\f17a"
		}

		.fa-android:before {
			content: "\f17b"
		}

		.fa-linux:before {
			content: "\f17c"
		}

		.fa-dribbble:before {
			content: "\f17d"
		}

		.fa-skype:before {
			content: "\f17e"
		}

		.fa-foursquare:before {
			content: "\f180"
		}

		.fa-trello:before {
			content: "\f181"
		}

		.fa-female:before {
			content: "\f182"
		}

		.fa-male:before {
			content: "\f183"
		}

		.fa-gittip:before,
		.fa-gratipay:before {
			content: "\f184"
		}

		.fa-sun-o:before {
			content: "\f185"
		}

		.fa-moon-o:before {
			content: "\f186"
		}

		.fa-archive:before {
			content: "\f187"
		}

		.fa-bug:before {
			content: "\f188"
		}

		.fa-vk:before {
			content: "\f189"
		}

		.fa-weibo:before {
			content: "\f18a"
		}

		.fa-renren:before {
			content: "\f18b"
		}

		.fa-pagelines:before {
			content: "\f18c"
		}

		.fa-stack-exchange:before {
			content: "\f18d"
		}

		.fa-arrow-circle-o-right:before {
			content: "\f18e"
		}

		.fa-arrow-circle-o-left:before {
			content: "\f190"
		}

		.fa-caret-square-o-left:before,
		.fa-toggle-left:before {
			content: "\f191"
		}

		.fa-dot-circle-o:before {
			content: "\f192"
		}

		.fa-wheelchair:before {
			content: "\f193"
		}

		.fa-vimeo-square:before {
			content: "\f194"
		}

		.fa-try:before,
		.fa-turkish-lira:before {
			content: "\f195"
		}

		.fa-plus-square-o:before {
			content: "\f196"
		}

		.fa-space-shuttle:before {
			content: "\f197"
		}

		.fa-slack:before {
			content: "\f198"
		}

		.fa-envelope-square:before {
			content: "\f199"
		}

		.fa-wordpress:before {
			content: "\f19a"
		}

		.fa-openid:before {
			content: "\f19b"
		}

		.fa-bank:before,
		.fa-institution:before,
		.fa-university:before {
			content: "\f19c"
		}

		.fa-graduation-cap:before,
		.fa-mortar-board:before {
			content: "\f19d"
		}

		.fa-yahoo:before {
			content: "\f19e"
		}

		.fa-google:before {
			content: "\f1a0"
		}

		.fa-reddit:before {
			content: "\f1a1"
		}

		.fa-reddit-square:before {
			content: "\f1a2"
		}

		.fa-stumbleupon-circle:before {
			content: "\f1a3"
		}

		.fa-stumbleupon:before {
			content: "\f1a4"
		}

		.fa-delicious:before {
			content: "\f1a5"
		}

		.fa-digg:before {
			content: "\f1a6"
		}

		.fa-pied-piper-pp:before {
			content: "\f1a7"
		}

		.fa-pied-piper-alt:before {
			content: "\f1a8"
		}

		.fa-drupal:before {
			content: "\f1a9"
		}

		.fa-joomla:before {
			content: "\f1aa"
		}

		.fa-language:before {
			content: "\f1ab"
		}

		.fa-fax:before {
			content: "\f1ac"
		}

		.fa-building:before {
			content: "\f1ad"
		}

		.fa-child:before {
			content: "\f1ae"
		}

		.fa-paw:before {
			content: "\f1b0"
		}

		.fa-spoon:before {
			content: "\f1b1"
		}

		.fa-cube:before {
			content: "\f1b2"
		}

		.fa-cubes:before {
			content: "\f1b3"
		}

		.fa-behance:before {
			content: "\f1b4"
		}

		.fa-behance-square:before {
			content: "\f1b5"
		}

		.fa-steam:before {
			content: "\f1b6"
		}

		.fa-steam-square:before {
			content: "\f1b7"
		}

		.fa-recycle:before {
			content: "\f1b8"
		}

		.fa-automobile:before,
		.fa-car:before {
			content: "\f1b9"
		}

		.fa-cab:before,
		.fa-taxi:before {
			content: "\f1ba"
		}

		.fa-tree:before {
			content: "\f1bb"
		}

		.fa-spotify:before {
			content: "\f1bc"
		}

		.fa-deviantart:before {
			content: "\f1bd"
		}

		.fa-soundcloud:before {
			content: "\f1be"
		}

		.fa-database:before {
			content: "\f1c0"
		}

		.fa-file-pdf-o:before {
			content: "\f1c1"
		}

		.fa-file-word-o:before {
			content: "\f1c2"
		}

		.fa-file-excel-o:before {
			content: "\f1c3"
		}

		.fa-file-powerpoint-o:before {
			content: "\f1c4"
		}

		.fa-file-image-o:before,
		.fa-file-photo-o:before,
		.fa-file-picture-o:before {
			content: "\f1c5"
		}

		.fa-file-archive-o:before,
		.fa-file-zip-o:before {
			content: "\f1c6"
		}

		.fa-file-audio-o:before,
		.fa-file-sound-o:before {
			content: "\f1c7"
		}

		.fa-file-movie-o:before,
		.fa-file-video-o:before {
			content: "\f1c8"
		}

		.fa-file-code-o:before {
			content: "\f1c9"
		}

		.fa-vine:before {
			content: "\f1ca"
		}

		.fa-codepen:before {
			content: "\f1cb"
		}

		.fa-jsfiddle:before {
			content: "\f1cc"
		}

		.fa-life-bouy:before,
		.fa-life-buoy:before,
		.fa-life-ring:before,
		.fa-life-saver:before,
		.fa-support:before {
			content: "\f1cd"
		}

		.fa-circle-o-notch:before {
			content: "\f1ce"
		}

		.fa-ra:before,
		.fa-rebel:before,
		.fa-resistance:before {
			content: "\f1d0"
		}

		.fa-empire:before,
		.fa-ge:before {
			content: "\f1d1"
		}

		.fa-git-square:before {
			content: "\f1d2"
		}

		.fa-git:before {
			content: "\f1d3"
		}

		.fa-hacker-news:before,
		.fa-y-combinator-square:before,
		.fa-yc-square:before {
			content: "\f1d4"
		}

		.fa-tencent-weibo:before {
			content: "\f1d5"
		}

		.fa-qq:before {
			content: "\f1d6"
		}

		.fa-wechat:before,
		.fa-weixin:before {
			content: "\f1d7"
		}

		.fa-paper-plane:before,
		.fa-send:before {
			content: "\f1d8"
		}

		.fa-paper-plane-o:before,
		.fa-send-o:before {
			content: "\f1d9"
		}

		.fa-history:before {
			content: "\f1da"
		}

		.fa-circle-thin:before {
			content: "\f1db"
		}

		.fa-header:before {
			content: "\f1dc"
		}

		.fa-paragraph:before {
			content: "\f1dd"
		}

		.fa-sliders:before {
			content: "\f1de"
		}

		.fa-share-alt:before {
			content: "\f1e0"
		}

		.fa-share-alt-square:before {
			content: "\f1e1"
		}

		.fa-bomb:before {
			content: "\f1e2"
		}

		.fa-futbol-o:before,
		.fa-soccer-ball-o:before {
			content: "\f1e3"
		}

		.fa-tty:before {
			content: "\f1e4"
		}

		.fa-binoculars:before {
			content: "\f1e5"
		}

		.fa-plug:before {
			content: "\f1e6"
		}

		.fa-slideshare:before {
			content: "\f1e7"
		}

		.fa-twitch:before {
			content: "\f1e8"
		}

		.fa-yelp:before {
			content: "\f1e9"
		}

		.fa-newspaper-o:before {
			content: "\f1ea"
		}

		.fa-wifi:before {
			content: "\f1eb"
		}

		.fa-calculator:before {
			content: "\f1ec"
		}

		.fa-paypal:before {
			content: "\f1ed"
		}

		.fa-google-wallet:before {
			content: "\f1ee"
		}

		.fa-cc-visa:before {
			content: "\f1f0"
		}

		.fa-cc-mastercard:before {
			content: "\f1f1"
		}

		.fa-cc-discover:before {
			content: "\f1f2"
		}

		.fa-cc-amex:before {
			content: "\f1f3"
		}

		.fa-cc-paypal:before {
			content: "\f1f4"
		}

		.fa-cc-stripe:before {
			content: "\f1f5"
		}

		.fa-bell-slash:before {
			content: "\f1f6"
		}

		.fa-bell-slash-o:before {
			content: "\f1f7"
		}

		.fa-trash:before {
			content: "\f1f8"
		}

		.fa-copyright:before {
			content: "\f1f9"
		}

		.fa-at:before {
			content: "\f1fa"
		}

		.fa-eyedropper:before {
			content: "\f1fb"
		}

		.fa-paint-brush:before {
			content: "\f1fc"
		}

		.fa-birthday-cake:before {
			content: "\f1fd"
		}

		.fa-area-chart:before {
			content: "\f1fe"
		}

		.fa-pie-chart:before {
			content: "\f200"
		}

		.fa-line-chart:before {
			content: "\f201"
		}

		.fa-lastfm:before {
			content: "\f202"
		}

		.fa-lastfm-square:before {
			content: "\f203"
		}

		.fa-toggle-off:before {
			content: "\f204"
		}

		.fa-toggle-on:before {
			content: "\f205"
		}

		.fa-bicycle:before {
			content: "\f206"
		}

		.fa-bus:before {
			content: "\f207"
		}

		.fa-ioxhost:before {
			content: "\f208"
		}

		.fa-angellist:before {
			content: "\f209"
		}

		.fa-cc:before {
			content: "\f20a"
		}

		.fa-ils:before,
		.fa-shekel:before,
		.fa-sheqel:before {
			content: "\f20b"
		}

		.fa-meanpath:before {
			content: "\f20c"
		}

		.fa-buysellads:before {
			content: "\f20d"
		}

		.fa-connectdevelop:before {
			content: "\f20e"
		}

		.fa-dashcube:before {
			content: "\f210"
		}

		.fa-forumbee:before {
			content: "\f211"
		}

		.fa-leanpub:before {
			content: "\f212"
		}

		.fa-sellsy:before {
			content: "\f213"
		}

		.fa-shirtsinbulk:before {
			content: "\f214"
		}

		.fa-simplybuilt:before {
			content: "\f215"
		}

		.fa-skyatlas:before {
			content: "\f216"
		}

		.fa-cart-plus:before {
			content: "\f217"
		}

		.fa-cart-arrow-down:before {
			content: "\f218"
		}

		.fa-diamond:before {
			content: "\f219"
		}

		.fa-ship:before {
			content: "\f21a"
		}

		.fa-user-secret:before {
			content: "\f21b"
		}

		.fa-motorcycle:before {
			content: "\f21c"
		}

		.fa-street-view:before {
			content: "\f21d"
		}

		.fa-heartbeat:before {
			content: "\f21e"
		}

		.fa-venus:before {
			content: "\f221"
		}

		.fa-mars:before {
			content: "\f222"
		}

		.fa-mercury:before {
			content: "\f223"
		}

		.fa-intersex:before,
		.fa-transgender:before {
			content: "\f224"
		}

		.fa-transgender-alt:before {
			content: "\f225"
		}

		.fa-venus-double:before {
			content: "\f226"
		}

		.fa-mars-double:before {
			content: "\f227"
		}

		.fa-venus-mars:before {
			content: "\f228"
		}

		.fa-mars-stroke:before {
			content: "\f229"
		}

		.fa-mars-stroke-v:before {
			content: "\f22a"
		}

		.fa-mars-stroke-h:before {
			content: "\f22b"
		}

		.fa-neuter:before {
			content: "\f22c"
		}

		.fa-genderless:before {
			content: "\f22d"
		}

		.fa-facebook-official:before {
			content: "\f230"
		}

		.fa-pinterest-p:before {
			content: "\f231"
		}

		.fa-whatsapp:before {
			content: "\f232"
		}

		.fa-server:before {
			content: "\f233"
		}

		.fa-user-plus:before {
			content: "\f234"
		}

		.fa-user-times:before {
			content: "\f235"
		}

		.fa-bed:before,
		.fa-hotel:before {
			content: "\f236"
		}

		.fa-viacoin:before {
			content: "\f237"
		}

		.fa-train:before {
			content: "\f238"
		}

		.fa-subway:before {
			content: "\f239"
		}

		.fa-medium:before {
			content: "\f23a"
		}

		.fa-y-combinator:before,
		.fa-yc:before {
			content: "\f23b"
		}

		.fa-optin-monster:before {
			content: "\f23c"
		}

		.fa-opencart:before {
			content: "\f23d"
		}

		.fa-expeditedssl:before {
			content: "\f23e"
		}

		.fa-battery-4:before,
		.fa-battery-full:before,
		.fa-battery:before {
			content: "\f240"
		}

		.fa-battery-3:before,
		.fa-battery-three-quarters:before {
			content: "\f241"
		}

		.fa-battery-2:before,
		.fa-battery-half:before {
			content: "\f242"
		}

		.fa-battery-1:before,
		.fa-battery-quarter:before {
			content: "\f243"
		}

		.fa-battery-0:before,
		.fa-battery-empty:before {
			content: "\f244"
		}

		.fa-mouse-pointer:before {
			content: "\f245"
		}

		.fa-i-cursor:before {
			content: "\f246"
		}

		.fa-object-group:before {
			content: "\f247"
		}

		.fa-object-ungroup:before {
			content: "\f248"
		}

		.fa-sticky-note:before {
			content: "\f249"
		}

		.fa-sticky-note-o:before {
			content: "\f24a"
		}

		.fa-cc-jcb:before {
			content: "\f24b"
		}

		.fa-cc-diners-club:before {
			content: "\f24c"
		}

		.fa-clone:before {
			content: "\f24d"
		}

		.fa-balance-scale:before {
			content: "\f24e"
		}

		.fa-hourglass-o:before {
			content: "\f250"
		}

		.fa-hourglass-1:before,
		.fa-hourglass-start:before {
			content: "\f251"
		}

		.fa-hourglass-2:before,
		.fa-hourglass-half:before {
			content: "\f252"
		}

		.fa-hourglass-3:before,
		.fa-hourglass-end:before {
			content: "\f253"
		}

		.fa-hourglass:before {
			content: "\f254"
		}

		.fa-hand-grab-o:before,
		.fa-hand-rock-o:before {
			content: "\f255"
		}

		.fa-hand-paper-o:before,
		.fa-hand-stop-o:before {
			content: "\f256"
		}

		.fa-hand-scissors-o:before {
			content: "\f257"
		}

		.fa-hand-lizard-o:before {
			content: "\f258"
		}

		.fa-hand-spock-o:before {
			content: "\f259"
		}

		.fa-hand-pointer-o:before {
			content: "\f25a"
		}

		.fa-hand-peace-o:before {
			content: "\f25b"
		}

		.fa-trademark:before {
			content: "\f25c"
		}

		.fa-registered:before {
			content: "\f25d"
		}

		.fa-creative-commons:before {
			content: "\f25e"
		}

		.fa-gg:before {
			content: "\f260"
		}

		.fa-gg-circle:before {
			content: "\f261"
		}

		.fa-tripadvisor:before {
			content: "\f262"
		}

		.fa-odnoklassniki:before {
			content: "\f263"
		}

		.fa-odnoklassniki-square:before {
			content: "\f264"
		}

		.fa-get-pocket:before {
			content: "\f265"
		}

		.fa-wikipedia-w:before {
			content: "\f266"
		}

		.fa-safari:before {
			content: "\f267"
		}

		.fa-chrome:before {
			content: "\f268"
		}

		.fa-firefox:before {
			content: "\f269"
		}

		.fa-opera:before {
			content: "\f26a"
		}

		.fa-internet-explorer:before {
			content: "\f26b"
		}

		.fa-television:before,
		.fa-tv:before {
			content: "\f26c"
		}

		.fa-contao:before {
			content: "\f26d"
		}

		.fa-500px:before {
			content: "\f26e"
		}

		.fa-amazon:before {
			content: "\f270"
		}

		.fa-calendar-plus-o:before {
			content: "\f271"
		}

		.fa-calendar-minus-o:before {
			content: "\f272"
		}

		.fa-calendar-times-o:before {
			content: "\f273"
		}

		.fa-calendar-check-o:before {
			content: "\f274"
		}

		.fa-industry:before {
			content: "\f275"
		}

		.fa-map-pin:before {
			content: "\f276"
		}

		.fa-map-signs:before {
			content: "\f277"
		}

		.fa-map-o:before {
			content: "\f278"
		}

		.fa-map:before {
			content: "\f279"
		}

		.fa-commenting:before {
			content: "\f27a"
		}

		.fa-commenting-o:before {
			content: "\f27b"
		}

		.fa-houzz:before {
			content: "\f27c"
		}

		.fa-vimeo:before {
			content: "\f27d"
		}

		.fa-black-tie:before {
			content: "\f27e"
		}

		.fa-fonticons:before {
			content: "\f280"
		}

		.fa-reddit-alien:before {
			content: "\f281"
		}

		.fa-edge:before {
			content: "\f282"
		}

		.fa-credit-card-alt:before {
			content: "\f283"
		}

		.fa-codiepie:before {
			content: "\f284"
		}

		.fa-modx:before {
			content: "\f285"
		}

		.fa-fort-awesome:before {
			content: "\f286"
		}

		.fa-usb:before {
			content: "\f287"
		}

		.fa-product-hunt:before {
			content: "\f288"
		}

		.fa-mixcloud:before {
			content: "\f289"
		}

		.fa-scribd:before {
			content: "\f28a"
		}

		.fa-pause-circle:before {
			content: "\f28b"
		}

		.fa-pause-circle-o:before {
			content: "\f28c"
		}

		.fa-stop-circle:before {
			content: "\f28d"
		}

		.fa-stop-circle-o:before {
			content: "\f28e"
		}

		.fa-shopping-bag:before {
			content: "\f290"
		}

		.fa-shopping-basket:before {
			content: "\f291"
		}

		.fa-hashtag:before {
			content: "\f292"
		}

		.fa-bluetooth:before {
			content: "\f293"
		}

		.fa-bluetooth-b:before {
			content: "\f294"
		}

		.fa-percent:before {
			content: "\f295"
		}

		.fa-gitlab:before {
			content: "\f296"
		}

		.fa-wpbeginner:before {
			content: "\f297"
		}

		.fa-wpforms:before {
			content: "\f298"
		}

		.fa-envira:before {
			content: "\f299"
		}

		.fa-universal-access:before {
			content: "\f29a"
		}

		.fa-wheelchair-alt:before {
			content: "\f29b"
		}

		.fa-question-circle-o:before {
			content: "\f29c"
		}

		.fa-blind:before {
			content: "\f29d"
		}

		.fa-audio-description:before {
			content: "\f29e"
		}

		.fa-volume-control-phone:before {
			content: "\f2a0"
		}

		.fa-braille:before {
			content: "\f2a1"
		}

		.fa-assistive-listening-systems:before {
			content: "\f2a2"
		}

		.fa-american-sign-language-interpreting:before,
		.fa-asl-interpreting:before {
			content: "\f2a3"
		}

		.fa-deaf:before,
		.fa-deafness:before,
		.fa-hard-of-hearing:before {
			content: "\f2a4"
		}

		.fa-glide:before {
			content: "\f2a5"
		}

		.fa-glide-g:before {
			content: "\f2a6"
		}

		.fa-sign-language:before,
		.fa-signing:before {
			content: "\f2a7"
		}

		.fa-low-vision:before {
			content: "\f2a8"
		}

		.fa-viadeo:before {
			content: "\f2a9"
		}

		.fa-viadeo-square:before {
			content: "\f2aa"
		}

		.fa-snapchat:before {
			content: "\f2ab"
		}

		.fa-snapchat-ghost:before {
			content: "\f2ac"
		}

		.fa-snapchat-square:before {
			content: "\f2ad"
		}

		.fa-pied-piper:before {
			content: "\f2ae"
		}

		.fa-first-order:before {
			content: "\f2b0"
		}

		.fa-yoast:before {
			content: "\f2b1"
		}

		.fa-themeisle:before {
			content: "\f2b2"
		}

		.fa-google-plus-circle:before,
		.fa-google-plus-official:before {
			content: "\f2b3"
		}

		.fa-fa:before,
		.fa-font-awesome:before {
			content: "\f2b4"
		}

		.fa-handshake-o:before {
			content: "\f2b5"
		}

		.fa-envelope-open:before {
			content: "\f2b6"
		}

		.fa-envelope-open-o:before {
			content: "\f2b7"
		}

		.fa-linode:before {
			content: "\f2b8"
		}

		.fa-address-book:before {
			content: "\f2b9"
		}

		.fa-address-book-o:before {
			content: "\f2ba"
		}

		.fa-address-card:before,
		.fa-vcard:before {
			content: "\f2bb"
		}

		.fa-address-card-o:before,
		.fa-vcard-o:before {
			content: "\f2bc"
		}

		.fa-user-circle:before {
			content: "\f2bd"
		}

		.fa-user-circle-o:before {
			content: "\f2be"
		}

		.fa-user-o:before {
			content: "\f2c0"
		}

		.fa-id-badge:before {
			content: "\f2c1"
		}

		.fa-drivers-license:before,
		.fa-id-card:before {
			content: "\f2c2"
		}

		.fa-drivers-license-o:before,
		.fa-id-card-o:before {
			content: "\f2c3"
		}

		.fa-quora:before {
			content: "\f2c4"
		}

		.fa-free-code-camp:before {
			content: "\f2c5"
		}

		.fa-telegram:before {
			content: "\f2c6"
		}

		.fa-thermometer-4:before,
		.fa-thermometer-full:before,
		.fa-thermometer:before {
			content: "\f2c7"
		}

		.fa-thermometer-3:before,
		.fa-thermometer-three-quarters:before {
			content: "\f2c8"
		}

		.fa-thermometer-2:before,
		.fa-thermometer-half:before {
			content: "\f2c9"
		}

		.fa-thermometer-1:before,
		.fa-thermometer-quarter:before {
			content: "\f2ca"
		}

		.fa-thermometer-0:before,
		.fa-thermometer-empty:before {
			content: "\f2cb"
		}

		.fa-shower:before {
			content: "\f2cc"
		}

		.fa-bath:before,
		.fa-bathtub:before,
		.fa-s15:before {
			content: "\f2cd"
		}

		.fa-podcast:before {
			content: "\f2ce"
		}

		.fa-window-maximize:before {
			content: "\f2d0"
		}

		.fa-window-minimize:before {
			content: "\f2d1"
		}

		.fa-window-restore:before {
			content: "\f2d2"
		}

		.fa-times-rectangle:before,
		.fa-window-close:before {
			content: "\f2d3"
		}

		.fa-times-rectangle-o:before,
		.fa-window-close-o:before {
			content: "\f2d4"
		}

		.fa-bandcamp:before {
			content: "\f2d5"
		}

		.fa-grav:before {
			content: "\f2d6"
		}

		.fa-etsy:before {
			content: "\f2d7"
		}

		.fa-imdb:before {
			content: "\f2d8"
		}

		.fa-ravelry:before {
			content: "\f2d9"
		}

		.fa-eercast:before {
			content: "\f2da"
		}

		.fa-microchip:before {
			content: "\f2db"
		}

		.fa-snowflake-o:before {
			content: "\f2dc"
		}

		.fa-superpowers:before {
			content: "\f2dd"
		}

		.fa-wpexplorer:before {
			content: "\f2de"
		}

		.fa-meetup:before {
			content: "\f2e0"
		}

		.sr-only {
			position: absolute;
			width: 1px;
			height: 1px;
			padding: 0;
			margin: -1px;
			overflow: hidden;
			clip: rect(0, 0, 0, 0);
			border: 0
		}

		.sr-only-focusable:active,
		.sr-only-focusable:focus {
			position: static;
			width: auto;
			height: auto;
			margin: 0;
			overflow: visible;
			clip: auto
		}

		/* rangeSlider */
		.irs {
			position: relative;
			display: block;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none
		}

		.irs-line {
			position: relative;
			display: block;
			overflow: hidden;
			outline: 0 !important
		}

		.irs-line-left,
		.irs-line-mid,
		.irs-line-right {
			position: absolute;
			display: block;
			top: 0
		}

		.irs-line-left {
			left: 0;
			width: 11%
		}

		.irs-line-mid {
			left: 9%;
			width: 82%
		}

		.irs-line-right {
			right: 0;
			width: 11%
		}

		.irs-bar {
			position: absolute;
			display: block;
			left: 0;
			width: 0
		}

		.irs-bar-edge {
			position: absolute;
			display: block;
			top: 0;
			left: 0
		}

		.irs-shadow {
			position: absolute;
			display: none;
			left: 0;
			width: 0
		}

		.irs-slider {
			position: absolute;
			display: block;
			cursor: default;
			z-index: 1
		}

		.irs-slider.type_last {
			z-index: 2
		}

		.irs-min {
			position: absolute;
			display: block;
			left: 0;
			cursor: default
		}

		.irs-max {
			position: absolute;
			display: block;
			right: 0;
			cursor: default
		}

		.irs-from,
		.irs-single,
		.irs-to {
			position: absolute;
			display: block;
			top: 0;
			left: 0;
			cursor: default;
			white-space: nowrap
		}

		.irs-grid {
			position: absolute;
			display: none;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 20px
		}

		.irs-with-grid .irs-grid {
			display: block
		}

		.irs-grid-pol {
			position: absolute;
			top: 0;
			left: 0;
			width: 1px;
			height: 8px;
			background: #000
		}

		.irs-grid-pol.small {
			height: 4px
		}

		.irs-grid-text {
			position: absolute;
			bottom: 0;
			left: 0;
			white-space: nowrap;
			text-align: center;
			font-size: 9px;
			line-height: 9px;
			padding: 0 3px;
			color: #000
		}

		.irs-disable-mask {
			position: absolute;
			display: block;
			top: 0;
			left: -1%;
			width: 102%;
			height: 100%;
			cursor: default;
			background: rgba(0, 0, 0, 0);
			z-index: 2
		}

		.lt-ie9 .irs-disable-mask {
			background: #000;
			cursor: not-allowed
		}

		.irs-disabled {
			opacity: .4
		}

		.irs-hidden-input {
			position: absolute !important;
			display: block !important;
			top: 0 !important;
			left: 0 !important;
			width: 0 !important;
			height: 0 !important;
			font-size: 0 !important;
			line-height: 0 !important;
			padding: 0 !important;
			margin: 0 !important;
			overflow: hidden;
			outline: 0 !important;
			z-index: -9999 !important;
			background: 0 0 !important;
			border-style: solid !important;
			border-color: transparent !important
		}

		/*# sourceMappingURL=ion.rangeSlider.min.css.map */
		.irs {
			height: 55px
		}

		.irs-with-grid {
			height: 75px
		}

		.irs-line {
			height: 10px;
			top: 33px;
			background: #eee;
			background: linear-gradient(to bottom, #ddd -50%, #fff 150%);
			border: 1px solid #ccc;
			border-radius: 16px;
			-moz-border-radius: 16px
		}

		.irs-line-left {
			height: 8px
		}

		.irs-line-mid {
			height: 8px
		}

		.irs-line-right {
			height: 8px
		}

		.irs-bar {
			height: 10px;
			top: 33px;
			border-top: 1px solid #428bca;
			border-bottom: 1px solid #428bca;
			background: #428bca;
			background: linear-gradient(to top, rgba(66, 139, 202, 1) 0, rgba(127, 195, 232, 1) 100%)
		}

		.irs-bar-edge {
			height: 10px;
			top: 33px;
			width: 14px;
			border: 1px solid #428bca;
			border-right: 0;
			background: #428bca;
			background: linear-gradient(to top, rgba(66, 139, 202, 1) 0, rgba(127, 195, 232, 1) 100%);
			border-radius: 16px 0 0 16px;
			-moz-border-radius: 16px 0 0 16px
		}

		.irs-shadow {
			height: 2px;
			top: 38px;
			background: #000;
			opacity: .3;
			border-radius: 5px;
			-moz-border-radius: 5px
		}

		.irs-slider {
			top: 25px;
			width: 27px;
			height: 27px;
			border: 1px solid #aaa;
			background: #ddd;
			background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0, rgba(220, 220, 220, 1) 20%, rgba(255, 255, 255, 1) 100%);
			border-radius: 27px;
			-moz-border-radius: 27px;
			box-shadow: 1px 1px 3px rgba(0, 0, 0, .3);
			cursor: pointer
		}

		.irs-slider.state_hover,
		.irs-slider:hover {
			background: #fff
		}

		.irs-max,
		.irs-min {
			color: #333;
			font-size: 12px;
			line-height: 1.333;
			text-shadow: none;
			top: 0;
			padding: 1px 5px;
			background: rgba(0, 0, 0, .1);
			border-radius: 3px;
			-moz-border-radius: 3px
		}

		.lt-ie9 .irs-max,
		.lt-ie9 .irs-min {
			background: #ccc
		}

		.irs-from,
		.irs-single,
		.irs-to {
			color: #fff;
			font-size: 14px;
			line-height: 1.333;
			text-shadow: none;
			padding: 1px 5px;
			background: #428bca;
			border-radius: 3px;
			-moz-border-radius: 3px
		}

		.lt-ie9 .irs-from,
		.lt-ie9 .irs-single,
		.lt-ie9 .irs-to {
			background: #999
		}

		.irs-grid {
			height: 27px
		}

		.irs-grid-pol {
			opacity: .5;
			background: #428bca
		}

		.irs-grid-pol.small {
			background: #999
		}

		.irs-grid-text {
			bottom: 5px;
			color: #99a4ac
		}

		/*# sourceMappingURL=ion.rangeSlider.skinHTML5.min.css.map */

		/*! Flickity v2.1.0 https://flickity.metafizzy.co ---------------------------------------------- */
		.flickity-enabled {
			position: relative
		}

		.flickity-enabled:focus {
			outline: 0
		}

		.flickity-viewport {
			overflow: hidden;
			position: relative;
			height: 100%
		}

		.flickity-slider {
			position: absolute;
			width: 100%;
			height: 100%
		}

		.flickity-enabled.is-draggable {
			-webkit-tap-highlight-color: transparent;
			tap-highlight-color: transparent;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none
		}

		.flickity-enabled.is-draggable .flickity-viewport {
			cursor: move;
			cursor: -webkit-grab;
			cursor: grab
		}

		.flickity-enabled.is-draggable .flickity-viewport.is-pointer-down {
			cursor: -webkit-grabbing;
			cursor: grabbing
		}

		.flickity-button {
			position: absolute;
			background: #fff;
			background: hsla(0, 0%, 100%, .75);
			border: none;
			color: #333
		}

		.flickity-button:hover {
			background: #fff;
			cursor: pointer
		}

		.flickity-button:focus {
			outline: 0;
			box-shadow: 0 0 0 5px #19f
		}

		.flickity-button:active {
			opacity: .6
		}

		.flickity-button:disabled {
			opacity: .3;
			cursor: auto;
			pointer-events: none
		}

		.flickity-button-icon {
			fill: #333
		}

		.flickity-prev-next-button {
			top: 50%;
			width: 44px;
			height: 44px;
			border-radius: 50%;
			-webkit-transform: translateY(-50%);
			transform: translateY(-50%)
		}

		.flickity-prev-next-button.previous {
			left: 10px
		}

		.flickity-prev-next-button.next {
			right: 10px
		}

		.flickity-rtl .flickity-prev-next-button.previous {
			left: auto;
			right: 10px
		}

		.flickity-rtl .flickity-prev-next-button.next {
			right: auto;
			left: 10px
		}

		.flickity-prev-next-button .flickity-button-icon {
			position: absolute;
			left: 20%;
			top: 20%;
			width: 60%;
			height: 60%
		}

		.flickity-page-dots {
			position: absolute;
			width: 100%;
			bottom: -25px;
			padding: 0;
			margin: 0;
			list-style: none;
			text-align: center;
			line-height: 1
		}

		.flickity-rtl .flickity-page-dots {
			direction: rtl
		}

		.flickity-page-dots .dot {
			display: inline-block;
			width: 10px;
			height: 10px;
			margin: 0 8px;
			background: #333;
			border-radius: 50%;
			opacity: .25;
			cursor: pointer
		}

		.flickity-page-dots .dot.is-selected {
			opacity: 1
		}

		.flickity-viewport {
			height: 100% !important;
		}

		@charset "UTF-8";

		/*! animate.css -http://daneden.me/animate Version - 3.5.1 Licensed under the MIT license - http://opensource.org/licenses/MIT Copyright (c) 2016 Daniel Eden */
		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both
		}

		.animated.infinite {
			-webkit-animation-iteration-count: infinite;
			animation-iteration-count: infinite
		}

		.animated.hinge {
			-webkit-animation-duration: 2s;
			animation-duration: 2s
		}

		.animated.bounceIn,
		.animated.bounceOut,
		.animated.flipOutX,
		.animated.flipOutY {
			-webkit-animation-duration: .75s;
			animation-duration: .75s
		}

		@-webkit-keyframes bounce {

			0%,
			20%,
			53%,
			80%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			40%,
			43% {
				-webkit-transform: translate3d(0, -30px, 0);
				transform: translate3d(0, -30px, 0)
			}

			40%,
			43%,
			70% {
				-webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
				animation-timing-function: cubic-bezier(.755, .05, .855, .06)
			}

			70% {
				-webkit-transform: translate3d(0, -15px, 0);
				transform: translate3d(0, -15px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, -4px, 0);
				transform: translate3d(0, -4px, 0)
			}
		}

		@keyframes bounce {

			0%,
			20%,
			53%,
			80%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			40%,
			43% {
				-webkit-transform: translate3d(0, -30px, 0);
				transform: translate3d(0, -30px, 0)
			}

			40%,
			43%,
			70% {
				-webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
				animation-timing-function: cubic-bezier(.755, .05, .855, .06)
			}

			70% {
				-webkit-transform: translate3d(0, -15px, 0);
				transform: translate3d(0, -15px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, -4px, 0);
				transform: translate3d(0, -4px, 0)
			}
		}

		.bounce {
			-webkit-animation-name: bounce;
			animation-name: bounce;
			-webkit-transform-origin: center bottom;
			transform-origin: center bottom
		}

		@-webkit-keyframes flash {

			0%,
			50%,
			to {
				opacity: 1
			}

			25%,
			75% {
				opacity: 0
			}
		}

		@keyframes flash {

			0%,
			50%,
			to {
				opacity: 1
			}

			25%,
			75% {
				opacity: 0
			}
		}

		.flash {
			-webkit-animation-name: flash;
			animation-name: flash
		}

		@-webkit-keyframes pulse {
			0% {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}

			50% {
				-webkit-transform: scale3d(1.05, 1.05, 1.05);
				transform: scale3d(1.05, 1.05, 1.05)
			}

			to {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}
		}

		@keyframes pulse {
			0% {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}

			50% {
				-webkit-transform: scale3d(1.05, 1.05, 1.05);
				transform: scale3d(1.05, 1.05, 1.05)
			}

			to {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}
		}

		.pulse {
			-webkit-animation-name: pulse;
			animation-name: pulse
		}

		@-webkit-keyframes rubberBand {
			0% {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}

			30% {
				-webkit-transform: scale3d(1.25, .75, 1);
				transform: scale3d(1.25, .75, 1)
			}

			40% {
				-webkit-transform: scale3d(.75, 1.25, 1);
				transform: scale3d(.75, 1.25, 1)
			}

			50% {
				-webkit-transform: scale3d(1.15, .85, 1);
				transform: scale3d(1.15, .85, 1)
			}

			65% {
				-webkit-transform: scale3d(.95, 1.05, 1);
				transform: scale3d(.95, 1.05, 1)
			}

			75% {
				-webkit-transform: scale3d(1.05, .95, 1);
				transform: scale3d(1.05, .95, 1)
			}

			to {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}
		}

		@keyframes rubberBand {
			0% {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}

			30% {
				-webkit-transform: scale3d(1.25, .75, 1);
				transform: scale3d(1.25, .75, 1)
			}

			40% {
				-webkit-transform: scale3d(.75, 1.25, 1);
				transform: scale3d(.75, 1.25, 1)
			}

			50% {
				-webkit-transform: scale3d(1.15, .85, 1);
				transform: scale3d(1.15, .85, 1)
			}

			65% {
				-webkit-transform: scale3d(.95, 1.05, 1);
				transform: scale3d(.95, 1.05, 1)
			}

			75% {
				-webkit-transform: scale3d(1.05, .95, 1);
				transform: scale3d(1.05, .95, 1)
			}

			to {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}
		}

		.rubberBand {
			-webkit-animation-name: rubberBand;
			animation-name: rubberBand
		}

		@-webkit-keyframes shake {

			0%,
			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			10%,
			30%,
			50%,
			70%,
			90% {
				-webkit-transform: translate3d(-10px, 0, 0);
				transform: translate3d(-10px, 0, 0)
			}

			20%,
			40%,
			60%,
			80% {
				-webkit-transform: translate3d(10px, 0, 0);
				transform: translate3d(10px, 0, 0)
			}
		}

		@keyframes shake {

			0%,
			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			10%,
			30%,
			50%,
			70%,
			90% {
				-webkit-transform: translate3d(-10px, 0, 0);
				transform: translate3d(-10px, 0, 0)
			}

			20%,
			40%,
			60%,
			80% {
				-webkit-transform: translate3d(10px, 0, 0);
				transform: translate3d(10px, 0, 0)
			}
		}

		.shake {
			-webkit-animation-name: shake;
			animation-name: shake
		}

		@-webkit-keyframes headShake {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}

			6.5% {
				-webkit-transform: translateX(-6px) rotateY(-9deg);
				transform: translateX(-6px) rotateY(-9deg)
			}

			18.5% {
				-webkit-transform: translateX(5px) rotateY(7deg);
				transform: translateX(5px) rotateY(7deg)
			}

			31.5% {
				-webkit-transform: translateX(-3px) rotateY(-5deg);
				transform: translateX(-3px) rotateY(-5deg)
			}

			43.5% {
				-webkit-transform: translateX(2px) rotateY(3deg);
				transform: translateX(2px) rotateY(3deg)
			}

			50% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}
		}

		@keyframes headShake {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}

			6.5% {
				-webkit-transform: translateX(-6px) rotateY(-9deg);
				transform: translateX(-6px) rotateY(-9deg)
			}

			18.5% {
				-webkit-transform: translateX(5px) rotateY(7deg);
				transform: translateX(5px) rotateY(7deg)
			}

			31.5% {
				-webkit-transform: translateX(-3px) rotateY(-5deg);
				transform: translateX(-3px) rotateY(-5deg)
			}

			43.5% {
				-webkit-transform: translateX(2px) rotateY(3deg);
				transform: translateX(2px) rotateY(3deg)
			}

			50% {
				-webkit-transform: translateX(0);
				transform: translateX(0)
			}
		}

		.headShake {
			-webkit-animation-timing-function: ease-in-out;
			animation-timing-function: ease-in-out;
			-webkit-animation-name: headShake;
			animation-name: headShake
		}

		@-webkit-keyframes swing {
			20% {
				-webkit-transform: rotate(15deg);
				transform: rotate(15deg)
			}

			40% {
				-webkit-transform: rotate(-10deg);
				transform: rotate(-10deg)
			}

			60% {
				-webkit-transform: rotate(5deg);
				transform: rotate(5deg)
			}

			80% {
				-webkit-transform: rotate(-5deg);
				transform: rotate(-5deg)
			}

			to {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg)
			}
		}

		@keyframes swing {
			20% {
				-webkit-transform: rotate(15deg);
				transform: rotate(15deg)
			}

			40% {
				-webkit-transform: rotate(-10deg);
				transform: rotate(-10deg)
			}

			60% {
				-webkit-transform: rotate(5deg);
				transform: rotate(5deg)
			}

			80% {
				-webkit-transform: rotate(-5deg);
				transform: rotate(-5deg)
			}

			to {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg)
			}
		}

		.swing {
			-webkit-transform-origin: top center;
			transform-origin: top center;
			-webkit-animation-name: swing;
			animation-name: swing
		}

		@-webkit-keyframes tada {
			0% {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}

			10%,
			20% {
				-webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
				transform: scale3d(.9, .9, .9) rotate(-3deg)
			}

			30%,
			50%,
			70%,
			90% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
				transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
			}

			40%,
			60%,
			80% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
				transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
			}

			to {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}
		}

		@keyframes tada {
			0% {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}

			10%,
			20% {
				-webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
				transform: scale3d(.9, .9, .9) rotate(-3deg)
			}

			30%,
			50%,
			70%,
			90% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
				transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
			}

			40%,
			60%,
			80% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
				transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
			}

			to {
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}
		}

		.tada {
			-webkit-animation-name: tada;
			animation-name: tada
		}

		@-webkit-keyframes wobble {
			0% {
				-webkit-transform: none;
				transform: none
			}

			15% {
				-webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
				transform: translate3d(-25%, 0, 0) rotate(-5deg)
			}

			30% {
				-webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
				transform: translate3d(20%, 0, 0) rotate(3deg)
			}

			45% {
				-webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
				transform: translate3d(-15%, 0, 0) rotate(-3deg)
			}

			60% {
				-webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
				transform: translate3d(10%, 0, 0) rotate(2deg)
			}

			75% {
				-webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
				transform: translate3d(-5%, 0, 0) rotate(-1deg)
			}

			to {
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes wobble {
			0% {
				-webkit-transform: none;
				transform: none
			}

			15% {
				-webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
				transform: translate3d(-25%, 0, 0) rotate(-5deg)
			}

			30% {
				-webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
				transform: translate3d(20%, 0, 0) rotate(3deg)
			}

			45% {
				-webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
				transform: translate3d(-15%, 0, 0) rotate(-3deg)
			}

			60% {
				-webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
				transform: translate3d(10%, 0, 0) rotate(2deg)
			}

			75% {
				-webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
				transform: translate3d(-5%, 0, 0) rotate(-1deg)
			}

			to {
				-webkit-transform: none;
				transform: none
			}
		}

		.wobble {
			-webkit-animation-name: wobble;
			animation-name: wobble
		}

		@-webkit-keyframes jello {

			0%,
			11.1%,
			to {
				-webkit-transform: none;
				transform: none
			}

			22.2% {
				-webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
				transform: skewX(-12.5deg) skewY(-12.5deg)
			}

			33.3% {
				-webkit-transform: skewX(6.25deg) skewY(6.25deg);
				transform: skewX(6.25deg) skewY(6.25deg)
			}

			44.4% {
				-webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
				transform: skewX(-3.125deg) skewY(-3.125deg)
			}

			55.5% {
				-webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
				transform: skewX(1.5625deg) skewY(1.5625deg)
			}

			66.6% {
				-webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
				transform: skewX(-.78125deg) skewY(-.78125deg)
			}

			77.7% {
				-webkit-transform: skewX(.390625deg) skewY(.390625deg);
				transform: skewX(.390625deg) skewY(.390625deg)
			}

			88.8% {
				-webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
				transform: skewX(-.1953125deg) skewY(-.1953125deg)
			}
		}

		@keyframes jello {

			0%,
			11.1%,
			to {
				-webkit-transform: none;
				transform: none
			}

			22.2% {
				-webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
				transform: skewX(-12.5deg) skewY(-12.5deg)
			}

			33.3% {
				-webkit-transform: skewX(6.25deg) skewY(6.25deg);
				transform: skewX(6.25deg) skewY(6.25deg)
			}

			44.4% {
				-webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
				transform: skewX(-3.125deg) skewY(-3.125deg)
			}

			55.5% {
				-webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
				transform: skewX(1.5625deg) skewY(1.5625deg)
			}

			66.6% {
				-webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
				transform: skewX(-.78125deg) skewY(-.78125deg)
			}

			77.7% {
				-webkit-transform: skewX(.390625deg) skewY(.390625deg);
				transform: skewX(.390625deg) skewY(.390625deg)
			}

			88.8% {
				-webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
				transform: skewX(-.1953125deg) skewY(-.1953125deg)
			}
		}

		.jello {
			-webkit-animation-name: jello;
			animation-name: jello;
			-webkit-transform-origin: center;
			transform-origin: center
		}

		@-webkit-keyframes bounceIn {

			0%,
			20%,
			40%,
			60%,
			80%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			20% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1);
				transform: scale3d(1.1, 1.1, 1.1)
			}

			40% {
				-webkit-transform: scale3d(.9, .9, .9);
				transform: scale3d(.9, .9, .9)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(1.03, 1.03, 1.03);
				transform: scale3d(1.03, 1.03, 1.03)
			}

			80% {
				-webkit-transform: scale3d(.97, .97, .97);
				transform: scale3d(.97, .97, .97)
			}

			to {
				opacity: 1;
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}
		}

		@keyframes bounceIn {

			0%,
			20%,
			40%,
			60%,
			80%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			20% {
				-webkit-transform: scale3d(1.1, 1.1, 1.1);
				transform: scale3d(1.1, 1.1, 1.1)
			}

			40% {
				-webkit-transform: scale3d(.9, .9, .9);
				transform: scale3d(.9, .9, .9)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(1.03, 1.03, 1.03);
				transform: scale3d(1.03, 1.03, 1.03)
			}

			80% {
				-webkit-transform: scale3d(.97, .97, .97);
				transform: scale3d(.97, .97, .97)
			}

			to {
				opacity: 1;
				-webkit-transform: scaleX(1);
				transform: scaleX(1)
			}
		}

		.bounceIn {
			-webkit-animation-name: bounceIn;
			animation-name: bounceIn
		}

		@-webkit-keyframes bounceInDown {

			0%,
			60%,
			75%,
			90%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -3000px, 0);
				transform: translate3d(0, -3000px, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(0, 25px, 0);
				transform: translate3d(0, 25px, 0)
			}

			75% {
				-webkit-transform: translate3d(0, -10px, 0);
				transform: translate3d(0, -10px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, 5px, 0);
				transform: translate3d(0, 5px, 0)
			}

			to {
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes bounceInDown {

			0%,
			60%,
			75%,
			90%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -3000px, 0);
				transform: translate3d(0, -3000px, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(0, 25px, 0);
				transform: translate3d(0, 25px, 0)
			}

			75% {
				-webkit-transform: translate3d(0, -10px, 0);
				transform: translate3d(0, -10px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, 5px, 0);
				transform: translate3d(0, 5px, 0)
			}

			to {
				-webkit-transform: none;
				transform: none
			}
		}

		.bounceInDown {
			-webkit-animation-name: bounceInDown;
			animation-name: bounceInDown
		}

		@-webkit-keyframes bounceInLeft {

			0%,
			60%,
			75%,
			90%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(-3000px, 0, 0);
				transform: translate3d(-3000px, 0, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(25px, 0, 0);
				transform: translate3d(25px, 0, 0)
			}

			75% {
				-webkit-transform: translate3d(-10px, 0, 0);
				transform: translate3d(-10px, 0, 0)
			}

			90% {
				-webkit-transform: translate3d(5px, 0, 0);
				transform: translate3d(5px, 0, 0)
			}

			to {
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes bounceInLeft {

			0%,
			60%,
			75%,
			90%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(-3000px, 0, 0);
				transform: translate3d(-3000px, 0, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(25px, 0, 0);
				transform: translate3d(25px, 0, 0)
			}

			75% {
				-webkit-transform: translate3d(-10px, 0, 0);
				transform: translate3d(-10px, 0, 0)
			}

			90% {
				-webkit-transform: translate3d(5px, 0, 0);
				transform: translate3d(5px, 0, 0)
			}

			to {
				-webkit-transform: none;
				transform: none
			}
		}

		.bounceInLeft {
			-webkit-animation-name: bounceInLeft;
			animation-name: bounceInLeft
		}

		@-webkit-keyframes bounceInRight {

			0%,
			60%,
			75%,
			90%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(3000px, 0, 0);
				transform: translate3d(3000px, 0, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(-25px, 0, 0);
				transform: translate3d(-25px, 0, 0)
			}

			75% {
				-webkit-transform: translate3d(10px, 0, 0);
				transform: translate3d(10px, 0, 0)
			}

			90% {
				-webkit-transform: translate3d(-5px, 0, 0);
				transform: translate3d(-5px, 0, 0)
			}

			to {
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes bounceInRight {

			0%,
			60%,
			75%,
			90%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(3000px, 0, 0);
				transform: translate3d(3000px, 0, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(-25px, 0, 0);
				transform: translate3d(-25px, 0, 0)
			}

			75% {
				-webkit-transform: translate3d(10px, 0, 0);
				transform: translate3d(10px, 0, 0)
			}

			90% {
				-webkit-transform: translate3d(-5px, 0, 0);
				transform: translate3d(-5px, 0, 0)
			}

			to {
				-webkit-transform: none;
				transform: none
			}
		}

		.bounceInRight {
			-webkit-animation-name: bounceInRight;
			animation-name: bounceInRight
		}

		@-webkit-keyframes bounceInUp {

			0%,
			60%,
			75%,
			90%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 3000px, 0);
				transform: translate3d(0, 3000px, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(0, -20px, 0);
				transform: translate3d(0, -20px, 0)
			}

			75% {
				-webkit-transform: translate3d(0, 10px, 0);
				transform: translate3d(0, 10px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, -5px, 0);
				transform: translate3d(0, -5px, 0)
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		@keyframes bounceInUp {

			0%,
			60%,
			75%,
			90%,
			to {
				-webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
				animation-timing-function: cubic-bezier(.215, .61, .355, 1)
			}

			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 3000px, 0);
				transform: translate3d(0, 3000px, 0)
			}

			60% {
				opacity: 1;
				-webkit-transform: translate3d(0, -20px, 0);
				transform: translate3d(0, -20px, 0)
			}

			75% {
				-webkit-transform: translate3d(0, 10px, 0);
				transform: translate3d(0, 10px, 0)
			}

			90% {
				-webkit-transform: translate3d(0, -5px, 0);
				transform: translate3d(0, -5px, 0)
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		.bounceInUp {
			-webkit-animation-name: bounceInUp;
			animation-name: bounceInUp
		}

		@-webkit-keyframes bounceOut {
			20% {
				-webkit-transform: scale3d(.9, .9, .9);
				transform: scale3d(.9, .9, .9)
			}

			50%,
			55% {
				opacity: 1;
				-webkit-transform: scale3d(1.1, 1.1, 1.1);
				transform: scale3d(1.1, 1.1, 1.1)
			}

			to {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}
		}

		@keyframes bounceOut {
			20% {
				-webkit-transform: scale3d(.9, .9, .9);
				transform: scale3d(.9, .9, .9)
			}

			50%,
			55% {
				opacity: 1;
				-webkit-transform: scale3d(1.1, 1.1, 1.1);
				transform: scale3d(1.1, 1.1, 1.1)
			}

			to {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}
		}

		.bounceOut {
			-webkit-animation-name: bounceOut;
			animation-name: bounceOut
		}

		@-webkit-keyframes bounceOutDown {
			20% {
				-webkit-transform: translate3d(0, 10px, 0);
				transform: translate3d(0, 10px, 0)
			}

			40%,
			45% {
				opacity: 1;
				-webkit-transform: translate3d(0, -20px, 0);
				transform: translate3d(0, -20px, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}
		}

		@keyframes bounceOutDown {
			20% {
				-webkit-transform: translate3d(0, 10px, 0);
				transform: translate3d(0, 10px, 0)
			}

			40%,
			45% {
				opacity: 1;
				-webkit-transform: translate3d(0, -20px, 0);
				transform: translate3d(0, -20px, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}
		}

		.bounceOutDown {
			-webkit-animation-name: bounceOutDown;
			animation-name: bounceOutDown
		}

		@-webkit-keyframes bounceOutLeft {
			20% {
				opacity: 1;
				-webkit-transform: translate3d(20px, 0, 0);
				transform: translate3d(20px, 0, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}
		}

		@keyframes bounceOutLeft {
			20% {
				opacity: 1;
				-webkit-transform: translate3d(20px, 0, 0);
				transform: translate3d(20px, 0, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}
		}

		.bounceOutLeft {
			-webkit-animation-name: bounceOutLeft;
			animation-name: bounceOutLeft
		}

		@-webkit-keyframes bounceOutRight {
			20% {
				opacity: 1;
				-webkit-transform: translate3d(-20px, 0, 0);
				transform: translate3d(-20px, 0, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}
		}

		@keyframes bounceOutRight {
			20% {
				opacity: 1;
				-webkit-transform: translate3d(-20px, 0, 0);
				transform: translate3d(-20px, 0, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}
		}

		.bounceOutRight {
			-webkit-animation-name: bounceOutRight;
			animation-name: bounceOutRight
		}

		@-webkit-keyframes bounceOutUp {
			20% {
				-webkit-transform: translate3d(0, -10px, 0);
				transform: translate3d(0, -10px, 0)
			}

			40%,
			45% {
				opacity: 1;
				-webkit-transform: translate3d(0, 20px, 0);
				transform: translate3d(0, 20px, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}
		}

		@keyframes bounceOutUp {
			20% {
				-webkit-transform: translate3d(0, -10px, 0);
				transform: translate3d(0, -10px, 0)
			}

			40%,
			45% {
				opacity: 1;
				-webkit-transform: translate3d(0, 20px, 0);
				transform: translate3d(0, 20px, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}
		}

		.bounceOutUp {
			-webkit-animation-name: bounceOutUp;
			animation-name: bounceOutUp
		}

		@-webkit-keyframes fadeIn {
			0% {
				opacity: 0
			}

			to {
				opacity: 1
			}
		}

		@keyframes fadeIn {
			0% {
				opacity: 0
			}

			to {
				opacity: 1
			}
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn
		}

		@-webkit-keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInDown {
			-webkit-animation-name: fadeInDown;
			animation-name: fadeInDown
		}

		@-webkit-keyframes fadeInDownBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInDownBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInDownBig {
			-webkit-animation-name: fadeInDownBig;
			animation-name: fadeInDownBig
		}

		@-webkit-keyframes fadeInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInLeft {
			-webkit-animation-name: fadeInLeft;
			animation-name: fadeInLeft
		}

		@-webkit-keyframes fadeInLeftBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInLeftBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInLeftBig {
			-webkit-animation-name: fadeInLeftBig;
			animation-name: fadeInLeftBig
		}

		@-webkit-keyframes fadeInRight {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInRight {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInRight {
			-webkit-animation-name: fadeInRight;
			animation-name: fadeInRight
		}

		@-webkit-keyframes fadeInRightBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInRightBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInRightBig {
			-webkit-animation-name: fadeInRightBig;
			animation-name: fadeInRightBig
		}

		@-webkit-keyframes fadeInUp {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInUp {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInUp {
			-webkit-animation-name: fadeInUp;
			animation-name: fadeInUp
		}

		@-webkit-keyframes fadeInUpBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes fadeInUpBig {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.fadeInUpBig {
			-webkit-animation-name: fadeInUpBig;
			animation-name: fadeInUpBig
		}

		@-webkit-keyframes fadeOut {
			0% {
				opacity: 1
			}

			to {
				opacity: 0
			}
		}

		@keyframes fadeOut {
			0% {
				opacity: 1
			}

			to {
				opacity: 0
			}
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut
		}

		@-webkit-keyframes fadeOutDown {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}
		}

		@keyframes fadeOutDown {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}
		}

		.fadeOutDown {
			-webkit-animation-name: fadeOutDown;
			animation-name: fadeOutDown
		}

		@-webkit-keyframes fadeOutDownBig {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}
		}

		@keyframes fadeOutDownBig {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, 2000px, 0);
				transform: translate3d(0, 2000px, 0)
			}
		}

		.fadeOutDownBig {
			-webkit-animation-name: fadeOutDownBig;
			animation-name: fadeOutDownBig
		}

		@-webkit-keyframes fadeOutLeft {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}
		}

		@keyframes fadeOutLeft {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}
		}

		.fadeOutLeft {
			-webkit-animation-name: fadeOutLeft;
			animation-name: fadeOutLeft
		}

		@-webkit-keyframes fadeOutLeftBig {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}
		}

		@keyframes fadeOutLeftBig {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(-2000px, 0, 0);
				transform: translate3d(-2000px, 0, 0)
			}
		}

		.fadeOutLeftBig {
			-webkit-animation-name: fadeOutLeftBig;
			animation-name: fadeOutLeftBig
		}

		@-webkit-keyframes fadeOutRight {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}
		}

		@keyframes fadeOutRight {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}
		}

		.fadeOutRight {
			-webkit-animation-name: fadeOutRight;
			animation-name: fadeOutRight
		}

		@-webkit-keyframes fadeOutRightBig {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}
		}

		@keyframes fadeOutRightBig {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(2000px, 0, 0);
				transform: translate3d(2000px, 0, 0)
			}
		}

		.fadeOutRightBig {
			-webkit-animation-name: fadeOutRightBig;
			animation-name: fadeOutRightBig
		}

		@-webkit-keyframes fadeOutUp {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}
		}

		@keyframes fadeOutUp {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}
		}

		.fadeOutUp {
			-webkit-animation-name: fadeOutUp;
			animation-name: fadeOutUp
		}

		@-webkit-keyframes fadeOutUpBig {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}
		}

		@keyframes fadeOutUpBig {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(0, -2000px, 0);
				transform: translate3d(0, -2000px, 0)
			}
		}

		.fadeOutUpBig {
			-webkit-animation-name: fadeOutUpBig;
			animation-name: fadeOutUpBig
		}

		@-webkit-keyframes flip {
			0% {
				-webkit-transform: perspective(400px) rotateY(-1turn);
				transform: perspective(400px) rotateY(-1turn)
			}

			0%,
			40% {
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out
			}

			40% {
				-webkit-transform: perspective(400px) translateZ(150px) rotateY(-190deg);
				transform: perspective(400px) translateZ(150px) rotateY(-190deg)
			}

			50% {
				-webkit-transform: perspective(400px) translateZ(150px) rotateY(-170deg);
				transform: perspective(400px) translateZ(150px) rotateY(-170deg)
			}

			50%,
			80% {
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			80% {
				-webkit-transform: perspective(400px) scale3d(.95, .95, .95);
				transform: perspective(400px) scale3d(.95, .95, .95)
			}

			to {
				-webkit-transform: perspective(400px);
				transform: perspective(400px);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}
		}

		@keyframes flip {
			0% {
				-webkit-transform: perspective(400px) rotateY(-1turn);
				transform: perspective(400px) rotateY(-1turn)
			}

			0%,
			40% {
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out
			}

			40% {
				-webkit-transform: perspective(400px) translateZ(150px) rotateY(-190deg);
				transform: perspective(400px) translateZ(150px) rotateY(-190deg)
			}

			50% {
				-webkit-transform: perspective(400px) translateZ(150px) rotateY(-170deg);
				transform: perspective(400px) translateZ(150px) rotateY(-170deg)
			}

			50%,
			80% {
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			80% {
				-webkit-transform: perspective(400px) scale3d(.95, .95, .95);
				transform: perspective(400px) scale3d(.95, .95, .95)
			}

			to {
				-webkit-transform: perspective(400px);
				transform: perspective(400px);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}
		}

		.animated.flip {
			-webkit-backface-visibility: visible;
			backface-visibility: visible;
			-webkit-animation-name: flip;
			animation-name: flip
		}

		@-webkit-keyframes flipInX {
			0% {
				-webkit-transform: perspective(400px) rotateX(90deg);
				transform: perspective(400px) rotateX(90deg);
				opacity: 0
			}

			0%,
			40% {
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			40% {
				-webkit-transform: perspective(400px) rotateX(-20deg);
				transform: perspective(400px) rotateX(-20deg)
			}

			60% {
				-webkit-transform: perspective(400px) rotateX(10deg);
				transform: perspective(400px) rotateX(10deg);
				opacity: 1
			}

			80% {
				-webkit-transform: perspective(400px) rotateX(-5deg);
				transform: perspective(400px) rotateX(-5deg)
			}

			to {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		@keyframes flipInX {
			0% {
				-webkit-transform: perspective(400px) rotateX(90deg);
				transform: perspective(400px) rotateX(90deg);
				opacity: 0
			}

			0%,
			40% {
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			40% {
				-webkit-transform: perspective(400px) rotateX(-20deg);
				transform: perspective(400px) rotateX(-20deg)
			}

			60% {
				-webkit-transform: perspective(400px) rotateX(10deg);
				transform: perspective(400px) rotateX(10deg);
				opacity: 1
			}

			80% {
				-webkit-transform: perspective(400px) rotateX(-5deg);
				transform: perspective(400px) rotateX(-5deg)
			}

			to {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		.flipInX {
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important;
			-webkit-animation-name: flipInX;
			animation-name: flipInX
		}

		@-webkit-keyframes flipInY {
			0% {
				-webkit-transform: perspective(400px) rotateY(90deg);
				transform: perspective(400px) rotateY(90deg);
				opacity: 0
			}

			0%,
			40% {
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			40% {
				-webkit-transform: perspective(400px) rotateY(-20deg);
				transform: perspective(400px) rotateY(-20deg)
			}

			60% {
				-webkit-transform: perspective(400px) rotateY(10deg);
				transform: perspective(400px) rotateY(10deg);
				opacity: 1
			}

			80% {
				-webkit-transform: perspective(400px) rotateY(-5deg);
				transform: perspective(400px) rotateY(-5deg)
			}

			to {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		@keyframes flipInY {
			0% {
				-webkit-transform: perspective(400px) rotateY(90deg);
				transform: perspective(400px) rotateY(90deg);
				opacity: 0
			}

			0%,
			40% {
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in
			}

			40% {
				-webkit-transform: perspective(400px) rotateY(-20deg);
				transform: perspective(400px) rotateY(-20deg)
			}

			60% {
				-webkit-transform: perspective(400px) rotateY(10deg);
				transform: perspective(400px) rotateY(10deg);
				opacity: 1
			}

			80% {
				-webkit-transform: perspective(400px) rotateY(-5deg);
				transform: perspective(400px) rotateY(-5deg)
			}

			to {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}
		}

		.flipInY {
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important;
			-webkit-animation-name: flipInY;
			animation-name: flipInY
		}

		@-webkit-keyframes flipOutX {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotateX(-20deg);
				transform: perspective(400px) rotateX(-20deg);
				opacity: 1
			}

			to {
				-webkit-transform: perspective(400px) rotateX(90deg);
				transform: perspective(400px) rotateX(90deg);
				opacity: 0
			}
		}

		@keyframes flipOutX {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotateX(-20deg);
				transform: perspective(400px) rotateX(-20deg);
				opacity: 1
			}

			to {
				-webkit-transform: perspective(400px) rotateX(90deg);
				transform: perspective(400px) rotateX(90deg);
				opacity: 0
			}
		}

		.flipOutX {
			-webkit-animation-name: flipOutX;
			animation-name: flipOutX;
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important
		}

		@-webkit-keyframes flipOutY {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotateY(-15deg);
				transform: perspective(400px) rotateY(-15deg);
				opacity: 1
			}

			to {
				-webkit-transform: perspective(400px) rotateY(90deg);
				transform: perspective(400px) rotateY(90deg);
				opacity: 0
			}
		}

		@keyframes flipOutY {
			0% {
				-webkit-transform: perspective(400px);
				transform: perspective(400px)
			}

			30% {
				-webkit-transform: perspective(400px) rotateY(-15deg);
				transform: perspective(400px) rotateY(-15deg);
				opacity: 1
			}

			to {
				-webkit-transform: perspective(400px) rotateY(90deg);
				transform: perspective(400px) rotateY(90deg);
				opacity: 0
			}
		}

		.flipOutY {
			-webkit-backface-visibility: visible !important;
			backface-visibility: visible !important;
			-webkit-animation-name: flipOutY;
			animation-name: flipOutY
		}

		@-webkit-keyframes lightSpeedIn {
			0% {
				-webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
				transform: translate3d(100%, 0, 0) skewX(-30deg);
				opacity: 0
			}

			60% {
				-webkit-transform: skewX(20deg);
				transform: skewX(20deg)
			}

			60%,
			80% {
				opacity: 1
			}

			80% {
				-webkit-transform: skewX(-5deg);
				transform: skewX(-5deg)
			}

			to {
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes lightSpeedIn {
			0% {
				-webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
				transform: translate3d(100%, 0, 0) skewX(-30deg);
				opacity: 0
			}

			60% {
				-webkit-transform: skewX(20deg);
				transform: skewX(20deg)
			}

			60%,
			80% {
				opacity: 1
			}

			80% {
				-webkit-transform: skewX(-5deg);
				transform: skewX(-5deg)
			}

			to {
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.lightSpeedIn {
			-webkit-animation-name: lightSpeedIn;
			animation-name: lightSpeedIn;
			-webkit-animation-timing-function: ease-out;
			animation-timing-function: ease-out
		}

		@-webkit-keyframes lightSpeedOut {
			0% {
				opacity: 1
			}

			to {
				-webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
				transform: translate3d(100%, 0, 0) skewX(30deg);
				opacity: 0
			}
		}

		@keyframes lightSpeedOut {
			0% {
				opacity: 1
			}

			to {
				-webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
				transform: translate3d(100%, 0, 0) skewX(30deg);
				opacity: 0
			}
		}

		.lightSpeedOut {
			-webkit-animation-name: lightSpeedOut;
			animation-name: lightSpeedOut;
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in
		}

		@-webkit-keyframes rotateIn {
			0% {
				transform-origin: center;
				-webkit-transform: rotate(-200deg);
				transform: rotate(-200deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: center
			}

			to {
				transform-origin: center;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateIn {
			0% {
				transform-origin: center;
				-webkit-transform: rotate(-200deg);
				transform: rotate(-200deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: center
			}

			to {
				transform-origin: center;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateIn {
			-webkit-animation-name: rotateIn;
			animation-name: rotateIn
		}

		@-webkit-keyframes rotateInDownLeft {
			0% {
				transform-origin: left bottom;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: left bottom
			}

			to {
				transform-origin: left bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateInDownLeft {
			0% {
				transform-origin: left bottom;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: left bottom
			}

			to {
				transform-origin: left bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateInDownLeft {
			-webkit-animation-name: rotateInDownLeft;
			animation-name: rotateInDownLeft
		}

		@-webkit-keyframes rotateInDownRight {
			0% {
				transform-origin: right bottom;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: right bottom
			}

			to {
				transform-origin: right bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateInDownRight {
			0% {
				transform-origin: right bottom;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: right bottom
			}

			to {
				transform-origin: right bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateInDownRight {
			-webkit-animation-name: rotateInDownRight;
			animation-name: rotateInDownRight
		}

		@-webkit-keyframes rotateInUpLeft {
			0% {
				transform-origin: left bottom;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: left bottom
			}

			to {
				transform-origin: left bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateInUpLeft {
			0% {
				transform-origin: left bottom;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: left bottom
			}

			to {
				transform-origin: left bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateInUpLeft {
			-webkit-animation-name: rotateInUpLeft;
			animation-name: rotateInUpLeft
		}

		@-webkit-keyframes rotateInUpRight {
			0% {
				transform-origin: right bottom;
				-webkit-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: right bottom
			}

			to {
				transform-origin: right bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		@keyframes rotateInUpRight {
			0% {
				transform-origin: right bottom;
				-webkit-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0
			}

			0%,
			to {
				-webkit-transform-origin: right bottom
			}

			to {
				transform-origin: right bottom;
				-webkit-transform: none;
				transform: none;
				opacity: 1
			}
		}

		.rotateInUpRight {
			-webkit-animation-name: rotateInUpRight;
			animation-name: rotateInUpRight
		}

		@-webkit-keyframes rotateOut {
			0% {
				transform-origin: center;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: center
			}

			to {
				transform-origin: center;
				-webkit-transform: rotate(200deg);
				transform: rotate(200deg);
				opacity: 0
			}
		}

		@keyframes rotateOut {
			0% {
				transform-origin: center;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: center
			}

			to {
				transform-origin: center;
				-webkit-transform: rotate(200deg);
				transform: rotate(200deg);
				opacity: 0
			}
		}

		.rotateOut {
			-webkit-animation-name: rotateOut;
			animation-name: rotateOut
		}

		@-webkit-keyframes rotateOutDownLeft {
			0% {
				transform-origin: left bottom;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: left bottom
			}

			to {
				transform-origin: left bottom;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				opacity: 0
			}
		}

		@keyframes rotateOutDownLeft {
			0% {
				transform-origin: left bottom;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: left bottom
			}

			to {
				transform-origin: left bottom;
				-webkit-transform: rotate(45deg);
				transform: rotate(45deg);
				opacity: 0
			}
		}

		.rotateOutDownLeft {
			-webkit-animation-name: rotateOutDownLeft;
			animation-name: rotateOutDownLeft
		}

		@-webkit-keyframes rotateOutDownRight {
			0% {
				transform-origin: right bottom;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: right bottom
			}

			to {
				transform-origin: right bottom;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				opacity: 0
			}
		}

		@keyframes rotateOutDownRight {
			0% {
				transform-origin: right bottom;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: right bottom
			}

			to {
				transform-origin: right bottom;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				opacity: 0
			}
		}

		.rotateOutDownRight {
			-webkit-animation-name: rotateOutDownRight;
			animation-name: rotateOutDownRight
		}

		@-webkit-keyframes rotateOutUpLeft {
			0% {
				transform-origin: left bottom;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: left bottom
			}

			to {
				transform-origin: left bottom;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				opacity: 0
			}
		}

		@keyframes rotateOutUpLeft {
			0% {
				transform-origin: left bottom;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: left bottom
			}

			to {
				transform-origin: left bottom;
				-webkit-transform: rotate(-45deg);
				transform: rotate(-45deg);
				opacity: 0
			}
		}

		.rotateOutUpLeft {
			-webkit-animation-name: rotateOutUpLeft;
			animation-name: rotateOutUpLeft
		}

		@-webkit-keyframes rotateOutUpRight {
			0% {
				transform-origin: right bottom;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: right bottom
			}

			to {
				transform-origin: right bottom;
				-webkit-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0
			}
		}

		@keyframes rotateOutUpRight {
			0% {
				transform-origin: right bottom;
				opacity: 1
			}

			0%,
			to {
				-webkit-transform-origin: right bottom
			}

			to {
				transform-origin: right bottom;
				-webkit-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0
			}
		}

		.rotateOutUpRight {
			-webkit-animation-name: rotateOutUpRight;
			animation-name: rotateOutUpRight
		}

		@-webkit-keyframes hinge {
			0% {
				transform-origin: top left
			}

			0%,
			20%,
			60% {
				-webkit-transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out
			}

			20%,
			60% {
				-webkit-transform: rotate(80deg);
				transform: rotate(80deg);
				transform-origin: top left
			}

			40%,
			80% {
				-webkit-transform: rotate(60deg);
				transform: rotate(60deg);
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
				opacity: 1
			}

			to {
				-webkit-transform: translate3d(0, 700px, 0);
				transform: translate3d(0, 700px, 0);
				opacity: 0
			}
		}

		@keyframes hinge {
			0% {
				transform-origin: top left
			}

			0%,
			20%,
			60% {
				-webkit-transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out
			}

			20%,
			60% {
				-webkit-transform: rotate(80deg);
				transform: rotate(80deg);
				transform-origin: top left
			}

			40%,
			80% {
				-webkit-transform: rotate(60deg);
				transform: rotate(60deg);
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
				opacity: 1
			}

			to {
				-webkit-transform: translate3d(0, 700px, 0);
				transform: translate3d(0, 700px, 0);
				opacity: 0
			}
		}

		.hinge {
			-webkit-animation-name: hinge;
			animation-name: hinge
		}

		@-webkit-keyframes rollIn {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
				transform: translate3d(-100%, 0, 0) rotate(-120deg)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		@keyframes rollIn {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
				transform: translate3d(-100%, 0, 0) rotate(-120deg)
			}

			to {
				opacity: 1;
				-webkit-transform: none;
				transform: none
			}
		}

		.rollIn {
			-webkit-animation-name: rollIn;
			animation-name: rollIn
		}

		@-webkit-keyframes rollOut {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
				transform: translate3d(100%, 0, 0) rotate(120deg)
			}
		}

		@keyframes rollOut {
			0% {
				opacity: 1
			}

			to {
				opacity: 0;
				-webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
				transform: translate3d(100%, 0, 0) rotate(120deg)
			}
		}

		.rollOut {
			-webkit-animation-name: rollOut;
			animation-name: rollOut
		}

		@-webkit-keyframes zoomIn {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			50% {
				opacity: 1
			}
		}

		@keyframes zoomIn {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			50% {
				opacity: 1
			}
		}

		.zoomIn {
			-webkit-animation-name: zoomIn;
			animation-name: zoomIn
		}

		@-webkit-keyframes zoomInDown {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomInDown {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomInDown {
			-webkit-animation-name: zoomInDown;
			animation-name: zoomInDown
		}

		@-webkit-keyframes zoomInLeft {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
				transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomInLeft {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
				transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomInLeft {
			-webkit-animation-name: zoomInLeft;
			animation-name: zoomInLeft
		}

		@-webkit-keyframes zoomInRight {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
				transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomInRight {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
				transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomInRight {
			-webkit-animation-name: zoomInRight;
			animation-name: zoomInRight
		}

		@-webkit-keyframes zoomInUp {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomInUp {
			0% {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			60% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomInUp {
			-webkit-animation-name: zoomInUp;
			animation-name: zoomInUp
		}

		@-webkit-keyframes zoomOut {
			0% {
				opacity: 1
			}

			50% {
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			50%,
			to {
				opacity: 0
			}
		}

		@keyframes zoomOut {
			0% {
				opacity: 1
			}

			50% {
				-webkit-transform: scale3d(.3, .3, .3);
				transform: scale3d(.3, .3, .3)
			}

			50%,
			to {
				opacity: 0
			}
		}

		.zoomOut {
			-webkit-animation-name: zoomOut;
			animation-name: zoomOut
		}

		@-webkit-keyframes zoomOutDown {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			to {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
				-webkit-transform-origin: center bottom;
				transform-origin: center bottom;
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomOutDown {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			to {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
				-webkit-transform-origin: center bottom;
				transform-origin: center bottom;
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomOutDown {
			-webkit-animation-name: zoomOutDown;
			animation-name: zoomOutDown
		}

		@-webkit-keyframes zoomOutLeft {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
				transform: scale(.1) translate3d(-2000px, 0, 0);
				-webkit-transform-origin: left center;
				transform-origin: left center
			}
		}

		@keyframes zoomOutLeft {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
				transform: scale(.1) translate3d(-2000px, 0, 0);
				-webkit-transform-origin: left center;
				transform-origin: left center
			}
		}

		.zoomOutLeft {
			-webkit-animation-name: zoomOutLeft;
			animation-name: zoomOutLeft
		}

		@-webkit-keyframes zoomOutRight {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: scale(.1) translate3d(2000px, 0, 0);
				transform: scale(.1) translate3d(2000px, 0, 0);
				-webkit-transform-origin: right center;
				transform-origin: right center
			}
		}

		@keyframes zoomOutRight {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
				transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
			}

			to {
				opacity: 0;
				-webkit-transform: scale(.1) translate3d(2000px, 0, 0);
				transform: scale(.1) translate3d(2000px, 0, 0);
				-webkit-transform-origin: right center;
				transform-origin: right center
			}
		}

		.zoomOutRight {
			-webkit-animation-name: zoomOutRight;
			animation-name: zoomOutRight
		}

		@-webkit-keyframes zoomOutUp {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			to {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
				-webkit-transform-origin: center bottom;
				transform-origin: center bottom;
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		@keyframes zoomOutUp {
			40% {
				opacity: 1;
				-webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
				-webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
				animation-timing-function: cubic-bezier(.55, .055, .675, .19)
			}

			to {
				opacity: 0;
				-webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
				transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
				-webkit-transform-origin: center bottom;
				transform-origin: center bottom;
				-webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
				animation-timing-function: cubic-bezier(.175, .885, .32, 1)
			}
		}

		.zoomOutUp {
			-webkit-animation-name: zoomOutUp;
			animation-name: zoomOutUp
		}

		@-webkit-keyframes slideInDown {
			0% {
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
				visibility: visible
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		@keyframes slideInDown {
			0% {
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
				visibility: visible
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		.slideInDown {
			-webkit-animation-name: slideInDown;
			animation-name: slideInDown
		}

		@-webkit-keyframes slideInLeft {
			0% {
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0);
				visibility: visible
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		@keyframes slideInLeft {
			0% {
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0);
				visibility: visible
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		.slideInLeft {
			-webkit-animation-name: slideInLeft;
			animation-name: slideInLeft
		}

		@-webkit-keyframes slideInRight {
			0% {
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0);
				visibility: visible
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		@keyframes slideInRight {
			0% {
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0);
				visibility: visible
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		.slideInRight {
			-webkit-animation-name: slideInRight;
			animation-name: slideInRight
		}

		@-webkit-keyframes slideInUp {
			0% {
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0);
				visibility: visible
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		@keyframes slideInUp {
			0% {
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0);
				visibility: visible
			}

			to {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}
		}

		.slideInUp {
			-webkit-animation-name: slideInUp;
			animation-name: slideInUp
		}

		@-webkit-keyframes slideOutDown {
			0% {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			to {
				visibility: hidden;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}
		}

		@keyframes slideOutDown {
			0% {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			to {
				visibility: hidden;
				-webkit-transform: translate3d(0, 100%, 0);
				transform: translate3d(0, 100%, 0)
			}
		}

		.slideOutDown {
			-webkit-animation-name: slideOutDown;
			animation-name: slideOutDown
		}

		@-webkit-keyframes slideOutLeft {
			0% {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			to {
				visibility: hidden;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}
		}

		@keyframes slideOutLeft {
			0% {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			to {
				visibility: hidden;
				-webkit-transform: translate3d(-100%, 0, 0);
				transform: translate3d(-100%, 0, 0)
			}
		}

		.slideOutLeft {
			-webkit-animation-name: slideOutLeft;
			animation-name: slideOutLeft
		}

		@-webkit-keyframes slideOutRight {
			0% {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			to {
				visibility: hidden;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}
		}

		@keyframes slideOutRight {
			0% {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			to {
				visibility: hidden;
				-webkit-transform: translate3d(100%, 0, 0);
				transform: translate3d(100%, 0, 0)
			}
		}

		.slideOutRight {
			-webkit-animation-name: slideOutRight;
			animation-name: slideOutRight
		}

		@-webkit-keyframes slideOutUp {
			0% {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			to {
				visibility: hidden;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}
		}

		@keyframes slideOutUp {
			0% {
				-webkit-transform: translateZ(0);
				transform: translateZ(0)
			}

			to {
				visibility: hidden;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0)
			}
		}

		.slideOutUp {
			-webkit-animation-name: slideOutUp;
			animation-name: slideOutUp
		}

		/* Owl Carousel v2.3.4 */
		.owl-carousel,
		.owl-carousel .owl-item {
			-webkit-tap-highlight-color: transparent;
			position: relative
		}

		.owl-carousel {
			display: none;
			width: 100%;
			z-index: 1
		}

		.owl-carousel .owl-stage {
			position: relative;
			-ms-touch-action: pan-Y;
			touch-action: manipulation;
			-moz-backface-visibility: hidden
		}

		.owl-carousel .owl-stage:after {
			content: ".";
			display: block;
			clear: both;
			visibility: hidden;
			line-height: 0;
			height: 0
		}

		.owl-carousel .owl-stage-outer {
			position: relative;
			overflow: hidden;
			-webkit-transform: translate3d(0, 0, 0)
		}

		.owl-carousel .owl-item,
		.owl-carousel .owl-wrapper {
			-webkit-backface-visibility: hidden;
			-moz-backface-visibility: hidden;
			-ms-backface-visibility: hidden;
			-webkit-transform: translate3d(0, 0, 0);
			-moz-transform: translate3d(0, 0, 0);
			-ms-transform: translate3d(0, 0, 0)
		}

		.owl-carousel .owl-item {
			min-height: 1px;
			float: left;
			-webkit-backface-visibility: hidden;
			-webkit-touch-callout: none
		}

		.owl-carousel .owl-item img {
			display: block;
			width: 100%
		}

		.owl-carousel .owl-dots.disabled,
		.owl-carousel .owl-nav.disabled {
			display: none
		}

		.no-js .owl-carousel,
		.owl-carousel.owl-loaded {
			display: block
		}

		.owl-carousel .owl-dot,
		.owl-carousel .owl-nav .owl-next,
		.owl-carousel .owl-nav .owl-prev {
			cursor: pointer;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none
		}

		.owl-carousel .owl-nav button.owl-next,
		.owl-carousel .owl-nav button.owl-prev,
		.owl-carousel button.owl-dot {
			background: 0 0;
			color: inherit;
			border: none;
			padding: 0 !important;
			font: inherit
		}

		.owl-carousel.owl-loading {
			opacity: 0;
			display: block
		}

		.owl-carousel.owl-hidden {
			opacity: 0
		}

		.owl-carousel.owl-refresh .owl-item {
			visibility: hidden
		}

		.owl-carousel.owl-drag .owl-item {
			-ms-touch-action: pan-y;
			touch-action: pan-y;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none
		}

		.owl-carousel.owl-grab {
			cursor: move;
			cursor: grab
		}

		.owl-carousel.owl-rtl {
			direction: rtl
		}

		.owl-carousel.owl-rtl .owl-item {
			float: right
		}

		.owl-carousel .animated {
			animation-duration: 1s;
			animation-fill-mode: both
		}

		.owl-carousel .owl-animated-in {
			z-index: 0
		}

		.owl-carousel .owl-animated-out {
			z-index: 1
		}

		.owl-carousel .fadeOut {
			animation-name: fadeOut
		}

		@keyframes fadeOut {
			0% {
				opacity: 1
			}

			100% {
				opacity: 0
			}
		}

		.owl-height {
			transition: height .5s ease-in-out
		}

		.owl-carousel .owl-item .owl-lazy {
			opacity: 0;
			transition: opacity .4s ease
		}

		.owl-carousel .owl-item .owl-lazy:not([src]),
		.owl-carousel .owl-item .owl-lazy[src^=""] {
			max-height: 0
		}

		.owl-carousel .owl-item img.owl-lazy {
			transform-style: preserve-3d
		}

		.owl-carousel .owl-video-wrapper {
			position: relative;
			height: 100%;
			background: #000
		}

		.owl-carousel .owl-video-play-icon {
			position: absolute;
			height: 80px;
			width: 80px;
			left: 50%;
			top: 50%;
			margin-left: -40px;
			margin-top: -40px;
			background: url(owl.video.play.png) no-repeat;
			cursor: pointer;
			z-index: 1;
			-webkit-backface-visibility: hidden;
			transition: transform .1s ease
		}

		.owl-carousel .owl-video-play-icon:hover {
			-ms-transform: scale(1.3, 1.3);
			transform: scale(1.3, 1.3)
		}

		.owl-carousel .owl-video-playing .owl-video-play-icon,
		.owl-carousel .owl-video-playing .owl-video-tn {
			display: none
		}

		.owl-carousel .owl-video-tn {
			opacity: 0;
			height: 100%;
			background-position: center center;
			background-repeat: no-repeat;
			background-size: contain;
			transition: opacity .4s ease
		}

		.owl-carousel .owl-video-frame {
			position: relative;
			z-index: 1;
			height: 100%;
			width: 100%
		}
	</style>

	<link href='/200000258383/1000664579/14/styles.css?v=728' rel='stylesheet' type='text/css' media='all' />
	<!--+++++++++++++++++++++++++  JS ++++++++++++++++++++++++-->
	<script src='/200000258383/1000664579/14/jquery.min.1.11.0.js?v=728' type='text/javascript'></script>
	<script>
		var template = 'index';
		var formatMoney = '{{amount}}₫';
		jQuery.themeAssets = {
			arrowDown: '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 12 8" style="enable-background:new 0 0 12 8; width: 12px; height: 8px;" xml:space="preserve"><polyline points="0,2 2,0 6,4 10,0 12,2 6,8 0,2 "/></svg>',
			arrowRight: '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31 10" style="enable-background:new 0 0 31 10; width: 31px; height: 10px;" xml:space="preserve"><polygon points="31,5 25,0 25,4 0,4 0,6 25,6 25,10 "/></svg>',
		};
		jQuery.themeCartSettings = 'overlay';
	</script>





	<style>
		.grecaptcha-badge {
			visibility: hidden;
		}
	</style>
	<?php
	wp_deregister_script('jquery');
	wp_head();
	 ?>
</head>

<body id="lama-theme" class="index">
	<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
		<symbol id="icon-add-cart">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512">
				<g>
					<g>
						<polygon points="447.992,336 181.555,336 69.539,80 0.008,80 0.008,48 90.477,48 202.492,304 447.992,304 		" />
					</g>
					<path d="M287.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S287.992,389.5,287.992,416z" />
					<path d="M447.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S447.992,389.5,447.992,416z" />
					<g>
						<polygon points="499.18,144 511.992,112 160.008,112 172.805,144 		" />
						<polygon points="211.195,240 223.992,272 447.992,272 460.805,240 		" />
						<polygon points="486.398,176 185.602,176 198.398,208 473.586,208 		" />
					</g>
				</g>
			</svg>
		</symbol>
		<symbol id="icon-list-switch">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 194.828 194.828" style="enable-background:new 0 0 194.828 194.828;" xml:space="preserve">
				<g>
					<g>
						<g>
							<path d="M190.931,17.534H3.897C1.745,17.534,0,19.279,0,21.431v19.483c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897V21.431C194.828,19.279,193.083,17.534,190.931,17.534z M187.034,37.017H7.793v-11.69h179.241
										 V37.017z" />
							<path d="M190.931,64.293H3.897C1.745,64.293,0,66.038,0,68.19v31.172c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897V68.19C194.828,66.038,193.083,64.293,190.931,64.293z M187.034,95.466H7.793v-23.38h179.241
										 V95.466z" />
							<path d="M190.931,122.741H3.897c-2.152,0-3.897,1.745-3.897,3.897v46.759c0,2.152,1.745,3.897,3.897,3.897h187.034
										 c2.152,0,3.897-1.745,3.897-3.897v-46.759C194.828,124.486,193.083,122.741,190.931,122.741z M187.034,169.5H7.793v-38.966
										 h179.241V169.5z" />
						</g>
					</g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
			</svg>

		</symbol>
		<symbol id="icon-sort-by">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
				<g>
					<polygon points="85.877,154.014 85.877,428.309 131.706,428.309 131.706,154.014 180.497,221.213 217.584,194.27 108.792,44.46
												 0,194.27 37.087,221.213 	" />
					<polygon points="404.13,335.988 404.13,61.691 358.301,61.691 358.301,335.99 309.503,268.787 272.416,295.73 381.216,445.54
												 490,295.715 452.913,268.802 	" />
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
			</svg>
		</symbol>
		<symbol id="icon-search_white" viewBox="0 0 1024 1024">
			<path class="path1"
				d="M1014.176 968.256l-264.32-260.128c69.184-75.264 111.68-174.688 111.68-284.128 0-234.080-192.8-423.872-430.688-423.872s-430.72 189.792-430.72 423.872c0 234.112 192.864 423.872 430.72 423.872 102.752 0 197.088-35.552 271.072-94.688l265.376 261.12c12.928 12.736 33.952 12.736 46.88 0 12.96-12.672 12.96-33.376 0-46.048zM430.848 782.688c-201.312 0-364.48-160.64-364.48-358.688 0-198.080 163.168-358.656 364.48-358.656 201.28 0 364.448 160.576 364.448 358.656 0.032 198.048-163.168 358.688-364.448 358.688z">
			</path>
		</symbol>
		<symbol id="icon-user" viewBox="0 0 1024 1024">
			<title>user</title>
			<path class="path1"
				d="M622.826 702.736c-22.11-3.518-22.614-64.314-22.614-64.314s64.968-64.316 79.128-150.802c38.090 0 61.618-91.946 23.522-124.296 1.59-34.054 48.96-267.324-190.862-267.324s-192.45 233.27-190.864 267.324c-38.094 32.35-14.57 124.296 23.522 124.296 14.158 86.486 79.128 150.802 79.128 150.802s-0.504 60.796-22.614 64.314c-71.22 11.332-337.172 128.634-337.172 257.264h896c0-128.63-265.952-245.932-337.174-257.264z">
			</path>
		</symbol>
	</svg>

	<div class="main-body   ">
		<div class="mainHeader--height">
			<header id="site-header" class="main-header mainHeader_temp02">

				<div class="header-upper-middle">
					<div class="container-fluid">
						<div class="flexContainer-header">
							<div class="header-upper-navbar visible-xs visible-sm">
								<div class="header-action header-action_menu">
									<div class="header-action_text">
										<a class="header-action__link header-action-toggle" href="javascript:void(0)" id="site-menu-handle" aria-label="Menu" title="Menu">
											<span class="hamburger-menu " aria-hidden="true">
												<span class="bar"></span>
											</span>
										</a>
									</div>
									<div class="header-action_dropdown">
										<span class="box-triangle">
											<svg viewBox="0 0 20 9" role="presentation">
												<path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
													fill="#ffffff"></path>
											</svg>
										</span>
										<div class="header-dropdown_content">
											<div class="site-menu menu-mobile" id="siteNav-menu">
												<div class="menu-mobile--wrap">
													<div class="menu-mobile--bottom">
														<nav id="mp-menu" class="mp-menu mp-cover">
															<div class="mp-level" data-level="1">
																<div class="mplus-menu">
																	<?php
																	wp_nav_menu(
																		array(
																			'theme_location' => 'menu-1',
																			'container' 		 => 'ul',
																			'menu_class' => 'mm-panel vertical-menu-list list-root'
																		)
																	);
																	?>
																</div>
															</div>
														</nav>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="header-upper-logo">
								<div class="header-logo wrap-logo" itemscope="" itemtype="http://schema.org/Organization">
									<?php echo the_custom_logo() ?>
								</div>
							</div>
							<div class="header-upper-menu hidden-sm hidden-xs">
								<div class="menu-desktop ">
									<div id="nav">
										<nav class="main-nav text-center">
											<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container' 		 => 'ul'
			)
		);
		?>

										</nav>
									</div>


								</div>
							</div>
							<div class="header-upper-icon">
								<div class="header-wrap-icon">
									<div class="header-action header-action_search">
										<div class="header-action_text">
											<a class="header-action__link header-action-toggle" href="javascript:void(0)" id="site-search-handle" aria-label="Tìm kiếm" title="Tìm kiếm">
												<span class="box-icon">
													<svg class="svg-ico-search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
														<path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z" />
														<rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8" />
													</svg>
													<span class="box-icon--close">
														<svg viewBox="0 0 19 19" role="presentation">
															<path
																d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
																fill="currentColor" fill-rule="evenodd"></path>
														</svg>
													</span>
												</span>
											</a>
										</div>
										<div class="header-action_dropdown">
											<span class="box-triangle">
												<svg viewBox="0 0 20 9" role="presentation">
													<path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
														fill="#ffffff"></path>
												</svg>
											</span>
											<div class="header-dropdown_content">
												<p class="ttbold">Tìm kiếm</p>
												<div class="site_search">

													<div class="search-box wpo-wrapper-search">
														<form action="/" class="searchform searchform-categoris ultimate-search">
															<div class="wpo-search-inner">
																<input type="hidden" name="post_type" value="product" />
																<input required id="inputSearchAuto" name="s" maxlength="40" autocomplete="off" class="searchinput input-search search-input" type="text" size="20" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
															</div>
															<button type="submit" class="btn-search btn" id="search-header-btn" aria-label="Tìm kiếm">
																<svg version="1.1" class="svg search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
																	<path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
																	<rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
																</svg>
															</button>
														</form>

													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="header-action header-action_cart">
										<div class="header-action_text">
											<a class="header-action__link " href="/cart" id="site-cart-handle" aria-label="Giỏ hàng" title="Giỏ hàng">
												<span class="box-icon">
													<svg version="1.1" class="svg-ico-cart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
														<g>
															<path d="M0,6v21h24V6H0z M22,25H2V8h20V25z" />
														</g>
														<g>
															<path d="M12,2c3,0,3,2.3,3,4h2c0-2.8-1-6-5-6S7,3.2,7,6h2C9,4.3,9,2,12,2z" />
														</g>
													</svg>
													<span class="box-icon--close">
														<svg viewBox="0 0 19 19" role="presentation">
															<path
																d="M9.1923882 8.39339828l7.7781745-7.7781746 1.4142136 1.41421357-7.7781746 7.77817459 7.7781746 7.77817456L16.9705627 19l-7.7781745-7.7781746L1.41421356 19 0 17.5857864l7.7781746-7.77817456L0 2.02943725 1.41421356.61522369 9.1923882 8.39339828z"
																fill="currentColor" fill-rule="evenodd"></path>
														</svg>
													</span>

												</span>
											</a>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-search-mobile search-bar-mobile">
					<div class="search-box wpo-wrapper-search">
						<form action="/" class="searchform searchform-categoris ultimate-search">
							<div class="wpo-search-inner">
								<input type="hidden" name="post_type" value="product" />
								<input required id="inputSearchAuto-mb" name="s" maxlength="40" autocomplete="off" class="searchinput input-search search-input" type="text" size="20" placeholder="Tìm kiếm sản phẩm..." aria-label="Search">
								<span class="close-search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
										<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
									</svg></span>
							</div>
							<button type="submit" class="btn-search btn" id="search-header-btn-mb" aria-label="Tìm kiếm">
								<svg version="1.1" class="svg search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
									<path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
									<rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
								</svg>
							</button>
						</form>

					</div>
				</div>
			</header>
		</div>
