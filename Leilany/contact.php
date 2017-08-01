<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- This HTML Template isn't ready yet for you to use. Please complete it. -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Decirée Hofvander, Martin Höjer, Caroline del Canto, Maria Leilany Angulo" />
<meta name="keywords" content="media production, graphic design, visual" /><!-- type the search attribute here -->
<meta name="description" content="Photograph by Maria Leilany Angulo" />
<meta name="robots" content="all" />
<!-- Page tittle -->
<title>Contact</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />

   <script language="javascript">

  function validateForm(){
   var user, email;
   user = document.forms["theForm"].elements["name"].value;
   email = document.forms["theForm"].elements["email"].value;
    
   if(user == "" || email == ""){
    window.alert("The form is not complete");
    return false;
   }
   
   else{
    /*document.theForm.submit();*/
    /*document.theForm.submit();*/
   }
  }
 </script>
</head>
<body id="contact">

<div id="wrapper">
<!-- Holder -->

<div id="header">
<!-- Header -->
<div id="header_content">
<blockquote>
  <blockquote>
    <blockquote>
      <span class="hideme"><h1>Photograph by Maria Leilany Angulo | Contact</h1></span>
    </blockquote>
  </blockquote>
</blockquote>
<!-- Type you title here -->
</div>
<!-- End of header -->

<div id="main_nav">
<!-- Global horisontal navigation. The Subjects in the menu are not set -->
<div class="contact">
<a href="contact.php" id="contact_nav"><span class="hideme">Contact</span></a>
</div>
<div class="about">
<a href="about.html" id="about_nav"><span class="hideme">About</span></a>
</div>
<div class="portfolio">
<a href="portfolio.html" id="portfolio_nav"><span class="hideme">Portfolio</span></a>
</div>
<div class="services">
<a href="services.html" id="services_nav"><span class="hideme">Services</span></a>
</div>
<div class="home">
<a href="home.html" id="home_nav"><span class="hideme">Home</span></a>
</div>
</div>
</div>
<!-- End of global menu div -->


<?
if (!$_POST){
?>

<div id="wide_content">
<!-- The content div -->
<h1>Contact</h1>

<form name="theForm" action="contact.php" method=post>
<table border=0>
<tr>
<td>Name:</td>
<td><input type=text name="name" size=42 ></td>
</tr>
<tr>
<td>Email:</td>
<td><input type=text name=email size=42 ></td>
</tr>
<tr>
<td valign="top">Comment: 
</td>
<td><textarea name=comment cols=32 rows=6></textarea></td>
</tr>
<tr>
<td></td>
<td><input type=submit value="Send" onClick="validateForm()"></td>
</tr>
 </table>
 



</form>

    <?
}else{
    
    $cuerpo = "Form sent\n";
    $cuerpo .= "Name: " . $_POST["name"] . "\n";


    $cuerpo .= "Email: " . $_POST["email"] . "\n";
    $cuerpo .= "Comment: " . $_POST["comment"] . "\n";
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST["email"]))
{
    echo "Email not valid";
 
}else{
  
    mail("leilangexp@gmail.com","Received form.",$cuerpo);
 
    echo "Thanks for filling this form. It has been sent succesfully.";
}
}
?>

</div>
<!-- End of content div -->


<div id="footer">
<!-- footer div -->
<hr />
<div id="left_footer">
<!-- Left Footer div with social networks links and mini icons -->

<p align="center">

<!-- Type the adresses to the social network pages here and sort them in you own priority order: -->
<a href="http://twitter.com/#!/marialeilany" ><span class="hideme">Twitter</span><img src="images/logos/twitter_logo.png" alt="twitter" height="25" width="25" /></a>
<a href="http://www.facebook.com/mlangulo" ><span class="hideme">Facebook</span><img src="images/logos/facebook_logo.png" alt="facebook" height="25" width="25" /></a>
<a href="http://www.flickr.com/photos/leilanyangulo/" ><span class="hideme">Flicr</span><img src="images/logos/flickr_logo.png" alt="flickr" height="25" width="25" /></a>
<a href="http://leilanyangulo.blogspot.com/" ><span class="hideme">Blogspot</span><img src="images/logos/blogspot_logo.png" alt="blogspot" height="25" width="25" /></a>
</p>
</div>
<!-- End of left footer -->
<div id="right_footer">
<!-- Right Footer div with copyright information and email contact info -->

<p align="center">

Copyright &#169; by Group 3<br />
Web and digital imaging 2011 at Karlstad University, Sweden<br />
</div>
<!-- End of right footer -->
</div>
<!-- End of footer -->


</div>
<!-- End of wrapper -->
</body>
