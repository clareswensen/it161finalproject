<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Cleo Matthews</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width"/>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/final.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
  
</head>
 <body>
     
   <main>

   <header> 
      <h1><a href= "index.html">Cleo<br>Matthews</a></h1>
      <h2>Author</h2>
      
    </header>

    <nav>
      <ul class="nav">
        <li>
          <a href="index.html" >Home</a>
        </li>
        <li>
          <a href="books.html">Book</a>
        </li>
        <li>
          <a href="bio.html">Bio</a>
        </li>
        <li>
          <a href="contact.php" class="active">Contact</a>
        </li>
      </ul>
    </nav>

    <div class="wrapper">
     
       
     <?php
      /*
       * Below are 2 different forms to be re-used       
       * 
       * Only use one at a time, comment out the other!       
       *
       */

      include 'includes/contact_include.php'; #site keys & code here
  
      $toAddress = "clareswensen@gmail.com";  //place your/your client's email address here
      $toName = "Cleo Matthews"; //place your client's name here
      $website = "Cleo Matthews Author Website";  //place NAME of your client's website

      echo loadContact('simple.php');#demonstrates a simple contact form
      //echo loadContact('multiple.php');#demonstrates multiple form elements

  ?>
     
   <footer>
    <p><small>&copy; 2021 by <a href="contact.php">Contact Clare Swensen</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site198/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
  </footer>
</div>
   
   
</body>
</html>