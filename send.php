    <?php
        // Account details
        $apiKey = urlencode('VEhoDuOrivA-ybhtRElTTCoNlXIOkqLwUJIg3zhXBz');
        
        // Message details
        $numbers = urlencode('919997037494');
        $sender = urlencode('TXTLCL');
        $Msgdata = "Name: ".$_POST['name']." \nMobile Number: ".$_POST['mob']."\nDate: ".$_POST['date']."\nNo. of Rooms: ".$_POST['nrooms']. "\nType of Room: ".$_POST['roomtype'];
        $message = rawurlencode($Msgdata);
     
        // Prepare data for POST request
        $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
     
        // Send the GET request with cURL
        $ch = curl_init('https://api.textlocal.in/send/?' . $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        // Process your response here
        $response = json_decode($response,true);
       
       	echo "<center> <h2>".$response['status']."</h2> <br> * To fill another Please Refresh the page </center>";

      

