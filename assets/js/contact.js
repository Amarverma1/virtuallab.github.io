
function handleFormSubmit(event) {
    event.preventDefault(); // Prevent the default form submission

    var form = document.getElementById('contactForm');
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'submit.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById('successMessage').style.display = 'block';
            form.reset();
        }
    };

    xhr.send(formData);
}