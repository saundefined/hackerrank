SELECT CITY, LENGTH(CITY) as CITY_LENGTH
FROM STATION
ORDER BY CITY_LENGTH DESC, CITY ASC
LIMIT 1;

SELECT CITY, LENGTH(CITY) as CITY_LENGTH
FROM STATION
ORDER BY CITY_LENGTH ASC, CITY ASC
LIMIT 1;