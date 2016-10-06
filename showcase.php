<?php require "setts.php"; ?>
<script type="text/javascript">
$(document).ready(function(){
    $(this).attr("title", "<?php echo $data["%TITLE%"];?>");
    $("meta[name='description']").attr("content", "<?php echo $data["%DESCRIPTION%"];?>");
});  
</script>
	<link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />	        
        <!--[if lt IE 9]>
        	<link href="jackbox/css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
        	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!--[if gt IE 8]><link href="jackbox/css/jackbox-ie9.css" rel="stylesheet" type="text/css" /><![endif]-->
	<script type="text/javascript" src="jackbox/js/jackbox-packed.min.js"></script>
	<script>
		$("a.jackbox[data-group]").jackBox("init", {
				
					deepLinking: true,              // choose to use the deep-linking feature ("true" will enhance social sharing!) true/false
					showInfoByDefault: true,        // show item info automatically when content loads, true/false
					preloadGraphics: true,          // preload the jackbox graphics for a faster jackbox
					fullscreenScalesContent: true,  // Choose to always scale content up in fullscreen, true/false
					defaultShareImage: "images/logo.png",     // the default image to share for non-image items, only relevent to Pinterest
					
					autoPlayVideo: false,           // video autoplay default, this can also be set per video in the data-attributes, true/false
					flashVideoFirst: false,         // choose which technology has first priority for video, HTML5 or Flash, true/false
					defaultVideoWidth: 960,         // the default video width, can also be set per video in the data-attributes
					defaultVideoHeight: 540,        // the default video width, can also be set per video in the data-attributes
					
					useThumbs: true,                // choose to use thumbnails, true/false
					useThumbTooltips: false,        // choose to use thumbnail tooltips, true/false
					thumbsStartHidden: false,       // choose to initially hide the thumbnail strip, true/false
					thumbnailWidth: 75,             // the default video width, can also be set per video in the data-attributes
					thumbnailHeight: 50             // the default video height, can also be set per video in the data-attributes
		
		});
	</script>
<div class="row pageContentInner">
		<section class="twelve columns">
			<h1 class="mainHeader">OUR SHOWCASE</h1>
		</section>
		<section class="twelve columns">
			<div class="row">
				<?php
					$columns = 3;
					$allFolders = glob("images/showcase/*");
					$allImageTitles = array();
					natsort($allFolders);
					foreach($allFolders as $folder){
					$tempCurrentFolder = explode("/", $folder);
					$tempCurrentFolder = explode("_", $tempCurrentFolder[count($tempCurrentFolder)-1]);
					$tempCurrentFolder = ucwords($tempCurrentFolder[count($tempCurrentFolder)-1]);
					
						if($columns == 3){ echo "
						
						<div class=\"four columns\">
						";}
						else if($columns == 4){ echo "
						
						<div class=\"three columns\">
						";}	
							$allImages = glob("$folder/thumb/*");
							natsort($allImages);
								for($i = 0; $i < count($allImages); $i++){
								
										$title = explode("/", $allImages[$i]);
										$folder = explode("_", $title[count($title)-3]);
										$folder = $folder[count($folder)-1];
										$title = explode("_", $title[count($title)-1]);
										$title = $title[count($title)-1];
										
										$replacement = array(".png", ".gif", ".jpg", ".svg");
										$title = str_replace($replacement, "", $title);
										
										echo "<a class=\"jackbox\" 
												 data-group=\"".str_replace(" ", "", $folder)."-gallery\" 
												 data-thumbnail=\"".$allImages[$i]."\" 
												 data-title=\"".$title."\" ";
											if($i !== 0){
										echo "style=\"display: none\" ";
											}
										echo "href=\"".str_replace(" ", "%20", str_replace("thumb", "fullsize", $allImages[$i]))."\">";
											if($i == 0){ echo "<img src=\"".str_replace(" ", "%20", $allImages[$i])."\" alt=\"".clean("%WORKCITY%", 0)." ".$tempCurrentFolder.", ".clean("%WORKCITY%", 0)." ".$title."\">";}
											if($i == 0){
												echo "<p>".$tempCurrentFolder."</p>";
											}
											echo "</a>";
								}
					echo "</div>";
					}
				?>
			</div>
		</section>
</div>
