# SomeTeams
PHP assignment. We are to build a simple website using an array of english football teams and some associated data. The assigment consists of
approximately 7 steps: 

For me the assignment was more about the website then about the table. I know alot of my classmates was worried about the table but that was the first thing I did since I knew that it would probably be the trickiest thing in this assignment. 

## The website
I separeted the head, header, navbar and the footer in seperate files. 
Since I built my website containing 4 different pages ( 1 homepage, 1 infopage, 1 page with the table, 1 hidden infopage) I decided that the constant elements of the pages could be in seperate files and 'require' them. 

Since all the pages of the website shared the same head, header navbar and footer, I put the 'require' for the datafile containing the array in the head so that all files that needed it would have acces to it. 

I had an index file for the 'home' page. the 'home' page contains of seven flex cards with each team of the array in an own card. each card also serves as an link to that teams offical website. 

In the navbar we have 3 choices: Home, about and statistic. The home page we have already covered. The about page contains of information about the Premier League ( the offical english national league). It also have an hidden link to an hidden page. 

The hidden page contains of the unique city values of the array presented on seperate flexcards built out of an foreachloop.

The statistic link on the navbar leads to the table. An table built out of an foreachloop that presents all the data from the array in an nice table. 

