<?php

$db_host="localhost:33065";
$db_user="usuario_vigenere";
$db_password="vigenereusuario";
$db_name="db_seguridad";
$db_table_name="vige";

$db_connection= mysqli_connect($db_host, $db_user, $db_password);
 mysqli_select_db($db_connection, $db_name);
if (!$db_connection ) {
    die('No se ha podido conectar a la base de datos');
}

$letras="abcdefghijklmnopqrstuvwxyz ";
$men=26;
#matriSSSSSSS
$abe[0][0]="a"; $abe[0][1]="b"; $abe[0][2]="c"; $abe[0][3]="d"; $abe[0][4]="e"; $abe[0][5]="f"; $abe[0][6]="g"; $abe[0][7]="h";
$abe[0][8]="i"; $abe[0][9]="j"; $abe[0][10]="k"; $abe[0][11]="l"; $abe[0][12]="m"; $abe[0][13]="n"; $abe[0][14]="o"; $abe[0][15]="p"; 
$abe[0][16]="q"; $abe[0][17]="r"; $abe[0][18]="s"; $abe[0][19]="t"; $abe[0][20]="u"; $abe[0][21]="v"; $abe[0][22]="w"; $abe[0][23]="x";
$abe[0][24]="y"; $abe[0][25]="z"; $abe[0][26]=" "; 
#fila 1
$abe[1][0]="b"; $abe[1][1]="c"; $abe[1][2]="d"; $abe[1][3]="e"; $abe[1][4]="f"; $abe[1][5]="g"; $abe[1][6]="h"; $abe[1][7]="i";
$abe[1][8]="j"; $abe[1][9]="k"; $abe[1][10]="l"; $abe[1][11]="m"; $abe[1][12]="n"; $abe[1][13]="o"; $abe[1][14]="p"; $abe[1][15]="q";
$abe[1][16]="r"; $abe[1][17]="s"; $abe[1][18]="t"; $abe[1][19]="u"; $abe[1][20]="v"; $abe[1][21]="w"; $abe[1][22]="x"; $abe[1][23]="y";
$abe[1][24]="z"; $abe[1][25]="a";# $abe[1][26]=" "; 
#fila 2
$abe[2][0]="c"; $abe[2][1]="d"; $abe[2][2]="e"; $abe[2][3]="f"; $abe[2][4]="g"; $abe[2][5]="h"; $abe[2][6]="i"; $abe[2][7]="j";
$abe[2][8]="k"; $abe[2][9]="l"; $abe[2][10]="m"; $abe[2][11]="n"; $abe[2][12]="o"; $abe[2][13]="p"; $abe[2][14]="q"; $abe[2][15]="r";
$abe[2][16]="s"; $abe[2][17]="t"; $abe[2][18]="u"; $abe[2][19]="v"; $abe[2][20]="w"; $abe[2][21]="x"; $abe[2][22]="y"; $abe[2][23]="z";
$abe[2][24]="a"; $abe[2][25]="b";# $abe[2][26]=" "; 
#fila 4
$abe[3][0]="d"; $abe[3][1]="e"; $abe[3][2]="f"; $abe[3][3]="g"; $abe[3][4]="h"; $abe[3][5]="i"; $abe[3][6]="j"; $abe[3][7]="k";
$abe[3][8]="l"; $abe[3][9]="m"; $abe[3][10]="n"; $abe[3][11]="o"; $abe[3][12]="p"; $abe[3][13]="q"; $abe[3][14]="r"; $abe[3][15]="s";
$abe[3][16]="t"; $abe[3][17]="u"; $abe[3][18]="v"; $abe[3][19]="w"; $abe[3][20]="x"; $abe[3][21]="y"; $abe[3][22]="z"; $abe[3][23]="a";
$abe[3][24]="b"; $abe[3][25]="c";#$abe[3][26]=" "; 
#fila 5
$abe[4][0]="e"; $abe[1][1]="f"; $abe[4][2]="g"; $abe[4][3]="h"; $abe[4][4]="i"; $abe[4][5]="j"; $abe[4][6]="k"; $abe[4][7]="l";
$abe[4][8]="m"; $abe[4][9]="n"; $abe[4][10]="o"; $abe[4][11]="p"; $abe[4][12]="q"; $abe[4][13]="r"; $abe[4][14]="s"; $abe[4][15]="t";
$abe[4][16]="u"; $abe[4][17]="v"; $abe[4][18]="w"; $abe[4][19]="x"; $abe[4][20]="y"; $abe[4][21]="z"; $abe[4][22]="a"; $abe[4][23]="b";
$abe[4][24]="c"; $abe[4][25]="d";# $abe[4][26]=" "; 
#fila 6
$abe[5][0]="f"; $abe[5][1]="g"; $abe[5][2]="h"; $abe[5][3]="i"; $abe[5][4]="j"; $abe[5][5]="k"; $abe[5][6]="l"; $abe[5][7]="m";
$abe[5][8]="n"; $abe[5][9]="o"; $abe[5][10]="p"; $abe[5][11]="q"; $abe[5][12]="r"; $abe[5][13]="s"; $abe[5][14]="t"; $abe[5][15]="u";
$abe[5][16]="v"; $abe[5][17]="w"; $abe[5][18]="x"; $abe[5][19]="y"; $abe[5][20]="z"; $abe[5][21]="a"; $abe[5][22]="b"; $abe[5][23]="c";
$abe[5][24]="d"; $abe[5][25]="e";# $abe[5][26]=" "; 
#fila 7
$abe[6][0]="g"; $abe[6][1]="h"; $abe[6][2]="i"; $abe[6][3]="j"; $abe[6][4]="k"; $abe[6][5]="l"; $abe[6][6]="m"; $abe[6][7]="n";
$abe[6][8]="o"; $abe[6][9]="p"; $abe[6][10]="q"; $abe[6][11]="r"; $abe[6][12]="s"; $abe[6][13]="t"; $abe[6][14]="u"; $abe[6][15]="v";
$abe[6][16]="w"; $abe[6][17]="x"; $abe[6][18]="y"; $abe[6][19]="z"; $abe[6][20]="a"; $abe[6][21]="b"; $abe[6][22]="c"; $abe[6][23]="d";
$abe[6][24]="e"; $abe[6][25]="f";# $abe[6][26]=" "; 
#fila 8
$abe[7][0]="h"; $abe[7][1]="i"; $abe[7][2]="j"; $abe[7][3]="k"; $abe[7][4]="l"; $abe[7][5]="m"; $abe[7][6]="n"; $abe[7][7]="o";
$abe[7][8]="p"; $abe[7][9]="q"; $abe[7][10]="r"; $abe[7][11]="s"; $abe[7][12]="t"; $abe[7][13]="u"; $abe[7][14]="v"; $abe[7][15]="w";
$abe[7][16]="x"; $abe[7][17]="y"; $abe[7][18]="z"; $abe[7][19]="a"; $abe[7][20]="b"; $abe[7][21]="c"; $abe[7][22]="d"; $abe[7][23]="e";
$abe[7][24]="f"; $abe[7][25]="g";# $abe[7][26]=" "; 
#fila 9
$abe[8][0]="i"; $abe[8][1]="j"; $abe[8][2]="k"; $abe[8][3]="l"; $abe[8][4]="m"; $abe[8][5]="n"; $abe[8][6]="o"; $abe[8][7]="p";
$abe[8][8]="q"; $abe[8][9]="r"; $abe[8][10]="s"; $abe[58][11]="t"; $abe[8][12]="u"; $abe[8][13]="v"; $abe[8][14]="w"; $abe[8][15]="x";
$abe[8][16]="y"; $abe[8][17]="z"; $abe[8][18]="a"; $abe[8][19]="b"; $abe[8][20]="c"; $abe[8][21]="d"; $abe[8][22]="e"; $abe[8][23]="f";
$abe[8][24]="g"; $abe[8][25]="h";# $abe[8][26]=" "; 
#fila 10
$abe[9][0]="j"; $abe[9][1]="k"; $abe[9][2]="l"; $abe[9][3]="m"; $abe[9][4]="n"; $abe[9][5]="o"; $abe[9][6]="p"; $abe[9][7]="q";
$abe[9][8]="r"; $abe[9][9]="s"; $abe[9][10]="t"; $abe[9][11]="u"; $abe[9][12]="v"; $abe[9][13]="w"; $abe[9][14]="x"; $abe[9][15]="y";
$abe[9][16]="z"; $abe[9][17]="a"; $abe[9][18]="b"; $abe[9][19]="c"; $abe[9][20]="d"; $abe[9][21]="e"; $abe[9][22]="f"; $abe[9][23]="g";
$abe[9][24]="h"; $abe[9][25]="i";# $abe[9][26]=" "; 
#fila 11
$abe[10][0]="k"; $abe[10][1]="l"; $abe[10][2]="m"; $abe[10][3]="n"; $abe[10][4]="o"; $abe[10][5]="p"; $abe[10][6]="q"; $abe[10][7]="r";
$abe[10][8]="s"; $abe[10][9]="t"; $abe[10][10]="u"; $abe[10][11]="v"; $abe[10][12]="w"; $abe[10][13]="x"; $abe[10][14]="y";
$abe[10][15]="z"; $abe[10][16]="a"; $abe[10][17]="b"; $abe[10][18]="c"; $abe[10][19]="d"; $abe[10][20]="e"; $abe[10][21]="f";
$abe[10][22]="g"; $abe[10][23]="h"; $abe[10][24]="i"; $abe[10][25]="j";# $abe[10][26]=" "; 
#fila 12
$abe[11][0]="l"; $abe[11][1]="m"; $abe[11][2]="n"; $abe[11][3]="o"; $abe[11][4]="p"; $abe[11][5]="q"; $abe[11][6]="r"; $abe[11][7]="s"; 
$abe[11][8]="t"; $abe[11][9]="u"; $abe[11][10]="v"; $abe[11][11]="w"; $abe[11][12]="x"; $abe[11][13]="y"; $abe[11][14]="z";
$abe[11][15]="a"; $abe[11][16]="b"; $abe[11][18]="c"; $abe[11][19]="d"; $abe[11][19]="e"; $abe[11][20]="f"; $abe[11][21]="g";
$abe[11][22]="h"; $abe[11][23]="i"; $abe[11][24]="j"; $abe[11][25]="k";# $abe[11][26]=" "; 
#fila 13
$abe[12][0]="m"; $abe[12][1]="n"; $abe[12][2]="o"; $abe[12][3]="p"; $abe[12][4]="q"; $abe[12][5]="r"; $abe[12][6]="s"; $abe[12][7]="t";
$abe[12][8]="u"; $abe[12][9]="v"; $abe[12][10]="w"; $abe[12][11]="x"; $abe[12][12]="y"; $abe[12][13]="z"; $abe[12][14]="a";
$abe[12][15]="b"; $abe[12][16]="c"; $abe[12][17]="d"; $abe[12][18]="e"; $abe[12][19]="f"; $abe[12][20]="g"; $abe[12][21]="h";
$abe[12][22]="i"; $abe[12][23]="j"; $abe[12][24]="k"; $abe[12][25]="l";# $abe[12][26]=" "; 
#fila 14
$abe[13][0]="n"; $abe[13][1]="o"; $abe[13][2]="p"; $abe[13][3]="q"; $abe[13][4]="r"; $abe[13][5]="s"; $abe[13][6]="t"; $abe[13][7]="u";
$abe[13][8]="v"; $abe[13][9]="w"; $abe[13][10]="x"; $abe[13][11]="y"; $abe[13][12]="z"; $abe[13][13]="a"; $abe[13][14]="b";
$abe[13][15]="c"; $abe[13][16]="d"; $abe[13][17]="e"; $abe[13][18]="f"; $abe[13][19]="g"; $abe[13][20]="h"; $abe[13][21]="i";
$abe[13][22]="j"; $abe[13][23]="k"; $abe[13][24]="l"; $abe[13][25]="m";# $abe[13][26]=" "; 
#fila 15
$abe[14][0]="o"; $abe[14][1]="p"; $abe[14][2]="q"; $abe[14][3]="r"; $abe[14][4]="s"; $abe[14][5]="t"; $abe[14][6]="u"; $abe[14][7]="v";
$abe[14][8]="w"; $abe[14][9]="x"; $abe[14][10]="y"; $abe[14][11]="z"; $abe[14][12]="a"; $abe[14][13]="b"; $abe[14][14]="c";
$abe[14][15]="d"; $abe[14][16]="e"; $abe[14][17]="f"; $abe[14][18]="g"; $abe[14][19]="h"; $abe[14][20]="i"; $abe[14][21]="j";
$abe[14][22]="k"; $abe[14][23]="l"; $abe[14][24]="m"; $abe[14][25]="n";# $abe[14][26]=" "; 
#fila 16
$abe[15][0]="p"; $abe[15][1]="q"; $abe[15][2]="r"; $abe[15][3]="s"; $abe[15][4]="t"; $abe[15][5]="u"; $abe[15][6]="v"; $abe[15][7]="w";
$abe[15][8]="x"; $abe[15][9]="y"; $abe[15][10]="z"; $abe[15][11]="a"; $abe[15][12]="b"; $abe[15][13]="c"; $abe[15][14]="d";
$abe[15][15]="e"; $abe[15][16]="f"; $abe[15][17]="g"; $abe[15][18]="h"; $abe[15][19]="i"; $abe[15][20]="j"; $abe[15][21]="k";
$abe[15][22]="l";$abe[15][23]="m"; $abe[15][24]="n"; $abe[15][25]="o";# $abe[15][26]=" "; 
#fila 17
$abe[16][0]="q"; $abe[16][1]="r"; $abe[16][2]="s"; $abe[16][3]="t"; $abe[16][4]="u"; $abe[16][5]="v"; $abe[16][6]="w"; $abe[16][7]="x";
$abe[16][8]="y"; $abe[16][9]="z"; $abe[16][10]="a"; $abe[16][11]="b"; $abe[16][12]="c"; $abe[16][13]="d"; $abe[16][14]="e";
$abe[16][15]="f"; $abe[16][16]="g"; $abe[16][17]="h"; $abe[16][18]="i"; $abe[16][19]="j"; $abe[16][20]="k"; $abe[16][21]="l";
$abe[16][22]="m"; $abe[16][23]="n"; $abe[16][24]="o"; $abe[16][25]="p";# $abe[16][26]=" "; 
#fila 17
$abe[17][0]="r"; $abe[17][1]="s"; $abe[17][2]="t"; $abe[17][3]="u"; $abe[17][4]="v"; $abe[17][5]="w"; $abe[17][6]="x"; $abe[17][7]="y";
$abe[17][8]="z"; $abe[17][9]="a"; $abe[17][10]="b"; $abe[17][11]="c"; $abe[17][12]="d"; $abe[17][13]="e"; $abe[17][14]="f";
$abe[17][15]="g"; $abe[17][16]="h"; $abe[17][17]="i"; $abe[17][18]="j"; $abe[17][19]="k"; $abe[17][20]="l"; $abe[17][21]="m";
$abe[17][22]="n"; $abe[17][23]="o"; $abe[17][24]="p"; $abe[17][25]="q";# $abe[17][26]=" "; 
#fila 18
$abe[18][0]="s"; $abe[18][1]="t"; $abe[18][2]="u"; $abe[18][3]="v"; $abe[18][4]="w"; $abe[18][5]="x"; $abe[18][6]="y"; $abe[18][7]="z";
$abe[18][8]="a"; $abe[18][9]="b"; $abe[18][10]="c"; $abe[18][11]="d"; $abe[18][12]="e"; $abe[18][13]="f"; $abe[18][14]="g";
$abe[18][15]="h"; $abe[18][16]="i"; $abe[18][17]="j"; $abe[18][18]="k"; $abe[18][19]="l"; $abe[18][20]="m"; $abe[18][21]="n";
$abe[18][22]="o"; $abe[18][23]="p"; $abe[18][24]="q"; $abe[18][25]="r";# $abe[18][26]=" "; 
#fila 19
$abe[19][0]="t"; $abe[19][1]="u"; $abe[19][2]="v"; $abe[19][3]="w"; $abe[19][4]="x"; $abe[19][5]="y"; $abe[19][6]="z"; $abe[19][7]="a";
$abe[19][8]="b"; $abe[19][9]="c"; $abe[19][10]="d"; $abe[19][11]="e"; $abe[19][12]="f"; $abe[19][13]="g"; $abe[19][14]="h";
$abe[19][15]="i"; $abe[19][16]="j"; $abe[19][17]="k"; $abe[19][18]="l"; $abe[19][19]="m"; $abe[19][20]="n"; $abe[19][21]="o";
$abe[19][22]="p"; $abe[19][23]="q"; $abe[19][24]="r"; $abe[19][25]="s";# $abe[19][26]=" "; 
#fila 20
$abe[20][0]="u"; $abe[20][1]="v"; $abe[20][2]="w"; $abe[20][3]="x"; $abe[20][4]="y"; $abe[20][5]="z"; $abe[20][6]="a"; $abe[20][7]="b";
$abe[20][8]="c"; $abe[20][9]="d"; $abe[20][10]="e"; $abe[20][11]="f"; $abe[20][12]="g"; $abe[20][13]="h"; $abe[20][14]="i";
$abe[20][15]="j"; $abe[20][16]="k"; $abe[20][17]="l"; $abe[20][18]="m"; $abe[20][19]="n"; $abe[20][20]="o"; $abe[20][21]="p";
$abe[20][22]="q"; $abe[20][23]="r"; $abe[20][24]="s"; $abe[20][25]="t";# $abe[20][26]=" "; 
#fila 21
$abe[21][0]="v"; $abe[21][1]="w"; $abe[21][2]="x"; $abe[21][3]="y"; $abe[21][4]="z"; $abe[21][5]="a"; $abe[21][6]="b"; $abe[21][7]="c";
$abe[21][8]="d"; $abe[21][9]="e"; $abe[21][10]="f"; $abe[21][11]="g"; $abe[21][12]="h"; $abe[21][13]="i"; $abe[21][14]="j";
$abe[21][15]="k"; $abe[21][16]="l"; $abe[21][17]="m"; $abe[21][18]="n"; $abe[21][19]="o"; $abe[21][20]="p"; $abe[21][21]="q";
$abe[21][22]="r"; $abe[21][23]="s"; $abe[21][24]="t"; $abe[21][25]="u";# $abe[21][26]=" "; 
#fila 22
$abe[22][0]="w"; $abe[22][1]="x"; $abe[22][2]="y"; $abe[22][3]="z"; $abe[22][4]="a"; $abe[22][5]="b"; $abe[22][6]="c"; $abe[22][7]="d";
$abe[22][8]="e"; $abe[22][9]="f"; $abe[22][10]="g"; $abe[22][11]="h"; $abe[22][12]="i"; $abe[22][13]="j"; $abe[22][14]="k"; 
$abe[22][15]="l"; $abe[22][16]="m"; $abe[22][17]="n"; $abe[22][18]="o"; $abe[22][19]="p"; $abe[22][20]="q"; $abe[22][21]="r";
$abe[22][22]="s"; $abe[22][23]="t"; $abe[22][24]="u"; $abe[22][25]="v";# $abe[22][26]=" "; 
#fila 23
$abe[23][0]="x"; $abe[23][1]="y"; $abe[23][2]="z"; $abe[23][3]="a"; $abe[23][4]="b"; $abe[23][5]="c"; $abe[23][6]="d"; $abe[23][7]="e";
$abe[23][8]="f"; $abe[23][9]="g"; $abe[23][10]="h"; $abe[23][11]="i"; $abe[23][12]="j"; $abe[23][13]="k"; $abe[23][14]="l";
$abe[23][15]="m"; $abe[23][16]="n"; $abe[23][17]="o"; $abe[23][18]="p"; $abe[23][19]="q"; $abe[23][20]="r"; $abe[23][21]="s";
$abe[23][22]="t"; $abe[23][23]="u"; $abe[23][24]="v"; $abe[23][25]="w";# $abe[23][26]=" "; 
#fila 24
$abe[24][0]="y"; $abe[24][1]="z"; $abe[24][2]="a"; $abe[24][3]="b"; $abe[24][4]="c"; $abe[24][5]="d"; $abe[24][6]="e"; $abe[24][7]="f";
$abe[24][8]="g"; $abe[24][9]="h"; $abe[24][10]="i"; $abe[24][11]="j"; $abe[24][12]="k"; $abe[24][13]="l"; $abe[24][14]="m";
$abe[24][15]="n"; $abe[24][16]="o"; $abe[24][17]="p"; $abe[24][18]="q"; $abe[24][19]="r"; $abe[24][20]="s"; $abe[24][21]="t";
$abe[24][22]="u"; $abe[24][23]="v"; $abe[24][24]="w"; $abe[24][25]="x";# $abe[24][26]=" "; 
#fila 25
$abe[25][0]="z"; $abe[25][1]="a"; $abe[25][2]="b"; $abe[25][3]="c"; $abe[25][4]="d"; $abe[25][5]="e"; $abe[25][7]="f"; $abe[25][8]="g";
$abe[25][8]="h"; $abe[25][9]="i"; $abe[25][10]="j"; $abe[25][11]="k"; $abe[25][12]="l"; $abe[25][13]="m"; $abe[25][14]="n";
$abe[25][15]="o"; $abe[25][16]="p"; $abe[25][17]="q"; $abe[25][18]="r"; $abe[25][19]="s"; $abe[25][20]="t"; $abe[25][21]="u";
$abe[25][22]="v"; $abe[25][23]="w"; $abe[25][24]="x"; $abe[25][25]="y";# $abe[25][26]=" "; 

#MATRISSSSS
#Variables
$mensaje="";
$llave="";
$target_path = "C:\Users\Edgar Morales\Desktop\archivos";
#$target_path = "C:\Users\alexi\Desktop\archivos";
$target_path = $target_path . basename( $_FILES['archivo']['name']);
if(move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path));
#echo "<br>";
$con=0;

$file_result = "";
if ($_FILES["archivo"]["error"] > 0) {
    $file_result .= "archivo invalido";
    $file_result .= "codigo de error" . $_FILES["archivo"]["error"] . "<br>";
} else {
    $target_path;
    global $mensaje;
global $n1;
global $n2;
foreach (file($target_path) as $i => $campo) {
    echo $campo. "<br>";
    if($i == 0){
        $mensaje = $campo;
    }
    if($i == 1){
        $llave = $campo;
    }

}
}
echo "<br>";
#$nombre_archivo = $_POST['archivo']['tmp_name']; 
/*$fp = fopen($target_path, "r") or exit("Unable to open file!");
while(!feof($fp)) {
$linea = fgets($fp);
$sepa= explode(",", $linea);
#echo $linea."<br>";

}
foreach($sepa as $campo){
#        echo $campo;
        $li=strlen($campo);
#        echo " ",$li;
if ($con==0) {
        
for ($i=0; $i <$men ; $i++) { 
    if ($letras[$i]==$campo[0]) {
#        echo "es string";
        $mensaje=$campo;
    }
}
}

if ($con==1) {
	$llave=$campo;
}
#        echo "<br>"; 
        $con++;

}
fclose($fp);

#echo $mensaje," ",$llave;
#echo "<br>";*/
$long=strlen($mensaje);
$longllave=strlen($llave);
$j=0;
$jota=0;
$compl1="";
$espa=" ";

while ( $j < $long){
    for ($i=0; $i <= $men ; $i++) { 
        if ($abe[0][$i] == $mensaje[$j]) {
            if ($mensaje[$j] == $espa) {
                $compl1.= " ";
            }
            else{
                #echo " ",$llavevige[$jota];
#                echo "<br>",$mensaje[$j]," ",$i;
                if ($jota<$longllave) {
#                    echo " ",$llave[$jota];
                }
                else{
                    $jota=0;
#                    echo " ",$llave[$jota];
                }
                    for ($ca=0; $ca <=$men ; $ca++) {
                        if ($llave[$jota] == $abe[0][$ca]) {
#                        echo " ",$ca," ",$abe[$i][$ca];
                        $compl1.=$abe[$i][$ca];
                        }
                    }
                $jota++;
            }
             
        }
    }
                $j++;
}
#$echo "<br>",$compl1;
$tildes = $db_connection->query("SET NAMES 'utf8'");
$result = mysqli_query($db_connection, "INSERT INTO vige
    VALUES ('','".$mensaje."',AES_ENCRYPT ('".$llave."','vigepass'),'".$compl1."')");
include ('index.html');

 ?>
