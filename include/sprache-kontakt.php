<?php
/**
 * Sprache für die Kontakt-Seite (Formular).
 */

// Standard-Sprache Deutsch
$lang = 'de';

// Umschalten auf Englisch, wenn ?lang=en
if (isset($_GET['lang']) && $_GET['lang'] === 'en') {
  $lang = 'en';
}

// Array mit allen Textbausteinen für das Kontaktformular
$kontaktTexte = [

  // ========================
  // ======= DEUTSCH (de) ===
  // ========================
  'de' => [
    // Seitentitel / Banner
    'heading_h1'             => 'Anfrage Ferienwohnungen Luttinger',
    'heading_h2'             => 'Anfrage',
    'alt_banner_contact'     => 'Zugspitzarena Luttinger (Kontakt)',

    // Danke/Erfolgsmeldung
    'thank_you'              => 'Vielen Dank für Ihre Nachricht!',
    'thank_you_message'      => 'Wir lassen Ihnen umgehend eine Antwort zukommen.',

    // Formular-Feldsets und Labels
    'legend_personal_data'   => 'Persönliche Daten',
    'legend_request_data'    => 'Anfragedaten',
    'legend_comments'        => 'Weitere Anmerkungen',

    'label_salutation'       => 'Anrede:',
    'option_salutation_mr'   => 'Herr',
    'option_salutation_mrs'  => 'Frau',

    'label_last_name'        => 'Ihr Nachname:*',
    'label_first_name'       => 'Ihr Vorname:*',
    'label_email'            => 'E-Mail Adresse:*',

    'label_arrival_date'     => 'Tag der Anreise:',
    'label_departure_date'   => 'Tag der Abreise:',
    'label_adults'           => 'Anzahl Erwachsene:',
    'label_children'         => 'Anzahl Kinder:',
    'label_rooms'            => 'Anzahl Zimmer:',
    'label_apartments'       => 'Anzahl Apartment:',
    'label_textarea'         => 'Ihre Nachricht / Sonstige Anmerkungen',

    // Buttons
    'btn_send'               => 'Senden',
    'btn_reset'              => 'Zurücksetzen',

    // reCAPTCHA
    'recaptcha_label'        => 'Bitte das reCAPTCHA bestätigen.',

    // ================== Fehlermeldungen ==================
    'error_recaptcha_missing' => 'Bitte bestätige das reCAPTCHA.',
    'error_recaptcha_failed'  => 'reCAPTCHA-Prüfung fehlgeschlagen. Bitte versuche es erneut.',
    'error_spam_schnell'      => 'Formular zu schnell ausgefüllt – Spamverdacht!',
    'error_spam_honeypot'     => 'Spamverdacht (Honeypot).',
    'error_csrf'              => 'Ungültiges CSRF-Token.',
    'error_invalid_email'     => 'Bitte eine gültige E-Mail-Adresse angeben!',
    'error_names_empty'       => 'Bitte Nachname und Vorname ausfüllen!',
    'error_date_range'        => 'Das Abreisedatum muss nach dem Anreisedatum liegen.',
    'error_date_invalid'      => 'Bitte gültige Daten eingeben.',

    // ========== E-Mail-Betreff und Texte (Admin/Gast) ==========
    'mail_subject_admin' => 'Neue Nachricht von luttinger-bichlbach.at',
    'mail_subject_user'  => 'Ihre Nachricht an Ferienwohnungen Luttinger',

    // Bestätigungsmail an den Gast
    'mail_user_body_intro' => 'Sehr %ANREDE% %VORNAME% %NACHNAME%,',
    'mail_user_body_text'  => 'vielen Dank für Ihre Nachricht an Ferienwohnungen Luttinger.
                               Wir werden Ihre Anfrage schnellstmöglich bearbeiten und uns bei Ihnen melden.',
    'mail_user_body_hr'    => '––––––––––––––––––––––––––––––––––––––––––',
    'mail_user_body_data'  => 'Ihre angegebenen Daten',
    'mail_user_body_outro' => 'Bei Rückfragen können Sie gerne auf diese E-Mail antworten.<br><br>
                               Mit freundlichen Grüßen,<br>
                               am Mühlbach – Ferienwohnungen Luttinger<br>
                               Wahl 109, A-6621 Bichlbach<br>
                               Tel. +43 676 953 413 0<br>
                               info@luttinger-bichlbach.at<br>
                               www.luttinger-bichlbach.at',
  ],

  // =========================
  // ======= ENGLISCH (en) ===
  // =========================
  'en' => [
    // Page headings
    'heading_h1'             => 'Inquiry Ferienwohnungen Luttinger',
    'heading_h2'             => 'Request',
    'alt_banner_contact'     => 'Zugspitz Arena Luttinger (Contact)',

    // Thank you
    'thank_you'              => 'Thank you for your message!',
    'thank_you_message'      => 'We will get back to you as soon as possible.',

    // Form fieldsets and labels
    'legend_personal_data'   => 'Personal Data',
    'legend_request_data'    => 'Request Data',
    'legend_comments'        => 'Additional Remarks',

    'label_salutation'       => 'Salutation:',
    'option_salutation_mr'   => 'Mr',
    'option_salutation_mrs'  => 'Mrs',

    'label_last_name'        => 'Your Last Name:*',
    'label_first_name'       => 'Your First Name:*',
    'label_email'            => 'Email Address:*',

    'label_arrival_date'     => 'Arrival Date:',
    'label_departure_date'   => 'Departure Date:',
    'label_adults'           => 'Number of Adults:',
    'label_children'         => 'Number of Children:',
    'label_rooms'            => 'Number of Rooms:',
    'label_apartments'       => 'Number of Apartments:',
    'label_textarea'         => 'Your Message / Comments',

    // Buttons
    'btn_send'               => 'Send',
    'btn_reset'              => 'Reset',

    // reCAPTCHA
    'recaptcha_label'        => 'Please confirm the reCAPTCHA.',

    // Errors
    'error_recaptcha_missing' => 'Please confirm the reCAPTCHA.',
    'error_recaptcha_failed'  => 'reCAPTCHA check failed. Please try again.',
    'error_spam_schnell'      => 'Form submitted too quickly – spam suspicion!',
    'error_spam_honeypot'     => 'Spam suspicion (honeypot).',
    'error_csrf'              => 'Invalid CSRF token.',
    'error_invalid_email'     => 'Please provide a valid email address!',
    'error_names_empty'       => 'Please enter both your last name and first name!',
    'error_date_range'        => 'Departure date must be after arrival date.',
    'error_date_invalid'      => 'Please enter valid dates.',

    // E-Mail subjects & texts
    'mail_subject_admin' => 'New message from luttinger-bichlbach.at',
    'mail_subject_user'  => 'Your message to Apartment Luttinger',

    'mail_user_body_intro' => 'Dear %ANREDE% %VORNAME% %NACHNAME%,',
    'mail_user_body_text'  => 'Thank you for your message to Apartment Luttinger.
                               We will process your request as soon as possible and contact you.',
    'mail_user_body_hr'    => '––––––––––––––––––––––––––––––––––––––––––',
    'mail_user_body_data'  => 'Your provided data',
    'mail_user_body_outro' => 'If you have any questions, feel free to reply to this email.<br><br>
                               Kind regards,<br>
                               am Mühlbach – Apartment Luttinger<br>
                               Wahl 109, A-6621 Bichlbach (Austria)<br>
                               Phone +43 676 953 413 0<br>
                               info@luttinger-bichlbach.at<br>
                               www.luttinger-bichlbach.at',
  ],
];
