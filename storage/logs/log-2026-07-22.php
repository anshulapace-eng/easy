<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2026-07-22 12:25:42 --> 404 Page Not Found: Backend/login Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Exceptions.php',
    'line' => 134,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '404 Page Not Found: Backend/login',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\Common.php',
    'line' => 439,
    'function' => 'show_404',
    'class' => 'CI_Exceptions',
    'type' => '->',
    'args' => 
    array (
      0 => 'Backend/login',
      1 => true,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
    'line' => 443,
    'function' => 'show_404',
    'args' => 
    array (
      0 => 'Backend/login',
    ),
  ),
)
ERROR - 2026-07-22 12:52:09 --> Notifications - Could not email appointment-saved to customer (1) : Could not instantiate mail function. Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 352,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Notifications - Could not email appointment-saved to customer (1) : Could not instantiate mail function.',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 98,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Wed, 22 Jul 2026 12:52:07 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: multipart/alternative;
 boundary="b2=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA"

--b2=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            Your appointment has been successfully booked                                                                                
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    Service                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    Jane Doe                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 5:00 pm                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 5:30 pm
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    Calcutta (+5:30)                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        jhhgjhvjh hgvhghgpp                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        pp@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        1234567899                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: multipart/related;
 boundary="b3=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA";
 type="text/html"

--b3=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            Your appointment has been successfully booked                                        </h1>

                                        <p style="text-align: center;">
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    Service                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    Jane Doe                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 5:00 pm                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 5:30 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    Calcutta (+5:30)                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        jhhgjhvjh hgvhghgpp                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        pp@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        1234567899                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/booking/reschedule/jTY7Z5WK6eNI" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA--


--b2=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA--

--b1=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6VVRDDQpCRUdJTjpTVEFOREFSRA0KRFRT
VEFSVDoyMDI1MTIzMVQyMzAwMDBaDQpUWk9GRlNFVFRPOiswMDAwDQpUWk9GRlNFVEZST006KzAw
MDANCkVORDpTVEFOREFSRA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5UDQpVSUQ6ZWEtYzRj
YTQyMzhhMGI5MjM4MjBkY2M1MDlhNmY3NTg0OWINCkRUU1RBUlQ6MjAyNjA3MjJUMTEzMDAwWg0K
RFRFTkQ6MjAyNjA3MjJUMTIwMDAwWg0KU0VRVUVOQ0U6MTc4NDcxNzUyNw0KU1RBVFVTOkNPTkZJ
Uk1FRA0KU1VNTUFSWTpTZXJ2aWNlDQpERVNDUklQVElPTjpcblByb3ZpZGVyXG5cbk5hbWU6IEph
bmUgRG9lXG5FbWFpbDogamFuZUBleGFtcGxlLm9yZ1xuUGhvDQogbmUgTnVtYmVyOiArMTAwMDAw
MDAwMDBcbkFkZHJlc3M6IFxuQ2l0eTogXG5aaXAgQ29kZTogXG5cbkN1c3RvbWVyXG5cbg0KIE5h
bWU6IGpoaGdqaHZqaCBoZ3ZoZ2hncHBcbkVtYWlsOiBwcEBnbWFpbC5jb21cblBob25lIE51bWJl
cjogMTIzNDU2NzgNCiA5OVxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuTm90ZXNc
blxuDQpEVFNUQU1QOjIwMjYwNzIyVDEwNTIwN1oNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFM
O1JPTEU9UkVRLVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7
Q049amhoZ2podmpoIGhndmhnaGdwcDptYWlsdG86cHBAZ21haWwuY29tDQpBVFRFTkRFRTtDVVRZ
UEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1BQ0NFUFRFRDtSU1ZQ
DQogPUZBTFNFO0NOPUphbmUgRG9lOm1haWx0bzpqYW5lQGV4YW1wbGUub3JnDQpPUkdBTklaRVI7
Q049SmFuZSBEb2U6bWFpbHRvOmphbmVAZXhhbXBsZS5vcmcNCkJFR0lOOlZBTEFSTQ0KVFJJR0dF
UjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3MjJUMTExNTAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZ
OkFsYXJtIG5vdGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRl
cg0KQVRURU5ERUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNU
QVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0
bzpwcEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1E
QVRFLVRJTUU6MjAyNjA3MjJUMTAzMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5v
dGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5E
RUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMt
QUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0bzpwcEBnbWFp
bC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVINCg==

--b1=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 84,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 17:00:00',
                'end_datetime' => '2026-07-22 17:30:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              2 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'Your appointment has been successfully booked',
              6 => 'Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.',
              7 => 'http://localhost/easy/index.php/booking/reschedule/jTY7Z5WK6eNI',
              8 => 'pp@gmail.com',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:UTC
BEGIN:STANDARD
DTSTART:20251231T230000Z
TZOFFSETTO:+0000
TZOFFSETFROM:+0000
END:STANDARD
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c4ca4238a0b923820dcc509a6f75849b
DTSTART:20260722T113000Z
DTEND:20260722T120000Z
SEQUENCE:1784717527
STATUS:CONFIRMED
SUMMARY:Service
DESCRIPTION:\\nProvider\\n\\nName: Jane Doe\\nEmail: jane@example.org\\nPho
 ne Number: +10000000000\\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\n
 Name: jhhgjhvjh hgvhghgpp\\nEmail: pp@gmail.com\\nPhone Number: 12345678
 99\\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
DTSTAMP:20260722T105207Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=Jane Doe:mailto:jane@example.org
ORGANIZER;CN=Jane Doe:mailto:jane@example.org
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T111500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T103000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'Asia/Calcutta',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'args' => 
            array (
              0 => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            ),
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
      1 => 'appointment-saved to customer',
      2 => 1,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'book_datetime' => '2026-07-22 12:52:07',
        'start_datetime' => '2026-07-22 11:30:00',
        'end_datetime' => '2026-07-22 12:00:00',
        'location' => NULL,
        'meeting_link' => NULL,
        'notes' => '',
        'hash' => 'jTY7Z5WK6eNI',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 2,
        'id_users_customer' => 4,
        'id_services' => 1,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'name' => 'Service',
        'duration' => '30',
        'price' => 0.0,
        'currency' => '',
        'description' => NULL,
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => NULL,
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => NULL,
      ),
      2 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => NULL,
        'city' => NULL,
        'state' => NULL,
        'zip_code' => NULL,
        'notes' => NULL,
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'janedoe',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => '0',
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'default',
        ),
        'services' => 
        array (
          0 => 1,
        ),
      ),
      3 => 
      array (
        'id' => 4,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'first_name' => 'jhhgjhvjh',
        'last_name' => 'hgvhghgpp',
        'email' => 'pp@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '1234567899',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-22 12:52:09 --> #0 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1857): PHPMailer\PHPMailer\PHPMailer->mailSend('Date: Wed, 22 J...', '--b1=_1G3o5GXoY...')
#1 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1670): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 C:\xampp\htdocs\easy\application\libraries\Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#3 C:\xampp\htdocs\easy\application\libraries\Notifications.php(84): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, 'Your appointmen...', 'Thank you for a...', 'http://localhos...', 'pp@gmail.com', 'BEGIN:VCALENDAR...', 'Asia/Calcutta')
#4 C:\xampp\htdocs\easy\application\controllers\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\xampp\htdocs\easy\system\core\CodeIgniter.php(481): Booking->register()
#6 C:\xampp\htdocs\easy\index.php(344): require_once('C:\\xampp\\htdocs...')
#7 {main} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 356,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '#0 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1857): PHPMailer\\PHPMailer\\PHPMailer->mailSend(\'Date: Wed, 22 J...\', \'--b1=_1G3o5GXoY...\')
#1 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1670): PHPMailer\\PHPMailer\\PHPMailer->postSend()
#2 C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php(119): PHPMailer\\PHPMailer\\PHPMailer->send()
#3 C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php(84): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, \'Your appointmen...\', \'Thank you for a...\', \'http://localhos...\', \'pp@gmail.com\', \'BEGIN:VCALENDAR...\', \'Asia/Calcutta\')
#4 C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php(481): Booking->register()
#6 C:\\xampp\\htdocs\\easy\\index.php(344): require_once(\'C:\\\\xampp\\\\htdocs...\')
#7 {main}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 98,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Wed, 22 Jul 2026 12:52:07 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: multipart/alternative;
 boundary="b2=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA"

--b2=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            Your appointment has been successfully booked                                                                                
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    Service                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    Jane Doe                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 5:00 pm                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 5:30 pm
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    Calcutta (+5:30)                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        jhhgjhvjh hgvhghgpp                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        pp@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        1234567899                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: multipart/related;
 boundary="b3=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA";
 type="text/html"

--b3=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            Your appointment has been successfully booked                                        </h1>

                                        <p style="text-align: center;">
                                            Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    Service                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    Jane Doe                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 5:00 pm                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 5:30 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    Calcutta (+5:30)                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        jhhgjhvjh hgvhghgpp                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        pp@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        1234567899                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/booking/reschedule/jTY7Z5WK6eNI" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA--


--b2=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA--

--b1=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6VVRDDQpCRUdJTjpTVEFOREFSRA0KRFRT
VEFSVDoyMDI1MTIzMVQyMzAwMDBaDQpUWk9GRlNFVFRPOiswMDAwDQpUWk9GRlNFVEZST006KzAw
MDANCkVORDpTVEFOREFSRA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5UDQpVSUQ6ZWEtYzRj
YTQyMzhhMGI5MjM4MjBkY2M1MDlhNmY3NTg0OWINCkRUU1RBUlQ6MjAyNjA3MjJUMTEzMDAwWg0K
RFRFTkQ6MjAyNjA3MjJUMTIwMDAwWg0KU0VRVUVOQ0U6MTc4NDcxNzUyNw0KU1RBVFVTOkNPTkZJ
Uk1FRA0KU1VNTUFSWTpTZXJ2aWNlDQpERVNDUklQVElPTjpcblByb3ZpZGVyXG5cbk5hbWU6IEph
bmUgRG9lXG5FbWFpbDogamFuZUBleGFtcGxlLm9yZ1xuUGhvDQogbmUgTnVtYmVyOiArMTAwMDAw
MDAwMDBcbkFkZHJlc3M6IFxuQ2l0eTogXG5aaXAgQ29kZTogXG5cbkN1c3RvbWVyXG5cbg0KIE5h
bWU6IGpoaGdqaHZqaCBoZ3ZoZ2hncHBcbkVtYWlsOiBwcEBnbWFpbC5jb21cblBob25lIE51bWJl
cjogMTIzNDU2NzgNCiA5OVxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuTm90ZXNc
blxuDQpEVFNUQU1QOjIwMjYwNzIyVDEwNTIwN1oNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFM
O1JPTEU9UkVRLVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7
Q049amhoZ2podmpoIGhndmhnaGdwcDptYWlsdG86cHBAZ21haWwuY29tDQpBVFRFTkRFRTtDVVRZ
UEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1BQ0NFUFRFRDtSU1ZQ
DQogPUZBTFNFO0NOPUphbmUgRG9lOm1haWx0bzpqYW5lQGV4YW1wbGUub3JnDQpPUkdBTklaRVI7
Q049SmFuZSBEb2U6bWFpbHRvOmphbmVAZXhhbXBsZS5vcmcNCkJFR0lOOlZBTEFSTQ0KVFJJR0dF
UjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3MjJUMTExNTAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZ
OkFsYXJtIG5vdGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRl
cg0KQVRURU5ERUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNU
QVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0
bzpwcEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1E
QVRFLVRJTUU6MjAyNjA3MjJUMTAzMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5v
dGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5E
RUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMt
QUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0bzpwcEBnbWFp
bC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVINCg==

--b1=_1G3o5GXoY8x6dj4jhzqcBj7G8uN6vohtYtukFA6YhhA--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 84,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 17:00:00',
                'end_datetime' => '2026-07-22 17:30:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              2 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'Your appointment has been successfully booked',
              6 => 'Thank you for arranging an appointment with us. Below you can see the appointment details. Make changes by clicking the appointment link.',
              7 => 'http://localhost/easy/index.php/booking/reschedule/jTY7Z5WK6eNI',
              8 => 'pp@gmail.com',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:UTC
BEGIN:STANDARD
DTSTART:20251231T230000Z
TZOFFSETTO:+0000
TZOFFSETFROM:+0000
END:STANDARD
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c4ca4238a0b923820dcc509a6f75849b
DTSTART:20260722T113000Z
DTEND:20260722T120000Z
SEQUENCE:1784717527
STATUS:CONFIRMED
SUMMARY:Service
DESCRIPTION:\\nProvider\\n\\nName: Jane Doe\\nEmail: jane@example.org\\nPho
 ne Number: +10000000000\\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\n
 Name: jhhgjhvjh hgvhghgpp\\nEmail: pp@gmail.com\\nPhone Number: 12345678
 99\\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
DTSTAMP:20260722T105207Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=Jane Doe:mailto:jane@example.org
ORGANIZER;CN=Jane Doe:mailto:jane@example.org
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T111500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T103000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'Asia/Calcutta',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'args' => 
            array (
              0 => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            ),
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
      1 => 'appointment-saved to customer',
      2 => 1,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'book_datetime' => '2026-07-22 12:52:07',
        'start_datetime' => '2026-07-22 11:30:00',
        'end_datetime' => '2026-07-22 12:00:00',
        'location' => NULL,
        'meeting_link' => NULL,
        'notes' => '',
        'hash' => 'jTY7Z5WK6eNI',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 2,
        'id_users_customer' => 4,
        'id_services' => 1,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'name' => 'Service',
        'duration' => '30',
        'price' => 0.0,
        'currency' => '',
        'description' => NULL,
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => NULL,
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => NULL,
      ),
      2 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => NULL,
        'city' => NULL,
        'state' => NULL,
        'zip_code' => NULL,
        'notes' => NULL,
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'janedoe',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => '0',
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'default',
        ),
        'services' => 
        array (
          0 => 1,
        ),
      ),
      3 => 
      array (
        'id' => 4,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'first_name' => 'jhhgjhvjh',
        'last_name' => 'hgvhghgpp',
        'email' => 'pp@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '1234567899',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-22 12:52:11 --> Notifications - Could not email appointment-saved to provider (1) : Could not instantiate mail function. Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 352,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Notifications - Could not email appointment-saved to provider (1) : Could not instantiate mail function.',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 129,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Wed, 22 Jul 2026 12:52:09 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: multipart/alternative;
 boundary="b2=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE"

--b2=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    Service                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    Jane Doe                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 11:30 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 12:00 pm
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        jhhgjhvjh hgvhghgpp                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        pp@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        1234567899                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: multipart/related;
 boundary="b3=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE";
 type="text/html"

--b3=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    Service                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    Jane Doe                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 11:30 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 12:00 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        jhhgjhvjh hgvhghgpp                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        pp@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        1234567899                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/jTY7Z5WK6eNI" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE--


--b2=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE--

--b1=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6VVRDDQpCRUdJTjpTVEFOREFSRA0KRFRT
VEFSVDoyMDI1MTIzMVQyMzAwMDBaDQpUWk9GRlNFVFRPOiswMDAwDQpUWk9GRlNFVEZST006KzAw
MDANCkVORDpTVEFOREFSRA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5UDQpVSUQ6ZWEtYzRj
YTQyMzhhMGI5MjM4MjBkY2M1MDlhNmY3NTg0OWINCkRUU1RBUlQ6MjAyNjA3MjJUMTEzMDAwWg0K
RFRFTkQ6MjAyNjA3MjJUMTIwMDAwWg0KU0VRVUVOQ0U6MTc4NDcxNzUyNw0KU1RBVFVTOkNPTkZJ
Uk1FRA0KU1VNTUFSWTpTZXJ2aWNlDQpERVNDUklQVElPTjpcblByb3ZpZGVyXG5cbk5hbWU6IEph
bmUgRG9lXG5FbWFpbDogamFuZUBleGFtcGxlLm9yZ1xuUGhvDQogbmUgTnVtYmVyOiArMTAwMDAw
MDAwMDBcbkFkZHJlc3M6IFxuQ2l0eTogXG5aaXAgQ29kZTogXG5cbkN1c3RvbWVyXG5cbg0KIE5h
bWU6IGpoaGdqaHZqaCBoZ3ZoZ2hncHBcbkVtYWlsOiBwcEBnbWFpbC5jb21cblBob25lIE51bWJl
cjogMTIzNDU2NzgNCiA5OVxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuTm90ZXNc
blxuDQpEVFNUQU1QOjIwMjYwNzIyVDEwNTIwN1oNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFM
O1JPTEU9UkVRLVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7
Q049amhoZ2podmpoIGhndmhnaGdwcDptYWlsdG86cHBAZ21haWwuY29tDQpBVFRFTkRFRTtDVVRZ
UEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1BQ0NFUFRFRDtSU1ZQ
DQogPUZBTFNFO0NOPUphbmUgRG9lOm1haWx0bzpqYW5lQGV4YW1wbGUub3JnDQpPUkdBTklaRVI7
Q049SmFuZSBEb2U6bWFpbHRvOmphbmVAZXhhbXBsZS5vcmcNCkJFR0lOOlZBTEFSTQ0KVFJJR0dF
UjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3MjJUMTExNTAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZ
OkFsYXJtIG5vdGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRl
cg0KQVRURU5ERUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNU
QVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0
bzpwcEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1E
QVRFLVRJTUU6MjAyNjA3MjJUMTAzMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5v
dGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5E
RUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMt
QUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0bzpwcEBnbWFp
bC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVINCg==

--b1=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 115,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              2 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/jTY7Z5WK6eNI',
              8 => 'jane@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:UTC
BEGIN:STANDARD
DTSTART:20251231T230000Z
TZOFFSETTO:+0000
TZOFFSETFROM:+0000
END:STANDARD
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c4ca4238a0b923820dcc509a6f75849b
DTSTART:20260722T113000Z
DTEND:20260722T120000Z
SEQUENCE:1784717527
STATUS:CONFIRMED
SUMMARY:Service
DESCRIPTION:\\nProvider\\n\\nName: Jane Doe\\nEmail: jane@example.org\\nPho
 ne Number: +10000000000\\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\n
 Name: jhhgjhvjh hgvhghgpp\\nEmail: pp@gmail.com\\nPhone Number: 12345678
 99\\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
DTSTAMP:20260722T105207Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=Jane Doe:mailto:jane@example.org
ORGANIZER;CN=Jane Doe:mailto:jane@example.org
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T111500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T103000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'args' => 
            array (
              0 => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            ),
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
      1 => 'appointment-saved to provider',
      2 => 1,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'book_datetime' => '2026-07-22 12:52:07',
        'start_datetime' => '2026-07-22 11:30:00',
        'end_datetime' => '2026-07-22 12:00:00',
        'location' => NULL,
        'meeting_link' => NULL,
        'notes' => '',
        'hash' => 'jTY7Z5WK6eNI',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 2,
        'id_users_customer' => 4,
        'id_services' => 1,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'name' => 'Service',
        'duration' => '30',
        'price' => 0.0,
        'currency' => '',
        'description' => NULL,
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => NULL,
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => NULL,
      ),
      2 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => NULL,
        'city' => NULL,
        'state' => NULL,
        'zip_code' => NULL,
        'notes' => NULL,
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'janedoe',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => '0',
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'default',
        ),
        'services' => 
        array (
          0 => 1,
        ),
      ),
      3 => 
      array (
        'id' => 4,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'first_name' => 'jhhgjhvjh',
        'last_name' => 'hgvhghgpp',
        'email' => 'pp@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '1234567899',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-22 12:52:11 --> #0 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1857): PHPMailer\PHPMailer\PHPMailer->mailSend('Date: Wed, 22 J...', '--b1=_S3xWph4Sv...')
#1 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1670): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 C:\xampp\htdocs\easy\application\libraries\Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#3 C:\xampp\htdocs\easy\application\libraries\Notifications.php(115): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, 'A new appointme...', 'You can make ch...', 'http://localhos...', 'jane@example.or...', 'BEGIN:VCALENDAR...', 'UTC')
#4 C:\xampp\htdocs\easy\application\controllers\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\xampp\htdocs\easy\system\core\CodeIgniter.php(481): Booking->register()
#6 C:\xampp\htdocs\easy\index.php(344): require_once('C:\\xampp\\htdocs...')
#7 {main} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 356,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '#0 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1857): PHPMailer\\PHPMailer\\PHPMailer->mailSend(\'Date: Wed, 22 J...\', \'--b1=_S3xWph4Sv...\')
#1 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1670): PHPMailer\\PHPMailer\\PHPMailer->postSend()
#2 C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php(119): PHPMailer\\PHPMailer\\PHPMailer->send()
#3 C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php(115): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, \'A new appointme...\', \'You can make ch...\', \'http://localhos...\', \'jane@example.or...\', \'BEGIN:VCALENDAR...\', \'UTC\')
#4 C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php(481): Booking->register()
#6 C:\\xampp\\htdocs\\easy\\index.php(344): require_once(\'C:\\\\xampp\\\\htdocs...\')
#7 {main}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 129,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Wed, 22 Jul 2026 12:52:09 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: multipart/alternative;
 boundary="b2=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE"

--b2=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    Service                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    Jane Doe                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 11:30 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 12:00 pm
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        jhhgjhvjh hgvhghgpp                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        pp@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        1234567899                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: multipart/related;
 boundary="b3=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE";
 type="text/html"

--b3=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    Service                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    Jane Doe                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 11:30 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 12:00 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        jhhgjhvjh hgvhghgpp                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        pp@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        1234567899                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/jTY7Z5WK6eNI" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE--


--b2=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE--

--b1=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6VVRDDQpCRUdJTjpTVEFOREFSRA0KRFRT
VEFSVDoyMDI1MTIzMVQyMzAwMDBaDQpUWk9GRlNFVFRPOiswMDAwDQpUWk9GRlNFVEZST006KzAw
MDANCkVORDpTVEFOREFSRA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5UDQpVSUQ6ZWEtYzRj
YTQyMzhhMGI5MjM4MjBkY2M1MDlhNmY3NTg0OWINCkRUU1RBUlQ6MjAyNjA3MjJUMTEzMDAwWg0K
RFRFTkQ6MjAyNjA3MjJUMTIwMDAwWg0KU0VRVUVOQ0U6MTc4NDcxNzUyNw0KU1RBVFVTOkNPTkZJ
Uk1FRA0KU1VNTUFSWTpTZXJ2aWNlDQpERVNDUklQVElPTjpcblByb3ZpZGVyXG5cbk5hbWU6IEph
bmUgRG9lXG5FbWFpbDogamFuZUBleGFtcGxlLm9yZ1xuUGhvDQogbmUgTnVtYmVyOiArMTAwMDAw
MDAwMDBcbkFkZHJlc3M6IFxuQ2l0eTogXG5aaXAgQ29kZTogXG5cbkN1c3RvbWVyXG5cbg0KIE5h
bWU6IGpoaGdqaHZqaCBoZ3ZoZ2hncHBcbkVtYWlsOiBwcEBnbWFpbC5jb21cblBob25lIE51bWJl
cjogMTIzNDU2NzgNCiA5OVxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuTm90ZXNc
blxuDQpEVFNUQU1QOjIwMjYwNzIyVDEwNTIwN1oNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFM
O1JPTEU9UkVRLVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7
Q049amhoZ2podmpoIGhndmhnaGdwcDptYWlsdG86cHBAZ21haWwuY29tDQpBVFRFTkRFRTtDVVRZ
UEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1BQ0NFUFRFRDtSU1ZQ
DQogPUZBTFNFO0NOPUphbmUgRG9lOm1haWx0bzpqYW5lQGV4YW1wbGUub3JnDQpPUkdBTklaRVI7
Q049SmFuZSBEb2U6bWFpbHRvOmphbmVAZXhhbXBsZS5vcmcNCkJFR0lOOlZBTEFSTQ0KVFJJR0dF
UjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3MjJUMTExNTAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZ
OkFsYXJtIG5vdGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRl
cg0KQVRURU5ERUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNU
QVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0
bzpwcEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1E
QVRFLVRJTUU6MjAyNjA3MjJUMTAzMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5v
dGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5E
RUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMt
QUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0bzpwcEBnbWFp
bC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVINCg==

--b1=_S3xWph4SvV9RRBdRmm73sGGPzfLc6A1q0rYGSS4ZPE--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 115,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              2 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/jTY7Z5WK6eNI',
              8 => 'jane@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:UTC
BEGIN:STANDARD
DTSTART:20251231T230000Z
TZOFFSETTO:+0000
TZOFFSETFROM:+0000
END:STANDARD
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c4ca4238a0b923820dcc509a6f75849b
DTSTART:20260722T113000Z
DTEND:20260722T120000Z
SEQUENCE:1784717527
STATUS:CONFIRMED
SUMMARY:Service
DESCRIPTION:\\nProvider\\n\\nName: Jane Doe\\nEmail: jane@example.org\\nPho
 ne Number: +10000000000\\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\n
 Name: jhhgjhvjh hgvhghgpp\\nEmail: pp@gmail.com\\nPhone Number: 12345678
 99\\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
DTSTAMP:20260722T105207Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=Jane Doe:mailto:jane@example.org
ORGANIZER;CN=Jane Doe:mailto:jane@example.org
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T111500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T103000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'args' => 
            array (
              0 => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            ),
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
      1 => 'appointment-saved to provider',
      2 => 1,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'book_datetime' => '2026-07-22 12:52:07',
        'start_datetime' => '2026-07-22 11:30:00',
        'end_datetime' => '2026-07-22 12:00:00',
        'location' => NULL,
        'meeting_link' => NULL,
        'notes' => '',
        'hash' => 'jTY7Z5WK6eNI',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 2,
        'id_users_customer' => 4,
        'id_services' => 1,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'name' => 'Service',
        'duration' => '30',
        'price' => 0.0,
        'currency' => '',
        'description' => NULL,
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => NULL,
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => NULL,
      ),
      2 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => NULL,
        'city' => NULL,
        'state' => NULL,
        'zip_code' => NULL,
        'notes' => NULL,
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'janedoe',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => '0',
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'default',
        ),
        'services' => 
        array (
          0 => 1,
        ),
      ),
      3 => 
      array (
        'id' => 4,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'first_name' => 'jhhgjhvjh',
        'last_name' => 'hgvhghgpp',
        'email' => 'pp@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '1234567899',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-22 12:52:13 --> Notifications - Could not email appointment-saved to admin (1) : Could not instantiate mail function. Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 352,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => 'Notifications - Could not email appointment-saved to admin (1) : Could not instantiate mail function.',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 161,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Wed, 22 Jul 2026 12:52:11 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: multipart/alternative;
 boundary="b2=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q"

--b2=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    Service                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    Jane Doe                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 11:30 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 12:00 pm
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        jhhgjhvjh hgvhghgpp                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        pp@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        1234567899                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: multipart/related;
 boundary="b3=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q";
 type="text/html"

--b3=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    Service                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    Jane Doe                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 11:30 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 12:00 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        jhhgjhvjh hgvhghgpp                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        pp@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        1234567899                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/jTY7Z5WK6eNI" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q--


--b2=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q--

--b1=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6VVRDDQpCRUdJTjpTVEFOREFSRA0KRFRT
VEFSVDoyMDI1MTIzMVQyMzAwMDBaDQpUWk9GRlNFVFRPOiswMDAwDQpUWk9GRlNFVEZST006KzAw
MDANCkVORDpTVEFOREFSRA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5UDQpVSUQ6ZWEtYzRj
YTQyMzhhMGI5MjM4MjBkY2M1MDlhNmY3NTg0OWINCkRUU1RBUlQ6MjAyNjA3MjJUMTEzMDAwWg0K
RFRFTkQ6MjAyNjA3MjJUMTIwMDAwWg0KU0VRVUVOQ0U6MTc4NDcxNzUyNw0KU1RBVFVTOkNPTkZJ
Uk1FRA0KU1VNTUFSWTpTZXJ2aWNlDQpERVNDUklQVElPTjpcblByb3ZpZGVyXG5cbk5hbWU6IEph
bmUgRG9lXG5FbWFpbDogamFuZUBleGFtcGxlLm9yZ1xuUGhvDQogbmUgTnVtYmVyOiArMTAwMDAw
MDAwMDBcbkFkZHJlc3M6IFxuQ2l0eTogXG5aaXAgQ29kZTogXG5cbkN1c3RvbWVyXG5cbg0KIE5h
bWU6IGpoaGdqaHZqaCBoZ3ZoZ2hncHBcbkVtYWlsOiBwcEBnbWFpbC5jb21cblBob25lIE51bWJl
cjogMTIzNDU2NzgNCiA5OVxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuTm90ZXNc
blxuDQpEVFNUQU1QOjIwMjYwNzIyVDEwNTIwN1oNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFM
O1JPTEU9UkVRLVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7
Q049amhoZ2podmpoIGhndmhnaGdwcDptYWlsdG86cHBAZ21haWwuY29tDQpBVFRFTkRFRTtDVVRZ
UEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1BQ0NFUFRFRDtSU1ZQ
DQogPUZBTFNFO0NOPUphbmUgRG9lOm1haWx0bzpqYW5lQGV4YW1wbGUub3JnDQpPUkdBTklaRVI7
Q049SmFuZSBEb2U6bWFpbHRvOmphbmVAZXhhbXBsZS5vcmcNCkJFR0lOOlZBTEFSTQ0KVFJJR0dF
UjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3MjJUMTExNTAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZ
OkFsYXJtIG5vdGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRl
cg0KQVRURU5ERUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNU
QVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0
bzpwcEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1E
QVRFLVRJTUU6MjAyNjA3MjJUMTAzMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5v
dGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5E
RUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMt
QUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0bzpwcEBnbWFp
bC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVINCg==

--b1=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 147,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              2 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/jTY7Z5WK6eNI',
              8 => 'john@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:UTC
BEGIN:STANDARD
DTSTART:20251231T230000Z
TZOFFSETTO:+0000
TZOFFSETFROM:+0000
END:STANDARD
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c4ca4238a0b923820dcc509a6f75849b
DTSTART:20260722T113000Z
DTEND:20260722T120000Z
SEQUENCE:1784717527
STATUS:CONFIRMED
SUMMARY:Service
DESCRIPTION:\\nProvider\\n\\nName: Jane Doe\\nEmail: jane@example.org\\nPho
 ne Number: +10000000000\\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\n
 Name: jhhgjhvjh hgvhghgpp\\nEmail: pp@gmail.com\\nPhone Number: 12345678
 99\\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
DTSTAMP:20260722T105207Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=Jane Doe:mailto:jane@example.org
ORGANIZER;CN=Jane Doe:mailto:jane@example.org
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T111500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T103000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'args' => 
            array (
              0 => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            ),
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
      1 => 'appointment-saved to admin',
      2 => 1,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'book_datetime' => '2026-07-22 12:52:07',
        'start_datetime' => '2026-07-22 11:30:00',
        'end_datetime' => '2026-07-22 12:00:00',
        'location' => NULL,
        'meeting_link' => NULL,
        'notes' => '',
        'hash' => 'jTY7Z5WK6eNI',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 2,
        'id_users_customer' => 4,
        'id_services' => 1,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'name' => 'Service',
        'duration' => '30',
        'price' => 0.0,
        'currency' => '',
        'description' => NULL,
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => NULL,
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => NULL,
      ),
      2 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => NULL,
        'city' => NULL,
        'state' => NULL,
        'zip_code' => NULL,
        'notes' => NULL,
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'janedoe',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => '0',
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'default',
        ),
        'services' => 
        array (
          0 => 1,
        ),
      ),
      3 => 
      array (
        'id' => 4,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'first_name' => 'jhhgjhvjh',
        'last_name' => 'hgvhghgpp',
        'email' => 'pp@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '1234567899',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
ERROR - 2026-07-22 12:52:13 --> #0 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1857): PHPMailer\PHPMailer\PHPMailer->mailSend('Date: Wed, 22 J...', '--b1=_tBrpsGKdl...')
#1 C:\xampp\htdocs\easy\vendor\phpmailer\phpmailer\src\PHPMailer.php(1670): PHPMailer\PHPMailer\PHPMailer->postSend()
#2 C:\xampp\htdocs\easy\application\libraries\Email_messages.php(119): PHPMailer\PHPMailer\PHPMailer->send()
#3 C:\xampp\htdocs\easy\application\libraries\Notifications.php(147): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, 'A new appointme...', 'You can make ch...', 'http://localhos...', 'john@example.or...', 'BEGIN:VCALENDAR...', 'UTC')
#4 C:\xampp\htdocs\easy\application\controllers\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\xampp\htdocs\easy\system\core\CodeIgniter.php(481): Booking->register()
#6 C:\xampp\htdocs\easy\index.php(344): require_once('C:\\xampp\\htdocs...')
#7 {main} Trace: array (
  0 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 356,
    'function' => 'log_message',
    'args' => 
    array (
      0 => 'error',
      1 => '#0 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1857): PHPMailer\\PHPMailer\\PHPMailer->mailSend(\'Date: Wed, 22 J...\', \'--b1=_tBrpsGKdl...\')
#1 C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php(1670): PHPMailer\\PHPMailer\\PHPMailer->postSend()
#2 C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php(119): PHPMailer\\PHPMailer\\PHPMailer->send()
#3 C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php(147): Email_messages->send_appointment_saved(Array, Array, Array, Array, Array, \'A new appointme...\', \'You can make ch...\', \'http://localhos...\', \'john@example.or...\', \'BEGIN:VCALENDAR...\', \'UTC\')
#4 C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php(567): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#5 C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php(481): Booking->register()
#6 C:\\xampp\\htdocs\\easy\\index.php(344): require_once(\'C:\\\\xampp\\\\htdocs...\')
#7 {main}',
    ),
  ),
  1 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
    'line' => 161,
    'function' => 'log_exception',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      \PHPMailer\PHPMailer\Exception::__set_state(array(
         'message' => 'Could not instantiate mail function.',
         'string' => '',
         'code' => 2,
         'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
         'line' => 2150,
         'trace' => 
        array (
          0 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1857,
            'function' => 'mailSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
              0 => 'Date: Wed, 22 Jul 2026 12:52:11 +0200
From: Company Name <info@example.org>
Reply-To: info@example.org
Message-ID: <tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q@localhost>
X-Mailer: PHPMailer 7.1.1 (https://github.com/PHPMailer/PHPMailer)
MIME-Version: 1.0
Content-Type: multipart/mixed;
 boundary="b1=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q"
Content-Transfer-Encoding: 8bit

',
              1 => '--b1=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: multipart/alternative;
 boundary="b2=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q"

--b2=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: text/plain; charset=us-ascii

    
    
    
        Appointment Details | Easy!Appointments
    
    
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */        /*All the styling goes here*/        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */        .body {
            background-color: #f6f6f6;
            width: 100%;
        }        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }        .label {
            width: 120px;
        }        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }        a {
            color: #429A82;
            text-decoration: underline;
        }        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }        .btn table {
            width: auto;
        }        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }        .btn-primary table td {
            background-color: #429A82;
        }        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }        .first {
            margin-top: 0;
        }        .align-center {
            text-align: center;
        }        .align-right {
            text-align: right;
        }        .align-left {
            text-align: left;
        }        .clear {
            clear: both;
        }        .mt0 {
            margin-top: 0;
        }        .mb0 {
            margin-bottom: 0;
        }        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }        .powered-by a {
            text-decoration: none;
        }        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }            table.body .content {
                padding: 0 !important;
            }            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }            table.body .btn table {
                width: 100% !important;
            }            table.body .btn a {
                width: 100% !important;
            }            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }            .btn-primary table td:hover {
                background-color: #34495e !important;
            }            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }        
        &nbsp;
        
                            
                                    
                    
                        
                            
                                
                                                                            
                                                                                
                                            A new appointment has been added to your plan.                                                                                
                                            You can make changes by clicking the appointment link below.                                                                                
                                            Appointment Details                                                                                
                                            
                                                
                                                    Service                                                
                                                
                                                    Service                                                
                                            
                                            
                                                
                                                    Provider                                                
                                                
                                                    Jane Doe                                                
                                            
                                            
                                                
                                                    Start                                                
                                                
                                                    22/07/2026 11:30 am                                                
                                            
                                            
                                                
                                                    End                                                
                                                
                                                    22/07/2026 12:00 pm
                                                
                                            
                                            
                                                
                                                    Timezone                                                
                                                
                                                    UTC                                                
                                                                                                                                        
                                                    
                                                        Status                                                    
                                                    
                                                        Booked                                                    
                                                
                                            
                                            
                                            
                                            
                                                                                                                                                                    
                                            Customer Details                                                                                
                                                                                            
                                                    
                                                        Name                                                    
                                                    
                                                        jhhgjhvjh hgvhghgpp                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Email                                                    
                                                    
                                                        pp@gmail.com                                                    
                                                
                                            
                                                                                            
                                                    
                                                        Phone Number                                                    
                                                    
                                                        1234567899                                                    
                                                
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                
                                            
                                                
                                                    
                                                        
                                                            
                                                                
                                                                    
                                                                        Reschedule / Cancel Appointment
                                                                    
                                                                
                                                            
                                                        
                                                    
                                                
                                            
                                        
                                        
                                        
                                    
                                
                            
                        
                    
                    
                    
                
                
                                
                
                    
                        
                            
                                Powered by
                                
                                    Easy!Appointments
                                
                                |
                                
                                    Company Name                                
                            
                        
                    
                
                            
        
        &nbsp;
    

--b2=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: multipart/related;
 boundary="b3=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q";
 type="text/html"

--b3=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: text/html; charset=us-ascii


<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
        Appointment Details | Easy!Appointments
    </title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%;
        }

        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }

        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 15px;
        }

        h1 {
            font-size: 24px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            width: 120px;
        }

        .details-table {
            margin: 0 0 0 auto;
            width: 85%;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }

        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #429A82;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%;
        }

        .btn > tbody > tr > td {
            padding-bottom: 15px;
        }

        .btn table {
            width: auto;
        }

        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .btn a {
            background-color: #ffffff;
            border: solid 1px #429A82;
            border-radius: 5px;
            box-sizing: border-box;
            color: #429A82;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
        }

        .btn-primary table td {
            background-color: #429A82;
        }

        .btn-primary a {
            background-color: #429A82;
            border-color: #429A82;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table.body h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }

            table.body p,
            table.body ul,
            table.body ol,
            table.body td,
            table.body span,
            table.body a {
                font-size: 16px !important;
            }

            table.body .wrapper,
            table.body .article {
                padding: 10px !important;
            }

            table.body .content {
                padding: 0 !important;
            }

            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }

            table.body .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }

            table.body .btn table {
                width: 100% !important;
            }

            table.body .btn a {
                width: 100% !important;
            }

            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%;
            }

            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }

            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            }

            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }

            .btn-primary table td:hover {
                background-color: #34495e !important;
            }

            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }

    </style>
</head>
<body>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">

                <!-- START CENTERED WHITE CONTAINER -->
                <table role="presentation" class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>

                                        <!-- Logo at the top center, embedded as CID -->
                                        <img src="cid:logo.png" alt="Logo" style="display:block;max-width:67px; margin: auto auto 24px;">

                                        <h1 style="text-align: center;">
                                            A new appointment has been added to your plan.                                        </h1>

                                        <p style="text-align: center;">
                                            You can make changes by clicking the appointment link below.                                        </p>

                                        <h2 style="text-align: center;">
                                            Appointment Details                                        </h2>

                                        <table id="appointment-details" class="details-table" align="center">
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Service                                                </td>
                                                <td style="padding: 3px;">
                                                    Service                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Provider                                                </td>
                                                <td style="padding: 3px;">
                                                    Jane Doe                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Start                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 11:30 am                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    End                                                </td>
                                                <td style="padding: 3px;">
                                                    22/07/2026 12:00 pm
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label" style="padding: 3px;font-weight: bold;">
                                                    Timezone                                                </td>
                                                <td style="padding: 3px;">
                                                    UTC                                                </td>
                                            </tr>

                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Status                                                    </td>
                                                    <td style="padding: 3px;">
                                                        Booked                                                    </td>
                                                </tr>
                                            
                                            
                                            
                                            
                                                                                    </table>

                                        <br>

                                        <h2 style="text-align: center;">
                                            Customer Details                                        </h2>

                                        <table id="customer-details" class="details-table" align="center">
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Name                                                    </td>
                                                    <td style="padding: 3px;">
                                                        jhhgjhvjh hgvhghgpp                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Email                                                    </td>
                                                    <td style="padding: 3px;">
                                                        pp@gmail.com                                                    </td>
                                                </tr>
                                            
                                                                                            <tr>
                                                    <td class="label" style="padding: 3px;font-weight: bold;">
                                                        Phone Number                                                    </td>
                                                    <td style="padding: 3px;">
                                                        1234567899                                                    </td>
                                                </tr>
                                            
                                            
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </table>

                                        <br>
                                        <br>

                                        <table class="btn btn-primary" role="presentation" border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td align="center">
                                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="http://localhost/easy/index.php/calendar/reschedule/jTY7Z5WK6eNI" target="_blank">Reschedule / Cancel Appointment</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- END MAIN CONTENT AREA -->
                </table>
                
                <!-- END CENTERED WHITE CONTAINER -->

                <!-- START FOOTER -->
                <div class="footer">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block powered-by">
                                Powered by
                                <a href="https://easyappointments.org" style="text-decoration: none;">
                                    Easy!Appointments
                                </a>
                                |
                                <a href="https://example.org" style="text-decoration: none;">
                                    Company Name                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>

--b3=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: image/png; name=logo.png
Content-Transfer-Encoding: base64
Content-ID: <logo.png>
Content-Disposition: inline; filename=logo.png

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
TkSuQmCC

--b3=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q--


--b2=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q--

--b1=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q
Content-Type: text/calendar; name=invitation.ics
Content-Transfer-Encoding: base64
Content-Disposition: attachment; filename=invitation.ics

QkVHSU46VkNBTEVOREFSDQpWRVJTSU9OOjIuMA0KUFJPRElEOi0vL0Vhc3lBcHBvaW50bWVudHMv
L09wZW4gU291cmNlIFdlYiBTY2hlZHVsZXIvL0VODQpDQUxTQ0FMRTpHUkVHT1JJQU4NCk1FVEhP
RDpSRVFVRVNUDQpCRUdJTjpWVElNRVpPTkUNClRaSUQ6VVRDDQpCRUdJTjpTVEFOREFSRA0KRFRT
VEFSVDoyMDI1MTIzMVQyMzAwMDBaDQpUWk9GRlNFVFRPOiswMDAwDQpUWk9GRlNFVEZST006KzAw
MDANCkVORDpTVEFOREFSRA0KRU5EOlZUSU1FWk9ORQ0KQkVHSU46VkVWRU5UDQpVSUQ6ZWEtYzRj
YTQyMzhhMGI5MjM4MjBkY2M1MDlhNmY3NTg0OWINCkRUU1RBUlQ6MjAyNjA3MjJUMTEzMDAwWg0K
RFRFTkQ6MjAyNjA3MjJUMTIwMDAwWg0KU0VRVUVOQ0U6MTc4NDcxNzUyNw0KU1RBVFVTOkNPTkZJ
Uk1FRA0KU1VNTUFSWTpTZXJ2aWNlDQpERVNDUklQVElPTjpcblByb3ZpZGVyXG5cbk5hbWU6IEph
bmUgRG9lXG5FbWFpbDogamFuZUBleGFtcGxlLm9yZ1xuUGhvDQogbmUgTnVtYmVyOiArMTAwMDAw
MDAwMDBcbkFkZHJlc3M6IFxuQ2l0eTogXG5aaXAgQ29kZTogXG5cbkN1c3RvbWVyXG5cbg0KIE5h
bWU6IGpoaGdqaHZqaCBoZ3ZoZ2hncHBcbkVtYWlsOiBwcEBnbWFpbC5jb21cblBob25lIE51bWJl
cjogMTIzNDU2NzgNCiA5OVxuQWRkcmVzczogXG5DaXR5OiBcblppcCBDb2RlOiBcblxuTm90ZXNc
blxuDQpEVFNUQU1QOjIwMjYwNzIyVDEwNTIwN1oNCkFUVEVOREVFO0NVVFlQRT1JTkRJVklEVUFM
O1JPTEU9UkVRLVBBUlRJQ0lQQU5UO1BBUlRTVEFUPU5FRURTLUFDVElPTjsNCiBSU1ZQPVRSVUU7
Q049amhoZ2podmpoIGhndmhnaGdwcDptYWlsdG86cHBAZ21haWwuY29tDQpBVFRFTkRFRTtDVVRZ
UEU9SU5ESVZJRFVBTDtST0xFPVJFUS1QQVJUSUNJUEFOVDtQQVJUU1RBVD1BQ0NFUFRFRDtSU1ZQ
DQogPUZBTFNFO0NOPUphbmUgRG9lOm1haWx0bzpqYW5lQGV4YW1wbGUub3JnDQpPUkdBTklaRVI7
Q049SmFuZSBEb2U6bWFpbHRvOmphbmVAZXhhbXBsZS5vcmcNCkJFR0lOOlZBTEFSTQ0KVFJJR0dF
UjtWQUxVRT1EQVRFLVRJTUU6MjAyNjA3MjJUMTExNTAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZ
OkFsYXJtIG5vdGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRl
cg0KQVRURU5ERUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNU
QVQ9TkVFRFMtQUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0
bzpwcEBnbWFpbC5jb20NCkVORDpWQUxBUk0NCkJFR0lOOlZBTEFSTQ0KVFJJR0dFUjtWQUxVRT1E
QVRFLVRJTUU6MjAyNjA3MjJUMTAzMDAwWg0KQUNUSU9OOkVNQUlMDQpTVU1NQVJZOkFsYXJtIG5v
dGlmaWNhdGlvbg0KREVTQ1JJUFRJT046VGhpcyBpcyBhbiBldmVudCByZW1pbmRlcg0KQVRURU5E
RUU7Q1VUWVBFPUlORElWSURVQUw7Uk9MRT1SRVEtUEFSVElDSVBBTlQ7UEFSVFNUQVQ9TkVFRFMt
QUNUSU9OOw0KIFJTVlA9VFJVRTtDTj1qaGhnamh2amggaGd2aGdoZ3BwOm1haWx0bzpwcEBnbWFp
bC5jb20NCkVORDpWQUxBUk0NCkVORDpWRVZFTlQNCkVORDpWQ0FMRU5EQVINCg==

--b1=_tBrpsGKdlHcjMq1EFv276MtVs1t9rBe3NaBrdgg1Q--
',
            ),
          ),
          1 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php',
            'line' => 1670,
            'function' => 'postSend',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          2 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Email_messages.php',
            'line' => 119,
            'function' => 'send',
            'class' => 'PHPMailer\\PHPMailer\\PHPMailer',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          3 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\libraries\\Notifications.php',
            'line' => 147,
            'function' => 'send_appointment_saved',
            'class' => 'Email_messages',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              2 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => 'A new appointment has been added to your plan.',
              6 => 'You can make changes by clicking the appointment link below.',
              7 => 'http://localhost/easy/index.php/calendar/reschedule/jTY7Z5WK6eNI',
              8 => 'john@example.org',
              9 => 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//EasyAppointments//Open Source Web Scheduler//EN
CALSCALE:GREGORIAN
METHOD:REQUEST
BEGIN:VTIMEZONE
TZID:UTC
BEGIN:STANDARD
DTSTART:20251231T230000Z
TZOFFSETTO:+0000
TZOFFSETFROM:+0000
END:STANDARD
END:VTIMEZONE
BEGIN:VEVENT
UID:ea-c4ca4238a0b923820dcc509a6f75849b
DTSTART:20260722T113000Z
DTEND:20260722T120000Z
SEQUENCE:1784717527
STATUS:CONFIRMED
SUMMARY:Service
DESCRIPTION:\\nProvider\\n\\nName: Jane Doe\\nEmail: jane@example.org\\nPho
 ne Number: +10000000000\\nAddress: \\nCity: \\nZip Code: \\n\\nCustomer\\n\\n
 Name: jhhgjhvjh hgvhghgpp\\nEmail: pp@gmail.com\\nPhone Number: 12345678
 99\\nAddress: \\nCity: \\nZip Code: \\n\\nNotes\\n\\n
DTSTAMP:20260722T105207Z
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=ACCEPTED;RSVP
 =FALSE;CN=Jane Doe:mailto:jane@example.org
ORGANIZER;CN=Jane Doe:mailto:jane@example.org
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T111500Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
BEGIN:VALARM
TRIGGER;VALUE=DATE-TIME:20260722T103000Z
ACTION:EMAIL
SUMMARY:Alarm notification
DESCRIPTION:This is an event reminder
ATTENDEE;CUTYPE=INDIVIDUAL;ROLE=REQ-PARTICIPANT;PARTSTAT=NEEDS-ACTION;
 RSVP=TRUE;CN=jhhgjhvjh hgvhghgpp:mailto:pp@gmail.com
END:VALARM
END:VEVENT
END:VCALENDAR
',
              10 => 'UTC',
            ),
          ),
          4 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
            'line' => 567,
            'function' => 'notify_appointment_saved',
            'class' => 'Notifications',
            'type' => '->',
            'args' => 
            array (
              0 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'book_datetime' => '2026-07-22 12:52:07',
                'start_datetime' => '2026-07-22 11:30:00',
                'end_datetime' => '2026-07-22 12:00:00',
                'location' => NULL,
                'meeting_link' => NULL,
                'notes' => '',
                'hash' => 'jTY7Z5WK6eNI',
                'color' => '#7cbae8',
                'status' => 'Booked',
                'is_unavailability' => false,
                'id_users_provider' => 2,
                'id_users_customer' => 4,
                'id_services' => 1,
                'id_google_calendar' => NULL,
                'id_caldav_calendar' => NULL,
              ),
              1 => 
              array (
                'id' => 1,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'name' => 'Service',
                'duration' => '30',
                'price' => 0.0,
                'currency' => '',
                'description' => NULL,
                'slot_interval' => '15',
                'color' => '#7cbae8',
                'location' => NULL,
                'attendants_number' => 1,
                'is_private' => false,
                'id_service_categories' => NULL,
              ),
              2 => 
              array (
                'id' => 2,
                'create_datetime' => '2026-07-22 11:55:42',
                'update_datetime' => '2026-07-22 11:55:42',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@example.org',
                'mobile_number' => NULL,
                'phone_number' => '+10000000000',
                'address' => NULL,
                'city' => NULL,
                'state' => NULL,
                'zip_code' => NULL,
                'notes' => NULL,
                'timezone' => 'UTC',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => false,
                'ldap_dn' => NULL,
                'id_roles' => 2,
                'settings' => 
                array (
                  'username' => 'janedoe',
                  'password_reset_token' => NULL,
                  'password_reset_expires' => NULL,
                  'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
                  'working_plan_exceptions' => '[]',
                  'notifications' => '1',
                  'google_sync' => '0',
                  'google_token' => NULL,
                  'google_calendar' => NULL,
                  'caldav_sync' => '0',
                  'caldav_url' => NULL,
                  'caldav_username' => NULL,
                  'caldav_password' => NULL,
                  'sync_past_days' => '30',
                  'sync_future_days' => '90',
                  'calendar_view' => 'default',
                ),
                'services' => 
                array (
                  0 => 1,
                ),
              ),
              3 => 
              array (
                'id' => 4,
                'create_datetime' => '2026-07-22 12:52:07',
                'update_datetime' => '2026-07-22 12:52:07',
                'first_name' => 'jhhgjhvjh',
                'last_name' => 'hgvhghgpp',
                'email' => 'pp@gmail.com',
                'mobile_number' => NULL,
                'phone_number' => '1234567899',
                'address' => '',
                'city' => '',
                'state' => NULL,
                'zip_code' => '',
                'notes' => NULL,
                'timezone' => 'Asia/Calcutta',
                'language' => 'english',
                'custom_field_1' => NULL,
                'custom_field_2' => NULL,
                'custom_field_3' => NULL,
                'custom_field_4' => NULL,
                'custom_field_5' => NULL,
                'is_private' => '0',
                'ldap_dn' => NULL,
                'id_roles' => 3,
              ),
              4 => 
              array (
                'company_name' => 'Company Name',
                'company_link' => 'https://example.org',
                'company_email' => 'info@example.org',
                'company_color' => NULL,
                'date_format' => 'DMY',
                'time_format' => 'regular',
              ),
              5 => false,
            ),
          ),
          5 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            'line' => 481,
            'function' => 'register',
            'class' => 'Booking',
            'type' => '->',
            'args' => 
            array (
            ),
          ),
          6 => 
          array (
            'file' => 'C:\\xampp\\htdocs\\easy\\index.php',
            'line' => 344,
            'args' => 
            array (
              0 => 'C:\\xampp\\htdocs\\easy\\system\\core\\CodeIgniter.php',
            ),
            'function' => 'require_once',
          ),
        ),
         'previous' => NULL,
      )),
      1 => 'appointment-saved to admin',
      2 => 1,
    ),
  ),
  2 => 
  array (
    'file' => 'C:\\xampp\\htdocs\\easy\\application\\controllers\\Booking.php',
    'line' => 567,
    'function' => 'notify_appointment_saved',
    'class' => 'Notifications',
    'type' => '->',
    'args' => 
    array (
      0 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'book_datetime' => '2026-07-22 12:52:07',
        'start_datetime' => '2026-07-22 11:30:00',
        'end_datetime' => '2026-07-22 12:00:00',
        'location' => NULL,
        'meeting_link' => NULL,
        'notes' => '',
        'hash' => 'jTY7Z5WK6eNI',
        'color' => '#7cbae8',
        'status' => 'Booked',
        'is_unavailability' => false,
        'id_users_provider' => 2,
        'id_users_customer' => 4,
        'id_services' => 1,
        'id_google_calendar' => NULL,
        'id_caldav_calendar' => NULL,
      ),
      1 => 
      array (
        'id' => 1,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'name' => 'Service',
        'duration' => '30',
        'price' => 0.0,
        'currency' => '',
        'description' => NULL,
        'slot_interval' => '15',
        'color' => '#7cbae8',
        'location' => NULL,
        'attendants_number' => 1,
        'is_private' => false,
        'id_service_categories' => NULL,
      ),
      2 => 
      array (
        'id' => 2,
        'create_datetime' => '2026-07-22 11:55:42',
        'update_datetime' => '2026-07-22 11:55:42',
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@example.org',
        'mobile_number' => NULL,
        'phone_number' => '+10000000000',
        'address' => NULL,
        'city' => NULL,
        'state' => NULL,
        'zip_code' => NULL,
        'notes' => NULL,
        'timezone' => 'UTC',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => false,
        'ldap_dn' => NULL,
        'id_roles' => 2,
        'settings' => 
        array (
          'username' => 'janedoe',
          'password_reset_token' => NULL,
          'password_reset_expires' => NULL,
          'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"14:30","end":"15:00"}]}}',
          'working_plan_exceptions' => '[]',
          'notifications' => '1',
          'google_sync' => '0',
          'google_token' => NULL,
          'google_calendar' => NULL,
          'caldav_sync' => '0',
          'caldav_url' => NULL,
          'caldav_username' => NULL,
          'caldav_password' => NULL,
          'sync_past_days' => '30',
          'sync_future_days' => '90',
          'calendar_view' => 'default',
        ),
        'services' => 
        array (
          0 => 1,
        ),
      ),
      3 => 
      array (
        'id' => 4,
        'create_datetime' => '2026-07-22 12:52:07',
        'update_datetime' => '2026-07-22 12:52:07',
        'first_name' => 'jhhgjhvjh',
        'last_name' => 'hgvhghgpp',
        'email' => 'pp@gmail.com',
        'mobile_number' => NULL,
        'phone_number' => '1234567899',
        'address' => '',
        'city' => '',
        'state' => NULL,
        'zip_code' => '',
        'notes' => NULL,
        'timezone' => 'Asia/Calcutta',
        'language' => 'english',
        'custom_field_1' => NULL,
        'custom_field_2' => NULL,
        'custom_field_3' => NULL,
        'custom_field_4' => NULL,
        'custom_field_5' => NULL,
        'is_private' => '0',
        'ldap_dn' => NULL,
        'id_roles' => 3,
      ),
      4 => 
      array (
        'company_name' => 'Company Name',
        'company_link' => 'https://example.org',
        'company_email' => 'info@example.org',
        'company_color' => NULL,
        'date_format' => 'DMY',
        'time_format' => 'regular',
      ),
      5 => false,
    ),
  ),
)
