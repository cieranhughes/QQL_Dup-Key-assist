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
		'Locked Keys in Car',
		'Locked Keys in Car or Van',
		'Affordable Car Lockout Services',
		'If you have locked your keys in your vehicle accidentally and you need to get back on the road as soon as possible, we can help.',
		'Over 12,000 people have used Key Assist in 2021',
		'Affordable help available across all of the UK',
		'Our locksmiths have specialist lock picks for thousands of vehicle types',
		'Gain access to your vehicle without any damage with our approved locksmiths',
		'What to do if your keys are locked in your vehicle',
		'Gaining Access to Your Vehicle',
		'There’s nothing more frustrating or stressful than accidentally locking your keys inside your vehicle, especially if you have somewhere you need to be urgently. Being locked outside of a car is, however, much more common than you may think. There are a few reasons why you may be facing the tricky situation of being locked outside your car, including:',
		'We have a large network of approved locksmiths across the UK, so by contacting us today, we will be able to find an auto-locksmith near you that can help get you back inside your vehicle straight away. Our locksmiths have all the latest technology and lock picks available, so no matter what type of vehicle you have, they’ll be able to get you back on the road in no time - without causing any damage to your car or van. To find out more or to get help with unlocking your car now, simply tap the button at the top of this page to get in touch.'
	);

INSERT INTO Services_Cards (
		service_id,
		title,
		text
	)
VALUES (
		1,
		'Do you have a spare key?',
		'Before calling a locksmith to help you get back into your locked vehicle and back on the road as soon as possible, the first thing you should do is get your spare key if you have one. This may seem obvious, but many drivers tend to panic when this happens and forget they have one.'
	),
(
		1,
		'Download the app',
		'Many modern cars (petrol/diesel and electric) come with an app that you can download, which has useful services for you to benefit from if you need them. Most apps will allow you to unlock (and even lock) your vehicle without the need for a key, so be sure to check if you have this feature.'
	),
(
		1,
		'Call a specialist',
		'If you do not have a spare key or your vehicle does not come with a handy app to help you gain access to your car or van, you will need to contact a specialist who can help get an approved auto-locksmith out to you and your vehicle straight away.'
	);

INSERT INTO Services_Section_Bullets (
		service_id,
		bullet_text
	)
VALUES (
		1,
		'You’ve left the keys inside the car and it automatically locked when you closed it - people most commonly lock their keys in the boot of their vehicle'
	),
(
		1,
		'You’ve lost your car keys'
	),
(
		1,
		'The keys are damaged or simply don’t work'
	),
(
		1,
		'The transponder chip could be broken and it may need to be reprogrammed'
	),
(
		1,
		'The locks in your car are broken'
	),
(
		1,
		'The latch on your car doors are stuck and will not open'
	),
(
		1,
		'Whatever the reason for being locked outside of your vehicle, we can help you at Key-Assist'
	);

INSERT INTO Services_FAQ (
		service_id,
		question,
		answer
	)
VALUES (
		1,
		'Should I call the police if my keys are locked in my car?',
		'If you’ve accidentally locked your keys inside your vehicle or you can’t get inside your car for another reason, this isn’t usually considered to be an emergency and you should refrain from calling the emergency services. Instead, you need to try and gain access yourself with a spare key if you can or you’ll need to contact a locksmith, roadside recovery (if you have breakdown cover) or a garage to get it unlocked. If, however, your car is parked in the sun on a hot day, or on a freezing cold day, and there is someone inside the vehicle (such as a child, vulnerable person or even a pet) while it is locked and you are unable to gain entry, you can contact the police if you are worried for their safety. It depends how serious the situation is - you should first try to contact your roadside recovery company or a locksmith to see how quickly they can get there. If they can’t get there right away, be sure to contact the police who will have to use force to get inside the vehicle. If you are locked outside of your vehicle and it is located in a potentially dangerous place, such as in the way of an emergency exit/access or it is blocking traffic, you may need to contact the emergency services if you cannot get help elsewhere.'
	),
(
		1,
		'Can I try to get the keys out of the car myself?',
		'No. If you look online for help and advice while locked outside your car, you will come across many articles telling you how to get into your vehicle yourself by using certain items, but this is not recommended as you could cause worse damage to your car. Do not try and pry the windows open as you may smash them or cause dents on the exterior, and you could set off the car alarm which will, of course, make the situation more stressful. If you try these DIY methods, you risk facing very expensive repair costs and you are likely to invalidate your car’s warranty. You also won’t be able to make a claim on your car insurance policy as you caused the damage yourself, so you’ll have to fork out the costs from your own pocket.'
	),
(
		1,
		'Do any of my insurance policies cover me for locking my keys in my car?',
		'If you have breakdown cover in place, they should be able to send a roadside recovery mechanic to you and your vehicle straight away. If the mechanic is unable to unlock your car there and then, they will probably contact a local locksmith or a local garage to help gain access to your vehicle. If this happens, you will have to pay for the costs yourself as this is not included in your breakdown policy (unless you have extra key cover included in the policy for such situations). You may have breakdown cover as part of your car insurance policy, but you will need to check your documents to find this out if you are unsure. Typically, most normal car insurance does not cover you for locking your keys in your car, there may be a charge payable by your breakdown provider for gaining entry.'
	);