<?php 

class chatApi
{

  function sendMsg($konu,$kelime){

        $curl = curl_init();
          curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.openai.com/v1/completions',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
          "model": "text-davinci-003",
          "prompt": "Bana '.$konu.' ile alakalı '.$kelime.' kelimelik benzersiz bir makale yazar mısın ?",
          "temperature": 0.9,
          "max_tokens": 3000,
          "top_p": 1,
          "frequency_penalty": 0.0,
          "presence_penalty": 0.6,
          "stop": [" Human:", " AI:"]
        }',
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer BURAYI DÜZENLEYİN',
            //AUTHORİZATİON DÜZENLEME
            'Content-Type: application/json'
          ),
        ));

        $response   = curl_exec($curl);
        curl_close($curl);
        $response   = json_decode($response);
        $sonuc      =$response->choices[0]->text;
        return $sonuc;
  }
  


}

?>