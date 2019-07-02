<?php
class ApiController
{
    //Request
    public function get_product_data()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://ppr.backmarket.fr/ws/category/tree/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Basic c3VwcG9ydEBoYXNodGFnZXMuY29tOmhhc2h0YWdlczIwMTk=",
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: 6c03d819-1061-3abd-2d2d-33d61ef02b8f"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        return $err ? $err : json_decode($response,true);
    }

    public function get_data_copy_full(){
        $data = file_get_contents('data.json');
        return json_decode($data,true);
    }
}