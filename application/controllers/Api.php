<?php
defined('BASEPATH') or exit('No direct script access allowed');


// require APPPATH . '\libraries\RestController.php';
use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_User', 'user');
    }

    public function index_get()
    {
        $users = $this->user->select();
        $id = $this->get('id');
        $this->response([
            'status' => false,
            'message' => 'No users were found'
        ], 200);
        // if ($id === null) {
        //     if ($users) {
        //         $this->response($users, 200);
        //     } else {
        //         $this->response([
        //             'status' => false,
        //             'message' => 'No users were found'
        //         ], 404);
        //     }
        // } else {
        //     if (array_key_exists($id, $users)) {
        //         $this->response($users[$id], 200);
        //     } else {
        //         $this->response([
        //             'status' => false,
        //             'message' => 'No such user found'
        //         ], 404);
        //     }
        // }
    }
}
