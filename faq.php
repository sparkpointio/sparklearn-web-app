<?php

require_once('config.php');

// $PAGE->set_context(get_system_context());
// $PAGE->set_pagelayout('faq');
// $PAGE->set_title("FAQs");
// $PAGE->set_heading("Frequently Asked Question");
$PAGE->set_url($CFG->wwwroot.'/faq.php');

$templatecontext = [
   
    'output' => $OUTPUT,
    'googlemapaddress' => $OUTPUT->image_url('googlemapaddress', 'theme'),
    'firstguideimage' => $OUTPUT->image_url('firstguideimage', 'theme'),
    'secondguideimage' => $OUTPUT->image_url('secondguideimage', 'theme'),
    'thirdguideimage' => $OUTPUT->image_url('thirdguideimage', 'theme'),
];
echo $OUTPUT->render_from_template('theme_moove/faq',$templatecontext);
echo $OUTPUT->header();

echo $OUTPUT->footer();
?>
