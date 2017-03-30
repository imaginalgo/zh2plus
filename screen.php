<?php
header("Content-Type: text/css; charset=utf-8");

$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];
require_once( $path_to_wp.'/wp-load.php' );

$templateurl = get_template_directory_uri();

	/* COLORS */
	$bkgcolor = get_option( 'zh2plus_color_bkg' );
    $fontscolor = get_option( 'zh2plus_color_fonts' );
	$headerfontcolor = get_option( 'zh2plus_color_headerfonts' );
	$linkcolor = get_option('zh2plus_color_links');
    $linkhovercolor = get_option( 'zh2plus_color_linkshover' );

?>

/*
Theme Name: zh2+
Theme URI: http://imaginalgo.com/temas/zh2plus/
Original Author: Leo Babauta
Author: Imaginalgo (Mike Walsh)
Original Author URI: http://zenhabits.net
Author URI: http://imaginalgo.com
*/

body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/* end css reset */

@media all { 

/* NEW CSS CODE ADDED TO ORIGINAL -- START */
.footer li, .social li {
    color: #333333;
    font-family: Open Sans,Helvetica,sans-serif;
    font-size: 0.8em;
    letter-spacing: 0.2em;
    text-transform: lowercase;
	display:inline-block;
}
.social {margin-bottom: 2em;line-height: 2em;}
.social li {
    color: #666666;
    font-family: Open Sans,Helvetica,sans-serif;
    font-size: 1em;
    font-weight: bold;
    letter-spacing: 0.2em;
    text-transform: uppercase;
	display:inline-block;	
}
.social-title {
    text-transform: uppercase;
    color: #666;
    font-size: 1em;
    letter-spacing: .2em;
    font-family: Open Sans,Helvetica,sans-serif;
    font-weight: bold;
    float: left;
	line-height: 2em;
	}
.menu-divider {margin:0;padding:0 3px 0 0;color: #333333;}
li.menu-divider:last-child {display:none;}

/* NEW CSS CODE ADDED TO ORIGINAL -- END */

	#wp-admin-bar-updates { display: none }
	body {
	    font: normal 100% Open Sans,Helvetica,sans-serif;
	    background-color: #fff;
	    color: #000;
	    padding: .6em;
	    -webkit-font-smoothing: antialiased;
	}
	/* fades out blog title */
	.top {
	    -webkit-opacity: 0.30;
	    -moz-opacity: 0.30;
	    opacity: 0.30;
	    -webkit-transition: opacity 3s linear;
	    -moz-transition: opacity 3s linear;
	    -ms-transition: opacity 3s linear;
	    -o-transition: opacity 3s linear;
	    transition: opacity 3s linear;
	}
	/* fades blog title back in on hover */
	.top:hover {
	    -webkit-opacity: 1;
	    -moz-opacity: 1;
	    opacity: 1;
	    -webkit-transition: all 2s ease;
	    -moz-transition: all 2s ease;
	    -ms-transition: all 2s ease;
	    -o-transition: all 2s ease;
	    transition: all 2s ease;
	}
	.container {
	    overflow: hidden;
	    padding: 0 1em;
	    max-width: 45em;
	    margin: auto;
	}
	/* blog title */
	h1 {
	    font-size: 150%;
	    font-weight: normal;
	    color: #d3d3d3;
	    letter-spacing: .01em;
	    margin: 0 .05em 0 0;
	    text-align: center;
	}
	h1 a:link {
	    color: #d3d3d3;
	    text-decoration: none;
	    border-width: 0 0 1px 0;
	    border-style: none none solid none;
	    border-color: #c0c0c0;
	}
	h1 a:visited {
	    color: #d3d3d3;
	    text-decoration: none;
	    border-width: 0 0 1px 0;
	    border-style: none none solid none;
	    border-color: #c0c0c0;
	}
	h1 a#tagline { color: #<?php echo $linkcolor; ?> !important; }
	/* post title */
	h2 {
	    font-family: acta-display, Georgia, Times, serif;
	    font-size: 3em;
	    color: #333;
	    font-weight: normal;
	    margin-top: 1em;
	    text-align: center;
	}
	/* subtitles */
	h3 {
	    font-family: acta-display, Georgia, Times, serif;
	    font-size: 1.8em;
	    color: #666;
	    font-weight: normal;
	    line-height: 1em;
	    margin-top: 1.5em;
	    text-align: center;
	}
	h4 {
	    font-family: Georgia,"Times New Roman",Times,serif;
	    font-size: 1em;
	    color: #000;
	}
	/* used for "edit" link only visible to site owner/writers */
	h5 {
	    text-transform: uppercase;
	    color: #666;
	    font-size: .8em;
	    letter-spacing: .2em;
	    font-family: Open Sans,Helvetica,sans-serif;
	    font-weight: bold;
	    line-height: 2em;
	}
	/* author credits */
	h6 {
	    font-size: 1.2em;
	    font-weight: normal;
	    line-height: 1.3em;
	    color: #666;
	    font-family: acta-display, Georgia, Times, serif;
	    margin: 1em 0 .5em 0;
	    letter-spacing: .1em;
	    margin-bottom: 1em;
	    text-align: center;
	    -webkit-opacity: 0.30;
	    -moz-opacity: 0.30;
	    opacity: 0.30;
	    -webkit-transition: opacity 3s linear;
	    -moz-transition: opacity 3s linear;
	    -ms-transition: opacity 3s linear;
	    -o-transition: opacity 3s linear;
	    transition: opacity 3s linear;
	}
	/* fades author credit back in on hover */
	h6:hover {
	    -webkit-opacity: 1;
	    -moz-opacity: 1;
	    opacity: 1;
	    -webkit-transition: all 2s ease;
	    -moz-transition: all 2s ease;
	    -ms-transition: all 2s ease;
	    -o-transition: all 2s ease;
	    transition: all 2s ease;
	}
	h6 strong {
	    color: <?php echo $linkcolor ?>;
	    font-weight: bold;
	}
	img {
	    border: 0;
	    padding: 3px;
	}
	img a { border: 0 }
	p {
	    line-height: 1.45em;
	    margin: .7em 0 0 0;
	    font-family: ff-meta-serif-web-pro, Georgia, Cambria, 'Times New Roman', Times, serif;
	    font-size: 1.3em;
	    color: #333;
	    -webkit-font-smoothing: antialiased;
	}
	a:link {
	    color: #333;
	    text-decoration: none;
	    border-width: 0;
	    border-style: none;
	}
	a:visited {
	    color: #333;
	    text-decoration: none;
	    border: 0;
	    border-width: 0;
	    border-style: none;
	}
	a:hover {
	    color: #999;
	    text-decoration: none;
	    border: 0;
	    border-width: 0;
	    border-style: none;
	}
	/* post styles */
	.post strong { font-weight: bold }
	.post a:link {
	    color: #303030;
	    text-decoration: none;
	    border-width: 0 0 1px 0;
	    border-style: none none solid none;
	    border-color: #c0c0c0;
	}
	.post a:visited {
	    color: #303030;
	    text-decoration: none;
	    border-width: 0 0 1px 0;
	    border-style: none none solid none;
	    border-color: #c0c0c0;
	}
	.post a:hover {
	    color: #999;
	    border-width: 0 0 1px 0;
	    border-style: none none solid none;
	    border-color: #c0c0c0;
	    text-decoration: none;
	}
	.post ul {
	    list-style-type: disc;
	    padding: .1em .0 0 1.1em;
	    margin-top: .5em;
	    font-family: ff-meta-serif-web-pro, Georgia, Cambria, 'Times New Roman', Times, serif;
	    font-size: 1.3em;
	    -webkit-font-smoothing: antialiased;
	}
	.post ol {
	    list-style-type: decimal;
	    padding: .1em 0 0 1.2em;
	    margin-top: .5em;
	    font-family: ff-meta-serif-web-pro, Georgia, Cambria, 'Times New Roman', Times, serif;
	    font-size: 1.3em;
	    -webkit-font-smoothing: antialiased;
	}
	.post li {
	    line-height: 1.5em;
	    padding: .2em 0 0 0;
	    color: #333;
	}
	.post li strong { font-weight: bold }
	.post blockquote {
	    border-left: 2px solid #a5abab;
	    margin: 1.8em .8em;
	    padding: 0 1em 0 1em;
	    color: #666;
	    font-family: Open Sans,Helvetica,sans-serif;
	}
	/* line at bottom of post */
	.home_bottom {
	    border-bottom: 1px solid #efefef;
	    font-family: Open Sans,Helvetica,sans-serif;
	    font-size: 2em;
	    line-height: 2.5em;
	    color: #dedede;
	}
	/* previous & next posts at bottom */
	.navigation { margin-bottom: 3em }
	.navigation p {
	    text-transform: uppercase;
	    color: #666;
	    font-size: .7em;
	    letter-spacing: .2em;
	    font-family: Open Sans,Helvetica,sans-serif;
	    font-weight: bold;
	    margin-top: 0;
	    margin-bottom: 1em;
	}
	/* subscription */
	.subscribe p {
	    text-transform: uppercase;
	    color: #666;
	    font-size: 1em;
	    letter-spacing: .2em;
	    font-family: Open Sans,Helvetica,sans-serif;
	    font-weight: bold;
	    line-height: 2em;
	    margin-top: 2em;
	    margin-bottom: 2em;
	}
	/* "see all posts" at bottom of home page */
	.all_posts {
	    font-size: 2.4em;
	    font-weight: bold;
	    height: 1.25em;
	    line-height: 1.25em;
	    margin-bottom: 1em;
	}
	.all_posts a { color: #d3d3d3 }
	.all_posts a:visited { color: #d3d3d3 }
	.all_posts a:hover { color: #666 }
	/* footer text */
	.footer p {
	    font-size: .8em;
	    letter-spacing: .2em;
	    text-transform: lowercase;
	    color: #333;
	    padding: 0;
	    margin: 0;
	    margin-left: 0;
	    padding-left: 0;
	    font-family: Open Sans,Helvetica,sans-serif;
	}
	.footer a { color: #666 }
	/* for archives page */
	#arc {
	    overflow: hidden;
	    margin: 0 1em 2em .4em;
	}

ol.commentlist{
	margin: 10px 5px;
	padding: 10px;
}
.commentlist .comment-body{
	padding: 10px;
	background: #EFEFEF;
	border: solid thin #DEDEDE;
	margin: 10px 0;
	position: relative;
}
.comment-body a.comment-reply-link{
	position: absolute;
	top: 10px;
	right: 10px;
	color: #AEAEAE;
}
ol.commentlist li{
	list-style: none;
}
ol.commentlist img.avatar{
	padding: 5px;
	background: #DEDEDE;
	border: solid thin #CECECE;
	float: left;
	display: block;
	margin: 15px;
	width: 32px;
	height: 32px;
}
ol.commentlist .comment-author{
	line-height: 25px;
}
.comment-body cite.fn{
	font-size: 14px;
	font-style: normal;
}
.commentmetadata a{
	margin: 0;
	font-size: 11px;
	color: #999;
}
.comment-body p{
	margin: 5px;
}
 
.comment-body .comment-author.vcard{
	margin: 0;
}
}

/* for iPad-sized devices */
@media only screen and (max-device-width: 800px) { 
	/* makes blog title not fade on touch screen */
	.top {
	    margin: auto;
	    -webkit-opacity: 1;
	    -moz-opacity: 1;
	    opacity: 1;
	}
	h6 {
	    -webkit-opacity: 1;
	    -moz-opacity: 1;
	    opacity: 1;
	}
	.navigation p { font-size: 1em }
	.subscribe ul {
	    margin-top: 4em;
	    font-size: 1.8em;
	}
	.footer p { font-size: 1.2em }
	h2 { font-size: 2.5em }
	h3 { font-size: 2em }
	h6 { font-size: 1.5em }
	p {
	    font-size: 1.5em;
	    line-height: 1.5em;
	}
	.post ul {
	    font-size: 1.5em;
	    line-height: 1em;
	    padding: .1;
	}
	.post ol {
	    font-size: 1.5em;
	    line-height: 1em;
	    padding: .1;
	}
	#arc {
	    font-size: 1.2em;
	}
}

/* for narrower browsers */
@media screen and (max-width: 800px) { 
	/* makes blog title not fade on touch screen */
	.top {
	    margin: auto;
	    -webkit-opacity: 1;
	    -moz-opacity: 1;
	    opacity: 1;
	}
	h6 {
	    -webkit-opacity: 1;
	    -moz-opacity: 1;
	    opacity: 1;
	}
	.navigation p { font-size: 1em }
	subscribe ul {
	    margin-top: 4em;
	    font-size: 1.8em;
	}
	.footer p { font-size: 1.2em }
	h2 { font-size: 2.5em }
	h3 { font-size: 2em }
	h6 { font-size: 1.5em }
	p {
	    font-size: 1.5em;
	    line-height: 1.5em;
	}
	.post ul {
	    font-size: 1.5em;
	    line-height: 1em;
	    padding: .1;
	}
	.post ol {
	    font-size: 1.5em;
	    line-height: 1em;
	    padding: .1;
	}
}

/* for iPhone-sized devices */
@media only screen and (max-device-width: 480px) { 
	.container { width: 100% }
	h1 { font-size: 2em }
	h2 { font-size: 2.5em }
	h3 { font-size: 1.8em }
	h6 { font-size: 1.3em }
	p {
	    font-size: 1.2em;
	    line-height: 1.4em;
	}
	.post ul {
	    list-style-type: disc;
	    list-style-position: inside;
	    font-size: 1.2em;
	    line-height: 1em;
	    padding: .5em;
	    margin: 0;
	}
	.post ol {
	    list-style-position: inside;
	    font-size: 1.2em;
	    line-height: 1em;
	    padding: .5em;
	    margin: 0;
	}
	.post li {
	    margin: 0;
	}
	/* makes blog title not fade on touch screen */
	.top {
	    -webkit-opacity: 1;
	    -moz-opacity: 1;
	    opacity: 1;
	}
	.navigation p { font-size: 1.5em }
	h6 {
	    -webkit-opacity: 1;
	    -moz-opacity: 1;
	    opacity: 1;
	}
	.subscribe p {
	    font-size: 1em;
	    margin-top: 1em;
	}
	.footer p { font-size: 1em }
}


@media print { 
	body {
	    font-family: Helvetica,sans-serif;
	    font-size: 14px;
	    background: white;
	    color: black;
	    margin: 10;
	    width: auto;
	}
	.container { display: block }
	.navigation { display: none }
	.subscribe { display: none }
	.footer { display: none }
}