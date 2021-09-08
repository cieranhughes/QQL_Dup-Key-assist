/* --------------------------------------------------------------------- */
/* Locked Keys in Car */
/* --------------------------------------------------------------------- */
INSERT INTO Services (
		name,
		longname,
		tagline,
		description,
		point_1,
		point_2,
		point_3,
		point_4,
		section_2_title,
		section_3_title,
		section_3_text_top,
		section_3_text_bottom
	)
VALUES (
		'Car Key Cutting',
		'Car key cutting near me',
		'Fast & Professional key cutting and programming services at competitive prices ',
		'If you’ve lost your car key or you would simply like a copy made for your car, van or other type of vehicle, our auto locksmiths are on hand to help get the job done professionally.',
		'Over 12,000 people have used Key Assist in 2021',
		'Fixed-fee call-out prices and affordable costs for car key cutting services',
		'Our car key specialists can cut any types of keys for any type of vehicle',
		'We will find a locksmith near you in your local area, no matter where you are in the UK',
		'Professional car key cutting services from a locksmith near you',
		'Key cutting and programming available for all types of vehicles',
		'If you need a professional to cut a car key for you then give us a call now at Key-Assist - even if you just require a quote. Our professionals are highly-trained and able to do the following car cutting services:',
		'It doesn’t matter what type of vehicle you have, nor what make or model it is. Our specialist emergency locksmiths can supply new keys for the following and much more: Audi, BMW, Ford, Honda, Mercedes Benz, Peugeot, Renault, Vauxhall, Volkswagen (VW). If your vehicle is not listed above, don’t worry! Our locksmiths will be able to cut a brand new key for your car or van as they have all the knowledge and equipment necessary. Call us now to get a quote or to find out more about how we can help you.'
	);

INSERT INTO Services_Cards (
		service_id,
		title,
		text
	)
VALUES (
		3,
		'Experienced',
		'At Key-Assist, we can guarantee high-quality, professional services from our qualified, expert locksmiths who’ve been in the business for years. Whatever the problem you are experiencing with your lock and/or key or whatever type of key you need cutting, they’ll get the job done efficiently.'
	),
(
		3,
		'24-hour',
		'We understand that you may need a key cut in an emergency, which could be any time of day or night. That’s why we’re here to help you 24-hours every day, 7 days a week. We will locate the nearest auto locksmith to you and they’ll get out to you as soon as possible, no matter the problem.'	
),
(
		3,
		'Affordable',
		'You may have heard that car key cutting services can be expensive, but it always depends on the type of key that needs cutting and the vehicle itself. At Key-Assist, we offer some of the best, most affordable prices across the UK. If you need a quote, call us now to find out more, obligation-free.'
	);

INSERT INTO Services_Section_Bullets (
		service_id,
		bullet_text
	)
VALUES (
		3,
		'Replace blade, buttons and/or casing of your car key if it is broken'
	),
	(
		3,
		'Cut and supply transponder key programming (keys with chips) with cloning equipment'
	),
	(
		3,
		'Cut and supply a copy so that you have a spare key for your car (non-remote)'
	),
	(
		3,
		'Car key programming once a new key has been cut'
	),

		3,
		'If you need any of the above services or you need more advice and information about the many services we offer, get in touch now, obligation-free.'
	);

INSERT INTO Services_FAQ (
		service_id,
		question,
		answer
	)
VALUES (
		1,
		'Where can I get a key cut near me?',
		'At Key-Assist, we can contact a locksmith that’s nearest to where you live or where you’re stranded, wherever that may be in the UK. We cover the following cities and more: Birmingham Bristol Cardiff Glasgow Leeds London Manchester Newcastle Portsmouth Reading Southampton. To see all areas we cover, find a locksmith here, but remember, we can find a locksmith in your local area wherever you are in the UK, even if it isn’t on our list!'
	),
	(
		1,
		'How much does it cost to get my car key cut?',
		'It’s difficult to give a set price for cutting a brand new car key, as the cost will all depend on the type of problem with the key, or the type of key that needs to be copied - i.e. how modern/complex the key is. Whatever key you have, our locksmiths will know what to do. While we can’t give you an exact cost, we can tell you that our prices will be much cheaper than if you were to go to your nearest car dealership. To find out how much it is to get your key cut or enquire about our key cutting prices and other services, give us a call now, obligation-free.'
	),
	(
		1,
		'How long does it take to cut a car key?',
		'Our auto locksmiths should be able to get a copy of your car key made on the same day, but it will all depend on the situation. Either way, our specialists will try their best to get it done as soon as possible for you. Call us now to find out more.'
	);
