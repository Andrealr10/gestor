<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QR_gen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ciqrcode');
    }

    public function generar($categoria, $subcategoria)
    {
        $this->qr(base_url() . 'zip/dir/' . $categoria . '/' . $subcategoria);
    }

    public function archivo($categoria, $subcategoria, $nombre)
    {
        $this->qr(base_url() . 'archivo/download/' . $categoria . "/" . $subcategoria . "/" . $nombre);
    }

    public function qr($data)
    {
        header("Content-Type: image/png");
        $params['data'] = $data;
        $params['level'] = 'H';
        $params['size'] = 10;
        $this->ciqrcode->generate($params);
    }
}
