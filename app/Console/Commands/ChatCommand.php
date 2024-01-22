namespace App\Console\Commands;

use App\AI\Assistant;
use Illuminate\Console\Command;
use function Laravel\Prompts\{outro, text, info, spin};

	@@ -27,7 +27,7 @@ class ChatCommand extends Command
     */
    public function handle()
    {
        $chat = new Assistant();

        if ($this->option('system')) {
            $chat->systemMessage($this->option('system'));
        }
    }