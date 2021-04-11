<?php

//-----------------------------------------requirement
//3. Implement an ATM algorithm to serve a requested amount and use a minimum number of bank notes.
// Available bank notes are $50, $10, $5, $1.
//The requested amount is $2018.
//------------------------------------------

function getATMResponseAmountLeastNotes(int $amount): array
{
   $availableBankNotes = [50,10,5,1];
   $refundAmount = $currentAmount = $amount;
   $responseAmountNotes = [];
   foreach ($availableBankNotes as $value){
       if($refundAmount >= $value){
           $refundAmount =  $currentAmount % $value;
           $responseAmountNotes['$'.$value] = ($currentAmount-$refundAmount) / $value;
       }
       if($refundAmount === 0) {
           return $responseAmountNotes;
       }
      $currentAmount = $refundAmount;
   }
   return $responseAmountNotes;
}

getATMResponseAmountLeastNotes(2018);


?>