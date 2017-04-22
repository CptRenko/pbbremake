<?php
/***************************************************************************
 *                         lang_bbcode.php [spanish]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   
 *   traducci�n al espa�ol : Christian Gastrell (traducci�n y versi�n argentina)
 *                           Juan Manuel Mu�oz (corrector y versi�n espa�ola)
 
*    			    
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Introducci�n");
$faq[] = array("�Qu� es BBCode?", "BBCode es una implementaci�n especial de HTML. Que pueda hacer uso o no de BBCode en sus mensajes depende del administrador. Adem�s, Ud. puede deshabilitar el BBCode individualmente en cada mensaje desde el formulario situado justo debajo del marco con el texto del mensaje propiamente dicho. BBCode es similar al HTML en su estilo: las etiquetas (tags) se encierran entre corchetes [ y ] en lugar de &lt; y &gt; y ofrece un mejor control sobre lo que se escribe y c�mo se escribe. Dependiendo del estilo que use el foro puede encontrar que agregar BBCode es tan simple como pulsar en algunos botones en la interfaz de mensajes justo arriba de donde se escribe el texto del mismo. Aun existiendo esto, puede que esta gu�a le sea �til.");

$faq[] = array("--","Formato del texto");
$faq[] = array("C�mo crear texto en negrita, it�lica y subrayado", "BBCode incluye etiquetas para permitir que usted cambie r�pidamente el estilo b�sico de su texto. Esto se logra de las maneras siguientes: <ul><li>Para hacer que una parte del texto est� en negrita lo encierra entre <b>[b][/b]</b>, por ej. <br /><br /><b>[b]</b>Hola<b>[/b]</b><br /><br />se ver� <b>Hola</b></li><li>Para subrayar use <b>[u][/u]</b>, por ejemplo:<br /><br /><b>[u]</b>Buenos d�as<b>[/u]</b><br /><br />se convierte en <u>Buenos d�as</u></li><li>Para it�licas <b>[i][/i]</b>, ej.<br /><br />Esto es <b>[i]</b>�Muy Bueno!<b>[/i]</b><br /><br />devolver� Esto es <i>�Muy Bueno!</i></li></ul>");
$faq[] = array("C�mo cambiar el color o el tama�o del texto", "Para alterar el color o el tama�o de su texto se pueden utilizar las siguientes etiquetas. Tenga presente que el aspecto depender� del navegador y sistema operativo que usen los visitantes de su foro: <ul><li>Para cambiar el color del texto se encierra entre <b>[color=][/color]</b>. Puede especificar un color predefinido (ej. red, blue, yellow, etc.) o el valor hexadecimal alternativo, ej. #FFFFFF, #000000. Por ejemplo, para crear un texto rojo puede utilizar:<br /><br /><b>[color=red]</b>�Hola!<b>[/color]</b><br /><br />o<br /><br /><b>[color=#FF0000]</b>�Hola!<b>[/color]</b><br /><br />ambas se mostrar�n <span style=\"color:red\">�Hola!</span></li><li>Cambiar el tama�o del texto se hace de una manera muy similar usando <b>[size=][/size]</b>. Esta etiqueta es dependiente del estilo que est� usando pero el formato recomendado es el valor num�rico que representa el tama�o del texto en p�xeles, empezando en 1 (tan peque�o que no podr� leerlo) hasta 29 (muy grande). Por ejemplo:<br /><br /><b>[size=9]</b>PEQUE�O<b>[/size]</b><br /><br />normalmente ser� <span style=\"font-size:9px\">PEQUE�O</span><br /><br />y:<br /><br /><b>[size=24]</b>�GRANDE!<b>[/size]</b><br /><br />ser� <span style=\"font-size:24px\">�GRANDE!</span></li></ul>");
$faq[] = array("�Puedo combinar etiquetas de formato?", "S�, por supuesto; por ejemplo para llamar la atenci�n de alguien, escriba:<br /><br /><b>[size=18][color=red][b]</b>�M�RAME!<b>[/b][/color][/size]</b><br /><br />esto se mostrar� <span style=\"color:red;font-size:18px\"><b>�M�RAME!</b></span><br /><br />Aun as�, recomendamos no configurar mucho texto para que se muestre de esta manera. Recuerde que depende de Ud., quien ingresa, verificar que todas las etiquetas est�n cerradas correctamente. Por ejemplo, el siguiente es incorrecto:<br /><br /><b>[b][u]</b>Esto est� mal<b>[/b][/u]</b>");

$faq[] = array("--","Citas y texto de ancho fijo");
$faq[] = array("Citando texto en respuestas/mensajes nuevos", "Hay dos maneras de que usted pueda citar texto: con una referencia o sin ella.<ul><li>Cuando utiliza la funci�n de Citar para contestar a un mensaje notar� que el texto del ingreso est� agregado al cuerpo del mensaje encerrado entre <b>[quote=\"\"][/quote]</b >. Este m�todo permite citar con una referencia a una persona o cualquier otra cosa que usted elija poner. Por ejemplo, para citar una parte del texto del Sr. Blobby:<br /><br /><b>[quote=\"Sr. Blobby\"]</b>El texto del Sr. Blobby aqu�<b>[/quote]</b><br /><br />BBCode agregar� autom�ticamente: Sr. Blobby escribi�: antes del texto. Recuerde que usted < b>debe</b > incluir las comillas \"\" encerrando el nombre de la persona que est� citando -- no son opcionales.</li><li>El segundo m�todo permite que usted cite algo sin incluir el autor. Para utilizar esto incluya el texto entre etiquetas <b>[quote][/quote]</b >. Cuando se vea la cita solo se ver�: Cita: El texto de la cita.</li></ul >");
$faq[] = array("Para mostrar C�digo o texto de ancho fijo", "Si quiere mostrar parte de texto de un c�digo, o cualquier cosa que necesite estar dispuesto con un tipo de letra que sea de ancho fijo como la fuente Courier o similares, solo encierre esa parte del texto entre etiquetas <b>[code][/code]</b>, ej.<br /><br /><b>[code]</b>echo \"Esto es c�digo\";<b>[/code]</b><br /><br />Todos los formatos utilizados dentro de las etiquetas <b>[code][/code]</b> se conservar�n.");

$faq[] = array("--","Generar Listas");
$faq[] = array("Crear una lista sin orden", "BBCode soporta dos tipos de listas, ordenadas y sin orden. Estas son esencialmente las mismas que sus an�logas en HTML. Una lista sin orden muestra cada item como de su lista secuencialmente uno despu�s del otro clasific�ndolos con un car�cter inicial. Para crear una lista sin orden use <b>[list][/list]</b> y defina cada item con <b>[*]</b>. Por ejemplo, para clasificar sus colores favoritos use:<br /><br /><b>[list]</b><br /><b>[*]</b>Rojo<br /><b>[*]</b>Azul<br /><b>[*]</b>Amarillo<br /><b>[/list]</b><br /><br />Esto generar� la siguiente lista:<ul><li>Rojo</li><li>Azul</li><li>Amarillo</li></ul>");
$faq[] = array("Crear una lista ordenada", "El segundo tipo de lista, una ordenada, le permite controlar qu� aparece antes de cada item. Para crear una lista ordenada num�ricamente use <b>[list=1][/list]</b> o use <b>[list=a][/list]</b> para ordenerla con letras. Igual que con las listas sin orden los items se especifican con <b>[*]</b>. Por ejemplo:<br /><br /><b>[list=1]</b><br /><b>[*]</b>Ir de compras<br /><b>[*]</b>Comprar un ordenador nuevo<br /><b>[*]</b>Insultar al ordenador cuando se cuelgue<br /><b>[/list]</b><br /><br />se mostrar� as�:<ol type=\"1\"><li>Ir de compras</li><li>Comprar un ordenador nuevo</li><li>Insultar al ordenador cuando se cuelgue</li></ol>Para una lista con orden de letras:<br /><br /><b>[list=a]</b><br /><b>[*]</b>La primera respuesta<br /><b>[*]</b>La segunda respuesta<br /><b>[*]</b>La tercera respuesta<br /><b>[/list]</b><br /><br />as�<ol type=\"a\"><li>La primera respuesta</li><li>La segunda respuesta</li><li>La tercera respuesta</li></ol>");

$faq[] = array("--", "Creando enlaces");
$faq[] = array("Enlazando a otros sitios", "phpBB BBCode soporta varias maneras de crear enlaces URI, Uniform Resource Indicators m�s conocidos como URI's.<ul><li>La primera es con etiquetas <b>[url=][/url]</b>; lo que se ingrese despu�s del = ser� considerado como URL. Por ejemplo, para hacer un enlace a phpBB.com puede usar:<br /><br /><b>[url=http://www.phpbb.com/]</b>�Visite phpBB!<b>[/url]</b><br /><br />Esto generar� este enlace, 
    <a href=\%22http:/www.phpbb.com/\%22 target=\"_blank\">�Visite phpBB!</a> Notar� que el enlace se abre en una nueva ventana permitiendo as� que el usuario siga viendo el foro en que estaba.</li><li>Si quiere que se muestre la URL como su propio texto solo ingrese:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Esto generar� el siguiente enlace: 
    <a href=\%22http:/www.phpbb.com/\%22 target=\"_blank\">http://www.phpbb.com/</a></li><li>Adem�s, phpBB tiene una funci�n especial llamada <i>Enlaces M�gicos</i> que convertir� cualquier URL sint�cticamente correcta en un enlace sin necesidad de que Ud. agregue ninguna etiqueta e incluso sin anteponer http://. Por ejemplo escribiendo www.phpbb.com en su mensaje se convertir� en 
    <a href=\%22http:/www.phpbb.com/\%22 target=\"_blank\">www.phpbb.com</a> cuando vea el mensaje.</li><li>Lo mismo se aplica a direcciones de correo electr�nico; puede especificar una direcci�n, como:<br /><br /><b>[email]</b>nadie@dominio.com<b>[/email]</b><br /><br />que se ver� <a href=\"emailto:nadie@dominio.com\">nadie@dominio.com</a> o puede simplemente ingresar nadie@dominio.com en su mensaje y ser� convertido.</li></ul>Como en todas las etiquetas BBCode Ud. puede incluir unas en otras como por ejemplo <b>[img][/img]</b> (vea el siguiente tema), <b>[b][/b]</b>, etc. Como con las etiquetas de formato, depende de Ud. cerrar correctamente todas las etiquetas. Por ejemplo: <br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br /><u>no</u> es correcto y puede devenir en que su ingreso sea borrado. Tenga cuidado.");

$faq[] = array("--", "Mostrando im�genes en los mensajes");
$faq[] = array("Agregar una imagen en un mensaje", "phpBB BBCode incluye etiquetas para incluir im�genes en sus mensajes. Dos cosas muy importantes a recordar cuando se agregan im�genes son: muchos usuarios creen molesto que se incluyan muchas im�genes en un mensaje y segundo, la imagen que Ud. quiera mostrar debe estar de antemano en internet (no sirve que est� solo en su m�quina, a menos que Ud. dirija un sitio Web). Actualmente no hay manera de almacenar las im�genes en phpBB (se espera poder corregir esto en futuras versiones). Para mostrar una imagen debe encerrar su URL con las etiquetas <b>[img][/img]</b>. Por ejemplo:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Como se explica en la secci�n anterior se pueden incluir im�genes en las etiquetas <b>[url][/url]</b> si as� lo desea, ej.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />generar�:<br /><br />
    <a href=\%22http:/www.phpbb.com/\%22 target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Otros");
$faq[] = array("�Puedo agregar mis propias etiquetas?", "No, me temo que no directamente en phpBB 2.0. Se prev� ofrecer m�s personalizaci�n de BBCode en pr�ximas versiones.");

//
// This ends the BBCode guide entries
//

?>