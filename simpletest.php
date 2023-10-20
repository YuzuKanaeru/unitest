<?php
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
//Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

//class yang mau di Test
//disisipkan dari file wordcount
require_once "Wordcount.php";

//class untuk run Testing.
//kelas SimpleTest adalah turunan/mewakili keseluruhan dari TestCase
class SimpleTest extends TestCase
{
    public function testCountwords()
    {
        //Kita pakai class yang mau kita test
        $Wc = new WordCount();

        //kita masukkan parameter 4 kata, yang harusnya dapat output 4.
        $TestSentence = "My name is Alfandy"; //4 kata
        $WordCount = $Wc->countWords($TestSentence);

        //kita assert equal, ekspetasi nya harus 4, jika benar berarti wordcount berfungsi dengan baik.
        //assert equal adalah berfungsi untuk membandingkan parameter pertama dan parameter kedua, jika sama maka test berhasil
        $this->assertEquals(4, $WordCount);
    }
}