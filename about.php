<?php


include('./include/auth.php');

top_header();

html_start_box(__('About Canims'), '100%', '', '3', 'center', '');

?>

<tr class='tableHeader'>
	<td class='tableSubHeaderColumn' colspan='2'>
		<font class='textSubHeaderDark'><?php print get_cacti_version_text(); ?></font>
	</td>
</tr>
<tr>
	<td valign='top' class='odd' class='textArea'>
		<!-- <div style='float:right;'><a href='http://www.canaris.in/'><img class='right' src='images/cacti_about_logo.gif' alt='raXnet'></a></div> -->
		<p><?php print __('Canims is designed to be a complete graphing solution based on the RRDtool Time Series Database (TSDB) and Graphing solution. Its goal is to make the Network Administrator\'s job easier by taking care of all the important details necessary to create meaningful Graphs.'); ?></p>

		

		

		

		<strong><?php print __('License'); ?></strong><br>

		<p><?php print __('Canims is licensed application and should not be distributed without license purchase from Canaris:'); ?></p>

	</td>
</tr>

<?php
html_end_box();

bottom_footer();


