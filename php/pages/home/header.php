<?php 
// -- Code Presenter - http://www.codepresenter.net --
// A simple, educational tool to engage student participation through real-time code sharing and presentation in the classroom
// An open source project coded by Charles McCrary https://github.com/McCraryCharles/ 

?>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed visible-xs-sm mobile-nav" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand hidden-xs" href="."><span class="logo"><b>Code</b>Presenter</span></a>
			<a class="navbar-brand visible-xs" href="."><span class="smallLogo"><b>Code</b>Presenter</span></a>
		</div>
		<div class="pull-right">
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li <?php if ($page == 'about') {echo 'class="active"';} ?>><a href=".?page=about">About</a></li>
					<li><a type="button" id="roomButton" class="btn btn-default btn-invert nav-button" onclick="createRoom()">Create Room</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>