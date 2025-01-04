<?php
include('header.php');
?>
    <div class="background-container-wideawake">
        <div class="centered-text-image">
            <h1>APPLICATION FORM</h1>
        </div>
    </div>
    <div class="questionnaire">
        <div class="question">
            <input type="checkbox" id="q1 checkbox" name="question" value="index1.php">
            <label for="q1">I am a creative, academic, writer, artist, painter, doodler…</label>
        </div>
        <div class="question">
            <input type="checkbox" id="q2 checkbox" name="question" value="index2.php">
            <label for="q2">I love what Wide Awake does and want to support the mission</label>
        </div>
        <div class="question">
            <input type="checkbox" id="q3 checkbox" name="question" value="index3.php">
            <label for="q3">I just want to know about your concerts, talks, food and drink experiences, events etc</label>
        </div>
        <div class="question">
            <input type="checkbox" id="q4_checkbox" name="question" value="modal">
            <label for="q4_checkbox">I’m a company or institution and want to get involved</label>
        </div>
        <button id="continueButton" class="formbold-btn">Continue</button>
    </div>

    <!-- Modal HTML -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" style="color: white; cursor: pointer;">&times;</span>
            <p class="text-center">For all corporate enquiries please contact us at <a href="mailto:members@wideawakecommunity.org">members@wideawakecommunity.org</a>.</p>
        </div>
    </div>
   
    <script>
        document.querySelectorAll('.questionnaire input[type="checkbox"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        document.querySelectorAll('.questionnaire input[type="checkbox"]').forEach(function(otherCheckbox) {
            if (otherCheckbox !== checkbox) otherCheckbox.checked = false;
        });
    });
});

document.getElementById('continueButton').addEventListener('click', function() {
        var checkedCheckbox = document.querySelector('.questionnaire input[type="checkbox"]:checked');
        if (checkedCheckbox) {
            if (checkedCheckbox.value === 'modal') {
                // Open the modal
                var modal = document.getElementById('myModal');
                modal.style.display = "block";

                // When the user clicks on <span> (x), close the modal
                var span = document.getElementsByClassName("close")[0];
                span.onclick = function() {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            } else {
                // Redirect to the URL
                window.location.href = checkedCheckbox.value;
            }
        } else {
            Swal.fire({
                title: 'Error!',
                text: 'Please select an option before continuing.',
                icon: 'error',
                confirmButtonText: 'OK',
                
            });
        }
    });


    </script>
<?php
include('footer.php');
?>