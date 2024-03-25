<?
    include realpath('./data/data.php');

    for($i = 0; $i < count($tour) ; $i++){
        print("
            <div class = 'tour'>
                <img src='{$tour[$i]['image']}'
                <span>Start to {$tour[$i]['date_start']}</span>
                <span>{$tour[$i]['country']}</span>
                <h2>{$tour[$i]['name']}</h2>
                <span class='price'>{$tour[$i]['price']['amount']} {$tour[$i]['price']['currency']}</span>
                <ul>
                    <li>
                        {$tour[$i]['number_of_night']}
                    </li>
                    <li>
                        {$tour[$i]['nutrition']}
                    </li>
                    <li>
                        {$tour[$i]['transport']}
                    </li>
                </ul>

            </div>
        ");
    }
?>