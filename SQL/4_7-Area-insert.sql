/* --------------------------------------------------------------------- */
/* Area - Coventry */
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
		1,
		'Coventry',
		'Locksmith Coventry - Find an emergency specialist here',
		'If you’re locked out of your car or van, our emergency locksmiths are on hand to help you as soon as possible. Call us now and we’ll find one in your local area in Coventry.',
		'Over 12,000 people have used Key Assist in 2021',
		'Our experienced locksmiths have all the equipment to solve the problem with no damage',
		'Get help gaining access to any type of vehicle - no matter what make, model or year',
		'We cover all areas in the UK and we have specialist locksmiths in West Midlands - call us now',
		'Need a local locksmith in Coventry? Call Key-Assist now',
		'Other locksmith services in Coventry',
		3
	);

/* --------------------------------------------------------------------- */
/* Cards - Coventry */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Cards (area_id, card_section, title, text)
VALUES
	(
		7,
		1,
		'Emergency locksmiths',
		'At Key-Assist, we can find a 24 hour emergency locksmith near you in Coventry to help with any types of problems you may be experiencing with your locks and/or keys. We offer a fast response time and we’ll get a locksmith to you as soon as possible, no matter what time of the day or night.'
	),
	(
		7,
		1,
		'Certified locksmiths',
		'Our locksmiths are approved, highly-trained and experienced, meaning that they will be able to determine the problem almost instantly and will be able to provide a solution efficiently. They also have up-to-date technology and equipment to get the job done without causing any more damage.'
	),
	(
		7,
		1,
		'Range of services',
		'Whether you need an auto locksmith in Coventry or a locksmith to help you gain access to your van, we can help locate a locksmith near you to help with a range of lock & key services, including car key replacement, key repair, key cutting, lock replacements, car door lock repairs and more.'
	),
	(
		7,
		2,
		'Key replacements & repairs',
		'If your car key is broken, snapped in the lock, you have lost it or had it stolen, you will either need it to be repaired or replaced as soon as possible - our auto locksmiths can help! If you simply need copies made, they offer key cutting services and can also make a completely new set and supply new locks.'
	),
	(
		7,
		2,
		'Upgrade locks & keys (security)',
		'If you’ve had your vehicle broken into or vandalised, you may wish to have the locking system changed and updated, both for your safety, security and insurance reasons. If you require a new central locking system and/or new remote car key fob, get in touch with us now for help in Coventry.'
	),
	(
		7,
		2,
		'Car locksmith specialists',
		'Our auto locksmiths can help gain access to any type of vehicle, no matter what model your car is or who manufactured your van. They can also help if youre having problems with your vehicles immobiliser. Call us now to see how our Coventry locksmiths can help.'
	);

/* --------------------------------------------------------------------- */
/* Bullets - Coventry */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Bullets (area_id, bullet_section, bullet_text)
VALUES
	(7, 1, 'Allesley'),
	(7, 1, 'Bell Green'),
	(7, 1, 'Binley'),
	(7, 1, 'Caludon'),
	(7, 1, 'Canley'),
	(7, 1, 'Chapelfields'),
	(7, 1, 'Cheylesmore'),
	(7, 1, 'Coundon'),
	(7, 1, 'Earlsdon'),
	(7, 1, 'Eastern Green'),
	(7, 1, 'Foleshill'),
	(7, 1, 'Hillfields'),
	(7, 1, 'Holbrooks'),
	(7, 1, 'Keresley'),
	(7, 1, 'Longford'),
	(7, 1, 'Radford'),
	(7, 1, 'Spon End'),
	(7, 1, 'Styvechale'),
	(7, 1, 'Stoke'),
	(7, 1, 'Walsgrave on Sowe'),
	(7, 1, 'Whitley'),
	(7, 1, 'Whoberley'),
	(7, 1, 'Willenhall'),
	(7, 1, 'Wyken');

	/* --------------------------------------------------------------------- */
	/* Section Info - Coventry */
	/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Section_Info (area_id, section, type, text)
VALUES
	(7, 1, 't', 'What areas do our emergency locksmiths cover in Coventry?'),
	(7, 1, 'p', 'Wherever you are stranded in Coventry, we’ve got you covered. At Key-Assist, we can find a locksmith near you if you’re near the city centre, on the outskirts or stuck anywhere else in the West Midlands or rest of the UK. Our locksmiths are able to get out to you if you are in the following areas in and around Coventry (they are not limited to these, however):'),
	(7, 1, 't', 'Locksmith Coventry services & prices'),
	(7, 1, 'p', 'Any problems that you are having with the locks and/or keys in your vehicle, our locksmiths will be able to provide the necessary service for your needs so you can get back to normal life as soon as possible. It is difficult to provide prices as the cost for your required service will depend on the problem and how complex it is. The more complicated it is, the more time it may take our locksmiths and the more advanced technology they may need to use. To find out more about our services or prices, call us now to get a quote, obligation-free. We offer some of the most competitive prices in the UK, so get in touch now for a cheap locksmith in Coventry.');