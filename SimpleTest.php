<?php
//mengimpor kelas TestCase dari kerangka kerja PHPUnit
use PHPUnit\Framework\TestCase;

//class yang mau ditest
require_once "Wordcount.php";   //pernyataan yang digunakan untuk memasukkan file Wordcount.php

//Class untuk run testing
class SimpleTest extends TestCase{
    public function testCounWord(){
        $Wc = new WordCount();              //Membuat instance dari class WordCount 
        $TestSentence = "My name farhan";   //Menentukan kalimat yang akan diuji dengan $TestSentence
        $WordCount = $Wc->countWords($TestSentence);  //Memanggil method countWords pada instance $Wc dan menyimpan hasilnya dalam variabel $WordCount

        $this->assertEquals(3, $WordCount);     //Digunakan untuk membandingkan hasil perhitungan dengan nilai yang diharapkan.
    }
    
}

?>