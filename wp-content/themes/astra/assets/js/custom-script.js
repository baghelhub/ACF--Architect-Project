jQuery(document).ready(function($) {
    $('#file-upload-form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        formData.append('nonce', ajax_obj.nonce);

        $.ajax({
            url: ajax_obj.ajaxurl,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#upload-response').html(response);
            },
            error: function(response) {
                $('#upload-response').html('Error uploading file.');
            }
        });
    });
});
