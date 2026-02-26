<?php
/***************************************************************************
 *
 * Encode Explorer (Bootstrap 5 & PHP 8.0+ Mod)
 *
 * Author : Marek Rei (marek ät marekrei dot com)
 * Modified : Upgraded to Bootstrap 5, PHP 8.0+, Dark Mode & UI Enhancements
 * Version : 6.4.5
 * Homepage : encode-explorer.siineiolekala.net
 *
 *
 * NB!:If you change anything, save with UTF-8! Otherwise you may
 * encounter problems, especially when displaying images.
 *
 ***************************************************************************/

/***************************************************************************/
/* HERE ARE THE SETTINGS FOR CONFIGURATION                               */
/***************************************************************************/

//
// Initialising variables. Don't change these.
//

$_CONFIG = array();
$_ERROR = "";
$_START_TIME = microtime(TRUE);

/*
 * GENERAL SETTINGS
 */

//
// Choose a language. See below in the language section for options.
// Default: $_CONFIG['lang'] = "en";
//
$_CONFIG['lang'] = "en";

//
// Display thumbnails when hovering over image entries in the list.
// Common image types are supported (jpeg, png, gif).
// Pdf files are also supported but require ImageMagick to be installed.
// Default: $_CONFIG['thumbnails'] = true;
//
$_CONFIG['thumbnails'] = true;

//
// Maximum sizes of the thumbnails.
// Default: $_CONFIG['thumbnails_width'] = 300;
// Default: $_CONFIG['thumbnails_height'] = 300;
//
$_CONFIG['thumbnails_width'] = 300;
$_CONFIG['thumbnails_height'] = 300;

//
// Mobile interface enabled. true/false
// Default: $_CONFIG['mobile_enabled'] = true;
//
$_CONFIG['mobile_enabled'] = true;

//
// Mobile interface as the default setting. true/false
// Default: $_CONFIG['mobile_default'] = false;
//
$_CONFIG['mobile_default'] = false;

/*
 * USER INTERFACE
 */

//
// Will the files be opened in a new window? true/false
// Default: $_CONFIG['open_in_new_window'] = false;
//
$_CONFIG['open_in_new_window'] = false;

//
// When clicking on files, will the files be downloaded rather than opened? true/false
// Default: $_CONFIG['force_download'] = false;
//
$_CONFIG['force_download'] = false;

//
// How deep in subfolders will the script search for files?
// Set it larger than 0 to display the total used space.
// Default: $_CONFIG['calculate_space_level'] = 0;
//
$_CONFIG['calculate_space_level'] = 0;

//
// Will the page header be displayed? 0=no, 1=yes.
// Default: $_CONFIG['show_top'] = true;
//
$_CONFIG['show_top'] = true;

//
// The title for the page
// Default: $_CONFIG['main_title'] = "Encode Explorer";
//
$_CONFIG['main_title'] = "Encode Explorer";

//
// The secondary page titles, randomly selected and displayed under the main header.
// For example: $_CONFIG['secondary_titles'] = array("Secondary title", "&ldquo;Secondary title with quotes&rdquo;");
// Default: $_CONFIG['secondary_titles'] = array();
//
$_CONFIG['secondary_titles'] = array();

//
// Display breadcrumbs (relative path of the location).
// Default: $_CONFIG['show_path'] = true;
//
$_CONFIG['show_path'] = true;

//
// Display the time it took to load the page.
// Default: $_CONFIG['show_load_time'] = true;
//
$_CONFIG['show_load_time'] = true;

//
// The time format for the "last changed" column.
// Default: $_CONFIG['time_format'] = "d.m.y H:i:s";
//
$_CONFIG['time_format'] = "d.m.y H:i:s";

//
// Charset. Use the one that suits for you.
// Default: $_CONFIG['charset'] = "UTF-8";
//
$_CONFIG['charset'] = "UTF-8";

/*
* PERMISSIONS
*/

//
// The array of folder names that will be hidden from the list.
// Default: $_CONFIG['hidden_dirs'] = array();
//
$_CONFIG['hidden_dirs'] = array();

//
// Filenames that will be hidden from the list.
// Default: $_CONFIG['hidden_files'] = array(".ftpquota", "index.php", "index.php~", ".htaccess", ".htpasswd");
//
$_CONFIG['hidden_files'] = array(".ftpquota", "index.php", "index.php~", ".htaccess", ".htpasswd");

//
// Whether authentication is required to see the contents of the page.
// If set to false, the page is public.
// If set to true, you should specify some users as well (see below).
// Important: This only prevents people from seeing the list.
// They will still be able to access the files with a direct link.
// Default: $_CONFIG['require_login'] = false;
//
$_CONFIG['require_login'] = false;

//
// Usernames and passwords for restricting access to the page.
// The format is: array(username, password, status)
// Status can be either "user" or "admin". User can read the page, admin can upload and delete.
// For example: $_CONFIG['users'] = array(array("username1", "password1", "user"), array("username2", "password2", "admin"));
// You can also keep require_login=false and specify an admin.
// That way everyone can see the page but username and password are needed for uploading.
// For example: $_CONFIG['users'] = array(array("admin", "123456", "admin"));
// Default: $_CONFIG['users'] = array();
//
$_CONFIG['users'] = array();

//
// Permissions for uploading, creating new directories and deleting.
// They only apply to admin accounts, regular users can never perform these operations.
// Default:
// $_CONFIG['upload_enable'] = true;
// $_CONFIG['newdir_enable'] = true;
// $_CONFIG['delete_enable'] = false;
//
$_CONFIG['upload_enable'] = true;
$_CONFIG['newdir_enable'] = true;
$_CONFIG['delete_enable'] = false;

/*
 * UPLOADING
 */

//
// List of directories where users are allowed to upload.
// For example: $_CONFIG['upload_dirs'] = array("./myuploaddir1/", "./mydir/upload2/");
// The path should be relative to the main directory, start with "./" and end with "/".
// All the directories below the marked ones are automatically included as well.
// If the list is empty (default), all directories are open for uploads, given that the password has been set.
// Default: $_CONFIG['upload_dirs'] = array();
//
$_CONFIG['upload_dirs'] = array();

//
// MIME type that are allowed to be uploaded.
// For example, to only allow uploading of common image types, you could use:
// $_CONFIG['upload_allow_type'] = array("image/png", "image/gif", "image/jpeg");
// Default: $_CONFIG['upload_allow_type'] = array();
//
$_CONFIG['upload_allow_type'] = array();

//
// File extensions that are not allowed for uploading.
// For example: $_CONFIG['upload_reject_extension'] = array("php", "html", "htm");
// Default: $_CONFIG['upload_reject_extension'] = array("php", "php2", "php3", "php4", "php5", "phtml");
//
$_CONFIG['upload_reject_extension'] = array("php", "php2", "php3", "php4", "php5", "phtml");

//
// By default, apply 0755 permissions to new directories
//
// The mode parameter consists of three octal number components specifying
// access restrictions for the owner, the user group in which the owner is
// in, and to everybody else in this order.
//
// See: https://php.net/manual/en/function.chmod.php
//
// Default: $_CONFIG['new_dir_mode'] = 0755;
//
$_CONFIG['new_dir_mode'] = 0755;

//
// By default, apply 0644 permissions to uploaded files
//
// The mode parameter consists of three octal number components specifying
// access restrictions for the owner, the user group in which the owner is
// in, and to everybody else in this order.
//
// See: https://php.net/manual/en/function.chmod.php
//
// Default: $_CONFIG['upload_file_mode'] = 0644;
//
$_CONFIG['upload_file_mode'] = 0644;

/*
 * LOGGING
 */

//
// Upload notification e-mail.
// If set, an e-mail will be sent every time someone uploads a file or creates a new dirctory.
// Default: $_CONFIG['upload_email'] = "";
//
$_CONFIG['upload_email'] = "";

//
// Logfile name. If set, a log line will be written there whenever a directory or file is accessed.
// For example: $_CONFIG['log_file'] = ".log.txt";
// Default: $_CONFIG['log_file'] = "";
//
$_CONFIG['log_file'] = "";

/*
 * SYSTEM
 */

//
// The starting directory. Normally no need to change this.
// Use only relative subdirectories!
// For example: $_CONFIG['starting_dir'] = "./mysubdir/";
// Default: $_CONFIG['starting_dir'] = ".";
//
$_CONFIG['starting_dir'] = ".";

//
// Location in the server. Usually this does not have to be set manually.
// Default: $_CONFIG['basedir'] = "";
//
$_CONFIG['basedir'] = "";

//
// Big files. If you have some very big files (>4GB), enable this for correct
// file size calculation.
// Default: $_CONFIG['large_files'] = false;
//
$_CONFIG['large_files'] = false;

//
// The session name, which is used as a cookie name.
// Change this to something original if you have multiple copies in the same space
// and wish to keep their authentication separate.
// The value can contain only letters and numbers. For example: MYSESSION1
// More info at: http://www.php.net/manual/en/function.session-name.php
// Default: $_CONFIG['session_name'] = "";
//
$_CONFIG['session_name'] = "";

/***************************************************************************/
/* TRANSLATIONS.                                                         */
/***************************************************************************/

$_TRANSLATIONS = array();

// Albanian
$_TRANSLATIONS["al"] = array(
	"file_name" => "Emri Skedarit", "size" => "Madhësia", "last_changed" => "Ndryshuar", "total_used_space" => "Memorija e përdorur total", "free_space" => "Memorija e lirë", "password" => "Fjalëkalimi", "upload" => "Ngarko skedarë", "failed_upload" => "Ngarkimi i skedarit dështoi!", "failed_move" => "Lëvizja e skedarit në udhëzuesin e saktë deshtoi!", "wrong_password" => "Fjalëkalimi i Gabuar!!", "make_directory" => "New dir", "new_dir_failed" => "Failed to create directory", "chmod_dir_failed" => "Failed to change directory rights", "unable_to_read_dir" => "Unable to read directory", "location" => "Location", "root" => "Root", "customized_by" => "Customized by"
);

// Bulgarian
$_TRANSLATIONS["bg"] = array(
	"file_name" => "Име", "size" => "Размер", "last_changed" => "Последна промяна", "total_used_space" => "Общо използвано", "free_space" => "Свободно място", "password" => "Парола", "upload" => "Качване", "failed_upload" => "Неуспешно качване на файла!", "failed_move" => "Неуспешно преместване на файла в правилната директория!", "wrong_password" => "Грешна парола", "make_directory" => "Нова директория", "new_dir_failed" => "Грешка при създаване на директорията", "chmod_dir_failed" => "Грешка при смяна правата до директорията", "unable_to_read_dir" => "Директорията не може да бъде прочетена", "location" => "Път", "root" => "Корен", "log_file_permission_error" => "Скриптът няма права за запис в лог файла.", "upload_not_allowed" => "Настройките на скрипта не позволяват качване в тази директория.", "upload_dir_not_writable" => "Нямате право за запис в тази директория.", "mobile_version" => "Мобилна версия", "standard_version" => "Стандартен изглед", "page_load_time" => "Страницата е генерирана за %.2f мс", "wrong_pass" => "Грешен потребител или парола", "username" => "Потребител", "log_in" => "Вход", "upload_type_not_allowed" => "Този файлов формат е забранен за качване.", "del" => "Изтриване", "log_out" => "Изход", "customized_by" => "Customized by"
);

//Catalan
$_TRANSLATIONS["ca"] = array(
	"file_name" => "Nom d'arxiu", "size" => "Mida", "last_changed" => "Última modificació", "total_used_space" => "Total espai emprat", "free_space" => "Espai lliure", "password" => "Paraula de pass", "upload" => "Pujar arxiu", "failed_upload" => "Error al pujar l'arxiu!", "failed_move" => "Error al moure l'arxiu al directori seleccionat!", "wrong_password" => "Paraula de pas incorrecta", "make_directory" => "Crear directori", "new_dir_failed" => "Error al crear el directori", "chmod_dir_failed" => "Error al canviar els permisos del directori", "unable_to_read_dir" => "No es possible llegir el directori", "location" => "Traducció", "root" => "Arrel", "customized_by" => "Customized by"
);

// Czech
$_TRANSLATIONS["cz"] = array(
	"file_name" => "Název souboru", "size" => "Velikost", "last_changed" => "Změněno", "total_used_space" => "Obsazený prostor", "free_space" => "Volný prostor", "password" => "Heslo", "upload" => "Nahrát", "failed_upload" => "Nahrávání se nezdařilo!", "failed_move" => "Přesun souboru do určeného adresáře se nezdařil!", "wrong_password" => "Chybné heslo", "make_directory" => "Nový adresář", "new_dir_failed" => "Vytvoření adresáře se nezdařilo", "chmod_dir_failed" => "Změna práv adresáře se nezdařila", "unable_to_read_dir" => "Chyba při čtení adresáře", "location" => "Umístění", "root" => "Kořenový adresář", "log_file_permission_error" => "Skript nemá oprávnění k zápisu do souboru protokolu.", "upload_not_allowed" => "Konfigurační skript neumožňuje nahrávání v tomto adresáři.", "upload_dir_not_writable" => "Tento adresář nemá oprávnění k zápisu.", "mobile_version" => "Zobrazení pro mobil", "standard_version" => "Standardní zobrazení", "page_load_time" => "Stránka nahrána za %.2f ms", "wrong_pass" => "Špatné uživatelské jméno nebo heslo", "username" => "Uživatelské jméno", "log_in" => "Přihlásit se", "upload_type_not_allowed" => "Tento typ souboru není povolen pro nahrávání.", "del" => "Smazat", "log_out" => "Odhlásit se", "customized_by" => "Customized by"
);

// Dutch
$_TRANSLATIONS["nl"] = array(
	"file_name" => "Bestandsnaam", "size" => "Omvang", "last_changed" => "Laatst gewijzigd", "total_used_space" => "Totaal gebruikte ruimte", "free_space" => "Beschikbaar", "password" => "Wachtwoord", "upload" => "Upload", "failed_upload" => "Fout bij uploaden van bestand!", "failed_move" => "Fout bij het verplaatsen van tijdelijk uploadbestand!", "wrong_password" => "Fout wachtwoord!", "make_directory" => "Nieuwe folder", "new_dir_failed" => "Fout bij aanmaken folder!", "chmod_dir_failed" => "Rechten konden niet gewijzigd worden!", "unable_to_read_dir" => "Niet mogelijk om directorie te lezen", "location" => "Locatie", "root" => "Root", "log_file_permission_error" => "Script heeft geen toegang tot het logbestand.", "upload_not_allowed" => "Uploaden van bestanden is niet toegestaan.", "upload_dir_not_writable" => "Het is niet toegestaan in deze directorie bestanden te plaatsen.", "mobile_version" => "Mobiele weergave", "standard_version" => "Standaard weergave", "page_load_time" => "Pagina geladen in %.2f ms", "wrong_pass" => "Foutieve gebruikersnaam of wachtwoord", "username" => "Gebruikersnaam", "log_in" => "Inloggen", "upload_type_not_allowed" => "Dit type bestand is niet toegestaan.", "del" => "Verwijder", "log_out" => "Uitloggen", "customized_by" => "Customized by"
);

// English
$_TRANSLATIONS["en"] = array(
	"file_name" => "File name", "size" => "Size", "last_changed" => "Last updated", "total_used_space" => "Total space used", "free_space" => "Free space", "password" => "Password", "upload" => "Upload", "failed_upload" => "Failed to upload the file!", "failed_move" => "Failed to move the file into the right directory!", "wrong_password" => "Wrong password", "make_directory" => "New directory", "new_dir_failed" => "Failed to create directory", "chmod_dir_failed" => "Failed to change directory rights", "unable_to_read_dir" => "Unable to read directory", "location" => "Location", "root" => "Root", "log_file_permission_error" => "The script does not have permissions to write the log file.", "upload_not_allowed" => "The script configuration does not allow uploading in this directory.", "upload_dir_not_writable" => "This directory does not have write permissions.", "mobile_version" => "Mobile view", "standard_version" => "Standard view", "page_load_time" => "Page loaded in %.2f ms", "wrong_pass" => "Wrong username or password", "username" => "Username", "log_in" => "Log in", "upload_type_not_allowed" => "This file type is not allowed for uploading.", "del" => "Delete", "log_out" => "Log out", "customized_by" => "Customized by"
);

// Estonian
$_TRANSLATIONS["et"] = array(
	"file_name" => "Faili nimi", "size" => "Suurus", "last_changed" => "Viimati muudetud", "total_used_space" => "Kokku kasutatud", "free_space" => "Vaba ruumi", "password" => "Parool", "upload" => "Uploadi", "failed_upload" => "Faili ei &otilde;nnestunud serverisse laadida!", "failed_move" => "Faili ei &otilde;nnestunud &otilde;igesse kausta liigutada!", "wrong_password" => "Vale parool", "make_directory" => "Uus kaust", "new_dir_failed" => "Kausta loomine ebaõnnestus", "chmod_dir_failed" => "Kausta õiguste muutmine ebaõnnestus", "unable_to_read_dir" => "Unable to read directory", "location" => "Asukoht", "root" => "Peakaust", "customized_by" => "Customized by"
);

// Finnish
$_TRANSLATIONS["fi"] = array(
	"file_name" => "Tiedoston nimi", "size" => "Koko", "last_changed" => "Muokattu", "total_used_space" => "Yhteenlaskettu koko", "free_space" => "Vapaa tila", "password" => "Salasana", "upload" => "Lisää tiedosto", "failed_upload" => "Tiedoston lisäys epäonnistui!", "failed_move" => "Tiedoston siirto kansioon epäonnistui!", "wrong_password" => "Väärä salasana", "make_directory" => "Uusi kansio", "new_dir_failed" => "Uuden kansion luonti epäonnistui!", "chmod_dir_failed" => "Kansion käyttäjäoikeuksien muuttaminen epäonnistui!", "unable_to_read_dir" => "Kansion sisältöä ei voi lukea.", "location" => "Paikka", "root" => "Juurihakemisto", "log_file_permission_error" => "Ohjelman ei ole sallittu kirjoittaa lokiin.", "upload_not_allowed" => "Ohjelman asetukset eivät salli tiedoston lisäämistä tähän kansioon.", "upload_dir_not_writable" => "Kansioon tallentaminen epäonnistui.", "mobile_version" => "Mobiilinäkymä", "standard_version" => "Tavallinen näkymä", "page_load_time" => "Sivu ladattu %.2f ms:ssa", "wrong_pass" => "Väärä käyttäjätunnus tai salasana", "username" => "Käyttäjätunnus", "log_in" => "Kirjaudu sisään", "log_out" => "Kirjaudu ulos", "upload_type_not_allowed" => "Tämän tiedostotyypin lisääminen on estetty.", "del" => "Poista", "customized_by" => "Customized by"
);

// French
$_TRANSLATIONS["fr"] = array(
	"file_name" => "Nom de fichier", "size" => "Taille", "last_changed" => "Modifi&eacute; le", "total_used_space" => "Espace total utilis&eacute;", "free_space" => "Espace libre", "password" => "Mot de passe", "upload" => "Ajouter", "failed_upload" => "Erreur lors de l'envoi", "failed_move" => "Erreur lors du d&eacute;placement", "wrong_password" => "Identifiant ou mot de passe incorrect", "make_directory" => "Nouveau dossier", "new_dir_failed" => "Erreur lors de la cr&eacute;ation du dossier", "chmod_dir_failed" => "Impossible de changer les permissions du dossier", "unable_to_read_dir" => "Impossible de lire le dossier", "location" => "Localisation", "root" => "Racine", "log_file_permission_error" => "Le script n'a pas la permission d'&eacute;crire dans le fichier de logs.", "upload_not_allowed" => "La configuration du script ne permet pas d'ajouter un fichier ici.", "upload_dir_not_writable" => "Ce dossier ne possède pas de permission en &eacute;criture.", "mobile_version" => "Version mobile", "standard_version" => "Version standard", "page_load_time" => "Page chargée en %.2f ms", "wrong_pass" => "Identifiant ou mot de passe incorrect", "username" => "Identifiant", "log_in" => "Connexion", "upload_type_not_allowed" => "L'envoi de ce type de fichier n'est pas permis.", "del" => "Supprimer", "log_out" => "D&eacute;connexion", "customized_by" => "Customized by"
);

// German
$_TRANSLATIONS["de"] = array(
	"file_name" => "Dateiname", "size" => "Gr&ouml;&szlig;e", "last_changed" => "Letzte &Auml;nderung", "total_used_space" => "Benutzter Speicherplatz", "free_space" => "Freier Speicherplatz", "password" => "Passwort", "upload" => "Upload", "failed_upload" => "Upload ist fehlgeschlagen!", "failed_move" => "Verschieben der Datei ist fehlgeschlagen!", "wrong_password" => "Falsches Passwort", "make_directory" => "Neuer Ordner", "new_dir_failed" => "Erstellen des Ordners fehlgeschlagen", "chmod_dir_failed" => "Ver&auml;nderung der Zugriffsrechte des Ordners fehlgeschlagen", "unable_to_read_dir" => "Ordner konnte nicht gelesen werden", "location" => "Ort", "root" => "Wurzelverzeichnis", "log_file_permission_error" => "Das Script kann wegen fehlenden Berechtigungen keine Log Datei schreiben.", "upload_not_allowed" => "Die Scriptkonfiguration erlaubt kein Hochladen in dieses Verzeichnis.", "upload_dir_not_writable" => "Dieser Ordner besitzt keine Schreibrechte.", "mobile_version" => "Mobile Ansicht", "standard_version" => "Normale Ansicht", "page_load_time" => "Die Seite wurde in %.2f ms geladen", "wrong_pass" => "Benutzername oder Kennwort falsch", "username" => "Benutzername", "log_in" => "Einloggen", "upload_type_not_allowed" => "Dieser Dateityp darf nicht hochgeladen werden.", "del" => "Entfernen", "log_out" => "Ausloggen", "customized_by" => "Customized by"
);

// Greek
$_TRANSLATIONS["el"] = array(
	"file_name" => "Όνομα αρχείου", "size" => "Μέγεθος", "last_changed" => "Τελευταία τροποποίηση", "total_used_space" => "Χρησιμοποιημένος χώρος", "free_space" => "Ελεύθερος χώρος", "password" => "Κωδικός", "upload" => "Φόρτωση", "failed_upload" => "Αποτυχία φόρτωσης αρχείου!", "failed_move" => "Αποτυχία μεταφοράς αρχείου στον κατάλληλο φάκελο!", "wrong_password" => "Λάθος κωδικός", "make_directory" => "Νέος Φάκελος", "new_dir_failed" => "Αποτυχία δημιουργίας φακέλου", "chmod_dir_failed" => "Αποτυχία τροποποίησης δικαιωμάτων φακέλου", "unable_to_read_dir" => "Αδυναμία ανάγνωσης φακέλου", "location" => "Τοποθεσία", "root" => "Ριζικός φάκελος", "log_file_permission_error" => "Το πρόγραμμα δεν έχει δικαιώματα εγγραφής στο αρχείο καταγραφής.", "upload_not_allowed" => "Οι ρυθμίσεις του προγράμματος δεν επιτρέπουν φόρτωση αρχείων σε αυτό τον φάκελο.", "upload_dir_not_writable" => "Αυτός ο φάκελος δεν έχει δικαιώματα για εγγραφή.", "mobile_version" => "Φορητή προβολή", "standard_version" => "Τυπική προβολή", "page_load_time" => "Η σελίδα φορτώθηκε σε %.2f ms", "wrong_pass" => "Λάθος όνομα χρήστη ή κωδικός πρόσβασης", "username" => "Όνομα χρήστη", "log_in" => "Σύνδεση", "upload_type_not_allowed" => "Αυτός ο τύπος αρχείου δεν επιτρέπεται να φορτωθεί.", "del" => "Διαγραφή", "log_out" => "Αποσύνδεση", "customized_by" => "Customized by"
);

// Spanish
$_TRANSLATIONS["es"] = array(
	"file_name" => "Nombre del archivo", "size" => "Tamaño", "last_changed" => "Último cambio", "total_used_space" => "Espacio total usado", "free_space" => "Espacio libre", "password" => "Contraseña", "upload" => "Subir el archivo", "failed_upload" => "¡Error al subir el archivo!", "failed_move" => "¡Error al mover el archivo al directorio seleccionado!", "wrong_password" => "Contraseña incorrecta", "make_directory" => "Crear directorio", "new_dir_failed" => "Error al crear el directorio", "chmod_dir_failed" => "Error al cambiar los permisos del directorio", "unable_to_read_dir" => "No es posible leer el directorio", "location" => "Localización", "root" => "Raíz", "log_file_permission_error" => "El script no tiene permisos para escribir en el archivo de registro.", "upload_not_allowed" => "La configuración del script no permite subir archivos en este directorio.", "upload_dir_not_writable" => "Este directorio no tiene permisos de escritura.", "mobile_version" => "Vista móvil", "standard_version" => "Vista estándar", "page_load_time" => "Página cargada en %.2f ms", "wrong_pass" => "Nombre de usuario o contraseña incorrectos", "username" => "Usuario", "log_in" => "Iniciar sesión", "upload_type_not_allowed" => "Este tipo de archivo no está permitido para la subida.", "del" => "Eliminar", "log_out" => "Cerrar sesión", "customized_by" => "Customized by"
);

// Esperanto
$_TRANSLATIONS["eo"] = array(
	"file_name" => "Dosiernomo", "size" => "Grando", "last_changed" => "Lasta ŝanĝo", "total_used_space" => "Uzata spaco", "free_space" => "Disponebla spaco", "password" => "pasvorto", "upload" => "Alŝuto", "failed_upload" => "Alŝuto malsukcesis!", "failed_move" => "Movo de la dosiero malsukcesis!", "wrong_password" => "Malĝusta pasvorto", "make_directory" => "Nova dosierujo", "new_dir_failed" => "Kreado de dosierujo malsukcesis", "chmod_dir_failed" => "Ŝanĝo de dosierujaj rajtoj malsukcesis", "unable_to_read_dir" => "Dosierujo ne estas legebla", "location" => "Loko", "root" => "Radiko", "log_file_permission_error" => "La skripto ne rajtas skribi la protokolan dosieron.", "upload_not_allowed" => "La skripto malpermesas alŝuti en ĉi tiun dosierujon.", "upload_dir_not_writable" => "Ĉi tiu dosierujo ne rajtigas skribadon.", "mobile_version" => "Vido por mobilaj iloj", "standard_version" => "Defaŭlta vido", "page_load_time" => "Paĝo ŝarĝita en %.2f ms", "wrong_pass" => "Malĝusta salutnomo aŭ pasvorto", "username" => "Salutnomo", "log_in" => "Ensaluto", "upload_type_not_allowed" => "Alŝuto estas malpermesita por ĉi tiu dosiertipo.", "del" => "For", "log_out" => "Adiaŭo", "customized_by" => "Customized by"
);

// Hungarian
$_TRANSLATIONS["hu"] = array(
	"file_name" => "Fájl név", "size" => "Méret", "last_changed" => "Utolsó módosítás", "total_used_space" => "Összes elfoglalt terület", "free_space" => "Szabad terület", "password" => "Jelszó", "upload" => "Feltöltés", "failed_upload" => "A fájl feltöltése nem sikerült!", "failed_move" => "A fájl mozgatása nem sikerült!", "wrong_password" => "Hibás jelszó", "make_directory" => "Új mappa", "new_dir_failed" => "A mappa létrehozása nem sikerült", "chmod_dir_failed" => "A mappa jogainak megváltoztatása nem sikerült", "unable_to_read_dir" => "A mappa nem olvasható", "location" => "Hely", "root" => "Gyökér", "log_file_permission_error" => "A log fájl írása jogosultsági okok miatt nem sikerült.", "upload_not_allowed" => "Ebbe a mappába a feltöltés nem engedélyezett.", "upload_dir_not_writable" => "A mappa nem írható.", "mobile_version" => "Mobil nézet", "standard_version" => "Web nézet", "page_load_time" => "Letöltési id? %.2f ms", "wrong_pass" => "Rossz felhasználónév vagy jelszó", "username" => "Felhasználónév", "log_in" => "Belépés", "upload_type_not_allowed" => "A fájltípus feltöltése tiltott.", "customized_by" => "Customized by"
);

// Italian
$_TRANSLATIONS["it"] = array(
	"file_name" => "Nome file", "size" => "Dimensione", "last_changed" => "Ultima modifica", "total_used_space" => "Totale spazio usato", "free_space" => "Spazio disponibile", "password" => "Parola chiave", "upload" => "Caricamento file", "failed_upload" => "Caricamento del file fallito!", "failed_move" => "Spostamento del file nella cartella fallito!", "wrong_password" => "Password sbagliata", "make_directory" => "Nuova cartella", "new_dir_failed" => "Creazione cartella fallita!", "chmod_dir_failed" => "Modifica dei permessi della cartella fallita!", "unable_to_read_dir" => "Non abilitato a leggere la cartella", "location" => "Posizione", "root" => "Indice", "log_file_permission_error" => "Lo script non ha i permessi per scrivere il file di log.", "upload_not_allowed" => "La configurazione dello script non permette l'upload in questa cartella.", "upload_dir_not_writable" => "Questa cartella non ha i permessi di scrittura.", "mobile_version" => "Visualizzazione Mobile", "standard_version" => "Visualizzazione Standard", "page_load_time" => "Page aperta in %.2f min", "wrong_pass" => "Username o password errati", "username" => "Username", "log_in" => "Log in", "upload_type_not_allowed" => "Questo formato di file non è abilitato per l'upload.", "del" => "Cancella", "log_out" => "Esci", "customized_by" => "Customized by"
);

// Korean
$_TRANSLATIONS["ko"] = array(
	"file_name" => "이름", "size" => "크기", "last_changed" => "마지막 수정", "total_used_space" => "사용한 공간", "free_space" => "남은 공간", "password" => "비밀번호", "upload" => "올리기", "failed_upload" => "파일을 올릴 수 없습니다.", "failed_move" => "파일을 옮길 수 없습니다.", "wrong_password" => "비밀번호가 올바르지 않습니다.", "make_directory" => "만들기", "new_dir_failed" => "폴더를 만들 수 없습니다.", "chmod_dir_failed" => "권한 설정을 할 수 없습니다.", "unable_to_read_dir" => "폴더를 읽을 수 없습니다.", "location" => "위치", "root" => "최상위 폴더", "log_file_permission_error" => "로그 파일의 위치에 쓰기 권한을 가지고 있지 않습니다.", "upload_not_allowed" => "이 위치에 올릴 수 없습니다.", "upload_dir_not_writable" => "이 위치에 쓰기 권한을 가지고 있지 않습니다.", "mobile_version" => "모바일 버전으로 보기", "standard_version" => "표준 화면으로 보기", "page_load_time" => "페이지 로드 %.2f ms", "wrong_pass" => "사용자 이름 또는 비밀번호가 올바르지 않습니다.", "username" => "사용자 이름", "log_in" => "로그인", "upload_type_not_allowed" => "이 종류의 파일은 올릴 수 없습니다.", "del" => "삭제", "log_out" => "로그아웃", "customized_by" => "Customized by"
); 

// Lithuanian
$_TRANSLATIONS["lt"] = array(
	"file_name" => "Pavadinimas", "size" => "Dydis", "last_changed" => "Paskutiniai pakeitimai", "total_used_space" => "Visa naudojama vieta", "free_space" => "Laisva vieta", "password" => "Slaptažodis", "upload" => "Įkelti", "failed_upload" => "Įkėlimas nepavyko", "failed_move" => "Failo perkėlimas nepavyko", "wrong_password" => "Klaidingas slaptažodis", "make_directory" => "Kurti aplanką", "new_dir_failed" => "Aplanko sukurti nepavyko", "chmod_dir_failed" => "Privilegijų keitimas nepavyko", "unable_to_read_dir" => "Nepavyko atverti aplanko", "location" => "Vieta", "root" => "Šakninis", "log_file_permission_error" => "Šis skriptas neturi teisių rašyti log failo.", "upload_not_allowed" => "Šis skriptas neleidžia failų įklimo į šį aplanką.", "upload_dir_not_writable" => "Neturite teisių rašyti į šį aplanką.", "mobile_version" => "Versija mobiliesiems", "standard_version" => "Paprasta versija", "page_load_time" => "Puslapis įkeltas per %.2f ms", "wrong_pass" => "Klaidingas vartotojo vardas ar slaptažodis", "username" => "Vartotojo vardas", "log_in" => "Prisijungti", "upload_type_not_allowed" => "Šio tipo failų įkelti negalima.", "del" => "Trinti", "log_out" => "Atsijungti", "customized_by" => "Customized by"
);

// Norwegian
$_TRANSLATIONS["no"] = array(
	"file_name" => "Navn", "size" => "Størrelse", "last_changed" => "Endret", "total_used_space" => "Brukt plass", "free_space" => "Resterende plass", "password" => "Passord", "upload" => "Last opp", "failed_upload" => "Opplasting gikk galt", "failed_move" => "Kunne ikke flytte objektet", "wrong_password" => "Feil passord", "make_directory" => "Ny mappe", "new_dir_failed" => "Kunne ikke lage ny mappe", "chmod_dir_failed" => "Kunne ikke endre rettigheter", "unable_to_read_dir" => "Kunne ikke lese mappen", "location" => "Område", "root" => "Rot", "customized_by" => "Customized by"
);

//Polish
$_TRANSLATIONS["pl"] = array(
	"file_name" => "Nazwa pliku", "size" => "Rozmiar", "last_changed" => "Data zmiany", "total_used_space" => "Cała przestrzeń", "free_space" => "Wolna przestrzeń", "password" => "Hasło", "upload" => "Prześlij", "failed_upload" => "Przesłanie pliku nie powiodło się", "failed_move" => "Przenoszenie pliku nie powiodło się!", "wrong_password" => "Niepoprawne hasło", "make_directory" => "Nowy folder", "new_dir_failed" => "Błąd podczas tworzenia nowego folderu", "chmod_dir_failed" => "Błąd podczas zmiany uprawnień folderu", "unable_to_read_dir" => "Odczytanie folderu nie powiodło się", "location" => "Miejsce", "root" => "Start", "log_file_permission_error" => "Brak uprawnień aby utworzyć dziennik działań.", "upload_not_allowed" => "Konfiguracja zabrania przesłania pliku do tego folderu.", "upload_dir_not_writable" => "Nie można zapisać pliku do tego folderu.", "mobile_version" => "Wersja mobilna", "standard_version" => "Widok standardowy", "page_load_time" => "Załadowano w %.2f ms", "wrong_pass" => "Niepoprawna nazwa użytkownika lub złe hasło", "username" => "Użytkownik", "log_in" => "Zaloguj się", "upload_type_not_allowed" => "Ten rodzaj pliku jest zabroniony.", "del" => "Kasuj", "log_out" => "Wyloguj się", "customized_by" => "Customized by"
);

// Portuguese (Brazil)
$_TRANSLATIONS["pt_BR"] = array(
	"file_name" => "Nome do arquivo", "size" => "Tamanho", "last_changed" => "Modificado em", "total_used_space" => "Total de espaço utilizado", "free_space" => "Espaço livre", "password" => "Senha", "upload" => "Enviar", "failed_upload" => "Falha ao enviar o arquivo!", "failed_move" => "Falha ao mover o arquivo para o diretório correto!", "wrong_password" => "Senha errada", "make_directory" => "Nova pasta", "new_dir_failed" => "Falha ao criar diretório", "chmod_dir_failed" => "Falha ao mudar os privilégios do diretório", "unable_to_read_dir" => "Não foi possível ler o diretório", "location" => "Localização", "root" => "Raíz", "log_file_permission_error" => "O script não tem permissão para escrever o arquivo de log.", "upload_not_allowed" => "A configuração do script não permite envios neste diretório.", "upload_dir_not_writable" => "Não há permissão para escrita neste diretório.", "mobile_version" => "Versão Móvel", "standard_version" => "Versão Padrão", "page_load_time" => "Página carregada em %.2f ms", "wrong_pass" => "Nome de usuário ou senha errados", "username" => "Nome de Usuário", "log_in" => "Log in", "upload_type_not_allowed" => "Não é permitido envio de arquivos deste tipo.", "del" => "Deletar", "log_out" => "Log out", "customized_by" => "Customized by"
);

// Portuguese (Portugal)
$_TRANSLATIONS["pt_PT"] = array(
	"file_name" => "Nome do ficheiro", "size" => "Tamanho", "last_changed" => "Modificado em", "total_used_space" => "Total de espaço utilizado", "free_space" => "Espaço livre", "password" => "Palavra-passe", "upload" => "Enviar", "failed_upload" => "Falha ao enviar o ficheiro!", "failed_move" => "Falha ao mover o ficheiro para a pasta correcta!", "wrong_password" => "Palavra-passe errada", "make_directory" => "Nova pasta", "new_dir_failed" => "Falha ao criar pasta", "chmod_dir_failed" => "Falha ao mudar os privilégios da pasta", "unable_to_read_dir" => "Não foi possível ler a pasta", "location" => "Localização", "root" => "Raíz", "log_file_permission_error" => "O script não tem permissão para escrever o ficheiro de log.", "upload_not_allowed" => "A configuração do script não permite envios para esta pasta.", "upload_dir_not_writable" => "Não há permissão para escrita nesta pasta.", "mobile_version" => "Versão Móvel", "standard_version" => "Versão Padrão", "page_load_time" => "Página carregada em %.2f ms", "wrong_pass" => "Nome de utilizador ou palavra-passe incorrectos", "username" => "Nome de utilizador", "log_in" => "Entrar", "upload_type_not_allowed" => "Não é permitido o envio de ficheiros deste tipo.", "del" => "Apagar", "log_out" => "Sair", "customized_by" => "Customized by"
);

// Romanian
$_TRANSLATIONS["ro"] = array(
	"file_name" => "Nume fisier", "size" => "Marime", "last_changed" => "Ultima modificare", "total_used_space" => "Spatiu total utilizat", "free_space" => "Spatiu disponibil", "password" => "Parola", "upload" => "Incarcare fisier", "failed_upload" => "Incarcarea fisierului a esuat!", "failed_move" => "Mutarea fisierului in alt director a esuat!", "wrong_password" => "Parol gresita!", "make_directory" => "Director nou", "new_dir_failed" => "Eroare la crearea directorului", "chmod_dir_failed" => "Eroare la modificarea drepturilor pe director", "unable_to_read_dir" => "Nu s-a putut citi directorul", "location" => "Locatie", "root" => "Root", "customized_by" => "Customized by"
);

// Russian
$_TRANSLATIONS["ru"] = array(
	"file_name" => "Имя файла", "size" => "Размер", "last_changed" => "Последнее изменение", "total_used_space" => "Всего использовано", "free_space" => "Свободно", "password" => "Пароль", "upload" => "Загрузка", "failed_upload" => "Не удалось загрузить файл!", "failed_move" => "Не удалось переместить файл в нужную папку!", "wrong_password" => "Неверный пароль", "make_directory" => "Новая папка", "new_dir_failed" => "Не удалось создать папку", "chmod_dir_failed" => "Не удалось изменить права доступа к папке", "unable_to_read_dir" => "Не возможно прочитать папку", "location" => "Расположение", "root" => "Корневая папка", "log_file_permission_error" => "Скрипт не имеет прав для записи лога файла.", "upload_not_allowed" => "Загрузка в эту папку запрещена в настройках скрипта", "upload_dir_not_writable" => "В эту папку запрещена запись", "mobile_version" => "Мобильный вид", "standard_version" => "Обычный вид", "page_load_time" => "Страница загружена за %.2f мс.", "wrong_pass" => "Неверное имя пользователя или пароль", "username" => "Имя пользователя", "log_in" => "Войти", "upload_type_not_allowed" => "Этот тип файла запрещено загружать", "del" => "удалить", "log_out" => "выйти", "customized_by" => "Customized by"
);

// Slovensky
$_TRANSLATIONS["sk"] = array(
	"file_name" => "Meno súboru", "size" => "Veľkosť", "last_changed" => "Posledná zmena", "total_used_space" => "Použité miesto celkom", "free_space" => "Voľné miesto", "password" => "Heslo", "upload" => "Nahranie súborov", "failed_upload" => "Chyba nahrávania súboru!", "failed_move" => "Nepodarilo sa presunúť súbor do vybraného adresára!", "wrong_password" => "Neplatné heslo!", "make_directory" => "Nový priečinok", "new_dir_failed" => "Nepodarilo sa vytvoriť adresár!", "chmod_dir_failed" => "Nepodarilo sa zmeniť práva adresára!", "unable_to_read_dir" => "Nemôžem čítať adresár", "location" => "Umiestnenie", "root" => "Domov", "customized_by" => "Customized by"
);

// Swedish
$_TRANSLATIONS["sv"] = array(
	"file_name" => "Filnamn", "size" => "Storlek", "last_changed" => "Senast ändrad", "total_used_space" => "Totalt upptaget utrymme", "free_space" => "Ledigt utrymme", "password" => "Lösenord", "upload" => "Ladda upp", "failed_upload" => "Fel vid uppladdning av fil!", "failed_move" => "Fel vid flytt av fil till mapp!", "wrong_password" => "Fel lösenord", "make_directory" => "Ny mapp", "new_dir_failed" => "Fel vid skapande av mapp", "chmod_dir_failed" => "Fel vid ändring av mappens egenskaper", "unable_to_read_dir" => "Kan inte lasa den filen", "location" => "Plats", "root" => "Hem", "log_file_permission_error" => "Scriptet har inte behörighet att skriva till loggfilen.", "upload_not_allowed" => "Skriptets konfiguration tillåter inte uppladdning till denna katalog.", "upload_dir_not_writable" => "Denna katalog har inte behörigheter för att skriva.", "mobile_version" => "Mobilvisning", "standard_version" => "Standardvisning", "page_load_time" => "Sidan laddades på %.2f ms", "wrong_pass" => "Fel användarnamn eller lösenord", "username" => "Användarnamn", "log_in" => "Logga in", "upload_type_not_allowed" => "Denna filtyp är det inte tillåtet att ladda upp.", "del" => "Ta bort", "log_out" => "Logga ut", "customized_by" => "Customized by"
);

// Turkish
$_TRANSLATIONS["tr"] = array(
	"file_name" => "Dosya Adı", "size" => "Boyut", "last_changed" => "Son Değişiklik", "total_used_space" => "Toplam Kullanılan Alan", "free_space" => "Boş Alan", "password" => "Parola", "upload" => "Yükle", "failed_upload" => "Dosya yüklemesi başarısız!", "failed_move" => "Dosyanın doğru klasöre taşınması başarısız!", "wrong_password" => "Hatalı Parola", "make_directory" => "Yeni Klasör", "new_dir_failed" => "Klasör oluşturma başarısız", "chmod_dir_failed" => "Klasör izinleri değiştirme başarısız", "unable_to_read_dir" => "Klasör okunamadı", "location" => "Konum", "root" => "Ana Klasör", "log_file_permission_error" => "Log dosyası oluşturulurken yetersiz izin hatası.", "upload_not_allowed" => "Konfigürasyon bu klasöre dosya yüklemeye izin vermiyor.", "upload_dir_not_writable" => "Bu klasör yazma izinlerine sahip değil.", "mobile_version" => "Mobil Görünüm", "standard_version" => "Standart Görünüm", "page_load_time" => "Sayfa yükleme süresi %.2f ms", "wrong_pass" => "Hatalı kullanıcı adı veya parola", "username" => "Kullanıcı Adı", "log_in" => "Giriş Yap", "upload_type_not_allowed" => "Bu dosya türünün yüklenmesine izin verilmiyor.", "del" => "Sil", "log_out" => "Çıkış Yap", "customized_by" => "Customized by"
);

// 繁體中文(Traditional Chinese)
$_TRANSLATIONS["zh_TW"] = array(
	"file_name" => "檔案名稱", "size" => "大小", "last_changed" => "最後修改", "total_used_space" => "總計使用空間", "free_space" => "剩餘空間", "password" => "密碼", "upload" => "上傳", "failed_upload" => "上傳失敗", "failed_move" => "移動失敗", "wrong_password" => "密碼錯誤", "make_directory" => "建立目錄", "new_dir_failed" => "建立目錄失敗", "chmod_dir_failed" => "修改目錄權限失敗", "unable_to_read_dir" => "無法讀取目錄", "location" => "路徑", "root" => "根目錄", "log_file_permission_error" => "日誌檔案權限錯誤", "upload_not_allowed" => "禁止上傳", "upload_dir_not_writable" => "上傳目錄不可寫入", "mobile_version" => "行動版", "standard_version" => "標準版", "page_load_time" => "頁面載入時間：%.2f ms", "wrong_pass" => "密碼錯誤", "username" => "使用者名稱", "log_in" => "登入", "log_out" => "登出", "upload_type_not_allowed" => "禁止上傳此檔案類型", "del" => "刪除", "customized_by" => "客製化設計："
);

// 日語
$_TRANSLATIONS["jp"] = array(
	"file_name" => "ファイル名", "size" => "サイズ", "last_changed" => "最終更新", "total_used_space" => "使用容量合計", "free_space" => "空き容量", "password" => "パスワード", "upload" => "アップロード", "failed_upload" => "アップロードに失敗しました", "failed_move" => "移動に失敗しました", "wrong_password" => "パスワードが間違っています", "make_directory" => "ディレクトリ作成", "new_dir_failed" => "ディレクトリの作成に失敗しました", "chmod_dir_failed" => "ディレクトリ権限の変更に失敗しました", "unable_to_read_dir" => "ディレクトリを読み込めません", "location" => "パス", "root" => "ルート", "log_file_permission_error" => "ログファイルに書き込む権限がありません", "upload_not_allowed" => "このディレクトリではアップロードが許可されていません", "upload_dir_not_writable" => "このディレクトリには書き込み権限がありません", "mobile_version" => "モバイル表示", "standard_version" => "標準表示", "page_load_time" => "ページ読み込み時間：%.2f ms", "wrong_pass" => "ユーザー名またはパスワードが違います", "username" => "ユーザー名", "log_in" => "ログイン", "upload_type_not_allowed" => "このファイル形式はアップロードできません", "del" => "削除", "log_out" => "ログアウト", "customized_by" => "カスタマイズ："
);

// Tiếng Việt
$_TRANSLATIONS["vn"] = array(
	"file_name" => "Tên tệp", "size" => "Kích thước", "last_changed" => "Cập nhật lần cuối", "total_used_space" => "Tổng dung lượng đã dùng", "free_space" => "Dung lượng trống", "password" => "Mật khẩu", "upload" => "Tải lên", "failed_upload" => "Tải lên thất bại", "failed_move" => "Di chuyển thất bại", "wrong_password" => "Sai mật khẩu", "make_directory" => "Tạo thư mục", "new_dir_failed" => "Tạo thư mục thất bại", "chmod_dir_failed" => "Thay đổi quyền thư mục thất bại", "unable_to_read_dir" => "Không thể đọc thư mục", "location" => "Đường dẫn", "root" => "Thư mục gốc", "log_file_permission_error" => "Lỗi quyền truy cập tệp nhật ký", "upload_not_allowed" => "Không cho phép tải lên", "upload_dir_not_writable" => "Thư mục tải lên không có quyền ghi", "mobile_version" => "Giao diện di động", "standard_version" => "Giao diện tiêu chuẩn", "page_load_time" => "Thời gian tải trang: %.2f ms", "wrong_pass" => "Sai mật khẩu", "username" => "Tên người dùng", "log_in" => "Đăng nhập", "log_out" => "Đăng xuất", "upload_type_not_allowed" => "Không cho phép tải lên loại tệp này", "del" => "Xóa", "customized_by" => "Tùy chỉnh bởi"
);

// 简体中文(Simplified Chinese)
$_TRANSLATIONS["zh_CN"] = array(
	"file_name" => "文件名", "size" => "大小", "last_changed" => "最后修改", "total_used_space" => "总计使用空间", "free_space" => "剩余空间", "password" => "密码", "upload" => "上传", "failed_upload" => "上传失败", "failed_move" => "移动失败", "wrong_password" => "密码错误", "make_directory" => "创建目录", "new_dir_failed" => "创建目录失败", "chmod_dir_failed" => "修改目录权限失败", "unable_to_read_dir" => "无法读取目录", "location" => "路径", "root" => "根目录", "log_file_permission_error" => "日志文件权限错误", "upload_not_allowed" => "禁止上传", "upload_dir_not_writable" => "上传目录不可写", "mobile_version" => "移动版本", "standard_version" => "标准版本", "page_load_time" => "页面载入时间：%.2f ms", "wrong_pass" => "密码错误", "username" => "用户名", "log_in" => "登录", "log_out" => "注销", "upload_type_not_allowed" => "禁止上传该文件类型", "del" => "删除", "customized_by" => "定制："
);


/***************************************************************************/
/* IMAGE CODES IN BASE64                                                 */
/***************************************************************************/

$_IMAGES = array();

$_IMAGES["arrow_down"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAABbSURBVCjPY/jPgB8yDCkFB/7v+r/5/+r/i/7P+N/3DYuC7V93/d//fydQ0Zz/9eexKFgtsejLiv8b/8/8X/WtUBGrGyZLdH6f8r/sW64cTkdWSRS+zpQbgiEJAI4UCqdRg1A6AAAAAElFTkSuQmCC";
$_IMAGES["arrow_up"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAABbSURBVCjPY/jPgB8yDDkFmyVWv14kh1PBeoll31f/n/ytUw6rgtUSi76s+L/x/8z/Vd8KFbEomPt16f/1/1f+X/S/7X/qeSwK+v63/K/6X/g/83/S/5hvQywkAdMGCdCoabZeAAAAAElFTkSuQmCC";
$_IMAGES["del"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJdSURBVDjLpZP7S1NhGMf9W7YfogSJboSEUVCY8zJ31trcps6zTI9bLGJpjp1hmkGNxVz4Q6ildtXKXzJNbJRaRmrXoeWx8tJOTWptnrNryre5YCYuI3rh+8vL+/m8PA/PkwIg5X+y5mJWrxfOUBXm91QZM6UluUmthntHqplxUml2lciF6wrmdHriI0Wx3xw2hAediLwZRWRkCPzdDswaSvGqkGCfq8VEUsEyPF1O8Qu3O7A09RbRvjuIttsRbT6HHzebsDjcB4/JgFFlNv9MnkmsEszodIIY7Oaut2OJcSF68Qx8dgv8tmqEL1gQaaARtp5A+N4NzB0lMXxon/uxbI8gIYjB9HytGYuusfiPIQcN71kjgnW6VeFOkgh3XcHLvAwMSDPohOADdYQJdF1FtLMZPmslvhZJk2ahkgRvq4HHUoWHRDqTEDDl2mDkfheiDgt8pw340/EocuClCuFvboQzb0cwIZgki4KhzlaE2w0InipbVzBfqoK/qRH94i0rgokSFeO11iBkp8EdV8cfJo0yD75aE2ZNRvSJ0lZKcBXLaUYmQrCzDT6tDN5SyRqYlWeDLZAg0H4JQ+Jt6M3atNLE10VSwQsN4Z6r0CBwqzXesHmV+BeoyAUri8EyMfi2FowXS5dhd7doo2DVII0V5BAjigP89GEVAtda8b2ehodU4rNaAW+dGfzlFkyo89GTlcrHYCLpKD+V7yeeHNzLjkp24Uu1Ed6G8/F8qjqGRzlbl2H2dzjpMg1KdwsHxOlmJ7GTeZC/nesXbeZ6c9OYnuxUc3fmBuFft/Ff8xMd0s65SXIb/gAAAABJRU5ErkJggg==";

$_IMAGES["archive"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJmSURBVDjLhZNNS5RRGIav8+HMvDNO5ZhOYqXQF2FgVNRCCKM2EbQ1ok2b/AG16F/0ge5qUwitghbWooikiIhI3AQVFER+VsyMztg7vuecp4U2ORH5wLM5cK7n5r65lYgAoJTaDhQBw/9nAfgiIgEAEWENcjiO43KSJN45J//aOI5lZGTkBtALaBFpAhxNksRXq1Wp1WqNrVQqUiqVZH5+XpxzMjs7K6Ojow2Imri9Z1Dntjwo2dObZr7vpKXFoDVAwFpNvR6za9du+vr6KRQKrKysEEJgbGzs5vDw8DX1/N6Rrx0HOrpfvOqnWs0CCgQkaJTJEkIAHENDFygWi01mWGuP2Vw+KnT3djPUM0eLzZO4L6ikztQz6Dl2i4ePxgk+IYoylMtlQgg45+js7FyFKKUk/llhevplg9zTtR8RC0AmSlGtrGCMxVqF9x5j/gRlRQLZbIbt3fvW4lwmpS0IhCA4FwgEjDForVFK/Ta9oYDa8jdmpt83Hndu86DaEQkgHgkBrXXT5QaA4FuiqI3itl4IPzHWk7G5NQUBQgISUEoBYIxpVlArle9+fCbntFY6qM2Z4BOWazFzS13UPrwjlUqzuFhtXF9NZZ0Cn7hLc59mrly+/uPQ+OO3T+6PP8W7OpH1fJ6cpLU1hUsSphcqRLlNFHK6GXD84nuvlCoDS1FrgZn28+T5zom933jzeoKpyZeY9oPceOJpz1e4erbtLw/WTTBZWVpaVNmcYuvWDk6eOsPAwCCLseHOpCOfNg0vgACg1rXxSL1enzDGZAC9QSOD9345nU4PrgfsWKvzRp9/jwcWfgF7VEKXfHY5kwAAAABJRU5ErkJggg==";
$_IMAGES["audio"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIvSURBVDjLjZPLaxNRFIeriP+AO7Gg7nRXqo1ogoKCK0Fbig8QuxKhPop04SYLNYqlKpEmQlDBRRcFFWlBqqJYLVpbq6ktaRo0aWmamUxmJpN5ZvKoP++9mmlqWuzAt7jc+X2Hcy6nDkAdhXxbCI2Epv+wlbDeyVUJGm3bzpVKpcVyuYyVIPcIBAL3qiXVgiYaNgwDpmk6qKoKRVEgCAKT8DyPYDDoSCrhdYHrO9qzkdOQvp+E+O04hC+tED63gBs+QiDnhQgTWJYFWiQUCv2RUEH/g4YNXwdcT/VEJ6xkF8zEDRixq1CnriD94SikH08gikJNS2wmVLDwybONH3GbNt8DY+YMrDk/tGkvhOFmKPE+pxVJkpDJZMBx3JJAHN+/MTPq8amxdtj8fWjhwzB+diH5ag9y8V6QubDhUYmmaWwesiwvCYRRtyv9ca9oc37kk3egTbbBiPowP+iGOHGT0A1h7BrS43ehiXHous5EjoCEx3IzF6FMnYMcPgs95iOCW1DDXqTfnEBqsBnRR9shTvYibyhsiBRHwL13dabe7r797uHOx3Kkm1T2IDfhhTRyAfMDh5Aauox8Ns5aKRQKDNrSsiHSZ6SHoq1i9nkDuNfHkHi2D9loHwtSisUig4ZXFaSG2pB8cZBUPY+ila0JV1Mj8F/a3DHbfwDq3Mtlb12R/EuNoKN10ylLmv612h6swKIj+CvZRQZk0ou1hMm/OtveKkE9laxhnSvQ1a//DV9axd5NSHlCAAAAAElFTkSuQmCC";
$_IMAGES["code"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHtSURBVDjLjZM9T9tQFIYpQ5eOMBKlW6eWIQgipa8RfQKQghEAKqZgKFQgmFn5AWyVDCipVQZC2EqBWlEqdO2RCpAssQBRsx1+1ndix8wFvfW6wcUhQsfTI0j33PD7n+N4uAF2E+/S5RFwG/8Njl24/LyCIOI6j1+v1y0ajgU64cSSTybdBSVAwSMmmacKyLB/DMKBpGkRRZBJBEJBKpXyJl/yABLTBtm1Uq1X2JsrlMnRdhyRJTFCpVEAfSafTTUlQoFs1luxBAkoolUqQZbmtJTYTT/AoHInOfpcwtVtkwcSBgrkDGYph+60oisIq4Xm+VfB0+U/P0Lvj3NwPGfHPTcHMvoyFXwpe7UmQtAqTUCU0D1VVbwTPVk5jY19Fe3ZfQny7CE51WJDXqpjeEUHr45ki9rIqa4dmQiJfMLItGEs/FcQ2ucbRmdnSYy5vYWyLx/w3EaMfLmBaDpMQvuDJ65PY8Dpnz3wpYmLtApzcrIAqmfrEgdZH1grY/a36w6Xz0DKD8ES25/niYS6+wWE8mWfByY8cXmYEJFYLkHUHtVqNQcltAvoLD3v7o/FUHsNvzlnwxfsCEukC/ho3yUHaBN5Buo17Ojtyl+DqrnvQgUtfcC0ZcAdkUeA+ye7eMru9AUGIJPe4zh509UP/AAfNypi8oj/mAAAAAElFTkSuQmCC";
$_IMAGES["database"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHVSURBVDjLjZPLaiJBFIZNHmJWCeQdMuT1Mi/gYlARBRUkao+abHUhmhgU0QHtARVxJ0bxhvfGa07Of5Iu21yYFPyLrqrz1f+f6rIRkQ3icca6ZF39RxesU1VnAVyuVqvJdrvd73Y7+ky8Tk6n87cVYgVcoXixWNByuVSaTqc0Ho+p1+sJpNvtksvlUhCb3W7/cf/w+BSLxfapVIqSySRlMhnSdZ2GwyHN53OaTCbU7/cFYBgG4RCPx/MKub27+1ur1Xqj0YjW6zWxCyloNBqUSCSkYDab0WAw+BBJeqLFtQpvGoFqAlAEaZomuc0ocAQnnU7nALiJ3uh8whjntttttarVaVCgUpCAUCgnQhMAJ+gG3CsDZa7xh1mw2ZbFSqYgwgsGgbDQhcIWeAHSIoP1pcGeNarUqgFKpJMLw+/0q72azkYhmPAWIRmM6AGbXc7kc5fN5AXi9XgWACwAguLEAojrfsVGv1yV/sVikcrksAIfDIYUQHEAoPgLwT3GdzWYNdBfXh3xwApDP5zsqtkoBwuHwaSAQ+OV2u//F43GKRCLEc5ROpwVoOngvBXj7jU/wwZPPX72DT7RXgDfIT27QEgvfKea9c3m9FsA5IN94zqbw9M9fAEuW+zzj8uLvAAAAAElFTkSuQmCC";
$_IMAGES["directory"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGrSURBVDjLxZO7ihRBFIa/6u0ZW7GHBUV0UQQTZzd3QdhMQxOfwMRXEANBMNQX0MzAzFAwEzHwARbNFDdwEd31Mj3X7a6uOr9BtzNjYjKBJ6kicP7v3KqcJFaxhBVtZUAK8OHlld2st7Xl3DJPVONP+zEUV4HqL5UDYHr5xvuQAjgl/Qs7TzvOOVAjxhlC+ePSwe6DfbVegLVuT4r14eTr6zvA8xSAoBLzx6pvj4l+DZIezuVkG9fY2H7YRQIMZIBwycmzH1/s3F8AapfIPNF3kQk7+kw9PWBy+IZOdg5Ug3mkAATy/t0usovzGeCUWTjCz0B+Sj0ekfdvkZ3abBv+U4GaCtJ1iEm6ANQJ6fEzrG/engcKw/wXQvEKxSEKQxRGKE7Izt+DSiwBJMUSm71rguMYhQKrBygOIRStf4TiFFRBvbRGKiQLWP29yRSHKBTtfdBmHs0BUpgvtgF4yRFR+NUKi0XZcYjCeCG2smkzLAHkbRBmP0/Uk26O5YnUActBp1GsAI+S5nRJJJal5K1aAMrq0d6Tm9uI6zjyf75dAe6tx/SsWeD//o2/Ab6IH3/h25pOAAAAAElFTkSuQmCC";
$_IMAGES["graphics"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAH8SURBVDjLjZPLaxNRFIfHLrpx10WbghXxH7DQx6p14cadiCs31Y2LLizYhdBFWyhYaFUaUxLUQFCxL61E+0gofWGLRUqGqoWp2JpGG8g4ybTJJJm86897Ls4QJIm98DED9/6+mXNmjiAIwhlGE6P1P5xjVAEQiqHVlMlkYvl8/rhQKKAUbB92u91WSkKrlcLJZBK6rptomoZoNApFUbhElmU4HA4u8YzU1PsmWryroxYrF9CBdDqNbDbLr0QikUAsFkM4HOaCVCoFesjzpwMuaeXuthYcw4rtvG4KKGxAAgrE43FEIhGzlJQWxE/RirQ6i8/T7XjXV2szBawM8yDdU91GKaqqInQgwf9xCNmoB7LYgZn+Oud0T121KfiXYokqf8X+5jAyR3NQvtzEq96z4os7lhqzieW6TxJN3UVg8yEPqzu38P7xRVy+cPoay52qKDhUf0HaWsC3xRvstd3Qvt9mTWtEOPAJf/+L8oKAfwfLnil43z7Bkusqdr2X4Btvg1+c5fsVBZJ/H9aXbix/2EAouAVx4zVmHl2BtOrkPako2DsIwulexKhnG/cmfbg+uIbukXkooR/I5XKcioLu+8/QNTyGzqE36OidQNeDJayLe7yZBuUEv8t9iRIcU6Z4FprZ36fTxknC7GyCBrBY0ECSE4yzAY1+gyH4Ay9cw2Ifwv9mAAAAAElFTkSuQmCC";
$_IMAGES["image"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGWSURBVBgZpcE/a1NhGMbh3/OeN56cKq2Dp6AoCOKmk4uCn8DNycEOIojilr2TaBfRzVnESQR3Bz+FFDoWA2IjtkRqmpyc97k9qYl/IQV7XSaJw4g0VlZfP0m13dwepPbuiH85fyhyWCx4/ubxjU6kkdxWHt69VC6XpZlFBAhwJgwJJHAmRKorbj94ewvoRBrbuykvT5R2/+lLTp05Tp45STmEJYJBMAjByILxYeM9jzr3GCczGpHGYAQhRM6fO8uFy1fJQsZUwCKYEcwwC4QQaGUBd36KTDmQ523axTGQmEcIEBORKQfG1ZDxcA/MkBxXwj1ggCQyS9TVAMmZiyYkLn/kS+9PmOvcSW+jrao0mmMH5bzHfa+9UGBmciUBJ+2Fmh1h+yTQCXSkJkdCrpd8btIwwEJQnaEkOXMk7XaiF8CUxL/JdKQOwb0Ntc5SG9zHXQNd/ZFGsaEeLa2ChjzXQcqZiKNxSL0vR4unVwwMENMCATib0ZdV+QtE41I42geXt1Ze3dlMNZFdw6Ut6CIvKBhkjiM79Pyq1YUmtkKAAAAAElFTkSuQmCC";
$_IMAGES["presentation"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHeSURBVDjLjZO/i1NBEMc/u+/lBYxiLkgU7vRstLEUDyxtxV68ykIMWlocaGHrD1DxSAqxNf4t115jo6DYhCRCEsk733s7u2PxkuiRoBkYdmGZz3xndsaoKgDGmC3gLBDxbxsA31U1AKCqzCBXsywbO+e8iOgqz7JM2+32W+AiYFX1GGDHOeen06mmabrwyWSio9FI+/2+ioj2ej3tdDoLiJm+bimAhgBeUe9RmbkrT5wgT97RaDQoioIQAt1ud7/Var1h+uq+/s9+PLilw+FwqSRgJ1YpexHSKenHF4DFf/uC3b7CydsPsafraO5IkoTxeEwIARGh2WwCYNUJAOmHZ5y4eY/a7h4hPcIdHvDz/fMSnjviOCZJEiqVCtVqdfEl8RygHkz9DLZWQzOHisd9OizfckcUQRhjMMbMm14CQlEC/NfPjPd2CSJQCEEEDWYBsNZijFkaCqu5Ky+blwl5geaOUDg0c8TnNssSClkER1GEtXYZcOruI6ILl1AJqATirW02Hr8sFThBVZfklyXMFdQbbDzdXzm78z4Bx7KXTcwdgzs3yizuzxAhHvVh4avqBzAzaQa4JiIHgGE9C3EcX7ezhVIgeO9/AWGdYO/9EeDNX+t8frbOdk0FHhj8BvUsfP0TH5dOAAAAAElFTkSuQmCC";
$_IMAGES["spreadsheet"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIpSURBVDjLjZNPSFRRFMZ/9707o0SOOshM0x/JFtUmisKBooVEEUThsgi3KS0CN0G2lagWEYkSUdsRWgSFG9sVFAW1EIwQqRZiiDOZY804b967954249hUpB98y/PjO5zzKREBQCm1E0gDPv9XHpgTEQeAiFCDHAmCoBhFkTXGyL8cBIGMjo7eA3YDnog0ALJRFNlSqSTlcrnulZUVWV5elsXFRTHGyMLCgoyNjdUhanCyV9ayOSeIdTgnOCtY43DWYY3j9ulxkskkYRjinCOXy40MDAzcZXCyVzZS38MeKRQKf60EZPXSXInL9y+wLZMkCMs0RR28mJ2grSWJEo+lH9/IpNPE43GKxSLOOYwxpFIpAPTWjiaOtZ+gLdFKlJlD8u00xWP8lO/M5+e5efEB18b70VqjlMJai++vH8qLqoa+nn4+fJmiNNPCvMzQnIjzZuo1V88Ns3/HAcKKwfd9tNZorYnFYuuAMLDMfJ3m+fQznr7L0Vk9zGpLmezB4zx++YggqhAFEZ7n4ft+HVQHVMoB5++cJNWaRrQwMjHM9qCLTFcnJJq59WSIMLAopQDwfR/P8+oAbaqWK2eGSGxpxVrDnvQ+3s++4tPnj4SewYscUdUgIiilcM41/uXZG9kNz9h9aa+EYdjg+hnDwHDq+iGsaXwcZ6XhsdZW+FOqFk0B3caYt4Bic3Ja66NerVACOGttBXCbGbbWrgJW/VbnXbU6e5tMYIH8L54Xq0cq018+AAAAAElFTkSuQmCC";
$_IMAGES["textdocument"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIdSURBVDjLjZO7a5RREMV/9/F9yaLBzQY3CC7EpBGxU2O0EBG0sxHBUitTWYitYCsiiJL0NvlfgoWSRpGA4IMsm43ZXchmv8e9MxZZN1GD5MCBW8yce4aZY1QVAGPMaWAacPwfm8A3VRUAVJWhyIUsy7plWcYQgh7GLMt0aWnpNTADWFX9Q2C+LMu4s7Oj/X5/xF6vp51OR1utloYQtNls6vLy8kjE3Huz9qPIQjcUg/GZenVOokIEiSBBCKUSQ+TFwwa1Wo2iKBARVlZW3iwuLr7izssPnwZ50DLIoWz9zPT+s/fabrf/GQmY97GIIXGWp28/08si5+oV1jcGTCSO6nHH2pddYqmkaUq320VECCFQr9cBsBIVBbJcSdXQmK7Q6Qsnq54sj2gBplS896RpSpIkjI2NjVZitdh7jAOSK6trXcpC2GjlfP1esHD+GDYozjm893jvSZJkXyAWe+ssc6W5G9naLqkaw/pGxBrl1tVpJCrWWpxzI6GRgOQKCv2BYHPl5uUatROeSsVy7eIkU9UUiYoxBgDnHNbagw4U6yAWwpmphNvXT6HAhAZuLNRx1iDDWzHG/L6ZEbyJVLa2c54/PgsKgyzw5MHcqKC9nROK/aaDvwN4KYS7j959DHk2PtuYnBUBFUEVVBQRgzX7I/wNM7RmgEshhFXAcDSI9/6KHQZKAYkxDgA5SnOMcReI5kCcG8M42yM6iMDmL261eaOOnqrOAAAAAElFTkSuQmCC";
$_IMAGES["unknown"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAC4SURBVCjPdZFbDsIgEEWnrsMm7oGGfZrohxvU+Iq1TyjU60Bf1pac4Yc5YS4ZAtGWBMk/drQBOVwJlZrWYkLhsB8UV9K0BUrPGy9cWbng2CtEEUkLGppPjRwpbixUKHBiZRS0p+ZGhvs4irNEvWD8heHpbsyDXznPhYFOyTjJc13olIqzZCHBouE0FRMUjA+s1gTjaRgVFpqRwC8mfoXPPEVPS7LbRaJL2y7bOifRCTEli3U7BMWgLzKlW/CuebZPAAAAAElFTkSuQmCC";
$_IMAGES["vectorgraphics"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIWSURBVDjLhZNPbxJRFMWhRrYu3NrExIUbdzWte6M7d34Eo2Hjxm8gwZUxIYEARUKAWgwbV0BpxAW11bpQFrCoCVEMDplhQMow782/enx3WsiU0jrJ2bz7zu+9e95cHwAfSXzXhFaEVv+j60JLM58HsGIYxsi27SPHcbBIoo5oNBrxQryAVTJPJhPouu6q0+mgVquh0WhAlmUX0uv1EIvFZpCp2U8A2sA5h2maYIyhUChA0zTU63UoiuICaJ0OSSaTx5B5AJnpqqVSCbmNTWxVt9FsNtHv98+05GYyD7AsC5VKBZvFd/j2k6Etc6gjHfLgELKiujeRJGkxQGSAYDCIx8+eI/ORIb3Lkf0sWvmio9aaoC2NoQ7+QFUHCwFr5XIZ8bfvhZFhq2XgU9tEb2Tj99DCgcTx9YeOg64GZTCGPQdYEnpaLBbxZl9HfIejo1rg5nGvti3CMyxouonhIYM8ZG7NBWSz2YepVKobiUR+UXjrwry+wzBm9qnAqD03YHohbsASUP+ly2u+XC7XzmQyt9LpdJc2xuscr0ULU9NUFC6JDiFRCy4gn88/EWqFw+EEmfL7HK8+8FOAqdmrWYjC7E8kElcCgcAdWmx2LbzY5mCmc+YWXp33H/w1LQehKhPPZuK8mTjR0QxwArktQtKpsLHHEarwC81ir+ZOrwewTBCiXr157/7d0PfqjQcvH10w1jT6y/8A/nHJHcAgm2AAAAAASUVORK5CYII=";
$_IMAGES["video"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIfSURBVDjLpZNPaBNBGMXfbrubzBqbg4kL0lJLgiVKE/AP6Kl6UUFQNAeDIAjVS08aELx59GQPAREV/4BeiqcqROpRD4pUNCJSS21OgloISWMEZ/aPb6ARdNeTCz92mO+9N9/w7RphGOJ/nsH+olqtvg+CYJR8q9VquThxuVz+oJTKeZ63Uq/XC38E0Jj3ff8+OVupVGLbolkzQw5HOqAxQU4wXWWnZrykmYD0QsgAOJe9hpEUcPr8i0GaJ8n2vs/sL2h8R66TpVfWTdETHWE6GRGKjGiiKNLii5BSLpN7pBHpgMYhMkm8tPUWz3sL2D1wFaY/jvnWcTTaE5DyjMfTT5J0XIAiTRYn3ASwZ1MKbTmN7z+KaHUOYqmb1fcPiNa4kQBuyvWAHYfcHGzDgYcx9NKrwJYHCAyF21JiPWBnXMAQOea6bmn+4ueYGZi8gtymNVobF7BG5prNpjd+eW6X4BSUD0gOdCpzA8MpA/v2v15kl4+pK0emwHSbjJGBlz+vYM1fQeDrYOBTdzOGvDf6EFNr+LYjHbBgsaCLxr+moNQjU2vYhRXpgIUOmSWWnsJRfjlOZhrexgtYDZ/gWbetNRbNs6QT10GJglNk64HMaGgbAkoMo5fiFNy7CKDQUGqE5r38YktxAfSqW7Zt33l66WtkAkACjuNsaLVaDxlw5HdJ/86aYrG4WCgUZD6fX+jv/U0ymfxoWVZomuZyf+8XqfGP49CCrBUAAAAASUVORK5CYII=";
$_IMAGES["webpage"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJwSURBVDjLjZPdT1JhHMetvyO3/gfLKy+68bLV2qIAq7UyG6IrdRPL5hs2U5FR0MJIAqZlh7BVViI1kkyyiPkCyUtztQYTYbwJE8W+Pc8pjofK1dk+OxfP+X3O83srAVBCIc8eQhmh/B/sJezm4niCsvX19cTm5uZWPp/H3yDnUKvVKr6ELyinwWtra8hkMhzJZBLxeBwrKyusJBwOQ6PRcJJC8K4DJ/dXM04DOswNqNOLybsRo9N6LCy7kUgkEIlEWEE2mwX9iVar/Smhglqd8IREKwya3qhg809gPLgI/XsrOp/IcXVMhqnFSayurv6RElsT6ZCoov5u1fzUVwvcKRdefVuEKRCA3OFHv2MOxtlBdFuaMf/ZhWg0yt4kFAoVCZS3Hd1gkpOwRt9h0LOES3YvamzPcdF7A6rlPrSbpbhP0kmlUmw9YrHYtoDku2T6pEZ/2ICXEQ8kTz+g2TkNceAKKv2nIHachn6qBx1MI5t/Op1mRXzBd31AiRafBp1vZyEcceGCzQ6p24yjEzocGT6LUacS0iExcrkcK6Fsp6AXLRnmFOjyPMIZixPHmAAOGxZQec2OQyo7zpm6cNN6GZ2kK1RAofPAr8GA4oUMrdNNkIw/wPFhDwSjX3Dwlg0CQy96HreiTlcFZsaAjY0NNvh3QUXtHeHcoKMNA7NjqLd8xHmzDzXDRvRO1KHtngTyhzL4SHeooAAnKMxBtUYQbGWa0Dc+AsWzSVy3qkjeItLCFsz4XoNMaRFFAm4SyTXbmQa2YHQSGacR/pAXO+zGFif4JdlHCpShBzstEz+YfJtmt5cnKKWS/1jnAnT1S38AGTynUFUTzJcAAAAASUVORK5CYII=";


$_IMAGES["7z"] = $_IMAGES["archive"];
$_IMAGES["as"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIqSURBVDjLjZPNi1JRGMan/ooWDbSKNq2sgZqh0UgqKVoOU7OooEWLgZi+JIaYGolaRAS60JXuxJWoIC6E0KAgAzGbCqpFmua393qv9+PoPJ33THPHcYy68HDPvee8v/e8zznvFIApEn8Octm4Zv6hQ1z7rbgRgE3X9S5jbDgYDDBJfB5er/flKGQUMEPBiqJAVVVLkiSh0+mgVqsJSLVahc/nsyDbwfsIQAs0TYNhGNDevIX29BnUxx50u13U63UB6Pf7oCR+v38LMg6gYCOdhnb1GgaeVajnL0CWZTQajT0lCU/GAea379AWFsHu3kJ/4TLUO/etUprNpthJpVL5C4Ax6I/WwVbvoe9+AMazMvrHzSMI7YT8aLVakwHs8xdoS1eguC7CeJUBa3fEwkKhgEwmI+pP8/Ly+fxkgP78BZj7NgYP3ZDn7FDXPGJhKpVCuVwW/tA7HA7vBawdPrJEmZl7hQc7IJ2YtwCxWEyUIgzmCgaDuwF157kDlVOnC+bKMmS7E8a79zA3PsEs/0Q8Hkc2m4VpmkLkB5URjUa3AMpZ1+uew/lVmnMw/cZ1qOtPrGOirKVSCclk0gKQQqGQOFYB6NnPKPKsfdNYvgnJdQnsV23XWRMkkUig3W6LMSkQCOyUIJ+ch3R8Fj+O2j6YHzc2J/VAsVgUEBpHIhHkcjkaDy0P/hh5jBuk0sQ4gO4AXSIa09b595Cv7YnuHQFME+Q/2nlb1PrTvwGo2K3gWVH3FgAAAABJRU5ErkJggg==";
$_IMAGES["avi"] = $_IMAGES["video"];
$_IMAGES["bz2"] = $_IMAGES["archive"];
$_IMAGES["c"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHdSURBVDjLjZNLS+NgFIad+R0KwuzcSQddunTWXraKA4KCuFKcWYqgVbE4TKJWNyqC2oHKoDBeEBF04UpFUVQqUoemSVOTJr2lrb5+5xsTUy+jgYdc3yfnnOQrAVBCsK2U4WFUvUE546OTcwk82WxWz+fzt4VCAS/B7kMQhB9uiVtQReFkMolUKuWQSCSpaRpkWeYSSZIgiqIjscMfSEAPZDIZWJbF94RpmtB1HYqicEE6nQa9xO/3/5OQoM57/qm2a3PGtyzDtxzF/FYMe6c6F1DAMAzEYrFnLfGZ1A9devqC8o2wpmL8jwJhRcbw7ygGAxJYS7xvuxVVVXklkUjkUdAshgP+DRVfureXbPPcuoKe2b/QDKtIQpXQPOLx+KOgf0nGCCu9smHiu7u8IGuDBHRsS6gdmgmJHEHfLwn9wSgqagc6Xvt8RC6X48MlCeEI2ibDIS8TVDYGBHfAO3ONowvTOacqSEBQNY6gpvOkp3cxgq8/Q8ZxyISWsDAwfY32sSscnhk8SFAFBIWLBPQZq1sOvjX5LozOqTBaxSu0jF5iYVV+FnZTJLB/pN0DDTv7WlHvtuQpLwrYxbv/DfIJt47gQfKZDShFN94TZs+afPW6BGUkecdytqGlX3YPTr7momspN0YAAAAASUVORK5CYII=";
$_IMAGES["cab"] = $_IMAGES["archive"];
$_IMAGES["cpp"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAH/SURBVDjLjZPNaxNRFMWrf4cFwV13JVKXLuta61apIChIV0rblUqhjYpRcUaNboxIqxFTQgVti4hQQTe1C7FFSUmnmvmM85XJzCSpx3efzmTSRtqBw7yZ9+5v7rl3bg+AHhK7DjClmAZ20UGm/XFcApAKgsBqNptbrVYL3cT2IQjCnSQkCRig4FqtBs/zYtm2DdM0oaoqh8iyDFEUY0gUvI8AdMD3fYRhyO8k13VhWRY0TeOAer0O+kg2m/0LIcDx9LdDgxff5jJzKjJzCmbe6fi0anEABTiOA13Xd1jiNTlxfT01UVB/CfMG7r/WILxScaOo4FpeBrPEfUdWDMPgmVQqlTbgtCjls4sGjl16PxuRny5oGH3yA7oZoPjR4BDbqeHlksLrUa1W24DJWRU3Wer9Qw/Gk+kVmA2lGuDKtMQzsVwfl6c3eE3IUgyYeCFjsqCgb3DqQhJwq/gTY7lyV61Jdhtw7qFUSjNA/8m8kASkc5tYXnN4BvTs1kO23uAdIksx4OjI19Grzys4c7fkfCm5MO0QU483cf5eGcurNq8BWfD8kK11HtwBoDYeGV4ZO5X57ow8knBWLGP49jqevVF5IKnRaOxQByD6kT6smFj6bHb0OoJsV1cAe/n7f3PQRVsx4B/kMCuQRxt7CWZnXT69CUAvQfYwzpFo9Hv/AD332dKni9XnAAAAAElFTkSuQmCC";
$_IMAGES["cs"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJOSURBVDjLjZPbaxNBFMarf4cFwb9AIgXBR18Enyw+i1gs4g01kphSlPjQeAtNzNqGNLVpNCGhEvBS21Rr0ZIK6ovFiKbNbXNpdpNsstncUz9nNiauErEDHwMz8/1mzjlz+gD0UZGxh0hFNPAf7SXa3fUpAKparVZoNpvbrVYLvUT2YbFYTEqIEjBAzZIkoVwud1UsFiEIAjKZjAxJp9NgGKYL6Zh3UQA9UK1WUa/X5ZmqVCqhUCiA4zgZUKlUQC+xWq1tCAUM3v6+74hu2cH4eUz6OcwFcvgYEmUANYiiiFF3Aq5XHIJRCeqHLOJbFcg5OW6Mqm495fL2NznYl7OwveYxsZSF6QUHEpIc9+eQgOvuFL6EMjC6wrg4GZZfIwOGbazX8TaPY/qAr5Ms72oOBt8WknwVem8KWmcCY0/S0E1HcXYyhjNMBAYH2waYF8izl3I4eGLqmjLjz9by+PRNxCMS0k0C0c+yMDjj0MwmMOGJ4+Vqtg0Yn+dwf5HH/sG75/4uWzAiwbfCQ+dMYSGQxdhMHMPmMFY+8MgX623AiDu9+YAADg35LErzHU8SGkcSI4+T0DoSuGRnoZ5mcdIUwdC9zd85OHpjQzP+nMOVmZj4NSZBKNVh9LbN6xslnGai8CxmMP+Ol81criwntgugZTysDmovTEXEUVcKV8lt520s5kjJvP4MTpkjyApVXCZmvTWKRqMh6w9A5yO9Xy9ijUgZCi1lL/UEkMUf/+qDHtruAn5BDpAvXKYbOzGTsyW5exWAfgrZQTt3RFu//yfHVsX/fi5tjwAAAABJRU5ErkJggg==";
$_IMAGES["css"] = $_IMAGES["code"];
$_IMAGES["doc"] = $_IMAGES["textdocument"];
$_IMAGES["docx"] = $_IMAGES["textdocument"];
$_IMAGES["exe"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAEkSURBVCjPbdE9S0IBGIbhxxobWxP8D8r5I60RLg0NNTS21VBRQwg1aA4VOAWBpBVCFhKUtkVJtPQx9GFFWh49x3P0bvAjjsWzXrzvcAtpREEZfQtoACEkpKBVdpouv7NYi3SJkAynWcXExKTCJ6+4PLPeIZJPhksdmzp1vilTwqVGlWhEgR6wsbGpU+OLt94rGfJ1gIOLi4OFSYV3Sjx5QXdtkiHFx//gjiwlTshyT5LV3T8gwy3HFLnhkCuWmB3qA0Uu2WGOZVIUmN/ru5CiwAsLNLCI8cg+i3hAggMeiNOgwQbXRJnwghoX5DkiTow0OcLJ8HAbtLpkkzwJCuTY4pQppgeFFLJNtxMrzSRFtlnhvDXO6Fk7ll8hb+wZxpChoPzoB6aiXIYcSLDWAAAAAElFTkSuQmCC";
$_IMAGES["gz"] = $_IMAGES["archive"];
$_IMAGES["gif"] = $_IMAGES["image"];
$_IMAGES["h"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHtSURBVDjLjZNLS9xQFMe138C9A/0OynyBUjeFQjduROi2MMtCEalS0ToLEdQMdEShoKDWRymKigWxII7PhaB9aBFUJjHJpHlnnvbfe27NJcVIDfwIyT3nd885cOoA1BHsaWQ0MZL/4SHjgciLCJpKpZJVrVava7Ua4mDnkCRpKCqJCpKU7HkefN8X2LYN0zShqiqXKIqCTCYjJGFyPQkooFgsolwu8zfhui4sy4KmaVwQBAHokmw2+1cSClpSUmr12MP7LQunii8klOA4DnRdv9USn0koePRiJDW+aTGBjcOLgAewlnjfYSuFQoFXIsvybQF9jG2avIKFPQtzOyZmcyZMtywkVAnNwzCMeMG7jV+YyFmQ1g30L2kYWitAWtZFJdQOzYREsYLhzwZGGF+OHez/9PD2k4aeeYUHVyoVPheSELGCwRUdA+zG/VMPeycu3iyo6J5WxDxIQFA1QtCauUwPrOpIPh/vSC+qSC/qPHn3u4uu2Su8nsrzZKqAoOR/BO2j+Q+DTPC0/2CdSu79qOLVlIyXk3l0zsjomJYxv6ELQYgQPOk7a2jpOnmcaG57tvuD3fzNxc5XB9sEm0XuyMb5VcCriBI7A/bz9117EMO1ENxImtmAfDq4TzKLdfn2RgQJktxjnUNo9RN/AFmTwlP7TY1uAAAAAElFTkSuQmCC";
$_IMAGES["htm"] = $_IMAGES["webpage"];
$_IMAGES["html"] = $_IMAGES["webpage"];
$_IMAGES["iso"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIsSURBVDjLjZNfa9NQGIdnP4cDv8Nkn8PL6UfwSgQZOoSBYkUvZLN1lMFArQyHrsIuWkE3ug2t1K3O0LXrZotdlzZp0qZp/qc9P8852qyyigs8F8nJ7znveZN3DMAYg14XKROUyf9wiRIKckOCCcdxNN/3+71eD6Og64hEInPDkmHBJAsbhgHTNAM6nQ7a7TYkSeKSer2OaDQaSAbhC7efJGY28gZWPrUQTyt4l2lCKLfR7XahaRpkWeYCy7LANonFYr8lqzt26PUXIxzf7pCfioeS5EI2fVQkG+GVH0hlRVqFjmazeeZIvCc0PBXf1ohu96GZBEnBQMMmcAjgeH3cWRKQyTf4URRF4ZWIongqoOFURXZpUEOt1YNm+BzDI6AeFKo6IqsF3g9d13k/VFU9FSytK9V8zUJiR0WbBh+/2cVich+trodvNQeFEwvTsa/8C7Dzs54wUSBYeN+ofq+ageDZmoBX64dQdRcbByaEqoGbTzPwPA+u63IJIxDMrR2nDkUTR6oPxSJ8ZxYuNlxsHtnYLal48DIH+om5gMGqCQSP3lam7i+XSMfp40AFsjWCrbKHdMlGpeng2uxHpHM1XgGDhf8S3Fsuhe4+3w9PL+6RvbKGguhAODaRLSq4OvsBL5JFvutAMCAQDH6kK9fnZyKJAm4tZHFj/jMexnPYzJ3w0kdxRsBu6EPyrzkYQT8Q/JFcpqWabOE8Yfpul0/vkGCcSc4xzgPY6I//AmC87eKq4rrzAAAAAElFTkSuQmCC";
$_IMAGES["java"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIRSURBVDjLjZPJa1NRFIera/8ECy7dV7txkb2UOoDgzo0R3YuLrFwWIVglWQRtN0GCLkIixJDJQJKGQOYBA4akmec5eSFT/XnPsXlNsWIffOTdd3O+e+6PezcAbBDiuS7YEmz/hxuCq3LdmmBrOp32F4vFyXK5xEWIeWg0mnfrknXBNhWPx2NIkiQzGAzQ6/XQaDRYUqvVoNVqZQkXGwyGm2q1+k00GkUkEkE4HEYwGGQCgQDS6TSKxSILJpMJaBGdTvdHYjKZHvp8vuNsNot6vc7QavRLq1UqFcTjcbhcLrmLFZyJ2+0u9Pt9hC1f8OHpDt4/uoO3928zmscKHD5/gKPPB8jn8yxpNpuoVqtnAqPRiOFwiPGgB/fhPr7uvcJH5S4Ont3Dp5dP8G3/NX4cfedCi8XCeXQ6nTOBzWaT5vM5J0yTFFy325WhtmkbhN1ux2g04gVlgcfj+UmDUqkEh8OBcrnM7xRaLpdDIpHgcSqVYihEYr0DL61O6fv9fhQKBd4vhUrpk6DdbsNsNrN8Nptxt7JApVK9EMW9TCbDEgqI2qUOSELvJPF6vbw9Kj4nEM81pVJ5V6/XH8diMQ6IaLVaLAmFQnA6nfyNslohC05P4RWFQrFLHVitVoYSF2cEyWSSgxOn9Bx/CWggPv761z24gBNZcCq5JQKSaOIyxeK/I769a4JNklziOq+gq7/5Gx172kZga+XWAAAAAElFTkSuQmCC";
$_IMAGES["jpg"] = $_IMAGES["image"];
$_IMAGES["jpeg"] = $_IMAGES["image"];
$_IMAGES["js"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHdSURBVDjLjZNPaxNBGIdrLwURLznWgkcvIrQhRw9FGgy01IY0TVsQ0q6GFkT0kwjJId9AP4AHP4Q9FO2hJ7El2+yf7OzMbja7Sf0578QdNybFLjwszLu/Z2femZkDMEfI54FkRVL4Dw8l8zqXEawMBgM2HA6vR6MRZiHraDabH7KSrKBA4SAIEIahxvd9eJ6HbrerJKZpotVqaUkavkMC+iCKIsRxrN6EEAKMMViWpQT9fh/0k3a7PZZkBUPmqXAKCSjAOYdt21NLUj1JBYW7C6vi6BC8vKWKQXUXQcNA5Nh6KY7jqJl0Op1JwY/Hi7mLp/lT/uoA/OX2WLC3C9FoQBwfILKulIRmQv1wXfevwHmyuMPXS5Fv1MHrFSTmhSomnUvw/Spo3C+vg3/+pJZDPSGRFvilNV+8PUZvoziKvn+d3LZvJ/BelMDevIZXK2EQCiUhtMDM53bY5rOIGXtwjU3EVz/HM5Az8eplqPFKEfzLR91cOg8TPTgr3MudFx+d9owK7KMNVfQOtyQ1OO9qiHsWkiRRUHhKQLuwfH9+1XpfhVVfU0V3//k4zFwdzjIlSA/Sv8jTOZObBL9uugczuNaCP5K8bFBIhduE5bdC3d6MYIkkt7jOKXT1l34DkIu9e0agZjoAAAAASUVORK5CYII=";
$_IMAGES["mov"] = $_IMAGES["video"];
$_IMAGES["mp2"] = $_IMAGES["audio"];
$_IMAGES["mp3"] = $_IMAGES["audio"];
$_IMAGES["mp4"] = $_IMAGES["video"];
$_IMAGES["mp4a"] = $_IMAGES["audio"];
$_IMAGES["ogg"] = $_IMAGES["audio"];
$_IMAGES["flac"] = $_IMAGES["audio"];
$_IMAGES["mpeg"] = $_IMAGES["video"];
$_IMAGES["mpg"] = $_IMAGES["video"];
$_IMAGES["odg"] = $_IMAGES["vectorgraphics"];
$_IMAGES["odp"] = $_IMAGES["presentation"];
$_IMAGES["ods"] = $_IMAGES["spreadsheet"];
$_IMAGES["odt"] = $_IMAGES["textdocument"];
$_IMAGES["pdf"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHhSURBVDjLjZPLSxtRFIfVZRdWi0oFBf+BrhRx5dKVYKG4tLhRqlgXPmIVJQiC60JCCZYqFHQh7rrQlUK7aVUUfCBRG5RkJpNkkswrM5NEf73n6gxpHujAB/fOvefjnHM5VQCqCPa1MNoZnU/Qxqhx4woE7ZZlpXO53F0+n0c52Dl8Pt/nQkmhoJOCdUWBsvQJ2u4ODMOAwvapVAqSJHGJKIrw+/2uxAmuJgFdMDUVincSxvEBTNOEpmlIp9OIxWJckMlkoOs6AoHAg6RYYNs2kp4RqOvfuIACVFVFPB4vKYn3pFjAykDSOwVta52vqW6nlEQiwTMRBKGygIh9GEDCMwZH6EgoE+qHLMuVBdbfKwjv3yE6Ogjz/PQ/CZVDPSFRRYE4/RHy1y8wry8RGWGSqyC/nM1meX9IQpQV2JKIUH8vrEgYmeAFwuPDCHa9QehtD26HBhCZnYC8ucGzKSsIL8wgsjiH1PYPxL+vQvm5B/3sBMLyIm7GhhCe90BaWykV/Gp+VR9oqPVe9vfBTsruM1HtBKVPmFIUNusBrV3B4ev6bsbyXlPdkbr/u+StHUkxruBPY+0KY8f38oWX/byvNAdluHNLeOxDB+uyQQfPCWZ3NT69BYJWkjxjnB1o9Fv/ASQ5s+ABz8i2AAAAAElFTkSuQmCC";
$_IMAGES["php"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGsSURBVDjLjZNLSwJRFICtFv2AgggS2vQLDFvVpn0Pi4iItm1KItvWJqW1pYsRemyyNILARbZpm0WtrJ0kbmbUlHmr4+t0z60Z7oSSAx935txzvrlPBwA4EPKMEVwE9z+ME/qtOkbgqtVqUqPRaDWbTegE6YdQKBRkJazAjcWapoGu6xayLIMoilAoFKhEEAQIh8OWxCzuQwEmVKtVMAyDtoiqqiBJEhSLRSqoVCqAP+E47keCAvfU5sDQ8MRs/OYNtr1x2PXdwuJShLLljcFlNAW5HA9khLYp0TUhSYMLHm7PLEDS7zyw3ybRqyfg+TyBtwl2sDP1nKWFiUSazFex3tk45sXjL1Aul20CGTs+syVY37igBbwg03eMsfH9gwSsrZ+Doig2QZsdNiZmMkVrKmwc18azHKELyQrOMEHTDJp8HXu1hostG8dY8PiRngdWMEq467ZwbDxwlIR8XrQLcBvn5k9Gpmd8fn/gHlZWT20C/D4k8eTDB3yVFKjX6xSbgD1If8G970Q3QbvbPehAyxL8SibJEdaxo5dikqvS28sInCjp4Tqb4NV3fgPirZ4pD4KS4wAAAABJRU5ErkJggg==";
$_IMAGES["png"] = $_IMAGES["image"];
$_IMAGES["pps"] = $_IMAGES["presentation"];
$_IMAGES["ppsx"] = $_IMAGES["presentation"];
$_IMAGES["ppt"] = $_IMAGES["presentation"];
$_IMAGES["pptx"] = $_IMAGES["presentation"];
$_IMAGES["psd"] = $_IMAGES["graphics"];
$_IMAGES["rar"] = $_IMAGES["archive"];
$_IMAGES["rb"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIESURBVDjLjZNPTxNBGIexid9CEr8DBr8CHEiMVoomJiQkxBIM3dgIiaIESJTGGpVtyXIzHhoM4SIe9KAnEi4clQtJEczWFrbdP93d7s7u/JwZ7XYJBdnkyRxmfs/MvO9OD4AeDvuuMPoY/f/hKiMR5WKCvlarpRNCwiAI0A02D1mW38QlcUE/DzebTdi2HWEYBhqNBqrVqpBUKhUUCoVI0g5f4gK+wHVdeJ4nRo5lWdB1HbVaTQgcxwHfRFGUvxIuCKYfzmqZyZ2wKIO8fQ3/1Uv4Sy/QWliAO/sU9qMZmFMS3HfvT1xJ1ITOZJ9RpQi6+RH0y2fQb19BP23CVhRo+TysXA71+XkcMIk6fAfHK6tQVfWEoESXngNra0C5DHZJYGMDZiaD35IEi41qOo3vc3MoJ1Ooj92HpmkdQZiVEsHUAzl88hjY3gYIAdbXYQ0MoDo4CH1kBHssvH8jCf3eGKzDXzBNsyNoF/HH7WSJZLPA7i6wtQVnaAhmKoXjxUX8vDkMY3Qcnm6IInJOCS4nEte9QhF+RhInIRMTcFhYvZWCcXcUPmsl7w6H/w+nBFEb5SLc8TTo8jLq7M4m25mHfd8X8PC5AtHrXB5NdmwRrnfCcc4VCEnpA8jREasp6cpZAnrWO+hCGAn+Sa6xAtl84iJhttYSrzcm6OWSCzznNvzp9/4BgwKvG3Zq1eoAAAAASUVORK5CYII=";
$_IMAGES["sln"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJQSURBVDjLjZNvSBNxGMeX9O+FOAkaLbehozdGRGiMQqTIlEqJMIig3oxl0YxcgYt6FUZRryLYwpFWCr2wXgjBIMJMYhFjgZSiEXOg5c5N593udne7u+2+3V3tT22SBx/uxe/5fu7uuefRAdCpKJdJoVHB9h9qFSryuSJBYzqdpiRJymYyGZRDOYfH43lULCkW2NRwKpUCy7J5kskkSJJELBbTJARBwOv15iW58AZVoBbwPA9BELS7CsMwoCgK8XhcE3AcB/UhPp/vtyQnGBi03pYXjyAbPQuRD2sSbmUFVN9NLJ5ux9DryZJP0nqiChzjl48Oh9oYRPTAXBVksgnS0hRWu7uxXG/EfL0ZZ9yjGHgb1t4kGo0WBO6AvcUVsFP9oTZZjlQCP7ZA/r4JpHM3lup2Im6pRsRai2PX/GjoDWEk8BWJRKIg6P147mfP+CW63d16RUyOQP5SA6rLAsKyA0TNNizvM4D9/A4Tk2Ec7nuPE0+vgqbpgqBnzLl6vv8N3+x4eEsS0mAvHAJhMoAw6kHUVUF4rkeWHAKXZtA15kDL6C6tkXmBffiZs/P+NE7dC4pBhwsJY6USVjBtBO/bCswrbfq2GS+Ce9DwyooHoRvaPPzVxI67IVfHnQA+2JqQMFQgur0anP8J5IVmYEopmdbh5YQO1wMu0BxdKlB/44GLg48/HT8J8uBesH6/ViDxC5DnWiHPWjAz0wleYCGKokaJIDdI/6JMZ1nWEshr7UEZsnnBH8l+ZfpY9WA9YaWW0ba3SGBWJetY5xzq6pt/AY6/mKmzshF5AAAAAElFTkSuQmCC";
$_IMAGES["sql"] = $_IMAGES["database"];
$_IMAGES["tar"] = $_IMAGES["archive"];
$_IMAGES["tgz"] = $_IMAGES["archive"];
$_IMAGES["txt"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADoSURBVBgZBcExblNBGAbA2ceegTRBuIKOgiihSZNTcC5LUHAihNJR0kGKCDcYJY6D3/77MdOinTvzAgCw8ysThIvn/VojIyMjIyPP+bS1sUQIV2s95pBDDvmbP/mdkft83tpYguZq5Jh/OeaYh+yzy8hTHvNlaxNNczm+la9OTlar1UdA/+C2A4trRCnD3jS8BB1obq2Gk6GU6QbQAS4BUaYSQAf4bhhKKTFdAzrAOwAxEUAH+KEM01SY3gM6wBsEAQB0gJ+maZoC3gI6iPYaAIBJsiRmHU0AALOeFC3aK2cWAACUXe7+AwO0lc9eTHYTAAAAAElFTkSuQmCC";
$_IMAGES["wav"] = $_IMAGES["audio"];
$_IMAGES["wma"] = $_IMAGES["audio"];
$_IMAGES["wmv"] = $_IMAGES["video"];
$_IMAGES["xcf"] = $_IMAGES["graphics"];
$_IMAGES["xls"] = $_IMAGES["spreadsheet"];
$_IMAGES["xlsx"] = $_IMAGES["spreadsheet"];
$_IMAGES["xml"] = $_IMAGES["code"];
$_IMAGES["zip"] = $_IMAGES["archive"];

/***************************************************************************/
/* HERE COMES THE CODE.                                                  */
/* DON'T CHANGE UNLESS YOU KNOW WHAT YOU ARE DOING ;)                    */
/***************************************************************************/

// The class that displays images (icons and thumbnails)
class ImageServer
{
	// Checks if an image is requested and displays one if needed
	public static function showImage()
	{
		global $_IMAGES;
		if(isset($_GET['img']))
		{
			$mtime = gmdate('r', filemtime($_SERVER['SCRIPT_FILENAME']));
			$etag = md5($mtime.$_SERVER['SCRIPT_FILENAME']);

			if ((isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $mtime)
				|| (isset($_SERVER['HTTP_IF_NONE_MATCH']) && str_replace('"', '', stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])) == $etag))
			{
				header('HTTP/1.1 304 Not Modified');
				return true;
			}
			else {
				header('ETag: "'.$etag.'"');
				header('Last-Modified: '.$mtime);
				header('Content-type: image/gif');
				if(is_scalar($_GET['img']) && strlen($_GET['img']) > 0 && isset($_IMAGES[$_GET['img']]))
					print base64_decode($_IMAGES[$_GET['img']]);
				else
					print base64_decode($_IMAGES["unknown"]);
			}
			return true;
		}
		else if(isset($_GET['thumb']))
		{
			if(is_scalar($_GET['thumb']) && strlen($_GET['thumb']) > 0 && EncodeExplorer::getConfig('thumbnails') == true)
			{
				ImageServer::showThumbnail($_GET['thumb']);
			}
			return true;
		}
		return false;
	}

	public static function isEnabledPdf()
	{
		if(class_exists("Imagick"))
			return true;
		return false;
	}

	public static function openPdf($file)
	{
		if(!ImageServer::isEnabledPdf())
			return null;

		if(!ImageServer::isAllowedToOpenPath($file))
			return null;
            
		$im = new Imagick($file.'[0]');
		$im->setImageFormat( "png" );
		$str = $im->getImageBlob();
		$im2 = imagecreatefromstring($str);
		return $im2;
	}

	// Creates and returns a thumbnail image object from an image file
	public static function createThumbnail($file)
	{
		if(is_int(EncodeExplorer::getConfig('thumbnails_width')))
			$max_width = EncodeExplorer::getConfig('thumbnails_width');
		else
			$max_width = 200;

		if(is_int(EncodeExplorer::getConfig('thumbnails_height')))
			$max_height = EncodeExplorer::getConfig('thumbnails_height');
		else
			$max_height = 200;

		if(File::isPdfFile($file))
			$image = ImageServer::openPdf($file);
		else
			$image = ImageServer::openImage($file);
		if($image == null)
			return;

		imagealphablending($image, true);
		imagesavealpha($image, true);

		$width = imagesx($image);
		$height = imagesy($image);

		$new_width = $max_width;
		$new_height = $max_height;
		if(($width/$height) > ($new_width/$new_height))
			$new_height = $new_width * ($height / $width);
		else
			$new_width = $new_height * ($width / $height);

		if($new_width >= $width && $new_height >= $height)
		{
			$new_width = $width;
			$new_height = $height;
		}

		$new_image = ImageCreateTrueColor($new_width, $new_height);
		imagealphablending($new_image, true);
		imagesavealpha($new_image, true);
		$trans_colour = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
		imagefill($new_image, 0, 0, $trans_colour);

		imagecopyResampled ($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

		return $new_image;
	}

	// Function for displaying the thumbnail.
	public static function showThumbnail($file)
	{
		if(filemtime($file) < filemtime($_SERVER['SCRIPT_FILENAME']))
			$mtime = gmdate('r', filemtime($_SERVER['SCRIPT_FILENAME']));
		else
			$mtime = gmdate('r', filemtime($file));

		$etag = md5($mtime.$file);

		if ((isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $mtime)
			|| (isset($_SERVER['HTTP_IF_NONE_MATCH']) && str_replace('"', '', stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])) == $etag))
		{
			header('HTTP/1.1 304 Not Modified');
			return;
		}
		else
		{
			header('ETag: "'.$etag.'"');
			header('Last-Modified: '.$mtime);
			header('Content-Type: image/png');
			$image = ImageServer::createThumbnail($file);
			imagepng($image);
		}
	}
	
	public static function isAllowedToOpenPath($file)
	{
		global $_CONFIG;
		if(realpath($file) && str_starts_with(realpath($file), realpath($_CONFIG['starting_dir'])))
			return true;
		return false;
	}

	// A helping function for opening different types of image files
	public static function openImage ($file)
	{
	    if(!ImageServer::isAllowedToOpenPath($file))
		    return null;

	    $im = null;
	    $size = getimagesize($file);
	    switch($size["mime"])
	    {
		    case "image/jpeg":
			    $im = imagecreatefromjpeg($file);
		    break;
		    case "image/gif":
			    $im = imagecreatefromgif($file);
		    break;
		    case "image/png":
			    $im = imagecreatefrompng($file);
		    break;
		    default:
			    $im = null;
		    break;
	    }
		return $im;
	}

}

// The class for logging user activity
class Logger
{
	public static function log($message)
	{
		global $encodeExplorer;
		if(strlen(EncodeExplorer::getConfig('log_file')) > 0)
		{
			if(Location::isFileWritable(EncodeExplorer::getConfig('log_file')))
			{
				$message = "[" . date("Y-m-d h:i:s", mktime()) . "] ".$message." (".$_SERVER["HTTP_USER_AGENT"].")\n";
				error_log($message, 3, EncodeExplorer::getConfig('log_file'));
			}
			else
				$encodeExplorer->setErrorString("log_file_permission_error");
		}
	}

	public static function logAccess($path, $isDir)
	{
		$message = $_SERVER['REMOTE_ADDR']." ".GateKeeper::getUserName()." accessed ";
		$message .= $isDir?"dir":"file";
		$message .= " ".$path;
		Logger::log($message);
	}

	public static function logQuery()
	{
		if(isset($_POST['log']) && strlen($_POST['log']) > 0)
		{
			Logger::logAccess($_POST['log'], false);
			return true;
		}
		else
			return false;
	}

	public static function logCreation($path, $isDir)
	{
		$message = $_SERVER['REMOTE_ADDR']." ".GateKeeper::getUserName()." created ";
		$message .= $isDir?"dir":"file";
		$message .= " ".$path;
		Logger::log($message);
	}

	public static function emailNotification($path, $isFile)
	{
		if(strlen(EncodeExplorer::getConfig('upload_email')) > 0)
		{
			$message = "This is a message to let you know that ".GateKeeper::getUserName()." ";
			$message .= ($isFile?"uploaded a new file":"created a new directory")." in Encode Explorer.\n\n";
			$message .= "Path : ".$path."\n";
			$message .= "IP : ".$_SERVER['REMOTE_ADDR']."\n";
			mail(EncodeExplorer::getConfig('upload_email'), "Upload notification", $message);
		}
	}
}

// The class controls logging in and authentication
class GateKeeper
{
	public static function init()
	{
		global $encodeExplorer;
		if(strlen(EncodeExplorer::getConfig("session_name")) > 0)
				session_name(EncodeExplorer::getConfig("session_name"));

		if(count(EncodeExplorer::getConfig("users")) > 0)
			session_start();
		else
			return;

		if(isset($_GET['logout']))
		{
			$_SESSION['ee_user_name'] = null;
			$_SESSION['ee_user_pass'] = null;
		}

		if(isset($_POST['user_pass']) && strlen($_POST['user_pass']) > 0)
		{
			if(GateKeeper::isUser((isset($_POST['user_name'])?$_POST['user_name']:""), $_POST['user_pass']))
			{
				$_SESSION['ee_user_name'] = isset($_POST['user_name'])?$_POST['user_name']:"";
				$_SESSION['ee_user_pass'] = $_POST['user_pass'];

				$addr  = $_SERVER['PHP_SELF'];
				$param = '';

				if(isset($_GET['m']))
					$param .= (strlen($param) == 0 ? '?m' : '&m');

				if(isset($_GET['s']))
					$param .= (strlen($param) == 0 ? '?s' : '&s');

				if(isset($_GET['dir']) && strlen($_GET['dir']) > 0)
				{
					$param .= (strlen($param) == 0 ? '?dir=' : '&dir=');
					$param .= urlencode($_GET['dir']);
				}
				header( "Location: ".$addr.$param);
			}
			else
				$encodeExplorer->setErrorString("wrong_pass");
		}
	}

	public static function isUser($userName, $userPass)
	{
		foreach(EncodeExplorer::getConfig("users") as $user)
		{
			if($user[1] == $userPass)
			{
				if(strlen($userName) == 0 || $userName == $user[0])
				{
					return true;
				}
			}
		}
		return false;
	}

	public static function isLoginRequired()
	{
		if(EncodeExplorer::getConfig("require_login") == false){
			return false;
		}
		return true;
	}

	public static function isUserLoggedIn()
	{
		if(isset($_SESSION['ee_user_name'], $_SESSION['ee_user_pass']))
		{
			if(GateKeeper::isUser($_SESSION['ee_user_name'], $_SESSION['ee_user_pass']))
				return true;
		}
		return false;
	}

	public static function isAccessAllowed()
	{
		if(!GateKeeper::isLoginRequired() || GateKeeper::isUserLoggedIn())
			return true;
		return false;
	}

	public static function isUploadAllowed(){
		if(EncodeExplorer::getConfig("upload_enable") == true && GateKeeper::isUserLoggedIn() == true && GateKeeper::getUserStatus() == "admin")
			return true;
		return false;
	}

	public static function isNewdirAllowed(){
		if(EncodeExplorer::getConfig("newdir_enable") == true && GateKeeper::isUserLoggedIn() == true && GateKeeper::getUserStatus() == "admin")
			return true;
		return false;
	}

	public static function isDeleteAllowed(){
		if(EncodeExplorer::getConfig("delete_enable") == true && GateKeeper::isUserLoggedIn() == true && GateKeeper::getUserStatus() == "admin")
			return true;
		return false;
	}

	public static function getUserStatus(){
		if(GateKeeper::isUserLoggedIn() == true && EncodeExplorer::getConfig("users") != null && is_array(EncodeExplorer::getConfig("users"))){
			foreach(EncodeExplorer::getConfig("users") as $user){
				if($user[0] != null && $user[0] == $_SESSION['ee_user_name'])
					return $user[2];
			}
		}
		return null;
	}

	public static function getUserName()
	{
		if(GateKeeper::isUserLoggedIn() == true && isset($_SESSION['ee_user_name']) && strlen($_SESSION['ee_user_name']) > 0)
			return $_SESSION['ee_user_name'];
		if(isset($_SERVER["REMOTE_USER"]) && strlen($_SERVER["REMOTE_USER"]) > 0)
			return $_SERVER["REMOTE_USER"];
		if(isset($_SERVER['PHP_AUTH_USER']) && strlen($_SERVER['PHP_AUTH_USER']) > 0)
			return $_SERVER['PHP_AUTH_USER'];
		return "an anonymous user";
	}

	public static function showLoginBox(){
		if(!GateKeeper::isUserLoggedIn() && count(EncodeExplorer::getConfig("users")) > 0)
			return true;
		return false;
	}
}

// The class for any kind of file managing (new folder, upload, etc).
class FileManager
{
	function newFolder($location, $dirname)
	{
		global $encodeExplorer;
		if(strlen($dirname) > 0)
		{
			$forbidden = array(".", "/", "\\");
			for($i = 0; $i < count($forbidden); $i++)
			{
				$dirname = str_replace($forbidden[$i], "", $dirname);
			}

			if(!$location->uploadAllowed())
			{
				$encodeExplorer->setErrorString("upload_not_allowed");
			}
			else if(!$location->isWritable())
			{
				$encodeExplorer->setErrorString("upload_dir_not_writable");
			}
			else if(!mkdir($location->getDir(true, false, false, 0).$dirname, EncodeExplorer::getConfig("new_dir_mode")))
			{
				$encodeExplorer->setErrorString("new_dir_failed");
			}
			else if(!chmod($location->getDir(true, false, false, 0).$dirname, EncodeExplorer::getConfig("new_dir_mode")))
			{
				$encodeExplorer->setErrorString("chmod_dir_failed");
			}
			else
			{
				Logger::logCreation($location->getDir(true, false, false, 0).$dirname, true);
				Logger::emailNotification($location->getDir(true, false, false, 0).$dirname, false);
			}
		}
	}

	function uploadFile($location, $userfile)
	{
		global $encodeExplorer;
		$name = basename($userfile['name']);

		$upload_dir = $location->getFullPath();
		$upload_file = $upload_dir . $name;

		if(function_exists("finfo_open") && function_exists("finfo_file"))
			$mime_type = File::getFileMime($userfile['tmp_name']);
		else
			$mime_type = $userfile['type'];

		$extension = File::getFileExtension($userfile['name']);

		if(!$location->uploadAllowed())
		{
			$encodeExplorer->setErrorString("upload_not_allowed");
		}
		else if(!$location->isWritable())
		{
			$encodeExplorer->setErrorString("upload_dir_not_writable");
		}
		else if(!is_uploaded_file($userfile['tmp_name']))
		{
			$encodeExplorer->setErrorString("failed_upload");
		}
		else if(is_array(EncodeExplorer::getConfig("upload_allow_type")) && count(EncodeExplorer::getConfig("upload_allow_type")) > 0 && !in_array($mime_type, EncodeExplorer::getConfig("upload_allow_type")))
		{
			$encodeExplorer->setErrorString("upload_type_not_allowed");
		}
		else if(is_array(EncodeExplorer::getConfig("upload_reject_extension")) && count(EncodeExplorer::getConfig("upload_reject_extension")) > 0 && in_array($extension, EncodeExplorer::getConfig("upload_reject_extension")))
		{
			$encodeExplorer->setErrorString("upload_type_not_allowed");
		}
		else if(!@move_uploaded_file($userfile['tmp_name'], $upload_file))
		{
			$encodeExplorer->setErrorString("failed_move");
		}
		else
		{
			chmod($upload_file, EncodeExplorer::getConfig("upload_file_mode"));
			Logger::logCreation($location->getDir(true, false, false, 0).$name, false);
			Logger::emailNotification($location->getDir(true, false, false, 0).$name, true);
		}
	}

	public static function delete_dir($dir) {
		if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (filetype($dir."/".$object) == "dir")
						FileManager::delete_dir($dir."/".$object);
					else
						unlink($dir."/".$object);
				}
			}
			reset($objects);
			rmdir($dir);
		}
	}

	public static function delete_file($file){
		if(is_file($file)){
			unlink($file);
		}
	}

	// The main function, checks if the user wants to perform any supported operations
	function run($location)
	{
		if(isset($_POST['userdir']) && strlen($_POST['userdir']) > 0){
			if($location->uploadAllowed() && GateKeeper::isUserLoggedIn() && GateKeeper::isAccessAllowed() && GateKeeper::isNewdirAllowed()){
				$this->newFolder($location, $_POST['userdir']);
			}
		}

		if(isset($_FILES['userfile']['name']) && strlen($_FILES['userfile']['name']) > 0){
			if($location->uploadAllowed() && GateKeeper::isUserLoggedIn() && GateKeeper::isAccessAllowed() && GateKeeper::isUploadAllowed()){
				$this->uploadFile($location, $_FILES['userfile']);
			}
		}

		if(isset($_GET['del'])){
			if(GateKeeper::isUserLoggedIn() && GateKeeper::isAccessAllowed() && GateKeeper::isDeleteAllowed()){
				$split_path = Location::splitPath($_GET['del']);
				$path = "";
				for($i = 0; $i < count($split_path); $i++){
					$path .= $split_path[$i];
					if($i + 1 < count($split_path))
						$path .= "/";
				}
				if($path == "" || $path == "/" || $path == "\\" || $path == ".")
					return;

				if(is_dir($path))
					FileManager::delete_dir($path);
				else if(is_file($path))
					FileManager::delete_file($path);
			}
		}
	}
}

// Dir class holds the information about one directory in the list
class Dir
{
	public $name;
	public $location;
	public $modTime;

	// Constructor
	function __construct($name, $location)
	{
		$this->name = $name;
		$this->location = $location;

		$this->modTime = filemtime($this->location->getDir(true, false, false, 0).$this->getName());
	}

	function getName()
	{
		return $this->name;
	}

	function getNameHtml()
	{
		return htmlspecialchars($this->name);
	}

	function getNameEncoded()
	{
		return rawurlencode($this->name);
	}

	function getModTime()
	{
		return $this->modTime;
	}

	// Debugging output
	function debug()
	{
		print("Dir name (htmlspecialchars): ".$this->getName()."\n");
		print("Dir location: ".$this->location->getDir(true, false, false, 0)."\n");
		print("Dir modTime: ".$this->modTime."\n");
	}
}

// File class holds the information about one file in the list
class File
{
	public $name;
	public $location;
	public $size;
	public $type;
	public $modTime;

	// Constructor
	function __construct($name, $location)
	{
		$this->name = $name;
		$this->location = $location;

		$this->type = File::getFileType($this->location->getDir(true, false, false, 0).$this->getName());
		$this->size = File::getFileSize($this->location->getDir(true, false, false, 0).$this->getName());
		$this->modTime = filemtime($this->location->getDir(true, false, false, 0).$this->getName());
	}

	function getName()
	{
		return $this->name;
	}

	function getNameEncoded()
	{
		return rawurlencode($this->name);
	}

	function getNameHtml()
	{
		return htmlspecialchars($this->name);
	}

	function getSize()
	{
		return $this->size;
	}

	function getType()
	{
		return $this->type;
	}

	function getModTime()
	{
		return $this->modTime;
	}

	// Determine the size of a file
	public static function getFileSize($file)
	{
		$sizeInBytes = @filesize($file);

		if (EncodeExplorer::getConfig("large_files") == true || !$sizeInBytes || $sizeInBytes < 0) {
			$sizeInBytes=exec("ls -l '$file' | awk '{print $5}'");
		}
		return $sizeInBytes;
	}

	public static function getFileType($filepath)
	{
		return File::getFileExtension($filepath);
	}

	public static function getFileMime($filepath)
	{
		$fhandle = finfo_open(FILEINFO_MIME);
		$mime_type = finfo_file($fhandle, $filepath);
		$mime_type_chunks = preg_split('/\s+/', $mime_type);
		$mime_type = $mime_type_chunks[0];
		$mime_type_chunks = explode(";", $mime_type);
		$mime_type = $mime_type_chunks[0];
		return $mime_type;
	}

	public static function getFileExtension($filepath)
	{
		return strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
	}

	// Debugging output
	function debug()
	{
		print("File name: ".$this->getName()."\n");
		print("File location: ".$this->location->getDir(true, false, false, 0)."\n");
		print("File size: ".$this->size."\n");
		print("File modTime: ".$this->modTime."\n");
	}

	function isImage()
	{
		$type = $this->getType();
		if($type == "png" || $type == "jpg" || $type == "gif" || $type == "jpeg")
			return true;
		return false;
	}

	function isPdf()
	{
		if(strtolower($this->getType()) == "pdf")
			return true;
		return false;
	}

	public static function isPdfFile($file)
	{
		if(File::getFileType($file) == "pdf")
			return true;
		return false;
	}

	function isValidForThumb()
	{
		if($this->isImage() || ($this->isPdf() && ImageServer::isEnabledPdf()))
			return true;
		return false;
	}
}

class Location
{
	public $path;

	// Split a file path into array elements (Compatible with PHP 8 null safety)
	public static function splitPath($dir)
	{
		$dir = stripslashes($dir ?? '');
		$path1 = preg_split("/[\\\\\/]+/", $dir);
		$path2 = array();
		for($i = 0; $i < count($path1); $i++)
		{
			if($path1[$i] == ".." || $path1[$i] == "." || $path1[$i] == "")
				continue;
			$path2[] = $path1[$i];
		}
		return $path2;
	}

	// Get the current directory.
	function getDir($prefix, $encoded, $html, $up)
	{
		$dir = "";
		if($prefix == true)
			$dir .= "./";
		for($i = 0; $i < ((count($this->path) >= $up && $up > 0)?count($this->path)-$up:count($this->path)); $i++)
		{
			$temp = $this->path[$i];
			if($encoded)
				$temp = rawurlencode($temp);
			if($html)
				$temp = htmlspecialchars($temp);
			$dir .= $temp."/";
		}
		return $dir;
	}

	function getPathLink($i, $html)
	{
		if($html)
			return htmlspecialchars($this->path[$i]);
		else
			return $this->path[$i];
	}

	function getFullPath()
	{
		return (strlen(EncodeExplorer::getConfig('basedir')) > 0?EncodeExplorer::getConfig('basedir'):dirname($_SERVER['SCRIPT_FILENAME']))."/".$this->getDir(true, false, false, 0);
	}

	// Set the current directory
	function init()
	{
		if(!isset($_GET['dir']) || !is_scalar($_GET['dir']) || strlen($_GET['dir']) == 0)
		{
			$this->path = $this->splitPath(EncodeExplorer::getConfig('starting_dir'));
		}
		else
		{
			$this->path = $this->splitPath($_GET['dir']);
		}
	}

	// Checks if the current directory is below the input path
	function isSubDir($checkPath)
	{
		for($i = 0; $i < count($this->path); $i++)
		{
			if(strcmp($this->getDir(true, false, false, $i), $checkPath) == 0)
				return true;
		}
		return false;
	}

	// Check if uploading is allowed into the current directory
	function uploadAllowed()
	{
		if(EncodeExplorer::getConfig('upload_enable') != true)
			return false;
		if(EncodeExplorer::getConfig('upload_dirs') == null || count(EncodeExplorer::getConfig('upload_dirs')) == 0)
			return true;

		$upload_dirs = EncodeExplorer::getConfig('upload_dirs');
		for($i = 0; $i < count($upload_dirs); $i++)
		{
			if($this->isSubDir($upload_dirs[$i]))
				return true;
		}
		return false;
	}

	function isWritable()
	{
		return is_writable($this->getDir(true, false, false, 0));
	}

	public static function isDirWritable($dir)
	{
		return is_writable($dir);
	}

	public static function isFileWritable($file)
	{
		if(file_exists($file))
		{
			if(is_writable($file))
				return true;
			else
				return false;
		}
		else if(Location::isDirWritable(dirname($file)))
			return true;
		else
			return false;
	}
}

class EncodeExplorer
{
	public $location;
	public $dirs;
	public $files;
	public $sort_by;
	public $sort_as;
	public $mobile;
	public $logging;
	public $spaceUsed;
	public $lang;

	// Determine sorting, calculate space.
	function init()
	{
		global $_TRANSLATIONS;

		// Here we filter the comparison function (sort by) and comparison order (sort as) chosen by user
		$this->sort_by = (isset($_GET['sort_by']) && in_array($_GET['sort_by'], array('name', 'size', 'mod'))) ? $_GET['sort_by'] : 'name';
		$this->sort_as = (isset($_GET['sort_as']) && in_array($_GET['sort_as'], array('asc', 'desc'))) ? $_GET['sort_as'] : 'asc';

		// Mitigate date.timezone warning
		if(function_exists('date_default_timezone_get') && function_exists('date_default_timezone_set'))
		{
			@date_default_timezone_set(date_default_timezone_get());
		}

		if(isset($_GET['lang']) && is_scalar($_GET['lang']) && isset($_TRANSLATIONS[$_GET['lang']]))
			$this->lang = $_GET['lang'];
		else
			$this->lang = EncodeExplorer::getConfig("lang");

		$this->mobile = false;
		if(EncodeExplorer::getConfig("mobile_enabled") == true)
		{
			if((EncodeExplorer::getConfig("mobile_default") == true || isset($_GET['m'])) && !isset($_GET['s']))
				$this->mobile = true;
		}

		$this->logging = false;
		if(EncodeExplorer::getConfig("log_file") != null && strlen(EncodeExplorer::getConfig("log_file")) > 0)
			$this->logging = true;
	}

	// Read the file list from the directory
	function readDir()
	{
		global $encodeExplorer;
		if($open_dir = @opendir($this->location->getFullPath()))
		{
			$this->dirs = array();
			$this->files = array();
			while (false !== ($object = readdir($open_dir)))
			{
				if($object != "." && $object != "..")
				{
					if(is_dir($this->location->getDir(true, false, false, 0)."/".$object))
					{
						if(!in_array($object, EncodeExplorer::getConfig('hidden_dirs')))
							$this->dirs[] = new Dir($object, $this->location);
					}
					else if(!in_array($object, EncodeExplorer::getConfig('hidden_files')))
						$this->files[] = new File($object, $this->location);
				}
			}
			closedir($open_dir);
		}
		else
		{
			$encodeExplorer->setErrorString("unable_to_read_dir");
		}
	}

	// A recursive function for calculating the total used space
	function sum_dir($start_dir, $ignore_files, $levels = 1)
	{
		if ($dir = @opendir($start_dir))
		{
			$total = 0;
			while (false !== ($file = readdir($dir)))
			{
				if (!in_array($file, $ignore_files))
				{
					if ((is_dir($start_dir . '/' . $file)) && ($levels - 1 >= 0))
					{
						$total += $this->sum_dir($start_dir . '/' . $file, $ignore_files, $levels-1);
					}
					elseif (is_file($start_dir . '/' . $file))
					{
						$total += File::getFileSize($start_dir . '/' . $file) / 1024;
					}
				}
			}

			closedir($dir);
			return $total;
		}
        return 0;
	}

	function calculateSpace()
	{
		if(EncodeExplorer::getConfig('calculate_space_level') <= 0)
			return;
		$ignore_files = array('..', '.');
		$start_dir = getcwd();
		$spaceUsed = $this->sum_dir($start_dir, $ignore_files, EncodeExplorer::getConfig('calculate_space_level'));
		$this->spaceUsed = round($spaceUsed/1024, 3);
	}

	function sort()
	{
		$sort_by = in_array($this->sort_by, array('name', 'mod')) ? $this->sort_by : 'name';
		if(is_array($this->dirs)) {
			usort($this->dirs, array('EncodeExplorer', 'cmp_'.$sort_by));
			if($this->sort_as == "desc") {
				$this->dirs = array_reverse($this->dirs);
			}
		}

		$sort_by = in_array($this->sort_by, array('name', 'size', 'mod')) ? $this->sort_by : 'name';
		if(is_array($this->files)) {
			usort($this->files, array('EncodeExplorer', 'cmp_'.$sort_by));
			if($this->sort_as == "desc") {
				$this->files = array_reverse($this->files);
			}
		}
	}

	function makeArrow($sort_by)
	{
		$sort_as = ($this->sort_as == "asc") ? "desc" : "asc";
		$sort_as = ($this->sort_by == $sort_by) ? $sort_as : $this->sort_as;

		$img = ($this->sort_as == "asc") ? "arrow_up" : "arrow_down";
		$img = ($this->sort_by == $sort_by) ? "<img style=\"border:0;\" alt=\"".$sort_as."\" src=\"?img=".$img."\" />" : "";

		if($sort_by == "name")
			$text = $this->getString("file_name");
		else if($sort_by == "size")
			$text = $this->getString("size");
		else if($sort_by == "mod")
			$text = $this->getString("last_changed");

		return "<a class=\"text-decoration-none text-body\" href=\"".$this->makeLink(false, false, $sort_by, $sort_as, null, $this->location->getDir(false, true, false, 0))."\">{$text} {$img}</a>";
	}

	function makeLink($switchVersion, $logout, $sort_by, $sort_as, $delete, $dir)
	{
		$link = "?";
		if($switchVersion == true && EncodeExplorer::getConfig("mobile_enabled") == true)
		{
			if($this->mobile == false)
				$link .= "m&amp;";
			else
				$link .= "s&amp;";
		}
		else if($this->mobile == true && EncodeExplorer::getConfig("mobile_enabled") == true && EncodeExplorer::getConfig("mobile_default") == false)
			$link .= "m&amp;";
		else if($this->mobile == false && EncodeExplorer::getConfig("mobile_enabled") == true && EncodeExplorer::getConfig("mobile_default") == true)
			$link .= "s&amp;";

		if($logout == true)
		{
			$link .= "logout";
			return $link;
		}

		if(isset($this->lang) && $this->lang != EncodeExplorer::getConfig("lang"))
			$link .= "lang=".$this->lang."&amp;";

		if($sort_by != null && strlen($sort_by) > 0)
			$link .= "sort_by=".$sort_by."&amp;";

		if($sort_as != null && strlen($sort_as) > 0)
			$link .= "sort_as=".$sort_as."&amp;";

		$link .= "dir=".$dir;
		if($delete != null)
			$link .= "&amp;del=".$delete;
		return $link;
	}

	function makeIcon($l)
	{
		$l = strtolower($l);
		return "?img=".$l;
	}

	function formatModTime($time)
	{
		$timeformat = "d.m.y H:i:s";
		if(EncodeExplorer::getConfig("time_format") != null && strlen(EncodeExplorer::getConfig("time_format")) > 0)
			$timeformat = EncodeExplorer::getConfig("time_format");
		return date($timeformat, $time);
	}

	function formatSize($size)
	{
		$sizes = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB');
		$y = $sizes[0];
		for ($i = 1; (($i < count($sizes)) && ($size >= 1024)); $i++)
		{
			$size = $size / 1024;
			$y  = $sizes[$i];
		}
		return round($size, 2)." ".$y;
	}

	// Comparison functions for sorting using PHP 8.0 spaceship operator

	public static function cmp_name($a, $b)
	{
		return strnatcasecmp($a->name, $b->name);
	}

	public static function cmp_size($a, $b)
	{
		return $a->size <=> $b->size;
	}

	public static function cmp_mod($a, $b)
	{
		return $a->modTime <=> $b->modTime;
	}

	public static function getLangString($stringName, $lang)
	{
		global $_TRANSLATIONS;
		if(isset($_TRANSLATIONS[$lang]) && is_array($_TRANSLATIONS[$lang])
			&& isset($_TRANSLATIONS[$lang][$stringName]))
			return $_TRANSLATIONS[$lang][$stringName];
		else if(isset($_TRANSLATIONS["en"]))
			return $_TRANSLATIONS["en"][$stringName];
		else
			return "Translation error";
	}

	function getString($stringName)
	{
		return EncodeExplorer::getLangString($stringName, $this->lang);
	}

	public static function getConfig($name)
	{
		global $_CONFIG;
		if(isset($_CONFIG, $_CONFIG[$name]))
			return $_CONFIG[$name];
		return null;
	}

	public static function setError($message)
	{
		global $_ERROR;
		if(isset($_ERROR) && strlen($_ERROR) > 0)
			;
		else
			$_ERROR = $message;
	}

	function setErrorString($stringName)
	{
		EncodeExplorer::setError($this->getString($stringName));
	}

	// Main function, activating tasks
	function run($location)
	{
		$this->location = $location;
		$this->calculateSpace();
		$this->readDir();
		$this->sort();
		$this->outputHtml();
	}

	public function printLoginBox()
	{
		?>
		<div class="container d-flex justify-content-center align-items-center my-5">
			<div class="card shadow-sm" style="max-width: 400px; width: 100%;">
				<div class="card-header bg-primary text-white text-center">
					<h5 class="mb-0"><?php print $this->getString("log_in"); ?></h5>
				</div>
				<div class="card-body">
					<form enctype="multipart/form-data" action="<?php print $this->makeLink(false, false, null, null, null, ""); ?>" method="post">
					<?php
					if(GateKeeper::isLoginRequired())
					{
						$require_username = false;
						foreach(EncodeExplorer::getConfig("users") as $user){
							if($user[0] != null && strlen($user[0]) > 0){
								$require_username = true;
								break;
							}
						}
						if($require_username)
						{
						?>
						<div class="mb-3">
							<label for="user_name" class="form-label"><?php print $this->getString("username"); ?>:</label>
							<input type="text" name="user_name" class="form-control" id="user_name" />
						</div>
						<?php
						}
						?>
						<div class="mb-3">
							<label for="user_pass" class="form-label"><?php print $this->getString("password"); ?>:</label>
							<input type="password" name="user_pass" class="form-control" id="user_pass" />
						</div>
						<div class="d-grid">
							<button type="submit" class="btn btn-primary"><?php print $this->getString("log_in"); ?></button>
						</div>
					<?php
					}
					?>
					</form>
				</div>
			</div>
		</div>
		<?php
	}

	// Printing the actual page
	function outputHtml()
	{
		global $_ERROR;
		global $_START_TIME;
?>
<!DOCTYPE HTML>
<html lang="<?php print $this->getConfig('lang'); ?>" data-bs-theme="auto">
<head>
	<meta charset="<?php print $this->getConfig('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(EncodeExplorer::getConfig('main_title') != null) print EncodeExplorer::getConfig('main_title'); ?></title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	
	<style>
		.file-icon { width: 24px; height: 24px; object-fit: contain; }
		#thumb { position: absolute; display: none; border: 1px solid var(--bs-border-color); background: var(--bs-body-bg); padding: 4px; border-radius: 4px; z-index: 1050; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
	</style>

	<script>
		// Theme initialization before rendering to avoid flashing
		const getPreferredTheme = () => {
			if (localStorage.getItem('theme')) {
				return localStorage.getItem('theme');
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
		};
		document.documentElement.setAttribute('data-bs-theme', getPreferredTheme());
	</script>

	<?php
	if(($this->getConfig('log_file') != null && strlen($this->getConfig('log_file')) > 0)
		|| ($this->getConfig('thumbnails') != null && $this->getConfig('thumbnails') == true && $this->mobile == false)
		|| (GateKeeper::isDeleteAllowed()))
	{
	?>
	<script type="text/javascript">
	$(document).ready(function() {
		<?php if(GateKeeper::isDeleteAllowed()){ ?>
		$('.btn-delete').click(function(){
			return confirm('Are you sure you want to delete : \'' + $(this).data("name") + "\' ?");
		});
		<?php } ?>
		
		<?php if($this->logging == true) { ?>
		function logFileClick(path) {
			$.ajax({
				async: false,
				type: "POST",
				data: {log: path},
				contentType: "application/x-www-form-urlencoded; charset=UTF-8",
				cache: false
			});
		}
		$("a.file").click(function(){
			logFileClick("<?php print $this->location->getDir(true, true, false, 0);?>" + $(this).html());
			return true;
		});
		<?php } ?>

		<?php if(EncodeExplorer::getConfig("thumbnails") == true && $this->mobile == false) { ?>
		function positionThumbnail(e) {
			var xOffset = 30, yOffset = 10;
			var thumb = $("#thumb");
			thumb.css("left", (e.clientX + xOffset) + "px");
			var diff = 0;
			if(e.clientY + thumb.height() > $(window).height()) diff = e.clientY + thumb.height() - $(window).height();
			thumb.css("top", (e.pageY - yOffset - diff) + "px");
		}
		$("a.thumb").hover(function(e){
			$("#thumb").remove();
			$("body").append("<div id=\"thumb\"><img src=\"?thumb="+ $(this).attr("href") +"\" alt=\"Preview\" class=\"img-fluid\" /><\/div>");
			positionThumbnail(e);
			$("#thumb").fadeIn("fast");
		}, function(){
			$("#thumb").remove();
		}).mousemove(positionThumbnail);
		$("a.thumb").click(function(e){ $("#thumb").remove(); return true; });
		<?php } ?>
	});
	</script>
	<?php } ?>
</head>
<body class="bg-body-tertiary pb-5">

<nav class="navbar navbar-expand-lg bg-body shadow-sm mb-4">
	<div class="container">
		<?php if(EncodeExplorer::getConfig('show_top') == true): ?>
		<a class="navbar-brand fw-bold text-primary" href="<?php print $this->makeLink(false, false, null, null, null, ""); ?>">
			<i class="bi bi-folder2-open"></i> <?php if(EncodeExplorer::getConfig('main_title') != null) print EncodeExplorer::getConfig('main_title'); ?>
		</a>
		<?php endif; ?>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="topNavBar">
			<ul class="navbar-nav ms-auto align-items-center">
				<li class="nav-item me-3">
					<button class="btn btn-link nav-link px-0" id="theme-toggle" title="Toggle Dark Mode">
						<i class="bi bi-moon-stars-fill" id="theme-icon"></i>
					</button>
				</li>

				<?php if(GateKeeper::isUserLoggedIn()): ?>
					<li class="nav-item me-3 text-muted">
						<i class="bi bi-person-circle"></i> <?php print GateKeeper::getUserName(); ?>
					</li>
					<li class="nav-item">
						<a href="<?php print $this->makeLink(false, true, null, null, null, ""); ?>" class="btn btn-outline-danger btn-sm">
							<i class="bi bi-box-arrow-right"></i> <?php print $this->getString("log_out"); ?>
						</a>
					</li>
				<?php elseif(GateKeeper::showLoginBox() && GateKeeper::isAccessAllowed()): ?>
					<form class="d-flex align-items-center" method="post">
						<input type="text" name="user_name" class="form-control form-control-sm me-2" placeholder="<?php print $this->getString("username"); ?>" style="width: 120px;" />
						<input type="password" name="user_pass" class="form-control form-control-sm me-2" placeholder="<?php print $this->getString("password"); ?>" style="width: 120px;" />
						<button type="submit" class="btn btn-primary btn-sm text-nowrap"><?php print $this->getString("log_in"); ?></button>
					</form>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container my-4">
	<?php if(isset($_ERROR) && strlen($_ERROR) > 0): ?>
		<div class="alert alert-danger" role="alert"><?php print $_ERROR; ?></div>
	<?php endif; ?>

	<?php 
	if(!GateKeeper::isAccessAllowed()) {
		$this->printLoginBox();
	} else { 
	?>
	
	<?php if($this->mobile == false && EncodeExplorer::getConfig("show_path") == true): ?>
	<nav aria-label="breadcrumb" class="bg-body p-3 rounded shadow-sm mb-3">
		<ol class="breadcrumb mb-0">
			<li class="breadcrumb-item"><a href="?dir=" class="text-decoration-none"><i class="bi bi-house-door-fill"></i> <?php print $this->getString("root"); ?></a></li>
			<?php
			for($i = 0; $i < count($this->location->path); $i++) {
				$link = $this->makeLink(false, false, null, null, null, $this->location->getDir(false, true, false, count($this->location->path) - $i - 1));
				print '<li class="breadcrumb-item"><a href="'.$link.'" class="text-decoration-none">'.$this->location->getPathLink($i, true).'</a></li>';
			}
			?>
		</ol>
	</nav>
	<?php endif; ?>

	<div class="card shadow-sm mb-4 border-0">
		<div class="table-responsive">
			<table class="table table-hover align-middle mb-0">
				<thead class="table-secondary">
					<tr>
						<th scope="col" style="width: 40px;"></th>
						<th scope="col"><?php print $this->makeArrow("name");?></th>
						<?php if($this->mobile == false): ?>
						<th scope="col" class="text-end d-none d-md-table-cell"><?php print $this->makeArrow("size"); ?></th>
						<th scope="col" class="text-center d-none d-md-table-cell"><?php print $this->makeArrow("mod"); ?></th>
						<?php endif; ?>
						<?php if($this->mobile == false && GateKeeper::isDeleteAllowed()): ?>
						<th scope="col" class="text-center" style="width: 60px;"><i class="bi bi-trash"></i></th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><img alt="dir" src="?img=directory" class="file-icon" /></td>
						<td colspan="<?php print ($this->mobile == true ? 1 : (GateKeeper::isDeleteAllowed() ? 4 : 3)); ?>">
							<a href="<?php print $this->makeLink(false, false, null, null, null, $this->location->getDir(false, true, false, 1)); ?>" class="text-decoration-none fw-bold text-body">..</a>
						</td>
					</tr>
					<?php
					if($this->dirs) {
						foreach ($this->dirs as $dir) {
							print "<tr>";
							print "<td><img alt=\"dir\" src=\"?img=directory\" class=\"file-icon\" /></td>";
							print "<td><a href=\"".$this->makeLink(false, false, null, null, null, $this->location->getDir(false, true, false, 0).$dir->getNameEncoded())."\" class=\"text-decoration-none text-body fw-bold\">".$dir->getNameHtml()."</a></td>";
							if($this->mobile != true) {
								print "<td class=\"text-end d-none d-md-table-cell text-muted\">-</td>";
								print "<td class=\"text-center d-none d-md-table-cell text-muted\">".$this->formatModTime($dir->getModTime())."</td>";
							}
							if($this->mobile == false && GateKeeper::isDeleteAllowed()) {
								$delLink = $this->makeLink(false, false, null, null, $this->location->getDir(false, true, false, 0).$dir->getNameEncoded(), $this->location->getDir(false, true, false, 0));
								print "<td class=\"text-center\"><a href=\"$delLink\" class=\"btn btn-sm btn-outline-danger btn-delete\" data-name=\"".htmlentities($dir->getName())."\"><i class=\"bi bi-x-lg\"></i></a></td>";
							}
							print "</tr>";
						}
					}
					if($this->files) {
						foreach ($this->files as $file) {
							print "<tr>";
							print "<td><img alt=\"".$file->getType()."\" src=\"".$this->makeIcon($file->getType())."\" class=\"file-icon\" /></td>";
							
							$fileLink = $this->location->getDir(false, true, false, 0).$file->getNameEncoded();
							$target = (EncodeExplorer::getConfig('open_in_new_window')) ? 'target="_blank"' : '';
							$download = (EncodeExplorer::getConfig('force_download')) ? 'download' : '';
							$thumbClass = ($file->isValidForThumb()) ? 'thumb' : '';
							
							print "<td><a href=\"$fileLink\" $target class=\"text-decoration-none text-body file $thumbClass\" $download>".$file->getNameHtml();
							if($this->mobile) print " <span class=\"badge bg-secondary ms-2\">".$this->formatSize($file->getSize())."</span>";
							print "</a></td>";

							if($this->mobile != true) {
								print "<td class=\"text-end d-none d-md-table-cell text-muted\">".$this->formatSize($file->getSize())."</td>";
								print "<td class=\"text-center d-none d-md-table-cell text-muted\">".$this->formatModTime($file->getModTime())."</td>";
							}
							if($this->mobile == false && GateKeeper::isDeleteAllowed()) {
								$delLink = $this->makeLink(false, false, null, null, $this->location->getDir(false, true, false, 0).$file->getNameEncoded(), $this->location->getDir(false, true, false, 0));
								print "<td class=\"text-center\"><a href=\"$delLink\" class=\"btn btn-sm btn-outline-danger btn-delete\" data-name=\"".htmlentities($file->getName())."\"><i class=\"bi bi-x-lg\"></i></a></td>";
							}
							print "</tr>";
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<?php if(GateKeeper::isAccessAllowed() && $this->location->uploadAllowed() && (GateKeeper::isUploadAllowed() || GateKeeper::isNewdirAllowed())): ?>
	<div class="row g-3 mb-4">
		<?php if(GateKeeper::isNewdirAllowed()): ?>
		<div class="col-md-6">
			<div class="card shadow-sm h-100 border-0">
				<div class="card-body">
					<form enctype="multipart/form-data" method="post" class="d-flex align-items-center">
						<input name="userdir" type="text" class="form-control me-2" placeholder="<?php print $this->getString("make_directory"); ?>" required />
						<button type="submit" class="btn btn-success text-nowrap"><i class="bi bi-folder-plus"></i></button>
					</form>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php if(GateKeeper::isUploadAllowed()): ?>
		<div class="col-md-6">
			<div class="card shadow-sm h-100 border-0">
				<div class="card-body">
					<form enctype="multipart/form-data" method="post" class="d-flex align-items-center">
						<input name="userfile" type="file" class="form-control me-2" required />
						<button type="submit" class="btn btn-primary text-nowrap"><i class="bi bi-cloud-upload"></i> <?php print $this->getString("upload"); ?></button>
					</form>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>

	<div class="text-center text-muted small mt-5">
		<?php
		if(EncodeExplorer::getConfig("mobile_enabled") == true)
		{
			print "<a href=\"".$this->makeLink(true, false, null, null, null, $this->location->getDir(false, true, false, 0))."\" class=\"text-decoration-none text-muted\">\n";
			print ($this->mobile == true)?$this->getString("standard_version"):$this->getString("mobile_version")."\n";
			print "</a> | \n";
		}

		if(GateKeeper::isAccessAllowed() && $this->getConfig("calculate_space_level") > 0 && $this->mobile == false)
		{
			print $this->getString("total_used_space").": ".$this->spaceUsed." MB | ";
		}

		if($this->mobile == false && $this->getConfig("show_load_time") == true)
		{
			printf($this->getString("page_load_time")." | ", (microtime(TRUE) - $_START_TIME)*1000);
		}
		?>
		<a href="http://encode-explorer.siineiolekala.net" class="text-decoration-none text-muted" target="_blank">Encode Explorer</a> | <a href="https://yucdu.com" target="_blank" class="text-decoration-none text-muted"><?php print $this->getString("customized_by"); ?> YucDu</a>
	</div>

	<?php } // End of access allowed else ?>
</div>

<script>
	// Theme toggle script
	document.addEventListener('DOMContentLoaded', () => {
		const themeToggle = document.getElementById('theme-toggle');
		const themeIcon = document.getElementById('theme-icon');
		
		const setTheme = (theme) => {
			document.documentElement.setAttribute('data-bs-theme', theme);
			if(themeIcon) {
				themeIcon.className = theme === 'dark' ? 'bi bi-sun-fill text-warning' : 'bi bi-moon-stars-fill text-dark';
			}
		};

		setTheme(getPreferredTheme());

		if(themeToggle) {
			themeToggle.addEventListener('click', () => {
				const currentTheme = document.documentElement.getAttribute('data-bs-theme');
				const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
				localStorage.setItem('theme', newTheme);
				setTheme(newTheme);
			});
		}
	});
</script>

</body>
</html>
<?php
	}
}

// This is where the system is activated.
$encodeExplorer = new EncodeExplorer();
$encodeExplorer->init();

GateKeeper::init();

if(!ImageServer::showImage() && !Logger::logQuery())
{
	$location = new Location();
	$location->init();
	if(GateKeeper::isAccessAllowed())
	{
		Logger::logAccess($location->getDir(true, false, false, 0), true);
		$fileManager = new FileManager();
		$fileManager->run($location);
	}
	$encodeExplorer->run($location);
}
?>
