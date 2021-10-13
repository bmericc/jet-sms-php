<?php

namespace BahriCanli\JetSms\Http\Clients;

use BahriCanli\JetSms\ShortMessage;
use BahriCanli\JetSms\ShortMessageCollection;
use BahriCanli\JetSms\Http\Responses\JetSmsResponseInterface;

/**
 * Interface JetSmsClientInterface.
 */
interface JetSmsClientInterface
{
    /**
     * Send a short message using the JetSms services.
     *
     * @param  ShortMessage $shortMessage
     *
     * @return JetSmsResponseInterface
     */
    public function sendShortMessage(ShortMessage $shortMessage);

    /**
     * Send multiple short messages using the JetSms services.
     *
     * @param  ShortMessageCollection $shortMessageCollection
     *
     * @return JetSmsResponseInterface
     */
    public function sendShortMessages(ShortMessageCollection $shortMessageCollection);
}
