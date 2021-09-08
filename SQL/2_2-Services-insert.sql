/* Insert all services data */

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
		'Lost Car Keys',
		'Lost Car Key Replacement Services',
		'We have you covered 24/7 all across the UK',
		'If you’ve lost your car keys after searching high and low, we can help you get a replacement quickly with the help of our approved locksmiths.',
		'Over 12,000 people have used Key Assist in 2021',
		'Standard and remote replacement keys available for all vehicle types',
		'Approved car key specialists ready to help, no matter where you are in the UK',
		'Our locksmiths will cut and programme a new key using the latest technology and tools',
		'Tips on how to find lost keys',
		'Getting a replacement key for your vehicle',
		'According to a study commissioned by Samsung SmartThings Find, of which 2,000 Brits were questioned, people in the UK spend an average of 140 days of their lives looking for lost belongings, including car keys! There are, of course, things we can do to prevent the hassle of losing our keys, such as putting them in the same place every time you get home or investing in a smart key finder, but we can’t always be that organised with everything else going on in our busy lives.',
		'If you’ve searched high and low for your misplaced car keys, there’s nothing more frustrating and stressful - especially if you’re in a rush! You may be wondering how on earth you can get a replacement key for your car without the original, but thankfully, there are reputable locksmiths on hand who specialise in this type of thing. If you need a professional to supply a replacement key immediately, we have a panel of approved locksmiths with a huge selection of genuine and specialist aftermarket keys that you can trust, no matter where you live. Contact us now to get help and to receive your quote for a replacement key right now - tap the button at the top of this page.'
	);

INSERT INTO Services_Cards (
		service_id,
		title,
		text
	)
VALUES (
		2,
		'Remain calm',
		'When we’re in a rush, we tend to panic if we can’t find our car keys, but the key (pardon the pun) is to try and stay relaxed, stop what you are doing and think. Retrace your steps and try looking in unusual places if you haven’t done so already. If there’s still no sign, a specialist locksmith can help.'
	),
(
		2,
		'Have a smart keyfinder?',
		'Of course, if you don’t have one then you can’t try this method, but it’s something to consider purchasing if you want to avoid losing your keys in the future. It’s worth investing in this to save yourself time and money, but if you don’t have one, it’s time to call a specialist who can help.'	
),
(
		2,
		'Contact a locksmith',
		'If you’ve tried everything to locate your misplaced keys, you’ll need to get in touch with a trusted locksmith in your local area who can get you a replacement key ASAP. At Key Assist, we have approved specialists across the UK who can supply you with the right key whenever you need it!'
	);

INSERT INTO Services_FAQ (
		service_id,
		question,
		answer
	)
VALUES (
		2,
		'Can a locksmuth but a key with just the VIN number?',
		'Yes, a locksmith is able to do this and they do not need the original key to be able to duplicate it. VIN stands for Vehicle Identification Number, and this is a type of ‘key code’ that is provided when the vehicle is manufactured. With most cars today, a locksmith can use the VIN number of your vehicle to cut a brand-new key for your car. If your car is more advanced, you may need a ‘transponder’ to be put into the newly-cut key and then programmed to match the vehicle’s transponder/chip requirement, which our approved auto-locksmiths can do for you. Important: You will also need to provide proof that you own the vehicle for them to be able to do this.'
	),
	(
		2,
		'Can I clame the cost of a replacemnt key back?',
		'If you’ve lost your car key, or it’s unfortunately been stolen, you might be able to make a claim on your car insurance policy to get the cost of paying for a replacement key back.However, this depends on your insurer and what your specific policy covers. A lot of car cover policies come with ‘key cover’ as standard, while other insurance policies may not include this and you’ll have to add this extra cover on at an additional cost (it’s unlikely to be that much). If you’re unsure what your policy covers you for, it’s worth checking with your insurance company to see if you could claim the cost back, so that you don’t have to be out of pocket. Just bear in mind that a claim on your policy may result in you losing your hard-earned no claims bonus, so remember to check this with your insurer first before claiming.'
	),
	(
		2,
		'Does my key need to be programmed',
		'Most keys today are more than a simple metal key that can be copied and it is likely that you have an electronic key and if you lose it, you’ll need to get a new one which will need to be programmed by a car key specialist. Electronic car keys are also referred to as ‘chip keys’ or ‘transponder’ keys and they must be programmed to a vehicle for it to work. It doesn’t take long for a professional locksmith to duplicate and program a new car key - our approved locksmiths can help! To get in touch now, tap the button at the top of this page.'
	);
