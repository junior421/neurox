<!DOCTYPE html>
<html>
<?php include('templates/header.php')?>

       <br><br>

<style type="text/css">
  
  body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.h2,h3{
  color: grey;
}


.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>


<div class="about-section">
  <h2>About Us Page</h2>
  <p>Software and Cathedrals are much the same - first we build them, then we pray!</p>
  <p><strong class="brown">DONT PATCH BUGS OUT</strong>, rewrite them out!!</p>
</div>

<h2 style="text-align:center" class="white">Our Great Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/ceo.png" alt="Taurai" style="width:100%">
      <div class="container">
        <h3>Taurai Chiwawa</h3>
        <p class="title">CEO & Founder<p class="title">Full Stack Web Developer</p></p>
        <p>Its hard enough to find an error in your code when you're looking for it, its even harder when you've <strong>ASSUMED</strong> your code is <strong>ERROR-FREE</strong></p>
        <p>tauraishep@gmail.com</p>
          <p><a  href="contact.php"class="button">Contact</a></p>      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/brian.jpg" alt="Brian" style="width:60%">
      <div class="container">
        <h3>Brian Mugonda</h3>
        <p class="title">Front-end Developer</p>
        <p>Simple things should be simple and complex things should be possible The perfect project plan is possible if one first documents a list of all the unknowns.</p>
        <p>brianmugonda@gmail.com</p>
          <p><a  href="contact.php"class="button">Contact</a></p>      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/kuda.jpg" alt="kuda" style="width:60%">
      <div class="container">
        <h3>Kudakwashe Maramba</h3>
        <p class="title">Back-end Developer</p>
        <p>Adding manpower to a late software project makes it later and Dont test bugs out, DESIGN THEM OUT!!</p>
        <p>kudamaramba@gmail.com</p>
        <p><a  href="contact.php"class="button">Contact</a></p>
      </div>
    </div>
  </div>
</div>
       
   
<?php include('templates/footer.php')?>
</html>

