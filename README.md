# Airline Database
Implementation of an Airplane database in MySQL.

# Problem Requirements
- Airlines have names and a unique code (for example, Air Canada's code is AC).
- Each airline offers flights. A flight has a flight number which is composed of the airline code and a 3 digit number (flights from different airlines could have the same 3 digit number but would have a different airline code). 
- Each flight could be offered one or more (up to 7) days of the week.
- A flight flies at most once a day.
- Flights can land (arrive) and take off (depart) from Airports.
- An airport has a name, a unique airport code (for example Toronto Pearson is XXY), a city and a province.
- Flights have scheduled arrival times at airports and scheduled departure times from airports and actual departure times and actual arrival times.
- Every airport must have at least one flight arrive and at least one flight depart.
- Flights may be cancelled and thus not land or take off.
- Airports can handle only certain airplane types.
- An Airplane Type has a type name, a maximum number of seats, and a company (manufacturer). For example an airplane type might be DC10, and the maximum number of
seats would be 100 and the company would be Boeing. 
- The airplane type name is always unique.
- Every airplane type would be supported by at least one airport and an airport can always support at least one airplane type.
- Airlines own a fleet of Airplanes (each airline owns at least 3 airplanes) and every airplane is owned by an airline.
- Each Airplane has a unique airplane id and a year it was built. 
- Each airplane is designed as one of the airplane types. Some airplane types are just prototypes and have no airplanes of that type built yet.
- Each flight is assigned an airplane and it uses the same airplane for all it's flights but an airplane may be used by numerous flights. 
- Not all airplanes are used on flights, some sit around as backup planes.
