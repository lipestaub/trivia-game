<?php
    class RequestOpenTriviaDatabaseAPI
    {
        public function getResponse() {
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://opentdb.com/api.php?amount=1',
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_RETURNTRANSFER => true,
            ]);

            $response = curl_exec($curl);

            $decoded = json_decode($response, true);

            return $decoded['results'][0];
        }
    }
?>