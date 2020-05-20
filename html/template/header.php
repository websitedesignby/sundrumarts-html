<header role="banner">
<div class="wrapper">
<div class="row txt-center middle-xl start-md">
<div class="col-xl pad-0">
<div class="box-row">
<h1><a class="nav-logo" href="index.php">Sundrum Arts</a></h1>
</div>
</div>
<?php
// get the current page
$page_pathinfo = pathinfo( $_SERVER['PHP_SELF'] ); 
$filename = $page_pathinfo['filename'];
$design_class = $art_class = "";
if( $filename == "design" ){
    $design_class = "nav-link-active ";
}elseif( $filename == "arts" ){
    $art_class = "nav-link-active ";
}
?>
<div class="col-xl pad-0 md-dn">
<div class="box-row"><a class="nav-link <?php echo $design_class; ?>nav-design" href="design.php">Design</a></div>
</div>

<div class="col-xl pad-0 md-dn">
<div class="box-row"><a class="nav-link <?php echo $art_class; ?>nav-art" href="arts.php">Art</a></div>
</div>

<div class="col-xl pad-0 md-dn">
<div class="box-row"><a class="nav-link nav-blog" href="https://sundrumarts.com/private/sites/DavidBlog/">Blog</a></div>
</div>

<div class="col-xl pad-0 dn md-db">
<div class="box-row">
<div class="row end-md">
<div class="mobile-trigger bg-white" href="#"><img src="img/mobile-menu.svg" />
<ul class="mobile-nav">
	<li><a class="nav-link-mobile <?php echo $design_class; ?>nav-design" href="design.php">Design</a></li>
	<li><a class="nav-link-mobile <?php echo $art_class; ?>nav-art" href="arts.php">Art</a></li>
	<li><a class="nav-link-mobile nav-blog" href="https://sundrumarts.com/private/sites/DavidBlog/">Blog</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</header>