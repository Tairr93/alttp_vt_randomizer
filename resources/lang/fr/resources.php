<?php
return [
	'header' => 'Ressources',
	'cards' => [
		'discord' => [
			'header' => 'Discord',
			'content' => [
				'<div class="center"><a class="btn btn-primary btn-lg btn-xl" href="https://discord.gg/alttprandomizer" rel="noopener noreferrer" role="button" target="_blank">' . __('navigation.discord') . '</a></div>',
				'Rejoignez notre communauté Discord! Nous avons des gens sympathiques et serviables, des nouvelles sur les événements communautaires, des mises à jour ALttP: Randomizer, des guides utiles, des conseils et des astuces, et plus encore! Venez dire bonjour et jetez un œil à la chaîne #resources!',
			],
		],
		'learn' => [
			'header' => 'Vidéos d’apprentissage',
			'content' => [
				'<div class="center"><a class="btn btn-secondary btn-lg btn-xl" href="https://www.youtube.com/channel/UCBMMk0WJAeldNv4fI9juovA" role="button">ALttP:R Youtube Channel</a></div>',
				'Consultez nos guides de routage, didacticiels de pépin, annonces de mise à jour, faits saillants de tournois, et plus encore! Idéal pour les nouveaux joueurs qui cherchent à apprendre les ficelles et les coureurs expérimentés qui cherchent à perfectionner leurs compétences!',
			],
		],
		'external' => [
			'header' => 'Ressources Externes',
			'content' => [
				'<ul>'
					. '<li><a href="https://goo.gl/tfohG1" target="_blank" rel="noopener noreferrer">Choses communes qui stump newcomers</a> (c’est une bonne première lecture)</li>'
					. '<li><a href="https://goo.gl/gvoyHB" target="_blank" rel="noopener noreferrer">Glossaire d’aide générale</a></li>'
					. '<li><a href="https://goo.gl/yus4Rq" target="_blank" rel="noopener noreferrer">Ressources Glitch</a></li>'
					. '<li><a href="https://goo.gl/fCsKXQ" target="_blank" rel="noopener noreferrer">Trackers / HUDs</a></li>'
					. '<li><a href="http://alttp.mymm1.com/srl/" target="_blank" rel="noopener noreferrer">Démarrer sur SRL</a></li>'
				. '</ul>',
			],
		],
		'pitfalls' => [
			'header' => 'Pièges Courants',
			'content' => [
				'<ul>'
					. '<li>Vous pouvez utiliser le bouton Y pour basculer entre les flèches d’argent et les flèches normales, les boomerangs rouges et bleus, le champignon et la poudre magique, la pelle et la flûte.</li>'
					. '<li>Dans le monde sombre, vous pouvez survoler la rivière au nord de la pyramide. Recherchez la flèche faite d’herbe!</li>'
					. '<li>Si vous vous trouvez dans la grotte du Cap, mais sans le Hookshot, essayez de marcher en haut à gauche de la lacune. Aucun Hookshot n’est nécessaire!</li>'
					. '<li>La barrière d’Agahnim peut être contournée avec le Cap Magique ou détruite avec une épée améliorée.</li>'
					. '<li>Si vous possédez le Miroir Magique, vous pouvez accéder au Desert Palace depuis Misery Mire sans le Livre de Mudora.</li>'
					. '<li>Bombos fait fondre les choses aussi bien que le Fire Rod, ce qui est utile dans le palais de glace.</li>'
					. '<li>Vous pouvez traverser de petites lacunes en rebondissant sur des murs ou des objets en utilisant les bottes Pegasus.</li>'
					. '<li>Sahasrahla vous donne son objet lorsque vous lui parlez avec le pendentif du courage.</li>'
					. '<li>La Super Bomb se reproduit lorsque vous avez acquis les cristaux 5 et 6.</li>'
					. '<li>Le Smith et le coffre pourpre resteront à vous suivre grâce à «Save and Quit.»</li>'
					. '<li>Vous n’êtes jamais obligé de naviguer dans une pièce sombre; la lampe sera disponible pour éclairer votre chemin, alors sortez et trouvez-le!</li>'
					. '<li>Les clés peuvent ne pas être accessibles si elles ne sont pas nécessaires pour terminer le jeu. Par exemple, la grosse clé de Skull Woods pourrait être dans le grand coffre.</li>'
				. '</ul>',
			],
		],
		'changes' => [
			'header' => 'Différences',
			'sections' => [
				[
					'header' => 'Qu’est-ce qui a été randomisé?',
					'content' => [
						'<ul>'
							. '<li>Presque tous les emplacements d’articles uniques</li>'
							. '<li>Pendentifs et cristaux (consultez votre carte!)</li>'
							. '<li>Les médaillons nécessaires pour ouvrir Misery Mire et Turtle Rock</li>'
							. '<li>Des gouttes ennemies et des prises de prix (par exemple des arbres)</li>'
						. '</ul>',
					],
				],
				[
					'header' => 'Qu’est-ce qui est resté le même?',
					'content' => [
						'<ul>'
							. '<li>Tous les magasins à travers Hyrule</li>'
							. '<li>Le jeu de tir à l’arc et divers jeux de roupies</li>'
							. '<li>Petites touches sous des pots ou tenues par des ennemis</li>'
						. '</ul>',
					],
				],
				[
					'header' => 'Qu’est-ce qui a changé depuis le jeu original?',
					'content' => [
						'Il y a quelques modifications du jeu original qui améliorent le gameplay et vous empêchent de rester coincé. La version japonaise 1.0 est utilisée comme base ROM car elle permet d’utiliser certains problèmes exclusifs dans certains modes de jeu avancés.',
						'<ul>'
							. '<li>Vous n’avez plus besoin de la lampe pour pousser l’étagère pendant le prologue.</li>'
							. '<li>Vous pouvez maintenant voir dans les pièces sombres des égouts sans la lampe (sauf en mode ouvert).</li>'
							. '<li>Vous pouvez basculer entre les éléments qui partagent le même emplacement dans le menu en appuyant sur Y. Par exemple, vous pouvez maintenant tenir à la fois la pelle et la flûte et basculer entre eux.</li>'
							. '<li>Le sous-menu pour les bouteilles ne s’ouvre plus automatiquement. Vous pouvez l’ouvrir avec X ou basculer entre les bouteilles avec Y.</li>'
							. '<li>Les niveaux d’eau dans Swamp Palace seront toujours asséchés lorsque vous sortez de l’écran Overworld. Cela vous évite de noyer accidentellement des clés sous l’eau et de rester coincé!</li>'
							. '<li>L’écran de sélection de fichier comporte une rangée aléatoire de symboles en haut. Il s’agit d’un identifiant unique pour chaque graine générée afin de s’assurer que tous les coureurs ont le bon fichier chargé. Ils n’ont aucune autre pertinence.</li>'
							. '<li>La pyramide et les chutes d’eau des vœux souhaitant ne plus améliorer vos objets. Au lieu de cela, leurs cavernes contiennent deux coffres chacun, ce qui explique les mises à jour habituelles qui ont été mélangées.</li>'
							. '<li>Vous êtes assuré d’obtenir le jeu de creusement avant la 30ème fouille.</li>'
							. '<li>Vous êtes assuré d’obtenir l’article de jeu de poitrine Village of Outcasts au premier essai (peut être le 1er ou le 2e coffre).</li>'
						. '</ul>',
					],
				],
			],

		],
	],
];
