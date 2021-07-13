<?php

function commita($arquivo, $mensagem){
    system("git add $arquivo");
    system("git commit -m \"$mensagem\"");
    system("git push -u origin main");
}

switch($data = date("d/m/y")){
    case strcmp($data, "05/07/21") == 0: commita("", ""); break;
    case strcmp($data, "06/07/21") == 0: commita("", ""); break;
    case strcmp($data, "07/07/21") == 0: commita("", ""); break;
    case strcmp($data, "08/07/21") == 0: commita("", ""); break;
    case strcmp($data, "09/07/21") == 0: commita("", ""); break;
    case strcmp($data, "10/07/21") == 0: commita("", ""); break;
}