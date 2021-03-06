<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:title" content="Pac-Man" />
    <meta property="og:type" content="game" />
    <meta property="og:url" content="https://becodeorg.github.io/verou-3-end-with-a-bang-arcade/pac-man/index.html" />
    <meta property="og:image" content="https://becodeorg.github.io/verou-3-end-with-a-bang-arcade/img/pacMan.png" />

    <!-- <link rel="icon" type="image/x-icon" href="../favicon.ico"> -->
    <link rel="stylesheet" href="./sass/style.css">

    <script defer type="module" src="./js/index.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-17NGQKFE65"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-17NGQKFE65');
    </script>

    <title>PAC-MAN</title>
</head>

<body>

    <?php if (empty($_SESSION['username'])) : ?>

        <div class="username-form-screen">
            <form action="" method="POST">
                <input size="22" maxlength="20" type="text" name="username" placeholder="username" required>
                <button type="submit" name="submit">
                    <img src="./images/enter.png" alt="">
                </button>
            </form>
        </div>

    <?php else : ?>

        <div class="scoreboard hidden">
            <button class="close-scoreboard"><span>✕</span></button>
            <table class="scores">
                <tr class="header">
                    <th>#</th>
                    <th>score</th>
                    <th>user</th>
                    <th>date</th>
                </tr>
                <!-- JS GENERATED -->
            </table>
        </div>

        <div class="game-field-container">
            <div class="message">
                <div class="variable-content">
                    <!-- JS MANIPULATED -->
                    <h1>PAC-MAN</h1>
                    <hr>
                    <h2>move to play</h2>
                    <p>wasd keys / arrow keys / swiping</p>
                </div>

                <div class="wrapper">
                    <form action="" method="POST">
                        <input size="22" maxlength="20" class="username-display" type="text" name="username" value="<?= $_SESSION['username'] ?>">
                    </form>
                    <button class="show-scoreboard">scoreboard</button>
                </div>
            </div>

            <div class="game-field">
                <!-- JS GENERATED -->
            </div>
        </div>

    <?php endif ?>

</body>

</html>