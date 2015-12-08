<?php
/*
Plugin Name: IRC-Source Graphs Embed
Plugin URI: https://IRC-Source.com/irc-source-graphs-wordpress
Description: Allows you to embed your networks statistics, from IRC-Source.com, with a simple shortcode.
Version: 1.0
Author: Robert Whitney &lt;<a href="mailto:xnite@xnite.me">xnite@xnite.me</a>&gt;
Author URI: https://xnite.me
License: GNU General Public License
*/

function ircsource_embed_graph($atts)
{
	extract(shortcode_atts(array(
		"width"		=> "100%",
		"height"	=> "300px",
		"network"	=> "AltSociety",
		"period"	=> "this_month" // today, yesterday, this_month, last_month, this_year, last_year
	), $atts));
	return "<script type=\"text/javascript\" src=\"https://irc-source.com/wp-content/plugins/IRCSource-Networks/graphs.php?net=".$network."&dataset=history_".$period."\"></script>
<script type=\"text/javascript\" src=\"https://irc-source.com/wp-content/plugins/IRCSource-Networks/graphs.js\"></script>
<div id=\"chartContainer\" style=\"height:".$height."; width:".$width.";\"></div>";
}

add_shortcode("ircsource-graph", "ircsource_embed_graph");
?>
