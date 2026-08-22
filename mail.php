<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Collecting data safely
    $full_name = $_POST['full_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $course = $_POST['course'] ?? '';
    $state = $_POST['state'] ?? '';
    $source = $_POST['source'] ?? '';
    $sub_source = $_POST['sub_source'] ?? '';
    $form_name = $_POST['form_name'] ?? '';
    $page_url = $_POST['page_url'] ?? '';
    $brochure_pdf = $_POST['brochure_pdf'] ?? '';

    // Auto-detect sub_source from page_url (source stays unchanged)
    if (empty($sub_source)) {
        if (strpos($page_url, 'amity') !== false) {
            $sub_source = 'Amity';
        } elseif (strpos($page_url, 'galgotias') !== false) {
            $sub_source = 'Galgotias';
        } elseif (strpos($page_url, 'uu') !== false) {
            $sub_source = 'UU_Organic';
        } elseif (strpos($page_url, 'mu') !== false || strpos($page_url, 'mangalayatan') !== false) {
            $sub_source = 'MU_Organic';
        } elseif (strpos($page_url, 'cu') !== false || strpos($page_url, 'chandigarh') !== false) {
            $sub_source = 'CU_Organic';
        } elseif (strpos($page_url, 'lpu') !== false || strpos($page_url, 'lovely') !== false) {
            $sub_source = 'LPU_Organic';
        } elseif (strpos($page_url, 'manipal') !== false) {
            $sub_source = 'Manipal_Organic';
        } elseif (strpos($page_url, 'smu') !== false || strpos($page_url, 'sikkim') !== false) {
            $sub_source = 'SMU_Organic';
        } elseif (strpos($page_url, 'rushford') !== false) {
            $sub_source = 'Rushford_Organic';
        } elseif (strpos($page_url, 'ggu') !== false) {
            $sub_source = 'GGU_Organic';
        } elseif (strpos($page_url, 'ssbm') !== false) {
            $sub_source = 'SSBM_Organic';
        } elseif (strpos($page_url, 'iiitb') !== false) {
            $sub_source = 'IIITB_Organic';
        } elseif (strpos($page_url, 'liverpool') !== false) {
            $sub_source = 'Liverpool_Organic';
        } elseif (strpos($page_url, 'edgewood') !== false) {
            $sub_source = 'Edgewood_Organic';
        } elseif (strpos($page_url, 'esgci') !== false) {
            $sub_source = 'ESGCI_Organic';
        } elseif (strpos($page_url, 'iimk') !== false) {
            $sub_source = 'IIM_Kozhikode_Organic';
        } elseif (strpos($page_url, 'iimb') !== false) {
            $sub_source = 'IIM_Bangalore_Organic';
        } elseif (strpos($page_url, 'iim-nagpur') !== false) {
            $sub_source = 'IIM_Nagpur_Organic';
        } elseif (strpos($page_url, 'psb') !== false) {
            $sub_source = 'PSB_Organic';
        } elseif (strpos($page_url, 'iimb') !== false) {
            $sub_source = 'IIMB_Organic';
        } elseif (strpos($page_url, 'bdu') !== false) {
            $sub_source = 'BDU_Organic';
        } elseif (strpos($page_url, 'aju') !== false) {
            $sub_source = 'AJU_Organic';
        }
    }

    // Only store brochure PDF in session IF the form is explicitly a "Download Brochure" form
    if ($form_name === 'Download Brochure' && !empty($brochure_pdf)) {
        $_SESSION['brochure_pdf'] = $brochure_pdf;
    } else {
        unset($_SESSION['brochure_pdf']);
    }

    $utm_source = !empty($_POST['utm_source']) ? $_POST['utm_source'] : 'Organic';
    // Determine default utm_medium based on page
    $default_utm_medium = 'Univ360_Organic';
    if ($source === 'Amity' || strpos($page_url, 'amity') !== false) {
        $default_utm_medium = 'Amity_Organic';
    } elseif (strpos($page_url, 'uu') !== false || strpos($page_url, 'uttaranchal') !== false) {
        $default_utm_medium = 'UU_Organic';
    } elseif (strpos($page_url, 'galgotias') !== false) {
        $default_utm_medium = 'Galgotias_Organic';
    } elseif (strpos($page_url, 'mu') !== false || strpos($page_url, 'mangalayatan') !== false) {
        $default_utm_medium = 'MU_Organic';
    } elseif (strpos($page_url, 'cu') !== false || strpos($page_url, 'chandigarh') !== false) {
        $default_utm_medium = 'CU_Organic';
    } elseif (strpos($page_url, 'lpu') !== false || strpos($page_url, 'lovely') !== false) {
        $default_utm_medium = 'LPU_Organic';
    } elseif (strpos($page_url, 'manipal') !== false) {
        $default_utm_medium = 'Manipal_Organic';
    } elseif (strpos($page_url, 'smu') !== false || strpos($page_url, 'sikkim') !== false) {
        $default_utm_medium = 'SMU_Organic';
    } elseif (strpos($page_url, 'rushford') !== false) {
        $default_utm_medium = 'Rushford_Organic';
    } elseif (strpos($page_url, 'ggu') !== false) {
        $default_utm_medium = 'GGU_Organic';
    } elseif (strpos($page_url, 'ssbm') !== false) {
        $default_utm_medium = 'SSBM_Organic';
    } elseif (strpos($page_url, 'iiitb') !== false) {
        $default_utm_medium = 'IIITB_Organic';
    } elseif (strpos($page_url, 'liverpool') !== false) {
        $default_utm_medium = 'Liverpool_Organic';
    } elseif (strpos($page_url, 'edgewood') !== false) {
        $default_utm_medium = 'Edgewood_Organic';
    } elseif (strpos($page_url, 'esgci') !== false) {
        $default_utm_medium = 'ESGCI_Organic';
    } elseif (strpos($page_url, 'iimk') !== false) {
        $default_utm_medium = 'IIM_Kozhikode_Organic';
    } elseif (strpos($page_url, 'iimb') !== false) {
        $default_utm_medium = 'IIM_Bangalore_Organic';
    } elseif (strpos($page_url, 'iim-nagpur') !== false) {
        $default_utm_medium = 'IIM_Nagpur_Organic';
    } elseif (strpos($page_url, 'psb') !== false) {
        $default_utm_medium = 'PSB_Organic';
    } elseif (strpos($page_url, 'iimb') !== false) {
        $default_utm_medium = 'IIMB_Organic';
    } elseif (strpos($page_url, 'bdu') !== false) {
        $default_utm_medium = 'BDU_Organic';
    } elseif (strpos($page_url, 'aju') !== false) {
        $default_utm_medium = 'AJU_Organic';
    }
    $utm_medium = !empty($_POST['utm_medium']) ? $_POST['utm_medium'] : $default_utm_medium;
    $utm_campaign = $_POST['utm_campaign'] ?? '';
    $utm_term = $_POST['utm_term'] ?? '';
    $utm_content = $_POST['utm_content'] ?? '';

    // CRM API URL
    $url = 'https://api.crm.mysode.com/api/lead/apicreated';

    $data = array(
        'name' => $full_name,
        'email' => $email,
        'phone' => $phone,
        'course' => $course,
        'state' => $state,
        'dob' => '',
        'source' => $source,
        'sub_source' => $sub_source,
        'utm_source' => $utm_source,
        'utm_campaign' => $utm_campaign,
        'utm_medium' => $utm_medium,
        'utm_term' => $utm_term,
        'utm_content' => $utm_content,
        'form_name' => $form_name,
        'page_url' => $page_url,
    );

    $api_key = 'a04b4291461f8b060559dfc965864c2c2590e6edd2f5aa7a49388484a1953f22';

    // Convert to JSON
    $postvars = json_encode($data);

    // cURL request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "x-api-key: $api_key",
        "Content-Type: application/json"
    ));

    $response = curl_exec($ch);
    curl_close($ch);



    /* ===============================
   PHONE NUMBER FORMATTING FUNCTION
================================ */
    function formatPhoneForBrevo($phone)
    {
        // Remove any spaces, dots, dashes
        $phone = preg_replace('/[^0-9+]/', '', $phone);

        // If phone already has +, return as is
        if (strpos($phone, '+') === 0) {
            return $phone;
        }

        // Remove any leading zeros
        $phone = ltrim($phone, '0');

        // Check if it's a 10-digit Indian number
        if (strlen($phone) === 10 && preg_match('/^[6-9][0-9]{9}$/', $phone)) {
            // Add +91 for Indian numbers
            return '+91' . $phone;
        }

        // For 11-digit numbers starting with 0 (like 098...)
        if (strlen($phone) === 11 && $phone[0] === '0') {
            $phone = substr($phone, 1);
            if (strlen($phone) === 10 && preg_match('/^[6-9][0-9]{9}$/', $phone)) {
                return '+91' . $phone;
            }
        }

        // For 12-digit numbers starting with 91
        if (strlen($phone) === 12 && substr($phone, 0, 2) === '91') {
            return '+' . $phone;
        }

        // For 13-digit numbers starting with 091
        if (strlen($phone) === 13 && substr($phone, 0, 3) === '091') {
            $phone = substr($phone, 2);
            return '+91' . $phone;
        }

        // If phone already has country code but no +
        if (strlen($phone) === 12 && preg_match('/^91[6-9][0-9]{9}$/', $phone)) {
            return '+' . $phone;
        }

        // Default: return as is with + if not present
        return '+' . $phone;
    }

    /* ===============================
       BREVO INTEGRATION
    ================================ */
    $brevo_api_key = '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';

    // Format phone with country code
    $phone_formatted = formatPhoneForBrevo($phone);

    if (!empty($email)) {
        $brevo_list_id = ($source === 'Amity') ? 243 : 276;
        $brevo_source = ($source === 'Amity') ? "DES Amity LP" : "DES in";

        $brevo_data = [
            "email" => $email,
            "listIds" => [$brevo_list_id],
            "attributes" => [
                "FULLNAME" => $full_name,
                "SMS" => $phone_formatted,
                "MOBILE" => $phone_formatted,
                "COURSES" => $course,
                "STATES" => $state,
                "UTM_SOURCE" => $utm_source,
                "UTM_CAMPAIGN" => $utm_campaign,
                "UTM_MEDIUM" => $utm_medium,
                "UTM_TERM" => $utm_term,
                "SOURCE" => $brevo_source
            ],
            "updateEnabled" => true
        ];

        $brevo_ch = curl_init();
        curl_setopt_array($brevo_ch, [
            CURLOPT_URL => 'https://api.brevo.com/v3/contacts',
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($brevo_data),
            CURLOPT_HTTPHEADER => [
                "api-key: {$brevo_api_key}",
                "Content-Type: application/json"
            ],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]);

        curl_exec($brevo_ch);
        curl_close($brevo_ch);
    }

    /* ===============================
       GALLABOX INTEGRATION
    ================================ */
    $gallabox_url = 'https://server.gallabox.com/accounts/61fce6fd9b042a00049ddbc1/integrations/genericWebhook/68494566ef0bd3067b0f3a8d/webhook';

    if (!empty($phone_formatted)) {
        $gallabox_source = ($source === 'Amity') ? "DES Amity LP" : "Univ360";

        $gallabox_data = [
            "name" => $full_name,
            "phone" => $phone_formatted,
            "email" => $email,
            "course" => $course,
            "state" => $state,
            "source" => $gallabox_source,
            "tags" => ["Success"],
            "utm_source" => $utm_source,
            "utm_medium" => $utm_medium,
            "utm_campaign" => $utm_campaign,
            "utm_term" => $utm_term,
            "utm_content" => $utm_content,
        ];

        $gallabox_ch = curl_init();
        curl_setopt_array($gallabox_ch, [
            CURLOPT_URL => $gallabox_url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($gallabox_data),
            CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        ]);

        curl_exec($gallabox_ch);
        curl_close($gallabox_ch);
    }




    // AJAX request handling
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        echo json_encode(['status' => 'success']);
        exit();
    }

    // Redirect
    if (!defined('BASE_URL')) {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        $projectRoot = ($scriptDir === '/' || $scriptDir === '.' || $scriptDir === '') ? '/' : rtrim($scriptDir, '/') . '/';
        if (strpos($host, 'university360.co') !== false) {
            define('BASE_URL', 'https://university360.co/');
        } else {
            define('BASE_URL', $protocol . $host . $projectRoot);
        }
    }
    header('Location: ' . BASE_URL . 'thank-you');
    exit();

} else {
    echo json_encode([
        'response' => 'error',
        'message' => 'POST required'
    ]);
    exit();
}
?>