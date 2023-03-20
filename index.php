<?php
$exchange_rates = simplexml_load_file('https://www.tcmb.gov.tr/kurlar/today.xml');

sleep(2);

if($exchange_rates){
    // USD
    $dolar_buy = round($exchange_rates->Currency[0]->BanknoteBuying, 2);
    $dolar_sell = round($exchange_rates->Currency[0]->BanknoteSelling, 2);
    
    // EUR
    $euro_buy = round($exchange_rates->Currency[3]->BanknoteBuying, 2);
    $euro_sell = round($exchange_rates->Currency[3]->BanknoteSelling, 2);

    // GBP
    $pound_buy = round($exchange_rates->Currency[4]->BanknoteBuying, 2);
    $pound_sell = round($exchange_rates->Currency[4]->BanknoteSelling, 2);
    
    // UPDATE currencies
    if($dolar_sell && $euro_sell && $pound_sell){
	var_dump("[{USD: $dolar_sell}, {EUR: $euro_sell}, {GBP: $pound_sell}]");
    }
    else{
	var_dump("ERROR");
    }
}
else{
    var_dump("ERROR");
}

exit;
?>
