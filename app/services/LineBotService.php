<?php

namespace App\Services;

use LINE\LINEBot;
use LINE\LINEBot\Constant\HTTPHeader;
use LINE\LINEBot\SignatureValidator;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

class LineBotService
{
    public function getToilet($lineBot, $event)
    {
        $text = $event->getText();
        $replyToken = $event->getReplyToken();
        $lineBotService = new LineBotService;
        $lineBot->replyMessage($replyToken, 'aaaaa');
    }
}