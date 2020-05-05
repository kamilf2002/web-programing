PROGRAM Task4(INPUT, OUTPUT);
USES
  DOS;

FUNCTION ReadQueryString(Key: STRING): STRING;
VAR
  Str, Val: STRING;
  KeyNum, I: INTEGER;
BEGIN
  Val := '';
  Str := GetEnv('QUERY_STRING');
  KeyNum := POS(Key, Str) + Length(Key) + 1;
  FOR I := KeyNum TO Length(Str)
  DO
    BEGIN
      IF Str[I] = '&'
      THEN
        BREAK;
      Val := Val + Str[I]
    END;
  ReadQueryString := Val
END;

BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', ReadQueryString('first_name'));
  WRITELN('Last Name: ', ReadQueryString('last_name'));
  WRITELN('Age: ', ReadQueryString('age'))
END.
