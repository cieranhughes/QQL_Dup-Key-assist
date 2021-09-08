/* --------------------------------------------------------------------- */
/* Area - Bristol */
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
		'Bristol',
		'Get a specialist locksmith in Bristol',
		'At Key-Assist, we’re here to help find you a local locksmith in Bristol in the event of an emergency such as if you’ve locked your keys in your car or the locks are damaged. Call us now!',
		'Over 12,000 people have used Key Assist in 2021',
		'Highly-trained, experienced 24/7 locksmiths guaranteed to help you gain entry to your vehicle',
		'Our emergency locksmiths cover all areas in and around the city of Bristol',
		'Want to know more about prices for our lock and key services? Get a quote obligation-free',
		'Car and van locksmiths in Bristol',
		'Emergency locksmith services near me in Bristol',
		3
	);

/* --------------------------------------------------------------------- */
/* Cards - Bristol */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Cards (area_id, card_section, title, text)
VALUES
	(
		4,
		1,
		'Experienced',
		'Whatever problems you are having with the locks and/or keys to your vehicle, our locksmiths are highly-trained, experienced and have all the knowledge and equipment needed to understand the problem at hand and rectify it as soon as possible, without causing hassle or damage to your car or van.'
	),
	(
		4,
		1,
		'24 hour service',
		'If you are stranded in Bristol or any other part of the UK, we provide a fast response no matter what time of the day or night you need to call us. We will find the nearest locksmith to you and they will come out to you at the soonest possible time, letting you gain access and get back to what you need to do ASAP.'
	),
	(
		4,
		1,
		'Affordable',
		'Locksmith prices across the UK can vary significantly depending on the type of lock/key problem you have, the type of service you require and your location. At Key-Assist, we offer competitive prices while still providing high-quality services. If you simply just want a quote, call us now, obligation-free.'
	),
	(
		4,
		2,
		'Car locksmith',
		'If you can’t gain access to your vehicle, whether it’s a car or van, our auto locksmiths in Bristol have the expertise to determine what the problem is and resolve it. You may have immobiliser problems or perhaps there is a fault with your key fob. Whatever manufacturer or model, they will help you.'
	),
	(
		4,
		2,
		'Fix door lock',
		'If you’re having trouble with the locks on your vehicles doors, we will get a locksmith out to you as soon as possible to help you gain access, whatever the problem may be. Whether your locks need to be repaired or replaced, our locksmiths have the skills and tools for the job - no matter what type of vehicle you have.'
	),
	(
		4,
		2,
		'Upgrade locks',
		'Your vehicle may have old, traditional locks on the doors, in which case, you may want to have them upgraded to a more modern locking system to increase the level of security - both for peace of mind and insurance purposes. If you need to find out about prices near you in Bristol, call us now.'
	);

/* --------------------------------------------------------------------- */
/* Bullets - Bristol */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Bullets (area_id, bullet_section, bullet_text)
VALUES
	(4, 1, 'Bath'),
	(4, 1, 'Bedminster'),
	(4, 1, 'Bristol city centre'),
	(4, 1, 'Clifton Village'),
	(4, 1, 'Cotham'),
	(4, 1, 'Easton'),
	(4, 1, 'Fishponds'),
	(4, 1, 'Harbourside'),
	(4, 1, 'Hotwells'),
	(4, 1, 'Redland'),
	(4, 1, 'Southville'),
	(4, 1, 'St Andrew’s'),
	(4, 1, 'Stokes Croft'),
	(4, 1, 'Totterdown'),
	(4, 1, 'Westbury-on-Trym'),
	(4, 1, 'Whiteladies Road'),
	(4, 2, 'Car key not working'),
	(4, 2, 'Car key battery dead'),
	(4, 2, 'Door locking system broken'),
	(4, 2, 'Door handle stuck'),
	(4, 2, 'Key snapped in lock/ignition'),
	(4, 2, 'Need a replacement key'),
	/* --------------------------------------------------------------------- */
	/* Section Info - Bristol */
	/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Section_Info (area_id, section, type, text)
VALUES
	(
		4,
		1,
		't',
		'Locksmith Bristol - The areas covered by our specialists'
	),
	(
		4,
		1,
		'p',
		'We will find a locksmith that covers the following areas in Bristol (North, South, East & West) and beyond:'
	),
	(
		4,
		1,
		'p',
		'If you are stranded or live in one of the areas listed above or you are located in a different area in or outside of the city of Bristol, don’t hesitate to contact us now for emergency locksmith services. If you need urgent assistance with the following problems, our locksmiths can help, no matter where you are located in or around Bristol:'
	),
	(
		4,
		1,
		'p',
		'Call us now at Key-Assist if you are having trouble with any problems listed above or any other type of issue with your locks and/or keys and you need to gain access to your car or van immediately.'
	),
	(
		4,
		1,
		't',
		'How much does a locksmith cost?'
	),
	(
		4,
		1,
		'p',
		'It is difficult to give an exact figure as to how much our locksmiths services will cost you, as it will depend on the type of service you need and the complexity of the problem. If you’d like to learn more about our locksmith prices in Bristol, call us now and we’ll be able to give you a no obligation quote : 03301 072349'
	);