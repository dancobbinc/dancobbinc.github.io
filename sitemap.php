<?php header( 'Content-type: text/xml; charset=utf-8' ); ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
	$exclude = array(
		"index.php",
		"header.php",
		"footer.php",
		"setts.php",
		"sitemap.php",
		"insert.php", 
		"process.php", 
		"savedTestimonials.php", 
		"validateTestimonial.php",
	);
	$directory = glob("*.php");
	$sitemap = array_diff($directory, $exclude);

	foreach($sitemap as $page) : ?>
		<url>
			<loc>http://<?php echo str_replace("www.", "", $_SERVER['HTTP_HOST'])."/".$page; ?></loc>
			<lastmod><?php echo date( 'Y-m-d\TH:i:s', filemtime($page) ).date("P") ;?></lastmod>
			<priority>1.0</priority>
		</url>
	<?php endforeach; ?>
</urlset>