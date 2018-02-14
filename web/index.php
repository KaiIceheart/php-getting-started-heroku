<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form test</title>
</head>

<body cz-shortcut-listen="true"><script id="__bs_script__">//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script><script async="" src="/browser-sync/browser-sync-client.js?v=2.18.13"></script>
           <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
               <h1>Play with the HTML form</h1>
                <form action="/index.php">
                    <input type="hidden" name="submitted" value="yes">
                    <p>
                        <label for="my-radio-yes">radio Yes: </label>
                        <input id="my-radio-yes" name="radio" type="radio" required="" value="Yes">
                        <label for="my-radio-no">radio No: </label>
                        <input id="my-radio-no" name="radio" type="radio" required="" value="No"></p>
                    <label for="Login">Login: </label>
                    <input id="Login" name="Login" type="text" required="" value="text">
                    <button type="submit">
                            <br>
                            <b>Let`s go</b><br>
                          </button>

                    <br>
                    <label for="Color">Color </label>
                    <input id="Color" name="Color" type="color" required="" value="Color">
                    <br>
                    <br>
                    <input type="reset" value="Clear">
                    <p></p>
                </form>

                



</body></html>
