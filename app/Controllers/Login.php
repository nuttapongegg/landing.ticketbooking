<?php

namespace App\Controllers;

class Login extends BaseController
{
    // public function index()
    // {
    //     // $data['content'] = 'setting/list';
    //     // $data['title'] = 'รายการรถในสต็อก';
    //     // $data['css_critical'] = '';
    //     // $data['js_critical'] = ' 
    //     //     <script src="'. base_url('/assets/app/js/custom.js'). '"></script>
    //     //     <script src="' . base_url('/assets/plugins/src/table/datatable/datatables.js') .'"></script>      
    //     //     <script src="' . base_url('/assets/app/js/ticketslist/ticketslist.js') . '"></script>
    //     // ';
    //     return view('/login/index');
    // }

    public function login()
    {
        $FBDataModel = new \App\Models\FBDataModel();

        $status = 500;
        $response['success'] = 0;
        $response['message'] = '';

        $requestPayload = $this->request->getJSON();
        $id = $requestPayload->id ?? null;
        $email = $requestPayload->email ?? null;
        $name = $requestPayload->name ?? null;
        $picture = $requestPayload->picture ?? null;


        try {
            session()->set([
                'userID' => $id,
                'username' => $name,
                'email' => $email,
                'picture' => $picture,
            ]);

            $FBData = $FBDataModel->getFBData($id);
            $fd_data = '';
            $fd_data_id = '';
            foreach ($FBData as $data) {
                if($data->fb_id == $id){
                    $fd_data_id = $data->id;
                    $fd_data = 1;
                }
            }
            if($fd_data == 1){
                $FBDataModel->updateFBDataByID($fd_data_id, [
                    'fb_login_status' => 1,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }else{
                $FBDataModel->insertFBData([
                    'fb_id' => $id,
                    'fb_name' => $name,
                    'fb_email' => $email,
                    'fb_picture' => $picture,
                    'fb_login_status' => 1
                ]);
            }
            $status = 200;
            $response['success'] = 1;
            $response['message'] = 'เข้าสู่ระบบสำเร็จ';
        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
        }

        return $this->response
            ->setStatusCode($status)
            ->setContentType('application/json')
            ->setJSON($response);
    }

    public function logout()
    {
        try {
            $FBDataModel = new \App\Models\FBDataModel();
            $FBDataModel->logoutFBDataByFBID(session()->get('userID'),['fb_login_status' => '0']);
            session()->destroy();
        } catch (\Exception $e) {
            //            echo $e->getMessage();
        }
    }
}
