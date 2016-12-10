/*
insert into MusicList
	(ID, title, artist, price)
values
	( 2, "Ring of Fire", "Johnny Cash", 1.00),
	( 3, "Invisible Tears", "Ray Conniff", 0.50),                                                                                                                                                                       
	( 4, "Don't Be Cruel", "Elvis Presley", 1.25),
	( 5, "Turn Around Look At Me", "Ray Conniff", .75), 
	( 6, "I Walk The Line", "Johnny Cash", 1.00); 

*/
use MusicList;
select id, title, artist, price
	from musiclist;

