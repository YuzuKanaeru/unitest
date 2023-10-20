<?php
//File : wordcount.php
//class wordcount akan dipanggil di pada file simpleTest
class Wordcount
{
    public function countWords($sentence){
        //explode adalah fungsi pemisah string ke dalam bentuk array
        //count adalah fungsi untuk menghitung index array
        return count(explode(" ",$sentence));
        //parameter string akan dipecah dulu dengan fungsi explode dan dimasukkan dalam fungsi count untuk dihitung index
    }
}
?>