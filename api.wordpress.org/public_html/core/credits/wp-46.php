<?php

class WP_46_Credits extends WP_Credits {

	function groups() {
		$groups = array(
			'project-leaders' => array(
				'name'    => 'Project Leaders',
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'matt'        => array( 'Matt Mullenweg',  'Cofounder, Project Lead' ),
					'nacin'       => array( 'Andrew Nacin',    'Lead Developer'          ),
					'markjaquith' => array( 'Mark Jaquith',    'Lead Developer', '097a87a525e317519b5ee124820012fb' ),
					'azaozz'      => array( 'Andrew Ozz',      'Lead Developer'          ),
					'helen'       => array( 'Helen Hou-Sandí', 'Lead Developer'          ),
					'dd32'        => array( 'Dion Hulse',      'Lead Developer'          ),
				),
			),
			'core-developers' => array(
				'name'    => 'Contributing Developers',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => array(
					'ocean90'         => array( 'Dominik Schilling', 'Release Lead' ),
					'voldemortensen'  => array( 'Garth Mortensen',   'Release Deputy' ),
					'jorbin'          => array( 'Aaron Jorbin',      'Core Developer' ),
					'boonebgorges'    => array( 'Boone B. Gorges',   'Core Developer' ),
					'DrewAPicture'    => array( 'Drew Jaynes',       'Core Developer' ),
					'iseulde'         => array( 'Ella Iseulde Van Dorpe', 'Core Developer' ),
					'pento'           => array( 'Gary Pendergast',   'Core Developer' ),
					'jeremyfelt'      => array( 'Jeremy Felt',       'Core Developer' ),
					'johnbillion'     => array( 'John Blackbourn',   'Core Developer', '0000ba6dd1b089e1746abbfe6281ee3b' ),
					'wonderboymusic'  => array( 'Scott Taylor',      'Core Developer' ),
					'SergeyBiryukov'  => array( 'Sergey Biryukov',   'Core Developer' ),
					'westonruter'     => array( 'Weston Ruter',      'Core Developer', '22ed378fbf1d918ef43a45b2a1f34634' ),
				),
			),
			'contributing-developers' => array(
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'mikeschroder'    => 'Mike Schroder',
					'obenland'        => 'Konstantin Obenland',
					'afercia'         => 'Andrea Fercia',
					'rmccue'          => array( 'Ryan McCue', '08818120f223035a0857c2a0ec417f93' ),
					'karmatosed'      => 'Tammie Lister',
					'swissspidy'      => 'Pascal Birchler',
					'rachelbaker'     => 'Rachel Baker',
					'joehoyle'        => 'Joe Hoyle',
					'ericlewis'       => 'Eric Andrew Lewis',
					'joemcgill'       => 'Joe McGill',
					'peterwilsoncc'   => 'Peter Wilson',
					'kovshenin'       => 'Konstantin Kovshenin',
					'michaelarestad'  => 'Michael Arestad',
					'melchoyce'       => 'Mel Choyce',
					'adamsilverstein' => 'Adam Silverstein',
				),
			),
			'recent-rockstars' => array(
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => array(
					'flixos90'     => 'Felix Arntz',
					'hugobaeta'    => 'Hugo Baeta',
					'afragen'      => array( 'Andy Fragen', '0355aa5eef5115d6e6befa7fbe16dc4c' ),
					'ramiy'        => 'Rami Yushuvaev',
					'spacedmonkey' => 'Jonny Harris',
					'rianrietveld' => 'Rian Rietveld ',
					'mapk'         => 'Mark Uraine',
					'mattmiklic'   => 'Matt Miklic',
				),
			),
		);

		return $groups;
	}

	function props() {
		return array(
			'a5hleyrich',
			'aaires',
			'achbed',
			'adamsilverstein',
			'adamsoucie',
			'adrianosilvaferreira',
			'afercia',
			'afineman',
			'afragen',
			'aidvu',
			'akibjorklund',
			'alexkingorg',
			'alexvandervegt',
			'alleynoah',
			'ambrosey',
			'andg',
			'andizer',
			'andy',
			'anilbasnet',
			'ankit-k-gupta',
			'anneschmidt',
			'azaozz',
			'barry',
			'barryceelen',
			'bassgang',
			'birgire',
			'bobbingwide',
			'boonebgorges',
			'borgesbruno',
			'borkweb',
			'bpetty',
			'bradt',
			'brianvan',
			'bueltge',
			'c3mdigital',
			'celloexpressions',
			'cfinke',
			'chandrapatel',
			'cheffheid',
			'chouby',
			'chris_dev',
			'chriscct7',
			'christophherr',
			'cliffseal',
			'clorith',
			'clubduece',
			'cmillerdev',
			'coderste',
			'coffee2code',
			'craig-ralston',
			'crstauf',
			'dabnpits',
			'danielbachhuber',
			'danielhuesken',
			'dashaluna',
			'davewarfel',
			'davidakennedy',
			'davidanderson',
			'davidmosterd',
			'dbrumbaugh10up',
			'dcavins',
			'dd32',
			'dimadin',
			'dlh',
			'dougwollison',
			'downstairsdev',
			'drewapicture',
			'dshanske',
			'efarem',
			'elrae',
			'endocreative',
			'ericlewis',
			'ethitter',
			'fab1en',
			'faison',
			'flixos90',
			'flyingdr',
			'foliovision',
			'francescobagnoli',
			'frank-klein',
			'frozzare',
			'gblsm',
			'geekysoft',
			'georgestephanis',
			'gma992',
			'grapplerulrich',
			'hardeepasrani',
			'helen',
			'henrywright',
			'hugobaeta',
			'iamfriendly',
			'iamtakashi',
			'iandunn',
			'ideag',
			'igmoweb',
			'imath',
			'inderpreet99',
			'ipstenu',
			'iseulde',
			'ixkaito',
			'j-falk',
			'jaspermdegroot',
			'javorszky',
			'jbrinley',
			'jdgrimes',
			'jeherve',
			'jeremyfelt',
			'jerrysarcastic',
			'jesin',
			'jfarthing84',
			'jipmoors',
			'jmichaelward',
			'jnylen0',
			'joedolson',
			'joelwills',
			'joemcgill',
			'john_schlick',
			'johnbillion',
			'johnjamesjacoby',
			'johnpgreen',
			'joostdevalk',
			'jorbin',
			'josephfusco',
			'josephscott',
			'joshuagoodwin',
			'jpdavoutian',
			'jrf',
			'jsternberg',
			'juanfra',
			'juhise',
			'julesaus',
			'justinsainton',
			'karmatosed',
			'kau-boy',
			'kenshino',
			'khag7',
			'kjbenk',
			'kovshenin',
			'kraftbj',
			'kurtpayne',
			'latz',
			'littlerchicken',
			'lukecavanagh',
			'm_uysl',
			'macmanx',
			'mapk',
			'markjaquith',
			'martinkrcho',
			'mattmiklic',
			'mattyrob',
			'mbijon',
			'mdwheele',
			'medariox',
			'mehulkaklotar',
			'meitar',
			'melchoyce',
			'metodiew',
			'michael-arestad',
			'michaelbeil',
			'mikehansenme',
			'mikeschroder',
			'mintindeed',
			'morganestes',
			'mpol',
			'mrahmadawais',
			'mt8biz',
			'mte90',
			'nacin',
			'netweb',
			'neverything',
			'nextendweb',
			'niallkennedy',
			'nicholas_io',
			'nikschavan',
			'ninos-ego',
			'noahsilverstein',
			'obenland',
			'ocean90',
			'odysseygate',
			'offereins',
			'ojrask',
			'olarmarius',
			'ovann86',
			'pansotdev',
			'patilswapnilv',
			'paulwilde',
			'pavelevap',
			'pbearne',
			'pcarvalho',
			'pento',
			'peterrknight',
			'peterwilsoncc',
			'petya',
			'polevaultweb',
			'pollett',
			'postpostmodern',
			'presskopp',
			'prettyboymp',
			'purcebr',
			'r-a-y',
			'rabmalin',
			'rachelbaker',
			'rafaelangeline',
			'rahulsprajapati',
			'ramiy',
			'realloc',
			'rmccue',
			'rockwell15',
			'rodrigosprimo',
			'ronalfy',
			'roseapplemedia',
			'rosso99',
			'ruudjoyo',
			'ryelle',
			'samantha-miller',
			'sc0ttkclark',
			'schlessera',
			'scottbasgaard',
			'screamingdev',
			'sebastianpisula',
			'semil',
			'sergeybiryukov',
			'shahpranaf',
			'shelob9',
			'sidati',
			'simonvik',
			'sirjonathan',
			'smerriman',
			'soean',
			'solarissmoke',
			'southp',
			'spacedmonkey',
			'stephdau',
			'stephenharris',
			'stevenkword',
			'stubgo',
			'stuporglue',
			'sudar',
			'svovaf',
			'swissspidy',
			'szepeviktor',
			'tacoverdo',
			'tfrommen',
			'themiked',
			'thomaswm',
			'timothyblynjacobs',
			'tloureiro',
			'tlovett1',
			'tollmanz',
			'travisnorthcutt',
			'underdude',
			'unyson',
			'valendesigns',
			'viper007bond',
			'vishalkakadiya',
			'voldemortensen',
			'vortfu',
			'walbo',
			'websupporter',
			'welcher',
			'westi',
			'westonruter',
			'wizzard_',
			'wonderboymusic',
			'wp_smith',
			'wpfo',
			'wzislam',
			'xavivars',
			'xavortm',
			'xknown',
			'yoavf',
			'zakb8',
			'zetaraffix',
			'zuige',
		);
	}

	function external_libraries() {
		return array(
			array( 'Backbone.js', 'http://backbonejs.org/' ),
			array( 'Class POP3', 'https://squirrelmail.org/' ),
			array( 'Color Animations', 'https://plugins.jquery.com/color/' ),
			array( 'getID3()', 'http://getid3.sourceforge.net/' ),
			array( 'Horde Text Diff', 'https://pear.horde.org/' ),
			array( 'hoverIntent', 'http://cherne.net/brian/resources/jquery.hoverIntent.html' ),
			array( 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ),
			array( 'Iris', 'https://github.com/Automattic/Iris' ),
			array( 'jQuery', 'https://jquery.com/' ),
			array( 'jQuery UI', 'https://jqueryui.com/' ),
			array( 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ),
			array( 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ),
			array( 'jQuery.query', 'https://plugins.jquery.com/query-object/' ),
			array( 'jQuery.suggest', 'https://github.com/pvulgaris/jquery.suggest' ),
			array( 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ),
			array( 'json2', 'https://github.com/douglascrockford/JSON-js' ),
			array( 'Masonry', 'http://masonry.desandro.com/' ),
			array( 'MediaElement.js', 'http://mediaelementjs.com/' ),
			array( 'PclZip', 'http://www.phpconcept.net/pclzip/' ),
			array( 'PemFTP', 'https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html' ),
			array( 'phpass', 'http://www.openwall.com/phpass/' ),
			array( 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ),
			array( 'Plupload', 'http://www.plupload.com/' ),
			array( 'random_compat', 'https://github.com/paragonie/random_compat' ),
			array( 'Requests', 'http://requests.ryanmccue.info/' ),
			array( 'SimplePie', 'http://simplepie.org/' ),
			array( 'The Incutio XML-RPC Library', 'http://scripts.incutio.com/xmlrpc/' ),
			array( 'Thickbox', 'http://codylindley.com/thickbox/' ),
			array( 'TinyMCE', 'https://www.tinymce.com/' ),
			array( 'Twemoji', 'https://github.com/twitter/twemoji' ),
			array( 'Underscore.js', 'http://underscorejs.org/' ),
			array( 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ),
		);
	}
}
