/**
 * aggiungere traduzioni ai vari file del linguaggio a seconda della lingua, sempre a partire dal file iniziale menu.txt
 */


<?php
$arrayLines = file('menu.txt');
foreach ($arrayLines as $key => $value) {
    if(strpos($value, '#') !== false || strcmp ($value, "\n") == 0){
        unset($arrayLines[$key]);
    }
}
$arrayLines = array_values($arrayLines);
$menu = menubuilder($data = array(), $arrayLines);

function menubuilder($data, $arrayLines){
    $menu = "<?xml version=\"1.0\" encoding=\"iso-8859-1\" ?>\n";
    $menu .= "<menu>\n";
    for($key = 0; $key < count($arrayLines); $key++) {
        $menu_entry = substr($arrayLines[$key], 0, strpos($arrayLines[$key], "{"));
            $entry_link = get_string_between($arrayLines[$key], "{", "}");
            if(!hasSubMenu($arrayLines, $key) && !isPartOfSubmenu($arrayLines,$key)){
                $menu .= "<item caption=\"".$menu_entry."\" link=\"".$entry_link."\"\>\n";
            }
            if(hasSubMenu($arrayLines, $key) && !isPartOfSubmenu($arrayLines,$key)){
                $menu .= "<item caption=\"".$menu_entry."\" link=\"".$entry_link."\">\n";
                $menu .= generateSubMenu($arrayLines, $key);
            }
             //else {
            //     $menu .= "<item caption=\"".$menu_entry."\" link=\"".$entry_link."\"\>\n";
            // }
        }
        $menu .= "<menu>";
        $myfile = fopen("testfile.txt", "w");
        fwrite($myfile, $menu);
        fclose($myfile);
    }


    function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    function hasSubMenu($arrayLines, $index){
        return array_key_exists($index+1, $arrayLines) && strpos($arrayLines[$index+1], '-') === 0;
    }

    function isPartOfSubmenu($arrayLines, $index){
        return array_key_exists($index, $arrayLines) && strpos($arrayLines[$index], '-') === 0;
    }

    function generateSubMenu($arrayLines, $index){
        $sub_menu = "";
        for ($index; $index < count($arrayLines); $index++) {
            if(strpos($arrayLines[$index], '-') === 0){
                $menu_entry = substr($arrayLines[$index], 1);
                $menu_entry = substr($menu_entry, 0, strpos($menu_entry, "{"));
                    $entry_link = get_string_between($arrayLines[$index], "{", "}");
                    $sub_menu .= "\t<item caption=\"".$menu_entry."\" link=\"".$entry_link."\"/>\n";
                }
                if(strpos($arrayLines[$index+1], '-') !== 0){
                    break;
                }
            }
            $sub_menu .= "<item>\n";
            return $sub_menu;
        }



        ?>
