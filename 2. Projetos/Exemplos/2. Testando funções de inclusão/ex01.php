<?php 
require_once "header.php"; ?>

<div class="container">
    <br />
    <h1>Exercicio 1</h1>
    <br />
    <?php 
        echo readfile("webdictionary.txt"); 
        echo "<hr />";
        $myfile = fopen("webdictionary.txt", "r") or die("Não consegui abrir o arquivo!");
        echo fread($myfile, filesize("webdictionary.txt"));
        fclose($myfile);
        echo "<hr />";

        $myfile = fopen("webdictionary.txt", "r") or die("Não consegui abrir o arquivo!");
        while(!feof($myfile)){
            echo fgets($myfile) . "<br />";
        }
        fclose($myfile);
        echo "<hr />";

        $myfile = fopen("newfile.txt", "w") or die("Não consegui abrir o arquivo!");
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        $myfile = fopen("newfile.txt", "r") 
            or die("Não consegui abrir o arquivo!");
        while(!feof($myfile)){
            echo fgets($myfile) . "<br />";}
        fclose($myfile);
    ?>

</div>

<?php require_once "footer.php"; ?>