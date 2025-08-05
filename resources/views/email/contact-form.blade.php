<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Neue Kontaktanfrage</title>
</head>
<body style="margin:0; padding:0; background-color:#f5f5f5; font-family:Arial, sans-serif;">

<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" style="padding:20px 0;">

            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#ffffff; padding:20px; border-radius:8px; box-shadow:0 0 10px rgba(0,0,0,0.05);">
                <tr>
                    <td style="font-size:18px; font-weight:bold; color:#333333; padding-bottom:15px;">
                        Neue Kontaktanfrage
                    </td>
                </tr>

                <tr>
                    <td style="font-size:14px; color:#555555; line-height:1.6;">
                        <p style="margin:0 0 10px;"><strong>Name:</strong> {{ $formData['full_name'] }}</p>
                        <p style="margin:0 0 10px;"><strong>Email:</strong> {{ $formData['contact_mail'] }}</p>
                        <p style="margin:0 0 10px;"><strong>Telefon:</strong> {{ $formData['number'] }}</p>
                        <p style="margin:0 0 10px;"><strong>Betreff:</strong> {{ $formData['subject'] }}</p>
                        <p style="margin:0 0 10px;"><strong>Nachricht:</strong><br>{{ $formData['message'] }}</p>
                    </td>
                </tr>

                <tr>
                    <td style="font-size:12px; color:#999999; padding-top:20px; text-align:center;">
                        Diese Nachricht wurde automatisch über das Kontaktformular gesendet.
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
