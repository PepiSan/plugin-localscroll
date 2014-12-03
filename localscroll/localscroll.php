<?php

class localscroll extends plxPlugin {

	public function __construct($default_lang) {
		parent::__construct($default_lang);
		$this->addHook('ThemeEndHead', 'addLocalscroll');	
	}
	
	public function addLocalscroll() {
		echo '<script type="text/javascript">/* <![CDATA[ */if(typeof(jQuery) === "undefined") document.write(\'<script  type="text/javascript" src="<?php echo PLX_PLUGINS; ?>localscroll/jquery.min.js"><\/script>\');/* !]]> */</script>'."\n";
		echo '<script type="text/javascript" src="'.PLX_PLUGINS.'localscroll/localscroll.js"></script>'."\n";
	}

}


?>