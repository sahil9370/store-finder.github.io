<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Mitr:wght@300&family=Permanent+Marker&display=swap" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store-Finder</title>
    <script>
        // JavaScript function to toggle visibility of more options
        function toggleMoreOptions() {
          var moreOptionsDropdown = document.getElementById("more-options-dropdown");
          moreOptionsDropdown.style.display = moreOptionsDropdown.style.display === "none" ? "block" : "none";
        }
      </script>
     <style>
      body{
        background-color: white;
      }
    /* Styles for navbar */
    .navbar {
      background-color:silver;
      height: 60px;
      display: flex;
      align-items: center;
      padding: 0 20px;
    }
    
    .logo {
      margin-right: auto;
    }
    
    .search-bar {
      border: 1px solid black;
      width: 30%;
      padding: 5px;
      border-radius: 15px;
      background: none;
      height: 25px;
    }
    .search-bar input{
        background: none;
        border: none;
        text-align: center;
        outline: none;
    }
    .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 60px; /* Height of the footer */
      background-color: silver;
      text-align: center;
      line-height: 10px;
    }
    
    .more-options {
      margin-left: auto;
      cursor: pointer;
    }
    .more-options-dropdown {
      position: absolute;
      top: 10%;
      right: 0;
      background-color: #f8f8f8;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;}
    .more-options-dropdown p a{
      font-family: 'Mitr', sans-serif;
        text-decoration: none;
        color: black;
    }
    h2{
      font-family: 'Alkatra', cursive;
        text-align: center;
        margin-top: 100px;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
    }
    
    .box {
      width: 200px;
      height: 80px;
      background-color: white;
      margin-top: 20px;
      box-shadow: 2px 2px 20px black;
      margin-left: 35px;
      border-radius: 15px;
    }
    .btn{
      margin-top: 9px;
      background: none;
      border: none;
      font-size: 20px;
      
    }
    .box:hover{
      background-color: #373736; 
    }

    .btn a{
      font-family: 'Mitr', sans-serif;
      text-decoration:dashed;
      color: black;
      margin-left: 20PX;
    }
    .main {

     margin: 2%;
    }

    .card {
width: 20%;
display: inline-block;
box-shadow: 2px 2px 20px black;
border-radius: 5px;
margin: 2%;

}

.image img {
width: 100%;
border-top-right-radius: 5px;
border-top-left-radius: 5px;
}

.title {
text-align: center;
padding: 10px;

}

h2 ,h1{
font-family: 'Alkatra', cursive;
text-align: center;
}

.des {
padding: 3px;
text-align: center;
padding-top: 10px;
border-bottom-right-radius: 5px;
border-bottom-left-radius: 5px;
}

button {
margin-top: 40px;
margin-bottom: 10px;
background-color: white;
border: 1px solid black;
border-radius: 5px;
padding: 10px;
}

button:hover {
background-color: black;
color: white;
transition: .5s;
cursor: pointer;
}
a{
text-decoration: none;
color: black;
}
  </style>
</head>
<body><nav>
    <div class="navbar">
    <div class="logo">
      <img src="search.png" alt="Logo" width="100" height="40">

    </div>
    <div class="search-bar">
        <input type="text" placeholder="Search...">
    </div>
    <div class="more-options" onclick="toggleMoreOptions()">
        <img src="more.png" alt="More Options" width="30" height="30">
      </div> 
      <div id="more-options-dropdown" class="more-options-dropdown">
        <!-- More options content... -->
        <p><a href="aboutus.html">About Us</a></p>
        <p><a href="contact.html">Contact us</a></p>
        <p><a href="services.html">Services</a></p>
        <p><a href="logout.php">logout</a></p>
      </div>
    </nav>
    <h2>Welcome to store finder!</h2>
    <div class="main">

      <!--cards -->

      <div class="card">

          <div class="image">
              <img
                  src="g1.jpg">
          </div>
          <div class="title">
              <h1><a href="grocery.html">Grocery Stores</a></h1>
          </div>
          
      </div>
      <!--cards -->


      <div class="card">

          <div class="image">
              <img src="h3.jpg">
          </div>
          <div class="title">
              <h1><a href="hardware.html">Hardware Stores</a></h1>
          </div>
          
      </div>
      <!--cards -->
      <div class="card">

          <div class="image">
              <img  src="m2.jpg">
          </div>
          <div class="title">
              <h1>
                  <a href="medical.html">Medical Stores</a></h1>
          </div>
          
      </div>
      <div class="card">

        <div class="image">
            <img  src="ms4.jpg">
        </div>
        <div class="title">
            <h1>
                <a href="mobile.html">Mobile Stores</a></h1>
        </div>
        
    </div>
      <!--cards -->
    </div>

  <footer class="footer">
    <p>This is the footer content.</p>
    <p>&copy; 2023 Your Website. All rights reserved.</p>
  </footer>

</body>
</html>