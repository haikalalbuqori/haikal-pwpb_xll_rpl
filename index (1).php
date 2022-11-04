<?php

class jp1
{
    var $kepsek;
    var $guru;
    var $murid;


    function kepsek1()
    {
        return ", kita lebih sering dipanggil pak lilik.";
    }
    function guru2()
    {
        return ", kita adalah pak ipul.";
    }
    function muridd()
    {
        return ", kita adalah hasan.";
    }
}

$sekolah = new jp1();

$sekolah->kepsek = "kepsek";
$sekolah->guru = "guru";
$sekolah->murid = "murid";


echo $sekolah->kepsek, "", $sekolah->kepsek1();
echo "<br />";
echo $sekolah->guru, "", $sekolah->guru2();
echo "<br />";
echo $sekolah->murid, "", $sekolah->muridd();
