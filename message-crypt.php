<?php 

function decodeMessage($message){
  $sizeMsg = strlen($message);
  $keyNumber = $sizeMsg/2;
  $subChain = substr($message, 5, $keyNumber);
  $subChainReplaced = str_replace('@#?', ' ', $subChain);
  $result = strrev($subChainReplaced);
  echo $result.' ';
}

decodeMessage('0@sn9sirppa@#?ia’jgtvryko1');
decodeMessage("q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj");
decodeMessage("aopi?sgnirts@#?sedhtg+p9l!");