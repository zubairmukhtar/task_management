<script>
    $(document).ready(function() {

        $('#taskForm').submit(function(e) {
            e.preventDefault(); // Prevent form submission

            // Clear previous error messages
            $('.invalid-feedback').text('');

            // Serialize form data including CSRF token
            var formData = $(this).serializeArray();
            formData.push({
                name: "_token",
                value: "{{ csrf_token() }}"
            });

            // AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('task.store') }}',
                data: formData,
                success: function(response) {
                    // Handle success
                    console.log(response);
                    // Optionally, you can redirect or show a success message here
                    $('#successAlert').show();
                    $('#successAlert').html(response.message);

                },
                error: function(xhr, status, error) {
                    // Handle error

                    // Parse the JSON response
                    var jsonResponse = JSON.parse(xhr.responseText);

                    // Display individual error messages for each field
                    $.each(jsonResponse.errors, function(key, value) {
                        $('#titleError' + key + 'Error').text(value[
                            0]); // Update error message for each field
                    });
                }
            });
        });
    });
</script>
