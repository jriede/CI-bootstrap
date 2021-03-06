
	<div class="container">
		<h1>Welcome to CodeIgniter!</h1>

		<div id="body">
			<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
				<p>You're logged in.</p>
			<?php endif; ?>
			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/views/welcome_message.php</code>

			<p>The corresponding controller for this page is found at:</p>
			<code>application/controllers/Welcome.php</code>

			<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
		</div>


	</div>
