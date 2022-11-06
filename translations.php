<?php
////////////////////////////////////////////////////
//  Copyright by: Satowa Network                  //
//  Author: Slush                                 //
//  Discord: https://discord.satowa-network.eu    //
//  Email: support@satowa-network.eu              //
//  Website: https://satowa-network.eu            //
////////////////////////////////////////////////////

namespace satowa_network\translation;

class translations
{
    public static function getTranslation($lang)
    {
        if($lang == "de") {
        return array(
            "login" => "Anmelden",
            "logout" => "Abmelden"
            );
        } elseif($lang == "en") {

        }
    }
}