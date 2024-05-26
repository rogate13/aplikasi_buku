<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('tgl_indo')) {
    function tgl_indo($tanggal)
    {
        $tanggal = new DateTime($tanggal);
        $hari = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
        $bulan = array(
            '',
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        $tanggal_indo = $hari[$tanggal->format('w')] . ', ' . $tanggal->format('d') . ' ' . $bulan[(int)$tanggal->format('m')] . ' ' . $tanggal->format('Y');
        return $tanggal_indo;
    }
}

if (!function_exists('bulan_indo')) {
    function bulan_indo($tanggal)
    {
        $tanggal = new DateTime($tanggal);
        $hari = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
        $bulan = array(
            '',
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        $tanggal_indo = $bulan[(int)$tanggal->format('m')];
        return $tanggal_indo;
    }
}
