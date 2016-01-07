// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Indigo', 'Violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'Blue'; // TODO: change this to your favorite color from the list
if(color == "Red") {
	console.log("Red is the color of blood.");
} else if(color == "Orange") {
	console.log(color + " is the color of a basketball.");
} else if(color == "Yellow") {
	console.log(color + " is the color of the sun.");
} else if(color == "Green") {
	console.log(color + " is the color of money.");
} else if(color == "Blue") {
	console.log(color + " is the color of the sky.");
} else {
	console.log("I do not know anything by that color.");
}

(color == favorite) ? console.log(color + " is my favorite color.") : console.log(color + " is not my favorite color.");
// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
