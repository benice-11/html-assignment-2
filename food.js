function startfeedback() {
    // Show the feedback form and hide the Start button
    document.getElementById('feedbackForm').style.display = 'block';
    document.getElementById('start_button').style.display = 'none';
    document.getElementById('heading').style.display = 'none';
}

/*function endfeedback() {
    // close the feedback form
    document.getElementById('feedbackForm').style.display = 'none';
    document.getElementById('after_submit').style.display = 'inline';
}*/

function endfeedback() {
    // Find all the required radio buttons on the form
    const requiredRadios = document.querySelectorAll('input[type="radio"]:required');
    let isValid = true;

    // Loop through all required radio buttons to check if they are selected
    requiredRadios.forEach(radio => {
        // Get all radio buttons in the same group (name attribute)
        const radioGroup = document.getElementsByName(radio.name);
        
        // Check if any radio button in the group is selected
        const isChecked = Array.from(radioGroup).some(r => r.checked);
        
        if (!isChecked) {
            isValid = false;  // If any required radio button group is not selected, mark the form as invalid
        }
    });

    // If all required radio buttons are selected, show the thank you message
    if (isValid) {
        document.getElementById('feedbackForm').style.display = 'none';
        document.getElementById('after_submit').style.display = 'inline';
    } else {
        alert('Please fill out all required questions before submitting.');
    }
}

