<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Quotes</title>
        <meta name="author" content="Alexis Bernard">
        <meta name="description" content="The wonderful world of my friend's best quotes!">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <!--<![endif]-->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:700' rel='stylesheet' type='text/css'>
    </head>
    <body class="animated zoomIn">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <div class="pure-g">
            <div class="pure-u-5-5 header">
                <h1>Quotes.</h1>
                <p>the wonderful world of my friend's best quotes<p>
            </div>

            <?php

                $str = file_get_contents('quote_list.json');
                $json_array = json_decode($str, true);
                foreach($json_array as $json){
                    echo '<div class="pure-u-5-5 quote-block">';
                    echo '<p class="quote"><strong>"</strong>' . $json['quote'] . '<strong>"</strong></p>';
                    echo '<p class="author">- ' . strtoupper($json['name']) . ' -</p>'; 
                    echo '</div>';
                }           
                
            ?>
            <div class="pure-u-5-5 footer">
                <p>Made by <a href="http://opiumozor.com">@opiumozor</a>. A tribute to <a href="https://github.com/Comanga">Coco</a> <span class="animated infinite zoomIn">♡</span><p>
            </div>
        </div>

    </body>
</html>
