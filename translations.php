<?php
////////////////////////////////////////////////////
//  Copyright by: Satowa Network                  //
//  Author: Slush                                 //
//  Discord: https://discord.satowa-network.eu    //
//  Email: support@satowa-network.eu              //
//  Website: https://satowa-network.eu            //
////////////////////////////////////////////////////

namespace satowa_network\translation;

function getTranslation($translation, $text): string
{
    if($translation == "en") {
        $trans = array(
            "startpage" => array(
                "about_us" => "About us",
                "description" => "The Satowa Network is a private non-profit organization based in Austria. <br>Our goal is to protect the internet from bullying, infringements and many more. We are constantly working to improve everything and make everything as safe as possible.",
                "h1_1" => "What sets us apart from other networks, etc.?",
                "The Satowa Network, unlike other networks, is very strict and has a lot of rules.<br>
               For example, we create contracts that you have to sign if you want to work in our organization.<br>
               In addition, we also go legally and give everyone who supports us something back,<br> for that we have our own currency with which you can buy something from our partners.",
                "h1_2" => "What do we offer?",
                "p_1" => "The Satowa Network currently offers proprietary systems such as:",
                "li_1" => "Cross platform reporting system",
                "li_2" => "Large database",


            )

        );
        return $trans[$text];
    } else {
        return "Messing translation";
    }
}