/* Insert all services data */
/* --------------------------------------------------------------------- */
/* Country */
/* --------------------------------------------------------------------- */
INSERT INTO
	Country (name)
VALUES
	('Wales'),
	('England'),
	('Scotland');

/* --------------------------------------------------------------------- */
/* Area - Cardiff */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area (
		country_id,
		name,
		longname,
		description,
		point_1,
		point_2,
		point_3,
		point_4,
		section_2_title,
		section_4_title
	)
VALUES
	(
		1,
		'Cardiff',
		'Find a locksmith in Cardiff',
		'If you are locked out of your car or van in Cardiff or if you are stranded in or around the city due to a fault with your vehicle locking system or your car key is broken, our emergency locksmiths can help!',
		'Over 12,000 people have used Key Assist in 2021',
		'Highly-trained local locksmiths to help gain access to any type of vehicle',
		'Our specialists cover any areas in and around Cardiff city centre: North, South, East & West',
		'Emergency assistance available with our 24 hour locksmiths, no matter what time you call',
		'I need an emergency locksmith in Cardiff - Why Call Key-Assist?',
		'Locksmith services in Cardiff'
	);

/* --------------------------------------------------------------------- */
/* Cards - Cardiff */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Cards (area_id, card_section, title, text)
VALUES (
	1,
	1,
	'Locksmith near me',
	'Getting locked out (or in!) your vehicle is frustrating, especially when you have things to do and places to go ASAP. Wherever you’re stuck in Cardiff, whether you’re near the city centre or near the outskirts in Pen-Y-Lan, call us at Key-Assist right away and we’ll find a local emergency locksmith near you.'
),
(
	1,
	1,
	'Professional services',
	'Our specialist locksmiths have years of experience, are highly-trained and have all the knowledge and equipment needed to determine the problem with your locks and/or keys straight away and to solve the issue efficiently. Don’t waste anymore time, call us now - whether your problem is urgent or not.'
),
(
	1,
	1,
	'24-hour assistance',
	'At Key-Assist, we understand that losing your keys, having them stolen or getting locked out can happen at any time of the day or night - either way, it’s always an inconvenience. That’s why we offer a rapid response and our locksmiths offer 24 can provide 24-hour help, whatever time you call!'
),
(
	1,
	2,
	'Upgrade locks & keys',
	'Many people wish to replace their existing locks and keys on their vehicle in order to increase the level of security, both for safety and insurance reasons. If you want brand new replacement locks and keys or a more high-tech modern security system installed in your vehicle, we’ll find a locksmith near you now.'
),
(
	1,
	2,
	'Key cutting',
	'If you need your car keys cutting in Cardiff because you simply need copies made for trusted family members and/or friends, because you’ve lost yours or had them stolen (in which case, you’ll need new locks and keys) our locksmiths have the tools for the job, whatever type of key or lock you have.'
),
(
	1,
	2,
	'Immobiliser repairs',
	'Having problems with the locks on your vehicle and unable to gain access? You could be experiencing problems with your vehicle’s immobiliser. Call Key-Assist now and we’ll locate the nearest car locksmith near you in Cardiff to help solve the problem as soon as possible, no matter how complex.'
);