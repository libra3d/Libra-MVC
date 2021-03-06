<?php
/**
 * Standard controller layout
 *
 * @package LibraCore
 */
class CCIndex extends CObject implements IController {
    
    /**
     * Constructor
     */
	public function __construct() {
        parent::__construct();
	}
	
	/**
	 * Implementing interface IController. All controllers must have an index action.
	 */
	public function Index() {
        $result = check_htaccess(); // Get result from creating htaccess file
        $modules = new CMModules();
        $controllers = $modules->AvailableControllers();
	    $this->views->SetTitle('Index')
                    ->AddInclude(__DIR__.'/index.tpl.php', array('result' => $result), 'primary')
                    ->AddInclude(__DIR__.'/sidebar.tpl.php', array('controllers' => $controllers), 'sidebar');
	}
	
}