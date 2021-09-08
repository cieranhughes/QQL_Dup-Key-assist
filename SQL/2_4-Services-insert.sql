/* --------------------------------------------------------------------- */
/* Locked Keys in Car */
/* --------------------------------------------------------------------- */
INSERT INTO Services (
		name,
		longname,
		tagline,
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
		"Gaining Access",
		"Gaining Access",
		"Need to gain entry to your car, van or other type of vehicle? Our approved and experienced locksmiths can help you now.",
		"Over 12,000 people have used Key Assist in 2021",
		"Fixed-fee call-out costs",
		"Help available in your local area, wherever you are in the UK",
		"Our professional auto-locksmiths will help you gain access without causing damage",
		"Get instant help if you need to gain entry to your...",
		"Why you should use an approved specialist to gain access",
		"If you find yourself in the unfortunate situation of being locked outside your car or van and you need to gain entry as soon as possible so you can carry on with life as normal, you may try to gain access yourself, especially if you are panicking, which is our natural response to such situations. It is, however, important that you don't try to gain access yourself as you could cause more damage (to yourself or your vehicle) which will likely end up costing you a lot of money to rectify - much more than the cost of paying for a specialist locksmith to come out and do the job professionally for you.",
		"It's also worth noting that you may be able to claim any costs back for any damages or replacement key costs, but your insurer may decline a claim if you've caused the damage yourself - it all depends on their terms and conditions. Just remember that you may lose any no-claims bonus if you do so. Avoid causing any further damage to your assets and save yourself from any additional hassle by contacting us now for assistance. Our experienced locksmiths have all the knowledge and the right equipment to get the job done quickly and with little damage."
	);

INSERT INTO Services_Cards (
		service_id,
		title,
		text
	)
VALUES (
		4,
		"Car",
		"You may find that you can't gain access to your vehicle because the key and/or lock is broken or because you have accidentally locked the keys inside. Contact us today and we'll get an approved key specialist out to you so you can get your car or van back on the road. Get a quote from us now, obligation-free."
	),
(
		4,
		"Van",
		"Locked out of your van? If you're the owner of a van for work or business purposes, or purely just for personal usage, and you have somewhere you need to be urgently but you can't gain access, youll need to gain entry ASAP so that you can carry on with work as normal. Get in touch now."	
),
(
		4,
		"Other vehicle",
		"If you have another type of vehicle other than a car or van, such as a pickup truck or commercial vehicle, our locksmiths are highly trained and able to help you gain access to your vehicle as soon as possible, no matter what type, make or model it is. Dont hesitate to contact us to find out more!"
	);

INSERT INTO Services_FAQ (
		service_id,
		question,
		answer
	)
VALUES (
		4,
		"What should I do if I am locing out of my car or van?",
		"If you can't get into your vehicle because you've accidentally locked the key inside or you can't gain access with your existing key (usually because it is broken or because there may be immobiliser problems), you will need to contact a local and professional locksmith service near you to get help so that you can get back on the road as soon as possible. Do not try to gain entry yourself - despite what Google may tell you - as you may cause further damage or problems to the vehicle, which will cost you more money. Save time and hassle by calling us now at Key-Assist and we'll get a professional locksmith out to you as soon as possible, wherever you are located in the UK."
	),
	(
		4,
		"How do keys get locking in a vehicle?",
		"You may be wondering how your car or van has locked itself without you locking it manually with a key, but some vehicles have an auto-lock feature that makes the car lock automatically when the last door closes shut. Some vehicles may just automatically lock if a period of time has gone by - whether the keys are in the car or not. Whatever the reason for locking your keys in your vehicle, contact an approved locksmith now to avoid causing any damage to the vehicle. Our locksmiths are experienced and have all the technology and equipment needed to gain access to your car or van - so if you need a new key cut and reprogrammed to gain entry, they can sort this out for you - no matter what make or model your vehicle is."
	),
	(
		4,
		"How much does it cost for a locksmith to unlock your car?",
		"The price you will have to pay for a car locksmith to help you regain access will depend on the type of car you have, the type of problem and service required, as well as other factors such as your location, for example. For these reasons, it is important that you don't try to gain entry yourself to prevent causing more damage or problems, otherwise this will end up costing you much more when it comes to getting professional help. At Key-Assist, we offer some of the most affordable and competitive prices across the UK, no matter where you are stranded. Call us now for emergency assistance or simply to get a quote for the service you require."
	);
