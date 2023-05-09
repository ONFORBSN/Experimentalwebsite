<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Experimental Website</title>
    </head>
    <body>
        <p>This is just an experiment to see if i can handel php and html code</p>
        <br>
        <p>if you want to see the code you can look for it by pressing Ctrl+U</p>
        
        <h5>this is a heading</h5><br>
        <p>i started by html code because the php element is inside the html body element,by
            the way ,this is a paragraph</p>
        <br>
        <br>
        
        <pre>it supposed to be a poem here,but anyway,i'll continue my way</pre><br>
        
        <a href="www.ttt4.com">this is a website for games</a>
        <b>this is a bold text</b><br>
        <strong>this is an element for important texts</strong><br>
        <i>this is an italic text</i><br>
        <em>this is an emphesized text</em><br>
        <small>this is a small text</small><br>
        <mark>this is a marked/highlited text</mark><br>
        <del>this is a deleted text</del><br>
        <ins>this is an inserted text</ins><br>
        <sub>this is a subscripted text</sub><br>
        <sup>this is a superscripted text</sup><br>
        <blockquote>this is a blockquoted text</blockquote><br>
        <q>this is a quoted text</q><br>
        <abbr title="TIAA">this is an abbreviation</abbr><br>
        <address>this element is for contact information</address><br>
        <bdo>this is a bi-directional override element</bdo><br>
        
        <hr>
        <hr>
        
        <p>from here starts the php code</p>
      
        
        <?php
      
        //this is a single-line comment
        #this is a single-line comment too
        /*this is a multiple-line comment
         * as you can see*/
        echo"<br>";
         
        $a=11;$b=10;
        echo$a+$b;
        
        echo strlen("hi");
        echo"<br>";
        echo str_word_count("hi");
        echo"<br>";
        echo strrev("hi");
        echo"<br>";
        echo strpos("say hi","hi");
        echo"<br>";
        echo str_replace("hi","hello","say hi");
        echo"<br>";
        
        echo(pi());
        echo"<br>";
        echo(max(1,5,6,785,659,87452,32569));
        echo"<br>";
        echo(min(1256,1548,1254,8752,3654));
        echo"<br>";
        echo(abs(-59));
        echo"<br>";
        echo(round(0.2365));
        echo"<br>";
        echo(rand());
        echo"<br>";
        echo(sqrt(25));
        echo"<br>";
        
        define("hello","hi sir");
                echo hello;
        
        
        ?>
    </body>
</html>
