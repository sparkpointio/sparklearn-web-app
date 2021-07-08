<?php

require_once('config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('faq');
$PAGE->set_title("FAQs");
$PAGE->set_heading("Frequently Asked Question");
$PAGE->set_url($CFG->wwwroot.'/faq.php');

echo $OUTPUT->header();

echo $OUTPUT->footer();
?>
