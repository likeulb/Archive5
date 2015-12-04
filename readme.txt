Extract and put it in the appropriate folder as described by instructor.

Video Link:
https://www.youtube.com/watch?v=i46_GUwRJ0o

Instructions:
+ User can search a Movie from the header
+ If the user has not logged in, it will show the message to ask user to login first
+ User can register by inputting required information and the User table will be updated
+ After login, besides searching a movie, user can also review the movie by imputing the rate and comments. The ReviewMovie table will be updated
+ In the user’s home page, user can see all the movie that he has or has not reviewed
+ user can also create his own movie list by entering list name and descriptions. Table MovieList will be updated.
+ user can delete the movie list he has created

SQL to create tables:

create table Movies (
MovieName varchar(45) not null,
MovieYear int(11),
MovieLength int(11),
MovieGenre varchar(20),
MovieID int(10) primary key
);

create table Stars(
StarName varchar(20) primary key,
StarBirthday date,
StarGender char,
StarNationality varchar(20)
);

create table StarsIn(
Movie_MovieID int(10),
Stars_StarName varchar(20),
primary key(Movies_MovieID, Stars_StarName)
);

create table User(
UserID varchar(45) primary key,
UserPassword varchar(45),
UserEmail varchar(45),
UserGender char
);


create table ReviewMovie(
ReviewComment varchar(200);
ReviewRate int(11),
User_UserID varchar(45),
Movies_MovieID int(10),
primary key(Movies_MovieID, User_UserID)
);

create table MovieList(
MovieListName varchar(45) primary key;
MovieListTag varchar(45),
MovieListDes varchar(45),
User_UserID varchar(45)
);


Create table MovieInList(
Movies_MovieID int(10),
MovieListName varchar(45),
primary key(Movies_MovieID, MovieListName)
);
