<?php
/***************************************************************************
 *                          lang_faq.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   
 *   traducci�n al espa�ol : Christian Gastrell (traducci�n y versi�n argentina)
 *                           Juan Manuel Mu�oz (corrector y versi�n espa�ola)
 *
 *   $Id: lang_faq.php,v 1.4.2.3 2002/12/18 15:40:20 psotfx Exp $
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

/* CONTRIBUTORS:
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Problemas para Registrarse y Conectarse");
$faq[] = array("�Por qu� no puedo identificarme?", "�Se ha registrado? Debe registrarse para poder identificarse. �Ha sido Ud. inhibido del foro? (Se le mostrar� un mensaje si as� es.) De ser as�, debe contactar con el administrador para averiguar el porqu�. Si se ha registrado y no ha sido inhibido y a�n as� no puede identificarse entonces vuelva a verificar su nombre de usuario y contrase�a. Normalmente �ste es el problema; si no, contacte con el administrador -- puede llegar a haber una configuraci�n incorrecta del foro.");
$faq[] = array("�Por qu� necesito registrarme?", "No est� obligado a hacerlo -- depende de los administradores y moderadores si necesita registrarse para crear mensajes nuevos o no. Sin embargo estar registrado le da muchas ventajas que como usuario invitado no difrutar�a, como tener su gr�fico personalizado (avatar), Mensajer�a Privada, subscripci�n a grupos de usuarios, etc... solo le tomar� unos segundos y es muy recomendable hacerlo.");
$faq[] = array("�Por qu� me desconecta autom�ticamente?", "Si no activa la opci�n <i>Identificarme autom�ticamente</i>, el foro solo lo mantendr� identificado por un determinado tiempo. Esto previene el uso de su cuenta por otras personas. Para mantenerse identificado, active la opci�n al momento de identificarse. No se recomienda hacer esto si Ud. accede desde un ordenador compartido, por ej. cyber-caf�, trabajo, universidad, etc.");
$faq[] = array("�C�mo evito que mi nombre de usuario aparezca en las listas de usuarios conectados?", "En su perfil encontrar� una opci�n de <i>Ocultar mi estado de conexi�n</i>; si activa esta opci�n solo podr� ser visto por administradores y Ud. mismo. Se le contar� como usuario oculto.");
$faq[] = array("�Perd� mi contrase�a!", "�No se altere! Si bien su contrase�a no se le puede enviar puede ser cambiada. Para esto vaya a Conectarse y pulse en <u>�He olvidado mi contrase�a!</u>. Siga las instrucciones y podr� volver a identificarse casi de inmediato.");
$faq[] = array("�Me registr� pero no puedo identificarme!", "Primero verifique que est� ingresando el nombre de usuario y contrase�a correctos. Si est�n bien entonces verifique estas posibilidades: si est� habilitado el soporte para COPPA y Ud. puls� en <u>tengo menos de 13 a�os</u> mientras se registraba entonces deber� seguir las instrucciones que recibi�. Si este no es el caso, entonces su cuenta debe necesitar activaci�n. Revise su correo y vea las instrucciones de activaci�n, algunos foros dejan que sus usuarios activen sus cuentas y otros requieren la activaci�n por parte del administrador. Si no recibi� un correo, verifique que su correo sea correcto. Una de las razones por las que se pide activaci�n es para evitar que usuarios an�nimos abusen del foro. Si ninguna de estas descripciones concuerda con su problema, contacte con el administrador del foro.");
$faq[] = array("�Me registr� hace tiempo pero ya no puedo identificarme!", "Lo m�s probable es que: haya ingresado un nombre de usuario o contrase�a incorrectos (verifique su correo, cuando se registr� se le envi� un mensaje con su nombre de usuario y contrase�a) o el administrador ha borrado su cuenta por alguna raz�n. Es normal que los foros, peri�dicamente, \"limpien\" sus bases de datos de usuarios, si Ud. pas� mucho tiempo sin escribir mensajes nuevos, puede que �ste sea el caso. Intente registr�ndose de nuevo.");


$faq[] = array("--","Preferencias y configuraci�n de Usuarios");
$faq[] = array("�C�mo cambio mi configuraci�n?", "Todos sus datos y configuraciones (si est� registrado) est�n archivados en nuestra base de datos. Para modificarlos pulse en el enlace de <u>Perfil</u>, generalmente se encuentra en la parte de arriba de cada p�gina.");
$faq[] = array("�Los horarios son incorrectos!", "Las horas son, casi siempre, correctas, lo que puede estar sucediendo es que est� viendo las horas correspondientes a otra zona horaria. Si este es el caso, entre en su perfil y defina su zona horaria de acuerdo a su ubicaci�n (ej. Londres, Paris, New York, Sydney, etc.) Cambiar la zona horaria, como la mayor�a de las configuraciones, es solo para usuarios registrados. Cambiando esto las horas deber�an aparecer de acuerdo a su zona y tiempo. Si no se ha registrado, este es un buen momento para hacerlo.");
$faq[] = array("�Cambi� la zona horaria y las horas siguen siendo incorrectas!", "Si est� seguro de que la zona horaria es correcta es posible que esto se deba a los horarios de verano implementados por algunos paises. El foro no est� preparado para trabajar con estos cambios.");
$faq[] = array("�Mi idioma no est� en la lista!", "�sto se puede deber a que el administrador no ha instalado el paquete de su lenguaje para el foro o nadie ha creado una traducci�n a su idioma. De ser as�, si�ntase total libertad para hacer una traducci�n (miles de personas se lo agradecer�n), la informaci�n la encontr� en el sitio Web del Grupo phpBB (Pulse en el enlace que se encuentra al final de la p�gina)");
$faq[] = array("�C�mo muestro una imagen debajo de mi nombre de usuario?", "Hay dos tipos de im�genes debajo de su nombre de usuario, la primera corresponde al Rango, que est� asociada con el n�mero de mensajes que ha ingresado en el foro (generalmente son estrellas o bloques), la segunda es el AVATAR, que es un gr�fico generalmente �nico y personal. El administrador decide si se pueden usar o no. Si es posible usarlos puede introducirlo en su perfil. En caso de que no exista esa opci�n, contacte con el administrador y pida que sea activada esa opci�n (seguramente sea un administrador bueno).");
$faq[] = array("�C�mo cambio mi rango?", "Por lo general no puede cambiar su Rango ya que �ste es asociado directamente con el n�mero de mensajes ingresados o se utilizan para identificar a ciertos usuarios (administrador, moderador o Rangos especiales). Por favor, no abuse del foro creando mensajes innecesarios solo para incrementar su Rango, no hay ning�n beneficio adicional por tener Rangos.");
$faq[] = array("Cuando pulso en el enlace para enviar un correo a un usuario me pide nombre de usuario y contrase�a.", "Disculpe, pero solo los usuarios registrados pueden enviar correos a trav�s del foro (si el administrador ha habilitado esta opci�n). Esto es para evitar SPAM o mensajes maliciosos de usuarios an�nimos.");


$faq[] = array("--","Problemas con los mensajes");
$faq[] = array("�C�mo creo un mensaje en un Tema o en un foro?", "F�cil -- pulse en el bot�n correspondiente cuando est� en un foro o en un tema. Puede que necesite registrarse para poder crear mensajes. Los permisos que tiene en cada lugar del foro est�n listados en la parte inferior de cada p�gina (<i> Puede crear mensajes. Puede hacer encuestas..</i>)");
$faq[] = array("�C�mo modifico o borro un mensaje?", "A menos que sea administrador o moderador del foro, solo puede borrar o modificar los mensajes que haya ingresado Ud. mismo. Puede modificar un mensaje pulsando en <i>Editar</i>. Si alguien ya ha respondido a su mensaje, encontrar� un peque�o texto en el suyo diciendo que ha sido modificado y las veces que lo ha hecho. No aparece si fue un moderador o el administrador el que lo modific� (la mayoria de las veces se deja un mensaje aclaratorio).");
$faq[] = array("�C�mo adoso mi firma a mis mensajes?", "Para adosar una firma en sus mensajes primero tiene que crear una firma personalizada. Esto se hace modificando su perfil. Una vez creada puede activar la opci�n <i>Agregar firma</i> cuando ingrese un mensaje. Tambi�n puede activar la opci�n para que siempre se agregue su firma a los mensajes (esta opci�n est� en su perfil) y puede evitar que se adose su firma a alg�n mensaje en particular al crearlo.");
$faq[] = array("�C�mo creo una encuesta?", "Crear una encuesta es f�cil -- cuando inicia un nuevo tema (o modifica el primer mensaje de un tema) ver� la opci�n <i>Crear una encuesta</i> en la parte inferior del formulario de mensaje. Si no ve esta opci�n probablemente las encuestas est�n desactivadas o no tiene permisos para crearlas. Debe introducir un t�tulo para la encuesta y por lo menos 2 opciones de votaci�n -- para agregar una opci�n escriba una y pulse en <i>Agregar opci�n</i>. Tambi�n puede limitar la encuesta por tiempo (0 [cero] para que no tenga l�mite de tiempo). Tambi�n habr� un l�mite de opciones a agregar que es establecida por defecto por el administrador.");
$faq[] = array("�C�mo modifico o borro una encuesta?", "Al igual que con los mensajes, solo puede modificar o borrar una encuesta generada por Ud. (o siendo administrador o moderador). Para modificar una encuesta, pulse en el primer mensaje de un tema, que siempre es el que tiene la encuesta asociada. Si no se han realizado votaciones, se pueden modificar las opciones o borrarlas. Sin embargo, si ya existen votos, solo los administradores y moderadores pueden modificar la encuesta. Esto es para prevenir la falsificaci�n de resultados de una encuesta por medio de la edici�n de la misma a mitad de camino.");
$faq[] = array("�Por qu� no puedo acceder a ciertos Foros?", "Algunos foros est�n limitados a ciertos usuarios o grupos de usuarios. Para verlos, crear mensajes, modificar, etc. necesita ciertas autorizaciones que solo te puede dar un moderador o administrador del foro.");
$faq[] = array("�Por qu� no puedo votar en encuestas?", "solo usuarios registrados pueden votar en las encuestas (para prevenir resultados falseados). Si se ha registrado pero no puede votar, es posible que no tenga autorizaci�n para votar en esa encuesta.");


$faq[] = array("--","Formatos y tipos de temas");
$faq[] = array("�Qu� es BBCode?", "BBCode es una implementaci�n especial del HTML. Depende del administrador si se puede usar o no en los mensajes. Tambi�n puede desactivarlo desde la casilla de verificaci�n en el formulario de ingreso de mensaje. BBCode es muy similar al HTML: las etiquetas (tags) se escriben entre corchetes [ y ] en lugar de entre signos mayor y menor &lt; and &gt; y ofrece un buen control sobre qu� y c�mo se muestran los mensajes. Para m�s informaci�n sobre BBCode vea la gu�a a la que puede acceder desde el formulario de ingreso de mensajes.");
$faq[] = array("�Puedo usar HTML?", "Depende de si el administrador lo permite y de ser as�, qu� etiquetas est�n permitidas. Esto es una medida de seguridad para mantener la integridad del foro. De estar habilitado, Ud. puede deshabilitarlo cada vez que crea un mensaje.");
$faq[] = array("�Qu� son los emoticonos o Smileys?", "Smileys, o emoticons, son peque�os gr�ficos que pueden ser usados para expresar emociones. Aparecen introduciendo un peque�o c�digo, por ejemplo:  :) significa feliz, :( significa triste. La lista completa de emoticonos (smileys) puede ser desplegada cuando se est� escribiendo un mensaje. Trate de no abusar de ellos, si un administrador considera que su mensaje se ha vuelto ilegible por este motivo, puede decidir borrarlo o privarlo del uso de los mismos.");
$faq[] = array("�Puedo colocar im�genes en los mensajes?", "Las im�genes pueden ser adheridas en sus mensajes. Sin embargo, de momento no se cuenta con una herramienta que permita subir im�genes al foro. Por ende, Ud. debe hacer un enlace URL a una imagen que quiere que se muestre, por ej. http://www.unsitio.com/una_imagen.gif. No puede hacer enlaces a im�genes que se encuentren en su propio PC (a menos que su PC sea un servidor de WEB con acceso desde internet) ni tampoco a im�genes que se encuentren tras alg�n mecanismo de autentificaci�n (cuentas de Hotmail o Yahoo, sitios protegidos por contrase�a, etc.). Para mostrar una imagen use el BBCode [img] o la etiqueta HTML correspondiente (de estar permitido).");
$faq[] = array("�Qu� son los Anuncios?", "Los Anuncios usualmente contienen informaci�n importante que los usuarios deber�an leer lo antes posible. Los Anuncios aparecen primero en las listas de temas del Foro donde fueron colocados. Si puede o no ingresar anuncios depender� de los permisos que Ud. posea, los cuales son impuestos por el administrador.");
$faq[] = array("�Qu� son los Temas Permanentes?", "Los Temas Permanentes aparecen por debajo de los Anuncios en la vista del Foro y solo en la primera p�gina. Usualmente son de car�cter importante o son temas que deben permanecer siempre a la vista. Al igual que con los Anuncios, el administrador decide quien puede ingresar Temas Permanentes y quien no.");
$faq[] = array("�Qu� son los Temas Bloqueados?", "Los Temas Bloqueados son puestos de esta manera por el administrador o moderador. No se puede crear mensajes ni respuestas ni votar en encuestas de un Tema Bloqueado. Las encuestas en un Tema Bloqueado son autom�ticamente finalizadas.");


$faq[] = array("--","Niveles de Usuarios y Grupos");
$faq[] = array("�Qu� son los Administradores?", "Los Administradores son gente asignada con el m�s alto nivel de control sobre el foro entero. Ellos pueden controlar la manera en que funciona el foro en todos sus aspectos, incluyendo permisos, inhibici�n de usuarios, creaci�n de grupos y/o moderadores, etc. Tambi�n, obviamente, tienen capacidad de moderar sobre cualquiera de los foros.");
$faq[] = array("�Qu� son los Moderadores?", "Los Moderadores usuarios (o grupos de usuarios) cuyo trabajo es mantener el funcionamiento normal del foro d�a a d�a. Tienen el poder de modificar o borrar mensajes, bloquear o desbloquear, mover y separar temas en el foro donde son Moderadores. Por lo general los Moderadores est�n ah� para evitar que los usuarios publiquen mensajes que est�n <i>fuera de tema (off topic)</i> o que se abuse de material ofensivo en el foro. NOTA: <i>Off topic o Fuera de tema</i> significa desviarse del motivo o tema original de la conversaci�n, es algo muy subjetivo definir si sucede o no y por ende los Moderadores son seleccionados (por lo general) cuidadosamente. Ha de respetarse sus decisiones sobre esta cuesti�n.");
$faq[] = array("�Qu� son Grupos de Usuarios?", "Los Grupos de Usuarios es una de las formas en las que el administrador del foro puede agrupar usuarios. Cada usuario puede pertenecer a varios grupos (esto es distinto en la mayor�a de los dem�s sistemas de foros) y cada grupo puede tener distintos permisos y accesos. Esto facilita la tarea del administrador a la hora de suministrar permisos sobre foros privados o para asignar moderadores.");
$faq[] = array("�C�mo me uno a un Grupo de Usuarios?", "Para unirse a un Grupo de Usuarios, pulse en el enlace <i>Grupos de Usuarios</i> y podr� ver todos los Grupos. No todos son de <i>Acceso libre</i> -- algunos est�n cerrados y otros pueden tener usuarios ocultos. Si el Grupo est� abierto Ud. puede requerir ser unido al grupo pulsando en el bot�n apropiado. El moderador del grupo deber� aprobar su petici�n; pueden preguntarle porqu� quiere unirse al grupo. Por favor, no moleste a los moderadores de grupo si rechazan su petici�n -- tendr�n sus motivos.");
$faq[] = array("�C�mo me convierto en el Moderador de un Grupo de Usuarios?", "Los Grupos de Usuarios son inicialmente creados por el administrador que tambi�n asigna los moderadores. Si est� interesado en crear un Grupo entonces deber�a hablar con el administrador, int�ntelo dej�ndole un Mensaje Privado.");


$faq[] = array("--","Mensajer�a Privada");
$faq[] = array("�No puedo enviar Mensajes Privados!", "Hay tres posibles razones: No est� registrado y/o no se ha identificado, el administrador deshabilit� el sistema de mensajes privados o el administrador ha deshabilitado la mensajer�a privada para Ud. Si �ste es el caso, trate de contactar con el administrador y preg�ntele el motivo.");
$faq[] = array("�Recibo constantemente mensajes privados no deseados!", "En el futuro ser� agregada la caracter�stica de ignorar mensajes de una lista de usuarios. Por el momento, si est� recibiendo mensajes no deseados de uno o m�s usuarios, informe al administrador -- ellos tienen la autoridad para evitar que alguien env�e mensajes.");
$faq[] = array("�He recibido spam o correo abusivo de alguien de este foro!", "Lamentamos oir eso. El sistema de correo de este foro incluye mecanismos para registrar usuarios que hagan esto. Deber�a contactar al administrador con una copia del correo que recibi� y es muy importante que incluya los encabezados del correo (headers). Entonces el administrador podr� tomar acciones.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Con respecto a phpBB 2");
$faq[] = array("�Qui�n hizo este sistema de foros?", "Este software (en su versi�n sin modificar) esta producido y registrado por <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Es puesto a disponibilidad bajo Licencia P�blica General GNU (GNU/GPL) y puede ser libremente distribuido; vea el enlace para m�s detalles.");
$faq[] = array("�Por qu� no est� X caracter�stica disponible?", "Este software fue escrito y licenciado por el Grupo phpBB. Si cree que alguna caracter�stica debe ser agregada entonces, por favor, visite el sitio Web phpbb.com y vea que tiene lo que decir el Grupo phpBB. Por favor no ingrese requerimientos de caracter�sticas en el foro de phpBB.com, ya que el Grupo usa sourceforge para manejar la programaci�n de nuevas caracter�sticas. Por favor, lea los foros y vea cual, se es que alguna, nuestra posici�n es con respecto a nuevas caracter�sticas y luego siga los procedimientos ah� descritos.");
$faq[] = array("�A qui�n contacto con respecto a abusos y/o temas legales sobre este sistema de foros?", "Ud. deber�a contactarse con el administrador de este foro. Si no puede encontrarlo o no puede contactarse con el, deber�a primero tratar de contactar al moderador del foro y que el le indique a quien contactar. Si aun as� no obtiene respuesta deber�a tratar de contactar al due�o del dominio (efect�e una b�squeda whois) o, si este foro corre sobre un dominio gr�tis (yahoo, free.fr, f2s.com, etc.), el departamento o administraci�n de abusos de ese servicio. Por favor, tenga en cuenta que el Grupo phpBB carece de cualquier tipo de control y no puede ser de ninguna manera responsable sobre como, donde o por quien este sistema de foros es usado. No tiene ning�n sentido contactar al Grupo phpBB en relaci�n a asuntos legales (difamaci�n, responsabilidad, deformaci�n de comentarios, etc.) que no sean con respecto al sitio phpbb.com o la discreci�n misma del software phpBB. Si Ud. env�a correo al Grupo phpBB respecto del uso de terceras partes de este software est� dispuesto a recibir una respuesta cortante o directamente no recibir respuesta.");

//
// This ends the FAQ entries
//

?>