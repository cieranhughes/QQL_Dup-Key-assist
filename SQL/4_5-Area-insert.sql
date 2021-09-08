/* --------------------------------------------------------------------- */
/* Area - Croydon */
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
		'Croydon',
		'Emergency locksmiths in Croydon',
		'Are you locked out of your car or van in or near the London Borough of Croydon? Are your keys/locks broken or stuck? Whatever the problem with your vehicle’s locks and keys, call us for emergency help from an expert locksmith now.',
		'Over 12,000 people have used Key Assist in 2021',
		'Call us now for a free quote or more information about our range of locksmith services',
		'Our locksmiths can get to any area in Croydon - North, South, East or West',
		'Get fast, 24 hour emergency help from one of our highly-trained auto locksmiths in Croydon',
		'Call Key Assist to find an emergency auto locksmith in or near Croydon',
		'Auto locksmith services near your local area in Croydon',
		2
	);

/* --------------------------------------------------------------------- */
/* Cards - Croydon */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Cards (area_id, card_section, title, text)
VALUES
	(
		5,
		2,
		'Key extraction, repair & replace',
		'Is your key stuck in your vehicle’s door lock or the ignition? If so, don’t try and remove it yourself otherwise you run the risk of snapping it or damaging the lock and key further and incurring more costs. Let one of our professional locksmiths do the job for you without causing any more damage so that you can get back to what you need to do.'
	),
	(
		5,
		2,
		'Car key cutting for all vehicles',
		'If you need a copy of your car key cut, or perhaps your keys have been stolen and you need new ones made or yours is faulty so you need a replacement, our locksmiths can help either repair your existing key or make and supply you with a new one. If someone has stolen your keys, they can reprogram your key fob so that they can’t gain access with the old one.'
	),
	(
		5,
		2,
		'Immobiliser repair',
		'Does your vehicle have an immobiliser? If it does, this could be the reason why you can’t gain access to your vehicle. If your immobiliser has a fault or is damaged in some way, it could be the reason why the central locking system isn’t working. Let us find you a local locksmith in Croydon who can help spot the problem and get it sorted for you ASAP. '
	),
	(
		5,
		1,
		'Professionals',
		'No matter what problem you are experiencing with your vehicle’s locks and/or keys or how complex the problem is, our locksmiths are certified and experienced, so they have the knowledge and skills to be able to determine the issue and find a solution as soon as possible. You can also rest assured that no further damage will be caused to your car or van.'
	),
	(
		5,
		1,
		'Affordable prices',
		'At Key Assist, you can expect to receive high-quality locksmith services that come with some of the most competitive prices across the UK. The cost can differ depending on the type of problem with your lock and/or key, but we will do our best to find the best locksmith near you in Croydon with the cheapest prices possible. Don’t delay, call us now!'
	),
	(
		5,
		1,
		'24 hr car locksmiths',
		'If you’re stranded in Croydon or in the areas surrounding the London Borough, our locksmiths are on hand to help you gain access to your vehicle at any time of the day or night. Whether you’ve accidentally locked your keys in the car or your remote key fob isn’t working, we can help, no matter what time you need to call.'
	);

/* --------------------------------------------------------------------- */
/* Bullets - Croydon */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Bullets (area_id, bullet_section, bullet_text)
VALUES
	(5, 1, 'Addington'),
	(5, 1, 'Addiscombe'),
	(5, 1, 'Ashburton'),
	(5, 1, 'Broad Green'),
	(5, 1, 'Bromley'),
	(5, 1, 'Coulsdon'),
	(5, 1, 'Crystal Palace'),
	(5, 1, 'Forestdale'),
	(5, 1, 'Hamsey Green'),
	(5, 1, 'Kenley'),
	(5, 1, 'Monks Orchard'),
	(5, 1, 'Norbury'),
	(5, 1, 'Old Coulsdon'),
	(5, 1, 'Pollards Hill'),
	(5, 1, 'Purely'),
	(5, 1, 'Roundshaw'),
	(5, 1, 'Sanderstead'),
	(5, 1, 'Selhurst'),
	(5, 1, 'Selsdon'),
	(5, 1, 'Shirley'),
	(5, 1, 'South Norwood'),
	(5, 1, 'Sutton'),
	(5, 1, 'Tamworth Road'),
	(5, 1, 'Thornton Heath'),
	(5, 1, 'Upper Norwood'),
	(5, 1, 'Waddon'),
	(5, 1, 'Woodcote'),
	(5, 1, 'Woodside');

/* --------------------------------------------------------------------- */
/* Section Info - Croydon */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Section_Info (area_id, section, type, text)
VALUES
	(
		5,
		1,
		't',
		'Locksmiths in the Croydon area - Where do we cover?'
	),
	(
		5,
		1,
		'p',
		'At Key Assist, we cover all Boroughs of London, whether you’re stranded in Central Croydon or it’s surrounding areas. Below is a list of areas our locksmiths can travel to in Croydon:'
	),
	(
		2,
		1,
		'p',
		'If your local area or the place in which you are stranded is not listed above, don’t worry, we can still help you gain entry to your vehicle and get back on the road as soon as possible. Call us now to find an auto locksmith near you.'
	),
	(
		5,
		1,
		't',
		'Locksmith prices in Croydon'
	),
	(
		2,
		1,
		'p',
		'Locksmith prices can differ quite a lot across the UK, and the price will always depend on the locksmith service that is required, the extent of the problem and any damage, whether or not you will need your locks and keys repaired or replaced and the type of vehicle you have. We offer some of the most competitive prices in London, so call us now for an instant free quote, obligation-free, and let us help you gain access to your vehicle at an affordable cost.'
	);