<?php
include('header.php');
?>
    <div id="welcomeModal" class="modal">
  <div class="modal-content">
    <p>Just because you don't get fancy commissions for paintings, have published works, or consider yourself a professional actor doesn't mean we'll allow you to sell yourself short. If you want to access our support services and resources specifically for creatives you'll need to apply as a Creative Member by clicking here.</p>
    <button id="closeModal">OK</button>
    <a href="index2.php">Go Back</a>

  </div>
</div>
       <div class="background-container-wideawake">
        <div class="centered-text-image" id="scroll_to_top">
            <h1>Friends Member</h1>
        </div>
    </div>
	
	 <section class="step-wizard">
        <ul class="step-wizard-list">
            <li id="progress_1" class="step-wizard-item current-item">
                <span class="progress-count">1</span>
                <span class="progress-label">Who you are</span>
            </li>
            <li id="progress_2" class="step-wizard-item">
                <span class="progress-count">2</span>
                <span class="progress-label">Contact</span>
            </li>
            <li id="progress_3" class="step-wizard-item">
                <span class="progress-count">3</span>
                <span class="progress-label">What you do</span>
            </li>
            
        </ul>
    </section>
<div class="navbar" style=" display:none;">
        <div id="who-you-are-nav" class="active">Who you are</div>
        <div id="contact-nav">Contact</div>
        <div id="what-you-do-nav">What you do</div>
    </div>
    <!-- <div id="numberedList">
  <ol>
    <li class="active">1</li>
    <li>2</li>
    <li>3</li>
  </ol>
</div> -->
<div class="formbold-main-wrapper">

  <div class="formbold-form-wrapper">

    <form action="function.php" method="POST" id="form_id">
    <div id="who-are-you-section">
      <div class="formbold-form-title" style="text-align: center;">
        <h2 class="">Who you are</h2>
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
        
        <div>
          <label for="first_name" class="formbold-form-label"> First name </label>
          <input
            type="text"
            name="first_name"
            id="first_name"
            class="formbold-form-input mb-3"
            placeholder="as it appears on official identification" required
          />
        </div>
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
        
        <div>
          <label for="last_name" class="formbold-form-label"> Last name </label>
          <input
            type="text"
            name="last_name"
            id="last_name"
            class="formbold-form-input mb-3"
            placeholder="as it appears on official identification" required
          />
        </div>
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
        <label for="stage_name" class="formbold-form-label">
        What you like to be called 
        </label>
        <input
          type="text"
          name="stage_name"
          id="stage_name"
          class="formbold-form-input"
          placeholder="stage name"
        />
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
  <label for="dob" class="formbold-form-label">
    Date of birth
  </label>
  <input
    type="date"
    name="dob"
    id="dob"
    class="formbold-form-input"
    required
  />
</div>

<div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
    <div>
        <label for="country" class="formbold-form-label">Country you currently live/ work/ study in </label>
        <select name="country" id="country" class="formbold-form-input" required>
            <option value="">select country</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Bahamas">Bahamas</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Argentina">Argentina</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Belgium">Belgium</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Brazil">Brazil</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="British Virgin Islands">British Virgin Islands</option>
            <option value="Brunei">Brunei</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Canada">Canada</option>
            <option value="Cayman">Cayman</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Colombia">Colombia</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Cabo Verde">Cabo Verde</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Côte d’Ivoire">Côte d’Ivoire</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Denmark">Denmark</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Egypt">Egypt</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Estonia">Estonia</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Greece">Greece</option>
            <option value="Georgia">Georgia</option>
            <option value="Ghana">Ghana</option>
            <option value="Grenada">Grenada</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-Bissau">Guinea-Bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Kosovo">Kosovo</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libya">Libya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Mexico">Mexico</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Netherlands Antilles">Netherlands Antilles</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nigeria">Nigeria</option>
            <option value="North Korea">North Korea</option>
            <option value="Norway">Norway</option>
            <option value="Palestine">Palestine</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Romania">Romania</option>
            <option value="Russia">Russia</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Singapore">Singapore</option>
            <option value="South Africa">South Africa</option>
            <option value="South Korea">South Korea</option>
            <option value="Spain">Spain</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Thailand">Thailand</option>
            <option value="Turkey">Turkey</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United States">United States</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Vietnam</option>
        </select>
    </div>
</div>
<div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
    <div>
        <label for="nationality" class="formbold-form-label">Primary nationality</label>
        <select name="nationality" id="nationality" class="formbold-form-input" required>
            <option value="">select nationality</option>
            <option value="Cayman">Cayman</option>
            <option value="Bahamas">Bahamas</option>
            <option value="UK">UK</option>
            <option value="Afghan">Afghan</option>
            <option value="Albanian">Albanian</option>
            <option value="Algerian">Algerian</option>
            <option value="Anguillian">Anguillian</option>
            <option value="Argentinian">Argentinian</option>
            <option value="Australian">Australian</option>
            <option value="Austrian">Austrian</option>
            <option value="Andorran">Andorran</option>
            <option value="Angolan">Angolan</option>
            <option value="Antiguan, Barbudan">Antiguan, Barbudan</option>
            <option value="Armenian">Armenian</option>
            <option value="Aruban">Aruban</option>
            <option value="Azerbaijani">Azerbaijani</option>
            <option value="Bangladeshi">Bangladeshi</option>
            <option value="Belgian">Belgian</option>
            <option value="Brazilian">Brazilian</option>
            <option value="Bahraini">Bahraini</option>
            <option value="Barbadian">Barbadian</option>
            <option value="Belarusian">Belarusian</option>
            <option value="Belizean">Belizean</option>
            <option value="Beninese">Beninese</option>
            <option value="Bhutanese">Bhutanese</option>
            <option value="Bolivian">Bolivian</option>
            <option value="Bosnian, Herzegovinian">Bosnian, Herzegovinian</option>
            <option value="Botswana">Botswana</option>
            <option value="British Virgin Islander">British Virgin Islander</option>
            <option value="Bruneian">Bruneian</option>
            <option value="Bulgarian">Bulgarian</option>
            <option value="Burkinabe">Burkinabe</option>
            <option value="Burundian">Burundian</option>
            <option value="Canadian">Canadian</option>
            <option value="Chilean">Chilean</option>
            <option value="Chinese">Chinese</option>
            <option value="Colombian">Colombian</option>
            <option value="Croatian">Croatian</option>
            <option value="Cuban">Cuban</option>
            <option value="Czech">Czech</option>
            <option value="Cape Verdean">Cape Verdean</option>
            <option value="Cambodian">Cambodian</option>
            <option value="Cameroonian">Cameroonian</option>
            <option value="Central African">Central African</option>
            <option value="Chadian">Chadian</option>
            <option value="Comorian">Comorian</option>
            <option value="Congolese">Congolese</option>
            <option value="Costa Rican">Costa Rican</option>
            <option value="Danish">Danish</option>
            <option value="Dominican">Dominican</option>
            <option value="Dominican">Dominican</option>
            <option value="Egyptian">Egyptian</option>
            <option value="Ethiopian">Ethiopian</option>
            <option value="Finnish">Finnish</option>
            <option value="French">French</option>
            <option value="German">German</option>
            <option value="Greek">Greek</option>
            <option value="Gabonese">Gabonese</option>
            <option value="Gambian">Gambian</option>
            <option value="Georgian">Georgian</option>
            <option value="Ghanaian">Ghanaian</option>
            <option value="Grenadian">Grenadian</option>
            <option value="Guatemalan">Guatemalan</option>
            <option value="Guinean">Guinean</option>
            <option value="Bissau-Guinean">Bissau-Guinean</option>
            <option value="Guyanese">Guyanese</option>
            <option value="Haitian">Haitian</option>
            <option value="Honduran">Honduran</option>
            <option value="Hungarian">Hungarian</option>
            <option value="Icelander">Icelander</option>
            <option value="Indian">Indian</option>
            <option value="Indonesian">Indonesian</option>
            <option value="Iranian">Iranian</option>
            <option value="Iraqi">Iraqi</option>
            <option value="Irish">Irish</option>
            <option value="Italian">Italian</option>
            <option value="Jamaican">Jamaican</option>
            <option value="Japanese">Japanese</option>
            <option value="Jordanian">Jordanian</option>
            <option value="Kenyan">Kenyan</option>
            <option value="Liberian">Liberian</option>
            <option value="Latvian">Latvian</option>
            <option value="Lebanese">Lebanese</option>
            <option value="Libyan">Libyan</option>
            <option value="Liechtensteiner">Liechtensteiner</option>
            <option value="Lithuanian">Lithuanian</option>
            <option value="Luxembourger">Luxembourger</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Mexican">Mexican</option>
            <option value="Montserratian">Montserratian</option>
            <option value="Moroccan">Moroccan</option>
            <option value="Dutch">Dutch</option>
            <option value="Dutch (Netherlands Antilles)">Dutch (Netherlands Antilles)</option>
            <option value="New Zealander">New Zealander</option>
            <option value="Nigerian">Nigerian</option>
            <option value="North Korean">North Korean</option>
            <option value="Norwegian">Norwegian</option>
            <option value="Palestinian">Palestinian</option>
            <option value="Pakistani">Pakistani</option>
            <option value="Peruvian">Peruvian</option>
            <option value="Filipino">Filipino</option>
            <option value="Polish">Polish</option>
            <option value="Portuguese">Portuguese</option>
            <option value="Puerto Rican">Puerto Rican</option>
            <option value="Romanian">Romanian</option>
            <option value="Russian">Russian</option>
            <option value="Saudi">Saudi</option>
            <option value="Singaporean">Singaporean</option>
            <option value="South African">South African</option>
            <option value="South Korean">South Korean</option>
            <option value="Spanish">Spanish</option>
            <option value="Swedish">Swedish</option>
            <option value="Swiss">Swiss</option>
            <option value="Thai">Thai</option>
            <option value="Turkish">Turkish</option>
            <option value="Ukrainian">Ukrainian</option>
            <option value="Emirati">Emirati</option>
            <option value="British">British</option>
            <option value="American">American</option>
            <option value="Venezuelan">Venezuelan</option>
            <option value="Vietnamese">Vietnamese</option>
        </select>
    </div>
</div>

<div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
    <div>
        <label for="other-nationality-1" class="formbold-form-label">Other nationality</label>
        <input name="other-nationality-1" id="other-nationality-1" class="formbold-form-input"placeholder="enter other nationality"/>
            
    </div>
</div>
<div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
    <div>
        <label for="other-nationality-2" class="formbold-form-label">Other nationality</label>
        <input name="other-nationality-2" id="other-nationality-2" class="formbold-form-input" placeholder="enter other nationality"/>
             
    </div>
</div>
<div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
    <div>
        <label for="other-nationality-3" class="formbold-form-label">Other nationality</label>
        <input name="other-nationality-3" id="other-nationality-3" class="formbold-form-input" placeholder="enter other nationality"/>
            
    </div>
</div>
    </div>
    <div id="contact-section">
</div>
    <div id="what-you-do-section">
    </div>
    <span class="error"></span>
    <br>
    <button type="button" id="continue-button" class="formbold-btn">Continue</button>
    <button type="submit" id="submit-button" class="formbold-btn submit-button-hide">Submit</button>
    </form>
  </div>
</div>

<script>
  
// function updateNumberedListActiveClass() {

//     var listItems = document.querySelectorAll('#numberedList ol li');
//     var activeNav = document.querySelector('.navbar .active');

//     listItems.forEach(function(item) {
//         item.classList.remove('active');
//     });

//     if (activeNav.id === 'who-you-are-nav') {
//         listItems[0].classList.add('active'); 
//     } else if (activeNav.id === 'contact-nav') {
//         listItems[1].classList.add('active'); 
//     }else{
//       listItems[2].classList.add('active'); 


//     } 
// }
    function wordCountValidator(textarea, maxWords) {
        let words = textarea.value.split(/\s+/);
        if (words.length > maxWords) {
            // Truncate the array to the maximum number of words
            words = words.slice(0, maxWords);
            // Update the textarea's value
            textarea.value = words.join(" ");
        }
    }

    
        $(document).ready(function() {
 

   function form1(){
      var first_name = $("#first_name").val();
       var last_name = $("#last_name").val();
      var stage_name = $("#stage_name").val();
      var dob = $("#dob").val();
      var country = $("#country").val();
      var nationality = $("#nationality").val();
      if(first_name==""){
        

        $(".error").text("Please Enter Your First Name");
      }else if(last_name==""){
        

        $(".error").text("Please Enter Your Last Name");
      }else if(stage_name==""){

        $(".error").text("Please Enter Your Stage name");
      }else if(dob==""){

        $(".error").text("Please Select Your Date of Birth");
      }else if(country==""){

        $(".error").text("Please Enter Country");
      }else if(nationality==""){

        $(".error").text("Please Enter Nationality");
      }else{
        $(".error").text("");

        var dobDate = new Date(dob);        
        var currentDate = new Date();      
        var age = currentDate.getFullYear() - dobDate.getFullYear();
        if (age >= 14) {

          $.ajax({
                type: 'POST',
                url: 'form3.php',
                data: '',
                success: function(html) {
                  $("#who-you-are-nav").removeClass("active");
                  $("#who-you-are-nav").addClass("active-bar");
                  $("#contact-nav").addClass("active");

                  $("#who-are-you-section").hide();
                  $("#contact-section").show();

                    $("#contact-section").html(html);
                    // updateNumberedListActiveClass();
                }
            });
			
			document.querySelector('#scroll_to_top').scrollIntoView({ behavior: 'smooth' });
			$(".step-wizard-item").removeClass("current-item");
			$("#progress_2").addClass("current-item");

        }else {           
          $(".error").text("User must be 14+ years old.")
        }
		  
        
      }

    }

    function form2(){
      var email = $("#email").val();
      var address = $("#address").val();
      var number = $("#number").val();
      // var sm_handles = $("#sm_handles").val();
      // var website = $("#website").val();
      // var form='form2.php';
      // if(sm_handles=="" && website==""){
      // var form='form4.php';
      // }
      if(email==""){
        
        $(".error").text("Please Enter Your Email");
      }else if(address==""){

        $(".error").text("Please Enter Your Address");
      }else if(number==""){

        $(".error").text("Please Enter Your Number");
      }else{
        $(".error").text("");

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {
            $(".error").text("Please Enter a Valid Email Address");
        } else{

        $.ajax({
              type: 'POST',
              url: 'form4.php',
              data: '',
              success: function(html) {
                $("#contact-nav").removeClass("active");
                $("#contact-nav").addClass("active-bar");
                $("#what-you-do-nav").addClass("active");
                
                $("#continue-button").addClass("continue-button-hide");
                $("#submit-button").removeClass("submit-button-hide");

                $("#what-you-do-section").show();
                $("#contact-section").hide();

                  $("#what-you-do-section").html(html);
                  // updateNumberedListActiveClass();
              }
          });
		  
		  document.querySelector('#scroll_to_top').scrollIntoView({ behavior: 'smooth' });
		  $(".step-wizard-item").removeClass("current-item");
			$("#progress_3").addClass("current-item");
		  
        }
		  
      }
    }
    function form3(){
      var question_6 = $("#question_6").val();
      var question_7 = $("#question_7").val();
      var question_8 = $("#question_8").val();
      if(question_6==""){
        $(".error").text("Please Select an Option");
      }else if(question_7==""){

        $(".error").text("Please Answer The Question");
      }else if(question_8==""){

        $(".error").text("Please Select an Option");
      }else{  
        $(".error").text("");
		document.querySelector('#scroll_to_top').scrollIntoView({ behavior: 'smooth' });
      }
    }
    $("#continue-button").on("click", function() {
     
      if ($('#who-you-are-nav').hasClass('active')) {
        form1();
      }else if($('#contact-nav').hasClass('active')){
        form2();
      }else{
        form3();

      }
    });
});

function goBack() {
  // Check which section is currently active and switch to the previous section
  if ($('#contact-nav').hasClass('active')) {
    $("#contact-nav").removeClass("active");
    $("#contact-nav").removeClass("active-bar");
    $("#who-you-are-nav").addClass("active");
    $("#contact-section").hide();
    $("#who-are-you-section").show();
  } else if ($('#what-you-do-nav').hasClass('active')) {
    $("#what-you-do-nav").removeClass("active");
    $("#contact-nav").removeClass("active-bar");
    $("#contact-nav").addClass("active");
    $("#what-you-do-section").hide();
    $("#contact-section").show();
    $("#continue-button").removeClass("continue-button-hide");
    $("#submit-button").addClass("submit-button-hide");
  }
  // updateNumberedListActiveClass();
}

$(document).on('click', '#back-button-contact, #back-button-what', function() {
  goBack();
});
$(document).ready(function() {
  // Show the modal on page load
  $("#welcomeModal").show();

  // When the user clicks on the "OK" button, close the modal
  $("#closeModal").click(function() {
    $("#welcomeModal").hide();
  });

});
</script>
<?php
include('footer.php');
?>
