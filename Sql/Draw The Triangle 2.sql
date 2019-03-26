SET @number = 0;
SELECT REPEAT('* ', @number := @number + 1) FROM information_schema.tables WHERE @number < 20;