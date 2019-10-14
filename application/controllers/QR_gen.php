<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QR_gen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('qr');
    }

    public function generar($categoria, $subcategoria)
    {
        $this->qr->text(base_url().'zip/dir/' . $categoria . '/' . $subcategoria);

        // display QR code image
        $this->qr->qrCode();
    }

    public function archivo($categoria, $subcategoria, $nombre)
    {
        $this->qr->text(base_url().'archivo/download/' . $categoria . "/" . $subcategoria . "/" . $nombre);
        $this->qr->qrCode();
    }
}
