<!-- saved from url=(0067)https://labs.jensimmons.com/2016/examples/image-gallery-grid-1.html -->
<!-- revised by M. Bret Blackford -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Legacy of Margit Vanja (Bengtsson) STeele">
    <meta name="keywords" content="Margit, banja, Bengtsson, STeele, Sweden, Svenska, Forshaga, Family">
    <meta name="author" content="M. Bret Blackford">
    <title>Margit Vanja - photos</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/bengtsson.css">

</head>

<body>
    <main>
        <header>
            <h1>Margit Vanja (Bengtsson) Steele <a href="index.php"> (HOME) </a></h1>
        </header>

        <article class="home">
            <a href="index.php"> (back to main page) </a>
        </article>

        <div class="warning">This demo only works in browsers that support CSS Grid Layout. If you can see this message, then your browser isn't supporting Grid. You can try out Grid in <a href="https://nightly.mozilla.org/">Firefox Nightly</a> or <a href="http://gridbyexample.com/browsers/">other browsers by flipping a flag</a>.</div>

        <br>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            &ensp;|<a href="./index.php" class="button button2">HoMe</a>|
            &ensp;|<a href="./MargitSteele-life-.htm" class="button button1">Life</a>|
            &ensp;|<a href="./Margit-Photos.php" class="button buttonHere"><b>Photos .php</b></a>|
            &ensp;|<a href="./Margit-photos.html" class="button button2">Photos .html</a>|
            &ensp;|<a href="./super8.html" class="button button1">super8 film</a>|
            &ensp;|<a href="https://carl.bengtsson.xyz/index.php" class="button button2">Parents [Carl & Agnes]</a>|
        </nav>
        <hr>

        <ul>
            <?php
                $dir = "media/*";
                $count = 0;
                foreach (glob($dir) as $file) {
                    $count++;
                    $randomNumber = rand(1, 4);
                    $class = "highlight";
                    if ($randomNumber > 3) {
                        $class = "highlight-box";
                    }
                    echo ' <li tabindex="0" class="' . $class . '"><a href="' . $file . '"><img src=' . $file . ' /><span>' . $count . '</span></a></li> ';
                }
                ?>
        </ul>
        <br />
        <hr />
        <hr>
        <!-- =============================== -->
        <!-- =============================== -->


        <br />
        <article calss="info">
            <hr />
            Margaret, eller Margit, var min mormor.
            <p>Margit föddes i Forshaga, Sverige. Hon reste till Amerika med sina föräldrar när hon var barn.</p>
            <br />
        </article>

        <br />
        <article calss="video">
            <hr />
            This is the only video I could find of my grandmother. Here she is loving on my sister, Sheri (aka Booi)<br>

            <iframe width=auto height="230" src="https://www.youtube.com/embed/CD5C2fj_ufo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br /><br>

            An here is a memorial video made for Margit's funeral service:<br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Hl62Aq-H6ZY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
        </article>

        <hr>
        <article class="footer">
            <a href="index.php"> (back to main page) </a>
        </article>
        <hr>


        <br>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            &ensp;|<a href="./index.php" class="button button2">HoMe</a>|
            &ensp;|<a href="./MargitSteele-life-.htm" class="button button1">Life</a>|
            &ensp;|<a href="./Margit-Photos.php" class="button buttonHere"><b>Photos .php</b></a>|
            &ensp;|<a href="./Margit-photos.html" class="button button2">Photos .html</a>|
            &ensp;|<a href="./super8.html" class="button button1">super8 film</a>|
            &ensp;|<a href="https://carl.bengtsson.xyz/index.php" class="button button2">Parents [Carl & Agnes]</a>|
        </nav>
        <hr>

        <footer>
            <hr />
            Margit Vanja (Bengtsson) Steele
            <br />
            &copy <?php echo date("Y"); ?> M Bret Blackford (mBret) 01.04.2024
            <hr />
            <br />
        </footer>
    </main>

</body>

</html>