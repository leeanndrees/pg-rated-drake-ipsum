<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>
      Drake Ipsum
    </title>
    <meta name="author" content="Russell Shearer & Darren Wong">
    <meta name="description" content="If you’re reading this set your type with Drake.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/drake.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <img class="ovo-logo" src="img/ovo.svg" alt="OVO unruly">
    <img class="drake-logo" src="img/drake.png" alt="Drake Ipsum" width="auto" height="50">
    <p class="text-center">If you’re reading this set your type with Drake.</p>
    <section class="bg-cloud">
      <small>N<sup>o</sup> of Paragraphs</small>
      <div class="ipsum-controls">
      <input class="ipsum" type="tel" name="ipsum_count" value="6" maxlength="2">
      <input class="ipsum-generate" type="submit" name="ipsum_generate" value="">
      </div>
    </section>

    <?php

    require('LoremIpsum.class.php');
    $generator = new LoremIpsumGenerator;
    //100 words in html format
    $generator->getContent(100);

    ?>
    <div class="bg-gold button">Copy Text</div>
    <div class="ipsum-text">
    <p>My woes this is that nasty flow way up, I feel blessed.Got a lot of enemies oh my God I'mma write my wrongs.Uh, thinkin' out loud Smart kids that smoke weed, Honor Roll. You only want what's real you just never found it I remember when my schedule was as flexible as she is.Don't talk to me like I'm famous, and don't assume cause I don't respect assumptions babe. For all the stuntin' I'll forever be immortalized I apologize it happened over time.</p>
    </div>
    <footer>
      <div class="bg-white button">Share with your friends</div>
      <small>No new friends tho.</small>
      <hr>
      <small>This was created real quick by <a href="">@russted</a> & <a href="">@darrendub</a><small>
      <small>Set in <a href="">Range</a> and hosted on the Github.</small>
    </footer>
  </body>
</html>