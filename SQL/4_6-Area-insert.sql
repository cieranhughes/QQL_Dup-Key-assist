/* --------------------------------------------------------------------- */
/* Area - Glasgow */
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
		"Glasgow",
		"Looking for an emergency locksmith in Glasgow?",
		"If you need the help of an experienced emergency locksmith near you in Glasgow, call us now and we'll get you an affordable quote and a specialist out to you straight away, wherever you are!",
		"Over 12,000 people have used Key Assist in 2021",
		"Highly-trained, specialist locksmiths available who offer high-quality lock and key services for your car",
		"We cover any area in or outside Glasgow, such as the West End, Southside and City Centre",
		"Get a quote for the cost of replacing or repairing car keys & locks, obligation-free",
		"Call us today for an emergency locksmith in Glasgow",
		"Glasgow locksmith services",
		2
	);

/* --------------------------------------------------------------------- */
/* Cards - Glasgow */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Cards (area_id, card_section, title, text)
VALUES
	(
		6,
		1,
		"Fast response",
		"At Key-Assist, we can help you as soon as possible if you need to gain access to your vehicle (car or van) urgently, no matter what time it is. Our locksmiths in Glasgow work on a 24-hour basis. Or, if you're not in a rush and simply want to get a price for the service you need, call us now, obligation-free."
	),
	(
		6,
		1,
		"Professional locksmiths",
		"If you need help getting into your vehicle due to a faulty key/lock or because you've locked the key inside, we'll find a locksmith near you in Glasgow who will provide a high-quality service. They have all the knowledge and tools needed to get the job done quickly, without causing damage."
	),
	(
		6,
		1,
		"Affordable prices",
		"Locksmith prices don't always come cheap, so if you're looking for an affordable locksmith in Glasgow to help you get out of a sticky situation, but you are on a budget, call us now and we'll get you the cheapest quote possible - no matter what type of lock & key problem you are experiencing."
	),
	(
		6,
		2,
		"Car key replacements",
		"If you have misplaced your keys and cannot find them anywhere, you've unfortunately had them stolen or your existing keys are damaged, we can find an expert locksmith near your local area in Scotland to help you gain access to your vehicle as soon as possible, so you can get back to what you need to do."
	),
	(
		6,
		2,
		"Repair broken/faulty locks",
		"If you have a traditional locking system in your car or van, or you have a digital lock that is faulty and not letting you gain access to your vehicle, our car and auto locksmiths in Glasgow will help you gain entry as soon as possible, without causing any further damage to your broken lock or key."
	),
	(
		6,
		2,
		"Problems with immobiliser",
		"If there is nothing wrong with your car key fob and/or nothing seems to be wrong with the vehicle, it could be that you're having trouble with your immobiliser as this can affect the locking system. If you need help with your immobiliser, our locksmiths in Glasgow are on hand to solve the problem ASAP!"
	);

/* --------------------------------------------------------------------- */
/* Bullets - Glasgow */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Bullets (area_id, bullet_section, bullet_text)
VALUES
	(6, 1, "Argyle street"),
	(6, 1, "Cambuslang"),
	(6, 1, "Dumbarton Road"),
	(6, 1, "East End"),
	(6, 1, "Glasgow Central/City Centre"),
	(6, 1, "Maryhill Road"),
	(6, 1, "Paisley"),
	(6, 1, "Partick"),
	(6, 1, "Pollokshaws Road"),
	(6, 1, "Port Glasgow"),
	(6, 1, "Shawlands"),
	(6, 1, "Southside"),
	(6, 1, "West End"),
	(6, 2, "Repair broken keys, fobs or locks"),
	(
		6,
		2,
		"Help if your key is stuck in your lock/ignition"
	),
	(
		6,
		2,
		"Replacement car keys/key cutting if you want copies made"
	),
	(6, 2, "Lock replacement"),
	(
		6,
		2,
		"Gain access to your vehicle if you've lost your keys, locked them inside or they have been stolen"
	),
	(6, 2, "Car key programming");

/* --------------------------------------------------------------------- */
/* Section Info - Glasgow */
/* --------------------------------------------------------------------- */
INSERT INTO
	Area_Section_Info (area_id, section, type, text)
VALUES
	(
		6,
		1,
		"t",
		"What areas in Glasgow do our emergency locksmiths cover?"
	),
	(
		6,
		1,
		"p",
		"The areas in and around Glasgow that our specialist locksmiths can cover include (but aren't limited to) the following:"
	),
	(
		6,
		1,
		"p",
		"Wherever you are stranded in the UK or the city of Glasgow, we can find an emergency locksmith near you and in your local area. Call us now to get a quote or to find out more about the services our specialist, experienced locksmiths can provide you with. To name a few services, our locksmiths can help with the following:"
	),
	(
		6,
		1,
		"t",
		"How much is an emergency locksmith near me?"
	),
	(
		6,
		1,
		"p",
		"How much an emergency locksmith costs in your local area in Glasgow will all depend on the service you require and how complex the problem is. Luckily, our locksmiths have the knowledge and experience to determine the problem and get it sorted for you as soon as possible, at an affordable price. Call us now for an obligation-free quote to find out more about locksmith prices and the services we can help you with!"
	),