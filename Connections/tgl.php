<?php
/* 
	Fungsi tanggal berformat Indonesia
	@author: Imam Andrias, imam.andrias@gmail.com
*/
function  tgl_indonesia($tgl){
	$tanggal  =  substr($tgl,8,2);
	$bulan	=  getBulan(substr($tgl,5,2));
	$tahun	=  substr($tgl,0,4);
	return  $tanggal.' '.$bulan.' '.$tahun;
}
	
function  getBulan($bln){
switch($bln)
	{
		case '1'  : return "Jan";break;
		case '2'  : return "Feb";break;
		case '3'  : return "Maret";break;
		case '4'  : return "April";break;
		case '5'  : return "Mei";break;
		case '6'  : return "Juni";break;
		case '7'  : return "Juli";break;
		case '8'  : return "Agustus";break;
		case '9'  : return "Sep";break;
		case '10' : return "Okt";break;
		case '11' : return "Nov";break;
		case '12' : return "Des";break;
	}
}

function  bln_romawi($tgl){
	$tanggal  =  substr($tgl,8,2);
	$bulan	=  getBulanRomawi(substr($tgl,5,2));
	$tahun	=  substr($tgl,0,4);
	return  $bulan;
}
	
function  getBulanRomawi($bln){
switch($bln)
	{
		case '1'  : return "I";break;
		case '2'  : return "II";break;
		case '3'  : return "III";break;
		case '4'  : return "IV";break;
		case '5'  : return "V";break;
		case '6'  : return "VI";break;
		case '7'  : return "VII";break;
		case '8'  : return "VIII";break;
		case '9'  : return "IX";break;
		case '10' : return "X";break;
		case '11' : return "XI";break;
		case '12' : return "XII";break;
	}
}

function  tahun($tgl){	
	$tahun	=  substr($tgl,0,4);
	return  $tahun;
}

function  ubahAngka($no_surat){	
	$nobaru = sprintf("%03s", $no_surat);
	return  $nobaru;
}
?>