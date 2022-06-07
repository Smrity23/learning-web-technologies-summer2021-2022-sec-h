<?php
function vat ($ammount ) 

{
  return $vat = $ammount*15/100;
}
echo ( 'the vat is : ') . vat (300);


?>
