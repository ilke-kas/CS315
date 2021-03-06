%option main
lowercase_char [a-z]
uppercase_char [A-Z]
alphabetic [A-Za-z_]
digits  [0-9]
alphanumeric [A-Za-z_0-9$]
multiline_chars [^!] 
sign [+-]
%%
int printf("INT_TYPENAME ");
bool printf("BOOL_TYPENAME ");
string printf("STRING_TYPENAME ");
char printf("CHAR_TYPENAME ");
double printf("DOUBLE_TYPENAME ");
Map printf("MAP_TYPENAME ");
Direction printf("DIRECT_TYPENAME");
Time printf("TIME_TYPENAME");

for printf("FOR ");
while printf("WHILE ");
break printf("BREAK ");
if printf("IF ");
else printf("ELSE ");
in printf("INPUT ");
out printf("OUTPUT ");
method printf("METHOD ");
none printf("NONE ");
return printf("RETURN ");
start printf("START ");
end printf("END ");
true printf("BOOL_TRUE ");
false printf("BOOL_FALSE ");
North printf("DIREC_NORTH ");
South printf("DIREC_SOUTH ");
East printf("DIREC_EAST ");
West printf("DIREC_WEST ");

createMap printf("CREATE_MAP_FUNCT ");
addChapter printf("ADD_CHP_FUNCT ");
connectChapters printf("CONNECT_CHPS_FUNCT ");
addItem printf("ADD_ITEM_FUNCT ");
getTime printf("GET_TIME_FUNCT ");
getContent printf("GET_CONTENT_FUNCT ");
useTool printf("USE_TOOL_FUNCT ");
move printf("MOVE_FUNCT ");
isAvailable printf("IS_AVAILABLE ");
isConnected printf("IS_CONNECTED_FUNCT ");


\( printf("LP ");
\) printf("RP ");
\{ printf("LCB ");
\} printf("RCB ");
\[ printf("LSB ");
\] printf("RSB ");

\* printf("MULT_OP ");
\/ printf("DIV_OP ");
\% printf("MOD_OP ");
\*\* printf("POWER_OP ");
\" printf("QM ");

\? printf("QUESTION_MARK ");
\: printf("COLUMN ");
\, printf("COMMA ");
\; printf("SEMICOLON ");
\_ printf("UNDERSCORE ");
\! printf("NOT ");
\= printf("ASSIGN_OP ");
\. printf("DOT ");
\/\/.*  printf("SINGLE_COMMENT ");
\/\!{multiline_chars}*\!\/ printf("MULTILINE_COMMENT ");
\+\+ printf("INCREMENT_OP ");
\-\- printf("DECREMENT_OP ");
\+ printf("PLUS_OP ");
\- printf("MINUS_OP ");
\n printf("NL \n");

\| printf("OR_OP ");
\& printf("AND_OP ");

[ ] printf(" ");


{sign}?{digits}+ printf("INT_LITERAL ");
{sign}?{digits}+(\.){digits}+ printf("DOUBLE_LITERAL ");
\'.\'  printf("CHAR_LITERAL ");
\"[^\"]*\" printf("STRING_LITERAL ");
{digits}{digits}\:{digits}{digits}\:{digits}{digits} printf("TIME_LITERAL");


{alphabetic}{alphanumeric}* printf("IDENTIFIER ");

\*\= printf("MULT_AND_ASSIGN ");
\+\= printf("PLUS_AND_ASSIGN ");
\-\= printf("MINUS_AND_ASSIGN ");
\/\= printf("DIV_AND_ASSIGN ");


\=\= printf("EQUAL_OP ");
\!\= printf("NOT_EQUAL_OP ");
\< printf("LESS_THAN_OP ");
\> printf("GREATER_THAN_OP ");
\<\= printf("LESS_THAN_EQUAL_OP ");
\>\= printf("GREATER_THAN_EQUAL ");
. ;
