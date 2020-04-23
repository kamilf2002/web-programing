PROGRAM Task3(INPUT, OUTPUT);

USES
  DOS;

VAR
  Str, Nam: STRING;
  I: INTEGER;

BEGIN
  WRITELN('Countent-Type: text/plain');
  WRITELN('');
  Str := GetEnv('QUERY_STRING');
  IF Length(Str) > 0
  THEN
    BEGIN
      FOR I := POS('=', Str) + 1 TO Length(Str)
      DO
        Nam = Nam + Query[I];
      WRITELN('Hello Dear, ', Nam)
    END
  ELSE
    WRITELN('Hello Anonymous.')
END.