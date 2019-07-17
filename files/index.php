<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <!-- Page Title -->

    <title>Inferno Studios | Changelog</title>
    
    <!-- CSS Files -->
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-dark" style="background-color: #171e26;background-image: url(&quot;None&quot;);">
        
        <!-- Form Start -->
        <form method="post" style="margin-top: -114px;">
            <h2 class="sr-only">Discord Embed WebUI</h2>
            
            <!-- Your Logo -->
            <div class="illustration"><img src="assets/img/logo.png" style="width: 186px;"></div>
            
            <!-- Text Input-->
            <input class="form-control" type="text" name="textInput" placeholder="Text Input" required="">
            
            <!-- Text Area-->
            <div class="form-group"><textarea class="form-control" name="textArea" placeholder="Text Area" rows="1" required=""></textarea></div>
            <div class="form-group">
            
            <!-- Submit Button-->
            <button class="btn btn-primary btn-block" type="submit" name ="submit" style="background-color: #ff2a2a;">Send Embed</button></div><a class="forgot" href="#" style="margin-top: 0px;padding-top: 22px;">© 2019 | Made by Jonah<br></a>
        </form>

        <!-- Send Webhook -->
        
        <?php
                
                // This is where you transfer the input to a php variable. For example, my text input name= is name="textInput". So I would add $textInput = $_POST["textInput"]; below.
                $textInput = $_POST["textInput"];
                $textArea = $_POST["textArea"];
                
                // This stores the date
                $date = date('m/d/y');

                // Replace the URL with your own webhook url
                $url = "https://discordapp.com/api/webhooks/601139618489827328/yN8-hA_36pDRFolWOza4QTQl0V0f8G6NStSJf3f66AupebSM4tdNx2IHhHLC26kJChN2";

                $hookObject = json_encode([
                    /*
                    * The general "message" shown above your embeds
                    */
                    "content" => "Put Message Here",
                    /*
                    * The username shown in the message
                    */
                    "username" => "Username",
                    /*
                    * The image location for the senders image
                    */
                    "avatar_url" => "https://i.imgur.com/bF3an0y.png",
                    /*
                    * Whether or not to read the message in Text-to-speech
                    */
                    "tts" => false,
                    /*
                    * File contents to send to upload a file
                    */
                    // "file" => "",
                    /*
                    * An array of Embeds
                    */
                    "embeds" => [
                        /*
                        * Our first embed
                        */
                        [
                            // Set the title for your embed
                            "title" => "Title",

                            // The type of your embed, will ALWAYS be "rich"
                            "type" => "rich",

                            // A description for your embed
                            "description" => "$textArea",

                            // The URL of where your title will be a link to
                            "url" => "https://google.com",

                            /* A timestamp to be displayed below the embed, IE for when an an article was posted
                            * This must be formatted as ISO8601
                            */
                            "timestamp" => "",

                            // The integer color to be used on the left side of the embed
                            "color" => hexdec( "#ff2a2a" ),

                            // Footer object
                            "footer" => [
                                "text" => "Put Footer Message Here",
                                "icon_url" => "https://i.imgur.com/bF3an0y.png"
                            ],

                            // Image object
                            "image" => [
                                "url" => "https://i.imgur.com/bF3an0y.png"
                            ],

                            // Thumbnail object
                            "thumbnail" => [
                                "url" => "https://i.imgur.com/bF3an0y.png"
                            ],

                            // Author object
                            "author" => [
                                "name" => "Author",
                                "url" => "https://i.imgur.com/bF3an0y.png"
                            ],
                            
                            // Field array of objects
                            "fields" => [
                                // Field 1
                                [
                                    "name" => "Field One",
                                    "value" => "Text Here",
                                    "inline" => false
                                ],
                                // Field 2
                                [
                                    "name" => "Field Two",
                                    "value" => "Text Here",
                                    "inline" => true
                                ],
                                // Field 3
                                [
                                    "name" => "Field 3",
                                    "value" => "Text Here",
                                    "inline" => true
                                ]
                            ]
                        ]
                    ]
                        
                ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

                // DO NOT EDIT BELOW
                
                if (isset($_POST['submit'])){
                
                $ch = curl_init();

                curl_setopt_array( $ch, [
                    CURLOPT_URL => $url,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $hookObject,
                    CURLOPT_HTTPHEADER => [
                        "Length" => strlen( $hookObject ),
                        "Content-Type" => "application/json"
                    ]
                ]);

                $response = curl_exec( $ch );
                curl_close( $ch );

                }

                ?>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
