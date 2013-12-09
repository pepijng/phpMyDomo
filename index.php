<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>PhpMyDomo : universal domotic software remote written in php </title>

    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="stylesheets/pygment_trac.css">
    <script src="javascripts/scale.fix.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <header>
      	<img src="images/app_icon128.png" class="head_logo">
        <h1>phpMyDomo</h1>
        <p>The ultimate domotic remote for the rest of us</p>
        <p class="view"><a href="https://github.com/phpMyDomo/phpMyDomo">View the Project on GitHub <small>phpMyDomo/phpMyDomo</small></a></p>
        <ul>
          <li><a href="download/?t=zip">Download <strong>ZIP File</strong></a></li>
          <li><a href="download/?t=gz">Download <strong>TAR Ball</strong></a></li>
          <li><a href="/github/">View On <strong>GitHub</strong></a></li>
        </ul>
      </header>
      <section>
        <p>phpMyDomo is an open-source php Web Application aimed to provide a clean, robust, customizable, fast and intuitive interface to many Home Automation software.</p>
        <p>With todays chinese phones and tablets starting as low as $50, it becomes a cheap and powerfull way to build remotes to control anything smartly in your house.</p>
        <p>phpMyDomo wants to be the ultimate WebApp that works as well on these devices, as on any computer browser.
phpMyDomo don't aim to replace the cool domotic's software you're currently using, but rather to add a convenient web interface to it.</p>

<p>Currently supported software include <strong><a href="http://www.domoticz.com/" target="_blank">Domoticz</a></strong>, <strong><a href="http://www.domotiga.nl/" target="_blank">Domotiga</a></strong> and <strong><a href="http://www.domogik.org/" target="_blank">Domogik</a></strong>.</p>

<p>This is a Work In Progress : At this time only Switches and Sensors are fully supported in <em>Domoticz</em> , <em>Domotiga</em>, and partially in <em>Domogik</em>.</p>

<h2>
<a name="features" class="anchor" href="#features"><span class="octicon octicon-link"></span></a>Features</h2>

<ul>
<li>Allow to Switch on/off or Dim (WIP) any supported devices or scenes, from the Dashboard page</li>
<li>View all sensors at once, or per user defined groups</li>
<li>View all cameras on a single page</li>
<li>Responsive design : Display fine on any Android/IOS tablet, phone and any modern (HTML5) web browser</li>
<li>Multiple Skins, build your own easily</li>
<li>Multiples languages supported</li>
<li>Any Home Automation Software supported via Api Plugins</li>
<li>Easily customizable</li>
<li>Fast loading</li>
<li>Minimal server requirements : a php-enabled web server</li>
<li>Object oriented, MVC design : easily build your own custom pages, in minutes...</li>
<li>Free and Open Source</li>
<li>Highest WAF (Wife acceptation Factor) possible</li>
</ul>


<h2>
<a name="screenshots" class="anchor" href="#screenshots"><span class="octicon octicon-link"></span></a>Screenshots</h2>

<div align="center">
<img src="https://raw.github.com/phpMyDomo/phpMyDomo/master/doc/screenshots/01.png" title="main dashboard (default skin)"><br>
<img src="https://raw.github.com/phpMyDomo/phpMyDomo/master/doc/screenshots/02.png" title="main dashboard viewed on phone (default skin)"><br>
<img src="https://raw.github.com/phpMyDomo/phpMyDomo/master/doc/screenshots/03.png" title="main dashboard (black skin)"><br>
<img src="https://raw.github.com/phpMyDomo/phpMyDomo/master/doc/screenshots/04.png" title="devices list (black skin)"><br>
</div>
      </section>
    </div>
    <footer>
      <p>Downloads: <b><? echo file_get_contents(dirname(__FILE__)."/cache/downloads.txt"); ?></b></p>
      <p>Theme by <a href="https://github.com/orderedlist" target="_blank">orderedlist</a></p>
    </footer>
    <!--[if !IE]><script>fixScale(document);</script><![endif]-->
    
  </body>
</html>