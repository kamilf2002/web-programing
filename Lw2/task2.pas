PROGRAM Task2(INPUT, OUTPUT);

USES
  DOS;

VAR
  Ch: CHAR;
  Query: STRING;
  I: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  FOR I := 1 TO Length(Query)
  DO
    BEGIN
      IF(Query[I] = '=')
      THEN
        Ch := Query[I + 1];
    END;
  IF (Ch > '0') AND (Ch < '3')
  THEN
    WRITE('The British are coming by ')
  ELSE
    WRITELN('Sara says only ''', Ch, '''.');
  IF Ch = '1'
  THEN
    WRITELN('land');
  IF Ch = '2'
  THEN
    WRITELN('sea')
END.
