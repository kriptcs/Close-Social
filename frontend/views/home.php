<?php
require_once __DIR__ . "/../Template.php";

Template::header("Home");
?>

<h1>Welcome home!</h1>

<p>
    Welcome to Close Social. This is a very bare-bones social media app where you can post and see other user's posts. Keep in mind though that there is a moderator who can take down posts if they are deemed inappropriate for the platform. 
</p>

<p>
Go to POSTS to see everyone's posts.
</p>

<p>
    Go to MEMES to generate a new meme.
</p>

<p>
    Go to LOG IN to Sign in.
</p>
<?php Template::footer(); ?>