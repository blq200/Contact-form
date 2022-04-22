<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
  /**
   * Plugin Name: Contact Form 
   */

function contact_form()
{
    $content = '';
    $content .= '<h2>Contact Us!</h2>';

     $content .= '<label for="Your Name">Your Name</label>';
     $content .= '<input type ="text" name="Your Name" class= "form-control" placeholder="Enter Your Name "/>';
     $content .= '<label for=""Your Email> Your Email </label>';
     $content .= '<input type ="email" name="Your Email" class="form-control" placeholder="Enter Your Email"/>';
     

    
    
    
    return $content;

}
add_shortcode('plugin_contact','contact_form');




?>