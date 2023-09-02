<?php

namespace Longman\TelegramBot\Commands\SystemCommands;

use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Exception\TelegramException;

class HhcCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'Hhc';

    /**
     * @var string
     */
    protected $description = 'HHC command';

    /**
     * @var string
     */
    protected $usage = '/hhc';

    /**
     * @var string
     */
    protected $version = '1.0.0';

    /**
     * @var bool
     */
    protected $private_only = true;

    /**
     * Main command execution
     *
     * @return ServerResponse
     * @throws TelegramException
     */
    public function execute(): ServerResponse
    {
        // If you use deep-linking, get the parameter like this:
        // $deep_linking_parameter = $this->getMessage()->getText(true);

        return $this->replyToChat(
            'Добре дошъл в нашият HHC E-Shop BOT !' . PHP_EOL .
            'Използвай /help за информация :)'
        );
    }
}
