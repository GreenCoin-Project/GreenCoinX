<?php 
namespace app\extensions\command;
 
use lithium\g11n\Catalog;
 
class Translation extends \lithium\console\Command {
 
    protected $_languages = array('de','es','hi');
 
    /**
     * 1. Extract all translated strings from the codebase
					*    If you modify any text in the site, please follow Extract, Create and Compile
     */
    public function extract() {
							$command = 'echo Y|del "F:\Apache\www\TBG\GreenCoinX\app\resources\tmp\cache\templates\*.*"';
							passthru($command);
        $data = Catalog::read('code', 'messageTemplate', 'root', array(
            'lossy' => false
        ));
        $scope = 'default';
        return Catalog::write('default', 'messageTemplate', 'root', $data, compact('scope'));
    }

    /**
     * 2. Generate a language files for each translation
					*    Will update the translation file, send / edit with POEdit
					*/
    public function create() {
        foreach ($this->_languages as $locale) {
		echo "msgmerge -U app/resources/g11n/{$locale}/LC_MESSAGES/default.po ";
            $command  = "msgmerge -U app/resources/g11n/{$locale}/LC_MESSAGES/default.po ";
            $command .= "app/resources/g11n/message_default.pot";
            passthru($command);
        }
    }
 
    /**
     * 3. Compile a binary for each translation file
     */
    public function compile() {
        foreach ($this->_languages as $locale) {
            $command  = "msgfmt -D app/resources/g11n/{$locale}/LC_MESSAGES ";
            $command .= "-o app/resources/g11n/{$locale}/LC_MESSAGES/default.pot default.po";
            passthru($command);
        }
    }
 
}
?>