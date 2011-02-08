<?php
$sPage = "home";
$this->loadView("inc_header.php");
?>
	
	<section id="columns">
		<div id="delete" class="topRight">
			<img src="/images/delete.png"> Delete
		</div>
		<section class="mockup columns">
			<h2>Mockup</h2>
			<ul style="color: #ffa549;">
				<li data-id="1"><img src="/images/pan.png" class="move"> <span>Lorem Ipsum Website</span></li>
				<li data-id="2"><img src="/images/pan.png" class="move"> <span>Lorem Ipsum Mobile Site</span></li>
			</ul>
		</section>
		
		<section class="coding columns">
			<h2>Coding</h2>
			<ul style="color: #1fbdf8;">
				<li data-id="3"><img src="/images/pan.png" class="move"> <span>Lorem Ipsum Project</span></li>
				<li data-id="4"><img src="/images/pan.png" class="move"> <span>Lorem Ipsum Mobile Project</span></li>
			</ul>
		</section>
		
		<section class="content columns">
			<h2>Content</h2>
			<ul style="color: #e74af5;">
				<li data-id="5"><img src="/images/pan.png" class="move"> <span>Lorem Ipsum App</span></li>
				<li data-id="6"><img src="/images/pan.png" class="move"> <span>Lorem Ipsum Mobile App</span></li>
			</ul>
		</section>
		
		<section class="launch columns">
			<h2>Launch</h2>
			<ul style="color: #00d54f;">
				<li data-id="7"><img src="/images/pan.png" class="move"> <span>Lorem Ipsum Web App</span></li>
				<li data-id="8"><img src="/images/pan.png" class="move"> <span>Lorem Ipsum Mobile Web App</span></li>
			</ul>
		</section>
		
		<div class="clear">&nbsp;</div>
	</section>

<?php $this->loadView("inc_footer.php"); ?>