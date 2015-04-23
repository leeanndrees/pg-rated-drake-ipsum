<?php

class LoremIpsumGenerator {

	/**

	*	Copyright (c) 2009, Mathew Tinsley (tinsley@tinsology.net)

	*	All rights reserved.

	*

	*	Redistribution and use in source and binary forms, with or without

	*	modification, are permitted provided that the following conditions are met:

	*		* Redistributions of source code must retain the above copyright

	*		  notice, this list of conditions and the following disclaimer.

	*		* Redistributions in binary form must reproduce the above copyright

	*		  notice, this list of conditions and the following disclaimer in the

	*		  documentation and/or other materials provided with the distribution.

	*		* Neither the name of the organization nor the

	*		  names of its contributors may be used to endorse or promote products

	*		  derived from this software without specific prior written permission.

	*

	*	THIS SOFTWARE IS PROVIDED BY MATHEW TINSLEY ''AS IS'' AND ANY

	*	EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED

	*	WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE

	*	DISCLAIMED. IN NO EVENT SHALL <copyright holder> BE LIABLE FOR ANY

	*	DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES

	*	(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;

	*	LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND

	*	ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT

	*	(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS

	*	SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

	*/

	

	private $words, $wordsPerParagraph, $wordsPerSentence;

	

	function __construct($wordsPer = 10)

	{

		$this->wordsPerParagraph = $wordsPer;

		$this->wordsPerSentence = 1;

		$this->words = array(

		'When I pull up on a nigga,',

		'Tell that nigga back back,',

		'I’m too good with these words,',

		'Watch a nigga backtrack,',

		'If I die all I know is I’m a motherfucking legend,',

		'It’s too late for my city,',

		'I’m the youngest nigga rapping,',

		'Oh my God oh my God,',

		'If I die I’m a legend,',

		'Oh my God oh my God,',

		'If I die I’m a legend,',

		'I’m up first I’m on tour,',

		'Got a girl she from the South,',

		'Used to work used to dance in Texas,',

		'Now she clean the house,',

		'Everyday I was strugglin‘ to learn what life’s about,',

		'On my way money taught me Spanish,',

		'Make it andale,',

		'Way up north packed in Honda cars,',

		'They ’ont know who we are,',

		'Fuck em all they only pussy niggas shooting at the star,',

		'Right or wrong I’ma write my wrongs,',

		'They can’t live this long,',

		'You don’t know where you’re gonna go,',

		'I got this shit mapped out strong,',

		'When I pull up on a nigga,',

		'Tell that nigga back back,',

		'I’m too good with these words,',

		'Watch a nigga backtrack,',

		'All I know if I die I’m a motherfucking legend,',

		'It’s too late for my city,',

		'I’m the youngest nigga rapping,',

		'Oh my God oh my God,',

		'If I die I’m a legend,',

		'Oh my God oh my God,',

		'If I die I’m a legend,',

		'I’m the one one,',

		'Why do I feel like the only one?',

		'Why do I feel like you owe me one?',

		'6 G-O-D I’m the holy one,',

		'Yeah you know what’s up,',

		'They been off for a minute now,',

		'You know they all sentimental now,',

		'You know they all actin‘ different now,',

		'And I I just can’t pretend,',

		'Seen too much it’s so hard for me to let new people in,',

		'I can’t change this shit set in stone,',

		'They can’t live this long,',

		'You don’t know where you’re gonna go,',

		'I got this shit mapped out strong,',

		'When I pull up on a nigga,',

		'Tell that nigga back back,',

		'I’m too good with these words,',

		'Watch a nigga backtrack,',

		'All I know if i die I’m a motherfucking legend,',

		'It’s too late for my city,',

		'I’m the youngest nigga rapping,',

		'Oh my God oh my God,',

		'If I die I’m a legend,',

		'Oh my God oh my God,',

		'If I die I’m a legend,',

		'Lickwood means rewind a gunshot means forward,',

		'You requested it so we rewind,',

		'Yeah,',

		'Way way way up,',

		'Turn it all up,',

		'Yeah,',

		'Look,',

		'I got enemies got a lotta enemies,',

		'Got a lotta people tryna drain me of this energy,',

		'They tryna take the wave from a nigga,',

		'Fuckin’ with the kid and pray for your nigga,',

		'I got girls in real life tryna fuck up my day,',

		'Fuck goin’ online that ain’t part of my day,',

		'I got real shit poppin’ with my family too,',

		'I got niggas that can never leave Canada too,',

		'I got two mortgages thirty million in total,',

		'I got niggas that’ll still try fuckin’ me over,',

		'I got rap niggas that I gotta act like I like,',

		'But my actin’ days are over fuck them niggas for life yea,',

		'I got enemies got a lotta enemies,',

		'Got a lotta people tryna drain me of this energy,',

		'They tryna take the wave from a nigga,',

		'Fuckin’ with the kid and pray for your nigga,',

		'I got people talkin’ down man like I give a fuck,',

		'I bought this one a purse I bought this one a truck,',

		'I bought this one a house I bought this one a mall,',

		'I keep buyin’ shit just make sure you keep track of it all,',

		'I got bitches askin’ me about the code for the Wi-Fi,',

		'So they can talk about they timeline,',

		'And show me pictures of they friends,',

		'Just to tell me they ain’t really friends,',

		'Ex-girl she the female version of me,',

		'I got strippers in my life but they virgins to me,',

		'I heard everybody talking bout what they gonna be,',

		'I got high hopes for you niggas we gon’ see,',

		'I got money in the courts so all my niggas are free,',

		'Bout to call your ass a Uber I got somewhere to be,',

		'I hear fairy tales ‘ bout how they gon’ run up on me,',

		'Well run up when you see me then and we gon’ see,',

		'I got enemies got a lotta enemies,',

		'Got a lotta people tryna drain me of this energy,',

		'They tryna take the wave from a nigga,',

		'Fuckin’ with the kid and pray for your nigga,',

		'Naw fuck all of you niggas I ain’t finished,',

		'Y’all don’t wanna hear me say it’s a go,',

		'Y’all don’t wanna see Win Win fifty a woe,',

		'I got real ones livin’ past Kennedy Road,',

		'I got real ones with me everywhere that I go,',

		'I’m tryna tell ya I got enemies got a lotta enemies,',

		'Every time I see ‘ em somethin’ wrong with they memory,',

		'Tryna take the wave from a nigga,',

		'So tired of savin’ all these niggas mayne!,',

		'Yeah,',

		'Run up,',

		'I got enemies got a lotta enemies,',

		'Got a lotta people tryna drain me of this energy,',

		'They tryna take the wave from a nigga,',

		'Fuckin’ with the kid and pray for your nigga,',

		'10 Bands 50 bands 100 bands fuck it man,',

		'Let’s just not even discuss it man O-M-G,',

		'Niggas sleep I ain’t trippin‘ I’ma let em sleep,',

		'I ain’t trippin‘ let em rest in peace,',

		'I can tell ya how it happened,',

		'I can tell ya bout them safe house nights out in Calabasas,',

		'I can tell you not a rapper,',

		'Tryna sell these story I don’t even open up the package,',

		'Who you with? What you claim?',

		'I was paying mamma’s rent when I was turning 17,',

		'Sold it dirty like Diana never clean,',

		'My ex ask me Where you moving? I said On to better things,',

		'I been in the crib with the phones off,',

		'I been at the house taking no calls,',

		'I done hit the stride got my shit going,',

		'In the six cooking with the wrist motion,',

		'Drapes closed I don’t know what time it is,',

		'I’m still awake I gotta shine this year,',

		'I could never ever let the streets down,',

		'Haven’t left the condo for a week now,',

		'I been on a mission haven’t left the condo,',

		'This that OvO that SZN this that new Toronto,',

		'I get boxes of free Jordan like I play for North Carolina,',

		'How much I make off the deal how the fuck should I know?',

		'All my watches always timeless you can keep the diamonds,',

		'Treating diamonds of Atlanta like it’s king of diamonds,',

		'Take a flick I look like Meechy look like Bleu DaVinci,',

		'I treat V Live like it’s 07 in Magic City,',

		'Man I told my city I’d be gone till November then November came,',

		'Then I came right back on my worst behav’,',

		'6 God put both hands together that’s amazing grace,',

		'6 God selfish with the love I need all the praise,',

		'They got me feeling like the one again,',

		'Yeah shout goes out to Nike checks all over me,',

		'I need a FuelBand just to see how long the run has been,',

		'I been in the crib with the phones off,',

		'I been at the house taking no calls,',

		'I done hit the stride got my shit going,',

		'In the six cooking with the wri-wri-wri-wri,',

		'Hol it Hol it Hol it Hol it Hol it,',

		'No sleepin‘ in the streets,',

		'Shaky warrior,',

		'Yeah this that Oliver 40 Niko shit man 15 Fort York shit ya know,',

		'Boi-1da what’s poppin’?',

		'Yeah yeah,',

		'Runnin‘ through the 6 with my woes,',

		'Countin‘ money you know how it goes,',

		'Pray the real live forever man,',

		'Pray the fakes get exposed,',

		'I want that Ferrari then I swerve,',

		'I want that Bugatti just to hurt,',

		'I ain’t rockin‘ my jewelry that’s on purpose,',

		'Niggas want my spot and don’t deserve it,',

		'I don’t like how serious they take themselves,',

		'I’ve always been me I guess I know myself,',

		'Shakiness man I don’t have no time for that,',

		'My city too turnt up I’ll take the fine for that,',

		'This been where you find me at,',

		'That’s been where you find me at,',

		'I know a nigga named Johnny Bling,',

		'He put me on to the finer things,',

		'Had a job sellin‘ Girbaud jeans,',

		'I had a yellow TechnoMarine,',

		'Then Kanye dropped it was polos and backpacks,',

		'Man that’s when Ethan was pushin‘ a Subaru hatchback,',

		'Man I’m talkin‘ way before hashtags,',

		'I was runnin‘ through the 6 with my woes,',

		'Yeah! I was runnin‘ through the 6 with my woes,',

		'You know how that should go,',

		'You know how that should go,',

		'You know how that should go,',

		'Runnin‘ through the 6 with my woes,',

		'You know how that should go,',

		'You know how that should go,',

		'You know how that should go,',

		'Don’t fuck with them niggas they too irrational woah,',

		'This is that nasty flow,',

		'Top boy in this shit I’m so international,',

		'Reps up is in here got P Reign and Chubby and TJ and Winnie and woah,',

		'Yeah and you know how that shit go,',

		'I might declare it a holiday as soon as Baka get back on the road,',

		'Yeah but you know how that shit go,',

		'They so irrational they don’t wanna patch it up,',

		'They wanna mash it up woah,',

		'My nigga Jibba he whip it I ride in the passenger,',

		'I’m way up I stay up I’m two up I’m three up,',

		'I had to get back to you woah,',

		'I’m turnin‘ into a nigga that thinks about money and women,',

		'Like 24/7 that’s where my life took me,',

		'That’s just how shit happened to go,',

		'shell out all if yuh eye nuh big,',

		'Always haffi look out yuh no know if yuh head book out,',

		'Dun know a de unruly boss dis man,',

		'No bomboclat otha,',

		'And if a boy nuh like,',

		'OVO or Chromatic Yuh can jus suck yuh mada!!,',

		'With no apology If you nuh like we we nuh like you neither youth,',

		'Your girl a say we cute if you diss you will get execute,',

		'That’s the truth OVO unruly,',

		'With my woes,',

		'Envelopes coming in the mail let her open em’,',

		'Hopin‘ for a check again ain’t no tellin’,',

		'Yeah she invite me to the telly,',

		'Keep the blade with me when I go to check a bitch ain’t no‘ tellin,',

		'Yeah police comin‘ round‘ lookin‘ for some help on a case they gotta solve we never help ’em,',

		'Yeah I stay up late at night thinkin‘ bout‘ my life,',

		'Want a lot will I get it all? Ain’t no tellin’,',

		'Ain’t no tellin’ yeah ain’t no tellin’,',

		'Yeah no tellin’,',

		'Suitcase I been living outta‘ suitcase,',

		'Still drinkin‘ Henny if it’s done I’ll take the D’usse,',

		'Oops aye fuck it all you niggas two-faced,',

		'Got the club going up on a Tuesday,',

		'True say I been going hard but then again,',

		'They think I’m soft think I’m innocent,',

		'I’m just lookin‘ in the mirror like I’m really him,',

		'Man I’m really him you just fillin‘ in man,',

		'I gotta blunt can I get a light?',

		'Yeah I took the summer off to get it right,',

		'Yeah I gave these boys a shot and they fuckin‘ failed,',

		'Niggas like you took the summer off? we couldn’t tell,',

		'Dog just bought a island gotta sail to it,',

		'You pick the casket I’ll put the nail through it,',

		'I ain’t gotta do it but fuck it someone gotta do it,',

		'Hate if someone else did it fuck I may as well do it,',

		'I had to switch the flow up on you niggas,',

		'The shit was gettin‘ too predictable,',

		'The new shit on steroids I would never pass a physical,',

		'I got it rollin‘ in all kinda ways lump sum and residual yeah,',

		'I mean we hear about the money you be gettin‘ but we just never see a visual,',

		'It’s our year (aw yeah) Aw yeah,',

		'I mean besides Ricky Ross Aubrey the biggest boss here (grunt),',

		'What’s the word these days?',

		'Buncha‘ niggas chasing after all these woman they don’t even know,',

		'Buncha‘ out of season woman fuckin‘ off-season niggas to get last season wardrobe,',

		'All the rappers that you vouch for need to get out of the house more they washed up,',

		'And even if the team was religious with it I can’t really see another squad tryna‘ cross us nah,',

		'OVO unruly,',

		'One shot to make it in a life,',

		'From the six to the fucking 876,',

		'I gotta‘ keep watchin‘ for Opper’s cause‘ anything’s possible yeah,',

		'There’s no code in ethics out here anyone will take shots at you yeah,',

		'Niggas think they can come take what I got let’s be logical yeah,',

		'V-Live I order that Alfredo pasta then eat in the kitchen like i’m in the mafia,',

		'Houston they get me though,',

		'European my vehicle,',

		'How much it hit me fo’?',

		'Ain’t no tellin’ yeah,',

		'What am I willin‘ to give her to get what I want tonight?',

		'Ain’t no tellin’,',

		'Please don’t speak to me like I’m that Drake from four years ago,',

		'I’m at a higher place,',

		'Thinkin‘ they lions and tigers and bears I go huntin’,',

		'Put heads on my fire place oh my take time,',

		'Ain’t no tellin’,',

		'Oh my take time ain’t no tellin’,',

		'Breathe through ride through damn girl,',

		'Oh man I don’t know,',

		'Pilled up filled up damn girl,',

		'I’ll be getting back to you for sure man man,',

		'Laced up dripped up sauced up,',

		'Damn girl I wanna ride with you,',

		'Waved up blowing up blowing up growing up,',

		'Had to get it popping with you,',

		'What if I pick you up from your house,',

		'We should get out,',

		'We haven’t talked in a while,',

		'We should roll to see where it goes,',

		'I saw potential in you from the go,',

		'You know that I did,',

		'I don’t know if you know but I know who you are,',

		'You could be big as Madonna,',

		'Just get in the car and let’s touch the road,',

		'Don’t make other plans,',

		'Say you get up early you work for the man,',

		'Well he’ll understand,',

		'Pull up I’m pulling up on you in ten,',

		'Already on ten,',

		'Big as Madonna I’ll say it again,',

		'Soon as you get in nah nah nah,',

		'Breathe through ride through damn girl,',

		'Oh man I don’t know,',

		'Pilled up filled up damn girl,',

		'I’ll be getting back to you for sure man man,',

		'Laced up dripped up sauced up,',

		'Damn girl I wanna ride with you,',

		'Waved up blowing up blowing up growing up,',

		'Had to get it popping with you,',

		'I’ll admit it I’ll admit it,',

		'Watch your motherfuckin‘ tone boy,',

		'Get hurt boy,',

		'Aww here go another mo’fucker that don’t understand the concept of puttin‘ money first boy (first),',

		'I’m ’bout to hit you with the work boy (work),',

		'I’m ’bout to hit you with the work boy (work),',

		'I hate comin‘ through stuntin‘ on niggas that I know ahh that’s the worst boy (worst),',

		'I’ll admit it I’ll admit it,',

		'You haven’t been a man for like a minute,',

		'I told you that I’m in it for the long haul,',

		'You can really get the business,',

		'I’ll admit it I’ll admit it,',

		'Rolling swishers hittin‘ swishes,',

		'Got me feelin‘ like a ball hog,',

		'I don’t pass ’em when I get it,',

		'I’ll admit it I’ll admit it,',

		'You too worried ’bout the bitches,',

		'I got one girl and she my girl and nobody else can hit it,',

		'She’ll admit it she’ll admit it,',

		'She ain’t fuckin‘ with you niggas,',

		'And just like every single other thing in my life,',

		'You can have her when I’m finished,',

		'I hear the talk on road is I’m the shit boy,',

		'Phone call back home shit is hot up in the 6 boy,',

		'Shit hot up in the 6 right now shit hot up in the 6 boy,',

		'Shit is hot up in the 6 right now,',

		'Come see us and get it fixed boy,',

		'Black Benz on the road boy,',

		'Already had a Rolls Royce,',

		'Sold a couple Bentley last week them were my old toys,',

		'I give a fuck about old boy,',

		'I give a fuck about his squad boy,',

		'I give a fuck about your mob boy,',

		'I’m the real 6 God boy,',

		'I’m about to say a true thing,',

		'I’m about to say a true thing,',

		'You was poppin‘ back when Usher wore a U-chain,',

		'God damn you changed,',

		'I put it on ’erything it’s a err ting,',

		'It’s a OVO come through murk things,',

		'I know you heard things,',

		'Bitch I know you heard things,',

		'Yeah I know you heard things,',

		'I’m not new to this,',

		'Coming from the motherfucking 6 side,',

		'I’m not new to this,',

		'Niggas wouldn’t make it on this side,',

		'I’m not new to this,',

		'I’m not new I’m not new,',

		'Yeah I know you heard things,',

		'Nobody really likes us except for us,',

		'Yeah all I ever needed was the squad so that’s what’s up,',

		'Yeah my sound got the whole city a way right now,',

		'So I don’t give a fuck about what anybody sayin‘ right now,',

		'Brand new beretta can’t wait to let it go,',

		'Walk up in my label like where the check though?',

		'Yeah I said it wouldn’t dap you with the left ho,',

		'Shut the fuck up text from a centerfold,',

		'I ain’t reply let ’em know I read it though,',

		'Voice mail say she ready though,',

		'Niggas know I’m credible,',

		'Ain’t no pussy on a pedestal,',

		'Got my foot on the ’cedes Benz pedal doin‘ 90 on the bridge like,',

		'Nigga you already know,',

		'And if you don’t know then now you know now you know,',

		'Switchin‘ up the angles,',

		'Now I’m in the Rolls with illuminated angel,',

		'Four or five chains made of gold getting tangled,',

		'My nigga Biz said the first mil gonna change you,',

		'Change for the better hit it then dead her,',

		'Thats my vendetta keep this shit together,',

		'God damn we ain’t even got a scam,',

		'Cocaine Coupe we ain’t even gotta scale,',

		'Used to flip apps now that old plug murked,',

		'Ain’t a damn thing changed you can still get the work,',

		'Yeah I remember how I went to Louis V with Haf’,',

		'Watched them spread ten thousand dollars on the glass,',

		'I never ever thought I’d see that in my life,',

		'Now I’m in the east cause my boys are gettin‘ right,',

		'Man I was on TV makin‘ fifty racks a year,',

		'After helpin‘ mama out the shit would disappear,',

		'I am not a man I can’t do this on my own,',

		'So I started askin‘ them if they would put me on,',

		'And they did put me on,',

		'Yeah they did put me on,',

		'Now we in the basement and we workin‘ on the phone,',

		'Now we in the basement and we workin‘ on the phone line,',

		'Line blowin‘ up workin on the phones,',

		'Now we in the basement and we workin‘ on the phones,',

		'But I just couldn’t do it had to leave that shit alone man,',

		'Blowin‘ up line blowin‘ up,',

		'They need the whole thing,',

		'Blowin‘ up my niggas really need the whole thing,',

		'Blowin‘ up line blowin‘ up,',

		'They need the whole thing,',

		'Blowin‘ up my niggas really need the whole thing,',

		'I do better with the writer in my system,',

		'Oh yeah I’m on deck when you call me I’ll listen,',

		'I listen unless I been mixin’,',

		'You know when I’m mixin’,',

		'You know when I’m mixin’ I smoke when I drink its tradition,',

		'Like Zoe mama I go hippy,',

		'Peace sign in the air like I’m Nixon,',

		'I’m mixin’ I am not Esco but it was written,',

		'I knew when they didn’t,',

		'I been had these visions of the life I’m livin‘ since I was Jimmy,',

		'All I just had to do was go and get it,',

		'Still in Miami,',

		'Most of these girls are too messy,',

		'I’ve got to do some reflecting,',

		'I’ve got to find me one out here that is good at taking direction,',

		'I’m convinced that my calls are being recorded,',

		'So hit my assistant to get me the message,',

		'And make the connection like brrrrr,',

		'I’m on my way tonight I hope you not the crazy type,',

		'I’m in your state tonight I might just break the bank tonight,',

		'PND ain’t with the ray tay tay,',

		'You know Jay Wray,',

		'Got girls her going way way way way way way,',

		'Sauga city trip the pay day,',

		'Load up off a gate way,',

		'Man you can’t afford me,',

		'Doing is one thing doing it right is a whole different story,',

		'Niggas is all in their feelings these days all in their feelings these days,',

		'But hearing the scripture with that many sixes you should be afraid,',

		'Boomin‘ out in South Gwinnett like Lou Will,',

		'6 man like Lou Will 2 girls and they get along like I’m,',

		'Like I’m Lou Will I just got the new deal,',

		'I am in the Matrix and I just took the blue pill,',

		'No ho shit no fuckin‘ ho shit just save that for your shit,',

		'I don’t need no fuckin‘ body I run my own shit,',

		'Like Soulja I thought I told yah you didn’t listen,',

		'Fieri I’m in the kitchen I’m a magician,',

		'I’m on it I’m like Macgyver I’m Michael Meyers,',

		'I kill careers and cut the lights off this shit is frightenin’,',

		'I knew it would end up like this I’m fuckin‘ psychic,',

		'Young but I’m makin‘ millions to work the night shift,',

		'Work the night shift,',

		'Young but I’m makin‘ millions to work the night shift,',

		'Work work the night shift,',

		'Young but I’m gettin‘ every single motherfuckin‘ thing,',

		'I’m old you gotta know,',

		'I’m here to fuck with niggas souls my heart is cold,',

		'It’s prolly cause I’m from the snow with all my woes,',

		'I know they wanna see me go I’m on a roll,',

		'I mean I’m back on this again I’m here again,',

		'You know the truth this not pretend I’m not your friend,',

		'Not your guy I’m not your buddy show no lovin’,',

		'I might go DeMarcus Cousins out in public,',

		'I mean I’m back on this again I’m here again,',

		'I didn’t do this fuckin‘ tape for CNN,',

		'I am not tryna win awards that shit looked forced,',

		'It’s nothin‘ like this,',

		'Young but I’m makin‘ millions to work the night shift,',

		'Work the night shift,',

		'Young but I’m makin‘ millions to work the night shift,',

		'Work work the night shift,',

		'If you were worried about where,',

		'I’ve been or who I saw or,',

		'What club I went to with the homies,',

		'Baby don’t worry you know that you got me,',

		'I’m never worried about where,',

		'I’m at or who I saw or,',

		'What club I go to with the homies,',

		'Baby don’t worry I know that they got me,',

		'It’s over yeah it’s over yeah I’m leaving I’m gone,',

		'I can’t stay here no more and I can’t sleep on the floor,',

		'Man I’m leaving I’m leaving you know I got my reasons,',

		'Yeah I’m leaving yeah I’m leaving yeah I’m leaving I’m gone,',

		'Yeah I’m leaving I’m gone,',

		'I had to knock down the wall,',

		'Yeah I swear to god that I’m gone,',

		'I’m leaving I’m leaving,',

		'No looking back when I’m gone,',

		'No looking back when I’m gone,',

		'It’s over yeah it over yeah I’m leaving I’m gone,',

		'I’ve been doing this wrong I’ve been here for too long,',

		'Yeah I’m leaving I’m leave you know I got my reasons,',

		'Yeah I’m leaving yeah I’m leaving I’m leaving I’m gone,',

		'I don’t wanna miss the boat I don’t wanna sit in coach,',

		'I don’t wanna sit in home I gotta get where I’m going,',

		'I’m afraid I’mma die before I get where I’m going,',

		'I know I’mma be alone,',

		'I know I’m out on my own,',

		'I just gotta hit the road,',

		'I just gotta know the road,',

		'I just gotta hit a road,',

		'I just gotta know the road,',

		'I just gotta know the road,',

		'Something is said dont say that again,',

		'I just been out and bad from way back when,',

		'I can’t be out here on no laid back shit,',

		'I can’t be out here on no laid back shit,',

		'You got something to say then say that thing,',

		'I just been out and bad from way back when,',

		'I gotta get on the road I gotta get on the road,',

		'Not looking back no more,',

		'I gotta go out and get want you know what I did,',

		'Want you to know how it went,',

		'That’s why I keep telling you over and over again,',

		'Just let me go just let me go let bring it home to you,',

		'Twice just let me go let me bring it home to you,',

		'Now and forever I’ll bring it home to you,',

		'Just let me go let me bring it home,',

		'Let me go let me bring it home to you,',

		'Let me go let me bring it home to you,',

		'Let me go let me bring it home,',

		'Now and forever I’ll bring home to you,',

		'Let me go let me bring it home to you,',

		'Let me go let bring bring it home to you,',

		'Now and forever I’ll bring it home,',

		'I got some shit for you to come and get,',

		'I’m at the St Regis up on Briar Oaks hit me when you done your shift,',

		'I see you doin‘ well baby,',

		'Oh you pullin‘ shit together I can tell baby,',

		'Is you single or what?',

		'I need a girl from the country,',

		'I need a girl from Kentucky,',

		'I need a shawty from Houston,',

		'I need a girl who gon‘ love me,',

		'I need a girl who gon‘ trust me,',

		'Someone to fuck me,',

		'Someone to make me feel lucky,',

		'Someone that’s so proud to be with me,',

		'She walk right up to her ex look him dead in the face,',

		'And say You ain’t got the juice like that,',

		'You ain’t got the juice like that,',

		'That’s cold ice cold girl you ain’t have to do him like that,',

		'Why you had to do him like that?',

		'Gotta come through quick quick,',

		'Oh you at the club? Cashin‘ out with everything,',

		'Hit me when you done your shift,',

		'I know a girl I should propose to but we just on some different shit,',

		'She on some up at 9AM already cookin‘ in the kitchen shit,',

		'And lately we’ve been fightin‘ on some why-you-love-the-strippin-shit,',

		'Yeah she workin‘ with the spatula I know she love flippin‘ shit,',

		'All on me,',

		'I don’t deserve it,',

		'She’s just a little too perfect,',

		'She’s just a little too worth it,',

		'I don’t deserve her at all no not at all,',

		'I only text her man I never call,',

		'I’m still a canine at heart I’m a dog,',

		'Yeah that’s why you gotta come through quick quick,',

		'I’m posted at the Derek up on Westheimer hit me when you’re done your shift,',

		'I need some company,',

		'I need some company,',

		'I need you to take my mind off being in my prime,',

		'Some company,',

		'Having conversations with mama man my life is a mess,',

		'Ain’t been returning the texts so she been reading the press,',

		'She got google alerts them shits go straight to her phone,',

		'She worry bout me from home you know she raised me alone,',

		'She said I heard you back with you know who,',

		'I told her Girl I’m always back with you know who,',

		'And she like Who are we kidding,',

		'You’re only 27 you just being you,',

		'You’re your fathers child man thank god you got some me in you,',

		'At least I always at least I always see it through,',

		'At least I’m always being true to what you taught me,',

		'Retired teacher but your words still got me evolving,',

		'Never get sloppy drunk but alcohol is problem solving,',

		'And look I hate it when you hate on all my girlfriends,',

		'And assistants always convinced that there’s always someone better,',

		'Like that girl from that gym who trains you,',

		'I know you wanna arrange it you told me she’s free thursday,',

		'And I’m sure that she’s a angel but she don’t want this life,',

		'The timing ain’t right,',

		'Maybe one day but even one day with us is a time of a life,',

		'We do things that people pay to document,',

		'You got the sweetest heart but I’m not here to give out compliments or boost nobody confidence momma,',

		'I got no friends in this momma,',

		'I don’t pretend with this momma,',

		'I’on joke with this momma,',

		'I pull the knife out my back and cut they throat with it momma,',

		'I’m Game of Thrones with it momma,',

		'I’m Home Alone with it momma,',

		'I really hate using this tone with you momma,',

		'I really hate getting aggressive on this phone with you momma,',

		'I really hate wasting your time to check a clone or two momma,',

		'It’s just they cloning me momma,',

		'Them niggas wannabes momma,',

		'Its like - I’m the one they wanna be momma,',

		'I just- I- I can’t be out here being vulnerable momma,',

		'I mean I kill em every time they do a song with me momma,',

		'I sing a hook they sing along with me momma,',

		'What more they want from me momma?',

		'Yeah this is a crazy life,',

		'But you and the six raised me right,',

		'Don’t ever take advice that was great advice,',

		'You and the six raised me right that shit saved my life,',

		'Having conversations with momma we start talkin‘ bout dad,',

		'You know he dropping a single he saying this is his window,',

		'That nigga still wearing linen that nigga still in the club,',

		'Call him after we get off the phone and show him some love,',

		'That nigga memphis for real girl he love you to death,',

		'He made mistakes throughout his life that he still doesn’t accept,',

		'But he just want our forgiveness and fuck it look how we living,',

		'I’m content with this story who are we not to forgive him?',

		'At least I been to a prison at least I know what it’s like,',

		'I used to rap on the phone one of his friends doing life,',

		'And now I got me a Grammy that could be part of the reason,',

		'Let’s just call this shit even we got some things to believe in,',

		'Do you remember back to Weston Road Scarlett Road?',

		'Hangin‘ with Aaron Bell and Reny shit could’ve gone south for me he looked out for me ma,',

		'He never let me do drugs,',

		'He let me shoot a gun one summer but out there everyone does,',

		'He made me listen to his music old music soul music,',

		'Shit that can only be created if you go through it,',

		'I used to get teased for being black and now I’m here and I’m not black enough,',

		'Cause I’m not acting tough or making stories up bout where I’m actually from,',

		'But I just roll with it momma rolling stone with it momma,',

		'Gotta be careful around rolling stones or anyone that’s tryna throw stones at me momma,',

		'I’m not condoning it momma,',

		'They will not tear nothing down I built this home for you momma,',

		'Know I don’t call enough momma,',

		'I just been working with so little time for personal momma,',

		'Hard labor let me pay the price,',

		'You and the six raised me right that shit saved my life,',

		'These days I’m letting God handle all things above me,',

		'The things I can’t change are the reasons you love me,',

		'Listen you can hear them calling my name,',

		'I’m all over the place I can’t sit in one place,',

		'I’m not ashamed at all,',

		'Still findin‘ myself let alone a soulmate I’m just sayin’,',

		'Feel like we one and the same our relationship changed,',

		'That or it never existed,',

		'Whenever they say somethin‘ bout us you listen,',

		'But fuck what they talkin‘ about on your timeline,',

		'That’s cuttin‘ all into my time with you,',

		'Fuck what they talkin‘ about on your timeline,',

		'That’s cuttin‘ all into my time with you,',

		'She said you’re my everything,',

		'I love you through everything,',

		'I done did everything to her,',

		'She forgave me for everything this a forever thing,',

		'Hate that I treated like it’s a whatever thing,',

		'Trust me girl this shit is everything to me,',

		'She from the Jungle she from the Jungle,',

		'I take somebody elses car drive it undercover,',

		'This shit is everything to me this shit is everything,',

		'Don’t know where we stand I used to hit you bout everything,',

		'Are we still good? Are we still good?',

		'Are we still good? Are we still good?',

		'If I need to talk are you around?',

		'Are you down for the cause?',

		'Are you down? Are you down? Are you down?',

		'Are you down for the cause?',

		'Are you down? Are you down? Are you down?',

		'Are you down for the cause?',

		'You still down? You still down? You still down?',

		'These days these new girls got me nervous,',

		'They go to school and do bottle service,',

		'They can’t decide they keep switching majors,',

		'Being indecisive makes me anxious,',

		'Call your number and it’s out of service,',

		'Who can I call for your information?',

		'What am I supposed to do after we done doing everything we do,',

		'Who is your replacement?',

		'Are we still good? Are we still good?',

		'Are we still good? Are we still good?',

		'Yeah oh you gotta love it,',

		'Oh you got oh you gotta love it,',

		'I heard what circulated let’s get to the bottom of it,',

		'I told 1da send me something and I got it covered,',

		'Somehow always rise above it,',

		'Why you think I got my head in the clouds on my last album cover?',

		'The game is all mine and I’m mighty possessive,',

		'Lil Wayne could not have found him a better successor,',

		'Every shot you see them take at me? They all contested,',

		'Allen Iverson shoe deal these niggas all in question,',

		'Last night I went to sleep wanted more,',

		'Tried to decide what direction I should go towards,',

		'Some nights I wish I could go back in life,',

		'Not to change shit just to feel a couple things twice,',

		'28 at midnight wonder what’s next for me,',

		'Longevity wonder how long they’ll check for me,',

		'Prolly forever if I stay in my zone,',

		'I speak on this generation but can’t change it alone,',

		'I heard a lil lil homie talking reckless in Vibe,',

		'Quite a platform you chose you shoulda kept it inside,',

		'Oh you tried it’s so childish calling my name on the world stage,',

		'You need to act your age and not your girl’s age,',

		'It gets worse by the annual my career’s like a how to manual,',

		'So I guess it’s understandable man,',

		'Oh you gotta love it you gotta love it cheer,',

		'I know rappers that call Paparazzi to come and get ’em,',

		'To show they outfits off guess they need the attention,',

		'I remember when it used to be music that did it,',

		'But then again times have changed man who are we kiddin’?',

		'I’m managed by my friends that I grew up with,',

		'I’d rather give that 15% to people I fuck with,',

		'If me and Future hadn’t made it with this rappin’,',

		'We prolly be out in Silicon tryna get our billions on,',

		'But here we are yeah,',

		'Lately I feel the haters eatin‘ away at my confidence,',

		'They scream out my failures and whisper my accomplishments,',

		'Bitches alter my message like we have words,',

		'And stories bout my life hit the net like a bad serve,',

		'Bitter women I’m overtextin‘ are PMSing crazy this year,',

		'Fuckin‘ with my image,',

		'I’ve been tryna reach to you so I can save ’em this year,',

		'Fuck it I guess I gotta wait til next year,',

		'And I heard someone say something that stuck with me a lot,',

		'Bout how we need protection from those protectin‘ the block,',

		'Nobody lookin‘ out for nobody,',

		'Maybe we should try and help somebody or be somebody,',

		'Instead of bein‘ somebody that makes the news,',

		'So everybody can tweet about it,',

		'And then they start to RIP about it,',

		'And four weeks later nobody even speaks about it,',

		'Damn I just had to say my piece about it,',

		'Oh you gotta love it,',

		'But they scared of the truth so back to me showin‘ out in public,',

		'That’s a hotter subject,',

		'I’ve been whippin‘ Mercedes and nigga try to budget,',

		'I gotta make it back to Memphis to check on my cousins,',

		'Shout out to Ashley Biama Julia Ericka Southern America,',

		'Part of my heritage pardon my arrogance part in my hair again,',

		'That’s that comeback flow comeback flow,',

		'Once I start it’s apparent,',

		'I wanted a girl whose ass is so big that’s partly embarrassin’,',

		'But fuck all the blushin‘ and fuck your discussions,',

		'And fuck all the judgement,',

		'Your content so aggressive lately what’s irkin‘ you?',

		'Shit is gettin‘ so personal in your verses too,',

		'I wanna prove that I’m number one over all these niggas,',

		'Bein‘ number two is just being the first to lose,',

		'My city dictated music nobody seein‘ us,',

		'Winter here already but somehow I’m heatin‘ up,',

		'Been observin‘ the game and felt like I’ve seen enough,',

		'Let’s drop a tape on these niggas then we’ll see what’s up,',

		'Yea boy you rappin‘ like you seen it all,',

		'You rappin‘ like the throne should be the three of ya’ll,',

		'Best I Ever Had seems like a decade ago,',

		'Decadent flow and I still got a decade to go,',

		'Oh please take at ease where’s the love and the peace,',

		'Why you rappin‘ like you come from the streets?',

		'I got a backyard where money seems to come from the trees,',

		'And I’m never ever scared to get some blood on my leaves,',

		'Phantom slidin‘ like the shit just hit a puddle of grease,',

		'I cook the beef well done on the double with cheese,',

		'Special order for anybody that’s comin‘ for me,',

		'Shit you probably flinch if somebody sneeze,',

		'You see they got me back like it’s just 40 Oli and me,',

		'Cuttin‘ all loose ends I be the barber for free,',

		'I’m almost at four minutes going off on the beat,',

		'Feel like I’m in the Malibu that had the cloth on the seats,',

		'Man oh you gotta love it,',

		'And on top of that it’s getting harder to eat,',

		'Rappers downgrading houses,',

		'Putting cars on the lease,',

		'To think labels said they had a problem marketing me,',

		'And now it’s everybody else that’s getting hard to believe,',

		'Oh you gotta love it,',

		'And head to toe I’m Prada covered,',

		'I know your girl well just not in public,',

		'Blame the city I’m a product of it,',

		'Young nigga from the city,',

		'You gotta love it,' );

	}

		

	function getContent($count, $format = 'html,', $loremipsum = true)

	{

		$format = strtolower($format);

		

		if($count <= 0)

			return '';



		switch($format)

		{

			case 'txt':

				return $this->getText($count, $loremipsum);

			case 'plain':

				return $this->getPlain($count, $loremipsum);

			default:

				return $this->getHTML($count, $loremipsum);

		}

	}

	

	private function getWords(&$arr, $count, $loremipsum)

	{

		$i = 0;

		if($loremipsum)

		{

			$i = 2;

			$arr[0] = 'lorem';

			$arr[1] = 'ipsum';

		}

		

		for($i; $i < $count; $i++)

		{

			$index = array_rand($this->words);

			$word = $this->words[$index];

			//echo $index . '=>' . $word . '<br />';

			

			if($i > 0 && $arr[$i - 1] == $word)

				$i--;

			else

				$arr[$i] = $word;

		}

	}

	

	private function getPlain($count, $loremipsum, $returnStr = true)

	{

		$words = array();

		$this->getWords($words, $count, $loremipsum);

		//print_r($words);

		

		$delta = $count;

		$curr = 0;

		$sentences = array();

		while($delta > 0)

		{

			$senSize = $this;

			//echo $curr . '<br />';

			if(($delta - $senSize) < 4)

				$senSize = $delta;



			$delta -= $senSize;

			

			$sentence = array();

			for($i = $curr; $i < ($curr + $senSize); $i++)

				$sentence[] = $words[$i];



			$this->punctuate($sentence);

			$curr = $curr + $senSize;

			$sentences[] = $sentence;

		}

		

		if($returnStr)

		{

			$output = '';

			foreach($sentences as $s)

				foreach($s as $w)

					$output .= $w . ' ';

					

			return $output;

		}

		else

			return $sentences;

	}

	

	private function getText($count, $loremipsum)

	{

		$sentences = $this->getPlain($count, $loremipsum, false);

		$paragraphs = $this->getParagraphArr($sentences);

		

		$paragraphStr = array();

		foreach($paragraphs as $p)

		{

			$paragraphStr[] = $this->paragraphToString($p);

		}

		

		$paragraphStr[0] = "\t" . $paragraphStr[0];

		return implode("\n\n\t", $paragraphStr);

	}

	

	private function getParagraphArr($sentences)

	{

		$wordsPer = $this->wordsPerParagraph;

		$sentenceAvg = $this->wordsPerSentence;

		$total = count($sentences);

		

		$paragraphs = array();

		$pCount = 0;

		$currCount = 0;

		$curr = array();

		

		for($i = 0; $i < $total; $i++)

		{

			$s = $sentences[$i];

			$currCount += count($s);

			$curr[] = $s;

			if($currCount >= ($wordsPer - round($sentenceAvg / 2.00)) || $i == $total - 1)

			{

				$currCount = 0;

				$paragraphs[] = $curr;

				$curr = array();

				//print_r($paragraphs);

			}

			//print_r($paragraphs);

		}

		

		return $paragraphs;

	}

	

	private function getHTML($count, $loremipsum)

	{

		$sentences = $this->getPlain($count, $loremipsum, false);

		$paragraphs = $this->getParagraphArr($sentences);

		//print_r($paragraphs);

		

		$paragraphStr = array();

		foreach($paragraphs as $p)

		{

			$paragraphStr[] = "<p>\n" . $this->paragraphToString($p, true) . '</p>';

		}

		

		//add new lines for the sake of clean code

		return implode("\n", $paragraphStr);

	}

	

	private function paragraphToString($paragraph, $htmlCleanCode = false)

	{

		$paragraphStr = '';

		foreach($paragraph as $sentence)

		{

			foreach($sentence as $word)

				$paragraphStr .= $word . ' ';

				

			if($htmlCleanCode)

				$paragraphStr .= "\n";

		}		

		return $paragraphStr;

	}

	

	/*

	* Inserts commas and periods in the given

	* word array.

	*/

	private function punctuate(& $sentence)

	{

		$count = count($sentence);

		$sentence[$count - 1] = $sentence[$count - 1] . '';

		

		if($count < 4)

			return $sentence;

		

		$commas = $this->numberOfCommas($count);

		

		for($i = 1; $i <= $commas; $i++)

		{

			$index = (int) round($i * $count / ($commas + 1));

			

			if($index < ($count - 1) && $index > 0)

			{

				$sentence[$index] = $sentence[$index] . '';

			}

		}

	}

	

	/*

	* Determines the number of commas for a

	* sentence of the given length. Average and

	* standard deviation are determined superficially

	*/

	private function numberOfCommas($len)

	{

		$avg = (float) log($len, 6);

		$stdDev = (float) $avg / 6.000;

		

		return (int) round($this->gauss_ms($avg, $stdDev));

	}

	

	/*

	* Returns a number on a gaussian distribution

	* based on the average word length of an english

	* sentence.

	* Statistics Source:

	*	http://hearle.nahoo.net/Academic/Maths/Sentence.html

	*	Average: 24.46

	*	Standard Deviation: 5.08

	*/

	private function gaussianSentence()

	{

		$avg = (float) 24.460;

		$stdDev = (float) 5.080;

		

		return (int) round($this->gauss_ms($avg, $stdDev));

	}

	

	/*

	* The following three functions are used to

	* compute numbers with a guassian distrobution

	* Source:

	* 	http://us.php.net/manual/en/function.rand.php#53784

	*/

	private function gauss()

	{   // N(0,1)

		// returns random number with normal distribution:

		//   mean=0

		//   std dev=1

		

		// auxilary vars

		$x=$this->random_0_1();

		$y=$this->random_0_1();

		

		// two independent variables with normal distribution N(0,1)

		$u=sqrt(-2*log($x))*cos(2*pi()*$y);

		$v=sqrt(-2*log($x))*sin(2*pi()*$y);

		

		// i will return only one, couse only one needed

		return $u;

	}



	private function gauss_ms($m=0.0,$s=1.0)

	{

		return $this->gauss()*$s+$m;

	}



	private function random_0_1()

	{

		return (float)rand()/(float)getrandmax();

	}



}