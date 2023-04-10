<?php

function perkenalan()
{
  echo "Assalamu'alaikum";
  echo "Hai, Saya Ravi";
  echo "Saya berasal dari Semarang";
}

// perkenalan();

function perlengkapan($nama, $barang)
{
  echo "$nama membeli sebuah $barang";
}

// perlengkapan("Ravi", "Buku");

$orang = "Joni";
$alat = "Pensil";

// perlengkapan($orang, $alat);

function hitungUmur($tahunSekarang, $tahunLahir)
{
  $umur = $tahunSekarang - $tahunLahir;
  return $umur;
}

echo 'Umur saya sekarang adalah ' . hitungUmur(2023, 1996) . " tahun";
