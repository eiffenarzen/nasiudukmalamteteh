<?php
// Fungsi bantu: escape output agar aman dari XSS.
function e(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

// Buat link WhatsApp dari nomor di config.
function wa_link(string $number, string $text = ''): string
{
    $url = 'https://wa.me/' . preg_replace('/\D+/', '', $number);
    return $text !== '' ? $url . '?text=' . rawurlencode($text) : $url;
}
