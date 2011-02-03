<?php
$sPage = "home";
$this->loadView("inc_header.php");
?>
	
	<section id="columns">
		<section class="mockup columns">
			<h2>Mockup</h2>
			<ul style="color: #ffa549;">
				<li>Lorem Ipsum Website</li>
				<li>Lorem Ipsum Mobile Site</li>
			</ul>
		</section>
		
		<section class="coding columns">
			<h2>Coding</h2>
			<ul style="color: #1fbdf8;">
				<li>Lorem Ipsum Project</li>
				<li>Lorem Ipsum Mobile Project</li>
			</ul>
		</section>
		
		<section class="content columns">
			<h2>Content</h2>
			<ul style="color: #e74af5;">
				<li>Lorem Ipsum App</li>
				<li>Lorem Ipsum Mobile App</li>
			</ul>
		</section>
		
		<section class="launch columns">
			<h2>Launch</h2>
			<ul style="color: #00d54f;">
				<li>Lorem Ipsum Web App</li>
				<li>Lorem Ipsum Mobile Web App</li>
			</ul>
		</section>
		
		<div class="clear">&nbsp;</div>
	</section>

<?php $this->loadView("inc_footer.php"); ?>