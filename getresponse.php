<?php 
    date_default_timezone_set('Africa/Lagos');
	$random = rand(0,11);
    $quote = array("My life is my message. Mahatma Gandhi",
        "Not how long, but how well you have lived is the main thing. Seneca",
        "I love those who can smile in trouble… Leonardo da Vinci",
        "Time means a lot to me because, you see, I, too, am also a learner and am often lost in the joy of forever developing and simplifying. If you love life, don’t waste time, for time is what life is made up of. Bruce Lee",
        "Life is what happens when you’re busy making other plans. John Lennon",
        "It is better to be hated for what you are than to be loved for what you are not. Andre Gide",
        "Dost thou love life? Then do not squander time, for that is the stuff life is made of. Benjamin Franklin",
        "Very little is needed to make a happy life; it is all within yourself, in your way of thinking. Marcus Aurelius",
        "Life is like playing a violin in public and learning the instrument as one goes on. Samuel Butler",
        "In the end, it’s not the years in your life that count. It’s the life in your years. Abraham Lincoln",
        "You’ve gotta dance like there’s nobody watching. William W. Purkey",
        "Believe that life is worth living and your belief will help create the fact. William James");
	$random1 = rand(0,6);
    $joke = array("Q. What is the biggest lie in the entire universe?
               A. I have read and agree to the Terms & Conditions.",
        "Q. What do you call it when you have your mom’s mom on speed dial? A. Instagram.",
        "Q. What should you do after your Nintendo game ends in a tie?  A. Ask for a Wii-match!",
        "Why are iPhone chargers not called Apple Juice?!",
        "Q. How does a computer get drunk?  A. It takes screenshots.",
        "Q. Why did the PowerPoint Presentation cross the road?
        A. To get to the other slide.",
        "PATIENT: Doctor, I need your help. I’m addicted to checking my Twitter!
    DOCTOR: I’m so sorry, I don’t follow.",
        "What’s the Gig Deal?
        Have you heard of that new band “1023 Megabytes”? They’re pretty good, but they don’t have a gig just yet.");
	$responses['what is your name'] = "My name is Ganymede bot. Gany for short";
	// echo "Hello world";
	$responses['tell me about yourself '] = "I am a chatbot. I'm still learning a lot of things so please forgive me if I can't answer you in some cases.";
	$responses['what is the time '] = "The time is " . date("h:i:sa");
	$responses['what time is it '] = "The time is " . date("h:i:sa");
	$responses["i'm fine "] = "Good. I'm happy about that.";
	$responses["fine "] = "Good. I'm happy about that.";
	$responses["yes Ok cool good "] = "Alright.";
	$responses["nice meeting you "] = "Cool. Same here.";
	$responses["can you say a quote "] = $quote[$random];
	$responses["can you say a joke "] = $joke[$random1];
	$responses["who are you "] = "I am Ganymede Bot designed by some fine folks in the HNG internship 6.0";
	$responses["what is your name "] = "My name is Ganymede Bot";
	$responses["how old are you "] = "I am today years old 🙂";
	$responses["hi "] = "Hi, I'm the ganymede chatbot designed by some fine folks at the hng internship.";
	$responses["what's up "] = "Hey";
	$responses["who initiated hng "] = "Mark Essien";
	$responses["who is mark essien "] = "Mark Essien, initiator of HNG program. I love him, I wouldn't have been born if it hadn't been for him and some really fine folks on the internship.<br>Those are my buddies 😘";
	$responses["hey "] = "Hey, I'm the ganymede chatbot designed by some fine folks at the hng internship.";
	$responses["good morning "] = "Hi, good morning. How are you?";
	$responses["good afternoon "] = "Hi, good afternoon. How are you?";
	$responses["good evening "] = "Hi, good evening. How are you?";
	$responses["what is hng "] = "You mean what Mark Essien set up to help coders?<br>It is a 3 month internship program for really outstanding buddies 🙂. I'm grateful for it. ";
	$responses["are you real "] = "Sure, I've never felt realler 😎 ";
	$responses["where do you live "] = "I live in GitHub server";
	$responses["how can you help me "] = "Well, I can keep you company. ☺️";
	$responses["which languages do you speak "] = "Hmmm... This is a really tough question for me.<br>I was born with Html5, CSS3, JS, and PHP, but I grew up to speak only English! 😊";
	$responses["how are you "] = "I'm good, you?";
	$responses["are you doing ok "] = "Sure, you?";
	$responses["are you sure "] = "I'm very sure";
	$responses["is that your final answer "] = "Yes 🙂";
	$responses["what are your hobbies "] = "I love meeting people, and making them happy too! 🙂.";
	$responses["what do you look like "] = "Like a bot 🤖☺️";
	$responses["lol "] = "I'm funny, didn't I tell you?";
	$responses["what is the name of this team "] = "Team Ganymede";
	$responses["How many people are in the team "] = "30 frinds of mine are there.";
	$responses["  "] = "Please say something";
	$responses["   "] = "I'm waiting...";


	$q = $_GET["q"];
	$response = "";

	if ($q != "") {
		# code...
		$q = strtolower($q);
		$q = str_replace('?', '', $q);
		foreach ($responses as $r => $value) {
			# code...
			if (strpos($r, $q) !== false) {
				# code...
				$response = $value;
			}
			
		}
	}
	$noresponse = "C'mon buddy, You can't have a general conversation with me yet. I'm just one week old.<br>I can say jokes, quotes and time";
	echo $response === "" ? $noresponse : $response;
?>

