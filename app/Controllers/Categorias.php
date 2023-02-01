<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoriasModel;

class Categorias extends BaseController
{
    protected $categorias;

    public function __construct()
    {
        $this->categorias = new CategoriasModel();
    }

    public function index($activo = 1)
    {
        $categorias = $this->categorias->where('estado',$activo)->findAll();
        $data = ['titulo' => 'Categorias', 'datos'=> $categorias];
        echo view('header');
        echo view('categorias/contents', $data);
        echo view('footer');
    }
}

?>