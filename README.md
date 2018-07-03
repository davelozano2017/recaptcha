
        
        
        *** INTEGRATE GOOGLE RECAPTCHA TO YOUR WEBSITE ***

Assumed that you have gmail account so lets proceed.

Step 1: setup google RECAPTCHA 
        > go to this site https://www.google.com/recaptcha/intro/v3beta.html
                > or simply search "google recaptcha" in google without quote then click the first showed link
        > click My reCAPTCHA
        > Sign in your gmail account
                > if already signed in, proceed to step 2

Step 2: Register your website
        > add label to your new site. example is recaptcha
        > click reCAPTCHA v2
        > type localhost and 127.0.0.1 seperated by next line 
        > click accept reCAPTCHA terms of Service 
        > click Register

Step 3: Client Side Integration
        > create a folder to your htdocs for xampp, www for wamp and name it as recaptcha 
        ( or whatever you like )
        > create index.php
        > add html's basic structure
        > back to google recaptcha site 
        > click step 1 then follow the instructions
        > go to your browser then try if the captcha is working

Step 4: Server Side Integration         
        > click step 2 then follow the instructions 
        > create a variable corresponds to the given parameters
                > use isset() to prevent the unexpected execution / error.
                > secret    -> this is for the secret key
                > response  -> this is for the recaptcha's response, g-recaptcha-response is the parameter
                > remoteip  -> this is for the user's IP Address ( optional )
        > use the file_get_contents() to read the contents for this link: 
                > https://www.google.com/recaptcha/api/siteverify
        > verifying result
                > format: url?parameters=$variables
                        > to test, just use var_dump()
                        > in result, the response is encoded through json 
                > use json_decode() to decode json string
                > use true for the second parameter to convert the result into associative array
                > we need to get the result. if it is true then show success message else show error message 

                because the result is false

                        *** FINALLY, LET'S TRY IT! ***
