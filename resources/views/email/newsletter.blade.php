<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
</head>
<body style="margin:0; padding:0; background-color: #f5f5f5; font-family: Arial, sans-serif;">

<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f5f5f5; padding: 20px 0;">
    <tr>
        <td align="center">
            <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0"  style="background-color: #ffffff; padding: 20px; text-align: center;">

                <tr>
                    <td style="text-align: center;">
                        <a href="https://www.bauer-gasthof.at/">
                            <img src="{{ url('images/logo.png') }}" alt="Gasthof Bauer Logo" style="max-width: 100%; height: auto;">
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style="text-align: center;">
                        <h1 style="color: #333; margin-top: 20px; text-align: center;">{{ $newsletterTitle }}</h1>
                        <p style="font-size: 14px; color: #000; line-height: 1.5; margin-top: 10px; text-align: center;">
                            {!! nl2br(e($newsletterContent)) !!}
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
