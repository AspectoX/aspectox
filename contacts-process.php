<?php
    if (isset($_POST['g-recaptcha-response'])):
        // The POST data here is unfiltered because this is an example.
        // In production, *always* sanitise and validate your input'
        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
        $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
        ?>
        <?php
            if ($resp->isSuccess()):  
                if( isset($_POST['name']) )
                    {
                        $to = 'aspectox.creativa@gmail.com'; // Replace with your email	
                        $subject = 'Mensaje de aspectox'; // Replace with your $subject
                        $headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];	

                        $message =  'Name: ' . $_POST['name'] . "\n" .
                                    'E-mail: ' . $_POST['email'] . "\n" .
                                    'Subject: ' . $_POST['subject'] . "\n" .
                                    'Message: ' . $_POST['message'];

                                    mail($to, $subject, $message, $headers);	
                            if( $_POST['copy'] == 'on' )
                            {
                                mail($_POST['email'], $subject, $message, $headers);
                            }
                        }
                    else:
                        ?>
                        <p class="bg-danger">The following error was returned: <?php
                            foreach ($resp->getErrorCodes() as $code) {
                                echo '<tt>' . $code . '</tt> ';
                            }
                            ?><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></p>
            <?php
            endif;

    endif;
            ?>                      