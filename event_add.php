<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$world = "conectify";
$con=mysqli_connect($servername,$username,$password,$world);
if (mysqli_connect_errno($con)){
  echo "Database problem. Try again later. " . mysqli_connect_error();
}
else {
  /*echo "Baza ti dela čuj ";*/
  mysqli_query($con, "INSERT INTO events (ename, contact_email, s_date, address_1, address_2, city, region, zip, country, description, phone_nr) VALUES ('$_REQUEST[ename]', '$_REQUEST[contact_email]', '$_REQUEST[s_date]', '$_REQUEST[address_1]', '$_REQUEST[address_2]', '$_REQUEST[city]', '$_REQUEST[region]', '$_REQUEST[zip]', '$_REQUEST[country]', '$_REQUEST[description]', '$_REQUEST[phone_nr]')");
}
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Contactify - Event Added</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/linecons.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.9.2.custom.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.0.custom">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.css">
<link rel="stylesheet" type="text/css" href="jquery-ui.theme.css">
<link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css">


<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

<script type="text/javascript">
  $(document).ready(function(e) {
        $('.res-nav_click').click(function(){
    $('ul.toggle').slideToggle(600) 
      }); 
      
  $(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });
  
    });
    

        }); 
function resizeText() {
  var preferredWidth = 767;
  var displayWidth = window.innerWidth;
  var percentage = displayWidth / preferredWidth;
  var fontsizetitle = 25;
  var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
  $(".divclass").css("font-size", newFontSizeTitle)
}
</script>
</head>
<body>


<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a href="javascript:void(0)"><img src="img/logob.png" alt=""></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="index.html">Home</a></li>
          <li><a href="contacts_list.php">Contacts list</a></li>
          <li><a href="add_contact.php">Add contacts</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="add_event.php">Add events</a></li>
        </ul>
        <ul class="">
          <li><a href="index.html">Home</a></li>
          <li><a href="contacts_list.php">Contacts list</a></li>
          <li><a href="add_contact.php">Add contacts</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="add_event.php">Add events</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>

<section id="container">
  <div class="container">
    <h2>Event added!</h2>
  </div>
</section>

<section id="table">
<div class="row">
  <div class="col-xs-12 col-lg-offset-4 col-md-8 col-sm-12">
    <div class="row">
<table class="table">
  <tr>
    <th>Name:</th>
    <td><?php echo $_POST["ename"]; ?></td>
  </tr>
  <tr>
    <th>Surname:</th>
    <td><?php echo $_POST["contact_email"]; ?></td>
  </tr>
  <tr>
    <th>Birthday:</th>
    <td><?php echo $_POST["s_date"]; ?></td>
  </tr>
  <tr>
    <th>Address 1:</th>
    <td><?php echo $_POST["address_1"]; ?></td>
  </tr>
  <tr>
    <th>Address 2:</th>
    <td><?php echo $_POST["address_2"]; ?></td>
  </tr>
  <tr>
    <th>City:</th>
    <td><?php echo $_REQUEST["city"]; ?></td>
  </tr>
  <tr>
    <th>Region:</th>
    <td><?php echo $_POST["region"]; ?></td>
  </tr>
  <tr>
    <th>Zip:</th>
    <td><?php echo $_POST["zip"]; ?></td>
  </tr>
  <tr>
    <th>Country:</th>
    <td><?php echo $_POST["country"]; ?></td>
  </tr>
  <tr>
    <th>Facebook:</th>
    <td><?php echo $_POST["description"]; ?></td>
  </tr>
  <tr>
    <th>Twitter:</th>
    <td><?php echo $_POST["phone_nr"]; ?></td>
  </tr>
</table>
</div>
</div>
</div>
</section>
<div class="container">
    <div class="footer_bottom"> <span>Contactify - Naloga 3 pri predmetu DSR 2016 | <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste </span> </div>
    <!-- 
        All links in the footer should remain intact. 
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Butterfly
    -->
  </div>
</footer>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script> 
<!--<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
    section.className = 'wow shake';
    section.className = 'wow zoomIn';
    section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script> -->
<script type="text/javascript">
  $(window).load(function(){
    
    $('a').bind('click',function(event){
      var $anchor = $(this);
      
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 91
      }, 1500,'easeInOutExpo');
      /*
      if you don't want to use the easing effects:
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 1000);
      */
      event.preventDefault();
    });
  })
</script> 

<!--<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
      
            filter: selector,
         });
         return false;
    });
  
});

</script>


--> 

<script type="text/javascript">

   
  jQuery(document).ready(function($){     
// Portfolio Isotope
  var container = $('#portfolio-wrap'); 
  

  container.isotope({
    animationEngine : 'best-available',
      animationOptions: {
        duration: 200,
        queue: false
      },
    layoutMode: 'fitRows'
  }); 

  $('#filters a').click(function(){
    $('#filters a').removeClass('active');
    $(this).addClass('active');
    var selector = $(this).attr('data-filter');
      container.isotope({ filter: selector });
        setProjects();    
      return false;
  });
    
    
    function splitColumns() { 
      var winWidth = $(window).width(), 
        columnNumb = 1;
      
      
      if (winWidth > 1024) {
        columnNumb = 4;
      } else if (winWidth > 900) {
        columnNumb = 2;
      } else if (winWidth > 479) {
        columnNumb = 2;
      } else if (winWidth < 479) {
        columnNumb = 1;
      }
      
      return columnNumb;
    }   
    
    function setColumns() { 
      var winWidth = $(window).width(), 
        columnNumb = splitColumns(), 
        postWidth = Math.floor(winWidth / columnNumb);
      
      container.find('.portfolio-item').each(function () { 
        $(this).css( { 
          width : postWidth + 'px' 
        });
      });
    }   
    
    function setProjects() { 
      setColumns();
      container.isotope('reLayout');
    }   
    
    container.imagesLoaded(function () { 
      setColumns();
    });
    
  
    $(window).bind('resize', function () { 
      setProjects();      
    });

});
$( window ).load(function() {
  jQuery('#all').click();
  return false;
});
</script>
<script src="js/validator.js"></script>


</body>
</html>

