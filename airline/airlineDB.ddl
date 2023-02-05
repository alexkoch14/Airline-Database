drop database airlineDB;
create database airlineDB;

create table Airline(
    Code	char(2) NOT NULL, 
    Name	varchar(25),
    primary key (Code));
    
create table AirplaneType(
    TypeName	varchar(25) not null,
    Company		varchar(30) not null,
    Capacity	integer,
    primary key (TypeName));

create table Airport(
    Code		char(3) not null,
    Name		varchar(60),
    City 		varchar(25) not null,
    Province	varchar(25) not null,
    primary key (Code));

create table Airplane(
    ID			varchar(10) not null,
    TypeName	varchar(25) not null,
    AsmYear		YEAR(4) not null,
    AirlineCode	char(2),
    primary key (ID),
    foreign key (TypeName) references AirplaneType(TypeName) on delete restrict, 
    foreign key (AirlineCode) references Airline(Code) on delete set null);

create table Flight(
    AirlineCode	char(2) not null,
    FlightCode  varchar(3) not null,
    AirplaneID	varchar(10),
    ArriveAirpt char(3) not null,
    DepartAirpt char(3) not null,
    SArrival	time not null,
    SDepart		time not null, 
    AArrival    time,
    ADepart     time,
    primary key (AirlineCode, FlightCode),
	foreign key (AirlineCode) references Airline(Code) on delete cascade,
	foreign key (AirplaneID) references Airplane(ID) on delete set null,
    foreign key (ArriveAirpt) references Airport(Code) on delete cascade,
    foreign key (DepartAirpt) references Airport(Code) on delete cascade);
    
create table FlightDate(
    AirlineCode char(2) not null,
    FlightCode	varchar(3) not null,
    DayOfWeek   char(3) not null,
    primary key (AirlineCode, FlightCode, DayOfWeek),
    foreign key (AirlineCode, FlightCode) references Flight(AirlineCode, FlightCode) on delete cascade);
    
    
create table SupportedAirplanes(
    AirportCode		char(3) not null,
    AirplaneType	varchar(25) not null,
    primary key (AirportCode, AirplaneType),
    foreign key (AirportCode) references Airport(Code) on delete cascade,
    foreign key (AirplaneType) references AirplaneType(TypeName) on delete cascade);

insert into Airline values
('TS', 'Air Transat'),
('WS', 'West Jet'),
('WN', 'South West Airlines');

insert into Airport values 
('YYC', 'Calgary International Airport', 'Calgary', 'Alberta'),
('YOW', 'Ottawa International Airport', 'Ottawa', 'Ontario'),
('YUL', 'Montréal–Pierre Elliott Trudeau International Airport', 'Montréal', 'Québec');

insert into AirplaneType values
('737-800', 'Boeing', '162'), 
('747-400', 'Boeing', '416'), 
('DC-9', 'McDonnell Douglas', '135');

insert into Airplane values 
('N4G1', '737-800', '1994', 'TS'),
('O9T5', '747-400', '2005', 'WS'),
('H5F6', 'DC-9', '1965', 'WN');

insert into Flight values
('TS', '442', 'N4G1', 'YYC', 'YOW', '2020-01-31 21:14:02', '2020-01-31 23:04:33', NULL, NULL),
('WS', '420', 'O9T5', 'YOW', 'YUL', '2020-01-31 20:37:17', '2020-01-31 22:20:16', NULL, NULL),
('WN', '662', 'H5F6', 'YUL', 'YYC', '2020-01-07 09:30:34', '2020-01-07 09:35:22', '2020-01-07 21:14:02', '2020-01-07 23:04:33');

insert into FlightDate values
('TS', '442', 'Mon'),
('WS', '420', 'Wed'),
('WN', '662', 'Thu'),
('TS', '442', 'Sat');

insert into SupportedAirplanes values 
('YYC', '737-800'),
('YYC', '747-400'),
('YOW', '747-400'),
('YUL', 'DC-9');