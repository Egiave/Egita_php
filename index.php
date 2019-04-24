<?php

$background = rand(1, 2);

if ($background == 1) {
    $css_class = 'img';
} else {
    $css_class = 'img1';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>THE best</title>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css?family=Antic+Slab');
            
            .img {
                background-image: url('https://thumbs.dreamstime.com/z/disco-party-astronauts-dancing-men-women-disco-party-astronauts-dancing-men-women-pop-art-retro-comic-book-vector-cartoon-111010419.jpg');
                background-size: cover;
                height: 100vh;
            }
            
            .img1 {
                background-image: url('http://media.bizj.us/view/img/6982812/prosser*750xx8805-4960-0-1682.jpg');
                background-size: cover;
                height: 100vh;
            }
            
            body {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                font-family: 'Antic Slab', serif;
            }
            
            #about {
                text-align: center;
                background-color: rgba(255, 255, 255, 0.8);
                height: 50%;
                width: 50%;
                float: none;
                margin: auto;
            }
            
            .text {
               color: #142d4c;
               font-size: 50px;
            }
            
            .textone {
                color: #142d4c;
                font-size: 30px;
                font-weight: bold;
            }
            
            .textbody {
                color: #142d4c; 
                list-style: none;
                font-size: 20px;
                font-weight: bold;
            }
            
            .thebest {
                font-size: 50px;
                font-style: italic;
            }
            
            .thebest1 {
                font-size: 40px;
                font-style: italic;
            }
            
        </style>
    </head>
    
        <body class="<?php print $css_class; ?>">
        
        
        <header>    
            <nav>
		<a href="#Home">Home</a>
		<a href="#kiausrakulas">Kiausrakulas</a>
		<a href=#About>About</a>
		<a href=#Contact>Contact</a>
            </nav>	
        </header>     
       
            
        <div id="about">
            <h1 class="text">We are <span class='thebest'>THE best!</span></h1>
                <p class="textone">
                    <span class='thebest'>THE best</span> success story
                </p>
            <ul>
            <li class="textbody"> 
                Mes esame <span class='thebest1'>THE best</span> tarp THE BEST!  
            </li>
            <li class="textbody">
                Vakar mes buvome <span class='thebest1'>THE best</span> tarp THE BEST!
            </li>
            <li class="textbody">
                Rytoj mes vis dar bÅ«sime <span class='thebest1'>THE best</span> tarp THE BEST!
            </li>
            <li class="textbody">
                Jeigu dar neprisimenate, mes esame <span class='thebest1'>THE best</span> tarp THE BEST!
            </li>
            <li class="textbody">
                Ar jau Å¾inote, kas yra <span class='thebest1'>THE best?</span>
            </li>
            </ul>  
        </div>
    </body>
</hmtl>    
