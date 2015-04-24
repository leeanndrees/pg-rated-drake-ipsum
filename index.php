<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Drake Ipsum</title>
    <meta name="author" content="Russell Shearer & Darren Wong">
    <meta name="description" content="If you’re reading this set your type with Drake.">
    <meta property="og:title" content="Drake Ipsum: If you're reading this, set your type with drake"/>
    <meta property="og:site_name" content="Drake Ipsum"/>
    <meta property="og:description" content="Tired of the same 'ol boring fake filler text? Need copy with emotion, with passion? Need text about broken relationships and thoughts on the human condition? Look no further, upgrade your text with lyrics from the real 6 god boi."/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="http://drakeipsum.co/img/tw-img.png">
    <meta property="og:image" content="http://drakeipsum.co/img/fb-img.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/drake.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
    <img class="ovo-logo" src="img/ovo.svg" alt="OVO unruly">
    <img class="drake-logo" src="img/drake.png" alt="Drake Ipsum" width="auto" height="50">
    <p class="text-center">If you’re reading this set your type with Drake.</p>
    <section class="bg-cloud">
      <small>N<sup>o</sup> of Paragraphs</small>

      <script>
      $(document).ready(function() {
        function check() {
          if ($('.ipsum-text').children().length > 0) {
            $('.ipsum-empty').removeClass('active');
            $('#copy-btn').addClass('active');
          } else {
            
          }
        }
        check();
      });
      </script>
      <div class="ipsum-controls">
        <?php 
          if(isset($_POST['submit'])){ //check if form was submitted
            $input = $_POST['numOfP']; //get input text
            $paragraphs = ($input * 10) - $input;
            echo '<script type="text/javascript">'
               , 'function check() {
          if ($(".ipsum-text").children().length > 0) {
            $(".ipsum-empty").removeClass("active");
            $("#copy-btn").addClass("active");
          } else {
            
          }
        }
        check();'
               , '</script>'
            ;
          }    
        ?>
        <form action="" method="post">
          <input name="numOfP" id="ipsum_input" placeholder="6" class="ipsum" type="tel" name="paragraph_count" maxlength="2" value="" autocomplete="off">
          <input name="submit" class="ipsum-generate" type="submit" name="Generate" value="">
          <button name="copy" id="copy-btn" class="bg-gold button" type="submit" name="copy" value="Copy Text" data-clipboard-target="clipboard_ipsum">Copy Text</button>
        <script src="ZeroClipboard.js"></script>
 
      <script>




      var client = new ZeroClipboard( document.getElementById("copy-btn") );

      client.on( "ready", function( readyEvent ) {
        client.on( "aftercopy", function( event ) {
          alert("drake ipsum successfully copied!");
        } );
      } );
      </script>
        </form>   
      </div>

      <div class="ipsum-empty active">
        <p>My woes, This is that nasty flow, Way way way up, They need the whole thing, The shit was gettin‘ too predictable, You know they all sentimental now, She from the jungle, Every time I see ‘ em somethin’ wrong with they memory</p>
      </div>
      <div class="ipsum-text" id="clipboard_ipsum">
        <?php 
          require('LoremIpsum.class.php');
          $generator = new LoremIpsumGenerator; 
          echo $generator->getContent($paragraphs, 'html', false);
        ?>
      </div>
    </section>
    <footer>
      <a href="https://twitter.com/intent/tweet?text=Drake Ipsum: If you’re reading this set your type with Drake&amp;url=http://drakeipsum.co" rel="nofollow" target="_blank" title="Share on Twitter"><div class="bg-white button">Share with friends</div></a>
      <small>No new friends tho.</small>
      <hr>
      <small>This was created <em>0-100, real quick</em> by <a target="_blank" href="http://russted.com">russted</a> & <a target="_blank" href="http://darrendub.com">@darrendub</a> using the magics of <a href="http://tinsology.net/scripts/php-lorem-ipsum-generator/">Tinsology</a> and the <a href="https://pilgrimfonts.com/range-mono/">Range</a> typeface.<small>
    </footer>
  </body>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62236221-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
