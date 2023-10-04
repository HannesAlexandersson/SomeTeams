# SomeTeams
PHP assignment. We are to build a simple website using an array of english football teams and some associated data. The assigment consists of
approximately 7 steps: 
We are to have 1 file echo out the total number of teams in the array wich are seven. I choose to have mine file echo out this number in the middle of an sentence wich itself are hidden in one of the subpages. 

We where also tasked with building an table with all of the data in the array. I chosed to code my array using multiple of foreach loops ( one for every row of the table.) I did at first make it with an nested foreach loop wich worked just fine. But the problem was that with the nested version
it looked much worse. The data was there and it was in form of an table, but as I couldnt separete the subkeys properly I hade to echo out the subkey and the subvalue in each datacell(I.E 'last-time champion = 'N/A' etc). So I went with the less "smarter" codewise solution in favor for estetic.(But the nested foreachloop exists in the file in a commented out existens)

We where also tasked to have one file display all the unique values in the 'city' subkey. So I made a subpage for the website that did exactly that.

As the assigment was about footballteams I decided to make the website with the colourscheme of my own favorite footballteam from sweden. I also included the clublogo and a link to their supporter website. I made the mainpage out of a flexbox containing all the clublogos of the teams in the array.

So for conclusion, The webpage that I have built does firstly present all the teams from Hans array as cards with links to each teams homepage. Secondly it present all the data from the array in an nice table. Thirdly it echo out in an hidden string the number of teams in the array, and fourth it presents all the unique data from the city category.