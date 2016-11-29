<?php
$menu_filename = $_GET['filename'];
print($_GET['filename']);
$menuLines = file($menu_filename.'.txt');
foreach ($menuLines as $key => $value) {
    if(strpos($value, '#') !== false || strcmp ($value, "\n") == 0){
        unset($menuLines[$key]);
    }
}
$menuLines = array_values($menuLines);
$menu = menubuilder($menuLines, $menu_filename);

function menubuilder($menuLines, $menu_filename){
    $xml_menu = create_xml_menu_structure($menuLines); ##rivedere che non funziona
    print_r($xml_menu);
    insert_menu_translation($menuLines);    
    $menu_file = fopen($menu_filename.'.xml', "w");
    fwrite($menu_file, $xml_menu);
    fclose($menu_file);
}

function create_xml_menu_structure($menuLines){
    $menu = "<?xml version=\"1.0\" encoding=\"iso-8859-1\" ?>\n";
    $menu .= "<menu>\n";
    for($key = 0; $key < count($menuLines); $key++) {
        $menu_entry = substr($menuLines[$key], 0, strpos($menuLines[$key], "{"));
        $entry_link = get_string_between($menuLines[$key], "{", "}");
        if(!hasSubMenu($menuLines, $key) && !isPartOfSubmenu($menuLines,$key)){
            $menu .= "<item caption=\"".$menu_entry."\" link=\"".$entry_link."\"/>\n";
        }
        if(hasSubMenu($menuLines, $key) && !isPartOfSubmenu($menuLines,$key)){
            $menu .= "<item caption=\"".$menu_entry."\" link=\"".$entry_link."\">\n";
            $menu .= generateSubMenu($menuLines, $key);
        }
    }
    $menu .= "</menu>";
    return $menu;
}

function insert_menu_translation($menuLines){
    $translation_structure = array();
    build_translation_structure($translation_structure, $menuLines);
    save_translations($translation_structure);
}

function build_translation_structure(&$structure, $lines){
    foreach ($lines as $key => $value) {
        $en_string = substr($lines[$key], 0, strpos($lines[$key], "{"));
        $en_string = strpos($en_string, '-') === 0 ? substr($en_string, 1) : $en_string;
        $structure[$en_string] = array();
        $trans = explode('|',get_string_between($value,'[',']'));
        $structure[$en_string]['it'] = substr($trans[0], 0, strpos($trans[0], "{"));
        $structure[$en_string]['de'] = substr($trans[1], 0, strpos($trans[1], "{"));
        $structure[$en_string]['fr'] = substr($trans[2], 0, strpos($trans[2], "{"));
        $structure[$en_string]['el'] = substr($trans[3], 0, strpos($trans[3], "{"));
    }
}

function save_translations($structure){
    $it_file = fopen("language-it.txt", "a");
    $de_file = fopen("language-de.txt", "a");
    $fr_file = fopen("language-fr.txt", "a");
    $el_file = fopen("language-el.txt", "a");
    foreach ($structure as $key => $translations) {
        foreach ($translations as $lang => $translation) {
            if(strcmp($translation, '') != 0){
                fwrite(${$lang."_file"}, 'langlookup|'.$key.'|'.$translation."|\n");
            }
        }
    }
    fclose($it_file);
    fclose($de_file);
    fclose($fr_file);
    fclose($el_file);

}


function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

function hasSubMenu($menuLines, $index){
    return array_key_exists($index+1, $menuLines) && strpos($menuLines[$index+1], '-') === 0;
}

function isPartOfSubmenu($menuLines, $index){
    return array_key_exists($index, $menuLines) && strpos($menuLines[$index], '-') === 0;
}


function generateSubMenu($menuLines, $index){
    $sub_menu = "";
    for ($index; $index < count($menuLines); $index++) {
        if(strpos($menuLines[$index], '-') === 0){
            $menu_entry = substr($menuLines[$index], 1);
            $menu_entry = substr($menu_entry, 0, strpos($menu_entry, "{"));
            $entry_link = get_string_between($menuLines[$index], "{", "}");
            $sub_menu .= "\t<item caption=\"".$menu_entry."\" link=\"".$entry_link."\"/>\n";
        }
        if(array_key_exists($index+1, $menuLines) && strpos($menuLines[$index+1], '-') !== 0){
            break;
        }
    }
    $sub_menu .= "</item>\n";
    return $sub_menu;
}



?>
