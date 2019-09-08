<?php
class article_toolbar extends Plugin {

	private $host;

	function about() {
		return array(1.0,
			"Adds toolbar buttons to toggle sidebar",
			"manu");
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_TOOLBAR_BUTTON, $this);
	}

	function get_js() {
		return '';
	}

	function hook_toolbar_button() {
		?>
		<button dojoType="dijit.form.Button" onclick="Feeds.catchupAll()">
			<i class="material-icons"
               title="Mark all read">&nbsp;&#10003;&nbsp;</i>
		</button>

		<button dojoType="dijit.form.Button" onclick="Feeds.reloadCurrent()">
			<i class="material-icons"
               title="Refresh Feed">&nbsp;&#8635;&nbsp;</i>
		</button>
		<button dojoType="dijit.form.Button" onclick="Headlines.move('prev', true)">
			<i class="material-icons"
               title="Previous Post">&nbsp;&#9650;&nbsp;</i>
		</button>
		<button dojoType="dijit.form.Button" onclick="Headlines.move('next', true)">
			<i class="material-icons"
               title="Next Post">&nbsp;&#9660;&nbsp;</i>
		</button>

		<?php
	}

	function api_version() {
		return 2;
	}

}
?>