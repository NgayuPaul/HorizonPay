<?php
     require_once "index.php";
?>
<?php
     require_once "assets/header.php";
?>


<section>
<!-- First div Section1 holding the Text class="text1" and img class="img2" you can rename it onces seen-->
<div id="Section1">
  <div class="text1">
   <p class="Help">Help & Support</p>
   <h1 class="Contact">Contact Us</h1>
   <p class="Purple">Purple connect (24 hrs contact center)</p>
  </div>
  <!-- class="img2" holds the images -->
  <div class="img2">
    <img src="assets/Images/BBB.jpg" alt=""/>
  </div>
  </div>
<!-- Second div Section2 holds the class="3Form" and class="4img" img -->
<div id="Section2">
<div class="3form">
     <form action="">
         <h2 class="CU">Contact Us</h2>
         <div class="FN">First Name</div>
           <input type="text" placeholder="Your first name" title="please fill out this field." id="">
         <div class="LN">Last Name</div>
           <input type="text" placeholder="Your last name" title="please fill out this field." id="">
         <div class="EA">Email address</div>
           <input type="text" placeholder="example@email.com" title="please fill out this field." id="">
         <div class="PN">Phone Number</div>
           <input type="text" placeholder="08012345678" title="please fill out this field." id="">
         <div class="SB">Subject</div>
           <input type="text" placeholder="Complaint" title="please fill out this field." id="">
         <div class="DP">Department</div>
           <input type="text" placeholder="Customer Care" title="please fill out this field." id="">
         <div class="MSG">Message</div>
           <textarea placeholder="Type your message" name="" id="" cols="40" rows="8" title="please fill out this field."></textarea>
         <div class="SEND">Send</div>
     </form>
</div>
<!-- class="4img" holds all the image icon and the span for text beside it incase of styling -->
<div class="4img"> 
        <img src="assets/Images/Email.png" alt="" /><span class="hlp">Help Desk</span>
        <img src="assets/Images/phone.png" alt="" /><span class="num">+234-803-900-3700</span>
        <img src="assets/Images/phone.png" alt="" /><span class="nom">+234-01-277-7700-9</span>
        <img src="assets/Images/phone.png" alt="" /><span class="nuom">07000PURPLE (07000787753)</span>
        <img src="assets/Images/Email.png" alt="" /><span class="plc">PURPLECONNECT@HORIZONPAY.COM</span>
        <img src="assets/Images/Email.png" alt="" /><span class="cwu">CHAT WITH US ON WHATSAPP - 09044411010</span>
</div>
</div>
</section>