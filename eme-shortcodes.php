<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_shortcode( 'eme_calendar', 'eme_get_calendar_shortcode' );
add_shortcode( 'eme_tasks_signupform', 'eme_tasks_signupform_shortcode' );
add_shortcode( 'eme_tasks_signups', 'eme_tasks_signups_shortcode' );
add_shortcode( 'eme_mytasks', 'eme_mytasks_signups_shortcode' );
add_shortcode( 'eme_events', 'eme_get_events_list_shortcode' );
add_shortcode( 'eme_event', 'eme_display_single_event_shortcode' );
add_shortcode( 'eme_events_page', 'eme_get_events_page_shortcode' );
add_shortcode( 'eme_countdown', 'eme_countdown_shortcode' );
add_shortcode( 'eme_holidays', 'eme_holidays_shortcode' );
add_shortcode( 'eme_filterform', 'eme_filter_form_shortcode' );
add_shortcode( 'eme_for', 'eme_for_shortcode' );
add_shortcode( 'eme_if', 'eme_if_shortcode' );
add_shortcode( 'eme_if2', 'eme_if_shortcode' );
add_shortcode( 'eme_if3', 'eme_if_shortcode' );
add_shortcode( 'eme_if4', 'eme_if_shortcode' );
add_shortcode( 'eme_if5', 'eme_if_shortcode' );
add_shortcode( 'eme_if6', 'eme_if_shortcode' );
add_shortcode( 'eme_if7', 'eme_if_shortcode' );
add_shortcode( 'eme_if8', 'eme_if_shortcode' );
add_shortcode( 'eme_if9', 'eme_if_shortcode' );
add_shortcode( 'eme_if10', 'eme_if_shortcode' );
add_shortcode( 'eme_if11', 'eme_if_shortcode' );
add_shortcode( 'eme_if12', 'eme_if_shortcode' );
add_shortcode( 'eme_if13', 'eme_if_shortcode' );
add_shortcode( 'eme_if14', 'eme_if_shortcode' );
add_shortcode( 'eme_if15', 'eme_if_shortcode' );
add_shortcode( 'eme_rss_link', 'eme_rss_link_shortcode' );
add_shortcode( 'eme_ical_link', 'eme_ical_link_shortcode' );
add_shortcode( 'eme_locations_map', 'eme_global_map_shortcode' );
add_shortcode( 'eme_location_map', 'eme_single_location_map_shortcode' );
add_shortcode( 'eme_locations', 'eme_get_locations_shortcode' );
add_shortcode( 'eme_location', 'eme_get_location_shortcode' );
add_shortcode( 'eme_add_booking_form', 'eme_add_booking_form_shortcode' );
add_shortcode( 'eme_add_multibooking_form', 'eme_add_multibooking_form_shortcode' );
add_shortcode( 'eme_add_simple_multibooking_form', 'eme_add_simple_multibooking_form_shortcode' );
add_shortcode( 'eme_cancel_all_bookings_form', 'eme_cancel_bookings_form_shortcode' );
add_shortcode( 'eme_bookings', 'eme_booking_list_shortcode' );
add_shortcode( 'eme_bookings_report_link', 'eme_bookings_report_link_shortcode' );
add_shortcode( 'eme_mybookings', 'eme_mybooking_list_shortcode' );
add_shortcode( 'eme_mymemberships', 'eme_mymemberships_list_shortcode' );
add_shortcode( 'eme_attendees', 'eme_attendee_list_shortcode' );
add_shortcode( 'eme_attendees_report_link', 'eme_attendees_report_link_shortcode' );
add_shortcode( 'eme_members_report_link', 'eme_members_report_link_shortcode' );
add_shortcode( 'eme_categories', 'eme_get_categories_shortcode' );
add_shortcode( 'eme_people', 'eme_people_shortcode' );
add_shortcode( 'eme_members', 'eme_members_shortcode' );
add_shortcode( 'eme_person', 'eme_person_shortcode' );
add_shortcode( 'eme_add_member_form', 'eme_add_member_form_shortcode' );
add_shortcode( 'eme_edit_member_form', 'eme_edit_member_form_shortcode' );
add_shortcode( 'eme_change_personal_info', 'eme_cpi_shortcode' );
add_shortcode( 'eme_request_personal_info', 'eme_rpi_shortcode' );
add_shortcode( 'eme_gdpr', 'eme_rpi_shortcode' );
add_shortcode( 'eme_gdpr_approve', 'eme_gdpr_approve_shortcode' );
add_shortcode( 'eme_subform', 'eme_subform_shortcode' );
add_shortcode( 'eme_unsubform', 'eme_unsubform_shortcode' );

// old shortcode names
add_shortcode( 'eme_delete_booking_form', 'eme_cancel_bookings_form_shortcode' );
add_shortcode( 'events_calendar', 'eme_get_calendar_shortcode' );
add_shortcode( 'events_list', 'eme_get_events_list_shortcode' );
add_shortcode( 'display_single_event', 'eme_display_single_event_shortcode' );
add_shortcode( 'events_page', 'eme_get_events_page_shortcode' );
add_shortcode( 'events_rss_link', 'eme_rss_link_shortcode' );
add_shortcode( 'events_countdown', 'eme_countdown_shortcode' );
add_shortcode( 'events_filterform', 'eme_filter_form_shortcode' );
add_shortcode( 'events_if', 'eme_if_shortcode' );
add_shortcode( 'events_if2', 'eme_if_shortcode' );
add_shortcode( 'events_if3', 'eme_if_shortcode' );
add_shortcode( 'events_if4', 'eme_if_shortcode' );
add_shortcode( 'events_if5', 'eme_if_shortcode' );
add_shortcode( 'events_if6', 'eme_if_shortcode' );
add_shortcode( 'events_ical_link', 'eme_ical_link_shortcode' );
add_shortcode( 'locations_map', 'eme_global_map_shortcode' );
add_shortcode( 'display_single_location', 'eme_single_location_map_shortcode' );
add_shortcode( 'events_locations', 'eme_get_locations_shortcode' );
add_shortcode( 'events_add_booking_form', 'eme_add_booking_form_shortcode' );
add_shortcode( 'events_delete_booking_form', 'eme_delete_booking_form_shortcode' );
add_shortcode( 'eme_cancel_booking_form', 'eme_cancel_bookings_form_shortcode' );

