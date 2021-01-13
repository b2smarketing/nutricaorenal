<?php
include(TEMPLATEPATH . '/functions/assets.php');
include(TEMPLATEPATH . '/functions/theme.php');
define('SITEPATH', '/wp-content/themes/nutricao-renal/');

/**
 * Custom shortcode to display WPForms form entries in non-table view.
 *
 * Basic usage: [wpforms_entries_table id="FORMID"].
 * 
 * Possible shortcode attributes:
 * id (required)  Form ID of which to show entries.
 * user           User ID, or "current" to default to current logged in user.
 * fields         Comma separated list of form field IDs.
 * number         Number of entries to show, defaults to 30.
 * 
 * @link https://wpforms.com/developers/how-to-display-form-entries/
 *
 * Realtime counts could be delayed due to any caching setup on the site
 *
 * @param array $atts Shortcode attributes.
 * 
 * @return string
 */
function wpf_entries_table($atts)
{

    // Pull ID shortcode attributes.
    $atts = shortcode_atts(
        [
            'id'     => '',
            'user'   => '',
            'fields' => '',
            'number' => '',
        ],
        $atts
    );

    // Check for an ID attribute (required) and that WPForms is in fact
    // installed and activated.
    if (empty($atts['id']) || !function_exists('wpforms')) {
        return;
    }

    // Get the form, from the ID provided in the shortcode.
    $form = wpforms()->form->get(absint($atts['id']));

    // If the form doesn't exists, abort.
    if (empty($form)) {
        return;
    }

    // Pull and format the form data out of the form object.
    $form_data = !empty($form->post_content) ? wpforms_decode($form->post_content) : '';

    // Check to see if we are showing all allowed fields, or only specific ones.
    $form_field_ids = !empty($atts['fields']) ? explode(',', str_replace(' ', '', $atts['fields'])) : [];

    // Setup the form fields.
    if (empty($form_field_ids)) {
        $form_fields = $form_data['fields'];
    } else {
        $form_fields = [];
        foreach ($form_field_ids as $field_id) {
            if (isset($form_data['fields'][$field_id])) {
                $form_fields[$field_id] = $form_data['fields'][$field_id];
            }
        }
    }

    if (empty($form_fields)) {
        return;
    }

    // Here we define what the types of form fields we do NOT want to include,
    // instead they should be ignored entirely.
    $form_fields_disallow = apply_filters('wpforms_frontend_entries_table_disallow', ['divider', 'html', 'pagebreak', 'captcha']);

    // Loop through all form fields and remove any field types not allowed.
    foreach ($form_fields as $field_id => $form_field) {
        if (in_array($form_field['type'], $form_fields_disallow, true)) {
            unset($form_fields[$field_id]);
        }
    }

    $entries_args = [
        'form_id' => absint($atts['id']),
    ];  


    // Number of entries to show. If empty, defaults to 30.
    if (!empty($atts['number'])) {
        $entries_args['number'] = absint($atts['number']);
    }

    // Get all entries for the form, according to arguments defined.
    // There are many options available to query entries. To see more, check out
    // the get_entries() function inside class-entry.php (https://a.cl.ly/bLuGnkGx).
    $user = wp_get_current_user()->user_login;
    $entries_args['user_id'] = $user;

    $entries = wpforms()->entry->get_entries($entries_args);

    if (empty($entries)) {
        return '<p>No entries found.</p>';
    }

    ob_start();

    $campo = ['Nome',"E-Mail","CPF","Cupom","Data"];
    $x = 0;
    // Now, loop through all the form entries.
    foreach ($entries as $entry) {

        // Entry field values are in JSON, so we need to decode.
        $entry_fields = json_decode($entry->fields, true);

        foreach ($form_fields as $form_field) {
            echo "<ul class='listacupom'>";
            foreach ($entry_fields as $entry_field) {
                if (absint($entry_field['id']) === absint($form_field['id'])) {
                    echo "<li><strong>".$campo[$x]."</strong>: <span class='item".$x."'>".apply_filters('wpforms_html_field_value', wp_strip_all_tags($entry_field['value']), $entry_field, $form_data, 'entry-frontend-table')."</span></li>";
                    break;
                }
            }
            $x++;
            echo "</ul>";
        }
    }


    $output = ob_get_clean();

    return $output;
}
add_shortcode('wpforms_entries_table', 'wpf_entries_table');
