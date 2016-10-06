<?php require "header.php";?>
	<div class="pageContent">
	<?php if(isset($_GET["_escaped_fragment_"])){ 
		require ($_GET["_escaped_fragment_"].'.php');
	} ?>
	</div>
	<link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css" />
        
        <!--[if lt IE 9]>
        	<link href="jackbox/css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
        	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!--[if gt IE 8]><link href="jackbox/css/jackbox-ie9.css" rel="stylesheet" type="text/css" /><![endif]-->	
		
</body>	
</html>