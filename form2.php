<style>
  .options-container {

  padding-left: 20px;
  padding-bottom: 5px;
}

.options-container label {
  margin-left: 5px;
}

#options_toggle {
  display: none;
}

#options_toggle:checked + .options-container {
  display: block;
}

.options-container-2 {

  padding-left: 20px;
  padding-bottom: 5px;
}

.options-container-2 label {
  margin-left: 5px;
}

#options_toggle_2 {
  display: none;
}

#options_toggle_2:checked + .options-container-2 {
  display: block;
}

.options-container input[type="text"] {
      display: none;
    }

  </style>
<div class="formbold-form-title" style="text-align: center;">
        <h2 class="">What you do</h2>
        <!-- <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt.
        </p> -->
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
        
        <div>
          <label for="question_1" class="formbold-form-label"> Are you an Artist, Musician, Performer, or Other Creator/ Primary Medium? </label>
          <input
            type="text"
            name="question_1"
            id="question_1"
            class="formbold-form-input mb-3"
            placeholder="answer 1"
            required
          />
        </div>
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
        <label for="question_2" class="formbold-form-label">
        Other mediums? 
        </label>
        <input
          type="text"
          name="question_2"
          id="question_2"
          class="formbold-form-input"
          placeholder="answer 2"
          required
        />
      </div>


      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
    <div>
        <label for="file-upload" class="formbold-form-label">Attach images, documents, videos, sound recordings, samples, etc.</label>
        <input type="file"
          name="file-upload[]"
          id="file-upload"
          class="formbold-form-input"
          accept="image/*, video/*, audio/*, .pdf, .doc, .docx"
          multiple
        />
        <!-- <input type="file" name="file_attachment[]" multiple> -->
    </div>
</div>

<div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
    <div>
        <label for="question_3" class="formbold-form-label">Tell us about yourself and your work in 200 words or less.</label>
        <textarea
            name="question_3"
            id="question_3"
            class="formbold-form-input"
            placeholder="Max Words 200"
            rows="4" 
            oninput="wordCountValidator(this, 200)"
        ></textarea>
    </div>
</div>

<div class="formbold-form-title" style="border-top: 1px solid #d1d1d1; text-align: center;">
        <h2 style="margin-top: 20px">Your interests</h2>
        <!-- <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt.
        </p> -->
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
        
        <div>
          <label for="question_4" class="formbold-form-label">Why do you want to join Wide Awake? </label>
          <input
            type="text"
            name="question_4"
            id="question_4"
            class="formbold-form-input mb-3"
            placeholder="answer 1"
            required
          />
        </div>
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
        <label for="question_5" class="formbold-form-label">
        Do you think you can make a contribution to our community and how?
        </label>
        <input
          type="text"
          name="question_5"
          id="question_5"
          class="formbold-form-input"
          placeholder="answer 2"
          required
        />
      </div>

      <div class="formbold-form-title" style="border-top: 1px solid #d1d1d1; text-align: center;">
        <h2 style="margin-top: 20px">Profile</h2>
        <!-- <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt.
        </p> -->
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
  <div>
    <label class="formbold-form-label" for="options_toggle">Are You:</label>
    <input type="checkbox" id="options_toggle">
    <div class="options-container mb-3">
      <input type="checkbox" id="teacher" name="teacher" value="a teacher">
      <label for="teacher">a teacher?</label><br>
      
      <input type="checkbox" id="student" name="student" value="a student (specify which school?)">
      <label for="student">a student? (which school?)</label><br>
      <div id="schoolInput" class="options-container">
        <input type="text" id="schoolName" name="schoolName" class="formbold-form-input" placeholder="enter school name" style="padding: 5px !important;">
      </div>
      <input type="checkbox" id="caymanian" name="caymanian" value="Caymanian">
      <label for="caymanian">Caymanian?</label><br>
      
      <input type="checkbox" id="grand_cayman_resident" name="grand_cayman_resident" value="resident in Grand Cayman?">
      <label for="grand_cayman_resident">resident in Grand Cayman?</label><br>
      
      <input type="checkbox" id="brac_little_cayman_resident" name="brac_little_cayman_resident" value="resident in Cayman Brac or Little Cayman?">
      <label for="brac_little_cayman_resident">resident in Cayman Brac or Little Cayman?</label><br>
      
      <input type="checkbox" id="bahamian" name="bahamian" value="Bahamian?">
      <label for="bahamian">Bahamian?</label><br>
      
      <input type="checkbox" id="bahamas_resident" name="bahamas_resident" value="resident in the Bahamas?">
      <label for="bahamas_resident">resident in the Bahamas?</label><br>
      
      <input type="checkbox" id="hackney_tower_hamlets" name="hackney_tower_hamlets" value="live or work in Hackney/Tower Hamlets/Islington/City of London?">
      <label for="hackney_tower_hamlets">live or work in Hackney/Tower Hamlets/Islington/City of London?</label><br>
      
      <input type="checkbox" id="parcel_110" name="parcel_110" value="exhibited/ performed/ worked at Parcel 110?">
      <label for="parcel_110">exhibited/ performed/ worked at Parcel 110?</label><br>
      
      <input type="checkbox" id="st_georges_anglican_church" name="st_georges_anglican_church" value="a member of St. George’s Anglican church (Cayman)?">
      <label for="st_georges_anglican_church">A member of St. George’s Anglican church (Cayman)?</label><br>
      
      <input type="checkbox" id="bermuda_turks_caicos" name="bermuda_turks_caicos" value="from Bermuda/ Turks and Caicos/ Anguilla/ British Virgin Islands?">
      <label for="bermuda_turks_caicos">from Bermuda/ Turks and Caicos/ Anguilla/ British Virgin Islands?</label><br>
    </div>
  </div>
</div>
<input type="hidden" id="are_you" name="are_you">



      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
        <label for="question_6" class="formbold-form-label">
        How did you hear about Wide Awake?
        </label>
        <input
          type="text"
          name="question_6"
          id="question_6"
          class="formbold-form-input"
          placeholder="answer 2"
          required
        />
      </div>

      <div class="formbold-mb-3" style="border-top: 1px solid #d1d1d1;">
  <div>
    <input type="hidden" name="status" value="1">
    <label class="formbold-form-label" for="options_toggle_2">Have you attended our events?</label>
    <input type="checkbox" id="options_toggle_2">
    <div class="options-container-2 mb-3">
      <input type="checkbox" id="alumni" name="alumni" value="as alumni">
      <label for="alumni">as alumni</label><br>
      
      <input type="checkbox" id="participant" name="participant" value="as participant">
      <label for="participant">as participant</label><br>
      
      <input type="checkbox" id="guest" name="guest" value="as Guest">
      <label for="guest">as guest</label><br>
      
      <input type="checkbox" id="venue_hire" name="venue_hire" value="as venue hire">
      <label for="venue_hire">as venue hire</label><br>
    </div>
    <input type="hidden" id="events" name="events">
  </div>
</div>
<div class="mt-4">
<h1>* Privacy Notice</h1>
<p>Wide Awake Ltd. is committed to privacy and will use personal data for the purpose it was collected or other legitimate purposes we tell you about: for example, to provide information you have requested or to process your application. We may also analyse data we collect to better understand the people who support us or those who use or deliver our services. Sometimes this means us combining that data with information from reliable public sources. Our research allows us to tailor communications and services in a more focused and cost-effective way, as well as better meeting your needs and the needs of others like you. However, we will never do this in a way that intrudes on personal privacy and will not use your data for a purpose that conflicts with previously expressed privacy preferences. For full details about how we use personal data, our legal basis for doing so and your privacy rights, please see our <a href="https://wideawakecommunity.co.uk/global-privacy-policy/" target="_blank">Global Privacy Policy</a></p>
<p>By submitting this form, I consent to Wide Awake Ltd. storing and using my personal information in order to progress my application for membership and, if my application is successful, to administer my member’s record.<br> 
<div class="row">
<input type="checkbox" style="margin-left: 15px;" required>
<p style="margin-bottom: 0px; margin-left: 10px;">I have read the Privacy Policy</p><br>

</div><br>
<p>I agree that Wide Awake Ltd. may store my email address and use it for direct advertising and contact initiation in connection with the products and services offered by Wide Awake Ltd. I can revoke this consent at any time by emailing goodmorning@wideawakecommunity.org.
<div class="row">
<input type="checkbox" id='message-popup' style="margin-left: 15px;" required>
<p style="margin-bottom: 0px; margin-left: 10px;">I agree</p><br>

</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close" style="color: white; cursor: pointer;">&times;</span>
        <h2 class="text-center">Payment</h2>
        <p>Members are expected to make a small contribution in support of the community’s programs each year, however annual membership fees are currently waived for all new applicants. If you submit your application today, we can guarantee membership fees won’t become due for at least 12 months.</p>
    </div>
</div>

 <button type="button" id="back-button-what" class="formbold-btn back-button">Back</button>
 <script>
 document.addEventListener('DOMContentLoaded', function() {
  var labels = document.querySelectorAll('.formbold-form-label');
  labels.forEach(function(label) {
    label.addEventListener('click', function() {
      var checkbox = label.nextElementSibling;
      if (checkbox && checkbox.type === 'checkbox') {
        checkbox.checked = !checkbox.checked;
      }
    });
  });
});

const studentCheckbox = document.getElementById('student');
  const schoolInput = document.getElementById('schoolInput');
  const schoolName = document.getElementById('schoolName');

  studentCheckbox.addEventListener('change', function() {
    if (this.checked) {
      schoolInput.style.display = 'block';
      schoolName.style.display = 'block';
    } else {
      schoolInput.style.display = 'none';
      schoolName.style.display = 'none';
    }
  });

  var modal = document.getElementById("myModal");

var message_checkbox = document.getElementById("message-popup");

message_checkbox.onclick = function() {
    if (message_checkbox.checked) {
        modal.style.display = "block";
    } else {
        modal.style.display = "none";
    }
}

document.getElementsByClassName("close")[0].onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

    // Function to update the hidden input value
    function updateHiddenInput2() {
        // Get all checked checkboxes
        var checkboxes = document.querySelectorAll('.options-container input[type="checkbox"]:checked');
        // Get the values of checked checkboxes
        var values = Array.from(checkboxes).map(function(checkbox) {
            return checkbox.value;
        });
        // Set the value of the hidden input to the concatenated values
        document.getElementById('are_you').value = values.join(',');
    }

    // Add event listeners to checkboxes
    var checkboxes2 = document.querySelectorAll('.options-container input[type="checkbox"]');
    checkboxes2.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            updateHiddenInput2();
        });
    });


function updateHiddenInput() {
        // Get all checked checkboxes
        var checkboxes = document.querySelectorAll('.options-container-2 input[type="checkbox"]:checked');
        // Get the values of checked checkboxes
        var values = Array.from(checkboxes).map(function(checkbox) {
            return checkbox.value;
        });
        // Set the value of the hidden input to the concatenated values
        document.getElementById('events').value = values.join(',');
        
    }

    // Add event listeners to checkboxes
    var checkboxes = document.querySelectorAll('.options-container-2 input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            updateHiddenInput();
        });
    });
</script>
