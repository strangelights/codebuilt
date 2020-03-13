<?php
// Hi 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
       __           __       ____                   __        __    _         
      / /___  _____/ /_     / __ )_________  ____  / /_______/ /_  (_)_______ 
 __  / / __ \/ ___/ __ \   / __  / ___/ __ \/ __ \/ //_/ ___/ __ \/ / ___/ _ \
/ /_/ / /_/ (__  ) / / /  / /_/ / /  / /_/ / /_/ / ,< (__  ) / / / / /  /  __/
\____/\____/____/_/ /_/  /_____/_/   \____/\____/_/|_/____/_/ /_/_/_/   \___/ 
                                                                              
      -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Codebuilt Portfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="alternate stylesheet" type="text/css" href="darktheme.css" title="darktheme">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81785500-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81785500-3');
    </script>
   
    <!-- CSS Styleswitcher and cookie set -->
    <script src="styleswitcher.js"></script>
</head>
<body>
    <div id="wrapper">
    <nav>
        <div id="spacer"></div>
        <div>
        <input class="onoffswitch-checkbox" id="onoffswitch" name="onoffswitch" type="checkbox" onclick="themeToggle()">
        <label class="onoffswitch-label" for="onoffswitch"></label>
        </div>
    </nav>
    <script>
        var checkbox = document.querySelector("input[name=onoffswitch]");
        checkbox.addEventListener( 'change', themeToggle )
        function themeToggle() {
            if(this.checked) {
                setActiveStyleSheet('darktheme');
            } else {
                setActiveStyleSheet('styles');
            }
        }
        if (document.cookie.split(';').filter(function(item) {return item.indexOf('style=darktheme') >= 0}).length) {
            document.getElementById("onoffswitch").checked = true;
        }
    </script>
    
    <h1>Josh Brookshire</h1>
    <h2>Full Stack Software Engineer</h2>
    <h2 id="languages">HTML CSS JS PHP MYSQL</h2>
    </div>
    <div id="links">
        <span class="project-type">Mailchimp:</span>
        <br>
        <a href="https://scriptchecker.platform.rsglab.com/" target="_blank">ScriptChecker</a>
        <span> - </span>
        <a href="https://git.rsglab.com/support-org/scriptchecker" target="_blank">Repo</a>
        <span class="contribution"> - Author, Maintainer</span>
        <br>
        <a href="https://dnscheck.platform.rsglab.com/" target="_blank">DNSchecker</a>
        <span> - </span>
        <a href="https://git.rsglab.com/josh-brookshire/DNScheck" target="_blank">Repo</a>
        <span class="contribution"> - Contributor, Maintainer</span>
        <br>
        <a href="https://sirt.platform.rsglab.com/" target="_blank">Support Incident Response Tool</a>
        <span> - </span>
        <a href="https://git.rsglab.com/josh-brookshire/sev1-pando" target="_blank">Repo</a>
        <span class="contribution"> - Contributor, Maintainer</span>
        <br>
        <a href="http://star-search.platform.rsglab.com/" target="_blank">STAR Search</a>
        <span> - </span>
        <a href="https://git.rsglab.com/josh-brookshire/star-search" target="_blank">Repo</a>
        <span class="contribution"> - Contributor</span>
        <br>
        <a href="http://echo-comm.platform.rsglab.com/" target="_blank">EchoComm</a>
        <span> - </span>
        <a href="https://git.rsglab.com/josh-brookshire/echo-comm" target="_blank">Repo</a>
        <span class="contribution"> - Contributor</span>
        <br>
        <br>
        <span class="project-type">Personal:</span>
        <br>
        <a href="https://random-quote-generator-website.herokuapp.com/" target="_blank">Random Quote Generator</a>
        <span> - </span>
        <a href="https://github.com/strangelights/techdegree-project-1" target="_blank">Repo</a>
        <br>
        <a href="https://strangelights.github.io/highlighter/highlighter.html" target="_blank">Highlighter Clipboard Utility</a>
        <span> - </span>
        <a href="https://github.com/strangelights/highlighter" target="_blank">Repo</a>
        <br>
        <a href="https://www.codebuilt.dev/" target="_blank">Development Portfolio</a>
        <span> - </span>
        <a href="https://github.com/strangelights/codebuilt" target="_blank">Repo</a>
        <br>
        <a href="https://github.com/strangelights/slack_dark_theme" target="_blank">Slack Dark Theme</a>
    </div>
    <footer><i id="envelope"class="fas fa-envelope"></i><a href="mailto:josh@codebuilt.dev">josh@codebuilt.dev</a></footer>
</body>
</html>

