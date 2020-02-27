Computer Science 5 2019-2020
Stream
Classwork
People
Computer Science 5 2019-2020
Upcoming
Woohoo, no work due soon!
View all

Share something with your class…

Announcement: "BFS and DFS…"
Mark Paolo Cruz
Created Feb 17Feb 17
BFS and DFS

https://www.youtube.com/watch?v=zaBhtODEL0w&t=235s
watch till 3:54

https://youtu.be/0u78hx-66Xk?list=PLqM7alHXFySEaZgcg7uRYJFBnYMLti-nh

Assignment: "Homework"
Mark Paolo Cruz posted a new assignment: Homework
Created Feb 13Feb 13 (Edited Feb 13)
Assignment: "Progress Report Part 1"
Mark Paolo Cruz posted a new assignment: Progress Report Part 1
Created Feb 10Feb 10
Assignment: "ActivityS 1 3Q - Human Computer Interaction"
Mark Paolo Cruz posted a new assignment: ActivityS 1 3Q - Human Computer Interaction
Created Jan 21Jan 21

Announcement: "Website Map Diagram eto guys ang…"
Mark Paolo Cruz
Created Jan 21Jan 21 (Edited Jan 21)
Website Map Diagram

eto guys ang gagawin natin, i will be updating this post for the diagrams

3RD QUARTER SYSTEM ACTIVITY.pdf
PDF

Assignment: "Activity 3Q"
Mark Paolo Cruz posted a new assignment: Activity 3Q
Created Jan 17Jan 17
Assignment: "Perio Docs"
Mark Paolo Cruz posted a new assignment: Perio Docs
Created Jan 11Jan 11

Announcement: "PHP Files Add,Edit,Update,Delete and…"
Mark Paolo Cruz
Created Dec 19, 2019Dec 19, 2019
PHP Files Add,Edit,Update,Delete and Search

cs5.zip
Compressed Archive


Announcement: "Progress Last Meeting... next will be…"
Mark Paolo Cruz
Created Dec 12, 2019Dec 12, 2019
Progress Last Meeting...

next will be UPDATE, DELETE and SEARCH

add_users.php
PHP

add_users_pro.php
PHP

connect.php
PHP

view_users.php
PHP


Announcement: "Sample Progress Report"
Mark Paolo Cruz
Created Nov 28, 2019Nov 28, 2019
Sample Progress Report

CS5 2Q Paper1 - Sample.pdf
PDF


Announcement: "view_users.php <html> <head> </head>…"
Mark Paolo Cruz
Created Nov 28, 2019Nov 28, 2019
view_users.php

<html>
<head>
</head>
<body>
<table border="1">
<tr>
<td>ID</td>
<td>USERNAME</td>
<td>PASSWORD</td>
<td>FIRSTNAME</td>
<td>MIDDLENAME</td>
<td>LASTNAME</td>
<td>LEVEL</td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>EDIT</td>
<td>DELETE</td>
</tr>
<tr>
<td colspan="9">ADD</td>

</tr>
</table>
</body>
</html>


Announcement: "USE CASE DIAGRAM: Reference…"
Mark Paolo Cruz
Created Nov 25, 2019Nov 25, 2019
USE CASE DIAGRAM: Reference
https://www.smartdraw.com/use-case-diagram/


Post by Jerome Andrei Aglugub
Jerome Andrei Aglugub
Created Nov 19, 2019Nov 19, 2019
#include <iostream>
#include <vector>
#include <algorithm>
using namespace std;

int main(){
int arr[] = {10,11,23,34,21,12,32,12,32,121,34,45,676,7878,5556};
int arrlen = sizeof(arr) / sizeof(arr[0]);
vector<int> v(arr,arr+arrlen);
for (vector<int>::iterator q = v.begin(); q != v.end();q++){
cout<<*q<<" ";
}
cout<<endl;

vector<int>::iterator y = v.begin();
while (y != v.end()){
vector<int>::iterator q = y;
for (vector<int>::iterator i = y; i != v.end(); i++){
if (*i < *q){
q = i;
}
}
iter_swap(q,y);
y++;
}
for (vector<int>::iterator i = v.begin(); i != v.end();i++){
cout<<*i<<" ";
}
return 0;
}

Assignment: "Data Structure PAIR"
Mark Paolo Cruz posted a new assignment: Data Structure PAIR
Created Nov 18, 2019Nov 18, 2019

Post by Sofia Anne Canlas
Sofia Anne Canlas
Created Nov 18, 2019Nov 18, 2019
#include <iostream>
#include <utility>
#include <iomanip>

using namespace std;

int main()
{
pair <int, char> PAIRGAN1;
pair <double, string> PAIRGAN2 (4.20, "Blaze it");
pair <string, bool> PAIRGAN3;

PAIRGAN1.first = 13;
PAIRGAN1.second = 'Y';

PAIRGAN3 = make_pair ("Is Naomi cute? ", false);

cout << PAIRGAN1.first << ' ';
cout << PAIRGAN1.second << endl;

cout << fixed << setprecision(2) // for 2 d.p.
<< PAIRGAN2.first << ' ';
cout << PAIRGAN2.second << endl;

cout << boolalpha // to show bool values as stated
<< PAIRGAN3.first << ' ';
cout << PAIRGAN3.second << endl;

return 0;
}

Assignment: "Data Structures (Quiz)"
Mark Paolo Cruz posted a new assignment: Data Structures (Quiz)
Created Nov 12, 2019Nov 12, 2019
Assignment: "Laboratory 8 - 9"
Mark Paolo Cruz posted a new assignment: Laboratory 8 - 9
Created Nov 11, 2019Nov 11, 2019 (Edited Nov 11, 2019)

Announcement: "Sorting Algorithm - Updated"
Mark Paolo Cruz
Created Nov 5, 2019Nov 5, 2019 (Edited Nov 7, 2019)
Sorting Algorithm - Updated

Sorting Algorithms.pptx
PowerPoint


Announcement: "Sorting Algorithms"
Mark Paolo Cruz
Created Nov 4, 2019Nov 4, 2019
Sorting Algorithms

Searching Algorithms.pptx
PowerPoint

Assignment: "Laboratory 6 - 7"
Mark Paolo Cruz posted a new assignment: Laboratory 6 - 7
Created Oct 29, 2019Oct 29, 2019 (Edited Oct 30, 2019)
Computer Science 5 2019-2020
<html>
<head>
</head>
<body>
<form action="add_users_pro.php" method="POST">
	<table border="1">
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="txtUname"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="password" name="txtPword"></td>
		</tr>
		<tr>
			<td>RETYPE PASSWORD</td>
			<td><input type="password" name="txtRpword"></td>
		</tr>
		<tr>
			<td>FIRSTNAME</td>
			<td><input type="text" name="txtFname"></td>
		</tr>
		<tr>
			<td>MIDDLENAME</td>
			<td><input type="text"name="txtMname"></td>
		</tr>
		<tr>
			<td>LASTNAME</td>
			<td><input type="text"name="txtLname"></td>
		</tr>
		<tr>
			<td>LEVEL</td>
			<td><input type="text"name="txtLevel"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>
