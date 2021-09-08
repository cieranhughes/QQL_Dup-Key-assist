/* --------------------------------------------------------------------- */
/* Area - Birmingham */
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
		section_4_title,
		template
	)
VALUES
	(
		2,
		'Birmingham',
		'Find an Emergency Locksmith in Birmingham',
		'Need a cheap locksmith in Birmingham to help you gain access to your car or van as soon as possible? Whether you live in the city centre or suburbs, we’ll locate one for you.',
		'Over 12,000 people have used Key Assist in 2021',
		'Specialist locksmith services near you in Birmingham - locksmiths available 24/7',
		'In a hurry? Our Birmingham locksmiths can help ASAP in any type of emergency situation',
		'Affordable & cheap prices, no matter what the problem with your lock or key',
		'Locked out? Here’s how Key-Assist can help',
		'Other locksmith services',
		2
	);

/* --------------------------------------------------------------------- */
/* Cards - Birmingham */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Cards (area_id, card_section, title, text)
VALUES
	(
		3,
		1,
		'Expert UK locksmiths',
		'We can locate a specialist, emergency locksmith near you, it doesn’t matter where you are stranded in Birmingham. By calling us today, you can expect a fast response, cheap prices, high quality services and a locksmith who can deal with any lock or key related problems - no matter how complex.'
	),
	(
		3,
		1,
		'Replacements & repairs',
		'If you’ve lost the keys to your car or van, they have been stolen or your existing key is not working due to damage or a fault, call us on the number at the top of this page to get a replacement key (or key fob) made or to have your current key or lock fixed in Birmingham, with no further damage.'
	),
	(
		3,
		1,
		'Call us at any time',
		'Our 24 hour locksmiths in Birmingham are available morning, noon and night, 7 days a week. Call us now and we’ll find the nearest locksmith to your local area in Birmingham who will help you gain access to your vehicle as soon as possible, so you can carry on with normal life.'
	),
	(
		3,
		2,
		'Update locking system',
		'As well as cutting and supplying replacement keys for people who have lost/broken theirs or who simply want a copy made to have spares, our specialist locksmiths can update the existing locking system for your vehicle if you want to improve and increase the level of security.'
	),
		(
		3,
		2,
		'Key programming',
		'We can find you a local emergency auto locksmith in Birmingham who can help reprogram a new car key for your vehicle, no matter what make or model it is or how old or new it is. If you need a car key replacement, our specialists can reprogram it so that potential thieves cannot use your old key.'
	),
		(
		3,
		2,
		'Immobiliser repairs',
		'If you need a car locksmith in Birmingham due to immobiliser problems, get in touch with Key-Assist today to receive an instant quote - our locksmiths will be able to determine what is wrong with your immobiliser and why it is not allowing you access to your vehicle. Call us using the number above!'
	);

/* --------------------------------------------------------------------- */
/* Bullets - Birmingham */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Bullets (area_id, bullet_section, bullet_text)
VALUES
	(3, 1, 'Can help you gain entry as soon as possible, causing minimal or no further damage'),
	(3, 1, 'Has the knowledge to determine the exact problem with your lock or key'),
	(3, 1, 'Can do the job properly and efficiently with the correct professional tools and equipment'),
	(3, 2, 'City centre'),
	(3, 2, 'Erdington'),
	(3, 2, 'Stechford'),
	(3, 2, 'Solihull'),
	(3, 2, 'Sutton Coldfield'),
	(3, 2, 'Great Barr'),
	(3, 2, 'King’s Heath'),
	(3, 2, 'Harborne'),
	(3, 2, 'Yardley');

/* --------------------------------------------------------------------- */
/* Section Info - Birmingham */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Section_Info (area_id, section, type, text)
VALUES
	(
		3,
		1,
		't',
		'Why use an approved locksmith?'
	),
	(
		3,
		1,
		'p',
		'Many people may try gaining access to their car or other type of vehicle themselves, or may even ask a friend or family member to help them. At Key-Assist, we advise that you do not do this as you could cause further damage to the lock or key, which will cost you more money to rectify. If you need a Birmingham locksmith, we recommend getting one that is certified and experienced. An expert, specialist locksmith:'
	),
		(
		3,
		1,
		'p',
		'At Key-Assist, we have a range of experienced emergency locksmiths located all across the UK who are able to help no matter where you are. In Birmingham (North, South, East or West), we have locksmiths available who are able to cover the following areas, towns and more:'
	),
		(
		3,
		1,
		'p',
		'Wherever you are in Birmingham, contact us now by using the phone number at the top of this page and we’ll find the nearest one to you!'
	);
