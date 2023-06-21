CREATE TABLE Gradsurvey (

FirstName 		VARCHAR(25) NOT NULL,
LastName 		VARCHAR(25) NOT NULL,
BGSUemail 		VARCHAR(75) NOT NULL,
Major			VARCHAR(75) NOT NULL,

DegreeReason 		VARCHAR(100) NULL,
OtherDegreeReason	VARCHAR(150) NULL,

Job 			CHAR(1) NULL,

CompanyName 		VARCHAR(50) NULL,
JobTitle 		VARCHAR(50) NULL,
CompanyCity 		VARCHAR(25) NULL,
CompanyState 		CHAR(2) NULL, 
Internship 		CHAR(1) NULL,
JobSecure 		VARCHAR(100) NULL,

Salary 			INT(7) NULL,
Bonus 			INT(7) NULL,

Phone 			CHAR(10) NULL,
PersonalEmail 		VARCHAR(75) NULL,

SearchingPlan 		CHAR(1) NULL,
Interviews 		INT(2) NULL,
GradPlan 		CHAR(1) NULL,
GradSchoolProgram 	VARCHAR(50) NULL,
OtherPlan 		CHAR(1) NULL,
OtherPlanDetails	VARCHAR(150) NULL,

CompleteInternship 	CHAR(1) NULL,

InternCompany1 		VARCHAR(25) NULL,
InternCompany2 		VARCHAR(25) NULL,
InternCompany3 		VARCHAR(25) NULL,
InternCompany4 		VARCHAR(25) NULL,
InternCompany5 		VARCHAR(25) NULL,

InternJobTitle1 	VARCHAR(25) NULL,
InternJobTitle2 	VARCHAR(25) NULL,
InternJobTitle3 	VARCHAR(25) NULL,
InternJobTitle4 	VARCHAR(25) NULL,
InternJobTitle5 	VARCHAR(25) NULL,

InternCity1 		VARCHAR(25) NULL,
InternCity2 		VARCHAR(25) NULL,
InternCity3 		VARCHAR(25) NULL,
InternCity4 		VARCHAR(25) NULL,
InternCity5 		VARCHAR(25) NULL,

InternState1 		CHAR(2) NULL,
InternState2 		CHAR(2) NULL,
InternState3 		CHAR(2) NULL,
InternState4 		CHAR(2) NULL,
InternState5 		CHAR(2) NULL,

InternWage1 		DOUBLE(4,2) NULL,
InternWage2 		DOUBLE(4,2) NULL,
InternWage3 		DOUBLE(4,2) NULL,
InternWage4 		DOUBLE(4,2) NULL,
InternWage5 		DOUBLE(4,2) NULL,

BCA 			CHAR(1) NULL,
BCArating 		INT(2) NULL,

Feedback 		VARCHAR(150) NULL,

PRIMARY KEY(BGSUemail));
