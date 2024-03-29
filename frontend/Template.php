<?php

class Template
{
    public static function header($title, $error = false)
    {
        $home_path = getHomePath();
        $user = getUser();
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $title ?> - Close Social</title>

            <link rel="stylesheet" href="<?= $home_path ?>/assets/css/style.css">

            <script src="<?= $home_path ?>/assets/js/script.js"></script>
        </head>

        <body>
            <header style="background-image: url('<?= $home_path ?>/assets/img/header-bg.jpg')">
                <h1><?= $title; ?></h1>
            </header>

            <nav>
                <a href="<?= $home_path ?>">Home</a>
                <a href="<?= $home_path ?>/feed">Post Feed</a>
                <a href="<?= $home_path ?>/meme">Memes</a>

                <?php if ($user) : ?>
                    <a href="<?= $home_path ?>/auth/profile">Profile</a>
                    <a href="<?= $home_path ?>/posts">Posts</a>
                <?php else : ?>
                    <a href="<?= $home_path ?>/auth/login">Log in</a>
                <?php endif; ?>
            </nav>

            <main>

                <?php if ($error) : ?>
                    <div class="error">
                        <p><?= $error ?></p>
                    </div>
                <?php endif; ?>

            <?php }



        public static function footer()
        {
            ?>
            </main>
            <footer>
                Project by Jacob Granstedt, Jiaheng Liu & Mihai Gabriel Bodnarescu 
            </footer>
        </body>

        </html>
<?php }
    }
