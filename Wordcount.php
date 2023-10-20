<?php 
//File : WordCount 
//Digunakan untuk untuk menghitung jumlah kata dalam sebuah kalimat
class WordCount{
    public function countWords($sentence){  //$sentence adalah teks atau kalimat yang akan dihitung jumlah katanya
        return count(explode(" ",$sentence));  //Fungsi explode memecah string berdasarkan delimiter yang diberikan, 
                                               //dalam hal ini adalah spasi (" "). Jadi, kalimat akan dibagi menjadi elemen-elemen array berdasarkan spasi.
                                               //fungsi count yang digunakan untuk menghitung jumlah elemen dalam array yang dihasilkan oleh explode.
    }
}
?>