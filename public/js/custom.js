function previewImage() {
    var preview = $('#imagePreview');
    var fileInput = $('#image')[0];
    var file = fileInput.files[0];

    // Check if a file is selected
    if (file) {
        // Check if the file is a valid image
        if (isValidImage(file)) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // Update the image preview source
                preview.attr('src', e.target.result);
                // Make the image preview visible
                preview.removeClass('d-none');
            };

            $('.btn-cross').removeClass('d-none');
            // Read the file as a data URL
            reader.readAsDataURL(file);
        } else {
            // If the selected file is not a valid image, hide the preview and clear the file input
            preview.addClass('d-none');
            $('.btn-cross').addClass('d-none');
            fileInput.value = '';
            alert('Invalid image file. Please select a valid image.');
        }
    } else {
        // If no file is selected, hide the image preview
        preview.addClass('d-none');
        $('.btn-cross').addClass('d-none');
    }
}

// Function to clear the selected image
function clearImagePreview() {
    $('#image').val(''); // Clear the file input
    $('#imagePreview').addClass('d-none'); // Hide the image preview
    $('.btn-cross').addClass('d-none');
}

// Function to check if the file is a valid image
function isValidImage(file) {
    return file.type.startsWith('image/');
}

// Attach the previewImage function to the change event of the file input
$('#image').on('change', previewImage);

        /*____________________________preview File_____________________________*/
        function previewFile(element) {
            var preview = $(element).siblings('.imgPreview');
            var fileInput = element;
            var file = fileInput.files[0];

            // Check if a file is selected
            if (file) {
                // Check if the file is a valid file
                if (isValidFile(file)) {
                    var reader = new FileReader();

                    
                    
                    if (file.type === 'application/pdf' || (file.type === 'application/msword' || file.type === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
                        reader.onload = function (e) {
                            // Set the default icon path for PDF and Word files
                            preview.attr('src', preview.data('default-image'));
                            // Make the image preview visible
                            preview.removeClass('d-none');
                        }
                    }else{
                        reader.onload = function (e) {
                            // Update the image preview source
                            preview.attr('src', e.target.result);
                            // Make the image preview visible
                            preview.removeClass('d-none');
                        };
                    }
                    $(element).siblings('.btn-cross').removeClass('d-none');
                    
                    // Read the file as a data URL
                    reader.readAsDataURL(file);
                } else {
                    // If the selected file is not a valid file, hide the preview and clear the file input
                    preview.addClass('d-none');
                    $(element).siblings('.btn-cross').addClass('d-none');
                    fileInput.value = '';
                        // Show an alert for other invalid files
                        alert('Invalid file. Please select a valid file with png, jpg, jpeg, doc, docx, or pdf extension.');
                }
            } else {
                // If no file is selected, hide the image preview
                preview.addClass('d-none');
                $(element).siblings('.btn-cross').addClass('d-none');
            }
        }


        function isValidFile(file) {
            // Define the allowed file extensions
            var allowedExtensions = ['png', 'jpg', 'jpeg', 'doc', 'docx', 'pdf'];
            // Get the file extension
            var fileExtension = file.name.split('.').pop().toLowerCase();

            // Check if the file extension is in the allowed extensions list
            return allowedExtensions.includes(fileExtension);
        }



