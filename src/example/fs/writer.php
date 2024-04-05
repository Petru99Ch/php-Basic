<?
    // ?name= John Doe&email=jd@example.host&age=30
    //HW1: usign array functions copy only these 3 cells from the $_GET array -> client array
    //HW2: convert age to - int
    //HW3: get active (true/fasle) - boolean 

        foreach($_GET as $key => $value){

            if(intval($value) > 0){

                $client_arr[] = [$key => intval($value)];

            } else if($key === 'active') {                 

                $client_arr[] = [$key => $value === 'true'? true: false];

            } else { 

                $client_arr[] = [$key => $value];

            }
            
        }

       


        $file = fopen('./data/client.json' , 'w');
        fwrite($file, json_encode($client_arr));
        fclose($file); 

  
?>