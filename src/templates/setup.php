<!DOCTYPE html>
<head lang="en">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>get GNU/Linux!</title>
  <!-- build:css /styles/main.css -->
  <link rel="stylesheet" type="text/css" href="/styles/main.css">
  <!-- endbuild -->
</head>
<body>
<main>
  <div class="container">
    <section>
      <h1>get GNU/Linux!</h1>
      <p>Almost there! Please follow these steps.</p>
      <ol>
        <li>Open a terminal and change to the root folder;</li>
        <li>Run `<code>make settings.php</code>' to create the settings.php file (or create a copy of <code>settings.php.new</code>);</li>
        <li>Open settings.php in a text editor and change the settings where necessary;</li>
        <li>Run `<code>make</code>' to generate the binary locale files (requires `gettext');</li>
        <li>Make sure that Apache module <code>mod_rewrite</code> is enabled;</li>
        <li>To make translations work, you need to generate locale definition files on the server. On commercial web hosting servers, there is no need to do this manually. If you are on a Debian based system, you may execute `<code>scripts/make-locales.sh</code>' as root to generate them.</li>
      </ol>
      <p>Finally, reload this page.</p>
    </section>
  </div>
</main>
</body>
</html>
