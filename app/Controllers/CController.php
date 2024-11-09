<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\SheetModel as SheetModel;

class CController extends ResourceController
{
    public function index()
    {
        $sheetmodel = new SheetModel();
        $data['notes'] = $sheetmodel->findAll();
        return view('index', $data);
    }

    public function addnote()
    {
        $sheetmodel = new SheetModel();
        if($this->request->getMethod() == 'POST') {
            $input = [
                'judul' => $_POST['judul'],
                'isi' => $_POST['isi']
            ];
            $sheetmodel->save($input);
        }
        return redirect('/');  
    }

    public function editnote()
    {
        $sheetmodel = new SheetModel();
        if($this->request->getMethod() == 'POST') {
            if($_POST['submit'] == 'save') {
                $input = [
                    'id' => $_POST['note'],
                    'judul' => $_POST['judul'],
                    'isi' => $_POST['isi']
                ];
                $sheetmodel->save($input);
            } elseif($_POST['submit'] == 'del') {
                $sheetmodel->delete($_POST['note']);
            }
        }
        return redirect('/');  
    }
}
