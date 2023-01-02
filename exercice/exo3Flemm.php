<?php
// Exo 4 PHP et HTML

    function FV_html_p(string $text) : string
    {
        if(empty($text))
        {
            die("vous devez ecrire du texte pour le paragraphe");
        }
        return "<p> ".$text." </p>";
    }

    echo FV_html_p("Bonjour tout le monde");

    function FV_html_head(string $title="ma page web") : string 
    {
        $head = '<head>';
        $head .='<meta charset="utf-8">';
        $head .='<title>'.$title.'</title>';
        $head .= '</head>';

        return $head;
    }

    echo FV_html_head();

?>