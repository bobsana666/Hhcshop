<?php

namespace Longman\TelegramBot\Commands\SystemCommands;

use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Exception\TelegramException;

class HomeCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'Home';

    /**
     * @var string
     */
    protected $description = 'Home command';

    /**
     * @var string
     */
    protected $usage = '/home';

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
