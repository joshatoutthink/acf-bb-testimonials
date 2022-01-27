<?php

function get_field(string $field){
	$master = [
		'testimonials' =>[
			[
				'name' => "Josh",
				'title' => "The best Brogramer eva",
				'quote' => "I <em>only</em> code naked",
			],
			[
				'name' => "Josh Kennedy",
				'title' => "The worst pooper eva",
				'quote' => "I never Poop ... EVER... 💩",
			],
		],
	];

	return $master[ $field ];

}
