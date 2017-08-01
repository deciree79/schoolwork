<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Decirée Hofvander" />
        <meta name="keywords" content="service, webb and multimedia, media production, production, design, css, cascading, style, sheets, xhtml, graphic design, w3c, web standards, visual, display" />
        <meta name="description" content="Contact owner of Desired Dynamic Design" />
        <meta name="robots" content="all" />

        <link href="ddd.css" rel="stylesheet" type="text/css" />
        <title>Desired Dynamic Design for your Homepage | Contact</title>

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
        <?php include_once("analyticstracking.php") ?>
        <div id="wrapper">
            <div id="header">
                <a href="http://www.deciree.eu/" ><h1>Desired Dynamic Design | Contact</h1></a>
            </div>
            <div id="main_nav">
                <div class="start">
                    <a href="index.html" id="start_nav"><span class="hideme">Start</span></a>
                </div>
                <div class="services">
                    <a href="services.html" id="services_nav"><span class="hideme">Services</span></a>
                </div>
                <div class="lore">
                    <a href="lore.html" id="lore_nav"><span class="hideme">Lore</span></a>
                </div>
                <div class="about">
                    <a href="about.html" id="about_nav"><span class="hideme">About</span></a>
                </div>
                <div class="contact">
                    <a href="contact.php" id="contact_nav"><span class="hideme">Contact</span></a>
                </div>
            </div>
            <div id="container">
<?
if (!$_POST){
?>
                <div id="content">
                    <!-- The content div -->
                    <h2>Contact</h2>
                    
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
                mail("web@deciree.eu","Received form.",$cuerpo);
                echo "Thanks for filling this form. <br />It has been sent succesfully.";
                }

                }
                ?>
</form>


                </div>
                <div id="sub_menu">
                    <!-- Facebook Badge START --><a href="http://www.facebook.com/pages/decireeeu/196393923715468" target="_TOP" title="deciree.eu">
                        <img src="http://badge.facebook.com/badge/196393923715468.1963.1418457837.png" width="120" height="180" style="border: 0px;" /></a><!-- Facebook Badge END -->
                </div>
            </div>

            <div id="footer">
                <div id="left">Copyright &#169;2011 by Decirée Hofvander<br />
                        Web and Multimedia year 2009 at Karlstad University, Sweden<br />
                        mail me at <a href="mailto:web@deciree.eu">web&#64;deciree.eu</a></div>
                <div id="right"><p align="center">
                    <a href="http://twitter.com/deciree79" target="_new" ><span class="hideme">Twitter</span><img src="images/Twitter logo.png" height="25" width="25" alt="Twitter" /></a>
                    <a href="http://www.facebook.com/pages/decireeeu/196393923715468" target="_new" ><span class="hideme">Facebook</span><img src="images/facebook_logo.png" height="25" width="25" alt="Facebook" /></a></p>
                </div>
            </div>
        </div>
    </body>
</html>
