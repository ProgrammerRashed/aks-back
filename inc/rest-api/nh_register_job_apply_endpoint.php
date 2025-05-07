<?php
function nh_register_job_apply_endpoint()
{
    register_rest_route('nh/v1', '/apply/', array(
        'methods' => WP_REST_Server::CREATABLE,
        'callback' => 'nh_handle_job_apply_submission',
        'permission_callback' => '__return_true', // Publicly accessible
    ));
}

add_action('rest_api_init', 'nh_register_job_apply_endpoint');
/**
 * Handle contact form submission
 *
 * @param WP_REST_Request $request
 * @return WP_Error|array
 */


 function nh_handle_job_apply_submission(WP_REST_Request $request) {
    // Retrieve non-file parameters
    $firstName = $request->get_param('firstName');
    $lastName = $request->get_param('lastName');
    $email = $request->get_param('email');
    $phone = $request->get_param('phone');
    $job_title = $request->get_param('job_title');

    // Retrieve file parameters
    $files = $request->get_file_params();

    if (!empty($files) && isset($files['resume'])) {
        $file = $files['resume'];

        // Validate file type (only allow PDFs)
        $allowed_mime_types = ['application/pdf'];
        if (!in_array($file['type'], $allowed_mime_types)) {
            return new WP_REST_Response([
                'message' => 'Invalid file type. Only PDF files are allowed.',
            ], 400);
        }

        // Validate file size (limit to 5MB)
        $max_size = 5 * 1024 * 1024; // 5MB in bytes
        if ($file['size'] > $max_size) {
            return new WP_REST_Response([
                'message' => 'File size exceeds the maximum allowed limit of 5MB.',
            ], 400);
        }

        // Get the original file name and ensure it has a .pdf extension
        $originalFileName = pathinfo(sanitize_file_name($file['name']), PATHINFO_FILENAME);
        $newFileName = $originalFileName . '.pdf'; // Ensure it has the .pdf extension

        // Define a temporary upload path
        $upload_dir = wp_upload_dir();
        $tempFilePath = $upload_dir['path'] . '/' . $newFileName;

        // Move the uploaded file to the temporary directory with a proper name
        if (!move_uploaded_file($file['tmp_name'], $tempFilePath)) {
            return new WP_REST_Response([
                'message' => 'Failed to process the uploaded file.',
            ], 500);
        }
        // Get the admin email
        $admin_email = carbon_get_theme_option('reply_email') ?? "info@akskhanpharma.com";
        // Prepare email details
        $to = $admin_email; // Admin's email address
        $subject = "New Job Application for $job_title";
        $body = "A new job application has been submitted for :$job_title position\n\n";
        $body .= "First Name: $firstName\n";
        $body .= "Last Name: $lastName\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n";

        // Attach the properly named file
        $attachments = [$tempFilePath];
        $headers = [
            'Content-Type: text/plain; charset=UTF-8',
            "Reply-To: $email", // Reply to the applicant
        ];

        $user_headers = [
            'Content-Type: text/plain; charset=UTF-8',
            "Reply-To: $admin_email", // Reply to the company
        ];

        //Email from User
        $user_email = $email;
        $user_email_subject = "Application received for $job_title position";
        $user_message = "Thanks from your application. We will get back to you soon.";

        // Send the email
        $sent = wp_mail($to, $subject, $body, $headers, $attachments);

        // Remove the temporary file after sending the email
        if ($sent) {
            wp_mail($user_email, $user_email_subject, $user_message, $user_headers);
            unlink($tempFilePath);
        } else {
            return new WP_REST_Response([
                'message' => 'Failed to send the email. Please try again later.',
            ], 500);
        }
    } else {
        return new WP_REST_Response([
            'message' => 'No file uploaded or invalid file key.',
        ], 400);
    }

    // Return success response
    return new WP_REST_Response([
        'message' => 'Job application submitted successfully.',
    ], 200);
}
