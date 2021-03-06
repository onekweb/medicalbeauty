<?php
global $dttheme_social_bookmarks; // Used in Blog single & page tab in BPanel
$dttheme_social_bookmarks = array(array(
							"id"=>		"googleplus",
							"label"=>	__("Show Google+ One",'dt_themes'),
							"options"=>	array(
								"standard"=>__("Standard",'dt_themes'),
								"small"=>__("Small",'dt_themes'),
								"medium"=>__("Medium",'dt_themes'),
								"tall"=>__("Tall",'dt_themes')),
							"lang"=>array(
								"ar" => __( "Arabic", 'dt_themes' ),
								"bn" => __( "Bengali", 'dt_themes' ),
								"bg" => __( "Bulgarian", 'dt_themes' ),
								"ca" => __( "Catalan", 'dt_themes' ),
								"zh" => __( "Chinese", 'dt_themes' ),
								"zh_CN" => __( "Chinese (China)", 'dt_themes' ),
								"zh_HK" => __( "Chinese (Hong Kong)", 'dt_themes' ),
								"zh_TW" => __( "Chinese (Taiwan)", 'dt_themes' ),
								"hr" => __( "Croation", 'dt_themes' ),
								"cs" => __( "Czech", 'dt_themes' ),
								"da" => __( "Danish", 'dt_themes' ),
								"nl" => __( "Dutch", 'dt_themes' ),
								"en_IN" => __( "English (India)", 'dt_themes' ),
								"en_IE" => __( "English (Ireland)", 'dt_themes' ),
								"en_SG" => __( "English (Singapore)", 'dt_themes' ),
								"en_ZA" => __( "English (South Africa)", 'dt_themes' ),
								"en_GB" => __( "English (United Kingdom)", 'dt_themes' ),
								"fil" => __( "Filipino", 'dt_themes' ),
								"fi" => __( "Finnish", 'dt_themes' ),
								"fr" => __( "French", 'dt_themes' ),
								"de" => __( "German", 'dt_themes' ),
								"de_CH" => __( "German (Switzerland)", 'dt_themes' ),
								"el" => __( "Greek", 'dt_themes' ),
								"gu" => __( "Gujarati", 'dt_themes' ),
								"iw" => __( "Hebrew", 'dt_themes' ),
								"hi" => __( "Hindi", 'dt_themes' ),
								"hu" => __( "Hungarian", 'dt_themes' ),
								"in" => __( "Indonesian", 'dt_themes' ),
								"it" => __( "Italian", 'dt_themes' ),
								"ja" => __( "Japanese", 'dt_themes' ),
								"kn" => __( "Kannada", 'dt_themes' ),
								"ko" => __( "Korean", 'dt_themes' ),
								"lv" => __( "Latvian", 'dt_themes' ),
								"ln" => __( "Lingala", 'dt_themes' ),
								"lt" => __( "Lithuanian", 'dt_themes' ),
								"ms" => __( "Malay", 'dt_themes' ),
								"ml" => __( "Malayalam", 'dt_themes' ),
								"mr" => __( "Marathi", 'dt_themes' ),
								"no" => __( "Norwegian", 'dt_themes' ),
								"or" => __( "Oriya", 'dt_themes' ),
								"fa" => __( "Persian", 'dt_themes' ),
								"pl" => __( "Polish", 'dt_themes' ),
								"pt_BR" => __( "Portugese (Brazil)", 'dt_themes' ),
								"pt_PT" => __( "Portugese (Portugal)", 'dt_themes' ),
								"ro" => __( "Romanian", 'dt_themes' ),
								"ru" => __( "Russian", 'dt_themes' ),
								"sr" => __( "Serbian", 'dt_themes' ),
								"sk" => __( "Slovak", 'dt_themes' ),
								"sl" => __( "Slovenian", 'dt_themes' ),
								"es" => __( "Spanish", 'dt_themes' ),
								"sv" => __( "Swedish", 'dt_themes' ),
								"gsw" => __( "Swiss German", 'dt_themes' ),
								"ta" => __( "Tamil", 'dt_themes' ),
								"te" => __( "Telugu", 'dt_themes' ),
								"th" => __( "Thai", 'dt_themes' ),
								"tr" => __( "Turkish", 'dt_themes' ),
								"uk" => __( "Ukranian", 'dt_themes' ),
								"vi" => __( "Vietnamese", 'dt_themes' ))
						),array(
							"id"=>		"fb_like",
							"label"=>	__("Show Facebook like",'dt_themes'),
							"options"=>	array(
								"standard"=>__("Standard",'dt_themes'),
								"box_count" =>__("Box Count",'dt_themes'),
								"button_count" =>__("Button Count",'dt_themes')),
							"color-scheme"=>array("dark","light")
						),array(
							"id"=>		"digg",
							"label"=>	__("Show Digg",'dt_themes'),
							"options"=>	array(
									"DiggWide"=>__("Wide",'dt_themes'),
									"DiggMedium"=>__("Medium",'dt_themes'),
									"DiggCompact"=>__("Compact",'dt_themes'),
									"DiggIcon"=>__("Icon",'dt_themes'))
						),array(
							"id"=>		"stumbleupon",
							"label"=>	__("Show Stumbleupon",'dt_themes'),
							"options"=>	array(
										"1"=>__("style1",'dt_themes'),
										"2"=>__("style2",'dt_themes'),
										"3"=>__("style3",'dt_themes'),
										"4"=>__("style4",'dt_themes'),
										"5"=>__("style5",'dt_themes'),
										"6"=>__("style6",'dt_themes'))
						),array("id"=>		"linkedin",
							"label"=>	__("Show LinkedIn",'dt_themes'),
							"options"=>	array("1"=>"style1","2"=>"style2","3"=>"style3")
						),array(
							"id"=>		"pintrest",
							"label"=>	__("Show Pintrest",'dt_themes'),
							"options"=>	array("none" =>__("None",'dt_themes'),"vertical" =>__("Vertical",'dt_themes'),"horizontal"=>__("Horizontal",'dt_themes'))
						),array(
							"id"=>		"delicious",
							"label"=>	__("Show Delicious",'dt_themes'),
							"text"=>""
						),array(
							"id"=>		"twitter",
							"label"=>	__("Show Twitter",'dt_themes'),
							"options"=>	array(
								"none" => __("None",'dt_themes'),
								"vertical" => __("Vertical",'dt_themes')
								,"horizontal"=>__("Horizontal",'dt_themes')),
							"username"=>'',
							"lang"=>	array(
							    ""	 => __("Select",'dt_themes'),
								"fr" => __( "French",'dt_themes' ),
								"de" => __( "German",'dt_themes' ),
								"it" => __( "Italian",'dt_themes' ),
								"ja" => __( "Japanese",'dt_themes' ),
								"ko" => __( "Korean",'dt_themes' ),
								"ru" => __( "Russian",'dt_themes' ),
								"es" => __( "Spanish",'dt_themes' ),
								"tr" => __( "Turkish",'dt_themes' ))
						));?>