<!-- Example taken from php.net-->
<?php
  function convertCtoF($number)
  {
    	// calculate the temperature in fahrenheit
      return round((($number * 9/5) + 32), 2) . " °F";
  }

function convertFtoC($number)
  {
    	// calculate the temperature in celsius
      return round((($number - 32) * 5/9), 2) . " °C";
  }
?>
