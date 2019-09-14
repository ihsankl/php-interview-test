<?php

function biodata()
{

	$data = array(
		'name' => 'Ihsan Kurniawan' ,
		'age' => 22 ,
		'hobbies' => array('Basket','Nonton'),
		'is_married' => FALSE ,
		'list_school' =>array(
			'year_in' => array(
				'SD' => 2004 ,
				'SMP' => 2010 ,
				'SMA' => 2013
			),
			'year_out' => array(
				'SD' => 2010 ,
				'SMP' => 2013 ,
				'SMA' => 2016
			)
		),
		'skill' =>array(
			'skill_name' => array('PHP','JavaScript','jQuery') , 
			'level' => array('Beginner','Beginner','Beginner')
		),
		'interest_in_coding' => TRUE

	);

	return json_encode($data);
}

print_r (biodata());


// SOAL NO.1
