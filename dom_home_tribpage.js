const p1 = document.createElement("p");
const p2 = document.createElement("p");

const p1txt = document.createTextNode("Rosé, 22, is the honey-voiced main vocalist of Blackpink, and she was the final member of the group to be revealed. Born in Auckland, New Zealand, she was a cheerleader before making her debut with Blackpink. She has a unique, delicate voice and can play both piano and guitar. Interestingly, she's left-handed, and prefers to be called by her real name over any other nicknames or endearing pet titles. She can speak Korean, English, and Japanese — and 'Blackpink's Goddess' can totally nail those high notes. She may be tiny, but her powerhouse vocals will knock you out.");

const p2txt = document.createTextNode("As a solo artist, she has featured in labelmate G-Dragon's 2012 track 'Without You', which peaked at number ten on the Gaon Digital Chart and is set to make her solo debut on 12 March, 2021.");

p1.appendChild(p1txt);
p2.appendChild(p2txt);


const bd = document.querySelector(".d2");

bd.appendChild(p1);
bd.appendChild(p2);

