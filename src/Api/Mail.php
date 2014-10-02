<?php namespace Brnlbs\Mailinator\Api;

use Brnlbs\Mailinator\Client;

/**
 * Class Mail
 * @package Brnlbs\Mailinator\Api
 */
class Mail extends Client
{

    /**
     * @param $to
     * @throws \Brnlbs\Mailinator\Exception
     */
    public function publicInbox($to)
    {
        return $this->get('inbox', compact('to'));
    }

    /**
     * @throws \Brnlbs\Mailinator\Exception
     */
    public function privateInbox()
    {
        return $this->get('inbox');
    }

    /**
     * @param $msgid
     * @throws \Brnlbs\Mailinator\Exception
     */
    public function mail($msgid)
    {
        return $this->get('email', compact('msgid'));
    }

}
