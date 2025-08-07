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
                            <img src="https://ghbauer.johannaamtesten.at/images/logo.png" alt="Gasthof Bauer Logo" style="max-width: 100%; height: auto;">
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

<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0"  background-color: #f5f5f5; padding: 20px 0;">
    <tr>
        <td align="center">
            <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0"  style="background-color: #FFD356; padding: 20px; text-align: center;">
                <tr>
                    <td style="text-align: center;">
                        <p style="font-weight: bold;">Gasthof Bauer</p>
                        <p>Josefgasse 7 <br>
                            4400 Steyr</p>
                        <p>Tel. <a style="color: #000000; " href="tel:+43725254441">+43 7252 54 4 41 </a><br>
                            Web: <a style="color: #000000;" href="https://www.bauer-gasthof.at/">www.bauer-gasthof.at</a> <br>
                            E-Mail: <a style="color: #000000;" href="mailto:r.trauner@bauer-gasthof.at">r.trauner@bauer-gasthof.at<a/> <br></p>

                        <p>
                            Du willst keine E-Mails mehr? <br>
                            <a href="{{ route('unsubscribe', ['token' => $subscriber->unsubscribe_token]) }}">
                                Hier abmelden
                            </a>
                        </p>
                    </td>
                </tr>

                <tr>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>
