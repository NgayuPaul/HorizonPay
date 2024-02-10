<?php
     require_once "index.php";
?>
<?php
     require_once "assets/header.php";
?>


<section>
<!-- First article Sectioned holding the Text class="text" and img class="imga" you can rename it onces seen-->
<article id="Sectioned">
  <div class="text">
   <p class="Help">Help & Support</p>
   <h1 class="Contact">Contact Us</h1>
   <p class="Purple">Purple connect (24 hrs contact center)</p>
  </div>
  <!-- class="imga" holds the images -->
  <div class="imga">
    <img src="assets/Images/BBB.jpg" alt=""/>
  </div>
  </article>
<!-- Second aside Sections holds the class="Forms" and class="imgs" -->
<aside id="Sections">
 <div class="forms">
     <form action="">
         <h2 class="CU">Contact Us</h2>
         <p class="FN">First Name</p>
           <input type="text" placeholder="Your first name" title="please fill out this field." id="">
         <p class="LN">Last Name</p>
           <input type="text" placeholder="Your last name" title="please fill out this field." id="">
         <p class="EA">Email address</p>
           <input type="text" placeholder="example@email.com" title="please fill out this field." id="">
         <p class="PN">Phone Number</p>
           <input type="text" placeholder="08012345678" title="please fill out this field." id="">
         <p class="SB">Subject</p>
           <input type="text" placeholder="Complaint" title="please fill out this field." id="">
         <p class="DP">Department</p>
           <input type="text" placeholder="Customer Care" title="please fill out this field." id="">
         <p class="MSG">Message</p>
           <textarea placeholder="Type your message" name="" id="" cols="40" rows="8" title="please fill out this field."></textarea>
         <h3 class="SEND">Send</h3>
     </form>
 </div>
<!-- class="imgs" holds all the image icon and the span for text beside it incase of styling -->
 <div class="imgs"> 
        <img src="assets/Images/Email.png" alt="" /><span class="hlp">Help Desk</span>
        <img src="assets/Images/phone.png" alt="" /><span class="num">+234-803-900-3700</span>
        <img src="assets/Images/phone.png" alt="" /><span class="nom">+234-01-277-7700-9</span>
        <img src="assets/Images/phone.png" alt="" /><span class="nuom">07000PURPLE (07000787753)</span>
        <img src="assets/Images/Email.png" alt="" /><span class="plc">PURPLECONNECT@HORIZONPAY.COM</span>
        <img src="assets/Images/Email.png" alt="" /><span class="cwu">CHAT WITH US ON WHATSAPP - 09044411010</span>
 </div>
</aside>
</section>