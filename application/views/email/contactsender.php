<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->
    
    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->
    
    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
        <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->
    
    <!-- CSS Reset -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        /* What is does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
                
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto; 
        }
        
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        *[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
        }

        /* What it does: A work-around for Gmail meddling in triggered links. */
        .x-gmail-data-detectors,
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
        }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }
      
        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit @ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }
    
    </style>
    
    <!-- Progressive Enhancements -->
    <style>
        
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            .email-container {
                width: 100% !important;
                margin: auto !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
        
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
                
        }

    </style>

</head>
<body width="100%" style="margin: 0; mso-line-height-rule: exactly;">
    <center style="width: 100%;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
      
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Email Header : BEGIN -->
        <table role="presentation" style="margin: auto;" class="email-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody bgcolor="#f3f3f3"><tr>
                <td style="padding: 20px 0; text-align: center">
                    <img src="http://www.olympiadbox.com/assets/designs/front/images/logo.png" alt="alt_text" style="height: auto; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;" width="200" height="50" border="0">
                </td>
            </tr>
        </tbody></table>
        <!-- Email Header : END -->
        
        <!-- Email Body : BEGIN -->
        <table role="presentation" style="margin: auto;" class="email-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
            
            <!-- Hero Image, Flush : BEGIN -->
          <!--  <tr>
                <td bgcolor="#ffffff">
                    <img src="http://placehold.it/600x300" width="600" height="300" alt="alt_text" border="0" align="center" class="fluid" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                </td>
            </tr>-->
            <!-- Hero Image, Flush : END -->

            <!-- 1 Column Text : BEGIN -->
            <tbody><tr>
                <td style="padding: 10px 40px 10px 40px;font-family: sans-serif;font-size: 15px;line-height: 20px;color: #ffffff;" bgcolor="#32a0ff">
                   <p>Hello <?php echo $name;?>,</p>
                   
<p style="
    margin-top: -1%;color:#fff;
">We have recieved your <?php echo $subj; ?>. Team OlympiadBox will contact you soon.</p>

<div style="
    margin-top: -4%;
">


</div>



                   <div style="
    margin-top: 12%;color:#fff;
"><p>Regards,</p>
<p style="
    margin-top: -12px;
">Team OlympiadBox</p></div>
                   
                    <!-- Button : Begin -->
                    <table role="presentation" style="margin: auto" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody><tr>
                          <!--  <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
                                <a href="http://www.google.com" style="background: #222222; border: 15px solid #222222; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff;">A Button</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </td>-->
                        </tr>
                    </tbody></table>
                    <!-- Button : END -->
                </td>
            </tr>
        </tbody></table>
        <!-- Email Body : END -->
          
        <!-- Email Footer : BEGIN -->
        <table role="presentation" style="margin: auto;" class="email-container" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody><tr>
<td style="padding-top: 0px 22px;width: 100%;padding-top:-10px !important;height: 81%;font-size: 12px;font-family: sans-serif;line-height:18px;text-align: center;color: #888888;background:#222222;" class="x-gmail-data-detectors">
                    
                    <p style="padding-top: 11px;font-size: 14px;">OlympiadBox Private Limited 209 SRBC,Sector-9 ,Vasundhara ,Ghaziabad - 201012 U.P.</p>
                    
                    <p style="
    margin-top: -2%;
    padding-bottom: 7px;
"><a style="color: #a0a3a4;font-size: 15px;line-height: 20px;" href="mailto:support@olympiadbox.com">support@olympiadbox.com</a></p>
                    
                    
                </td>
            </tr>
        </tbody></table>
        <!-- Email Footer : END -->

    </center>


</body></html>
