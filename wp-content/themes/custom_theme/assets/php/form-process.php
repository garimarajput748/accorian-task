<?php
// Load WordPress environment
require_once("../../../../../wp-load.php");

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["submit"]==="contactForm") handle_contact_form();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["submit"]==="registrationForm") handle_registration();

function handle_registration() {
    handle_form_submission('registration', ['name', 'email', 'phone_number']);
}

function handle_contact_form() {
    handle_form_submission('contact_form', ['name', 'email', 'phone_number', 'subject', 'message']);
}

function handle_form_submission($table_suffix, $fields) {
    global $wpdb;
    // Sanitize form data
    $sanitized_data = [];
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $sanitized_data[$field] = sanitize_text_field($_POST[$field]);
        }
    }

    // Insert data into custom table
    $table_name = $wpdb->prefix . $table_suffix;
    $wpdb->insert($table_name, $sanitized_data);
    if ($wpdb->insert_id) {
        echo "success";
    } else {
        echo "failed!";
    }
}
?>
