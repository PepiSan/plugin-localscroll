<?php if(!defined('PLX_ROOT')) exit; ?>

<style type="text/css">
	h1 {
		margin: 30px 0 15px 0; 
		font-size: 28px; 
		color: #555;
	}
	p {
		margin: 15px 0;
	}
	pre {
		font-size: 13px; 
		color: green;
	}
</style>
  

<h1>
	Help for LocalScroll plugin
</h1>

<p>
	LocalScroll plugin allows you to automatically add a scroller vertical animated all named anchors in your site.
	To work, this plugin uses version 1.7.2 of jQuery Framework. This plugin is based on the script <a href="http://flesler.blogspot.com" title="LocalScroll and ScrollTo">LocalScroll and ScrollTo</a>. 
</p>

<h1>
	What is an anchor
</h1>

<p>
	An anchor allows you to create a link to a specific location on the current page or another page.
</p>

<h1>
	Create an anchor
</h1>

<p>
	As a first step, create an anchor ("ancre1").
</p>

<pre>
<?php echo plxUtils::strCheck('<div id="ancre1">...</div>') ?>
</pre>

<p>
	In a second step, make a link to your anchor :
</p>

<pre>
<?php echo plxUtils::strCheck('<a href="#ancre1">Ancre 1</a>') ?>
</pre>

<p>
	IMPORTANT: the id and the hyperlink must be identical (in our example "ancre1"). 
</p>