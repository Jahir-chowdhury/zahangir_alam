<!DOCTYPE html>
<html>
<head>
  <title>Jahir Chowdhury</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<link rel="stylesheet" href="./public/css/main.css">
<link rel="stylesheet" href="./public/css/picture.css">
<!-- video css -->
<link rel="stylesheet" type="text/css" href="./public/css/video-styles.css">
</head>
<body>
<div id="vue-wrapper">
  <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
    <nav class="navbar navbar-expand-md bg-light navbar-light">
      <div class="tab">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" style="width: 95%;" onclick="w3_close()">Close &times;</button>
        <div class="logo-wrapper sn-ad-avatar-wrapper">
          <center><img src="./public/images/meyor3.jpg"class="rounded-circle responsive" style="height:100px;margin:5px;"></a></center>
        </div>
        <button class="tablinks" onclick="openCity(event, 'biography')" id="defaultOpen"><span class="glyphicon glyphicon-user">Biography</span></button>
        <button class="tablinks" onclick="openCity(event, 'picture')"><span class="glyphicon glyphicon-picture">Picture</span></button>
        <button class="tablinks" onclick="openCity(event, 'video')"><span class="glyphicon glyphicon-film">Video</span></button>
        <button class="tablinks" onclick="openCity(event, 'news')"><span class="glyphicon glyphicon-list-alt">News</span></button>
        <button class="tablinks" onclick="openCity(event, 'foundation')"><span class="glyphicon glyphicon-education">Foundation</span></button>
        <button class="tablinks" onclick="openCity(event, 'achivment')"><span class="glyphicon glyphicon-glass">Achivment</span></button>
        <button class="tablinks" onclick="openCity(event, 'quotes')"><span class="glyphicon glyphicon-pencil">Quotes</span></button>
        <button class="tablinks" onclick="openCity(event, 'contact')"><i class="fa fa-fw fa-envelope"></i><span>Contact</span></button>
      </div> 
    </nav>
  </div>


  <div class="w3-main" style="margin-left:200px">
    <div class="content">
      <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
      <div class="w3-container">
<!-- Biography Tab -->
@include('tab.biography')
<!-- //picture Tab -->
@include('tab.picture')
<!-- //video Tab -->
@include('tab.video')
<!-- //news Tab -->
@include('tab.news')
<!-- //video Tab -->
@include('tab.foundation')
<!-- //achivment Tab -->
@include('tab.achivment')
<!-- //quotes Tab -->
@include('tab.quotes')
<!-- //contact Tab -->
@include('tab.contact')

      </div>
    </div>

    <div class="footer">
      <footer>
        <div class="copyright">
          <center><p>Copyright @  (All Rights Reverved) & Developed by Jahir Chowdhury</p></center>
          <center><p>Contact information: <a href="mailto:chowdhuryj585@gmail.com">
          chowdhuryj585@gmail.com</a>.</p></center>
        </div> 
      </footer>
    </div>
  </div>
</div>
  
  <script type="text/javascript" src="./public/js/app.js"></script>
<!--sidebar js-->
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
<!--tab js-->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
</body>
</html>
