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
          <input name="numOfP" id="ipsum_input" class="ipsum" type="tel" name="paragraph_count" maxlength="2" value="">
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
      <div class="bg-white button">Share with your friends</div>
      <small>No new friends tho.</small>
      <hr>
      <small>This was created <em>real</em> quick by <a target="_blank" href="http://russted.com">russted</a> & <a href="">@darrendub</a> using the magics of <a href="http://tinsology.net/scripts/php-lorem-ipsum-generator/">Tinsology</a><small>
      <small>Set in <a href="">Range</a> and hosted on the Github.</small>
    </footer>
  </body>
</html>
