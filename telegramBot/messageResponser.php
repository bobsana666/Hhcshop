<?php
use Telegram\Bot\Api;

$telegram = new Api('5902538342:AAGXGYYJdPF58tVr1twKSQ7Q-pQ-B_IpuRw');

$response = $telegram->sendMessage([
  'chat_id' => '@@hhcLiquidsWorld', 
  'text' => 'Hello World'
]);

$messageId = $response->getMessageId();