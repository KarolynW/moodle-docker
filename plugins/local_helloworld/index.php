<?php
require_once(__DIR__ . '/../../config.php');

require_login();

$PAGE->set_url(new moodle_url('/local/helloworld/index.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_title('Hello World');
$PAGE->set_heading('Hello World');

echo $OUTPUT->header();
echo $OUTPUT->heading('Hello World');
echo $OUTPUT->footer();
