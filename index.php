<?php
/***************************************************************************
 *
 * Encode Explorer (Bootstrap 5 & PHP 8.0+ Mod)
 *
 * Author : Marek Rei (marek ät marekrei dot com)
 * Modified : Upgraded to v7.0.0 (UI/UX Redesign, Themes, BS Icons, Mobile Auth)
 * Version : 7.0.0
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

$_CONFIG = array();
$_ERROR = "";
$_START_TIME = microtime(TRUE);

/* GENERAL SETTINGS */
$_CONFIG['lang'] = "zh_TW";
$_CONFIG['thumbnails'] = true;
$_CONFIG['thumbnails_width'] = 300;
$_CONFIG['thumbnails_height'] = 300;
$_CONFIG['mobile_enabled'] = true;
$_CONFIG['mobile_default'] = false;

/* USER INTERFACE */
$_CONFIG['open_in_new_window'] = false;
$_CONFIG['force_download'] = false;
$_CONFIG['calculate_space_level'] = 0;
$_CONFIG['show_top'] = true;
$_CONFIG['main_title'] = "Encode Explorer";
$_CONFIG['secondary_titles'] = array();
$_CONFIG['show_path'] = true;
$_CONFIG['show_load_time'] = true;
$_CONFIG['time_format'] = "Y-m-d H:i:s";
$_CONFIG['charset'] = "UTF-8";

/* PERMISSIONS */
$_CONFIG['hidden_dirs'] = array();
$_CONFIG['hidden_files'] = array(".ftpquota", "index.php", "index.php~", ".htaccess", ".htpasswd");
$_CONFIG['require_login'] = false;
$_CONFIG['users'] = array();
$_CONFIG['upload_enable'] = true;
$_CONFIG['newdir_enable'] = true;
$_CONFIG['delete_enable'] = false;

/* UPLOADING */
$_CONFIG['upload_dirs'] = array();
$_CONFIG['upload_allow_type'] = array();
$_CONFIG['upload_reject_extension'] = array("php", "php2", "php3", "php4", "php5", "phtml");
$_CONFIG['new_dir_mode'] = 0755;
$_CONFIG['upload_file_mode'] = 0644;

/* LOGGING */
$_CONFIG['upload_email'] = "";
$_CONFIG['log_file'] = "";

/* SYSTEM */
$_CONFIG['starting_dir'] = ".";
$_CONFIG['basedir'] = "";
$_CONFIG['large_files'] = false;
$_CONFIG['session_name'] = "";

/***************************************************************************/
/* TRANSLATIONS.                                                         */
/***************************************************************************/

$_TRANSLATIONS = array();

// Albanian
$_TRANSLATIONS["al"] = array(
	"file_name" => "Emri Skedarit", "size" => "Madhësia", "last_changed" => "Ndryshuar", "total_used_space" => "Memorija e përdorur total", "free_space" => "Memorija e lirë", "password" => "Fjalëkalimi", "upload" => "Ngarko skedarë", "failed_upload" => "Ngarkimi i skedarit dështoi!", "failed_move" => "Lëvizja e skedarit në udhëzuesin e saktë deshtoi!", "wrong_password" => "Fjalëkalimi i Gabuar!!", "make_directory" => "New dir", "new_dir_failed" => "Failed to create directory", "chmod_dir_failed" => "Failed to change directory rights", "unable_to_read_dir" => "Unable to read directory", "location" => "Location", "root" => "Root", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Bulgarian
$_TRANSLATIONS["bg"] = array(
	"file_name" => "Име", "size" => "Размер", "last_changed" => "Последна промяна", "total_used_space" => "Общо използвано", "free_space" => "Свободно място", "password" => "Парола", "upload" => "Качване", "failed_upload" => "Неуспешно качване на файла!", "failed_move" => "Неуспешно преместване на файла в правилната директория!", "wrong_password" => "Грешна парола", "make_directory" => "Нова директория", "new_dir_failed" => "Грешка при създаване на директорията", "chmod_dir_failed" => "Грешка при смяна правата до директорията", "unable_to_read_dir" => "Директорията не може да бъде прочетена", "location" => "Път", "root" => "Корен", "log_file_permission_error" => "Скриптът няма права за запис в лог файла.", "upload_not_allowed" => "Настройките на скрипта не позволяват качване в тази директория.", "upload_dir_not_writable" => "Нямате право за запис в тази директория.", "mobile_version" => "Мобилна версия", "standard_version" => "Стандартен изглед", "page_load_time" => "Страницата е генерирана за %.2f мс", "wrong_pass" => "Грешен потребител или парола", "username" => "Потребител", "log_in" => "Вход", "upload_type_not_allowed" => "Този файлов формат е забранен за качване.", "del" => "Изтриване", "log_out" => "Изход", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

//Catalan
$_TRANSLATIONS["ca"] = array(
	"file_name" => "Nom d'arxiu", "size" => "Mida", "last_changed" => "Última modificació", "total_used_space" => "Total espai emprat", "free_space" => "Espai lliure", "password" => "Paraula de pass", "upload" => "Pujar arxiu", "failed_upload" => "Error al pujar l'arxiu!", "failed_move" => "Error al moure l'arxiu al directori seleccionat!", "wrong_password" => "Paraula de pas incorrecta", "make_directory" => "Crear directori", "new_dir_failed" => "Error al crear el directori", "chmod_dir_failed" => "Error al canviar els permisos del directori", "unable_to_read_dir" => "No es possible llegir el directori", "location" => "Traducció", "root" => "Arrel", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Czech
$_TRANSLATIONS["cz"] = array(
	"file_name" => "Název souboru", "size" => "Velikost", "last_changed" => "Změněno", "total_used_space" => "Obsazený prostor", "free_space" => "Volný prostor", "password" => "Heslo", "upload" => "Nahrát", "failed_upload" => "Nahrávání se nezdařilo!", "failed_move" => "Přesun souboru do určeného adresáře se nezdařil!", "wrong_password" => "Chybné heslo", "make_directory" => "Nový adresář", "new_dir_failed" => "Vytvoření adresáře se nezdařilo", "chmod_dir_failed" => "Změna práv adresáře se nezdařila", "unable_to_read_dir" => "Chyba při čtení adresáře", "location" => "Umístění", "root" => "Kořenový adresář", "log_file_permission_error" => "Skript nemá oprávnění k zápisu do souboru protokolu.", "upload_not_allowed" => "Konfigurační skript neumožňuje nahrávání v tomto adresáři.", "upload_dir_not_writable" => "Tento adresář nemá oprávnění k zápisu.", "mobile_version" => "Zobrazení pro mobil", "standard_version" => "Standardní zobrazení", "page_load_time" => "Stránka nahrána za %.2f ms", "wrong_pass" => "Špatné uživatelské jméno nebo heslo", "username" => "Uživatelské jméno", "log_in" => "Přihlásit se", "upload_type_not_allowed" => "Tento typ souboru není povolen pro nahrávání.", "del" => "Smazat", "log_out" => "Odhlásit se", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Dutch
$_TRANSLATIONS["nl"] = array(
	"file_name" => "Bestandsnaam", "size" => "Omvang", "last_changed" => "Laatst gewijzigd", "total_used_space" => "Totaal gebruikte ruimte", "free_space" => "Beschikbaar", "password" => "Wachtwoord", "upload" => "Upload", "failed_upload" => "Fout bij uploaden van bestand!", "failed_move" => "Fout bij het verplaatsen van tijdelijk uploadbestand!", "wrong_password" => "Fout wachtwoord!", "make_directory" => "Nieuwe folder", "new_dir_failed" => "Fout bij aanmaken folder!", "chmod_dir_failed" => "Rechten konden niet gewijzigd worden!", "unable_to_read_dir" => "Niet mogelijk om directorie te lezen", "location" => "Locatie", "root" => "Root", "log_file_permission_error" => "Script heeft geen toegang tot het logbestand.", "upload_not_allowed" => "Uploaden van bestanden is niet toegestaan.", "upload_dir_not_writable" => "Het is niet toegestaan in deze directorie bestanden te plaatsen.", "mobile_version" => "Mobiele weergave", "standard_version" => "Standaard weergave", "page_load_time" => "Pagina geladen in %.2f ms", "wrong_pass" => "Foutieve gebruikersnaam of wachtwoord", "username" => "Gebruikersnaam", "log_in" => "Inloggen", "upload_type_not_allowed" => "Dit type bestand is niet toegestaan.", "del" => "Verwijder", "log_out" => "Uitloggen", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// English
$_TRANSLATIONS["en"] = array(
	"file_name" => "File name", "size" => "Size", "last_changed" => "Last updated", "total_used_space" => "Total space used", "free_space" => "Free space", "password" => "Password", "upload" => "Upload", "failed_upload" => "Failed to upload the file!", "failed_move" => "Failed to move the file into the right directory!", "wrong_password" => "Wrong password", "make_directory" => "New directory", "new_dir_failed" => "Failed to create directory", "chmod_dir_failed" => "Failed to change directory rights", "unable_to_read_dir" => "Unable to read directory", "location" => "Location", "root" => "Root", "log_file_permission_error" => "The script does not have permissions to write the log file.", "upload_not_allowed" => "The script configuration does not allow uploading in this directory.", "upload_dir_not_writable" => "This directory does not have write permissions.", "mobile_version" => "Mobile view", "standard_version" => "Standard view", "page_load_time" => "Page loaded in %.2f ms", "wrong_pass" => "Wrong username or password", "username" => "Username", "log_in" => "Log in", "upload_type_not_allowed" => "This file type is not allowed for uploading.", "del" => "Delete", "log_out" => "Log out", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Estonian
$_TRANSLATIONS["et"] = array(
	"file_name" => "Faili nimi", "size" => "Suurus", "last_changed" => "Viimati muudetud", "total_used_space" => "Kokku kasutatud", "free_space" => "Vaba ruumi", "password" => "Parool", "upload" => "Uploadi", "failed_upload" => "Faili ei &otilde;nnestunud serverisse laadida!", "failed_move" => "Faili ei &otilde;nnestunud &otilde;igesse kausta liigutada!", "wrong_password" => "Vale parool", "make_directory" => "Uus kaust", "new_dir_failed" => "Kausta loomine ebaõnnestus", "chmod_dir_failed" => "Kausta õiguste muutmine ebaõnnestus", "unable_to_read_dir" => "Unable to read directory", "location" => "Asukoht", "root" => "Peakaust", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Finnish
$_TRANSLATIONS["fi"] = array(
	"file_name" => "Tiedoston nimi", "size" => "Koko", "last_changed" => "Muokattu", "total_used_space" => "Yhteenlaskettu koko", "free_space" => "Vapaa tila", "password" => "Salasana", "upload" => "Lisää tiedosto", "failed_upload" => "Tiedoston lisäys epäonnistui!", "failed_move" => "Tiedoston siirto kansioon epäonnistui!", "wrong_password" => "Väärä salasana", "make_directory" => "Uusi kansio", "new_dir_failed" => "Uuden kansion luonti epäonnistui!", "chmod_dir_failed" => "Kansion käyttäjäoikeuksien muuttaminen epäonnistui!", "unable_to_read_dir" => "Kansion sisältöä ei voi lukea.", "location" => "Paikka", "root" => "Juurihakemisto", "log_file_permission_error" => "Ohjelman ei ole sallittu kirjoittaa lokiin.", "upload_not_allowed" => "Ohjelman asetukset eivät salli tiedoston lisäämistä tähän kansioon.", "upload_dir_not_writable" => "Kansioon tallentaminen epäonnistui.", "mobile_version" => "Mobiilinäkymä", "standard_version" => "Tavallinen näkymä", "page_load_time" => "Sivu ladattu %.2f ms:ssa", "wrong_pass" => "Väärä käyttäjätunnus tai salasana", "username" => "Käyttäjätunnus", "log_in" => "Kirjaudu sisään", "log_out" => "Kirjaudu ulos", "upload_type_not_allowed" => "Tämän tiedostotyypin lisääminen on estetty.", "del" => "Poista", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// French
$_TRANSLATIONS["fr"] = array(
	"file_name" => "Nom de fichier", "size" => "Taille", "last_changed" => "Modifi&eacute; le", "total_used_space" => "Espace total utilis&eacute;", "free_space" => "Espace libre", "password" => "Mot de passe", "upload" => "Ajouter", "failed_upload" => "Erreur lors de l'envoi", "failed_move" => "Erreur lors du d&eacute;placement", "wrong_password" => "Identifiant ou mot de passe incorrect", "make_directory" => "Nouveau dossier", "new_dir_failed" => "Erreur lors de la cr&eacute;ation du dossier", "chmod_dir_failed" => "Impossible de changer les permissions du dossier", "unable_to_read_dir" => "Impossible de lire le dossier", "location" => "Localisation", "root" => "Racine", "log_file_permission_error" => "Le script n'a pas la permission d'&eacute;crire dans le fichier de logs.", "upload_not_allowed" => "La configuration du script ne permet pas d'ajouter un fichier ici.", "upload_dir_not_writable" => "Ce dossier ne possède pas de permission en &eacute;criture.", "mobile_version" => "Version mobile", "standard_version" => "Version standard", "page_load_time" => "Page chargée en %.2f ms", "wrong_pass" => "Identifiant ou mot de passe incorrect", "username" => "Identifiant", "log_in" => "Connexion", "upload_type_not_allowed" => "L'envoi de ce type de fichier n'est pas permis.", "del" => "Supprimer", "log_out" => "D&eacute;connexion", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// German
$_TRANSLATIONS["de"] = array(
	"file_name" => "Dateiname", "size" => "Gr&ouml;&szlig;e", "last_changed" => "Letzte &Auml;nderung", "total_used_space" => "Benutzter Speicherplatz", "free_space" => "Freier Speicherplatz", "password" => "Passwort", "upload" => "Upload", "failed_upload" => "Upload ist fehlgeschlagen!", "failed_move" => "Verschieben der Datei ist fehlgeschlagen!", "wrong_password" => "Falsches Passwort", "make_directory" => "Neuer Ordner", "new_dir_failed" => "Erstellen des Ordners fehlgeschlagen", "chmod_dir_failed" => "Ver&auml;nderung der Zugriffsrechte des Ordners fehlgeschlagen", "unable_to_read_dir" => "Ordner konnte nicht gelesen werden", "location" => "Ort", "root" => "Wurzelverzeichnis", "log_file_permission_error" => "Das Script kann wegen fehlenden Berechtigungen keine Log Datei schreiben.", "upload_not_allowed" => "Die Scriptkonfiguration erlaubt kein Hochladen in dieses Verzeichnis.", "upload_dir_not_writable" => "Dieser Ordner besitzt keine Schreibrechte.", "mobile_version" => "Mobile Ansicht", "standard_version" => "Normale Ansicht", "page_load_time" => "Die Seite wurde in %.2f ms geladen", "wrong_pass" => "Benutzername oder Kennwort falsch", "username" => "Benutzername", "log_in" => "Einloggen", "upload_type_not_allowed" => "Dieser Dateityp darf nicht hochgeladen werden.", "del" => "Entfernen", "log_out" => "Ausloggen", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Greek
$_TRANSLATIONS["el"] = array(
	"file_name" => "Όνομα αρχείου", "size" => "Μέγεθος", "last_changed" => "Τελευταία τροποποίηση", "total_used_space" => "Χρησιμοποιημένος χώρος", "free_space" => "Ελεύθερος χώρος", "password" => "Κωδικός", "upload" => "Φόρτωση", "failed_upload" => "Αποτυχία φόρτωσης αρχείου!", "failed_move" => "Αποτυχία μεταφοράς αρχείου στον κατάλληλο φάκελο!", "wrong_password" => "Λάθος κωδικός", "make_directory" => "Νέος Φάκελος", "new_dir_failed" => "Αποτυχία δημιουργίας φακέλου", "chmod_dir_failed" => "Αποτυχία τροποποίησης δικαιωμάτων φακέλου", "unable_to_read_dir" => "Αδυναμία ανάγνωσης φακέλου", "location" => "Τοποθεσία", "root" => "Ριζικός φάκελος", "log_file_permission_error" => "Το πρόγραμμα δεν έχει δικαιώματα εγγραφής στο αρχείο καταγραφής.", "upload_not_allowed" => "Οι ρυθμίσεις του προγράμματος δεν επιτρέπουν φόρτωση αρχείων σε αυτό τον φάκελο.", "upload_dir_not_writable" => "Αυτός ο φάκελος δεν έχει δικαιώματα για εγγραφή.", "mobile_version" => "Φορητή προβολή", "standard_version" => "Τυπική προβολή", "page_load_time" => "Η σελίδα φορτώθηκε σε %.2f ms", "wrong_pass" => "Λάθος όνομα χρήστη ή κωδικός πρόσβασης", "username" => "Όνομα χρήστη", "log_in" => "Σύνδεση", "upload_type_not_allowed" => "Αυτός ο τύπος αρχείου δεν επιτρέπεται να φορτωθεί.", "del" => "Διαγραφή", "log_out" => "Αποσύνδεση", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Spanish
$_TRANSLATIONS["es"] = array(
	"file_name" => "Nombre del archivo", "size" => "Tamaño", "last_changed" => "Último cambio", "total_used_space" => "Espacio total usado", "free_space" => "Espacio libre", "password" => "Contraseña", "upload" => "Subir el archivo", "failed_upload" => "¡Error al subir el archivo!", "failed_move" => "¡Error al mover el archivo al directorio seleccionado!", "wrong_password" => "Contraseña incorrecta", "make_directory" => "Crear directorio", "new_dir_failed" => "Error al crear el directorio", "chmod_dir_failed" => "Error al cambiar los permisos del directorio", "unable_to_read_dir" => "No es posible leer el directorio", "location" => "Localización", "root" => "Raíz", "log_file_permission_error" => "El script no tiene permisos para escribir en el archivo de registro.", "upload_not_allowed" => "La configuración del script no permite subir archivos en este directorio.", "upload_dir_not_writable" => "Este directorio no tiene permisos de escritura.", "mobile_version" => "Vista móvil", "standard_version" => "Vista estándar", "page_load_time" => "Página cargada en %.2f ms", "wrong_pass" => "Nombre de usuario o contraseña incorrectos", "username" => "Usuario", "log_in" => "Iniciar sesión", "upload_type_not_allowed" => "Este tipo de archivo no está permitido para la subida.", "del" => "Eliminar", "log_out" => "Cerrar sesión", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Esperanto
$_TRANSLATIONS["eo"] = array(
	"file_name" => "Dosiernomo", "size" => "Grando", "last_changed" => "Lasta ŝanĝo", "total_used_space" => "Uzata spaco", "free_space" => "Disponebla spaco", "password" => "pasvorto", "upload" => "Alŝuto", "failed_upload" => "Alŝuto malsukcesis!", "failed_move" => "Movo de la dosiero malsukcesis!", "wrong_password" => "Malĝusta pasvorto", "make_directory" => "Nova dosierujo", "new_dir_failed" => "Kreado de dosierujo malsukcesis", "chmod_dir_failed" => "Ŝanĝo de dosierujaj rajtoj malsukcesis", "unable_to_read_dir" => "Dosierujo ne estas legebla", "location" => "Loko", "root" => "Radiko", "log_file_permission_error" => "La skripto ne rajtas skribi la protokolan dosieron.", "upload_not_allowed" => "La skripto malpermesas alŝuti en ĉi tiun dosierujon.", "upload_dir_not_writable" => "Ĉi tiu dosierujo ne rajtigas skribadon.", "mobile_version" => "Vido por mobilaj iloj", "standard_version" => "Defaŭlta vido", "page_load_time" => "Paĝo ŝarĝita en %.2f ms", "wrong_pass" => "Malĝusta salutnomo aŭ pasvorto", "username" => "Salutnomo", "log_in" => "Ensaluto", "upload_type_not_allowed" => "Alŝuto estas malpermesita por ĉi tiu dosiertipo.", "del" => "For", "log_out" => "Adiaŭo", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Hungarian
$_TRANSLATIONS["hu"] = array(
	"file_name" => "Fájl név", "size" => "Méret", "last_changed" => "Utolsó módosítás", "total_used_space" => "Összes elfoglalt terület", "free_space" => "Szabad terület", "password" => "Jelszó", "upload" => "Feltöltés", "failed_upload" => "A fájl feltöltése nem sikerült!", "failed_move" => "A fájl mozgatása nem sikerült!", "wrong_password" => "Hibás jelszó", "make_directory" => "Új mappa", "new_dir_failed" => "A mappa létrehozása nem sikerült", "chmod_dir_failed" => "A mappa jogainak megváltoztatása nem sikerült", "unable_to_read_dir" => "A mappa nem olvasható", "location" => "Hely", "root" => "Gyökér", "log_file_permission_error" => "A log fájl írása jogosultsági okok miatt nem sikerült.", "upload_not_allowed" => "Ebbe a mappába a feltöltés nem engedélyezett.", "upload_dir_not_writable" => "A mappa nem írható.", "mobile_version" => "Mobil nézet", "standard_version" => "Web nézet", "page_load_time" => "Letöltési id? %.2f ms", "wrong_pass" => "Rossz felhasználónév vagy jelszó", "username" => "Felhasználónév", "log_in" => "Belépés", "upload_type_not_allowed" => "A fájltípus feltöltése tiltott.", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Italian
$_TRANSLATIONS["it"] = array(
	"file_name" => "Nome file", "size" => "Dimensione", "last_changed" => "Ultima modifica", "total_used_space" => "Totale spazio usato", "free_space" => "Spazio disponibile", "password" => "Parola chiave", "upload" => "Caricamento file", "failed_upload" => "Caricamento del file fallito!", "failed_move" => "Spostamento del file nella cartella fallito!", "wrong_password" => "Password sbagliata", "make_directory" => "Nuova cartella", "new_dir_failed" => "Creazione cartella fallita!", "chmod_dir_failed" => "Modifica dei permessi della cartella fallita!", "unable_to_read_dir" => "Non abilitato a leggere la cartella", "location" => "Posizione", "root" => "Indice", "log_file_permission_error" => "Lo script non ha i permessi per scrivere il file di log.", "upload_not_allowed" => "La configurazione dello script non permette l'upload in questa cartella.", "upload_dir_not_writable" => "Questa cartella non ha i permessi di scrittura.", "mobile_version" => "Visualizzazione Mobile", "standard_version" => "Visualizzazione Standard", "page_load_time" => "Page aperta in %.2f min", "wrong_pass" => "Username o password errati", "username" => "Username", "log_in" => "Log in", "upload_type_not_allowed" => "Questo formato di file non è abilitato per l'upload.", "del" => "Cancella", "log_out" => "Esci", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Korean
$_TRANSLATIONS["ko"] = array(
	"file_name" => "이름", "size" => "크기", "last_changed" => "마지막 수정", "total_used_space" => "사용한 공간", "free_space" => "남은 공간", "password" => "비밀번호", "upload" => "올리기", "failed_upload" => "파일을 올릴 수 없습니다.", "failed_move" => "파일을 옮길 수 없습니다.", "wrong_password" => "비밀번호가 올바르지 않습니다.", "make_directory" => "만들기", "new_dir_failed" => "폴더를 만들 수 없습니다.", "chmod_dir_failed" => "권한 설정을 할 수 없습니다.", "unable_to_read_dir" => "폴더를 읽을 수 없습니다.", "location" => "위치", "root" => "최상위 폴더", "log_file_permission_error" => "로그 파일의 위치에 쓰기 권한을 가지고 있지 않습니다.", "upload_not_allowed" => "이 위치에 올릴 수 없습니다.", "upload_dir_not_writable" => "이 위치에 쓰기 권한을 가지고 있지 않습니다.", "mobile_version" => "모바일 버전으로 보기", "standard_version" => "표준 화면으로 보기", "page_load_time" => "페이지 로드 %.2f ms", "wrong_pass" => "사용자 이름 또는 비밀번호가 올바르지 않습니다.", "username" => "사용자 이름", "log_in" => "로그인", "upload_type_not_allowed" => "이 종류의 파일은 올릴 수 없습니다.", "del" => "삭제", "log_out" => "로그아웃", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
); 

// Lithuanian
$_TRANSLATIONS["lt"] = array(
	"file_name" => "Pavadinimas", "size" => "Dydis", "last_changed" => "Paskutiniai pakeitimai", "total_used_space" => "Visa naudojama vieta", "free_space" => "Laisva vieta", "password" => "Slaptažodis", "upload" => "Įkelti", "failed_upload" => "Įkėlimas nepavyko", "failed_move" => "Failo perkėlimas nepavyko", "wrong_password" => "Klaidingas slaptažodis", "make_directory" => "Kurti aplanką", "new_dir_failed" => "Aplanko sukurti nepavyko", "chmod_dir_failed" => "Privilegijų keitimas nepavyko", "unable_to_read_dir" => "Nepavyko atverti aplanko", "location" => "Vieta", "root" => "Šakninis", "log_file_permission_error" => "Šis skriptas neturi teisių rašyti log failo.", "upload_not_allowed" => "Šis skriptas neleidžia failų įklimo į šį aplanką.", "upload_dir_not_writable" => "Neturite teisių rašyti į šį aplanką.", "mobile_version" => "Versija mobiliesiems", "standard_version" => "Paprasta versija", "page_load_time" => "Puslapis įkeltas per %.2f ms", "wrong_pass" => "Klaidingas vartotojo vardas ar slaptažodis", "username" => "Vartotojo vardas", "log_in" => "Prisijungti", "upload_type_not_allowed" => "Šio tipo failų įkelti negalima.", "del" => "Trinti", "log_out" => "Atsijungti", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Norwegian
$_TRANSLATIONS["no"] = array(
	"file_name" => "Navn", "size" => "Størrelse", "last_changed" => "Endret", "total_used_space" => "Brukt plass", "free_space" => "Resterende plass", "password" => "Passord", "upload" => "Last opp", "failed_upload" => "Opplasting gikk galt", "failed_move" => "Kunne ikke flytte objektet", "wrong_password" => "Feil passord", "make_directory" => "Ny mappe", "new_dir_failed" => "Kunne ikke lage ny mappe", "chmod_dir_failed" => "Kunne ikke endre rettigheter", "unable_to_read_dir" => "Kunne ikke lese mappen", "location" => "Område", "root" => "Rot", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

//Polish
$_TRANSLATIONS["pl"] = array(
	"file_name" => "Nazwa pliku", "size" => "Rozmiar", "last_changed" => "Data zmiany", "total_used_space" => "Cała przestrzeń", "free_space" => "Wolna przestrzeń", "password" => "Hasło", "upload" => "Prześlij", "failed_upload" => "Przesłanie pliku nie powiodło się", "failed_move" => "Przenoszenie pliku nie powiodło się!", "wrong_password" => "Niepoprawne hasło", "make_directory" => "Nowy folder", "new_dir_failed" => "Błąd podczas tworzenia nowego folderu", "chmod_dir_failed" => "Błąd podczas zmiany uprawnień folderu", "unable_to_read_dir" => "Odczytanie folderu nie powiodło się", "location" => "Miejsce", "root" => "Start", "log_file_permission_error" => "Brak uprawnień aby utworzyć dziennik działań.", "upload_not_allowed" => "Konfiguracja zabrania przesłania pliku do tego folderu.", "upload_dir_not_writable" => "Nie można zapisać pliku do tego folderu.", "mobile_version" => "Wersja mobilna", "standard_version" => "Widok standardowy", "page_load_time" => "Załadowano w %.2f ms", "wrong_pass" => "Niepoprawna nazwa użytkownika lub złe hasło", "username" => "Użytkownik", "log_in" => "Zaloguj się", "upload_type_not_allowed" => "Ten rodzaj pliku jest zabroniony.", "del" => "Kasuj", "log_out" => "Wyloguj się", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Portuguese (Brazil)
$_TRANSLATIONS["pt_BR"] = array(
	"file_name" => "Nome do arquivo", "size" => "Tamanho", "last_changed" => "Modificado em", "total_used_space" => "Total de espaço utilizado", "free_space" => "Espaço livre", "password" => "Senha", "upload" => "Enviar", "failed_upload" => "Falha ao enviar o arquivo!", "failed_move" => "Falha ao mover o arquivo para o diretório correto!", "wrong_password" => "Senha errada", "make_directory" => "Nova pasta", "new_dir_failed" => "Falha ao criar diretório", "chmod_dir_failed" => "Falha ao mudar os privilégios do diretório", "unable_to_read_dir" => "Não foi possível ler o diretório", "location" => "Localização", "root" => "Raíz", "log_file_permission_error" => "O script não tem permissão para escrever o arquivo de log.", "upload_not_allowed" => "A configuração do script não permite envios neste diretório.", "upload_dir_not_writable" => "Não há permissão para escrita neste diretório.", "mobile_version" => "Versão Móvel", "standard_version" => "Versão Padrão", "page_load_time" => "Página carregada em %.2f ms", "wrong_pass" => "Nome de usuário ou senha errados", "username" => "Nome de Usuário", "log_in" => "Log in", "upload_type_not_allowed" => "Não é permitido envio de arquivos deste tipo.", "del" => "Deletar", "log_out" => "Log out", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Portuguese (Portugal)
$_TRANSLATIONS["pt_PT"] = array(
	"file_name" => "Nome do ficheiro", "size" => "Tamanho", "last_changed" => "Modificado em", "total_used_space" => "Total de espaço utilizado", "free_space" => "Espaço livre", "password" => "Palavra-passe", "upload" => "Enviar", "failed_upload" => "Falha ao enviar o ficheiro!", "failed_move" => "Falha ao mover o ficheiro para a pasta correcta!", "wrong_password" => "Palavra-passe errada", "make_directory" => "Nova pasta", "new_dir_failed" => "Falha ao criar pasta", "chmod_dir_failed" => "Falha ao mudar os privilégios da pasta", "unable_to_read_dir" => "Não foi possível ler a pasta", "location" => "Localização", "root" => "Raíz", "log_file_permission_error" => "O script não tem permissão para escrever o ficheiro de log.", "upload_not_allowed" => "A configuração do script não permite envios para esta pasta.", "upload_dir_not_writable" => "Não há permissão para escrita nesta pasta.", "mobile_version" => "Versão Móvel", "standard_version" => "Versão Padrão", "page_load_time" => "Página carregada em %.2f ms", "wrong_pass" => "Nome de utilizador ou palavra-passe incorrectos", "username" => "Nome de utilizador", "log_in" => "Entrar", "upload_type_not_allowed" => "Não é permitido o envio de ficheiros deste tipo.", "del" => "Apagar", "log_out" => "Sair", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Romanian
$_TRANSLATIONS["ro"] = array(
	"file_name" => "Nume fisier", "size" => "Marime", "last_changed" => "Ultima modificare", "total_used_space" => "Spatiu total utilizat", "free_space" => "Spatiu disponibil", "password" => "Parola", "upload" => "Incarcare fisier", "failed_upload" => "Incarcarea fisierului a esuat!", "failed_move" => "Mutarea fisierului in alt director a esuat!", "wrong_password" => "Parol gresita!", "make_directory" => "Director nou", "new_dir_failed" => "Eroare la crearea directorului", "chmod_dir_failed" => "Eroare la modificarea drepturilor pe director", "unable_to_read_dir" => "Nu s-a putut citi directorul", "location" => "Locatie", "root" => "Root", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Russian
$_TRANSLATIONS["ru"] = array(
	"file_name" => "Имя файла", "size" => "Размер", "last_changed" => "Последнее изменение", "total_used_space" => "Всего использовано", "free_space" => "Свободно", "password" => "Пароль", "upload" => "Загрузка", "failed_upload" => "Не удалось загрузить файл!", "failed_move" => "Не удалось переместить файл в нужную папку!", "wrong_password" => "Неверный пароль", "make_directory" => "Новая папка", "new_dir_failed" => "Не удалось создать папку", "chmod_dir_failed" => "Не удалось изменить права доступа к папке", "unable_to_read_dir" => "Не возможно прочитать папку", "location" => "Расположение", "root" => "Корневая папка", "log_file_permission_error" => "Скрипт не имеет прав для записи лога файла.", "upload_not_allowed" => "Загрузка в эту папку запрещена в настройках скрипта", "upload_dir_not_writable" => "В эту папку запрещена запись", "mobile_version" => "Мобильный вид", "standard_version" => "Обычный вид", "page_load_time" => "Страница загружена за %.2f мс.", "wrong_pass" => "Неверное имя пользователя или пароль", "username" => "Имя пользователя", "log_in" => "Войти", "upload_type_not_allowed" => "Этот тип файла запрещено загружать", "del" => "удалить", "log_out" => "выйти", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Slovensky
$_TRANSLATIONS["sk"] = array(
	"file_name" => "Meno súboru", "size" => "Veľkosť", "last_changed" => "Posledná zmena", "total_used_space" => "Použité miesto celkom", "free_space" => "Voľné miesto", "password" => "Heslo", "upload" => "Nahranie súborov", "failed_upload" => "Chyba nahrávania súboru!", "failed_move" => "Nepodarilo sa presunúť súbor do vybraného adresára!", "wrong_password" => "Neplatné heslo!", "make_directory" => "Nový priečinok", "new_dir_failed" => "Nepodarilo sa vytvoriť adresár!", "chmod_dir_failed" => "Nepodarilo sa zmeniť práva adresára!", "unable_to_read_dir" => "Nemôžem čítať adresár", "location" => "Umiestnenie", "root" => "Domov", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Swedish
$_TRANSLATIONS["sv"] = array(
	"file_name" => "Filnamn", "size" => "Storlek", "last_changed" => "Senast ändrad", "total_used_space" => "Totalt upptaget utrymme", "free_space" => "Ledigt utrymme", "password" => "Lösenord", "upload" => "Ladda upp", "failed_upload" => "Fel vid uppladdning av fil!", "failed_move" => "Fel vid flytt av fil till mapp!", "wrong_password" => "Fel lösenord", "make_directory" => "Ny mapp", "new_dir_failed" => "Fel vid skapande av mapp", "chmod_dir_failed" => "Fel vid ändring av mappens egenskaper", "unable_to_read_dir" => "Kan inte lasa den filen", "location" => "Plats", "root" => "Hem", "log_file_permission_error" => "Scriptet har inte behörighet att skriva till loggfilen.", "upload_not_allowed" => "Skriptets konfiguration tillåter inte uppladdning till denna katalog.", "upload_dir_not_writable" => "Denna katalog har inte behörigheter för att skriva.", "mobile_version" => "Mobilvisning", "standard_version" => "Standardvisning", "page_load_time" => "Sidan laddades på %.2f ms", "wrong_pass" => "Fel användarnamn eller lösenord", "username" => "Användarnamn", "log_in" => "Logga in", "upload_type_not_allowed" => "Denna filtyp är det inte tillåtet att ladda upp.", "del" => "Ta bort", "log_out" => "Logga ut", "customized_by" => "Customized by", "theme" => "Theme", "language" => "Language"
);

// Turkish
$_TRANSLATIONS["tr"] = array(
	"file_name" => "Dosya Adı", "size" => "Boyut", "last_changed" => "Son Değişiklik", "total_used_space" => "Toplam Kullanılan Alan", "free_space" => "Boş Alan", "password" => "Parola", "upload" => "Yükle", "failed_upload" => "Dosya yüklemesi başarısız!", "failed_move" => "Dosyanın doğru klasöre taşınması başarısız!", "wrong_password" => "Hatalı Parola", "make_directory" => "Yeni Klasör", "new_dir_failed" => "Klasör oluşturma başarısız", "chmod_dir_failed" => "Klasör izinleri değiştirme başarısız", "unable_to_read_dir" => "Klasör okunamadı", "location" => "Konum", "root" => "Ana Klasör", "log_file_permission_error" => "Log dosyası oluşturulurken yetersiz izin hatası.", "upload_not_allowed" => "Konfigürasyon bu klasöre dosya yüklemeye izin vermiyor.", "upload_dir_not_writable" => "Bu klasör yazma izinlerine sahip değil.", "mobile_version" => "Mobil Görünüm", "standard_version" => "Standart Görünüm", "page_load_time" => "Sayfa yükleme süresi %.2f ms", "wrong_pass" => "Hatalı kullanıcı adı veya parola", "username" => "Kullanıcı Adı", "log_in" => "Giriş Yap", "upload_type_not_allowed" => "Bu dosya türünün yüklenmesine izin verilmiyor.", "del" => "Sil", "log_out" => "Çıkış Yap", "customized_by" => "Customized by", "theme" => "Tema", "language" => "Dil"
);

// 繁體中文(Traditional Chinese)
$_TRANSLATIONS["zh_TW"] = array(
	"file_name" => "檔案名稱", "size" => "大小", "last_changed" => "最後修改", "total_used_space" => "總計使用空間", "free_space" => "剩餘空間", "password" => "密碼", "upload" => "上傳檔案", "failed_upload" => "上傳失敗", "failed_move" => "移動失敗", "wrong_password" => "密碼錯誤", "make_directory" => "建立資料夾", "new_dir_failed" => "建立目錄失敗", "chmod_dir_failed" => "修改目錄權限失敗", "unable_to_read_dir" => "無法讀取目錄", "location" => "路徑", "root" => "根目錄", "log_file_permission_error" => "日誌檔案權限錯誤", "upload_not_allowed" => "禁止上傳", "upload_dir_not_writable" => "上傳目錄不可寫入", "mobile_version" => "行動版", "standard_version" => "標準版", "page_load_time" => "頁面載入時間：%.2f ms", "wrong_pass" => "密碼錯誤", "username" => "帳號", "log_in" => "登入", "log_out" => "登出", "upload_type_not_allowed" => "禁止上傳此檔案類型", "del" => "刪除", "customized_by" => "客製化設計：", "theme" => "切換主題", "language" => "語言"
);

// 日語
$_TRANSLATIONS["jp"] = array(
	"file_name" => "ファイル名", "size" => "サイズ", "last_changed" => "最終更新", "total_used_space" => "使用容量合計", "free_space" => "空き容量", "password" => "パスワード", "upload" => "アップロード", "failed_upload" => "アップロードに失敗しました", "failed_move" => "移動に失敗しました", "wrong_password" => "パスワードが間違っています", "make_directory" => "フォルダ作成", "new_dir_failed" => "ディレクトリの作成に失敗しました", "chmod_dir_failed" => "ディレクトリ権限の変更に失敗しました", "unable_to_read_dir" => "ディレクトリを読み込めません", "location" => "パス", "root" => "ルート", "log_file_permission_error" => "ログファイルに書き込む権限がありません", "upload_not_allowed" => "このディレクトリではアップロードが許可されていません", "upload_dir_not_writable" => "このディレクトリには書き込み権限がありません", "mobile_version" => "モバイル表示", "standard_version" => "標準表示", "page_load_time" => "ページ読み込み時間：%.2f ms", "wrong_pass" => "ユーザー名またはパスワードが違います", "username" => "ユーザー名", "log_in" => "ログイン", "upload_type_not_allowed" => "このファイル形式はアップロードできません", "del" => "削除", "log_out" => "ログアウト", "customized_by" => "カスタマイズ：", "theme" => "テーマ", "language" => "言語"
);

// Tiếng Việt
$_TRANSLATIONS["vn"] = array(
	"file_name" => "Tên tệp", "size" => "Kích thước", "last_changed" => "Cập nhật lần cuối", "total_used_space" => "Tổng dung lượng đã dùng", "free_space" => "Dung lượng trống", "password" => "Mật khẩu", "upload" => "Tải lên", "failed_upload" => "Tải lên thất bại", "failed_move" => "Di chuyển thất bại", "wrong_password" => "Sai mật khẩu", "make_directory" => "Tạo thư mục", "new_dir_failed" => "Tạo thư mục thất bại", "chmod_dir_failed" => "Thay đổi quyền thư mục thất bại", "unable_to_read_dir" => "Không thể đọc thư mục", "location" => "Đường dẫn", "root" => "Thư mục gốc", "log_file_permission_error" => "Lỗi quyền truy cập tệp nhật ký", "upload_not_allowed" => "Không cho phép tải lên", "upload_dir_not_writable" => "Thư mục tải lên không có quyền ghi", "mobile_version" => "Giao diện di động", "standard_version" => "Giao diện tiêu chuẩn", "page_load_time" => "Thời gian tải trang: %.2f ms", "wrong_pass" => "Sai mật khẩu", "username" => "Tên người dùng", "log_in" => "Đăng nhập", "log_out" => "Đăng xuất", "upload_type_not_allowed" => "Không cho phép tải lên loại tệp này", "del" => "Xóa", "customized_by" => "Tùy chỉnh bởi", "theme" => "Chủ đề", "language" => "Ngôn ngữ"
);

// 简体中文(Simplified Chinese)
$_TRANSLATIONS["zh_CN"] = array(
	"file_name" => "文件名", "size" => "大小", "last_changed" => "最后修改", "total_used_space" => "总计使用空间", "free_space" => "剩余空间", "password" => "密码", "upload" => "上传", "failed_upload" => "上传失败", "failed_move" => "移动失败", "wrong_password" => "密码错误", "make_directory" => "创建目录", "new_dir_failed" => "创建目录失败", "chmod_dir_failed" => "修改目录权限失败", "unable_to_read_dir" => "无法读取目录", "location" => "路径", "root" => "根目录", "log_file_permission_error" => "日志文件权限错误", "upload_not_allowed" => "禁止上传", "upload_dir_not_writable" => "上传目录不可写", "mobile_version" => "移动版本", "standard_version" => "标准版本", "page_load_time" => "页面载入时间：%.2f ms", "wrong_pass" => "密码错误", "username" => "用户名", "log_in" => "登录", "log_out" => "注销", "upload_type_not_allowed" => "禁止上传该文件类型", "del" => "删除", "customized_by" => "定制：", "theme" => "切换主题", "language" => "语言"
);


/***************************************************************************/
/* SYSTEM CLASSES                                                          */
/***************************************************************************/

class ImageServer
{
	public static function showImage()
	{
		if(isset($_GET['thumb']))
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
			exit;
		}
		else
		{
			header('ETag: "'.$etag.'"');
			header('Last-Modified: '.$mtime);
			header('Content-Type: image/png');
			$image = ImageServer::createThumbnail($file);
			if($image){
				imagepng($image);
				imagedestroy($image);
			}
			exit;
		}
	}
	
	public static function isAllowedToOpenPath($file)
	{
		global $_CONFIG;
		if(realpath($file) && str_starts_with(realpath($file), realpath($_CONFIG['starting_dir'])))
			return true;
		return false;
	}

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

class Dir
{
	public $name;
	public $location;
	public $modTime;

	function __construct($name, $location)
	{
		$this->name = $name;
		$this->location = $location;
		$this->modTime = filemtime($this->location->getDir(true, false, false, 0).$this->getName());
	}

	function getName() { return $this->name; }
	function getNameHtml() { return htmlspecialchars($this->name); }
	function getNameEncoded() { return rawurlencode($this->name); }
	function getModTime() { return $this->modTime; }
}

class File
{
	public $name;
	public $location;
	public $size;
	public $type;
	public $modTime;

	function __construct($name, $location)
	{
		$this->name = $name;
		$this->location = $location;

		$this->type = File::getFileType($this->location->getDir(true, false, false, 0).$this->getName());
		$this->size = File::getFileSize($this->location->getDir(true, false, false, 0).$this->getName());
		$this->modTime = filemtime($this->location->getDir(true, false, false, 0).$this->getName());
	}

	function getName() { return $this->name; }
	function getNameEncoded() { return rawurlencode($this->name); }
	function getNameHtml() { return htmlspecialchars($this->name); }
	function getSize() { return $this->size; }
	function getType() { return $this->type; }
	function getModTime() { return $this->modTime; }

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

	function init()
	{
		if(!isset($_GET['dir']) || !is_scalar($_GET['dir']) || strlen($_GET['dir']) == 0)
			$this->path = $this->splitPath(EncodeExplorer::getConfig('starting_dir'));
		else
			$this->path = $this->splitPath($_GET['dir']);
	}

	function isSubDir($checkPath)
	{
		for($i = 0; $i < count($this->path); $i++)
		{
			if(strcmp($this->getDir(true, false, false, $i), $checkPath) == 0)
				return true;
		}
		return false;
	}

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
			if(is_writable($file)) return true;
			else return false;
		}
		else if(Location::isDirWritable(dirname($file))) return true;
		else return false;
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

	function init()
	{
		global $_TRANSLATIONS;

		$this->sort_by = (isset($_GET['sort_by']) && in_array($_GET['sort_by'], array('name', 'size', 'mod'))) ? $_GET['sort_by'] : 'name';
		$this->sort_as = (isset($_GET['sort_as']) && in_array($_GET['sort_as'], array('asc', 'desc'))) ? $_GET['sort_as'] : 'asc';

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

		$img = ($this->sort_as == "asc") ? "<i class=\"bi bi-chevron-up ms-1\"></i>" : "<i class=\"bi bi-chevron-down ms-1\"></i>";
		$img = ($this->sort_by == $sort_by) ? $img : "";

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
			if($this->mobile == false) $link .= "m&amp;";
			else $link .= "s&amp;";
		}
		else if($this->mobile == true && EncodeExplorer::getConfig("mobile_enabled") == true && EncodeExplorer::getConfig("mobile_default") == false)
			$link .= "m&amp;";
		else if($this->mobile == false && EncodeExplorer::getConfig("mobile_enabled") == true && EncodeExplorer::getConfig("mobile_default") == true)
			$link .= "s&amp;";

		if($logout == true) return "?logout";

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

	function makeLangLink($newLang) {
		$url = "?lang=" . $newLang;
		if (isset($_GET['dir'])) $url .= "&dir=" . rawurlencode($_GET['dir']);
		if (isset($_GET['sort_by'])) $url .= "&sort_by=" . rawurlencode($_GET['sort_by']);
		if (isset($_GET['sort_as'])) $url .= "&sort_as=" . rawurlencode($_GET['sort_as']);
		if (isset($_GET['m'])) $url .= "&m";
		if (isset($_GET['s'])) $url .= "&s";
		return $url;
	}

	function getFileIconClass($type) {
		$type = strtolower($type);
		$map = [
			'pdf' => 'bi-file-earmark-pdf-fill text-danger',
			'doc' => 'bi-file-earmark-word-fill text-primary',
			'docx' => 'bi-file-earmark-word-fill text-primary',
			'xls' => 'bi-file-earmark-excel-fill text-success',
			'xlsx' => 'bi-file-earmark-excel-fill text-success',
			'ppt' => 'bi-file-earmark-ppt-fill text-warning',
			'pptx' => 'bi-file-earmark-ppt-fill text-warning',
			'png' => 'bi-file-earmark-image-fill text-info',
			'jpg' => 'bi-file-earmark-image-fill text-info',
			'jpeg' => 'bi-file-earmark-image-fill text-info',
			'gif' => 'bi-file-earmark-image-fill text-info',
			'zip' => 'bi-file-earmark-zip-fill text-secondary',
			'rar' => 'bi-file-earmark-zip-fill text-secondary',
			'7z' => 'bi-file-earmark-zip-fill text-secondary',
			'tar' => 'bi-file-earmark-zip-fill text-secondary',
			'gz' => 'bi-file-earmark-zip-fill text-secondary',
			'mp3' => 'bi-file-earmark-music-fill text-warning',
			'wav' => 'bi-file-earmark-music-fill text-warning',
			'flac' => 'bi-file-earmark-music-fill text-warning',
			'mp4' => 'bi-file-earmark-play-fill text-danger',
			'mkv' => 'bi-file-earmark-play-fill text-danger',
			'avi' => 'bi-file-earmark-play-fill text-danger',
			'mov' => 'bi-file-earmark-play-fill text-danger',
			'php' => 'bi-filetype-php text-primary',
			'html' => 'bi-filetype-html text-warning',
			'css' => 'bi-filetype-css text-info',
			'js' => 'bi-filetype-js text-warning',
			'json' => 'bi-filetype-json text-success',
			'txt' => 'bi-file-earmark-text-fill text-secondary',
			'md' => 'bi-filetype-md text-secondary'
		];
		return isset($map[$type]) ? $map[$type] : 'bi-file-earmark-fill text-secondary';
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

	public static function cmp_name($a, $b) { return strnatcasecmp($a->name, $b->name); }
	public static function cmp_size($a, $b) { return $a->size <=> $b->size; }
	public static function cmp_mod($a, $b) { return $a->modTime <=> $b->modTime; }

	public static function getLangString($stringName, $lang)
	{
		global $_TRANSLATIONS;
		if(isset($_TRANSLATIONS[$lang]) && is_array($_TRANSLATIONS[$lang]) && isset($_TRANSLATIONS[$lang][$stringName]))
			return $_TRANSLATIONS[$lang][$stringName];
		else if(isset($_TRANSLATIONS["en"]) && isset($_TRANSLATIONS["en"][$stringName]))
			return $_TRANSLATIONS["en"][$stringName];
		else
			return $stringName;
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
		if(!isset($_ERROR) || strlen($_ERROR) == 0)
			$_ERROR = $message;
	}

	function setErrorString($stringName)
	{
		EncodeExplorer::setError($this->getString($stringName));
	}

	function run($location)
	{
		$this->location = $location;
		$this->calculateSpace();
		$this->readDir();
		$this->sort();
		$this->outputHtml();
	}

	function outputHtml()
	{
		global $_ERROR, $_START_TIME, $_TRANSLATIONS;
?>
<!DOCTYPE HTML>
<html lang="<?php print $this->getConfig('lang'); ?>" data-bs-theme="auto">
<head>
	<meta charset="<?php print $this->getConfig('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(EncodeExplorer::getConfig('main_title') != null) print EncodeExplorer::getConfig('main_title'); ?></title>
	
	<link id="bs-theme-stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	
	<style>
		.file-icon { font-size: 1.5rem; line-height: 1; }
		#thumb { position: absolute; display: none; border: 1px solid var(--bs-border-color); background: var(--bs-body-bg); padding: 4px; border-radius: 4px; z-index: 1050; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
		.navbar-form-inline .form-control { width: 140px; }
		@media (max-width: 992px) { .navbar-form-inline .form-control { width: 100%; margin-bottom: 0.5rem; } }
	</style>

	<script>
		// Setup Themes Logic Before Render
		const themes = {
			'default': { url: 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', autoToggle: true },
			'cerulean': { url: 'https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/cerulean/bootstrap.min.css', autoToggle: false },
			'cosmo': { url: 'https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/cosmo/bootstrap.min.css', autoToggle: false },
			'flatly': { url: 'https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/flatly/bootstrap.min.css', autoToggle: false },
			'darkly': { url: 'https://cdn.jsdelivr.net/npm/bootswatch@5.3.2/dist/darkly/bootstrap.min.css', autoToggle: false }
		};

		const savedTheme = localStorage.getItem('site_theme') || 'default';
		if(themes[savedTheme]) {
			document.getElementById('bs-theme-stylesheet').setAttribute('href', themes[savedTheme].url);
		}
		
		const getPreferredBsTheme = () => {
			if (localStorage.getItem('bs_theme_mode')) return localStorage.getItem('bs_theme_mode');
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
		};
		
		if(themes[savedTheme] && themes[savedTheme].autoToggle) {
			document.documentElement.setAttribute('data-bs-theme', getPreferredBsTheme());
		} else if (savedTheme === 'darkly') {
			document.documentElement.setAttribute('data-bs-theme', 'dark');
		} else {
			document.documentElement.setAttribute('data-bs-theme', 'light');
		}
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

<nav class="navbar navbar-expand-lg bg-body shadow-sm mb-4 border-bottom">
	<div class="container-fluid px-4">
		<?php if(EncodeExplorer::getConfig('show_top') == true): ?>
		<a class="navbar-brand fw-bold text-primary" href="<?php print $this->makeLink(false, false, null, null, null, ""); ?>">
			<i class="bi bi-folder2-open"></i> <?php if(EncodeExplorer::getConfig('main_title') != null) print EncodeExplorer::getConfig('main_title'); ?>
		</a>
		<?php endif; ?>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="topNavBar">
			<ul class="navbar-nav ms-auto align-items-lg-center">
				
				<li class="nav-item dropdown me-2">
					<a class="nav-link dropdown-toggle" href="#" id="themeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-palette"></i> <?php print $this->getString("theme"); ?>
					</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="themeDropdown">
						<li><a class="dropdown-item theme-switch" href="#" data-theme="default"><i class="bi bi-circle-half me-2"></i> Default (Auto)</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item theme-switch" href="#" data-theme="cerulean"><i class="bi bi-circle-fill text-info me-2"></i> Cerulean</a></li>
						<li><a class="dropdown-item theme-switch" href="#" data-theme="cosmo"><i class="bi bi-circle-fill text-primary me-2"></i> Cosmo</a></li>
						<li><a class="dropdown-item theme-switch" href="#" data-theme="flatly"><i class="bi bi-circle-fill text-success me-2"></i> Flatly</a></li>
						<li><a class="dropdown-item theme-switch" href="#" data-theme="darkly"><i class="bi bi-circle-fill text-dark me-2"></i> Darkly</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown me-3">
					<a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-globe"></i> <?php print strtoupper($this->lang); ?>
					</a>
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
						<?php foreach($_TRANSLATIONS as $code => $trans): ?>
						<li><a class="dropdown-item <?php echo ($this->lang == $code) ? 'active' : ''; ?>" href="<?php print $this->makeLangLink($code); ?>"><?php echo strtoupper($code); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</li>

				<?php if(GateKeeper::isUserLoggedIn()): ?>
					<li class="nav-item me-3 text-muted d-flex align-items-center">
						<i class="bi bi-person-circle me-1"></i> <?php print GateKeeper::getUserName(); ?>
					</li>
					<li class="nav-item">
						<a href="<?php print $this->makeLink(false, true, null, null, null, ""); ?>" class="btn btn-outline-danger btn-sm w-100 mt-2 mt-lg-0">
							<i class="bi bi-box-arrow-right"></i> <?php print $this->getString("log_out"); ?>
						</a>
					</li>
				<?php elseif(GateKeeper::showLoginBox() && GateKeeper::isAccessAllowed()): ?>
					<li class="nav-item mt-3 mt-lg-0">
						<form class="d-flex flex-column flex-lg-row align-items-lg-center navbar-form-inline" method="post" action="<?php print $this->makeLink(false, false, null, null, null, ""); ?>">
							<?php 
							$require_username = false;
							foreach(EncodeExplorer::getConfig("users") as $user){
								if($user[0] != null && strlen($user[0]) > 0){
									$require_username = true; break;
								}
							}
							if($require_username): ?>
							<input type="text" name="user_name" class="form-control form-control-sm me-lg-2 mb-2 mb-lg-0" placeholder="<?php print $this->getString("username"); ?>" required />
							<?php endif; ?>
							<input type="password" name="user_pass" class="form-control form-control-sm me-lg-2 mb-2 mb-lg-0" placeholder="<?php print $this->getString("password"); ?>" required />
							<button type="submit" class="btn btn-primary btn-sm text-nowrap"><i class="bi bi-box-arrow-in-right"></i> <?php print $this->getString("log_in"); ?></button>
						</form>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>

<div class="container-fluid px-4">
	<?php if(isset($_ERROR) && strlen($_ERROR) > 0): ?>
		<div class="alert alert-danger shadow-sm border-0" role="alert"><i class="bi bi-exclamation-triangle-fill"></i> <?php print $_ERROR; ?></div>
	<?php endif; ?>

	<?php 
	if(!GateKeeper::isAccessAllowed()) {
		// Public Login Prompt if required
		?>
		<div class="d-flex justify-content-center mt-5">
			<div class="card shadow border-0" style="width: 100%; max-width: 400px;">
				<div class="card-header bg-primary text-white text-center py-3">
					<h5 class="mb-0"><i class="bi bi-lock-fill"></i> <?php print $this->getString("log_in"); ?></h5>
				</div>
				<div class="card-body p-4">
					<form method="post" action="<?php print $this->makeLink(false, false, null, null, null, ""); ?>">
						<?php 
						$require_username = false;
						foreach(EncodeExplorer::getConfig("users") as $user){
							if($user[0] != null && strlen($user[0]) > 0){
								$require_username = true; break;
							}
						}
						if($require_username): ?>
						<div class="mb-3">
							<label class="form-label"><?php print $this->getString("username"); ?></label>
							<input type="text" name="user_name" class="form-control" required />
						</div>
						<?php endif; ?>
						<div class="mb-4">
							<label class="form-label"><?php print $this->getString("password"); ?></label>
							<input type="password" name="user_pass" class="form-control" required />
						</div>
						<button type="submit" class="btn btn-primary w-100 py-2"><?php print $this->getString("log_in"); ?></button>
					</form>
				</div>
			</div>
		</div>
		<?php
	} else { 
	?>
	
	<?php if($this->mobile == false && EncodeExplorer::getConfig("show_path") == true): ?>
	<nav aria-label="breadcrumb" class="bg-body p-3 rounded shadow-sm mb-3 border">
		<ol class="breadcrumb mb-0">
			<li class="breadcrumb-item"><a href="?dir=" class="text-decoration-none fw-semibold"><i class="bi bi-house-door-fill"></i> <?php print $this->getString("root"); ?></a></li>
			<?php
			for($i = 0; $i < count($this->location->path); $i++) {
				$link = $this->makeLink(false, false, null, null, null, $this->location->getDir(false, true, false, count($this->location->path) - $i - 1));
				print '<li class="breadcrumb-item"><a href="'.$link.'" class="text-decoration-none">'.$this->location->getPathLink($i, true).'</a></li>';
			}
			?>
		</ol>
	</nav>
	<?php endif; ?>

	<?php if(GateKeeper::isAccessAllowed() && $this->location->uploadAllowed() && (GateKeeper::isUploadAllowed() || GateKeeper::isNewdirAllowed())): ?>
	<div class="card shadow-sm mb-3 border-0 bg-body">
		<div class="card-body p-3 d-flex flex-column flex-md-row gap-3">
			<?php if(GateKeeper::isNewdirAllowed()): ?>
			<form enctype="multipart/form-data" method="post" class="flex-grow-1">
				<div class="input-group input-group-sm">
					<input name="userdir" type="text" class="form-control" placeholder="<?php print $this->getString("make_directory"); ?>" required />
					<button type="submit" class="btn btn-success"><i class="bi bi-folder-plus"></i> <span class="d-none d-sm-inline"><?php print $this->getString("make_directory"); ?></span></button>
				</div>
			</form>
			<?php endif; ?>

			<?php if(GateKeeper::isUploadAllowed()): ?>
			<form enctype="multipart/form-data" method="post" class="flex-grow-1">
				<div class="input-group input-group-sm">
					<input name="userfile" type="file" class="form-control" required />
					<button type="submit" class="btn btn-primary"><i class="bi bi-cloud-upload"></i> <span class="d-none d-sm-inline"><?php print $this->getString("upload"); ?></span></button>
				</div>
			</form>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="card shadow-sm mb-4 border">
		<div class="table-responsive">
			<table class="table table-hover align-middle mb-0">
				<thead class="table-light border-bottom">
					<tr>
						<th scope="col" class="text-center" style="width: 50px;"></th>
						<th scope="col" class="text-nowrap"><?php print $this->makeArrow("name");?></th>
						<?php if($this->mobile == false): ?>
						<th scope="col" class="text-end d-none d-md-table-cell text-nowrap"><?php print $this->makeArrow("size"); ?></th>
						<th scope="col" class="text-center d-none d-md-table-cell text-nowrap"><?php print $this->makeArrow("mod"); ?></th>
						<?php endif; ?>
						<?php if($this->mobile == false && GateKeeper::isDeleteAllowed()): ?>
						<th scope="col" class="text-center" style="width: 60px;"><i class="bi bi-trash"></i></th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center"><i class="bi bi-arrow-90deg-up text-secondary fs-5"></i></td>
						<td colspan="<?php print ($this->mobile == true ? 1 : (GateKeeper::isDeleteAllowed() ? 4 : 3)); ?>">
							<a href="<?php print $this->makeLink(false, false, null, null, null, $this->location->getDir(false, true, false, 1)); ?>" class="text-decoration-none fw-bold text-body d-block py-1">..</a>
						</td>
					</tr>
					<?php
					if($this->dirs) {
						foreach ($this->dirs as $dir) {
							print "<tr>";
							print "<td class=\"text-center\"><i class=\"bi bi-folder-fill text-warning fs-4 file-icon\"></i></td>";
							print "<td><a href=\"".$this->makeLink(false, false, null, null, null, $this->location->getDir(false, true, false, 0).$dir->getNameEncoded())."\" class=\"text-decoration-none text-body fw-semibold d-block py-1\">".$dir->getNameHtml()."</a></td>";
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
							print "<td class=\"text-center\"><i class=\"bi ".$this->getFileIconClass($file->getType())." fs-4 file-icon\"></i></td>";
							
							$fileLink = $this->location->getDir(false, true, false, 0).$file->getNameEncoded();
							$target = (EncodeExplorer::getConfig('open_in_new_window')) ? 'target="_blank"' : '';
							$download = (EncodeExplorer::getConfig('force_download')) ? 'download' : '';
							$thumbClass = ($file->isValidForThumb()) ? 'thumb' : '';
							
							print "<td><a href=\"$fileLink\" $target class=\"text-decoration-none text-body file d-block py-1 $thumbClass\" $download>".$file->getNameHtml();
							if($this->mobile) print " <span class=\"badge bg-secondary ms-2 fw-normal\">".$this->formatSize($file->getSize())."</span>";
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

	<div class="text-center text-muted small mt-5 border-top pt-4">
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
		<a href="http://encode-explorer.siineiolekala.net" class="text-decoration-none text-muted fw-semibold" target="_blank">Encode Explorer v7.0.0</a> 
		<br class="d-sm-none">
		<span class="d-none d-sm-inline"> | </span> 
		<?php print $this->getString("customized_by"); ?> <a href="https://yucdu.com" target="_blank" class="text-decoration-none text-primary fw-semibold">YucDu</a>
	</div>

	<?php } // End of access allowed else ?>
</div>

<script>
	// Theme Switcher Controller
	document.addEventListener('DOMContentLoaded', () => {
		const themeLinks = document.querySelectorAll('.theme-switch');
		
		themeLinks.forEach(link => {
			link.addEventListener('click', (e) => {
				e.preventDefault();
				const selectedTheme = link.getAttribute('data-theme');
				localStorage.setItem('site_theme', selectedTheme);
				
				if(themes[selectedTheme]) {
					document.getElementById('bs-theme-stylesheet').setAttribute('href', themes[selectedTheme].url);
					if(themes[selectedTheme].autoToggle) {
						document.documentElement.setAttribute('data-bs-theme', window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
					} else {
						document.documentElement.setAttribute('data-bs-theme', selectedTheme === 'darkly' ? 'dark' : 'light');
					}
				}
			});
		});

		// Listen for system theme changes if using default auto
		window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
			const activeTheme = localStorage.getItem('site_theme') || 'default';
			if(themes[activeTheme] && themes[activeTheme].autoToggle) {
				document.documentElement.setAttribute('data-bs-theme', event.matches ? 'dark' : 'light');
			}
		});
	});
</script>

</body>
</html>
<?php
	}
}

// System Activation
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
