
/* let array_titles = ["The Shawshank Redemption","The Godfather","The Godfather: Part II","The Dark Knight","12 Angry Men","Schindler's List","Pulp Fiction","The Good, the Bad and the Ugly","The Lord of the Rings: The Return of the", "King","Fight Club","The Lord of the Rings: The Fellowship of the Ring","Star Wars: Episode V - The Empire Strikes Back","Forrest Gump","Inception","One Flew Over the Cuckoo's Nest","The Lord of the Rings: The Two Towers","Goodfellas","The Matrix","Star Wars","Seven Samurai","City of God","Se7en","The Silence of the Lambs","The Usual Suspects","It's a Wonderful Life","Life Is Beautiful","Léon: The Professional",
"Once Upon a Time in the West","Interstellar","Saving Private Ryan","American History X","Spirited Away","Casablanca","Raiders of the Lost Ark","Psycho","City Lights","Rear Window","The Intouchables",
"Modern Times","Terminator 2: Judgment Day","Whiplash","The Green Mile","The Pianist","Memento","The Departed","Gladiator","Apocalypse Now","Back to the Future","Sunset Blvd.",
"Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb","The Prestige","Alien","The Lion King","The Lives of Others","The Great Dictator","Inside Out","Cinema Paradiso","The Shining",
"Paths of Glory","Django Unchained",
"The Dark Knight Rises","WALL·E","American Beauty","Grave of the Fireflies","Aliens","Citizen Kane","North by Northwest","Princess Mononoke","Vertigo","Oldeuboi","Das Boot",
"M Star Wars: Episode VI - Return of the Jedi","Once Upon a Time in America","Amélie","Witness for the Prosecution","Reservoir Dogs","Braveheart","Toy Story 3","A Clockwork Orange","Double Indemnity",
"Taxi Driver","Requiem for a Dream","To Kill a Mockingbird","Lawrence of Arabia","Eternal Sunshine of the Spotless Mind","Full Metal Jacket","The Sting","Amadeus","Bicycle Thieves","Singin' in the Rain",
"Monty Python and the Holy Grail","Snatch","2001 A Space Odyssey","The Kid","L A Confidential","Rashômon","For a Few Dollars More","Toy Story","The Apartment","Inglourious Basterds","All About Eve",
"The Treasure of the Sierra Madre","Jodaeiye Nader az Simin","Indiana Jones and the Last Crusade","Metropolis","Yojimbo","The Third Man","Batman Begins","Scarface","Some Like It Hot","Unforgiven",
"3 Idiots","Up","Raging Bull","Downfall","Mad Max: Fury Road","Jagten","Chinatown","The Great Escape","Die Hard","Good Will Hunting","Heat","On the Waterfront","Pan's Labyrinth","Mr. Smith Goes to Washington",
"The Bridge on the River Kwai","My Neighbor Totoro","Ran","The Gold Rush","Ikiru","The Seventh Seal","Blade Runner","The Secret in Their Eyes","Wild Strawberries","The General","Lock, Stock and Two Smoking", "Barrels","The Elephant Man","Casino","The Wolf of Wall Street","Howl's Moving Castle","Warrior","Gran Torino","V for Vendetta","The Big Lebowski","Rebecca","Judgment at Nuremberg","A Beautiful Mind",
"Cool Hand Luke","The Deer Hunter","How to Train Your Dragon","Gone with the Wind","Fargo","Trainspotting","It Happened One Night","Dial M for Murder","Into the Wild","Gone Girl","The Sixth Sense",
"Rush","Finding Nemo","The Maltese Falcon","Mary and Max","No Country for Old Men","The Thing","Incendies","Hotel Rwanda","Kill Bill: Vol. 1","Life of Brian","Platoon","The Wages of Fear","Butch Cassidy and the Sundance Kid","There Will Be Blood","Network","Touch of Evil","The 400 Blows","Stand by Me","12 Years a Slave","The Princess Bride","Annie Hall","Persona","The Grand Budapest Hotel","Amores Perros",
"In the Name of the Father","Million Dollar Baby","Ben-Hur","The Grapes of Wrath","Hachi: A Dog's Tale","Nausicaä of the Valley of the Wind","Shutter Island","Diabolique","Sin City","The Wizard of Oz",
"Gandhi","Stalker","The Bourne Ultimatum","The Best Years of Our Lives","Donnie Darko","Relatos salvajes","8½","Strangers on a Train","Jurassic Park","The Avengers","Before Sunrise","Twelve Monkeys",
"The Terminator","Infernal Affairs","Jaws","The Battle of Algiers","Groundhog Day","Memories of Murder","Guardians of the Galaxy","Monsters, Inc.","Harry Potter and the Deathly Hallows: Part 2",
"Throne of Blood","The Truman Show","Fanny and Alexander","Barry Lyndon","Rocky","Dog Day Afternoon","The Imitation Game","Yip Man","The King's Speech","High Noon","La Haine","A Fistful of Dollars",
"Pirates of the Caribbean: The Curse of the Black Pearl","Notorious","Castle in the Sky","Prisoners","The Help","Who's Afraid of Virginia Woolf?","Roman Holiday","Spring, Summer, Fall, Winter... and Spring",
"The Night of the Hunter","Beauty and the Beast","La Strada","Papillon","X-Men: Days of Future Past","Before Sunset","Anatomy of a Murder","The Hustler","The Graduate","The Big Sleep","Underground",
"Elite Squad: The Enemy Within","Gangs of Wasseypur","Lagaan: Once Upon a Time in India","Paris, Texas","Akira"] */
let array_titles = ["Wonder Woman","Black Widow","On the road","Free Guy","Top Gun: Maverick","Elysium"];

const randomMovieTitle = array_titles[Math.floor(Math.random() * array_titles.length)];
console.log(randomMovieTitle)
performSearch(randomMovieTitle)
$("#searchTerm").keyup(function(e) { 
        if(e.keyCode == 32 | e.keyCode == 8){
                return;
            }      
        performSearch($("#searchTerm").val());
    
});