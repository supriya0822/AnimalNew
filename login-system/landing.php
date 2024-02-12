<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  scroll-behavior: smooth;
}

/* Custom Scroll Bar CSS */
::-webkit-scrollbar {
    width: 10px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: #6e93f7;
    border-radius: 12px;
    transition: all 0.3s ease;
}

::-webkit-scrollbar-thumb:hover {
    background: #4070f4;
}
/* navbar styling */
nav{
  position: fixed;
  width: 100%;
  padding: 20px 0;
  z-index: 998;
  transition:  0.3s ease;
  font-family: 'Ubuntu', sans-serif;
}
nav.sticky{
  background: #4070f4;
  padding: 13px 0;
}
nav .navbar{
  width: 90%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: auto;
}
nav .navbar .logo a{
  font-weight: 500;
  font-size: 35px;
  color: #4070f4;
}
nav.sticky .navbar .logo a{
  color: #fff;
}
nav .navbar .menu{
  display: flex;
  position: relative;
}
nav .navbar .menu li{
  list-style: none;
  margin: 0 8px;
}
.navbar .menu a{
  font-size: 18px;
  font-weight: 500;
  color: #0E2431;
  padding: 6px 0;
  transition: all 0.4s ease;
}
.navbar .menu a:hover{
  color: #4070f4;
}
nav.sticky .menu a{
  color: #FFF;
}
nav.sticky .menu a:hover{
  color: #0E2431;
}
.navbar .media-icons a{
  color: #4070f4;
  font-size: 18px;
  margin: 0 6px;
}
nav.sticky .media-icons a{
  color: #FFF;
}

/* Side Navigation Menu Button CSS */
nav .menu-btn,
.navbar .menu .cancel-btn{
  position: absolute;
  color: #fff;
  right: 30px;
  top: 20px;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: none;
}
nav .menu-btn{
  color: #4070f4;
}
nav.sticky .menu-btn{
  color: #FFF;
}
.navbar .menu .menu-btn{
  color: #fff;
}

/* home section styling */
.home{
  height: 100vh;
  width: 100%;
  background: url("https://wallpapercave.com/wp/wp2432507.jpg") no-repeat;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  font-family: 'Ubuntu', sans-serif;
}
.home .home-content{
  width: 90%;
  height: 100%;
  margin: auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
/* Define a keyframe animation for text-one */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Apply the animation to text-one */
.home .text-one {
  font-size: 40px;
  color: black;
  animation: fadeIn 1s ease-in-out;
  animation-fill-mode: forwards;
}

/* Define a keyframe animation for text-two */
@keyframes slideIn {
  from {
    transform: translateX(-50px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

/* Apply the animation to text-two */
.home .text-two {
  color: #0E2431;
  font-size: 75px;
  font-weight: 600;
  margin-left: -3px;
  animation: slideIn 1s ease-in-out;
  animation-fill-mode: forwards;
}

/* You can define animations for text-three and text-four similarly */

/* Example for text-three */
@keyframes rotateIn {
  from {
    transform: rotate(-20deg);
    opacity: 0;
  }
  to {
    transform: rotate(0);
    opacity: 1;
  }
}

.home .text-three {
  font-size: 40px;
  margin: 5px 0;
  color: #4070f4;
  animation: rotateIn 1s ease-in-out;
  animation-fill-mode: forwards;
}

/* Example for text-four */
@keyframes scaleIn {
  from {
    transform: scale(0.8);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

.home .text-four {
  color: #0E2431;
  font-size: 75px;
  font-weight: 600;
  margin-left: -3px;
  animation: slideIn 1s ease-in-out;
  animation-fill-mode: forwards;
}

.home .button{
  margin: 14px 0;
}
.home .button button{
  outline: none;
  padding: 8px 16px;
  border-radius: 6px;
  font-size: 25px;
  font-weight: 400;
  background: #4070f4;
  color: #fff;
  cursor: pointer;
  border: 2px solid transparent;
  transition: all 0.4s ease;
}
.home .button button:hover{
  border-color: #161a24;
  background-color: #fff;
  color: #4070f4;
}

.dropbtn {
  background-color:  #c3bae6;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius:6px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: baby pink;
}
.logout{
  left: 250%;
  position: absolute;
}

	</style>
	
<div class="scroll-button">
      <!-- <a href="#home"><i class="fas fa-arrow-up"></i></a> -->
    </div>
    <!-- navgaition menu -->
    <nav>
      <div class="navbar">
        
        <ul class="menu">
          <li><a href="home.html">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="pet.html">Pet Care </a></li>
          <li><a href="donation.html">Donation</a></li>
          <li><a href="action.php">Contact Us</a></li>
          <i class="fa fa-sign-out" aria-hidden="true"></i>
          <div class="logout">
          <div class="dropdown">
         <button class="dropbtn"> <a href="login.php" class="dropbtn">LOGIN</a></button>
</div>
        
</div>
</div>
        </ul>
      </div>
    </nav>
    <section class="home" id="home">
      <div class="home-content">
        <div class="text">
          <div class="text-one">Welcome To</div>
          <div class="text-two">Barks</div>
          <div class="text-three">And</div>
          <div class="text-four">Meows Paradise</div>
          
	<br>
	Hello, <?php echo $user_data['user_name']; ?>
          
</section>
<footer>
      <p>&copy; 2024 Animal Welfare. All rights reserved.</p>
      <p>Contact: <a href="mailto:info@mywebsite.com">animalwelfare91@gmail.com</a></p>
  </footer>
</body>
</html>