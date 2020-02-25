<?php
/**
 * @package Starwars-Quotes
 * @version 1.0
 */
/*
Plugin Name: Star Wars Quotes
Description: Hello There. Do you want to see every Star Wars meme quote on your website? Gooooooood Gooooooood DEW IT then. If not then I find your lack of faith disturbing. ITS TREASON THEN!!!
Author: Matayay Karuna
Version: 1.0
*/



function star_wars_get_quote() {

	$quotes = "Did you ever hear the tragedy of Darth Plagueis the wise?
	Oh I have a bad feeling about this.
	What, how can you do this?
	This is outragous, its unfair!
	In the name of the galactic senate of the republic, you are under arrest chancellor.
	Are you threatening me master jedi?
	The senate will decide your fate.
	I am the senate!
	Its treason then!
	AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
	How can you be on the council, and not be a master?!
	We would be honored if you would join us.
	Impressive, most impressive.
	A surprise to be sure, but a welcome one.
	This is the way.
	I have spoken.
	The darkside of the force is a pathway to many abilities some consider to be unnatural.
	Darth Plagueis was a dark lord of the sith so powerful and so wise he could use the force to influence the midichlorians to create life.....
	Theres always a bigger fish.
	How wude.
	Now you will pay for your lack of vision!
	Strike me down and your journey to the dark side will be complete!
	I find you lack of faith disturbing admiral.
	Now your failure is complete.
	There were like animals and I slaughtered them like animals!
	I HATE THEM!!!!!!!!!!
	And not just the men, but the woman and the children too.
	I know what I have to do but I don't know if I have the strength to do it.
	I have brought peace, freedom, justice, and security to my new empire.
	Anakin my allegiance is to the republic, to democracy!
	If your not with me, then your my enemy!
	Only a sith deals in absolutes.
	Its over Anakin, I have the high ground.
	YOU UNDERESTIMATE MY POWER!!!!!
	From my point of view the jedi are evil!
	I don't like sand, its course and rough and irritating, and it gets everywhere.
	I can't breath.
	DEW IT
	Hello There
	General Kenobi, you are a bold one.
	This is where the fun begins.
	My powers have doubled since the last time we met count.
	Good twice the pride, double the fall.
	Please don't kill me! I'm too weak.
	POWER!!!!! UNLIMITED POWER!!!!!
	NO NO NO YOU WILL DIE!!!!!
	He had such a knowledge of the dark side he could even keep the ones he cared about from dying.
	Is it possible to learn this power?";


	$quotes = explode( "\n", $quotes );

	return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) -1 ) ] );

}



function star_wars() {

    $chosen = star_wars_get_quote();
    $lang = '';

    if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
        $lang = ' lang="en"';
    }

    printf(
		'<p id="quote"><span dir="ltr"%s>%s</span></p>',
		$lang,
		$chosen
	);

}



add_action( 'admin_notices', 'star_wars' );



function quote_admin_css() {

    echo "
	<style type='text/css'>
	#quote {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 15px;
		line-height: 1.6666;
	}
	.rtl #quote {
		float: left;
	}
	.block-editor-page #quote {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#quote,
		.rtl #quote {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";

}

add_action( 'admin_head', 'quote_admin_css');

/*
add_action( 'loop_start', 'star_wars' );




function quote_wp_css() {

    echo "
	<style type='text/css'>
	#quote {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 15px;
		line-height: 1.6666;
	}
	.rtl #quote {
		float: left;
	}
	.block-editor-page #quote {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#quote,
		.rtl #quote {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";


}

add_action( 'wp_head', 'quote_wp_css' );










?>