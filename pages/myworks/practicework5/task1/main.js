var name = prompt('Введіть ПІБ','');
var profession = prompt('Введіть професію','');
var phone = prompt('Введіть номер телефону','');
var visitcard = 
' <TABLE width="100%" border="0">'
+' <TR>'
+' <TD align="CENTER" valign="CENTER">'
+' <IMG src="logo.png" style="width:150px;height:120px">'
+' </TD>'
+' <TD align="CENTER">'
+' <B>' + name + '</B><BR>'
+' <I>' + profession + '</I><BR>'
+' <FONT color="blue">' + phone + '</FONT>'
+' </TD>'
+' </TR>'
+' </TABLE>';
document.write('<TABLE width="100%" border="0" align="CENTER">');
for(var y=0; y<12; y++) {
    document.write('<TR>');
    for(var x=0; x<3; x++) {
    document.write( '<TD align="CENTER" style="border-style: solid; borderwidth:thin;">');
    document.write( visitcard );
    document.write('</TD>');
    }
    document.write('</TR>');
}
document.write('</TABLE>'); 