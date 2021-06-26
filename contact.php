<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];

$email_from = $visitor_email;

$email_subject = "New Form submission";

$email_body = "You have received a new message from $name.\n".
                            "Here is the message:\n $message \n".
                            "You can contact him/her through this number:\n $phone";

$to = "keithkadima@gmail.com";

$headers = "From: $email_from \r\n";
                          
                         
if(mail($to,$email_subject,$email_body,$headers)) {
  echo "Email successfully sent to $to ...";
} else {
  echo "Email sending failed...";
};
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='./styles.css' rel='stylesheet'> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/26d6c1ca75.js" crossorigin="anonymous"></script>
    <title>Contact us</title>
</head>
<body>

    <div class="top-bar">
        <div class="container">
          <div class="top-links lftflot">
            <a href="">Home</a> |
            
            <a href="">About Us</a> |

            <a href="">Our Profile</a> |

            <a>EMAIL: info@madronetravel.co.ke</a> | 
            <a href="#">Call Us Today on +254 725 732 505/ 725 221 445</a>|
          </div>
          
        </div>
      </div>

    <nav class='navbar navbar-expand-md navbar-light bg-white sticky-top'>

         <div class="container-fluid">
            <a class="navbar-brand" href='index.html'><img src ='./images/Madrone_logo.png' class ='img-fluid logo'/></a>
            <button class='navbar-toggler' data-toggle='collapse' type='button' data-target='#collapse_target'>
                <span class="navbar-toggler-icon navbutton"></span>
                
            </button>
            <div class="collapse navbar-collapse" id='collapse_target'>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="offer.html" class="nav-link">What we offer</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact us</a>
                    </li>
                </ul>
            </div>    
         </div>      
           
    </nav> 

    <section class="container-fluid contacthero">
      <div class="container text-center vertical-center">
        <h1 style='color:#14a9e6; top:50%; font-weight: 100px; '> GET IN TOUCH WITH US </h1>
    </div>
        
    </section>

    <section class="section contact-section" data-aos='zoom-in'>
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              
              <form action="contact.php" method="post" class="bg-white p-md-5 p-4 mb-5" onsubmit="setTimeout(function(){window.location.reload();},10);">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="name">Name</label>
                    <input name='name' type="text" id="name" class="form-control ">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="phone">Phone</label>
                    <input name='phone' type="text" id="phone" class="form-control ">
                  </div>
                </div>
            
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="email">Email</label>
                    <input name='email' type="email" id="email" class="form-control ">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="message">Write Message</label>
                    <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="submit" value="Send Message" class="btn btn-primary">                  </div>
                </div>
              </form>
  
            </div>
            <div class="col-md-5">
              <div class="row mt-5">
                <div class="col-md-10 ml-auto contact-info">
                  <p><span class="d-block"> <img src="http://www.madrone-travel.com/wp-content/themes/quentin/images/social_address.png" alt=""> Address:</span> <span> P.O BOX 66832 00800</span></p>
                  <p><span class="d-block"> <img src="http://www.madrone-travel.com/wp-content/themes/quentin/images/social_phone.png" alt=""> Phone:</span> <span> +254725221445 | +25472573205 </span></p>
                  <p><span class="d-block"> <img src="http://www.madrone-travel.com/wp-content/themes/quentin/images/social_mail.png" alt=""> Email:</span> <span> reservations@madronetravel.co.ke</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
    
    
      <footer class="footer mt-5 d-none d-md-block">
        <div class="container footerContainer ">
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a  href="/"><img class="downlogo" src="./images/logo.jpg" alt="logo"></a>
                        </div>
                        <div class=" ">
                            <h5 class="font-weight-bold">Quick links</h5>
                            <div class="d-flex justify-content-end">
                                <ul class="nav nav-pills flex-column mr-5   mt-1">
                                    <li class="nav-item"><a class="nav-link p-0 " href="/index.html">Home</a></li>
                                    <li class="nav-item"><a class="nav-link p-0" href="/about.html">About us</a></li>
                                    <li class="nav-item"><a class="nav-link p-0 " href="/offer.html">What we offer</a></li>
                                    <li class="nav-item"><a class="nav-link p-0" href="#">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h5 class="font-weight-bold">Connect with us</h5>
                            <p class=" mt-3">
                                <a href="mailto:info@madronetravel.co.ke" class="text-dark" target="__blank">Email</a>
                                <a href="/" class="text-dark d-block" target="__blank">Blog</a>
                                
                            </p>
                        </div>
                        <div>
                            <h5 class="font-weight-bold">Office Address</h5>
                            <p class=" mt-3">Juja Mall, <br> Along Thika Road.</p>
                        </div>
                        <div>
                            <h5 class="font-weight-bold">Follow us</h5>
                            <div class="mt-3">
                                <a href="#" class="text-decoration-none inline-block mr-3" target="__blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEGSURBVHgBrVJBTsMwENwxRlzzhDwhT3APVbmh3FpOfQBI9CWRygPgBEgcuCEqDuUJ+QHmBfgIUp0hFmnVRq0SI+Y0a8+Ox2tjeF5kEL0EJZEowFYr5Frx+EmEkc0BTJXmUgfSSy5S1ind7+FimuVE92i1oB8sHmY2VKfjIqXo9/Wu6mqvVj5/aZoDvN+dVVcC9/o4KwMZjudTBdy0BR0J4DZMaPYpDiZohlZunWRJeWvczMZ4NLnmPoMjIH2+u/hor5tpkZx8688t4zjoL8l26kNCT97W6dzi/jIP9Wgyv6oDn9W09yuY8F3XBckMgGmLoq/w/waEOPkzaBVFDQKRSBB0FXz+A6IqVthOJxW6AAAAAElFTkSuQmCC" alt="facebook-icon"></a>
                                <a href="#" class="text-decoration-none inline-block mr-3 " target="__blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAOCAYAAAAmL5yKAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFgSURBVHgBlVKxTgJBEJ3ZOyigEAtNqDj/gD/w+AMpLK6DL/ASg7baGTERv0CsCFb4B/sH+AdeZ8TmbAgh7Iyzh5gDD3O8YnczM+/t29lByIHOYNICB46RISYyL3dBVYePb5VCueyhTaKLtdvTg+ss8sXw8x6Aw/UojwCUT7RoKgT2gfjqUgqtarrsfPhx8pdsgTYOClRLMWKcaEphsVQeW0crIYegDtsRzWfTEDvPk7q8bbyZZQQtcU+OXhabCdrd4LDvohGLSokLXrMvZB/+AYOJ7K4YSG+S82Axm70mAt2g2heBp13IzKB77aOkd+onNoJdwOb3wkRgXixq2aJcXLl96Tol0Gvux4pMQ+ZBlJffuoUeOWza6YgbDt69AjmVBaKPimvI2xrKkSJq3ATVaE2ggE6ILpzJRNq/yUIszh5kaHqrxqWBdrGT55RKvmIZa1B7yxR9EaI206nOIq7wDSygl0gYemyXAAAAAElFTkSuQmCC" alt="social-icon"></a>
                                <a href="#" class="text-decoration-none inline-block mr-3 " target="__blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPjSURBVHgB3ZRbaFxVFIb/fe4zZyYzTTKhhTQJptqURmyJiDGQtqgoqNUoMVWCGEr1oeBr8UGrCIpXUCl9qnh5EkUsQS1JJJHR0qbW2Gk1NraVXmxzGWMmM5Nz3Xu7TjTQyJTgo92HdeDA5jvr/9cF+L8dttIFKSXr778c0zRLi75jJS62dmfKjDH5n8G7d//Q6DjsKcHk4woXjRbnjAJmKCgkDAobmLQEjqRs9bkdH3ecWhG8pyt7S0lRRhQu04YIEQ8DWILDCjkMLmBIAZ0DGpTFB0yFbmrP9wze9dI1wZ+9fqJu9NDUUVWKpkytivZHmtDQWgMrqUMh5ZH4SH9Q8FC8WMKvH45j4aKL6DdS59u6RrpGllja1eBTQ+e3V4E31dZq6Hm7AxdGzuCX90+Dzy5AoYwVoqpMAdMVxBtT6Ny/Bbk936Jwcg480PcSojLYFm63KQLctLkB+R8vYOKdLOKkSZOknYJRvoLsqN6yHqta1+C3A0fR1L0Op098B8H4pqjQS0VdBk6p3mrTc5Gpj8GdmERKuuSpxNre21D/RDvUhIHZoZ8x8/n38HJn4Y/PINnTBkO4BDbSuTcGMoSZjljKsoxDJ5kUC7BtKkuhiLgoY23XBqy+fyPGH3sLuc698H+fQn1fJ0oHj0NzFsDIHzNKQHjgY/nYEmsZuIqXWEotwFR9xPQSkmYembtbcOXlj2DNzCDuOCi+N4T4pgaYcUCHj0i5xlyyywdcBxU9rk5OIy5LMAwXSqwElv4DzCsgkQngJ2YhfQMyXUcwBtV3ocoEoj5RESy2HUesMrgqPUvgInSNusCmSBcQHB9E9TM7UdT3Q877sHc+icKnX0MPXWIJQPwDpre1BpXBdo0jYv4cFD4HtdqAli4C41/B+ZIGpecBmucqeIePwPvgCxhWghSZ4AVKgIZGMg51+wYH+yqADXs+Z5jlG1hhAkbbfQhHDyzKlicPIjzWD+HSdc+EadsIhIC1bT2Cs1cQmSBM5qy7p2O6YsZ+Xepwqjz9kHJpEGzrDui79kGeyQJOGVFtpK9ABiqEr8NqboN682ZM73qX+luA1+ijV7OWjXQ2m13VOvHauYRRTgtVgWi+FyzVTF7SyuESkpYPfJK9ECI4d4ksOgZ+2YDjV8Ptu/3RjU8/+ElFcHTOD7x5Z5r/dMg2XU1R1b+BNG1wQoiSD/mnD54PEE4yBHkbRTeD/B3tL7Y92/fCNTNeOsPDw02Neu7VhF5+mMlQU6n54XmQrkudEVDBBLxyTLrz8W/mm1tfubW3d+DfjBUX/djY2I1hGCYMwzCjb9oHnqZpRYqplpaWIq6b8xd81LpL6TcGJAAAAABJRU5ErkJggg==" alt="social-icon"></a><a href="https://www.youtube.com/channel/UCCZYGgIn2X1I8mortBJ5UUw" class="text-decoration-none inline-block mr-3" target="__blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFLSURBVHgBrVKxSgNBEH2TxGgjBpQELCRaSgQldlokhcLZiXbiPwiKZ2uXU0G/wI+wuXQ2fsBhY6cBK4tg2oS7W9/unfFMEO/EgVlmZt88Zh4jsNvXgDrCX0wpR2C7Ks5CKDxCpMxkPi1HbhiFhToudtYg2ACkl5Wgi8ttz0Qtq0OSh6wEszhtH5rozK1yt1pagoQGemzlUYcaq3MQ9QolAesl1ksk9aiPXm2ZXh6dQCu6D8dqUssVkwdoMl+E5Ovwg3Wjj/53rArBt59thbGZ/PwARQ5VVL7JW1vPY5h+/xiTU3uMZnJIY7Z7z3t5pz4Nk9/s9jjxy/cVfmy+2+TbMDqEOBjWRbrpCAL5WlOSK8sgHcEv9p8EahqZTE3oN3FI6EROsSCricNZoC/FTW/8e4piYojVolzRT+jVyCX+14BREx4RKjGZhp5/AGnRZHnBtZzqAAAAAElFTkSuQmCC" alt="social-icon"></a>
                            </div>
                        </div>
                    </div>
                    <div class="section-bottom">
                        <div class="col-12 py-2 text-center">
                            <p class="footer-copyright">© <script>
                                document.write(new Date().getFullYear());
                              </script> | All Rights Reserved | Developed by <a href='https://linkedin.com/in/kadimakeith'>Keith Kadima</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  
      <!--FOOTER MOBILE-->
  
    <footer class="d-md-none d-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row mobile-footer">
                        <div class="col-6">
                            <h5 class="font-weight-bold">Quick links</h5>
                            <ul class="nav nav-pills flex-column mr-5   mt-3">
                                <li class="nav-item"><a class="nav-link p-0 " href="/">Home</a></li>
                                <li class="nav-item mt-1"><a class="nav-link p-0" href="/curriculum">About us</a></li>
                                <li class="nav-item mt-1"><a class="nav-link p-0 " href="/faq">What we offer</a></li>
                                <li class="nav-item mt-1"><a class="nav-link p-0" href="/terms-conditions">Terms and Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div>
                                <h5 class="font-weight-bold">Connect with us</h5>
                                <p>
                                    <a href="mailto:info@madronetravel.co.ke" class="text-dark">Email</a>
                                    <a href="/" target="__blank" class="text-dark d-block">Blog</a>
                                    
                                </p>
                            </div>
                            <div>
                                <h5 class="font-weight-bold">Office Address</h5>
                                <p>Juja Mall , <br> Along Thika road.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a class=" logo" href="/"><img class='downlogo' src="./images/logo.jpg" alt='logo'/></a>
                        </div>
                        <div class="col-6">
                            <h5 class="font-weight-bold">Follow us</h5>
                            <a href="#" class="text-decoration-none inline-block mr-3" target="__blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEGSURBVHgBrVJBTsMwENwxRlzzhDwhT3APVbmh3FpOfQBI9CWRygPgBEgcuCEqDuUJ+QHmBfgIUp0hFmnVRq0SI+Y0a8+Ox2tjeF5kEL0EJZEowFYr5Frx+EmEkc0BTJXmUgfSSy5S1ind7+FimuVE92i1oB8sHmY2VKfjIqXo9/Wu6mqvVj5/aZoDvN+dVVcC9/o4KwMZjudTBdy0BR0J4DZMaPYpDiZohlZunWRJeWvczMZ4NLnmPoMjIH2+u/hor5tpkZx8688t4zjoL8l26kNCT97W6dzi/jIP9Wgyv6oDn9W09yuY8F3XBckMgGmLoq/w/waEOPkzaBVFDQKRSBB0FXz+A6IqVthOJxW6AAAAAElFTkSuQmCC" alt="facebook-logo"></a>
                            <a href="#" class="text-decoration-none inline-block mr-3 " target="__blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAOCAYAAAAmL5yKAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFgSURBVHgBlVKxTgJBEJ3ZOyigEAtNqDj/gD/w+AMpLK6DL/ASg7baGTERv0CsCFb4B/sH+AdeZ8TmbAgh7Iyzh5gDD3O8YnczM+/t29lByIHOYNICB46RISYyL3dBVYePb5VCueyhTaKLtdvTg+ss8sXw8x6Aw/UojwCUT7RoKgT2gfjqUgqtarrsfPhx8pdsgTYOClRLMWKcaEphsVQeW0crIYegDtsRzWfTEDvPk7q8bbyZZQQtcU+OXhabCdrd4LDvohGLSokLXrMvZB/+AYOJ7K4YSG+S82Axm70mAt2g2heBp13IzKB77aOkd+onNoJdwOb3wkRgXixq2aJcXLl96Tol0Gvux4pMQ+ZBlJffuoUeOWza6YgbDt69AjmVBaKPimvI2xrKkSJq3ATVaE2ggE6ILpzJRNq/yUIszh5kaHqrxqWBdrGT55RKvmIZa1B7yxR9EaI206nOIq7wDSygl0gYemyXAAAAAElFTkSuQmCC" alt="twitter-logo"></a>
                            <a href="#" class="text-decoration-none inline-block mr-3 " target="__blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAPjSURBVHgB3ZRbaFxVFIb/fe4zZyYzTTKhhTQJptqURmyJiDGQtqgoqNUoMVWCGEr1oeBr8UGrCIpXUCl9qnh5EkUsQS1JJJHR0qbW2Gk1NraVXmxzGWMmM5Nz3Xu7TjTQyJTgo92HdeDA5jvr/9cF+L8dttIFKSXr778c0zRLi75jJS62dmfKjDH5n8G7d//Q6DjsKcHk4woXjRbnjAJmKCgkDAobmLQEjqRs9bkdH3ecWhG8pyt7S0lRRhQu04YIEQ8DWILDCjkMLmBIAZ0DGpTFB0yFbmrP9wze9dI1wZ+9fqJu9NDUUVWKpkytivZHmtDQWgMrqUMh5ZH4SH9Q8FC8WMKvH45j4aKL6DdS59u6RrpGllja1eBTQ+e3V4E31dZq6Hm7AxdGzuCX90+Dzy5AoYwVoqpMAdMVxBtT6Ny/Bbk936Jwcg480PcSojLYFm63KQLctLkB+R8vYOKdLOKkSZOknYJRvoLsqN6yHqta1+C3A0fR1L0Op098B8H4pqjQS0VdBk6p3mrTc5Gpj8GdmERKuuSpxNre21D/RDvUhIHZoZ8x8/n38HJn4Y/PINnTBkO4BDbSuTcGMoSZjljKsoxDJ5kUC7BtKkuhiLgoY23XBqy+fyPGH3sLuc698H+fQn1fJ0oHj0NzFsDIHzNKQHjgY/nYEmsZuIqXWEotwFR9xPQSkmYembtbcOXlj2DNzCDuOCi+N4T4pgaYcUCHj0i5xlyyywdcBxU9rk5OIy5LMAwXSqwElv4DzCsgkQngJ2YhfQMyXUcwBtV3ocoEoj5RESy2HUesMrgqPUvgInSNusCmSBcQHB9E9TM7UdT3Q877sHc+icKnX0MPXWIJQPwDpre1BpXBdo0jYv4cFD4HtdqAli4C41/B+ZIGpecBmucqeIePwPvgCxhWghSZ4AVKgIZGMg51+wYH+yqADXs+Z5jlG1hhAkbbfQhHDyzKlicPIjzWD+HSdc+EadsIhIC1bT2Cs1cQmSBM5qy7p2O6YsZ+Xepwqjz9kHJpEGzrDui79kGeyQJOGVFtpK9ABiqEr8NqboN682ZM73qX+luA1+ijV7OWjXQ2m13VOvHauYRRTgtVgWi+FyzVTF7SyuESkpYPfJK9ECI4d4ksOgZ+2YDjV8Ptu/3RjU8/+ElFcHTOD7x5Z5r/dMg2XU1R1b+BNG1wQoiSD/mnD54PEE4yBHkbRTeD/B3tL7Y92/fCNTNeOsPDw02Neu7VhF5+mMlQU6n54XmQrkudEVDBBLxyTLrz8W/mm1tfubW3d+DfjBUX/djY2I1hGCYMwzCjb9oHnqZpRYqplpaWIq6b8xd81LpL6TcGJAAAAABJRU5ErkJggg==" alt="twitter-logo"></a>
                            <a href="#" class="text-decoration-none inline-block mr-3 " target="__blank"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFLSURBVHgBrVKxSgNBEH2TxGgjBpQELCRaSgQldlokhcLZiXbiPwiKZ2uXU0G/wI+wuXQ2fsBhY6cBK4tg2oS7W9/unfFMEO/EgVlmZt88Zh4jsNvXgDrCX0wpR2C7Ks5CKDxCpMxkPi1HbhiFhToudtYg2ACkl5Wgi8ttz0Qtq0OSh6wEszhtH5rozK1yt1pagoQGemzlUYcaq3MQ9QolAesl1ksk9aiPXm2ZXh6dQCu6D8dqUssVkwdoMl+E5Ovwg3Wjj/53rArBt59thbGZ/PwARQ5VVL7JW1vPY5h+/xiTU3uMZnJIY7Z7z3t5pz4Nk9/s9jjxy/cVfmy+2+TbMDqEOBjWRbrpCAL5WlOSK8sgHcEv9p8EahqZTE3oN3FI6EROsSCricNZoC/FTW/8e4piYojVolzRT+jVyCX+14BREx4RKjGZhp5/AGnRZHnBtZzqAAAAAElFTkSuQmCC" alt="twitter-logo"></a>
                        </div>
                    </div>
                    <hr>
                    <div class="section-bottom">
                        <div class="col-12 py-2 text-center">
                          <p class="footer-copyright">© <script>
                            document.write(new Date().getFullYear());
                          </script> | All Rights Reserved | Developed by <a href='https://linkedin.com/in/kadimakeith'>Keith Kadima</a>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>