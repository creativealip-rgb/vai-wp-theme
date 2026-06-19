<?php
/**
 * ACF Field Groups
 *
 * Registered via PHP for version control.
 * Each page has a dedicated field group; location rules match the page template.
 * Templates use get_field() with fallback to current copy → no blank screens.
 *
 * Page → template mapping:
 *   Home        → page-home.php
 *   Services    → page-services.php
 *   Rates       → page-rates.php
 *   Testimonial → page-testimonial.php
 *   Contact     → page-contact.php
 *   Blog        → page-blog.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ====================================================================
 *  HELPER — append N copies of a field into a fields array
 * ==================================================================== */
function vai_fg_repeater( &$fields, $name, $label, $prefix, $count, $type = 'text', $extra = [] ) {
    for ( $i = 1; $i <= $count; $i++ ) {
        $f = [
            'key'      => "field_{$prefix}_{$name}_{$i}",
            'name'     => "{$prefix}_{$i}_{$name}",
            'label'    => $label . ' ' . $i,
            'type'     => $type,
        ];
        $fields[] = array_merge( $f, $extra );
    }
}

/* ====================================================================
 *  PAGE: HOME
 * ==================================================================== */
$home = [];

/* HERO */
$home[] = [ 'key' => 'tab_vai_home_hero', 'name' => 'tab_hero', 'label' => 'Hero', 'type' => 'tab' ];
$home[] = [ 'key'=>'field_home_hero_title_pre','name'=>'home_hero_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'Your trusted' ];
$home[] = [ 'key'=>'field_home_hero_em','name'=>'home_hero_em','label'=>'Title — italic word','type'=>'text','default_value'=>'assistant' ];
$home[] = [ 'key'=>'field_home_hero_title_post','name'=>'home_hero_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'in the next room.' ];
$home[] = [ 'key'=>'field_home_hero_sub','name'=>'home_hero_sub','label'=>'Subtext','type'=>'textarea','rows'=>3,'default_value'=>'Personal, executive, and operational support for entrepreneurs, expatriates, and business owners. 14 years strong, 99% client satisfaction, named-personal service led by Mbak Mimi.' ];
$home[] = [ 'key'=>'field_home_hero_cta_primary','name'=>'home_hero_cta_primary','label'=>'Primary CTA label','type'=>'text','default_value'=>'Hire a Virtual Assistant' ];
$home[] = [ 'key'=>'field_home_hero_cta_primary_url','name'=>'home_hero_cta_primary_url','label'=>'Primary CTA URL','type'=>'url','default_value'=>'#contact' ];
$home[] = [ 'key'=>'field_home_hero_cta_secondary','name'=>'home_hero_cta_secondary','label'=>'Secondary CTA label','type'=>'text','default_value'=>'View Rates' ];
$home[] = [ 'key'=>'field_home_hero_cta_secondary_url','name'=>'home_hero_cta_secondary_url','label'=>'Secondary CTA URL','type'=>'url','default_value'=>'#rates' ];
$home[] = [ 'key'=>'field_home_hero_image','name'=>'home_hero_image','label'=>'Hero photo','type'=>'image','return_format'=>'url','preview_size'=>'medium' ];
$home[] = [ 'key'=>'field_home_hero_stat_1_num','name'=>'home_hero_stat_1_num','label'=>'Stat 1 number (HTML allowed)','type'=>'text','default_value'=>'14<small>+</small>' ];
$home[] = [ 'key'=>'field_home_hero_stat_1_lbl','name'=>'home_hero_stat_1_lbl','label'=>'Stat 1 label','type'=>'text','default_value'=>'Years experience' ];
$home[] = [ 'key'=>'field_home_hero_stat_2_num','name'=>'home_hero_stat_2_num','label'=>'Stat 2 number','type'=>'text','default_value'=>'99<small>%</small>' ];
$home[] = [ 'key'=>'field_home_hero_stat_2_lbl','name'=>'home_hero_stat_2_lbl','label'=>'Stat 2 label','type'=>'text','default_value'=>'Satisfaction' ];
$home[] = [ 'key'=>'field_home_hero_stat_3_num','name'=>'home_hero_stat_3_num','label'=>'Stat 3 number','type'=>'text','default_value'=>'6<small>+</small>' ];
$home[] = [ 'key'=>'field_home_hero_stat_3_lbl','name'=>'home_hero_stat_3_lbl','label'=>'Stat 3 label','type'=>'text','default_value'=>'Countries served' ];

/* FOUNDER */
$home[] = [ 'key' => 'tab_vai_home_founder', 'name' => 'tab_founder', 'label' => 'Founder', 'type' => 'tab' ];
$home[] = [ 'key'=>'field_home_founder_eyebrow','name'=>'home_founder_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Meet the founder' ];
$home[] = [ 'key'=>'field_home_founder_title_pre','name'=>'home_founder_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'Built with' ];
$home[] = [ 'key'=>'field_home_founder_em','name'=>'home_founder_em','label'=>'Title — italic word','type'=>'text','default_value'=>'executive-level' ];
$home[] = [ 'key'=>'field_home_founder_title_post','name'=>'home_founder_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'discipline.' ];
$home[] = [ 'key'=>'field_home_founder_p1','name'=>'home_founder_p1','label'=>'Paragraph 1','type'=>'textarea','rows'=>3,'default_value'=>'Before founding VAI in 2011, Mimi served as Senior Executive Secretary to a President Director at a major telecommunications company in Jakarta for nine years. That depth of experience shapes every engagement we run today.' ];
$home[] = [ 'key'=>'field_home_founder_p2','name'=>'home_founder_p2','label'=>'Paragraph 2','type'=>'textarea','rows'=>3,'default_value'=>'VAI now supports entrepreneurs, expatriates, and business owners across Indonesia and overseas. From quick personal errands to full operational support for growing teams.' ];
$home[] = [ 'key'=>'field_home_founder_quote','name'=>'home_founder_quote','label'=>'Quote','type'=>'textarea','rows'=>3,'default_value'=>'Think of us as a regular assistant sitting in the next room, except the next room is in another country.' ];
$home[] = [ 'key'=>'field_home_founder_image','name'=>'home_founder_image','label'=>'Founder photo','type'=>'image','return_format'=>'url' ];
$home[] = [ 'key'=>'field_home_founder_card_1_num','name'=>'home_founder_card_1_num','label'=>'Card 1 number','type'=>'text','default_value'=>'14<small>+</small>' ];
$home[] = [ 'key'=>'field_home_founder_card_1_lbl','name'=>'home_founder_card_1_lbl','label'=>'Card 1 label','type'=>'text','default_value'=>'Years running VAI' ];
$home[] = [ 'key'=>'field_home_founder_card_2_num','name'=>'home_founder_card_2_num','label'=>'Card 2 number','type'=>'text','default_value'=>'100+' ];
$home[] = [ 'key'=>'field_home_founder_card_2_lbl','name'=>'home_founder_card_2_lbl','label'=>'Card 2 label','type'=>'text','default_value'=>'Clients served globally' ];
$home[] = [ 'key'=>'field_home_founder_card_3_num','name'=>'home_founder_card_3_num','label'=>'Card 3 number','type'=>'text','default_value'=>'12' ];
$home[] = [ 'key'=>'field_home_founder_card_3_lbl','name'=>'home_founder_card_3_lbl','label'=>'Card 3 label','type'=>'text','default_value'=>'Industry awards & features' ];

/* SERVICES SECTION */
$home[] = [ 'key' => 'tab_vai_home_services', 'name' => 'tab_services', 'label' => 'Services', 'type' => 'tab' ];
$home[] = [ 'key'=>'field_home_services_eyebrow','name'=>'home_services_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Services' ];
$home[] = [ 'key'=>'field_home_services_title_pre','name'=>'home_services_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'Three ways we' ];
$home[] = [ 'key'=>'field_home_services_em','name'=>'home_services_em','label'=>'Title — italic word','type'=>'text','default_value'=>'support' ];
$home[] = [ 'key'=>'field_home_services_title_post','name'=>'home_services_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'your day.' ];
$home[] = [ 'key'=>'field_home_services_sub','name'=>'home_services_sub','label'=>'Subtext','type'=>'textarea','rows'=>2,'default_value'=>"From daily life to executive operations to business growth. Pick a category and we'll match you with the right VA." ];
vai_fg_repeater( $home, 'cat_name',  'Category name',  'home_svc', 3, 'text',     ['wrapper'=>['width'=>'33']] );
vai_fg_repeater( $home, 'cat_tag',   'Category tag',   'home_svc', 3, 'text',     ['wrapper'=>['width'=>'33']] );
vai_fg_repeater( $home, 'cat_desc',  'Category desc',  'home_svc', 3, 'textarea', ['rows'=>2,'wrapper'=>['width'=>'33']] );
vai_fg_repeater( $home, 'cat_icon',  'Icon filename (assets/photos/)', 'home_svc', 3, 'text', ['wrapper'=>['width'=>'33'],'placeholder'=>'e.g. icon-personal-assistant.gif'] );
vai_fg_repeater( $home, 'item_name', 'Service item name (HTML allowed)', 'home_svc', 9, 'text',     ['wrapper'=>['width'=>'50']] );
vai_fg_repeater( $home, 'item_desc', 'Service item desc (optional)',     'home_svc', 9, 'textarea', ['rows'=>2,'wrapper'=>['width'=>'50']] );
$home[] = [ 'key'=>'field_home_services_cta','name'=>'home_services_cta','label'=>'View all services button label','type'=>'text','default_value'=>'View all services' ];

/* HOW IT WORKS */
$home[] = [ 'key' => 'tab_vai_home_how', 'name' => 'tab_how', 'label' => 'How It Works', 'type' => 'tab' ];
$home[] = [ 'key'=>'field_home_how_eyebrow','name'=>'home_how_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'How it works' ];
$home[] = [ 'key'=>'field_home_how_title_pre','name'=>'home_how_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'From' ];
$home[] = [ 'key'=>'field_home_how_em','name'=>'home_how_em','label'=>'Title — italic word','type'=>'text','default_value'=>'inquiry' ];
$home[] = [ 'key'=>'field_home_how_title_post','name'=>'home_how_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'to results in 4 steps.' ];
$home[] = [ 'key'=>'field_home_how_sub','name'=>'home_how_sub','label'=>'Subtext','type'=>'textarea','rows'=>2,'default_value'=>'Simple, structured, and built to get you working with the right VA from day one.' ];
vai_fg_repeater( $home, 'step_title', 'Step title', 'home_how', 4, 'text' );
vai_fg_repeater( $home, 'step_desc',  'Step desc',  'home_how', 4, 'textarea', ['rows'=>2] );

/* TESTIMONIALS PREVIEW */
$home[] = [ 'key' => 'tab_vai_home_testi', 'name' => 'tab_testi', 'label' => 'Testimonials (preview)', 'type' => 'tab' ];
$home[] = [ 'key'=>'field_home_testi_eyebrow','name'=>'home_testi_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Client stories' ];
$home[] = [ 'key'=>'field_home_testi_title_pre','name'=>'home_testi_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'Real clients,' ];
$home[] = [ 'key'=>'field_home_testi_em','name'=>'home_testi_em','label'=>'Title — italic word','type'=>'text','default_value'=>'real relief' ];
$home[] = [ 'key'=>'field_home_testi_title_post','name'=>'home_testi_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'.' ];
$home[] = [ 'key'=>'field_home_testi_sub','name'=>'home_testi_sub','label'=>'Subtext','type'=>'textarea','rows'=>2,'default_value'=>'A short preview of what clients say after handing the right work to VAI. Read the full set on the testimonials page.' ];
$home[] = [ 'key'=>'field_home_testi_quote','name'=>'home_testi_quote','label'=>'Featured quote','type'=>'textarea','rows'=>4,'default_value'=>"Of all the VAs I have, Mimi is the best one. She is thoughtful, timely, kind, reliable and resourceful. I don't need to explain too many details. She already understands everything. Outstanding!" ];
$home[] = [ 'key'=>'field_home_testi_name','name'=>'home_testi_name','label'=>'Featured name','type'=>'text','default_value'=>'James LC' ];
$home[] = [ 'key'=>'field_home_testi_role','name'=>'home_testi_role','label'=>'Featured role','type'=>'text','default_value'=>'Businessman' ];
$home[] = [ 'key'=>'field_home_testi_cc','name'=>'home_testi_cc','label'=>'Featured country (ISO 3)','type'=>'text','default_value'=>'DEU','maxlength'=>3 ];
$home[] = [ 'key'=>'field_home_testi_init','name'=>'home_testi_init','label'=>'Featured initials','type'=>'text','default_value'=>'JL','maxlength'=>3 ];
vai_fg_repeater( $home, 'sup_quote',  'Supporting quote',     'home_testi', 2, 'textarea', ['rows'=>4] );
vai_fg_repeater( $home, 'sup_name',   'Supporting name',      'home_testi', 2, 'text' );
vai_fg_repeater( $home, 'sup_role',   'Supporting role',      'home_testi', 2, 'text' );
vai_fg_repeater( $home, 'sup_cc',     'Supporting country (ISO 3)', 'home_testi', 2, 'text', ['maxlength'=>3] );
vai_fg_repeater( $home, 'sup_init',   'Supporting initials',  'home_testi', 2, 'text', ['maxlength'=>3] );
$home[] = [ 'key'=>'field_home_testi_cta','name'=>'home_testi_cta','label'=>'CTA button label','type'=>'text','default_value'=>'Read all stories' ];

/* RATES / PRICING */
$home[] = [ 'key' => 'tab_vai_home_rates', 'name' => 'tab_rates', 'label' => 'Rates', 'type' => 'tab' ];
$home[] = [ 'key'=>'field_home_rates_eyebrow','name'=>'home_rates_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Rates & packages' ];
$home[] = [ 'key'=>'field_home_rates_title_pre','name'=>'home_rates_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'Pick the plan that fits your' ];
$home[] = [ 'key'=>'field_home_rates_em','name'=>'home_rates_em','label'=>'Title — italic word','type'=>'text','default_value'=>'workload' ];
$home[] = [ 'key'=>'field_home_rates_title_post','name'=>'home_rates_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'.' ];
$home[] = [ 'key'=>'field_home_rates_sub','name'=>'home_rates_sub','label'=>'Subtext','type'=>'textarea','rows'=>2,'default_value'=>"On Demand for small tasks. Dedicated for ongoing operations. Need more? Let's talk." ];
vai_fg_repeater( $home, 'plan_name',    'Plan name',                 'home_plan', 6, 'text' );
vai_fg_repeater( $home, 'plan_hours',   'Plan hours (HTML)',         'home_plan', 6, 'text',     ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $home, 'plan_monthly', 'Monthly price',             'home_plan', 6, 'text',     ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $home, 'plan_annual',  'Annual price',              'home_plan', 6, 'text',     ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $home, 'plan_badge',   'Badge (blank = none)',      'home_plan', 6, 'text',     ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $home, 'plan_feats',   'Features (one per line)',   'home_plan', 6, 'textarea', ['rows'=>4] );
$home[] = [ 'key'=>'field_home_rates_tier_ondemand_label','name'=>'home_rates_tier_ondemand_label','label'=>'Toggle: On Demand label','type'=>'text','default_value'=>'On Demand' ];
$home[] = [ 'key'=>'field_home_rates_tier_dedicated_label','name'=>'home_rates_tier_dedicated_label','label'=>'Toggle: Dedicated label','type'=>'text','default_value'=>'Dedicated' ];
$home[] = [ 'key'=>'field_home_rates_custom','name'=>'home_rates_custom','label'=>'Custom scope line','type'=>'text','default_value'=>'Need more time or custom scope? Discuss with us →' ];

/* CTA BAND */
$home[] = [ 'key' => 'tab_vai_home_cta', 'name' => 'tab_cta', 'label' => 'CTA Band', 'type' => 'tab' ];
$home[] = [ 'key'=>'field_home_cta_eyebrow','name'=>'home_cta_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Free consultation' ];
$home[] = [ 'key'=>'field_home_cta_title_pre','name'=>'home_cta_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>"Let's build something" ];
$home[] = [ 'key'=>'field_home_cta_em','name'=>'home_cta_em','label'=>'Title — italic word','type'=>'text','default_value'=>'together' ];
$home[] = [ 'key'=>'field_home_cta_title_post','name'=>'home_cta_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'.' ];
$home[] = [ 'key'=>'field_home_cta_sub','name'=>'home_cta_sub','label'=>'Subtext','type'=>'textarea','rows'=>2,'default_value'=>"Book a free consultation. We'll review your workload and recommend the right plan, no strings attached, no obligation." ];
$home[] = [ 'key'=>'field_home_cta_button','name'=>'home_cta_button','label'=>'Button label','type'=>'text','default_value'=>'Request Free Consultation' ];
$home[] = [ 'key'=>'field_home_cta_url','name'=>'home_cta_url','label'=>'Button URL','type'=>'url','default_value'=>'https://form.jotform.com/202773574256057' ];
$home[] = [ 'key'=>'field_home_cta_meta','name'=>'home_cta_meta','label'=>'Meta line below button','type'=>'text','default_value'=>'No credit card required · Reply within 1 business day' ];

acf_add_local_field_group( [
    'key'      => 'group_vai_home',
    'title'    => 'VAI Home — All Sections',
    'fields'   => $home,
    'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-home.php' ] ] ],
    'menu_order' => 0,
    'label_placement' => 'left',
    'instruction_placement' => 'label',
    'hide_on_screen' => [ 'the_content', 'excerpt', 'discussion', 'comments', 'revisions', 'slug', 'author', 'format', 'featured_image' ],
] );

/* ====================================================================
 *  PAGE: SERVICES
 * ==================================================================== */
$svc = [];
$svc[] = [ 'key' => 'tab_vai_svc_hero', 'name' => 'tab_hero', 'label' => 'Page Hero', 'type' => 'tab' ];
$svc[] = [ 'key'=>'field_svc_hero_eyebrow','name'=>'svc_hero_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Services' ];
$svc[] = [ 'key'=>'field_svc_hero_title_pre','name'=>'svc_hero_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'Services built around your' ];
$svc[] = [ 'key'=>'field_svc_hero_em','name'=>'svc_hero_em','label'=>'Title — italic word','type'=>'text','default_value'=>'workload' ];
$svc[] = [ 'key'=>'field_svc_hero_title_post','name'=>'svc_hero_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'.' ];
$svc[] = [ 'key'=>'field_svc_hero_sub','name'=>'svc_hero_sub','label'=>'Subtext','type'=>'textarea','rows'=>3,'default_value'=>'Three categories. Each one matched to a clear kind of support. Pick a category to see what is included.' ];
vai_fg_repeater( $svc, 'stat_num', 'Hero stat number', 'svc_hero', 4, 'text', ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $svc, 'stat_lbl', 'Hero stat label',  'svc_hero', 4, 'text', ['wrapper'=>['width'=>'25']] );

$svc[] = [ 'key' => 'tab_vai_svc_cats', 'name' => 'tab_cats', 'label' => 'Service Categories (3)', 'type' => 'tab' ];
vai_fg_repeater( $svc, 'cat_title', 'Category title',        'svc_cat', 3, 'text' );
vai_fg_repeater( $svc, 'cat_intro', 'Category intro',        'svc_cat', 3, 'textarea', ['rows'=>3] );
vai_fg_repeater( $svc, 'cat_icon',  'Category icon filename','svc_cat', 3, 'text', ['placeholder'=>'e.g. icon-personal-assistant.gif'] );
vai_fg_repeater( $svc, 'item_name', 'Item name (HTML allowed)','svc_item', 9, 'text',     ['wrapper'=>['width'=>'50']] );
vai_fg_repeater( $svc, 'item_desc', 'Item desc (optional)',   'svc_item', 9, 'textarea', ['rows'=>2,'wrapper'=>['width'=>'50']] );

$svc[] = [ 'key' => 'tab_vai_svc_cta', 'name' => 'tab_cta', 'label' => 'CTA', 'type' => 'tab' ];
$svc[] = [ 'key'=>'field_svc_cta_title','name'=>'svc_cta_title','label'=>'CTA title','type'=>'text','default_value'=>"Not sure which one fits?" ];
$svc[] = [ 'key'=>'field_svc_cta_sub','name'=>'svc_cta_sub','label'=>'CTA subtext','type'=>'textarea','rows'=>2,'default_value'=>'Tell us what you need. We will match you with the right VA.' ];
$svc[] = [ 'key'=>'field_svc_cta_button','name'=>'svc_cta_button','label'=>'CTA button','type'=>'text','default_value'=>'Talk to us' ];

acf_add_local_field_group( [
    'key'      => 'group_vai_services',
    'title'    => 'VAI Services Page',
    'fields'   => $svc,
    'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-services.php' ] ] ],
    'menu_order' => 0,
    'label_placement' => 'left',
    'hide_on_screen' => [ 'the_content', 'excerpt', 'discussion', 'comments', 'revisions', 'slug', 'author', 'featured_image' ],
] );

/* ====================================================================
 *  PAGE: RATES / PRICING
 * ==================================================================== */
$rates = [];
$rates[] = [ 'key' => 'tab_vai_rates_hero', 'name' => 'tab_hero', 'label' => 'Page Hero', 'type' => 'tab' ];
$rates[] = [ 'key'=>'field_rates_hero_eyebrow','name'=>'rates_hero_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Rates' ];
$rates[] = [ 'key'=>'field_rates_hero_title_pre','name'=>'rates_hero_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'Transparent rates. No' ];
$rates[] = [ 'key'=>'field_rates_hero_em','name'=>'rates_hero_em','label'=>'Title — italic word','type'=>'text','default_value'=>'hidden' ];
$rates[] = [ 'key'=>'field_rates_hero_title_post','name'=>'rates_hero_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'fees.' ];
$rates[] = [ 'key'=>'field_rates_hero_sub','name'=>'rates_hero_sub','label'=>'Subtext','type'=>'textarea','rows'=>3,'default_value'=>'Pick the plan that matches your workload. Switch or cancel any time.' ];
vai_fg_repeater( $rates, 'stat_num', 'Hero stat number', 'rates_hero', 4, 'text', ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $rates, 'stat_lbl', 'Hero stat label',  'rates_hero', 4, 'text', ['wrapper'=>['width'=>'25']] );
$rates[] = [ 'key'=>'field_rates_compare_title_pre','name'=>'rates_compare_title_pre','label'=>'Compare title — before italic','type'=>'text','default_value'=>'Choose what' ];
$rates[] = [ 'key'=>'field_rates_compare_em','name'=>'rates_compare_em','label'=>'Compare title — italic word','type'=>'text','default_value'=>'fits' ];
$rates[] = [ 'key'=>'field_rates_compare_title_post','name'=>'rates_compare_title_post','label'=>'Compare title — after italic','type'=>'text','default_value'=>'.' ];
$rates[] = [ 'key'=>'field_rates_compare_tag','name'=>'rates_compare_tag','label'=>'Compare section tag','type'=>'text','default_value'=>'Compare plans' ];
$rates[] = [ 'key'=>'field_rates_tier_ondemand_label','name'=>'rates_tier_ondemand_label','label'=>'Toggle: On Demand label','type'=>'text','default_value'=>'On Demand' ];
$rates[] = [ 'key'=>'field_rates_tier_dedicated_label','name'=>'rates_tier_dedicated_label','label'=>'Toggle: Dedicated label','type'=>'text','default_value'=>'Dedicated' ];
$rates[] = [ 'key'=>'field_rates_custom_line','name'=>'rates_custom_line','label'=>'Custom scope line (HTML allowed)','type'=>'text','default_value'=>'Need more time or custom scope? <a href="/contact-us/" style="font-weight:600;">Discuss with us →</a>' ];

$rates[] = [ 'key' => 'tab_vai_rates_plans', 'name' => 'tab_plans', 'label' => 'Plans (6)', 'type' => 'tab' ];
vai_fg_repeater( $rates, 'plan_name',    'Plan name',              'rates_plan', 6, 'text' );
vai_fg_repeater( $rates, 'plan_hours',   'Plan hours (HTML)',      'rates_plan', 6, 'text',     ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $rates, 'plan_monthly', 'Monthly price',          'rates_plan', 6, 'text',     ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $rates, 'plan_annual',  'Annual price',           'rates_plan', 6, 'text',     ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $rates, 'plan_badge',   'Badge (blank = none)',   'rates_plan', 6, 'text',     ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $rates, 'plan_feats',   'Features (one per line)','rates_plan', 6, 'textarea', ['rows'=>4] );

$rates[] = [ 'key' => 'tab_vai_rates_includes', 'name' => 'tab_includes', 'label' => 'Includes (6)', 'type' => 'tab' ];
$rates[] = [ 'key'=>'field_rates_includes_title','name'=>'rates_includes_title','label'=>'Section title','type'=>'text','default_value'=>'Every plan includes' ];
$rates[] = [ 'key'=>'field_rates_includes_sub','name'=>'rates_includes_sub','label'=>'Section subtext','type'=>'textarea','rows'=>2,'default_value'=>'All the basics are covered, no matter which plan you choose.' ];
vai_fg_repeater( $rates, 'inc_name', 'Include name', 'rates_inc', 6, 'text',     ['wrapper'=>['width'=>'50']] );
vai_fg_repeater( $rates, 'inc_desc', 'Include desc', 'rates_inc', 6, 'textarea', ['rows'=>2,'wrapper'=>['width'=>'50']] );

$rates[] = [ 'key' => 'tab_vai_rates_faq', 'name' => 'tab_faq', 'label' => 'FAQ (5)', 'type' => 'tab' ];
vai_fg_repeater( $rates, 'faq_q', 'Question', 'rates_faq', 5, 'text' );
vai_fg_repeater( $rates, 'faq_a', 'Answer',   'rates_faq', 5, 'textarea', ['rows'=>3] );

$rates[] = [ 'key' => 'tab_vai_rates_cta', 'name' => 'tab_cta', 'label' => 'CTA', 'type' => 'tab' ];
$rates[] = [ 'key'=>'field_rates_cta_title_pre','name'=>'rates_cta_title_pre','label'=>'CTA title — before italic','type'=>'text','default_value'=>'Not sure which plan' ];
$rates[] = [ 'key'=>'field_rates_cta_em','name'=>'rates_cta_em','label'=>'CTA title — italic word','type'=>'text','default_value'=>'fits' ];
$rates[] = [ 'key'=>'field_rates_cta_title_post','name'=>'rates_cta_title_post','label'=>'CTA title — after italic','type'=>'text','default_value'=>'?' ];
$rates[] = [ 'key'=>'field_rates_cta_sub','name'=>'rates_cta_sub','label'=>'CTA subtext','type'=>'textarea','rows'=>2,'default_value'=>'Tell us your workload. We will recommend a plan and quote within 1 business day.' ];
$rates[] = [ 'key'=>'field_rates_cta_button','name'=>'rates_cta_button','label'=>'CTA button','type'=>'text','default_value'=>'Request a quote' ];

acf_add_local_field_group( [
    'key'      => 'group_vai_rates',
    'title'    => 'VAI Rates Page',
    'fields'   => $rates,
    'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-rates.php' ] ] ],
    'menu_order' => 0,
    'label_placement' => 'left',
    'hide_on_screen' => [ 'the_content', 'excerpt', 'discussion', 'comments', 'revisions', 'slug', 'author', 'featured_image' ],
] );

/* ====================================================================
 *  PAGE: TESTIMONIALS
 * ==================================================================== */
$testi = [];
$testi[] = [ 'key' => 'tab_vai_testi_hero', 'name' => 'tab_hero', 'label' => 'Page Hero', 'type' => 'tab' ];
$testi[] = [ 'key'=>'field_testi_hero_eyebrow','name'=>'testi_hero_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Testimonials' ];
$testi[] = [ 'key'=>'field_testi_hero_title_pre','name'=>'testi_hero_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'What' ];
$testi[] = [ 'key'=>'field_testi_hero_em','name'=>'testi_hero_em','label'=>'Title — italic word','type'=>'text','default_value'=>'clients' ];
$testi[] = [ 'key'=>'field_testi_hero_title_post','name'=>'testi_hero_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'say about VAI.' ];
$testi[] = [ 'key'=>'field_testi_hero_sub','name'=>'testi_hero_sub','label'=>'Subtext','type'=>'textarea','rows'=>3,'default_value'=>'A short selection of feedback from clients across Indonesia and overseas. Every name and quote used with permission.' ];

$testi[] = [ 'key' => 'tab_vai_testi_featured', 'name' => 'tab_featured', 'label' => 'Featured', 'type' => 'tab' ];
$testi[] = [ 'key'=>'field_testi_feat_quote','name'=>'testi_feat_quote','label'=>'Featured quote','type'=>'textarea','rows'=>5,'default_value'=>"Of all the VAs I have, Mimi is the best one. She is thoughtful, timely, kind, reliable and resourceful. I don't need to explain too many details. She already understands everything. Outstanding!" ];
$testi[] = [ 'key'=>'field_testi_feat_name','name'=>'testi_feat_name','label'=>'Featured name','type'=>'text','default_value'=>'James LC' ];
$testi[] = [ 'key'=>'field_testi_feat_role','name'=>'testi_feat_role','label'=>'Featured role','type'=>'text','default_value'=>'Businessman' ];
$testi[] = [ 'key'=>'field_testi_feat_cc','name'=>'testi_feat_cc','label'=>'Featured country (ISO 3)','type'=>'text','default_value'=>'DEU','maxlength'=>3 ];

$testi[] = [ 'key' => 'tab_vai_testi_cards', 'name' => 'tab_cards', 'label' => 'Testimonial Cards (16)', 'type' => 'tab' ];
vai_fg_repeater( $testi, 'card_quote',   'Quote',                'testi_card', 16, 'textarea', ['rows'=>4] );
vai_fg_repeater( $testi, 'card_name',    'Name',                 'testi_card', 16, 'text' );
vai_fg_repeater( $testi, 'card_role',    'Role',                 'testi_card', 16, 'text' );
vai_fg_repeater( $testi, 'card_cc',      'Country (ISO 3)',      'testi_card', 16, 'text', ['maxlength'=>3] );
vai_fg_repeater( $testi, 'card_init',    'Initials (auto if blank)', 'testi_card', 16, 'text', ['maxlength'=>3] );

acf_add_local_field_group( [
    'key'      => 'group_vai_testimonial',
    'title'    => 'VAI Testimonial Page',
    'fields'   => $testi,
    'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-testimonial.php' ] ] ],
    'menu_order' => 0,
    'label_placement' => 'left',
    'hide_on_screen' => [ 'the_content', 'excerpt', 'discussion', 'comments', 'revisions', 'slug', 'author', 'featured_image' ],
] );

/* ====================================================================
 *  PAGE: CONTACT
 * ==================================================================== */
$contact = [];
$contact[] = [ 'key' => 'tab_vai_contact_hero', 'name' => 'tab_hero', 'label' => 'Page Hero', 'type' => 'tab' ];
$contact[] = [ 'key'=>'field_contact_hero_eyebrow','name'=>'contact_hero_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Contact' ];
$contact[] = [ 'key'=>'field_contact_hero_title_pre','name'=>'contact_hero_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>"Let's talk about your" ];
$contact[] = [ 'key'=>'field_contact_hero_em','name'=>'contact_hero_em','label'=>'Title — italic word','type'=>'text','default_value'=>'workload' ];
$contact[] = [ 'key'=>'field_contact_hero_title_post','name'=>'contact_hero_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'.' ];
$contact[] = [ 'key'=>'field_contact_hero_sub','name'=>'contact_hero_sub','label'=>'Subtext','type'=>'textarea','rows'=>3,'default_value'=>'Reach out and we will reply within 1 business day. Free consultation, no obligation.' ];
vai_fg_repeater( $contact, 'stat_num', 'Hero stat number', 'contact_hero', 4, 'text', ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $contact, 'stat_lbl', 'Hero stat label',  'contact_hero', 4, 'text', ['wrapper'=>['width'=>'25']] );
$contact[] = [ 'key'=>'field_contact_cta_title_pre','name'=>'contact_cta_title_pre','label'=>'CTA title — before italic','type'=>'text','default_value'=>'Prefer to' ];
$contact[] = [ 'key'=>'field_contact_cta_em','name'=>'contact_cta_em','label'=>'CTA title — italic word','type'=>'text','default_value'=>'book a call' ];
$contact[] = [ 'key'=>'field_contact_cta_title_post','name'=>'contact_cta_title_post','label'=>'CTA title — after italic','type'=>'text','default_value'=>'?' ];
$contact[] = [ 'key'=>'field_contact_cta_sub','name'=>'contact_cta_sub','label'=>'CTA subtext','type'=>'textarea','rows'=>2,'default_value'=>'Pick a time directly via our scheduling form. 30 minutes, free, no obligation.' ];
$contact[] = [ 'key'=>'field_contact_cta_button','name'=>'contact_cta_button','label'=>'CTA button','type'=>'text','default_value'=>'Book a Free Consultation' ];
$contact[] = [ 'key'=>'field_contact_cta_url','name'=>'contact_cta_url','label'=>'CTA URL','type'=>'url','default_value'=>'https://form.jotform.com/202773574256057' ];

$contact[] = [ 'key' => 'tab_vai_contact_info', 'name' => 'tab_info', 'label' => 'Contact Info', 'type' => 'tab' ];
$contact[] = [ 'key'=>'field_contact_email','name'=>'contact_email','label'=>'Email','type'=>'text','default_value'=>'hello@vai.id' ];
$contact[] = [ 'key'=>'field_contact_phone','name'=>'contact_phone','label'=>'Phone','type'=>'text','default_value'=>'+62 21 1234 5678' ];
$contact[] = [ 'key'=>'field_contact_whatsapp','name'=>'contact_whatsapp','label'=>'WhatsApp (digits only, with country code)','type'=>'text','default_value'=>'6281234567890' ];
$contact[] = [ 'key'=>'field_contact_address','name'=>'contact_address','label'=>'Address','type'=>'textarea','rows'=>3,'default_value'=>'Jakarta, Indonesia' ];
$contact[] = [ 'key'=>'field_contact_hours','name'=>'contact_hours','label'=>'Business hours','type'=>'text','default_value'=>'Mon–Fri, 09:00–18:00 WIB' ];

$contact[] = [ 'key' => 'tab_vai_contact_form', 'name' => 'tab_form', 'label' => 'Form Labels', 'type' => 'tab' ];
$contact[] = [ 'key'=>'field_contact_form_intro','name'=>'contact_form_intro','label'=>'Form intro','type'=>'textarea','rows'=>2,'default_value'=>'Tell us about your workload. We will reply within 1 business day.' ];
$contact[] = [ 'key'=>'field_contact_form_submit','name'=>'contact_form_submit','label'=>'Submit button','type'=>'text','default_value'=>'Send message' ];
$contact[] = [ 'key'=>'field_contact_form_success','name'=>'contact_form_success','label'=>'Success message','type'=>'textarea','rows'=>2,'default_value'=>'Thanks. We will reply within 1 business day.' ];

$contact[] = [ 'key' => 'tab_vai_contact_faq', 'name' => 'tab_faq', 'label' => 'FAQ (3)', 'type' => 'tab' ];
vai_fg_repeater( $contact, 'faq_q', 'Question', 'contact_faq', 3, 'text' );
vai_fg_repeater( $contact, 'faq_a', 'Answer',   'contact_faq', 3, 'textarea', ['rows'=>3] );

acf_add_local_field_group( [
    'key'      => 'group_vai_contact',
    'title'    => 'VAI Contact Page',
    'fields'   => $contact,
    'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-contact.php' ] ] ],
    'menu_order' => 0,
    'label_placement' => 'left',
    'hide_on_screen' => [ 'the_content', 'excerpt', 'discussion', 'comments', 'revisions', 'slug', 'author', 'featured_image' ],
] );

/* ====================================================================
 *  PAGE: BLOG (wrapper only)
 * ==================================================================== */
$blog = [];
$blog[] = [ 'key'=>'field_blog_hero_eyebrow','name'=>'blog_hero_eyebrow','label'=>'Eyebrow','type'=>'text','default_value'=>'Blog' ];
$blog[] = [ 'key'=>'field_blog_hero_title_pre','name'=>'blog_hero_title_pre','label'=>'Title — before italic','type'=>'text','default_value'=>'Notes from the' ];
$blog[] = [ 'key'=>'field_blog_hero_em','name'=>'blog_hero_em','label'=>'Title — italic word','type'=>'text','default_value'=>'VAI team' ];
$blog[] = [ 'key'=>'field_blog_hero_title_post','name'=>'blog_hero_title_post','label'=>'Title — after italic','type'=>'text','default_value'=>'.' ];
$blog[] = [ 'key'=>'field_blog_hero_sub','name'=>'blog_hero_sub','label'=>'Subtext','type'=>'textarea','rows'=>2,'default_value'=>'Working tips, productivity notes, and updates from the team.' ];
vai_fg_repeater( $blog, 'stat_num', 'Hero stat number', 'blog_hero', 4, 'text', ['wrapper'=>['width'=>'25']] );
vai_fg_repeater( $blog, 'stat_lbl', 'Hero stat label',  'blog_hero', 4, 'text', ['wrapper'=>['width'=>'25']] );
$blog[] = [ 'key'=>'field_blog_cta_title_pre','name'=>'blog_cta_title_pre','label'=>'CTA title — before italic','type'=>'text','default_value'=>'Want to be the' ];
$blog[] = [ 'key'=>'field_blog_cta_em','name'=>'blog_cta_em','label'=>'CTA title — italic word','type'=>'text','default_value'=>'next success story' ];
$blog[] = [ 'key'=>'field_blog_cta_title_post','name'=>'blog_cta_title_post','label'=>'CTA title — after italic','type'=>'text','default_value'=>'?' ];
$blog[] = [ 'key'=>'field_blog_cta_sub','name'=>'blog_cta_sub','label'=>'CTA subtext','type'=>'textarea','rows'=>2,'default_value'=>"Book a free consultation. We'll review your workload and recommend the right plan, no pressure." ];
$blog[] = [ 'key'=>'field_blog_cta_button','name'=>'blog_cta_button','label'=>'CTA button','type'=>'text','default_value'=>'Request Free Consultation' ];
$blog[] = [ 'key'=>'field_blog_cta_url','name'=>'blog_cta_url','label'=>'CTA URL','type'=>'url','default_value'=>'https://form.jotform.com/202773574256057' ];

acf_add_local_field_group( [
    'key'      => 'group_vai_blog',
    'title'    => 'VAI Blog Page',
    'fields'   => $blog,
    'location' => [ [ [ 'param' => 'page_template', 'operator' => '==', 'value' => 'page-blog.php' ] ] ],
    'menu_order' => 0,
    'label_placement' => 'left',
    'hide_on_screen' => [ 'the_content', 'excerpt', 'discussion', 'comments', 'revisions', 'slug', 'author', 'featured_image' ],
] );
