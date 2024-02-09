<?php
     require_once "index.php";
?>

<?php
echo '<section>
<!-- First div Section holding both the Text and the Image id="1" you can remove it onces seen, id="2" holds the text-->
<div id="1">
  <div id="2">
   <div>Help & Support</div>
   <div>Contact Us</div>
   <div>Purple connect (24 hrs contact center)</div>
  </div>
  <!-- id="3" holds the images -->
  <div id="3">
    <img src="assets/Images/BBB.jpg" alt=""/>
  </div>
</div>
<!-- Second div Section id="4" holds the Form -->
<div id="4">
     <form action="">
         <div>Contact Us</div>
         <div>First Name</div>
           <input type="text" placeholder="Your first name" title="please fill out this field." id="">
         <div>Last Name</div>
           <input type="text" placeholder="Your last name" title="please fill out this field." id="">
         <div>Email address</div>
           <input type="text" placeholder="example@email.com" title="please fill out this field." id="">
         <div>Phone Number</div>
           <input type="text" placeholder="08012345678" title="please fill out this field." id="">
         <div>Subject</div>
           <input type="text" placeholder="Complaint" title="please fill out this field." id="">
         <div>Department</div>
           <input type="text" placeholder="Customer Care" title="please fill out this field." id="">
         <div>Message</div>
           <textarea placeholder="Type your message" name="" id="" cols="40" rows="8" title="please fill out this field."></textarea>
         <div id="">Send</div>
     </form>
</div>
<!-- id="5" holds all the image icon and the span for text beside it incase of styling -->
<div id="5"> 
        <img src="assets/Images/Email.png" alt="" /><span id="">Help Desk</span>
        <img src="assets/Images/phone.png" alt="" /><span id="">+234-803-900-3700</span>
        <img src="assets/Images/phone.png" alt="" /><span id="">+234-01-277-7700-9</span>
        <img src="assets/Images/phone.png" alt="" /><span id="">07000PURPLE (07000787753)</span>
        <img src="assets/Images/Email.png" alt="" /><span id="">PURPLECONNECT@HORIZONPAY.COM</span>
        <img src="assets/Images/Email.png" alt="" /><span id="">CHAT WITH US ON WHATSAPP - 09044411010</span>
</div>
</section>';
?>

