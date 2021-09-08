/* --------------------------------------------------------------------- */
/* Area - Swansea */
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
		'Swansea',
		'Locksmiths in and around Swansea',
		'If you can’t get into your vehicle, whether it’s a car, van, truck or other type, call us now and we’ll locate a local locksmith near you in Swansea, or simply call to get a free quote.',
		'Over 12,000 people have used Key Assist in 2021',
		'Get help to gain access to your car ASAP, whether your key is broken or lock is faulty',
		'We provide efficient and affordable locksmith services near you 24 hours, every day',
		'Our car locksmiths cover many areas in and around Swansea, such as the Gower & Sketty',
		'Get professional help from our emergency locksmiths',
		'Emergency locksmith services',
		2
	);

/* --------------------------------------------------------------------- */
/* Cards - Swansea */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Cards (area_id, card_section, title, text)
VALUES
	(
		2,
		2,
		'Car key cutting',
		'Our locksmiths can help if you need to get a brand-new car key cut - whether your existing key is broken and you need a new one, you need a new one made and reprogrammed as you’ve had your keys stolen or you simply want a spare supplied. Whatever your lock or key needs, call us now.'
	),
	(
		2,
		2,
		'Lost car keys',
		'Losing our car keys is extremely frustrating, especially when you have somewhere you need to be urgently. Let us help with our hassle-free, efficient locksmith services - we can help supply you with a replacement car key and we can even program a new one if you want to make sure no one can get in. '
	),
	(
		2,
		2,
		'Car key/lock repairs',
		'If your key is faulty or your locks are broken, do not attempt to fix them yourself as you risk causing more damage and incurring more costs when a locksmith comes to help with repairs. No job is too complex for our experienced locksmiths, and they have all the equipment needed to tackle any issue.'
	),
	(
		2,
		1,
		'Trained locksmiths',
		'Whatever service you require with your vehicle’s locking system or key, our locksmiths are on hand to help. With years of experience, our emergency locksmiths are highly trained and have the knowledge and tools to help you gain access to your car or van in no time, without causing any further damage.'
	),
	(
		2,
		1,
		'24/7 emergency support',
		'At Key-Assist, we know that you may need to use your car at any time of the day or night, and if you get locked out due to a faulty key, damaged locks or immobiliser problems, you may need emergency help to get back on the road ASAP. Call us now and we’ll find a 24 hour locksmith near you, no matter when you call.'
	),
	(
		2,
		1,
		'Affordable services',
		'It’s difficult to give a price as to how much a locksmith costs, as it all depends on the type of problem you have and the type of vehicle. In Swansea, we offer some of the most competitive prices for locksmith services, whether you need a cheap key cutting service or central locking repair. Call us now for a quote, obligation-free.'
	);

/* --------------------------------------------------------------------- */
/* Bullets - Swansea */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Bullets (area_id, bullet_section, bullet_text)
VALUES
	(2, 1, 'Birchgrove'),
	(2, 1, 'Clydach'),
	(2, 1, 'Gorseinon'),
	(2, 1, 'Gowerton'),
	(2, 1, 'Killay'),
	(2, 1, 'Llangyfelach'),
	(2, 1, 'Llansamlet'),
	(2, 1, 'Morriston'),
	(2, 1, 'Mumbles'),
	(2, 1, 'Neath'),
	(2, 1, 'Pontarddulais'),
	(2, 1, 'Port Talbot'),
	(2, 1, 'Rhossili'),
	(2, 1, 'Uplands'),
	(
		2,
		2,
		'You’ve locked your keys inside your car or van'
	),
	(2, 2, 'Your keys are damaged'),
	(
		2,
		2,
		'The battery in your car keys is dead'
	),
	(2, 2, 'Your car keys have been stolen'),
	(2, 2, 'You’ve lost your car keys'),
	(
		2,
		2,
		'You are experiencing problems with your immobiliser'
	);

/* --------------------------------------------------------------------- */
/* Section Info - Swansea */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Section_Info (area_id, section, type, text)
VALUES
	(
		2,
		1,
		't',
		'Swansea locksmiths - The areas we cover near you'
	),
	(
		2,
		1,
		'p',
		'Whether you’re located in the heart of Swansea city or on the outskirts in surrounding areas, we will be able to find you a local locksmith who can help with any problem at any time. Our Swansea locksmiths can travel to the following areas and beyond, so if your location isn’t listed below, don’t worry - we’ll still be able to help.'
	),
	(
		2,
		2,
		'p',
		'If you are stranded in one of the areas mentioned above, or you can’t gain access to your vehicle somewhere else near Swansea, give our team a call now to find out how we can help you or simply call if you only require a no-obligation quote. We can help you if:'
	),
	(
		2,
		2,
		'p',
		'Whatever problem you are facing with your car’s locks and/or keys, don’t delay calling us - we’ll get a specialist auto locksmith out to you as soon as possible so you can get back to doing what you need to do.'
	);