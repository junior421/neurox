<!DOCTYPE html>
<html>
<?php include('templates/header.php')?>
<br>
<section class="container grey-text">
   <h4 class="center">Enquire</h4>
      <form class="white" action="contact.php" method="Post">
        <br>
        <label for="first_name">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="last_namename">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.."> 
       <label for="subject">Subject</label>
       <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
       <input type="submit" value="Submit" class="btn brand z-depth-0">

      </form>
</section>

<?php include('templates/footer.php')?>

</html>