<?php
  function test(){
    echo 'Function actived !! <br>';
  }

  function modify_for_latex($text){

    $tab_search = array("\\",'à','â','ä','é','è','ê','ë','ì','î','ï','ò','ô','ö','ù','û','ü','ç','{','}',"\n",'%','#','$',"&",'_','<','>');
    $tab_modify = array('\\textbackslash',"\\`a","\\^a",'\\"a',"\\'e","\\`e","\\^e",'\\"e',"\\`i","\\^i",'\\"i',"\\`o","\\^o",
                        '\\"o',"\\`u","\\^u",'\\"u',"\\c c","\\{","\\}","\\newline\n","\\%", "\\#", "\\$", "\\&", '\\_',
                        '\\textless','\\textgreater');

    $text_modify=str_replace($tab_search, $tab_modify, $text);
    return $text_modify;
  }
?>
