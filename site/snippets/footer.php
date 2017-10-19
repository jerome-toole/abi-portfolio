  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">


      <p class="footer-madewithkirby">
        <a href="http://getkirby.com/made-with-kirby-and-love"><?php echo html::decode($site->footer_text()->kirbytext()) ?> <b class="heart">♥</b></a>
      </p>
    
      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>
      
    </div>
  </footer>

  <script type='text/javascript' id="__bs_script__">//<![CDATA[
      document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.8.2.js'><\/script>".replace("HOST", location.hostname));
  //]]></script>


</body>
</html>