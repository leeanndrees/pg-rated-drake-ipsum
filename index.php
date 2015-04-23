<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Drake Ipsum</title>
    <meta name="author" content="Russell Shearer & Darren Wong">
    <meta name="description" content="If you’re reading this set your type with Drake.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/drake.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <img class="ovo-logo" src="img/ovo.svg" alt="OVO unruly">
    <img class="drake-logo" src="img/drake.png" alt="Drake Ipsum" width="auto" height="50">
    <p class="text-center">If you’re reading this set your type with Drake.</p>
    <section class="bg-cloud">
      <small>N<sup>o</sup> of Paragraphs</small>
      <div class="ipsum-controls">
        <?php 
          if(isset($_POST['submit'])){ //check if form was submitted
            $input = $_POST['numOfP']; //get input text
            $paragraphs = ($input * 10) - $input;
          }    
        ?>
        <form action="" method="post">
          <input name="numOfP" id="ipsum_input" placeholder="6" class="ipsum" type="tel" name="paragraph_count" maxlength="2" value="">
          <input name="submit" class="ipsum-generate" type="submit" name="Generate" value="">
          <button name="copy" class="bg-gold button" type="submit" name="copy" value="Copy Text">Copy Text</button>
        </form>   
      </div>
      <div class="ipsum-text">
        <?php 
          require('LoremIpsum.class.php');
          $generator = new LoremIpsumGenerator; 
          echo $generator->getContent($paragraphs, 'html', false);
        ?>
      </div>
    </section>
    <footer>
      <a href="https://twitter.com/intent/tweet?text=Drake Ipsum: If you’re reading this set your type with Drake&amp;url=http://drakeipsum.co" rel="nofollow" target="_blank" title="Share on Twitter"><div class="bg-white button">Share with your friends</div></a>
      <small>No new friends tho.</small>
      <hr>
      <small>This was created <em>0-100, real quick</em> by <a target="_blank" href="http://russted.com">russted</a> & <a target="_blank" href="http://darrendub.com">@darrendub</a> using the magics of <a href="http://tinsology.net/scripts/php-lorem-ipsum-generator/">Tinsology</a> and the <a href="https://pilgrimfonts.com/range-mono/">Range</a> typeface.<small>
    </footer>
  </body>
</html>
