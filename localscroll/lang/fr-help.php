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
	Aide pour le plugin LocalScroll
</h1>

<p>
	Le plugin LocalScroll vous permet d'ajouter automatiquement un effet de défilement vertical animé sur toutes les ancres nommées de votre site. 
	Pour fonctionner, ce plugin utilise la version 1.7.2 du Framework jQuery. Ce plugin est basé sur le script <a href="http://flesler.blogspot.com" title="LocalScroll et ScrollTo">LocalScroll et ScrollTo</a>. 
</p>

<h1>
	Qu'est ce qu'une ancre
</h1>

<p>
	Une ancre vous permet de créer un lien vers un endroit précis de la page courante ou d'une autre page.
</p>

<h1>
	Créer une ancre
</h1>

<p>
	Dans un premier temps, créez une ancre (par exemple "ancre1").
</p>

<pre>
<?php echo plxUtils::strCheck('<div id="ancre1">...</div>') ?>
</pre>

<p>
	Dans un second temps, faîtes un lien vers votre ancre : 
</p>

<pre>
<?php echo plxUtils::strCheck('<a href="#ancre1">Ancre 1</a>') ?>
</pre>

<p>
	IMPORTANT : l'id et le lien hypertexte doivent être identiques (dans notre exemple "ancre1"). 
</p>